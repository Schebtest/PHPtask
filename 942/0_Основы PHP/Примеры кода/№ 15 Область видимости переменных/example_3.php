<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Область видимости констант</h2>
	<hr>

	<?php
		// объявление константы в глобальной области видимости
		define('MYCONST', "Глядя на мир, нельзя не удивляться!");
		
		// объявление глобальной переменной
		$citate = "Нельзя объять необъятное!";
	
		function outVariable(){
			// вывод константы
			echo '<h3>' . MYCONST . '</h3>';
			// вывод переменной
			echo '<h3>' . $citate . '</h3>';
		};
		
		outVariable();
	?>
	

</body>
</html>