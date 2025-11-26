<?php

	// ...

?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Безопасность приложений</h1>
	
	<?php
		// вывод формы с данными массива сессии
		echo <<<HERE
			<form action="" method="post">
				Название: <input type="text" name="name" value=""><p>
				Алиас: <input type="text" name="alias" value=""><p>
				Страна: <input type="text" name="country" value=""><p>
				
				<textarea name="content"></textarea><p>
						
				<input type="submit">
			</form>
		HERE;
	?>
	

</body>
</html>