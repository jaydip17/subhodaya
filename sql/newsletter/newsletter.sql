-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2009 at 11:52 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(10) NOT NULL default '0',
  `email` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL default '0',
  `insert_date` timestamp NOT NULL default '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `active`, `insert_date`) VALUES
(10, 'rampelli.pradeep@gmail.com', 0, '0000-00-00 00:00:00'),
(11, 'asdas@dsfd.com', 0, '0000-00-00 00:00:00'),
(13, 'vsujatha87@gmail.com', 0, '2009-06-18 17:57:08'),
(0, 'srivalli.ou@gmail.com', 0, '0000-00-00 00:00:00'),
(0, 'valli@gmail.com', 0, '0000-00-00 00:00:00');
