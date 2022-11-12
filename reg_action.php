<?php
	session_start();

?>
<?php
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
	//echo "Connected Successfully";


$sql="INSERT INTO register(first_name,last_name,nic,city,email,password) 
VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[nic]','$_POST[city]','$_POST[email]','$_POST[password]')";

if($conn->query($sql)===TRUE){
	echo"New Record Created";
}else{
	echo"Error";
}
$conn->close();
header("Location:home.php?registration.successful");
?>