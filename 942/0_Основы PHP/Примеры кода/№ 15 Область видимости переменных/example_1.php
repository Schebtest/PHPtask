<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Статические переменные</h2>
	
	<?php
		function getCounter()
		{
			// объявление статической переменной
			static $counter = 0;
			$counter++;
			echo $counter;
			echo "<br />";
		}
		// первый вызов
		
		getCounter(); // counter=1
		// второй вызов
		getCounter(); // counter=2
		// третий вызов
		getCounter(); // counter=3
	?>
	

</body>
</html>