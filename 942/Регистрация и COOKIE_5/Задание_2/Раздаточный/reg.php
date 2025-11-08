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
		$stmt = $mysqli->prepare('INSERT INTO `user` SET `login` = ?, `pwd` = ?');
		$stmt->bind_param('ss', $_POST['login'], $_POST['pwd']);
		
		// если запрос выполнен успешно
		if ($stmt->execute()) {
			
			// получаем id вставленной записи
			$id = $stmt->insert_id;
			
			// подготовка / привязка параметров / выполнение запроса 
			$stmt = $mysqli->prepare('SELECT * FROM `user` WHERE `id_user` = ?');			
			$stmt->bind_param('d', $id);
			$stmt->execute();
			
			// получение результата запроса
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();

			echo <<<HERE
				Пользователь <br> 
				<ul>
					<li>Логин: {$row['login']} </li>
					<li>Пароль: {$row['pwd']} </li>
				</ul>
				<b>успешно зарегистрирован</b><p>
				<a href='/'>Назад к форме регистрации</a>
			HERE;
		};
	?>
	

</body>
</html>