/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.1.32-community-log : Database - subhodaya
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `more` */

DROP TABLE IF EXISTS `more`;

CREATE TABLE `more` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `matter` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `more` */

insert  into `more`(`id`,`matter`,`active`) values (1,'మరిన్ని ..',0),(2,'ఇంకా చదవండి ',0),(3,'హొమ్',0),(4,'వార్తలు',0),(5,'సినిమా ',0),(6,'వీడియో',0),(7,'గ్యాలరీ ',0),(8,'గ్రీటింగ్స్ ',0),(9,'మహిళ',0),(10,'సాహితి ',0),(11,'రాజికీయాలు',0),(12,'క్రీడలు ',0),(13,'టాక్ అఫ్ టుడే',0),(14,'ఫోటోగ్యాలరీ ',0),(15,'టాప్ వ్యూ ',0),(16,'టాప్ రేటెడ్',0),(17,'మీ అభిప్రాయం',0),(18,'వీడియోస్',0),(19,'అవును',0),(20,' కాదు',0),(21,'తెలియదు',0),(22,'ఇన్వైట్ ఫ్రెండ్స్ వయా ఇ-మెయిల్ ',0),(23,'ఇది నిజం',0),(24,'ముఖ్యమైన  గ్రీటింగ్స్ ',0),(25,'మునుపటి పేజి',0),(26,'మిత్రునికి పంపించు',0),(27,'సంబంధిత సంగతులు',0),(28,'మీ  పేరు',0),(29,'మిత్రుని ఇ-మెయిల్',0),(30,'ఇవి కూడా చదవండి',0),(31,'వార్తల పోల్ ',0),(32,'సినిమా పోల్',0),(33,'లేటెస్ట్ వీడియోస్',0),(34,'హాట్  వీడియోస్',0),(35,'టాప్  వీడియోస్',0),(36,'మొత్తం వీడియోస్',0),(37,'రేటింగ్',0),(38,'గ్యాలరీ మెను',0),(39,'మీ ఇ-మెయిల్',0),(40,'మిత్రుని పేరు',0),(41,'సంప్రదించు',0),(42,'ఫీడ్ బ్యాక్ ',0),(43,'అడ్వర్ టైస్',0),(44,'మమ్ము సంప్రదించు',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
