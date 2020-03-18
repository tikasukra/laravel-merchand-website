-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2020 pada 15.07
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmerchand`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_product`, `created_at`, `updated_at`) VALUES
(1, 'Drinkware', NULL, NULL),
(3, 'Accessoris', NULL, NULL),
(4, 'Headwear', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan`
--

CREATE TABLE `keterangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `keterangan_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keterangan`
--

INSERT INTO `keterangan` (`id`, `keterangan_product`) VALUES
(1, 'Pre Order'),
(2, 'Ready Stock');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_16_015614_create_kategori_table', 1),
(2, '2020_03_16_020838_create_keterangan_table', 2),
(3, '2020_03_16_020944_create_product_table', 3),
(4, '2020_03_16_022333_create_users_table', 4),
(5, '2014_10_12_100000_create_password_resets_table', 5),
(6, '2020_03_18_120157_users_add_bio', 5),
(7, '2020_03_18_121951_users_add_photo', 6),
(8, '2020_03_18_122235_users_add_bio', 7),
(9, '2020_03_18_122329_users_add_photo', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(10) UNSIGNED NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` int(10) UNSIGNED NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama_product`, `kategori`, `harga`, `keterangan`, `stok`, `date`, `color`, `image`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sport Bottle', 1, 70000, 1, NULL, '10 Maret - 15 Maret 2020', 'White', 'aaaaa.png', 'keterangan pre order akan di konfirmasi via e-mail', NULL, '2020-03-17 09:10:18', '2020-03-17 09:10:18'),
(2, 'Tumbler Bottle', 1, 120000, 2, NULL, 'aaaa', 'aaaa', 'aaaa', 'aaaaa', NULL, '2020-03-17 09:10:12', '2020-03-17 09:10:12'),
(3, 'sasasa', 1, 123232, 2, 21, 'dasdsdd', 'sdsada', 'asdsadsd', 'sdasdsa', NULL, '2020-03-17 09:09:58', '2020-03-17 09:09:58'),
(4, 'Botol', 1, 67, 2, 1, '12 Maret - 20 Maret', 'White', 'public/zTyOPfZ63eoQgPk67IbBk3kyd9sBAt5Xw1wsEOch.jpeg', NULL, NULL, NULL, NULL),
(5, 'Sport Bottle', 1, 250000, 2, 12, NULL, 'White, Black', 'public/Qms9QiehTWFGrME0BnepTrouARXx9b7P9PueqTDU.jpeg', NULL, NULL, NULL, NULL),
(6, 'Gelang Tali', 3, 50000, 2, 10, NULL, 'Black, Yellow, Grey', 'public/2ZuSLWdV7HKLF0JCN4UlVu6qszt2BkycwZR014qU.jpeg', NULL, NULL, NULL, NULL),
(7, 'Cap', 4, 50000, 2, 20, '-', 'Blue, Green', 'public/6vOiysKg4kCSZ53S9nZkpXNCWJfmiHnijLFw7hqc.jpeg', 'Topi dengan bahan premium, nyaman digunakan, desain menarik.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `bio`, `photo`) VALUES
(1, 'Sukra', 'tika@gmail.com', NULL, '$2y$10$upAM6OMGplkedQ7Ln3.xeuYSmwWBoS7RqCtndnA8zaU6MZWOlAPhm', 'bDK0GDNaLvi2SndEd0MRPnizhjLAqn14lyXk8fZMhghY0p6TpKlKqStmlXEt', '2020-03-15 21:21:16', '2020-03-15 21:21:16', NULL, NULL),
(2, 'Budi Budi', 'budi@gmail.com', NULL, '$2y$10$nuFl.F9YPM7UyANtTiMa4OT9ch3ssu6X8wWokUEepS6de5k1Vbkca', NULL, '2020-03-16 00:59:36', '2020-03-16 00:59:36', NULL, NULL),
(3, 'Ana', 'ana@gmail.com', NULL, '$2y$10$hh7/lLC.Xkie7fXEo2fAWu0qhgwnohGxX5tq521CQwtkW8G9P4xxK', NULL, '2020-03-16 01:23:39', '2020-03-16 01:23:39', NULL, NULL),
(4, 'Tika Sukra Afr', 'tik@gmail.com', NULL, '$2y$10$Q6Nfyf55LBtihokIyu3kjuI7eCFO7agHBhKyRUd62N/tOoq/6dU0m', NULL, '2020-03-16 22:42:54', '2020-03-16 22:42:54', NULL, NULL),
(5, 'Tikaaa', 'tikas@gmail.com', NULL, '$2y$10$ACH1dgzvRO6u/9Y7/y6gS.mxkV.7UZw8NjVzs1yxaCZT4X4VYIvqC', NULL, '2020-03-16 23:15:33', '2020-03-16 23:15:33', NULL, NULL),
(6, 'Halo Tika', 'sukra@gmail.com', NULL, '$2y$10$XJKNs2jvKHv0WZxlJZl.XOUzEwmlKoBm5lWAicWVEbBdXiWGuXeXK', NULL, '2020-03-17 03:24:05', '2020-03-17 03:24:05', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_keterangan_foreign` (`keterangan`),
  ADD KEY `product_kategori_foreign` (`kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_kategori_foreign` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_keterangan_foreign` FOREIGN KEY (`keterangan`) REFERENCES `keterangan` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
