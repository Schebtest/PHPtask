<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 3</h2>
	<hr>
	<h2>Функции для работы с массивами</h2>

	<?php
		echo "<h3>Исходный массив</h3>";
		$web = array("javascript", "php", "ruby", "angular", "mysql");
		
		echo "<pre>";
		var_dump($web);
		echo "</pre>";
		
		echo "<h3>Отсортированный массив</h3>";
		sort($web);
		
		echo "<pre>";
		var_dump($web);
	?>
		

</body>
</html>