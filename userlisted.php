<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}								
?>
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
        <section>
            <div class="calcmain">
                <div class="calcmainin">
                    <div class="calcmaininner1">
                        <div class="calcmainininner1up">
                            User Listed Property
                        </div>
                        <div class="calclineone"></div>
                        <div class="calclinetwo"></div>
                    </div>
                    <div class="calcmaininner2">
                        <table>
                            <tr>
                                <th width="12%">Properties</th>
                                <th>BHK</th>
                                <th>Type</th>
                                <th>Added Date</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `property` WHERE uid='$uid'");
								while($row=mysqli_fetch_array($query))
								{
							?>
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
                            <?php } ?>
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