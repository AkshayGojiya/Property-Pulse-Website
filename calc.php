<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="CSS/calc.css">
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $propprice=$_REQUEST['propprice'];
                $propduration=$_REQUEST['propduration'];
                $propint=$_REQUEST['propinterest'];
                
                $interest = $propprice * $propint/100;
                $pay = $propprice + $interest;
                $month = $pay / $propduration;
            }
        ?>
        <section>
            <div class="calcmain">
                <div class="calcmainin">
                    <div class="calcmaininner1">
                        <div class="calcmainininner1up">
                            EMI Calculator
                        </div>
                        <div class="calclineone"></div>
                        <div class="calclinetwo"></div>
                    </div>
                    <div class="calcmaininner2">
                        <table>
                            <tr>
                                <th width="65%">Term</th>
                                <th>Amount</th>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td>&#8377;<?php echo $propprice ?></td>
                            </tr>
                            <tr>
                                <td>Total Duration</td>
                                <td><?php echo $propduration ?> Months</td>
                            </tr>
                            <tr>
                                <td>Interest Rate</td>
                                <td><?php echo $propint ?>%</td>
                            </tr>
                            <tr>
                                <td>Total Interest</td>
                                <td>&#8377;<?php echo $interest ?></td>
                            </tr>
                            <tr>
                                <td>Total Amount</td>
                                <td>&#8377;<?php echo $pay ?></td>
                            </tr>
                            <tr>
                                <td>Pay per Month (EMI)</td>
                                <td>&#8377;<?php echo $month ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>