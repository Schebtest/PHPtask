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
		$tags = "#javascript #php #python #sql";
		// разбиваем строку в массив
		$arr = explode(" ", $tags);
		
		// добавляем элементы в начало массива
		array_unshift($arr, "#perl", "#mysql");
		
		echo "<pre>";
		var_dump($arr);
		
		echo "Первый элемент массива - ";
		echo array_shift($arr);
	?>
	

</body>
</html>