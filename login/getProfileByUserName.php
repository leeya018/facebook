<?php 

//-------------------NOT WORKING-------------------------

function getProfileByUserName(){
	include 'glob.php';
	echo " got to getProfileByUserName" . "<br>";

	$servername="localhost";
	$username = "root";
	$password="";
	$dbname="facebook_lee";

	$conn  =new mysqli($servername,$username,$password,$dbname);

	if($conn->error){
		die("failed connection" . $conn->error);
	}

	$userName  = $_COOKIE[$cookieUser];

$sql_get_profile_by_username = "select firstName,lastName,userName,email,picture FROM profiles WHERE userName = '$userName'"; // need an init $user

$result = $conn->query($sql_get_profile_by_username);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows
		echo "firstName: " . $row["firstName"];
		echo "lastName: " . $row["lastName"];
		echo "userName: " . $row["userName"];
		echo "email: " . $row["email"];
		echo "picture: " . $row["picture"];
	}
}else{
	echo "there is 0 records";
}



$result->close();
$conn->close();



}

?>