<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	<hr>
	<h2>Передача параметров</h2>

	<?php
		// МАССИВ мои интересы 
		$hobby = ["Спорт", "Программирование", "Censored", "Censored", "Censored"];		
		
		// 
		// аргумент переменной длины
		function outHobby(...$args) {
			// проверяем тип данных и значения аргумента
			echo "<pre>";
			var_dump($args);
			echo "</pre>";
		};
		
		echo "<h3>Вывод: массив из 1-го элемента типа array (двумерный массив)  и трех строковых значений</h3>";	
		
		// вызов функции
		// ПЕРЕДАЕМ АРГУМЕНТЫ - МАССИВ И НЕСКОЛЬКО СКАЛЯРНЫХ СТРОКОВЫХ ЗНАЧЕНИЙ
		
		outHobby($hobby, "MySQL", "Transact SQL", "NoSQL");
		
		/* Вывод: массив из 1-го элемента типа array (двумерный массив)  и трех строковых значений
			array(4) {
			  [0]=>
			  array(5) {
				[0]=>
				string(10) "Спорт"
				[1]=>
				string(32) "Программирование"
				[2]=>
				string(8) "Censored"
				[3]=>
				string(8) "Censored"
				[4]=>
				string(8) "Censored"
			  }
			  [1]=>
			  string(5) "MySQL"
			  [2]=>
			  string(12) "Transact SQL"
			  [3]=>
			  string(5) "NoSQL"
			}
		*/
	?>
	

</body>
</html>