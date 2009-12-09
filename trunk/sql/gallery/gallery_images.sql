-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2009 at 11:14 AM
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
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `title`, `parentid`, `active`, `views`, `insert_date`) VALUES
(1, 'hello malli', 2, 0, 100, '0000-00-00 00:00:00'),
(2, 'hello malli', 2, 0, 100, '0000-00-00 00:00:00'),
(3, 'hello malli', 2, 0, 100, '0000-00-00 00:00:00'),
(4, 'hello malli', 2, 0, 100, '0000-00-00 00:00:00'),
(5, 'చంద్రబాబు నాయుడు', 15, 1, 100, '0000-00-00 00:00:00'),
(6, 'వై.ఎస్.అర్. రెడ్డి&nbsp; <br>', 17, 1, 100, '0000-00-00 00:00:00'),
(7, 'వై.ఎస్.అర్. రెడ్డి&nbsp; <br>', 17, 1, 100, '0000-00-00 00:00:00'),
(8, 'వై.ఎస్.అర్.<br>', 17, 1, 100, '0000-00-00 00:00:00'),
(9, 'చంద్రబాబు', 15, 1, 100, '0000-00-00 00:00:00'),
(10, 'చంద్రబాబు', 15, 0, 100, '0000-00-00 00:00:00'),
(11, 'వై .ఎస్.', 17, 1, 100, '0000-00-00 00:00:00'),
(12, 'వై .ఎస్.', 17, 1, 122, '0000-00-00 00:00:00'),
(13, 'వై .ఎస్.ఆర్.', 17, 1, 108, '0000-00-00 00:00:00'),
(14, 'dfsdf dsf sdfds<br>', 15, 1, 100, '0000-00-00 00:00:00'),
(15, 'sdasd', 15, 0, 106, '0000-00-00 00:00:00'),
(16, 'sdasd', 15, 0, 102, '0000-00-00 00:00:00'),
(17, 'అనుష్క', 22, 1, 101, '0000-00-00 00:00:00'),
(18, 'kerthi chavla<br>', 21, 0, 103, '0000-00-00 00:00:00'),
(19, 'nayanatara', 22, 0, 101, '0000-00-00 00:00:00'),
(20, 'chiranjivi1', 21, 1, 171, '0000-00-00 00:00:00'),
(21, 'valli', 25, 0, 101, '0000-00-00 00:00:00'),
(22, 'raji', 26, 0, 101, '0000-00-00 00:00:00'),
(23, 'pradeep', 27, 0, 100, '0000-00-00 00:00:00'),
(24, 'sujatha', 28, 0, 100, '0000-00-00 00:00:00'),
(25, 'chiranjivi', 21, 0, 165, '0000-00-00 00:00:00'),
(26, 'anushka', 29, 0, 192, '2009-10-06 18:04:36'),
(27, 'anushka', 29, 0, 113, '2009-10-06 19:13:31'),
(28, 'anushka', 29, 0, 103, '2009-10-06 19:13:54'),
(29, 'anushka', 29, 0, 109, '2009-10-06 19:14:12'),
(30, 'anushka with saree<br>', 29, 0, 100, '2009-10-07 12:45:10'),
(31, 'anushka', 29, 0, 100, '2009-10-07 12:52:12'),
(32, 'anushka', 29, 0, 100, '2009-10-07 12:52:39'),
(33, 'anushka', 29, 0, 101, '2009-10-07 13:02:35'),
(34, 'anushka', 29, 0, 124, '2009-10-07 13:11:16'),
(35, 'kajal', 30, 0, 103, '2009-10-07 15:49:09'),
(36, 'asin', 22, 0, 100, '2009-10-24 00:00:00'),
(37, 'chandra babu<br>', 15, 0, 100, '2009-12-09 00:00:00');
