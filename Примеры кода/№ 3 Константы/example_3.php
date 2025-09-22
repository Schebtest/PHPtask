<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>
	<h2>Константы</h2>
	
	<?php
		// отключаем протоколирование ошибок
		error_reporting(0);

		// определяем константу MYCITATE
		define("MYCITATE", "Здравствуй, мир!");
		
		// пытаемся вывести значение константы в браузер
		/*
			MYCITATE <> MYC(Ru)ITATE
		*/
		echo "<h2>" . MYСITATE . "</h2>";
	?>
	

</body>
</html>