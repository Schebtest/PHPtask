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
		function fnUnsetVar() {
			// объявляем переменную глобальной
			 global $var;
			
			// удаляем глобальную переменную внутри функции
			unset($var); 			
			var_dump($var);	// Warning: Undefined variable $var
			echo "<p>";	
		}
		
		// инициируем глобальную переменную
		$var = 'global variable';
		
		fnUnsetVar();
		
		// выводим глобальную переменную
		// во внешней программе ничего с переменной не произошло
		var_dump($var);
	?>
	

</body>
</html>