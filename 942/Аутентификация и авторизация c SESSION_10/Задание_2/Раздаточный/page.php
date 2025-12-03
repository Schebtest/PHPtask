<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 1);
	ini_set("session.use_only_cookies", 1); 
	// ini_set("session.use_trans_sid", 1);
	
	session_start();

	echo session_name() . "=" . session_id() . "<br>";	
	
	// тестовый вывод данных сессии
	echo "<pre>";
	print_r ($_SESSION);	
	echo "</pre>";	
?>	

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Аутентификация и авторизация с SESSION</h1>

	<!-- меню сайта -->
	<p>
		<a href='/'>Главная</a> | 
		<a href='/page.php'>Страница</a>
		<?php 
			// если сессионные данные существуют
			// добавляем пункт меню
			if (isset($_SESSION['hash_gl']))
				echo '<a href="/logout.php"> | Выход</a>'; 
		?>
	</p>

	<h2>Cтраница сайта</h2>

	<?php 
		// если сессионные данные существуют
		if (isset($_SESSION['hash_gl'])): 

			// подключение к базе данных
			$mysqli = new mysqli ('localhost', 'root', '', 'db_auth');
			
			// создание, выполнение подготовленного запроса
			$stmt = $mysqli->prepare('SELECT * FROM `user_hash` WHERE `guid` = ?');
			$stmt->bind_param('s', $_SESSION['hash_gl']);
			
			// получение результата
			$stmt->execute();
			$result = $stmt->get_result();
	
			// если запрос вернул запись
			if ($result->num_rows):
				$row = $result->fetch_assoc();			
				$auth = true;
			else:
				$auth = false; // если пользователя нет в базе
			endif;	

		else:
			$auth = false; // если нет сессионных данных
		endif;

		// если аутентификация успешна
		if (isset($auth) && $auth == true):
			echo "<p>Пользователь:<b> {$row['login']} </b><br>";
			echo "Вход выполнен с правами:<b> {$row['role']} </b></p>";
		else:
			// если аутентификация не состоялась
			echo "<p>Для работы в системе необходима <b>аутентификация</b></p>";
		endif;
	?>


</body>
</html>