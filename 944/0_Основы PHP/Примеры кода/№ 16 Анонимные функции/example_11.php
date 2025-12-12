<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>

	<?php
		$y = 5;
		// определение и присвоение переменной анонимной функции
		$fun1 = function ($x) use ($y) {
			return $x + $y; 
		};
		
		// вызов анонимной функции
		var_dump ($fun1(4)); // 9
		
		// определение и присвоение переменной стрелочной функции
		$fun2 = fn($x) => $x + $y;
		
		echo "<p>";

		// вызов стрелочной функции
		var_dump ($fun2(4)); // 9
	?>


</body>
</html>