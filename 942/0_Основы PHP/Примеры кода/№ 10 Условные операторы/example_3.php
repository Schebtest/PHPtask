<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Условные операторы</h2>
	<hr>
	<h2>Оператор ??</h2>

	<?php
		// инициируем логин
		// если закомментировать переменную скрипт не рухнет
		// $login = 'master';
		
		$login = $login ?? 'no-name';
		
		// вывод логина 
		echo '<h3>Логин пользователя: ' . $login, '</h3>'; 
	?>
	

</body>
</html>