<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>	
</head>
<body>
	<h1>Безопасность приложений</h1>
	
	<h2>Использование хеш-ссылок в приложениях</h2>		

	<?php 
	    // получаем данные
		require 'person.php';

	    // подключаем функции
		require 'function.php';	
			
		// выводим подробную информацию о каждом преподавателе
		echo fnOutPersons ($person); 
	?>
	

</body>
</html>