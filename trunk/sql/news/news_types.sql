-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2010 at 03:49 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `news_types`
--

INSERT INTO `news_types` (`id`, `news_cat`, `active`) VALUES
(1, 'రాష్ట్రీయ   వార్తలు ', 1),
(2, 'జాతీయ  వార్తలు ', 1),
(3, 'అంతర్జాతీయ వార్తలు ', 1),
(4, 'స్పోర్ట్స్  వార్తలు ', 1),
(5, 'ఆర్ధికం ', 1),
(6, 'సెటైర్', 1),
(7, 'రాజికీయాలు', 1),
(8, 'క్రీడలు ', 1),
(9, 'శుభోదయ స్పెషల్', 1),
(10, 'కడప', 0),
(11, 'హైదరాబాద్', 0),
(12, 'నెల్లూరు', 0),
(13, 'చిత్తూరు', 0),
(14, 'అనంతపూర్ ', 0),
(15, 'ప్రకాశం', 0),
(16, 'కర్నూల్', 0),
(17, 'మహబూబ్ నగర్', 0),
(18, 'గుంటూరు', 0),
(19, 'కృష్ణ', 0),
(20, 'వెస్ట్ గోదావరి ', 0),
(21, 'ఈస్ట్ గోదావరి', 0),
(22, 'విశాఖ పట్నం ', 0),
(23, 'శ్రీకాకుళం ', 0),
(24, 'విజయనగరం', 0),
(25, 'ఖమ్మం ', 0),
(26, 'నల్గొండ ', 0),
(27, 'రంగారెడ్డి ', 0),
(28, 'మెదక్', 0),
(29, 'వరంగల్ ', 0),
(30, 'కరీంనగర్ ', 0),
(31, 'నిజామాబాద్', 0),
(32, 'ఆదిలాబాద్', 0);
