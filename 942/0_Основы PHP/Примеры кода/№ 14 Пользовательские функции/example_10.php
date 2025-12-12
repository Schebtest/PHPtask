<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	<hr>
	<h2>Возврат значений</h2>

	<?php
		function add($a, $b) {
			$sum = $a + $b;
			// есть оператор echo, но нет return
			echo "Сумма = $sum <br />";
		}
		
		// вызываем функцию, в которой нет return
		$result = add(5, 6);
		
		// проверяем, что возвращает такая функция
		if($result === null)
			echo "result равен Null";
		else
			echo "result не равен Null";
	?>


</body>
</html>