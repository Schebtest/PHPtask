<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 0);
	ini_set("session.use_only_cookies", 0); 
	ini_set("session.use_trans_sid", 1);

	session_start();

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
		<a href='/'>Главная</a>
		<?php 
			// если сессионные данные существуют
			// добавляем пункт меню
			if (isset($_SESSION['id_user']))
				echo '<a href="/logout.php"> | Выход</a>'; 
		?>		
	</p>

	<h2>Главная страница сайта</h2>

	<?php 
		// если сессионные данные существуют
		if (isset($_SESSION['id_user'])): 

			// подключение к базе данных
			$mysqli = new mysqli ('localhost', 'root', '', 'db_auth');
			
			// создание, выполнение подготовленного запроса
			$stmt = $mysqli->prepare('SELECT * FROM `user_hash` WHERE `id_user` = ?');
			$stmt->bind_param('d', $_SESSION['id_user']);
			
			// получение результата
			$stmt->execute();
			$result = $stmt->get_result();
	
			// если запрос вернул запись
			if ($result->num_rows):
				$row = $result->fetch_assoc();
				$auth = true;
			else:
				$auth = false; // если указанной пары логин-пароль нет в базе
			endif;	

		else:
			$auth = false; // если нет сессионных данных
		endif;

		// если аутентификация успешна
		if ($auth):
			echo "<p>Пользователь:<b> {$row['login']} </b><br>";
			echo "Вход выполнен с правами:<b> {$row['role']} </b></p>";
		else:
	?>
			<!-- если аутентификация не состоялась -->
			<p>Для работы в системе необходима <b>аутентификация</b></p>
			<form action="auth.php" method="post">

				Логин: <input type="text" name="login" value=""><p>
				Пароль: <input type="text" name="pwd" value=""><p>

				<button>Войти</button>
			</form>

	<?php 
		endif;
	?>


</body>
</html>