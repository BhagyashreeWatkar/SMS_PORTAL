-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 09:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo-sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `person_contact`
--

CREATE TABLE IF NOT EXISTS `person_contact` (
`per_id` int(11) NOT NULL,
  `per_name` varchar(100) DEFAULT NULL,
  `per_mobile` bigint(20) DEFAULT NULL,
  `per_grid` varchar(100) DEFAULT NULL,
  `per_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `person_contact`
--

INSERT INTO `person_contact` (`per_id`, `per_name`, `per_mobile`, `per_grid`, `per_time`) VALUES
(21, 'Suraj', 9090808070, '18', '2017-12-28 15:11:44'),
(22, 'Sujay', 7890789090, '17', '2017-12-28 15:11:55'),
(23, 'Adnan', 7894561230, '19', '2018-01-16 06:03:20'),
(24, 'Avinash', 4567891230, '19', '2018-01-16 06:03:28'),
(25, 'Gaurav', 9619404202, '20', '2018-04-01 06:02:14'),
(26, 'Sachin', 9619404202, '20', '2018-04-01 06:02:22'),
(27, 'Aniket', 8965231470, '21', '2018-04-05 07:12:25'),
(28, 'Gaurav', 7896541230, '21', '2018-04-05 07:12:35'),
(29, 'GRP', 9898898990, '22', '2018-04-25 05:19:53'),
(30, 'Akshay', 8956895623, '23', '2018-05-11 04:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `sms_category`
--

CREATE TABLE IF NOT EXISTS `sms_category` (
`ca_id` int(11) NOT NULL,
  `ca_name` varchar(100) DEFAULT NULL,
  `ca_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `sms_category`
--

INSERT INTO `sms_category` (`ca_id`, `ca_name`, `ca_time`) VALUES
(21, 'Diwali', '2017-12-28 15:10:46'),
(22, 'New Year', '2017-12-28 15:11:21'),
(23, 'College Days', '2018-01-16 06:02:18'),
(24, 'April Month', '2018-04-01 06:01:29'),
(25, 'Maharashtra Day', '2018-04-05 07:11:08'),
(26, 'LIBNAME', '2018-04-25 05:19:16'),
(27, 'BirthDay', '2018-05-11 04:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `sms_group`
--

CREATE TABLE IF NOT EXISTS `sms_group` (
`gr_id` int(11) NOT NULL,
  `gr_name` varchar(100) DEFAULT NULL,
  `gr_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `sms_group`
--

INSERT INTO `sms_group` (`gr_id`, `gr_name`, `gr_time`) VALUES
(17, 'Friends', '2017-12-28 15:10:53'),
(18, 'College', '2017-12-28 15:11:00'),
(19, 'Society Friends', '2018-01-16 06:02:30'),
(20, 'My PHP Group', '2018-04-01 06:01:17'),
(21, 'My School Friend', '2018-04-05 07:10:21'),
(22, 'GROUPNAME', '2018-04-25 05:19:24'),
(23, 'College Friends', '2018-05-11 04:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `sms_login`
--

CREATE TABLE IF NOT EXISTS `sms_login` (
`log_id` int(11) NOT NULL,
  `log_name` varchar(100) DEFAULT NULL,
  `log_email` varchar(100) DEFAULT NULL,
  `log_mobile` bigint(20) DEFAULT NULL,
  `log_pass` varchar(100) DEFAULT NULL,
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `sms_login`
--

INSERT INTO `sms_login` (`log_id`, `log_name`, `log_email`, `log_mobile`, `log_pass`, `log_time`) VALUES
(22, 'keeran', 'keeran@gmail.com', 9619404202, '86c8425bb4cd54c772a247a51e67f33fa663becd', '2017-12-28 15:09:35'),
(23, 'rohit', 'rohit@gmail.com', 9860098600, '86c8425bb4cd54c772a247a51e67f33fa663becd', '2018-01-16 06:01:16'),
(24, 'amit', 'amit@gmail.com', 9619404202, '86c8425bb4cd54c772a247a51e67f33fa663becd', '2018-04-01 06:00:37'),
(25, 'tapas', 'tapas@gmail.co', 9619404202, '86c8425bb4cd54c772a247a51e67f33fa663becd', '2018-04-05 07:09:28'),
(26, 'test', 'test@test.com', 9809809800, '86c8425bb4cd54c772a247a51e67f33fa663becd', '2018-04-25 05:18:48'),
(27, 'Ajay', 'ajay@gmail.com', 9619404202, '86c8425bb4cd54c772a247a51e67f33fa663becd', '2018-05-11 04:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `sms_message`
--

CREATE TABLE IF NOT EXISTS `sms_message` (
`sms_id` int(11) NOT NULL,
  `sms_msg` varchar(100) DEFAULT NULL,
  `sms_caid` int(11) DEFAULT NULL,
  `sms_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `sms_message`
--

INSERT INTO `sms_message` (`sms_id`, `sms_msg`, `sms_caid`, `sms_time`) VALUES
(24, 'Happy Diwali', 21, '2017-12-28 15:11:12'),
(25, 'Happy new Year', 22, '2017-12-28 15:11:31'),
(26, 'Some Test Messages', 23, '2018-01-16 06:03:03'),
(27, 'Dummy Messages', 23, '2018-01-16 06:03:09'),
(28, 'HEllo April', 24, '2018-04-01 06:01:48'),
(29, 'April MOnth 2', 24, '2018-04-01 06:01:59'),
(30, 'Wish u happy maharashtra daya', 25, '2018-04-05 07:11:35'),
(31, 'Happy Maharashtra Day', 25, '2018-04-05 07:11:46'),
(32, 'LIB MESSAGE', 26, '2018-04-25 05:19:35'),
(33, 'Wish You Happy Bday', 27, '2018-05-11 04:14:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person_contact`
--
ALTER TABLE `person_contact`
 ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `sms_category`
--
ALTER TABLE `sms_category`
 ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `sms_group`
--
ALTER TABLE `sms_group`
 ADD PRIMARY KEY (`gr_id`);

--
-- Indexes for table `sms_login`
--
ALTER TABLE `sms_login`
 ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sms_message`
--
ALTER TABLE `sms_message`
 ADD PRIMARY KEY (`sms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person_contact`
--
ALTER TABLE `person_contact`
MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `sms_category`
--
ALTER TABLE `sms_category`
MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `sms_group`
--
ALTER TABLE `sms_group`
MODIFY `gr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `sms_login`
--
ALTER TABLE `sms_login`
MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `sms_message`
--
ALTER TABLE `sms_message`
MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
