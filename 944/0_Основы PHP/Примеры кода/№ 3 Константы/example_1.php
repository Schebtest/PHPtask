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
		// скалярное значение
		const MYCONST = 'Земля прощай!';
		echo MYCONST;
		echo "<br />";
		
		// скалярное выражение
		const ANOTHER_CONST = MYCONST . ' В добрый путь!';
		echo ANOTHER_CONST;
		echo "<br />";
		
		// массив скалярных значений
		const AUTHOR = array('Довлатов', 'Чехов', 'Ерофеев');
		echo AUTHOR[0]; // Довлатов
		echo AUTHOR[1]; // Чехов 
		echo AUTHOR[2]; // Ерофеев
	?>
	

</body>
</html>