<?php
	$login = trim($_POST['login']);
	$pwd = trim($_POST['pwd']);
	$pwd_repeat = trim($_POST['repeat_pwd']);

	if (empty($login) || empty($pwd) || empty($pwd_repeat)) {
		header('location:/?err-valid=Заполните обязательные поля');
	}

	if ( $pwd != $pwd_repeat){
		header('location:/?err-valid=Пароли должны совпадать');
	}
?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>	
<body>
	<h1>Безопасность приложений</h1>
	
	<?php
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";

		$_ERROR_VALID = array();
			
		// проверка поля login
		if (!preg_match('/^[a-zA-Zа-яёА-ЯЁ0-9]{5,15}$/u', $login)) $_ERROR_VALID['login'] = $login;	

		if(isset($_POST['weak_pwd'])){
			// сообщение при слабом пароле
			echo '<p>Вы выбрали слабый пароль.</p>';

			// проверка поля pwd для слабого пароля
			if (!preg_match('/^[0-9a-zA-Z!@#$%^&*]{6,20}$/', $pwd)) $_ERROR_VALID['pwd'] = $pwd;	
		} else {
			
			// сообщение при сильном (сложном) пароле
			echo '<p>Вы выбрали сложный пароль.</p>';
			
			// проверка поля pwd для сильного пароля
			if (!preg_match('/^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[0-9a-zA-Z!@#$%^&*]{6,20}$/', $pwd)) $_ERROR_VALID['pwd'] = $pwd;	
		}
		
		// echo "<pre>";
		// print_r ($_ERROR_VALID);
		// echo "</pre>";

		if(count($_ERROR_VALID)){
				
			foreach ($_ERROR_VALID as $key => $val) {

				printf ('<p>Данные не валидны \'%s\': %s. </p>', $key, $val);
			}		
		} else 
			echo "<h3>Данные валидны</h3>";
	?>


</html>