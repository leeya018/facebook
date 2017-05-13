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
	<p><?php echo $rowProfile["firstName"]; ?></p>
	<p><?php echo $rowProfile["lastName"]; ?></p>
	<p><?php echo $rowProfile["userName"]; ?></p>
	<p><?php echo $rowProfile["email"]; ?></p>
</body>
</html>