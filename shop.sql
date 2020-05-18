-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Май 15 2020 г., 15:23
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bot_mes`
--

DROP TABLE IF EXISTS `bot_mes`;
CREATE TABLE IF NOT EXISTS `bot_mes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` varchar(200) NOT NULL,
  `update_id` varchar(200) NOT NULL,
  `text_mes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `descript`
--

DROP TABLE IF EXISTS `descript`;
CREATE TABLE IF NOT EXISTS `descript` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(20) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `descript`
--

INSERT INTO `descript` (`id`, `data_id`, `description`) VALUES
(1, 1, 'Кофе Американо'),
(2, 2, 'Кофе Капучино'),
(3, 3, 'Кофе Латте'),
(4, 4, 'Какао'),
(5, 5, 'Чиз-кейк'),
(6, 6, 'Наполеон'),
(7, 7, 'Медовик'),
(8, 8, 'Ягодный тарт');

-- --------------------------------------------------------

--
-- Структура таблицы `order_table`
--

DROP TABLE IF EXISTS `order_table`;
CREATE TABLE IF NOT EXISTS `order_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `composition` json NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_table`
--

INSERT INTO `order_table` (`id`, `order_id`, `email`, `composition`, `status`) VALUES
(1, '239744097', 'alice123_234@mail.ru', '{\"2\": {\"price1\": \"180\", \"quantity1\": 4}}', 3),
(2, '326541358', 'alice123_234@mail.ru', '{\"2\": {\"price2\": \"210\", \"quantity2\": 1}, \"3\": {\"price1\": \"190\", \"quantity1\": \"2\"}}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `status_description`
--

DROP TABLE IF EXISTS `status_description`;
CREATE TABLE IF NOT EXISTS `status_description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(10) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status_description`
--

INSERT INTO `status_description` (`id`, `num`, `description`) VALUES
(1, 1, 'Заказ в обработке'),
(2, 2, 'Заказ оформлен'),
(3, 3, 'Ожидает в месте получения'),
(4, 4, 'Заказ выполнен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `salt` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `token` varchar(256) NOT NULL,
  `phone` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `salt`, `password`, `token`, `phone`) VALUES
(3, 'Администратор', 'lina.alina2012.kalinina@mail.ru', '60fbb179446d962bfec2', '1594e5a2a6f38c312c4670edfc38f8791447468223c7319476f8c16f55b9260e', '200aad748ee48eb0783c43d029e73dd76edc4d1759c66498d233ecd05ba8f40a', '89118257284'),
(4, 'Иванов Иван Владимирович', 'alice123_234@mail.ru', 'acbf84a4d145e836285b', 'c69a0509018389841b51f6d6dce6ce128d06ba5b19d09614a75620b6b973822a', 'da4ab8f8ceb0eed8e2045c481c2815be0cf153503d929db6a1f90f34111eed66', '89969596327');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
