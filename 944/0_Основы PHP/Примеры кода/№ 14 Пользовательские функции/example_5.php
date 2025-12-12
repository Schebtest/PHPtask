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
	<h2>Передача аргументов переменной длины</h2>
	<h3>Мои увлечения</h3>	

	<?php
		// при определении функции говорим, что
		// количество аргументов заранее неизвестно 
		function outHobby(...$args) {
			// прверяем тип данных и значения аргумента
			echo "<pre>";
			var_dump($args);
			echo "</pre>";
			
			// выведем аргумент-массив в цикле 
			foreach ($args as $value){
				echo "<li> $value </li>";
			}
		};
	
		// вызов функции
		outHobby("Спорт", "Программирование", "Censored", "Censored");
	?>


</body>
</html>