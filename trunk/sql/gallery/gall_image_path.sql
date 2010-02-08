-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2010 at 09:05 AM
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
-- Table structure for table `gall_image_path`
--

CREATE TABLE IF NOT EXISTS `gall_image_path` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `folder_path` varchar(50) NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `gall_image_path`
--

INSERT INTO `gall_image_path` (`id`, `cat_id`, `image_path`, `folder_path`, `insert_date`) VALUES
(135, 32, 'DSC_0340', '1265435250', '2010-02-06 11:17:37'),
(136, 32, 'DSC_0341', '1265435250', '2010-02-06 11:17:37'),
(134, 32, 'DSC_0339', '1265435250', '2010-02-06 11:17:37'),
(133, 32, 'DSC_0338', '1265435250', '2010-02-06 11:17:37'),
(132, 32, 'DSC_0337', '1265435250', '2010-02-06 11:17:37'),
(131, 32, 'DSC_0335', '1265435250', '2010-02-06 11:17:37'),
(130, 32, 'DSC_0333', '1265435250', '2010-02-06 11:17:37'),
(129, 32, 'DSC_0330', '1265435250', '2010-02-06 11:17:37'),
(128, 32, 'DSC_0329', '1265435250', '2010-02-06 11:17:37'),
(127, 32, 'DSC_0328', '1265435250', '2010-02-06 11:17:37'),
(126, 32, 'DSC_0327', '1265435250', '2010-02-06 11:17:37'),
(125, 32, 'DSC_0326', '1265435250', '2010-02-06 11:17:37'),
(124, 32, 'DSC_0322', '1265435250', '2010-02-06 11:17:37'),
(111, 30, 'Adurs Audio Function 1', '1265373685', '2010-02-05 18:11:27'),
(112, 30, 'Adurs Audio Function 10', '1265373685', '2010-02-05 18:11:27'),
(113, 30, 'Adurs Audio Function 11', '1265373685', '2010-02-05 18:11:27'),
(114, 30, 'Adurs Audio Function 12', '1265373685', '2010-02-05 18:11:27'),
(115, 30, 'Adurs Audio Function 16', '1265373685', '2010-02-05 18:11:27'),
(116, 30, 'Adurs Audio Function 2', '1265373685', '2010-02-05 18:11:27'),
(117, 30, 'Adurs Audio Function 3', '1265373685', '2010-02-05 18:11:27'),
(118, 30, 'Adurs Audio Function 4', '1265373685', '2010-02-05 18:11:27'),
(119, 30, 'Adurs Audio Function 5', '1265373685', '2010-02-05 18:11:27'),
(120, 30, 'Adurs Audio Function 6', '1265373685', '2010-02-05 18:11:27'),
(121, 30, 'Adurs Audio Function 8', '1265373685', '2010-02-05 18:11:27'),
(122, 30, 'Adurs Audio Function 9', '1265373685', '2010-02-05 18:11:27'),
(123, 30, 'NTR Adhurs Audio Function', '1265373685', '2010-02-05 18:11:27');
