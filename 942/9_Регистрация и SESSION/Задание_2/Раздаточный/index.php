<?php
	// стартуем сессию
	session_start();

	// ...
	
?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Регистрация и SESSION</h1>

	<form action="reg.php" method="post">
		
		Логин: <input type="text" name="login" placeholder="" value=""><p>
		Пароль: <input type="text" name="pwd" placeholder="" value=""><p>
		Повторите пароль: <input type="text" name="cnfpwd" placeholder="" value=""><p>
		Согласие на обработку ПДн: <input type="checkbox" name="assent"><p>

		<button>Регистрация</button>
	</form>
	

</body>
</html>