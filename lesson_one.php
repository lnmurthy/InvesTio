<?php
include_once './header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>InvesTio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <section id="lessons" class="p-5">
    <div class="container">
      <h2 class="text-center mb-4">Get Started With Investing</h2>
      <?php
      if (isset($_GET["msg"])) {
        if ($_GET['msg'] == 'redirect') {
          echo '<h4 class="text-center mb-4">(Take the Lesson First!)</h4>';
        }
      }
      ?>

      <button style="background-color: rgba(51, 51, 51, 0.05);
                border-radius: 8px;
                border-width: 0;
                color: #333333;
                cursor: pointer;
                display: inline-block;
                font-size: 14px;
                font-weight: 500;
                line-height: 20px;
                list-style: none;
                margin: 0;
                padding: 8px 12px;">
        <a href="./lessons.php" class="nav-link">Back to Lessons</a>
      </button>

      <!-- Item 1 -->
      <h4 style="padding-top: 20px;">
        Why Invest?
      </h4>
      <div>
        Investing is an essential part of building financial security and attaining financial freedom. Investing is putting your money to work for you, and growing your wealth over time, unlike saving. Smart money management, such as investing your earnings, can mean the difference between being able to cover the highest costs of life (such as getting a degree, buying a house, or facing retirement) or not. Good financial practices will also ensure that you will always be more well-equipped to handle emergency expenses, such as unexpected medical bills, or essential repair costs. Life becomes much easier, and safer, with good financial planning.
      </div>

      <!-- Item 2 -->
      <h4 style="padding-top: 20px;">
        Before You Invest
      </h4>
      <div>
        The first step in starting to invest is identifying your personal goals and risks. You should ask yourself what you want to achieve with your savings, and over what time period you want to meet those goals. This requires understanding what percentage of your income you are willing to put away as well as what part of your income you can't do without. The second thing you need to consider is risk. Some investments are riskier than others. Understanding how comfortable you are with risk will help guide you when deciding which investments are best for you.
        All investments are subject to market conditions, and thus risk; however, risk differs by type of investment. Risk is also correlated with the future return on your investment. Riskier investments are less certain, and thus require a higher incentive to entice investors, so riskier investments often have higher potential yields. If you are risk-averse, you should expect lower returns for the security your investment offers. Conversely, if you are willing to deal with high risk, you could receive far better returns.
      </div>
    </div>

    <div style="position:relative; left: 80px; top: 20px;">
      <form action="./quiz1.php" method="POST">
        <button name='submit' type="submit" style="
              align-items: center;
              appearance: none;
              background-color: #fff;
              border-radius: 24px;
              border-style: none;
              box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
              box-sizing: border-box;
              color: #3c4043;
              cursor: pointer;
              display: inline-flex;
              padding: 5px"> Take the Quiz! </button>
      </form>
    </div>
  </section>
</body>

</html>