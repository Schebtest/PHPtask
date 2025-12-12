<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Конструкции</h2>
	<hr>
	<h2>Сравниваем конструкции</h2>

	<?php
		$i = 1;
		// условная конструкция
		if ($i == 0) {
			    echo "i равно 0";
			} elseif ($i == 1) {
			    echo "i равно 1";
			} elseif ($i == 2) {
			    echo "i равно 2";
		}
		
		echo "<p>";
		
		// конструкция выбора
		switch ($i) {
			case 0:
				echo "i равно 0";
				break;
			case 1:
				echo "i равно 1";
				break;
			case 2:
				echo "i равно 2";
				break;
		}
	?>
	

</body>
</html>