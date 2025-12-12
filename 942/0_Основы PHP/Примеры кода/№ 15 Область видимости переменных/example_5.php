<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Передача аргументов по ссылке и по значению</h2>

	<?php
		// передаем аргумент по значению
		function inc($par) {
			$par = $par + 10;
			echo "Локальная переменная = " . $par; // 15
			echo "<p>";
		}
		
		$var = 5;
		// вызываем функцию
		inc($var);
		echo "Глобальная переменная = " . $var; // 5
	?>


</body>
</html>