<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 3</h2>
	<hr>
	<h2>Функции для работы с массивами</h2>

	<?php
		$web = array("javascript", "php", "ruby", "angular", "mysql");
		
		// сместим указатель в конец массива
		end($web);
		
		// выведем индекс текущего элемента
		echo "Последний индекс - ", key($web), "<p>";
		
		// сбросим указатель в начало массива
		reset($web);
		
		// выведем индекс текущего элемента
		echo "Первый индекс - ", key($web);
	?>
			

</body>
</html>