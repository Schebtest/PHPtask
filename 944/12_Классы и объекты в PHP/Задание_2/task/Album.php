<?php
	// определение класса Album
	class Album
	{
		// свойства класса
		public $id_album;
		public $name;
		public $alias;
		public $country;
		public $content;
		public $date;
		public $path;
		public $note;	
	}

	// создание экземпляра класса (объекта)
	$album = new Album();