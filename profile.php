<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
$uemail = $_SESSION['uemail'];
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}
else {
    $sql = "SELECT * FROM user where uemail='$uemail'";
    $result=mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
}								
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="CSS/profile.css">
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <section>
            <div class="profile">
                <div class="profilemain">
                    <div class="profilemainupper">
                        <img src="Admin/user/<?php echo $row['6'];?>" alt="profile picture">
                        <div class="profileupin">
                            <h2>Hello, <?php echo $row['1'];?></h2>
                            <h2>Property Pulse - <?php echo $row['5'];?></h2>
                        </div>
                    </div>
                    <div class="profilemainlower">
                    <div class="profilelowerin1"></div>
                        <div class="profilelowerin2">
                        <?php 
							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `property` WHERE uid='$uid'");
                            if($row=mysqli_fetch_array($query) == 0){
                                echo "<h4>0 Properties listed</h4>";
                            }
                            else {
                                $count = mysqli_num_rows($query);
                                echo "<h4>$count Properties listed</h4>";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="profilemainlower">
                    <div class="profilelowerin1"></div>
                        <div class="profilelowerin2">
                            <form action="" method="post">
                                <a href="logout.php">Logout</a>
                            </form>
                        </div>
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
    <link rel="stylesheet" type="text/css" href="CSS/profile.css">
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <section>
            <div class="profile">
                <div class="profilemain">
                    <div class="profilemainupper">
                        <img src="Images/agent.png" alt="profile picture">
                        <div class="profileupin">
                            <h2>Hello, Akshay</h2>
                            <h2>Property Pulse - Agent</h2>
                        </div>
                    </div>
                    <div class="profilemainlower">
                    <div class="profilelowerin1"></div>
                        <div class="profilelowerin2">
                            <h4>0 Properties listed</h4>
                        </div>
                    </div>

                    <div class="profilemainlower">
                    <div class="profilelowerin1"></div>
                        <div class="profilelowerin2">
                            <a href="logout.php" id="profilebutton">Logout</a>
                        </div>
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