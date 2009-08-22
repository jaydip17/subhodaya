-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2009 at 02:06 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahila`
--

DROP TABLE IF EXISTS `mahila`;
CREATE TABLE IF NOT EXISTS `mahila` (
  `id` int(10) NOT NULL auto_increment,
  `cat_id` int(10) NOT NULL,
  `heading` varchar(150) character set utf8 collate utf8_unicode_ci NOT NULL,
  `summary` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `description` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `homepage` int(1) NOT NULL default '0',
  `active` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `mahila`
--

INSERT INTO `mahila` (`id`, `cat_id`, `heading`, `summary`, `description`, `insert_date`, `homepage`, `active`) VALUES
(31, 1, 'ఆడ వాళ్ళ ప్రత్యేకం', 'ఆడ వాళ్ళ ప్రత్యేకం', 'ఆడ వాళ్ళ ప్రత్యేకం', '2009-08-22 19:33:55', 0, 1),
(32, 1, 'ఆడ వాళ్ళ ప్రత్యేకం', 'ఆడ వాళ్ళ ప్రత్యేకం', 'ఆడ వాళ్ళ ప్రత్యేకం', '2009-08-22 19:33:55', 0, 1);
