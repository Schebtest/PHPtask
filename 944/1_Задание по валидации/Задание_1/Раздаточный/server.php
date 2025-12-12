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

		// ...

	?>


</html>