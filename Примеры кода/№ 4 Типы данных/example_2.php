<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>
	<h2>Типы данных</h2>
	<hr>
	<h2>Вывод массива</h2>
	
	<?php
		// выводить только критичные ошибки
		error_reporting(E_ERROR);

		// вот такой вот массив
		$arr = ["php", "селедка", "шпрехшталмейстер"];

		// вывод массива через функцию echo - не работает
		echo $arr;
	?>
	

</body>
</html>