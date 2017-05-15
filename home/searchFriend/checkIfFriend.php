<?php 
function checkIfFriend(){
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
	$searchFriend = $_SESSION['friend'];
	// echo "need to delete -me :  " . $userName . "searchFriend : " .$searchFriend; 

$sql = "select friendUserName FROM friends WHERE userName = '$userName' and friendUserName = '$searchFriend'"; // need an init $user

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows
		$friends[]  = $row["friendUserName"];	
	}
}

$message="p";
if(empty($friends)){
	$message = "add";
}else{
	$message = "remove";	
}


$result->close();
$conn->close();


return $message;

}
?>
