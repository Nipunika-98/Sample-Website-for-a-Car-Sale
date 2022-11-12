<?php
	session_start();
?>
<html>
	<head>
		<title>Car Details</title>
		<link href="styledet.css" rel='stylesheet' type='text/css'>
	</head>
	<body>
	
		<div class="login-block">
			<h1>Enter you car details</h1>
				<form method='post'action='sell_action.php'enctype="multipart/form-data">
						<input type='text'name='m_nic'placeholder='NIC'required><br/><br/>
						<input type='text'name='brand'placeholder='Brand'required><br/><br/>
						<input type='text'name='model'placeholder='Model'required><br/><br/>
						
						<label for="cars">Car Type:</label>
							<select type='dropdown'name='c_type'class='dropdown-btn'> 
							<option value=''></option>
							<option value='convertible'>Convertible</option>
							<option value='coupe'>Coupe</option>
							<option value='hatchback'>Hatchback</option>
							<option value='luxury'>Luxury</option>
							<option value='sports cars'>Sports cars</option>
							<option value='SUV'>SUV</option>
							<option value='wagon'>Wagon</option>
							</select><br/><br/>
						
						<label for="cars">Condition:</label>
							<select type='dropdown'name='conditions'class='dropdown-btn'> 
							<option value=''></option>
							<option value='brand new'>Brand New</option>
							<option value='registered'>Registered</option>
							<option value='unregistered'>Unregistered</option></select><br/><br/>
							
						<label for="cars">Type:</label>

							<select type='dropdown'name='type'class='dropdown-btn'> 
							<option value=''></option>
							<option value='Diesel'>Diesel</option>
							<option value='Electric'>Electric</option>
							<option value='Hybrid'>Hybrid</option></select><br/><br/>
							
						<input type='text'name='price'placeholder='Price'required><br/><br/>
						<input type='text'name='description'class='description'placeholder='Description'required><br/><br/>
						<input type="file" name="file"title=""required>
						
						
						 <button name="submit">Submit</button>
					</form>
		</div>
		
	</body>
</html>