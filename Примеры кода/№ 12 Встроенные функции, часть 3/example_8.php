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
		// массив 1
		$arr1 = ["javascript", "css", "bootstrap", "figma"];

		// массив 2
		$arr2 = ["php", "python", "sql", "mysql"];
		
		// объединяем массивы
		$arr_merge = array_merge($arr2, $arr1);

		echo "<pre>";
		var_dump($arr_merge);

		// выведем массив строкой 
		$tags = implode(" #", $arr_merge);
		echo "#" . $tags;
	?>
	

</body>
</html>