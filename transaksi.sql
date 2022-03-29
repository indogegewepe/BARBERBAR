-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 01:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barberbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_kategori`, `id_cabang`) VALUES
(23, '2022-01-07', 2, 3),
(25, '2022-01-07', 1, 1),
(28, '2022-01-07', 1, 3),
(30, '2022-01-07', 2, 1),
(31, '2022-01-08', 1, 1),
(32, '2022-01-14', 1, 2),
(33, '2022-01-14', 1, 2),
(34, '2022-01-07', 2, 2),
(36, '2022-01-07', 1, 2),
(39, '2022-01-07', 2, 2),
(40, '2022-01-08', 1, 1),
(41, '2022-01-08', 1, 1);

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `log` BEFORE INSERT ON `transaksi` FOR EACH ROW BEGIN

INSERT INTO `log_event` (`id_log`, `tanggal_waktu`, `action`) VALUES (NULL, NULL, 'Tabel Transaksi');

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_cabang` (`id_cabang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_cabang`) REFERENCES `tbl_cabang` (`id_cabang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
