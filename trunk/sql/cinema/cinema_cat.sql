-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2010 at 07:34 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinema_cat`
--

DROP TABLE IF EXISTS `cinema_cat`;
CREATE TABLE IF NOT EXISTS `cinema_cat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cinema_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cinema_cat`
--

INSERT INTO `cinema_cat` (`id`, `cinema_type`, `active`) VALUES
(1, 'సినీ వార్తలు ', 0),
(2, 'సినీ పుకార్లు', 0),
(3, 'మూవీ రివ్యూస్ ', 0),
(4, 'మూవీ షెడ్యుల్ ', 0),
(5, 'ఇంటర్వ్యూస్ ', 0),
(6, 'తెర చాటు ', 0),
(7, 'శృంగారం  ', 0);
