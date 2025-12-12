<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 0);
	ini_set("session.use_only_cookies", 0);
	ini_set("session.use_trans_sid", 0);
	
	// генерация случайного имени сессии
	$chars = 'abcdefghijklmnopqrstuvwxyz';
	$session_name = substr(str_shuffle($chars), 0, 5);
	session_name($session_name);
	
	// старт сессии
	session_start();
	
	// массив для сохранения в сессию
	$team = array (
		'name' => "Ozzy Osbourne", 
		'alias' => "ozzy-osbourne", 
		'country' => "Великобритания", 
		'content' => "Оззи Осборн (настоящее имя — Джон Майкл Осборн) — британский рок-певец, музыкант, один из основателей и участник группы Black Sabbath, оказавшей значительное влияние на появление таких музыкальных стилей, как хард-рок и хеви-метал."
	);

	// ...

?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Безопасность приложений</h1>
	
	<form action="form.php" method="post">
		

		<button>Переход к форме редактирования</button>
	</form>


</body>
</html>