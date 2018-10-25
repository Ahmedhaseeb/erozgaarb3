<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	body{
		margin-left: 20px;
	}
</style>
<body>
<?php 


function calculate($num1, $num2, $op = "+"){
	if($op == "/"){
		return $num1 / $num2;
	}
	if($op == "-"){
		return $num1 - $num2;
	}
	if($op == "*"){
		return $num1 * $num2;
	}
	if($op == "+"){
		return $num1 + $num2;
	}
	return "Invalid Operator";
}

	function fun()
	{
		static $num1 = 20;
		return ++$num1;

	}

	echo fun() . "<br>";
	echo fun() . "<br>";
	echo fun() . "<br>";
	echo fun() . "<br>";
			
        
		// $b = false;
		// $b ? print "True": print "False";
        
		// echo __LINE__;
		// echo "<br>";
		// function add($num1,$num2){
		// 	$sum= $num1+$num2;
		// 	echo "$sum";
		// }

		// add(54,43);
		// add(65,75); 



 	?>




</body>
</html>