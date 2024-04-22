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
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <div class="homemain">
            <div class="homemain1">
                <div class="home1in">
                    <div class="home1in1">
                        Let Us <br>
                        <h3 id="home1in1para">Guide You Home</h3>
                    </div>
                    <div class="home1in2">
                        <form method="post" action="propertygrid.php">
                            <select name="indexformtype" id="indexformttype">
                                <option value="Select Type">Select Type</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Flat">Flat</option>
                                <option value="Building">Building</option>
                                <option value="House">House</option>
                                <option value="Villa">Villa</option>
                                <option value="Office">Office</option>
                            </select>
                            <select name="indexformstatus" id="indexformtstatus">
                                <option value="Select Status">Select Status</option>
                                <option value="Rent">Rent</option>
                                <option value="Sale">Sale</option>
                            </select>
                            <input type="city" name="indexformcity" id="indexformcity" placeholder="Enter City" >
                            <button type="submit" name="filter" value="submit" >Search Property</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="homemain2">
                <div class="homemain2in">
                    <div class="home2in1">
                        What We Do
                    </div>
                    <div class="homelineone"></div>
                    <div class="homelinetwo"></div>
                    <div class="home2in2">
                        <div class="home2in2in1">
                            <div class="home2in2in1img"><img src="Images/selling.png" alt="Selling"></div>
                            <div class="home2in2in1text">Selling Service</div>
                        </div>
                        <div class="home2in2in1">
                            <div class="home2in2in1img"><img src="Images/for-rent.png" alt="Rent"></div>
                            <div class="home2in2in1text">Rental Service</div>
                        </div>
                        <div class="home2in2in1">
                            <div class="home2in2in1img"><img src="Images/mark.png" alt="Listing"></div>
                            <div class="home2in2in1text">Property Listing</div>
                        </div>
                        <div class="home2in2in1">
                            <div class="home2in2in1img"><img src="Images/chart-up.png" alt="Investment"></div>
                            <div class="home2in2in1text">Legal Investment</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homemain3">
                <div class="homemain3in">
                    <div class="home3in1">
                        Recent Property
                    </div>
                    <div class="homelineone"></div>
                    <div class="homelinetwo"></div>
                    <div class="home3in2">
                    <?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <div class="home3in2in1">
                            <div class="home3in2in1img">
                                <div class="home3in2in1imgup"></div>
                                <div class="home3in2in1imgdown">
                                    &#8377;<?php echo $row['13'];?>
                                    <p id="home3imagepara" ><?php echo $row['12'];?> sqft</p>
                                </div>
                            </div>
                            <div class="home3in2in1text">
                                <div class="home3in2in1text1">
                                    <?php echo $row['1'];?>
                                    <p id="home3downpara1" ><i class="fa-solid fa-location-dot locationfooter"></i>&nbsp;<?php echo $row['14'];?></p>
                                </div>
                                <div class="home3in2in1text2">
                                    <div class="home3down2in1">
                                        <p><?php echo $row['12'];?></p>
                                        <p id="home3inininpara" >Sqft</p>
                                    </div>
                                    <div class="home3down2in2">
                                        <p><?php echo $row['6'];?></p>
                                        <p id="home3inininpara" >Beds</p>
                                    </div>
                                    <div class="home3down2in3">
                                        <p><?php echo $row['7'];?></p>
                                        <p id="home3inininpara" >Baths</p>
                                    </div>
                                    <div class="home3down2in4">
                                        <p><?php echo $row['9'];?></p>
                                        <p id="home3inininpara" >Kitchen</p>
                                    </div>
                                    <div class="home3down2in5">
                                        <p><?php echo $row['8'];?></p>
                                        <p id="home3inininpara" >Balcony</p>
                                    </div>
                                </div>
                                <div class="home3in2in1text3">
                                    <div class="home3loverlover1"><i class="fa-solid fa-user"></i>&nbsp;By : <?php echo $row['uname'];?></div>
                                    <div class="home3loverlover2"><i class="fa-solid fa-calendar-days"></i>&nbsp;<?php echo date('d-m-Y', strtotime($row['date']));?></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="homemain4">
                <div class="homemain4in">
                    <div class="home4inin">
                        <div class="home4inner1">
                            <h3>Why Choose Us</h3>
                        </div>
                        <div class="home4inner2">
                            <div class="home4innerin1">
                                <img src="Images/badge.png" alt="Top Rated">
                            </div>
                            <div class="home4innerin2">
                                <h5>Top Rated</h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="home4inner3">
                            <div class="home4innerin1">
                                <img src="Images/home-security.png" alt="Experience Quality">
                            </div>
                            <div class="home4innerin2">
                                <h5>Experience Quality</h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="home4inner4">
                            <div class="home4innerin1">
                                <img src="Images/agent-2.png" alt="Experienced Agents" id="agent-2">
                            </div>
                            <div class="home4innerin2">
                                <h5>Experienced Agents</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="homemain5">
                <div class="homemain5in">
                    <div class="home5in1">
                        How It Work
                    </div>
                    <div class="homelineone"></div>
                    <div class="homelinetwo"></div>
                </div>
            </div> -->

            <div class="homemain7">
                <div class="homemain7in">
                    <div class="home7in1">
                        Popular Places
                    </div>
                    <div class="homelineone"></div>
                    <div class="homelinetwo"></div>
                    <div class="home7inin">
                    <?php
                        $query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Olisphis'");
                        while($row=mysqli_fetch_array($query))
                        {
                            ?>
                        <div class="home7innerimg">
                            <a href="stateproperty.php?id=<?php echo $row['17']?>"><h3 id="home7innertext1"><?php echo $row['state'];?></h3></a>
                            <h5><?php 
                                        $total = $row[0];
                                        echo $total;?> Properties Listed</h5>
                        </div>
                        <?php } ?>
                        <?php
                        $query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Floson'");
                        while($row=mysqli_fetch_array($query))
                        {
                            ?>
                        <div class="home7innerimg">
                            <a href="stateproperty.php?id=<?php echo $row['17']?>"><h3 id="home7innertext1"><?php echo $row['state'];?></h3></a>
                            <h5><?php 
                                        $total = $row[0];
                                        echo $total;?> Properties Listed</h5>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>


            <div class="homemain6">
            <?php
                $query=mysqli_query($con,"SELECT count(pid) FROM property");
                    while($row=mysqli_fetch_array($query))
                        {
                ?>
                <div class="homemain6in">
                    <div class="home6inner">
                        <img src="Images/home-security.png" alt="property">
                        <h4><?php 
                            $total = $row[0];
                            echo $total;?></h4>
                            <?php } ?>
                        <h5>Property Available</h5>
                    </div>
                    <?php
                            $query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
                                while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                    <div class="home6inner">
                        <img src="Images/home-security.png" alt="property">
                        <h4><?php 
                                $total = $row[0];
                                echo $total;?></h4>
                                <?php } ?>
                        <h5>Sale Property Available</h5>
                    </div>
                    <?php
                            $query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
                                while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                    <div class="home6inner">
                        <img src="Images/home-security.png" alt="property">
                        <h4><?php 
                                $total = $row[0];
                                echo $total;?></h4>
                                <?php } ?>
                        <h5>Rent Property Available</h5>
                    </div>
                    <?php
                        $query=mysqli_query($con,"SELECT count(uid) FROM user");
                            while($row=mysqli_fetch_array($query))
                                {
                        ?>
                    <div class="home6inner">
                        <img src="Images/home-security.png" alt="property">
                        <h4><?php 
                            $total = $row[0];
                            echo $total;?></h4>
                            <?php } ?>
                        <h5>Registered Users</h5>
                    </div>
                </div>
            </div>





            <div class="homemain8">
                <div class="homemain8in">
                    <div class="home8in1"> 
                        Testimonial
                    </div>
                    <div class="homelineonefor8"></div>
                    <div class="homelinetwofor8"></div>
                </div>
            </div>
        </div>
        <a href="#" class="backtotop" id="scroller">
            <span >
                <span class="material-symbols-outlined">
                    arrow_upward
                </span>
            </span>
        </a>
    </section>
    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>