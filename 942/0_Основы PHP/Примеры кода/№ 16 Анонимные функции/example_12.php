<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>

	<?php		
		$x = 5;
		
		// ничего не изменит
		$fn = fn() => $x++; 
		
		$fn();
		
		echo $x;  // 5
	?>
	

</body>
</html>