<?php
	session_name("TESTSESSION");
	session_id("id-" . rand(1,10));
	session_start();

	// записываем массив в сессию
	$_SESSION = array (
		'name' => "Фридрих Вильгельм", 
		'surname' => "Ницше", 
		'citate' => ["Если хочешь услышать о себе хорошее — умри"]
	);

	// данные сессии 
	echo "<h3>Данные сессии</h3>";
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";	
?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Безопасность данных</h1>
	
	<a href='page-1.html'>Идем на первую страницу сайта</a>

	
</body>
</html>