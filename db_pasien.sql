-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 09:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `NomorP` varchar(15) NOT NULL,
  `NamaP` varchar(30) NOT NULL,
  `JKelamin` varchar(10) NOT NULL,
  `UmurP` varchar(3) NOT NULL,
  `RuanganP` varchar(10) NOT NULL,
  `DokterP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`NomorP`, `NamaP`, `JKelamin`, `UmurP`, `RuanganP`, `DokterP`) VALUES
('00001', 'Kuyut Panjaitan', 'Laki Laki', '24', 'C', 'Dr.Payat Sp.KK'),
('00002', 'Zulfikar Imam Shaolin', 'Laki-Laki', '70', 'B', 'Dr.Fikar Sp.OG'),
('00007', 'Susanti', 'Perempuan', '25', 'A', 'Dr.Fikar Sp.OG'),
('00008', 'Alqo ', 'Laki-Laki', '23', 'B', 'Dr.Fikar Sp.OG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`NomorP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
