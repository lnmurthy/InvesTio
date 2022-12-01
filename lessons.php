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
      <h2 class="text-center mb-4">Lesson Overview</h2>

      <a href="./lesson_one.php" class="nav-link">
        <h4>Lesson 1: Why Invest?</h4>
      </a>
      <a href="./lesson_two.php" class="nav-link">
        <h4>Lesson 2: Account Types</h4>
      </a>
      <a href="./lesson_three.php" class="nav-link">
        <h4>Lesson 3: Investment Types</h4>
      </a>


    </div>
  </section>
</body>

<?php
include_once './footer.php';
?>