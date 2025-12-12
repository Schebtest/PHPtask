<?php
	// стартуем сессию
	session_start();
?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Регистрация и SESSION</h1>
	
	<?php
		echo '<h2>Вы успешно зарегистрированы</h2>';

		//
		echo <<<HERE
			Пользователь <br> 
			<ul>
				<li>Логин: {$_SESSION['login']} </li>
				<li>Пароль: {$_SESSION['pwd']} </li>
			</ul>
			<b>успешно зарегистрирован</b><p>
			<a href='/'>Назад к форме регистрации</a>
		HERE;
	?>


</body>
</html>