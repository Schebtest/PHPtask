<?php
	
	/* ...

	// строка для добавления в массив citate сессии
	"То, что меня не убивает, делает меня сильнее";
	
	*/
?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Безопасность данных</h1>

	<?php 
		echo "<h3>Данные сессии TESTSESSION</h3>";
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	?>

	
</body>
</html>