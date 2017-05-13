<?php 
function searchFriendByName(){
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

	$searchFriend  = $_POST["searchFriend"];

$sql = "select userName from profiles where userName = '$searchFriend'";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows
		$friends[]  = $row["userName"];
	}
}else{
	echo "no friends on the list";
}



$result->close();
$conn->close();

return $friends;

}
?>
