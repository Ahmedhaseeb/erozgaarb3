<?php session_start();

$db = new PDO(
	'mysql:host=localhost;dbname=organization;charset=utf8mb4',
	 'root', 
	 ''
	);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);	



?>