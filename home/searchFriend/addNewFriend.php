<?php 
function addNewFriend(){

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
	$friendUserName =  $_SESSION['friend'];
	echo "----" . $_SESSION['friend'] . "-----";


	$sql_add_friend = "INSERT INTO friends (userName,friendUserName) VALUES (?,?)";
	$stmt = $conn->prepare($sql_add_friend);
	$stmt->bind_param("ss",$userName,$friendUserName);

	$stmt->execute();

	echo "new record added successfully to friends table". "<br>";


	$stmt->close();


	$conn->close();

}


function remNewFriend(){

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
	$friendUserName =  $_SESSION['friend'];
	echo "----" . $_SESSION['friend'] . "-----";


	$sql_rem_friend = "DELETE FROM friends where userName=? && friendUserName=?";
	$stmt = $conn->prepare($sql_rem_friend);
	$stmt->bind_param("ss",$userName,$friendUserName);

	$stmt->execute();

	echo " record removed successfully from friends table". "<br>";


	$stmt->close();


	$conn->close();
}

?>
