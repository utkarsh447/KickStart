-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2017 at 10:26 AM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginAttempts`
--

CREATE TABLE IF NOT EXISTS `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `loginAttempts`
--

INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('127.0.0.1', 2, '2017-03-31 11:28:41', 'a', 1),
('127.0.0.1', 2, '2017-03-31 11:32:24', 'utkarsh447', 2),
('127.0.0.1', 1, '2017-04-01 22:01:40', 'divya', 3),
('127.0.0.1', 2, '2017-03-31 11:36:22', 'lav', 4),
('127.0.0.1', 2, '2017-03-31 12:12:59', 'yukti', 5),
('127.0.0.1', 3, '2017-03-31 12:29:00', 'aa', 6),
('127.0.0.1', 2, '2017-03-31 12:27:43', 'ua98', 7),
('127.0.0.1', 2, '2017-03-31 13:12:50', 'lav1', 8),
('127.0.0.1', 3, '2017-03-31 13:13:58', 'lav2', 9),
('127.0.0.1', 2, '2017-03-31 16:58:33', 'pav', 10),
('127.0.0.1', 2, '2017-03-31 17:00:12', 'oav', 11),
('127.0.0.1', 2, '2017-04-02 09:19:32', 'ppap123', 12),
('127.0.0.1', 4, '2017-03-31 19:23:33', '12345', 13),
('127.0.0.1', 2, '2017-04-01 09:00:45', 'dd123', 14),
('127.0.0.1', 2, '2017-04-01 09:15:23', 'd123', 15),
('127.0.0.1', 2, '2017-04-01 09:24:06', 'fssd', 16),
('127.0.0.1', 2, '2017-04-01 11:13:46', 'lavnish', 17),
('127.0.0.1', 1, '2017-04-01 15:23:12', 'gopu', 18),
('127.0.0.1', 2, '2017-04-01 15:31:22', 'divya1', 19),
('127.0.0.1', 2, '2017-04-01 16:35:27', 'fes', 20),
('127.0.0.1', 2, '2017-04-01 16:49:07', '123', 21),
('127.0.0.1', 2, '2017-04-01 16:51:31', 'asa', 22),
('127.0.0.1', 2, '2017-04-01 19:29:18', 'neha112', 23),
('127.0.0.1', 4, '2017-04-01 19:46:18', 'polim', 24),
('127.0.0.1', 2, '2017-04-01 22:22:42', 'xxq', 25),
('127.0.0.1', 2, '2017-04-01 22:48:14', 'bm', 26),
('127.0.0.1', 2, '2017-04-02 03:47:08', 'mnb', 27),
('::1', 1, '2017-04-02 06:57:29', 'ppap123', 28),
('::1', 2, '2017-04-02 07:51:59', 'lav', 29),
('127.0.0.1', 2, '2017-04-02 08:19:27', 'popo', 30),
('127.0.0.1', 2, '2017-04-02 17:46:31', 'Yukti223', 31),
('::1', 2, '2017-09-10 20:34:57', 'a', 32),
('::1', 1, '2017-09-22 15:22:38', 'shashank', 33);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` varchar(100) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `cname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `cname`, `location`, `mod_timestamp`) VALUES
('116468580158df34bfa60fb', 'nana', '$2y$10$bDwgtaY6Eu22pIS1mEu8sO/q/1QHiGf96yFNsEWhmrcZT.JyD02aS', 'nana@k.com', 0, 'nanaji', 'bihar', '2017-04-01 05:03:59'),
('118982573158dfe0ca789fd', 'bm', '$2y$10$uAMYGjF/JI9XkOhhoUU5ruoxsSv8DIpjiXrz0qku.gJ4jaJa0uJGO', 'bm@gg.com', 1, 'bm', 'bm', '2017-04-01 17:18:26'),
('122838392158dfc888c5772', 'pika', '$2y$10$cwUuq8YyAy1r4Lpo/14CUeKQ1gSOzeooVJCjDAm3sj2LL/BVfMtDG', 'p@pika.com', 0, '', '', '2017-04-01 15:34:32'),
('126630672758de5f139c1e9', 'ppap123', '$2y$10$DhekvbZ5F9pXUhOnpYMvle2qf7i1iWJPhw5pozPl0nua7VcGYfSyW', 'ppap@gmail.com', 1, 'pp1', 'pp2', '2017-04-02 09:51:46'),
('129345915859c4dd36ce760', 'shashank', '$2y$10$YMBZZWr0g84ml0VgkpEvxu0R6QFgH2eAPj9T43l99kmO5aqf41aQ2', 'shasha@gmail.com', 1, 'sshasha', 'Delhi', '2017-09-22 09:52:24'),
('135068067258dfd4e1be2cd', 'h', '$2y$10$W3s0RNlJ6ohziKoJrZF3UeI9AoBgLG8t5KJhKx7gQvuwflBx2aSB2', 'h@h.com', 0, 'h', 'h', '2017-04-01 16:27:13'),
('157211211258dfd5e829cee', 'divya', '$2y$10$iz7qi/mKIR5.vMTFv/mfkertd77ZdxJePF8VAFE.kaYKPgIZIZMuS', 'divya@g.com', 1, 'divya', 'divya', '2017-04-01 16:32:18'),
('17114630858dfd72e7d984', 'xxq', '$2y$10$/r/0vb5ZRxSg6jOUAZBJuei4B/89xSPoub6N5CS8Ln76TXyEiXASi', 'xxq@g.com', 1, 'xxq', 'xxq', '2017-04-01 16:52:47'),
('174232450858e066b37292f', 'popo', '$2y$10$hqDsL0W4CZnP.8tGohaUtez39RFXtzHsNh.4n4bsn.msB5/To0gxu', 'popo@popo.c', 1, 'popo', 'popo', '2017-04-02 02:49:46'),
('182450678658dfd3a5d0aa5', 'g', '$2y$10$KMOzc62CrtJmJH83l55pAOqpoJUuF0XMYW9F60saIEDxty3T/SJs6', 'g@g.com', 0, '', '', '2017-04-01 16:21:57'),
('187950788958e0eb9a8cfc9', 'Yukti223', '$2y$10$klD3L9.k8L7WypFrJJIix.8Ui1lZTjvO4XTzOjqt9uwZjRNIyyQkW', 'Yukti223@gmail.com', 1, 'Yukti223', 'Yukti223', '2017-04-02 12:16:49'),
('205425546058dfd69b6d81f', 'ij', '$2y$10$g1frt7YfmHKfLhoVmx4Avu4pi/bdZQ6KaWBMiEeZXuQYL/1/PGvPu', 'cscd@ggg.com', 0, 'ij', 'ij', '2017-04-01 16:34:35'),
('28057390858de5f34b30f5', '12345', '$2y$10$x4muvFRGMfAEZusp0rBs3ONZ5whrNGwOlnqCEijbb3tJ.beTUupFi', 'rre@gmai.com', 0, '', '', '2017-03-31 13:52:52'),
('45746775758e026de2f722', 'mnb', '$2y$10$NFN2Ej9Zw0J0i5q5Z0FrYeu6gsDy4LfjRA9I14CfqfDvEKUnEZSQu', 'ddw21@gg.com', 1, 'mnb', 'mnb', '2017-04-01 22:17:16'),
('46379110658dfca7c2f843', 'a', '$2y$10$hLIJ4yG.lux0HDpKjOVaT.btIGc0ZKmVeMEuW.OJVwmZkJqbQqK/S', 'a@aa.com', 0, '', '', '2017-04-01 15:42:52'),
('47761043558dfcb5fbc584', 'd', '$2y$10$ty8ABi1giDRAiUykI.jyMejPQHUsqHR7N8OsJeZ64sjDBqQYmW0.y', 'd@d.com', 0, '', '', '2017-04-01 15:46:39'),
('65191051258dfcac689599', 'b', '$2y$10$CA5YayH3mn8zhPj89UpXiuW55CiDa94vsOaejl1C5oC1oL3v0oPhK', 'b@b.com', 0, '', '', '2017-04-01 15:44:06'),
('73525984858dfcb2474fcc', 'c', '$2y$10$Ojmnmubuisb4idKu0h970eyq1EIGQrKOmqvvDP4f4PF7vTwYdNitW', 'c@c.com', 0, '', '', '2017-04-01 15:45:40'),
('87945823158e0603ccbf89', 'lav', '$2y$10$VR9pNmwsfX6Hcz/z7c29dOmVMb0azC9yE0LOSfVY0z8Pd9EbAvQOi', 'lav@gmail.com', 0, 'lav', 'lav', '2017-04-02 02:21:48'),
('8925320858dfcc928c8ae', 'f', '$2y$10$iMUT5lKoTMUz0YhpWe0dpOpSDneckYu0FhcBNeLrjHjKOcadmpcRe', 'f@ff.com', 0, '', '', '2017-04-01 15:51:46'),
('97210895458dfcba3a43c6', 'e', '$2y$10$XZyOpCESyBuVCjSI9Hff/.yk1l3lOHi49568Lf5kC8NuZsbF.zd/O', 'e@e.com', 0, '', '', '2017-04-01 15:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `status` int(11) NOT NULL,
  `mentor` int(11) NOT NULL,
  `websiteB` int(11) NOT NULL,
  `appB` int(11) NOT NULL,
  `design` int(11) NOT NULL,
  `softwares` int(11) NOT NULL,
  `hardwares` int(11) NOT NULL,
  `lawf` int(11) NOT NULL,
  `consult` int(11) NOT NULL,
  `incub` int(11) NOT NULL,
  `invest` int(11) NOT NULL,
  `sponser` int(11) NOT NULL,
  `dataA` int(11) NOT NULL,
  `digiM` int(11) NOT NULL,
  `humanr` int(11) NOT NULL,
  `bussD` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `username`, `website`, `phone`, `status`, `mentor`, `websiteB`, `appB`, `design`, `softwares`, `hardwares`, `lawf`, `consult`, `incub`, `invest`, `sponser`, `dataA`, `digiM`, `humanr`, `bussD`) VALUES
('139906379158e0f13a9f5d9', 'Yukti223', '', 0, 2, 1, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
('189269801758dfea0e7f5ac', 'bm', 'fs', 997855577, 2, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 1, 0),
('40700878758e026ffb9a69', 'mnb', 'mnb.com', 5235352, 2, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0),
('75442225658e0165fd9304', 'ppap123', 'divya.com', 2147483647, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0),
('81480983558df322a94f1f', 'dd123', 'test', 987654321, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('93883562859c88c4cf239f', 'shashank', '', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
