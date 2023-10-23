-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 09:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadget_today`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_name`, `image`, `categories_id`, `description`, `writer_id`, `created_at`, `updated_at`) VALUES
(1, 'The mid-range Xiaomi Redmi Note 11 Pro 5G is currently a bargain buy on Amazon UK', '1697905707.jpg', 8, 'A few weeks ago, we reported that Amazon UK is offering the Xiaomi Redmi Note 11 Pro 5G with a sweet 31% discount, letting you save £100 on this nice mid-ranger. And even though a lot has happened since then — ahem, Amazon Prime Day — the retailer is still selling this awesome mid-ranger with the same discount. In other words, you have another chance to score sweet savings on this amazing phone if you capitalize on this deal.\r\n\r\nWith a Snapdragon 695 chipset, 6GB of RAM, and 128GB of storage space under the hood, the Xiaomi Redmi Note 11 Pro 5G can deal with daily tasks like browsing the web and streaming videos without any issues. The phone also packs a dedicated slot for a memory card, allowing you to expand the built-in storage space in case 128GB won\'t be enough for your needs.\r\n\r\nAdditionally, the phone sports a huge 108MP main camera, which takes pretty decent photos. Unfortunately, the phone can shoot videos only in 1080p resolution, which is not bad, but it\'s not ideal either.\r\n\r\nFortunately, that\'s not how things are with battery life. The Xiaomi Redmi Note 11 Pro 5G comes with a 5000mAh battery, which can keep on going for up to two days on a single charge with moderate usage, of course. There is also 67W wired charging on board, which is capable of filling the tank in about 55 minutes. Oh, there is a charger inside the box as well, which is pretty nice.\r\n\r\nThe Xiaomi Redmi Note 11 Pro 5G may not be a mobile powerhouse, but it\'s still a nice phone and an awesome bargain at its current price. So, don\'t waste any more time! Tap that deal button at the beginning of the article and snatch a Xiaomi Redmi Note 11 Pro 5G with a sweet discount from Amazon UK while you still can.', 2, '2023-10-21 09:28:27', '2023-10-21 09:28:27'),
(2, 'The 5G download data speed of the iPhone 15 Pro Max is nearly twice as fast as its predecessor', '1698043493.jpg', 1, 'We did point out at the start of this week that the iPhone 15 Pro Max had the fastest median 5G downlink and uplink speeds in the U.S. during the third quarter according to Ookla, The big surprise was that the 5G download data speed measured on Apple\'s 2023 top-of-the-line iPhone nearly doubled to 251.37Mbps from the previous year\'s model. The median 5G download data speed for the iPhone 14 Pro Max, measured during the second quarter of 2023 (just one quarter before the new model was tested), came to 127.83Mbps.\r\n\r\nWhat makes this unexpected is that the iPhone 15 series uses Qualcomm\'s Snapdragon X70 5G modem chip which the chip designer said is capable of a 24% speed hike over the Snapdragon X65 5G modem chip that the 2022 iPhone models were equipped with. Apple, which surely must have conducted a similar test, never mentioned  anything about this during the September 12th unveiling of the new iPhone line.\r\n\r\nThe improvement in 5G download data speed might be the result of more than just Qualcomm\'s new 5G modem. After all, Ookla\'s list of the top five median 5G download data speeds in the U.S. during Q3 doesn\'t include the iPhone 15 and iPhone 15 Plus. Both of those phones also are equipped with the Snapdragon X70 5G modem. That would suggest that the 3nm A17 Pro chipset, not found in the non-Pro 2023 iPhone models, has something to do with the faster 5G download data speeds.\r\n\r\nAnd we shouldn\'t fail to give a shout-out to the carriers for any improvements made on their respective networks although on a quarter-to-quarter basis, we have to really give much of the credit to the technology inside the new phone.\r\n\r\nAs you probably know, Apple has been having trouble finishing the project it started to build its own 5G modem chips forcing it to sign a contract with Qualcomm last month that will keep Apple supplied with Snapdragon 5G modem chips through 2026. Analyst Jeff Pu of Haitong Securities recently said that Apple will use the next generation Snapdragon X75 5G modem chip on the iPhone 16 Pro and iPhone 16 Pro Max while the non-Pro models will continue to use the Snapdragon X70 chip.\r\n\r\nThe Snapdragon X75 5G modem chip uses carrier aggregation to combine multiple carriers allowing for faster data speeds and an increase in capacity. In addition, the X75 5G modem chip will take up 25% less room on the iPhone circuit board than the X70.', 3, '2023-10-22 23:44:53', '2023-10-22 23:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_categories` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_categories`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(2, 'Google', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(3, 'Huawei', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(4, 'Oppo', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(5, 'Realme', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(6, 'Vivo', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(7, 'Samsung', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(8, 'Xiaomi', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(9, 'Infinix', '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(10, 'Asus', '2023-10-20 06:11:28', '2023-10-20 06:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-10-22 22:33:39', '2023-10-22 22:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_16_123407_create_categories_table', 1),
(7, '2023_10_18_180223_create_article_table', 1),
(8, '2023_10_23_050940_create_latest_news_table', 2),
(9, '2023_10_23_050959_create_recommend_news_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommend_news`
--

CREATE TABLE `recommend_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommend_news`
--

INSERT INTO `recommend_news` (`id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-10-23 00:00:30', '2023-10-23 00:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'admin@gadgettoday.com', NULL, '$2y$10$XeXo9HYUi0FVFqYzeJoVne8q7wIOl7Lb2dIaSLu5E8NgP.0YSU6Pi', 'admin', NULL, '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(2, 'user', NULL, 'user@gadgettoday.com', NULL, '$2y$10$uxkqMaJF2OXYNIYcqNVmouHvZH3Ap9vBZvIYuJOQJFqjY/3H4Rgti', 'user', NULL, '2023-10-20 06:11:28', '2023-10-20 06:11:28'),
(3, 'antok', NULL, 'shrmantoch@gmail.com', NULL, '$2y$10$AfZIgJaSvyhYwuEApQEVhujSdqshn1XMMmG/QxKV9.lGF6hX0IEI2', 'user', NULL, '2023-10-22 06:51:44', '2023-10-22 06:51:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_categories_id_foreign` (`categories_id`),
  ADD KEY `article_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `latest_news_article_id_foreign` (`article_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recommend_news`
--
ALTER TABLE `recommend_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recommend_news_article_id_foreign` (`article_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recommend_news`
--
ALTER TABLE `recommend_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD CONSTRAINT `latest_news_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recommend_news`
--
ALTER TABLE `recommend_news`
  ADD CONSTRAINT `recommend_news_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
