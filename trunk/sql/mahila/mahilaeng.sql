-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2010 at 06:20 AM
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
-- Table structure for table `mahila`
--

DROP TABLE IF EXISTS `mahila`;
CREATE TABLE IF NOT EXISTS `mahila` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL,
  `heading` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `engheading` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `homepage` int(1) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `views` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `mahila`
--

INSERT INTO `mahila` (`id`, `cat_id`, `heading`, `engheading`, `summary`, `description`, `insert_date`, `homepage`, `active`, `views`) VALUES
(40, 9, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', 'వర్షం లేదా వాన ఆకాశంలోని మేఘాల నుండి భూతలం పైకి నీటి బిందువుల రూపంలో కురిసే ఒక రకమైన అవపాతం. ఆకాశం నుండి కురిసిన వర్షమంతా భూమికి చేరదు. కొంత శాతం వర్షం పొడి గాలి గుండా పడుతుంటూనే గాలిలో ఆవిరైపోతుంది. కురిసిన వర్షం మొత్తం భూమికి చేరకపోవటాన్ని విర్గా అంటారు. ఈ ప్రక్రియ తరచూ ఉష్ణోగ్రత హెచ్చుగా, వాతావరణం పొడిగా ఉండే ఎడారి ప్రాంతాలలో కనిపిస్తుంది. వర్షం ఎలా సంభవిస్తుంది మరియు ఎలా కురుస్తుంది అన్న వాటికి శాస్త్రీయ వివరణను బెర్గెరాన్ ప్రక్రియ అంటారు.\r\n\r\nజలచక్రములో వర్షం ప్రధాన పాత్ర పోషిస్తుంది. సముద్రాల నుండి నీరు ఆవిరై, ఆ తేమ తిరిగి ఆకాశములో ధ్రవీభవించి బుడగలలాగా ఏర్పడిన అవపాతము ఆకాశానికి తేలుతుంది. ఆ అవపాతము వర్షముగా కురుస్తుంది. వర్షము పడిన అవపాతాన్ని తిరిగి సముద్రానికి చేర్చి నదులు ఈ చక్రాన్ని పూర్తి చేస్తాయి. మొక్కలు పీల్చుకున్న నీటిని శ్వాస క్రియలో ఆవిరిగా వాతావరణంలోకి వదులుతాయి. అలా వదిలిన ఆవిరి ఇతర నీటి అణువులను చేరి నీటి బిందువులుగా యేర్పడతాయి. సాధారంగా వర్షాన్ని అవపాత పరిమాణం మరియు అవపాతానికి కారణం అన్న రెండు అంశాలతో వర్గీకరిస్తారు.\r\n\r\nఅవపాతం, అందునా వర్షం వ్యవసాయన్ని చాలా ప్రభావితం చేస్తుంది. అన్ని మొక్కలకూ జీవించటానికి కొంతైనా నీరు అవసరం. వర్షం అత్యంత సులువైన నీరు అందజేయు పద్ధతి కాబట్టి, ఇది వ్యవసాయానికి చాల ఉపయోగకరమైనది. సాధారణంగా ఒక క్రమ పద్ధతిలో తరచూ పడే వర్షాలు మొక్కలు ఆరోగ్యముగా పెరగటానికి అవసరం కానీ అతివృష్టి, అనావృష్టి రెండూ పంటలకు ముప్పును కలుగజేస్తాయి. అన్ని దేశాలలో వ్యవసాయం ఎంతోకొంత వరకైనా వర్షంపై ఆధారపడుతుంది. భారతీయ వ్యవసాయ రంగము వర్షంపై భారీగా ఆధారపడి ఉన్నది. ముఖ్యంగా పత్తి, వరి, నూనెదినుసులు మరియు ముతక ధాన్యం పంటలు అతి ఎక్కువగా వర్షంపై ఆధారపడుతున్నవి. ఋతుపవనాలు కొన్ని రోజులు ఆలస్యమైనా, అది దేశ ఆర్ధికరంగాన్ని విపరీతంగా దెబ్బతీస్తుంది.', '2009-08-24 15:53:29', 0, 1, 0),
(39, 9, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', '2009-08-24 15:53:29', 0, 1, 0),
(38, 9, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', '2009-08-24 11:44:31', 1, 1, 0),
(37, 9, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', '2009-08-24 11:44:31', 0, 1, 0),
(36, 9, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', '', '2009-08-24 11:44:02', 0, 1, 0),
(35, 2, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', '2009-08-24 11:33:54', 0, 1, 0),
(1, 0, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం', 'ఆడ వాళ్ళ ప్రత్యేకం', '2009-08-24 11:14:46', 0, 1, 0),
(34, 2, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', '', '2009-08-24 11:33:54', 1, 1, 0),
(33, 1, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్ర...', '', '2009-08-24 11:14:32', 0, 1, 0),
(31, 1, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం', 'ఆడ వాళ్ళ ప్రత్యేకం', '2009-08-22 19:33:55', 0, 1, 0),
(32, 1, 'ఆడ వాళ్ళ ప్రత్యేకం', '', 'ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం ఆడ వాళ్ళ ప్రత్యేకం', 'ఆడ వాళ్ళ ప్రత్యేకం', '2009-08-22 19:33:55', 1, 1, 0),
(41, 3, 'ముక్కుపుడక', '', 'ముక్కుపుడక అంటే మహిళలకు ఎంత మక్కువో తెలియాలంటే పురాణాలలోని ఎన్నో', '<p>ముక్కుపుడక అంటే మహిళలకు ఎంత మక్కువో తెలియాలంటే పురాణాలలోని ఎన్నో ఉదాహరణలు ఇవ్వచ్చు. <a href="http://te.wikipedia.org/wiki/%E0%B0%AD%E0%B0%BE%E0%B0%AE%E0%B0%BE%E0%B0%95%E0%B0%B2%E0%B0%BE%E0%B0%AA%E0%B0%82" title="భామాకలాపం" class="mw-redirect">భామాకలాపంలో</a>\nఒకసారి సత్యభామ చెలికత్తెను శ్రీకృష్ణుని వద్దకు రాయబారం కోసం\nవెళ్ళమంటుంది. ఎన్ని లంచాలు ఇస్తానన్నా, ఎన్ని నగలు ఇస్తానన్నా\nవెళ్లనంటుంది. విసిగిన సత్య చివరకు అసలు నీకేం కావాలో చెప్పవే అని అడిగితే\nసత్యభామ ముక్కున ఉన్న ముక్కెర కావాలంటుంది. అది ఇవ్వగానే లంకెబెందెలు\nదొరికినంత సంతోషమ్గో శ్రీకృష్ణుని వద్దకు వెళ్ళి రాయబారం నడుపుతుంది.</p>\n<p>హిందూ దేవతలు అందరికీ ముక్కెర తప్పకుండా ఉంటుంది. బెజవాడ కృష్ణానది పొంగి కనకదుర్గమ్మ ముక్కెరను తాకితే భూమి మీద ఎవ్వరూ మిగలరని <a href="http://te.wikipedia.org/wiki/%E0%B0%AA%E0%B1%8B%E0%B0%A4%E0%B1%81%E0%B0%B2%E0%B1%82%E0%B0%B0%E0%B0%BF_%E0%B0%B5%E0%B1%80%E0%B0%B0%E0%B0%AC%E0%B1%8D%E0%B0%B0%E0%B0%B9%E0%B1%8D%E0%B0%AE%E0%B1%87%E0%B0%82%E0%B0%A6%E0%B1%8D%E0%B0%B0%E0%B0%B8%E0%B1%8D%E0%B0%B5%E0%B0%BE%E0%B0%AE%E0%B0%BF" title="పోతులూరి వీరబ్రహ్మేంద్రస్వామి">పోతులూరి వీరబ్రహ్మేంద్రస్వామి</a> గారు కాలజ్ఞానంలో చెబుతారు.</p>', '2009-08-31 13:15:54', 1, 0, 0),
(42, 7, 'బ్యుటి &amp; కెరీర్ <br>', '', '<b>ఈద్ గాహ్</b> లేదా <b>ఈద్గాహ్</b> ఒక గాలి బయట మైదాన స్థలంలోని <a href="http://te.wikipedia.org/wiki/%E0%B0%AE%E0%B0%B8%E0%B1%8D%E0%B0%9C%E0%B0%BF%E0%B0%A6%E0%B1%8D" title="మస్జిద్">మస్జిద్</a>, సాధారణంగా ఇది ', '<p><b>ఈద్ గాహ్</b> లేదా <b>ఈద్గాహ్</b> ఒక గాలి బయట మైదాన స్థలంలోని <a href="http://te.wikipedia.org/wiki/%E0%B0%AE%E0%B0%B8%E0%B1%8D%E0%B0%9C%E0%B0%BF%E0%B0%A6%E0%B1%8D" title="మస్జిద్">మస్జిద్</a>, సాధారణంగా ఇది ఊరి బయట వుంటుంది. దీనిని ఈద్ (పండుగ), గాహ్ (ప్రదేశం), ఈద్ సమయాన <a href="http://te.wikipedia.org/wiki/%E0%B0%B8%E0%B0%B2%E0%B0%BE%E0%B0%B9%E0%B1%8D" title="సలాహ్" class="mw-redirect">సలాహ్</a> (నమాజు) లేదా ఈద్ నమాజ్ చేయుటకు ఉపయోగిస్తారు.<sup id="cite_ref-0" class="reference"><a href="http://te.wikipedia.org/wiki/%E0%B0%88%E0%B0%A6%E0%B1%8D%E0%B0%97%E0%B0%BE%E0%B0%B9%E0%B1%8D#cite_note-0">[1]</a></sup></p>\n<p><a href="http://te.wikipedia.org/wiki/%E0%B0%AE%E0%B0%B9%E0%B0%AE%E0%B1%8D%E0%B0%AE%E0%B0%A6%E0%B1%81_%E0%B0%AA%E0%B1%8D%E0%B0%B0%E0%B0%B5%E0%B0%95%E0%B1%8D%E0%B0%A4" title="మహమ్మదు ప్రవక్త" class="mw-redirect">మహమ్మదు ప్రవక్త</a> దీనిని ఆచరణలోకి తీసుకు వచ్చారు.<sup>sawa</sup> ఈద్ నమాజ్ ఊరి బయట చదివే రివాజు. ఈద్ నమాజ్ ఊరి బయట చదవడం <a href="http://te.wikipedia.org/wiki/%E0%B0%B8%E0%B1%81%E0%B0%A8%E0%B1%8D%E0%B0%A8%E0%B0%B9%E0%B1%8D" title="సున్నహ్">సున్నహ్</a> కూడానూ.<sup id="cite_ref-1" class="reference"><a href="http://te.wikipedia.org/wiki/%E0%B0%88%E0%B0%A6%E0%B1%8D%E0%B0%97%E0%B0%BE%E0%B0%B9%E0%B1%8D#cite_note-1">[2]</a></sup></p>\n<p>ప్రప్రథమ ఈద్ గాహ్ <a href="http://te.wikipedia.org/wiki/%E0%B0%AE%E0%B0%A6%E0%B1%80%E0%B0%A8%E0%B0%BE" title="మదీనా">మదీనా</a> నగరపు పొలిమేరల్లో యుండేది, ఇది <a href="http://te.wikipedia.org/wiki/%E0%B0%AE%E0%B0%B8%E0%B1%8D%E0%B0%9C%E0%B0%BF%E0%B0%A6%E0%B1%8D-%E0%B0%8E-%E0%B0%A8%E0%B0%AC%E0%B0%B5%E0%B0%BF" title="మస్జిద్-ఎ-నబవి" class="mw-redirect">మస్జిద్-ఎ-నబవి</a> నుండి దాదాపు 1000 అంగల దూరంలో వుండేది.<sup id="cite_ref-2" class="reference"><a href="http://te.wikipedia.org/wiki/%E0%B0%88%E0%B0%A6%E0%B1%8D%E0%B0%97%E0%B0%BE%E0%B0%B9%E0%B1%8D#cite_note-2">[3]</a></sup><sup>,</sup><sup id="cite_ref-3" class="reference"><a href="http://te.wikipedia.org/wiki/%E0%B0%88%E0%B0%A6%E0%B1%8D%E0%B0%97%E0%B0%BE%E0%B0%B9%E0%B1%8D#cite_note-3">[4]</a></sup></p>\n<p>సంవత్సరంలో రెండు ప్రముఖ పండుగలైన <a href="http://te.wikipedia.org/wiki/%E0%B0%B0%E0%B0%82%E0%B0%9C%E0%B0%BE%E0%B0%A8%E0%B1%8D" title="రంజాన్">రంజాన్</a> మరియు <a href="http://te.wikipedia.org/wiki/%E0%B0%AC%E0%B0%95%E0%B1%8D%E0%B0%B0%E0%B1%80%E0%B0%A6%E0%B1%81" title="బక్రీదు" class="mw-redirect">బక్రీదు</a>\nల సామూహిక నమాజు ఈ ఈద్‌గాహ్ లో ఆచరించబడుతుంది. ఆంధ్రప్రదేశ్ లోని\nగ్రామాలలో వీటినే "నమాజు కట్ట" అని కూడా వ్యవహరిస్తూ వుంటారు. పండుగలు\nకాని సమయాలలో ఈ ఈద్గాహ్ ను ఖాళీగా వుంచడమో లేక ధార్మిక కార్యక్రమాల\nఉపయోగానికో ఉపయోగిస్తుంటారు.</p>\n<p>పండుగల రోజున ఊరినుండి ఈద్గాహ్ కు బయలుదేరే ముస్లిం సమూహం <a href="http://te.wikipedia.org/wiki/%E0%B0%85%E0%B0%B2%E0%B1%8D%E0%B0%B2%E0%B0%BE%E0%B0%B9%E0%B1%8D" title="అల్లాహ్">అల్లాహ్</a>\nస్తోత్రములు "అల్లాహు అక్బర్, అల్లాహు అక్బర్, లాఇలాహ ఇల్లల్లాహు అల్లాహు\nఅక్బర్, అల్లాహు అక్బర్, వలిల్లాహిల్ హమ్ద్" (అల్లాహ్ ఘనమైన వాడు, ఒక్కడే\nదేవుడు, అతడే అల్లాహ్, మేమంతా నీనామమే కీర్తిస్తాము) అని పలుకుతూ\nబయలుదేరి, ఈద్గాహ్ కు చేరేంతవరకూ పఠిస్తూనే వుంటారు.</p>', '2009-08-31 13:22:28', 1, 0, 0),
(43, 4, 'dxfgdgbxcv', '', 'zxcvxcvxcvcncbn', 'vnvbnvbnvbn', '2009-09-10 13:39:06', 1, 1, 0),
(44, 1, 'sgd', '', 'gfdg', 'gfdg', '2009-09-12 16:22:42', 1, 1, 0),
(46, 1, 'గర్భావస్థలో చర్మ సౌందర్యాన్ని కాపాడుకోండిలా... ', '', 'మహిళలు\nగర్భావస్థలోనున్నప్పుడు సన్‌స్క్రీన్ లోషన్‌ను తప్పని సరిగా\n', 'మహిళలు\nగర్భావస్థలోనున్నప్పుడు సన్‌స్క్రీన్ లోషన్‌ను తప్పని సరిగా\nఉపయోగించాలంటున్నారు వైద్యులు. ఎందుకంటే స్త్రీలు గర్భం ధరించినప్పుడు\nవారి చర్మం పొడిబారిపోతుంటుంది. దీంతో సూర్యుని అతి నీల లోహిత కిరణాల\nకారణంగా శరీర చర్మం మరింత పొడిబారిపోతుంది. ఇలా పొడిబారిపోవడం వలన చర్మంపై\nముడతలు ఏర్పడుతుంది. అతి నీల లోహిత కిరణాల కారణంగా చర్మం కోమలత్వాన్ని\nకోల్పోతుంది. ఈ కారణంగా చర్మ క్యాన్సర్ వచ్చే ప్రమాదం ఎక్కువగా\nఉందంటున్నారు వైద్యులు. <br><br>స్త్రీలు\nగర్భావస్థలోనున్నప్పుడు చర్మాన్ని మృదువుగా, పట్టులా ఉండేలా చూసేందుకు\nమాయిశ్చరైజర్‌ను ఉపయోగించాలి. కొందరి చర్మం ఆయిలీగా వుంటుంది కాబట్టి\nఇలాంటి వారు ప్రతి రోజు ఆయిల్ బేస్డ్ లేనటువంటి\nమాయిశ్చరైజర్‌నుపయోగించాలి. నీళ్ళలావున్న మాయిశ్చరైజర్ తేలికగా, చర్మంలో\nకలిసిపోయేదిగా ఉంటుంది. ఇలాంటి మాయిశ్చరైజర్ ఉపయోగించడం వలన శరీర చర్మం\nమృదువుగాను పట్టులా తయారువుతుందంటున్నారు వైద్యులు. <br><br>అదేగనుక\nమీ చర్మం పొడిబారినట్లుంటే చర్మంపై నవ్వ(జిల) పుడుతుంది. కాబట్టి\nగర్భావస్థలోనున్నప్పుడు చర్మంలో తేమశాతం ఎక్కువగా ఉండేలా\nచూసుకోవాలంటున్నారు ఆరోగ్య నిపుణులు.<br><br>చాలా\nమంది మహిళలకు గర్భావస్థలోనున్నప్పుడు శరీరం, కాళ్ళలో నొప్పులు ఎక్కువగా\nఉంటుందని వైద్యులకు ఫిర్యాదు చేస్తుంటారు. దీనికంతటికి కారణం వారికి నిద్ర\nసరిగా పట్టక పోవడమే. ఇలాంటి స్థితిలోనున్న మహిళలు ప్రతి రోజు రాత్రి\nపడుకునే ముందు తల, కాళ్ళకు మాలిష్ చేయించుకుంటే మంచి ఫలితం ఉంటుంది. <br><br>ఇలా\nమాలిష్ చేయించుకోవడం వలన శరీరంలోని కండరాలకు మంచి వ్యాయామం కలిగి\nరక్తప్రసరణ సాఫీగా సాగుతుంది. దీంతోపాటు నిద్ర కూడా బాగా పడుతుంది. నీరు\nఅధికంగా సేవిస్తుంటే చర్మం పొడిబారకుండా ఉంటుంది. నీటిని సేవించడం వలన\nశరీరంలోని వ్యర్థపదార్థాలను విసర్జించేలా చేస్తుంది. కాబట్టి చర్మం\nశుభ్రంగా, మృదువుగా, పట్టులా మెరిసేందుకు ప్రతి రోజు 8 నుంచి 10 గ్లాసుల\nనీటిని సేవిస్తుండండి. ఇది ఆరోగ్యానికి, చర్మ సౌందర్యానికి ఎంతో\nలాభదాయకంగా ఉంటుందంటున్నారు వైద్యులు. ', '2009-12-08 14:33:31', 0, 0, 0),
(47, 5, 'చేపలు తినండి... చర్మం నిగనిగలాడుతుంది ', '', 'చర్మం నిగారింపు\nకోసం కృత్రిమ సాధనాలను వాడేకంటే ఆహారంతోనే ', 'చర్మం నిగారింపు\nకోసం కృత్రిమ సాధనాలను వాడేకంటే ఆహారంతోనే సౌందర్యాన్ని ద్విగుణీకృతం\nచేసుకోవచ్చు. వారానికి రెండుసార్లు చేపలను ఆహారంగా తీసుకుంటే చర్మం\nనిగనిగలాడుతుంది. బాగా తైలం కలిగిన చేపలు మరీ మంచివి. వీటిలో ఒమేగా-3 పాలీ\nఅన్‌సాచ్యురేటెడ్ ఫ్యాటీ ఆసిడ్ ఉంటుంది కనుక గుండె జబ్బులను రానివ్వదు.\nఅలాగని ఎండు చేపలను తినడం మంచిది కాదు. ఒకవేళ ఆ అలవాటు ఉన్నవారు\nతగ్గించుకోవడం మంచిది.<br><br>ఇక\nమాంసం విషయానికి వస్తే... వారానికి ఒకసారికి మించి తినకూడదు. కొవ్వులు\nతక్కువగా ఉండే మాంసాలనే తినాలి. ప్రోటీన్లు అధికంగా ఉండే మాంసాహారాన్ని\nతీసుకోవాలి. లేదంటే మాంసంతోనూ ఇబ్బందే.<br><br>సాధ్యమైనంతవరకూ\nమాంసాహారానికి దూరంగా ఉండండి. దీనివల్ల శరీరంలో ప్రమాదకరమైన రీతిలో\nకొలెస్ట్రాల్ పెరిగి గుండె జబ్బులకు కారణమవుతుంది. కనుక ఏ ఆహార పదార్థాలను\nఎంత మోతాదులో తీసుకోవాలో తెలుసుకుని తింటే ఆరోగ్యానికి చాలా మంచిది.', '2009-12-08 14:55:31', 0, 0, 2),
(49, 6, 'గోరింటాకు ప్రత్యేకత !', '', 'గోరింట చెట్టు కొంతమంది ఆకుల కోసం పెంచుతారు.గోరింటాకును ముద్దగా నూరి\n', 'గోరింట చెట్టు కొంతమంది ఆకుల కోసం పెంచుతారు.గోరింటాకును ముద్దగా నూరి\nచేతికి, పాదాలకు పెట్టుకుంటే ఎర్ర్రని రంగుతో అందంగా ఉంటాయి. భారతీయులు\nపెళ్ళి సమయంలో దీన్ని తప్పనిసరిగా వాడతారు.ప్రధానంగా రంజాన్ సందర్భంలో\nముస్లిం మహిళల&nbsp; అలంకరణలో మెహంది (గోరింటాకు)ప్రధానం.చేతులను రకరకాల\nడిజైన్లతో అలంకరించుకునేందుకు దీన్ని వినియోగిస్తారు .గతంలో గోరింటాకు\nపొడిని పేస్ట్ గా&nbsp; చేసుకొని డిజైన్లు తీర్చి దిద్దుకునే వారు కాగా ఇప్పుడు\nరెడీమేడ్ మెహంది పేస్ట్ కోన్ లు అందుబాటులోకి వచ్చాయి అంతే కాకుండా&nbsp; ఈ\nగోరింటాకును ప్రతి పండగ నాడు గోరింటాకును చాల అందంగా పెట్టుకుంటారు\n.గోరింటాకుని సంస్కృతంలో <br>''నఖరంజని'' అంటారు .నఖరంజని అంటే\nరంగునిచ్చేది అని అర్థం .గోరింటాకులో కాచు,పుల్లమజ్జిగ కలిపి నూరి\nపెట్టుకుంటారు .స్త్రీలు అరికాళ్ళలో గోరింటాకుని చుక్కగా పెట్టుకుంటారు.\nఅది బాగా పండితే ఆ స్త్రీకి తరగని&nbsp; ఐదవతనమని, చేతులకు, కాళ్ళకు ఎర్రగా\nపండితే ఆమెని భర్త ప్రేమగా చూసుకుంటాడని నమ్మకం .అందుకే&nbsp; ప్రేమ కలవాది\nకంటు గోరింట''అనే నానుడి ఏర్పడింది .&nbsp; <br>', '2009-12-08 15:24:28', 0, 0, 0),
(50, 8, 'కొవ్వు పదార్ధం లేని ఆహారంతో మరీ ప్రమాదం..', '', 'లావు కాకూడదనే\nభయంతోనో లేదా ఆహార నియమాలు పాటించే మిషతోనూ కొవ్వు ', 'లావు కాకూడదనే\nభయంతోనో లేదా ఆహార నియమాలు పాటించే మిషతోనూ కొవ్వు పదార్ధాలు ఏ మాత్రం\nలేనటువంటి ఆహారం తీసుకుంటే ప్రమాదం ముంచుకొచ్చినట్లేనని ఆహార నిపుణులు\nహెచ్చరిస్తున్నారు. అయితే ఏమాత్రం కొవ్వు పదార్ధాలు లేని ఆహారం తీసుకోవడమే\nఆరోగ్యానికి మంచిదని మనలో చాలా మంది నమ్ముతున్నారు మరి. <br><br>కానీ\nకొవ్వు పదార్ధాలు ఎంతో కొంత ఉన్న ఆహారాన్ని తీసుకోవడం సరైన ఆరోగ్యానికి\nఎంతో అవసరమని తాజాగా ఆహార నిపుణులు చెబుతున్నారు. ఊబకాయం భయంతో ఎంతోమంది\nమహిళలు పోషక పదార్ధాలను కూడా తీసుకోవడం మాని సైజ్ జీరోలపై మోజులో పడుతున్న\nప్రస్తుత కాలంలో శరీరానికి కొవ్వు పదార్ధాలు తప్పనిసరిగా అవసరం అనే\nకోణాన్ని ఆహార నిపుణులు ముందుకు తీసుకు వస్తున్నారు. <br><br>ఈ\nవిషయమై పాశ్చాత్య న్యూట్రీషియనిస్ట్ ఈస్తర్ బ్లమ్ పెద్ద పుస్తకమే రాశారు.\nమానవ శరీరానికి కొవ్వు పదార్ధాలు ఎంతగా అవసరమో వివరిస్తూ ఈయన ''సీక్రెట్స్\nఆఫ్ గార్జెస్: హండ్రెడ్స్ ఆఫ్ వేస్ టు లివ్ వెల్ వైల్ లివింగ్ అనే పుస్తకం\nరాశారు. రకరకాల కారణాలతో కొవ్వు పదార్ధాలను మహిళలు పూర్తిగా ఆపివేయడం వల్ల\nఆరోగ్య సమస్యలు తలెత్తే ప్రమాదం ఉందని హెచ్చరిస్తున్నారు.<br><br>ముఖ్యంగా\nమహిళలు కొవ్వు పదార్ధాలు తీసుకోవడం పూర్తిగా నిలిపివేస్తే వారి హార్మోన్లు\nఅసమతౌల్యానికి గురవుతాయని ఈస్తర్ బ్లమ్ హెచ్చరించారు. పైగా, శరీరంలో\nఈస్ట్రోజన్, ప్రొజెస్టిరాన్, టెస్టోస్టిరాన్ వంటి హార్మోన్లు సక్రమంగా\nవిడుదల కావాలంటే కొద్ది మొత్తంలో మంచి కొలెస్ట్రాల్ అవసరమని బ్లమ్\nచెబుతున్నారు.<br><br>కొవ్వు\nపదార్ధాలు ఏమాత్రం లేని ఆహారం తీసుకోవడం వల్ల లైంగిక జీవితంపైన కూడా తీవ్ర\nదుష్ఫలితాలకు దారి తీసే ప్రమాదముందట. ముఖ్యంగా మహిళల్లో లైంగిక వాంఛల గాఢత\nకూడా బాగా తగ్గిపోతుందని బ్లమ్ తన పుస్తకంలో పేర్కొన్నారు. ఆరోగ్యంతోపాటు\nఅందాన్ని మెరుగుపర్చుకునే చిట్కాలు సైతం ఈ పుస్తకంలో రాశారు. <br><br>ఈ\nసరికొత్త ఆహార, ఆరోగ్య చిట్కాలను చూస్తే అతి సర్వత్ర వర్జయేత్ అనే పెద్దల\nసూత్రం గుర్తువస్తుంది. తింటే పరిమితులు లేకుండా తినడం, లేకపోతే పొట్టను\nఎండగట్టించడం, నోటిని కట్టేయడం. మితంగా తింటే ఏదైనా ఒంటికి మంచిదే అనే\nసామెత జనజీవితంలో ఊరికే పుట్టలేదు మరి.', '2009-12-08 15:28:44', 0, 0, 1),
(52, 1, 'గోరింటాకు', 'mehandhi', 'dgdfhytfuytugh y iyiuhjgknbgjvg<br>', 'gfjh this is sujatha<br>', '2010-01-02 10:45:03', 0, 0, 0);
