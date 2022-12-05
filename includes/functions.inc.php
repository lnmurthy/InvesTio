<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

function emptyInputSignup($uname, $email, $pwd, $pwdRepeat)
{
    $result = false;
    if (
        empty($uname) || empty($email) ||
        empty($pwd) || empty($pwdRepeat)
    ) {
        $result = true;
    }
    return $result;
}

function emptyInputLogin($uname, $pwd)
{
    $result = false;
    if (empty($uname) || empty($pwd)) {
        $result = true;
    }
    return $result;
}

function invalidUsername($uname)
{
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
        $result = true;
    }
    return $result;
}

function invalidPassword($pwd)
{
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $pwd) || strlen($pwd) < 8) {
        $result = true;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    return $result;
}

function passwordMismatch($pwd, $pwdRepeat)
{
    $result = false;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    return $result;
}

function userExists($conn, $uname, $email)
{
    $result = false;
    $sql = "SELECT * FROM users WHERE username = :uname_bv OR user_email = :email_bv";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":uname_bv", $uname, -1);
    oci_bind_by_name($s, ":email_bv", $email, -1);
    oci_execute($s);
    oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
    if (count($res)) {
        $result = true;
    }
    return $result;
}

function createUser($conn, $uname, $email, $pwd)
{
    $sql = "INSERT INTO users 
                (username, password_hash, user_email)
            VALUES
                (:uname_bv, :phash_bv, :email_bv)";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":uname_bv", $uname, -1);
    oci_bind_by_name($s, ":email_bv", $email, -1);
    $phash = md5($pwd);
    oci_bind_by_name($s, ":phash_bv", $phash, -1);
    oci_execute($s);

    addEmail($conn, $email);
}

function addEmail($conn, $email)
{
    if (invalidEmail($email)) {
        header("location: ../index.php?msg=bademail");
        exit();
    }
    // Test if the email is already in the newsletter
    $sql = "SELECT * FROM NEWSLETTER_EMAIL WHERE EMAIL_ADDRESS = :email_address";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":email_address", $email, -1);
    oci_execute($s);
    oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
    // Add email if not in already
    if (count($res) == 0) {
        $sql = "INSERT INTO NEWSLETTER_EMAIL(EMAIL_ADDRESS)
                VALUES (:email_address)";
        $s = oci_parse($conn, $sql);
        oci_bind_by_name($s, ":email_address", $email, -1);
        oci_execute($s);
    }
}

function handleQuizArrival($lesson)
{
    if (isset($_POST['submit'])) {
        if (isset($_SESSION["username"])) {
            if (!validQuiz($lesson)) {
                completeLesson($lesson);
            }
        }
    } else {
        if (!validQuiz($lesson)) {
            header("location: ./lesson_" . $lesson . ".php?msg=redirect");
            exit();
        };
    }
}

function loginUser($conn, $uname, $pwd)
{
    $sql = "SELECT * FROM users WHERE username = :uname_bv AND password_hash = :phash_bv";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":uname_bv", $uname, -1);
    $phash = md5($pwd);
    oci_bind_by_name($s, ":phash_bv", $phash, -1);
    oci_execute($s);
    oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (count($res) === 0) {
        header("location: ../login.php?error=badcreds");
        exit();
    }

    session_start();
    $_SESSION["userid"] = $res[0]["USER_ID"];
    $_SESSION["username"] = $res[0]["USERNAME"];

    header("location: ../index.php");
    exit();
}

function validQuiz($lesson_name)
{
    $res = [];
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");
    if (isset($_SESSION["username"])) {
        $user_id_bv = $_SESSION["userid"];
        $lesson_name_bv = $lesson_name;
        $sql = "SELECT * FROM COMPLETE_LESSON WHERE USER_ID = :user_id_bv AND LESSON_NAME = :lesson_name_bv";
        $s = oci_parse($conn, $sql);
        oci_bind_by_name($s, ":user_id_bv", $user_id_bv, -1);
        oci_bind_by_name($s, ":lesson_name_bv", $lesson_name_bv, -1);
        oci_execute($s);
        oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
    }
    if (count($res) === 0) {
        return false;
    }
    return true;
}

function completeLesson($lesson_name)
{
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");

    // Log results in DB
    $sql = "INSERT INTO COMPLETE_LESSON(LESSON_NAME, USER_ID) VALUES (:lesson_name, :user_id)";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":lesson_name", $lesson_name, -1);
    oci_bind_by_name($s, ":user_id", $_SESSION["userid"], -1);
    oci_execute($s);
}

function logQuiz($conn, $quiz_id, $score, $user_id)
{

    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");
    // Log results in DB
    $sql = "INSERT INTO QUIZ_RESULT(QUIZ_ID, USER_ID, SCORE) VALUES (:quiz_id, :user_id, :score)";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":quiz_id", $quiz_id, -1);
    oci_bind_by_name($s, ":user_id", $user_id, -1);
    oci_bind_by_name($s, ":score", $score, -1);

    return oci_execute($s) ? 1 : 0;
}

function scoreQuiz($conn, $quiz_id, $q1, $q2, $q3, $q4)
{
    // Fetch quiz
    $sql = "SELECT * FROM QUIZ WHERE QUIZ_ID = :quiz_id";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":quiz_id", $quiz_id, -1);
    oci_execute($s);
    oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    // Compare results
    $qs = $res[0];
    $q1res = ($qs["QUESTION1"] == $q1) ? 1 : 0;
    $q2res = ($qs["QUESTION2"] == $q2) ? 1 : 0;
    $q3res = ($qs["QUESTION3"] == $q3) ? 1 : 0;
    $q4res = ($qs["QUESTION4"] == $q4) ? 1 : 0;

    return ($q1res + $q2res + $q3res + $q4res);
}

function insertFeedback($conn, $feedback_type, $userid, $username, $subject, $textbox)
{
    $sql = null;
    $s = null;
    if ($userid == null) {
        $sql = "INSERT INTO FEEDBACK_(TYPE, FEEDBACK, SUBJECT, USERNAME) VALUES (:type, :feedback, :subject, :username)";
        $s = oci_parse($conn, $sql);
    } else {
        $sql = "INSERT INTO FEEDBACK_(USER_ID, TYPE, FEEDBACK, SUBJECT, USERNAME) VALUES (:userid, :type, :feedback, :subject, :username)";
        $s = oci_parse($conn, $sql);
        oci_bind_by_name($s, ":userid", $userid, -1);
    }
    oci_bind_by_name($s, ":type", $feedback_type, -1);
    oci_bind_by_name($s, ":feedback", $textbox, -1);
    oci_bind_by_name($s, ":subject", $subject, -1);
    oci_bind_by_name($s, ":username", $username, -1);

    return oci_execute($s);
}

function getLessonProgress($userid)
{
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");

    $sql = "SELECT * FROM COMPLETE_LESSON WHERE USER_ID = :userid";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":userid", $userid, -1);
    oci_execute($s);
    oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    $lesson_progress = count($res);

    return $lesson_progress;
}

function getQuizProgress($userid)
{
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");

    $sql = "SELECT * FROM QUIZ_RESULT WHERE USER_ID = :userid";
    $s = oci_parse($conn, $sql);
    oci_bind_by_name($s, ":userid", $userid, -1);
    oci_execute($s);
    oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    $quiz_progress = count($res);

    return $quiz_progress;
}

function getQuizScore($quizid)
{
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");

    $sql =
        "SELECT MAX(SCORE) AS MAXSCORE 
    FROM QUIZ_RESULT 
    WHERE QUIZ_ID = :quizid AND USER_ID = :userid";

    $s = oci_parse($conn, $sql);

    oci_bind_by_name($s, ":userid", $_SESSION['userid'], -1);
    oci_bind_by_name($s, ":quizid", $quizid, -1);

    oci_execute($s);
    oci_fetch_all($s, $res, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    if (count($res) === 0) {
        return '-';
    }

    return $res[0]['MAXSCORE'];
}

function sendMailer($recipient)
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl'; 

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;

    $mail->Username = '';
    $mail->Password = '';

    $mail->SetFrom('', 'InvesTio');
    $mail->AddAddress($recipient, 'NewUser');

    $mail->Subject = 'Welcome to InvesTio!';
    $mail->Body = 'Prepare to learn!';
    $mail->isHTML(true);
    
    $mail->Send();

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}
