<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Speedo</title>
	<link rel="stylesheet" href="stylehome.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="header">
<div class="container">
	<div class="navbar">
		<div class="logo">
			<img src="images/Speedo.png" width="125px">
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="Registration.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="password_check.php"method = "post">Post AD</a></li>
				<li><a href="admin_check.php" method = "post">View Members</a></li>
				<li><a href="view_ad.php" method = "post">Your Ads</a></li>
				<li><a href="logout.php" method ="post">Logout</a></li>
			</ul>
		</nav>
		<img src="images/cart.png" width="30px" height="30px">
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
	<div class="row">
		<div class="col-2">
			<h1>Find The Best <br>Vehical For You!</h1>
			<form  method="POST" action="search_result.php">
				<div class="lable">
				
						<label for="cars">Select Model:</label>
						<select class="cars" name="model">
						  <option value=""></option>
						  <option value="Audi">Audi</option>
						  <option value="BMW">BMW</option>
						  <option value="Ferrari">Ferrari</option>
						  <option value="Honda">Honda</option>
						  <option value="Jaguar">Jaguar</option>
						  <option value="Mazda">Mazda</option>
						  <option value="Mercedes-Benz">Mercedes-Benz</option>
						  <option value="Mitsubishi">Mitsubishi</option>
						  <option value="Nissann">Nissann</option>
						  <option value="Toyota">Toyota</option>
						  
						  </select>
						  
						<label for="cars">Select Type:</label>
						<select class="cars" name="c_type">
						  <option value=""></option>
						  <option value="Convertible">Convertible</option>
						  <option value="Coupe">Coupe</option>
						  <option value="Hatchback">Hatchback</option>
						  <option value="Luxury">Luxury</option>
						  <option value="Sports cars">Sports cars</option>
						  <option value="SUV">SUV</option>
						  <option value="Wagon">Wagon</option>
						  </select>
						  
				</div>

				<input type="submit" name="submit" class="btn" value =" Search &#8594;" />
			</form>

			<!--<a href="#" method="post" class="btn">Search &#8594;</a>-->
			
		</div>
		
	</div>
</div>
</div>	

<!-----featured categories----->
	<div class="categories">
		<div class="small-container">
			<div class="row">
			<div class="col-3">
				<img src="images/car-1.jpg">
			</div>
			<div class="col-3">
				<img src="images/car-2.jpg">
			</div>
			<div class="col-3">
				<img src="images/car-3.jpg">
			</div>
			</div>
		</div>
		
	</div>
	
	<!-----featured brands----->
	<div class="small-container">
		<h2 class="title">FeaturedBrands</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/car-4.jpg">
				<h4>Toyota Car</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<p>Rs. 16.52 - 24.59 Lakh</p>
			</div>
			<div class="col-4">
				<img src="images/car-5.jpg">
				<h4>Honda Car</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<p>Rs. 16.52 - 24.59 Lakh</p>
			</div>
			<div class="col-4">
				<img src="images/car-11.png">
				<h4>Mercedes Benz Car</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<i class="far fa-star"></i>
				</div>
				<p>Rs. 16.52 - 24.59 Lakh</p>
			</div>
			<div class="col-4">
				<img src="images/car-9.png">
				<h4>Ford Car</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<p>Rs. 16.52 - 24.59 Lakh</p>
			</div>
			<div class="col-4">
				<img src="images/car-12.jpg">
				<h4>Lamborgini</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<p>Rs. 50.52 - 80.59 Lakh</p>
			</div>
			<div class="col-4">
				<img src="images/car-8.png">
				<h4>Nissann</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<p>Rs. 30.52 - 50.59 Lakh</p>
			</div>
			<div class="col-4">
				<img src="images/car-1.jpg">
				<h4>BMW</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<i class="far fa-star"></i>
				</div>
				<p>Rs. 30.52 - 60.59 Lakh</p>
			</div>
			<div class="col-4">
				<img src="images/car-2.jpg">
				<h4>BMW</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				<p>Rs. 30.52 - 65.59 Lakh</p>
			</div>
		</div>
	</div>
	<!-----Brands Logo----->
	<div class="brands">
		<div class="small-container">,
			<div class="row">
				<div class="col-5">
					<img src="images/car-logo-png-2296.png">
				</div>
				<div class="col-5">
					<img src="images/car-logo-png-2297.png">
				</div>
				<div class="col-5">
					<img src="images/car-logo-png-2302.png">
				</div>
				<div class="col-5">
					<img src="images/car-logo-png-2308.png">
				</div>
				<div class="col-5">
					<img src="images/car-logo-png-2310.png">
				</div>
				<div class="col-5">
					<img src="images/car-logo-png-2319.png">
				</div>
			</div>
		</div>
	</div>
	
	<!-----footer----->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class=footer-col-1>
					<h3>Join Our Site</h3>
				</div>
				<div class=footer-col-2>
					<img src="images/Speedo.png">
					<p>We can give our our best service for you.</p>
				</div>
				<div class=footer-col-3>
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class=footer-col-4>
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>YouTube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright@2021-Design by Nipunika Basnayake</p>
		</div>
	</div>
	<!-----js for toggle menu----->
		<script>
			var MenuItems= document.getElementById("MenuItems");
			
			MenuItems.style.maxHeight="0px";
			
			function menutoggle(){
			if(MenuItems.style.maxHeight=="0px"){
				MenuItems.style.maxHeight="200px";}
				else
					{
						MenuItems.style.maxHeight="0px";}
			}
		</script>
	
</body>
</html>