-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 02:06 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `videoQuiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `videoFile`
--

CREATE TABLE IF NOT EXISTS `quizOwner` (
  `account_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videoFile`
--

INSERT INTO `videoQuiz`.`quizOwner` (`account_id`, `quiz_id`) VALUES ('1', '1');
INSERT INTO `videoQuiz`.`quizOwner` (`account_id`, `quiz_id`) VALUES ('1', '2');
INSERT INTO `videoQuiz`.`quizOwner` (`account_id`, `quiz_id`) VALUES ('1', '3');


