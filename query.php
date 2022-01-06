<?php 
class query{
	private $con, $db_name;
	public function __construct($host = 'localhost', $database = 'phploginandregister', $username = 'root', $password=''){
		$this->con = new PDO("mysql:host=".$host.";dbname=".$database, $username, $password);
    	$this->database = $database;
	}

	public function addData($Name, $Email, $Password){
		$hashpwd = password_hash($Password, PASSWORD_DEFAULT);
		$stmt = "INSERT INTO $this->database.users(Name, Email, Password) VALUES ('$Name', '$Email', '$hashpwd')";
		$this->con->exec($stmt);
	}
	public function fetchData($Email){
		$smt_query = "SELECT * FROM $this->database.users WHERE Email = '$Email'";
		$smt = $this->con->query($smt_query);
		$user = $smt->fetch(PDO::FETCH_OBJ);
		return $user;
	}
}


 ?>