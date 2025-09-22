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
	<h2>Использование фигурных скобок</h2>
	
	<?php
		// вывод только фатальных ошибок
		// error_reporting (E_ERROR);

		$juice = "apple";
		
		echo "He drank some $juice juice.<p>";
		
		// некорректно, 's' - верный символ для имени переменной, но переменная имеет имя $juice но не $juices
		echo "He drank some juice made of $juices.<p>";
		
		// корректно, строго указан конец имени переменной с помощью фигурных скобок
		echo "He drank some juice made of ${juice}s.<p>";
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>