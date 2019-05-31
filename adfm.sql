-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 02:14 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientdb`
--

CREATE TABLE `patientdb` (
  `name` varchar(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(12) NOT NULL,
  `q4` int(12) NOT NULL,
  `q5` int(255) NOT NULL,
  `q6` int(255) NOT NULL,
  `q7` int(255) NOT NULL,
  `q8` int(255) NOT NULL,
  `q9` int(255) NOT NULL,
  `q10` int(255) NOT NULL,
  `q11` int(255) NOT NULL,
  `q12` int(255) NOT NULL,
  `q13` int(255) NOT NULL,
  `Duration` time(6) NOT NULL,
  `Total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_form`
--

CREATE TABLE `patient_form` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `education` varchar(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `children` int(255) NOT NULL,
  `ethnicity` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `workplace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_form`
--

INSERT INTO `patient_form` (`ID`, `name`, `gender`, `age`, `education`, `residence`, `job`, `children`, `ethnicity`, `languages`, `workplace`) VALUES
(2, 'Bisher', 'male', 22, 'um', 'PJ', 'student', 0, '', 'Arabic, English', 'UM'),
(3, 'Lim Poh Yoke', 'male', 68, 'form 6', 'pj', 'user cars', 3, 'Chinese', 'Chinese, English, Malay', 'Kuala Lumpur'),
(4, 'Abdul', 'male', 22, 'Um', 'PJ', 'student', 100, 'ee', 'English, Arabic', 'PJ'),
(5, 'AbdlRahman Mohammed', 'male', 23, 'um', '2', '6400794', 3, 'Kuala Lumpur', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_db`
--

CREATE TABLE `supervisor_db` (
  `ID` int(1) NOT NULL,
  `username` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_db`
--

INSERT INTO `supervisor_db` (`ID`, `username`, `email`, `password`) VALUES
(1, 'ali', 'ali@gmail.com', '1234'),
(6, 'abdo', 'abdlrahmanfathy2020@gmail.com', '12'),
(7, 'Bisher', 'Bisher@gmail.com', '12'),
(8, 'Ow', 'ow@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientdb`
--
ALTER TABLE `patientdb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient_form`
--
ALTER TABLE `patient_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `supervisor_db`
--
ALTER TABLE `supervisor_db`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_form`
--
ALTER TABLE `patient_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisor_db`
--
ALTER TABLE `supervisor_db`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
