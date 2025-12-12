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
	<h2>Индексный двумерный массив в цикле foreach</h2>

	<?php
	    // двумерный индексный массив
	    $disc = array(
	    	array(1, "Atom Heart Mother", "10 октября 1970", "EMI", "LP, CD", "Золотой (USA)"),
			array(2, "Meddle", "30 октября 1971", "EMI",	"Vinyl, CD", "Платиновый (USA)"),
			array(3, "Obscured by Clouds", "3 июня 1972", "Capitol", "LP, CD", "Золотой (USA)"),
			array(4, "The Dark Side of the Moon", "17 марта 1973", "EMI", "LP, CD", "Платиновый (USA)"),
			array(5, "Wish You Were Here", "15 сентября 1975", "Harvest", "CD, SACD",	"Платиновый (USA)")
		);

		$html = "";

		/*
			в предыдущем примере (example_8.php) была конструкция - foreach ($album as $key => $value)
			почему $value ? 
				- потому что значением массива было скалярное (строковое) значение, 
				- например: 1, "Atom Heart Mother", "10 октября 1970" и т.д.

			почему в этом примере вместо $value использую $item?
				- потому что значение массива - ДРУГОЙ МАССИВ
				- например: array(1, "Atom Heart Mother", "10 октября 1970", "EMI", "LP, CD", "Золотой (USA)"),
			
			!! На самом деле программе все равно как будут названы переменные, но таким образом
			я показываю, что понимаю, какой тип переменной обрабатываю
			класс программиста в мелочах (кстати, я не претендую)
		*/

		foreach ($disc as $key => $item) {
			// формируем строку для вывода
			$html .= "
				Ключ - $key <br />
				ID альбома: {$item[0]} <br />
				Название: {$item[1]} <br />
				Дата выпуска: {$item[2]} <br />
				Лейбл: {$item[3]} <br />
				Формат: {$item[4]} <br />
				Статус: {$item[5]} <p>
				<hr />
			";	
		};

		echo $html;
	?>
	

</body>
</html>