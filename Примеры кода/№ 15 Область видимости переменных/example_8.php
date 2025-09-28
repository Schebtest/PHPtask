<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Передача аргументов по ссылке и по значению</h2>

	<?php
		// передаем аргумент-массив по ссылке
		function fnChangingArray(&$arr) {
			$arr[0] = "javascript";
			$arr[1] = "css";
			$arr[2] = "vue.js";
		}		
		
		$array = array("php", "laravel", "mysql");
		
		echo "<pre>"; 
		print_r($array);

		// вызываем функцию
		fnChangingArray($array);
		
		echo "<p>"; 
		print_r($array);
	?>


</body>
</html>