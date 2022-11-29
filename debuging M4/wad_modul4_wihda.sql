-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3301
-- Generation Time: Nov 27, 2022 at 03:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_wihda`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_wihda_table`
--

CREATE TABLE `showroom_wihda_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_wihda_table`
--

INSERT INTO `showroom_wihda_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'Ferrari Pagani', 'Wihda - 1202204276', 'Ferrari', '2022-11-17', 'Warna body: Dark Grey\r\nWarna pelg: Gold', '4857-ferrari pagani zonda.JPG', 'Belum lunas'),
(2, 'Bugatti Veyron', 'Wihda - 1202204276', 'Bugatti', '2022-11-05', 'Warna body: Red-Black\r\nWarna pelg: Red', '6900-bugatti-veyron.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user_wihda`
--

CREATE TABLE `user_wihda` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_wihda`
--

INSERT INTO `user_wihda` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(2, 'Wihda', 'wihdahanid@gmail.com', 'wihdamodul4', '1202910797'),
(3, 'Wihda', 'wihdahanid@gmail.com', 'wihdamodul4', '1202910797');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_wihda_table`
--
ALTER TABLE `showroom_wihda_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_wihda`
--
ALTER TABLE `user_wihda`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_wihda_table`
--
ALTER TABLE `showroom_wihda_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_wihda`
--
ALTER TABLE `user_wihda`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
