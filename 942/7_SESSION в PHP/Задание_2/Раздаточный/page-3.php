<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Безопасность данных</h1>
	
	<h2>Мы собрали о вас следующие данные</h2>

	<?php 
		// вывод сессионных данных многостраничной формы
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";		
	?>

	
</body>
</html>