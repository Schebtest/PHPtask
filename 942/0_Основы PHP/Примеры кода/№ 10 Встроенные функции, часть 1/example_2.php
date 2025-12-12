<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	<hr>
	<h2>Функция empty()</h2>

	<?php
		// 1. шаг 
		// выполним запрос /example_1.php
		
		// 2. шаг
		// выполним запрос с добавлением к маршруту GET-параметра 
		// например: 
		// /example_1.php?var=user
		
		// 3. шаг
		// выполним запрос с GET-параметром без значения 
		// например:
		// /example_1.php?var=
	
		if (empty($_GET["var"])){
			
			echo "<h3>GET-переменной var не существует или она пустая</h3>";
		} 
		else {
			
			echo "<h3>GET-переменная var существует и имеет значение: {$_GET['var']}";
		}
	?>
	

</body>
</html>