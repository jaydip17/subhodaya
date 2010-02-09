-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2010 at 08:15 AM
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
-- Table structure for table `videos_list`
--

DROP TABLE IF EXISTS `videos_list`;
CREATE TABLE IF NOT EXISTS `videos_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hero_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `duration` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_date` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '0',
  `banned` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '0',
  `video_cat_id` int(10) DEFAULT NULL,
  `no_of_views` int(10) NOT NULL,
  `video_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=156 ;

--
-- Dumping data for table `videos_list`
--

INSERT INTO `videos_list` (`id`, `video_id`, `title`, `hero_name`, `description`, `duration`, `date_created`, `created_date`, `user_id`, `active`, `banned`, `video_cat_id`, `no_of_views`, `video_name`) VALUES
(131, 'cZlL5-Lgi7g', 'Shriya Saran By Vellithirai.Com', '', 'http://vellithirai.com presents - The Beautiful and Glamourous Tamil &amp; Telugu Actress Shriya Saran, super heroine of the Super Hit - Sivaji The Boss, here in a Slideshow - Enjoy. We appreciate your comments and rating.  Please visit http://vellithirai.com for more galleries.', '4:22', '2010-02-05 16:03:38', '1265366018', NULL, '0', '0', 15, 0, 'dfgdfhf'),
(138, 'ce5_fNjX84c', 'The hottest kollywood actress Shreya', '', 'Cheak this video out for the hottest eva kollywood actress', '5:20', '2010-02-08 11:01:16', '1265367807', NULL, '0', '0', 14, 224, 'sneham'),
(147, 'in-IIZX_wLI', 'Katha movie trailer ..Saradaga', '', 'Katha movie trailer Promoting Telugu movie film cinema industry..Saradaga. Saradaga brings Latest Telugu movie promotion videos, trailers, audio functions and more....Saradaga', '0:30', '2010-02-09 11:45:17', '1265696117', NULL, '0', '0', 20, 200, 'katha'),
(137, 'ce5_fNjX84c', 'The hottest kollywood actress Shreya', '', 'Cheak this video out for the hottest eva kollywood actress', '5:20', '2010-02-08 11:02:02', '1265366907', NULL, '0', '0', 14, 206, 'sneham'),
(135, '7kB659Ubxbo', 'shreya', '', 'from the movie shivaji', '4:31', '2010-02-05 16:10:34', '1265366434', NULL, '0', '0', 14, 200, 'sneham'),
(134, '7kB659Ubxbo', 'shreya', '', 'from the movie shivaji', '4:31', '2010-02-05 16:09:15', '1265366355', NULL, '0', '0', 14, 200, 'sneham'),
(139, 'rfNygYWCk48', 'Josh movie from College Bullaoda Song', '', ' ', '3:32', '2010-02-08 15:33:40', '1265608256', NULL, '0', '0', 14, 312, 'జోష్ '),
(140, 'tfhc5RgeaYM', 'REMAKE OF MAGADHEERA - You Must Enjoy IT', '', 'Special Program On Mega Movie Magadheera', '46:13', '2010-02-08 15:52:51', '1265610139', NULL, '0', '0', 15, 428, 'మగధీర '),
(141, '4BZr_CX4Mk0', 'Shambo Shiva Shambo Movie Trailer 01 - Ravi Teja, Allari Naresh, Priyamani, Shiva Balaji', '', 'Shambo Shiva Shambo, Tollywood Next Multi Starrer Ravi Teja,Allari Naresh,Shiva Balaji  Movie Shambo Shiva Shambo is all set to Release for this Pongal,Priyamani is Playing a Female Role in thi Movie. Watch this Latest Shabo Shiva Shambo Trailer 01, Its CineJosh Videos', '0:28', '2010-02-08 18:47:38', '1265628066', NULL, '0', '0', 15, 203, 'శంబో శివ శంబో '),
(133, 'cZlL5-Lgi7g', 'Shriya Saran By Vellithirai.Com', '', 'http://vellithirai.com presents - The Beautiful and Glamourous Tamil &amp; Telugu Actress Shriya Saran, super heroine of the Super Hit - Sivaji The Boss, here in a Slideshow - Enjoy. We appreciate your comments and rating.  Please visit http://vellithirai.com for more galleries.', '4:22', '2010-02-09 11:05:50', '1265366193', NULL, '0', '0', 16, 216, 'బొమ్మరిల్లు'),
(142, 'Gnzykk4Is2k', 'Namo Venkatesa - Telugu Movie Trailer', '', 'Latest Movie Trailer', '0:18', '2010-02-08 18:28:01', '1265628534', NULL, '0', '0', 14, 303, 'నమో వేంకటేశ'),
(143, 'bU_tOkbJYXE', 'Bindaas Telugu movie song 3 - Telugu cinema - Manoj Manchu &amp; Sheena', '', 'Bindaas Telugu movie song 3 - Telugu cinema - Manoj Manchu &amp; Sheena', '1:3', '2010-02-08 18:47:31', '1265635051', NULL, '0', '0', 14, 300, 'bindaas'),
(144, '5WebY6psbbA', 'santosham', '', 'my fav song..', '4:26', '2010-02-09 10:59:47', '1265693387', NULL, '0', '0', 19, 200, 'fdgfhgfh'),
(145, '5WebY6psbbA', 'santosham', '', 'my fav song..', '4:26', '2010-02-09 11:02:25', '1265693545', NULL, '0', '0', 14, 200, 'santhosam'),
(146, '5WebY6psbbA', 'santosham', '', 'my fav song..', '4:26', '2010-02-09 11:51:29', '1265693711', NULL, '0', '0', 19, 202, 'bagunnara'),
(149, 'GNsiNIdQpqs', 'Gundello Emundo Andhrudu', '', 'Nice song from andhrudu...', '5:11', '2010-02-09 11:46:48', '1265696208', NULL, '0', '0', 20, 500, 'andhrudu'),
(151, 'HHXZD0HerZs', 'Supergoodmovies.com - Sitaramula kalyanam lankalo Song 2', '', 'Nitin and Hansika starrer Sita Ramula Kalyanam  songs. watch exclusive movie trailers at http://www.supergoodmovies.com/2321/tollywood/Sitaramula-Kalyanam-Trailer-Videos-Details', '1:26', '2010-02-09 11:50:58', '1265696458', NULL, '0', '0', 14, 400, 'sitaramula kalyanam '),
(152, '-YFQJo_4inc', 'venki comedy 3_flv.flv', '', 'raviteja''s venki movie', '3:6', '2010-02-09 11:52:51', '1265696571', NULL, '0', '0', 15, 300, 'venki'),
(153, 'gV9quLyr1Ck', 'Top 50 Fail Blog Videos: 10-1', '', 'the last of the fail blog videos! 10-1\n\nif you like my videos that please feel free to subscribe to them!\n\nanyways, i hope you comment with suggestions for my next video (u can message me also)\n\nand i will post more hopefully!', '7:12', '2010-02-09 11:53:49', '1265696629', NULL, '0', '0', 16, 200, 'blog'),
(154, 'eZNc4G-J7Lg', '1 Telugu comedy --Manmadhudu', '', 'awesome comedy', '4:53', '2010-02-09 13:32:10', '1265696765', NULL, '0', '0', 21, 102, 'manmadhudu'),
(155, 'CFCHIrZ2nmI', 'Adhurs -  Songs Promo -  Industan tv (Industan.co.in)', '', 'Adhurs Movie Promo\nstaring:  Jr.NTR, Nayanatara, Shela\nDirector : V V Vinayak', '2:8', '2010-02-09 11:57:58', '1265696878', NULL, '0', '0', 20, 400, 'adhurs');
