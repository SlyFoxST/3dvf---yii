-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 12 2019 г., 21:29
-- Версия сервера: 5.6.37
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `keywords`) VALUES
(1, 'Ведущий, тамада, мс', 'Ведущий, тамада, мс', 'Ведущий, тамада, мс'),
(2, 'Исполнители, музыкальные колективы', 'Исполнители, музыкальные колективы', 'Исполнители, музыкальные колективы'),
(3, 'Клубные фрики', 'Клубные фрики', 'Клубные фрики'),
(4, 'Артисты оригинального жанра', 'Артисты оригинального жанра', 'Артисты оригинального жанра'),
(5, 'Фотографы,видеографы', 'Фотографы,видеографы', 'Фотографы,видеографы'),
(6, 'DJ Show', 'DJ Show', 'DJ Show'),
(7, 'Fire, Led Show', 'Fire, Led Show', 'Fire, Led Show'),
(8, 'Dance Show', 'Dance Show', 'Dance Show'),
(9, 'Strip Show, Go-Go, PJ', 'Strip Show, Go-Go, PJ', 'Strip Show, Go-Go, PJ'),
(10, 'Прочее', 'Прочее', 'Прочее');

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`page_id`, `parent_id`, `title`, `description`, `keywords`, `content`) VALUES
(1, 0, 'Главная', 'Концертное агентство 3dwoice', 'Концертное агентство 3dwoice', ''),
(2, 0, 'Артисты', 'Артисты', 'Артисты', ''),
(3, 0, 'Услуги', 'Услуги', 'Услуги', ''),
(4, 3, 'Организация концертов,прздников', 'Организация концертов,прздников', 'Организация концертов,прздников', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
