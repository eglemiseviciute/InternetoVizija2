-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 08:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internetopuslapis`
--

-- --------------------------------------------------------

--
-- Table structure for table `allservice`
--

CREATE TABLE `allservice` (
  `id` int(25) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `billing` varchar(255) NOT NULL,
  `specs` varchar(255) NOT NULL,
  `components` varchar(255) NOT NULL,
  `IP(s)` varchar(255) NOT NULL,
  `backups` varchar(255) NOT NULL,
  `hostname` varchar(255) NOT NULL,
  `Node` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allservice`
--

INSERT INTO `allservice` (`id`, `service_name`, `price`, `billing`, `specs`, `components`, `IP(s)`, `backups`, `hostname`, `Node`) VALUES
(1, 'Linux VPS - Linux 8', '14.99 EUR', 'Monthly', 'Processor: 2 x 2.6 GHz\r\nMemory: 8192 MB\r\nStorage: 80 GB\r\nBandwidth: 1000 Mbps (Monthly limit: 16 TB)', '5x Faster SSD storage ( 1.00 EUR )\r\n1 Gbps port speed ( 1.00 EUR )', '582.148552.485', '', 'mikina.r.times4.kal', 'k10-c1-lt1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allservice`
--
ALTER TABLE `allservice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allservice`
--
ALTER TABLE `allservice`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
