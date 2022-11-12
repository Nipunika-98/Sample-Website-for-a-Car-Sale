<?php
	session_start();
?>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css"  href="stylelog.css">
		
	</head>
	<body>
	
		<div class="login">
			<h2 class="active"> sign in </h2>
			
		<form action='log_action.php' method='post'>
			<input type="text" class="text" name="email"required>
			<span>email</span><br/><br/>
			
			<input type="password" class="text" name="password" required>
			<span>password</span><br/>
			
			<input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
			<label for="checkbox-1-1">Keep me Signed in</label>
    
			<button type="submit" class="signin">Sign In</button><hr>

			<a href="#">Forgot Password?</a>
		</form>
		</div>


	
	</body>
</html>