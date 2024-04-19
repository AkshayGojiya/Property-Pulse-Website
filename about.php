<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="about.css">
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <section>
            <div class="aboutmain">
                <div class="aboutmainin">
                <?php 
					
					$query=mysqli_query($con,"SELECT * FROM about");
					while($row=mysqli_fetch_array($query))
					{
				?>
                    <div class="aboutupper">
                        <div id="aboutuppertext"><?php echo $row['1'];?></div>
                        <div class="aboutlineone"></div>
                        <div class="aboutlinetwo"></div>
                    </div>
                    <div class="aboutlower">
                        <div class="aboutlowerone">
                            <?php echo $row['2'];?>
                        </div>
                        <div class="aboutlowertwo">
                            <div class="imgdiv"><img src="<?php echo $row['3'];?>" alt="about image" id="aboutimg" ></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
    </section>
    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>