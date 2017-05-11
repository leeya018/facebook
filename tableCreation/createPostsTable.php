<?php 

$servername="localhost";
$username = "root";
$password="";
$dbname="facebook_lee";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->error){
	die("connection failed" .  $conn->error);
}

$sql_create_posts = "CREATE TABLE posts(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userName VARCHAR(40) NOT NULL,
postMessage VARCHAR(40) NOT NULL,
reg_date TIMESTAMP
)";

if($conn->query($sql_create_posts) === TRUE){
	echo "posts table created successfully";
}else{
	echo "error creating table" . $conn->error;
}

$conn->close();




 ?>