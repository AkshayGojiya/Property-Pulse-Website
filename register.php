<?php 
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['reg']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$pass=$_REQUEST['pass'];
  // $confpass=$_REQUEST['confpass'];
	$utype=$_REQUEST['utype'];
	
  // if($pass != $confpass)
	// {
	// 	$error = "<p class='alert alert-warning'>Password and Confirm Password not matching!</p> ";
	// }
	$uimage=$_FILES['userimage']['name'];
	$temp_name1 = $_FILES['userimage']['tmp_name'];
	$pass= sha1($pass);
	
	$query = "SELECT * FROM user where uemail='$email'";
	$res=mysqli_query($con, $query);
	$num=mysqli_num_rows($res);
	
	if($num == 1)
	{
		$error = "<p class='alert alert-warning'>Email Id already Exist</p> ";
	}
	else
	{
		
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage))
		{
			
			$sql="INSERT INTO user (uname,uemail,uphone,upass,utype,uimage) VALUES ('$name','$email','$phone','$pass','$utype','$uimage')";
			$result=mysqli_query($con, $sql);
			move_uploaded_file($temp_name1,"/home/akshay/Desktop/Akshay/Other/images/$uimage");
			   if($result){
				   $msg = "<p class='alert alert-success'>Register Successfully!</p> ";
			   }
			   else{
				   $error = "<p class='alert alert-warning'>Register Not Successfully</p> ";
			   }
		}else{
			$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
		}
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Property Pulse | Let Us Guide You Home</title>
     <link rel="stylesheet" type="text/css" href="CSS/login.css">
     <link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
</head>
<body>
  <header>
    <?php require("header.php")?>
  </header>
  <section>
  <div class="login-page">
        <div class="form">
            <form method="post" enctype="multipart/form-data">
                <h1 style="font-size: 32px;" >Register</h1>
                <h3>Access to our dashboard</h3>
                <?php echo $error; ?><?php echo $msg; ?>
                <input type="text" placeholder="Your Name" name="name" required /></br>
                <input type="text" placeholder="Your Number" name="phone" required /></br>
                <input type="email" placeholder="Your Email" name="email" required /></br>
                <input type="password" placeholder="Set Your Password" name="pass" required /></br>
                <!-- <input type="password" placeholder="Confirm Password" name="confpass" required /></br> -->
                <div class="form-check-inline">  
                  <div class="form-check-inline-in-1">
                  <p>Select Type:</p>
                  </div>
                <div class="form-check-inline-in">
                    <label>
                      <input type="radio" class="form-check-input" name="utype" value="user" checked>User
                    </label>
                </div>
                   <div class="form-check-inline-in">
                    <label>
                      <input type="radio" class="form-check-input" name="utype" value="agent">Agent
                    </label>
                   </div>
                   <div class="form-check-inline-in">
                    <label>
                      <input type="radio" class="form-check-input" name="utype" value="builder">Builder
                    </label>
                   </div> 
                </div>
                  <br>
                <div class="s2">
                <p><b>User Image:</b></p>
                <input type="file" name="userimage"> 
              </div>
                    <br><button type="submit" value="submit" name="reg" >Register</button><br><br>
                    <p>Already Have An Account? <br><br>
                    <a class="s1" href="login.php"> Login </a></p>
            </form>
        </div>
    </div>
    </section>
    <footer>
      <?php require("footer.php")?>
    </footer>

</body>
</html>