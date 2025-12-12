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

		// присвоение переменной анонимной функции
		$greet = function()
		{
			echo "Привет, давайте изучать PHP вместе!";
		};
		
		$greet();
	?>
	

</body>
</html>