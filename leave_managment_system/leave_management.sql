-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 10:04 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leave_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE IF NOT EXISTS `admin_panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_teachers` int(11) NOT NULL,
  `no_of_staffs` int(11) NOT NULL,
  `available_teacher` int(11) NOT NULL,
  `available_staff` int(11) NOT NULL,
  `application_paper` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE IF NOT EXISTS `admin_profile` (
  `id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `password`, `email`) VALUES
(1104, 'leave', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `application_papers`
--

CREATE TABLE IF NOT EXISTS `application_papers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `apllication_body` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `application_papers`
--

INSERT INTO `application_papers` (`id`, `user_id`, `apllication_body`, `date_created`) VALUES
(1, 1, '', '2016-11-22 00:00:00'),
(2, 1, '', '2016-11-22 00:00:00'),
(3, 1104010, '', '2016-11-22 00:00:00'),
(4, 1104010, '', '2016-11-22 00:00:00'),
(5, 0, '', '2016-11-23 00:00:00'),
(6, 1104010, '', '2016-11-23 00:00:00'),
(7, 1104010, '', '2016-11-23 00:00:00'),
(8, 1104102, '', '2016-11-23 00:00:00'),
(9, 0, '', '2016-11-23 00:00:00'),
(10, 1104102, '', '2016-11-23 00:00:00'),
(11, 1104102, '', '2016-11-23 00:00:00'),
(12, 1104102, '', '2016-11-23 00:00:00'),
(13, 1104102, 'ldnldsn', '2016-11-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `create_user`
--

CREATE TABLE IF NOT EXISTS `create_user` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE IF NOT EXISTS `noticeboard` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `accepted_leaveid` int(11) NOT NULL,
  `rejected_leaveid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `userid` (`userid`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `leavetimes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1104103 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`firstname`, `lastname`, `userid`, `username`, `email`, `password`, `leavetimes`) VALUES
('Noman', 'Islam', 1104010, 'noman', 'admin@gmail.com', '12345', 3),
('sourav', 'paul', 1104082, 'sourav', 'souravpaulcse@gail.com', '12345', 2),
('amit', 'roy', 1104085, 'amit', 'amit@gmail.com', '12345', 5),
('firoz', 'Hasan', 1104102, 'firoz', 'firoz@gmail.com', '12345', 11);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD CONSTRAINT `admin_panel_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD CONSTRAINT `noticeboard_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_profile` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticeboard_ibfk_2` FOREIGN KEY (`id`) REFERENCES `admin_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
