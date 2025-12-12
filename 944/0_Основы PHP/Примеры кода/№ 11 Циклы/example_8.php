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
	<h2>Индексный одномерный массив в цикле foreach</h2>

	<?php
		// простой индексный массив
		$album = array(1, "Atom Heart Mother", "10 октября 1970", "EMI", "LP, CD", "Золотой (USA)");
		
		// циклом foreach извлекаем пару ключ - значение
		// и не важно какой массив индексный или ассоциативный
		foreach ($album as $key => $value) {

			echo "Ключ - $key, значение - $value <br />";
			
		};
	?>


</body>
</html>