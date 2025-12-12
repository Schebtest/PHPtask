<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>

	<?php
		// инициируем переменные
		$phone = "2-12-85-06";
		$role = "Администратор";
		
		// передаем параметры, наследуем переменные 
		$message = function ($login, $pwd) use($role, $phone) {
			echo "<pre>";
			var_dump($login, $pwd, $role, $phone);
		};
		
		// вызываем функцию с аргументами
		$message("master", "12345");
	?>


</body>
</html>