<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>

	<?php		
		// инициализация переменных
		$a = 8; 
		$b = 10;
		 
		// определение стрелочной функции
		$fun = fn() => $a + $b;
		
		// вызов функции-стрелки
		echo $fun(); // 18
	?>


</body>
</html>