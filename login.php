<?php
 require('connect.php');
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/form.css">
    
  </head>

  <body>
        <div class="form">
            <h2 style="text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">LOG-IN</h2>
            <form method="POST" action="login_regiseller.php">
                <div class="error-text">Error</div>
               
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email"placeholder="Enter Your Email" required>
                </div>
                
                <div class="grid-details">
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="password"placeholder="Password" required>
                    </div>
                    
                  </div>  
                   
                 <div class="submit">
                   <input type="submit" value="Login Now" class="button" name="login">
                 </div>

            </form>
        <div class="link">Not Signed up? <a href="register.php">Sign Now</a></div> 
        </div>
  </body>
</html>