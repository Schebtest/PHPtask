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
		// функции передаем параметр
		$greet = function($par)
		{
			printf("Привет, давайте изучать %s вместе!</p>", $par);
		};
		
		// инициируем значения аргументов анонимной функции
		$lang1 = "PHP";
		$lang2 = "JavaScript";
		
		// вызываем функцию
		$greet($lang1);
		$greet($lang2);
	?>
	

</body>
</html>