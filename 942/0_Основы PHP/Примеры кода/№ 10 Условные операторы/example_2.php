<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Условные операторы</h2>
	<hr>
	<h2>Тернарный оператор</h2>

	<?php
		$x = -2;
		$mod = $x >= 0 ? $x : -$x;
		
		// вывод модуля числа переменной x
		echo '<h3>Модуль числа: ' . $mod, '</h3>'; 
	?>


</body>
</html>