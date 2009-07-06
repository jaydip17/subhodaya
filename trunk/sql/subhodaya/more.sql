-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2009 at 06:51 AM
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
-- Table structure for table `more`
--

CREATE TABLE IF NOT EXISTS `more` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `matter` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `more`
--

INSERT INTO `more` (`id`, `matter`, `active`) VALUES
(1, 'మరిన్ని ..', 0),
(2, 'ఇంకా చదవండి ', 0),
(3, 'హొమ్', 0),
(4, 'వార్తలు', 0),
(5, 'సినిమా ', 0),
(6, 'వీడియో ', 0),
(7, 'గ్యాలరీ ', 0),
(8, 'గ్రీటింగ్స్ ', 0),
(9, 'మహిళ', 0),
(10, 'సాహితి ', 0);
