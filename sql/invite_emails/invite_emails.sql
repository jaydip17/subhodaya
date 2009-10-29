-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2009 at 08:58 AM
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
-- Table structure for table `invite_emails`
--

CREATE TABLE IF NOT EXISTS `invite_emails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=292 ;

--
-- Dumping data for table `invite_emails`
--

INSERT INTO `invite_emails` (`id`, `email`, `active`, `insert_date`) VALUES
(291, 'sreetha86@gmail.com', 0, '2009-10-29 13:52:13'),
(290, 'purushgonuguntla@gmail.com', 0, '2009-10-29 13:52:13'),
(289, 'pravallika.pra@gmail.com', 0, '2009-10-29 13:52:12'),
(288, 'malli_gowra86@yahoo.co.in', 0, '2009-10-29 13:52:12'),
(287, 'babjiy123@gmail.com', 0, '2009-10-29 13:49:55'),
(286, 'balumkn@gmail.com', 0, '2009-10-29 13:49:55'),
(285, 'k?m@r?', 0, '2009-10-29 13:49:55'),
(284, 'wellwisher_mr@yahoo.com', 0, '2009-10-29 13:49:55'),
(283, 'vivek.vivek111@gmail.com', 0, '2009-10-29 13:49:55'),
(282, 'vinu_cuty1989@yahoo.co.in', 0, '2009-10-29 13:49:55'),
(281, 'kattavenkatshiva@gmail.com', 0, '2009-10-29 13:49:55'),
(280, 'gauravicky23@gmail.com', 0, '2009-10-29 13:49:55'),
(279, 'vijaykumargupta.m@gmail.com', 0, '2009-10-29 13:49:55'),
(278, 'vasuda.ani@gmail.com', 0, '2009-10-29 13:49:55'),
(277, 'sri.upendrababu@gmail.com', 0, '2009-10-29 13:49:55'),
(276, 'upendra@ivoice.in', 0, '2009-10-29 13:49:55'),
(275, 'thabreez.shaik@gmail.com', 0, '2009-10-29 13:49:55'),
(274, 'sunilvishnumba@gmail.com', 0, '2009-10-29 13:49:55'),
(273, 'vsujatha87@gmail.com', 0, '2009-10-29 13:49:55'),
(272, 'subbareddyonline4u@gmail.com', 0, '2009-10-29 13:49:55'),
(271, 'srivalli.ou@gmail.com', 0, '2009-10-29 13:49:55'),
(270, 'sriupendraivoice@gmail.com', 0, '2009-10-29 13:49:55'),
(269, 'sri.sravani@gmail.com', 0, '2009-10-29 13:49:55'),
(268, 'sreetha86@gmail.com', 0, '2009-10-29 13:49:55'),
(267, 'sree.sravani@gmail.com', 0, '2009-10-29 13:49:55'),
(266, 'sreedevichinni@gmail.com', 0, '2009-10-29 13:49:55'),
(265, 'sowjanyaakumalla@gmail.com', 0, '2009-10-29 13:49:55'),
(264, 'snadhyag66@gmail.com', 0, '2009-10-29 13:49:55'),
(263, 'sankar.rallapalli@gmail.com', 0, '2009-10-29 13:49:55'),
(262, 'sivaramprasad.k@gmail.com', 0, '2009-10-29 13:49:55'),
(261, 'sivakumar.katam@gmail.com', 0, '2009-10-29 13:49:55'),
(260, 'swethasrim@gmail.com', 0, '2009-10-29 13:49:55'),
(259, 'sandhya.smails72@gmail.com', 0, '2009-10-29 13:49:54'),
(258, 'satyatlc@gmail.com', 0, '2009-10-29 13:49:54'),
(257, 'reddemma13@gmail.com', 0, '2009-10-29 13:49:54'),
(256, 'reddeiahkasthuri@gmail.com', 0, '2009-10-29 13:49:54'),
(255, 'ravi.bluedart@gmail.com', 0, '2009-10-29 13:49:54'),
(254, 'nagoluravi@gmail.com', 0, '2009-10-29 13:49:54'),
(253, 'ratnamala.y@harvest-soft.com', 0, '2009-10-29 13:49:54'),
(252, 'rampelli.pradeep@oucemca.com', 0, '2009-10-29 13:49:54'),
(251, 'ramesh@harvest-soft.com', 0, '2009-10-29 13:49:54'),
(250, 'rameshpalukuri31@gmail.com', 0, '2009-10-29 13:49:54'),
(249, 'lakshmi200733@gmail.com', 0, '2009-10-29 13:49:54'),
(248, 'rajeshkumargaade@gmail.com', 0, '2009-10-29 13:49:54'),
(247, 'bluemoonrajesh@gmail.com', 0, '2009-10-29 13:49:54'),
(246, 'purushug@gmail.com', 0, '2009-10-29 13:49:54'),
(245, 'purushg2008@gmail.com', 0, '2009-10-29 13:49:54'),
(244, 'purushgonuguntla@gmail.com', 0, '2009-10-29 13:49:54'),
(243, 'pravallika.pra@gmail.com', 0, '2009-10-29 13:49:54'),
(242, 'prasad.ns@harvest-soft.com', 0, '2009-10-29 13:49:54'),
(241, 'pradeep@tech-pundits.com', 0, '2009-10-29 13:49:54'),
(240, 'penchal527@gmail.com', 0, '2009-10-29 13:49:54'),
(239, 'nsanthi.msw@gmail.com', 0, '2009-10-29 13:49:54'),
(238, 'nskr.si@gmail.com', 0, '2009-10-29 13:49:54'),
(237, 'nrp_in@yahoo.com', 0, '2009-10-29 13:49:54'),
(236, 'nmunirathnammba@gmail.com', 0, '2009-10-29 13:49:54'),
(235, 'nagesh940@gmail.com', 0, '2009-10-29 13:49:54'),
(234, 'nagaharisha@gmail.com', 0, '2009-10-29 13:49:54'),
(233, 'malleswar_chennupati@yahoo.co.in', 0, '2009-10-29 13:49:54'),
(232, 'malli_gowra86@yahoo.co.in', 0, '2009-10-29 13:49:54'),
(231, 'malli.mr143@gmail.com', 0, '2009-10-29 13:49:54'),
(230, 'naidu@001-4127228144', 0, '2009-10-29 13:49:54'),
(229, 'madhu1030@gmail.com', 0, '2009-10-29 13:49:54'),
(228, 'machineni@ivoice.in', 0, '2009-10-29 13:49:54'),
(227, 'valluru.sujatha@gmail.com', 0, '2009-10-29 13:49:54'),
(226, 'krishna.urfrnd@gmail.com', 0, '2009-10-29 13:49:54'),
(225, 'dkrish2020@yahoo.co.in', 0, '2009-10-29 13:49:54'),
(224, 'kiranbabu.p@harvest-soft.com', 0, '2009-10-29 13:49:54'),
(223, 'kancharlasandhya@gmail.com', 0, '2009-10-29 13:49:54'),
(222, 'kanakadri@gmail.com', 0, '2009-10-29 13:49:54'),
(221, 'kakarlababu999@gmail.com', 0, '2009-10-29 13:49:54'),
(220, 'balupolina@gmail.com', 0, '2009-10-29 13:49:54'),
(219, 'jaggu.13012@gmail.com', 0, '2009-10-29 13:49:54'),
(218, 'hairaghuramin@gmail.com', 0, '2009-10-29 13:49:54'),
(217, 'gollamudi.ak@gmail.com', 0, '2009-10-29 13:49:53'),
(216, 'giribabu.mannuru@gmail.com', 0, '2009-10-29 13:49:53'),
(215, 'santhiroyal19@gmail.com', 0, '2009-10-29 13:49:53'),
(214, 'ramtejg@gmail.com', 0, '2009-10-29 13:49:53'),
(213, 'eswathi4u@gmail.com', 0, '2009-10-29 13:49:53'),
(212, 'goodfriend020304@gmail.com', 0, '2009-10-29 13:49:53'),
(211, 'dilipeswarana@gmail.com', 0, '2009-10-29 13:49:53'),
(210, 'palurudhamu@gmail.com', 0, '2009-10-29 13:49:53'),
(209, 'crchandraiah@yahoo.co.in', 0, '2009-10-29 13:49:53'),
(208, 'charigopal@gmail.com', 0, '2009-10-29 13:49:53'),
(207, 'chandu.paluru@gmail.com', 0, '2009-10-29 13:49:53'),
(206, 'bbreddy21@gmail.com', 0, '2009-10-29 13:49:53'),
(205, 'bharath.sakaray@gmail.com', 0, '2009-10-29 13:49:53'),
(204, 'venkat771220@gmail.com', 0, '2009-10-29 13:49:53'),
(203, 'balu860@gmail.com', 0, '2009-10-29 13:49:53'),
(202, 'balusreekanth@gmail.com', 0, '2009-10-29 13:49:53'),
(201, 'balumunikumar@gmail.com', 0, '2009-10-29 13:49:53'),
(200, 'reddikrishnabalu@gmail.com', 0, '2009-10-29 13:49:53'),
(199, 'balusthegreat@gmail.com', 0, '2009-10-29 13:49:53'),
(198, 'balakalyanm@gmail.com', 0, '2009-10-29 13:49:53'),
(197, 'balakalyan@gmail.com', 0, '2009-10-29 13:49:53'),
(196, 'anjan87@gmail.com', 0, '2009-10-29 13:49:53'),
(195, 'vasu_ani_07@yahoo.co.in', 0, '2009-10-29 13:49:53'),
(194, 'amarbt@gmail.com', 0, '2009-10-29 13:49:53'),
(193, 'dragonflies_akash@yahoo.co.in', 0, '2009-10-29 13:49:53');
