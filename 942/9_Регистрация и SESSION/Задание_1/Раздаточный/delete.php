<?php
	// стартуем сессию
	session_start();

	// подключение к базе данных
	$mysqli = new mysqli ('localhost', 'root', '', 'db_reg');

	// подготовка / привязка параметров / выполнение запроса 
	$stmt = $mysqli->prepare('SELECT * FROM `user` WHERE `id_user` = ?');
	$stmt->bind_param('s', $_GET['id']);
	$stmt->execute();
	
	// получаем результат
	$row = $stmt->get_result()->fetch_assoc();

	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";

	//
	$res = $mysqli->query('DELETE FROM `user` WHERE `id_user` = ' . $_GET['id']);

	if ($res) {
		echo '<p>Аккаунт ' . $row['login'] . ' был успешно удален. <a href="/">Вернуться к списку пользователей</a></p>';
	}