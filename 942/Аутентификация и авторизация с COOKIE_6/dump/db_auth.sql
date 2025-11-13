-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2025 г., 14:38
-- Версия сервера: 8.0.24
-- Версия PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_auth`
--
CREATE DATABASE IF NOT EXISTS `db_auth` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `db_auth`;

-- --------------------------------------------------------

--
-- Структура таблицы `user_crypt`
--

CREATE TABLE `user_crypt` (
  `id_user` int NOT NULL,
  `login` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `user_crypt`
--

TRUNCATE TABLE `user_crypt`;
--
-- Дамп данных таблицы `user_crypt`
--

INSERT DELAYED IGNORE INTO `user_crypt` (`id_user`, `login`, `pwd`, `salt`, `role`) VALUES
(1, 'loginUser', 'ihgPnurRqXDi.', 'ih1fst4vwq', 'user'),
(2, 'loginModerator', '9qHbQW4OQQKn.', '9qexto8k6c', 'moderator'),
(3, 'loginAdmin', 'zkEm.TzlPiFxg', 'zk4aquvb92', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `user_hash`
--

CREATE TABLE `user_hash` (
  `id_user` int NOT NULL,
  `login` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `user_hash`
--

TRUNCATE TABLE `user_hash`;
--
-- Дамп данных таблицы `user_hash`
--

INSERT DELAYED IGNORE INTO `user_hash` (`id_user`, `login`, `pwd`, `salt`, `guid`, `role`) VALUES
(1, 'loginUser', '$2y$10$lbYOYFEXG8WEySkXsZUVHOA29ulKmklWVGxlWVgg1.N0p8A2CEoEu', NULL, '', 'user'),
(2, 'loginModerator', '$2y$10$7zMyiIQOSwZmqlTqYIMOg.GvgdKPWGUs2ph2M4l/nv9H2Z9eP100S', NULL, '', 'moderator'),
(3, 'loginAdmin', '$2y$10$B23zjJ2iQXq2YZfrm83iN.nLWHI6TU.AiSF6oXFBVBegRRvQRAMyC', NULL, '', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `user_open`
--

CREATE TABLE `user_open` (
  `id_user` int NOT NULL,
  `login` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `user_open`
--

TRUNCATE TABLE `user_open`;
--
-- Дамп данных таблицы `user_open`
--

INSERT DELAYED IGNORE INTO `user_open` (`id_user`, `login`, `pwd`, `salt`, `role`) VALUES
(1, 'loginUser', 'pwdUser', NULL, 'user'),
(2, 'loginModerator', 'pwdModerator', NULL, 'moderator'),
(3, 'loginAdmin', 'pwdAdmin', NULL, 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user_crypt`
--
ALTER TABLE `user_crypt`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user_hash`
--
ALTER TABLE `user_hash`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user_open`
--
ALTER TABLE `user_open`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user_crypt`
--
ALTER TABLE `user_crypt`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user_hash`
--
ALTER TABLE `user_hash`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user_open`
--
ALTER TABLE `user_open`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
