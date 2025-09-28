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
	<h2>Функция trim()</h2>

	<?php
		// в строках присутствуют пробелы
		$veni = "   Veni   ";
		$vidi = "   Vidi   ";
		$vici = "   Vici   ";

		echo $veni . $vidi . $vici; 
		echo "<p>";
		echo trim($veni) . trim($vidi) . trim($vici);
	?>
	


</body>
</html>