<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 2</h2>
	<hr>
	<h2>Функция explode()</h2>

	<?php
		$str  = "Изучаем Web-технологии: #laravel #php #java #sql #python";
		echo "<h3>$str</h3>";
		
		$web = explode("#", $str);
		
		// echo $web[0] . "<br />"; // Изучаем Web-технологии:
		
		echo $web[1] . "<br />"; // laravel
		echo $web[2] . "<br />"; // php
		echo $web[3] . "<br />"; // java
		echo $web[4] . "<br />"; // sql	
		echo $web[5]; // python	

		// echo "<pre>";
		// print_r($web);	
	?>


</body>
</html>