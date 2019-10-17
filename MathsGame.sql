-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2019 at 10:35 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MathsGame`
--
CREATE DATABASE IF NOT EXISTS `MathsGame` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `MathsGame`;

-- --------------------------------------------------------

--
-- Table structure for table `Grade`
--

DROP TABLE IF EXISTS `Grade`;
CREATE TABLE IF NOT EXISTS `Grade` (
  `Grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `Grade_name` varchar(100) NOT NULL,
  PRIMARY KEY (`Grade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Grade`
--

INSERT INTO `Grade` (`Grade_id`, `Grade_name`) VALUES
(1, 'First Standard'),
(2, 'Second Standard'),
(3, 'Third Standard'),
(4, 'Fourth Standard');

-- --------------------------------------------------------

--
-- Table structure for table `Operations`
--

DROP TABLE IF EXISTS `Operations`;
CREATE TABLE IF NOT EXISTS `Operations` (
  `Operation_id` int(11) NOT NULL AUTO_INCREMENT,
  `Operation_name` varchar(100) NOT NULL,
  `Grade_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`Operation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Operations`
--

INSERT INTO `Operations` (`Operation_id`, `Operation_name`, `Grade_id`, `image`) VALUES
(1, 'ADDITION', 1, '1.png'),
(2, 'SUBSTRACT', 1, '2.png'),
(3, 'MULTIPLE', 1, 'mult.png'),
(4, 'DIVISION', 1, '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

DROP TABLE IF EXISTS `Questions`;
CREATE TABLE IF NOT EXISTS `Questions` (
  `Question_id` int(11) NOT NULL AUTO_INCREMENT,
  `Questions` varchar(500) NOT NULL,
  `Grade_id` int(11) NOT NULL,
  `Operation_id` int(11) NOT NULL,
  `Correct_ans` int(11) NOT NULL,
  `opt1` int(11) NOT NULL,
  `opt2` int(11) NOT NULL,
  `opt3` int(11) NOT NULL,
  `opt4` int(11) NOT NULL,
  `Images` varchar(100) NOT NULL,
  PRIMARY KEY (`Question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

DROP TABLE IF EXISTS `Register`;
CREATE TABLE IF NOT EXISTS `Register` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Result`
--

DROP TABLE IF EXISTS `Result`;
CREATE TABLE IF NOT EXISTS `Result` (
  `User_id` int(11) NOT NULL,
  `Correct_ans` int(11) NOT NULL,
  `Wrong_ans` int(11) NOT NULL,
  `Total_marks` int(11) NOT NULL,
  `User_attempt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Score`
--

DROP TABLE IF EXISTS `Score`;
CREATE TABLE IF NOT EXISTS `Score` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `Unanswer` int(10) NOT NULL,
  `Correct Answer` int(10) NOT NULL,
  `Wrong Answer` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
