<!DOCTYPE html>
<html>
<head>
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
</head>
<body>
	<header>
		<?php require("header.php")?>
	</header>
	<section></section>
    <div class="login-page">
        <div class="form" >
            <form class="login-form" action="/login" method="post">
                <h1>Login</h1>
                <h3>Access to our dashboard</h3>
                <input type="email" placeholder="Your Email" name="email" required /></br>
                <input type="password" placeholder="Password" name="password" required /></br>
                <button type="submit">login</button><br><br>
                <p>Don't have an account? <br><br>
                <a class="s1" href="register.php">SignUp</a></p>
            </form>
        </div>
    </div>
	</section>
	<footer>
		<?php require("footer.php")?>
	</footer>

</body>
</html>


<!--<?php 
session_start();
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['login']))
{
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	$pass= sha1($pass);
	
	if(!empty($email) && !empty($pass))
	{
		$sql = "SELECT * FROM user where uemail='$email' && upass='$pass'";
		$result=mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
		   if($row){
			   
				$_SESSION['uid']=$row['uid'];
				$_SESSION['uemail']=$email;
				header("location:index.php");
				
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Email or Password doesnot match!</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>