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
-- Table structure for table `disability`
--

CREATE TABLE `disability` (
  `id_dst` int(11) NOT NULL,
  `name_dst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `disability`
--

INSERT INTO `disability` (`id_dst`, `name_dst`) VALUES
(2, 'ความพิการทางการเห็น\r\n'),
(3, 'ความพิการทางการได้ยินหรือสื่อความหมาย'),
(4, 'ความพิการทางการเคลื่อนไหวหรือทางร่างกาย'),
(5, 'ความพิการทางจิตใจหรือพฤติกรรม'),
(6, 'ความพิการทางสติปัญญา'),
(7, 'ความพิการทางการเรียนรู้'),
(8, 'ความพิการทางออทิสติก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disability`
--
ALTER TABLE `disability`
  ADD PRIMARY KEY (`id_dst`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disability`
--
ALTER TABLE `disability`
  MODIFY `id_dst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
