-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 01:00 PM
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
-- Table structure for table `tbl_cabang`
--

CREATE TABLE `tbl_cabang` (
  `id_cabang` int(11) NOT NULL,
  `nama_cabang` varchar(20) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cabang`
--

INSERT INTO `tbl_cabang` (`id_cabang`, `nama_cabang`, `no_hp`, `alamat`) VALUES
(1, 'Semarang', 123234345, 'Semarang'),
(2, 'Bandung', 234345456, 'Bandung'),
(3, 'Yogyakarta', 89098, 'Yogyakarta');

--
-- Triggers `tbl_cabang`
--
DELIMITER $$
CREATE TRIGGER `log_cabang` AFTER INSERT ON `tbl_cabang` FOR EACH ROW BEGIN

INSERT INTO `log_event` (`id_log`, `tanggal_waktu`, `action`) VALUES (NULL, NULL, 'Tabel Cabang');

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cabang`
--
ALTER TABLE `tbl_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cabang`
--
ALTER TABLE `tbl_cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
