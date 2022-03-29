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
-- Table structure for table `model_rambut`
--

CREATE TABLE `model_rambut` (
  `id_model` int(11) NOT NULL,
  `nama_model` varchar(50) NOT NULL,
  `foto_model` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model_rambut`
--

INSERT INTO `model_rambut` (`id_model`, `nama_model`, `foto_model`, `deskripsi`) VALUES
(1, 'Comma Hair', 'comma.jpg', 'Comma Hair merupakan gaya rambut andalan pria Korea.');

--
-- Triggers `model_rambut`
--
DELIMITER $$
CREATE TRIGGER `log_rambut` AFTER INSERT ON `model_rambut` FOR EACH ROW BEGIN

INSERT INTO `log_event` (`id_log`, `tanggal_waktu`, `action`) VALUES (NULL, NULL, 'Tabel Model Rambut');

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `model_rambut`
--
ALTER TABLE `model_rambut`
  ADD PRIMARY KEY (`id_model`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `model_rambut`
--
ALTER TABLE `model_rambut`
  MODIFY `id_model` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
