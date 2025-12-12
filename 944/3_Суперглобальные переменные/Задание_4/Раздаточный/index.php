<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>	
</head>
<body>
	<h1>Безопасность приложений</h1>
	
	<?php 
	    // получаем данные
		require 'person.php';

	    // подключаем функции
		require 'function.php';	
		
		// получаем список преподавателей, соответствующих критерию поиска
		$actual_persons = fnGetActualPersons ($person);
		
		// выводим список преподавателей в браузер
		fnOutPersons ($actual_persons); 
	?>
	

</body>
</html>