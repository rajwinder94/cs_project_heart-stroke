-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 06:05 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area` varchar(10) NOT NULL,
  `points` int(50) NOT NULL,
  `lattitude` decimal(50,6) NOT NULL,
  `longitude` decimal(50,6) NOT NULL,
  `zone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area`, `points`, `lattitude`, `longitude`, `zone`) VALUES
('h', 1, '50.654763', '-120.347642', 1),
('h', 2, '50.654192', '-120.348098', 1),
('h', 3, '50.654311', '-120.349385', 1),
('h', 4, '50.654137', '-120.350233', 1),
('h', 5, '50.653658', '-120.350705', 1),
('h', 6, '50.653988', '-120.351692', 1),
('h', 7, '50.654668', '-120.351113', 1),
('h', 8, '50.654970', '-120.349815', 1),
('a', 1, '50.651205', '-120.338373', 1),
('a', 2, '50.651850', '-120.335686', 1),
('a', 3, '50.650263', '-120.335596', 1),
('a', 4, '50.649481', '-120.337613', 1),
('b', 1, '50.648597', '-120.338407', 1),
('b', 2, '50.648648', '-120.337053', 1),
('b', 3, '50.649131', '-120.336328', 1),
('b', 4, '50.648712', '-120.335808', 1),
('b', 5, '50.648199', '-120.336404', 1),
('b', 6, '50.647787', '-120.336430', 1),
('b', 7, '50.647583', '-120.337310', 1),
('b', 8, '50.648603', '-120.338300', 1),
('c', 1, '50.648263', '-120.338804', 1),
('c', 2, '50.648010', '-120.338450', 1),
('c', 3, '50.647882', '-120.339233', 1),
('c', 4, '50.647508', '-120.339155', 1),
('c', 5, '50.647644', '-120.338308', 1),
('c', 6, '50.646845', '-120.335931', 1),
('c', 7, '50.647028', '-120.335486', 1),
('c', 8, '50.647321', '-120.336157', 1),
('d', 1, '50.650063', '-120.339220', 1),
('d', 2, '50.650525', '-120.339751', 1),
('d', 3, '50.650814', '-120.339510', 1),
('d', 4, '50.650835', '-120.338925', 1),
('d', 5, '50.649804', '-120.338201', 1),
('d', 6, '50.648814', '-120.338973', 1),
('d', 7, '50.648892', '-120.339113', 1),
('d', 8, '50.648930', '-120.339526', 1),
('d', 9, '50.649270', '-120.339778', 1),
('d', 10, '50.649665', '-120.340062', 1),
('e', 1, '50.651297', '-120.342280', 1),
('e', 2, '50.651107', '-120.344351', 1),
('e', 3, '50.649590', '-120.340285', 1),
('e', 4, '50.649984', '-120.340081', 1),
('e', 5, '50.649971', '-120.339459', 1),
('e', 6, '50.650229', '-120.339544', 1),
('e', 7, '50.650324', '-120.340188', 1),
('e', 8, '50.651168', '-120.339834', 1),
('e', 9, '50.651195', '-120.342323', 1),
('f', 1, '50.652318', '-120.347551', 1),
('f', 2, '50.651501', '-120.344525', 1),
('f', 3, '50.651491', '-120.344434', 1),
('f', 4, '50.651855', '-120.344332', 1),
('f', 5, '50.652120', '-120.344938', 1),
('f', 6, '50.652947', '-120.346119', 1),
('g', 1, '50.651899', '-120.344375', 1),
('g', 2, '50.652049', '-120.344225', 1),
('g', 3, '50.653249', '-120.345614', 1),
('g', 4, '50.653494', '-120.345099', 1),
('g', 5, '50.653957', '-120.346027', 1),
('g', 6, '50.654188', '-120.346558', 1),
('g', 7, '50.654538', '-120.347406', 1),
('g', 8, '50.654151', '-120.348087', 1),
('g', 9, '50.653559', '-120.347470', 1),
('g', 10, '50.652937', '-120.345984', 1),
('g', 11, '50.652321', '-120.345351', 1),
('g', 12, '50.652937', '-120.345984', 1),
('qw', 1, '234234.000000', '23423423.000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `year` year(4) NOT NULL,
  `revenue_gen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`year`, `revenue_gen`) VALUES
(2007, 40000),
(2008, 45000),
(2009, 42000),
(2010, 50000),
(2011, 53000),
(2012, 55000),
(2013, 48000),
(2014, 60000),
(2015, 58000),
(2016, 40000),
(2017, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `zone` int(10) NOT NULL,
  `area` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `route_desc` varchar(200) NOT NULL,
  `canvasser_id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`zone`, `area`, `route`, `route_desc`, `canvasser_id`) VALUES
(1, 'a', 'sahali', 'lower sahali', 1),
(1, 'b', 'glenegles', 'upper glen', 2),
(1, 'c', 'sahali', 'lower sahali', 3),
(1, 'h', 'seymore', 'downtown seymore', 4),
(1, 'd', 'seymore', 'downseymore', 5);

-- --------------------------------------------------------

--
-- Table structure for table `telerecruiter`
--

CREATE TABLE `telerecruiter` (
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `telerecruiter_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telerecruiter`
--

INSERT INTO `telerecruiter` (`name`, `phone`, `status`, `telerecruiter_id`) VALUES
('Navjot Singh', 43535234, 'recruited', 'raj_94'),
('Harman Kaur', 53463235, 'recruited', 'katie12'),
('Judy Shindler', 56345634, 'interested', 'raj_94'),
('Chirag Sehgal', 56756745, 'not interested', 'raj_94'),
('Teshu Aggarwal', 3523423, 'interested', 'katie12'),
('Monica Panesar', 34534643, 'not interested', 'raj_94'),
('James Hunt', 424234, 'recruited', 'raj_94'),
('Devin Martin', 23234345, 'recruited', 'katie12');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `canvasser_ID` int(30) NOT NULL DEFAULT '0',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `years_of_service` int(5) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `cap_fname` varchar(20) NOT NULL,
  `cap_lname` varchar(20) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `community` varchar(20) NOT NULL,
  `area` varchar(50) NOT NULL,
  `route` varchar(50) NOT NULL,
  `route_desc` varchar(50) NOT NULL,
  `revenue_gen` decimal(10,0) NOT NULL,
  `kit_id` varchar(100) DEFAULT NULL,
  `kit_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`canvasser_ID`, `first_name`, `last_name`, `address`, `city`, `pin_code`, `phone`, `email`, `years_of_service`, `reg_date`, `cap_fname`, `cap_lname`, `zone`, `community`, `area`, `route`, `route_desc`, `revenue_gen`, `kit_id`, `kit_status`) VALUES
(1, 'rajwinder', 'singh', '610 Columbia St w', 'kamloops', 'v2c1k8', '3064714732', 'rajwinder@gmail.com', 2, '2017-03-08', 'manish', 'chopra', '1', '', 'a', 'sahali', 'lower sahali', '1200', '0020', 'issued and returned'),
(2, 'tanya', 'teotia', '625 columbia st w', 'kamloops', 'v3xcdf', '3432356789', 'tanyat@yahoo.com', 8, '2017-03-15', 'kittt', 'harington', '1', '', 'b', 'glenegles', 'upper glen', '5000', NULL, NULL),
(3, 'ruhi', 'naaz', '345 mcgill road', 'kamloops', 'v5f1k8', '2345324234', 'naazr@hotmail.com', 4, '2017-03-30', 'manish', 'chopra', '1', '', 'c', 'sahali', 'lower sahali', '2000', '0010', 'issued amd not returned'),
(4, 'rajnish', 'sharma', 'c-2050', 'kamloops', 'v5wb24', '3243224', 'rsharma@gmail.com', 1, '2017-03-28', 'mahnhoon', 'lee', '1', '', 'd', '', '', '123', NULL, NULL),
(5, 'pail', 'griffin', 'qohog ca', 'ca', 'c2x1k8', '123432121221', 'dcwc', 7, '0000-00-00', 'manhoon', 'lee', '', '', '', '', '', '0', NULL, NULL),
(6, 'Arun', 'Kapila', '123 seymore st', 'Kamloops', 'v2c1k8', '34534532', 'arun_94@gmail.com', 1, '2017-04-02', 'manish', 'chopra', '1', '', '', '', '', '0', NULL, NULL),
(7, 'harpreet', 'singh', 'c-2030', 'kamloops', 'pincode', '234234234234', 'harp@gmail.com', 0, NULL, '', '', '', '', '', '', '', '0', NULL, NULL),
(8, 'lois', 'griffin', 'ecweqc', 'ecewc', 'wecwcwc', '234234234', 'lois@griffin.com', 1, NULL, '', '', '', '', '', '', '', '0', NULL, NULL),
(9, 'chris', 'griffin', 'fqef', 'efwef', 'ewfwef', '424234234', 'jais@fref.com', 0, NULL, '', '', '', '', '', '', '', '0', NULL, NULL),
(10, 'nancy', 'bepple', '625 columbia st w', 'kamloops', 'v3xcdf', '3432356789', 'nb@yahoo.com', 7, NULL, '', '', '', '', '', '', '', '0', NULL, NULL);

--
-- Triggers `volunteer`
--
DELIMITER $$
CREATE TRIGGER `tg_table1_insert` BEFORE INSERT ON `volunteer`
 FOR EACH ROW BEGIN
  INSERT INTO id VALUES (NULL);
  SET NEW.canvasser_id = CONCAT('KC', LPAD(LAST_INSERT_ID(), 4, '0'));

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`canvasser_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`canvasser_ID`),
  ADD UNIQUE KEY `kit_id` (`kit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `canvasser_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;