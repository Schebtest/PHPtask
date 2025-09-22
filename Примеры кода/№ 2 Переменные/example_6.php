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
		// выводить ошибки синтаксического анализатора
		error_reporting(E_PARSE);

		// переменная не определена, но это не ошибка парсинга
		$dollarPerEuro;
		$rublePerDollar = 74.71;
		$eurosCount = 50;
		
		$dollarsCount = $eurosCount * $dollarPerEuro;
		$rublesCount = $dollarsCount * $rublePerDollar;

		echo "50 EUR = " . $rublesCount;
		echo " RUB";
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>