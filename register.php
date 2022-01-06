<?php
include "query.php";
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$q = new query();

if(!empty($name) && !empty($email) && !empty($password1) && !empty($password2)){
	if($password1 == $password2){
		if($user = $q->fetchData($email)){
			$_SESSION['reg_alert'] = "Email Exist";
			header('location: registerform.php');
		}else{
			$q->addData($name, $email, $password1);
			header('location: loginform.php');
		}
	}else{
		$_SESSION['reg_alert'] = "password not matched";
			header('location: registerform.php');
	}
}else{
		$_SESSION['reg_alert'] = "Enter all the fields";
		header('location: registerform.php');
}




  ?>