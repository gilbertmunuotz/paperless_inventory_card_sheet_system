-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 04:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `systemusers`
--

CREATE TABLE `systemusers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `systemusers`
--

INSERT INTO `systemusers` (`id`, `username`, `email`, `password`, `role`, `action`) VALUES
(60, 'omary omary', 'omary@omary.com', 'wakeel', 'staff', ''),
(119, 'secreto', 'secreto@gmail.com', '12345', 'Estate Officer ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`) VALUES
(6, 'Anut', 'Test@123');

-- --------------------------------------------------------

--
-- Table structure for table `tblregisterdevice`
--

CREATE TABLE `tblregisterdevice` (
  `id` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `code_no` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `dateofregistration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblregisterdevice`
--

INSERT INTO `tblregisterdevice` (`id`, `itemname`, `code_no`, `office`, `dateofregistration`) VALUES
(6, 'Office Desk', 'INKF4387KI', 'PMU', '2023-05-01'),
(9, 'Beds', 'GD578N6', 'Dean of Students', '2023-05-05'),
(15, 'Fans', 'H89FJWB9', 'Admission', '2023-05-03'),
(38, 'cupboards', 'ERyy$5676', 'D3', '2023-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `tblreportproblem`
--

CREATE TABLE `tblreportproblem` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dateofreport` date NOT NULL,
  `problem_type` varchar(255) NOT NULL,
  `problem_description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=pending\r\n2=attended\r\n3=not attended',
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblreportproblem`
--

INSERT INTO `tblreportproblem` (`id`, `name`, `department`, `dateofreport`, `problem_type`, `problem_description`, `status`, `action`) VALUES
(19, 'Bennito Musolin', 'Civil Engineering', '2023-05-02', 'General', 'Crack On Wall Behind the Door', '1', ''),
(30, 'Mayaya Abdallah', 'Computer Engineering', '2023-05-17', 'Plumbing', 'Leacking Water Pipe', '3', ''),
(35, 'David Hopman', 'Mechanical Engineering', '2023-05-25', 'Capentry', 'Broken Chair', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequests`
--

CREATE TABLE `tblrequests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dateofrequest` date NOT NULL,
  `devicename` varchar(255) NOT NULL,
  `device_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblrequests`
--

INSERT INTO `tblrequests` (`id`, `name`, `department`, `dateofrequest`, `devicename`, `device_description`) VALUES
(4, 'Andrew Jonstone', 'Mechanical Engineering', '2023-06-01', 'Three New Chairs', 'Request of Three New Chairs'),
(8, 'Doris Mollel', 'Laboratory Technology', '2023-06-03', 'Door locks', 'Request of new Door locks'),
(17, 'John Doe', 'Civil Engineering', '2023-06-09', 'Air Condition', 'Request of new Air Condition');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `systemusers`
--
ALTER TABLE `systemusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregisterdevice`
--
ALTER TABLE `tblregisterdevice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_no` (`code_no`);

--
-- Indexes for table `tblreportproblem`
--
ALTER TABLE `tblreportproblem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblrequests`
--
ALTER TABLE `tblrequests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `systemusers`
--
ALTER TABLE `systemusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblregisterdevice`
--
ALTER TABLE `tblregisterdevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tblreportproblem`
--
ALTER TABLE `tblreportproblem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblrequests`
--
ALTER TABLE `tblrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
