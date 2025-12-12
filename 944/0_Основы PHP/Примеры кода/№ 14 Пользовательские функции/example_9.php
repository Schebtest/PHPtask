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
	<h2>Возврат значений</h2>

	<?php
		// определение функции
		function getCircleArea($radius) {
			// задаем константу числа пи
			define("PI", 3.1415);
			$result = PI * $radius * $radius;
			// отдадим результат во внешнюю программу
			return $result;
		}
		
		// вызов функции, вывод результата в браузер
		echo getCircleArea(5);
	?>


</body>
</html>