<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Объектно-ориентированное программирование</h1>
	<h2>Создание класса</h2>
	
	<?php
		// подключение класса Album
		require 'Album.php';

		// вывод объекта
		echo "<pre>";
		var_dump($album);
		echo "</pre>";
	?>


</body>
</html>