<?php
# phpMyAdmin SQL Dump
# version 4.0.10
# http://www.phpmyadmin.net
#
# Хост: 127.0.0.1:3306
# Время создания: Фев 08 2022 г., 11:59
# Версия сервера: 5.7.29
# Версия PHP: 7.4.40

/*
	Данный файл сгенерирован автоматически
	В файле находятся дампы массивов с информацией о группах (team) и их альбомах (album) 
*/


#
# Структура таблицы `team`
#
# Создание: Янв 26 2022 г., 05:18
#
$team = array(
  array('id_team' => '1','name' => 'Aerosmith','alias' => 'aerosmith','country' => 'США','content' => '','date' => '1970','style' => 'хард-рок','path' => 'assets/teams/aerosmith.jpg','note' => NULL),
  array('id_team' => '2','name' => 'Pink Floyd','alias' => 'pink-floyd','country' => 'Великобритания','content' => '','date' => '1965','style' => 'психоделический-рок','path' => 'assets/teams/pink-floyd.jpg','note' => NULL),
  array('id_team' => '3','name' => 'The Beatles','alias' => 'the-beatles','country' => 'Великобритания','content' => '','date' => '1960','style' => 'рок-н-ролл','path' => 'assets/teams/beatles.jpg','note' => NULL),
  array('id_team' => '4','name' => 'AC/DC','alias' => 'ac-dc','country' => 'Австралия','content' => '','date' => '1973','style' => 'хард-блюз-рок','path' => 'assets/teams/acdc.jpg','note' => NULL),
  array('id_team' => '5','name' => 'Scorpions','alias' => 'scorpions','country' => 'ФРГ','content' => '','date' => '1965','style' => 'хард-рок','path' => 'assets/teams/scorpions_.jpg','note' => NULL),
  array('id_team' => '6','name' => 'Ленинград','alias' => 'ленинград','country' => 'Россия','content' => '','date' => '1997','style' => 'ска, фолк, панк','path' => 'assets/teams/leningrad.jpg','note' => NULL)
);

#
# Структура таблицы `album`
#
# Создание: Янв 26 2022 г., 05:44
#
$album = array(
  array('id_album' => '1','name' => 'The Dark Side of the Moon','alias' => 'the-dark-side-of-the-moon','country' => 'Великобритания','content' => '','date' => '1973','path' => 'assets/albums/the-dark-side-of-the-moon.jpg','note' => NULL,'id_team' => '2'),
  array('id_album' => '2','name' => 'Wish You Were Here','alias' => 'wish-you-were-here','country' => 'Великобритания','content' => '','date' => '1975','path' => 'assets/albums/wish-you-were-here.jpg','note' => NULL,'id_team' => '2'),
  array('id_album' => '9','name' => 'Let There Be Rock','alias' => 'let-there-be-rock','country' => 'ФРГ','content' => '','date' => '1977','path' => 'assets/albums/let-there-be-rock.jpg','note' => NULL,'id_team' => '4'),
  array('id_album' => '3','name' => 'Greatest Hits','alias' => 'greatest-hits','country' => 'США','content' => '','date' => '1999','path' => 'assets/albums/greatest-hits-pink-floyd.jpg','note' => NULL,'id_team' => '2'),
  array('id_album' => '4','name' => 'Abbey Road','alias' => 'abbey-road','country' => 'Великобритания','content' => '','date' => '1969','path' => 'assets/albums/abbey-road.jpg','note' => NULL,'id_team' => '3'),
  array('id_album' => '5','name' => 'A Hard Day\'s Night','alias' => 'a-hard-days-night','country' => 'Великобритания','content' => '','date' => '1964','path' => 'assets/albums/a-hard-days-night.jpg','note' => NULL,'id_team' => '3'),
  array('id_album' => '6','name' => 'Back in Black','alias' => 'back-in-black','country' => 'США','content' => '','date' => '1980','path' => 'assets/albums/Back_in_Black.svg','note' => NULL,'id_team' => '4'),
  array('id_album' => '7','name' => 'Highway to Hell','alias' => 'highway-to-hell','country' => 'Австралия','content' => '','date' => '1979','path' => 'assets/albums/highway-to-hell.jpg','note' => NULL,'id_team' => '4'),
  array('id_album' => '10','name' => 'Rocks','alias' => 'rocks','country' => 'Великобритания','content' => '','date' => '1982','path' => 'assets/albums/rocks.jpg','note' => NULL,'id_team' => '1'),
  array('id_album' => '11','name' => 'Strange Days','alias' => 'strange-days','country' => 'США','content' => '','date' => '1967','path' => 'assets/albums/strange-days.jpg','note' => NULL,'id_team' => '0'),
  array('id_album' => '12','name' => 'L.A. Woman','alias' => 'la-woman','country' => 'США','content' => '','date' => '1971','path' => 'assets/albums/la-woman.jpg','note' => NULL,'id_team' => '0'),
  array('id_album' => '8','name' => 'The Razors Edge','alias' => 'the-razors-edge','country' => 'Австралия','content' => '','date' => '1990','path' => 'assets/albums/the-razors-edge.jpg','note' => NULL,'id_team' => '4'),
  array('id_album' => '13','name' => 'Greatest Hits','alias' => 'greatest-hits','country' => 'США','content' => '','date' => '1978','path' => 'assets/albums/greatest-hits-beatles.jpg','note' => NULL,'id_team' => '3')
);