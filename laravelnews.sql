-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 08:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakingnews`
--

CREATE TABLE `breakingnews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakingnews`
--

INSERT INTO `breakingnews` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Masters exam will be started 28/07/2018', '2018-07-16 06:57:19', '2018-07-16 06:57:19'),
(2, 'international', '2018-07-17 03:16:07', '2018-07-17 03:16:07'),
(3, 'sport1', '2018-07-17 03:16:19', '2018-07-17 03:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Sports', '2018-07-15 06:31:00', '2018-07-18 04:08:48'),
(3, 'Education', '2018-07-15 06:31:54', '2018-07-18 04:09:03'),
(4, 'International', '2018-07-15 06:36:09', '2018-07-18 04:09:13'),
(5, 'Bangladesh', '2018-07-18 04:08:21', '2018-07-18 04:08:21'),
(6, 'Entertainment', '2018-07-18 04:10:10', '2018-07-18 04:10:10'),
(7, 'Economics1', '2018-07-18 04:10:48', '2018-07-22 00:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `publication` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `time`, `publication`, `image`, `description`, `categories_name`, `created_at`, `updated_at`) VALUES
(1, 'Man dies as bus hits him at Shahbagh', '16:55:00', 'publish', 'international.jpg', 'Web devlopmentWeb devlopmentWeb devlopmentWeb devlopmentWeb devlopmentWeb devlopment', 'International', '2018-07-18 04:31:22', '2018-07-18 04:31:22'),
(2, 'Chinese brands score big at Russia World Cup', '18:55:00', 'publish', 'sports.jpg', 'dummu textdummu textdummu textdummu textdummu textdummu textdummuy Chinese brands score big at Russia World Cup Chinese brands score big at Russia World CupChinese brands score big at Russia World Cup', 'Sports', '2018-07-18 04:31:43', '2018-07-18 04:31:43'),
(3, 'Solving our waterlogging woes', '12:00:00', 'unpulish', 'bangladesh.png', 'Web devlopmentWeb devlopmentWeb devlopmentWeb devlopmentWeb devlopmentWeb devlopmentSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woesSolving our waterlogging woes', 'Bangladesh', '2018-07-18 04:44:43', '2018-07-18 04:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_14_111257_create_bdnews_table', 1),
(2, '2018_07_15_094713_create_categories_table', 2),
(3, '2018_07_16_103150_create_breaking_news_table', 3),
(4, '2018_07_16_124710_create_breakingnews_table', 4),
(5, '2018_07_17_095225_create_information_table', 5),
(6, '2018_07_17_095220_create_information_table', 6),
(7, '2018_07_18_105031_create_namajs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `namajs`
--

CREATE TABLE `namajs` (
  `id` int(10) UNSIGNED NOT NULL,
  `fozor` time NOT NULL,
  `johor` time NOT NULL,
  `asor` time NOT NULL,
  `magrib` time NOT NULL,
  `esha` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'surovi', 'admin@gmail.com', '$2y$10$YoDo7l3JRL8z9WIOqbY.ROLRe3CyCoknGRCHGrhv4o6f484nld9Lu', 1, 'CJQEXSu4ZFgPXKXxjwwTqmdWyLFAMJt5bW5fKyUc7QX6gKWONtl28N43WunC', '2018-07-12 06:20:58', '2018-07-12 06:20:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakingnews`
--
ALTER TABLE `breakingnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namajs`
--
ALTER TABLE `namajs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breakingnews`
--
ALTER TABLE `breakingnews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `namajs`
--
ALTER TABLE `namajs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
