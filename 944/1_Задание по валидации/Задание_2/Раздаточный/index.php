<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
	<style>
		div#msg {
			margin-bottom: 30px;
			padding: 15px;
			border: 1px solid green;
			font-family: Verdana;
			font-size: 10pt;
			font-style: italic;
			color: green;
		}
	</style>	
</head>
<body>
	<h1>Безопасность приложений</h1>
	
	<h2>Валидация данных</h2>

	<?php
		// вывод в случае переадресации 
		if (isset($_GET["err-valid"]))
			echo "<div id='msg'>{$_GET['err-valid']}</div>";
	?>	

	<form action="server.php" method="post">
		Логин: <input type="text" name="login" required><p>
		
		Пароль: <input type="text" name="pwd" required><p>

		Повторить пароль:  <input type="text" name="repeat_pwd" required><p>
		
		Разрешить использование слабого пароля: <input type="checkbox" name="weak_pwd"><p>
		
		<p>
		<input type="reset" value="Очистить">
		<input type="submit" value="Отправить">
	</form>	
			 	

</html>