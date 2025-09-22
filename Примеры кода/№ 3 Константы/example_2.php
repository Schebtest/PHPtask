<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Основы программирования</h1>
	<h2>Константы</h2>
	
	<?php
		// значение константы - строка 
		define("MYCONST", "Здравствуй, мир!");
		echo MYCONST;
		echo "<p>";
		
		// значение константы - массив
		define('WEB', array(
			'PYTHON',
			'PHP',
			'PERL'
		)); 
		echo WEB[1];
		echo "<p>"; 
		
		// значение константы - выражение
		define("RADIUS", 3.14 * 9);
		echo RADIUS;
	?>
	

</body>
</html>