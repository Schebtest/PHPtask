<?php
	
	// ...

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Безопасность данных</h1>
	
	<?php 
		// можно поблагодарить пользователя,
		// перед деловым предложением лишним не будет
		echo '<h2>Ваши данные успешно сохранены.</h2>';
		echo '<h1>Спасибо за регистрацию!</h1>';
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';
	?>

	<a href="page-2.php">Мы нашли для вас лучшее предложение</a>

	
</body>
</html>