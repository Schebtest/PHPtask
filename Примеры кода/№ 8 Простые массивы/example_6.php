<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Массивы</h1>
	<h2>Простые массивы</h2>
	<hr>
	<h2>Ассоциативные массивы</h2>

	<?php
		// можно инициализировать массив
		// $user = array();
		// $user = [];
				
		$user["name"] = "Татьяна";
		$user["surname"] = "M.";
		$user["age"] = 31;
		$user["email"] = "pretty-woman@gmail.com";
		$user["general_experience"] = 9;
		$user["edu_experience"] = 7;
		$user["children"] = 1;
		
		// так будет работать, 
		// только непонятно, зачем смешивать индексный и ассоциативный массивы
		$user[1] = "г. Омск";
		$user[] = "Драники";

		// проверим что получилось
		echo "<h3>Hi, Miss " . $user['name'] . " " . $user['surname'] . ", вот твои личные данные:</h3>";
		echo "<pre>";
		print_r($user);
	?>


</body>
</html>