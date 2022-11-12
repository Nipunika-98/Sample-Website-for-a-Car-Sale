<?php
	if(!isset($_SESSION)){
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
        background:linear-gradient(#e66465, #9198e5);
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
//creating connection
$server="localhost";
$username="root";
$password="";
$database="19ITIT465";

	$conn=new mysqli($server,$username,$password,$database);
	
 
	if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}
	$model= (isset($_POST['model']))?$_POST['model']:'';
	$type=(isset($_POST['type']))?$_POST['type']:'';

			$sql="SELECT brand,model,c_type,conditions,type,price,description,file
				FROM postad WHERE 1";
		$sql.= ($model) ? " and brand='$model'": '';
		$sql.= ($type) ? " and c_type='$type'" : '';
		

		$result=mysqli_query($conn,$sql) or die('error');
		
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				$imageURL='uploads/'.$row['file'];
				
				$brand=$row['brand'];
				$model=$row['model'];
				$c_type=$row['c_type'];
				$type=$row['type'];
				$price=$row['price'];
				$condition_of_car=$row['conditions'];
				$description=$row['description'];
				$file=$row['file'];
				
						
				echo "<div class='main'>";
				echo "<div class='card'>";

				?>
				<img src="<?php echo $imageURL; ?>" alt="" height="300px" width="400px"/>
				<?php
				echo "<div class='container'>";
				echo "<h4>Brand: $brand</h4>";
				echo "<h5>Model: $model</h5>";
				echo "<h5>Car Type:$c_type</h5>";
				echo "<p>Type: $type</p>";
				echo "<p>Price:$price LKR</p>";
				echo "<p>Condition:$condition_of_car</p>";
				echo "<p>Description: $description</p>";
	
				echo "<p>Contact:nipunika@gmail.com</p>";
				echo "</div>";
				echo "</div>";
				echo "<br>";
				echo "</div>";
				
			}
		}else{
			echo"<script>alert('There are Still no Ads in the selected Category')
		window.location.href='home.php'</script>";;
		}
?>
</body>
</html>



