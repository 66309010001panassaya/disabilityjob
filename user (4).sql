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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_tel` int(10) NOT NULL,
  `u_address` text NOT NULL,
  `u_education` varchar(20) NOT NULL,
  `u_sex` varchar(20) NOT NULL,
  `u_birtdate` date NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `id_dst` int(10) NOT NULL,
  `u_img` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_tel`, `u_address`, `u_education`, `u_sex`, `u_birtdate`, `u_email`, `u_username`, `u_password`, `id_dst`, `u_img`) VALUES
(3, 'ปนัสยา แรกคำนวน', 933490568, '7 4 - - คลองเขม้า เหนือคลอง กระบี่ 81130', 'ประกาศนียบัตรวิชาชีพ', 'หญิง', '2017-06-08', 'panatsaya7288@gmail.com', '111111111111', '123456789', 4, '3.jpg'),
(4, 'ปนัสยา แรกคำนวน', 933490568, '7 4 f เมืองเก่า cvvv เมือง กระบี่ 433322', 'ประกาศนียบัตรวิชาชีพ', 'ชาย', '2023-11-15', 'sawitree@gmail.com', '1234567890123', '12345', 2, '4.jpg'),
(5, 'ปนัสยา แรกคำนวน', 933490568, 'y y y y y y y y', 'มัธยมต้น', 'หญิง', '2019-07-24', 'bbfixly05@gmail.com', '1111111111111', '1234', 2, '5_173'),
(6, 'l', 933490568, 'b t g r f b 4 2', 'มัธยมต้น', 'ชาย', '2025-02-21', 'panatsaya7488@gmail.com', '2222222222222', '123', 2, '6_173'),
(7, 'ปนัสยา แรกคำนวน', 111111111, '7 4 f เมืองเก่า e เหนือคลอง กระบี่ 433322', 'ประกาศนียบัตรวิชาชีพ', 'หญิง', '2025-02-15', 'sawitree@gmail.com', '9999999999999', '12345', 3, '7_173');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
