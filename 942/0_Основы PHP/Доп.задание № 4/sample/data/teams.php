<?php 
	$content = array(
		array('id_team' => '1','name' => 'Aerosmith','alias' => 'aerosmith','country' => 'США','content' => '','date' => '1970','style' => 'хард-рок','path' => 'assets/teams/aerosmith.jpg','note' => NULL),
		array('id_team' => '2','name' => 'Pink Floyd','alias' => 'pink-floyd','country' => 'Великобритания','content' => '','date' => '1965','style' => 'психоделический-рок','path' => 'assets/teams/pink-floyd.jpg','note' => NULL),
		array('id_team' => '3','name' => 'The Beatles','alias' => 'the-beatles','country' => 'Великобритания','content' => '','date' => '1960','style' => 'рок-н-ролл','path' => 'assets/teams/beatles.jpg','note' => NULL),
		array('id_team' => '4','name' => 'AC/DC','alias' => 'ac-dc','country' => 'Австралия','content' => '','date' => '1973','style' => 'хард-блюз-рок','path' => 'assets/teams/acdc.jpg','note' => NULL),
		array('id_team' => '5','name' => 'Scorpions','alias' => 'scorpions','country' => 'ФРГ','content' => '','date' => '1965','style' => 'хард-рок','path' => 'assets/teams/scorpions_.jpg','note' => NULL),
		array('id_team' => '6','name' => 'Ленинград','alias' => 'ленинград','country' => 'Россия','content' => '','date' => '1997','style' => 'ска, фолк, панк','path' => 'assets/teams/leningrad.jpg','note' => NULL)
	);
	
	$data = "";
	foreach ($content as $item) {
		$data .= "
			<div class='card'>
				<img src='../{$item['path']}' class='teams_img'>
				<div class='card_text'>
					<h3>{$item['name']}</h3>
					<p>Страна: <b>{$item['country']}</b></p>
					<p>Год основания: <b>{$item['date']}</b></p>
					<p>Стиль группы: <b>{$item['style']}</b></p>
					<span class='td_info'>подробнее...</span>
				</div>
			</div>
		";
	}
?>