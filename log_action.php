<?php
	if(!isset($_SESSION)){
		session_start();
	}
?>
<?php	
//creating connection
$server="localhost";
$username="root";
$password="";
$database="19ITIT465";
	
	$conn=new mysqli($server,$username,$password,$database);
 
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
	
	
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["password"] = $_POST["password"];
	
	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	
	$sql = "SELECT * FROM register WHERE email = '$email' AND password='$password'";
	$result = $conn->query($sql);
	
	$admin = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
	$admin_result = $conn->query($admin);

	//exit("$admin");
	
	
	if($result->num_rows>0){
        echo"<script>alert('Login Successfull,You can post your own Ad now-Click Post Ad')
		window.location.href='home.php'</script>";
		
		
	}else if($admin_result->num_rows>0){ 
		echo "<script>alert('Login Successfull as Admin')
		window.location.href='home.php'</script>";
		
	}else{
		echo"<script>alert('Either you are not a registered user, or entered password is incorrect')
		window.location.href='home.php'</script>";
	}
	
	
?>