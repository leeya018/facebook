<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		if($_POST["password"] !== $_POST["re_password"]){
			echo "passwords are not the same";
		}else{
			echo "passwords are the same";
		}
	}
 ?>
<h2>create your profile :</h2><br>
<form action="register.php" method="post" enctype="multipart/form-data">
	first name : <input type="text" name="firstName" placeholder="first name" ><br>
	last name : <input type="text" name="lastName" placeholder="last name" ><br>
	user name : <input type="text" name="userName" placeholder="user name" ><br>
	email : <input type="email" name="email" placeholder="email"><br>
	add picture : <input type="file" name="picture" placeholder="picture"><br>
	password : <input type="password" name="password"><br>
	re-enter password : <input type="password" name="re_password" ><br>
	<input type="submit" name="submit" value="register"><br>


</form>
</body>
</html>