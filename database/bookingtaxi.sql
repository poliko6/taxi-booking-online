-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2013 at 02:56 PM
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
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `Company_Id` smallint(6) NOT NULL,
  `Company_Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Time_Work` varchar(50) NOT NULL,
  PRIMARY KEY (`Company_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_Id`, `Company_Name`, `Address`, `Note`, `Phone`, `Email`, `Time_Work`) VALUES
(2, 'Taxi Viet Nam', '100 , Trường Chinh , Phường Tân Thới Nhất , Quận 12 , HCM', 'thanh lap tu 1991', 2560252, 'haibang_nhc@yahoo.com', '8h30-15h');

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

-- --------------------------------------------------------

--
-- Table structure for table `customers_temp`
--

CREATE TABLE IF NOT EXISTS `customers_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit_or_flat` varchar(10) DEFAULT NULL,
  `building_type` varchar(10) DEFAULT NULL,
  `business_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `customers_temp`
--

INSERT INTO `customers_temp` (`id`, `passenger`, `name`, `contact_number`, `address`, `unit_or_flat`, `building_type`, `business_name`) VALUES
(1, 4, '123', 1234, '', 'Unit', 'Business', ''),
(2, 5, '1233', 1234, '', 'Flat', 'Business', ''),
(3, 5, '123', 1234, '', 'Unit', 'Business', ''),
(4, 5, 'lifog', 1883965050, '', 'Unit', 'Business', ''),
(5, 5, 'ngochai', 1883965050, '', 'Unit', 'Unit', ''),
(6, 5, 'ngochai', 1883965050, '', 'Unit', 'Unit', ''),
(7, 5, 'ngochai', 1883965050, '', 'Unit', 'Unit', ''),
(8, 5, 'ngochai', 1883965050, '', 'Unit', 'Business', ''),
(9, 5, 'do ngoc hai', 1883965050, '58 duong so 1go vap', 'Unit', 'Business', 'HUI'),
(10, 5, 'nguyen hai bang', 1883965050, 'hoc mon thanh pho ho chi minh', 'Flat', 'Business', 'Microsoft'),
(11, 5, 'nguyen hai bang', 1883965050, 'hoc mon thanh pho ho chi minh', 'Flat', 'Business', 'Microsoft'),
(12, 5, 'nguyen hai bang', 1883965050, 'hoc mon thanh pho ho chi minh', 'Unit', 'Business', 'Microsoft'),
(13, 5, 'ly tuan thanh', 1268753599, 'c?u Tham L??ng, Ph??ng 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Unit', ''),
(14, 5, 'nguyen duc huy', 1268753599, 'c?u Tham L??ng, Ph??ng 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Flat', 'Unit', ''),
(15, 4, 'le thi nhung', 1883965050, 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Unit', ''),
(16, 4, 'ngo kinh', 1268753599, 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Business', 'Apple'),
(17, 4, 'ho quy ly', 1268753599, 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Business', 'Microsoft');

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
  `driver_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`driver_id`),
  KEY `usertype` (`usertype`),
  KEY `status` (`driver_status`),
  KEY `status_2` (`driver_status`),
  KEY `status_3` (`driver_status`),
  KEY `driver_status` (`driver_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `fullname`, `username`, `password`, `email`, `address`, `phone`, `usertype`, `driver_status`) VALUES
(1, 'tài xế 1', 'taixe1', 'e10adc3949ba59abbe56e057f20f883e', 'taixe1@gmail.com', 'tp hồ chí minh', 123456789, 3, 2),
(2, 'tài xế 2', 'taixe2', 'e10adc3949ba59abbe56e057f20f883e', 'taixe2@gmail.com', 'tp hồ chí minh', 123456789, 3, 2),
(3, 'tài xế 3', 'taixe3', 'e10adc3949ba59abbe56e057f20f883e', 'taixe3@gmail.com', 'binh tan', 123456789, 3, 1),
(4, 'tài xế 4', 'taixe4', 'e10adc3949ba59abbe56e057f20f883e', 'taixe4@gmail.com', 'tp hồ chí minh', 123456789, 3, 2),
(5, 'tài xế 5', 'taixe5', 'e10adc3949ba59abbe56e057f20f883e', 'taixe5@gmail.com', 'Go Vap', 123456789, 3, 2),
(6, 'tài xế 6', 'taixe6', 'e10adc3949ba59abbe56e057f20f883e', 'taixe6@gmail.com', 'Quan 1', 123456789, 3, 2),
(7, 'tài xế 7', 'taixe7', 'e10adc3949ba59abbe56e057f20f883e', 'taixe7@gmail.com', 'Tan Binh', 123456789, 3, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(4, 'lifog', 'ngochai182007@yahoo.com', 'customer''s idea', '3213213', '2013-08-06 01:08:34 PM'),
(5, 'lifog', 'lifog721989@gmail.com', 'customer''s idea', 'ádasdasd', '2013-08-16 02:08:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `customer_id` smallint(6) NOT NULL,
  `end_address` varchar(100) NOT NULL,
  `distance` varchar(20) NOT NULL,
  `car_type` varchar(20) NOT NULL,
  `node_for_driver` varchar(50) NOT NULL,
  `time_to_go` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `status_id` tinyint(4) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `driver` smallint(6) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  KEY `customer_id_2` (`customer_id`),
  KEY `customer_id_3` (`customer_id`),
  KEY `customer_id_4` (`customer_id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `end_address`, `distance`, `car_type`, `node_for_driver`, `time_to_go`, `price`, `status_id`, `payment`, `driver`) VALUES
(1, 4, 'cho ben thanh quan 1', '11.6 km', 'AnyType', 'Waiting Out Front', '2013-07-22 08:00:00 AM', 18.7572, 1, 'direct_payment', 3),
(2, 4, 'cho ben thanh quan 1', '11.6 km', 'AnyType', 'Waiting Out Front', '2013-08-22 08:00:00 AM', 18.7572, 1, 'direct_payment', 4),
(3, 2, 'cho ben thanh quan 1', '11.6 km', 'AnyType', 'Waiting Out Front', '2013-07-22 08:00:00 AM', 18.7572, 1, 'direct_payment', 5);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger` tinyint(20) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `contact_number` char(11) NOT NULL,
  `start_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit_or_flat` varchar(10) DEFAULT NULL,
  `building_type` varchar(20) DEFAULT NULL,
  `business_name` varchar(30) DEFAULT NULL,
  `remember_detail` tinyint(1) DEFAULT NULL,
  `end_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `distance` varchar(20) NOT NULL,
  `car_type` varchar(20) DEFAULT NULL,
  `node_for_driver` varchar(50) DEFAULT NULL,
  `time_to_go` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `status_id` tinyint(4) NOT NULL,
  `payment` varchar(20) DEFAULT NULL,
  `driver` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `status` (`status_id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `order_temp`
--

INSERT INTO `order_temp` (`order_id`, `passenger`, `name`, `contact_number`, `start_address`, `unit_or_flat`, `building_type`, `business_name`, `remember_detail`, `end_address`, `distance`, `car_type`, `node_for_driver`, `time_to_go`, `price`, `status_id`, `payment`, `driver`) VALUES
(21, 5, 'ngochai', '0', '', 'Unit', 'Business', 'HUI', 1, '6', '', '0', '2', '2013-01-01 01:00:01', 0, 1, '', 1),
(22, 5, 'do ngoc hai', '1883965050', '58 duong so 1go vap', 'Unit', 'Business', 'HUI', 1, 'cho ben thanh quan 1', '', '0', '2', '2013-01-01 01:00:01', 0, 3, '', 0),
(25, 5, 'nguyen hai bang', '1883965050', 'hoc mon thanh pho ho chi minh', 'Unit', 'Business', 'Microsoft', 1, 'cho ben thanh quan 1', '', '0', '2', '2013-07-20 01:00:00 AM', 0, 3, '', 0),
(26, 5, 'do ngoc hai', '1883965050', '58 duong so 1go vap', 'Unit', 'Unit', '', 0, 'cho ben thanh quan 1', '', '0', 'Waiting Out Front', '2013-07-16 02:07:03 AM', 0, 2, '', 0),
(27, 5, 'nguyen duc huy', '1268753599', 'nguyen oanh go vapthanh pho ho chi minh', 'Unit', 'Business', 'Microsoft', 1, 'dam sen', '', '0', '2', '2013-07-20 01:00:00 AM', 0, 4, '', 0),
(30, 4, 'le thi nhung', '1883965050', 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Unit', '', 1, '395 Lê Trọng Tấn, Sơn Kỳ, Tân Phú, Ho Chi Minh City, Vietnam', '3.4 km', 'AnyType', 'Waiting Out Front', '2013-07-22 08:00:00 AM', 0, 3, 'direct_payment', 4),
(31, 4, 'ngo kinh', '1268753599', 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Business', 'Apple', 1, '25 Quốc Lộ 1A, Bình Hưng Hòa, Bình Tân, Ho Chi Minh City, Vietnam', '4.3 km', 'AnyType', 'Waiting Out Front', '2013-07-19 03:07:34 PM', 6, 3, 'direct_payment', 2),
(32, 4, 'lam phong', '1883965050', 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Unit', '', 0, '1/8 Trường Chinh, Tân Hưng Thuận, Quận 12, Ho Chi Minh City, Vietnam', '1.6 km', 'AnyType', 'Waiting Out Front', '2013-07-22 06:00:00 AM', 1.607, 3, 'direct_payment', 6),
(33, 4, 'ho quy ly', '1268753599', 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Business', 'Microsoft', 1, '383 Tân Sơn, 15, Tan Binh District, Ho Chi Minh City, Vietnam', '2.9 km', 'AnyType', 'Waiting Out Front', '2013-07-19 03:07:02 PM', 4.6603, 3, 'direct_payment', 5),
(34, 5, 'nguyen hai bang', '01883965050', 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Unit', '', 0, 'TL 847, tt. Mỹ An, Thap Muoi District, Dong Thap province, Vietnam', '114 km', 'AnyType', 'Waiting Out Front', '2013-07-29 04:07:23 PM', 184.338, 1, 'direct_payment', 0),
(35, 4, 'lifog', '01883965050', 'cầu Tham Lương, Phường 15, Tan Binh District, Ho Chi Minh City, Vietnam', 'Unit', 'Business', 'HUI', 0, 'cho ben thanh', '11.6 km', 'AnyType', 'Waiting Out Front', '2013-08-06 09:00:00 AM', 18.7572, 1, 'direct_payment', 0);

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
  ADD CONSTRAINT `driver_ibfk_2` FOREIGN KEY (`driver_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `order_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`manager`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`driver`) REFERENCES `driver` (`driver_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_5` FOREIGN KEY (`status`) REFERENCES `order_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_temp`
--
ALTER TABLE `order_temp`
  ADD CONSTRAINT `order_temp_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `order_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
