<?php
	// функция выбора преподавателей, соответствующих критерию поиска
	function fnGetActualPersons ($persons) {

		$data = array();

		foreach ($persons as $item) {
			if ( $item['actual'] == 1 && $item['hidden'] == 0 ) {
				array_push($data, $item);
			}
		}
		return $data;
	};

	// функция вывода списка преподавателей
	function fnOutPersons ($persons) {
		
		$out = '';

		foreach ($persons as $item) {
			//
			$out .= <<<HERE
				<h3>{$item['surname']} {$item['name']} {$item['patronymic']}</h3>
				Должность: {$item['post']}</br>
				Категория: {$item['category']}</br>
				Уровень образования: {$item['level_edu']}</br>
				Трудовой стаж: {$item['experience_total']}</br>
				Стаж работы в ОУ: {$item['experience_college']}</br>
				e-mail: {$item['email']}</br>
				Сайт: {$item['site']}
				<hr>
			HERE;
		}
		echo $out;
	};
?>