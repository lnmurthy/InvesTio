<?php

if (isset($_POST["submit"])) {
    $userid = isset($_SESSION["userid"]) ? $_SESSION["userid"] : -1;
    $feedback = $_POST["feedback"];
    $type = $_POST["type"];

    $conn = oci_pconnect("SYSTEM", "password", "192.168.1.167/XE");
    insertFeedback($conn, $userid, $type, $feedback);

    header("location: ../feedback.php?msg=success");
    exit();
} else {
    header("location: ../feedback.php");
    exit();
}
