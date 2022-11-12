<?php
	session_start();
?>
<html>
	<head>
		<title>Registration Page</title>
		<link rel="stylesheet" type="text/css" href="stylereg.css">
	</head>
	<body>
	 <div class="parent clearfix">
		<div class="bg-illustration">
      <!--<img src="logo.png" alt="logo"><!--<a href="#"><img src="logo.png" class="logo"></a>-->
		<div class="thumbnail__content text-center">
			<h1 class="heading--primary">Welcome to Speedo!</h1>
			<h2 class="heading--secondary">Are you ready to get our membership?</h2>
		</div>

			<div class="burger-btn">
				<span></span>
				<span></span>
				<span></span>
			</div>

				</div>
			
					<div class="register">
						<div class="container">
							<h1>Register as a Member</h1>
			
						<div class="reg-form">
						<form method='post'action='reg_action.php'>
							<input type='text'name='first_name'class='input-field'placeholder='First Name'required>
							<input type='text'name='last_name'class='input-field'placeholder='Last Name'required>
							<input type="text"name='nic' class='input-field'maxlength='12'placeholder='NIC'required>
							<input type='text'name='city'class='input-field'placeholder='City(Home town)'required>
							<input type='text'name='email'class='input-field'placeholder='Email'required>
							<input type='text'name='password'class='input-field'maxlength='20'placeholder='Password'required>

							<button type="submit">Register</button>

						</form>
						</div>
			
					</div>
				</div>
			</div>
			
</div>
	</body>
</html>