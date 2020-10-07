-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 11:16 AM
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
-- Table structure for table `orders_event_razorpay`
--

CREATE TABLE `orders_event_razorpay` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `razorpay_payment_id` varchar(200) NOT NULL,
  `capture_status` varchar(255) NOT NULL,
  `date_now` varchar(200) NOT NULL,
  `from_ip` varchar(200) NOT NULL,
  `from_browser` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_event_razorpay`
--

INSERT INTO `orders_event_razorpay` (`id`, `name`, `email`, `phone`, `address`, `eventname`, `amount`, `razorpay_payment_id`, `capture_status`, `date_now`, `from_ip`, `from_browser`, `status`) VALUES
(1, 'Chandan Vishwakarma', 'sbitosbi@gmail.com', '2323232323', 'narayanpur', 'VCF50', '50', 'pay_FlxSbswW2xeBqi', 'Captured', 'Wed, 07 Oct 2020 14:44:34 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'paid'),
(2, 'Chandan Vishwakarma', 'sbitosbi@gmail.com', '2323232323', 'narayanpur', 'VCF100', '100', 'pay_FlxTNzXbpjgFDw', 'Captured', 'Wed, 07 Oct 2020 14:45:19 +0530', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders_event_razorpay`
--
ALTER TABLE `orders_event_razorpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders_event_razorpay`
--
ALTER TABLE `orders_event_razorpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
