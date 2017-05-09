<?php 

//-------------------NOT WORKING-------------------------


$servername="localhost";
$username = "root";
$password="";
$dbname="facebook_lee";

$conn  =new mysqli($servername,$username,$password,$dbname);

if($conn->error){
	die("failed connection" . $conn->error);
}

$sql_get_profile_by_username = "select user,password FROM users WHERE user = '$user' && password='$password'";

$result = $conn->query($sql_get_profile_by_username);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows
		echo "user: " . $row["userName"];
	}
}





$stmt_add_profile->execute();

echo "new record added successfully to profiles table";

$stmt_add_profile->close();
$conn->close();





?>