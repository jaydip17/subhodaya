-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2009 at 04:38 AM
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
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL,
  `question` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` int(10) NOT NULL,
  `optionb` int(10) NOT NULL,
  `optionc` int(10) NOT NULL,
  `displaydate` date NOT NULL,
  `insert-date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `cat_id`, `question`, `optiona`, `optionb`, `optionc`, `displaydate`, `insert-date`, `active`) VALUES
(1, 4, 'ప్రణబ్‌ బడ్జెట్‌ ప్రజారంజకమైనదేనా?', 3, 4, 2, '0000-00-00', '2009-07-09 16:55:46', 0),
(2, 5, 'రైల్వే బడ్జెట్‌లో రాష్ట్రానికి అన్యాయం జరిగిందా? ', 0, 1, 0, '2009-07-08', '2009-07-09 17:53:50', 0),
(3, 0, '', 0, 0, 0, '0000-00-00', '2009-07-09 13:31:39', 0);
