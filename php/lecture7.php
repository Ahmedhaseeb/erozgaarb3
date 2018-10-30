<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Functions</title>
</head>
<body>
	<?php 





		if(function_exists("rsort"))
		{
			echo "function exists";
		}else{

		}


		die();

		//require_once "functions.phpp";



		




		function fix_names($n1,$n2,$n3){

			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));

			return  array($n1,$n2,$n3);

		}

		$names = fix_names("henRy","ahmED","suFiAn");
		var_dump($names);
		die();

		echo abs(5-8);

		die();



		$str1 = "heLlo wOrlD";
		// $str2 = "";
		echo "Original String: " . $str1 ."<br>";
		echo strtoupper($str1); echo "<br>";

		echo strtolower($str1); echo "<br>";

		echo strrev($str1); echo "<br>";


		echo ucfirst($str1); echo "<br>";



		echo ucwords(strtolower($str1));


		die();







		echo ucfirst(strtolower($str));

	?>
</body>
</html>