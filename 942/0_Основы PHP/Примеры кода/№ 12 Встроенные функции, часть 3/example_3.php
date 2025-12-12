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
			'id_personnel' => 1, 
			'surname' => 'Бородина', 
			'name' => 'Ксения', 
			'patronymic' => 'Алексеевна', 
			'post' => 'Преподаватель', 
			'main_post' => '', 
			'category' => 'Соответствие занимаемой должности', 
			'level_edu' => 'Высшее профессиональное ', 
			'experience_total' => 21.3, 
			'experience_college' => 14.5, 
			'email' => '', 
			'site' => '', 
			'unit' => 'Преподаватели', 
			'note' => ''
		);

		// проверим наличие значения в массиве
		if ($key = array_search("Преподаватели", $person)) {
			echo "В массиве найден ключ $key";
		};
	?>
		

</body>
</html>