<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Операторы</h1>
	<h2>Операторы и выражения часть 2</h2>
	<hr>
	<h2>Операторы сравнения</h2>

	<?php
		echo "<pre>";
		
		var_dump(3 == "2"); // false
		var_dump(2 == '2'); // true
		var_dump(3 != 2); // true
		var_dump(5 <> 5); // false
		var_dump(4 < 6); // true
		var_dump(9 > 2); // true
		var_dump(5 <= 6); // true
		var_dump(7 >= 9); // false
	?>

	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>