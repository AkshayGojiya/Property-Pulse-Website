<?php 
session_start();
include("config.php");
$error="";
$msg="";
$errors = array();
// $information = $_SESSION['info'];
if(isset($_REQUEST['verify']))
{
	$otpUser=$_REQUEST['otpuser'];
    $email = $_SESSION['email'];

    // Retrieve the OTP from the database for the given email
    $email_check = "SELECT otp FROM user WHERE uemail = '$email'";
    $result = mysqli_query($con, $email_check);

    if(mysqli_num_rows($result) == 1){ // Check if the email exists in the database
        $row = mysqli_fetch_assoc($result);
        $otp_from_db = $row['otp']; // Retrieve the OTP from the database

        if($otp_from_db == $otpUser){ // Check if the entered OTP matches the OTP from the database
            // OTP matched, redirect to login page
                $_SESSION['uid']=$row['uid'];
				$_SESSION['uemail']=$email;
				header("location:index.php");
            exit();
        } else {
            // OTP does not match, display error message
            $errors['otp'] = "Invalid OTP! Please enter the correct OTP.";
        }
    } else {
        // Email not found in the database, display error message
        $errors['otp'] = "Email not found or invalid session.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Property Pulse | Let Us Guide You Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="icon" type="image/x-icon" href="Images/android-chrome-512x512.png">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>
	<header>
		<?php require("header.php")?>
	</header>
	<section>
    <div class="login-page">
        <div class="form" >
            <form class="login-form" method="post">
                <h1>Verify</h1>
                <h3>otp sent to your email</h3>
				<?php echo $error; ?><?php echo $msg; ?>
                <input type="text" placeholder="Enter OTP" name="otpuser" required /></br>
                <button type="submit" value="submit" name="verify">Verify</button><br><br>
                <p>Didn't receive otp? <br><br>
                <a class="s1" href="register.php">resend otp</a></p>
            </form>
        </div>
    </div>
	</section>
	<footer>
		<?php require("footer.php")?>
	</footer>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>