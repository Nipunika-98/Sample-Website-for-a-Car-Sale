<html>
	<head>
		<title>View Ads</title>
		<link rel="stylesheet" type="text/css"  href="styleviewad.css">
	</head>
	<body>
	
		<form action="viewad_action.php" method="POST">
			<label for="search">Enter Your NIC</label>
			<input id="search" name="nic" type="search" pattern=".*\S.*" required>
			<!--<input type="submit" name="search" value="search by NIC">-->
			

			<span class="caret"></span>
		</form>


	</body>
	
	
</html>