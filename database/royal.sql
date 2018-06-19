-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 02:06 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(255) NOT NULL,
  `event_content` text NOT NULL,
  `event_image` varchar(256) NOT NULL,
  `event_start_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_content`, `event_image`, `event_start_date`) VALUES
(1, 'Flying', 'lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum', 'gallery1.png', '2018-06-28'),
(2, 'Walking', 'lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum', 'gallery2.png', '2018-06-13'),
(3, 'Watching', 'lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum,lorem ipsum', 'gallery3.png', '2018-06-17'),
(7, 'Swimming', 'gogogo', '233919.jpg', '2018-06-18'),
(8, 'Swimming POLLLL', 'NEw event', '243580.jpg', '2018-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`feedback_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `user_id`, `title`, `body`, `create_date`) VALUES
(3, 1, 'Good service', 'Appreciate', '2018-06-17 15:37:28'),
(4, 11, 'GoOD Good', 'fasfascsczx', '2018-06-19 11:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` varchar(256) NOT NULL,
  `room_type_id` int(11) unsigned NOT NULL,
  `is_book` tinyint(1) NOT NULL DEFAULT '0',
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `number_of_adult` int(11) NOT NULL,
  `number_of_child` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment` varchar(256) NOT NULL,
  PRIMARY KEY (`room_id`),
  KEY `room_type_id` (`room_type_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_number`, `room_type_id`, `is_book`, `check_in_date`, `check_out_date`, `number_of_adult`, `number_of_child`, `comment`, `user_id`, `payment`) VALUES
(1, '102', 1, 0, '0000-00-00', '0000-00-00', 0, 0, '                            \r\n                        ', 0, ''),
(2, '103', 1, 0, '0000-00-00', '0000-00-00', 0, 0, '                            \r\n                        ', 1, ''),
(3, '104', 1, 0, '0000-00-00', '0000-00-00', 0, 0, '                            \r\n                        ', 1, ''),
(4, '202', 2, 0, '0000-00-00', '0000-00-00', 0, 0, '                            \r\n                        ', 1, ''),
(5, '203', 2, 0, '0000-00-00', '0000-00-00', 0, 0, '', 0, ''),
(6, '204', 2, 0, '0000-00-00', '0000-00-00', 0, 0, '', 0, ''),
(7, '302', 3, 0, '0000-00-00', '0000-00-00', 0, 0, '                            \r\n                        ', 1, ''),
(8, '303', 3, 0, '0000-00-00', '0000-00-00', 0, 0, '', 0, ''),
(9, '304', 3, 0, '0000-00-00', '0000-00-00', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE IF NOT EXISTS `room_type` (
  `room_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `room_type` varchar(50) NOT NULL,
  `break_fast` varchar(15) NOT NULL,
  `occupancy` varchar(15) NOT NULL,
  `price` varchar(15) NOT NULL,
  `room_images` varchar(256) NOT NULL,
  `size` varchar(15) NOT NULL,
  `bed` varchar(15) NOT NULL,
  PRIMARY KEY (`room_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type`, `break_fast`, `occupancy`, `price`, `room_images`, `size`, `bed`) VALUES
(1, 'Single Room', 'Yes', '2', '200', 'single_room.jpg', '1', '1'),
(2, 'Double Room', 'Yes', '5', '300', 'double_room.jpg', '2', '2'),
(3, ' Luxurious Room', 'Yes', '10', '500', 'luxurious_room.jpg', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_staff` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `email`, `password`, `register_date`, `is_staff`) VALUES
(1, 'Admin', '0123456789', 'admin@gmail.com', '86bfa60df2ba94c51706735644514559', '2018-06-16 04:48:37', 1),
(2, 'dsadas dsacxzcxz', '123zxcz', 'tao@gmail.comdsa ', '86bfa60df2ba94c51706735644514559', '2018-05-24 09:36:29', 0),
(3, 'Tai Huynh 1', '015424', 'tai@gmail.com', '86bfa60df2ba94c51706735644514559', '2018-06-16 03:40:11', 0),
(4, 'bubu', '0125642', 'tituti@gmail.com', '86bfa60df2ba94c51706735644514559', '2018-05-29 06:23:11', 0),
(8, 'bibi', '01223', 'bubu@gmail.com', '9bec0e6d08a5f32b7d6ccb46dac15431', '2018-06-16 04:49:09', 0),
(9, 'admin', '011111121', 'admin1@gmail.com', 'a66abb5684c45962d887564f08346e8d', '2018-06-16 08:37:39', 1),
(10, 'dsadsa', '1234', 'vc@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '2018-06-18 01:26:50', 0),
(11, 'Ben Ten', '0405757995', 'dsadasd@gmail.com', '86bfa60df2ba94c51706735644514559', '2018-06-19 01:16:30', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`room_type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
