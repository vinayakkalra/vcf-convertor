-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 08:08 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcfconverter`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_excel`
--

CREATE TABLE `table_excel` (
  `id` int(255) NOT NULL,
  `excel` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_excel`
--

INSERT INTO `table_excel` (`id`, `excel`, `time`, `from_ip`, `from_browser`) VALUES
(1, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 16:18:27 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(2, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 16:31:36 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(3, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 16:55:46 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(4, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 16:56:41 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(5, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 16:57:04 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(6, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 16:59:29 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(7, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 17:14:19 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(8, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 17:14:48 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(9, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 17:22:26 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(10, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 17:25:40 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(11, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 17:27:07 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(12, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 17:27:35 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(13, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 17:28:44 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(14, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 17:29:05 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(15, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 17:29:22 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(16, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 17:31:23 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(17, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 17:34:08 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(18, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 17:35:18 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(19, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 17:36:29 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(20, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 17:37:32 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(21, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 17:40:36 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(22, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 17:42:49 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(23, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 17:43:11 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(24, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 17:47:24 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(25, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 17:50:49 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(26, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 17:53:18 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(27, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 21:38:21 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(28, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 21:39:30 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(29, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 21:40:04 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(30, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 21:43:44 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(31, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 21:54:30 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(32, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 22:06:23 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(33, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 22:09:19 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(34, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 22:16:11 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(35, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 22:17:16 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(36, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 22:30:58 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(37, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 22:33:59 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(38, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 22:35:32 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(39, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 22:45:57 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(40, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 22:48:53 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(41, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 22:51:17 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(42, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 22:52:32 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(43, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 22:53:24 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(44, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 23:13:08 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(45, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 23:13:23 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(46, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 23:14:36 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(47, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 23:15:00 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(48, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 23:15:51 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(49, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 23:17:24 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(50, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 23:24:02 +0530', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(51, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 23:24:42 +0530', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(52, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 23:28:13 +0530', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(53, 'uploads/OutputVCF (1).csv', 'Mon, 31 Aug 2020 23:29:20 +0530', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(54, 'uploads/OutputVCF (2).csv', 'Mon, 31 Aug 2020 23:29:56 +0530', '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Mobile Safari/537.36'),
(55, 'uploads/OutputVCF.csv', 'Mon, 31 Aug 2020 23:33:32 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36'),
(56, 'uploads/data.xlsx', 'Mon, 31 Aug 2020 23:34:09 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_excel`
--
ALTER TABLE `table_excel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_excel`
--
ALTER TABLE `table_excel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
