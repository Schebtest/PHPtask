<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>	
</head>
<body>
	<h1>Безопасность приложений</h1>
	
	<?php
		
		$str ='course=Программирование на языке PHP&topic=Отправка данных на сервер&lesson=Загрузка файлов';

		// ...

	?>

	<form action="server.php" method="post">
		Логин: <input type="text" name="login" value="master"><p>
		E-mail: <input type="email" name="email" value="master@ya.ru"><p>
		Пароль: <input type="password" name="pwd" value="12345"><p>

		<input type="hidden" name="s" value="">

		<p>
		<input type="reset" value="Очистить">
		<button>Отправить</button>
	</form>		
	

</body>
</html>