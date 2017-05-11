<?php 

// print_r($_FILES["picture"]);


$servername="localhost";
$username = "root";
$password="";
$dbname="facebook_lee";

$conn  =new mysqli($servername,$username,$password,$dbname);

if($conn->error){
	die("failed connection" . $conn->error);
}
//add row to profiles table
$sql_add_profile = "INSERT INTO profiles (firstName,lastName,userName,email,picture) VALUES (?,?,?,?,?)";



$firstName = $_POST["firstName"];	
$lastName = $_POST["lastName"];
$userName = $_POST["userName"];
$email = $_POST["email"];
$picture = $_FILES["picture"];
$password = $_POST["password"];
print_r($_POST);
print_r($picture);

$stmt_add_profile = $conn->prepare($sql_add_profile);
$stmt_add_profile->bind_param("ssssb",$firstName,$lastName,$userName,$email,$picture);

$stmt_add_profile->execute();

echo "new record added successfully to profiles table" . "<br>";

$stmt_add_profile->close();

//add row to users table

$sql_add_user = "INSERT INTO users (user,password) VALUES (?,?)";

$stmt_add_user = $conn->prepare($sql_add_user);
$stmt_add_user->bind_param("ss",$userName,$password);

$stmt_add_user->execute();

echo "new record added successfully to users table". "<br>";

$stmt_add_user->close();


$conn->close();


header('Location: /php_stuff/facebook/login/index.php');//change the location of my view page to the one I mettion in the header 


?>