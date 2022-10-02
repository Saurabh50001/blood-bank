-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 06:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_camp`
--

CREATE TABLE `add_camp` (
  `campid` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `organisedby` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `details` varchar(50) DEFAULT NULL,
  `img` blob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_camp`
--

INSERT INTO `add_camp` (`campid`, `name`, `organisedby`, `city`, `state`, `details`, `img`) VALUES
('123', 'Saguna More', 'Shayam Joti', 'patna', 'Bihar', 'timing 10 am, sunday/10/2/2019', NULL),
('1345', 'State Bank Of India', 'State Bank of India Saguna Branch', 'patna', 'bihar', 'timing 10 am, saturday/16/2/2019', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `mobile`, `email`, `subject`, `message`) VALUES
('raju', '8887776766', 'raju@gmail.com', 'blood needed', 'i need blood A+ urgently of 1unit'),
('rani', '8887779090', 'rani@gmail.com', 'blood needed', 'i need blood B+ urgently of 1unit'),
('Amar Sharma', '8887756781', 'ramar@gmail.com', 'blood needed', 'i need blood O+ urgently of 1unit'),
('Raja Sharma', '34342356781', 'raja@gmail.com', 'blood needed', 'i need blood O+ urgently of 1unit'),
('mukesh kumar', '8327799828', 'mkproin1@gmail.com', 'Testing', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `donerrej`
--

CREATE TABLE `donerrej` (
  `donerid` varchar(50) NOT NULL,
  `donername` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image` blob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donerrej`
--

INSERT INTO `donerrej` (`donerid`, `donername`, `gender`, `age`, `mobile`, `bloodgroup`, `email`, `password`, `image`) VALUES
('aa11', 'hello', 'Male', 21, '1234567890', 'A negative', 'hello@gmail.com', '1234', ''),
('amar123', 'Amar Sharma', 'Male', 23, '8102344523', 'B negative', 'amar@gmail.com', '1234567890', ''),
('Shivani123', 'Shivani Joti', 'Female', 20, '9831023457', 'A positive', 'shivani@gmail.com', '12345', ''),
('Keshav123', 'Keshav Sharma', 'Male', 24, '9998887776', 'A positive', 'keshav@gmail.com', '12345', ''),
('Krishna098', 'Krishna Kumar', 'Male', 28, '7654328106', 'O positive', 'krishna@gmail.com', '12345', ''),
('mukesh', 'mukesh', 'Male', 0, 'fdsjf', 'Select', 'fdsfh', 'admin@123', ''),
('supAdmin', '', '', 0, '', 'Select', '', 'admin@123', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `mobile`, `subject`, `message`) VALUES
('Manoj ', 'manoj@gmail.com', '9888767878', 'blood ', 'Last time i get the O+ Blood .thanks to all'),
('Shivani', 'shivani@gmail.com', '9888767878', 'blood ', 'Last time i get the O+ Blood .thanks to all'),
('Mohan', 'Mohan@gmail.com', '9888789809', 'blood ', 'Last time i get the O+ Blood .thanks to all'),
('Mirja', 'mirja@gmail.com', '9009989809', 'blood ', 'Last time i get the O+ Blood .thanks to all');

-- --------------------------------------------------------

--
-- Table structure for table `receicerrej`
--

CREATE TABLE `receicerrej` (
  `receicerid` varchar(10) NOT NULL,
  `receicername` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `mobile` int(50) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image` blob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receicerrej`
--

INSERT INTO `receicerrej` (`receicerid`, `receicername`, `gender`, `age`, `mobile`, `bloodgroup`, `email`, `password`, `image`) VALUES
('mohini123', 'Mohini Waliya', 'Female', 22, 987678909, 'AB positive', 'mohini@gmail.com', '12345', ''),
('Menika123', 'Menika Shiv', 'Female', 27, 1234509876, 'B positive', 'menika@gmail.com', '12345', ''),
('Hemant1234', 'Hemant Pal', 'Male', 23, 1234509898, 'B positive', 'hemant@gmail.com', '12345', ''),
('mohini321', 'Mohini kumari', 'Female', 25, 987678909, 'AB positive', 'mohinikr@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `send_request`
--

CREATE TABLE `send_request` (
  `requestid` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `req_date` varchar(50) DEFAULT NULL,
  `details` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_request`
--

INSERT INTO `send_request` (`requestid`, `name`, `gender`, `age`, `mobile`, `bloodgroup`, `email`, `req_date`, `details`) VALUES
('12345', 'Hem Joti', 'Female', 25, '3456789012', 'O positive', 'hemjoti@gmail.com', '2019-03-09', 'bjhjjs sbkfbk'),
('xcs', 'ds', 'Male', 12, '2132132', 'B negative', '21@gff', '2019-03-26', 'feww'),
('12365', 'Himanshu', 'Female', 21, '3456789012', 'O negative', 'himanshu@gmail.com', '2019-03-07', 'bjhjjs sbkfbk'),
('11122', 'joti singh', 'Female', 20, '9374939232', 'B positive', 'joti@gmail.com', '2019-03-19', 'bjhjjs sbkfbk'),
('9090', 'Jonshon', 'Male', 20, '9374934556', 'AB positive', 'jjonshan@gmail.com', '2019-03-19', 'bjhjjs sbkfbk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donerrej`
--
ALTER TABLE `donerrej`
  ADD PRIMARY KEY (`donerid`);

--
-- Indexes for table `receicerrej`
--
ALTER TABLE `receicerrej`
  ADD PRIMARY KEY (`receicerid`);

--
-- Indexes for table `send_request`
--
ALTER TABLE `send_request`
  ADD PRIMARY KEY (`requestid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
