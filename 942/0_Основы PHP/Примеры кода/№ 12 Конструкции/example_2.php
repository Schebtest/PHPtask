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
	<h2>Переключатель switch</h2>

	<?php
		$entity = "album";
		
		switch ($entity) {
			case "team":
				echo "Вывод данных таблицы `team`";
				break;
			case "album":
				echo "Вывод данных таблицы `album`";
				break;
			case "track":
				echo "Вывод данных таблицы `track`";
				break;
		}
	?>


</body>
</html>