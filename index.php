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
  <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>Learn With <span class="text-warning"> InvesTio </span></h1>
          <p class="lead my-4">
            We want to make investing accessible and easy to learn for everyone
          </p>
          <form action="registration.php">
            <?php
            if (!isset($_SESSION["userid"])) {
              echo "<button type='submit' class='btn btn-primary btn-lg' data-bs-toggle='modal' data-bs-target='#enroll'> Register Here </button>";
            } else {
              echo "<h2 style=color:white> Welcome " . $_SESSION["username"] . "!</h2>";
            }
            ?>
          </form>
        </div>

        <img class="img-fluid w-50 d-none d-sm-block" src="img/graph2.png" alt="" />
      </div>
    </div>
    <br>
  </section>
  <!-- Newsletter -->
  <section class="bg-primary text-light p-5">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center">
        <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

        <div class="input-group news-input">
          <input type="text" class="form-control" placeholder="Enter Email" />
          <button class="btn btn-dark btn-lg" type="button">Submit</button>
        </div>
      </div>
    </div>
  </section>
  <!-- Boxes -->
  <section class="p-5">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-md">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-laptop"></i>
              </div>
              <h3 class="card-title mb-3">Lessons</h3>
              <p class="card-text">
                Structured for beginners to thoroughly understand how to invest their money
              </p>
              <a href="./lessons.php" class="btn btn-primary">Begin</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-person-square"></i>
              </div>
              <h3 class="card-title mb-3">Quizzes</h3>
              <p class="card-text">
                When you're ready, challenge yourself with structured quizzes for success
              </p>
              <a href="quiz.php" class="btn btn-dark">Take a Quiz</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="card-title mb-3">We Love Feedback</h3>
              <p class="card-text">
                Feedback is quintessential for growth. Let us know what we can do better
              </p>
              <a href="#" class="btn btn-primary">Submit a Comment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>

<?php
include_once './footer.php';
?>