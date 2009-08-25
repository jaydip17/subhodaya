-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2009 at 10:40 AM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `title`, `parentid`, `active`) VALUES
(4, 'అనుష్క-రవితేజ ', 14, 0),
(5, 'షిరిడి సాయి బాబా', 15, 0),
(6, 'అనుష్క&nbsp; <br>', 14, 0),
(7, 'ప్రస్తానం <br>', 17, 0),
(8, 'శ్రియ&nbsp; <br>', 18, 0),
(9, 'ప్రస్తానం <br>', 17, 0),
(10, 'సాయి <br>', 15, 0),
(11, 'జెనిలియా', 19, 0),
(12, 'జెనిలియా', 19, 0),
(13, 'జెనిలియా', 19, 0),
(14, 'ప్రస్థానం', 17, 0),
(15, 'ప్రస్థానం', 17, 0),
(16, 'ప్రస్థానం', 17, 0),
(17, 'ప్రస్థానం', 17, 0),
(18, 'ప్రస్థానం', 17, 0),
(19, 'ప్రస్థానం', 17, 0),
(20, 'రామ్ చరణ్ తెజ', 22, 0),
(21, 'రామ్ చరణ్ తెజ', 22, 0),
(22, 'చిరంజీవి', 22, 0),
(23, 'చిరంజీవి', 22, 0),
(24, 'చిరంజీవి', 22, 0),
(25, 'చరణ్ తెజ <br>', 22, 0),
(26, 'పవన్ కళ్యాణ్', 22, 0),
(27, 'పవన్ కళ్యాణ్', 22, 0);
