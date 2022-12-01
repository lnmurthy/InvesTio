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
        <div class="logo">
            <h1>login here</h1>
        </div>
        <header>
            <div class="container">

            </div>
        </header>
        <br />
        <div class="old-header">
            </header>
            <br />
            <form method="POST" action="./includes/login.inc.php" enctype="application/x-www-form-urlencoded">
                <div class="grid-container">
                    <div class="grid-item">
                        <label for="username-lbl">username</label>
                    </div>
                    <div>
                        <input id="username" type="text" class="textbox" placeholder="Username" required name="username" />
                    </div>

                    <div class="grid-item">
                        <label for="password">password</label>
                    </div>
                    <div>
                        <input id="password2" type="password" class="textbox" placeholder="Password" required name="password" />
                    </div>

                </div>
                <div>
                    <input class="submit" type="submit" value="Submit" name="submit">
                </div>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "invalidcredentials") {
                    echo "<p>Account does not exist!</p>";
                }
            }
            ?>
        </div>
    </body>
</body>
<?php
include_once './footer.php';
?>