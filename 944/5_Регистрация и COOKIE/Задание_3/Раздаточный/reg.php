<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Регистрация и COOKIE</h1>
	
	<?php
		// подключение к базе данных
		$mysqli = new mysqli ('localhost', 'root', '', 'db_reg');
		
		// подготовка / привязка параметров / выполнение запроса  
		$stmt = $mysqli->prepare('INSERT INTO `user` SET `login` = ?, `pwd` = ?, `salt` = ?');

		$chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$salt = substr(str_shuffle($chars), 0, 10);

		$pwd = crypt($_POST['pwd'], $salt);
		$stmt->bind_param('sss', $_POST['login'], $pwd, $salt);
		$stmt->execute();

		if ($stmt->affected_rows) {
			echo '<h3>Вы успешно зарегистрировались</h3><p>';
			echo '<a href="/">Назад к форме регистрации</a>';
		};		
	?>
	

</body>
</html>