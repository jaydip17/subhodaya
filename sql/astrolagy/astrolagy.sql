-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2009 at 05:53 AM
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
-- Table structure for table `astrolagy`
--

CREATE TABLE IF NOT EXISTS `astrolagy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `astrolagy_cat` int(10) NOT NULL,
  `astrolagy_type` int(10) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` datetime NOT NULL,
  `display_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `astrolagy`
--

INSERT INTO `astrolagy` (`id`, `astrolagy_cat`, `astrolagy_type`, `description`, `insert_date`, `display_date`) VALUES
(1, 1, 2, 'dgdfgdfh&nbsp; thughjhb juhgj<br>', '0000-00-00 00:00:00', '0000-00-00'),
(2, 1, 2, 'dfgfdhvfh gfhjgjghj<br>', '0000-00-00 00:00:00', '0000-00-00'),
(3, 1, 1, 'rgtdfhgf thjgjnhg yiyukihjkm ghjgjhgj&nbsp; yukihjk yhjkhj yjhj<br>', '0000-00-00 00:00:00', '2009-12-17'),
(4, 1, 1, 'rgtdfhgf thjgjnhg yiyukihjkm ghjgjhgj&nbsp; yukihjk yhjkhj yjhj<br>', '0000-00-00 00:00:00', '2009-12-17'),
(5, 1, 1, 'gfhgfj jhkhjk jukjh<br>', '0000-00-00 00:00:00', '2009-12-17'),
(6, 1, 2, 'ghdfgh tugj&nbsp; yjugh <br>', '0000-00-00 00:00:00', '2009-12-17');
