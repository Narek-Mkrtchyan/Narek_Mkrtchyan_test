-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 27 2021 г., 15:19
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_creator` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_image_src` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_blog_text` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_page_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_created_date` date NOT NULL,
  `b_scrap_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `top_words`
--

CREATE TABLE `top_words` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_word` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_count` int(11) NOT NULL,
  `b_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `top_words`
--
ALTER TABLE `top_words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `top_words`
--
ALTER TABLE `top_words`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
