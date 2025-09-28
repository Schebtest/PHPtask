<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 2</h2>
	<hr>
	<h2>Функциия implode()</h2>

	<?php
		$array = array('php', 'javaScript', 'css', 'html');
		$str = implode(" #", $array);
		
		// изучаем Web-технологии: #php #javaScript #css #html
	 	echo "Изучаем Web-технологии: #" . $str; 
	?>


</body>
</html>