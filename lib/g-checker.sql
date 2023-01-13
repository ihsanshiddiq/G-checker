-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 01:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g-checker`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `email` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `nama`, `password`, `id_role`) VALUES
('admin@yahoo.com', 'Ihsan', '$2y$10$dExzYWlojogY6HWbOpH7FO5u6.WaMw3WlP9YDVy.dhEvdAEiwojdi', 1),
('khaira@yahoo.com', 'Khaira', '$2y$10$b8ITWqaLQEXKxBGWKk95POzcZbLB/jVFD3wD74JhSyqi3naQzzfV2', 1),
('user@yahoo.com', 'Aldyy', '$2y$10$hs5JRxgkE.8BY0yZDhZfS.6pgRnK9t6h.nI3h5JuDO5Sl.3WaqmB6', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `serial_number` int(20) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `tanggal_garansi` date NOT NULL,
  `id_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`serial_number`, `jenis_barang`, `tanggal_keluar`, `tanggal_garansi`, `id_status`) VALUES
(11111, 'Silver', '2023-01-10', '2023-01-27', 3),
(16186337, 'Platinum', '2023-01-31', '2023-07-12', 1),
(20231201, 'Gold', '2023-01-27', '0000-00-00', 3),
(25179185, 'Platinum', '2023-01-13', '2023-01-14', 3),
(41507297, 'Platinum', '2023-01-12', '2023-07-12', 3),
(79431058, 'Gold', '2023-01-12', '2023-01-20', 1),
(84688755, 'Platinum', '2023-01-30', '2023-07-30', 1),
(121344242, 'Gold', '2023-01-12', '2023-01-13', 1),
(2147483647, 'Platinum', '2023-02-02', '2023-08-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(1) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(1) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Berlaku'),
(2, 'Expired'),
(3, 'Claimed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`email`),
  ADD KEY `fk-role` (`id_role`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`serial_number`),
  ADD KEY `fk-status` (`id_status`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk-role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk-status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
