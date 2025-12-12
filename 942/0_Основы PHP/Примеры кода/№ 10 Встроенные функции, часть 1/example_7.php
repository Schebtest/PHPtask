<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	<hr>
	<h2>Функция abs()</h2>

	<?php
		// выведем тип числа
		echo gettype(abs(-4.2)), "<p>"; // double (4.2)
		
		$num =  -5; 
		$abs = abs($num);  
		echo $abs; // 5 (integer)
	?>
	

</body>
</html>