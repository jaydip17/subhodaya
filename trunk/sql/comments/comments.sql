-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2009 at 12:31 PM
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

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `newsid` varchar(10) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `newsid`, `mailid`, `name`, `comment`, `insert_date`) VALUES
(2, '55', 'zxzx', 'zczxc', 'csdsd', '0000-00-00 00:00:00'),
(3, '55', 'gowramalli@gmail.com', 'malleswari', 'asdfsdf', '2009-11-09 13:03:25'),
(4, '55', 'gowramalli@gmail.com', 'malleswari', 'హాయ్ మల్లీశ్వరి ', '2009-11-09 13:16:12'),
(5, '55', 'gowramalli@gmail.com', 'malleswari', 'ద్గ్త్ర్ద్గ్ట్ ', '2009-11-09 13:25:35'),
(6, '55', 'gowramalli@gmail.com', 'bala', 'hi hello hi hello hi hello hi hello hi hello hi hellohi hello hi hellohi hello hi hellohi hellohi hello', '2009-11-09 15:52:55'),
(7, '0', 'asdasdf', 'sdfasdf', 'asdfsdfsdf', '2009-11-09 16:34:21'),
(8, '0', 'asdasdf', 'sdfsadf', 'asdsadf', '2009-11-09 16:35:23'),
(9, '33', 'sdsd', 'fsdf', 'sfsdfsdf', '2009-11-09 16:36:31');
