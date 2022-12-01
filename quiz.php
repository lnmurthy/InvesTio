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
  <section id="instructors" class="p-5 bg-primary">
    <div class="container">
      <h2 class="text-center text-white">Test Yourself</h2>
      <p class="lead text-center text-white mb-5">
        Our quizzes are structured for beginners
      </p>
      <?php
      if (isset($_GET["score"])) {
        echo "You scored ".$_GET["score"]." on quiz ".$_GET["quiz"]."!";
      }
      ?>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img src="img/handmoney.png" class="rounded-circle mb-3" alt="" />
              <h3 class="card-title mb-3">Why Invest?</h3>
              <p class="card-text">
                Thoroughly understand the advantage of investing
              </p>
              <a href="./quiz1.php" class="btn btn-primary">Take Quiz 1</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img src="img/realestate.png" class="rounded-circle mb-3" alt="" />
              <h3 class="card-title mb-3">Account Types</h3>
              <p class="card-text">
                Learn what types of accounts you can open
              </p>
              <a href="./quiz2.php" class="btn btn-primary">Take Quiz 2</a>

            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img src="img/house.png" class="rounded-circle mb-3" alt="" />
              <h3 class="card-title mb-3">Investment Types</h3>
              <p class="card-text">
                Quiz yourself on investment types
              </p>
              <a href="./quiz3.php" class="btn btn-primary">Take Quiz 3</a>

            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

<?php
include_once './footer.php';
?>