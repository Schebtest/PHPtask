<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Массивы</h1>
	<h2>Простые массивы</h2>
	<hr>
	<h2>Индексные массивы</h2>

	<?php
		// заполним массив без предварительной его инициализации
		$team[] = "Aerosmith"; // индекс 0
		$team[] = "Pink Floyd"; // индекс 1
		$team[] = "The Beatles"; // индекс 2
		$team[10] = "AC/DC"; // индекс 10
		$team[] = "Metallica"; // индекс 11
		$team[] = "Ленинград"; // индекс 12

		// проверим что получилось
		echo "<pre>";
		print_r($team);
	?>


</body>
</html>