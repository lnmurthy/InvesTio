<?php
include_once './header.php';
?>

<!doctype html>
<html lang="en">

<head>
  <style>
    /* for snackbar */
    #snackbar {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: rgb(128, 252, 178);
      color: #333;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 17px;
    }

    #snackbar.show {
      visibility: visible;
      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }

      to {
        bottom: 30px;
        opacity: 1;
      }
    }

    @keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }

      to {
        bottom: 30px;
        opacity: 1;
      }
    }

    @-webkit-keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }

      to {
        bottom: 0;
        opacity: 0;
      }
    }

    @keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }

      to {
        bottom: 0;
        opacity: 0;
      }
    }
  </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>InvesTio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="./css/quiz.css" rel="stylesheet">

</head>

<body>
  <section id="instructors" class="p-5 bg-dark">
    <div class="container">
      <h2 class="text-center text-white">Test <danger>Yourself</danger>
      </h2>
      <p class="lead text-center text-white mb-5">
        Our quizzes are structured for beginners
      </p>
      <?php
      if (isset($_GET["score"])) {
        echo "You scored " . $_GET["score"] . " on quiz " . $_GET["quiz"] . "!";
      }
      ?>
      <section class="p-5">
        <div class="container">
          <div class="row text-center g-4">
            <div class="col-md">
              <div class="card bg-secondary text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-laptop"></i>
                  </div>
                  <a href="./lesson_one.php" class="nav-link">
                    <h4>Why Invest?</h4>
                  </a>
                  <p class="card-text">
                    What is the advantage of investing?
                  </p>
                  <a href="./quiz1.php" class="btn btn-primary">Take Quiz 1</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card bg-secondary text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-person-square"></i>
                  </div>
                  <a href="./lesson_two.php" class="nav-link">
                    <h4>Account Types</h4>
                  </a>
                  <p class="card-text">
                    Learn what types of accounts you can open
                  </p>
                  <a href="./quiz2.php" class="btn btn-primary">Take Quiz 2</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card bg-secondary text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-people"></i>
                  </div>
                  <a href="./lesson_three.php" class="nav-link">
                    <h4>Investment Types</h4>
                  </a>
                  <p class="card-text">
                    What does one invest in?
                  </p>
                  <a href="./quiz3.php" class="btn btn-primary">Take Quiz 3</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer -->
      <footer class="p-lg-5 bg-dark  ">
        <div class="container">

</html>
<footer class="p-lg-5 bg-dark  ">
  <div class="container">

    </html>
    <footer class="p-lg-5 bg-dark  ">
      <div class="container">

        </html>
        <div id="snackbar">Quiz Submitted!</div>

        <!-- if feedback was just submitted, show toast -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <script src="toast.js"></script>
        <script>
          function GetURLParameter(sParam) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
              var sParameterName = sURLVariables[i].split('=');
              if (sParameterName[0] == sParam) {
                return sParameterName[1];
              }
            }
          }
          if (GetURLParameter('submit') == 1) {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function() {
              x.className = x.className.replace("show", "");
            }, 3000);
          }
        </script>

        </body>