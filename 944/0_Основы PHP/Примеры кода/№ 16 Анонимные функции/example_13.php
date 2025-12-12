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
		$nums = array(1, 2, 3, 4, 5);
		
		// в качестве параметра передаем анонимную функцию
		// функция возводит в квадрат переданный параметр
		$result = array_map(function ($num){
			return $num * $num;
			// без return результирующий массив будет пустой
		}, $nums);
		
		// выводим результат
		echo "<pre>";
		print_r($result); // 1,4,9,16,25
	?>
	

</body>
</html>