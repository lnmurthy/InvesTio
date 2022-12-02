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
      background-color: #333;
      color: #fff;
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
</head>

<body>
  <!-- Showcase -->
  <section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>Product<span class="text-warning"> Feedback </span></h1>
          <p class="lead my-4">
            InvesTio strives to be proactive and flexible with their users.
            <br> We acknowledge growth is pertinent for success and want to encourage constructive critisim. <br>
            With that being said, begin by selecting a route below.
          </p>
          <h2><small>Our Products</small> </h2>
        </div>
        <br>
  </section>
  <!-- Boxes -->
  <section class="p-5">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-md">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-laptop"></i>
              </div>
              <h3 class="card-title mb-3">Additional Lessons</h3>
              <p class="card-text">
                Have an idea for a lesson?
              </p>
              <a href="./additionallessons.php" class="btn btn-dark">Let Us Know</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-person-square"></i>
              </div>
              <h3 class="card-title mb-3">Faulty User Interface</h3>
              <p class="card-text">
                See a bug in our site?
              </p>
              <a href="./fixbugs.php" class="btn btn-dark">Help Us Fix It</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-person-square"></i>
              </div>
              <h3 class="card-title mb-3">The Kitchen Sink</h3>
              <p class="card-text">
                Anything else you want to tell us?
              </p>
              <a href="./kitchensink.php" class="btn btn-dark">Let Us Know</a>
            </div>
          </div>
          <br>

        </div>
        <div class="d-sm-flex align-items-center justify-content-between">
          <h2><small>The lifecycle of your efforts</small> </h2>
        </div>
        <div>
          <img class="img-fluid w-100 d-none d-sm-block" src="./img/feedbacklifecycle.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <html>

  <div id="snackbar">Thanks for your feedback!</div>

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