<?php
include_once './header.php';
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
          <h1>Found a<span class="text-warning"> Bug? </span> </h1>
          <p class="lead my-4">
            Uh oh...let's squash it together
          </p>
        </div>
        <br>
  </section>

  <div class="container">
    <form method="POST" action="./includes/feedback.inc.php?form=bug" enctype="application/x-www-form-urlencoded">
      <div class="form-group">
        <label for="name">Start Here</label>
        <?php
        if (!isset($_SESSION["username"])) {
          echo "<input required type='name' class='form-control' name='username' id='name' placeholder='Name*''> <br>";
        }
        ?>

        <input required type="text" class="form-control" id="subject" placeholder="Subject*" name="subject"> <br>
        <input type="text" class="form-control" id="textbox" placeholder="Add as many details as possible!" name="textbox"> <br>

        <button type="submit" name="submit">Submit</button>

      </div>

    </form>
  </div>