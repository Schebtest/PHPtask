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
		// функция определения константы
		function outVariable()
		{
			// объявление константы в локальной области видимости
			define('MYCONST', "Глядя на мир, нельзя не удивляться!");
		};
		
		// вызов функции
		outVariable();
		
		// вывод константы, определенной в функции
		echo '<h3>' . MYCONST . '</h3>';
	?>
	

</body>
</html>