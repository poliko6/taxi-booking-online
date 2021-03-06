-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2013 at 01:53 PM
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
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` varchar(50) NOT NULL,
  `car_type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `price` tinyint(4) NOT NULL,
  `range_act` tinyint(4) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `status` (`status`),
  KEY `status_2` (`status`),
  KEY `range_act` (`range_act`),
  KEY `price` (`price`),
  KEY `car_type` (`car_type`),
  KEY `car_type_2` (`car_type`),
  KEY `range_act_2` (`range_act`),
  KEY `price_2` (`price`),
  KEY `status_3` (`status`),
  KEY `car_type_3` (`car_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE IF NOT EXISTS `car_type` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `label` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vans` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`id`, `type`, `label`, `vans`) VALUES
(1, '4 slots', 'old-model', 1),
(2, '8 slots', 'old-model', 0),
(3, '16 slots', 'new-model', 1),
(4, '25 slots', 'old-model', 0),
(5, 'wagon', 'model', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customers_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `usertype` tinyint(4) NOT NULL,
  PRIMARY KEY (`customers_id`),
  KEY `usertype` (`usertype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `fullname`, `username`, `password`, `email`, `address`, `phone`, `usertype`) VALUES
(1, 'Nguyễn Văn A', 'nguyenvana', 'e10adc3949ba59abbe56e057f20f883e', 'nguyenvana@gmail.com', 'tp hồ chí minh', 123456789, 4),
(2, 'Nguyễn Văn B', 'nguyenvanb', 'e10adc3949ba59abbe56e057f20f883e', 'nguyenvanb@gmail.com', 'tp hồ chí minh', 123456789, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customers_temp`
--

CREATE TABLE IF NOT EXISTS `customers_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `suburb` smallint(6) DEFAULT NULL,
  `unit_or_flat` varchar(10) DEFAULT NULL,
  `street_number` tinyint(4) DEFAULT NULL,
  `street` smallint(6) DEFAULT NULL,
  `building_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `customers_temp`
--

INSERT INTO `customers_temp` (`id`, `passenger`, `name`, `contact_number`, `suburb`, `unit_or_flat`, `street_number`, `street`, `building_type`) VALUES
(1, 4, '123', 1234, 2, 'Unit', 12, 1, 'Business'),
(2, 5, '1233', 1234, 2, 'Flat', 20, 1, 'Business'),
(3, 5, '123', 1234, 2, 'Unit', 20, 1, 'Business'),
(4, 5, 'lifog', 1883965050, 0, 'Unit', 58, 0, 'Business'),
(5, 5, 'ngochai', 1883965050, 2, 'Unit', 12, 3, 'Unit'),
(6, 5, 'ngochai', 1883965050, 2, 'Unit', 12, 3, 'Unit'),
(7, 5, 'ngochai', 1883965050, 2, 'Unit', 12, 3, 'Unit');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `driver_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `usertype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`driver_id`),
  KEY `usertype` (`usertype`),
  KEY `status` (`status`),
  KEY `status_2` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `fullname`, `username`, `password`, `email`, `address`, `phone`, `usertype`, `status`) VALUES
(1, 'tài xế 1', 'taixe1', 'e10adc3949ba59abbe56e057f20f883e', 'taixe1@gmail.com', 'tp hồ chí minh', 123456789, 3, 1),
(2, 'tài xế 2', 'taixe2', 'e10adc3949ba59abbe56e057f20f883e', 'taixe2@gmail.com', 'tp hồ chí minh', 123456789, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `customer_id` smallint(6) NOT NULL,
  `address_start` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_end` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `car_type` tinyint(4) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  KEY `car_type` (`car_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `address_start`, `address_end`, `time`, `car_type`) VALUES
(1, 1, '58 đường Lê Đức Thọ, F.13, Q.Gò Vấp', 'Chợ Bến Thành', '2013-06-30 07:00:00', 1),
(2, 1, '58 đường Lê Đức Thọ, F.13, Q.Gò Vấp', 'Chợ Rẫy', '2013-06-28 09:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `order_id` smallint(6) NOT NULL,
  `manager` smallint(6) NOT NULL,
  `driver` smallint(6) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `price` int(11) NOT NULL,
  `re_order` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`,`order_id`),
  KEY `order_id` (`order_id`),
  KEY `manager` (`manager`),
  KEY `driver` (`driver`),
  KEY `status` (`status`),
  KEY `order_id_2` (`order_id`),
  KEY `manager_2` (`manager`),
  KEY `manager_3` (`manager`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `manager`, `driver`, `status`, `price`, `re_order`) VALUES
(1, 1, 2, 1, 4, 100000, 5),
(2, 2, 2, 2, 3, 130000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `status`) VALUES
(1, 'waiting'),
(2, 'processing'),
(3, 'accept'),
(4, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `order_temp`
--

CREATE TABLE IF NOT EXISTS `order_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger` tinyint(20) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `address_form` int(20) DEFAULT NULL,
  `unit_or_flat` varchar(10) DEFAULT NULL,
  `street_number` tinyint(4) DEFAULT NULL,
  `street` smallint(6) DEFAULT NULL,
  `building_type` varchar(20) DEFAULT NULL,
  `business_name` varchar(30) DEFAULT NULL,
  `remember_detail` tinyint(1) DEFAULT NULL,
  `address_to` smallint(6) DEFAULT NULL,
  `car_type` int(11) DEFAULT NULL,
  `node_for_driver` int(11) DEFAULT NULL,
  `ready_to_go` tinyint(1) DEFAULT NULL,
  `time_to_go` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `order_temp`
--

INSERT INTO `order_temp` (`id`, `passenger`, `name`, `contact_number`, `address_form`, `unit_or_flat`, `street_number`, `street`, `building_type`, `business_name`, `remember_detail`, `address_to`, `car_type`, `node_for_driver`, `ready_to_go`, `time_to_go`) VALUES
(1, 5, '123', 1234, 2, '0', 12, 1, 'Unit', NULL, 0, 2, 0, 1, 0, '2013-07-07 16:00:00'),
(8, 5, '1233', 1234, 2, '0', 20, 1, 'Business', NULL, 1, 2, 0, 1, 0, '0000-00-00 00:00:00'),
(9, 5, '123', 1234, 2, '0', 20, 1, 'Business', NULL, 1, 2, 0, 2, 0, '0000-00-00 00:00:00'),
(10, 5, 'lifog', 32767, 2, 'Unit', 58, 0, 'Business', NULL, 1, 2, 0, 2, 0, '0000-00-00 00:00:00'),
(11, 5, 'ngochai', 1883965050, 2, 'Unit', 12, 3, 'Unit', NULL, 1, 3, 0, 2, 0, '0000-00-00 00:00:00'),
(12, 5, 'ngochai', 1883965050, 2, 'Unit', 12, 3, 'Unit', NULL, 1, 3, 0, 2, 0, '0000-00-00 00:00:00'),
(13, 5, 'ngochai', 1883965050, 2, 'Unit', 12, 3, 'Unit', NULL, 1, 3, 0, 2, 0, '0000-00-00 00:00:00'),
(14, 5, 'abadon', 1883965050, 1, 'Flat', 25, 1, 'Unit', NULL, 0, 4, 0, 2, 0, '0000-00-00 00:00:00'),
(15, 4, 'knight', 1883965050, 2, 'Unit', 12, 4, 'Unit', NULL, 0, 6, 0, 2, 0, '2013-07-03 17:00:01'),
(17, 4, 'cyrax', 1883965050, 2, 'Flat', 25, 3, 'Unit', '', 0, 6, 0, 2, 0, '2013-01-04 17:00:01'),
(18, 4, 'blademaster', 1883965050, 2, 'Flat', 25, 3, 'Business', 'Microsoft', 0, 5, 0, 2, 0, '2013-01-04 17:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `car_type` tinyint(4) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `car_type` (`car_type`),
  KEY `car_type_2` (`car_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `car_type`, `price`) VALUES
(1, 1, 10000),
(2, 2, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `range_act`
--

CREATE TABLE IF NOT EXISTS `range_act` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `range_act`
--

INSERT INTO `range_act` (`id`, `name`) VALUES
(1, 'Long An'),
(2, 'TPHCM');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `detail` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `detail`) VALUES
(1, 'free'),
(2, 'busy');

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

CREATE TABLE IF NOT EXISTS `street` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `suburb` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `suburb` (`suburb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `street`
--

INSERT INTO `street` (`id`, `name`, `suburb`) VALUES
(1, 'Abbot Gr', 1),
(2, 'abbotsford St', 1),
(3, 'Aberdeen St', 2),
(4, 'Aberfeldie St', 2);

-- --------------------------------------------------------

--
-- Table structure for table `suburb`
--

CREATE TABLE IF NOT EXISTS `suburb` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `suburb`
--

INSERT INTO `suburb` (`id`, `name`) VALUES
(1, 'abbotsfor'),
(2, 'Aberfeldi'),
(3, 'Melbourne Airport'),
(4, 'East Melbourne'),
(5, 'Melbourne'),
(6, 'Docklands');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `usertype` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `usertype` (`usertype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `password`, `email`, `address`, `phone`, `usertype`) VALUES
(1, 'Đỗ Ngọc Hải', 'lifog721989', 'e10adc3949ba59abbe56e057f20f883e', 'lifog721989@gmail.com', 'Gò Vấp, TP HCM', 1883965050, 1),
(2, 'Nguyễn Hải Bằng', 'haibang', 'e10adc3949ba59abbe56e057f20f883e', 'haibang_nhc@gmail.com', 'Hóc Môn, TP HCM', 123456789, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `position` (`position`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `position`) VALUES
(4, 'customer'),
(2, 'dept_manager'),
(3, 'driver'),
(1, 'super admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_ibfk_4` FOREIGN KEY (`range_act`) REFERENCES `range_act` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_ibfk_5` FOREIGN KEY (`car_type`) REFERENCES `car_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_ibfk_6` FOREIGN KEY (`price`) REFERENCES `price` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `driver_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customers_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`car_type`) REFERENCES `car_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`manager`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`driver`) REFERENCES `driver` (`driver_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_5` FOREIGN KEY (`status`) REFERENCES `order_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`car_type`) REFERENCES `car_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `street`
--
ALTER TABLE `street`
  ADD CONSTRAINT `street_ibfk_1` FOREIGN KEY (`suburb`) REFERENCES `suburb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
