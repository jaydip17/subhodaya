-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2010 at 11:17 AM
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
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) NOT NULL,
  `dist_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `dist_name`, `active`) VALUES
(1, 'కడప', 0),
(2, 'హైదరాబాద్ ', 0),
(3, 'నెల్లూరు ', 0),
(4, 'చిత్తూరు ', 0),
(5, 'అనంతపూర్ ', 0),
(6, 'ప్రకాశం', 0),
(7, 'కర్నూల్', 0),
(8, 'మహబూబ్ నగర్ ', 0),
(9, 'గుంటూరు', 0),
(10, 'కృష్ణ ', 0),
(11, 'వెస్ట్ గోదావరి ', 0),
(12, 'ఈస్ట్ గోదావరి ', 0),
(13, 'విశాఖ పట్నం ', 0),
(14, 'శ్రీకాకుళం ', 0),
(15, 'విజయనగరం ', 0),
(16, 'ఖమ్మం ', 0),
(17, 'నల్గొండ ', 0),
(18, 'రంగారెడ్డి ', 0),
(19, 'మెదక్ ', 0),
(20, 'వరంగల్ ', 0),
(21, 'కరీంనగర్ ', 0),
(22, 'నిజామాబాద్ ', 0),
(23, 'ఆదిలాబాద్ ', 0);
