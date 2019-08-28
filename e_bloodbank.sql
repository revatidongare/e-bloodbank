-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 05:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE IF NOT EXISTS `bloodbank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rg_id` int(11) NOT NULL,
  `donate_date` date NOT NULL,
  `city` varchar(100) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `rg_id`, `donate_date`, `city`, `blood_group`, `date`) VALUES
(1, 1, '2017-03-08', 'Panvel', 'B+', '2017-03-23 18:58:00'),
(2, 3, '2017-03-16', 'New Panvel', 'AB+', '2017-03-23 18:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `rg_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `rg_id`, `name`, `password`, `address`, `city`, `dob`, `gender`, `blood_group`, `date`, `email`, `mobile`) VALUES
(1, 'priya', 'BD-1', 'priya mhatre', '123456', 'H-204', 'New Panvel', '2017-03-07', 'F', 'AB+', '2017-03-23 16:57:00', 'sachin7483@gmail.com', 'bdfhfh'),
(2, 'admin', 'BD-2', 'admin', 'admin@123', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '', ''),
(3, 'trhtrhth', 'BD-3', 'rrt', 'gfhgfh', 'ghg', 'hgfh', '2017-03-07', 'F', 'AB-', '2017-03-23 18:29:00', 'ghgf@fhfgh.ykyu', 'gfjf'),
(4, 'ddfhdfhd', 'BD-4', 'dfgfd', 'hffd', 'dfhd', 'hfdh', '2017-02-27', 'F', 'AB+', '2017-03-23 18:31:00', 'hdfhdh@hjj.ffh', 'dfhfdh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
