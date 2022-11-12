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


$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;

//inserting user input data inyo DB
$sql="INSERT INTO postad(m_nic,brand,model,c_type,conditions,type,price,description,file) 
VALUES('$_POST[m_nic]','$_POST[brand]','$_POST[model]','$_POST[c_type]','$_POST[conditions]','$_POST[type]','$_POST[price]','$_POST[description]','$fileName')";

if($conn->query($sql)===TRUE){
	//echo"New Record Created";
}else{
	echo"Error";
}
	// Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
		echo "uploaded successfully";
		}else{
			echo "Not INSERT Image";
		}
            
$conn->close();

header("Location: home.php? Your.ad.posted.successfully");
?>