<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <title>Sign up</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    
 <body class="bstyle">
    <div class="logo"><h1>Team Chernobyl</h1></div> 
       <div class="login">
             <div id="register">
                 <h1>SIGN UP</h1>
                 <?php include('errors.php'); ?>
                            <form  action="" method="post">  
                                <p> 
                                    <input id="firstnamesignup" required name="username" type="text" placeholder="Username" />
                                </p>
                                 
                                <p> 
                                    <input id="emailsignup" name="email" required type="email" placeholder="Email"/> 
                                </p>
                                <p> 
                            
                                    <input id="passwordsignup" name="password_1" required type="password" minlength="8" placeholder="Password "/>
                                </p>
                                <p> 
                                    <input id="passwordsignup_confirm" name="password_2" required type="password" minlength="8" placeholder="Confirm password"/>
                                </p>
                                 <button type="submit" name="reg_user" class="signup-button">SIGN UP</button>

                                
                                <p class="change_link">  
                                    Have an account?
                                    <a href="login.php" class="to_register"> LOGIN</a>
                                </p>
                            </form>
            </div>
     </div>

   </body>
</html>
