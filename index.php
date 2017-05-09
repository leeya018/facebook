

<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="login.php" enctype="multipart/form-data">
		user : <input type="text" name="userName" value="<?php include 'glob.php'; if($_COOKIE !== []){echo $_COOKIE[$cookieUser];}?>" placeholder="user name">
		password : <input type="text" name="password" value="<?php include 'glob.php'; if($_COOKIE !== []){echo $_COOKIE[$cookiePassword];}?>" placeholder="password">
		<input type="submit" name="submit" value="login">




		<?php 
		include 'glob.php';
		echo "name : " . $cookieUser . "<br>";
		if($_COOKIE !== []){
			print_r($_COOKIE);
			if(!isset($_COOKIE[$cookieUser])) {
				echo "Cookie user '" . $cookieUser . "' is not set!";
			} else {
				echo "Cookie user '" . $_COOKIE[$cookieUser] . "' is  set!";
				echo "Cookie pass '" . $_COOKIE[$cookiePassword] . "' is  set!";
			}
		}
		?>
	</form>
</body>
</html>