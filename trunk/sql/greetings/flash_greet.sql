-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2009 at 09:26 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `flash_greet`
--

CREATE TABLE `flash_greet` (
  `id` int(10) NOT NULL auto_increment,
  `text` varchar(250) character set utf8 collate utf8_unicode_ci NOT NULL,
  `link` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `flash_greet`
--

INSERT INTO `flash_greet` (`id`, `text`, `link`) VALUES
(3, 'asdfdfghfghfgh', ''),
(4, 'all the best', ''),
(5, 'good morning', ''),
(6, 'birthday', ''),
(7, 'miss u', ''),
(8, 'miss u', ''),
(10, 'sorry ksheminchu', 'inner/5/1');
