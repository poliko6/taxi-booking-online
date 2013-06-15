-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2013 at 05:28 AM
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
-- Table structure for table `chitietlichhen`
--

CREATE TABLE IF NOT EXISTS `chitietlichhen` (
  `MaChiTiet` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `MaLichHen` tinyint(3) unsigned NOT NULL,
  `NgayLap` tinyint(3) unsigned DEFAULT NULL,
  `TrangThai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaChiTiet`),
  KEY `MaLichHen` (`MaLichHen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `chitietlichhen`
--

INSERT INTO `chitietlichhen` (`MaChiTiet`, `MaLichHen`, `NgayLap`, `TrangThai`) VALUES
(1, 1, 2, 'Chấp nhận'),
(2, 2, NULL, 'Hủy'),
(3, 3, 5, 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `hangxe`
--

CREATE TABLE IF NOT EXISTS `hangxe` (
  `MaXe` varchar(20) NOT NULL,
  `MaLoaiXe` varchar(10) NOT NULL,
  `TrangThai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GiaCa` int(11) NOT NULL,
  `PhamViHoatDong` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaXe`),
  KEY `MaLoaiXe` (`MaLoaiXe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hangxe`
--

INSERT INTO `hangxe` (`MaXe`, `MaLoaiXe`, `TrangThai`, `GiaCa`, `PhamViHoatDong`) VALUES
('50v1-2222', 'x4c', 'Đang chờ', 10000, 'TP HCM'),
('50v2-3322', 'x8c', 'Đang chạy', 15000, 'TPHCM và các tỉnh lân cận'),
('57v5-5141', 'x16c', 'Đang chờ', 15000, 'Các tỉnh miền tây');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `TaiKhoanKH` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `HoTen` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` int(11) unsigned NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`TaiKhoanKH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`TaiKhoanKH`, `MatKhau`, `HoTen`, `DienThoai`, `DiaChi`, `Email`) VALUES
('dongochai', 'e10adc3949ba59abbe56e057f20f883e', 'Đỗ Ngọc Hải', 1883965050, 'gò vấp, tp HCM', 'lifog721989@gmail.com'),
('NguyenDucHuy', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Đức Huy', 1268753599, 'Nguyễn Oanh, Gò Vấp, TP HCM', 'huyga@gmail.com'),
('nguyenhaibang', 'e35cf7b66449df565f93c607d5a81d09', 'Nguyễn Hải Bằng', 1212121213, 'Quận 12', 'haibang_nhc@gmail.com'),
('nguyenvana', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn A', 1282151421, 'F13, Q.Tân Bình, TpHCM', 'nguyenvana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lichhen`
--

CREATE TABLE IF NOT EXISTS `lichhen` (
  `MaLichHen` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `TaiKhoanKH` varchar(50) NOT NULL,
  `LoaiXe` varchar(10) NOT NULL,
  `Diemdon` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiemDen` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThoiGian` datetime NOT NULL,
  PRIMARY KEY (`MaLichHen`),
  KEY `LoaiXe` (`LoaiXe`),
  KEY `TaiKhoanKH` (`TaiKhoanKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lichhen`
--

INSERT INTO `lichhen` (`MaLichHen`, `TaiKhoanKH`, `LoaiXe`, `Diemdon`, `DiemDen`, `ThoiGian`) VALUES
(1, 'dongochai', 'x4c', 'F13, Q.Gò Vấp, TP.HCM', 'Đầm Sen', '2013-06-30 07:00:00'),
(2, 'NguyenDucHuy', 'x8c', 'Nguyễn Oanh Gò Vấp', 'Tân Bình', '2013-06-25 16:17:00'),
(3, 'nguyenhaibang', 'x16c', 'F13 Gò Vấp', 'Suối Tiên', '2013-06-18 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaixe`
--

CREATE TABLE IF NOT EXISTS `loaixe` (
  `MaLoaiXe` varchar(10) NOT NULL,
  `TenLoaiXe` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaLoaiXe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaixe`
--

INSERT INTO `loaixe` (`MaLoaiXe`, `TenLoaiXe`, `GhiChu`) VALUES
('x16c', 'Xe 16 chỗ', NULL),
('x4c', 'Xe 4 chỗ', 'máy lạnh đời mới '),
('x8c', 'Xe 8 chỗ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phancap`
--

CREATE TABLE IF NOT EXISTS `phancap` (
  `MaCapBac` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `TenCapBac` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaCapBac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phancap`
--

INSERT INTO `phancap` (`MaCapBac`, `TenCapBac`, `GhiChu`) VALUES
(1, 'Top admin', ''),
(2, 'Updater', '');

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE IF NOT EXISTS `quanly` (
  `TenTaiKhoan` varchar(50) NOT NULL,
  `HoTen` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CapBac` tinyint(3) unsigned NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  PRIMARY KEY (`TenTaiKhoan`),
  KEY `CapBac` (`CapBac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quanly`
--

INSERT INTO `quanly` (`TenTaiKhoan`, `HoTen`, `CapBac`, `MatKhau`) VALUES
('admin', 'Do Ngoc Hai', 2, 'e10adc3949ba59abbe56e057f20f883e'),
('nguyenduchuy', 'Nguyễn Đức Huy', 1, 'e10adc3949ba59abbe56e057f20f883e');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietlichhen`
--
ALTER TABLE `chitietlichhen`
  ADD CONSTRAINT `chitietlichhen_ibfk_1` FOREIGN KEY (`MaLichHen`) REFERENCES `lichhen` (`MaLichHen`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `hangxe`
--
ALTER TABLE `hangxe`
  ADD CONSTRAINT `hangxe_ibfk_1` FOREIGN KEY (`MaLoaiXe`) REFERENCES `loaixe` (`MaLoaiXe`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hangxe_ibfk_2` FOREIGN KEY (`MaLoaiXe`) REFERENCES `loaixe` (`MaLoaiXe`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hangxe_ibfk_3` FOREIGN KEY (`MaLoaiXe`) REFERENCES `loaixe` (`MaLoaiXe`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hangxe_ibfk_4` FOREIGN KEY (`MaLoaiXe`) REFERENCES `loaixe` (`MaLoaiXe`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hangxe_ibfk_5` FOREIGN KEY (`MaLoaiXe`) REFERENCES `loaixe` (`MaLoaiXe`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lichhen`
--
ALTER TABLE `lichhen`
  ADD CONSTRAINT `lichhen_ibfk_1` FOREIGN KEY (`LoaiXe`) REFERENCES `loaixe` (`MaLoaiXe`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `lichhen_ibfk_2` FOREIGN KEY (`TaiKhoanKH`) REFERENCES `khachhang` (`TaiKhoanKH`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `quanly_ibfk_1` FOREIGN KEY (`CapBac`) REFERENCES `phancap` (`MaCapBac`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
