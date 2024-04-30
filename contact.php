<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
$error="";
$msg="";
if(isset($_POST['send']))
{
	$name=$_POST['contactformname'];
	$email=$_POST['contactformemail'];
	$phone=$_POST['contactformphone'];
	$subject=$_POST['contactformsubject'];
	$message=$_POST['contactformcomments'];
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
        
		$sql="INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Message Send Successfully!</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
    <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <?php require("header.php"); ?>
    </header>
    <section>
        <div class="contactmain">
            <div class="contactmainupper">
                <div class="contactmainupperin">
                    <div class="contantupperinone">
                        <div class="contactforborder">
                        <h2 class="contacth2" >Contact Us</h2>
                        <ul class="contactlistone" >
                                <li id="contactlistoneitem" class="lowercontactan"><i class="fa-solid fa-location-dot"></i>&nbsp;<b>Address</b><br>&nbsp;&nbsp;&nbsp;&nbsp;<span id="leftcontactdetail" >Birla Vishvakarma Mahavidhyalaya</span></li>
                                <li id="contactlistoneitem" class="lowercontactan"><i class="fa-solid fa-phone"></i>&nbsp;<b>Call Us</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="leftcontactdetail" >+91 9510 469 749</span></li>
                                <li id="contactlistoneitem" class="lowercontactan"><i class="fa-solid fa-envelope"></i>&nbsp;<b>Email Address</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="leftcontactdetail" >aksgojiya@gmail.com</span></li>
                        </ul>
                        </div>
                    </div>
                    <div class="contantupperintwo">
                        <div class="contactuppertwohead">
                            Get In Touch
                        </div>
                        <div class="contactlineone"></div>
                        <div class="contactlinetwo"></div>
                        <center><?php echo $msg; ?><?php echo $error; ?></center>
                        <div class="contactform">
                            <form method="post">
                                <div class="contactformfirstrow">
                                <input type="text" name="contactformname" id="contactformname" placeholder="Your Name*">
                                <input type="email" name="contactformemail" id="contactformemail" placeholder="Email Address*">
                                </div>
                                <div class="contactformsecondrow">
                                <input type="text" name="contactformphone" id="contactformphone" placeholder="Phone">
                                <input type="text" name="contactformsubject" id="contactformsubject" placeholder="Subject">
                                </div>
                                <div class="contactformthirdrow">
                                    <textarea name="contactformcomments" id="contactformcomments" cols="30" rows="10" placeholder="Type Comments..." ></textarea>
                                </div>
                                <div class="contactformforthrow">
                                    <button id="contactformbutton" type="submit" value="send message" name="send">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contactmainlower">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2223.7744083467296!2d72.92427670989571!3d22.55288422842862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e74c03b7749%3A0xab364c66fd4834c!2sBirla%20Vishvakarma%20Mahavidyalaya%20(BVM)!5e1!3m2!1sen!2sin!4v1712824895242!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <footer>
        <?php require("footer.php"); ?>
    </footer>
</body>
</html>