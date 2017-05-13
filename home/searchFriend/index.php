

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart\data-from">
		<input type="text" name="searchFriend">
		<input type="submit" name="submit" value="search friend">
	</form>

	<?php 
	include 'searchFriend.php';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$_POST['submit'] = null;
		if(isset($_POST['submit'])){ // not working
			echo "-----------";
			$rowFriends = searchFriendByName();
			foreach ($rowFriends as $key => $value) {	?>
				
				<li>
				<a href="/php_stuff/facebook/home/myFriends/showFriendProfile/index.php?PID=<?php echo $value; ?>""><?php echo $value; ?></a> 
				<!-- still did not check this because it does not working correctly -->
			</li>
			<?php }	

		}
	
	}
?>
</body>
</html>