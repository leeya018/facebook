<?php 
function addPostByUser(){
	$servername="localhost";
	$username = "root";
	$password="";
	$dbname="facebook_lee";

	$conn  =new mysqli($servername,$username,$password,$dbname);

	if($conn->error){
		die("failed connection" . $conn->error);
	}
	
	$directoryGlob =  $_SERVER['DOCUMENT_ROOT'] . "/php_stuff/facebook/login/glob.php";

	include $directoryGlob;

	$userName  = $_COOKIE[$cookieUser];
	$postMessage = $_POST["postMessage"];


	$sql_add_post = "INSERT INTO posts (userName,postMessage) VALUES (?,?)";
	$stmt = $conn->prepare($sql_add_post);
	$stmt->bind_param("ss",$userName,$postMessage);

	$stmt->execute();

	echo "new record added successfully to posts table". "<br>";


	$stmt->close();


	$conn->close();
}
?>
