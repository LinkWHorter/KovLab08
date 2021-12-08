-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 17 2019 р., 10:34
-- Версія сервера: 10.4.6-MariaDB
-- Версія PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `inst1`
--

-- --------------------------------------------------------

--
-- Структура таблиці `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `group_name` varchar(8) NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `chats`
--

INSERT INTO `chats` (`id`, `group_name`, `photo_id`) VALUES
(1, 'ІПЗ-31', 1),
(2, 'ІПЗ-32', 1),
(3, 'КІ-31', 2),
(4, 'ІПЗ-41', 3);

-- --------------------------------------------------------

--
-- Структура таблиці 'phots'
--

CREATE TABLE `phots` (
  `id` int(11) NOT NULL,
  `photo_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `phots`
--

INSERT INTO `phots` (`id`, `photo_name`) VALUES
(1, 'Фото торта'),
(2, 'Фото цукерок'),
(3, 'Фото з Мальдів');

-- --------------------------------------------------------

--
-- Структура таблиці `accs`
--

CREATE TABLE `accs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `grupa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `accs`
--

INSERT INTO `accs` (`id`, `name`, `grupa_id`) VALUES
(3, 'Захарченко Трофим', 1),
(4, 'Никонов Владлен', 1),
(5, 'Евдокимов Тит', 1),
(6, 'Шумейко Тит', 2),
(7, 'Гаврилов Эдуард', 2),
(8, 'Павленко Зураб', 2),
(9, 'Яровой Харитон', 3),
(10, 'Пархоменко Игорь', 4),
(11, 'Дзюба Эдуард', 3);

--
-- Індекси збережених таблиць
--

ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

ALTER TABLE `phots`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `accs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupa_id` (`grupa_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `phots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `accs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `phots` (`id`);

ALTER TABLE `accs`
  ADD CONSTRAINT `accs_ibfk_1` FOREIGN KEY (`grupa_id`) REFERENCES `chats` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



