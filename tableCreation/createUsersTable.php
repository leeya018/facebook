<?php 

$servername="localhost";
$username = "root";
$password="";
$dbname="facebook_lee";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->error){
	die("connection failed" .  $conn->error);
}

$sql_create_users = "CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user VARCHAR(40) UNIQUE  NOT NULL,
password VARCHAR(40) NOT NULL,
reg_date TIMESTAMP
)";

if($conn->query($sql_create_users) === TRUE){
	echo "users table creeated successfully";
}else{
	echo "error creating table" . $conn->error;
}

$conn->close();




 ?>