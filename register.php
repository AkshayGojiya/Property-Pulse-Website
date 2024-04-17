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
            <form action="/login" method="post">
                <h1 style="font-size: 32px;" >Register</h1>
                <h3>Access to our dashboard</h3>
                <input type="text" placeholder="Your Name" name="name" required /></br>
                <input type="number" placeholder="Your Number" name="number" required /></br>
                <input type="email" placeholder="Your Email" name="email" required /></br>
                <input type="password" placeholder="Set Your Password" name="password" required /></br>
                <input type="password" placeholder="Confirm Password" name="cpassword" required /></br>
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
                Upload Any One Id Proof :
                (Aadhar Card/Driving License/Voter Id)
                  <input type="file"> 
              </div>
                <br><button type="submit">Register</button><br><br>
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