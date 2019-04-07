-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 01:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanellogin`
--

CREATE TABLE IF NOT EXISTS `adminpanellogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminpanellogin`
--

INSERT INTO `adminpanellogin` (`id`, `uname`, `password`, `name`, `img`) VALUES
(1, 'brajesh', 'brajesh', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE IF NOT EXISTS `bloodrequest` (
  `bloodrequest_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_id` int(10) NOT NULL,
  `request_date` date NOT NULL,
  `blood_amount` varchar(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  `status` enum('waiting','accepted','rejected') NOT NULL,
  `delivery_date` date NOT NULL,
  `staff_id` int(10) NOT NULL,
  PRIMARY KEY (`bloodrequest_id`),
  KEY `donor_id` (`donor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`bloodrequest_id`, `donor_id`, `request_date`, `blood_amount`, `message`, `status`, `delivery_date`, `staff_id`) VALUES
(8, 3, '2018-11-21', '10ml', 'i need blood', 'accepted', '2018-11-19', 5),
(9, 4, '2018-11-26', '20ml', 'i need blood', 'accepted', '2018-11-22', 6),
(14, 3, '2018-11-22', 'czxc', 'dasdas', 'rejected', '0000-00-00', 5),
(15, 4, '2018-11-21', '2ml', 'this is w', 'accepted', '2018-11-28', 0),
(16, 4, '2018-11-29', 'hjgjg', 'zzzzzzzzzz', 'accepted', '0000-00-00', 0),
(17, 4, '2018-11-12', '20ml', 'i need blood brajesh', 'accepted', '2018-11-30', 0),
(18, 4, '2018-11-13', 'jhjg', 'ghjghjgh', 'accepted', '2018-11-06', 0),
(19, 4, '2018-11-22', 'dfghdfg', 'dfgdfg', 'rejected', '0000-00-00', 0),
(20, 4, '2018-11-07', '10ml', 'i need blood', 'waiting', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE IF NOT EXISTS `blood_bank` (
  `id` varchar(10) NOT NULL,
  `checkup_id` int(10) NOT NULL,
  `date_of_storage` date NOT NULL,
  `place_of_storage` varchar(20) NOT NULL,
  `amount` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `checkup_id` (`checkup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE IF NOT EXISTS `camps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_name` int(10) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `info` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `org_name` (`org_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `org_name`, `date`, `location`, `info`, `img`) VALUES
(1, 6, '2018-11-21', 'AZARA', 'CAMP IS ORGANISED', ''),
(2, 7, '2018-11-08', 'Guwahati', 'camp is organized', '');

-- --------------------------------------------------------

--
-- Table structure for table `check_up`
--

CREATE TABLE IF NOT EXISTS `check_up` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `donateblood_id` int(10) NOT NULL,
  `date_of_checkup` date NOT NULL,
  `checkup_by` varchar(255) NOT NULL,
  `blood_pressure` varchar(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  `status` enum('waiting','elligible','not_elligible') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blooddonation_id` (`donateblood_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `check_up`
--

INSERT INTO `check_up` (`id`, `donateblood_id`, `date_of_checkup`, `checkup_by`, `blood_pressure`, `message`, `status`) VALUES
(27, 16, '2018-11-29', '5', 'mmmm', 'mmmmmm', 'elligible'),
(28, 17, '2018-11-20', 'Soma', 'nnnnnn', 'nnnnn', 'elligible'),
(29, 18, '2018-11-30', 'Soma', 'zzzzzzzzz', 'zzzzzzzz', 'elligible');

-- --------------------------------------------------------

--
-- Table structure for table `donarregistration`
--

CREATE TABLE IF NOT EXISTS `donarregistration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `gurdians_name` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `any_disease` varchar(50) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `pimg` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`id`, `name`, `gurdians_name`, `address`, `state`, `phone`, `email`, `gender`, `dob`, `age`, `bloodgroup`, `any_disease`, `occupation`, `password`, `pimg`) VALUES
(3, 'Nubul', 'Brajesh', 'Guwahati', 'Assam', '8723969733', 'nubul@gmail.com', 'male', '2018-11-21', 20, 'O+', 'No', 'Student', 'Nubul12', ''),
(4, 'Brajesh', 'Nubul', 'Guwahati', 'Assam', '8723969733', 'brajesh@gmail.com', 'male', '2018-11-22', 25, 'O+', 'No', 'Student', 'Brajesh12', '');

-- --------------------------------------------------------

--
-- Table structure for table `donateblood`
--

CREATE TABLE IF NOT EXISTS `donateblood` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `donarreg_id` int(10) NOT NULL,
  `date_of_request` date NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `blood_amount` varchar(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  `status` enum('waiting','accepted','rejected') NOT NULL,
  `checkup_status` enum('waiting','elligible','not_elligible') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `donarreg_id` (`donarreg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `donateblood`
--

INSERT INTO `donateblood` (`id`, `donarreg_id`, `date_of_request`, `blood_type`, `blood_amount`, `message`, `status`, `checkup_status`) VALUES
(16, 4, '2018-11-29', 'O+', '1000ml', 'i want to donate blood', 'accepted', 'waiting'),
(17, 3, '2018-11-30', 'O+', 'nubul ka h', 'nubul', 'accepted', 'elligible'),
(18, 4, '2018-11-30', 'a+', 'babu', 'xxxxxxxxxxxxxxxxxxx', 'accepted', 'elligible');

-- --------------------------------------------------------

--
-- Table structure for table `donor_feedback`
--

CREATE TABLE IF NOT EXISTS `donor_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_id` int(10) NOT NULL,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `feedback_id` (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `donor_feedback`
--

INSERT INTO `donor_feedback` (`id`, `feedback_id`, `name`, `email`, `phone`, `message`) VALUES
(1, 3, 'Nubul', 'nubul@gmail.com', '8723969733', 'thank you from nubul'),
(2, 4, 'Brajesh', 'brajesh@gmail.com', '8723969733', 'thank you from brajesh');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospital_name`, `address`, `phone`, `email`) VALUES
(6, 'Aryan', 'Guwahati', '8723969733', 'aryan@gmail.com'),
(7, 'GIMT', 'AZARA', '8723969733', 'azara@gmail.com'),
(8, 'GMC guwahati', 'ghy', '8723969733', 'gmc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `normal_feedback`
--

CREATE TABLE IF NOT EXISTS `normal_feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE IF NOT EXISTS `staffinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `h_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `password` varchar(10) NOT NULL,
  `pimg` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`id`, `h_id`, `name`, `address`, `state`, `phone`, `email`, `gender`, `age`, `dob`, `bloodgroup`, `password`, `pimg`) VALUES
(5, 6, 'Soma', 'Guwahati', 'ASSAM', '8723969733', 'soma@gmail.com', 'female', 20, '2018-11-26', 'O+', 'Soma12', ''),
(6, 7, 'Shalu', 'Azara', 'Assam', '8723969733', 'shalu@gmail.com', 'female', 20, '2018-11-15', 'O+', 'Shalu12', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_feedback`
--

CREATE TABLE IF NOT EXISTS `staff_feedback` (
  `id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_feedback`
--

INSERT INTO `staff_feedback` (`id`, `name`, `email`, `phone`, `message`) VALUES
(5, 'Soma', 'soma@gmail.com', '8723969733', 'thank you from soma'),
(6, 'shalu', 'shalu@gmail.com', '8723969733', 'thank you from shalu');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `date` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD CONSTRAINT `bloodrequest_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donarregistration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD CONSTRAINT `blood_bank_ibfk_1` FOREIGN KEY (`checkup_id`) REFERENCES `check_up` (`id`);

--
-- Constraints for table `camps`
--
ALTER TABLE `camps`
  ADD CONSTRAINT `camps_ibfk_1` FOREIGN KEY (`org_name`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `check_up`
--
ALTER TABLE `check_up`
  ADD CONSTRAINT `check_up_ibfk_1` FOREIGN KEY (`donateblood_id`) REFERENCES `donateblood` (`id`);

--
-- Constraints for table `donateblood`
--
ALTER TABLE `donateblood`
  ADD CONSTRAINT `donateblood_ibfk_1` FOREIGN KEY (`donarreg_id`) REFERENCES `donarregistration` (`id`);

--
-- Constraints for table `donor_feedback`
--
ALTER TABLE `donor_feedback`
  ADD CONSTRAINT `donor_feedback_ibfk_1` FOREIGN KEY (`feedback_id`) REFERENCES `donarregistration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD CONSTRAINT `staffinfo_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_feedback`
--
ALTER TABLE `staff_feedback`
  ADD CONSTRAINT `staff_feedback_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staffinfo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
