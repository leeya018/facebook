

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart\data-from">
		<input type="text" name="searchFriend">
		<input type="submit" name="submit1" value="search friend">
	</form>

	<?php 



	include 'searchFriend.php';
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		if(isset($_POST['submit1'])){ // not working
			echo "-----------";
			$rowFriends = searchFriendByName();
			foreach ($rowFriends as $key => $value) {	?>
		
				<li>
					<a name="a_tag" href="/php_stuff/facebook/home/myFriends/showFriendProfile/index.php?PID=<?php echo $value; ?>"><?php echo $value; ?></a> 
					<!-- still did not check this because it does not working correctly -->



				</li>
	
			<?php }	

		}

	}
	?>

	<!-- check if this friend is a frien of mine - print the write text on the button-->
<!-- <script src="jquery.min.js"></script>
<script type="text/javascript">
	function func(){
		// alert($("#add_rem_butt").val() );
		// $("#add_rem_butt").val();

	}
</script>
--></body>
</html>