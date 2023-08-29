-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 12.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'antong441@gmail.com', 2, '2022-10-28 04:49:34', 1),
(2, '::1', 'dimas.mochamad6661@gmail.com', 1, '2022-11-15 02:58:31', 0),
(11, '::1', 'antong441@gmail.com', NULL, '2022-11-15 03:34:39', 0),
(12, '::1', 'antong441@gmail.com', 2, '2022-11-15 03:34:48', 1),
(13, '::1', 'antong441@gmail.com', 2, '2022-11-16 19:44:31', 1),
(14, '::1', 'antong441@gmail.com', 2, '2022-11-16 19:45:32', 1),
(15, '::1', 'antong441@gmail.com', 2, '2022-11-16 21:27:26', 1),
(16, '::1', 'antong441@gmail.com', 2, '2022-11-16 21:39:28', 1),
(17, '::1', 'antong441@gmail.com', 2, '2022-11-16 21:54:25', 1),
(18, '::1', 'antong441@gmail.com', 2, '2022-11-16 21:54:37', 1),
(19, '::1', 'antong441@gmail.com', 2, '2022-11-16 22:05:32', 1),
(20, '::1', 'antong441@gmail.com', 2, '2022-11-16 22:29:33', 1),
(21, '::1', 'antong441@gmail.com', 2, '2022-11-16 22:55:00', 1),
(22, '::1', 'antong441@gmail.com', 2, '2022-11-17 00:20:04', 1),
(23, '::1', 'antong441@gmail.com', 2, '2022-11-17 00:51:55', 1),
(24, '::1', 'antong441@gmail.com', 2, '2022-11-17 04:56:45', 1),
(25, '::1', 'antong441@gmail.com', 2, '2022-11-22 02:45:23', 1),
(26, '::1', 'antong441@gmail.com', 2, '2022-11-23 20:12:59', 1),
(27, '::1', 'antong441@gmail.com', 2, '2022-11-24 00:53:56', 1),
(28, '::1', 'antong441@gmail.com', 2, '2022-11-27 19:57:41', 1),
(29, '::1', 'antong441@gmail.com', 2, '2022-11-28 03:07:23', 1),
(30, '::1', 'antong441@gmail.com', 2, '2022-11-30 19:34:58', 1),
(31, '::1', 'antong441@gmail.com', 2, '2022-11-30 22:12:00', 1),
(32, '::1', 'antong441@gmail.com', 2, '2022-11-30 23:14:26', 1),
(33, '::1', 'antong441@gmail.com', 2, '2022-11-30 23:14:54', 1),
(34, '::1', 'antong441@gmail.com', 2, '2022-11-30 23:35:04', 1),
(35, '::1', 'antong441@gmail.com', 2, '2022-11-30 23:42:24', 1),
(36, '::1', 'antong441@gmail.com', 2, '2022-11-30 23:43:14', 1),
(37, '::1', 'antong441@gmail.com', 2, '2022-12-01 01:39:58', 1),
(38, '::1', 'antong441@gmail.com', 2, '2022-12-01 01:42:06', 1),
(39, '::1', 'antong441@gmail.com', 2, '2022-12-01 01:49:23', 1),
(40, '::1', 'antong441@gmail.com', 2, '2022-12-12 03:10:15', 1),
(41, '::1', 'antong441@gmail.com', 2, '2022-12-28 09:15:55', 1),
(42, '::1', 'antong441@gmail.com', 2, '2023-01-04 21:25:11', 1),
(43, '::1', 'antong441@gmail.com', 2, '2023-02-22 01:51:40', 1),
(44, '::1', 'antong441@gmail.com', 2, '2023-02-22 01:56:36', 1),
(45, '::1', 'antong441@gmail.com', 2, '2023-02-23 00:55:59', 1),
(46, '::1', 'antong441@gmail.com', 2, '2023-02-23 01:01:50', 1),
(47, '::1', 'antong441@gmail.com', 2, '2023-02-23 01:20:29', 1),
(48, '::1', 'antong441@gmail.com', 2, '2023-02-23 01:22:21', 1),
(49, '::1', 'antong441@gmail.com', 2, '2023-02-23 01:22:50', 1),
(50, '::1', 'antong441@gmail.com', 2, '2023-02-23 23:14:26', 1),
(51, '::1', 'antong441@gmail.com', 2, '2023-02-24 08:09:10', 1),
(52, '::1', 'antong441@gmail.com', 2, '2023-03-01 05:00:39', 1),
(53, '::1', 'admin2@gmail.com', 4, '2023-03-01 11:54:49', 1),
(54, '::1', 'antong441@gmail.com', 2, '2023-03-01 12:16:35', 1),
(55, '::1', 'antong441@gmail.com', 2, '2023-03-01 12:24:25', 1),
(56, '::1', 'antong441@gmail.com', 2, '2023-03-01 12:27:56', 1),
(57, '::1', 'antong441@gmail.com', 2, '2023-03-01 12:28:34', 1),
(58, '::1', 'antong441@gmail.com', 2, '2023-03-01 12:40:54', 1),
(59, '::1', 'antong441@gmail.com', 2, '2023-03-01 12:41:35', 1),
(60, '::1', 'antong441@gmail.com', 2, '2023-03-01 12:44:03', 1),
(61, '::1', 'antong441@gmail.com', 2, '2023-03-06 06:23:13', 1),
(62, '::1', 'antong441@gmail.com', 2, '2023-03-06 22:41:53', 1),
(63, '::1', 'antong441@gmail.com', 2, '2023-03-08 01:46:07', 1),
(64, '::1', 'antong441@gmail.com', 2, '2023-03-08 02:01:00', 1),
(65, '::1', 'antong441@gmail.com', 2, '2023-03-08 02:21:56', 1),
(66, '::1', 'antong441@gmail.com', 2, '2023-03-08 02:24:42', 1),
(67, '::1', 'antong441@gmail.com', 2, '2023-03-08 02:28:34', 1),
(68, '::1', 'antong441@gmail.com', 2, '2023-03-21 02:14:07', 1),
(69, '::1', 'antong441@gmail.com', 2, '2023-03-21 11:33:49', 1),
(70, '::1', 'antong441@gmail.com', 2, '2023-03-26 19:24:00', 1),
(71, '::1', 'antong441@gmail.com', 2, '2023-03-26 21:10:14', 1),
(72, '::1', 'antong441@gmail.com', 2, '2023-03-27 18:40:15', 1),
(73, '::1', 'antong441@gmail.com', 2, '2023-03-27 18:59:18', 1),
(74, '::1', 'antong441@gmail.com', 2, '2023-03-29 05:22:44', 1),
(75, '::1', 'antong441@gmail.com', 2, '2023-03-30 18:45:46', 1),
(76, '::1', 'antong441@gmail.com', 2, '2023-03-30 20:42:36', 1),
(77, '::1', 'antong441@gmail.com', 2, '2023-04-01 01:24:38', 1),
(78, '::1', 'antong441@gmail.com', 2, '2023-04-01 07:55:03', 1),
(79, '::1', 'antong441@gmail.com', 2, '2023-05-02 02:54:49', 1),
(80, '::1', 'antong441@gmail.com', 2, '2023-05-02 03:05:05', 1),
(81, '::1', 'user1', NULL, '2023-05-30 04:03:04', 0),
(82, '::1', 'dasfas@sadsad.com', 5, '2023-05-30 04:03:51', 1),
(83, '::1', 'antong441@gmail.com', 2, '2023-06-02 03:05:45', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterdata`
--

CREATE TABLE `masterdata` (
  `id` int(11) NOT NULL,
  `aset` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `unit_pemakai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masterdata`
--

INSERT INTO `masterdata` (`id`, `aset`, `nama`, `tipe`, `vendor`, `lokasi`, `unit_pemakai`) VALUES
(1, 'Laptop', 'HP 15EF2127WM', 'Elektronik', 'Warsa Hermawan', 'PT.SIL', '2022-11-01'),
(19, 'Laptop', 'TOSHIBA', 'Elektronik', 'Dimas', 'PT.SIL', '2022-11-24'),
(24, 'Laptop', 'ASUS ROG', 'Elektronik', 'Dimas', 'PT.SIL', '2023-02-07'),
(26, 'Laptop', 'ASUS TUF GAMING F15 Fx507ZM', 'Elektronik', 'Dimas', 'PT.SIL', '2023-01-14'),
(28, 'Laptop', 'HP', 'Elektronik', 'Dimas', 'PT.SIL', '2023-05-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1666945862, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `PIC` varchar(50) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dimas.mochamad6661@gmail.com', 'dimas', '$2y$10$jU8t2waVdJkIxPdnWu7x/.IiQh4WVbj3.imNYEMiU0RKoNAakUNKK', NULL, NULL, NULL, 'd5850ac7b124f1f82b2a75b1b0bdbe0f', NULL, NULL, 0, 0, '2022-10-28 04:46:37', '2022-10-28 04:46:37', NULL),
(2, 'antong441@gmail.com', 'dimas123', '$2y$10$RV.as43XUweVzYUicrGEzOiKY9Os41oR9F2gDFKUrPj75mk.QrS5K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-28 04:49:21', '2022-10-28 04:49:21', NULL),
(3, 'rafliadityai@gmail.com', 'rafliadityai', '$2y$10$UIB8aeWsxoT0Q1cN/WEFZ.HJdRUJM1Lerb97QRsAeIHK2DbrQ79wy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-16 20:37:41', '2022-11-16 20:37:41', NULL),
(4, 'admin2@gmail.com', 'admin2', '$2y$10$IZ/ih3ZIE1l81.3ygVxWt.AjlFClIfwl6Duzrr5T50RB8HXmr9DeW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-01 11:54:33', '2023-03-01 11:54:33', NULL),
(5, 'dasfas@sadsad.com', 'user01', '$2y$10$DOec8ZD1rP7EOn4a1x68yu9CY7bobf6fH8R/fpiJB8OM0zyzI81T6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-30 04:02:48', '2023-05-30 04:02:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `masterdata`
--
ALTER TABLE `masterdata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `masterdata`
--
ALTER TABLE `masterdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
