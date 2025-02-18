-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 03:47 PM
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
-- Table structure for table `typejob`
--

CREATE TABLE `typejob` (
  `id_tpjob` int(3) NOT NULL,
  `name_tpjob` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typejob`
--

INSERT INTO `typejob` (`id_tpjob`, `name_tpjob`) VALUES
(1, 'พนักงานธุรการ'),
(2, 'พนักงานบันทึกข้อมูล'),
(3, 'พนักงานขาย'),
(4, 'พนักงานบัญชี'),
(5, 'พนักงานฝ่ายผลิต\r\n'),
(6, 'พนักงานคลังสินค้า'),
(7, 'พนักงานตรวจสอบคุณภาพ'),
(8, 'พนักงานซักรีด'),
(9, 'ช่างเชื่อม'),
(10, 'เจ้าหน้าที่บริการงานช่าง (ช่างทั่วไป)'),
(11, 'เจ้าหน้าที่คอมพิวเตอร์'),
(12, 'งานประชาสัมพันธ์'),
(13, 'งานบริการทั่วไป'),
(14, 'งานด้านเกษตร'),
(15, 'งานด้านการค้า'),
(16, 'ผู้ช่วยแม่บ้าน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `typejob`
--
ALTER TABLE `typejob`
  ADD PRIMARY KEY (`id_tpjob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `typejob`
--
ALTER TABLE `typejob`
  MODIFY `id_tpjob` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
