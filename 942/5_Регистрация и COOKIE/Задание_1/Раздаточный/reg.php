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

		// привязываем параметры
		$stmt->bind_param('ss', $_POST['login'], $_POST['pwd']);

		// если запрос выполнен успешно
		if ($stmt->execute()) {
			
			// получаем id вставленной записи
			$id = $stmt->insert_id;
			
			// подготовка / привязка параметров / выполнение запроса 
			// вывод новой записи о пользователе из базы
			$stmt = $mysqli->prepare('SELECT `login` FROM `user` WHERE `id_user` = ?');			
			$stmt->bind_param('d', $id);
			$stmt->execute();
			
			// получение результата запроса
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();

			echo <<<HERE
				<h3>Пользователь {$row['login']} успешно зарегистрирован</h3>
				<a href='/'>Назад к форме регистрации</a>
			HERE;

		// если ошибка вставки 
		} else {
			// сообщение для вывода в браузер
			echo '<h3>Что-то пошло не так :(</h3>';
			echo '<a href="/">Попробовать еще раз</a>';
		};
	?>
	

</body>
</html>