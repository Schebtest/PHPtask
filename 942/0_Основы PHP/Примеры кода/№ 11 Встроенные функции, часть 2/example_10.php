<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 2</h2>
	<hr>
	<h2>Функция substr()</h2>

	<?php
		echo substr("abcdef", 1), "<br />";  // возвращает "bcdef"
		echo substr("abcdef", 1, 3), "<br />";  // возвращает "bcd"
		echo substr("abcdef", 0, 4), "<br />";  // возвращает "abcd"
		echo substr("abcdef", 0, 8), "<br />";  // возвращает "abcdef"
		echo substr("abcdef", -1), "<br />";  // возвращает "f"
		echo substr("abcdef", -2), "<br />";  // возвращает "ef"
		echo substr("abcdef", -3, 1), "<br />";  // возвращает "d"
		echo substr("abcdef", 0, -1), "<br />";  // возвращает "abcde"
		echo substr("abcdef", 2, -1), "<br />";  // возвращает "cde"
		echo substr("abcdef", 4, -4), "<br />";  // возвращает ""
		echo substr("abcdef", -3, -1), "<br />";  // возвращает "de"
		
		echo "<hr>";
		
		// к отдельным символам можно обращаться с помощью фигурных скобок
		$string = 'abcdef';
		echo $string[0], "<br />";  // выводит a
		echo $string[3];  // выводит d
	?>
	

</body>
</html>  