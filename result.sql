-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 01:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_result`
--

CREATE TABLE `add_result` (
  `s_no` int(10) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `gpa1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `gpa2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `gpa3` varchar(255) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `gpa4` varchar(255) NOT NULL,
  `p5` varchar(255) NOT NULL,
  `gpa5` varchar(255) NOT NULL,
  `p6` varchar(255) NOT NULL,
  `gpa6` varchar(255) NOT NULL,
  `p7` varchar(255) NOT NULL,
  `gpa7` varchar(255) NOT NULL,
  `p8` varchar(255) NOT NULL,
  `gpa8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_result`
--

INSERT INTO `add_result` (`s_no`, `roll`, `u_name`, `semester`, `branch`, `p1`, `gpa1`, `p2`, `gpa2`, `p3`, `gpa3`, `p4`, `gpa4`, `p5`, `gpa5`, `p6`, `gpa6`, `p7`, `gpa7`, `p8`, `gpa8`) VALUES
(1, 'b519035', 'Nimeshika', '5th', 'CSE', 'IWT-1', '8', 'OS', '7.8', 'DCCN', '8.2', 'ICE', '7.9', 'TOC', '8.5', 'ROBO', '7.4', 'WSM', '8.0', 'DCCN LAB', '9'),
(2, 'b219003', 'Alekhya', '5th', 'ETC', 'IWT-1', '8', 'OS', '7.8', 'TOC', '8.0', 'WSM', '7.8', 'ROBO', '7.3', 'ICE', '8.4', 'DCCN', '8.3', 'DCCN LAB', '9.2'),
(4, '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'b519018', 'prashanth', '5th', 'CE', 'IWT-1', '8', 'ROBO', '9', 'DCCN', '9', 'ICE', '7', 'WSM', '9', 'DCCN LAB', '9', 'TOC', '9', 'OS', '8');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `s_no` int(10) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`s_no`, `ad_username`, `ad_password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '1st', 'CSE/CE/IT', 'Physics', 3),
(2, '1st', 'CSE/CE/IT', 'Programming-1', 4),
(3, '1st', 'CSE/CE/IT', 'Math-I', 3),
(4, '1st', 'CSE/CE/IT', 'Oral communication', 2),
(5, '1st', 'CSE/CE/IT', 'Basic electronics', 3),
(6, '1st', 'CSE/CE/IT', 'Basic Mechanics', 4),
(7, '1st', 'CSE/CE/IT', 'programming LAB', 2),
(8, '1st', 'CSE/CE/IT', 'electronics LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '2nd', 'CSE/CE/IT', 'basic electrical', 3),
(2, '2nd', 'CSE/CE/IT', 'Data Structures', 4),
(3, '2nd', 'CSE/CE/IT', 'Environmental engineering', 2),
(4, '2nd', 'CSE/CE/IT', 'MATH-2', 3),
(5, '2nd', 'CSE/CE/IT', 'CS', 2),
(6, '2nd', 'CSE/CE/IT', 'DS LAB', 2),
(7, '2nd', 'CSE/CE/IT', 'Workshop', 2),
(8, '2nd', 'CSE/CE/IT', 'EES LAB', 2),
(9, '2nd', 'CSE/CE/IT', 'electrical LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '3rd', 'CSE/CE/IT', 'DEC', 4),
(2, '3rd', 'CSE/CE/IT', 'programming-II', 4),
(3, '3rd', 'CSE/CE/IT', 'CS-III', 2),
(4, '3rd', 'CSE/CE/IT', 'AEC (elective)', 3),
(5, '3rd', 'CSE/CE/IT', 'NT (elective)', 3),
(6, '3rd', 'CSE/CE/IT', 'SPE (elective)', 3),
(7, '3rd', 'CSE/CE/IT', 'DEC LAB', 2),
(8, '3rd', 'CSE/CE/IT', 'Prog-II Lab', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '4th', 'CSE/CE/IT', 'AMC(optional)', 3),
(2, '4th', 'CSE/CE/IT', 'Discrete Structure', 3),
(3, '4th', 'CSE/CE/IT', 'CS', 2),
(4, '4th', 'CSE/CE/IT', 'BME(managment)', 4),
(5, '4th', 'CSE/CE/IT', 'COA', 4),
(6, '4th', 'CSE/CE/IT', 'DAA', 4),
(7, '4th', 'CSE/CE/IT', 'DSP(optional)', 3),
(8, '4th', 'CSE/CE/IT', 'COA LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '5th', 'CSE/CE/IT', 'IWT-1(Web Development)', 5),
(2, '5th', 'CSE/CE/IT', 'OS(Operating System)', 4),
(3, '5th', 'CSE/CE/IT', 'TOC(Computation)', 3),
(4, '5th', 'CSE/CE/IT', 'WSM(Optional)', 3),
(5, '5th', 'CSE/CE/IT', 'ROBO(Optional)', 3),
(6, '5th', 'CSE/CE/IT', 'ICE', 3),
(7, '5th', 'CSE/CE/IT', 'DCCN', 4),
(8, '5th', 'CSE/CE/IT', 'CSE(Optional)', 3),
(9, '5th', 'CSE/CE/IT', 'ACBB(Optional)', 3),
(10, '5th', 'CSE/CE/IT', 'DCCN LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '6th', 'CSE/CE/IT', 'AI', 4),
(2, '6th', 'CSE/CE/IT', 'Cloud computing', 3),
(3, '6th', 'CSE/CE/IT', 'JAVA', 4),
(4, '6th', 'CSE/CE/IT', 'IOT', 3),
(5, '6th', 'CSE/CE/IT', 'MPMC', 3),
(6, '6th', 'CSE/CE/IT', 'IOT LAB', 2),
(7, '6th', 'CSE/CE/IT', 'JAVA LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE `sem7` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem7`
--

INSERT INTO `sem7` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '7th', 'CSE/CE/IT', 'AI-II', 4),
(2, '7th', 'CSE/CE/IT', 'ACA', 3),
(3, '7th', 'CSE/CE/IT', 'GA', 3),
(4, '7th', 'CSE/CE/IT', 'Pattern Recognition', 3),
(5, '7th', 'CSE/CE/IT', 'VLSI Design', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `s_no` int(10) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem8`
--

INSERT INTO `sem8` (`s_no`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '8th', 'CSE/CE/IT', 'DIP(Image Processing)', 4),
(2, '8th', 'CSE/CE/IT', 'EES-II', 3),
(3, '8th', 'CSE/CE/IT', 'Satellite Communication', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `u_name` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `u_mobile` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`u_name`, `roll`, `u_mobile`, `branch`, `semester`) VALUES
('Nimeshika', 'b519035', '6500012367', 'CE', '5th'),
('Alekhya', 'b219003', '6591266777', 'ETC', '5th');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s_no` int(10) NOT NULL,
  `u_roll` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_no`, `u_roll`, `u_password`) VALUES
(1, 'b519035', 'user'),
(2, 'b219003', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_result`
--
ALTER TABLE `add_result`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem7`
--
ALTER TABLE `sem7`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `sem8`
--
ALTER TABLE `sem8`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_result`
--
ALTER TABLE `add_result`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sem1`
--
ALTER TABLE `sem1`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sem2`
--
ALTER TABLE `sem2`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sem3`
--
ALTER TABLE `sem3`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sem4`
--
ALTER TABLE `sem4`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sem5`
--
ALTER TABLE `sem5`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sem6`
--
ALTER TABLE `sem6`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sem7`
--
ALTER TABLE `sem7`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sem8`
--
ALTER TABLE `sem8`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
