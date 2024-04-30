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
                        
                            <?php 
							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `property` WHERE uid='$uid'");
                            if($row=mysqli_fetch_array($query) == 0){
                                $noprop = "<h1 id='userlistednot'>NO PROPERTIES LISTED</h1>";
                                echo $noprop;
                            }
                            else {
                                $table = "<table>
                                <tr>
                                    <th>Type</th>
                                    <th>BHK</th>
                                    <th>Added Date</th>
                                    <th>Status</th>
                                </tr>";
                                echo $table;
								while($row=mysqli_fetch_array($query))
								{
							?>
                            <tr>
                                <td>For <?php echo $row['5'];?></td>
                                <td><?php echo $row['4'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['status'];?></td>
                            </tr>
                            
                            <?php }} ?>
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