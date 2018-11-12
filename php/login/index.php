<?php require_once("connection.php"); 
 if(isset($_SESSION['login']) AND $_SESSION['login'] == "true"){
 	header("location: dashboard.php");
 }
 $message = false;
 if(isset($_SESSION['message'])){
 	$message = $_SESSION['message'];
 	unset($_SESSION['message']);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form - PHP</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="spacer"></div>
	<h1 class="form-heading">Login Form</h1>
	<div class="spacer"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 offset-sm-4">
		 	<?php 
		 		if($message):
	 		?>
					<div class="alert alert-danger" role="alert">
					
						<?php echo $message; ?>
					 </div>
			<?php
				endif;
			?>
				<form action="login.php" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="username" />
					</div>

					<div class="form-group">
						<input class="form-control" type="password" name="password" />		
					</div>

					<div class="form-group">
						<input class="btn btn-md btn-primary" type="submit" value="Login" />
						<input type="hidden" name="action" value="login">
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
</html>