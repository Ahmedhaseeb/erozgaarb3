<?php require_once "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editing - Employee - <?php echo @$_GET['id']; ?></title>
</head>
<body>
	
	<?php 

	if(isset($_GET['action']) AND $_GET['action'] == "edit"){
		$q = "SELECT * FROM employee WHERE employee_id = ?"; 
		$stmt = $db->prepare($q);
		$response = $stmt->execute(array($_GET['id']));
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		// print_r($data);

	}

	?>

	<form action="update.php" method="post">
		<input type="text" value="">
		<div class="form-group">
			<label for="name">name</label>
			<input class="form-control" id="name" value="<?php echo $data['name']; ?>" type="text" name="name" />
		</div>
		<div class="form-group">
			<label for="salary">salary</label>
			<input class="form-control" id="salary" value="<?php echo $data['salary']; ?>" type="text" name="salary" />
		</div>
		<div class="form-group">
			<label for="designation">designation</label>
			<select name="designation" id="designation">
				<?php 
					$stmt = $db->query("SELECT * FROM `designation`");
					while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
				?>
				<option			
				<?php	
					if($data['designation_id'] == $row['designation_id']){
						echo "selected=selected";
					}
				?>
				 value="<?php echo $row['designation_id']; ?>">					
					<?php echo $row['title']; ?>
				</option>
				<?php endwhile; ?>
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-md btn-primary" value="save" />
		</div>
	</form>
</body>
</html>