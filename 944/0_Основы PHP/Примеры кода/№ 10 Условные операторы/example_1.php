<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Условные операторы</h2>
	<hr>
	<h2>Конструкция elseif</h2>

	<?php
		$a = 8; 
		$b = 5;
		
		if ($a > $b) {
			echo "<h3>a больше, чем b</h3>";
		} elseif ($a == $b) {
			echo "<h3>a равен b</h3>";
		} else {
			echo "<h3>a меньше, чем b</h3>";
		}
	?>
	

</body>
</html>