-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 03:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataproject68`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(3) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `job_detail` text NOT NULL,
  `job_welfare` varchar(200) NOT NULL,
  `job_salary` varchar(50) NOT NULL,
  `job_wb` text NOT NULL,
  `job_status` int(11) NOT NULL DEFAULT 0,
  `id_dst` int(3) NOT NULL,
  `job_cpid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `job_detail`, `job_welfare`, `job_salary`, `job_wb`, `job_status`, `id_dst`, `job_cpid`) VALUES
(2, 'ขายของ', 'ขายสินค้า', 'ข้าวฟรี', '10000', '3', 1, 4, 15),
(3, 'ขายของ', 'ขายสินค้า', 'ข้าวฟรี', '10000', '3', 1, 4, 15),
(4, 'ขายของ', 'ขายสินค้า', 'ข้าวฟรี', '20000', '3', 1, 6, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
