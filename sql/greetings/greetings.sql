-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2009 at 05:20 AM
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
-- Table structure for table `greetings`
--

CREATE TABLE IF NOT EXISTS `greetings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `summery` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `greetings`
--

INSERT INTO `greetings` (`id`, `type`, `name`, `summery`, `insert_date`, `active`) VALUES
(1, 1, 'జన్మదిన శుభాకాంక్షలు ... ', ' చుక్కల్లో చంద్రుదివ్  నువ్వు . చుట్టూ  చుక్కలున్న  రాలిపోయే  ఈ  చుక్కకోసం  ఎందుకురా  పరుగు  తీస్తావు ....', '2009-08-14 12:41:32', 1),
(2, 2, 'ఐ లవ్ యు', '&nbsp;ఐయామ్&nbsp; సార్చింగ్&nbsp; అండ్&nbsp; వెయిటింగ్&nbsp; ఫర్&nbsp; యు', '2009-08-14 13:14:49', 0),
(3, 1, 'పుట్టిన రోజు శుభాకాంక్షలు <br>', 'పుట్టిన రోజు వేడుకను మల్లి మల్లి జరుపుకోవాలని కోరుకుంటూ .... ఈ చిన్ని కార్డ్', '2009-08-14 16:43:39', 0),
(4, 1, 'ఐ మిస్ యు <br>', 'ఇన్&nbsp; ది&nbsp; ఫ్లవర్&nbsp; మై&nbsp; రోజ్&nbsp; ఇస్&nbsp; యు ,<br>ఇన్&nbsp; డైమెండ్&nbsp; మై&nbsp; కోహినూర్&nbsp; ఇస్&nbsp; యు ,<br>ఇన్&nbsp; ది&nbsp; స్కి&nbsp; మై&nbsp; మూన్&nbsp; ఇస్&nbsp; యు', '2009-08-15 12:44:13', 0),
(5, 12, 'ఐ మిస్ యు <br>', 'ఇన్ ది ఫ్లవర్ మై&nbsp; రోజ్&nbsp; ఇస్ యు ,<br>ఇన్ ది&nbsp; డైమెండ్&nbsp; మై&nbsp; కోహినూర్&nbsp; ఇస్&nbsp; యు<br>ఇన్&nbsp; ది&nbsp; స్కి&nbsp; మై&nbsp; మూన్&nbsp; ఇస్ యు ,<br>ఐ యాం&nbsp; ఓన్లీ బాడీ&nbsp; మై&nbsp; హార్ట్ ఇస్&nbsp; యు ,', '2009-08-15 12:52:19', 0),
(6, 12, '  I మిస్&nbsp; యు&nbsp; సో&nbsp; ముచ్ ', 'డు యు&nbsp; క్నౌ, వాట్&nbsp; ఐ&nbsp; సే, వాట్&nbsp; ఐ&nbsp; థింక్ , వాట్&nbsp; ఐ&nbsp; ఫీల్ , వాట్&nbsp; ఐ&nbsp; థింక్ , వాట్&nbsp; ఐ&nbsp; విష్ , యు&nbsp; వాంట్&nbsp; తో&nbsp; క్నౌ ? I మిస్&nbsp; యు&nbsp; సో&nbsp; ముచ్ <br>', '2009-08-15 13:29:01', 0),
(7, 10, 'ఉగాది శుభాకాంక్షలు', 'విష్ యు అ హ్యాపీ ఉగాది ', '2009-08-15 15:07:01', 0);
