<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 1);
	ini_set("session.use_only_cookies", 1); 
	// ini_set("session.use_trans_sid", 1);

	session_start();
	
	// ...

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

	<h2>Cтраница Модератора</h2>

	<?php 

		// контент страницы

	?>


</body>
</html>