<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Connectivity - PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
<?php 
require_once "connection.php";
$stmt = $db->query("SELECT * FROM `designation`");
?>


<div class="container">
	<div class="row">
		<div class="col">
			
			<form action="save.php" method="post">
				<div class="form-group">
					<label for="name">name</label>
					<input class="form-control" id="name" type="text" name="name" />
				</div>
				<div class="form-group">
					<label for="salary">salary</label>
					<input class="form-control" id="salary" type="text" name="salary" />
				</div>
				<div class="form-group">
					<label for="designation">designation</label>
					<select name="designation" id="designation">
						<?php 
							while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
						?>


						<option value="<?php echo $row['designation_id']; ?>">					
							<?php echo $row['title']; ?>
						</option>
							



						<?php endwhile; ?>
					</select>
				</div>


				<div class="form-group">
					<input type="submit" class="btn btn-md btn-primary" value="save" />
				</div>
			</form>


		</div>
	</div>
</div>
<table class="table table-hover table-bordered">
<thead>
	<tr>
		<th>Name</th>
		<th>Salary</th>
		<th>Designation</th>
		<th>Actions</th>
	</tr>

</thead>
<tbody>
	
	<?php 
		$q = "SELECT `employee_id`,`name`,`salary`,`title` 
				FROM `employee`,`designation`
				WHERE `employee`.`designation_id` = `designation`.`designation_id`";
		$result = $db->query($q);

		foreach ($result as $key => $value):
		?>
			<tr>
				<td><?php echo $value['name']; ?></td>
				<td><?php echo $value['salary']; ?></td>
				<td><?php echo $value['title']; ?></td>
				<td><a href="edit.php?action=edit&id=<?php echo $value['employee_id']; ?>">Edit</a></td>
			</tr>			
	


		<?php
			endforeach;
		?>

</tbody>
</table>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>