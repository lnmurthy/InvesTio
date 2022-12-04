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
  <section id="accounts" class="p-5">
    <div class="container">
      <h2 class="text-center mb-4">Investment Types</h2>
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

      <p style="padding-top: 50px">There are several types of investments, each with its own benefits. The most common, and the ones we will be discussing are Bonds, Stocks, ETFs, and Mutual Funds.
      </p>

      <!-- Item 1 -->
      <h4 style="padding-top: 20px;">
        Bonds
      </h4>
      <div>
        Bonds are one of the most common types of investments, notable because they are one of the safest. A bond represents a loan made between two parties, the investor and the borrower, where the borrower will usually be a government or a corporation. With a bond, an investor pays an initial face value price for the bond. The investor will then be paid regular interest payments, called coupons, for the duration of the bond, which ends on a predetermined maturity date.
        The safest bonds are government bonds, especially US government bonds. However, as a result, they have some of the lowest returns. Corporate bonds can offer better returns, so long as you are a careful investor who is sure the corporation is a safe one to invest in.
      </div>

      <!-- Item 2 -->
      <h4 style="padding-top: 20px;">
        Stocks
      </h4>
      <div>
        A stock is partial ownership of a corporation. By buying one or multiple shares of a corporation’s stock, you are buying ownership in that company, and thus own a portion of that company's assets and earnings. Stocks are one of the most popular investments and are bought and sold on stock exchanges. Stock prices fluctuate with the market’s expectations and evaluations of that company. To profit from investing in stocks, an investor will purchase shares in a company the investor believes has good potential at a time when the investor believes the market is healthy, and holds those shares. If the investor’s assessment of the company was correct and the company performs well, its share price will rise, and the investor can sell their shares for a profit. If the investor was wrong about the company, and the share price goes down, the investor may sell their shares at a loss.
      </div>

      <!-- Item 3 -->
      <h4 style="padding-top: 20px;">
        ETFs
      </h4>
      <div>
        ETFs can be purchased on stock exchanges, just like regular stocks can, but they are very different. An ETF - an exchange-traded fund - is a type of pooled investment. An ETF’s price is tied to something, an index, market, etc., and serves as an average of that field. The most common ETFs are Index ETFs, such as the SPDR ETF, which follows the S&P 500 Index. When the S&P 500 goes up by some percentage, SPDR goes up a very similar percentage, and vice versa. As such, ETFs are a great way to invest in entire markets an investor believes will perform well.
      </div>

      <!-- Item 4 -->
      <h4 style="padding-top: 20px;">
        Mutual Funds
      </h4>
      <div>
        There are many types of investments, and for investments like stocks, there are many different stocks to choose from. Mutual funds are pooled investments, collections of all sorts of investments, various stocks, bonds, and other investments, that are handled by money managers. When you buy into a mutual fund, you are handing your money to a money manager who will take your money, and the money from other investors, and will invest it for you. By pooling the money of multiple investors, mutual funds allow for more diversification, and because they are managed by professionals, often a part of large investment companies, mutual funds offer less risk. Mutual funds do charge annual fees for the services they provide.
      </div>

    </div>
    <div style="position:relative; left: 80px; top: 20px;">
      <form action="./quiz3.php" method="POST">
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