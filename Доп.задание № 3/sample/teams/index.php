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
		array('id_team' => '1','name' => 'Aerosmith','alias' => 'aerosmith','country' => 'США','content' => '','date' => '1970','style' => 'хард-рок','path' => 'assets/teams/aerosmith.jpg','note' => NULL),
		array('id_team' => '2','name' => 'Pink Floyd','alias' => 'pink-floyd','country' => 'Великобритания','content' => '','date' => '1965','style' => 'психоделический-рок','path' => 'assets/teams/pink-floyd.jpg','note' => NULL),
		array('id_team' => '3','name' => 'The Beatles','alias' => 'the-beatles','country' => 'Великобритания','content' => '','date' => '1960','style' => 'рок-н-ролл','path' => 'assets/teams/beatles.jpg','note' => NULL),
		array('id_team' => '4','name' => 'AC/DC','alias' => 'ac-dc','country' => 'Австралия','content' => '','date' => '1973','style' => 'хард-блюз-рок','path' => 'assets/teams/acdc.jpg','note' => NULL),
		array('id_team' => '5','name' => 'Scorpions','alias' => 'scorpions','country' => 'ФРГ','content' => '','date' => '1965','style' => 'хард-рок','path' => 'assets/teams/scorpions_.jpg','note' => NULL),
		array('id_team' => '6','name' => 'Ленинград','alias' => 'ленинград','country' => 'Россия','content' => '','date' => '1997','style' => 'ска, фолк, панк','path' => 'assets/teams/leningrad.jpg','note' => NULL)
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
			<h1>Группы</h1>
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