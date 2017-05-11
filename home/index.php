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
			<ul class="nav navbar-nav">
<!-- 				<li class="active"><input type="submit" name="myProfile" onclick="">myProfile</li>
				<li><a href="/php_stuff/facebook/myProfile/index.php">my profile</a></li>
				<li><a href="/php_stuff/facebook/searchFriends/index.php">search friends</a></li>
				<li><a href="/php_stuff/facebook/login/index.php">logout</a></li> -->
<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Somethin	 else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav nav-tabs">
           <li><a href="#myProfile" data-toggle="tab">my Profile</a></li>
           <!-- class="active" - in  the li tag is active but make somne problems -->
           <li><a href="#posts" data-toggle="tab">posts</a></li>
           <li><a href="#searchFriends" data-toggle="tab">search friend</a></li>
           <li><a href="#myFriends" data-toggle="tab">my friend</a></li>
         </ul>
         <div class="tab-content" id="tabs">
           <div class="tab-pane" id="myProfile">
            <?php include 'myProfile/index.php';?>
          </div>
          <div class="tab-pane" id="posts">...Content2...</div>
          <div class="tab-pane" id="searchFriends">...Content3...</div>
          <div class="tab-pane" id="myFriends">
            <?php include 'myFriends/index.php';?>
          </div>
        </div>

<!--       <h1>try to change span</h1>
  <span id="spanCheck"></span> -->

  <script type="text/javascript">


   $(document).ready(function(){
    activaTab('aaa');

  });

   function activaTab(tab){
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
  };
</script>
</body>
</html>



            <!-- <li class="active"><a href="/php_stuff/facebook/post/index.php">posts</a></li> -->