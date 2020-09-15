-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 05:05 AM
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
-- Table structure for table `signup-details`
--

CREATE TABLE `signup-details` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup-details`
--

INSERT INTO `signup-details` (`id`, `email`, `mobile`, `password`, `time`, `from_ip`, `from_browser`) VALUES
(28, 'admin2@gmail.com', '999999999', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 'Sun, 06 Sep 2020 01:33:59 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.83 Mobile Safari/537.36'),
(29, 'new@gmail.com', '123456789', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 'Mon, 14 Sep 2020 16:49:53 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36');

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
(1, 'uploads/Names.xls', 'Sun, 13 Sep 2020 21:27:10 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(2, 'uploads/Names.xls', 'Sun, 13 Sep 2020 21:29:42 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(3, 'uploads/Names.xls', 'Sun, 13 Sep 2020 21:30:25 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(4, 'uploads/Names.xls', 'Sun, 13 Sep 2020 21:40:46 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(5, 'uploads/Names.xls', 'Sun, 13 Sep 2020 21:48:09 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(6, 'uploads/Names.xls', 'Sun, 13 Sep 2020 21:54:16 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(7, 'uploads/Names.xls', 'Sun, 13 Sep 2020 21:56:40 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(8, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:05:08 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(9, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:06:10 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(10, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:07:15 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(11, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:07:57 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(12, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:09:28 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(13, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:11:52 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(14, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:21:28 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(15, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:23:26 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(16, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:30:00 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(17, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:35:39 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(18, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:39:10 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(19, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:40:07 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(20, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:49:25 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(21, 'uploads/Names.xls', 'Sun, 13 Sep 2020 22:50:57 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(22, 'uploads/Names.xls', 'Sun, 13 Sep 2020 23:08:35 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(23, 'uploads/Names.xls', 'Sun, 13 Sep 2020 23:26:51 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(24, 'uploads/Names.xls', 'Sun, 13 Sep 2020 23:28:21 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(25, 'uploads/Names.xls', 'Sun, 13 Sep 2020 23:29:03 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(26, 'uploads/Names.xls', 'Sun, 13 Sep 2020 23:59:24 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(27, 'uploads/Names.xls', 'Mon, 14 Sep 2020 07:51:51 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(28, 'uploads/Names.xls', 'Mon, 14 Sep 2020 08:52:58 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(29, 'uploads/Names.xls', 'Mon, 14 Sep 2020 08:53:34 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(30, 'uploads/Names.xls', 'Mon, 14 Sep 2020 09:30:05 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(31, 'uploads/data - Copy (2).csv', 'Mon, 14 Sep 2020 09:35:20 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(32, 'uploads/Names.xls', 'Mon, 14 Sep 2020 10:05:20 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko'),
(33, 'uploads/Names.xls', 'Mon, 14 Sep 2020 10:07:11 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko'),
(34, 'uploads/Names.xls', 'Mon, 14 Sep 2020 10:23:19 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(35, 'uploads/Names.xls', 'Mon, 14 Sep 2020 10:24:39 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(36, 'uploads/Names.xls', 'Mon, 14 Sep 2020 10:44:41 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(37, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:23:36 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(38, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:27:24 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(39, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:28:35 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(40, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:29:44 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(41, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:31:05 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(42, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:32:01 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(43, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:34:10 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(44, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:36:24 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(45, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:38:28 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(46, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:39:09 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(47, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:41:03 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(48, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:46:11 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(49, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:47:04 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(50, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:48:18 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(51, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:49:11 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(52, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:49:48 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(53, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:50:44 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(54, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:52:42 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(55, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:54:09 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(56, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:55:54 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(57, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:58:19 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(58, 'uploads/Names.xls', 'Mon, 14 Sep 2020 11:59:33 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(59, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:05:58 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(60, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:08:12 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(61, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:08:49 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(62, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:10:32 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(63, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:13:06 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(64, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:14:37 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(65, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:15:53 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(66, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:18:02 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(67, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:19:36 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(68, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:25:24 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(69, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:27:27 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(70, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:47:48 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(71, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:48:28 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(72, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:52:03 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(73, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:53:00 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(74, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:54:51 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(75, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:57:14 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(76, 'uploads/Names.xls', 'Mon, 14 Sep 2020 12:58:09 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(77, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:00:52 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(78, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:01:38 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(79, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:04:52 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(80, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:06:08 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(81, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:08:27 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(82, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:10:42 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(83, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:16:56 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(84, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:19:31 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(85, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:25:34 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(86, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:26:47 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(87, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:28:15 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(88, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:29:23 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(89, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:30:10 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(90, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:33:37 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(91, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:35:02 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(92, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:36:43 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(93, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:39:47 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(94, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:42:56 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(95, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:46:00 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(96, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:52:06 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(97, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:55:00 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(98, 'uploads/Names.xls', 'Mon, 14 Sep 2020 13:59:09 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(99, 'uploads/data.xlsx', 'Mon, 14 Sep 2020 14:12:43 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(100, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:14:22 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(101, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:15:54 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(102, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:17:00 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(103, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:18:39 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(104, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:19:40 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(105, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:21:23 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(106, 'uploads/data.xlsx', 'Mon, 14 Sep 2020 14:28:39 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0'),
(107, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:32:11 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0'),
(108, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:38:23 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(109, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:43:56 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(110, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:45:18 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(111, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:57:18 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(112, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:58:50 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(113, 'uploads/Names.xls', 'Mon, 14 Sep 2020 14:59:41 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(114, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:01:11 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(115, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:03:22 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(116, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:04:15 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(117, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:06:13 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(118, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:08:48 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(119, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:11:33 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(120, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:14:50 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(121, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:16:15 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(122, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:17:22 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(123, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:18:55 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(124, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:21:28 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(125, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:23:34 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(126, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:29:45 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(127, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:32:30 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(128, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:33:59 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(129, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:36:50 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(130, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:38:42 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(131, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:40:16 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(132, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:44:13 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(133, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:45:45 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(134, 'uploads/Names.xls', 'Mon, 14 Sep 2020 15:54:41 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(135, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:16:10 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(136, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:18:22 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(137, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:18:23 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(138, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:25:32 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(139, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:27:09 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(140, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:28:22 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(141, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:34:04 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:80.0) Gecko/20100101 Firefox/80.0'),
(142, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:38:02 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(143, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:42:40 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(144, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:50:01 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(145, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:53:28 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(146, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:54:02 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(147, 'uploads/Names.xls', 'Mon, 14 Sep 2020 16:59:12 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(148, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:01:29 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(149, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:04:03 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(150, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:04:55 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(151, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:29:39 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(152, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:30:53 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(153, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:36:44 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(154, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:39:23 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(155, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:47:09 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(156, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:48:07 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(157, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:50:02 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(158, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:51:02 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(159, 'uploads/Names.xls', 'Mon, 14 Sep 2020 17:52:26 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(160, 'uploads/Names.xls', 'Mon, 14 Sep 2020 18:00:14 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(161, 'uploads/Names.xls', 'Mon, 14 Sep 2020 18:01:00 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(162, 'uploads/Names.xls', 'Mon, 14 Sep 2020 18:04:25 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(163, 'uploads/Names.xls', 'Mon, 14 Sep 2020 18:06:18 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(164, 'uploads/Names.xls', 'Mon, 14 Sep 2020 18:56:02 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(165, 'uploads/Names.xls', 'Mon, 14 Sep 2020 18:57:28 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(166, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:29:43 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(167, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:32:19 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(168, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:34:06 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(169, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:47:08 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(170, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:47:58 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(171, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:49:30 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(172, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:50:15 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(173, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:51:19 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(174, 'uploads/Names.xls', 'Mon, 14 Sep 2020 19:52:58 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(175, 'uploads/Names.xls', 'Mon, 14 Sep 2020 20:38:57 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(176, 'uploads/Names.xls', 'Mon, 14 Sep 2020 20:40:22 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(177, 'uploads/Names.xls', 'Mon, 14 Sep 2020 20:41:48 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(178, 'uploads/Names.xls', 'Mon, 14 Sep 2020 20:42:30 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(179, 'uploads/Names.xls', 'Mon, 14 Sep 2020 21:20:46 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(180, 'uploads/Names.xls', 'Mon, 14 Sep 2020 21:21:24 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(181, 'uploads/Names.xls', 'Mon, 14 Sep 2020 21:22:33 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(182, 'uploads/Names.xls', 'Mon, 14 Sep 2020 21:59:47 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(183, 'uploads/Names.xls', 'Mon, 14 Sep 2020 22:01:07 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(184, 'uploads/Names.xls', 'Mon, 14 Sep 2020 22:03:56 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(185, 'uploads/Names.xls', 'Mon, 14 Sep 2020 22:17:48 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(186, 'uploads/Names.xls', 'Mon, 14 Sep 2020 22:28:27 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(187, 'uploads/Names.xls', 'Mon, 14 Sep 2020 22:57:53 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(188, 'uploads/Names.xls', 'Mon, 14 Sep 2020 22:58:14 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(189, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:02:03 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(190, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:03:03 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(191, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:03:19 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'),
(192, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:06:30 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(193, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:07:43 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(194, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:09:15 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(195, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:09:36 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(196, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:12:07 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(197, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:13:57 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(198, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:18:28 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(199, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:19:32 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(200, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:24:14 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(201, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:24:36 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(202, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:38:17 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(203, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:39:37 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(204, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:49:25 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(205, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:54:31 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(206, 'uploads/Names.xls', 'Mon, 14 Sep 2020 23:57:01 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(207, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:01:27 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(208, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:03:40 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(209, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:04:51 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(210, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:11:34 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(211, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:14:53 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0.1; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(212, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:24:49 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(213, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:29:48 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(214, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:44:43 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(215, 'uploads/Names.xls', 'Tue, 15 Sep 2020 00:46:00 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(216, 'uploads/Names.xls', 'Tue, 15 Sep 2020 01:34:26 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(217, 'uploads/Names.xls', 'Tue, 15 Sep 2020 01:37:11 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(218, 'uploads/Names.xls', 'Tue, 15 Sep 2020 01:37:47 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(219, 'uploads/Names.xls', 'Tue, 15 Sep 2020 01:38:16 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36'),
(220, 'uploads/Names.xls', 'Tue, 15 Sep 2020 01:41:33 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup-details`
--
ALTER TABLE `signup-details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_excel`
--
ALTER TABLE `table_excel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup-details`
--
ALTER TABLE `signup-details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `table_excel`
--
ALTER TABLE `table_excel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
