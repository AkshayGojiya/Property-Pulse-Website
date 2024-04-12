<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png"> 
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <div class="homemain">
            <div class="homemain1">
                <!-- <img src="Images/index-2.jpg" alt="index image"> -->
                <div class="home1in1">
                    Let Us <br>
                    Guide You Home
                </div>
                <div class="home1in2">
                    <form action="">
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
                        <button>Search Property</button>
                    </form>
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
                </div>
            </div>

            <div class="homemain4">
                <div class="homemain4in">

                </div>
            </div>

            <div class="homemain5">
                <div class="homemain5in">
                    <div class="home5in1">
                        How It Work
                    </div>
                    <div class="homelineone"></div>
                    <div class="homelinetwo"></div>
                </div>
            </div>
            <div class="homemain6">
                <div class="homemain6in">

                </div>
            </div>
            <div class="homemain7">
                <div class="homemain7in">
                    <div class="home7in1">
                        Popular Places
                    </div>
                    <div class="homelineone"></div>
                    <div class="homelinetwo"></div>
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
    </section>
    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>