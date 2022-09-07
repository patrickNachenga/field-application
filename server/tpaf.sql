-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 01:22 PM
-- Server version: 10.4.18-Maria$DB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `aplicant_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `applicant_img` varchar(100) NOT NULL,
  `phone_number` int(15) NOT NULL
) ENGINE=Inno$DB DEFAULT ;

-- --------------------------------------------------------

--
-- Table structure for table `application_window`
--

CREATE TABLE `application_window` (
  `window_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `application_limit` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `numbe_applicant` varchar(15) NOT NULL
) ENGINE=Inno$DB DEFAULT ;

-- --------------------------------------------------------

--
-- Table structure for table `depertmeant`
--

CREATE TABLE `depertmeant` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(20) NOT NULL,
  `dep_member` varchar(50) NOT NULL
) ENGINE=Inno$DB DEFAULT ;

-- --------------------------------------------------------

--
-- Table structure for table `stafftable`
--

CREATE TABLE `stafftable` (
  `staff_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `staff_img` varchar(100) NOT NULL
) ENGINE=Inno$DB DEFAULT ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`aplicant_id`),
  ADD UNIQUE KEY `aplicant_id` (`aplicant_id`);

--
-- Indexes for table `application_window`
--
ALTER TABLE `application_window`
  ADD PRIMARY KEY (`window_id`);

--
-- Indexes for table `depertmeant`
--
ALTER TABLE `depertmeant`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `stafftable`
--
ALTER TABLE `stafftable`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `aplicant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_window`
--
ALTER TABLE `application_window`
  MODIFY `window_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depertmeant`
--
ALTER TABLE `depertmeant`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stafftable`
--
ALTER TABLE `stafftable`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
