<?php
include_once './header.php';
include_once './includes/functions.inc.php';
handleQuizArrival("three");
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>InvesTio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="./css/quiz.css" rel="stylesheet">
</head>

<body>
  <form method="POST" action="./includes/quiz.inc.php?quiz_id=3">
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
      <div class="container">
        <h1>Quiz <span class="text-warning"> Three </span></h1>
        <p class="lead my-4">
          Investment Types
        </p>
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>

          </div>
          <div class="container-fluid">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>Q1. Riskier investments often have lower returns.</h3>
                </div>
                <div class="modal-body">
                  <div class="col-xs-3 5"></div>
                  <div class="quiz" id="quiz" data-toggle="buttons">
                    <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                    <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">False</label>
                  </div>
                  <div class="modal-header">
                    <h3>Q2. 401(k) plans are employer-sponsored plans for saving toward education.</h3>
                  </div>
                  <div class="modal-body">
                    <div class="col-xs-3 5"></div>
                    <div class="quiz" id="quiz" data-toggle="buttons">
                      <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                      <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">False</label>
                    </div>
                    <div class="modal-header">
                      <h3>Q3. A Traditional IRA allows you to contribute after-tax dollars towards your retirement.</h3>
                    </div>
                    <div class="modal-body">
                      <div class="col-xs-3 5"></div>
                      <div class="quiz" id="quiz" data-toggle="buttons">
                        <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                        <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">False</label>
                      </div>
                      <div class="modal-header">
                        <h3>Q4. A Roth IRA is a type of 401(k).</h3>
                      </div>
                      <div class="modal-body">
                        <div class="col-xs-3 5"></div>
                        <div class="quiz" id="quiz" data-toggle="buttons">
                          <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                          <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">False</label>
                          <br><br>
                          <button type="submit" class="btn btn-primary" name="submit">
                            Submit
                            <!-- <a href="./quiz.php?submit=1" class="btn btn-primary" class="nav-link">Submit</a> -->
                          </button>
                        </div>
                      </div>
                    </div>
  </form>
  <!-- Footer -->
  <footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
      <p class="lead">Copyright &copy; InvesTio</p>

      <a href="#" class="position-absolute bottom-0 end-0 p-5">
        <i class="bi bi-arrow-up-circle h1"></i>
      </a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>