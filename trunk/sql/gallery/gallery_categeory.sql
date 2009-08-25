-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2009 at 10:39 AM
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
-- Table structure for table `gallery_categeory`
--

DROP TABLE IF EXISTS `gallery_categeory`;
CREATE TABLE IF NOT EXISTS `gallery_categeory` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `catname` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parentid` int(20) NOT NULL,
  `active` int(10) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `gallery_categeory`
--

INSERT INTO `gallery_categeory` (`id`, `catname`, `parentid`, `active`, `update_date`) VALUES
(11, 'తారామణులు', 0, 0, '2009-08-22 10:46:29'),
(12, 'దేవుళ్ళు', 0, 0, '2009-08-22 10:47:05'),
(13, 'సినిమా', 0, 0, '2009-08-22 10:47:20'),
(14, 'అనుష్క', 11, 0, '2009-08-22 10:55:41'),
(15, 'సాయి బాబా', 12, 0, '2009-08-22 11:01:05'),
(16, 'వినాయకుడు', 12, 0, '2009-08-22 11:01:49'),
(17, 'ప్రస్థానం', 13, 0, '2009-08-22 11:02:11'),
(18, 'శ్రియ', 11, 0, '2009-08-25 14:36:37'),
(19, 'జెనిలియా', 11, 0, '2009-08-22 11:53:23'),
(20, 'ఫోటో గ్యాలరీ', 0, 0, '2009-08-25 13:49:14'),
(21, 'పువ్వులు', 20, 0, '2009-08-25 13:50:22'),
(22, 'హీరోస్', 20, 0, '2009-08-25 14:36:46'),
(23, 'హీరోయిన్స్', 20, 0, '2009-08-25 14:37:20'),
(24, 'కమిడియన్స్', 20, 0, '2009-08-25 14:34:02');
