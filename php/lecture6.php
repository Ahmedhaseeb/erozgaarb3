<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Arrays</title>
	<style>
		body{
			margin-left: 40px;
		}
	</style>
</head>
<body>

	<?php 
	

	$str = "Lorem\$ipsum\$dolor\$sit\$amet.";
	echo $str . "<br>";
	echo "<pre>";
	print_r(explode("$", $str));
	echo "</pre>";


	die();
	$dummyArray = array(100,20,3,-20,89,1);
	$myNewImplodedArray = implode(", ", $dummyArray);



	echo $myNewImplodedArray;



	die();
	$myString = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, excepturi.";
	
	echo "<pre>";
	print_r(explode(" ", $myString));
	echo "</pre>";

	
	$dummyArray = array(100,20,3,-20,89,1);

	echo "<pre>";
	sort($dummyArray);
	print_r($dummyArray);
	echo "</pre>";



	echo "<pre>";
	rsort($dummyArray);
	print_r($dummyArray);
	echo "</pre>";



	echo "<pre>";
	shuffle($dummyArray);
	print_r($dummyArray);
	echo "</pre>";

	//multi dimentional arrays



	$tictoc = array(

		array("O","X"," "),

		array("O", " ", "X"),

		array("X", "O", "X")
	);

	echo count($tictoc,true);

	die();
	foreach ($tictoc as $key => $value) {
		// echo "Array(<br>" . $key . "=> Array(<br>";
		foreach ($value as $item => $description) {
			echo $item . "=>" . $description . "<br>";
		}
		// echo "))<br>";
	}





	die();
		$student1 = [
			"name" => "Ahmed",
			"rollno" => "66",
			"class" => "BSCS",
			"session" => "2013 - 2017"
		];


		
		while ( list($key,$value) = each($student1)) {
				echo $key . " => " . $value . "<br>";
			}		

		die();


		list($name,$rollno,$abc) = array("ahmed","BSCS66","Asda");
		echo $abc;
		die();
		$myArray[] = "Ahmed";
		$myArray[] = "Sufian";
		$myArray[] = "Kashif";
		$myArray[] = "Hanzala";
		// var_dump($myArray);



		// die();

		$student1 = [
			"name" => "Ahmed",
			"rollno" => "66",
			"class" => "BSCS",
			"session" => "2013 - 2017"
		];
		// echo $student1["name"];
		$count = count($myArray);
		for ($i=0; $i < $count; $i++) { 

			echo $student1["name"] . "<br>";

		}
		die();
		foreach ($student1 as $key => $value) {
			echo $key . " " .$value . "<br>";
		}





	?>
</body>-
</html>