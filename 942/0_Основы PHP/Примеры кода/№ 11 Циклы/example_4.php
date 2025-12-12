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
	<h2>Цикл со счетчиком for</h2>
	<h3>Инструкция страдающим бессонницей ;)</h3>

	<?php
		for($i=1, $k=" слоник <br/>"; $i<200; $i++) { 
			$str = $i . $k; 
			echo $str; 
		}
	?>


</body>
</html>