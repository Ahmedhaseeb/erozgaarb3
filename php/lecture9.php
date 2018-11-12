<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - FILE HANDLING</title>
</head>
<body>
	
<?php 
	
	$fp = fopen("abc.txt","r+");

	$text = fgets($fp);

	fseek($fp,0,SEEK_SET);

	fwrite($fp,"\r\nNew Content Adding\r\n");

	fclose($fp);


	// unlink("test2.txt");
	// rename("test.txt","abc.txt");
	// copy("test.txt", "test2.txt");
	// $fp = fopen("test.txt","w");
	// fwrite($fp,"abcasdasd asda dasd as\r\n");
	// fwrite($fp,"abcasdasd asda dasd as");	

	// fclose($fp);


	// $fp = fopen("test.txt","r");

	// while($data = fgets($fp)){
	// 	echo $data . "<br>";
	// }
	

	// echo  fgets($fp) ."<br>";
	// echo  fgets($fp);

	// fclose($fp);




?>

</body>
</html>