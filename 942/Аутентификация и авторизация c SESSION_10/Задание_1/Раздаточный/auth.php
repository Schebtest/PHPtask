<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 0);
	ini_set("session.use_only_cookies", 0); 
	ini_set("session.use_trans_sid", 1);

	session_start();

	// подключение к базе данных
	$mysqli = new mysqli ('localhost', 'root', '', 'db_auth');

	// создание, выполнение подготовленного запроса
	$stmt = $mysqli->prepare('SELECT * FROM `user_hash` WHERE `login` = ?');
	
	$stmt->bind_param('s', $_POST['login']);
	
	// получение результата
	$stmt->execute();
	$result = $stmt->get_result();
	
	// если запрос вернул запись
	if ($result->num_rows) {
		$row = $result->fetch_assoc();

		if (password_verify($_POST['pwd'], $row['pwd'])) {
			// сохраняем в сессию идентификатор пользователя 
			$_SESSION['id_user'] = $row["id_user"];

			header('Location:/');
			exit;			
		} 
		else $err = true;
	}
	else $err = true;
?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Аутентификация и авторизация с SESSION</h1>
	
	<?php 
		if (isset($err)):
	?>
			<!-- меню сайта -->
			<p>
				<a href='/'>Главная</a>
				<?php 
					// если сессионные данные существуют
					// добавляем пункт меню
					if (isset($_SESSION['id_user']))
						echo '<a href="/logout.php"> | Выход</a>'; 
				?>
			</p>
			<h3>Пользователь с такими данными в системе не найден</h3>
			<p><a href='/'>Попробовать еще раз</a></p>
	
	<?php
		endif;
	?>


</body>
</html>