-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2009 at 06:38 AM
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
-- Table structure for table `mahila_cat`
--

DROP TABLE IF EXISTS `mahila_cat`;
CREATE TABLE IF NOT EXISTS `mahila_cat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mahila_cat`
--

INSERT INTO `mahila_cat` (`id`, `cat_name`, `active`) VALUES
(1, 'ఆడ వాళ్ళ ప్రత్యేకం', 1),
(2, 'హోం & కెరీర్', 0),
(3, 'ఫ్యాషన్', 0),
(4, 'యోగ', 0),
(5, 'డైట్ & హెల్త్', 0),
(6, 'మేహెంది', 0),
(7, 'బ్యుటి టిప్స్', 0),
(8, 'ఆహారం', 0);
