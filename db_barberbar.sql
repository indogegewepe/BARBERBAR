-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 02:58 AM
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
(5, '2022-01-08 01:57:33', 'Tabel Kategori');

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

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `no_hp`, `email`, `pass`, `pp`) VALUES
('P-1', 'Bagas', '081227868290', 'bagas@gmail.com', 'bagas123', 'sedenter.png');

--
-- Triggers `pegawai`
--
DELIMITER $$
CREATE TRIGGER `log_pegawai` BEFORE INSERT ON `pegawai` FOR EACH ROW BEGIN

INSERT INTO `log_event` (`id_log`, `tanggal_waktu`, `action`) VALUES (NULL, NULL, 'Tabel Pegawai');

END
$$
DELIMITER ;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`, `harga`) VALUES
(1, 'Dewasa', 90000),
(2, 'Anak', 70000);

--
-- Triggers `tbl_kategori`
--
DELIMITER $$
CREATE TRIGGER `log_kategori` AFTER INSERT ON `tbl_kategori` FOR EACH ROW BEGIN

INSERT INTO `log_event` (`id_log`, `tanggal_waktu`, `action`) VALUES (NULL, NULL, 'Tabel Kategori');

END
$$
DELIMITER ;

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
(39, '2022-01-07', 2, 2);

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
-- Indexes for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `log_event`
--
ALTER TABLE `log_event`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `model_rambut`
--
ALTER TABLE `model_rambut`
  ADD PRIMARY KEY (`id_model`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_cabang`
--
ALTER TABLE `tbl_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
-- AUTO_INCREMENT for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log_event`
--
ALTER TABLE `log_event`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `model_rambut`
--
ALTER TABLE `model_rambut`
  MODIFY `id_model` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_cabang`
--
ALTER TABLE `tbl_cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
