<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	include 'getProfileByUserName.php';
	$rowProfile = getProfileByUserName();
	echo $rowProfile["picture"];
	echo "=====================";
		// echo $rowProfile["firstName"];
	?>

	<h2>hello <?php echo $rowProfile["firstName"] . " " . $rowProfile["lastName"];?></h2>
	<h3>your details : </h3>
	<span><?php echo $rowProfile["userName"];?></span><br>
	<span><?php echo $rowProfile["email"];?></span><br>
	<img src="<?php echo $rowProfile["picture"]?>" width="500px" height="500px">


<!-- 	<?php 

	// $image = $rowProfile["picture"];
	// echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';
	?> -->

</body>
</html>