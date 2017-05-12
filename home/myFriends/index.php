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
				$strHref = str_replace(" ","_",$str); // replace the " " char with "_" char for the url
				$len = strlen($strHref);//return the $strHref length
				$strHref = substr($strHref,0,$len-1); // cut the last "_" charchter fromthe string
				?>
				<?php 
				echo '<a href="' . $strHref . '">'
				// strHref we need to see it in the url 
				?>
				<?php echo $str ?>
				<!-- show the str as somthing to click on  -->
				<?php 
				'</a>';

				?>
			</li>
			<?php 
			$str = "";
		} ?>
	</ul>
</div>
</body>
</html>



