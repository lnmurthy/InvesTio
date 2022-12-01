<?php
include_once './header.php';
include_once './includes/functions.inc.php';
if(isset($_POST['submit'])) {
  if(isset($_SESSION["username"])) {
    completeLesson("three");
  }
} else {
  validQuiz("three");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>InvesTio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="quiz.css" rel="stylesheet">
</head>

<body>
  <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>Quiz <span class="text-warning"> Three </span></h1>
          <p class="lead my-4">
            Investment Types
          </p>
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
                  <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                  <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">False</label>
                </div>
                <div class="modal-header">
                  <h3>Q2. 401(k) plans are employer-sponsored plans for saving toward education.</h3>
                </div>
                <div class="modal-body">
                  <div class="col-xs-3 5"></div>
                  <div class="quiz" id="quiz" data-toggle="buttons">
                    <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                    <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">False</label>
                  </div>
                  <div class="modal-header">
                    <h3>Q3. A Traditional IRA allows you to contribute after-tax dollars towards your retirement.</h3>
                  </div>
                  <div class="modal-body">
                    <div class="col-xs-3 5"></div>
                    <div class="quiz" id="quiz" data-toggle="buttons">
                      <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                      <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">False</label>
                    </div>
                    <div class="modal-header">
                      <h3>Q4. A Roth IRA is a type of 401(k).</h3>
                    </div>
                    <div class="modal-body">
                      <div class="col-xs-3 5"></div>
                      <div class="quiz" id="quiz" data-toggle="buttons">
                        <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                        <label class="element-animation2 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">False</label>
                        <div class="modal-header">
                          <h3>Q5. Most investors buy and sell through brokerage accounts.</h3>
                        </div>
                        <div class="modal-body">
                          <div class="col-xs-3 5"></div>
                          <div class="quiz" id="quiz" data-toggle="buttons">
                            <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                            <label class="element-animation2 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">False</label>
                          </div>
                          <div class="modal-header">
                            <h3>Q6. A Bond is partial ownership of a corporation.</h3>
                          </div>
                          <div class="modal-body">
                            <div class="col-xs-3 5"></div>
                            <div class="quiz" id="quiz" data-toggle="buttons">
                              <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                              <label class="element-animation2 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">False</label>
                            </div>
                            <div class="modal-header">
                              <h3>Q7. A company’s stock price fluctuates with the market’s expectations and evaluations of that company.</h3>
                            </div>
                            <div class="modal-body">
                              <div class="col-xs-3 5"></div>
                              <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                                <label class="element-animation2 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">False</label>
                              </div>
                              <div class="modal-header">
                                <h3>Q8. An ETF’s price tracks an index, sector, or market</h3>
                              </div>
                              <div class="modal-body">
                                <div class="col-xs-3 5"></div>
                                <div class="quiz" id="quiz" data-toggle="buttons">
                                  <label class="element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">True</label>
                                  <label class="element-animation2 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">False</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php
                        include_once './footer.php';
                        ?>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>