-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2009 at 05:51 AM
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
-- Table structure for table `astrolagy_types`
--

CREATE TABLE IF NOT EXISTS `astrolagy_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `astrolagy_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `astrolagy_types`
--

INSERT INTO `astrolagy_types` (`id`, `astrolagy_type`) VALUES
(1, 'మేషం'),
(2, 'వృషభం'),
(3, 'మిథునం'),
(4, 'కర్కాటకం'),
(5, 'సింహం'),
(6, 'కన్య'),
(7, 'తుల'),
(8, 'వృశ్చికం'),
(9, 'ధనస్సు'),
(10, 'మకరం'),
(11, 'కుంభం'),
(12, 'మీనం');
