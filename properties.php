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
    <link rel="stylesheet" type="text/css" href="CSS/properties.css">
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <div class="prop">
            <div class="propmain">
                <div class="propmain1">
                <?php 
                    $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                    <div class="propin2in1">
                        <div class="propin2in1img" style="background-image: url('Images/<?php echo $row['pimage'];?>')">
                            <div class="propin2in1imgup"></div>
                            <div class="propin2in1imgdown" style="background-color: rgba(0, 0, 0, 0.3)">
                                &#8377;<?php echo $row['price'];?>
                                <p id="propimagepara" ><?php echo $row['size'];?> sqft</p>
                            </div>
                        </div>
                        <div class="propin2in1text">
                            <div class="propin2in1text1">
                                <?php echo $row['1'];?>
                                <p id="propdownpara1" ><i class="fa-solid fa-location-dot locationfooter"></i>&nbsp;<?php echo $row['location'];?></p>
                            </div>
                            <div class="propin2in1text3">
                                <div class="proploverlover1"><i class="fa-solid fa-user"></i>&nbsp;By : <?php echo $row['uname'];?></div>
                                <div class="proploverlover2"><i class="fa-solid fa-calendar-days"></i>&nbsp;<?php echo date('d-m-Y', strtotime($row['date']));?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="propmain2">
                    <div class="propmain2insecond1">
                        <div class="propsecondin1"> 
                            Instalment Calculator
                        </div>
                        <div class="proplineonefor2"></div>
                        <div class="proplinetwofor2"></div>
                        <div class="propformforinstalment">
                            <form action="calc.php" method="post">
                                <div class="propforminput">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <input type="text" name="propprice" id="propprice" placeholder="Property Price">
                                </div>
                                <div class="propforminput">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <input type="text" name="propduration" id="propduration" placeholder="Duration Months">
                                </div>
                                <div class="propforminput">
                                    <i class="fa-solid fa-percent"></i>
                                    <input type="text" name="propinterest" id="propinterest" placeholder="Interest Rate" >
                                </div>
                                <button type="submit" value="submit">Calculate Instalment</button>
                            </form>
                        </div>
                        <div class="propfeaturedprop">
                            <div class="propsecondin1"> 
                                Featured Property
                            </div>
                            <div class="proplineonefor2"></div>
                            <div class="proplinetwofor2"></div>
                            <?php 
                                    $query=mysqli_query($con,"SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3");
                                    $count=0;
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $count++;
                            ?>
                            <div class="propfeaturedpropinner">
                                <img src="Images/<?php echo $row['pimage'];?>" alt="prop">
                                <div class="propfeaturedinnertext">
                                    <?php echo $row['1'];?>
                                <p id="propfeaturedinnerpara" ><i class="fa-solid fa-location-dot locationfooter"></i>&nbsp;<?php echo $row['14'];?></p>
                                </div>                              
                            </div>
                            <?php 
                            if($count == 1){
                                break;
                            }} ?>
                        </div>
                        <div class="proprecentlyaddedprop">
                            <div class="propsecondin1"> 
                                Recently Added Property
                            </div>
                            <div class="proplineonefor2"></div>
                            <div class="proplinetwofor2"></div>
                            <?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
                                $count=0;
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $count++;
								?>
                            <div class="propfeaturedpropinner">
                                <img src="Images/<?php echo $row['pimage'];?>" alt="prop">
                                <div class="propfeaturedinnertext">
                                    <?php echo $row['1'];?>
                                <p id="propfeaturedinnerpara" ><i class="fa-solid fa-location-dot locationfooter"></i>&nbsp;<?php echo $row['14'];?></p>
                                </div>                              
                            </div>
                            <?php 
                            if($count == 1){
                                break;
                            }
                        } ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>