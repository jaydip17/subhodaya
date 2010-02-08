-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2010 at 11:18 AM
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
-- Table structure for table `districts_news`
--

CREATE TABLE IF NOT EXISTS `districts_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dist_id` int(10) NOT NULL,
  `heading` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `eng_heading` varchar(500) NOT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `districts_news`
--

INSERT INTO `districts_news` (`id`, `dist_id`, `heading`, `eng_heading`, `summary`, `description`, `insert_date`) VALUES
(3, 1, 'అస్తవ్యస్తంగా కార్డుల సర్వే', 'Kadapa | Kadapa News', 'వారం రోజుల క్రితం ప్రారంభమైన రేషన్‌ కార్డుల సర్వే అస్తవ్యస్తంగా\nమారింది. వేళాపాళా లేకుండా సరుకులు అమ్ముతున్నారు. ', 'మండల పరిధిలోఁ ఆకేపాడు వద్దనున్న అన్నమయ్యప్రాజెకఁ్ట నుంచి సోమవారం పంట పొలాలకఁ ఎంఎల్‌ఏ అమర్‌నాధరెడ్డి నీరు విడుదల చేశారు. భూగర్భజలాలు అడుగంటడంతో రైతుల శ్రేయస్సును దృష్టిలో ఉంచుకఁఁ ఆయకట్టు భూముల అభివృద్ధి కోసం కలెక్టర్‌ అనుమతితో పొలాలకఁ నీరందిస్తున్నామఁ తెలిపారు. డ్యామ్‌లో ప్రస్తుతం 1.0616 ఎంటిఎఫ్‌టి నీరు ఉన్నాయఁ, వీటిలో 280 ఎంటిఎఫ్‌టి నీటిఁ పంటకాల్వలకఁ వదులుతున్నామఁ తెలిపారు. రైతులు ఈ నీటిఁ సద్విఁయోగం చేసుకోవాలన్నారు. వర్షాలు కఁరవకపోవడంతో డివిజన్‌లోఁ పలు చెరువులు, కఁంటలు ఎండిపోయ్యాయన్నారు. బోరు నీటి ద్వారా కొంత మేరకఁ వ్యవసాయం సాగవుతోందన్నారు. కార్యక్రమంలో అన్నమయ్య ప్రాజెకఁ్ట ఇఇ కిరణ్‌కఁమార్‌రెడ్డి, డిఇలు జయరామ్‌, ఆంజనేయులు, జెఇలు గోవర్ధన్‌, నాయక్‌, కాంగ్రెస్‌ నాయకఁలు రమేష్‌నాయుడు, సుధాకర్‌, వెంకటరమణ పాల్గొన్నారు.', '2010-01-26 16:29:26'),
(4, 2, 'పంటకాల్వలకఁ నీరు విడుదల', 'Hyderabad news | News', 'మండల పరిధిలోఁ ఆకేపాడు వద్దనున్న అన్నమయ్యప్రాజెకఁ్ట నుంచి సోమవారం పంట\nపొలాలకఁ ఎంఎల్‌ఏ అమర్‌నాధరెడ్డి నీరు విడుదల చేశారు. ', 'మండల పరిధిలోఁ ఆకేపాడు వద్దనున్న అన్నమయ్యప్రాజెకఁ్ట నుంచి సోమవారం పంట పొలాలకఁ ఎంఎల్‌ఏ అమర్‌నాధరెడ్డి నీరు విడుదల చేశారు. భూగర్భజలాలు అడుగంటడంతో రైతుల శ్రేయస్సును దృష్టిలో ఉంచుకఁఁ ఆయకట్టు భూముల అభివృద్ధి కోసం కలెక్టర్‌ అనుమతితో పొలాలకఁ నీరందిస్తున్నామఁ తెలిపారు. డ్యామ్‌లో ప్రస్తుతం 1.0616 ఎంటిఎఫ్‌టి నీరు ఉన్నాయఁ, వీటిలో 280 ఎంటిఎఫ్‌టి నీటిఁ పంటకాల్వలకఁ వదులుతున్నామఁ తెలిపారు. రైతులు ఈ నీటిఁ సద్విఁయోగం చేసుకోవాలన్నారు. వర్షాలు కఁరవకపోవడంతో డివిజన్‌లోఁ పలు చెరువులు, కఁంటలు ఎండిపోయ్యాయన్నారు. బోరు నీటి ద్వారా కొంత మేరకఁ వ్యవసాయం సాగవుతోందన్నారు. కార్యక్రమంలో అన్నమయ్య ప్రాజెకఁ్ట ఇఇ కిరణ్‌కఁమార్‌రెడ్డి, డిఇలు జయరామ్‌, ఆంజనేయులు, జెఇలు గోవర్ధన్‌, నాయక్‌, కాంగ్రెస్‌ నాయకఁలు రమేష్‌నాయుడు, సుధాకర్‌, వెంకటరమణ పాల్గొన్నారు.', '2010-01-26 16:37:53');
