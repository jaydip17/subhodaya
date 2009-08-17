-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2009 at 05:23 AM
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
-- Table structure for table `greeting_cat`
--

CREATE TABLE IF NOT EXISTS `greeting_cat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gree_cat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `greeting_cat`
--

INSERT INTO `greeting_cat` (`id`, `gree_cat`, `active`) VALUES
(1, 'పుట్టినరోజు', 0),
(2, 'ప్రేమ', 0),
(3, 'మథర్స్ డే', 0),
(4, 'స్నేహితుల రోజు', 0),
(5, 'గాంధీ జయంతి', 0),
(6, 'పెళ్లి రోజు', 0),
(7, 'స్వాతంత్ర్య దినోత్సవం', 0),
(8, 'ధన్యవాదాలు ', 0),
(9, 'నూతన సంవత్సరం', 0),
(10, 'పండుగలు', 0),
(11, 'అల్ ది బెస్ట్ ', 0),
(12, 'మిస్ యు', 0),
(13, 'క్షమించు(సారీ)', 0),
(14, 'సుస్వాగతం', 0),
(15, 'అభినందనలు', 0);
