<?php 
include "query.php";

$email = $_POST['email'];
$password = $_POST['password1'];

$q = new query();

if($user = $q->fetchData($email)){
	if(password_verify($password, $user->Password)){
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['currentuser'] = $user;
		header('location: home.php');
	}else{
		echo "Password not matched";
	}
}else{
	echo "Email not found";
}

 ?>