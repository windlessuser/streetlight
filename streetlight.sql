-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2012 at 11:47 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `streetlight`
--

-- --------------------------------------------------------

--
-- Table structure for table `streetlight`
--

CREATE TABLE IF NOT EXISTS `streetlight` (
  `streetlightid` int(10) NOT NULL AUTO_INCREMENT,
  `streetlight_no` varchar(50) NOT NULL,
  `councilid` int(10) NOT NULL,
  `divisionid` int(10) NOT NULL,
  `districtid` int(10) DEFAULT NULL,
  `street` varchar(25) DEFAULT NULL,
  `streetlight_location` longtext,
  `streetlight_typeid` int(10) DEFAULT NULL,
  `post_typeid` int(10) DEFAULT NULL,
  `wattage` int(10) DEFAULT NULL,
  `streetlight_statusid` int(10) DEFAULT NULL,
  `comments` longtext,
  `latitude` varchar(50) DEFAULT NULL,
  `longtitude` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`streetlight_no`),
  UNIQUE KEY `idx_streetlight` (`streetlightid`) USING BTREE,
  KEY `idx_division` (`divisionid`) USING BTREE,
  KEY `idx_council` (`councilid`) USING BTREE,
  KEY `idx_district` (`districtid`) USING BTREE,
  KEY `idx_street` (`street`) USING BTREE,
  KEY `idx_posttype` (`post_typeid`) USING BTREE,
  KEY `idx_streetlightstatus` (`streetlight_statusid`) USING BTREE,
  KEY `idx_streetlighttype` (`streetlight_typeid`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `streetlight`
--

INSERT INTO `streetlight` (`streetlightid`, `streetlight_no`, `councilid`, `divisionid`, `districtid`, `street`, `streetlight_location`, `streetlight_typeid`, `post_typeid`, `wattage`, `streetlight_statusid`, `comments`, `latitude`, `longtitude`, `create_date`, `update_date`) VALUES
(1, '101', 1, 1, 1, 'any st', NULL, 1, 1, 240, NULL, NULL, NULL, NULL, '2012-03-18 23:32:30', NULL),
(2, '105', 1, 1, 1, 'any st', NULL, 1, 1, 240, 1, 'any', '6546546', '65465', '2012-03-19 23:46:14', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
