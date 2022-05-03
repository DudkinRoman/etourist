-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Час створення: Квт 30 2022 р., 10:03
-- Версія сервера: 8.0.28-0ubuntu0.20.04.3
-- Версія PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `emtyblog`
--
CREATE DATABASE IF NOT EXISTS `emtyblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `emtyblog`;

-- --------------------------------------------------------

--
-- Структура таблиці `anegdot`
--

CREATE TABLE `anegdot` (
  `id` int NOT NULL,
  `text` text NOT NULL,
  `type` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `articles`
--

CREATE TABLE `articles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_show` tinyint(1) DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  `viewed` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `modified_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `audio_visual`
--

CREATE TABLE `audio_visual` (
  `id` int NOT NULL,
  `text` varchar(150) NOT NULL,
  `patch` varchar(40) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `audio_word`
--

CREATE TABLE `audio_word` (
  `id` int NOT NULL,
  `en` varchar(100) NOT NULL,
  `dop` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `audio_word_r`
--

CREATE TABLE `audio_word_r` (
  `id` int NOT NULL,
  `en` varchar(100) NOT NULL,
  `dop` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `published` tinyint DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `modified_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `categoryables`
--

CREATE TABLE `categoryables` (
  `category_id` int NOT NULL,
  `categoryable_id` int NOT NULL,
  `categoryable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `facultative`
--

CREATE TABLE `facultative` (
  `id` int NOT NULL,
  `less` int NOT NULL,
  `urok` int NOT NULL,
  `type` int NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `facultative_opis`
--

CREATE TABLE `facultative_opis` (
  `id` int NOT NULL,
  `name_e` varchar(128) NOT NULL,
  `name_r` varchar(128) NOT NULL,
  `opis` varchar(256) NOT NULL,
  `audio` varchar(256) NOT NULL,
  `dop_links` varchar(256) NOT NULL,
  `pict` varchar(256) NOT NULL,
  `price` int NOT NULL,
  `type` int NOT NULL,
  `text_e` text NOT NULL,
  `text_r` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `less`
--

CREATE TABLE `less` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `type` int NOT NULL,
  `public` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `lesson`
--

CREATE TABLE `lesson` (
  `id` int NOT NULL,
  `less` int NOT NULL,
  `urok` int NOT NULL,
  `type` int NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `links`
--

CREATE TABLE `links` (
  `id` int NOT NULL,
  `sheme` varchar(16) DEFAULT NULL,
  `host` varchar(128) DEFAULT NULL,
  `path` varchar(128) NOT NULL,
  `query` varchar(128) NOT NULL,
  `noindex` int DEFAULT NULL,
  `num` int NOT NULL,
  `data_pos` int NOT NULL,
  `kl_ind` int NOT NULL,
  `dop` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `memory`
--

CREATE TABLE `memory` (
  `id` int NOT NULL,
  `word` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `difination` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tn` int NOT NULL,
  `mem` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `mistake`
--

CREATE TABLE `mistake` (
  `id` int NOT NULL,
  `timer` int NOT NULL,
  `urok` int NOT NULL,
  `login` int NOT NULL,
  `mess` text NOT NULL,
  `dop` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `move`
--

CREATE TABLE `move` (
  `id` int NOT NULL,
  `putch` varchar(100) NOT NULL,
  `engl` varchar(100) NOT NULL,
  `rus` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `new_slovar`
--

CREATE TABLE `new_slovar` (
  `id` int NOT NULL,
  `eng` varchar(100) NOT NULL,
  `rus` varchar(100) NOT NULL,
  `tema` int NOT NULL,
  `audio` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `new_slovar_r`
--

CREATE TABLE `new_slovar_r` (
  `id` int NOT NULL,
  `eng` varchar(100) NOT NULL,
  `rus` varchar(100) NOT NULL,
  `tema` int NOT NULL,
  `audio` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `perepis`
--

CREATE TABLE `perepis` (
  `id` int NOT NULL,
  `data` int NOT NULL,
  `otvet` int NOT NULL,
  `text` text NOT NULL,
  `kl_ind` int NOT NULL,
  `razr` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `simple_dictionary`
--

CREATE TABLE `simple_dictionary` (
  `id` int NOT NULL,
  `engl` varchar(30) CHARACTER SET cp1251 COLLATE cp1251_general_ci NOT NULL,
  `engl_d` varchar(30) CHARACTER SET cp1251 COLLATE cp1251_general_ci NOT NULL,
  `rus` varchar(30) CHARACTER SET cp1251 COLLATE cp1251_general_ci NOT NULL,
  `rus_d` varchar(30) CHARACTER SET cp1251 COLLATE cp1251_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `stat_fac`
--

CREATE TABLE `stat_fac` (
  `id` int NOT NULL,
  `klient` int NOT NULL,
  `topic` int NOT NULL,
  `proc` float NOT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `stat_topic`
--

CREATE TABLE `stat_topic` (
  `id` int NOT NULL,
  `topic` int NOT NULL,
  `proc` float NOT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `stat_urok`
--

CREATE TABLE `stat_urok` (
  `id` int NOT NULL,
  `urok` int NOT NULL,
  `proc` float NOT NULL,
  `silver` int NOT NULL,
  `type` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `stat_word`
--

CREATE TABLE `stat_word` (
  `id` int NOT NULL,
  `word` int NOT NULL,
  `proc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `topic_facultative`
--

CREATE TABLE `topic_facultative` (
  `id` int NOT NULL,
  `name_e` varchar(100) NOT NULL,
  `name_r` varchar(100) NOT NULL,
  `pict` varchar(100) NOT NULL,
  `type` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `topic_word`
--

CREATE TABLE `topic_word` (
  `id` int NOT NULL,
  `en` varchar(30) NOT NULL,
  `ru` varchar(30) NOT NULL,
  `dop` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `topic_word_w`
--

CREATE TABLE `topic_word_w` (
  `id` int NOT NULL,
  `en` varchar(30) NOT NULL,
  `ru` varchar(30) NOT NULL,
  `dop` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `silver` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `vasal`
--

CREATE TABLE `vasal` (
  `id` int NOT NULL,
  `verbovchik` int NOT NULL,
  `old_money` int NOT NULL,
  `new_money` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблиці `vizual_dict`
--

CREATE TABLE `vizual_dict` (
  `id` int NOT NULL,
  `en` varchar(30) NOT NULL,
  `de` varchar(30) NOT NULL,
  `it` varchar(30) NOT NULL,
  `es` varchar(30) NOT NULL,
  `ru` varchar(30) NOT NULL,
  `fr` varchar(30) NOT NULL,
  `pt` varchar(30) NOT NULL,
  `cz` varchar(30) NOT NULL,
  `pl` varchar(30) NOT NULL,
  `cn` varchar(30) NOT NULL,
  `sc` varchar(30) NOT NULL,
  `jp` varchar(30) NOT NULL,
  `nl` varchar(30) NOT NULL,
  `sv` varchar(30) NOT NULL,
  `fi` varchar(30) NOT NULL,
  `ar` varchar(30) NOT NULL,
  `ko` varchar(30) NOT NULL,
  `br` varchar(30) NOT NULL,
  `he` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `type_r` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `anegdot`
--
ALTER TABLE `anegdot`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Індекси таблиці `audio_visual`
--
ALTER TABLE `audio_visual`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `audio_word`
--
ALTER TABLE `audio_word`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `audio_word_r`
--
ALTER TABLE `audio_word_r`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Індекси таблиці `facultative`
--
ALTER TABLE `facultative`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `facultative_opis`
--
ALTER TABLE `facultative_opis`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `less`
--
ALTER TABLE `less`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `memory`
--
ALTER TABLE `memory`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `mistake`
--
ALTER TABLE `mistake`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `move`
--
ALTER TABLE `move`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `new_slovar`
--
ALTER TABLE `new_slovar`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `new_slovar_r`
--
ALTER TABLE `new_slovar_r`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `perepis`
--
ALTER TABLE `perepis`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `stat_fac`
--
ALTER TABLE `stat_fac`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `topic_facultative`
--
ALTER TABLE `topic_facultative`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `topic_word`
--
ALTER TABLE `topic_word`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `topic_word_w`
--
ALTER TABLE `topic_word_w`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Індекси таблиці `vasal`
--
ALTER TABLE `vasal`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `vizual_dict`
--
ALTER TABLE `vizual_dict`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `anegdot`
--
ALTER TABLE `anegdot`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `audio_visual`
--
ALTER TABLE `audio_visual`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `audio_word`
--
ALTER TABLE `audio_word`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `audio_word_r`
--
ALTER TABLE `audio_word_r`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `facultative`
--
ALTER TABLE `facultative`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `facultative_opis`
--
ALTER TABLE `facultative_opis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `less`
--
ALTER TABLE `less`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `links`
--
ALTER TABLE `links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `memory`
--
ALTER TABLE `memory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `mistake`
--
ALTER TABLE `mistake`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `move`
--
ALTER TABLE `move`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `new_slovar`
--
ALTER TABLE `new_slovar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `new_slovar_r`
--
ALTER TABLE `new_slovar_r`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `perepis`
--
ALTER TABLE `perepis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `stat_fac`
--
ALTER TABLE `stat_fac`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `topic_facultative`
--
ALTER TABLE `topic_facultative`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `topic_word`
--
ALTER TABLE `topic_word`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `topic_word_w`
--
ALTER TABLE `topic_word_w`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `vasal`
--
ALTER TABLE `vasal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `vizual_dict`
--
ALTER TABLE `vizual_dict`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
