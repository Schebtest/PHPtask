<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Циклы</h2>
	<hr>
	<h2>Перебор элементов двумерного массива</h2>

	<?php
	    // инициализируем массив
	    $disc = array(
	    	array(1, "Atom Heart Mother", "10 октября 1970", "EMI", "LP, CD", "Золотой (USA)"),
			array(2, "Meddle", "30 октября 1971", "EMI",	"Vinyl, CD", "Платиновый (USA)"),
			array(3, "Obscured by Clouds", "3 июня 1972", "Capitol", "LP, CD", "Золотой (USA)"),
			array(4, "The Dark Side of the Moon", "17 марта 1973", "EMI", "LP, CD", "Платиновый (USA)"),
			array(5, "Wish You Were Here", "15 сентября 1975", "Harvest", "CD, SACD",	"Платиновый (USA)")
		);
	    
		// определяем размер массива
		$count = count($disc);

		$html = "";

		// запускаем цикл
		for ($i=0; $i < $count; $i++) {
			// формируем html-строку
			$html .= "
				ID альбома: {$disc[$i][0]} <br />
				Название: {$disc[$i][1]} <br />
				Дата выпуска: {$disc[$i][2]} <br />
				Лейбл: {$disc[$i][3]} <br />
				Формат: {$disc[$i][4]} <br />
				Статус: {$disc[$i][5]} <p>
				<hr />
			";	
		};
		// выводим html-строку
		echo $html;
	?>


</body>
</html>