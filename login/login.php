<?php
include 'glob.php';
echo "login.php : cookieUser test : " . $cookieUser . "<br>";
//data we need to connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "facebook_lee";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbName);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

//userName from the html form (input text)
$user = $_POST["userName"];
//password from the html form (input text)
$password = $_POST["password"];
//check that we init fields in the html form
if(empty($user) || empty($password)){
	die("user or password is not init");//end the script
}
//query for fetching the row in table witch fits to user and password we enter
$sql_check_user_pass = "select user,password FROM users WHERE user = '$user' && password='$password'";
//operate the query
$result = $conn->query($sql_check_user_pass);
//check that we got a rows from table
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {//print rows
		echo "user: " . $row["user"]. " - pass: " . $row["password"].  "<br>";
		 $cookieUserNameVal = $row["user"];
		 $cookiePasswordVal = $row["password"]; 
		setcookie($cookieUser,$cookieUserNameVal,time() + (86400 * 30), '/');//forth parameten make the cookie avaliable from all  parts of the site
		setcookie($cookiePassword,$cookiePasswordVal,time() + (86400 * 30), '/');
	}
}
else{
	echo "your userName or password are incorrect";
}


$result->close();//close result
$conn->close();//close connection


header('Location: /php_stuff/facebook/home/index.php');//change the location of my view page to the one I mettion in the header 
//get the user profile:

// -> nove this to the profile section
// include 'getProfileByUserName.php';//change posistion of this file to the same folder (getProfileByUserName.php);
// echo "ssss";
// getProfileByUserName();
// echo "qqq";



?>