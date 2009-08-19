-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2009 at 10:59 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `sahithi_cat`
--

DROP TABLE IF EXISTS `sahithi_cat`;
CREATE TABLE IF NOT EXISTS `sahithi_cat` (
  `id` int(10) NOT NULL auto_increment,
  `cat_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `active` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sahithi_cat`
--

INSERT INTO `sahithi_cat` (`id`, `cat_name`, `active`) VALUES
(1, 'పండుగలు', 0),
(2, 'కథలు', 0),
(3, 'మాతృ భాష', 0),
(4, 'సామెతలు', 0),
(5, 'కవితలు', 0),
(6, 'కవిత్వం', 0),
(7, 'జానపదాలు', 0),
(8, 'వ్యాసం', 0),
(9, 'బ్యూటీ టిప్స్', 0),
(10, 'వంటింటి చిట్కాలు', 0);
