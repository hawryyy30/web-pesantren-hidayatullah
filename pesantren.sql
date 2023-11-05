-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 01:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `NO` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `NIS` varchar(200) NOT NULL,
  `JenisKelamin` varchar(20) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`NO`, `Nama`, `NIS`, `JenisKelamin`, `Alamat`, `created_at`) VALUES
(1, 'Muhammad Daffa Sulama', '12223041', 'Laki-Laki', 'Stabat, Sumatera Utara', '2023-11-05 16:06:41'),
(2, 'Muhammad Turfahmi', '12223065', 'Laki-Laki', 'Bandung, Jawa Barat', '2023-11-05 16:06:41'),
(3, 'Adinda Zahra', '12123057', 'Perepmpuan', 'Medan, Sumatera Utara', '2023-11-05 16:06:41'),
(4, 'Mumina Aliya', '12123150', 'Perempuan', 'Banda Aceh, NAD Aceh', '2023-11-05 16:06:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
