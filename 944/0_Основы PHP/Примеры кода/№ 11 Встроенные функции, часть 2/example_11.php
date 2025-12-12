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
	<h2>Функция substr_replace()</h2>

	<?php
		$var = 'ABCDE: / 12345 /';
		echo "Оригинал: $var<hr />";
		
		// обе следующих строки заменяют всю строку $var на значение второго параметра 
		echo substr_replace($var, 'abc', 0) . "<br />";
		echo substr_replace($var, '123', 0, strlen($var)) . "<br />";
		
		// вставляет 'abc' в начало $var
		echo substr_replace($var, 'abc', 0, 0) . "<br />";
		
		// обе следующих строки заменяют '12345' на 'abc'
		echo substr_replace($var, 'abc', 9, -2) . "<br />";
		echo substr_replace($var, 'abc', -7, -2) . "<br />";
		
		// удаляет ' 12345 ' из $var 
		echo substr_replace($var, '', 9, -1) . "<br />";
	?>
	

</body>
</html>  