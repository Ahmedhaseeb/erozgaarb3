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
			protected $name;
			protected $username;
			protected $password;

			static $message = "Invalid Password";
			const ENGLISH = 0;
			const URDU = 1;
			const GERMAN = 2;

			function __construct($un,$name,$pwd){
				$this->name = $name;
				$this->username = $un;
				$this->password = $pwd;
			}

			function save(){
				echo $this->name ." is saved<br>";
			}

			function set_data(){
				$this->username = "";
				$this->password = "";
			}
			
			final function copyrights(){
				echo "All rights Reserved<br>Developed By ABC";
			}
			static function message(){
				echo self::$message;
			}
			// function __destruct(){
			// 	echo $this->name . " going to destroy<br>";
			// }

		}

		$user = new User("","","");
		// $user->name  = "Abc";
		$user->set_data("ahmed","123");
		var_dump($user);

		/**
		* Subscriber class
		*/
		class Subscriber extends User
		{
			public $phone;
			public $email;

			function __construct($name,$un,$pwd,$phone,$email){
				parent::__construct($name,$un,$pwd);
				$this->phone = $phone;
				$this->email = $email;
			}




			function set_data(){
				$this->name = "Ahmedhaseeb";
				$this->username = "abc";
				$this->password = "123";
				$this->email = "abc@xyz.com";
				$this->phone = "+923001234567";
			}

			function ChildCopyrights(){
				echo "asdasdhjakshdasd";
			}


		}


		$subscriber = new Subscriber("Ahmed","abc","123","456","abc");
		$subscriber->set_data();
		$subscriber->copyrights();
		$subscriber->ChildCopyrights();
		
		var_dump($subscriber);
		die();
		// $user1 = new User("abc","Ahmed Haseeb","123");
		// $user2 = new User("xyz","","");
		// print_r($user1);
		// die();
		// $user1->save();
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