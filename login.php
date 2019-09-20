<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>We're Team Chernobyl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="logo"><h1>Team Chernobyl</h1></div> 
	<div class="login">
	  <h1>LOGIN</h1>
		<?php include('errors.php'); ?>
	  <form method="post" action="">
	    <p><input type="text" name="username" value="" placeholder="Username"  required></p>
	    <p><input type="password" name="password" value="" placeholder="Password" minlength="8" required></p>
	      <label>
	        <input type="checkbox" name="remember_me" id="remember_me">
	        Keep Me Logged In
	      </label><br>
	      <a href="#">Forgot Password?</a>.
	    <input class="submit" type="submit" name="login-user" value="Login">
          
          <div><p>Don't Have an Account?</p></div>
          <p><a href="signup.php" class="signup-button">Create Account</a>
          <div class="register">
						<span>
				           OR 
                        </span>
                        
                </div>       
                 <div class="register1">
						<span>
				          Sign Up Using
                        </span>
                        
                </div>    
                <div class="smedia">
                    <a href="http://www.facebook.com"><img src="facebookimg.png" width="30px" height="30px" /></a>
                    
                    <a href="http://www.twitter.com"><img src="twitterimg.png" width="30px" height="30px"/></a>
                    
                    <a href="http://www.google.com"><img src="googleimg.png" width="30px" height="30px" /></a> 
                </div>
	  </form>
	 
	</div>
    
	<div class="login-help"></div>
</body>
</html>
