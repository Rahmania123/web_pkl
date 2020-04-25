-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2020 at 04:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grafik`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE IF NOT EXISTS `donasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `no_rek` int(11) DEFAULT NULL,
  `validasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `jumlah`, `tanggal`, `bank`, `no_rek`, `validasi`) VALUES
(1, 'Suci', 100, '2020-04-21 23:54:01', 'BRI', 2147483647, NULL),
(2, 'dinda', 200, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(3, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(4, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL),
(5, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(6, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL),
(7, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(8, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL),
(9, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(10, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL),
(11, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(12, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL),
(13, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(14, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL),
(15, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(16, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL),
(17, 'Gea', 100, '0000-00-00 00:00:00', 'BNI', 2147483647, NULL),
(18, 'Danang', 500, '0000-00-00 00:00:00', 'BTN', 2147483647, NULL);
