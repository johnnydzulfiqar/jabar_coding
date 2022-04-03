-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 01:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir_jabar`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawab`
--

CREATE TABLE `jawab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanya_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawab`
--

INSERT INTO `jawab` (`id`, `jawaban`, `tanya_id`, `users_id`, `created_at`, `updated_at`) VALUES
(12, 'pertanyaan yang sangat baik edit', 11, 5, '2022-04-02 22:25:39', '2022-04-02 22:25:39'),
(13, 'keren', 11, 6, '2022-04-02 22:27:00', '2022-04-02 22:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`, `users_id`) VALUES
(5, 'Laravel edit', '2022-04-02 22:24:33', '2022-04-02 22:24:33', 6),
(6, 'coding', '2022-04-02 22:25:03', '2022-04-02 22:25:03', 5),
(7, 'php edit', '2022-04-02 22:28:22', '2022-04-02 22:28:22', 6);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_01_125513_create_profile_table', 2),
(6, '2022_04_01_125554_create_kategori_table', 2),
(7, '2022_04_01_125705_create_tanya_table', 2),
(8, '2022_04_01_125739_create_jawab_table', 2),
(9, '2022_04_02_140558_create_profile_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `bio`, `umur`, `alamat`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Pemilik', 22, 'Pojok tengah', 5, '2022-04-02 08:11:11', '2022-04-02 22:26:04'),
(2, 'good', 22, 'Pojok tengah', 6, '2022-04-02 20:59:40', '2022-04-02 22:27:15'),
(3, 'gggg', 42, 'Pojok tengah', 7, '2022-04-02 22:50:23', '2022-04-02 22:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `tanya`
--

CREATE TABLE `tanya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanya`
--

INSERT INTO `tanya` (`id`, `pertanyaan`, `gambar`, `kategori_id`, `users_id`, `created_at`, `updated_at`) VALUES
(11, 'pertanyaan pertama', '1648963532-Screenshot_1.png', 5, 5, '2022-04-02 22:25:32', '2022-04-02 22:25:32'),
(12, 'pertanyaan kedua edit', '1648963609-Screenshot_6.png', 6, 6, '2022-04-02 22:26:30', '2022-04-02 22:26:49'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis euismod hendrerit. Maecenas porta nunc eget nisl consequat efficitur. Cras ultrices quam eget ipsum tristique fringilla. Suspendisse consequat dictum est id egestas. Integer vel odio fermentum, interdum ipsum id, rutrum urna. Morbi a lacus eget quam iaculis vulputate vitae ut felis. Nulla quis turpis placerat, efficitur nibh sit amet, viverra dolor. Aliquam rhoncus augue lectus, nec tempus odio aliquet vel. Phasellus magna neque, placerat ac magna quis, pulvinar vestibulum ligula. Curabitur finibus aliquet ullamcorper. Donec erat enim, feugiat sed augue feugiat, finibus luctus leo. Suspendisse vel mollis ex. Quisque condimentum, urna at condimentum imperdiet, neque neque convallis mi, ultrices aliquam sapien diam nec purus.', '1648969571-Screenshot_9.png', 5, 6, '2022-04-03 00:06:11', '2022-04-03 00:06:11'),
(14, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis euismod hendrerit. Maecenas porta nunc eget nisl consequat efficitur. Cras ultrices quam eget ipsum tristique fringilla. Suspendisse consequat dictum est id egestas. Integer vel odio fermentum, interdum ipsum id, rutrum urna. Morbi a lacus eget quam iaculis vulputate vitae ut felis. Nulla quis turpis placerat, efficitur nibh sit amet, viverra dolor. Aliquam rhoncus augue lectus, nec tempus odio aliquet vel. Phasellus magna neque, placerat ac magna quis, pulvinar vestibulum ligula. Curabitur finibus aliquet ullamcorper. Donec erat enim, feugiat sed augue feugiat, finibus luctus leo. Suspendisse vel mollis ex. Quisque condimentum, urna at condimentum imperdiet, neque neque convallis mi, ultrices aliquam sapien diam nec purus.</p>', '1648976866-jean.jpg', 5, 6, '2022-04-03 02:07:46', '2022-04-03 02:07:46'),
(15, '<p>L<strong>orem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facili</strong>sis euismod hendrerit. Maecenas porta nunc eget nisl consequat efficitur. Cras ultrices quam eget ipsum tristique fringilla. Suspendisse consequat dictum est id egestas. Integer vel odio fermentum, interdum ipsum id, rutrum urna. Morbi a lacus eget quam iaculis vulputate vitae ut felis. Nulla quis turpis placerat, efficitur nibh sit amet, viverra dolor. Aliquam rhoncus augue lectus, nec tempus odio aliquet vel. Phasellus magna neque, placerat ac magna quis, pulvinar vestibulum ligula. Curabitur finibus aliquet ullamcorper. Donec erat enim, feugiat sed augue feugiat, finibus luctus leo. Suspendisse vel mollis ex. Quisque condimentum, urna at condimentum imperdiet, neque neque convallis mi, ultrices aliquam sapien diam nec purus.</p>', '1648976974-5fc758225a792.jpg', 6, 6, '2022-04-03 02:09:34', '2022-04-03 02:09:34');

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
(5, 'john', 'John@gmail.com', NULL, '$2y$10$7cyWBLOFmYDYhE1ePR7qBel4vNxPkkbOpMvnt3Zg48dtI4giVOCpK', NULL, '2022-04-02 08:11:11', '2022-04-02 08:11:11'),
(6, 'Muhammad Naufa Dzulfiqar', 'lordnaufa@gmail.com', NULL, '$2y$10$gC/mDP2LTiwWtSkBj1LsXOCl0PXDrnVSpiR7IbHaSCAYKQbXryjHG', 'w4JMvvuJNJNiulj10u34bSJyYtlczMpb1nBDEkSxrTTWef9JSRWyTrgDA8ZG', '2022-04-02 20:59:40', '2022-04-02 20:59:40'),
(7, 'dadang', 'dadang@gmail.com', NULL, '$2y$10$iHZvhuxInNHqkL4wvdgnX.vP6he9GnxgpGfzihmLucCKkUIpkLHrq', NULL, '2022-04-02 22:50:23', '2022-04-02 22:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawab_tanya_id_foreign` (`tanya_id`),
  ADD KEY `jawab_users_id_foreign` (`users_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_user_id_foreign` (`users_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_users_id_foreign` (`users_id`);

--
-- Indexes for table `tanya`
--
ALTER TABLE `tanya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tanya_kategori_id_foreign` (`kategori_id`),
  ADD KEY `tanya_users_id_foreign` (`users_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanya`
--
ALTER TABLE `tanya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawab`
--
ALTER TABLE `jawab`
  ADD CONSTRAINT `jawab_tanya_id_foreign` FOREIGN KEY (`tanya_id`) REFERENCES `tanya` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jawab_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_user_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tanya`
--
ALTER TABLE `tanya`
  ADD CONSTRAINT `tanya_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tanya_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
