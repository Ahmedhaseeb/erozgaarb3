<?php 
require_once("connection.php");

if(isset($_POST['action']) AND $_POST['action'] == "login"){
	$q = "SELECT * FROM users where username = ? and password = ?";
	try {
		$stmt = $db->prepare($q);
		$response = $stmt->execute(
		array(
			$_POST['username'],
			$_POST['password'])
		);
		if($stmt->rowCount() > 0){
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			$username = $user['username'];
			$_SESSION['login'] = "true";
			$_SESSION['username'] = $username;

			header("location:dashboard.php");
		}else{
			$_SESSION['message'] = "Invalid Login Details";
			header("location: index.php");
		}

	} catch (PDOEXCEPTION $e) {
		echo $e->getMessage();
	}
	

	// $row = $stmt->fetch(PDO::FETCH_ASSOC);
	// print_r($row);
	


}



if(isset($_POST['action']) AND $_POST['action'] == "save"){
	
}


if(isset($_POST['action']) AND $_POST['action'] == "delete"){
		
}


if(isset($_POST['action']) AND $_POST['action'] == "logout"){
		unset($_SESSION['login']);
		unset($_SESSION['username']);
		session_destroy();
		header('location: index.php');
}
?>