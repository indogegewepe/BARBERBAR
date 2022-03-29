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
-- Table structure for table `log_event`
--

CREATE TABLE `log_event` (
  `id_log` int(11) NOT NULL,
  `tanggal_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_event`
--

INSERT INTO `log_event` (`id_log`, `tanggal_waktu`, `action`) VALUES
(1, '2022-01-07 04:21:53', 'Tabel Transaksi'),
(2, '2022-01-07 10:34:26', 'Tabel Transaksi'),
(3, '2022-01-08 01:53:41', 'Tabel Cabang'),
(4, '2022-01-08 01:57:03', 'Tabel Jam Kerja'),
(5, '2022-01-08 01:57:33', 'Tabel Kategori'),
(6, '2022-01-08 12:42:31', 'Tabel Transaksi'),
(7, '2022-01-08 14:08:27', 'Tabel Pegawai'),
(8, '2022-01-08 14:13:10', 'Tabel Transaksi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_event`
--
ALTER TABLE `log_event`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_event`
--
ALTER TABLE `log_event`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
