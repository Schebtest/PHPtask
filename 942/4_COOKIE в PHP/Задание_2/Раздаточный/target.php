<?php
	// устанавливаем cookie login
	setcookie('login', 'admin');
	
	// устанавливаем cookie pwd
	setcookie('pwd', 'superCoolPWD');

	// ...

?>

<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Безопасность данных</h1>

	<h3>Cookie текущей страницы</h3>

	<?php
		echo "<pre>";
		print_r($_COOKIE);
		echo "</pre>";
	?>
		

</body>
</html>