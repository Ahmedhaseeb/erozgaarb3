<?php 
//defining constant

define("LOCATION", __DIR__);


//echo LOCATION;
//echo __LINE__;

die();
$num1 = 312312;
$num2 = 523432;
$mul = $num1 * $num2;
echo substr($mul, 0,5);

//echo "5" * 2;




die();


//Escape Sequences and strings

$msg = "What\'s Yo\tur \r\n Name?";



echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
Doloribus incidunt reprehenderit, minus error 
corporis ducimus cumque quae, accusantium quo. 
Dignissimos velit, cum! Eveniet autem aliquid 
dolore veniam animi, dicta accusamus.";



echo <<<_END

$msg
<br>

<h1>Heading</h1>
asdhakjsdhkjashdkjaasd asd as dsa dasd asdasdas dasd
as das
d as
d as
d as
dasdasdas dasdasd


_END;

echo $msg;



die();
//String Concatination

$count = 24;
$msg1 = "You have $count Messages";
$msg2 = 'You have $count Messages';

echo $msg1 . "<br>" . $msg2;




// echo $msg;
// $firstName  = "Ahmed";

// $lastName = "Haseeb";


// $abc = 24234;


// echo  $firstName . " " . $lastName;



die();
$x=9;
if (++$x==10) {
  echo $x;
}

die();
$hour= 12;
// $y=14;
// $x.=$y;
// echo "$x";

// echo $x xor $y;
if ($hour>=12 && $hour<14)
 {
 echo "Its Lunch Time";
}

die();
echo 6*2;
echo "<br>";
$count = 5;
$count +=5;
echo "$count";
 ?>