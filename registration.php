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
    <div class="old-header">
        <h2>registration form</h2>
        </header>
        <br />
        <form method="POST" action="./includes/registration.inc.php" enctype="application/x-www-form-urlencoded">
            <div class="grid-container">
                <div class="grid-item">
                    <label for="username-lbl">Username</label>
                </div>
                <div>
                    <input required id="username" type="text" class="textbox" placeholder="Username" required name="username" />
                </div>
                <div class="grid-item">
                    <label for="email">Email </label>
                </div>
                <div>
                    <input required id="email" type="email" class="textbox" placeholder="Email" required name="email" />
                </div>
                <div class="grid-item">
                    <label for="password">Password </label>
                </div>
                <div>
                    <input required id="password2" type="password" class="textbox" placeholder="Password" required name="password" />
                </div>
                <div class="grid-item">
                    <label for="cpassword">Confirm Password </label>
                </div>
                <div>
                    <input required id="cpassword" type="password" class="textbox" required placeholder="Confirm Password" required name="cpassword" />
                </div>
                <label for="check">Make sure you're above 13 y/o</label>
                <input required id="check" type="checkbox">
                <a href="" style="color:#375ebf">Terms of service/privacy rules</a>
                <input required id="tos" type="checkbox">

                <div>
                    <input class="submit" type="submit" value="Submit" name="submit">
                </div>
            </div>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            } else if ($_GET["error"] == "invalidusername") {
                // TODO: check DB for the length
                echo "<p>Username must be x-X characters in length and alphanumeric!</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Enter a valid email!</p>";
            } else if ($_GET["error"] == "passwordmismatch") {
                echo "<p>Passwords do not match!</p>";
            } else if ($_GET["error"] == "userexists") {
                echo "<p>User already exists!</p>";
            } else if ($_GET["error"] == "pwdexists") {
                echo "<p>Must be alphanumeric & > 8 chars!</p>";
            }
        }
        ?>
    </div>
</body>
<?php
include_once './footer.php';
?>