<?php 

$servername="localhost";
$username = "root";
$password="";
$dbname="facebook_lee";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->error){
	die("connection failed" .  $conn->error);
}

$sql_create_profiles = "CREATE TABLE profiles(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(40) NOT NULL,
lastName VARCHAR(40) NOT NULL,
userName VARCHAR(40) UNIQUE NOT NULL,
email VARCHAR(40) UNIQUE NOT NULL,
picture blob,
reg_date TIMESTAMP
)";

if($conn->query($sql_create_profiles) === TRUE){
	echo "profiles table creeated successfully";
}else{
	echo "error creating table" . $conn->error;
}

$conn->close();




 ?>