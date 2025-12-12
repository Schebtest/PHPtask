<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Условные операторы</h2>

	<?php
		// инициируем логин
		// если закомментировать переменную скрипт не рухнет
		// $login = 'master';
		
		if (isset($login))
			$login = $login;
		else 
			$login = "no-name";

		echo 'Логин в конструкции if: ', $login, '<p>';

		$login = isset($login) ? $login : 'no-name';

		echo 'Логин в тернарном операторе: ', $login, '<p>';

		$login = $login ?? 'no-name';

		echo 'Логин в операторе ??: ', $login;
	?>
	

</body>
</html>