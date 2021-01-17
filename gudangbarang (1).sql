-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2021 at 10:28 AM
-- Server version: 8.0.22-0ubuntu0.20.10.2
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Gudangg`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudangbarang`
--

CREATE TABLE `gudangbarang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gudangbarang`
--

INSERT INTO `gudangbarang` (`id_barang`, `nama_barang`, `jumlah_barang`) VALUES
(111, 'sabun Nuvo 250 ml', 100),
(112, 'Sabun Biore 250 ml', 50),
(113, 'Sabun Lervia 250 ml', 70),
(114, 'Shampoo Pantene', 68),
(115, 'Shampoo Sunsilk', 65),
(116, 'Shampoo Rejoice', 70),
(117, 'Shampoo Wardah', 50),
(120, 'Shampoo Tresemme', 20),
(121, 'Shampoo Clear', 30),
(122, 'Shampoo Head&Shoulders', 25),
(123, 'Shampoo B&B', 118),
(126, 'Odol Pepsodent Herbal', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudangbarang`
--
ALTER TABLE `gudangbarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudangbarang`
--
ALTER TABLE `gudangbarang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
