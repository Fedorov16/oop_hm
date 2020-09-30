-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 30 2020 г., 10:08
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
(62, '', 'afd05g7a87943942958cdeg0275ceg4d', 1, '2020-09-22 14:05:55'),
(63, '', 'f32g78fg7d764b2899b546d98a5556g8', 1, '2020-09-22 15:09:38'),
(64, '', '14685eed5bcc4802a9aa1a1584c0f441', 103, '2020-09-22 15:10:20'),
(65, '', '3b7895a28g630ae9f5034d6dea533655', 1, '2020-09-22 15:11:10'),
(66, '', '8ecg2c86a28gac90cb5c2f2f939b44a2', 104, '2020-09-22 15:15:38'),
(67, '', '4e097ca04a0a328g734405e14808ggbg', 1, '2020-09-22 16:45:22'),
(68, '', '5b5aec4221ge7b5d40ec7cg1f37d4fd2', 1, '2020-09-22 16:57:31'),
(69, '', '8682b62b51cgd3b9fea6f8f3102064f8', 1, '2020-09-22 20:24:57'),
(70, '', '6cg68298g6g47dcb804e3666874303da', 1, '2020-09-22 20:30:29'),
(71, '', 'bcdaae0610ec8398c9fbc11ac47287d3', 1, '2020-09-22 20:35:21'),
(72, '', 'g072bad12c184b0294278242a41ea034', 1, '2020-09-22 20:45:59'),
(73, '', '28b8c47bf98e04ae62a461a77f2b2697', 103, '2020-09-22 21:01:51'),
(74, '', '68064gg5418b428b7689fbc747be1588', 1, '2020-09-22 21:02:37'),
(75, '', '462e665f659051dg3da10gd935e4fb90', 103, '2020-09-22 21:03:06'),
(76, '', '99b466f7a1f8g89017330d3d4dg1a498', 103, '2020-09-22 21:04:16'),
(77, '', '1a839b513595f0gd1e9g1517a8c73c4d', 1, '2020-09-22 21:04:25'),
(78, '', 'b68316084fagaf5714384g4gb80g79de', 1, '2020-09-22 22:19:50'),
(79, '', 'f9f57655b48cc798gd8g38ce5g9e721g', 1, '2020-09-23 20:52:07'),
(80, '', 'e69fb3139eb28041a952e09g615912f8', 1, '2020-09-26 13:37:13'),
(81, '', 'a9c538a89c96f9e1e295ed87f20fdb0b', 1, '2020-09-26 14:25:49'),
(82, '', 'g881a265g7g7a722bc5gbc279ae108cb', 103, '2020-09-26 14:37:19'),
(83, '', 'f31e95b6g3cg3gc91bb0138502093e25', 1, '2020-09-27 13:07:52'),
(84, '', '504b142f8c69966688dca706a3431490', 1, '2020-09-28 18:26:33'),
(85, '', '3782543293d533caeb5ae507204949d0', 1, '2020-09-29 13:58:21'),
(86, '', 'cga3fefcec2fe78265285gfgd13eec48', 1, '2020-09-29 14:45:08');

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
  `order_count` int(10) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `order_user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_product_id` int(10) UNSIGNED NOT NULL,
  `order_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_count`, `order_date`, `order_user_id`, `order_product_id`, `order_info`) VALUES
(49, 1, '2020-09-22', 1, 3, NULL),
(50, 1, '2020-09-22', 1, 8, NULL),
(51, 1, '2020-09-22', 1, 16, NULL),
(52, 1, '2020-09-27', NULL, 3, 'Антон,89991958987,antony.fed@gmail.com'),
(53, 1, '2020-09-27', NULL, 16, 'Антон,89991958987,antony.fed@gmail.com'),
(54, 1, '2020-09-29', NULL, 23, 'Федорова Евгения Дмитриевна,89789456612,kretova@gmail.com'),
(55, 3, '2020-09-29', NULL, 24, 'Федорова Евгения Дмитриевна,89789456612,kretova@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_price` int(6) UNSIGNED NOT NULL,
  `product_mark` tinyint(1) UNSIGNED NOT NULL DEFAULT 5,
  `product_count` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `product_category_id` tinyint(2) UNSIGNED NOT NULL,
  `product_icon` varchar(255) NOT NULL DEFAULT 'icon',
  `product_is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `product_date` datetime NOT NULL DEFAULT current_timestamp(),
  `product_is_sale` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `product_old_price` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_price`, `product_mark`, `product_count`, `product_category_id`, `product_icon`, `product_is_deleted`, `product_date`, `product_is_sale`, `product_old_price`) VALUES
(1, 'Сумка', 'Повседневная мужская сумка позволит всё самое необходимое иметь под рукой. Выполнена в чёрном цвете из натуральной кожи с текстильной подкладкой. Носится на регулируемом текстильном ремне через плечо, также оснащена короткой ручкой для переноски. Имеет дв', 999, 5, 1, 7, '7/', 1, '2020-05-27 15:10:00', 0, 999),
(2, 'Сумка', 'Какое-то описание', 350, 5, 1, 7, '7/20200401_124702.jpg', 1, '2020-05-27 15:50:00', 1, 899),
(3, 'Сумка', 'Имеет одно отделение, закрывается на кнопку.', 1800, 5, 1, 7, '7/IMG_20200326_144953.jpg', 0, '2020-05-27 18:04:00', 0, 1800),
(8, 'Подушки', 'Натуральный чехол данной подушки обеспечиват циркуляцию воздуха для подержания комфортной ровной температуры для сна. Она объемна, при оптимальном соотношение пуха и пера (50 к 50) в составе наполнителя. Это гарантирует мягкость и упругость подушки. Для к', 1999, 5, 1, 6, '6/20200519_121932.jpg', 0, '2020-05-28 08:56:00', 1, 2900),
(14, 'Кошелек', '', 1200, 5, 1, 7, '7/20200515_170120.jpg', 1, '2020-06-06 09:56:38', 0, 1200),
(16, 'Кошелек', 'Вместительное портмоне, в который удобно складывать купюры в полную длину, а также множество пластиковых карточек или визиток. В нем 2 отделения, одно из которых внешнее на молнии. ', 3600, 5, 1, 7, '7/20200515_170120.jpg', 0, '2020-06-06 10:36:15', 0, 3600),
(22, 'Сумка', 'Описание сумки', 1200, 5, 1, 7, '7/IMG_20200324_170317.jpg', 0, '2020-06-17 08:40:21', 0, 1200),
(23, 'Рождественский венок', 'Один из самых простых вариантов: хвоя и шарики', 1500, 5, 1, 7, '7/_dKFOmaKNLY.jpg', 0, '2020-09-22 16:00:22', 0, NULL),
(24, 'Рождественская елка', 'Вид: Picea pungens \"Christmas Blue', 900, 5, 1, 7, '7/20191123_172358.jpg', 0, '2020-09-22 16:01:45', 0, NULL),
(25, 'Рождественский венок', 'Декор в холодных тонах как нельзя лучше соответствует зимнему настроению\r\n', 1100, 5, 1, 7, '7/IMG_20181110_192158 1.jpg', 0, '2020-09-22 16:02:26', 0, NULL),
(26, 'Кошелек', 'Имеет застежку на кнопке', 890, 5, 1, 7, '7/20200401_183438.jpg', 0, '2020-09-22 16:03:16', 0, NULL),
(27, 'Сумки для двоих', 'Цена за пару. Сумка для матери и ребенка в одном стиле', 2200, 5, 1, 7, '7/IMG_20200324_170540.jpg', 0, '2020-09-22 16:03:56', 0, NULL),
(28, 'Свитшот женский', 'Футболка с длинным рукавом с ручной росписью\r\n\r\nРекомендации по уходу:\r\nРучная стирка без отбеливателя', 2350, 5, 1, 2, '2/img_0276.jpg', 0, '2020-09-22 16:28:09', 0, NULL),
(29, 'Футболка женская', 'Футболка с длинным рукавом, с ручной росписью\r\n\r\nРекомендации по уходу\r\nРучная стирка без отбеливателя', 1350, 5, 1, 2, '2/img_0208.jpg', 0, '2020-09-22 16:29:16', 0, NULL),
(30, 'Футболка', 'Футболка с длинным рукавом с ручной росписью\r\n\r\nРекомендации по уходу\r\nРучная стирка без отбеливателя', 800, 5, 1, 2, '2/img_0295.jpg', 0, '2020-09-22 16:29:48', 0, 800),
(31, 'Вязаный жакет', 'Вязаный жакет на пуговицах с меховой отделкой.\r\nБУДЬТЕ ВСЕГДА НЕПОВТОРИМЫ. НОСИТЕ ВЕЩИ ИНДИВИДУАЛЬНОГО ДИЗАЙНА', 3600, 5, 1, 2, '2/scaglbftlnw.jpg', 0, '2020-09-22 16:31:10', 0, NULL),
(32, 'Длинный жакет', 'Длинный жакет, вязанное пальто - отличное весеннее обновление гардероба\r\n\r\nРекомендации по уходу\r\nМашиная стирка', 2500, 5, 1, 2, '2/m_049.jpg', 0, '2020-09-22 16:32:08', 0, NULL),
(33, 'Водолазка мужская', 'Водолазка мужская, ручная роспись\r\n\"Черепашки Ниндзя\"\r\nРазмер 50-52\r\nЦвет: тёмно-синий\r\nФлюорисцентная, светится в темноте', 1450, 5, 1, 1, '1/cherepakh3.jpg', 0, '2020-09-22 16:34:44', 0, NULL),
(34, 'Галстук-бабочка', 'Вязаные галстуки-бабочки на ремешке из натуральной кожи.\r\nНовый аксессуар, который не оставит никого равнодушным.\r\nЦвета в ассортименте. Вяжу на заказ.', 900, 5, 1, 1, '1/qfasgn6fqy8.jpg', 0, '2020-09-22 16:35:51', 0, NULL),
(35, 'Галстук бабочка', 'Классический галстук-бабочка-универсальный аксессуар высокого качества, ручная работа', 400, 5, 1, 1, '1/ykrcqeme9v8.jpg', 0, '2020-09-22 16:36:33', 0, NULL),
(36, 'Галстук из кожи', 'Галстук из натуральной кожи ручной сборки. Гравировка Дракон, галстук на ремешке. Ремешок и галстук регулируются по длине. В самой широкой части галстука 7 см. Отправляется в подарочной коробке с прозрачной крышкой.', 4500, 5, 1, 1, '1/drakon.jpg', 0, '2020-09-22 16:37:21', 0, NULL),
(37, 'Бабочка из дерева', 'Качественная природная древесина имеет свой неповторимый рисунок и текстуру, поэтому каждая #галстукбабочка является уникальной, другой такой в природе не существует', 800, 5, 1, 1, '1/photo_2017_11_16_15_18_45.jpg', 0, '2020-09-22 16:38:27', 0, NULL),
(38, 'Подушки', 'Подушки данной работы создадут в доме атмосферу уюта.', 2200, 5, 1, 6, '6/20200519_122046.jpg', 0, '2020-09-22 16:50:32', 0, NULL),
(39, 'Коврик овальной', 'Кружевные  Изделия ручной работы, создающие уют и красоту вашего дома, Пледы, Покрывала, Скатерти, Салфетки, Ковры и коврики, Любых размеров и формы', 4500, 5, 1, 6, '6/ce5135899efbff32cf062f0369wi_dlya_doma_i_interera_kover_vyazanyj_epatazh.jpg', 0, '2020-09-22 16:51:15', 0, NULL),
(40, 'Ажурная скатерть', 'Ажурная скатерть связана крючком из отдельных мотивов. Пряжа 100% хлопок(Италия). Хороший подарок, который будет радовать много лет. Украсит интерьер в стиле Прованс ', 1020, 5, 1, 6, '6/img_0857.jpg', 0, '2020-09-22 16:51:53', 0, NULL),
(41, 'Вязаные ковры', 'Изготовлю в кротчайшие сроки и наивысшего качества !!! изделия ручной работы ! В наличии и на заказ ! Цена и размеры изделия обсуждаются ! доставка в любой город России', 5600, 5, 1, 6, '6/bz0oj3g0wp0.jpg', 0, '2020-09-22 16:52:38', 0, NULL),
(42, 'Вязаные коврики', 'Вязаные ковры из трикотажной пряжи. Натуральные гиппоаллергенные материалы,  легко стирать. Отлично подойдут как в детскую​, ванную, спальню. Очень приятный материал, удобен для игры детей на нем. Очень приятные цвета', 1200, 5, 1, 6, '6/2017_03_12_19.53.11.jpg', 0, '2020-09-22 16:53:10', 0, NULL),
(43, 'Колье со стразами', 'Бижутерия. Смотрится не \"дешево и безвкусно\", а стильно и актуально во многих образах. Собрано из разных частей новых украшений (под утилизацию, брак) из известных масс-маркетов.', 500, 5, 1, 5, '5/p_20180517_143344_vhdr_on_01_2.jpg', 0, '2020-09-22 16:54:30', 0, NULL),
(44, 'малахитовая шкатулка', 'Готовый подарок для хранения бижутерии. Изнутри оклеена тканью. Окраска имитирует малахит. На крышке- ящерка. Хороший подарок на День Рождения да и ПРОСТО ТАК!', 2000, 5, 1, 5, '5/20kh16kh10-2.jpg', 0, '2020-09-22 16:55:18', 0, NULL),
(45, 'Пасхальные корзинки', 'Вот такие замечательные корзинки станут прекрасным дополнением вашего пасхального стола и не только. Корзинки можно использовать для хранения различной бижутерии и быть уверенным, что ничего не вывалиться из корзинки, за счет чехла внутри самой корзинки!!', 500, 5, 1, 5, '5/pibcd4i45i8.jpg', 0, '2020-09-22 16:56:04', 0, NULL),
(46, 'Браслет', 'Предлагаю уникальную ювелирную бижутерию, созданную вручную.\r\nДля изготовления  используется высококачественный бисер SWAROVSKI.', 3500, 5, 1, 5, '5/braslet_oranzhevyy_chernyy_serebryanyy_ornament.jpg', 0, '2020-09-22 16:56:43', 0, NULL),
(47, 'Ожерелье зеленое', 'Колье зеленое бижутерия для женщин бохо. Летний подарок для девочек.\r\nРазмеры:\r\nдлина ожерелья 44 см', 1500, 5, 1, 5, '5/il_794xn.2093589946_6svt.jpg', 0, '2020-09-22 16:57:21', 0, NULL);

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
  `user_gender_id` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `user_reg_date` date NOT NULL,
  `user_role_id` tinyint(1) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_login`, `user_password`, `user_email`, `user_phone`, `user_gender_id`, `user_reg_date`, `user_role_id`) VALUES
(1, 'Сергей', 'Федоров', 'fedorov1', '$2y$10$jChJcPPJYCrfe9zIGO0jbecaUF08lt1eAbCuGegQaxuXzCbXiM3GO', 'fedorov.111@bk.ru', '89819578111', 1, '2020-05-24', 1),
(2, 'Михаил', 'Гризли', 'grizly15', 'qwerty5', 'grizly15@list.ru', '89555555555', 1, '2020-04-25', 2),
(3, 'Кирилл', 'Плешивцев', 'plesh99', 'qwerty3', 'plesh99@gmail.com', '89333333333', 1, '2020-04-21', 2),
(4, 'Кретова', 'Евгения', 'Kretova20', 'qwerty2', 'Kretova20@mail.ru', '89222222222', 2, '2020-04-21', 2),
(5, 'Анна', 'Каренина', 'karbel7', 'qwerty4', 'karbel7@gmail.com', '89444444444', 2, '2020-04-22', 2),
(6, 'Дина', 'Хранилова', 'hraniGod666', 'qwerty6', 'hraniGod666@gmail.ru', '89666666666', 2, '2020-04-23', 2),
(102, 'Сергей', 'Федоров', 'fedorov166', '$2y$10$NBshW82TgpcbpJQVJVWs3.IKnNC/P.D9tbvnbr3mc5DWu9/m/Thv.', 'fedorov.16@bk.ru', '89819578828', 1, '2020-06-16', 2),
(103, 'Сергей', 'Федоров', 'fedorov111', '$2y$10$bRSvV1RT2yJ4F/zTxQTNl.WrkU59gxxwdMx/G4jT5gxbQ7B8XUdBa', 'fedorov.1336@bk.ru', '89819578833', 1, '2020-09-22', 2),
(104, 'user', 'secName', 'fedorovnew', '$2y$10$1rqdokBmiUpFV0b6poo0FevImc.IT8DK7odGY04jcy7xOmEhU1rtW', 'fedorov.1777@bk.ru', '89819578777', 1, '2020-09-22', 2);

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
(7, 1, 1),
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
  `wish_id` int(10) UNSIGNED NOT NULL,
  `wish_user_id` int(10) UNSIGNED NOT NULL,
  `wish_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `wish`
--

INSERT INTO `wish` (`wish_id`, `wish_user_id`, `wish_product_id`) VALUES
(156, 103, 28),
(161, 1, 23),
(162, 1, 16),
(163, 1, 26),
(164, 1, 36),
(165, 1, 37),
(166, 1, 39),
(167, 1, 34);

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
  MODIFY `connect_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

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
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT для таблицы `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `user_address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `wish`
--
ALTER TABLE `wish`
  MODIFY `wish_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

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
