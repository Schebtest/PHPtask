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
		// инициируем переменную $role
		$role = "Администратор";
		
		$test = function() {
			// делаем переменную глобальной
			global $role;
			
			var_dump("Вы зашли как " . $role . " сайта.");
		};		
		
		$test();
	?>


</body>
</html>