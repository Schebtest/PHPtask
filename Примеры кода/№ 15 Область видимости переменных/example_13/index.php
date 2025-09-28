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
		
		// определяем функцию с двумя параметрами
		function search($arr, $term) {
			foreach ($arr as $key => $item) {
				if ($item["name"] == $term) {
					return $item;
				}			
			}
		}	
	
		// определяем критерий поиска	
		$name = "Aerosmith";  
		
		// вызываем функцию поиска
		$data = search($team, $name);
		
		// выводим результат
		echo "<pre>";
		var_dump($data);
	?>


</body>
</html>