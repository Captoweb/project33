-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 21 2020 г., 22:01
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`) VALUES
(80, 'new title from controller', 'new content from controller'),
(81, 'из контроллера', 'прямо в базу, без модели'),
(82, 'new title from controller', 'new content from controller'),
(83, 'example.php controller', 'а как притулить сюда  модель?'),
(84, 'example.php controller', 'а как притулить сюда  модель?'),
(85, 'example.php controller', 'а как притулить сюда  модель?'),
(86, 'example.php controller', 'а как притулить сюда  модель?'),
(87, 'example.php controller', 'а как притулить сюда  модель?'),
(88, 'example.php controller', 'а как притулить сюда  модель?'),
(89, 'example.php controller', 'а как притулить сюда  модель?'),
(90, 'example.php controller', 'а как притулить сюда  модель?'),
(91, 'example.php controller', 'а как притулить сюда  модель?'),
(92, 'example.php controller', 'а как притулить сюда  модель?'),
(93, 'example.php controller', 'а как притулить сюда  модель?'),
(94, 'example.php controller', 'а как притулить сюда  модель?'),
(95, 'example.php controller', 'а как притулить сюда  модель?'),
(96, 'example.php controller', 'а как притулить сюда  модель?'),
(97, 'example.php controller', 'а как притулить сюда  модель?'),
(98, 'example.php controller', 'а как притулить сюда  модель?'),
(99, 'example.php controller', 'а как притулить сюда  модель?'),
(100, 'example.php controller', 'а как притулить сюда  модель?'),
(101, 'example.php controller', 'а как притулить сюда  модель?'),
(102, 'example.php controller', 'а как притулить сюда  модель?'),
(103, 'example.php controller', 'а как притулить сюда  модель?'),
(104, 'example.php controller', 'а как притулить сюда  модель?'),
(105, 'example.php controller', 'а как притулить сюда  модель?'),
(106, 'example.php controller', 'а как притулить сюда  модель?');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `full_text` varchar(500) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `full_text`, `img`, `user`, `status`, `price`, `category`) VALUES
(1, 'Смартфон APPLE iPhone 11 64Gb, MWLT2RU', 'ОС iPhone iOS 13, экран: 6.1\", IPS, 1792×828, процессор: Apple A13 Bionic, , GPS, с защитой от пыли и влаги, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС iPhone iOS 13, экран: 6.1\", IPS, 1792×828, процессор: Apple A13 Bionic, , GPS, ГЛОНАСС, с защитой от пыли и влаги, встроенная память: 64ГБ\r\n', '../img/APPLE_iPhone_11.jpg', NULL, NULL, '58 990 руб', 'apple'),
(2, 'Смартфон APPLE iPhone SE 2020 64Gb, MX9R2RU/A, черный', 'ОС iPhone iOS 13, экран: 4.7\", IPS, 1334×750, процессор: Apple A13 Bionic, , GPS, ГЛОНАСС, с защитой от пыли и влаги, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС iPhone iOS 13, экран: 4.7\", IPS, 1334×750, процессор: Apple A13 Bionic, , GPS, ГЛОНАСС, с защитой от пыли и влаги, встроенная память: 64ГБ\r\n', '../img/iPhone_SE_2020.jpg', NULL, NULL, '39 490 руб. ', 'apple'),
(3, 'Смартфон APPLE iPhone 6s Plus 64Gb «Как новый», FKU62RU/A, серый', 'ОС iPhone iOS 11, экран: 5.5\", Retina, 1920×1080, процессор: Apple A9, + сопроцессор движения М9, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 384ч, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС iPhone iOS 11, экран: 5.5\", Retina, 1920×1080, процессор: Apple A9, + сопроцессор движения М9, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 384ч, встроенная память: 64ГБ\r\n', '../img/iPhone_6s_Plus.jpg', NULL, NULL, '19 990 руб. ', 'apple'),
(4, 'Смартфон APPLE iPhone 7 Plus 256Gb \"Как новый\", FN4W2RU/A, черный', 'ОС iPhone iOS 13, экран: 5.5\", Retina, 1920×1080, процессор: Apple A10 Fusion, + Встроенный сопроцессор движения M10, ГЛОНАСС, с защитой от пыли и влаги, время работы в режиме разговора, до: 21ч, в режиме ожидания, до: 384ч, встроенная память: 256ГБ', 'ОС iPhone iOS 13, экран: 5.5\", Retina, 1920×1080, процессор: Apple A10 Fusion, + Встроенный сопроцессор движения M10, ГЛОНАСС, с защитой от пыли и влаги, время работы в режиме разговора, до: 21ч, в режиме ожидания, до: 384ч, встроенная память: 256ГБ', '../img/7_Plus_256Gb.jpg', NULL, NULL, '27 990 руб', 'apple'),
(99, 'Смартфон XIAOMI Redmi Note 9 Pro 6/128Gb, зеленый', 'ОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ', 'ОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ', '../img/XIAOMI_9.jpg', NULL, NULL, '23 990 руб', 'xiaomi'),
(112, 'Смартфон SAMSUNG Galaxy A40 64Gb, SM-A405F, черный', 'ОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', '../img/SAMSUNG_Galaxy_A40.jpg', NULL, NULL, '12 990 руб', 'sumsung'),
(113, 'Смартфон XIAOMI Redmi Note 9 Pro 6/128Gb, зеленый', 'ОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_9.jpg', NULL, NULL, '23 990 руб', 'xiaomi'),
(114, 'Смартфон XIAOMI Redmi Note 8 Pro 6/128Gb, синий\r\n', 'ОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ', 'Основные характеристики\r\nОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_8_ Pro _6 128Gb.jpg', NULL, NULL, '19 990 руб', 'xiaomi'),
(115, 'Смартфон SAMSUNG Galaxy S20 8/128Gb, SM-G980F, голубой', 'ОС Android 10, экран: 6.2\", Dynamic AMOLED, 3200×1440, процессор: Exynos 990, 8-ми ядерный, GPS, ГЛОНАСС, с защитой от пыли и влаги, оперативная память: 8ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10, экран: 6.2\", Dynamic AMOLED, 3200×1440, процессор: Exynos 990, , 8-ми ядерный, GPS, ГЛОНАСС, с защитой от пыли и влаги, оперативная память: 8ГБ, встроенная память: 128ГБ\r\n', '../img/Galaxy_S20.jpg', NULL, NULL, '12 990 руб', 'sumsung'),
(116, 'Смартфон SAMSUNG Galaxy A40 64Gb, SM-A405F, черный', 'ОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', '../img/SAMSUNG_Galaxy_A40.jpg', NULL, NULL, '12 990 руб', 'sumsung'),
(117, 'Смартфон XIAOMI Redmi Note 9 Pro 6/128Gb, зеленый', 'ОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_9.jpg', NULL, NULL, '23 990 руб', 'xiaomi'),
(118, 'Смартфон XIAOMI Redmi Note 8 Pro 6/128Gb, синий\r\n', 'ОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ', 'Основные характеристики\r\nОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_8_ Pro _6 128Gb.jpg', NULL, NULL, '19 990 руб', 'xiaomi'),
(119, 'Смартфон SAMSUNG Galaxy S20 8/128Gb, SM-G980F, голубой', 'ОС Android 10, экран: 6.2\", Dynamic AMOLED, 3200×1440, процессор: Exynos 990, 8-ми ядерный, GPS, ГЛОНАСС, с защитой от пыли и влаги, оперативная память: 8ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10, экран: 6.2\", Dynamic AMOLED, 3200×1440, процессор: Exynos 990, , 8-ми ядерный, GPS, ГЛОНАСС, с защитой от пыли и влаги, оперативная память: 8ГБ, встроенная память: 128ГБ\r\n', '../img/Galaxy_S20.jpg', NULL, NULL, '12 990 руб', 'sumsung'),
(120, 'Смартфон SAMSUNG Galaxy A40 64Gb, SM-A405F, черный', 'ОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', '../img/SAMSUNG_Galaxy_A40.jpg', NULL, NULL, '12 990 руб', 'sumsung'),
(121, 'Смартфон XIAOMI Redmi Note 9 Pro 6/128Gb, зеленый', 'ОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_9.jpg', NULL, NULL, '23 990 руб', 'xiaomi'),
(124, 'Смартфон SAMSUNG Galaxy A40 64Gb, SM-A405F, черный', 'ОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', '../img/SAMSUNG_Galaxy_A40.jpg', NULL, NULL, '12 990 руб', 'sumsung'),
(125, 'Смартфон XIAOMI Redmi Note 9 Pro 6/128Gb, зеленый', 'ОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_9.jpg', NULL, NULL, '23 990 руб', 'xiaomi'),
(126, 'Смартфон XIAOMI Redmi Note 8 Pro 6/128Gb, синий\r\n', 'ОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ', 'Основные характеристики\r\nОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_8_ Pro _6 128Gb.jpg', NULL, NULL, '19 990 руб', 'xiaomi');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT 0,
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(1, 'email@mail.ru', '$2y$10$7mFGz4pZ4Xrsy4ZDwJwQxemO/wasWO3/PqymfS0CqBB1M1TBLcL8i', 'UserName', 0, 1, 1, 1, 1601805499, 1601809724, 0),
(11, 'Newuser@mail.ru', '$2y$10$U47CkLoRzI86yJeD5W9yHOdMbLC6e48.X3o3PGQaB2dr0VzF38dK.', 'Newuser', 0, 1, 1, 0, 1605963580, 1605969267, 0),
(10, 'Batman@mail.ru', '$2y$10$jIsYLOUmPVqpmEGn5gJSUef9/kzp9tXf1WuYlV4oRudXAFIBrxAbC', 'Batman', 0, 1, 1, 0, 1605815397, 1605963255, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Индексы таблицы `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
