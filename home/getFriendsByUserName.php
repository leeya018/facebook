<?php 






function getFriendsByUserName(){
	$friends= array(); // this var gets init, and this method returns it back

	$directoryGlob =  $_SERVER['DOCUMENT_ROOT'] . "/php_stuff/facebook/login/glob.php";

	include $directoryGlob;


	$servername="localhost";
	$username = "root";
	$password="";
	$dbname="facebook_lee";

	$conn  =new mysqli($servername,$username,$password,$dbname);

	if($conn->error){
		die("failed connection" . $conn->error);
	}

	$userName  = $_COOKIE[$cookieUser];
	// echo "$userName : " . $_COOKIE[$cookieUser];

$sql = "select friendUserName FROM friends WHERE userName = '$userName'"; // need an init $user

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows

		// echo "userName: " . $row["friendUserName"];
		$friends[] = $row["friendUserName"];

	}

	// $friends[] = "MICKEL";
}else{
	echo "there is 0 records";
}



$result->close();
$conn->close();

return $friends;

}

?>