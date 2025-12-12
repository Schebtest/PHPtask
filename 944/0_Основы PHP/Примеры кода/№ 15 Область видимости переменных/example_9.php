<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Передача аргументов по ссылке и по значению</h2>

	<?php
		// создаем класс
		class UserClass
		{
			public $login = "master";
			public $role = "user";
			public $pwd = "12345";
		}

		// передаем объект в качестве аргумента по значению 
		function fnChangingObj($obj) {
			global $role, $pwd;
			
			$obj->role = $role;
			$obj->pwd = $pwd;
		}		

		// создаем экземпляр класса
		$user = new UserClass();	
		
		echo "<pre>"; 
		print_r($user);	
		
		$role = "admin";
		$pwd = "qwerty";
		
		fnChangingObj($user);
		
		echo "<p>"; 
		print_r($user);	
	?>


</body>
</html>