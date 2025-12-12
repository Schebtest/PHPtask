<?php
	// удаляем данные, уничтожаем сессию
	session_start();
	session_unset();
	session_destroy();
	
	header('Location:/');
	exit;