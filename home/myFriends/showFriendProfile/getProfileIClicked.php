<?php 






function getProfileIClicked(){
	$profile; // this var gets init, and this method returns it back


	$directoryGlob =  $_SERVER['DOCUMENT_ROOT'] . "/php_stuff/facebook/login/glob.php";
//$_SERVER['DOCUMENT_ROOT'] is the root directory : C:/xampp/htdocs/
	//when I need a file which is not on folder location level so I will take fool path
	include $directoryGlob;


	$servername="localhost";
	$username = "root";
	$password="";
	$dbname="facebook_lee";

	$conn  =new mysqli($servername,$username,$password,$dbname);

	if($conn->error){
		die("failed connection" . $conn->error);
	}

	$userName  = $_GET['PID'];

$sql_get_profile_by_username = "select firstName,lastName,userName,email,picture FROM profiles WHERE userName = '$userName'"; // need an init $user

$result = $conn->query($sql_get_profile_by_username);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows
		 $profile = $row;
	}


}else{
	echo "there is 0 records";
}



$result->close();
$conn->close();

return $profile;

}

?>