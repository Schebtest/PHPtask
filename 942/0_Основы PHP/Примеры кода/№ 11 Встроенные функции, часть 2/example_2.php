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
	<h2>Функция stripcslashes()</h2>

	<?php
		$str = "Шарль Ожье де Бац де Кастельмор граф д\'Артаньян - герой моего детства";
		// Шарль Ожье де Бац де Кастельмор граф д'Артаньян - герой моего детства
		echo stripcslashes($str) . "<p>";
		
		$str = "It's my life (Bon Jovi)";
		$out =  addslashes($str);
		// It's my life (Bon Jovi)
		echo stripcslashes($out) . "<p>";	
	?>
	

</body>
</html>