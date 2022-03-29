-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 12:59 PM
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
-- Table structure for table `jam_kerja`
--

CREATE TABLE `jam_kerja` (
  `id_hari` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `buka` time NOT NULL,
  `tutup` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam_kerja`
--

INSERT INTO `jam_kerja` (`id_hari`, `hari`, `buka`, `tutup`) VALUES
(1, 'Senin', '08:00:00', '09:00:00'),
(2, 'Selasa', '08:00:00', '09:00:00'),
(3, 'Rabu', '08:00:00', '09:00:00'),
(4, 'Kamis', '08:00:00', '09:00:00'),
(5, 'Jumat', '08:00:00', '09:00:00'),
(6, 'Sabtu', '11:00:00', '09:00:00'),
(7, 'Minggu', '10:00:00', '09:00:00');

--
-- Triggers `jam_kerja`
--
DELIMITER $$
CREATE TRIGGER `log_jam` AFTER UPDATE ON `jam_kerja` FOR EACH ROW BEGIN

INSERT INTO `log_event` (`id_log`, `tanggal_waktu`, `action`) VALUES (NULL, NULL, 'Tabel Jam Kerja');

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  ADD PRIMARY KEY (`id_hari`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
