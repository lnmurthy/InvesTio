<?php
if (isset($_GET["email"])) {
    include_once "./functions.inc.php";
    $conn = oci_pconnect("SYSTEM", "password", "192.168.1.167/XE");
    addEmail($conn, $_GET["email"]);
}

header("location: ../index.php?msg=goodemail");
exit();
