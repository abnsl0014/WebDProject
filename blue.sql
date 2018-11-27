-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 05:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aa`
--

-- --------------------------------------------------------

--
-- Table structure for table `blue`
--

CREATE TABLE `blue` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `pn` bigint(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `rooms` varchar(10) NOT NULL,
  `services` varchar(25) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blue`
--

INSERT INTO `blue` (`fname`, `lname`, `dob`, `pn`, `email`, `password`, `address`, `gender`, `rooms`, `services`, `comment`, `id`) VALUES
('Ayush', 'l', '', 9728347133, 'abnsl0014@gmail.com', '', 'Near Bilaspur Printers, Bilaspur, Main Bazar Bilaspur 135102 distt.Yamunanagar', '', '', '', '', 0),
('shubham', 'dubey', '1999-12-01', 9888882222, 'dubey@gmail.com', '123', 'noida', 'male', 'Single', 'yoga', 'goood..', 0),
('new', 'last', '2003-01-03', 1161441445, 'example@example.com', 'qwe', 'delhi', 'male', 'Single', 'yoga', 'yay', 0),
('raghav', 'nb', '2005-03-05', 432562366, 'example@hhv.com', 'qq', 'qqcqw', 'male', 'double', 'yoga', 'ss', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blue`
--
ALTER TABLE `blue`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
