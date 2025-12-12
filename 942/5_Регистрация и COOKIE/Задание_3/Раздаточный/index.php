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

	<h1>Регистрация и COOKIE</h1>

	<?php

		// ...

	?>

	<form action="reg.php" method="post">

		Логин: <input type="text" name="login" value="DenisDream"><p>
		Пароль: <input type="text" name="pwd" value="12345DenisDream@%-"><p>
		Повторите пароль: <input type="text" name="cnfpwd" value="12345DenisDream@%-"><p>
		Согласие на обработку ПДн: <input type="checkbox" name="assent"><p>

		<button>Регистрация</button>
	</form>
	

</body>
</html>