<?php
	// настройки времени выполнения
	ini_set('session.use_cookies', 0);
	ini_set("session.use_only_cookies", 0);
	ini_set("session.use_trans_sid", 0);

	// старт сессии
	session_start();

	// ...

	/*
		массив для записи в сессию
		$user = array(
			'id_personnel' => 1, 
			'surname' => 'Бородина', 
			'name' => 'Ксения', 
			'patronymic' => 'Алексеевна', 
			'post' => 'Преподаватель', 
			'category' => 'Соответствие занимаемой должности', 
			'level_edu' => 'Высшее профессиональное ', 
			'experience_total' => 21.3, 
			'experience_college' => 14.5, 
			'email' => '', 
			'site' => ''
		);
	*/
?>