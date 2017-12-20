-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 01:07 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveydata`
--

CREATE TABLE `surveydata` (
  `slno` int(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `lessonobjective` varchar(50) NOT NULL,
  `timemanagement` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `observer` varchar(50) NOT NULL,
  `score` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveydata`
--

INSERT INTO `surveydata` (`slno`, `teacher`, `date`, `lessonobjective`, `timemanagement`, `comment`, `observer`, `score`, `timestamp`) VALUES
(2, '2', '12/6/2017', 'Good', 'Average', 'Key Points discussed', 'Nathan', 0, '2017-12-05 11:32:47'),
(3, '2', '12/13/2017', 'Good', 'Good', 'lala', 'Arnur', 10, '2017-12-05 12:00:55'),
(4, '1', '12/13/2017', 'Good', 'Basic', 'actibe', 'Arnur', 15, '2017-12-05 12:02:49'),
(5, '2', '12/7/2017', 'Average', 'Good', 'asdasdsaczxcasx', 'Arnur', 17, '2017-12-05 12:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `id_9597535531` int(111) DEFAULT NULL,
  `name_5321526098` varchar(111) NOT NULL,
  `password_6924624611` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`id_9597535531`, `name_5321526098`, `password_6924624611`) VALUES
(1, 'Aneesh Pradeep', 'GVrVJE3HUTL34WV6'),
(2, 'Baurzhan', 'sZ95T47MWxdPHVTB'),
(3, 'Nursultan', '4eEV5n4xLQrrE34G'),
(4, 'Nurlybay', '6G5Cygg2Hk5APNhs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surveydata`
--
ALTER TABLE `surveydata`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surveydata`
--
ALTER TABLE `surveydata`
  MODIFY `slno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
