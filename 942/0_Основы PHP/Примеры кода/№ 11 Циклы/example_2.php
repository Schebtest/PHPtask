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
	<h2>Перебор элементов простого массива</h2>

	<?php
		// инициируем массив
		$album = array(1, "Atom Heart Mother", "10 октября 1970", "EMI", "LP, CD", "Золотой (USA)");
		// функция count возвращает количество элементов массива
		$count = count($album);
		
		// инициируем итератор цикла
		$i = 0;
		while($i < $count) {
			// выводим очередное значение массива
			echo "-- " . $album[$i], "<br />";
			$i++;
		}
	?>


</body>
</html>