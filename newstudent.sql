-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2019 at 10:52 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newstudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `ID` int(11) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `docsize` int(100) NOT NULL,
  `doctype` varchar(50) NOT NULL,
  `docPath` varchar(100) NOT NULL,
  `UserID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `uploadDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`ID`, `docname`, `docsize`, `doctype`, `docPath`, `UserID`, `name`, `course`, `Usertype`, `uploadDate`) VALUES
(63, 'larry-chen-30069-unsplash.jpg', 8703593, 'image/jpeg', 'document/larry-chen-30069-unsplash.jpg', 61, 'sumit', 'Bca', 'student', '06-08-19 09:26:45'),
(64, 'larry-chen-30069-unsplash.jpg', 8703593, 'image/jpeg', 'document/larry-chen-30069-unsplash.jpg', 50, '', 'B.tech', 'admin', '06-08-19 09:29:33'),
(65, 'login.txt', 1135, 'text/plain', 'document/login.txt', 50, '', 'B.tech', 'admin', '06-08-19 09:30:48'),
(102, '164610.jpg', 173500, 'image/jpeg', 'document/164610.jpg', 50, '', 'B.tech', 'admin', '07-08-19 01:59:27'),
(109, 'abc.php', 233, 'application/x-php', 'document/abc.php', 50, '', 'B.tech', 'admin', '10-08-19 01:52:27'),
(110, 'abc.php', 233, 'application/x-php', 'document/abc.php', 64, 'kevin1', 'B.tech', 'student', '10-08-19 01:58:57'),
(111, 'index.php', 10255, 'application/x-php', 'document/index.php', 64, 'kevin1', 'B.tech', 'student', '10-08-19 02:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `ID` int(10) NOT NULL,
  `doc_id` varchar(10) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `user_course` varchar(50) NOT NULL,
  `request_date` varchar(20) NOT NULL,
  `permission` varchar(5) DEFAULT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `ID` int(3) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `course` varchar(11) NOT NULL,
  `Cyear` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`ID`, `Name`, `course`, `Cyear`, `Email`, `Password`, `type`) VALUES
(50, 'AMIT', 'B.tech', 2020, 'amit631308@gmail.com', 'amit', 'admin'),
(59, 'ashis', 'Bca', 2016, 'ashish@gmail.com', 'ashis', 'student'),
(61, 'sumit', 'Bca', 2025, 'sumit@gmail.com', 'sumit', 'student'),
(64, 'kevin1', 'B.tech', 2024, 'kevin@gmail.com', '1011', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
