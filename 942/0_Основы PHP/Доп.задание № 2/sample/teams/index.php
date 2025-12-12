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
	<h1>Группы</h1>
	<div class="card">
		<img src="../assets/teams/acdc.jpg" class="teams_img">
		<div class="card_text">
			<h3>AC/DC</h3>
			<p>Страна: <b>Австралия</b></p>
			<p>Год основания: <b>1970</b></p>
			<p>Стиль группы: <b>Хард-блюз-рок</b></p>
			<span class="td_info">подробнее...</span>
		</div>
	</div>

	<div class="card">
		<img src="../assets/teams/aerosmith.jpg" class="teams_img">
		<div class="card_text">
			<h3>Aerosmith</h3>
			<p>Страна: <b>США</b></p>
			<p>Год основания: <b>1970</b></p>
			<p>Стиль группы: <b>Хард-рок</b></p>
			<span class="td_info">подробнее...</span>
		</div>
	</div>

	<div class="card">
		<img src="../assets/teams/beatles.jpg" class="teams_img">
		<div class="card_text">
			<h3>The Beatles</h3>
			<p>Страна: <b>Великобритания</b></p>
			<p>Год основания: <b>1960</b></p>
			<p>Стиль группы: <b>Рок-н-ролл</b></p>
			<span class="td_info">подробнее...</span>
		</div>
	</div>
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