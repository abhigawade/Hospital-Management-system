-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 03:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhishek`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddoctor`
--

CREATE TABLE `adddoctor` (
  `id` int(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adddoctor`
--

INSERT INTO `adddoctor` (`id`, `firstName`, `lastName`, `DOB`, `bloodgroup`, `phoneNumber`, `email`, `specialization`, `password`) VALUES
(7, 'Sandhya', 'Gole', '2020-08-11', 'b+', '9874563736', 'sandhya77@gmail.com', 'Nursing', 'sandhya'),
(16, 'Mangal', 'Gawade', '2022-03-11', 'ab+', '9845634234', 'mangal123@gmail.com', 'cardiology', '$2y$10$hWX4SIdDKbSlafSKyAqZ0.Ypn3ech2mh5qxkQIcPe3j0lTNKQ8ylC'),
(21, 'Rohit', 'Gawade', '2010-01-01', 'O+', '9003458778', 'rohit1234@gmail.com', 'select a department', '$2y$10$/bTodnYoJyqhjJCaGqwHt.bFsT.yJBXEh1OW.zyuJGEuDOronD6rq'),
(22, 'Mangesh', 'Pawar', '1982-10-15', 'O-', '7987342671', 'mangesh123@gmail.com', 'General Surgery', '$2y$10$/apMsw7YFc8u06PwZgQ1Ee4.T4484MYUb6vbx1Npghr82VRlof83S');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'abhi102@gmail.com', 'abhishek'),
(2, 'abhishekgawade@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(2) NOT NULL,
  `doctorName` varchar(100) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `patientid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `firstName`, `lastName`, `age`, `date`, `time`, `doctorName`, `specialization`, `phoneNumber`, `email`, `patientid`) VALUES
(26, 'Vedant', 'Gaik', 0, '2022-03-05', '10:00:00.00', 'rohit gawade', 'cardiology', '9875678976', 'vedant123@gmail.com', 12),
(33, 'Makrand', 'Indu', 0, '2022-03-04', '10:18:00.00', 'Mangal Gawade', 'General Surgery', '9874563452', 'makrand123@gmail.com', 28),
(36, 'Rohan', 'Gawade', 0, '2022-03-19', '10:00:00.00', 'Rohit Gawade', 'OPD', '8765432145', 'rohit123@gmail.com', 32),
(39, 'Rohan', 'Gawade', 20, '2022-04-25', '13:00:00.00', 'Mangal Gawade', 'General Surgery', '9874563452', 'rohan123@gmail.com', 32),
(42, 'Rohan', 'Gawade', 21, '2022-03-21', '10:00:00.00', 'Mangesh Pawar', 'cardiology', '7654321890', 'rohan123@gmail.com', 32);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `problem` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `firstName`, `lastName`, `phoneNumber`, `email`, `problem`) VALUES
(5, 'Trisha', 'savat', '879657468', 'trisha12@gmail.com', 'noo sorry'),
(23, 'Vishal', 'Roman', '9567891234', 'vishal123@gmail.com', 'give me medicine'),
(29, 'Akshay', 'Savat', '9874563452', 'akshay123@gmail.com', 'please contact me'),
(32, 'Abhishek', 'Gawade', '9808765473', 'abhishekgawade@gmail.com', 'Please login me in the site');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(100) NOT NULL,
  `departmentName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`) VALUES
(1, 'cardiology'),
(2, 'Nursing'),
(3, 'Psychaitry'),
(4, 'OPD'),
(5, 'Neurology'),
(6, 'General Surgery');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(50) NOT NULL,
  `prescri` varchar(10000) NOT NULL,
  `appointmentid` int(50) NOT NULL,
  `patientid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `prescri`, `appointmentid`, `patientid`) VALUES
(1, 'Take care of yourself', 6, 12),
(26, 'How are you now take care and take rest', 32, 28),
(29, 'Take care of your self take medicine properly and rest all the best', 35, 32),
(30, 'Please take all medicine and do properly exercise to become strong', 17, 12);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstName`, `lastName`, `DOB`, `bloodgroup`, `phoneNumber`, `email`, `password`, `cpassword`, `date`) VALUES
(12, 'vedant', 'gaik', '2022-02-04', 'b+', '2147483647', 'vedant123@gmail.com', 'Vedant123', 'Vedant123', '2022-02-08 11:27:36'),
(18, 'Ganesh', 'Gole', '2022-02-04', 'b+', '2147483647', 'ganesh27@gmail.com', 'ganesh', 'ganesh', '2022-02-17 16:11:54'),
(24, 'Vighnesh', 'Darekar', '2022-02-03', 'o-', '2147483647', 'vighnesh123@gmail.com', 'vighnesh', 'vighnesh', '2022-02-24 10:32:35'),
(28, 'Makrand', 'Indul', '2022-03-02', 'b+', '2147483647', 'makrand123@gmail.com', '$2y$10$MhUIboux311bqV5yHP/oVOZ4eVExyPvVvMcsNH/KdSEqbO//lpGgi', 'Makrand123', '2022-03-07 16:07:43'),
(29, 'Vishal', 'Roman', '2022-03-04', 'ab+', '2147483647', 'vishal123@gmail.com', '$2y$10$mWwcfE6I1Rf1Llf9wyuToOFU0MP47WaXpor44d1UJN/UUipO633ki', 'Vishal123', '2022-03-08 09:01:25'),
(32, 'Rohan', 'Gawade', '2010-11-21', 'ab+', '8147483647', 'rohan123@gmail.com', '$2y$10$PfxE.UVnEjEzNXuRfsTPeuy2MTuouw.BLJMckQLPa564Zg0aKWujO', 'Rohan123', '2022-03-09 18:31:58'),
(42, 'Tushar', 'Gole', '2011-02-02', 'A-', '8978435678', 'tushargole123@gmail.com', '$2y$10$xEuWnCE0aSZimU6EZLfzeeKztBPbRbIkp9ScmHzWqcCGIZTYcxW9u', 'Tushar123', '2022-03-19 08:44:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddoctor`
--
ALTER TABLE `adddoctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patientid` (`patientid`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddoctor`
--
ALTER TABLE `adddoctor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
