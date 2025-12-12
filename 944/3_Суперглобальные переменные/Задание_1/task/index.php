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
		
		// выводим список преподавателей в виде ссылок
		// каждая ссылка содержит хеш, для быстрого перехода к указанному хешем преподавателю
		echo fnGetListPersons ($person);

		// все, что после хеша - на сервер не передается!
	?>
	
</body>
</html>