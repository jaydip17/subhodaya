-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2009 at 05:52 AM
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
-- Table structure for table `astrolagy_cat`
--

CREATE TABLE IF NOT EXISTS `astrolagy_cat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `astrolagy_cat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `astrolagy_cat`
--

INSERT INTO `astrolagy_cat` (`id`, `astrolagy_cat`, `insert_date`) VALUES
(1, 'దినఫలాలు', '2009-12-17 00:00:00'),
(2, 'వారఫలాలు', '2009-12-17 00:00:00'),
(3, 'మాసఫాలాలు', '2009-12-17 00:00:00'),
(4, 'వార్శికఫలాలు', '2009-12-17 00:00:00');
