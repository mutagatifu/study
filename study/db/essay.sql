-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 03:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `essay`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `user_name`, `password`, `create_date`, `update_date`) VALUES
(5, 'gashumba', 'stevenfff', 'gahima123', 'jnlazjkfkjauji', '2018-12-24 14:29:26', '2019-01-03 09:09:33'),
(7, 'Mugiraneza', 'toussaintsssss', 'neza123', 'toussaint1222', '2018-12-24 14:31:29', '2018-12-31 01:46:28'),
(9, 'niwemukiza', 'rened', 'rene1254', 'abarene123', '2018-12-24 15:15:53', '2018-12-31 01:45:59'),
(12, 'mugisha', 'samuel', 'samugisha1', 'mugisha123', '2018-12-24 16:37:26', '0000-00-00 00:00:00'),
(13, 'gatete', 'gerard', 'gahima123', 'gahima123', '2018-12-24 17:17:10', '0000-00-00 00:00:00'),
(14, 'muhire', 'emmy', 'emmydf', 'emmysdfert', '2018-12-31 14:48:25', '2018-12-31 01:48:41'),
(15, 'karamage', 'Frank', 'franky', 'karamafrank', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'gahima', 'gerard', 'gerad', 'kahigerarrd', '2019-01-11 08:57:11', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
