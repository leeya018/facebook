<?php 
// echo $_GET['PID'];   -  all data is saved in here when we sent it from the a tag
// <a href="/php_stuff/facebook/home/myFriends/showFriendProfile/index.php?PID=



include 'getProfileIClicked.php';
$rowProfile = getProfileIClicked();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body>
	<form method="post" enctype="multipart\data-from">
		<p><?php echo $rowProfile["firstName"]; ?></p>
		<p><?php echo $rowProfile["lastName"]; ?></p>
		<p><?php echo $rowProfile["userName"]; ?></p>
		<p><?php echo $rowProfile["email"]; ?></p>
		<?php 
		session_start();
		$_SESSION['friend'] =  $rowProfile["userName"];

		?>
		<input id="add_rem_butt"  type="submit" name="submit2" value="<?php $searchFriendDir =  $_SERVER['DOCUMENT_ROOT'] . "/php_stuff/facebook/home/searchFriend/checkIfFriend.php"; include $searchFriendDir; $_SESSION['btn_name'] =  checkIfFriend(); echo $_SESSION['btn_name']; ?>" >
		<!-- //fix the include -->
	</form>
	<?php 

	$addNewFriendDir =  $_SERVER['DOCUMENT_ROOT'] . "/php_stuff/facebook/home/searchFriend/addNewFriend.php"; 
	include $addNewFriendDir;


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['submit2'])){
			if($_SESSION['btn_name'] == "add"){
			echo "this is add :";
			addNewFriend(); 
		}
		if($_SESSION['btn_name'] == "remove"){
			echo "this is remove :";
			remNewFriend(); 

		}

		}
	}
	// session_destroy();
	?>
</body>
</html>