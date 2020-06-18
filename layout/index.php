<?php 

/*	require_once "dbconfig.php";

	if(!$user->isLoggedIn()){
		header("location: login.php");}

	$currentUser = $user->getUser();
*/
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>UTS Playlist Music</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
<div class="container">
	<div class="header">
		<img src="<?php echo ASSET; ?>images/header2.jpg">
	</div>

	<div class="menu">
		<a href="index.php">Home</a>
		<a href="index.php?page=artist_tampil">Artist</a>
		<a href="index.php?page=album_tampil">Album</a>
		<a href="index.php?page=Track_tampil">Track</a>
		<a href="index.php?page=Played_tampil">Played</a>
	</div>

	<div class="main">		
		<?php 
		if (isset($_GET['page'])) {
			include $_GET['page'] . ".php"; 
		} else {
			include "main.php";
		}
		 ?>
	</div>
	<div class="footer">
		copyright taufiqmtrs
	</div>
</div>
</body>
</html>












