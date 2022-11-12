<?php
	session_start();
?>
<html>
<head>
<link rel="stylesheet" href="stylemem.css">
</head>
<body>
<!--<header>
		<a href="index.php"><img class="logo" src="images/homelogo.png" alt="Logo"></a>
	</header>-->
<?php
$conn=mysqli_connect("localhost","root","","19ITIT465");

$sql = "SELECT first_name,last_name,nic,email,city FROM register ";
$result = $conn->query($sql);
if($result->num_rows > 0){
	
	echo "<div class='title'>
	<h1>Registered Members</h1>
	</div>";
		while($row = $result->fetch_assoc()){
			
			echo "<div class='member'>";
			echo "<h3>Name: ".$row['first_name']." ".$row['last_name']."</h3>";
			echo "<p>NIC: ".$row['nic']."<p>";
			echo "<p>Email: ".$row['email']."<p>";
			echo "<p>City: ".$row['city']."<p>";
			echo "<hr class='line'>";
			echo "</div>";
		}
		
	}else {
		echo "error printing members";
	}
	
$conn->close();

?>
</body>
</html>