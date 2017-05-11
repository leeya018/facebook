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
	first name : <input id="nameInput" type="text" name="firstName" placeholder="first name" ><br>
		last name : <input id="lastNameInput" type="text" name="lastName" placeholder="last name" ><br>
		user name : <input id="userInput" type="text" name="userName" placeholder="user name" ><br>
		email : <input id="emailInput" type="email" name="email" placeholder="email"><br>
		add picture : <input type="file" name="picture" placeholder="picture"><br>
		password : <input id="passInput" type="password" name="password"><br>
		re-enter password : <input id="repassInput" type="password" name="re_password" ><br>
		<input type="submit" name="submit" value="register"><br>


	</form>

	<button id="initDataBut" onclick="initData()">init fields</button>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script type="text/javascript">

		$( document ).ready(function() {

		});
			function initData(){
				$("#nameInput").val("eden");	
				$("#lastNameInput").val("lala");	
				$("#userInput").val("edenya");	
				$("#emailInput").val("edenya@mail");	
				$("#passInput").val("eden1");	
				$("#repassInput").val("eden1");	
			}
</script>

</body>
</html>


