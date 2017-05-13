<?php 

function getPosts(){
	$posts= array(); // this var gets init, and this method returns it back

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


	$sql = "select userName, postMessage from posts where userName in 
	(select friendUserName FROM friends WHERE userName = '$userName')"; // need an init $user

	$result = $conn->query($sql);

	if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows
		$posts[]  = array( $row["userName"] ,$row["postMessage"]);
	}
}else{
	echo "there is 0 records for froends posts";
}


//=============================MY POSTS==========================
$posts1= array();
$sql_me = "select userName, postMessage from posts where userName ='$userName'"; 

$result1 = $conn->query($sql_me);

if($result1->num_rows > 0){
	while($row1 = $result1->fetch_assoc()) {//print rows
		$posts1[]  = array( $row1["userName"] ,$row1["postMessage"]);
	}
}else{
	echo "there is 0 records for my posts";
}

$mergePosts  =array_merge($posts,$posts1);


$result->close();
$conn->close();

return $mergePosts;

}

?>