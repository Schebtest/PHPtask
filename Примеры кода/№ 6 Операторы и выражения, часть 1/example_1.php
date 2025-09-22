<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Операторы</h1>
	<h2>Операторы и выражения часть 1</h2>

	<?php
		// описание функции
		function myFun() {
			// функция возвращает скалярное значение -> Число
			return 100;
		}
		
		// вызов функции
		// переменная принимает возвращаемое функцией число
		$var = myFun();
		
		// проверяем, что находится в переменной
		var_dump($var);
	?>

	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>