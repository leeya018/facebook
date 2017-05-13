


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include 'addPostByUser.php';


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		echo "===========================";
		addPostByUser();

	}
	

	?>
	<form method="POST"  enctype="multipart/form-data">
		<textarea name="postMessage"></textarea>
		<input type="submit" name="submit" value="post">

	</form>

	<?php
	include 'getPosts.php';
	$rowPosts = getPosts();
	foreach ($rowPosts as $key => $value) {
		// print_r($value);
	}
	?>


	<div>
		<ul>
			<?php 
			$str = "";
			$strHref = "";
			foreach ($rowPosts as $key => $value) { ?>
			<?php foreach ($value as $key1 => $value1) { 
				$str = $str . $value1 . " ";
				?>
				<?php
			} ?>
			<li>
				<?php 
				// $strHref = str_replace(" ","_",$str);
				// echo $strHref;
				$len = strlen($str);
				// $strHref = substr($strHref,0,$len-1);
				// print_r($strHref);
				$pieces = explode(" ", $str);
				// print_r($pieces);
				?>

				<a href="/php_stuff/facebook/home/myFriends/showFriendProfile/index.php"><?php echo $pieces[0]; ?></a>
				<p>
					<?php 
						unset($pieces[0]); 
	$pieces = array_values($pieces);
					foreach ($pieces as $key => $value) {
						echo $value . " ";
					}
					?>

				</p>
			</li>
			<?php 
			$str = "";
		} ?>
	</ul>
</div>
</body>
</html>