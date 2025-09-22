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

	$content = array(
		array('id_track' => '1','name' => 'Back in the Saddle','note' => '','id_album' => '10'),
		array('id_track' => '2','name' => 'Last Child','note' => '','id_album' => '10'),
		array('id_track' => '3','name' => 'Rats in the Cellar','note' => '','id_album' => '10'),
		array('id_track' => '4','name' => 'Combination','note' => '','id_album' => '10'),
		array('id_track' => '5','name' => 'Sick As a Dog','note' => '','id_album' => '10'),
		array('id_track' => '6','name' => 'Come Together','note' => '','id_album' => '10'),
		array('id_track' => '7','name' => 'Get the Lead Out','note' => '','id_album' => '10'),
		array('id_track' => '8','name' => 'Lick and a Promise','note' => '','id_album' => '10'),
		array('id_track' => '9','name' => 'Home Tonight','note' => '','id_album' => '10'),
		array('id_track' => '10','name' => 'Come Together','note' => '','id_album' => '4')
	);

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
			<h1>Треки</h1>
			<?php echo "<pre>"; print_r($content); echo "</pre>"; ?>
		</div>
	</div>

	<footer>
		<div class="content">
			<?php echo $footer; ?>
		</div>	
	</footer>
</body>

</html>