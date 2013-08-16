-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2013 at 02:15 PM
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
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) DEFAULT NULL,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `unit_or_flat` varchar(10) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `usertype` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `usertype` (`usertype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `title`, `fullname`, `username`, `password`, `email`, `address`, `unit_or_flat`, `phone`, `mobile`, `usertype`) VALUES
(2, 'Ms', 'hai do', 'lifog', 'd41d8cd98f00b204e9800998ecf8427e', 'lifog@gmail.com', '', 'unit', '123456', '123456789', 4),
(4, 'Mr', 'hai do', 'lifog1', 'e10adc3949ba59abbe56e057f20f883e', 'lifog721989@gmail.com', 'phuong 13 quan go vap tp ho chi minh', 'flat', '0123456789', '01201201201', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
