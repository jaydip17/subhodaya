-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2009 at 01:36 PM
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
-- Table structure for table `gall_rating`
--

CREATE TABLE IF NOT EXISTS `gall_rating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `galleryid` int(10) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `rating` varchar(100) NOT NULL DEFAULT '3.5',
  `views` int(10) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gall_rating`
--

INSERT INTO `gall_rating` (`id`, `galleryid`, `ipaddress`, `rating`, `views`) VALUES
(1, 12, '127.0.0.1', '3', 10);
