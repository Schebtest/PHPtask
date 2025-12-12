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
	<h2>Функция с параметром типа массив</h2>
	
	<?php
		// передаем на вход некий массив
		// пусть имя параметра-массива будет $arr
		function outHobby($arr) {
			// проверяем тип данных и значения аргумента
			echo "<pre>";
			var_dump($arr);
			echo "</pre>";

			// выведем массив-аргумент в цикле
			foreach ($arr as $key => $val) {
				echo  "Увлечение " . ++$key . " - " . $val . "<br/>";
			}
		};

		$hobby = ["Спорт", "Программирование", "Censored", "Censored", "Censored"];		
		
		// вызов функции
		outHobby($hobby);
	?>


</body>
</html>