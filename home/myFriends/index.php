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
			$strHref = "";
			foreach ($friendRows as $key => $value) { ?>
			<?php foreach ($value as $key1 => $value1) { 
				$str = $str . $value1 . " ";
				?>
				<?php
			} ?>
			<li>
				<?php 
				$strHref = str_replace(" ","_",$str);
				$len = strlen($strHref);
				$strHref = substr($strHref,0,$len-1);
				?>

				<!-- echo '<a href="' . $folder_path . '">Link text</a>'; -->
				<a href="/php_stuff/facebook/home/myFriends/showFriendProfile/index.php"><?php echo $str; ?></a>
			</li>
			<?php 
			$str = "";
		} ?>
	</ul>
</div>
</body>
</html>



