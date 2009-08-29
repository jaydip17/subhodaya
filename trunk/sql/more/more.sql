-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2009 at 11:30 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subhodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `more`
--

DROP TABLE IF EXISTS `more`;
CREATE TABLE IF NOT EXISTS `more` (
  `id` int(10) NOT NULL auto_increment,
  `matter` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

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
(26, 'మిత్రునికి పంపించు', 0),
(27, 'సంబంధిత సంగతులు', 0),
(28, 'మీ  పేరు', 0),
(29, 'మిత్రుని ఈమెయిలు ', 0),
(30, 'ఇవి కూడా చదవండి', 0),
(31, 'వార్తల పోల్ ', 0),
(32, 'సినిమా పోల్', 0),
(33, 'లేటెస్ట్ వీడియోస్', 0),
(34, 'హాట్  వీడియోస్', 0),
(35, 'టాప్  వీడియోస్', 0),
(36, 'మొత్తం వీడియోస్', 0),
(37, 'రేటింగ్', 0),
(38, 'గ్యాలరీ మెను', 0),
(39, 'మీ ఈమెయిలు', 0),
(40, 'మిత్రుని పేరు', 0);
