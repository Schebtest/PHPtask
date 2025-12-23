<?php
	// функция поиска педагога по фамилии
	function getPerson($surname){
		// выполнение запроса
		// доступ к пременной подключения через массив $GLOBALS
		$result = $GLOBALS['mysqli']->query("SELECT * FROM `personnel` WHERE `surname` = '$surname'");
		// выбор строки из набора
		$row = $result->fetch_assoc();
		// возврат значения
		return $row; 
	};
	
	// функция подсчета количества образований педагога по его id
	function getCountEducations($id){
		// выполнение запроса
		$result = $GLOBALS['mysqli']->query("SELECT COUNT(*) AS `count` FROM `education` WHERE `id_personnel` = $id");
		// выбираем строку из набора
		$row = $result->fetch_assoc();
		// возврат значения
		return $row; 
	};

	// функция поиска образований педагога по его id
	function getEducations($id){
		// выполнение запроса
		$result = $GLOBALS['mysqli']->query("SELECT * FROM `education` WHERE `id_personnel` = $id");
		// выбираем строку из набора
		$row = $result->fetch_all(MYSQLI_ASSOC);
		// возврат значения
		return $row; 
	};

	// функция подсчета количества курсов, которые ведет педагог по его id
	function getCountCourses($id){
		// выполнение запроса
		$result = $GLOBALS['mysqli']->query("SELECT COUNT(*) AS `count` FROM `courses` WHERE `id_personnel` = $id");
		// выбираем строку из набора
		$row = $result->fetch_all(MYSQLI_ASSOC);
		// возврат значения
		return $row;
	};

	// функция поиска курсов, которые ведет педагог по его id
	function getCourses($id){
		// выполнение запроса
		$result = $GLOBALS['mysqli']->query("SELECT * FROM `courses` WHERE `id_personnel` = $id");
		// выбираем строку из набора
		$row = $result->fetch_all(MYSQLI_ASSOC);
		// возврат значения
		return $row; 
	};

	// функция поиска персональных данных педагога по его id
	function getPersonData($id){
		// выполнение запроса
		$result = $GLOBALS['mysqli']->query("SELECT * FROM `person_data` WHERE `id_personnel` = $id");
		// выбираем строку из набора
		$row = $result->fetch_assoc();
		// создадим и инициализируем
		// вспомогательную глобальную переменную $GLOBALS['json_person_data']
		$GLOBALS['json_person_data'] = json_encode($row);			
		// возврат значения
		return $row;
	};

	// функция извлечения данных из JSON-объекта вспомогательной переменной $GLOBALS['json_person_data']
	function getDataFromJSON($data){
		$arr = json_decode($GLOBALS['json_person_data'], 1);
		// возврат значения
		return $arr[$data];
	};