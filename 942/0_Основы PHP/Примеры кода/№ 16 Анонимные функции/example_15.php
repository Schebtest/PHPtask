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
		// инициируем исходный массив
		$tags = array("php", "laravel", "wordpress", "mysql", "free");
		
		// внешняя переменная 
		$grid = "#";
		
		// определяем callback-функцию
		$fnSquare = function ($key) use($grid) {
			return $grid . $key;
		};
		
		// в качестве параметра передаем callbak-функцию
		$result = array_map($fnSquare, $tags);
		
		// выводим результат
		echo "<pre>";
		print_r($result); // конечный массив
	?>
	

</body>
</html>