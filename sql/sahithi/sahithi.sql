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
-- Table structure for table `sahithi`
--

DROP TABLE IF EXISTS `sahithi`;
CREATE TABLE IF NOT EXISTS `sahithi` (
  `id` int(10) NOT NULL auto_increment,
  `cat_id` int(10) NOT NULL,
  `heading` varchar(150) character set utf8 collate utf8_unicode_ci NOT NULL,
  `summary` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `description` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `homepage` int(1) NOT NULL default '0',
  `active` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sahithi`
--

INSERT INTO `sahithi` (`id`, `cat_id`, `heading`, `summary`, `description`, `insert_date`, `homepage`, `active`) VALUES
(2, 1, 'సంక్రాంతి', 'సంక్రాంతి పండగ జరుపుకోవడానికి', 'సంక్రాంతి పండగ జరుపుకోవడానికి', '2009-08-19 13:35:08', 0, 0),
(4, 1, 'hgf', 'h', 'hg', '2009-08-19 14:28:55', 0, 0);
