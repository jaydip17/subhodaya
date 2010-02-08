-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2010 at 09:06 AM
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
-- Table structure for table `gallery_images1`
--

CREATE TABLE IF NOT EXISTS `gallery_images1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoryid` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `views` int(10) NOT NULL,
  `active` int(5) NOT NULL,
  `insertdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imagepath` varchar(80) NOT NULL,
  `ipaddress` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `gallery_images1`
--

INSERT INTO `gallery_images1` (`id`, `categoryid`, `title`, `views`, `active`, `insertdate`, `imagepath`, `ipaddress`) VALUES
(35, 32, '<br>', 0, 0, '2010-02-06 11:17:37', '1265435250', '127.0.0.1'),
(33, 30, '<br>', 0, 0, '2010-02-05 18:11:27', '1265373685', '127.0.0.1'),
(34, 32, '<br>', 0, 0, '2010-02-06 11:15:29', '1265435121', '127.0.0.1');
