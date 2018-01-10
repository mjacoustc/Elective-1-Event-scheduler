-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 09:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myevents`
--

CREATE TABLE IF NOT EXISTS `myevents` (
  `EventID` int(10) NOT NULL,
  `theEvent` text NOT NULL,
  `startdate` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myevents`
--

INSERT INTO `myevents` (`EventID`, `theEvent`, `startdate`, `time`) VALUES
(1, 'sdgfgda', '0000-00-00', '00:00:00'),
(2, 'hello', '2018-01-01', '02:59:00'),
(3, 'kissie', '2018-01-08', '12:00:00'),
(4, 'heide', '2018-01-17', '12:59:00'),
(5, 'tars', '2018-01-02', '01:01:00'),
(6, 'new', '2018-01-10', '23:58:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myevents`
--
ALTER TABLE `myevents`
  ADD PRIMARY KEY (`EventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myevents`
--
ALTER TABLE `myevents`
  MODIFY `EventID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
