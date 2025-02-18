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
-- Table structure for table `regisjob`
--

CREATE TABLE `regisjob` (
  `r_id` int(3) NOT NULL,
  `r_uid` int(3) NOT NULL,
  `r_jid` int(3) NOT NULL,
  `r_status` int(1) NOT NULL DEFAULT 0,
  `r_date` datetime NOT NULL,
  `r_img` varchar(30) NOT NULL DEFAULT 'resume.jpg',
  `r_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regisjob`
--

INSERT INTO `regisjob` (`r_id`, `r_uid`, `r_jid`, `r_status`, `r_date`, `r_img`, `r_text`) VALUES
(2, 7, 4, 0, '2025-02-17 11:23:25', '202502171123257.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regisjob`
--
ALTER TABLE `regisjob`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regisjob`
--
ALTER TABLE `regisjob`
  MODIFY `r_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
