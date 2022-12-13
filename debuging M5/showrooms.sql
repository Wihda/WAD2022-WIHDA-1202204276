-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3301
-- Waktu pembuatan: 11 Des 2022 pada 15.00
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul5_wihda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showrooms`
--

CREATE TABLE `showrooms` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Lunas','Belum-Lunas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `showrooms`
--

INSERT INTO `showrooms` (`id`, `name`, `owner`, `brand`, `purchase_date`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '2022-12-19 00:00:00', 'aaaaaa', 'C:\\xampp\\tmp\\php60DB.tmp', 'Lunas', '2022-12-11 13:31:21', '2022-12-11 13:31:21'),
(2, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '2222-02-22 00:00:00', 'aaaa', 'C:\\xampp\\tmp\\php1DD9.tmp', 'Lunas', '2022-12-11 13:34:20', '2022-12-11 13:34:20'),
(3, 'Ferrari Pagani', 'Wihda - 1202204276', 'Bugatti', '0222-02-22 00:00:00', 'aaaa', 'C:\\xampp\\tmp\\phpE31A.tmp', 'Lunas', '2022-12-11 13:36:16', '2022-12-11 13:36:16'),
(4, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '0222-02-22 00:00:00', 'aaaa', 'C:\\xampp\\tmp\\phpC13C.tmp', 'Lunas', '2022-12-11 13:39:24', '2022-12-11 13:39:24'),
(5, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '0002-02-22 00:00:00', 'aaa', 'C:\\xampp\\tmp\\php83F.tmp', 'Lunas', '2022-12-11 13:41:53', '2022-12-11 13:41:53'),
(6, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '3322-02-22 00:00:00', 'aaaaaeee', 'C:\\xampp\\tmp\\php13F3.tmp', 'Lunas', '2022-12-11 13:43:02', '2022-12-11 13:43:02'),
(7, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '3322-02-22 00:00:00', 'aaaaaeee', 'C:\\xampp\\tmp\\php3468.tmp', 'Lunas', '2022-12-11 13:44:16', '2022-12-11 13:44:16'),
(8, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '3322-02-22 00:00:00', 'aaaaaeee', 'C:\\xampp\\tmp\\phpE7F0.tmp', 'Lunas', '2022-12-11 13:47:13', '2022-12-11 13:47:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showrooms`
--
ALTER TABLE `showrooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showrooms`
--
ALTER TABLE `showrooms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
