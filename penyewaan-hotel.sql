-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 03:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan-hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_tipe` int(11) NOT NULL,
  `jenis_kamar` varchar(50) NOT NULL,
  `harga` int(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_tipe`, `jenis_kamar`, `harga`, `image`) VALUES
(1, 'Standard', 500000, 'image1.jpg'),
(2, 'Deluxe', 1000000, 'image2.jpg'),
(3, 'Family', 1500000, 'image3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_identitas` int(50) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `durasi_menginap` int(50) NOT NULL,
  `sarapan` int(11) NOT NULL,
  `total` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesan`, `nama`, `jenis_kelamin`, `no_identitas`, `tanggal_pesan`, `durasi_menginap`, `sarapan`, `total`, `id_kamar`) VALUES
(1, 'Zweena Ariva', 'Perempuan', 2147483647, '2025-01-13', 2, 0, 'Rp 1.160.000', 0),
(2, 'Ariva Zweena', 'Laki-laki', 2147483647, '2025-01-13', 2, 1, 'Rp 3.160.000', 0),
(3, 'Avira Aneewz', 'Perempuan', 2147483647, '2025-01-13', 5, 1, 'Rp 7.110.000', 0),
(5, 'rkhnfrnhfj', 'Perempuan', 2147483647, '2025-01-31', 6, 1, 'Rp 5.832.000', 0),
(6, 'etkghkdgfgfrgh', 'Laki-laki', 2147483647, '2025-01-25', 6, 1, 'Rp 3.132.000', 1),
(7, 'yuguykjhkh', 'Perempuan', 2147483647, '2025-01-11', 2, 1, 'Rp 3.160.000', 3),
(8, 'Ariva', 'Perempuan', 2147483647, '2025-01-13', 4, 1, 'Rp 3.888.000', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
