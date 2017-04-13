-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2015 at 02:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sanket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cefirstaaaaaa`
--

CREATE TABLE IF NOT EXISTS `cefirstaaaaaa` (
  `sex` varchar(30) DEFAULT NULL,
  `branch` varchar(3) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cefirstaaaaaa`
--

INSERT INTO `cefirstaaaaaa` (`sex`, `branch`, `sem`, `name`, `surname`) VALUES
('Male', 'CE', 'first', 'aaa', 'aaa'),
('Male', 'CE', 'first', 'bbb', 'bbb');

-- --------------------------------------------------------

--
-- Table structure for table `cefirstbbbbbb`
--

CREATE TABLE IF NOT EXISTS `cefirstbbbbbb` (
  `sex` varchar(30) DEFAULT NULL,
  `branch` varchar(3) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `branch` varchar(3) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `que` varchar(30) NOT NULL,
  `ans` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`name`, `surname`, `branch`, `sem`, `email`, `password`, `que`, `ans`) VALUES
('aaa', 'aaa', 'CE', 'first', 'aaa', 'aaa', 'aaa', 'aaa'),
('bbb', 'bbb', 'CE', 'first', 'bbb', 'bbb', 'bbb', 'bbb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
