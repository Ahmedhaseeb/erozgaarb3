<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Object Oriented Programming(OOP)</title>
</head>
<body>

</body><?php 

		/**
		* A class for handling users
		*/
		class User
		{
			public $name;
			public $username;
			public $password;
			static $message = "Invalid Password";

			function __construct($un,$name,$pwd){
				$this->name = $un;
			}

			function save(){
				echo $this->name ." is saved<br>";
			}

			
			static function message(){
				echo self::$message;
			}
			// function __destruct(){
			// 	echo $this->name . " going to destroy<br>";
			// }

		}


		$user1 = new User("abc","Ahmed Haseeb","123");
		$user2 = new User("xyz","","");
		// print_r($user1);
		// die();
		$user1->save();
		// $user2->save();
		
		User::message();
		
		// var_dump($user1);
		// var_dump($user2);









		die();
		$obj1 = new User;
		$obj1->name = "Sufian";
		$obj1->username = "abc";
		$obj1->password = "123";		

		

		$obj2 = new User;
		$obj2->name = "Ahmed";
		$obj2->username = "xyz";
		$obj2->password = "789";


		$obj2 = clone $obj1;

		$obj1->name = "asdasdasd";

		var_dump($obj1);
		var_dump($obj2);
	?>
</html>