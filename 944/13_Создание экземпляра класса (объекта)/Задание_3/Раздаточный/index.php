<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Объектно-ориентированное программирование</h1>

	<?php
		// подключаем массив
		include "team.php";		
		
		// определение классов
		class Aerosmith {};
		class PinkFloyd {};
		class TheBeatles {};
		class ACDC {};
		class Scorpions {};
		class Leningrad {};

		// ...

		// вывод объектов
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	?>


</body>
</html>