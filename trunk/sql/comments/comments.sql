-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2010 at 09:50 AM
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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `newsid` varchar(10) NOT NULL,
  `news_type` varchar(100) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `newsid`, `news_type`, `mailid`, `name`, `comment`, `insert_date`) VALUES
(10, '42', '', '', '', '', '2009-11-10 10:15:00'),
(2, '55', '', 'zxzx', 'zczxc', 'csdsd', '0000-00-00 00:00:00'),
(3, '55', '', 'gowramalli@gmail.com', 'malleswari', 'asdfsdf', '2009-11-09 13:03:25'),
(4, '55', '', 'gowramalli@gmail.com', 'malleswari', 'హాయ్ మల్లీశ్వరి ', '2009-11-09 13:16:12'),
(5, '55', '', 'gowramalli@gmail.com', 'malleswari', 'ద్గ్త్ర్ద్గ్ట్ ', '2009-11-09 13:25:35'),
(6, '55', '', 'gowramalli@gmail.com', 'bala', 'hi hello hi hello hi hello hi hello hi hello hi hellohi hello hi hellohi hello hi hellohi hellohi hello', '2009-11-09 15:52:55'),
(7, '0', '', 'asdasdf', 'sdfasdf', 'asdfsdfsdf', '2009-11-09 16:34:21'),
(8, '0', '', 'asdasdf', 'sdfsadf', 'asdsadf', '2009-11-09 16:35:23'),
(9, '33', '', 'sdsd', 'fsdf', 'sfsdfsdf', '2009-11-09 16:36:31'),
(11, '42', '', '', 'asdfsdf', '', '2009-11-10 10:17:51'),
(12, '42', '', '', '', '', '2009-11-10 10:18:31'),
(13, '42', '', '', '', '', '2009-11-10 10:19:57'),
(14, '42', '', '', 'sdfsdf', '', '2009-11-10 10:20:05'),
(15, '42', '', '', '', '', '2009-11-10 10:21:17'),
(16, '42', '', '', 'sdfsdfg', '', '2009-11-10 10:21:25'),
(17, '42', '', '', 'dfsdfg', '', '2009-11-10 10:22:20'),
(18, '42', '', '', '', '', '2009-11-10 10:28:37'),
(19, '42', '', '', 'asdasd', '', '2009-11-10 10:30:37'),
(20, '42', '', '', '', '', '2009-11-10 10:32:04'),
(21, '42', '', '', 'sdfasdfsdfsdfasdf', '', '2009-11-10 10:32:19'),
(22, '42', '', '', '', '', '2009-11-10 10:33:35'),
(23, '42', '', '', 'dasdfsadfsadf', '', '2009-11-10 10:33:42'),
(24, '42', '', 'xcvzxc', 'dfsd', '', '2009-11-10 10:48:52'),
(25, '78', 'news', '', 'dasdasd', 'asdasdasdasd', '2010-01-02 15:42:23'),
(26, '37', 'cinema', '', 'c.ramachandraiah', 'zdfsdfsdfsf', '2010-01-02 15:45:26');
