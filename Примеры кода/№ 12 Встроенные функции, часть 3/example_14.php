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
		$person = array(
			'id_personnel' => 3, 
			'surname' => 'Рыбкина', 
			'name' => 'Ольга', 
			'patronymic' => 'Витальевна', 
			'post' => 'Преподаватель', 
			'main_post' => '', 
			'category' => 'Соответствие занимаемой должности', 
			'level_edu' => 'Высшее профессиональное ', 
			'experience_total' => 21.3, 
			'experience_college' => 14.5, 
			'email' => 'RubkinaOlga1234@mail.ru', 
			'site' => '', 
			'unit' => 'Преподаватели', 
			'note' => '', 
			'actual' => 1, 
			'hidden' => 0
		);
		
		echo "<h3>Исходный массив</h3>";
		echo "<pre>";
		var_dump($person);		
		echo "</pre>";
		
		ksort($person);
		
		echo "<h3>Отсортированный по ключу массив</h3>";
		echo "<pre>";
		var_dump($person);		
		echo "</pre>";
	?>
		

</body>
</html>