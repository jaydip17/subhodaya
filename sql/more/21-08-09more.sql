-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2008 at 09:10 AM
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
-- Table structure for table `more`
--

DROP TABLE IF EXISTS `more`;
CREATE TABLE IF NOT EXISTS `more` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `matter` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `more`
--

INSERT INTO `more` (`id`, `matter`, `active`) VALUES
(1, 'మరిన్ని ..', 0),
(2, 'ఇంకా చదవండి ', 0),
(3, 'హొమ్', 0),
(4, 'వార్తలు', 0),
(5, 'సినిమా ', 0),
(6, 'వీడియో', 0),
(7, 'గ్యాలరీ ', 0),
(8, 'గ్రీటింగ్స్ ', 0),
(9, 'మహిళ', 0),
(10, 'సాహితి ', 0),
(11, 'రాజికీయాలు', 0),
(12, 'క్రీడలు ', 0),
(13, 'టాక్ అఫ్ టుడే', 0),
(14, 'ఫోటోగ్యాలరీ ', 0),
(15, 'టాప్ వ్యూ ', 0),
(16, 'టాప్ రేటెడ్', 0),
(17, 'మీ అభిప్రాయం', 0),
(18, 'వీడియోస్', 0),
(19, 'అవును', 0),
(20, ' కాదు', 0),
(21, 'తెలియదు', 0),
(22, 'ఇన్వైట్ ఫ్రెండ్స్ వయా ఇ-మెయిల్ ', 0),
(23, 'ఇది నిజం', 0),
(24, 'ముఖ్యమైన  గ్రీటింగ్స్ ', 0),
(25, 'మునుపటి పేజి', 0),
(26, 'లేటెస్ట్ వీడియోస్ ', 0),
(27, 'హాట్  వీడియోస్ ', 0),
(28, 'టాప్  వీడియోస్', 0),
(29, 'మొత్తం  వీడియోస్ ', 0),
(30, 'రేటింగ్', 0),
(33, 'జీవి రేటింగ్  ', 0),
(34, 'మ్యూజిక్  వీడియోస్', 0),
(35, 'కామెడి వీడియోస్', 0),
(36, 'మూవీస్ మరియు ఫిలిం మేకేర్స్  వీడియోస్', 0);
