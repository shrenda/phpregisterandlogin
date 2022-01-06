<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	.name_display{
		font-size: 20px;
		text-align: center;
		border: 1px solid black;
		width: 50%;
		margin: auto;
		margin-bottom: 10px;
	}
	a{
		text-decoration: none;
		background-color: #6699ff ;
		color: white;
		padding: 12px 20px;
		font-size: 17px;
		border-radius: 30px;
	}
</style>
<body>
	<?php 
	session_start();
	if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'])){
		$_SESSION['alert'] = "Please login to enter the page";
		header('location: loginform.php');
		die();
	}

	$user = $_SESSION['currentuser'];
	echo "<div class='name_display'>".$user->Name. "</div>";
	 ?>

	<br><a href="logout.php">logout</a>

</body>
</html>