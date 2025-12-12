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
	<h2>Функция rtrim()</h2>

	<?php
		$str  = "Изучаем Web-технологии: #laravel #php #java #sql #python";
		echo "<h3>$str</h3>";
		
		$web = explode("#", $str);
		
		echo rtrim($web[0]) . "<br />"; // Изучаем Web-технологии: 
		
		echo rtrim($web[1]) . "<br />"; // laravel
		echo rtrim($web[2]) . "<br />"; // php
		echo rtrim($web[3]) . "<br />"; // java
		echo rtrim($web[4]) . "<br />"; // sql	
		echo rtrim($web[5]); // python	
	?>
	

</body>
</html>