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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cp_id` int(11) NOT NULL,
  `cp_name` text NOT NULL,
  `cp_address` varchar(100) NOT NULL,
  `cp_phone` varchar(10) NOT NULL,
  `cp_email` varchar(50) NOT NULL,
  `cp_user` varchar(13) DEFAULT NULL,
  `cp_password` varchar(30) DEFAULT NULL,
  `cp_picture` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cp_id`, `cp_name`, `cp_address`, `cp_phone`, `cp_email`, `cp_user`, `cp_password`, `cp_picture`) VALUES
(11, 'iuyt', 'yt gg jj jj ee tt cc ee', '0933490568', 'panatsaya7288@gmail.com', '2147483647', '12345', '11.jpg'),
(12, '', '', '', '', NULL, NULL, NULL),
(13, 'hgf', 'ff sws gg er 76 dd hj yy', '0933490568', 'panatsaya7288@gmail.com', '2147483647', '1234', '13.jpg'),
(14, 'ซ่อมคอมนาย เป่ง', 'tt tt tt tt tt tt tt tt', '0933490568', 'panatsaya7288@gmail.com', '2147483647', '12345', '14.jpg'),
(15, 'เป่ง', '9 4 66 999888 เมืองกระบี่ เมืองเก่าใหม่ ภูเก็ต 555555', '0933490568', 'panatsaya7288@gmail.com', '1234567890123', '12345', '15_1738731392.jpg'),
(16, 'ปนัสยา แรกคำนวน', '7 4 f เมืองเก่า f เมือง กระบี่ 433322', '0933490568', 'panatsaya7488@gmail.com', '2222222222', '12345', '16.jpg'),
(17, 'v', 'v v v v v v v v', '0933490568', 'panatsaya7288@gmail.com', '7777777777777', '12345', '17.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
