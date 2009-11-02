-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2009 at 11:03 AM
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
-- Table structure for table `subhodaya_spec`
--

CREATE TABLE IF NOT EXISTS `subhodaya_spec` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `eng_heading` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subhodaya_spec`
--

INSERT INTO `subhodaya_spec` (`id`, `heading`, `eng_heading`, `summary`, `description`, `active`, `insert_date`) VALUES
(5, 'dfgsdfg', '', 'xcvgsdfgdfg', 'cvzxvdfsdfsdf', 1, '2009-10-30 13:20:31'),
(4, 'sdfgdfg', '', 'sdfgsdfg', 'sdgfsdgdgf', 1, '2009-10-30 13:18:10'),
(3, 'xcvxc', '', 'arftasdfasdf', 'asdfasdfdfsdf<br>', 0, '2009-10-30 11:59:03'),
(6, 'zsdZczxcZXC', '', 'ZXcZXCZXCzxcZXC', 'ZXczXCzXcZXCzXC', 1, '2009-10-30 13:23:47'),
(7, 'gfhfgh', '', 'cvbxcghxcvb', 'xcvbxcvbxcvb', 1, '2009-10-30 13:28:06'),
(8, 'ఉంటే ఉండండి.. పోతే పోండి: సీఎం రోశయ్య హుకుం! ', 'ఉంటే ఉండండి.. పోతే పోండి: సీఎం రోశయ్య హుకుం! ', 'ముఖ్యమంత్రి కొణిజేటి రోశయ్య మంత్రివర్గంపై పట్టు సాధిస్తున్నారు. తనను ధిక్కరించే మంత్రులపై వేటు', 'ముఖ్యమంత్రి\nకొణిజేటి రోశయ్య మంత్రివర్గంపై పట్టు సాధిస్తున్నారు. తనను ధిక్కరించే\nమంత్రులపై వేటు వేయాలని నిర్ణయించుకున్నారు. ఇందుకోసం ఆయన స్వభానికి\nవిరుద్ధంగా కాస్త కఠిన వైఖరిని అవలంభించాలని నిశ్చయించుకున్నారు.\nఅందులోభాగమే.. కొండ సురేఖ మంత్రి పదవికి రాజీనామా చేసినట్టు సమాచారం. గురువారం\nరాష్ట్ర మంత్రివర్గ సమావేశం సీఎం రోశయ్య నేతృత్వంలో జరిగింది. ఆ\nసమావేశానికి హాజరైన కొంతమంది మంత్రులపై ఆయన గుర్రుగా ఉన్నారట. మీకు ఇష్టం\nలేకుంటే రాజీనామాలు చేయవచ్చు. మీరు కోరిన కోర్కెలు తీర్చడం నా చేతుల్లో\nలేనిపని. అందువల్ల ఇష్టం లేనివారు స్వయంగా వెళ్లిపోవచ్చు అని రోశయ్య\nరుసరుసలాడినట్టు సమాచారం. ఈ\nవ్యాఖ్యలు మంత్రి కొండా సురేఖకు తీవ్ర ఆగ్రహం తెప్పించాయి. ఆ వెంటనే ఆమె\nఇంటికి వెళ్లి తన భర్త, కుమార్తెతో తన భవిష్యత్ కార్యాచరణపై చర్చించారు.\nవారు ముగ్గురు సుదీర్ఘంగా చర్చించుకుని రాజీనామా చేయాలనే నిర్ణయానికి\nవచ్చారు. ఆ తర్వాత సురేఖ స్వయంగా రాజీనామా లేఖను తన లెటర్ ప్యాడ్‌లో\nరాశారు. దాన్ని\nజిరాక్స్ తీయించే నిమిత్తం తన పీఏను పిలిచి, జిరాక్స్ తీయించారు. అప్పటి\nవరకు పీఏకు కూడా చెప్పలేదు. ఆ తర్వాత నేరుగా గవర్నర్ అపాయింట్మెంట్\nతీసుకుని రాజ్‌భవన్‌కు వెళ్లి రాజీనామా లేఖను సమర్పించారు. ఈ విషయాన్ని\nకొండా సురేఖ రాజీనామా అనంతరం రాజ్‌భవన్ వెలుపల మీడియాకు స్వయంగా\nవెల్లడించారు. అంటే..\nఇష్టంలేని మంత్రులు బయటకు వెళ్లిపోవచ్చని రోశయ్య వ్యాఖ్యానించడం వల్లే\nసురేఖ జీర్ణించుకోలేక పోయారన్నది ఆమె సన్నిహితులు వాదన. రాజకీయాలను\nతప్పుకుంటానని రోశయ్య చెప్పినపుడు తమ నేత వైఎస్సార్ ఆయనను బలవతంగా\nఎమ్మెల్సీ చేసి ఆర్థిక మంత్రి బాధ్యతలను అప్పగించారు. దీన్ని కూడా\nవిస్మరించిన రోశయ్య అలా వ్యాఖ్యానించడం సురేఖకు ఆగ్రహం తెప్పించారు.\nరోశయ్య విషయాన్ని కూడా ఆమె మీడియా సమావేశంలో ప్రస్తావించి, ఆయనపై\nసుతిమెత్తగా విమర్శలు చేయడం గమనార్హం. ', 1, '2009-10-30 15:42:51');
