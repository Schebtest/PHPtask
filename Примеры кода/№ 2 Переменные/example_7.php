<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>
	<h2>Магические числа</h2>
	
	<?php
		// отключить отчёт о всех ошибках
		error_reporting(0);
		
		$dollarPerEuro = 1.1342;
		$rublePerDollar = 74.71;
		$eurosCount = 50;
		
		$dollarsCount = $eurosCount * $dollarPerEuro;
		$rublesCount = $dollarsCount * $rublePerDollar;

		// арифметический знак + для строки и числа - ошибка
		echo "50 EUR = " + $rublesCount;
		echo " RUB";
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>