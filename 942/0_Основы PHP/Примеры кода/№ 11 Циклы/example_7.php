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
	<h2>Ассоциативный массив в цикле foreach</h2>

	<?php
		// ассоциативный массив
		$user["name"] = "Татьяна";
		$user["surname"] = "M******";
		$user["age"] = 31;
		$user["email"] = "pretty-woman@gmail.com";
		$user["general_experience"] = 9;
		$user["edu_experience"] = 7;
		$user["city"] = "г. Омск";

		echo "<table border=1>
				<tr>
					<th>Ключ</th>
					<th>Значение</th>
				</tr>";

		// циклом foreach извлекаем пару ключ - значение ($key => $value)
		foreach ($user as $key => $value) {

			echo "<tr><td> $key </td><td> $value </td></tr>";
			
		}

		echo "</table>";
	?>


</body>
</html>