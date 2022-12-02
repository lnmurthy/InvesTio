<?php
session_start();
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="index.php" class="navbar-brand">InvesTio</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="lessons.php" class="nav-link"> Lessons</a>
                </li>
                <li class="nav-item">
                    <a href="quiz.php" class="nav-link"> Quizzes</a>
                </li>
                <li class="nav-item">
                    <a href="feedback.php" class="nav-link"> Feedback</a>
                </li>

                <?php
                if(!isset($_SESSION["userid"])) {
                    echo "<li class='nav-item'> <a href='login.php' class='nav-link'> Log In</a> </li>";
                    echo "<li class='nav-item'> <a href='registration.php' class='nav-link'> Register</a> </li>";
                } else {
                    echo "<li class='nav-item'> <a href='profile.php' class='nav-link'> Profile</a> </li>";
                    echo "<li class='nav-item'> <a href='signout.php' class='nav-link'> Sign Out</a> </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>