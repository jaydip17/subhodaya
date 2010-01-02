-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2010 at 06:34 AM
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
-- Table structure for table `news_types`
--

DROP TABLE IF EXISTS `news_types`;
CREATE TABLE IF NOT EXISTS `news_types` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `news_cat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news_types`
--

INSERT INTO `news_types` (`id`, `news_cat`, `active`) VALUES
(1, 'రాష్ట్రీయ   వార్తలు ', 0),
(2, 'జాతీయ  వార్తలు ', 0),
(3, 'అంతర్జాతీయ వార్తలు ', 0),
(4, 'స్పోర్ట్స్  వార్తలు ', 0),
(5, 'ఆర్ధికం ', 0),
(6, 'సెటైర్', 0),
(7, 'జిల్లా వార్తలు', 0),
(8, 'క్రీడలు ', 0),
(9, 'శుభోదయ స్పెషల్', 0);
