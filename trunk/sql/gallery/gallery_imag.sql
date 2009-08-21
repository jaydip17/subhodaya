-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2009 at 07:01 AM
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
-- Table structure for table `gallery_imag`
--

CREATE TABLE IF NOT EXISTS `gallery_imag` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subcat_id` varchar(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gallery_imag`
--

INSERT INTO `gallery_imag` (`id`, `subcat_id`, `name`, `insert_date`, `active`) VALUES
(1, '1', 'శ్రియ న్యూ', '2009-08-20 15:32:51', 0),
(4, '2', 'అనుష్క -రవితేజ', '2009-08-21 10:06:56', 0),
(3, '2', 'అనుష్క గ్యాలరి ', '2009-08-20 16:22:44', 0),
(5, '2', 'అనుష్క -రవితేజ', '2009-08-21 10:17:00', 0);
