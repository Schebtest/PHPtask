<?php
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
	
	$tr = "";
	foreach ($content as $item) {
		$tr .= "
			<tr>
				<td>{$item['id_track']}</td>
				<td>{$item['name']}
					<br><span class='td_info'>подробнее...</span>
				</td>
				<td>{$item['note']}</td>
			</tr>
		";
	}
	
	$data =  "
		<table>
		<tr>
			<th>ID трека</th>
			<th>Название песни</th>
			<th>Примечание</th>
		</tr>
		$tr
		</table>
	";	
?>


	
