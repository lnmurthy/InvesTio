<?php
include_once './header.php';
if (!isset($_SESSION["userid"])) {
    header("location: ./index.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InvesTio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- Showcase -->
    <section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Your<span class="text-warning"> Profile</span></h1>
                    <p class="lead my-4">
                        View your progress and see how you're doing
                    </p>
                    <h2><small>Progression</small> </h2>
                </div>
                <br>
    </section>
    <!-- total progress -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">Lesson Progress</h3>
                            <p class="card-text">
                                Your progress through the lessons:
                            </p>
                            <p>
                                You have completed
                                <?php
                                include_once "./includes/functions.inc.php";
                                echo " " . getLessonProgress($_SESSION["userid"]) . " ";
                                ?>
                                out of 3 lessons
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-3">Quiz Progress</h3>
                            <p class="card-text">
                                Your progress through the quizzes:
                            </p>
                            <p>
                                You have completed
                                <?php
                                include_once "./includes/functions.inc.php";
                                echo " " . getQuizProgress($_SESSION["userid"]) . " ";
                                ?>
                                out of 3 quizzes
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- quiz results  -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">Quiz 1</h3>
                            <p class="card-text">
                                You scored
                                <?php
                                include_once "./includes/functions.inc.php";
                                echo " " . getQuizScore(1) . "/4";
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-3">Quiz 2</h3>
                            <p class="card-text">
                                You scored
                                <?php
                                include_once "./includes/functions.inc.php";
                                echo " " . getQuizScore(2) . "/4";
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-3">Quiz 3</h3>
                            <p class="card-text">
                                You scored
                                <?php
                                include_once "./includes/functions.inc.php";
                                echo " " . getQuizScore(3) . "/4";
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>