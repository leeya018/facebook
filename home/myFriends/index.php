<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include 'getFriendsByUserName.php';
	$friendRows= getFriendsByUserName();

	?>
	<div>
		<ul>
			<?php 
			foreach ($friendRows as $key => $value) { ?>
			<li>
				<a href="/php_stuff/facebook/home/myFriends/showFriendProfile/index.php?PID=<?php echo $value; ?>""><?php echo $value; ?></a>
			</li>
			<?php 		} ?>
		</ul>
	</div>

</body>
</html>



