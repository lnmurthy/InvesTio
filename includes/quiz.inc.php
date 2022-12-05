<?php
session_start();

if (isset($_POST["submit"])) {
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");

    $quiz_id = $_GET["quiz_id"];
    $q1 = $_POST["q1_answer"];
    $q2 = $_POST["q2_answer"];
    $q3 = $_POST["q3_answer"];
    $q4 = $_POST["q4_answer"];

    require_once './functions.inc.php';

    $score = scoreQuiz($conn, $quiz_id, $q1, $q2, $q3, $q4);
    $res = 0;
    if (isset($_SESSION["userid"])) {
        $res = logQuiz($conn, $quiz_id, $score, $_SESSION["userid"]);
    }
    header("location: ../quiz.php?score=".$score."&quiz=".$quiz_id."&submit=1");
    exit();
} else {
    header("location: ../quiz.php");
    exit();
}
