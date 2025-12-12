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
	<h2>Unset внутри функции</h2>

	<?php
		function fnUnsetVar(&$par){
			// удаляем переменную переданную по ссылке
			unset($par); 			
			var_dump($par);	// Warning: Undefined variable $par
			echo "<p>";	
		}
		
		// инициируем глобальную переменную
		$var = 'global variable';
		
		fnUnsetVar($var);
		
		// выводим глобальную переменную
		// во внешней программе ничего с переменной не произошло
		var_dump($var);
	?>


</body>
</html>