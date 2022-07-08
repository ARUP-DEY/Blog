-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 05:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_05_03_025106_create_students_table', 1),
(4, '2022_05_03_031815_add_students_table', 1),
(5, '2022_05_11_034000_add_students_table', 2);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int(11) DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_Qualification` int(11) DEFAULT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `roll`, `class`, `h_Qualification`, `dob`, `created_at`, `updated_at`, `gender`, `status`, `image`, `sub`) VALUES
(1, 'Arup Dey41655', 'deyarup62@gmail.com', 111, '1011', 1256465, '2025-06-05', '2022-05-10 21:41:28', '2022-05-15 22:07:37', 'female', 1, '', NULL),
(2, 'saikat', 'deyarup62@gmail.com', 244, '10', 1, '2022-05-17', '2022-05-10 21:50:50', '2022-05-10 21:50:50', 'male', 1, '1652239250.pdf', NULL),
(3, 'Rest', 'deyadgfrup62@gmail.com', 244, '1011', 3, '2022-05-25', '2022-05-11 10:50:33', '2022-05-11 10:50:33', 'female', 1, '1652286033.pdf', NULL),
(4, 'asas', 'jyhsdfgjhfdsguy@gmail.com', 121, '11', 1256465, '2022-05-24', '2022-05-11 11:00:25', '2022-05-11 11:00:25', 'female', 0, '1652286625.docx', NULL),
(5, 'hahaha', 'haha@gmail.com', 11111111, '1111111111111', 1122, '2022-05-19', '2022-05-11 11:02:34', '2022-05-11 11:02:34', 'female', 0, '1652286754.pdf', NULL),
(6, 'rahul', 'deyarup62@gmail.com', 111, '12', 33, '2022-05-25', '2022-05-11 11:05:00', '2022-05-11 11:05:00', 'male', 1, '1652286900.pdf', NULL),
(7, 'saikat', 'deyarup62@gmail.com', 111, '1111111111111', 1, '2022-05-01', '2022-05-11 11:06:22', '2022-05-11 11:06:22', 'male', 1, '1652286982.pdf', NULL),
(8, 'somu', 'somu@gmail.com', 11111, '111111', 1111, '2022-05-20', '2022-05-15 21:04:28', '2022-05-15 21:04:28', 'female', 0, '1652668468.docx', NULL),
(9, 'rahul', 'deyarup62@gmail.com', 111222, '1', 1133, '2022-05-25', '2022-05-26 11:31:18', '2022-05-26 11:31:18', 'male', 1, '1653584478.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arup Dey', 'deyarup62@gmail.com', NULL, '$2y$10$.FDt22WdpIoMUSSemidiAuNg94UwZ3i5lK0zOhMNB1Kr.3wUapWzS', NULL, '2022-05-10 21:38:23', '2022-05-10 21:38:23');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
