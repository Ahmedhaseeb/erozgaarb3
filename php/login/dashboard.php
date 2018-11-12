<?php require_once("connection.php"); 
if(isset($_SESSION['login']) AND $_SESSION['login'] == "true"){
 	
}else{
	header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	
Welcome <?php echo $_SESSION['username']; ?>

<form action="login.php" method="post">
	<input type="hidden" name="action" value="logout">
	<input type="submit" value="Logout" />
</form>
</body>
</html>