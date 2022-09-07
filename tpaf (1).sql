-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 02:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `ID` int(11) NOT NULL,
  `guid` varchar(70) DEFAULT NULL,
  `email` varchar(70) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) DEFAULT NULL,
  `s_name` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `status` varchar(15) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `bio` text DEFAULT NULL,
  `language` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`language`))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`ID`, `guid`, `email`, `f_name`, `m_name`, `s_name`, `gender`, `status`, `contact`, `password`, `image`, `bio`, `language`) VALUES
(1, '6854f986dc6f4b73da150848e20e1b54', 'patricknachenga@gmail.com', 'Patrick', 'Peter', 'Nachenga', 'male', 'active', '', '326d9d6eb1c7157da541400ea34d739ef0a552511b708ca5c6d8d9d41897bc1c', 'male.png', NULL, '[\"Swahili\", \"English\", \"Spanish\", \"Arabic\"]'),
(2, 'd9ae236bc85837e914fadc4bbef89aec', 'mbuya@gmail.com', 'Daniel', '', 'Mbuya', 'male', 'active', '', '608733c22a4d0bc684d67679b06fdb4b5907adaf3da3582bad1a3e3ff8e1a07b', 'male.png', NULL, NULL),
(3, '6ab515d3741703a8beb89a9a3b2e15da', 'faidha@gmail.com', 'Faidha', '', 'Hasan', 'female', 'active', '', '858116ca4010556977b3d696f1a7488ae743401d669ac6a7de95705b0c10b18c', 'female.png', NULL, NULL),
(4, 'a817c5098c3e7d98a7e1266ed242c3b9', 'Mwajay@gmail.com', 'Mwajay', '', 'Mtuli', 'female', 'active', '', '7a12c942ef9eb00899249c26449529809894c1f77158ee46f55f59b8464524a9', 'female.png', NULL, NULL),
(5, '2f290ab02ff23a4d070172aa2d0d204e', 'fiona@gmail.com', 'Fiona', '', 'Mkabu', 'female', 'active', '', '9fbea5993252f6dc93931cbb6175acc8832fde53adc1f147503c0f3931909c45', 'female.png', NULL, NULL),
(7, '606dcac83bc070a2f7d374fbaa4cebae', 'fulesi@gmail.com', 'fulesi', '', 'Msigwa', 'male', 'active', '', '9ef82e60f5fc08b70e67d8517fe69239c3ea510b1cda5891e57bd2abd91d4a23', 'male.png', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '[\"French\",\"swahili\",\"English\"]'),
(11, '4080f6965791c23a3aa68ffb5354d111', 'jaj@gmail.com', 'jaja', '', 'lab', 'male', 'active', '0712343043', 'c169c7e58035e57988bcf04e6747dcb992e180c26a3d2fca2a9f6ac0c5cc803e', 'male.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `application_window`
--

CREATE TABLE `application_window` (
  `ID` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `application_limit` int(11) NOT NULL COMMENT 'define how many one can Apply ',
  `status` varchar(15) NOT NULL,
  `description` longtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `Description` text DEFAULT NULL,
  `hod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(11) NOT NULL,
  `guid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) DEFAULT NULL,
  `s_name` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `type` varchar(12) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for those administration bench';

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `guid`, `email`, `f_name`, `m_name`, `s_name`, `gender`, `contact`, `image`, `status`, `type`, `password`) VALUES
(1, '4B45V5N45454754B5NM4545F4545N45', 'mbuya@gmail.com', 'daniel', 'M', 'Mbuya', 'male', '0787555444', 'male.png', 'active', 'admin', '176aa145f653db69b345127df9637d96c0315750dfa2bc430de798b5bd7f4b3c');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `guid` (`guid`);

--
-- Indexes for table `application_window`
--
ALTER TABLE `application_window`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `hod` (`hod`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `guid` (`guid`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `application_window`
--
ALTER TABLE `application_window`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stafftable`
--
ALTER TABLE `stafftable`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `hod` FOREIGN KEY (`ID`) REFERENCES `staff` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
