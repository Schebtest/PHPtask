<?php
	// стартуем сессию
	session_start();

	// если нет согласия на обработку
	if (empty($_POST["assent"])) {
		// записываем в сессию сообщение 
		$_SESSION['error'] = 'Вы не дали согласие на обработку персональных данных.';
		header("Location:/");
		exit;
	} 

	// если поле пароля или логина пусто
	if (empty($_POST["pwd"]) || empty($_POST["login"])) {
		// записываем в сессию сообщение 
		$_SESSION['error'] = 'Пароль и логин не могут быть пустыми.';
		header("Location:/");
		exit;	
	}		

	// если не совпадают пароли
	if ($_POST["pwd"] != $_POST["cnfpwd"]) {
		// записываем в сессию сообщение
		$_SESSION['error'] = 'Не совпадают пароли. Попробуйте еще раз...';
		header("Location:/");
		exit;
	} 

	// проверим наличие логина в базе
	// подключение к базе данных
	$mysqli = new mysqli ('localhost', 'root', '', 'db_reg');

	// подготовка / привязка параметров / выполнение запроса 
	$stmt = $mysqli->prepare('SELECT `login` FROM `user` WHERE `login` = ?');
	$stmt->bind_param('s', $_POST['login']);
	$stmt->execute();
	
	// получаем результат
	$result = $stmt->get_result();
	
	// если логин в базе уже есть
	if ($result->num_rows) {
		// записываем в сессию сообщение 
		$_SESSION['error'] = 'Пользователь с таким логином существует';
		header("Location:/");
		exit;
	};

	// если все проверки выполнены успешно

	// подключение к базе данных
	$mysqli = new mysqli ('localhost', 'root', '', 'db_reg');
	
	// подготовка / привязка параметров / выполнение запроса  
	$stmt = $mysqli->prepare('INSERT INTO `user` SET `login` = ?, `pwd` = ?');

	// хешируем пароль
	$hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
	
	$stmt->bind_param('ss', $_POST['login'], $hash);

	// если запрос выполнен успешно
	if ($stmt->execute()) {
		// записываем в сессию данные пользователя 
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		header("Location:/profil.php");
		exit;
	};
?>