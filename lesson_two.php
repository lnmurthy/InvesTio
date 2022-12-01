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
            <h2 class="text-center mb-4">Account Types</h2>

            <a href="./lessons.php" class="nav-link">Back to Lessons</a>

            <p style="padding-top: 50px">There are several types of investment accounts, each with its own benefits. The main categories of accounts are retirement, education, custodial, and standard accounts. Some of the most common accounts are the Traditional IRA, Roth IRA, 401(k), and 529 accounts. 
            </p>

            <!-- Item 1 -->
            <h4 style="padding-top: 20px;">
              401(k)
            </h4>
            <div>
              401(k) plans are employer-sponsored retirement plans that offer tax advantages for the saver. With the plan, a percentage of each paycheck is withheld and invested directly into the account. The employer may match all or part of these contributions. 401(k)s are Individual Retirement Accounts, and the two main types are Traditional IRAs and Roth IRAs. The individual gets to choose which investments the account will be invested in from a selection offered by the employer, usually from stocks, bonds, and mutual funds. 
            </div>

            <!-- Item 2 -->
            <h4 style="padding-top: 20px;">
              Traditional IRA
            </h4>
            <div>
              Traditional Individual Retirement Accounts allow you to contribute pre-tax dollars towards your retirement. Contributions being pre-tax reduces your taxable income, with income tax then paid on withdrawal. This plan allows your money to grow tax-deferred. 
            </div>

            <!-- Item 3 -->
            <h4 style="padding-top: 20px;">
              Roth IRA
            </h4>
            <div>
              Roth Individual Retirement Accounts allow you to contribute after-tax dollars towards your retirement. The Roth IRA then allows your money to grow tax-free and allows you to withdraw tax-free, so long as the account has been open for 5 years. 
            </div>
            <!-- Item 4 -->
            <h4 style="padding-top: 20px;">
              529
            </h4>
            <div>
              529 Plans are state-sponsored accounts for working toward education. It offers tax-deferred growth, and the money invested can be withdrawn tax-free so long as it is put towards education expenses. 
            </div>

            <!-- Item 5 -->
            <h4 style="padding-top: 20px;">
              Brokerage Accounts
            </h4>
            <div>
              Most investors buy and sell stock through brokerage accounts. While a brokerage account is not the only way to invest, it is one of the most trusted methods of investing. Brokerage accounts are managed by brokerage firms, financial institutions whose role is to responsibly manage people’s finances. When you invest with a brokerage, you can decide to pick and choose your own investments, or pay for a service in which the brokerage decides which investments your money wil go into. It is then the brokerage’s responsibility to execute any investment decisions. With standard brokerage accounts, money can be withdrawn at any time, and capital gains tax must be paid on any income made by the investments at the time of withdrawal. 
            </div>

        </div>
    </section>
</body>
</html>

<?php
include_once './footer.php';
?>