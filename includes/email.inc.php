<?php
if (isset($_GET["email"])) {
    include_once "./functions.inc.php";
    $conn = oci_pconnect("SYSTEM", "password", "localhost/XE");
    addEmail($conn, $_GET["email"]);
    sendMailer($_GET["email"]);
}

header("location: ../index.php?msg=goodemail");
exit();
