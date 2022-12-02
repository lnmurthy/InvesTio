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
  <!-- Lesson Accordion -->
  <section id="lessons" class="p-5">
    <div class="container">
      <h2 class="text-center mb-3">Lesson Overview</h2>
      <p class="lead my-4 text-center mb-3">
        Select one of our curated lessons below
      </p>
      <section class="p-5">
        <div class="container">
          <div class="row text-center g-4">
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-laptop"></i>
                  </div>
                  <a href="./lesson_one.php" class="nav-link">
                    <h4>L1: Why Invest?</h4>
                  </a>
                  <p class="card-text">
                    Why is it important to learn?
                  </p>
                  <a href="./lesson_one.php" class="btn btn-primary">Begin</a>
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
                    <h4>L2: Account Types</h4>
                  </a>
                  <p class="card-text">
                    How can you start investing?
                  </p>
                  <a href="./lesson_two.php" class="btn btn-dark">Begin</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-people"></i>
                  </div>
                  <a href="./lesson_three.php" class="nav-link">
                    <h4>L3: Investment Types</h4>
                  </a>
                  <p class="card-text">
                    What does one invest in?
                  </p>
                  <a href="./lesson_three.php" class="btn btn-primary">Begin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>