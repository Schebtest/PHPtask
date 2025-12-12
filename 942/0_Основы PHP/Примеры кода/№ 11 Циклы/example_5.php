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
		// инициализируем массив
		$album = array(1, "Atom Heart Mother", "10 октября 1970", "EMI", "LP, CD", "Золотой (USA)");
		
		// определяем размер массива
		$count = count($album);
		
		// запускаем цикл
		for ($i=0; $i < $count; $i++) {
			// выводим значение массива
			echo $album[$i], "<br />";
		};
	?>


</body>
</html>