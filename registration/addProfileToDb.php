<?php 
	
$servername="localhost";
$username = "root";
$password="";
$dbname="facebook_lee";

$conn  =new mysqli($servername,$username,$password,$dbname);

if($conn->error){
	die("failed connection" . $conn->error);
}

$sql_add_profile = "INESRT INTO profiles 
	fisrtName,lastName,userName,email,picture 
	VALUES (?,?,?,?,?)"
$stmt = $conn->prepare($sql_add_profile);
$stmt->bind_param("sssb",$fisrtName,$lastName,$userName,$email,$picture)
if($conn->query($sql_add_profile) === TRUE){
	echo "no data added to profile table"; 
}

$conn->close();


 ?>}
