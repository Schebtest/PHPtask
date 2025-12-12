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
	<h2>Функция rand()</h2>

	<?php
		// генерируем случайные числа
		$first = rand(1,6);
		$second = rand(1,6);
		$third = rand(1,6);
		
		// выводим изображения кубиков согласно
		// сгенерированного числа
		echo "<img src='cube/$first.jpg' width='200px'>";
		echo "<img src='cube/$second.jpg' width='200px'>";
		echo "<img src='cube/$third.jpg' width='200px'>";
	?>
	

</body>
</html>