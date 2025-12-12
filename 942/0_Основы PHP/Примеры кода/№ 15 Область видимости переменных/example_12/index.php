<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Некоторые итоги</h2>

	<?php
		// включаем массив $team
		// проверьте наличие файла team.php в директории
		require "team.php";  

		// определяем функцию
		function search() {
			// делаем переменные глобальными
			global $team, $name;
			foreach ($team as $key => $item) {
				if ($item["name"] == $name) {
					return $item;
				}			
			}
		}
		
		// определяем критерий поиска	
		$name = "Aerosmith";  
		
		// вызываем функцию поиска
		$data = search();
		
		// выводим результат 
		echo "<pre>";
		var_dump($data);
	?>
	


</body>
</html>