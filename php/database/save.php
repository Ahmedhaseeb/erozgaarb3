<?php 
require_once "connection.php";
// print_r($_POST);
// die();

if(isset($_POST['name'])){
	$name = $_POST['name'];
	$salary = $_POST['salary'];
	$designation = $_POST['designation'];

	$q = "INSERT INTO employee(`name`,`salary`,`designation_id`) VALUES(?,?,?)";
	$stmt = $db->prepare($q);
	$response = $stmt->execute(
		array(
			$name,
			$salary,
			$designation
		));
	if($response){
		echo "Record Inserted Successfully";
	}else{
		echo "Failed to insert record";
	}


}



?>