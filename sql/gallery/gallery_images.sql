-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2009 at 01:37 PM
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
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
CREATE TABLE IF NOT EXISTS `gallery_images` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parentid` int(20) NOT NULL,
  `active` int(10) NOT NULL,
  `views` int(10) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `title`, `parentid`, `active`, `views`) VALUES
(1, 'hello malli', 2, 0, 100),
(2, 'hello malli', 2, 0, 100),
(3, 'hello malli', 2, 0, 100),
(4, 'hello malli', 2, 0, 100),
(5, 'చంద్రబాబు నాయుడు', 15, 1, 100),
(6, 'వై.ఎస్.అర్. రెడ్డి&nbsp; <br>', 17, 1, 100),
(7, 'వై.ఎస్.అర్. రెడ్డి&nbsp; <br>', 17, 1, 100),
(8, 'వై.ఎస్.అర్.<br>', 17, 1, 100),
(9, 'చంద్రబాబు', 15, 1, 100),
(10, 'చంద్రబాబు', 15, 0, 100),
(11, 'వై .ఎస్.', 17, 1, 100),
(12, 'వై .ఎస్.', 17, 1, 117),
(13, 'వై .ఎస్.ఆర్.', 17, 1, 108),
(14, 'dfsdf dsf sdfds<br>', 15, 1, 100),
(15, 'sdasd', 15, 0, 106),
(16, 'sdasd', 15, 0, 102),
(17, 'అనుష్క', 22, 1, 101);
