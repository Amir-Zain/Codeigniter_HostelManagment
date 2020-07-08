-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 03:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chostel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood_tb`
--

CREATE TABLE `addfood_tb` (
  `id` int(11) NOT NULL,
  `day` varchar(40) NOT NULL,
  `breakfast` varchar(50) NOT NULL,
  `btime` varchar(30) NOT NULL,
  `lunch` varchar(50) NOT NULL,
  `ltime` varchar(30) NOT NULL,
  `dinner` varchar(30) NOT NULL,
  `dtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfood_tb`
--

INSERT INTO `addfood_tb` (`id`, `day`, `breakfast`, `btime`, `lunch`, `ltime`, `dinner`, `dtime`) VALUES
(1, 'Monday', 'Putt,Kadala', '7:00 AM', 'Rice,Curry', '12:00 PM', 'Chappathy,Curry', '7:30 PM'),
(2, 'Tuesday', 'Dosha,Chattini', '7:00 AM', 'Rice,Curry', '12:00 PM', 'Porata,Beef', '7:30 PM'),
(4, 'Wednesday', 'Idili,Sambar', '7:00 AM', 'Rice,Curry', '12:00 PM', 'Chappaty,Curry', '7:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent_tb`
--

CREATE TABLE `addstudent_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `addmission` varchar(30) NOT NULL,
  `birth` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent_tb`
--

INSERT INTO `addstudent_tb` (`id`, `name`, `fname`, `addmission`, `birth`, `place`, `sex`, `address`, `image`) VALUES
(4, 'Adil', 'Uppa', '12345', '03-08-1999', 'thrissur', 'male', 'rtugisd d sjhdsjdh', 'twitter.png'),
(5, 'Amir', 'Uppa', '123', '18-08-2000', 'pattambi', 'male', 'dhavhvshdvsh hsdhsdsh', 'whatsapp.png'),
(6, 'Razik', 'Uppa', '1234', '13-02-1999', 'kannur', 'male', 'dfdybjbn&nbsp; bhvcyuscsc', 'facebook.png'),
(7, 'Ashik', 'Uppa', '123456', '20-01-2001', 'thrissur', 'male', 'dfdsfsyfgdf sjbdhidfhi', 'instagram1.png'),
(8, 'Rizawan', 'Uppa', '1122', '28-10-2001', 'kannur', 'male', 'kjjhijhj gfftdfc', 'mail.png');

-- --------------------------------------------------------

--
-- Table structure for table `addwarden_tb`
--

CREATE TABLE `addwarden_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `place` varchar(50) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addwarden_tb`
--

INSERT INTO `addwarden_tb` (`id`, `name`, `username`, `password`, `birth`, `place`, `sex`, `image`) VALUES
(7, 'Amir', 'amir', '123', '06-11-2019', 'pattambi', 'male', 'instagram.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studentcomplaints_tb`
--

CREATE TABLE `studentcomplaints_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `addmission` varchar(50) NOT NULL,
  `datex` varchar(30) NOT NULL,
  `complaint` varchar(80) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentcomplaints_tb`
--

INSERT INTO `studentcomplaints_tb` (`id`, `name`, `addmission`, `datex`, `complaint`, `status`) VALUES
(12, 'Amir', '123', '12-11-2019', 'The food is very bad', 'Pending'),
(13, 'Adil', '12345', '05-11-2019', 'The warden behaviour is bad', 'we take immediate action'),
(14, 'Razik', '1234', '12-11-2019', 'The food is not prepared in correct time', 'Pending'),
(15, 'Rizawan', '1122', '28-10-2019', 'wfwrf', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `wardencomplaints_tb`
--

CREATE TABLE `wardencomplaints_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `addmission` varchar(50) NOT NULL,
  `datex` varchar(30) NOT NULL,
  `complaint` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wardencomplaints_tb`
--

INSERT INTO `wardencomplaints_tb` (`id`, `name`, `addmission`, `datex`, `complaint`) VALUES
(3, 'amir', '12345', '20-11-2019', 'This student behaviour is very bad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfood_tb`
--
ALTER TABLE `addfood_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstudent_tb`
--
ALTER TABLE `addstudent_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addwarden_tb`
--
ALTER TABLE `addwarden_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentcomplaints_tb`
--
ALTER TABLE `studentcomplaints_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wardencomplaints_tb`
--
ALTER TABLE `wardencomplaints_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfood_tb`
--
ALTER TABLE `addfood_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addstudent_tb`
--
ALTER TABLE `addstudent_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addwarden_tb`
--
ALTER TABLE `addwarden_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentcomplaints_tb`
--
ALTER TABLE `studentcomplaints_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wardencomplaints_tb`
--
ALTER TABLE `wardencomplaints_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
