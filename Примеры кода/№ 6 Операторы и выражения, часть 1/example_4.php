<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Операторы</h1>
	<h2>Операторы и выражения часть 1</h2>
	<hr>
	<h2>Моим музыкальным пристрастиям 40 лет...</h2>

	<?php
		// описание функции
		function myFun() {
			$arr = array("Pink Floyd", "Jethro Tull", "The Doors", "The Rolling Stones");
			// функция возвращает комбинированное значение -> Массив
			return $arr;
		}
		
		// вызов функции
		// переменная принимает возвращаемый функцией массив
		$var = myFun();
		
		// проверяем, что находится в переменной
		// для просмотра комбинированных значений желательно использовать тег <pre>,
		// лучший способ узнать почему, - закомментируйте тег и посмотрите что будет
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>