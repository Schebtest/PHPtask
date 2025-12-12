<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 2</h2>
	<hr>
	<h2>Функция htmlspecialchars()</h2>

	<?php
		$str = "<h1>Жюль Амеде Барбе д'Оревильи — французский писатель и публицист</h1>";
		$out = htmlspecialchars(addslashes($str));
		echo $out;

		// вывод обычной ссылки
		echo "<p><a href='https://vk.com/omsk_proger' target='_blank'>omsk-PROger</a><p>";
		
		// вывод ссылки обработанной htmlspecialchars
		echo htmlspecialchars("<a href='https://vk.com/omsk_proger' target='_blank'>omsk-PROger</a>");	
	?>
	


</body>
</html>