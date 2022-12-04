<?php
session_start();


if (isset($_POST["submit"])) {
    include_once './functions.inc.php';

    $feedback_type = $_GET["form"];
    $userid = null;
    $username = null;
    $subject = $_POST["subject"];
    $textbox = $_POST["textbox"];
    
    if(isset($_SESSION["username"])) {
        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];
    } else {
        $username = $_POST["username"];
    }

    $conn = oci_pconnect("SYSTEM", "password", "192.168.1.167/XE");
    insertFeedback($conn, $feedback_type, $userid, $username, $subject, $textbox);

    header("location: ../feedback.php?submit=1");
    exit();
} else {
    header("location: ../feedback.php");
    exit();
}
