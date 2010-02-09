-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2010 at 08:17 AM
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
-- Table structure for table `videos_categeory`
--

CREATE TABLE IF NOT EXISTS `videos_categeory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` date NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `videos_categeory`
--

INSERT INTO `videos_categeory` (`id`, `name`, `insert_date`, `active`) VALUES
(14, 'సినిమా  ట్రైలర్స్ ', '0000-00-00', 0),
(15, 'కామెడి వీడియోస్', '0000-00-00', 0),
(16, 'బ్లాగ్ వీడియోస్', '0000-00-00', 0),
(20, 'మూవీ  సీన్స్', '0000-00-00', 0),
(21, 'మూవీ ఇంటర్వ్యూలు', '0000-00-00', 0);
