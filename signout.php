<?php
include_once './header.php';
?>

<?php
    session_destroy();

    header("location: ./index.php");
    exit();