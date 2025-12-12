<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>
	<h2>Константы</h2>
	<hr>
	<h2>Некоторые предопределенные константы</h2>

	<?php
		echo "Текущая версия PHP: <b>";
		echo PHP_VERSION;
		echo "</b><p>";
		
		echo "Операционная система, под которую собирался PHP: <b>";
		echo PHP_OS;
		echo "</b><p>";
		
		echo "Максимальная длина файловых имён (включая путь), поддерживаемая данной сборкой PHP: <b>";
		echo PHP_MAXPATHLEN;
		echo "</b><p>";

		echo "Максимальное целое число, поддерживаемое данной сборкой PHP: <b>";
		echo PHP_INT_MAX;
		echo "</b><p>";

		echo "Максимальное возможное число типа float: <b>";
		echo PHP_FLOAT_MAX;
		echo "</b><p>";
	?>
	

</body>
</html>