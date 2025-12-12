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
	<h2>Глобальные переменные</h2>

	<?php
		function changeName()
		{
			global $name;
			$name = "Tomas";
		};
		
		$name = "Tom";
		
		echo $name, "<br />"; // Tom	
		
		changeName();
		
		echo $name; // Tomas
	?>
	

</body>
</html>