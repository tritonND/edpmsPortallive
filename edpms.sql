-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 01:51 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `ID` int(11) NOT NULL,
  `PROJECTID` varchar(100) NOT NULL,
  `SECTOR` varchar(100) NOT NULL,
  `SUBSECTOR` varchar(100) NOT NULL,
  `BUDGETHEAD` varchar(100) NOT NULL,
  `BUDGETSUBHEAD` varchar(100) NOT NULL,
  `COMMENT` varchar(100) NOT NULL,
  `APPROPRIATION` float NOT NULL,
  `SUBSECTORALLOCATION` float NOT NULL,
  `SUPPLEMENTARYPROVISION` float NOT NULL,
  `SUBSECTORPERCENTAGE` int(11) NOT NULL,
  `AAYEAR` varchar(10) NOT NULL,
  `SPYEAR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE IF NOT EXISTS `certificates` (
  `ID` int(11) NOT NULL,
  `PROJECTID` varchar(100) NOT NULL,
  `CERTNUMBER` varchar(100) NOT NULL,
  `DATEISSUED` date NOT NULL,
  `AMOUNT` float NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `ID` int(11) NOT NULL,
  `PROJECTID` varchar(100) NOT NULL,
  `COMMENTS` varchar(500) NOT NULL,
  `MARKS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectdetails`
--

CREATE TABLE IF NOT EXISTS `projectdetails` (
  `ID` int(11) NOT NULL,
  `PROJECTID` varchar(100) NOT NULL,
  `PROCURINGENTITY` varchar(100) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `REMARKS` varchar(200) NOT NULL,
  `LOCATION` varchar(200) NOT NULL,
  `DATEOFAWARD` date NOT NULL,
  `DURATIONOFCONTRACT` varchar(100) NOT NULL,
  `EXPECTEDCOMPLETIONDATE` date NOT NULL,
  `CONTRACTSUM` float NOT NULL,
  `SSS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE IF NOT EXISTS `supervisors` (
  `ID` int(11) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `FIRSTNAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `PHONE1` varchar(50) NOT NULL,
  `PHONE2` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SPECIALISATION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE IF NOT EXISTS `variations` (
  `ID` int(11) NOT NULL,
  `PROJECTID` varchar(100) NOT NULL,
  `DATEISSUED` date NOT NULL,
  `AMOUNT` float NOT NULL,
  `COMMENTS` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `uniquecert` (`CERTNUMBER`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projectdetails`
--
ALTER TABLE `projectdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projectdetails`
--
ALTER TABLE `projectdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
