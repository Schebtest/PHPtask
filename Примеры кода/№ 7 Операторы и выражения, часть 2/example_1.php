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
	<h2>Комбинированные операторы</h2>

	<?php
		$a = 3;
		$a += 5; // устанавливает $a = 8
		echo $a, "<p>";
		// аналогично $a = $a + 5;
		
		$b = 10;
		$b *= 2; // устанавливает $b = 20
		echo $b, "<p>";
		// аналогично $b = $b * 2;
		
		$c = "Hello ";
		$c .= "There!"; // устанавливает $c = "Hello There!;
		echo $c;
		// аналогично $c = $c . "There!";
	?>

	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>