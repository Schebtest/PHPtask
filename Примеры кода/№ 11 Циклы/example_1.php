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
	<h2>Цикл с предусловием while</h2>

	<?php
		$i=0;
		while ($i<10)
		{
			$i++; // увеличение счетчика (итератора) цикла
			echo $i;
		}
		// выводит 12345678910
	?>


</body>
</html>