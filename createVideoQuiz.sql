-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 01:55 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `videoQuiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `videoFile`
--

CREATE TABLE IF NOT EXISTS `videoFile` (
  `filename` varchar(100) NOT NULL,
  `account_id` int(11) NOT NULL,
  PRIMARY KEY (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videoFile`
--

INSERT INTO `videoFile` (`filename`, `account_id`) VALUES
('nodata', 1),
('nomoredata', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
