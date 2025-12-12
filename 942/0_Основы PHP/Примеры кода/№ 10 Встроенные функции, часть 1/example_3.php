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
	<h2>Функция unset()</h2>

	<?php
		// выполним запрос с добавлением к маршруту GET-параметра 
		// например: 
		// /example_3.php?user=admin
		
		if (isset($_GET["user"])){
			echo "
				<h3>GET-переменная user существует и имеет значение: {$_GET['user']}</h3>
			";
		} else {
			echo "<h3>GET-переменной user не существует</h3>";
		}
		
		// удалим переменную
		unset($_GET["user"]);
	
		if (empty($_GET["user"])){
			echo "<h3>GET-переменной user не существует</h3>";
		};	
	?>
	

</body>
</html>