<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>
	<h2>Введение в PHP</h2>

	<?php
		// print без скобок
		print "Hello, User!<br />";
		// print со скобками
		print("Изучаем PHP с pechora_proger<br>")
	?> 

	<!-- 
	это уже html-комментарий, им я хотел сказать, что
	количество вставок php-тегов не ограничено
	-->
	
	<?php
		// можно использовать echo с несколькими параметрами
		// хотя применяется такой вывод не часто
		echo "Можно ", "выводить ", " и так…!";
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>