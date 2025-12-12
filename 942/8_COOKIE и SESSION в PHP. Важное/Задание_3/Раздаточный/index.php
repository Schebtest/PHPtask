<?php	
	// настройки времени выполнения
	ini_set('session.use_cookies', 0);
	ini_set("session.use_only_cookies", 0);
	ini_set("session.use_trans_sid", 0);
	
	// старт сессии
	session_start();	
	
	// ... 

?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
	<style>
		span {
			border:1px solid #c0c0c0;
			padding:5px 20px;
			font-weight: bold;
			user-select: none;
		}
	</style>
</head>
<body>

	<h1>Безопасность приложений</h1>

	<form action="header.php" method="post">

		<!-- /// -->
		<button>Отправить</button>	
	</form>
	

</body>
</html>