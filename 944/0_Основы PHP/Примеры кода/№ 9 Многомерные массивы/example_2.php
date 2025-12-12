<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Массивы</h1>
	<h2>Многомерные массивы</h2>

	<?php
		// двумерный ассоциативный массив
		$country = [
			["name" => "Китай", "capital" => "Пекин", "population" => 1.40], 
			["name" => "Индия", "capital" => "Нью-Дели", "population" => 1.37],
			["name" => "США", "capital" => "Вашингтон", "population" => 0.32],
			["name" => "Индонезия", "capital" => "Джакарта", "population" => 0.24]
		];

		// разными способами организуем вывод

		// простая конкатенация
		echo " 
		Страна: " . $country[0]["name"] . ", 
		Столица: " . $country[0]["capital"] . ", 
		Население: " . $country[0]["population"] . " (млрд.чел.)<p>";

		// интерполяция сложных переменных
		echo "Страна: {$country[1]['name']} , 
		Столица: {$country[1]['capital']} , 
		Население: {$country[1]['population']} (млрд.чел.)<p>";

		// синтаксис heredoc плюс интерполяция, 
		// ключ в одинарных кавычках
		echo <<<HERE
		Страна: {$country[2]['name']} , 
		Столица: {$country[2]['capital']} , 
		Население: {$country[2]['population']} (млрд.чел.)<p>
HERE;

		// синтаксис heredoc плюс интерполяция, 
		// ключ в двойных кавычках
		echo <<<HERE
		Страна: {$country[3]["name"]} , 
		Столица: {$country[3]["capital"]} , 
		Население: {$country[3]["population"]} (млрд.чел.)<p>
HERE;
	?>
	

</body>
</html>