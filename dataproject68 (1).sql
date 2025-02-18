-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 03:43 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(3) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_username` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `a_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`) VALUES
(1, 'ศุภวิชญ์', 'host', '1234');

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

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `m_id` int(3) NOT NULL,
  `m_cpid` int(3) NOT NULL,
  `m_uid` int(3) NOT NULL,
  `m_jid` int(3) NOT NULL,
  `m_text` text NOT NULL,
  `m_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `disability`
--
ALTER TABLE `disability`
  ADD PRIMARY KEY (`id_dst`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `regisjob`
--
ALTER TABLE `regisjob`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `typejob`
--
ALTER TABLE `typejob`
  ADD PRIMARY KEY (`id_tpjob`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `disability`
--
ALTER TABLE `disability`
  MODIFY `id_dst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `m_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regisjob`
--
ALTER TABLE `regisjob`
  MODIFY `r_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `typejob`
--
ALTER TABLE `typejob`
  MODIFY `id_tpjob` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
