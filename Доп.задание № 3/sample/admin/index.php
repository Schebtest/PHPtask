<?php 
	$head = '
	<meta charset="utf-8">
	<title>Изучаем PHP</title>
	<link rel="stylesheet" href="../assets/css/style.css">
	';

	$header = '
	<div class="logo">
		<img src="../assets/logo.png" alt="logo">
		<a href="/">
			<h3>Музыкальный сервис</h3>
		</a>
	</div>
	<nav>
		<a href="/teams">Группы</a> |
		<a href="/albums">Альбомы</a> |
		<a href="/tracks">Треки</a> |
		<a href="/admin">Консоль</a>
	</nav>
	';

	$content = '
	<h1>Консоль</h1>
	';

	$footer = '
	<div class="block">
		<div class="logo">
			<img src="../assets/logo.png" alt="logo">
			<h2>Музыкальный сервис</h2>
		</div>
	</div>

	<div class="block">
		<div class="head">КОМПАНИЯ</div>
		<div class="links">
			<p><a href="/about">О нас</a></p>
			<p><a href="/contacts">Контакты</a></p>
		</div>
	</div>
	<div class="block">
		<div class="head">ПОЛЕЗНЫЕ ССЫЛКИ</div>
		<div class="links">
			<p><a href="https://www.spotify.com/ru-ru/" target="_blank">Spotify</a></p>
			<p><a href="https://support.spotify.com/ru-ru/" target="_blank">Справка</a></p>
		</div>
	</div>
	';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<?php echo $head; ?>
</head>

<body>
	<header>
		<div class="content ins">
			<?php echo $header; ?>
		</div>
	</header>

	<div class="main ins">
		<div class="content ins">
			<?php echo $content; ?>
		</div>
	</div>

	<footer>
		<div class="content">
			<?php echo $footer; ?>
		</div>
	</footer>
</body>

</html>