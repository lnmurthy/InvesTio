<?php
include_once './header.php';

if (isset($_SESSION["userid"])) {
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
    <div class="logo">
    </div>

    <body>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card border-0 shadow rounded-3 my-5">
                            <div class="card-body p-4 p-sm-5">
                                <h2 class="text-center">Sign In</h2> <br>

                                <form class="text-center" method="POST" action="./includes/login.inc.php">
                                    <div class="grid-item">
                                        <label for="username-lbl">Username</label>
                                    </div>
                                    <div>
                                        <input required id="username" type="text" class="textbox" placeholder="Username" required name="username" />
                                    </div>
                                    <div class="grid-item">
                                        <label for="email">Password </label>
                                    </div>
                                    <div>
                                        <input required id="password" type="password" class="textbox" placeholder="Password" required name="password" />
                                    </div>
                                    <br>
                                    <button class="btn btn-dark btn-login fw-bold" type="submit" name="submit">Sign In</button>

                                    <?php
                                    if (isset($_GET["error"])) {
                                        if ($_GET["error"] == "emptyinput") {
                                            echo "<p>Fill in all fields!</p>";
                                        } else if ($_GET["error"] == "badcreds") {
                                            echo "<p style=color:red>Account does not exist!</p>";
                                        }
                                    }
                                    ?>