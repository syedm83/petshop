-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Dec 04, 2024 at 02:17 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ms379`
--

-- --------------------------------------------------------

--
-- Table structure for table `PScategories`
--

CREATE TABLE IF NOT EXISTS `PScategories` (
  `PScategoryID` int(11) NOT NULL,
  `PScategoryCode` varchar(10) NOT NULL,
  `PScategoryName` varchar(255) NOT NULL,
  `PScategoryModel` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PScategories`
--

INSERT INTO `PScategories` (`PScategoryID`, `PScategoryCode`, `PScategoryName`, `PScategoryModel`, `DateCreated`) VALUES
(1000, 'PB', 'Pet Bed', 'Large', '2024-10-18 11:31:22'),
(2000, 'APF', 'Automatic Pet Feeder', 'With Timer', '2024-10-18 11:31:39'),
(3000, 'CT', 'Cat Tree', 'Tall, 6ft and up', '2024-10-18 11:31:40'),
(4000, 'DLC', 'Dog Leash and Collar Kit', 'Small', '2024-10-18 11:31:41'),
(5000, 'PGK', 'Pet Grooming Kit', 'For dogs and cats', '2024-10-18 11:39:46'),
(6000, 'MED', 'Pet Medicines', 'Allergy, Cut & Burns, Prescription', '2024-11-14 20:35:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PScategories`
--
ALTER TABLE `PScategories`
 ADD PRIMARY KEY (`PScategoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
