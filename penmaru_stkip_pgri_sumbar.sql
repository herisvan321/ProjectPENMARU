-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 09:53 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penmaru_stkip_pgri_sumbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alurpends`
--

CREATE TABLE `alurpends` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alurpends`
--

INSERT INTO `alurpends` (`id`, `title`, `isi`, `active`, `created_at`, `updated_at`, `file`, `status`) VALUES
(1, 'dsf', '<p>dsfs</p>', 'Y', '2018-12-10 19:57:29', '2018-12-10 19:57:29', '0', 'text'),
(2, 'DFDSF', '0', 'Y', '2018-12-10 19:59:54', '2018-12-10 19:59:54', '20181211025459.pdf', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `brosurpends`
--

CREATE TABLE `brosurpends` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dterftars`
--

CREATE TABLE `dterftars` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `title`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'fdsfas', '<p>dsfsafasd fdsf ds</p>', '2018-12-10 20:35:00', '2018-12-10 20:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `infopens`
--

CREATE TABLE `infopens` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kemudahans`
--

CREATE TABLE `kemudahans` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_10_030525_create_alurpends_table', 1),
(4, '2018_12_10_030557_create_brosurpends_table', 1),
(5, '2018_12_10_030633_create_dterftars_table', 1),
(6, '2018_12_10_030705_create_fasilitas_table', 1),
(7, '2018_12_10_030733_create_infopens_table', 1),
(8, '2018_12_10_030748_create_kemudahans_table', 1),
(9, '2018_12_10_030813_create_pesanalums_table', 1),
(10, '2018_12_10_030830_create_prestasis_table', 1),
(11, '2018_12_10_030908_create_prodidanpeluangs_table', 1),
(12, '2018_12_10_030922_create_sliders_table', 1),
(13, '2018_12_10_030946_create_urlinfos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanalums`
--

CREATE TABLE `pesanalums` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanalums`
--

INSERT INTO `pesanalums` (`id`, `nama`, `pesan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'dsafs', 'sdfds', '20181211031546.jpg', '2018-12-10 20:46:15', '2018-12-10 20:46:15'),
(2, 'dvs', 'dfgvd', 'index.png', '2018-12-10 21:15:22', '2018-12-10 21:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `title`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'refe', '<p>asdfdasfe fasw feasw fesa</p>', '2018-12-10 21:24:22', '2018-12-10 21:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `prodidanpeluangs`
--

CREATE TABLE `prodidanpeluangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaprodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peluangkerja` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodidanpeluangs`
--

INSERT INTO `prodidanpeluangs` (`id`, `namaprodi`, `peluangkerja`, `created_at`, `updated_at`) VALUES
(1, 'nama', '', '2018-12-10 21:27:03', '2018-12-10 21:27:03'),
(2, 'pendidikan informatika', '', '2018-12-10 21:27:39', '2018-12-10 21:27:39'),
(3, 'dfsaf', '<p>cdsef</p>', '2018-12-10 21:35:50', '2018-12-10 21:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'fdd', '20181211045041.jpg', '2018-12-10 21:41:50', '2018-12-10 21:41:50'),
(2, 'fdd', '20181211040542.jpg', '2018-12-10 21:42:05', '2018-12-10 21:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `urlinfos`
--

CREATE TABLE `urlinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urlinfos`
--

INSERT INTO `urlinfos` (`id`, `title`, `url`, `banner`, `created_at`, `updated_at`) VALUES
(2, 'dsfas', 'http://fb.com', '20181211053309.png', '2018-12-10 22:09:33', '2018-12-10 22:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alurpends`
--
ALTER TABLE `alurpends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brosurpends`
--
ALTER TABLE `brosurpends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dterftars`
--
ALTER TABLE `dterftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infopens`
--
ALTER TABLE `infopens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemudahans`
--
ALTER TABLE `kemudahans`
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
-- Indexes for table `pesanalums`
--
ALTER TABLE `pesanalums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodidanpeluangs`
--
ALTER TABLE `prodidanpeluangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urlinfos`
--
ALTER TABLE `urlinfos`
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
-- AUTO_INCREMENT for table `alurpends`
--
ALTER TABLE `alurpends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `brosurpends`
--
ALTER TABLE `brosurpends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dterftars`
--
ALTER TABLE `dterftars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `infopens`
--
ALTER TABLE `infopens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kemudahans`
--
ALTER TABLE `kemudahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pesanalums`
--
ALTER TABLE `pesanalums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prodidanpeluangs`
--
ALTER TABLE `prodidanpeluangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `urlinfos`
--
ALTER TABLE `urlinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
