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
		
		// определяем функцию, наследуем переменную role 
		
		// !!! обратите внимание - 
		// test_use была определена, когда $role = Администратор
		$test_use = function () use($role) {
			var_dump("Вы зашли как " . $role . " сайта.");	
		};
	
		// определяем функцию, делаем переменную role глобальной
		$test_global = function () {
			global $role;
			var_dump("Вы зашли как " . $role . " сайта.");
		};		
		
		// переопределим переменную $role
		$role = "Модератор";
		
		$test_use();  // Вы зашли как Администратор сайта

		echo "<p>";

		$test_global();  // Вы зашли как Модератор сайта
	?>


</body>
</html>