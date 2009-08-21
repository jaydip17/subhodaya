-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2009 at 07:02 AM
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
-- Table structure for table `gall_subcat`
--

CREATE TABLE IF NOT EXISTS `gall_subcat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(10) NOT NULL,
  `subcat_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gall_subcat`
--

INSERT INTO `gall_subcat` (`id`, `cat_id`, `subcat_name`, `active`) VALUES
(1, '1', 'శ్రియ', 0),
(2, '1', 'అనుష్క <br>', 0),
(3, '2', 'శ్రీ కృష్ణ', 0),
(4, '3', 'ప్రస్థానం', 0);
