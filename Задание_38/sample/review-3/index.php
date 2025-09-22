<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Циклы</h2>
	<hr>
	<h2>Вывод массива</h2>
	
	<?php
		// создаем массив
		$track = array(
			array('id_track' => '1','name' => 'Back in the Saddle','note' => '','id_album' => '10'),
			array('id_track' => '2','name' => 'Last Child','note' => '','id_album' => '10'),
			array('id_track' => '3','name' => 'Rats in the Cellar','note' => '','id_album' => '10'),
			array('id_track' => '4','name' => 'Combination','note' => '','id_album' => '10'),
			array('id_track' => '5','name' => 'Sick As a Dog','note' => '','id_album' => '10'),
			array('id_track' => '6','name' => 'Come Together','note' => '','id_album' => '10'),
			array('id_track' => '7','name' => 'Get the Lead Out','note' => '','id_album' => '10'),
			array('id_track' => '8','name' => 'Lick and a Promise','note' => '','id_album' => '10'),
			array('id_track' => '9','name' => 'Home Tonight','note' => '','id_album' => '10'),
			array('id_track' => '10','name' => 'Come Together','note' => '','id_album' => '4'),
			array('id_track' => '11','name' => 'Something','note' => '','id_album' => '4'),
			array('id_track' => '12','name' => 'Maxwell\'s Silver Hammer','note' => '','id_album' => '4'),
			array('id_track' => '13','name' => 'Oh! Darling','note' => '','id_album' => '4'),
			array('id_track' => '14','name' => 'Octopus\'s Garden','note' => '','id_album' => '4'),
			array('id_track' => '15','name' => 'I Want You (She\'s So Heavy)','note' => '','id_album' => '4'),
			array('id_track' => '16','name' => 'Here Comes The Sun','note' => '','id_album' => '4'),
			array('id_track' => '17','name' => 'Because','note' => '','id_album' => '4'),
			array('id_track' => '18','name' => 'You Never Give Me Your Money','note' => '','id_album' => '4'),
			array('id_track' => '19','name' => 'Sun King','note' => '','id_album' => '4'),
			array('id_track' => '20','name' => 'Mean Mr Mustard','note' => '','id_album' => '4'),
			array('id_track' => '21','name' => 'Polythene Pam','note' => '','id_album' => '4'),
			array('id_track' => '22','name' => 'Shine On You Crazy Diamond (Part One)','note' => '','id_album' => '2'),
			array('id_track' => '23','name' => 'Welcome to the Machine','note' => '','id_album' => '2'),
			array('id_track' => '24','name' => 'Have a Cigar','note' => '','id_album' => '2'),
			array('id_track' => '25','name' => 'Wish You Were Here','note' => '','id_album' => '2'),
			array('id_track' => '26','name' => 'Shine On You Crazy Diamond (Part Two)','note' => '','id_album' => '2'),
			array('id_track' => '27','name' => 'Speak to Me','note' => '','id_album' => '1'),
			array('id_track' => '28','name' => 'Breathe (In the Air)','note' => '','id_album' => '1'),
			array('id_track' => '29','name' => 'On the Run','note' => '','id_album' => '1'),
			array('id_track' => '30','name' => 'Time','note' => '','id_album' => '1'),
			array('id_track' => '31','name' => 'The Great Gig in the Sky','note' => '','id_album' => '1'),
			array('id_track' => '32','name' => 'Money','note' => '','id_album' => '1'),
			array('id_track' => '33','name' => 'Us and Them','note' => '','id_album' => '1'),
			array('id_track' => '34','name' => 'Any Colour You Like','note' => '','id_album' => '1'),
			array('id_track' => '35','name' => 'Brain Damage','note' => '','id_album' => '1'),
			array('id_track' => '36','name' => 'Eclipse','note' => '','id_album' => '1'),
			array('id_track' => '37','name' => 'Hells Bells','note' => '','id_album' => '6'),
			array('id_track' => '38','name' => 'Shoot to Thrill','note' => '','id_album' => '6'),
			array('id_track' => '39','name' => 'What Do You Do for Money Honey','note' => '','id_album' => '6'),
			array('id_track' => '40','name' => 'Given the Dog a Bone','note' => '','id_album' => '6'),
			array('id_track' => '41','name' => 'Let Me Put My Love Into You','note' => '','id_album' => '6'),
			array('id_track' => '42','name' => 'Back in Black','note' => '','id_album' => '6'),
			array('id_track' => '43','name' => 'You Shook Me All Night Long','note' => '','id_album' => '6'),
			array('id_track' => '44','name' => 'Have a Drink on Me','note' => '','id_album' => '6'),
			array('id_track' => '45','name' => 'Shake a Leg','note' => '','id_album' => '6'),
			array('id_track' => '46','name' => 'Rock and Roll Ain\'t Noise Pollution','note' => '','id_album' => '6'),
			array('id_track' => '47','name' => 'Strange Days','note' => '','id_album' => '0'),
			array('id_track' => '48','name' => 'You\'re Lost Little Girl','note' => '','id_album' => '11'),
			array('id_track' => '49','name' => 'Love Me Two Times','note' => '','id_album' => '11'),
			array('id_track' => '50','name' => 'Unhappy Girl','note' => '','id_album' => '11'),
			array('id_track' => '51','name' => 'Horse Latitudes','note' => '','id_album' => '11'),
			array('id_track' => '52','name' => 'Moonlight Drive','note' => '','id_album' => '11'),
			array('id_track' => '53','name' => 'People Are Strange','note' => '','id_album' => '11'),
			array('id_track' => '54','name' => 'My Eyes Have Seen You','note' => '','id_album' => '11'),
			array('id_track' => '55','name' => 'I Can\'t See Your Face in My Mind','note' => '','id_album' => '11'),
			array('id_track' => '56','name' => 'When the Music\'s Over','note' => '','id_album' => '11')
		);

		$li = "";
		
		// проходим массив циклом
		foreach ($track as $item) {
			// формируем элементы списка
			$li .= "<li>(id={$item['id_track']}) {$item['name']}</li>";
		};

		// формируем нумерованный список
		echo "<ol>" . $li . "</ol>";
	?>
	

</body>
</html>