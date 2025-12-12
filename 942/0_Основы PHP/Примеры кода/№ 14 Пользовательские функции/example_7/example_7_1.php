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
		// один аргумент
		function outHobby($arr) {
			// проверяем тип данных и значения аргумента
			echo "<pre>";
			var_dump($arr);
			echo "</pre>";
		};
		
		echo "<h3>Вывод: массив из 5 элементов типа string</h3>";
		
		// вызов функции
		// ПЕРЕДАЕМ АРГУМЕНТ - МАССИВ		
		
		outHobby($hobby);
		
		/* Вывод: массив из 5 элементов типа string
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
		*/
	?>
	

</body>
</html>