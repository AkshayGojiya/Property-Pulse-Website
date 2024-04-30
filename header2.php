<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <!-- <div class="topheader">
        <div class="topheaderone">
            <div>
                <a href="#"><i class="fa-solid fa-phone"></i>&nbsp;+91 951 046 9749</a>
            </div>
            <div>
                <a href="#"><i class="fa-solid fa-envelope"></i>&nbsp;aksgojiya@gmail.com</a>
            </div>
        </div>
        <div class="topheadertwo">
            <?php  if(isset($_SESSION['uemail']))
                { ?>
                <div>
                    <a href="logout.php"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div><?php } else { ?>
                <div>
                    <a href="login.php"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;|</a>
                </div>
                <div>
                    <a href="register.php"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;Register</a>
                </div><?php } ?>
        </div>
    </div> -->
    <div class="navbar" id="headerfixed" style="position:fixed; width:100%; height:82px">
        <div class="nav">
            <div class="navlogo">
                <a href="index.php"><img src="Images/main.png" alt="Property Pulse" id="navlogo"></a>
            </div>
            <div class="navitem">
                <a href="index.php" id="navitem" class="headerline" >Home</a>
                <a href="about.php" id="navitem">About</a>
                <a href="contact.php" id="navitem">Contact</a>
                <a href="properties.php" id="navitem">Properties</a>
                <a href="agent.php" id="navitem">Agent</a>
                <?php  if(isset($_SESSION['uemail']))
                { ?>
                    <a href="profile.php" id="navitem">My Account</a>
                    <a href="userlisted.php" id="navitem">My Properties</a>
                    <?php } else { ?>
                        <a href="login.php" id="navitem">Login/Register</a>
                 <?php } ?> 
            </div>
            <div class="navsubmit">
                <button id="navbutton" style="color:white; height:40px"><a href="submitproperty.php" style="color:white;">Submit Property</a></button>
            </div>
        </div>
    </div>
    <script src="JS/header.js"></script>
</body>
</html>