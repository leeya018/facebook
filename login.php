<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "facebook_lee";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbName);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

// // Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
// 	echo "Database created successfully";
// } else {
// 	echo "Error creating database: " . $conn->error;
// }

//create table users
// $sql_create_users = "CREATE TABLE users(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// user varchar(30) NOT NULL,
// password varchar(30) NOT NULL,
// reg_date TIMESTAMP
// )";


// if($conn->query($sql_create_users) == TRUE){
// 	echo "table user created successfully";
// }
// else{
// 	echo "cannot creatre TABLE";
// }


$user = $_POST["REQUEST_METHOD"];

$sql_add_user = "INSERT INTO users (user,password) VALUES (?,?)";
$stmt = $conn->prepare($sql_add_user);
$stmt->bind_param("ss" , $user , $password);



// $user = "leeya";
// $password = "1234";
// $stmt->execute();

// $user = "rennana";
// $password = "333";
// $stmt->execute();

// $user = "roni";
// $password = "grew4432432";
// $stmt->execute();

echo "new user added to users table";

$stmt->close();

$conn->close();
?>