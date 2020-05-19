-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 09:02 AM
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
-- Database: `laravel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` int(100) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `operator` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `seat_row` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `seat_column` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `fare` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `departure` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `arrival` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `name`, `operator`, `seat_row`, `seat_column`, `route`, `fare`, `departure`, `arrival`, `created_at`, `updated_at`) VALUES
(17, 'Shamoly Chair Coach', 'Md.Mijan', '10', '3', 'Dhaka to Cox\'s Bazar', '850', 'Boshundhora', '10.30 PM', '2020-04-12 15:26:25', '2020-04-12 15:26:25'),
(18, 'Shamoly AC Coach', 'Hanif', '5', '3', 'Dhaka to Chittagong', '1000', 'Banani', '10.00 PM', '2020-04-12 15:28:07', '2020-04-12 15:28:07'),
(19, 'Shamoly AC Hundai', 'Alif Khan', '1', '1', 'Dhaka to Shylet', '2000', 'Abdullahpur', '8.30 PM', '2020-04-12 15:30:54', '2020-04-12 15:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activePost` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pendingPost` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soldPost` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `totalPost` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `name`, `password`, `type`, `phone`, `email`, `image`, `activePost`, `pendingPost`, `soldPost`, `totalPost`) VALUES
(1, 'tomalhasan', 'tomal hasan', '12345', 'customer', '0192345626', 'tomal@gmail.com', 'no', '1', '0', '0', '1'),
(3, 'aminul', 'aminul islam', '12345', 'customer', '01916967847', 'aminul@gmail.com', 'no', '0', '1', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `fromP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `toP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `msg` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `msgDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fromP`, `toP`, `msg`, `msgDate`) VALUES
(1, 'tomal', 'admin', 'good', '2020-05-16 00:00:00.000000'),
(3, 'admin', 'tomal', 'thanks', '2020-05-17 00:00:00.000000'),
(5, 'tomal', 'aminul', 'do you want to rent?', '2020-05-17 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_10_155240_create_admins_table', 1),
(4, '2020_04_11_223702_create_busesshedule_table', 2),
(5, '2020_05_13_091301_create_sessions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anikhasan055@gmail.com', '$2y$10$UViqTKmVKsuCCLSEm.OK2um1p2.525TIPonYGfFDnNwY7oFwYDdYS', '2020-04-11 14:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `propertyPrice` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `propertyArea` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `propertyType` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bed` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bath` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `feet` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `floor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `noOfClicks` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `username`, `propertyPrice`, `propertyArea`, `propertyType`, `style`, `bed`, `bath`, `feet`, `title`, `floor`, `description`, `status`, `noOfClicks`, `date`) VALUES
(1, 'tomalhasan', '100000', 'bashundhora', 'residential', 'modern', '3', '3', '1600', 'no', '5', 'wonderful', 'active', '0', '2020-05-16 00:00:00.000000'),
(3, 'aminul', '120000', 'khilkhet', 'non-resident', 'ancient', '3', '3', '1300', 'no', '2', 'excellent', 'rented', '5', '2020-05-17 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'anabil', 'gitavil@placemail.online', NULL, '$2y$10$.My2oCxeAsmKyvszG4FP0uTrNCADivrkCkQYd4DjUGPqLulWyXH7a', 'customer', NULL, '2020-04-12 13:02:44', '2020-04-12 13:02:44'),
(3, 'Abul hossain', 'topon@mmknitwear.com', NULL, '$2y$10$9lEd50vDk2moCRkqV5djLuRdB7GJw3b3tjzieK2.7HbGG60r42lqe', 'customer', NULL, '2020-04-16 10:11:27', '2020-04-16 10:11:27'),
(6, 'anik hasan', 'anikhasan055@gmail.com', NULL, '$2y$10$BymwLgrtDM3DyByeOxSmwets5qR.2DqKOxT9B2mKOKhe/DpM4V71G', 'admin', NULL, '2020-05-13 05:56:07', '2020-05-13 05:56:07'),
(7, 'Rahat Hasan', 'rahathasan055@gmail.com', NULL, '$2y$10$UIUwp00pPy8G5aSDLeKBXOh7f5e/BWXyKT8eT7ffPFsPPE6OfrPJK', 'employee', NULL, '2020-05-17 02:07:09', '2020-05-17 02:07:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busesshedule_name_index` (`name`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
