<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	<hr>
	<h2>Функция числового параметра</h2>

	<?php
		// определение функции
		function сircleArea($radius) {
			// определим константу числа пи
			define("PI", 3.1415);
			$result = PI * $radius * $radius;
			
			// выведем результат в браузер
			echo $result;
		};
		
		// вызов функции
		сircleArea(5);
	?>


</body>
</html>