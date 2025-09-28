<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 2</h2>
	<hr>
	<h2>Функция sprintf()</h2>

	<?php
	    // инициируем массив
		$albums = 
			[
				[
				"id"=>"1", "album_name"=>"Atom Heart Mother", "date"=>"10 октября 1970", 
				"label" => "EMI, Harvest, Capitol",
				"format"=> "LP, CD",
				"status"=> "Золотой (USA)"
				],

				[
				"id"=>"2", "album_name"=>"Meddle", "date"=>"30 октября 1971",
				"label"=> "EMI, Harvest, Capitol",
				"format"=> "Vinyl, кассета, CD",
				"status"=> "Платиновый (USA)"
				],

				[
				"id"=>"3", "album_name"=>"Obscured by Clouds", "date"=>"3 июня 1972",
				"label"=> "EMI, Harvest, Capitol",
				"format"=> "LP, кассета, CD",
				"status"=> "Золотой (USA), Серебряный (GBR)"
				],

				[
				"id"=>"4", "album_name"=>"The Dark Side", "date"=>"17 марта 1973",
				"label"=> "Harvest", "Capitol", "EMI",
				"format"=> "LP, кассета, CD, SACD",
				"status"=> "Платиновый (USA), Платиновый (GBR), Бриллиантовый (CAN)"
				],

				[
				"id"=>"5", "album_name"=>"Wish You Were", "date"=>"15 сентября 1975",
				"label"=> "Harvest, EMI, Columbia, Capitol",
				"format"=> "LP, 8-track, кассета, CD, SACD",
				"status"=> "Платиновый (USA), Золотой (GBR), Платиновый (CAN)"
				],

				[
				"id"=>"6", "album_name"=>"Animals", "date"=>"23 января 1977",
				"label"=> "Harvest", "EMI", "Columbia", "Capitol",
				"format"=> "LP, 8-track, кассета, CD",
				"status"=> "Платиновый (USA), Золотой (GBR), Платиновый (CAN)"
				],

				[
				"id"=>"7", "album_name"=>"The Wall", "date"=>"30 ноября 1979",
				"label"=> "Harvest, EMI, Columbia, Capitol",
				"format"=> "LP, 8-track, кассета, CD",
				"status"=> "Платиновый (USA), Платиновый (GBR), Бриллиантовый (CAN)"
				],

				[
				"id"=>"8", "album_name"=>"The Final Cut", "date"=>"21 марта 1983",
				"label"=> "Harvest, EMI, Columbia, Capitol",
				"format"=> "LP, 8-track, кассета, CD",
				"status"=> "Платиновый (USA), Золотой (GBR)"
				],

				[
				"id"=>"9", "album_name"=>"A Momentary Lapse", "date"=>"8 сентября 1987",
				"label"=> "EMI, Columbia",
				"format"=> "LP, кассета, CD",
				"status"=> "Платиновый (USA), Золотой (GBR), Платиновый (CAN)"
				],

				[
				"id"=>"10", "album_name"=>"The Division Bell", "date"=>"30 марта 1994",
				"label"=> "EMI, Columbia",
				"format"=> "LP, кассета, CD",
				"status"=> "Платиновый (USA), Платиновый (GBR), Платиновый (CAN)"
				]
		];

		$html = "";
		// перебираем массив
		foreach ($albums as $key => $item) {
			// формируем строку для вывода
			$html .= sprintf("
				Номер - %d<br />
				ID альбома: %d<br />
				Название: %s<br />
				Дата выпуска: %s<br />
				Лейбл: %s<br />
				Формат: %s<br />
				Статус: %s<p>
				<hr />
			",
				++$key,
				$item['id'],
				$item['album_name'],
				$item['date'],
				$item['label'],
				$item['format'],
				$item['status']			
			);	
		};
		// выводим строку в браузер
		echo $html;
	?>
	

</body>
</html>