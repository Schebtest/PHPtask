<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 1);
	ini_set("session.use_only_cookies", 1); 
	// ini_set("session.use_trans_sid", 1);

	session_start();
	
	// сохраняем сессионные данные
	$hash_gl = $_SESSION['hash_gl'] ?? null;
	
	// удаляем сессию
	session_unset();
	session_destroy();

	// набор символов для генерации идентификатора сессии
	$chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$session_id = substr(str_shuffle($chars), 0, 30);
	// устанавливаем пользовательский идентификатор
	session_id($session_id);	

	// стартуем новую сессию
	session_start();

	// echo session_name() . "=" . session_id() . "<br>";

	// перезаписываем сессионные данные
	$_SESSION['hash_gl'] = $hash_gl;

	// тестовый вывод данных сессии
	// echo "<pre>";
	// print_r ($_SESSION);	
	// echo "</pre>";	

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
			$auth = true; // аутентификация успешна			
		else:
			$auth = false; // если пользователя нет в базе
		endif;	

	else:
		$auth = false; // если нет сессионных данных
	endif;
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
			// формируем меню		
			if (isset($_SESSION['hash_gl']))
				echo '<a href="/logout.php"> | Выход</a>'; 
		?>
	</p>

	<h2>Главная страница сайта</h2>

	<?php 
		// если аутентификация успешна
		if (isset($auth) && $auth == true):
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