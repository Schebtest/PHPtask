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
	<h2>Функция двух параметров</h2>

	<?php
		// определение (создание) функции
		function outCitate($name, $patronymic) {
			echo "<h3>Мне странно, $name $patronymic: вы, кажется, человек, известный ученостью, а говорите, как недоросль...</h3>";
		}

		// вызов функции
		outCitate("Иван", "Иванович");
		outCitate("Иван", "Никифорович");
	?>


</body>
</html>