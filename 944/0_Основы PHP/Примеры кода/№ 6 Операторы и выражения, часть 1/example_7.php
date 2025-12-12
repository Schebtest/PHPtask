<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Операторы</h1>
	<h2>Операторы и выражения часть 1</h2>
	<hr>
	<h2>Строковые операторы</h2>

	<?php
		$a = "Hello ";
		$b = $a . "World!<p>"; 
		
		// $b будет содержать строку "Hello World!"
		echo '$b = ' . $b;
		
		// $a будет содержать строку "Hello World!"
		$a .= "World!<p>";     
		echo '$a = ' . $a;
		
		// $b будет содержать строку "Hello World!<p>Stop the World – I Want to Get Off..."
		$b .= "Stop the World – I Want to Get Off...";
		echo '$b = ' . $b;  
	?>


</body>
</html>