<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	// echo "test";
	include 'getFriendsByUserName.php';
	$friendRows= getFriendsByUserName();
	// print_r($friendRows);
	// foreach ($friendRows as $key => $value) {
	// 	echo $value;
	// }
	echo "=====================";
	?>
	<div>
		<ul>
			<?php foreach ($friendRows as $key => $value) { ?>
			<li>
			<input type="submit" name="" value="<?php echo $value; ?>">
			</li>
			<?php } ?>
		</ul>
	</div>
</body>
</html>


