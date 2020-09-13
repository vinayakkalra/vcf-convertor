-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 08:11 PM
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
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `from_ip` varchar(255) NOT NULL,
  `from_browser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `customer_id`, `product_name`, `time`, `from_ip`, `from_browser`) VALUES
(1, 28, 'pro', 'Mon, 07 Sep 2020 10:49:18 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.83 Safari/537.36');

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
(28, 'admin2@gmail.com', '999999999', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 'Sun, 06 Sep 2020 01:33:59 +0530', '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.83 Mobile Safari/537.36');

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
(25, 'uploads/Names.xls', 'Sun, 13 Sep 2020 23:29:03 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `vcf_data`
--

CREATE TABLE `vcf_data` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `tel_office` varchar(255) DEFAULT NULL,
  `tel_home` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `round` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vcf_data`
--

INSERT INTO `vcf_data` (`id`, `first_name`, `last_name`, `email`, `mobile`, `tel_office`, `tel_home`, `fax`, `city`, `nickname`, `company_name`, `address`, `website`, `birthday`, `round`) VALUES
(1, 'Ajamil ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '101', '', '', '', 100),
(2, 'Ainesh ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '100', '', '', '', 100),
(3, 'Aiman ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '99', '', '', '', 100),
(4, 'Aijaz ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '98', '', '', '', 100),
(5, 'Ahsan ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '97', '', '', '', 100),
(6, 'Ahmad ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '96', '', '', '', 100),
(7, 'Ahilan ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '95', '', '', '', 100),
(8, 'Ahijit ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '94', '', '', '', 100),
(9, 'Agriya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '93', '', '', '', 100),
(10, 'Agrim ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '92', '', '', '', 100),
(11, 'Agniprava ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '91', '', '', '', 100),
(12, 'Agnikumara ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '90', '', '', '', 100),
(13, 'Agneya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '89', '', '', '', 100),
(14, 'Aghat ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '88', '', '', '', 100),
(15, 'Agharna ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '87', '', '', '', 100),
(16, 'Agha ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '86', '', '', '', 100),
(17, 'Agendra ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '85', '', '', '', 100),
(18, 'Agasti, Agastya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '84', '', '', '', 100),
(19, 'Aftab,Aftaab ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '83', '', '', '', 100),
(20, 'Adwaya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '82', '', '', '', 100),
(21, 'Adway ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '81', '', '', '', 100),
(22, 'Adwaita ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '80', '', '', '', 100),
(23, 'Adripathi ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '79', '', '', '', 100),
(24, 'Adityavardhana', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '78', '', '', '', 100),
(25, 'Adityanandana ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '77', '', '', '', 100),
(26, 'Aditya', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '76', '', '', '', 100),
(27, 'Aditeya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '75', '', '', '', 100),
(28, 'Adit ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '74', '', '', '', 100),
(29, 'Adinath ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '73', '', '', '', 100),
(30, 'Adil ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '72', '', '', '', 100),
(31, 'Adikavi ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '71', '', '', '', 100),
(32, 'Adhita ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '70', '', '', '', 100),
(33, 'Adhipa ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '69', '', '', '', 100),
(34, 'Adhikara ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '68', '', '', '', 100),
(35, 'Adhik ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '67', '', '', '', 100),
(36, 'Adesh ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '66', '', '', '', 100),
(37, 'Adarsh ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '65', '', '', '', 100),
(38, 'Adalarasu ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '64', '', '', '', 100),
(39, 'Acyutaraya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '63', '', '', '', 100),
(40, 'Acintya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '62', '', '', '', 100),
(41, 'Achyuta', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '61', '', '', '', 100),
(42, 'Achyut ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '60', '', '', '', 100),
(43, 'Achintya', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '59', '', '', '', 100),
(44, 'Achal ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '58', '', '', '', 100),
(45, 'Acchindra ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '57', '', '', '', 100),
(46, 'Acaryatanaya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '56', '', '', '', 100),
(47, 'Acaryasuta ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '55', '', '', '', 100),
(48, 'Acaryanandana ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '54', '', '', '', 100),
(49, 'Acarya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '53', '', '', '', 100),
(50, 'Acanda ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '52', '', '', '', 100),
(51, 'Acalesvara ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '51', '', '', '', 100),
(52, 'Acalendra ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '50', '', '', '', 100),
(53, 'Acalapati ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '49', '', '', '', 100),
(54, 'Abjit ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '48', '', '', '', 100),
(55, 'Abjayoni ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '47', '', '', '', 100),
(56, 'Abhyudita ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '46', '', '', '', 100),
(57, 'Abhyudaya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '45', '', '', '', 100),
(58, 'Abhyagni ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '44', '', '', '', 100),
(59, 'Abhrakasin ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '43', '', '', '', 100),
(60, 'Abhra ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '42', '', '', '', 100),
(61, 'Abhivira ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '41', '', '', '', 100),
(62, 'Abhisyanta ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '40', '', '', '', 100),
(63, 'Abhisumat ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '39', '', '', '', 100),
(64, 'Abhisoka ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '38', '', '', '', 100),
(65, 'Abhishek', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '37', '', '', '', 100),
(66, 'Abhirup ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '36', '', '', '', 100),
(67, 'Abhinava ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '35', '', '', '', 100),
(68, 'Abhinav', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '34', '', '', '', 100),
(69, 'Abhinatha', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '33', '', '', '', 100),
(70, 'Abhinandana', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '32', '', '', '', 100),
(71, 'Abhinanda ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '31', '', '', '', 100),
(72, 'Abhinabhas ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '30', '', '', '', 100),
(73, 'Abhimoda ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '29', '', '', '', 100),
(74, 'Abhimanyusuta ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '28', '', '', '', 100),
(75, 'Abhimanyu ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '27', '', '', '', 100),
(76, 'Abhimani ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '26', '', '', '', 100),
(77, 'Abhimand ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '25', '', '', '', 100),
(78, 'Abhilash ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '24', '', '', '', 100),
(79, 'Abhijvala ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '23', '', '', '', 100),
(80, 'Abhijit', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '22', '', '', '', 100),
(81, 'Abhijaya ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '21', '', '', '', 100),
(82, 'Abhijat', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '20', '', '', '', 100),
(83, 'Abhihita ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '19', '', '', '', 100),
(84, 'Abhidi ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '18', '', '', '', 100),
(85, 'Abhicandra ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '17', '', '', '', 100),
(86, 'Abhibhava ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '16', '', '', '', 100),
(87, 'Abhi ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '15', '', '', '', 100),
(88, 'Abheek ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '14', '', '', '', 100),
(89, 'Abhayaprada ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '13', '', '', '', 100),
(90, 'Abhayananda ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '12', '', '', '', 100),
(91, 'Abhay', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '11', '', '', '', 100),
(92, 'Abeer ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '10', '', '', '', 100),
(93, 'Aashish ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '9', '', '', '', 100),
(94, 'Aandaleeb ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '8', '', '', '', 100),
(95, 'Aalap ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '7', '', '', '', 100),
(96, 'Aakash ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '6', '', '', '', 100),
(97, 'Aakar ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '5', '', '', '', 100),
(98, 'Aafreen ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '4', '', '', '', 100),
(99, 'Aadi', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '3', '', '', '', 100),
(100, 'Aadesh ', 'sharma', 'abc@gmail.com', '9874561122', '', '', '221002', 'varanasi', '', '2', '', '', '', 100);

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
-- Indexes for table `vcf_data`
--
ALTER TABLE `vcf_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup-details`
--
ALTER TABLE `signup-details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `table_excel`
--
ALTER TABLE `table_excel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `vcf_data`
--
ALTER TABLE `vcf_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
