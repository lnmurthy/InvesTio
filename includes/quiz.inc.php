<?php
session_start();

if (isset($_POST["submit"])) {
    $quiz_id = $_GET["quiz_id"];
    $q1 = $_POST["question1"];
    $q2 = $_POST["question2"];
    $q3 = $_POST["question3"];
    $q4 = $_POST["question4"];

    require_once './functions.inc.php';

    $avg = scoreQuiz($quiz_id, $q1, $q2, $q3, $q4);
    if (isset($_SESSION["username"])) {
        logQuiz($quiz_id, $avg);
    }
    header("location: ../quiz.php?score=".$avg."&quiz=".$quiz_id."&submit=1");
    exit();
} else {
    header("location: ../quiz.php");
    exit();
}
