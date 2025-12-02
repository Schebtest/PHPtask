<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>	
</head>
<body>

	<h1>Регистрация и SESSION</h1>

	<h2>Список пользователей приложения</h2>

	<?php
		// подключение к базе данных
		$mysqli = new mysqli ('localhost', 'root', '', 'db_reg');
		
		// выполнение запроса  
		$result = $mysqli->query('SELECT * FROM `user` ORDER BY `login`');

		$rows = $result->fetch_all(MYSQLI_ASSOC);

		// извлечнеие списка пользователей
		foreach ($rows as $row) {
			echo $row['login'] . ' (<a href="delete.php?id=' . $row['id_user'] . '">Удалить</a>)<p>';
		};
	?>


</body>
</html>