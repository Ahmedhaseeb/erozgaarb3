<style>
	body{
		margin-left: 50px;
	}
</style>
<?php 

	$x = (int)15.5;
	echo $x;


die();
for ($i=0; $i < 10; $i++) { 
	if($i >= 5)
		continue;
	echo $i . "<br>";
}
die();
//printing table of 10


$array=array(1,
		array("abc",
			"xyz"
		),
	3,
	4,
	5);

foreach ($array as $key => $value) {
	if(is_array($value)){
		echo "Its an array sorry i am unable to print array<br> programmer might not know how to print nested array<br>";
		continue;
		// foreach ($value as $key => $item) {
		// 		echo "$key => $item <br>";
		// 	}		
	}
	
	else{
		echo "$key => $value <br>";
			
	}

}











for ($i=1; $i < 11; $i++) { 
	echo "10 x $i = ".$i*10 . "<br>";

}

die();
$Z =0;
do {
	echo "Zeeshan is a hardworking boy";
	echo "<br>";
	$Z++;
} while ( $Z<= 10);

$p= 11;
while ($p<10) {
	echo "Zeeshan is a hardworking boy";
	echo "<br>";
	$p++;
}

$d= date("D");
switch ($d) {
	case 'Sun':
		echo "Today is sunday";
		break;
	case 'satr':
		echo "Today is Wednesday";
		break;
	default:
		echo "Today is another day";
		break;

}
for ($i=0; $i < 10; $i++) { 
	echo "I love Pakistan";
	echo "<br>";
}

die();
$b= "Fri";
if ($b=="Wed") {
	echo "Today is wednesday";
}
elseif($b="Fri"){
	echo "Today is Friday";
}
 ?>


