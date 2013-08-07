-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2013 at 12:58 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookingtaxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(4, 'lifog', 'ngochai182007@yahoo.com', 'customer''s idea', '3213213', '2013-08-06 01:08:34 PM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
