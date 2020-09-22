-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 22 2020 г., 16:09
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
  `connect_user_id` int(10) UNSIGNED NOT NULL,
  `connect_token_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `connects`
--

INSERT INTO `connects` (`connect_id`, `connect_session_id`, `connect_token`, `connect_user_id`, `connect_token_time`) VALUES
(40, '', 'newToken', 1, '2020-05-29 06:07:48'),
(41, '', 'eb4fc86e68155026fb166beb6agb7cgd', 1, '2020-05-30 07:32:31'),
(42, '', '07fc634cbe0e8650282635c6a216eef8', 1, '2020-05-30 17:24:09'),
(43, '', '005aa6ee17f388885fa32511528a4e7d', 1, '2020-06-01 06:12:26'),
(44, '', '2ee0d042db93c9bggc373e677ae706a4', 1, '2020-06-03 06:30:05'),
(45, '', 'edba901089373546g34g14061a51567b', 1, '2020-06-06 10:49:52'),
(46, '', 'ca2gd2begf14b4e359ggeb3931gccgca', 1, '2020-06-06 11:09:15'),
(47, '', '5f6a7ed9d49d21562a29a264aa73gf9f', 1, '2020-06-06 19:32:07'),
(48, '', '530eg3177d42ece03369b82c79gd7047', 1, '2020-06-06 21:52:12'),
(49, '', '06fe54g1f76ec70e58d7284fe4901cg5', 1, '2020-06-11 10:55:13'),
(50, '', 'df4fa16b03db82af40116530e988761f', 1, '2020-06-11 11:31:49'),
(51, '', '43311b02g7gc45c2ab7b5b39ga7bfg07', 1, '2020-06-12 09:05:51'),
(52, '', '675d1db152ac79911eebd4cffa4da3ab', 1, '2020-06-16 18:37:33'),
(53, '', 'e9cb230225d71cb76199261fd7bb1204', 102, '2020-06-16 18:47:41'),
(54, '', 'f232364f540g1f19874145bc365e2007', 1, '2020-06-17 06:38:46'),
(55, '', 'cge0d86ca29e4cce1dgf37cgc2e5815c', 1, '2020-07-14 19:58:00'),
(56, '', 'b773365g88409282g2d61799f336g28c', 1, '2020-07-21 06:13:46'),
(57, '', '0g0e8d2ecb2be03442af9e9515836b30', 1, '2020-07-31 07:18:23'),
(58, '', 'g7cff33d0b27e9ag44c271a7ac3ac8fe', 1, '2020-09-17 06:28:29'),
(59, '', 'e61e59bc265932f3g5g85ea7e903e77b', 1, '2020-09-22 12:11:47'),
(60, '', '76552579cfgf4933f064f47f2f8eabfa', 1, '2020-09-22 13:01:50'),
(61, '', '69585f97c9adc94a924d75a7a92gd179', 1, '2020-09-22 13:49:38'),
(62, '', 'afd05g7a87943942958cdeg0275ceg4d', 1, '2020-09-22 14:05:55');

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
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `news_body` text NOT NULL,
  `news_icon` varchar(255) NOT NULL,
  `news_date` datetime DEFAULT current_timestamp(),
  `news_is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_body`, `news_icon`, `news_date`, `news_is_deleted`) VALUES
(12, 'МАСТЕР-КЛАСС \"Домашняя гранола и конфеты из марципана\"', '7 декабря 2019 г. с 11.00 по 14.00 (г. Нижний Новгород, ул. Победная д.14)\r\n\r\nНа дворе зима… А это значит, что настало время тихим зимним вечером заварить себе чашечку вкусного чая, открыть свои любимые конфеты и наслаждаешься белоснежной зимой. За окном кружится снег, а воспоминания так и греют своим теплом…А на завтрак Вас уже будет ждать настоящая, вкусная и полезная гранола.\r\n\r\nМарципан – это ореховая масса. Ее легко можно использовать в качестве украшения сладостей или же можно подавать как самостоятельное лакомство. Шоколадные конфеты из марципана хороши тем, что их можно сделать заранее. Конфеты из марципана, сделанные своими руками будут отличным дополнением к подарку на любое мероприятие и принесут радость как детям, так и взрослым.\r\n\r\nГранола – очень популярный продукт для завтрака. Отлично сочетается по вкусу с молоком, натуральным йогуртом, кефиром и другими кисломолочными продуктами. Гранолу можно подавать со свежими фруктами и ягодами или же использовать как топпинг для десертов, мороженого.\r\n\r\nЧто ждет Вас на мастер-классе:\r\n• научитесь работать с марципаном и карамелизировать орехи;\r\n• уйдете домой с коробочкой конфет ручной работы;\r\n• приготовите идеальный быстрый завтрак;\r\n• убедитесь в том, что подарок ручной работы может быть не только красивым, а еще вкусным и полезным.\r\n\r\nЦена билета – 800 рублей. Все материалы включены.', '06.20/UJyMBOgV_Oc.jpg', '2020-06-02 08:49:02', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_count` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_product_id` int(10) UNSIGNED NOT NULL,
  `order_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_count`, `order_date`, `order_user_id`, `order_product_id`, `order_info`) VALUES
(25, 1, '2020-05-30', 1, 2, NULL),
(26, 1, '2020-05-30', 1, 3, NULL),
(27, 1, '2020-05-30', 1, 4, NULL),
(28, 1, '2020-05-30', 1, 2, NULL),
(29, 1, '2020-05-30', 1, 3, NULL),
(30, 1, '2020-05-30', 1, 4, NULL),
(31, 1, '2020-05-30', 1, 2, NULL),
(32, 1, '2020-05-30', 1, 3, NULL),
(33, 1, '2020-05-30', 1, 2, NULL),
(34, 1, '2020-05-30', 1, 3, NULL),
(35, 1, '2020-05-30', 1, 2, NULL),
(36, 1, '2020-05-30', 1, 3, NULL),
(37, 1, '2020-05-30', 1, 2, NULL),
(38, 1, '2020-05-30', 1, 6, NULL),
(39, 1, '2020-05-30', 1, 2, NULL),
(40, 2, '2020-05-30', 1, 5, NULL),
(41, 1, '2020-05-30', NULL, 1, 'имя: , телефон: , email: '),
(42, 1, '2020-05-30', NULL, 2, 'имя: , телефон: , email: '),
(43, 1, '2020-05-30', NULL, 3, 'имя: , телефон: , email: '),
(44, 1, '2020-06-17', 1, 3, NULL),
(45, 1, '2020-07-31', 1, 3, NULL),
(46, 2, '2020-07-31', 1, 4, NULL),
(47, 1, '2020-09-22', 1, 2, NULL),
(48, 2, '2020-09-22', 1, 4, NULL);

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
  `product_icon` varchar(255) NOT NULL DEFAULT 'icon',
  `product_is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `product_date` datetime NOT NULL DEFAULT current_timestamp(),
  `product_is_sale` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `product_old_price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_price`, `product_mark`, `product_count`, `product_category_id`, `product_icon`, `product_is_deleted`, `product_date`, `product_is_sale`, `product_old_price`) VALUES
(1, 'Сумка', 'Повседневная мужская сумка позволит всё самое необходимое иметь под рукой. Выполнена в чёрном цвете из натуральной кожи с текстильной подкладкой. Носится на регулируемом текстильном ремне через плечо, также оснащена короткой ручкой для переноски. Имеет дв', '999', 5, 1, 7, '7/', 1, '2020-05-27 15:10:00', 0, 999),
(2, 'Сумка', 'Какое-то описание', '350', 5, 1, 7, '7/20200401_124702.jpg', 1, '2020-05-27 15:50:00', 1, 899),
(3, 'Сумка', 'Имеет одно отделение, закрывается на кнопку.', '1800', 5, 1, 7, '7/IMG_20200326_144953.jpg', 0, '2020-05-27 18:04:00', 0, 1800),
(4, 'для категории 1', '', '2000', 5, 1, 1, '1/_dKFOmaKNLY.jpg', 1, '2020-05-28 20:20:00', 0, 2800),
(5, 'для категории 2', '', '600', 5, 1, 2, '2/9V_5QUvaqV8.jpg', 1, '2020-05-28 17:49:00', 0, 2800),
(6, 'для категории 3', '', '505', 5, 1, 3, '3/', 1, '2020-05-28 16:55:00', 0, NULL),
(7, 'Изменил с 6 на 1', '', '1010', 5, 1, 1, '1/', 1, '2020-05-29 07:05:00', 0, NULL),
(8, 'Подушки', 'Натуральный чехол данной подушки обеспечиват циркуляцию воздуха для подержания комфортной ровной температуры для сна. Она объемна, при оптимальном соотношение пуха и пера (50 к 50) в составе наполнителя. Это гарантирует мягкость и упругость подушки. Для к', '1999', 5, 1, 6, '6/20200519_121932.jpg', 0, '2020-05-28 08:56:00', 0, 2900),
(14, 'Кошелек', '', '1200', 5, 1, 7, '7/20200515_170120.jpg', 1, '2020-06-06 09:56:38', 0, 1200),
(16, 'Кошелек', 'Вместительное портмоне, в который удобно складывать купюры в полную длину, а также множество пластиковых карточек или визиток. В нем 2 отделения, одно из которых внешнее на молнии. ', '2900', 5, 1, 7, '7/20200515_170120.jpg', 0, '2020-06-06 10:36:15', 0, 2900),
(22, 'Сумка', 'Описание сумки', '1200', 5, 1, 7, '7/IMG_20200324_170317.jpg', 0, '2020-06-17 08:40:21', 0, 1200),
(23, 'Рождественский венок', 'Один из самых простых вариантов: хвоя и шарики', '1500', 5, 1, 7, '7/_dKFOmaKNLY.jpg', 0, '2020-09-22 16:00:22', 0, NULL),
(24, 'Рождественская елка', 'Вид: Picea pungens \"Christmas Blue', '900', 5, 1, 7, '7/20191123_172358.jpg', 0, '2020-09-22 16:01:45', 0, NULL),
(25, 'Рождественский венок', 'Декор в холодных тонах как нельзя лучше соответствует зимнему настроению\r\n', '1100', 5, 1, 7, '7/IMG_20181110_192158 1.jpg', 0, '2020-09-22 16:02:26', 0, NULL),
(26, 'Кошелек', 'Имеет застежку на кнопке', '890', 5, 1, 7, '7/20200401_183438.jpg', 0, '2020-09-22 16:03:16', 0, NULL),
(27, 'Сумки для двоих', 'Цена за пару. Сумка для матери и ребенка в одном стиле', '2200', 5, 1, 7, '7/IMG_20200324_170540.jpg', 0, '2020-09-22 16:03:56', 0, NULL);

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
  `user_reg_date` date NOT NULL,
  `user_role_id` tinyint(1) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_login`, `user_password`, `user_email`, `user_phone`, `user_birth`, `user_gender_id`, `user_reg_date`, `user_role_id`) VALUES
(1, 'Сергей', 'Федоров', 'fedorov1', '$2y$10$jChJcPPJYCrfe9zIGO0jbecaUF08lt1eAbCuGegQaxuXzCbXiM3GO', 'fedorov.111@bk.ru', '89819578111', '0000-00-00', 1, '2020-05-24', 1),
(2, 'Михаил', 'Гризли', 'grizly15', 'qwerty5', 'grizly15@list.ru', '89555555555', '2000-01-02', 1, '2020-04-25', 2),
(3, 'Кирилл', 'Плешивцев', 'plesh99', 'qwerty3', 'plesh99@gmail.com', '89333333333', '1994-02-18', 1, '2020-04-21', 2),
(4, 'Кретова', 'Евгения', 'Kretova20', 'qwerty2', 'Kretova20@mail.ru', '89222222222', '1994-01-20', 2, '2020-04-21', 2),
(5, 'Анна', 'Каренина', 'karbel7', 'qwerty4', 'karbel7@gmail.com', '89444444444', '1996-12-11', 2, '2020-04-22', 2),
(6, 'Дина', 'Хранилова', 'hraniGod666', 'qwerty6', 'hraniGod666@gmail.ru', '89666666666', '1997-10-12', 2, '2020-04-23', 2),
(102, 'Сергей', 'Федоров', 'fedorov166', '$2y$10$NBshW82TgpcbpJQVJVWs3.IKnNC/P.D9tbvnbr3mc5DWu9/m/Thv.', 'fedorov.16@bk.ru', '89819578828', '0000-00-00', 1, '2020-06-16', 2);

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
(5, 2, 5),
(4, 3, 4),
(2, 4, 2),
(3, 5, 3),
(6, 6, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `wish`
--

CREATE TABLE `wish` (
  `wish_id` int(10) NOT NULL,
  `wish_user_id` int(10) UNSIGNED NOT NULL,
  `wish_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `wish`
--

INSERT INTO `wish` (`wish_id`, `wish_user_id`, `wish_product_id`) VALUES
(145, 102, 4),
(146, 1, 3),
(147, 1, 2),
(148, 1, 1),
(150, 1, 5),
(151, 1, 8);

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
  ADD KEY `connect_user_id` (`connect_user_id`);

--
-- Индексы таблицы `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`gender_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

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
-- Индексы таблицы `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`wish_id`),
  ADD KEY `wish_user_id` (`wish_user_id`),
  ADD KEY `wish_product_id` (`wish_product_id`);

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
  MODIFY `category_id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `connects`
--
ALTER TABLE `connects`
  MODIFY `connect_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `genders`
--
ALTER TABLE `genders`
  MODIFY `gender_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT для таблицы `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `user_address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `wish`
--
ALTER TABLE `wish`
  MODIFY `wish_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

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
  ADD CONSTRAINT `connects_ibfk_1` FOREIGN KEY (`connect_user_id`) REFERENCES `users` (`user_id`);

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

--
-- Ограничения внешнего ключа таблицы `wish`
--
ALTER TABLE `wish`
  ADD CONSTRAINT `wish_ibfk_1` FOREIGN KEY (`wish_user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `wish_ibfk_2` FOREIGN KEY (`wish_product_id`) REFERENCES `products` (`product_id`);

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
