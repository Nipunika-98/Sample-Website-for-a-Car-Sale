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

//create database
/*$sql= "CREATE DATABASE 19ITIT465";
if ($conn->query($sql)=== TRUE){
	echo"Database created successfully";
}else{
	echo "Error creating database:" . $conn->error;
}

//sql to create table
$sql="CREATE TABLE register (
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
nic VARCHAR(12)PRIMARY KEY ,
city VARCHAR(30) NOT NULL,
email VARCHAR(50)NOT NULL,
password VARCHAR(20) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";

if ($conn->query($sql)=== TRUE){
	echo "Table register created successfully";
} else{
	echo "Error creating table:" . $conn->error;
}

$sql="CREATE TABLE postad (
car_id INT(4)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
m_nic VARCHAR(12),
brand VARCHAR(30),
model VARCHAR(30),
c_type VARCHAR(30),
conditions VARCHAR(15),
type VARCHAR(15),
price DECIMAl(12,2) NOT NULL,
description VARCHAR(255),
file VARCHAR(255),
add_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)";

if ($conn->query($sql)=== TRUE){
	echo "Table postad created successfully";
} else{
	echo "Error creating table:" . $conn->error;
}

$sql="CREATE TABLE admin (
email VARCHAR(30)NOT NULL,
password varchar(30) NOT NULL)";
 
if ($conn->query($sql)=== TRUE){
	echo "Table admin created successfully";
} else{
	echo "Error creating table:" . $conn->error;
}*/
 
$conn->close();
?>