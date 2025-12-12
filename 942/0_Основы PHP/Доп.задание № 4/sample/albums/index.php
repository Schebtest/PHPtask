<?php 
	include "../data/albums.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<?php include "../inc/head.php"; ?>
</head>

<body>
	<header>
		<div class="content ins">
			<?php include "../inc/header.php"; ?>
		</div>
	</header>

	<div class="main ins">
		<div class="content ins">
			<h1>Альбомы</h1>
			<?php echo $data; ?>
		</div>
	</div>

	<footer>
		<div class="content">
			<?php include "../inc/footer.php"; ?>
		</div>
	</footer>
</body>

</html>