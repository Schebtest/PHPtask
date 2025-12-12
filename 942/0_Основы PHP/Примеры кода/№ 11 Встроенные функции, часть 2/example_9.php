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
	<h2>Функция strpos()</h2>

	<?php
		// входная строка
		$string = "#javascript #php #python  #sql";
		
		// искомая подстрока
		$substr = "php";
		
		$search = strpos($string, $substr);
		
		if($search){
			echo "Совпадение найдено";
		} else echo "Совпадений нет";
			
		echo "<pre>";
 		var_dump($search);
	?>
	

</body>
</html>