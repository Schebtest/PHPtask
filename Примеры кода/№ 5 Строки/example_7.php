<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>	
	<h2>Строки</h2>
	<hr>
	<h2>Nowdoc синтаксис</h2>
	
	<?php
		// определим переменные
		$city = "Рим";
		$car = "Range Rover";
		$book = "Мастер и Маргарита";
		$team = "Pink Floyd";
		$symbol = "$";	
		
		echo <<<'HERE'
		<h3>В программе мы определили следующие переменные:</h3>
		$city = "Рим" <br />
		$car = "Range Rover" <br />
		$book = "Мастер и Маргарита" <br />
		$team = "Pink Floyd" <br />
		$symbol = "$";
HERE;
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>