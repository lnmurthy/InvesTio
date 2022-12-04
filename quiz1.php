<?php
include_once './header.php';
include_once './includes/functions.inc.php';
handleQuizArrival("one");
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
  <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
      <h1>Quiz <span class="text-warning"> One </span></h1>
      <p class="lead my-4">
        Why Should You Invest?
      </p>
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>

        </div>
        <form method="POST" action="./includes/quiz.inc.php?quiz_id=1">
          <div class="container-fluid">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>Q1. What is an advantage of investing?</h3>
                </div>
                <div class="modal-body">
                  <div class="col-xs-3 5"></div>
                  <!-- QUESTION 1 -->
                  <div class="quiz" id="quiz" name="question1" data-toggle="buttons">
                    <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                      <input type="radio" name="q1_answer" value="1">Financial security</label>

                    <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                      <input type="radio" name="q1_answer" value="2">Financial freedom</label>

                    <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                      <input type="radio" name="q1_answer" value="3">Free medical bills</label>

                    <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                      <input type="radio" name="q1_answer" value="4">Smart Money Management</label>
                  </div>
                  <div class="modal-header">
                    <h3>Q2. What is the first step of investing?</h3>
                  </div>
                  <div class="modal-body">
                    <div class="col-xs-3 5"></div>
                    <!-- QUESTION 2 -->
                    <div class="quiz" id="quiz" name=question2 data-toggle="buttons">
                      <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                        <input type="radio" name="q2_answer" value="1">Investing in your favorite stocks</label>

                      <label class="element-animation2 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                        <input type="radio" name="q2_answer" value="2">Day trading</label>

                      <label class="element-animation3 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                        <input type="radio" name="q2_answer" value="3">Identifying your personal goals and risks</label>

                      <label class="element-animation4 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                        <input type="radio" name="q2_answer" value="4">Short selling</label>
                    </div>
                    <div class="modal-header">
                      <h3>Q3. All investments are subject to market conditions</h3>
                    </div>
                    <div class="modal-body">
                      <div class="col-xs-3 5"></div>
                      <!-- QUESTION 3 -->
                      <div class="quiz" id="quiz" name="question3" data-toggle="buttons">
                        <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                          <input type="radio" name="q3_answer" value="1">True</label>

                        <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                          <input type="radio" name="q3_answer" value="2">False</label>
                      </div>
                      <div class="modal-header">
                        <h3>Q4. Select the incorrect fact about risk</h3>
                      </div>
                      <div class="modal-body">
                        <div class="col-xs-3 5"></div>
                        <!-- QUESTION 4 -->
                        <div class="quiz" id="quiz" name="question4" data-toggle="buttons">
                          <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                            <input type="radio" name="q4_answer" value="1"> Risk is correlated with the future return on your investment</label><br>

                          <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                            <input type="radio" name="q4_answer" value="2"> Riskier investments are less certain, and thus require a higher yields</label>

                          <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                            <input type="radio" name="q4_answer" value="3"> If you are risk-averse, you should expect higher returns for the security your investment offers</label>

                          <label class="element-animation1 btn btn-sm btn-outline-light"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                            <input type="radio" name="q4_answer" value="4"> If you are willing to deal with high risk, you could receive far better returns. </label>
                        </div> <br>
                        <button type="submit" name="submit" class="btn btn-primary">
                          <a class="btn btn-primary" class="nav-link">Submit</a>
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