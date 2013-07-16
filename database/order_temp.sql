-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2013 at 02:54 PM
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
-- Table structure for table `order_temp`
--

CREATE TABLE IF NOT EXISTS `order_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger` tinyint(20) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `contact_number` int(11) NOT NULL,
  `start_address` varchar(100) NOT NULL,
  `unit_or_flat` varchar(10) DEFAULT NULL,
  `building_type` varchar(20) DEFAULT NULL,
  `business_name` varchar(30) DEFAULT NULL,
  `remember_detail` tinyint(1) DEFAULT NULL,
  `end_address` varchar(100) DEFAULT NULL,
  `car_type` int(11) DEFAULT NULL,
  `node_for_driver` varchar(50) DEFAULT NULL,
  `time_to_go` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `order_temp`
--

INSERT INTO `order_temp` (`id`, `passenger`, `name`, `contact_number`, `start_address`, `unit_or_flat`, `building_type`, `business_name`, `remember_detail`, `end_address`, `car_type`, `node_for_driver`, `time_to_go`, `status`) VALUES
(1, 5, '123', 0, '', 'Unit', 'Unit', NULL, 0, '2', 0, '1', '2013-07-09 14:42:52', 2),
(8, 5, '1233', 0, '', 'Flat', 'Business', NULL, 1, '2', 0, '1', '2013-07-09 14:43:03', 1),
(9, 5, '123', 0, '', 'Flat', 'Business', NULL, 1, '2', 0, '2', '2013-07-09 14:43:19', 3),
(19, 5, '', 0, '', 'Flat', 'Unit', '', 0, '1', 0, '1', '2013-07-09 14:42:59', 2),
(20, 5, '', 0, '', 'Flat', 'Unit', '', 0, '1', 0, '1', '2013-07-09 14:43:06', 1),
(21, 5, 'ngochai', 0, '', 'Unit', 'Business', 'HUI', 1, '6', 0, '2', '2013-01-01 01:00:01', 4),
(22, 5, 'do ngoc hai', 1883965050, '58 duong so 1go vap', 'Unit', 'Business', 'HUI', 1, 'cho ben thanh quan 1', 0, '2', '2013-01-01 01:00:01', 3),
(25, 5, 'nguyen hai bang', 1883965050, 'hoc mon thanh pho ho chi minh', 'Unit', 'Business', 'Microsoft', 1, 'cho ben thanh quan 1', 0, '2', '2013-07-20 01:00:00 AM', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_temp`
--
ALTER TABLE `order_temp`
  ADD CONSTRAINT `order_temp_ibfk_1` FOREIGN KEY (`status`) REFERENCES `order_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
