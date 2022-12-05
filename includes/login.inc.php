<?php

if (isset($_POST["submit"])) {
    $uname = $_POST["username"];
    $pwd = $_POST["password"];

    require_once './functions.inc.php';
    
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");

    if(emptyInputLogin($conn, $uname, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $uname, $pwd);
} else {
    header("location: ../login.php");
    exit();
}