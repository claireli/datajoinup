SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `dju_gtitle` (
  `profile_id` varchar(50) NOT NULL,
  `G1` varchar(50) NOT NULL,
  `G2` varchar(50) NOT NULL,
  `G3` varchar(50) NOT NULL,
  `G4` varchar(50) NOT NULL,
  `G5` varchar(50) NOT NULL,
  `G6` varchar(50) NOT NULL,
  `G7` varchar(50) NOT NULL,
  `G8` varchar(50) NOT NULL,
  `G9` varchar(50) NOT NULL,
  `G10` varchar(50) NOT NULL,
  `G11` varchar(50) NOT NULL,
  `G12` varchar(50) NOT NULL,
  `G13` varchar(50) NOT NULL,
  `G14` varchar(50) NOT NULL,
  `G15` varchar(50) NOT NULL,
  `G16` varchar(50) NOT NULL,
  `G17` varchar(50) NOT NULL,
  `G18` varchar(50) NOT NULL,
  `G19` varchar(50) NOT NULL,
  `G20` varchar(50) NOT NULL,
  `G21` varchar(50) NOT NULL,
  `G22` varchar(50) NOT NULL,
  `G23` varchar(50) NOT NULL,
  `G24` varchar(50) NOT NULL,
  `Platforms` varchar(50) NOT NULL,
  PRIMARY KEY (`profile_id`),
  UNIQUE KEY `profile_id` (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dju_gtitle`
--

INSERT INTO `dju_gtitle` (`profile_id`, `G1`, `G2`, `G3`, `G4`, `G5`, `G6`, `G7`, `G8`, `G9`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `G19`, `G20`, `G21`, `G22`, `G23`, `G24`, `Platforms`) VALUES
('2D3300A8-CB8D-4076-9E4C-D39A75E5664D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('619684A7-378B-4681-8666-761EAF7E17D2', 'June 2016', 'October 2014', 'November 2015', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' 2015', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ''),
('8E6E54A7-8651-419C-8D43-D3446AB0EEEB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('B1F3672C-F472-4360-81EC-6C849393D324', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dju_mtitle`
--

CREATE TABLE IF NOT EXISTS `dju_mtitle` (
  `profile_id` varchar(50) NOT NULL,
  `M1` varchar(50) NOT NULL,
  `M2` varchar(50) NOT NULL,
  `M3` varchar(50) NOT NULL,
  `M4` varchar(50) NOT NULL,
  `M5` varchar(50) NOT NULL,
  `M6` varchar(50) NOT NULL,
  `M7` varchar(50) NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dju_mtitle`
--

INSERT INTO `dju_mtitle` (`profile_id`, `M1`, `M2`, `M3`, `M4`, `M5`, `M6`, `M7`) VALUES
('2D3300A8-CB8D-4076-9E4C-D39A75E5664D', '', '', '', '', '', '', ''),
('619684A7-378B-4681-8666-761EAF7E17D2', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
('B1F3672C-F472-4360-81EC-6C849393D324', '', '', 'October 2014', 'December 2012', '', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `dju_putitle`
--

CREATE TABLE IF NOT EXISTS `dju_putitle` (
  `profile_id` varchar(50) NOT NULL,
  `PU1` varchar(50) NOT NULL,
  `PU2` varchar(50) NOT NULL,
  `PU3` varchar(50) NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dju_putitle`
--

INSERT INTO `dju_putitle` (`profile_id`, `PU1`, `PU2`, `PU3`) VALUES
('2D3300A8-CB8D-4076-9E4C-D39A75E5664D', '', '', ''),
('619684A7-378B-4681-8666-761EAF7E17D2', ' ', ' ', ' '),
('B1F3672C-F472-4360-81EC-6C849393D324', '', '', 'October2014');

-- --------------------------------------------------------

--
-- Table structure for table `dju_stitle`
--

CREATE TABLE IF NOT EXISTS `dju_stitle` (
  `profile_id` varchar(50) NOT NULL,
  `S1` varchar(50) NOT NULL,
  `S2` varchar(50) NOT NULL,
  `S3` varchar(50) NOT NULL,
  `S4` varchar(50) NOT NULL,
  `S5` varchar(50) NOT NULL,
  `S6` varchar(50) NOT NULL,
  `S7` varchar(50) NOT NULL,
  `S8` varchar(50) NOT NULL,
  `S9` varchar(50) NOT NULL,
  `S10` varchar(50) NOT NULL,
  `S11` varchar(50) NOT NULL,
  `S12` varchar(50) NOT NULL,
  `S13` varchar(50) NOT NULL,
  `S14` varchar(50) NOT NULL,
  `S15` varchar(50) NOT NULL,
  `S16` varchar(50) NOT NULL,
  `S17` varchar(50) NOT NULL,
  `S18` varchar(50) NOT NULL,
  `S19` varchar(50) NOT NULL,
  `S20` varchar(50) NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dju_stitle`
--

INSERT INTO `dju_stitle` (`profile_id`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `S8`, `S9`, `S10`, `S11`, `S12`, `S13`, `S14`, `S15`, `S16`, `S17`, `S18`, `S19`, `S20`) VALUES
('2D3300A8-CB8D-4076-9E4C-D39A75E5664D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('619684A7-378B-4681-8666-761EAF7E17D2', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'September 2013', ' ', ' ', 'June 2014', ' ', ' '),
('B1F3672C-F472-4360-81EC-6C849393D324', '', '', 'October 2014', 'December 2012', '', '', '', '', '', '', '', '', 'January 2014', '', '', '', 'January 2010', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
('2D3300A8-CB8D-4076-9E4C-D39A75E5664D', 'elizabeth@theranos.com', '$2a$07$R.gJb2U2N.FmZ4hPp1y2C.vJjvR8TdY8AIrhTh6ZGXh/XOvfWJ8P2'),
('619684A7-378B-4681-8666-761EAF7E17D2', 'sli@ucla.edu', '$2a$07$R.gJb2U2N.FmZ4hPp1y2C.vJjvR8TdY8AIrhTh6ZGXh/XOvfWJ8P2'),
('8E6E54A7-8651-419C-8D43-D3446AB0EEEB', 'cyl053@ucsd.edu', '$2a$07$R.gJb2U2N.FmZ4hPp1y2C.vJjvR8TdY8AIrhTh6ZGXh/XOvfWJ8P2'),
('B1F3672C-F472-4360-81EC-6C849393D324', 'theclaireli@gmail.com', '$2a$07$R.gJb2U2N.FmZ4hPp1y2C.vJjvR8TdY8AIrhTh6ZGXh/XOvfWJ8P2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
