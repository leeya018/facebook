<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div id="navbar" class="collapse navbar-collapse">

      <ul class="nav nav-tabs">
       <li class="active"><a href="#myProfile" data-toggle="tab">my Profile</a></li>
       <!-- class="active" - in  the li tag is active but make somne problems -->
       <li><a href="#posts" data-toggle="tab">posts</a></li>
       <li><a href="#searchFriend" data-toggle="tab">search friend</a></li>
       <li><a href="#myFriends" data-toggle="tab">my friend</a></li>
     </ul>
     <div class="tab-content" id="tabs">
       <div class="tab-pane" id="myProfile">
        <?php include 'myProfile/index.php';?>
      </div>
      <div class="tab-pane" id="posts">
       <?php include 'posts/index.php';?>
     </div>
     <div class="tab-pane" id="searchFriend">
      <?php include 'searchFriend/index.php';?>


    </div>
    <div class="tab-pane" id="myFriends">
      <?php include 'myFriends/index.php';?>
    </div>
  </div>


  <script src="jquery.min.js" ></script>
  <script type="text/javascript">

     $(document).ready(function(){
      activaTab('myProfile');

    });

   function activaTab(tab){
    var log = console.log;
    log('.nav-tabs a[href="#' + tab + '"]');

    // log($('.nav-tabs a[href="#' + tab + '"]').tab('show'));
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
  }
</script>
</body>
</html>
