<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
        background:linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 46%, rgba(6,69,161,1) 50%, rgba(0,212,255,1) 100%);
    }
    .main{
        display: inline-block;
        padding: 16px;
        align-items: center;
        

    }

    .card {
        width: 400px;
        margin-left:0;
        border-radius: 5px; 
        background:#fff; 
        
        
    
  /* Add shadows to create the "card" effect */
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	  transition: 0.3s;
	}

	/* On mouse-over, add a deeper shadow */
	.card:hover {
	  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	/* Add some padding inside the card container */
	.container {
	  padding: 16px auto;
	  text-align: center;
	}

	/* Add rounded corners to the top left and the top right corner of the image */
	img {
	  border-radius: 5px 5px 0 0;
	}
		
	</style>
</head>
<body>

<?php
//ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
$server="localhost";
$username="root";
$password="";
$database="19ITIT465";

//create connection
	$conn=new mysqli($server,$username,$password,$database);

//check connection
if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}

//extract($_POST);
//exit ("$nic");
//if($_POST['search']){
//if ($search){
	//print_r($_POST);
	//exit;
	$nic = $_POST['nic'];
	

	
	$sql = "SELECT brand,model,c_type,type,price,conditions,description,file,m_nic FROM postad
					WHERE m_nic='$nic'";
			
	$result = mysqli_query($conn,$sql) or die ('error');
	
		while($row=mysqli_fetch_assoc($result)){
			
			$imgURL='uploads/'.$row['file'];
			
			$brand=$row['brand'];
			$model=$row['model'];
			$c_type=$row['c_type'];
			$type=$row['type'];
			$conditions=$row['conditions'];
			$price=$row['price'];
			$description=$row['description'];
			$m_nic=$row['m_nic'];
			
			
				echo "<div class='main'>";
    			echo "<div class='card'>";

    				?>
				<img id="img" src="<?php echo $imgURL; ?>" alt="" height="300" width="400"/>
				<?php

				echo"<div class='container'>";
				echo"<h4>Brand:$brand</h4>" ;
				echo"<h5>Model:$model</h5>" ;
				echo"<p>Car Type:$c_type</p>" ;
				echo"<p>Type:$type</p>" ;
				echo"<p>Condition:$conditions</p>" ;
				echo"<p>Price:$price</p>" ;
				echo"<p>Description:$description</p>" ;
				
				/*?>
				<img id="img" src="<?php echo $imgURL; ?>" alt="" height="100" width="200"/>
				<?php*/
				
				echo"</div>" ;
				echo"</div>" ;
				echo "<br>";
				echo"</div>" ;

				
			
		}
?>
</body>
</html>
		
	

