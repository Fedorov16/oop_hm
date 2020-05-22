-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2020 г., 08:55
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
(7, 'Аксессуары'),
(51, 'Новая категория'),
(52, 'Новая категория 2'),
(53, 'И еще одна'),
(59, 'fgj'),
(60, 'fbmn'),
(61, 'fdghdfgh');

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
-- Структура таблицы `genders`
--

CREATE TABLE `genders` (
  `gender_id` tinyint(1) UNSIGNED NOT NULL,
  `gender_value` varchar(30) NOT NULL,
  `gender_short_value` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `genders`
--

INSERT INTO `genders` (`gender_id`, `gender_value`, `gender_short_value`) VALUES
(1, 'Мужской', 'м'),
(2, 'Женский', 'ж');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_count` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_delivery` date NOT NULL,
  `order_user_id` int(10) UNSIGNED NOT NULL,
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
  `product_mark` tinyint(1) UNSIGNED NOT NULL DEFAULT 5,
  `product_count` int(10) NOT NULL DEFAULT 1,
  `product_category_id` tinyint(2) UNSIGNED NOT NULL,
  `product_icon` varchar(255) NOT NULL DEFAULT 'icon'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_price`, `product_mark`, `product_count`, `product_category_id`, `product_icon`) VALUES
(1, 'Сумка', 'Сумка женская 40 на 32 см. Цвет черный', '1020', 5, 3, 7, 'url1'),
(2, 'Шапка и шарф', 'Комплект: шапка двойная с натуральным помпоном и шарф зимние. Цвет \"вода\"', '2400', 5, 1, 2, 'url2'),
(3, 'Рюкзак', 'Рюкзак кожаный. Высота 22см, ширина 19см, глубина 10см', '1150', 4, 2, 7, 'url3'),
(4, 'Футболка', 'Футболка мужская с логотипом \"The only one\".', '850', 5, 1, 1, 'url4'),
(5, 'Рубашка детская', 'Рубашка детская клетчатая 28 размер', '400', 4, 2, 4, 'url5'),
(6, 'Шапка женская', 'Шапка женская. Цвет белый. Размер любой ', '680', 4, 1, 2, 'url6');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `role_id` tinyint(1) UNSIGNED NOT NULL,
  `role_value` varchar(30) NOT NULL,
  `role_short_value` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`role_id`, `role_value`, `role_short_value`) VALUES
(1, 'seller', 'sel'),
(2, 'customer', 'cus');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_surname` varchar(255) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_password` char(60) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_birth` date NOT NULL,
  `user_gender_id` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `user_rating` tinyint(1) UNSIGNED NOT NULL,
  `user_reg_date` date NOT NULL,
  `user_status` tinyint(1) UNSIGNED NOT NULL,
  `user_icon` varchar(255) NOT NULL,
  `user_role_id` tinyint(1) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_login`, `user_password`, `user_email`, `user_phone`, `user_birth`, `user_gender_id`, `user_rating`, `user_reg_date`, `user_status`, `user_icon`, `user_role_id`) VALUES
(1, 'Сергей', 'Федоров', 'fedorov.16', 'qwerty1', 'fedorov.16@bk.ru', '89111111111', '1994-06-20', 1, 5, '2020-04-20', 0, '', 2),
(2, 'Михаил', 'Гризли', 'grizly15', 'qwerty5', 'grizly15@list.ru', '89555555555', '2000-01-02', 1, 4, '2020-04-25', 0, '', 2),
(3, 'Кирилл', 'Плешивцев', 'plesh99', 'qwerty3', 'plesh99@gmail.com', '89333333333', '1994-02-18', 1, 4, '2020-04-21', 0, '', 2),
(4, 'Кретова', 'Евгения', 'Kretova20', 'qwerty2', 'Kretova20@mail.ru', '89222222222', '1994-01-20', 2, 5, '2020-04-21', 0, '', 2),
(5, 'Анна', 'Каренина', 'karbel7', 'qwerty4', 'karbel7@gmail.com', '89444444444', '1996-12-11', 2, 4, '2020-04-22', 0, '', 2),
(6, 'Дина', 'Хранилова', 'hraniGod666', 'qwerty6', 'hraniGod666@gmail.ru', '89666666666', '1997-10-12', 2, 5, '2020-04-23', 0, '', 2),
(80, 'Сергей', 'Федоров', 'fedorov174', '$2y$10$JAQFXtupI/1nQCuIH7.wM.88lPehykXjQSJ0/JCrxvA2JhcGe0buC', 'fedorov.164@bk.ru', '89819578824', '0000-00-00', 1, 0, '2020-05-10', 0, '', 2),
(82, 'Сергей', 'Федоров', 'fedorov17', '$2y$10$wUoX7eidiNZAtVfBpB085ebmoMGMwjTimnBBtmqgb2ms8eTjx5Sou', 'fedorov.17@bk.ru', '89819578878', '0000-00-00', 1, 0, '2020-05-10', 0, '', 2),
(83, 'Сергей', 'Федоров', 'fedorov171', '$2y$10$6uhVOzmRyskKVZ4nI/ou1uSepd1djKHz41Y5YGDPdc/UTwL6/vUA.', 'fedorov.11@bk.ru', '89819578821', '0000-00-00', 1, 0, '2020-05-10', 0, '', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user_addresses`
--

CREATE TABLE `user_addresses` (
  `user_address_id` int(10) UNSIGNED NOT NULL,
  `user_address_user` int(10) UNSIGNED NOT NULL,
  `user_address_address` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user_addresses`
--

INSERT INTO `user_addresses` (`user_address_id`, `user_address_user`, `user_address_address`) VALUES
(1, 1, 1),
(5, 2, 5),
(4, 3, 4),
(2, 4, 2),
(3, 5, 3),
(6, 6, 6);

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
-- Индексы таблицы `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`gender_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_seller_id` (`order_user_id`,`order_product_id`),
  ADD KEY `order_product_id` (`order_product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_gender_id` (`user_gender_id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- Индексы таблицы `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`user_address_id`),
  ADD KEY `customer_address_customer` (`user_address_user`,`user_address_address`),
  ADD KEY `customer_address_address` (`user_address_address`);

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
  MODIFY `category_id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
-- AUTO_INCREMENT для таблицы `genders`
--
ALTER TABLE `genders`
  MODIFY `gender_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `user_address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `connects_ibfk_1` FOREIGN KEY (`connect_customer_id`) REFERENCES `users` (`user_id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`order_product_id`) REFERENCES `products` (`product_id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `categories` (`category_id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_gender_id`) REFERENCES `genders` (`gender_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`user_role_id`) REFERENCES `roles` (`role_id`);

--
-- Ограничения внешнего ключа таблицы `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_ibfk_1` FOREIGN KEY (`user_address_address`) REFERENCES `addresses` (`address_id`),
  ADD CONSTRAINT `user_addresses_ibfk_2` FOREIGN KEY (`user_address_user`) REFERENCES `users` (`user_id`);

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
