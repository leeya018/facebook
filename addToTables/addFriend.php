<?php 

$servername="localhost";
$username = "root";
$password="";
$dbname="facebook_lee";

$conn  =new mysqli($servername,$username,$password,$dbname);

if($conn->error){
	die("failed connection" . $conn->error);
}

$userName = "roniya";
$friendUserName = "leeya";


$sql_add_friend = "INSERT INTO friends (userName,friendUserName) VALUES (?,?)";
$stmt = $conn->prepare($sql_add_friend);
$stmt->bind_param("ss",$userName,$friendUserName);

$stmt->execute();

echo "new record added successfully to friends table". "<br>";


$stmt->close();


$conn->close();

?>
