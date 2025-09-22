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
	<h2>HEREDOC синтаксис</h2>
	
	<?php
		$name = "Остап";
		$surname = "Бендер-Задунайский";
		
		// так можно 
		$html = <<<DOC
			Имя: $name <br>
			Фамилия: $surname <br>
			DOC;

		echo $html;
		echo "<hr>";

		// а так нельзя 
		// STR - не должен выступать
		$html = <<<STR
			Имя: $name <br>
			Фамилия: $surname <br>
				STR;

		echo $html;
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>