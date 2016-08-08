-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 09:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dju`
--

-- --------------------------------------------------------

--
-- Table structure for table `dju_profile`
--

CREATE TABLE IF NOT EXISTS `dju_profile` (
  `profile_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `P1` varchar(50) NOT NULL,
  `Rel` varchar(50) NOT NULL,
  `P2` varchar(50) NOT NULL,
  `P3` varchar(50) NOT NULL,
  `P4` varchar(50) NOT NULL,
  `P5` varchar(50) NOT NULL,
  `P6` varchar(50) NOT NULL,
  `P7` varchar(50) NOT NULL,
  `P8` varchar(50) NOT NULL,
  `P9` varchar(50) NOT NULL,
  `P10` varchar(50) NOT NULL,
  `P11` varchar(50) NOT NULL,
  `P12` varchar(50) NOT NULL,
  `P13` varchar(50) NOT NULL,
  `vi` varchar(50) NOT NULL,
  `P14` varchar(500) NOT NULL,
  `notes` mediumtext NOT NULL,
  `account_status` varchar(30) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dju_profile`
--

INSERT INTO `dju_profile` (`profile_id`, `first_name`, `last_name`, `phone`, `city`, `state`, `country`, `P1`, `Rel`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`, `P11`, `P12`, `P13`, `vi`, `P14`, `notes`, `account_status`, `profile_pic`) VALUES
('2D3300A8-CB8D-4076-9E4C-D39A75E5664D', 'Elizabeth', 'Holmes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'not_verified', ''),
('619684A7-378B-4681-8666-761EAF7E17D2', 'Stacy', 'Li', '7609788330', 'Los Angeles', '', 'United States', 'FreelanceFull-time/Direct hire', 'No', 'Bachelors ', 'University of California, Los Angeles', 'Business Economics', '', '', '', '', '', '', '', '', '', 'U', 'Bioinformatics<br>Machine Learning<br>Research/Annotation<br>', '					', 'verified', 'members/619684Snapchat-244987755564543002.jpg'),
('8E6E54A7-8651-419C-8D43-D3446AB0EEEB', 'Claire', 'Li', '7602745955', 'Santa Clara', 'CA', 'United States', 'FreelanceFull-time/Direct hire', 'No', 'Bachelors Masters ', 'University of California, Riverside', 'Economics', 'University of California, San Diego', 'Computer Engineering', '', '', '', '', '', '', '', 'G', 'Machine Learning<br>Software Engineering<br>Cloud Computing<br>', 'I am a robo.															', 'verified', 'members/8E6E54A7-8651-419C-8D43-D3446AB0EEEBtinyprofile.png'),
('B1F3672C-F472-4360-81EC-6C849393D324', 'Claire', 'Li', '7602745955', 'Carlsbad', 'CA', 'United States', 'FreelanceFull-time/Direct hire', 'No', 'Bachelors ', 'University of California, San Diego', 'Computer Engineering', '', '', '', '', '', '', '', '', '', 'U', 'Machine Learning<br>Software Engineering<br>', 'Degree currently in progress. I am open to freelance opportunities!', 'verified', 'members/B1F3672C-F472-4360-81EC-6C849393D324Snapchat-177665716457808334.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
