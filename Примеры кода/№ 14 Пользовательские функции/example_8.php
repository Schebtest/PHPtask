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
	<h2>Необязательные параметры</h2>

	<?php
		// проверьте наличие в текущей директории папки images c изображениями:
		// -> user.jpg, noimage.jpg, hyppo.jpg
		
		// объявляем функцию двух аргументов
		// аргумент $img - имеет значение по умолчанию
		function outMessage($name, $img="noimage") {
			echo "<h3>Уважаемый $name, мы рады приветствовать вас на сайте!</h3>";
			echo "<img src='images/{$img}.jpg' />";
		};
		
		// вызываем функцию с двумя аргументами
		outMessage("Alex", "user");
		outMessage("Friend", "hyppo");
		
		// вызываем функцию с одним аргументом
		outMessage("Bob");
	?>
	

</body>
</html>