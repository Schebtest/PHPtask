<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Объектно-ориентированное программирование</h1>
	<h2>Создание объекта</h2>
	
	<?php
		// подключаем класс Team
		include "Team.php";
		
		// создание экземпляра класса (объекта)
		$person = new Person();

		// вывод объекта
		echo "<pre>";
		print_r($person);
		echo "</pre>";
	?>


</body>
</html>