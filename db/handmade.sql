-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 07 2020 г., 09:03
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `handmade`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(10) UNSIGNED NOT NULL,
  `address_value` varchar(255) NOT NULL,
  `address_city_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `addresses`
--

INSERT INTO `addresses` (`address_id`, `address_value`, `address_city_id`) VALUES
(1, 'пос. Соловьи', 1),
(2, 'Ул. Неизвестная', 3),
(3, 'Ул. Малознакомая', 7),
(4, 'дер. Мазаных', 8),
(5, 'пер. Североморский', 6),
(6, 'дер. Давнозабытая', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` tinyint(2) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Мужская одежда'),
(2, 'Женская одежда'),
(3, 'Детская одежда'),
(4, 'Товары для детей'),
(5, 'Бижутерия'),
(6, 'Красота и здоровье'),
(7, 'Аксессуары');

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `city_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`city_id`, `city_value`) VALUES
(1, 'Псков'),
(2, 'Санкт-Петербург'),
(3, 'Нижний Новгород'),
(4, 'Москва'),
(5, 'Архангельск'),
(6, 'Мурманск'),
(7, 'Калуга'),
(8, 'Липецк'),
(9, 'Великие Луки'),
(10, 'Печоры');

-- --------------------------------------------------------

--
-- Структура таблицы `connects`
--

CREATE TABLE `connects` (
  `connect_id` int(10) UNSIGNED NOT NULL,
  `connect_session_id` char(64) NOT NULL,
  `connect_token` char(32) NOT NULL,
  `connect_customer_id` int(10) UNSIGNED NOT NULL,
  `connect_token_tine` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `customer_login` varchar(255) NOT NULL,
  `customer_password` char(60) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_birth` date NOT NULL,
  `customer_rating` tinyint(1) UNSIGNED NOT NULL,
  `customer_reg_date` date NOT NULL,
  `customer_status` tinyint(1) UNSIGNED NOT NULL,
  `customer_gender_is_man` tinyint(1) UNSIGNED NOT NULL,
  `customer_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_surname`, `customer_login`, `customer_password`, `customer_email`, `customer_phone`, `customer_birth`, `customer_rating`, `customer_reg_date`, `customer_status`, `customer_gender_is_man`, `customer_icon`) VALUES
(1, 'Сергей', 'Федоров', 'fedorov.16', 'qwerty1', 'fedorov.16@bk.ru', '89111111111', '1994-06-20', 5, '2020-04-20', 0, 1, ''),
(2, 'Михаил', 'Гризли', 'grizly15', 'qwerty5', 'grizly15@list.ru', '89555555555', '2000-01-02', 4, '2020-04-25', 0, 0, ''),
(3, 'Кирилл', 'Плешивцев', 'plesh99', 'qwerty3', 'plesh99@gmail.com', '89333333333', '1994-02-18', 4, '2020-04-21', 0, 1, ''),
(4, 'Кретова', 'Евгения', 'Kretova20', 'qwerty2', 'Kretova20@mail.ru', '89222222222', '1994-01-20', 5, '2020-04-21', 0, 0, ''),
(5, 'Анна', 'Каренина', 'karbel7', 'qwerty4', 'karbel7@gmail.com', '89444444444', '1996-12-11', 4, '2020-04-22', 0, 0, ''),
(6, 'Дина', 'Хранилова', 'hraniGod666', 'qwerty6', 'hraniGod666@gmail.ru', '89666666666', '1997-10-12', 5, '2020-04-23', 0, 0, ''),
(70, 'Сергей', 'Федоров', 'fedorov17', '$2y$10$Rcp2luTVy.2gyROW07pDseFhwfEz8RMAlc8PRWqCaN8WPALm6U6xe', 'fedorov.11@bk.ru', '89819578811', '0000-00-00', 0, '2020-05-06', 0, 0, ''),
(71, 'Сергей', 'Федоров', 'fedorov22', '$2y$10$cKmxfJg6/LgBIcr18JefWuuTsFyZ48GoxyREoZdvP7C.cH25s4W8G', 'fedorov.22@bk.ru', '89819578822', '0000-00-00', 0, '2020-05-06', 0, 0, ''),
(72, 'Сергей', 'Федоров', 'fedorov33', '$2y$10$XRGI3uIMICikRwj09Qq8a.mvSK8vTMy3XgrrDivaaAKxnShK/J1KO', 'fedorov.33@bk.ru', '89819578833', '0000-00-00', 0, '2020-05-06', 0, 0, ''),
(73, 'Сергей', 'Федоров', 'fedorov44', '$2y$10$EECXHUrHIgGdSfEUHVnO/ONBUeTRKfexJy62OcjIZ9QdlQQuWflw6', 'fedorov.164@bk.ru', '89819578844', '0000-00-00', 0, '2020-05-06', 0, 0, ''),
(74, 'Сергей', 'Федоров', 'fedorov55', '$2y$10$Ce7UUxur4KBlIETIYr9fLu41wZEEDsLQtnEfKrEXncXY.9ZQ0FALm', 'fedorov.165@bk.ru', '89819578855', '0000-00-00', 0, '2020-05-06', 0, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `customer_address_id` int(10) UNSIGNED NOT NULL,
  `customer_address_customer` int(10) UNSIGNED NOT NULL,
  `customer_address_address` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `customer_addresses`
--

INSERT INTO `customer_addresses` (`customer_address_id`, `customer_address_customer`, `customer_address_address`) VALUES
(1, 1, 1),
(5, 2, 5),
(4, 3, 4),
(2, 4, 2),
(3, 5, 3),
(6, 6, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_count` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_delivery` date NOT NULL,
  `order_seller_id` int(10) UNSIGNED NOT NULL,
  `order_customer_id` int(10) UNSIGNED NOT NULL,
  `order_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_price` varchar(45) NOT NULL,
  `product_mark` tinyint(1) UNSIGNED NOT NULL,
  `product_count` int(10) NOT NULL,
  `product_category_id` tinyint(2) UNSIGNED NOT NULL,
  `product_seller_id` int(10) UNSIGNED NOT NULL,
  `product_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_price`, `product_mark`, `product_count`, `product_category_id`, `product_seller_id`, `product_icon`) VALUES
(1, 'Сумка', 'Сумка женская 40 на 34 см. Цвет черный', '990', 5, 3, 7, 1, 'url1'),
(2, 'Шапка и шарф', 'Комплект: шапка двойная с натуральным помпоном и шарф зимние. Цвет \"вода\"', '2200', 5, 1, 2, 1, 'url2'),
(3, 'Рюкзак', 'Рюкзак кожаный. Высота 22см, ширина 19см, глубина 10см', '1150', 4, 2, 7, 1, 'url3'),
(4, 'Футболка', 'Футболка мужская с логотипом \"The only one\"', '700', 5, 1, 1, 1, 'url4'),
(5, 'Рубашка детская', 'Рубашка детская клетчатая 28 размер', '400', 4, 2, 4, 1, 'url5');

-- --------------------------------------------------------

--
-- Структура таблицы `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(10) UNSIGNED NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `seller_surname` varchar(255) NOT NULL,
  `seller_login` varchar(255) NOT NULL,
  `seller_password` char(32) NOT NULL,
  `seller_email` varchar(255) NOT NULL,
  `seller_phone` varchar(15) NOT NULL,
  `seller_birth` date NOT NULL,
  `seller_rating` tinyint(1) UNSIGNED NOT NULL,
  `seller_reg_date` date NOT NULL,
  `seller_status` tinyint(1) UNSIGNED NOT NULL,
  `seller_gender_is_man` tinyint(1) UNSIGNED NOT NULL,
  `seller_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sellers`
--

INSERT INTO `sellers` (`seller_id`, `seller_name`, `seller_surname`, `seller_login`, `seller_password`, `seller_email`, `seller_phone`, `seller_birth`, `seller_rating`, `seller_reg_date`, `seller_status`, `seller_gender_is_man`, `seller_icon`) VALUES
(1, 'Ольга', 'Кретова', 'Kretol1', 'asdfgh1', 'Kretol1@gmail.com', '89123456789', '1981-09-15', 5, '2020-04-20', 0, 0, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `address_city_id` (`address_city_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Индексы таблицы `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`connect_id`),
  ADD KEY `connect_user_id` (`connect_customer_id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_gender_id` (`customer_gender_is_man`);

--
-- Индексы таблицы `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`customer_address_id`),
  ADD KEY `customer_address_customer` (`customer_address_customer`,`customer_address_address`),
  ADD KEY `customer_address_address` (`customer_address_address`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_seller_id` (`order_seller_id`,`order_customer_id`,`order_product_id`),
  ADD KEY `order_customer_id` (`order_customer_id`),
  ADD KEY `order_product_id` (`order_product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_id` (`product_category_id`),
  ADD KEY `product_seller_id` (`product_seller_id`);

--
-- Индексы таблицы `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `seller_gender_id` (`seller_gender_is_man`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `connects`
--
ALTER TABLE `connects`
  MODIFY `connect_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `customer_address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`address_city_id`) REFERENCES `city` (`city_id`);

--
-- Ограничения внешнего ключа таблицы `connects`
--
ALTER TABLE `connects`
  ADD CONSTRAINT `connects_ibfk_1` FOREIGN KEY (`connect_customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Ограничения внешнего ключа таблицы `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD CONSTRAINT `customer_addresses_ibfk_1` FOREIGN KEY (`customer_address_address`) REFERENCES `addresses` (`address_id`),
  ADD CONSTRAINT `customer_addresses_ibfk_2` FOREIGN KEY (`customer_address_customer`) REFERENCES `customers` (`customer_id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`order_product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`order_seller_id`) REFERENCES `sellers` (`seller_id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`product_seller_id`) REFERENCES `sellers` (`seller_id`);

DELIMITER $$
--
-- События
--
CREATE DEFINER=`root`@`localhost` EVENT `remove_on_connect` ON SCHEDULE EVERY 2 MINUTE STARTS '2020-05-01 08:41:10' ON COMPLETION PRESERVE ENABLE DO DELETE FROM `connects` WHERE `connect_token_time` < NOW() - INTERVAL 2 DAY$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
