<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="signin.css">
	<title>We're Team Chernobyl</title>
</head>
<body>
	<div class="logo"><h1>Team Chernobyl</h1></div> 
	<div class="login">
		<h1>Sign In</h1>
		<?php include('errors.php'); ?>
	  	<form method="post" action="">
	  		<p><input type="text" name="username" value="" placeholder="Username"></p>
	    	<p><input type="password" name="password" value="" placeholder="Password" required></p>
      		<label>
        	<input type="checkbox" name="remember_me" id="remember_me"> Keep Me Signed In </label><br>
      		<a href="#">Forgot Password?</a>.
	    	<button class="submit" type="submit" name="login_user">SIGN IN</button>
	  	</form>
	 	<a href="signup.php" class="createAccount">Create Account</a>
	</div>
	<div class="login-help">
	</div>
</body>
</html>
