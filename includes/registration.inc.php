<?php
if (isset($_POST["submit"])) {

    $uname = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["cpassword"];

    require_once './functions.inc.php';

    $conn = oci_pconnect("SYSTEM", "password", "192.168.1.167/XE");

    if (emptyInputSignup($uname, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../registration.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($uname) !== false) {
        header("location: ../registration.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../registration.php?error=invalidemail");
        exit();
    }
    if (invalidPassword($pwd) !== false) {
        header("location: ../registration.php?error=invalidpwd");
        exit();
    }
    if (passwordMismatch($pwd, $pwdRepeat) !== false) {
        header("location: ../registration.php?error=passwordmismatch");
        exit();
    }
    if (userExists($conn, $uname, $email) !== false) {
        header("location: ../registration.php?error=userexists");
        exit();
    }

    createUser($conn, $uname, $email, $pwd);
    loginUser($conn, $uname, $pwd);
} else {
    header("location: ../registration.php");
    exit();
}
