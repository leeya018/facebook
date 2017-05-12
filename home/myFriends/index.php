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
			$str = "";
			foreach ($friendRows as $key => $value) { ?>
			<?php foreach ($value as $key1 => $value1) { 
				$str = $str . " " . $value1;
				?>
				<?php
			} ?>
			<li>
			<a href=""><?php echo $str; ?></a>
			</li>
			<?php 
			$str = "";
		} ?>
	</ul>
</div>
</body>
</html>



