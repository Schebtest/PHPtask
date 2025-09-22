<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>
	<h2>Выражения</h2>

	<?php
		// переводим евро в доллары
		$dollarsCount = 50 * 1.1342; // => 56,71
		
		// переводим доллары в рубли
		$rublesCount = $dollarsCount * 74.71;
		
		echo "50 EUR = ";
		echo $rublesCount;
		echo " RUB";
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>