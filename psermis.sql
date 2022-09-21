-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 07:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psermis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varbinary(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 0x6639323539313665323735346535653033663735646435386135373333323531, '2017-05-13 11:18:49'),
(2, 'admin', 0x3566346463633362356161373635643631643833323764656238383263663939, '2017-10-01 07:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_info`
--

CREATE TABLE `contact_form_info` (
  `id` int(11) NOT NULL,
  `your_name` varchar(100) NOT NULL,
  `your_email` varchar(100) NOT NULL,
  `your_phone` varchar(15) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) NOT NULL,
  `Term` varchar(5) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Term`, `CreationDate`) VALUES
(1, 'eight', 8, '2', '2018-12-27 09:52:00'),
(2, 'One', 1, '2', '2018-12-31 14:09:23'),
(5, 'Two', 2, '1', '2019-01-17 06:25:26'),
(6, 'Three', 3, '1', '2019-01-17 06:25:45'),
(7, 'Four', 4, '1', '2019-01-17 06:26:06'),
(8, 'Five', 5, '1', '2019-01-17 06:26:21'),
(9, 'Six', 6, '1', '2019-01-17 06:26:34'),
(10, 'Seven', 7, '1', '2019-01-17 06:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `ExamId` int(10) NOT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `ExamId`, `SubjectId`, `marks`, `PostingDate`) VALUES
(1, 1, 1, 0, 1, 89, '2018-12-27 09:57:25'),
(2, 1, 1, 0, 3, 67, '2018-12-27 09:57:25'),
(3, 1, 1, 0, 2, 78, '2018-12-27 09:57:25'),
(4, 1, 1, 0, 5, 90, '2018-12-27 09:57:25'),
(5, 1, 1, 0, 4, 67, '2018-12-27 09:57:25'),
(6, 4, 3, 0, 1, 78, '2019-01-09 09:38:46'),
(7, 4, 3, 0, 3, 67, '2019-01-09 09:38:46'),
(8, 4, 3, 0, 2, 90, '2019-01-09 09:38:46'),
(9, 4, 3, 0, 5, 87, '2019-01-09 09:38:46'),
(10, 4, 3, 0, 4, 79, '2019-01-09 09:38:46'),
(11, 5, 3, 0, 1, 67, '2019-01-10 08:16:32'),
(12, 5, 3, 0, 3, 45, '2019-01-10 08:16:32'),
(13, 5, 3, 0, 2, 89, '2019-01-10 08:16:32'),
(14, 5, 3, 0, 5, 78, '2019-01-10 08:16:32'),
(15, 5, 3, 0, 4, 90, '2019-01-10 08:16:32'),
(16, 5, 3, 0, 1, 67, '2019-01-10 08:20:44'),
(17, 5, 3, 0, 3, 45, '2019-01-10 08:20:44'),
(18, 5, 3, 0, 2, 89, '2019-01-10 08:20:44'),
(19, 5, 3, 0, 5, 78, '2019-01-10 08:20:44'),
(20, 5, 3, 0, 4, 90, '2019-01-10 08:20:44'),
(21, 5, 3, 0, 1, 67, '2019-01-10 08:22:23'),
(22, 5, 3, 0, 3, 45, '2019-01-10 08:22:23'),
(23, 5, 3, 0, 2, 89, '2019-01-10 08:22:23'),
(24, 5, 3, 0, 5, 78, '2019-01-10 08:22:23'),
(25, 5, 3, 0, 4, 90, '2019-01-10 08:22:23'),
(26, 5, 3, 0, 1, 67, '2019-01-10 08:23:43'),
(27, 5, 3, 0, 3, 45, '2019-01-10 08:23:43'),
(28, 5, 3, 0, 2, 89, '2019-01-10 08:23:43'),
(29, 5, 3, 0, 5, 78, '2019-01-10 08:23:43'),
(30, 5, 3, 0, 4, 90, '2019-01-10 08:23:43'),
(31, 5, 3, 0, 1, 67, '2019-01-10 08:24:22'),
(32, 5, 3, 0, 3, 45, '2019-01-10 08:24:22'),
(33, 5, 3, 0, 2, 89, '2019-01-10 08:24:22'),
(34, 5, 3, 0, 5, 78, '2019-01-10 08:24:22'),
(35, 5, 3, 0, 4, 90, '2019-01-10 08:24:22'),
(36, 5, 3, 0, 1, 67, '2019-01-10 08:26:26'),
(37, 5, 3, 0, 3, 45, '2019-01-10 08:26:26'),
(38, 5, 3, 0, 2, 89, '2019-01-10 08:26:26'),
(39, 5, 3, 0, 5, 78, '2019-01-10 08:26:26'),
(40, 5, 3, 0, 4, 90, '2019-01-10 08:26:26'),
(41, 5, 3, 0, 1, 67, '2019-01-10 08:28:26'),
(42, 5, 3, 0, 3, 45, '2019-01-10 08:28:27'),
(43, 5, 3, 0, 2, 89, '2019-01-10 08:28:27'),
(44, 5, 3, 0, 5, 78, '2019-01-10 08:28:27'),
(45, 5, 3, 0, 4, 90, '2019-01-10 08:28:27'),
(46, 6, 3, 0, 1, 67, '2019-01-12 20:28:24'),
(47, 6, 3, 0, 3, 78, '2019-01-12 20:28:24'),
(48, 6, 3, 0, 2, 45, '2019-01-12 20:28:24'),
(49, 6, 3, 0, 5, 56, '2019-01-12 20:28:24'),
(50, 6, 3, 0, 4, 54, '2019-01-12 20:28:24'),
(51, 7, 3, 0, 1, 65, '2019-01-12 20:28:55'),
(52, 7, 3, 0, 3, 54, '2019-01-12 20:28:55'),
(53, 7, 3, 0, 2, 46, '2019-01-12 20:28:55'),
(54, 7, 3, 0, 5, 78, '2019-01-12 20:28:55'),
(55, 7, 3, 0, 4, 43, '2019-01-12 20:28:55'),
(56, 8, 3, 0, 1, 67, '2019-01-16 11:03:14'),
(57, 8, 3, 0, 3, 60, '2019-01-16 11:03:14'),
(58, 8, 3, 0, 2, 56, '2019-01-16 11:03:14'),
(59, 8, 3, 0, 5, 58, '2019-01-16 11:03:14'),
(60, 8, 3, 0, 4, 64, '2019-01-16 11:03:14'),
(61, 9, 7, 0, 1, 54, '2019-01-17 06:33:35'),
(62, 9, 7, 0, 3, 81, '2019-01-17 06:33:35'),
(63, 9, 7, 0, 2, 52, '2019-01-17 06:33:35'),
(64, 9, 7, 0, 5, 36, '2019-01-17 06:33:35'),
(65, 9, 7, 0, 4, 50, '2019-01-17 06:33:36'),
(66, 10, 8, 0, 1, 56, '2019-02-07 09:27:19'),
(67, 10, 8, 0, 3, 76, '2019-02-07 09:27:20'),
(68, 10, 8, 0, 2, 50, '2019-02-07 09:27:20'),
(69, 10, 8, 0, 5, 72, '2019-02-07 09:27:20'),
(70, 10, 8, 0, 4, 60, '2019-02-07 09:27:20'),
(71, 11, 7, 0, 1, 68, '2019-03-30 09:09:20'),
(72, 11, 7, 0, 1, 60, '2019-03-30 09:09:21'),
(73, 11, 7, 0, 3, 71, '2019-03-30 09:09:21'),
(74, 11, 7, 0, 2, 80, '2019-03-30 09:09:21'),
(75, 11, 7, 0, 5, 50, '2019-03-30 09:09:21'),
(76, 12, 1, 0, 1, 56, '2019-05-23 17:35:09'),
(77, 12, 1, 0, 3, 50, '2019-05-23 17:35:09'),
(78, 12, 1, 0, 2, 60, '2019-05-23 17:35:09'),
(79, 12, 1, 0, 5, 67, '2019-05-23 17:35:09'),
(80, 12, 1, 0, 4, 53, '2019-05-23 17:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(1) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`, `photo`) VALUES
(4, 'john ndoe', '3456', 'Male', '2000-03-28', 3, '2019-01-09 09:36:03', NULL, 1, ''),
(5, 'mike musyoki', '1800', 'Male', '1998-02-03', 3, '2019-01-10 08:13:56', NULL, 1, ''),
(8, 'Prince Masailo', 'BIT/0018/15', 'Male', '2002-05-24', 3, '2019-01-13 18:38:31', NULL, 1, 'p1.jpg'),
(9, 'Kioko J. Mwendwa', '1000', 'Male', '2008-02-17', 7, '2019-01-17 06:32:41', NULL, 1, ''),
(10, 'Dennis Kiprotich', 'Bit/0023/15', 'Male', '2019-01-15', 8, '2019-01-18 06:41:28', NULL, 1, ''),
(11, 'David Nzomo', 'BIT/0021/15', 'Male', '2003-11-03', 7, '2019-01-28 07:39:14', NULL, 1, 'IMG_20181114_124617 (2).jpg'),
(12, 'stephen wambua', '2018', 'Male', '30/10/1995', 1, '2019-05-23 17:33:45', NULL, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`) VALUES
(1, 1, 1, 1, '2018-12-27 09:56:11'),
(2, 1, 2, 1, '2018-12-27 09:56:20'),
(3, 1, 3, 1, '2018-12-27 09:56:28'),
(4, 1, 4, 1, '2018-12-27 09:56:38'),
(5, 1, 5, 1, '2018-12-27 09:56:47'),
(6, 3, 1, 1, '2019-01-09 09:37:14'),
(7, 3, 2, 1, '2019-01-09 09:37:22'),
(8, 3, 3, 1, '2019-01-09 09:37:31'),
(9, 3, 4, 1, '2019-01-09 09:37:39'),
(10, 3, 5, 1, '2019-01-09 09:37:48'),
(11, 7, 1, 1, '2019-01-17 06:27:34'),
(12, 7, 2, 1, '2019-01-17 06:27:44'),
(13, 7, 3, 1, '2019-01-17 06:27:50'),
(14, 7, 4, 1, '2019-01-17 06:27:57'),
(15, 7, 5, 1, '2019-01-17 06:28:04'),
(16, 8, 1, 1, '2019-01-17 06:28:13'),
(17, 8, 2, 1, '2019-01-17 06:28:20'),
(18, 8, 3, 1, '2019-01-17 06:28:28'),
(19, 8, 4, 1, '2019-01-17 06:28:35'),
(20, 8, 5, 1, '2019-01-17 06:28:41'),
(21, 9, 1, 1, '2019-01-17 06:28:47'),
(22, 9, 2, 1, '2019-01-17 06:28:53'),
(23, 9, 4, 1, '2019-01-17 06:29:06'),
(24, 9, 5, 1, '2019-01-17 06:29:12'),
(25, 7, 1, 0, '2019-02-12 16:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`) VALUES
(1, 'ENGLISH', '101', '2018-12-27 09:52:17'),
(2, 'MATHS', '102', '2018-12-27 09:52:24'),
(3, 'KISWAHILI', '103', '2018-12-27 09:52:34'),
(4, 'SCIENCE', '104', '2018-12-27 09:52:44'),
(5, 'S/STUDIES & CRE', '105', '2018-12-27 09:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `tbl_contact_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  `Message_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`tbl_contact_id`, `fullname`, `email`, `phone`, `user_message`, `Message_Date`) VALUES
(20, 'Nicholas Nthenge', 'nicholas@gmail.com', '+254715166292', 'I like it', '2019-01-17 17:10:21'),
(21, 'Dennis Kiprotich ', 'denniskiprotich0@gmail.com', '070708058225', 'How can i reach you pleasse', '2019-01-18 06:29:23'),
(22, 'denno', 'donno@gmail.com', '0715166292', 'hi', '2019-05-23 15:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_No` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `email`, `user_type`, `password`, `phone_No`) VALUES
(7, 'admin1', 'wambuastephen140@gmai.com', 'admin', '202cb962ac59075b964b07152d234b70', ''),
(8, 'admin', 'johndoe@yahoo.com', 'admin', 'b59c67bf196a4758191e42f76670ceba', ''),
(9, 'steve', 'wambuastephen140@gmai.com', 'user', 'b59c67bf196a4758191e42f76670ceba', ''),
(10, 'john', 'johndoe@yahoo.com', 'user', 'b59c67bf196a4758191e42f76670ceba', ''),
(11, 'john', 'johndoe@yahoo.com', 'user', '202cb962ac59075b964b07152d234b70', ''),
(12, 'admin2', 'sarahnyaisa3@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', ''),
(13, 'admin3', 'mike@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', ''),
(14, 'mueke', 'mueke@gmail.com', 'user', '202cb962ac59075b964b07152d234b70', '0715166292'),
(15, 'admin1', 'wambuastephen140@gmai.com', 'user', '202cb962ac59075b964b07152d234b70', '0715166292'),
(16, 'Wambua', 'wambua@gmail.com', 'user', '3f088ebeda03513be71d34d214291986', '0759975824'),
(17, 'admin', 'mike@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', '0715166292'),
(18, 'wambuastephen140@gmail.com', 'wambuastephen140@gmail.com', 'user', '202cb962ac59075b964b07152d234b70', '07123456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `confirm_password`, `token`) VALUES
(1, 'steve', 'Mueke', 'wambuastephen140@gmai.com', '0715166292', '72dbb653b0f9766a1501bd44d4956833c2656ac2', '1995', 'hmery79508agiqz'),
(2, 'steve', 'Mueke', 'johndoe@yahoo.com', '0723678908', '2000', '2000', ''),
(3, 'steve', 'Mueke', 'mike@gmail.com', '0723678908', '1998', '1998', ''),
(4, 'sarah', 'nyaisa', 'sarahnyaisa3@gmail.com', '0723678908', '1995', '1995', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_info`
--
ALTER TABLE `contact_form_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`tbl_contact_id`),
  ADD KEY `tbl_contact_id` (`tbl_contact_id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_form_info`
--
ALTER TABLE `contact_form_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `tbl_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
