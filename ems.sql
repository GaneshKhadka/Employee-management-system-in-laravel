-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 11:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `created_at`, `updated_at`, `username`, `image`, `first_name`, `last_name`, `email`, `password`, `status`) VALUES
(1, '2019-04-16 00:56:05', NULL, 'ganesh', '', 'ganesh', 'khadka', 'ganesh46@gmail.com', '$2y$10$aVrkMlJMf/.tBYr15DMw.evh0r81e12pm83Pbel//g3gQgqCBQnau', 1);

-- --------------------------------------------------------

--
-- Table structure for table `advancepayments`
--

CREATE TABLE `advancepayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `amount` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advancepayments`
--

INSERT INTO `advancepayments` (`id`, `employee_id`, `date`, `amount`, `created_at`, `updated_at`) VALUES
(1, 3, '2019-04-17', 10000, '2019-04-16 01:57:23', '2019-04-16 01:57:23'),
(2, 1, '2019-04-12', 6500, '2019-04-18 09:42:09', '2019-04-18 09:42:09'),
(3, 1, '2019-04-18', 1, '2019-04-18 11:04:06', '2019-04-18 11:04:06'),
(4, 4, '2019-04-10', 5000, '2019-04-18 23:28:54', '2019-04-18 23:28:54'),
(5, 4, '2019-04-12', 2000, '2019-04-18 23:29:04', '2019-04-18 23:29:04'),
(6, 5, '2019-04-18', 2000, '2019-04-19 04:01:00', '2019-04-19 04:01:00'),
(7, 5, '2019-04-19', 3000, '2019-04-19 04:01:37', '2019-04-19 04:01:37'),
(8, 2, '2019-04-03', 2000, '2019-04-19 05:38:33', '2019-04-19 05:38:33'),
(9, 2, '2019-04-20', 500, '2019-04-19 05:48:12', '2019-04-19 05:48:12'),
(10, 2, '2019-04-18', 5000, '2019-04-19 05:51:52', '2019-04-19 05:51:52'),
(11, 2, '2019-04-23', 20200, '2019-04-29 00:33:35', '2019-04-29 00:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendars`
--

INSERT INTO `calendars` (`id`, `title`, `color`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'sdf', '#ff8080', '2019-04-11', '2019-04-27', '2019-04-26 00:01:34', '2019-04-26 00:01:34'),
(2, 'hhfh', '#008000', '2019-04-30', '2019-04-12', '2019-04-26 00:04:23', '2019-04-26 00:04:23'),
(3, 'holiday', '#ff0080', '2019-04-30', '2019-05-01', '2019-04-28 04:05:18', '2019-04-28 04:05:18'),
(4, 'Holiday', '#ff0080', '2019-04-30', '2019-04-30', '2019-04-29 00:10:55', '2019-04-29 00:10:55'),
(5, 'rrt', '#8000ff', '2019-04-30', '2019-05-04', '2019-04-29 01:48:42', '2019-04-29 01:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `designation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `employee_id`, `designation_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Developer', '2019-04-16 00:58:02', '2019-04-16 00:58:02'),
(2, 2, 'Backend developer', '2019-04-16 00:58:18', '2019-04-16 00:58:18'),
(3, 3, 'Backend', '2019-04-16 00:58:31', '2019-04-16 00:58:31'),
(4, 4, 'Frontend', '2019-04-16 00:58:53', '2019-04-16 00:58:53'),
(5, 5, 'UI/UX designer', '2019-04-16 00:59:06', '2019-04-16 00:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `join_date` date NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` bigint(20) NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `event`, `description`, `created_at`, `updated_at`) VALUES
(1, '2019-04-10', 'Meeting', 'Related to project', '2019-04-23 00:44:30', '2019-04-23 00:44:30'),
(2, '2019-04-17', 'Holiday', 'Due to strike', '2019-04-22 00:55:06', '2019-04-23 00:55:06'),
(3, '2019-04-19', 'Meeting', '4 o\'clock', '2019-04-23 03:14:57', '2019-04-23 03:14:57'),
(4, '2019-04-17', 'Event organized by Concept', 'Event organized by Concept Event organized by Concept', '2019-04-23 04:58:58', '2019-04-23 04:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `days` bigint(20) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type_offer` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee_id`, `leave_type`, `date_from`, `date_to`, `days`, `reason`, `leave_type_offer`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 4, 'Sick leave', '2019-04-17', '2019-04-20', 4, 'Doctor recommend to take rest for few days', 2, 1, '2019-04-16 01:01:01', '2019-04-29 01:48:14'),
(2, 5, 'Sick leave', '2019-04-20', '2019-04-22', 3, 'Suffering from hgh fever', 0, 2, '2019-04-19 01:33:30', '2019-04-19 03:10:56'),
(3, 5, 'abcd', '2019-04-21', '2019-04-23', 3, 'abcd', 0, 1, '2019-04-19 01:38:03', '2019-04-19 01:38:03'),
(4, 4, 'sicl', '2019-04-19', '2019-04-23', 5, 'asdfg', 1, 1, '2019-04-19 05:53:23', '2019-04-19 05:53:54'),
(5, 4, 'ffng', '2019-04-30', '2019-05-02', 3, 'fdgdg', 0, NULL, '2019-04-29 00:29:17', '2019-04-29 00:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `managesalaries`
--

CREATE TABLE `managesalaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(203, '2014_10_12_000000_create_users_table', 1),
(204, '2014_10_12_100000_create_password_resets_table', 1),
(205, '2019_03_10_044553_create_employees_table', 1),
(206, '2019_03_10_050306_create_admins_table', 1),
(207, '2019_03_10_050652_create_cities_table', 1),
(208, '2019_03_10_050845_create_departments_table', 1),
(209, '2019_03_10_050953_create_salaries_table', 1),
(210, '2019_03_14_025243_create_shifts_table', 1),
(211, '2019_03_17_061433_create_leaves_table', 1),
(212, '2019_03_17_094258_create_totalleaves_table', 1),
(213, '2019_03_17_114000_create_profiles_table', 1),
(214, '2019_03_18_061726_create_downloads_table', 1),
(215, '2019_03_24_051434_create_managesalaries_table', 1),
(216, '2019_03_25_143643_create_designations_table', 1),
(217, '2019_04_10_113018_create_advancepayments_table', 1),
(218, '2019_04_21_111757_create_events_table', 2),
(219, '2019_04_26_023012_create_calendars_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `salary_amount` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `employee_id`, `salary_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 20000, '2019-04-16 04:04:17', '2019-04-16 04:04:17'),
(2, 2, 30000, '2019-04-16 04:04:26', '2019-04-16 04:04:26'),
(3, 3, 35000, '2019-04-16 04:04:36', '2019-04-16 04:04:36'),
(4, 4, 35000, '2019-04-16 04:05:08', '2019-04-16 04:05:08'),
(5, 5, 40000, '2019-04-16 04:05:18', '2019-04-16 04:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `totalleaves`
--

CREATE TABLE `totalleaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leaves_count` bigint(20) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `salary` bigint(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `join_date` date NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` bigint(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `leaves_count`, `username`, `image`, `first_name`, `last_name`, `role`, `salary`, `email`, `password`, `status`, `phone`, `address`, `gender`, `dob`, `join_date`, `job_type`, `city`, `age`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ganesh', '1555605075.jpg', 'ganesh', 'khadka', 'admin', 15000, 'ganeshkhadka46@gmail.com', '$2y$10$DhPAagFOPtbAUP9EUfbZjOYH7NRQNxdN8BxB71lDU6CAMP8.qvZ/G', 1, 9866567794, 'butwal', 'male', '2019-03-12', '2019-03-12', 'sales', 'butwal', 23, NULL, '2019-04-16 00:56:04', '2019-04-18 10:46:15'),
(2, NULL, 'gunner', '1555396911.png', 'gunner', 'kc', 'admin', 30000, 'gunnerpat46@gmail.com', '$2y$10$vqHYrwuE0BkNN9L8RiERRu/hREY4bD0XFOhFS1djs4SHGxpCBkY56', 1, 986133131, 'butwal', 'male', '2019-03-12', '2019-03-12', 'IT', 'butwal', 22, NULL, '2019-04-16 00:56:05', '2019-04-16 00:56:51'),
(3, NULL, 'nabin', '1556525059.png', 'nbn', 'bhandari', 'admin', 35000, 'nabin@gmail.com', '$2y$10$MoU1ccsK5aPu226PNdgkm.yFWwXLx2aSUewuFjeCLSLeTL44CLdUC', 1, 9866454562, 'butwal', 'male', '2019-03-12', '2019-03-12', 'Developer', 'butwal', 21, NULL, '2019-04-16 00:56:05', '2019-04-29 02:19:19'),
(4, NULL, 'abcd', '1555396946.png', 'xyz', 'pqr', 'employee', 35000, 'employee1@gmail.com', '$2y$10$YXH756kTdxICl0UtPRTfROOgmCqlZ8VYvc1nKfPp944FRs7AHnuBe', 1, 9866567794, 'butwal', 'male', '2019-03-12', '2019-03-12', 'Developer', 'butwal', 25, NULL, '2019-04-16 00:56:05', '2019-04-16 00:57:26'),
(5, NULL, 'bishal', '1555396963.png', 'bishal', 'gc', 'employee', 40000, 'bishal@gmail.com', '$2y$10$oeL1FvQjgz6W7IiVqyLNIOEM5K4xOsgwdj5K.f48BAIIVqtAZ2ukK', 1, 9866567794, 'butwal', 'male', '2019-03-12', '2019-03-12', 'designer', 'butwal', 25, NULL, '2019-04-16 00:56:05', '2019-04-16 00:57:43'),
(6, NULL, 'lekhmani', '1556521869.png', 'Lekh', 'Mani', 'employee', 50000, 'lekhmani@gmail.com', '$2y$10$9DB6OVgX88ubUM/JkorgkOC1ij3Gr703Kll.iDu.syjWtXiTaxeru', NULL, 987412425, 'Butwal', 'male', '2019-04-02', '2019-04-30', 'Developer', 'butwal', 25, NULL, '2019-04-29 01:19:00', '2019-04-29 01:26:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advancepayments`
--
ALTER TABLE `advancepayments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advancepayments_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leaves_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `managesalaries`
--
ALTER TABLE `managesalaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalleaves`
--
ALTER TABLE `totalleaves`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advancepayments`
--
ALTER TABLE `advancepayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `managesalaries`
--
ALTER TABLE `managesalaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `totalleaves`
--
ALTER TABLE `totalleaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advancepayments`
--
ALTER TABLE `advancepayments`
  ADD CONSTRAINT `advancepayments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
