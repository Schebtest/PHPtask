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
		$role = "Администратор";
		echo '$role = ' . $role . "<p>";
		
		// наследуем переменную role 
		$example = function () use(&$role) {
			$role = "Модератор";
		};

		$example();

		echo '$role = ' . $role . "<p>"; 
	?>
	

</body>
</html>