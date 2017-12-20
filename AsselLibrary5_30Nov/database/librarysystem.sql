-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 10:33 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmastertable`
--

CREATE TABLE `bookmastertable` (
  `bookidno` int(10) NOT NULL,
  `bookname` varchar(45) NOT NULL,
  `bookauthor` varchar(45) NOT NULL,
  `bookISBN` varchar(45) NOT NULL,
  `bookissuenumber` int(10) NOT NULL,
  `bookpagenumbers` int(10) NOT NULL,
  `bookgenre` int(45) NOT NULL,
  `bookpublisher` varchar(45) NOT NULL,
  `bookyear` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suggestb`
--

CREATE TABLE `suggestb` (
  `suggestionidno` int(10) NOT NULL,
  `suggestiondata` varchar(40) NOT NULL,
  `suggestionemail` varchar(40) NOT NULL,
  `suggestionphone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestb`
--

INSERT INTO `suggestb` (`suggestionidno`, `suggestiondata`, `suggestionemail`, `suggestionphone`) VALUES
(1, 'Who made this amazing website ?', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `idno` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `emailadd` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `pnumber` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`idno`, `fname`, `lname`, `userid`, `emailadd`, `pass`, `pnumber`) VALUES
(1, 'Aneesh', 'Pradeep', 'KazakhPrince', 'aneesh@gmail.com', '12345', 2147483647),
(6, 'Assel', 'B', 'assel', 'assel@gmail.com', '12345', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmastertable`
--
ALTER TABLE `bookmastertable`
  ADD PRIMARY KEY (`bookidno`);

--
-- Indexes for table `suggestb`
--
ALTER TABLE `suggestb`
  ADD PRIMARY KEY (`suggestionidno`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmastertable`
--
ALTER TABLE `bookmastertable`
  MODIFY `bookidno` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suggestb`
--
ALTER TABLE `suggestb`
  MODIFY `suggestionidno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `idno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
