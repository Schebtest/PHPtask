<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Массивы</h1>
	<h2>Простые массивы</h2>

	<?php
		// массив
		$fav_movies = ["Собачье сердце", "Полет над гнездом кукушки", "Тот самый Мюнхгаузен"];
		
		echo "<pre>";
		print_r($fav_movies);
		
		/* 
		Array
		(
			[0] => Собачье сердце
			[1] => Полет над гнездом кукушки
			[2] => Тот самый Мюнхгаузен
		)
		*/
	?>
	

</body>
</html>