-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2009 at 07:24 AM
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
-- Table structure for table `cinema`
--

DROP TABLE IF EXISTS `cinema`;
CREATE TABLE IF NOT EXISTS `cinema` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(10) NOT NULL,
  `heading` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `type`, `heading`, `summary`, `description`, `insert_date`, `active`) VALUES
(3, 1, '<font class="UnicodeContent">కెఆర్వీకి ఎస్వీఆర్ అవార్డు</font>', '<font class="UnicodeContent">తెలుగు చలన చిత్ర పరిశ్రమలో నభూతో నభవిష్యతి\nఅన్న తరహాలో ఎన్నో పాత్రలకు ప్రాణప్రతిష్ఠ చేసిన స్వర్గీయ ఎస్.వి.రంగారావు\nపేరిట ఏర్పాటు చేసిన ఎస్వీఆర్ స్మారక కంకణాన్ని సీనియర్ నటి కె.ఆర్.విజయ\nస్వీకరించనున్నారు. అమ్మవారి</font>', '<font class="UnicodeContent">పాత్రలకు తనకు తానే సాటి అనిపించుకుని,\nనటిగా 400కు పైగా చిత్రాల్లో నటించి తెలుగు, తమిళ ప్రేక్షకుల హృదయాలలో\nచెరగని ముద్ర వేసిన నటి కె.ఆర్.విజయ. ఎస్వీ ఆర్ ఇంటర్నేషనల్ అకాడమీ\n(యుఎస్ఎ)తో కలిసి ప్రముఖ సాంస్కృతిక సంస్థ ''ఆరాధన'' ఈనెల 3న రవీంద్రభారతిలో\nఈ స్వర్ణకంకణ ప్రదానోత్సవాన్ని నిర్వహించనుంది. అమెరికాలోని ప్రవాస\nభారతీయలు ఈ కార్యక్రమ నిర్వహణకు ఆర్థిక సౌజన్యాన్ని అందిస్తున్నట్టు\n''ఆరాధన'' అద్యక్షుడు గుదిబండ వెంకటరెడ్డి, ఎస్వీ రంగారావు ఇంటర్నేషనల్\nఅకాడమీ చైర్మన్ చందు శ్రీనివాస్ తెలిపారు.<br>\n<br>\nస్వర్ణకంకణ ప్రదానోత్సవ కార్యక్రమానికి ఆర్థిక మంత్రి కె.రోశయ్య ముఖ్య\nఅతిథిగా విచ్చేస్తారు. దర్శకరత్న డాక్టర్ దాసరినారాయణరావు చేతులమీదుగా\nఅవార్డు ప్రదానం జరుగుతుంది. సభాధ్యక్షులుగా ''ఆంధ్రప్రభ'' సంపాదకులు\nపి.విజయబాబు, గౌరవ అతిథిగా రాష్ట్ర ప్రభుత్వ ప్రధాన కార్యదర్శి (రెవెన్యూ\nధర్యాదాయ శాఖ), విశిష్ట అతిథిగా ఇండియన్ మీడియా సెంటర్ (న్యూఢిల్లీ)\nచైర్మన్ శ్యాం ఖోస్లా పాల్గొంటారు. పద్మశ్రీ శోభానాయుడు జ్యోతి ప్రజ్వలన\nచేస్తారు. వర్దమాన రచయిత్రి శ్రుతకీర్తి వ్యాఖ్యాతగా వ్యవహిస్తారు.\nఎస్వీఆర్ స్మారక కంకణాలను యు.వి.కృష్ణంరాజు 2007లోనూ, కైకాల సత్యనారాయణ\n2008లోనూ అందుకున్నారు.</font><br>', '2009-07-02 11:22:14', 1),
(5, 1, '<font class="UnicodeContent">''నింగి నేల నాదే'' వెబ్ సైట్</font>', '<font class="UnicodeContent">ఆత్మ విశ్వాసం, పట్టుదల ఉంటే సాధంచలేనిది\nఏదీ లేదనే సందేశం ఇచ్చే ''నింగి...నేల...నాదే'' చిత్రం ప్రతి ఒక్కరికీ\nస్ఫూర్తి కావాలని ముఖ్యమంత్రి డాక్టర్ వై.ఎస్.రాజశేఖర్ రెడ్డి\nఆక్షాక్షించారు. పలు అవార్డులు రివార్డులు అందుకున్న చైనా</font>', '<font class="UnicodeContent">చిత్రం ''ఇన్విజబుల్ వింగ్స్'' ఇప్పుడు\nతెలుగులో ''నింగి నేల నాదే'' పేరుతో అనువాదమై జూలై 3న ప్రేక్షకుల ముందుకు\nరానుంది. నిర్మాత చావ సుధారాణి ఈ చిత్రాన్ని తెలుగు ప్రేక్షకులకు\nఅందిస్తున్నారు. ఈ చిత్రం వెబ్ సైట్ ను ముఖ్యమంత్రి రాజశేఖర్ రెడ్డి\nహైద్రాబాద్ లో ఆవిష్కరించారు.<br>\n<br>\nఒక పని తలబెడితే ఆ పనిని చివరి వరకూ పూర్తి చేసే స్థైర్యం ఉండాలని\nబర్తృహరి చెప్పారనీ, అలాంటి స్థైర్యం మెండుగా ఉన్న యువతే ఈ చిత్రంలోని\nకథానాయిక అని వై.ఎస్. అన్నారు. నేటి యువతరానికి అలాంటి ఆత్మవిశ్వాసనమే\nకావాలనీ, ఏదైనా సాధించాలనే పట్టుదల అవసరమనీ, అంగవైకల్యం అవరోధం కాదనే\nధైర్యం కావాలని ఆయన ఉద్బోధించారు. చావా సుధారాణి మాట్లాడుతూ, ఎన్ని పనుల\nఒత్తిడిలో ఉన్నప్పటికీ ''నింగి నేల నాదే'' వెబ్ సైట్ ను ఆవిష్కరించిన\nముఖ్యమంత్రికి తన కృతజ్ఞతలని అన్నారు. యువతరం ఈ చిత్రం నుంచి\nఆత్మవిశ్వాసాన్ని నేర్చుకోవాలన్నదే తమ కోరిక అని అన్నారు. తమను చూడగానే ఈ\nచిత్రం పేరు బాగుందంటూ ముఖ్యమంత్రి ఆశీర్వదించడం చాలా సంతోషంగా ఉందన్నారు.\n''www.ninginelanaade.com''లో ఈ చిత్రానికి సంబంధించిన పూర్తి వివరాలను\nచూడవచ్చని ఆమె చెప్పారు.</font>', '2009-07-02 11:35:49', 0),
(6, 3, '<font class="UnicodeContent">మీరా ప్రేమ బెడిసికొట్టిందా?</font>', '<font class="UnicodeContent">వెండితెరపై ఎంతటి సెలబ్రెటీలైనప్పటికీ\nప్రేమ, పెళ్లి వదంతులు వారిని కూడా వదిలిపెట్టవు. జాతీయ ఉత్తమ నటి\nమీరాజాస్మిన్ ప్రేమలో పడిందంటూ ఎప్పటికప్పుడు పలు వదంతులు రావడం, వాటిని\nఆమె ఖండించడం దాదాపు ఏడాది నుంచి సర్వసాధారమైంది. ఇప్పుడో రేపే మీరా\nజాస్మిన్ </font>', '<font class="UnicodeContent">సినిమాలకు స్వస్తి చెప్పనుందందనే వార్తలు\nరావడం, ఇందుకు భిన్నంగా మీరా కొత్త ప్రాజెక్టులు ఒప్పుకోవడం జరుగుతూనే\nఉంది. కొద్దికాలంగా మీరాజాస్మిన్, మాండలిన్ యు.రాజేష్ ప్రేమ వ్యవహారం\nచర్చనీయాంశమవుతోంది. మాండలిన్ శ్రీనివాస్ తమ్ముడే మాండలిన్ రాజేష్.\nమ్యూజిక్ కంపోజర్ అయిన రాజేష్, మీరా కొద్దికాలంగా చెన్నైలో కలిసే\nఉంటున్నప్పటికీ పెళ్లికి మాత్రం ఇంకా సమయాత్తం కాలేదు. అయితే ఈ శుభ ఘడియ\nరాకముందే వారిద్దరి మధ్య ప్రేమ వ్యవహారం బెడిసికొట్టిందనే ప్రచారం\nప్రస్తుతం జరుగుతోంది.<br>\n<br>\nరాజేష్ కంటే ముందుగానే తమిళ హీరో ప్రశాంత్, మీరా ప్రేమించుకున్నారంటూ\nఅప్పట్లో ప్రచారం జరిగింది. ప్రశాంత్ ఇటీవల తన భార్య గృహలక్ష్మితో\nవిడాకులు తీసుకోవడం కూడా ఆ వదంతులకు బలం చేకూరినట్టయింది. అయితే ఆ\nవదంతులను ప్రశాంత్ ఖండించారు. అయినప్పటికీ రాజేష్ తల్లిదండ్రులు మాత్రం\nమీరాను పెళ్లాడాలనుకున్న రాజేష్ కోరిక పట్ల సానుకూలంగా స్పందించలేదని\nఅంటున్నారు. ఈ క్రమంలోనే మీరా-రాజేష్ లు ప్రేమ వ్యవహారానికి కూడా ఇప్పుడు\nతెరపడిందంటూ చెన్నై వర్గాలు చెబుతున్నాయి. రాజేష్ సైతం ఈ విషయాన్ని\nధ్రువీకరించారని వారు చెబుతున్నారు. ''కాలమే అన్ని గాయలనూ మాన్పుతుంది.\nనేను ఎంతో ఊహించుకున్నాను. వాటికీ, ప్రస్తుతం జరుగుతున్న పరిణామాలకూ\nఏమాత్రం పొంతన లేదు. కాలమే అన్నిటికీ సమాధానమిస్తుంది'' అని రాజేష్\nవ్యాఖ్యానించినట్టు తెలుస్తోంది. ఇంతకుమించు తాను ఏమీ చెప్పదలచుకోలేదనీ,\nప్రస్తుతం తన దృష్టంతా మ్యూడిక్ కెరీర్ మీదే కేంద్రీకరించబోతున్నాననీ\nరాజేష్ చెబుతున్నారు. మీరా సైతం ప్రస్తుతం తన కెరీర్ పైనే ఎక్కువ దృష్టి\nసారించాలని నిశ్చయించుకుందని అంటున్నారు. కొత్త హీరోలతో పనిచేసేందుకు కూడా\nఆసక్తి కనబరుస్తూ వరుసగా పలు తమిళ, మలయాళ చిత్రాలకు కమిట్ అవుతోంది.</font>', '2009-07-02 12:21:10', 1),
(7, 4, '<font class="UnicodeContent">''మల్లన్న'' జూలైలో లేనట్టే?!</font>', '<font class="UnicodeContent">''అపరిచితుడు'' చిత్రం తర్వాత హీరో విక్రమ్ ను\nమళ్లీ ఆ స్థాయిలో ప్రెజెంట్ చేస్తున్న చిత్రంగా ''మల్లన్న'' కొద్దికాలంగా\nవిపరీతమైన పబ్లిసిటీని చూరగొంటోంది. సుశీ గణేషన్ దర్శకత్వంలో కళైపులి థాను\nసుమారు 45 కోట్ల భారీ బడ్జెట్ తో ఈ చిత్రాన్ని </font>', '<font class="UnicodeContent">నిర్మించడం, విక్రమ్ కు జోడిగా గ్లామర్ నటి\nశ్రియ నటిస్తుండటంతో పాటు పలు హైలైట్స్ ఈ చిత్రంలో చోటుచేసుకుంటున్నాయి.\nతమిళంలో ఈ చిత్రం ''కందసామి'' పేరుతో విడుదల కానుంది. దాదాపు రెండేళ్ల పాటు\nచిత్రీకరణ జరుపుకొన్న ఈ చిత్రం ఎప్పుడెప్పుడు విడుదలవుతుందా అని చియాన్\nవిక్రమ్ అభిమానులు ఎదురుతెన్నులు చూస్తున్నారు. అయితే మరో నెలరోజుల పాటు ఈ\nనిరీక్షణ తప్పదనీ, జూలైలో ''మల్లన్న'' వెలుగుచూసే అవకాశాలు దాదాపు\nలేనట్టేననీ చెన్నై వర్గాల ద్వారా తెలుస్తోంది. హాలీవుడ్ సినిమా చూస్తున్న\nఅనుభూతిని కలిగించే విధంగా కంప్యూటర్ గ్రాఫిక్స్ ఇందులో ఉండబోతున్నాయనీ,\nవీటి కోసం మరికొంత వ్యవధి అనివార్యం కానుందనీ, ఏరకంగా చూసినా ఆగస్టులోనే ఈ\nచిత్రం విడుదలయ్యే అవకాశాలున్నాయనీ ఆ వర్గాలు చెబుతున్నారు.<br>\n<br>\nసమాజంలో అంతకంతకూ విశ్వరూపం దాలుస్తున్న ఆర్థిక అసమానతలపై పోరాటం సాగించిన\nఓ ప్రభుత్వాధికారి కథే ''మల్లన్న''. సిబిఐలో ఆర్థిక నేరాల విభాగాన్ని\nపర్యవేక్షించే అధికారిగా విక్రమ్ ఇందులో కనపించనున్నారు. రాబిన్ హుడ్\nతరహాలో ఆయన పాత్ర ఉండబోతోంది. విదేశాల నుంచి ఇండియాకి తిరిగి వచ్చిన\nఅభ్యుదయ భావాలు కలిగిన అమ్మాయిగా శ్రియ నటించింది. నటశేఖర కృష్ణ ఓ కీలక\nపాత్ర పోషించారు. గీత రచయిత సాహితి ఈ చిత్రం ద్వారా మాటల రచయితిగా పరిచయం\nకావడం, దేవిశ్రీప్రసాద్ సంగీతం ప్రత్యేక ఆకర్షణలు కాబోతున్నాయి. విక్రమ్\nఐదు గెటప్స్ లో కనిపించ నుండగా, ఇందులోని పాటలన్నింటినికీ ఆయన స్వయంగా\nనేపథ్యగానం అందించారు. తెలుగులో తన పాత్రకు డబ్బింగ్ కూడా చెప్పుకున్నారు.\nఇన్ని ప్రత్యేకతలున్న ''మల్లన్న'' చిత్రాన్ని వివిధ భాషల్లో 900కు పైగా\nథియేటర్లరో ప్రపంచవ్యాప్తంగా విడుదల చేసేందుకు నిర్మాత కళైపులి థాను\nప్లాన్ చేస్తున్నారు.</font>', '2009-07-02 12:23:04', 1),
(8, 5, '<font class="UnicodeContent">''భీష్మ'' తెరవెనుక స్టోరీ?</font>', '<font class="UnicodeContent">''మిత్రుడు'' చిత్రం తర్వాత యువరత్న బాలకృష్ణ\nకథానాయకుడు ప్రముఖ నిర్మాత బెల్లంకొండ సురేష్ ''భీష్మ'' సినిమా అనౌన్స్\nచేయడంతో బాలయ్య బాబు అభిమానుల్లో ఉత్సాహం తొంగిచూస్తోంది. బెల్లంకొండకు\nనిర్మాతగా స్టార్ ఇమేజ్ బాలకృష్ణ సినిమాలతోనే వచ్చిందనేది</font>', '<font class="UnicodeContent">కాదనలేని సత్యం. ఈ ఇద్దర్నీ మంచి మిత్రులుగా\nకూడా చెబుతుంటారు. ''లక్ష్మీనరసింహా'' చిత్రం విషయంలో ఈ ఇద్దరికీ\nపొరపొచ్చాలు వచ్చాయనీ, పర్వవసానంగానే బాలకృష్ణ ఇంట్లో కాల్పుల సంఘటన\nచోటుచేసుకుందనీ అప్పట్లో అంతా అనుకున్నదే. బాలకృష్ణను ఈ సంఘటన ఇరకాటంలో\nపెట్టే అవకాశాలున్న తరుణంలో ఇద్దరి మధ్యా కుదిరిన ''రాజీ''తో ఆ వ్యవహారం\nసద్దుమణిగింది. ఇందులో భాగంగానే బెల్లంకొండతో పనిచేసేందుకు బాలయ్య భరోసా\nఇచ్చారనే కథనాలు కూడా అప్పట్లో వినిపించాయి. ఇప్పుడు ఆ తరుణం వచ్చింది.\nబెల్లంకొండ ''రైడ్'' చిత్రం ఆడియో వేడుకకు బాలయ్య విచ్చేయడం, బాలయ్య\nపుట్టినరోజును తన చిత్ర యూనిట్ తో సహా బెల్లంకొండ జరుపుకోవడం అందరి\nదృష్టినీ ఆకర్షించింది. బాలయ్య బాబు డేట్స్ ఇస్తే వెంటనే సినిమా తీయడానికి\nసిద్ధంగా ఉన్నానంటూ సురేష్ ప్రకటించారు. ఇది జరిగిన వారం రోజులకే\nబాలకృష్ణతో ''భీష్మ'' చిత్రాన్ని అనౌన్స్ చేయడం, పూజా కార్యక్రమాలు కూడా\nజరపడం చకచగా జరిగిపోయాయి. రమేష్ వర్మ (''రైడ్'' ఫేమ్) దర్శకత్వంలో ఆగస్టు\nనుంచి రెగ్యులర్ షూటింగ్ కు కూడా సన్నాహాలు జరుగుతున్నాయి. ఆసక్తికరంగా\nఇప్పుడో రసవత్తరమైన చర్చ ఫిల్మ్ సర్కిల్ లో జరుగుతోంది. బెల్లంకొండ వద్ద\nబాలకృష్ణకు చెందిన మూడు సినిమాల డేట్స్ ఉన్నాయన్నదే ఈ చర్చ సారాంశం.<br>\n<br>\nఅందర్నీ కలవరపెట్టిన ఆనాటి ఉదంతం అనంతరం బెల్లంకొండతో మూడు సినిమాలకు\nబాలయ్య డేట్స్ కమిట్ అయ్యారట. అయితే ఇక్కడ ఓ మెలిక ఉందట. ఆ మూడింటినీ\nబెల్లంకొండ స్వయంగా నిర్మించనూ వచ్చు. ఆ డేట్స్ ను వేరేవారికి (తనవాళ్లకు)\nబదలాయించనూ వచ్చట. అయితే మాటకు కట్టుబడటానికే బాలయ్య ఇప్పటికీ\nమొగ్గుచూపుతున్నారట. ''భీష్మ'' ఇప్పటికే బెల్లంకొండ అనౌన్స్ చేసినందున\nమిగిలిన రెండు చిత్రాల విషయం తేలవలసి ఉంటుందని ఫిల్మ్ వర్గాలు అంటున్నాయి.\nఏదిఏమైనా...ఇలాంటి ''ఒప్పందాలు'' ఏవైనా ఉంటే పరస్పర అవగాహనతోనే కుదురుతాయి\nకాబట్టి వేచిచూడటం మినహా నిజానిజాలు బయటకు వచ్చే అవకాశాలు అంతగా ఉండవు\nమరి... </font>', '2009-07-02 12:24:31', 1),
(9, 6, '<font class="UnicodeContent">''ప్రయాణం'' రివ్యూ</font>', '<font class="UnicodeContent">రెండు పాత్రలతో ''షో'' చూపిస్తే జాతీయ స్థాయి\r\nగుర్తింపు వచ్చింది. అప్పట్లో అదో వైవిధ్యం. కేవలం రెండు గంటల్లో ప్రేమ\r\nపుట్టి...మొగ్గతొడిగి...పువ్వు పూస్తే ఎలా ఉంటుంది? సైట్</font>', '<font class="UnicodeContent">మీద నమ్మకం ఉన్న వాళ్లు సైతం ''డెడ్ లైన్''\nగీసుకుని ప్రేమను సాఫల్యం చేసుకున్నట్టు ఎక్కడా కనబడదు. అయితే రొటీన్ కు\nభిన్నంగా ఏది చేసినా అది ఓ ప్రయోగమే అవుతుంది. ''ఐతే'', ''అనుకోకుండా\nఒకరోజు'', ''ఒక్కడున్నాడు'' వంటి వైవిధ్యమైన చిత్రాలు తీసిన చంద్రశేఖర్\nయేలేటి ఇప్పుడు అలాంటి సాహసయానమే చేశారు. కేవలం ఆరేడు పాత్రలతో\nప్రేక్షకులను రెండు గంటల ప్రేమ ''ప్రయాణం'' చేయించారు. చూపులు కలవడం,\nప్రేమలో పడటం, ప్రపోస్ చేయడం, లవ్ క్వశ్చనీర్, ఫైనల్స్ ...ఈ\nసంఘటనలన్నింటికీ నేపథ్యం కౌలాలంపూర్ ఇంటర్నేషనల్ ఎయిర్ పోర్ట్. నిజానికి\nఇవాల్టి కమర్షియల్ ట్రెండ్ కు భిన్నమైన ప్రయత్నం ఇది. ఇలాంటి థీమ్ తో\nరిస్క్ చేయడానికి నిర్మాతలు సాహసించరని గ్రహించడం వల్లనో ఏమో...చంద్రశేఖర్\nయేలిటి నిర్మాతగా మారి ఆర్యకి ఆర్ట్స్ బ్యానర్ నుంచి ఈ చిత్రానికి కర్త,\nకర్మ, క్రియ అంతా తానే అయ్యారు. ఆయన ''ప్రయాణం''లోని పదనిసల్లోకి\nతొంగిచూస్తే...</font>', '2009-07-02 12:25:50', 0),
(24, 2, '<font class="UnicodeContent">సిక్స్ ప్యాక్ సిద్ధార్ధ</font>', '<font class="UnicodeContent">హీరోలకు సిక్స్ ప్యాక్, హీరోయిన్లకు టట్టూలు\nఇప్పుడు ఇండియన్ సినిమాకు సరికొత్త ట్రెండ్ గా మారింది. ''నటన మాట ఎలా\nఉన్నా ఇవాల్టి రోజుల్లో సిక్స్ ప్యాక్ ఉన్నవాడే హీరో'' అంటూ వర్మ</font>', '<font class="UnicodeContent">అడవి'' లో ఓ తమాషా సంభాషణ కూడా ఉంది. ఆ మాట\nఎలా ఉన్నా...తొలుత బాలీవుడ్ లో సిక్స్ ప్యాక్ ట్రెండ్ ఊపందుకుంది. ఫిజికల్\nఫిటెనెస్ ను మొదట్నించీ నమ్మే సల్మాన్ వంటి ఒకరిద్దరు హీరోలు మినహాయిస్తే\nషారూక్, అమీర్ వంటి మిడిల్ ఏజ్డ్ హీరోలు సైతం ఇటీవల సిక్స్ ప్యాక్ డవలప్\nచేసి ప్రేక్షకులను అలరించారు. తెలుగులో ఈ తరహా ట్రెండ్ కు ఓరకంగా అల్లు\nఅర్జున్ ''దేశముదురు''తో ఆద్యుడయ్యాడని చెప్పవచ్చు. ఆ తర్వాత నితిన్ 8\nప్యాక్ డవలప్ చేసి పలు సినిమాల్లో కనిపించారు. ''కుర్రోడు'' చిత్రంలో వరుణ్\nసందేష్, ''వరుడు'' లో మహేష్ బాబు సిక్స్ ప్యాక్ చేయబోతున్నారనే ప్రచారమూ\nజరుగుతోంది. ఇప్పుడు సిక్స్ ప్యాక్ హీరోల జాబితాలో లవర్ బాయ్ ఇమేజ్ ఉన్న\nసిద్దార్ధ కూడా వచ్చిచేరబోతున్నారు.<br>\n<br>\n''బొమ్మరిల్లు'', ''కొంచెం కష్టం కొంచెం ఇష్టం'' చిత్రాలతో తన లవర్ బాయ్ ఇమేజ్\nను పదిలం చేసుకున్న సిద్దార్ధ తన తదుపరి ప్రాజెక్ట్ ల విషయంలో\nదేహదారుఢ్యాన్ని పెంచుకుని సిక్స్ ప్యాక్ డవలప్ చేసే పనిలో పడినట్టు\nసమాచారం. సిద్దార్ధ ప్రస్తుతం యాక్షన్ తో కూడిన సోసియో ఫాంటసీ చిత్రానికి\nకమిట్ అయ్యారు. ఈ చిత్రాన్ని కోవెలమూడి ప్రకాష్ (కె.రాఘువేంద్రరావు\nతనయుడు) దర్శకత్వంలో ఎబోడ్ (ఎ బెల్లీఫుల్ ఆఫ్ డ్రీమ్స్ ఎంటర్ టైన్ మెంట్)\nబ్యానర్ పై కె.రాఘువేంద్రరావు నిర్మించనున్నారు. దీనికితోడు అల్లరి\nరవిబాబు దర్శకత్వంలో మరో చిత్రాని కూడా సిద్దార్ధ కమిట్ అయినట్టు సమాచారం.\nఇది యాక్షన్ ప్యాక్డ్ చిత్రమనీ, హృతిక్ రోషన్ హిందీ ''లక్ష్య'' చిత్రానికి\nదగ్గరగా ఉంటుందనీ తెలుస్తోంది. తన కొత్త ప్రాజెక్ట్ లలో పాత్రలకు\nఅనుగుణంగా సిద్దార్ధ సిక్స్ ప్యాక్ డవలప్ చేస్తున్నట్టు చెబుతున్నారు.\nఇందుకోసం అమీర్ ఖాన్ వ్యక్తిగత ఫిజికల్ ట్రైనర్ వద్ద సిద్దార్ధ శిక్షణ\nతీసుకోబోతున్నారు. లవర్ బాయ్ సిద్దార్ధ సిక్స్ ప్యాక్ తో యువ ప్రేక్షకుల\nగుండెల్లో ఎలాంటి గుబులు పుట్టించనున్నారనేది చూడాలి...</font>', '2009-08-12 11:00:24', 1),
(10, 6, '<font class="UnicodeHeadline">మరో ప్రేమోన్మాది ఘాతుకం</font>', '<font class="UnicodeContent">హైదరాబాద్ : ప్రేమ పేరుతో యువకులు\nఉన్మాదుల్లా మారిపోతున్న సంఘటనల జాబితాలో గురువారం ఉదయం మరో తాజా సంఘటన\nచోటు సంపాదించుకుంది. పాలిటెక్నిక్ చదువుతున్న విద్యార్థినిని వరుసకు\nమేనబావ అని భావిస్తున్న సుధాకర్ నాయక్ అనే వ్యక్తి గొడ్డలితో దాడిచేసి\nతీవ్రంగా </font>', '<font class="UnicodeContent">గాయపరిచాడు. రాష్ట్ర హోం శాఖ మంత్రి పి.\nసబితా ఇంద్రారెడ్డి నియోజకవర్గంలో ఈ దారుణం చోటుచేసుకుంది. ప్రస్తుతం\nనిందితుడు సుధాకర్ నాయక్ ఎల్.బి. నగర్ పోలీసుల అదుపులో ఉన్నాడు. తీవ్రంగా\nగాయపడిన లావణ్యను మలక్ పేట యశోదా ఆస్పత్రికి వైద్య చికిత్స నిమిత్తం\nతరలించారు. ప్రస్తుతం ఆమె పరిస్థితి విషమంగానే ఉందని, అయితే ప్రాణానికి\nహాని లేదని వైద్యులు వెల్లడించారు.<br>\n<br>\nరంగారెడ్డి జిల్లా మహేశ్వరం అసెంబ్లీ నియోజకవర్గం పరిధిలోని మీర్ పేటలో\nఉన్న టిఆర్ ఆర్ పాలిటెక్నిక్ కళాశాలలో లావణ్య డిప్లొమా ఇన్ కంప్యూటర్\nసైన్స్ చదువుతోంది. గత కొంతకాలంగా తనను ప్రేమించాలంటూ వెంటబడి సుధాకర్\nనాయక్ లావణ్య వెంటపడి వేధిస్తున్నాడు. అయితే, సుధాకర్ ప్రతిపాదనను లావణ్య\nతిరస్కరిస్తూ వస్తోంది. గురువారం ఉదయం కళాశాల ల్యాబ్ లో లావణ్యపై\nఅత్యాచారం చేసేందుకు యత్నించాడు. లావణ్య బలంగా ప్రతిఘటించింది. తనకు\nలావణ్య ఇక దక్కే అవకాశాలు కనిపించకపోవడంతో సుధాకర్ నాయక్ గురువారం ఉదయం\nఆమెపై గొడ్డలితో దాడి చేశాడు. ఈ దాడిలో లావణ్య చెస్ట్ కుడివైపున తీవ్ర\nగాయం అయింది. కళాశాల సిబ్బంది లావణ్యను యశోదా ఆస్పత్రికి తరలించారు.\nపోలసులు కేసు నమోదు చేసుకొని దర్యాప్తు చేస్తున్నారు.</font>', '2009-07-02 15:21:08', 1),
(11, 6, '<font class="UnicodeHeadline">న్యూజెర్సీలో ఎబి స్పీడ్ వే</font>', '<font class="UnicodeContent">న్యూజెర్సీ : ఎడిసన్ నగరంలో ''ఆంధ్రా బ్యాంకు\nస్పీడ్ వే'' సేవలను ప్రారంభించింది. జూన్ 29న జరిగిన ఒక కార్యక్రమంలో\nఆంధ్రా బ్యాంకు మేనేజింగ్ డైరెక్టర్ ఆర్.ఎస్</font>', '<font class="UnicodeContent">రెడ్డి ఈ విభాగాన్ని లాంఛనంగా\nప్రారంభించారు. కార్యక్రమానికి హాజరైన అతిథులను సత్యనారాయణమూర్తి వేమూరు\nఆహ్వానించగా, బ్యాంకు జనరల్ మేనేజర్ త్రివేది సమావేశానికి అధ్యక్షత\nవహించారు. ఇటీవలి కాలంలో ఆంధ్రా బ్యాంకు సాధించిన విజయాలను, ఖాతాదారులకు\nఅందించిన సేవల గురించి జి.ఎం. త్రివేది వివరించారు. లక్ష కోట్ల రూపాయల\nవ్యాపారం చేయడం బ్యాంకు చరిత్రలో ఒక మైలురాయిగా నిలుస్తుందని ఆయన\nవెల్లడించారు. అంతే కాకుండా ఆంధ్రా బ్యాంకు అన్ని శాఖల్లోనూ కోర్\nబ్యాంకింగ్ సేవలను నూటికి నూరు శాతం అందించే దిశగా సాగిపోతున్నదని\nతెలిపారు.<br>\n<br>\nన్యూజెర్సీలో ఆంధ్రా బ్యాంకు ఏర్పాటు చేసిన స్పీడ్ వే పథకం ముఖ్య\nఉద్దేశాలు, అందించే సేవల గురించి బ్యాంకు జనరల్ మేనేజర్ రాకేష్ సేథీ\nవిపులంగా వివరించారు. మహేశ్వరబాబు వందన సమర్పణ చేశారు.</font>', '2009-07-02 15:23:15', 0),
(12, 6, '<font class="UnicodeHeadline">మరో 80 `మోర్'' స్టోర్స్ </font>', '<font class="UnicodeContent">ముంబయి : గడచిన ఆర్థిక సంవత్సరంలో 110 శాతం\nవృద్ధిని సాధించి మంచి ఊపులో ఉన్న ఆదిత్య బిర్లా రిటైల్ చెయిన్ ఈ ఏడాది\nకొత్తగా 80 `మోర్...'' స్టోర్స్ ను ప్రారంభించేందుకు ప్రణాళికలు\nరూపొందించింది. ఇదే సమయంలో 10-20 ఔవుట్ లెట్లను క్లీనప్ కార్యకలాపాల్లో\nభాగంగా మూసివేసే అవకాశం ఉంది. `మా అవులెట్ల సంఖ్యను 720-230 వరకు పెంచాలని\nఅనుకుంటున్నాం. ఇందులో భాగంగా కొత్తగా 80 స్టోర్స్ </font>', '<font class="UnicodeContent">ప్రారంభించాలని అనుకుంటున్నాం. పాత వాటిలో\n10 నుంచి 20 స్టోర్స్ మూసివేస్తాం. అందువల్ల మొత్తం మీద ఈ ఏడాది అదనంగా\n60-70 అవుట్ లెట్లు కలుస్తాయని ఆదిత్య బిర్లా రిటైల్ ఛీఫ్ ఎగ్జిక్యూటివ్\nఆఫీసర్ థామస్ వర్గీస్ తెలిపారు. <br>\n<br>\nప్రస్తుతం మైసూరు, బరోడాలలో కంపెనీ రెండు హైపర్ మార్కెట్లను\nనిర్వహిస్తోంది. అదే తరహాలో మార్చి నాటికి ఆరు నుంచి ఎనిమిది హైపర్\nస్టోర్స్ ఏర్పాటు చేయాలని కంపెనీ ప్రతిపాదించింది. `ఈ ఆర్థిక సంవత్సరంలో\nహైపర్ మార్కెట్లపై దృష్టిని కేంద్రీకరిస్తామని, ఆరు నుంచి ఎనిమిది హైపర్\nమార్కెట్లు ప్రారంభించాలని అనుకుంటున్నామని'' వర్గీస్ తెలిపారు. ఈ ఏడాది\n1600-1700 కోట్ల రూపాయల అమ్మకం టర్నోవర్ సాధించాలని అనుకుంటున్నామని, ఇది\nక్రితం సంవత్సరం కన్నా 45 శాతం ఎక్కువ అని తెలిపారు. గత సంవత్సరం 110 శాతం\nవృద్ధిని సాధించాము. ఈ ఏడాది అంత సాధ్యం కాకపోవచ్చు. అయితే 40-45 శాతం\nవృద్ధిని సాధించవచ్చు అని ఆయన అన్నారు.</font>', '2009-07-02 15:24:25', 0),
(13, 6, '<font class="UnicodeContent">నారా వారి ''బాణం''</font>', '<font class="UnicodeContent">సినీ రంగానికి వారసుల ప్రవేశం కొత్త కాదు.\nనాగార్జున తనయుడు నాగచైతన్య ''జోష్'' తోనూ, డి.సురేష్ బాబు తనయుడు రానా\n(రామానాయుడు) శేఖర్ కమ్ముల దర్శకత్వంలో రూపొందుతున్న ''లీడర్'' </font>', '<font class="UnicodeContent">చిత్రంతోనూ హీరోలుగా ఈ ఏడాదే ప్రేక్షకుల\nముందుకు రాబోతున్నారు. తాజాగా రాజకీయ వారసత్వం ఉన్న నారా రోహిత్ సైతం\nహీరోగా పరిచయం కాబోతున్నారు. తెలుగుదేశం అధినేత నారా చంద్రనాయుడు సోదరుడైన\nనారా రామ్మూర్తినాయుడి కుమారుడే రోహిత్. మహేష్ ను ''రాజకుమారుడు'', అల్లు\nఅర్జున్ ను ''గంగోత్రి'' చిత్రాల ద్వారా పరిచయం చేసిన ప్రముఖ నిర్మాత\nసి.అశ్వనీదత్ తన వైజయంతీ మూవీస్ పతాకంపై నారా రోహిత్ తొలి చిత్రాన్ని భారీ\nస్థాయిలో నిర్మించబోతున్నారు. ఈ చిత్రం ద్వారా దంతులూరి చైతన్య దర్శకుడిగా\nపరిచయం కానున్నారు. ఈ చిత్రానికి ''బాణం'' అనే టైటిల్ పరిశీలనలో ఉందని\nతెలుస్తోంది.<br>\n<br>\nరోహితి సరసన ఓ కొత్తమ్మాయిని వెండితెరకు పరిచయం చేయనున్నారు. ప్రస్తుతం\nనటీనటులు, సాంకేతిక నిపుణుల ఎంపిక జరుగుతోంది. ఈ నెలలోనే నందమూరి\nహీరోలందరి సమక్షంలో గ్రాండ్ గా ఈ చిత్ర ప్రారంభోత్సావాన్ని ఇదే నెలలో\nజరిపేందుకు ఏర్పాట్లు జరుగుతున్నాయి. ఈ చిత్రంతో పాటు ఎన్టీఆర్\nకథానాయకుడిగా మెహర్ రమేష్ దర్శకత్వంలో ఓ కొత్త చిత్రానికి అశ్వనీదత్ ఇటీవల\nపూజా కార్యక్రమాలు జరిపారు. సెప్టెంబర్ నుంచి ఆ చిత్రం రెగ్యులర్ షూటింగ్\nజరుగుతుంది.</font>', '2009-07-02 15:32:00', 0),
(14, 6, '<font class="UnicodeHeadline">100 డే ''హానీమూన్'' వద్దు!</font>', '<font class="UnicodeContent">న్యూఢిల్లీ: రెండోసారి అధికార పగ్గాలు\nచేపట్టిన ''ఉపా'' సంకీర్ణ సర్కార్ మంచి జోరుమీద కనిపిస్తోంది. కొత్త\nప్రభుత్వం కొలువుదీరిన వెంటనే 100 రోజుల్లో పరిపాలనను మెరిపిస్తామని\nప్రధానమంత్రి మన్మోహన్ సింగ్ జాతికి వాగ్దానం చేశారు. దీనికి అనుగుణంగా\nఆయన మంత్రివర్గ సహచరులు వారి వారి మంత్రిత్వ శాఖల</font>', '<font class="UnicodeContent">కింద చేపట్టబోయే అభివృద్ధి పథకాలు,\nసంస్కరణలను హడావిడిగా ప్రకటించేశారు. అయితే వినూత్నమైన, వినసొంపైన ఈ\nఆలోచనలపై విస్తృతంగా చర్చ జరగకుండా అమలు చేస్తే అవి ప్రతికూల పరిణామాలకు\nదారితీసే ప్రమాదం ఉందని ప్రజా విధాన నిపుణులు హెచ్చరిస్తున్నారు. విద్యా\nరంగంలో పరీక్షల విధానాన్ని ఆసాంతంగా సంస్కరించడం, ఉన్నత న్యాయ వ్యవస్థ\nపనితీరులో కనీవినీ ఎరుగనంతటి పారదర్శకత తీసుకురావడం, ప్రాజెక్ట్ ల\nనిర్మాణంలో పర్యావరణ క్లియరెన్స్ లను వేగిరపరచడం వంటి అనేక వినూత్నమైన\nఆలోచనలను మన్మోహన్ సింగ్ సహచరులు దేశ ప్రజల ముందు ఆవిష్కరించారు.<br>\n<br>\nఅయితే ఈ ఆలోచనలు, ప్రణాళికలలో అంతుబట్టని, సమాధానం తెలియని అనేక విషయాలు\nఉన్నాయి. వీటిపై సమాజంలోని అన్ని వర్గాలలో క్షుణ్ణంగా చర్చ జరగకుండా 100\nరోజుల డెడ్ లైన్ అంటూ ఆచరణలోకి తీసుకువస్తే అది అటు ప్రభుత్వానికి, ఇటు\nదేశానికి కూడా చేటు తీసుకురాగలవని విధాన నిపుణులు హెచ్చరిస్తున్నారు. 100\nరోజుల ప్రణాళికలను ఆవిష్కరించడంలో కేంద్ర మానవ వనరుల అభివృద్ధి శాఖ మంత్రి\nకపిల్ సిబాల్, న్యాయ శాఖ మంత్రి వీరప్ప మొయిలీ, పట్టణ అభివృద్ధి శాఖ\nమంత్రి జైపాల్ రెడ్డి పోటీ పడి మరీ ప్రెస్ కాన్ఫరెన్స్ లు నిర్వహించారు.\nపర్యావరణ శాఖ మంత్రి జైరామ్ రమేష్ కూడా మొదట్లో ఈ రేసులో చేరినా తర్వాత\nపక్కకు తప్పుకుని తమ మంత్రిత్వ శాఖ చేస్తున్న ప్రతిపాదనలు 100 రోజుల డెడ్\nలైన్ తో చేస్తున్నవి కాదని వివరణ ఇచ్చుకున్నారు.<br>\n<br>\n''నిజమే. కేంద్ర మంత్రులు కొందరు ప్రకటించిన ప్రతిపాదనలలో కొన్ని\nవిప్లవాత్మకమైనవి. మరికొన్ని ఆసక్తికరమైనవి. అయితే వాటిలో కొన్ని సవివరంగా\nలేవు. అలాంటి వాటిని 100 రోజుల లక్ష్యంగా పెట్టుకుని అమలు చేయడానికి\nప్రయత్నించ కూడదు. ప్రభుత్వం దీనికి తగినంత సమయం తీసుకుని ముందుకెళ్ళాలి''\nఅన్నారు ఢిల్లీలోని సెంటర్ ఫర్ పాలసీ రీసెర్చి సంస్థ అధ్యక్షుడు ప్రతాప్\nభాను మెహతా.</font>', '2009-07-02 15:33:07', 0),
(15, 6, '<font class="UnicodeHeadline">టొరంటో ''సూపర్ సింగర్''</font>', '<font class="UnicodeContent">టొరంటో : గ్రేటర్ టొరంటో తెలుగు సంఘం\nఆధ్వర్యంలో తానా - మా టీవీ సూపర్ సింగర్ పోటీలను శనివారం మిస్సిసాగాలో\nఘనంగా నిర్వహించారు. తొమ్మిది మంది పాల్గొన్న ఈ</font>', '<font class="UnicodeContent">పోటీల్లో విజేతలుగా ఎంపికైన ఇద్దరు షికాగోలో\nజరిగే తానా 17వ మహాసభల్లో నిర్వహించే ఫైనల్ పోటీల్లో పాల్గొంటారు. ఈ\nపోటీలకు న్యాయ నిర్ణేతగా ప్రముఖ కర్ణాటక సంగీత గాయని మంజూ శంకరనారాయణ్\nవ్యవహరించారు.<br>\n<br>\nచివరి వరకూ ఉత్కంఠగా జరిగిన ఈ పోటీల్లో విజేతలుగా సురేష్ నిట్టల, బార్ల\nధీరజ్ ఎంపికయ్యారు. ఈ కార్యక్రమంలో గ్రేటర్ టొరంటో తెలుగు సంఘం అధ్యక్షుడు\nచారి సామాంతపూడి, తానా ఉపాధ్యక్షుడు సూరపనేని లక్ష్మీనారాయణ, అబ్దుల్\nమునాఫ్, సుఖవాసి గంగాధర్, అరుణ్ కుమార్, వారణాసి రవి, జాహా అబ్దుల్,\nలక్ష్మీ వెల్లంకి, జ్యోతి సామాంతపూడి, వింధ్యా వారణాసి, మూల్పూరి మీనా,\nసూరపనేని హారిక తదితరులు పాల్గొన్నారు.</font><br>', '2009-07-02 15:34:34', 0);
INSERT INTO `cinema` (`id`, `type`, `heading`, `summary`, `description`, `insert_date`, `active`) VALUES
(16, 6, '<font class="UnicodeHeadline">జోరుగా కార్ల అమ్మకాలు</font>', '<font class="UnicodeContent">న్యూఢిల్లీ : దేశంలో కారు, దిచక్ర వాహన\nవిక్రయాలు ఊపందుకున్నాయి. వరుసగా నాలుగవ నెలలో స్వదేశీ కారు అమ్మకాల్లో\nవృద్ధిని సాధించింది. మే నెలలో 2.48 శాతం విక్రయాలు పెరిగాయి. కానీ\nప్రభుత్వం నుంచి ఆటో రంగానికి సహకారం అంతగా కనిపించడం లేదు. సొసైటీ ఆఫ్‌\nఇండియన్‌ ఆటో</font>', '<font class="UnicodeContent">మొబైల్‌ మ్యానుఫ్యాక్చర్స్‌(ఎస్‌ఐఎఎమ్‌)\nప్రకారం, మే నెలలో స్వదేశీ కారు అమ్మకాలు 1,10,745 యూనిట్ల నుంచి 1,13,490\nయూనిట్లకు పెరిగాయి. మే నెలలో మొత్తం ద్విచక్ర వాహన విక్రయాలు కూడా\n7,27,937 యూనిట్లతో 12.45 శాతం వృద్ధిని సాధించాయి. గత ఏడాది ఇదే సమయానికి\nద్విచక్ర వాహన విక్రయాలు 6,47,358 యూనిట్లు నమోదయ్యాయి. ద్విచక్ర వాహన\nఅమ్మకాలు గత ఏడాది ఇదే సమయానికి 5,13,209 యూనిట్ల నుంచి 5,76,541\nయూనిట్లతో 12.34 శాతం వృద్ధిని సాధించాయి. <br>\n<br>\nవృద్ధి బాటన నడుస్తున్నప్పటికీ ప్రభుత్వం సహకారం లేకపోవడం ఆటో పరిశ్రమలను\nనిరాశపరుస్తుందని ఎస్‌ఐఎఎమ్‌ తెలిపింది. గత మూడు, నాలుగు నెలల్లో వృద్ధిని\nపరిశీలించిన చూసినట్లయితే, ఉద్దీపన ప్యాకేజీల ప్రభావం ఉన్నట్లు\nకనిపిస్తోంది. ఈ వృద్ధి ఇలాగే కొనసాగాలంటే మరిన్ని ఉద్దీపన ప్యాకేజీల\nఅవసరం ఎంతైనా ఉందని ఎస్‌ఐఎఎమ్‌ సీనియర్‌ డైరెక్టర్‌ సుగాటో సేన్‌\nతెలిపారు. జూన్‌ నెలలో చూసినట్లయితే ప్రయాణికుల వాహనాల పరిస్థితి\nఅధ్వాన్నంగానే కనిపిస్తుందని ఆయన అన్నారు. ఈ ఏడాది మే నెలలో మొత్తం మొత్తం\nవాహన విక్రయాలు 8,53, 969 యూనిట్ల నుంచి రూ.9,29,596 యూనిట్లకు పెరిగి\n8.86 శాతం వృద్ధిని సాధించాయని ఎస్‌ఐఎఎమ్‌ వెల్లడించింది.<br>\n<br>\nమారుతీ సుజుకీ 57,315 యూనిట్ల నుంచి 62,878 యూనిట్లతో 9.71 శాతం వృద్ధిని\nసాధించింది. అలాగే ఇతర కంపెనీలను చూసినట్లయితే, హ్యుందాయ్‌ మోటార్‌ 24,506\nయూనిట్ల నుంచి 23,501 యూనిట్లతో 4.10 శాతం క్షీణించాయి. టాటా మోటార్స్‌\nవిక్రయాలు 14,228 యూనిట్ల నుంచి 12,838 యూనిట్లతో 9.77 శాతం తగ్గాయి.\nఆసక్తికరమైన విషయమేమిటంటే అమెరికాలో జనరల్‌ మోటార్స్‌ దివాళాను\nప్రకటించినప్పటికీ మే నెలల్లో విక్రయాలు 3,847 యూనిట్ల నుంచి 3,890\nయూనిట్లతో 1.18 శాతం వృద్ధిని సాధించాయి. మే నెలలో కారు ఎగుమతులు 42 శాతం\nవృద్ధిని సాధించాయి. స్వదేశీ విక్రయాలను చూసినట్లయితే 2.48 శాతం వృద్ధి\nనమోదు చేశాయి. </font>', '2009-07-02 15:37:10', 0),
(17, 6, '<font class="UnicodeHeadline">ఫ్లైటుకు మసాలా ఘాటు!</font>', '<font class="UnicodeContent">ముంబాయి : ఆహార పదార్థాల్లో మసాలా ఘాటు\nఅధికమైతే మన ముక్కుపుటాలు అదిరిపోతాయి. కళ్ళు గిర్రున తిరుగుతాయి. ఘాటు\nమరికాస్త ఎక్కువైతే దబ్బున కళ్ళు తిరిగి కింద పడతాం. అదే ఫ్లైటుకైతే ఫైర్\nఅలారం మోగించి అరిచి అల్లరి చేసేస్తుంది. ఆనక తనను గాల్లోంచి కిందికి\nదించి ఘాటును తొలగించేలా </font>', '<font class="UnicodeContent">చేస్తుంది. శనివారం నాడు సరిగ్గా ఇదే జరిగింది.<br>\n<br>\nఫ్రాంక్ ఫర్ట్ కు చెందిన విమానం శుక్రవారంనాడు ముంబాయి ఎయిర్ పోర్ట్ నుంచి\nటేకాఫ్ అవుతున్న సమయంలో ఒక్కసారిగా ఫైర్ అలారం గణగణమంటూ మోగింది. అలారం\nమోగడంతో ప్రయాణికులు ఒక్కసారిగా ఉలిక్కిపడ్డారు. భయాందోళనలకు గురయ్యారు.\nఅలారం హెచ్చరికలతో పైలట్ అప్పుడప్పుడే గాల్లోకి ఎగురుతున్న విమానాన్ని\nమళ్ళీ కిందికి దించాడు. అప్పుడు ఆ విమానంలో మొత్తం 235 మంది\nప్రయాణికులున్నారు.<br>\n<br>\nఇంతకీ అసలు విషయం ఏమంటే అదే విమానంలో ప్రయాణిస్తున్న వ్యక్తి\nతీసుకువెళుతున్న ఓ పొట్లంలో నుంచి ఘాటైన మసాలా వాసన వచ్చింది. ఆ వాసనను\nపసిగట్టిన విమానం ఒక్కసారిగా ఫైర్ అలారం మోగించింది. వెంటనే విమానాన్ని\nకిందికి దింపి తనిఖీలు నిర్వహించినప్పుడు మసాలా విషయం బయటపడింది. దీనితో\nప్రయాణికులంతా ఒక్కసారిగా ''హమ్మయ్య'' అని ఊపిరిపీల్చుకున్నారు.</font>', '2009-07-02 15:44:29', 0),
(18, 6, '<font class="UnicodeHeadline">చెత్తగా ఆడారు : అజర్‌</font>', '<font class="UnicodeContent">హైదరాబాద్‌: టి-20 వరల్డ్‌కప్‌ నుంచి భారత\r\nజట్టు వైదొలగడానికి చెత్త ఆటే కారణమని భారత క్రికెట్‌ మాజీ కెప్టెన్‌,\r\nలోక్‌సభ సభ్యుడు మహ్మద్‌ అజారుద్దీన్‌ అన్నారు. ట్రోఫీని నిలబెట్టుకునే\r\n </font>', '<font class="UnicodeContent">అర్ధంతరంగా నిష్ర్కమించడం అభిమానులను\nనిరాశపరిచిందన్నారు. సమష్టి వైఫల్యం వల్లే ధోనీ సేన పరాజయం పాలైందన్నారు.\nవరుస విజయాలతో అభిమానుల్లో కొత్త ఆశలు చిగురింప చేసిన టీమిండియా కనీసం\nసెమీస్‌కు కూడా చేరకపోవడం బాధించే విషయమాన్నారు. ఇంగ్లాండ్‌,\nవెస్టిండీస్‌లతో జరిగిన మ్యాచుల్లో భారత ఫీల్డింగ్‌ ఘోరంగా ఉందన్నారు.\nఇప్పటికైనా క్రికెట్‌ బోర్డు జట్టు వైఫల్యాలపై దృష్టి సారించాలని అజర్‌\nసూచించారు.</font>', '2009-07-02 15:45:44', 0),
(19, 1, '<font class="UnicodeContent">''అడవి'' రివ్యూ</font>', '<font class="UnicodeContent">ఇండియన్ సినిమా నడక మార్చిన దర్శకుడిగా రామ్\nగోపాల్ వర్మ నుంచి ఓ సినిమా వస్తోందంటే ఎదురుచూసే ప్రేక్షకులకు కొదవ లేదు.\nడిఫరెంట్ జనర్ సినిమాలు తీయడంలో స్పెషలిస్టుగా ఆయనకు పేరుంది. <br></font>', '<font class="UnicodeContent"> సైకలాజికల్ థ్రిల్లర్లు, అండవరల్డ్ గ్యాంగ్\nవార్ ఫేర్, రాజకీయాలు-నేరస్థుల సంబంధాలు..ఇలా ఎప్పటికప్పుడు వైవిధ్యమైన\nఇతివృత్తాలతో జనం ముందుకు వస్తుంటారు. అయితే ఇటీవల కాలంలో ఆయనకు సైతం\nబాక్సాఫీస్ వైఫల్యాలు తప్పడం లేదు. నలుగురూ నడిచిన బాటలోనే వర్మ నడిస్తే\nచూడాలని ఎవరనుకుంటారు? వర్మ అంటేనే క్రియేటివిటీకి మారుపేరు అని కదా..మరి\nఎక్కడ లోపం జరుగుతోంది? ఇంత తీరుబడిగా ఆలోచించేందుకు వర్మ సిద్దంగా\nఉన్నట్టు కనిపించదు. ఫ్యాక్టరీ బ్యానర్ నుంచి రోజుకో ప్రోడక్ట్ (సినిమా)\nఅందించాలనే లక్ష్యం మంచిదే కానీ...అందుకు అస్త్రశస్త్రాలు కావాలి కదా.\n''అనగనగా ఓ రాజు..ఆయనకు ఏడుగురు కొడుకులు...వేటకు వెళ్లి ఏడు చేపలు\nపట్టారు'' అనే కథనే వర్మ కూడా చెప్పదలిస్తే తెలివిమీరిన (తెలివిగల)\nప్రేక్షకుల చెవికెక్కుతుందా? అడవిలోకి ఉద్దేశపూర్వకంగానో, యాదృచ్ఛికంగానే\nవెళ్లిన కొందరు అనుమానాస్పద స్థితిలో ఒక్కొక్కరూ మృత్యువాత పడుతూ,\nదీనివెనుక ఓ మిస్టరీ ఉందని చూపించే ఫార్ములాకు హిమాలయాలంత పాత చరిత్ర\nఉందని వర్మకు చెప్పాలా? చెప్పినా చెప్పకపోయినా వర్మ సంధించిన ''అడవి'' కూడా\nఈ కోవలోనిదే. వర్మ సినిమా అంటే ఏదో ఒక ప్రత్యేకత ఉండాలి కదా అంటారా? ఉంది.\nఫారెస్ట్ లోని మర్టర్స్ మిస్టరీకి కారకులెవరనేది ఎవరికి తోచింది వారు\nఊహించుకోమని తెరదించేశారు. సీక్వెల్ ఆలోచన ఉందనే ఫీలర్లూ వదిలారు. రేపటి\nముచ్చటెందుకు కానీ నేటి ముచ్చట్లోకి ఓ సారి చూద్దాం...<br>\n<br>\nఫారెస్ట్ బ్యాక్ డ్రాప్ లో సినిమా షూటింగ్ కోసం ఓ చిత్రయూనిట్ దట్టమైన\nఅడువుల్లోకి అడుగుపెడుతుంది. ఆ టీమ్ లో పది మంది ఉంటారు. టాలీవుడ్ స్టార్\nహీరో శర్మన్ బాబు (గౌతమ్ రూడ్), క్రేజీ హీరోయిన్ ఆషా (ప్రియాంక కొఠారి),\nఅసిస్టెంట్ డైరెక్టర్ సుజన్ (నితిన్), అతని సన్నిహితురాలు సమీరా (రసిక),\nనిర్మాత మూర్తి (ఇష్రత్ అలి), దర్శకుడు జె.జె. (హార్వే), స్పాట్ బాయ్\n(ఇస్తియాక్), యాక్షన్ డైరెక్టర్ రాఖా (రవికాలే), కెమెరామన్ శేఖర్ ఈ టీమ్\nలో ఉంటారు. అడవిలో గైడ్ గా సేతు (జాయ్) అనే వ్యక్తి వీరితో కలుస్తాడు.\nశర్మన్ బాబు తానో పెద్ద హీరో అనే గర్వంతో టీమ్ సభ్యులతో దురుసుగా\nప్రవర్తిస్తుంటాడు. మరోవైపు ఆషాను సుజన్ ప్రేమిస్తుంటాడు. ఒకరోజు అందరూ\nసేతుతో కలిసి డీప్ ఫారెస్ట్ లోకి వెళ్తారు. ఆ రోజు రాత్రి ఆకాశం నుంచి ఏదో\nవస్తువు అడవుల్లోకి జారిపడుతుంది. అది తోకచుక్క కావచ్చని అంతా అనుకుంటారు.\nఏదో కొత్త అరుపు వినిపించడంతో ఆ వివరం కనుక్కునేందుకు వెళ్లిన సేతు శవమై\nతేలుతాడు. దీంతో అందరూ భయంతో వణికి పోతారు. ఆ హత్య చేసింది మనిషా? మృగమా?\nమానవాతీత శక్తా? అనేది మిస్టరీ అవుతోంది. ఆ తర్వాత క్రమంలో నిర్మాత,\nదర్శకుడు, స్పాట్ బాయ్ ఇలా...ఒక్కొక్కరుగా ఆ అజ్ఞాత శక్తి చేతిలో\nహతమవుతారు. చివరకు ఇద్దరే మిగులుతారు. ఆ హత్యలు చేసిన అజ్ఞాత శ(వ్య)క్తి\nఎవరనే మిస్టరీ మాత్రం ఎవరికి తోచింది వారు ఊహించుకోవాల్సిందే. ఎందుకంటే\nవర్మ ముగింపు ఇవ్వలేదు కాబట్టి.</font>', '2009-08-10 13:18:10', 0),
(21, 1, 'వైవిధ్యం కోసం శర్వానంద్ ''ప్రస్థానం''', 'వి.ఆర్.సి.మీడియా &amp; ఎంటర్టైన్మెంట్స్ పతాకం పై రూపొందుతున్న చిత్రం\n''ప్రస్థానం''. వెన్నెల చిత్రం ద్వారా పరిచయమైన దర్శకుడు దేవా కట్టా\nరూపొందిస్తున్న ఈ చిత్రం మూడో', 'షెడ్యూల్ ఆగష్టు 16 నుండీ మొదలు కాబోతోంది. గమ్యం చిత్రంతో మంచి విజయాన్ని\nఅందుకొని, రాజు మహారాజు చిత్రంతో ఫ్యామిలీ ఆడియెన్స్ కు కూడూ చేరువైన\nశర్వానంద్ కథానాయకుడుగా నటిస్తున్నారు. వెన్నెల చిత్రంలో శర్వానంద్ ను\nభిన్నమైన కోణంలో చూపించిన దేవా ఈ చిత్రంలో ఎలా చూపించబోతున్నాడన్నది\nఆశక్తికరాంశం. ఇందులో ''డైలాగ్ కింగ్'' సాయి కుమార్ మునుపెన్నడూ చేయనటువంటి\nవైవిధ్యమైన పాత్రను పోషిస్తన్నట్టు తెలిసింది.<br><br> ఈ మధ్యే విడుదల\nచేసిన చిత్రాలకు మంచి స్పందన లభిస్తోంది. ఇందులో శర్వానంద్ డిఫరెంట్ గెటప్\nతో కనిపిస్తున్నారు. యాంగ్రీ యంగ్ మ్యాన్ తరహా పాత్రలో నటిస్తున్నట్టు\nతెలిసింది. ''గాయం'' చిత్రంలో జగపతిబాబు పాత్ర తరహాలో వుంటుందన్న వార్తలు\nవినిపిస్తున్నాయి. ఇందులో శర్వానంద్ కు జోడీగా ఢీల్లీ భామ రూబీ పరిహార్\nకథానాయికగా నటిస్తోంది. త్వరలో విడుదల కాబోతున్న స్నేహగీతం చిత్రంలో\nనటించిన సందీప్ కిషన్ ఓ ముఖ్యభూమికను పోషిస్తున్నారు. ''వెన్నెల'' కిషోర్,\nరవిప్రకాష్, సురేఖా వాణి, జయప్రకాష్ రెడ్డి, జీవా లు ప్రధాన పాక్రలు\nపోషిస్తున్నారు. ''వెన్నెల'' ఫేం మహేష్ శంకర్ చిత్రానికి సంగీతాన్ని\nఅందిస్తున్నారు.', '2009-08-10 16:18:40', 0),
(23, 1, 'ఎన్టీఆర్ మందు కొట్టే..?', 'హైదరాబాద్: జూనియర్ ఎన్టీఆర్ కీ ఏక్సిడెంట్ కావటానికి గంటముందు మందు\nపార్టీలో పాల్గొన్నాడంటూ అన్ని ఛానెల్స్ వారు వార్తలు ప్రసారం\nచేస్తున్నారు. ఆ వార్తకు బలం', 'చేకూర్చటానికి ఓ వీడియో క్లింప్పింగ్ ని సైతం ప్రసారం చేస్తున్నారు. దాంతో\nఎన్టీఆర్ ఏక్సిడెంట్ కి కారణం ఫుల్ గా త్రాగి డ్రైవ్ చేయటమేనని మరో వివాదం\nమొదలైంది.తాజాగా ఇంటర్నెట్లో దొరికిన ఓ వీడియో క్లిప్పింగ్ ఆధారంగా టీవీ\nఛానెల్స్ వారు ఈ విధమైన నిర్ధారణకొచ్చారు. సెల్ ఫోన్ లో దొరికిన ఈ\nక్లిప్పింగ్స్ లో ఎన్టీఆర్ రాలిపోయే పువ్వా నీకు రాగాలెందుకే అంటూ జోరుగా\nపాట అందుకున్నారు. అతనితో పాటు రాజీవ్ కనకాల,బబ్లు,రాజా వంటి అతని\nసన్నిహితులు ఉన్నారు. ఈ మందుపార్టీని ఉగాదికి తమ ఇంటికి వెళ్తున్న\nసందర్భంగా ఉషారుగా చేసుకున్నట్లు చెప్తున్నారు.<br><br> అయితే పోలీసులు ఈ\nదిసగా కేసు నమేదు చేయకపోవటం వల్లే దర్యాప్తు జరపలేదని అంటున్నారు. ఇక ఈ\nవీడియో క్లిప్పింగ్ ని కరెక్టే అనేందుకు అంతకుముందు ఏక్సిడెంట్ రోజు చూపిన\nక్లిప్పింగ్స్ చూపుతూ అందులో ఎన్టీఆర్ వేసుకున్న డ్రస్ ని ఈ కొత్త క్లిప్\nలో ఎన్టీఆర్ డ్రస్ తో పోల్చుతున్నారు. రెండు ఒకటే అని నిర్ధారణ చేసి\nఎన్టీఆర్ త్రాగే డ్రైవ్ చేసాడని నిర్ధారణ చేసారు. అంతేగాకుండా సూర్యాపేట\nఎస్సై వివరణ తీసుకుని మరీ ఈ విషయాన్ని ధృవీకరించే ప్రయత్నం చేసారు. అయితే\nఆ వీడియో క్లిప్పింగ్ సెల్ ఫోన్ తో తీసినది కావటం విశేషం. అంతేగాక ఆ\nక్లిప్ లో కనపడుపతున్న పార్టీ ఆ రోజుది కాదని అతని స్నేహితులు\nఖండిస్తున్నారు. ఇక ఇవన్నీ ఇలా ఉంటే రీసెంట్ గా అతని వద్ద గొడవపడి మానేసిన\nమేనేజర్ సుకుమార్ ఈ క్లిప్స్ ని నెట్ లో పెట్టాడని అంతటా వినపడటం విశేషం.', '2009-08-10 16:27:09', 0);
