<?php
	// функция получения списка преподавателей
	function fnGetListPersons ($persons) {
		
		$out = '';

		foreach ($persons as $item) {
			/*
				при формировании ссылки на преподавателя, создаю фрагмент (хеш-ссылку),
				фрагмент будет использоваться для выделения соответствующего блока при
				переходе на целевую страницу:
				<a href=server.php#person-__>
			*/
			$out .= sprintf("
				<h3><a href='server.php#person-%s'>%s %s %s </a></h3>",
				$item['id_personnel'],
				$item['surname'],
				$item['name'],
				$item['patronymic']
			);
		}
		return $out;
	};

	// функция вывода подробной информации по каждому преподавателю
	function fnOutPersons ($persons) {
		
		$out = '';

		foreach ($persons as $item) {
			/*
				для быстрого перехода браузером по указанной хеш-ссылке,  
				создаем идентификатор блока:
				<div id=person-__> 
			*/
			$out .= <<<HERE
				<div id='person-{$item['id_personnel']}'>
				<h2>{$item['surname']} {$item['name']} {$item['patronymic']}</h2>
				Должность: {$item['post']}</br>
				Категория: {$item['category']}</br>
				Уровень образования: {$item['level_edu']}</br>
				Трудовой стаж: {$item['experience_total']}</br>
				Стаж работы в ОУ: {$item['experience_college']}</br>
				e-mail: {$item['email']}</br>
				Сайт: {$item['site']}
				</div>
				<hr>
			HERE;
		}
		return $out;
	};
?>