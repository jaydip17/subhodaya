-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2008 at 09:17 AM
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
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video_cat_id` int(10) NOT NULL,
  `video_uploaded` varchar(200) NOT NULL,
  `no_of_views` int(10) NOT NULL,
  `active` int(1) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `insert_date` date NOT NULL,
  `last_viewed` int(10) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `video_cat_id`, `video_uploaded`, `no_of_views`, `active`, `rating`, `insert_date`, `last_viewed`, `time`) VALUES
(68, 'బుడిగి బుడిగి ', 1, '1', 500, 0, '2.5', '2009-08-19', 0, '00:03:00'),
(69, 'బొమ్మరిల్లు ', 2, '1', 600, 0, '5.5', '2009-08-20', 0, '00:05:03'),
(70, 'నేను ఉన్నాను', 3, '1', 700, 0, '4.5', '2009-08-20', 0, '00:05:03'),
(71, 'మగధిర ', 1, '1', 700, 0, '5.5', '2009-08-20', 0, '00:05:03'),
(72, 'మగధిర ', 1, '1', 700, 0, '5.5', '2009-08-20', 0, '00:05:03');
