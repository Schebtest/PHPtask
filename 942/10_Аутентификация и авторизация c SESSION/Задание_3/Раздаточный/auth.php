<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 1);
	ini_set("session.use_only_cookies", 1); 
	// ini_set("session.use_trans_sid", 1);

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
			
			// набор символов для генерации идентификатора GUID
			$chars = '0123456789abcdefghijklmnopqrstuvwxyz';
			$guid = substr(str_shuffle($chars), 0, 10);

			$hash_gl = password_hash($guid.$row['login'], PASSWORD_DEFAULT);

			// создание, выполнение подготовленного запроса
			$stmt = $mysqli->prepare('UPDATE `user_hash` SET `guid` = ? WHERE `login` = ?');
	
			$stmt->bind_param('ss', $hash_gl, $_POST['login']);
			
			if ($stmt->execute()) {
				
				// сохраняем в сессию признак пользователя
				$_SESSION['hash_gl'] = $hash_gl;
				$_SESSION['role'] = $row['role'];
				header('Location:/');
				exit;				
			};
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
				<a href='/'>Главная</a> | 
				<a href='/page.php'>Страница</a>
				<?php 
					// если сессионные данные существуют
					// формируем меню
					if (
						isset($_SESSION['hash_gl']) && 
						$row['role'] == "moderator"
					)
						echo '<a href="/moderator.php"> | Модератор</a>'; 
						
					if (
						isset($_SESSION['hash_gl']) && 
						$row['role'] == "admin"
					)
						echo '<a href="/admin.php"> | Администратор</a>'; 	
					
					if (isset($_SESSION['hash_gl']))
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