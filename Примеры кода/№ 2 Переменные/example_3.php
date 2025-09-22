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
		// определения переменных
		$dollarPerEuro = 1.1342;
		$rublePerDollar = 74.71;
		$eurosCount = 50;

		// расчеты
		$dollarsCount = $eurosCount * $dollarPerEuro;
		$rublesCount = $dollarsCount * $rublePerDollar;

		// вывод
		echo "50 EUR = ";
		echo $rublesCount;
		echo " RUB";
	?>
	

</body>
</html>