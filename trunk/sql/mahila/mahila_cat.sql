-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2009 at 11:26 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahila_cat`
--

DROP TABLE IF EXISTS `mahila_cat`;
CREATE TABLE IF NOT EXISTS `mahila_cat` (
  `id` int(10) NOT NULL auto_increment,
  `cat_name` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mahila_cat`
--

INSERT INTO `mahila_cat` (`id`, `cat_name`, `active`) VALUES
(1, 'ఆడ వాళ్ళ ప్రత్యేకం', 1),
(2, 'హోం & కెరీర్', 0),
(3, 'ఫ్యాషన్', 0),
(4, 'యోగ', 0),
(5, 'డైట్ & హెల్త్', 0),
(6, 'మేహెంది', 0),
(7, 'బ్యూటీ టిప్స్ ', 0),
(8, 'ఫుడ్', 0);
