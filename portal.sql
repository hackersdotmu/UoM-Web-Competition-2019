-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 05:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `read` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `message`, `sender`, `receiver`, `title`, `date`, `read`) VALUES
(7, 'Name: kaviraj test\nMobile: 56767676\nEmail: kaviraj@gmail.com\nCourse: account', 'kaviraj', 'yuvraj', 'I want a project partner', '2019-02-07', 0),
(8, 'Name: yuvraj test\nMobile: 50909090\nEmail: yuvraj@gmail.com\nCourse: BSC Physics', 'yuvraj', 'Kaviraj', 'Help', '2019-02-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `spam` int(11) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `createdBy`, `tag`, `spam`, `votes`, `date`, `visible`) VALUES
(48, 'I want a project partner', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'yuvraj', 'it', 1, 1, '2019-02-07', 1),
(49, 'I want a job.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'yuvraj', 'it', 0, 0, '2019-02-07', 1),
(50, 'I want a project partner for university project', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'yuvraj', 'agriculture', 0, 0, '2019-02-07', 1),
(51, 'I need a planter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'yuvraj', 'agriculture', 0, 0, '2019-02-07', 1),
(52, 'I want an accountant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'yuvraj', 'finance', 0, 0, '2019-02-07', 1),
(53, 'I need notes for finance', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'yuvraj', 'finance', 0, 0, '2019-02-07', 1),
(54, 'I need help????', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'kaviraj', 'law', 0, 0, '2019-02-07', 1),
(55, 'I need a lawyer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'kaviraj', 'law', 0, 0, '2019-02-07', 1),
(56, 'I need help for physics assignment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'kaviraj', 'science', 0, 0, '2019-02-07', 1),
(57, 'I want a project partner', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'kaviraj', 'science', 0, 0, '2019-02-07', 1),
(58, 'I need a mechanical engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'kaviraj', 'engineering', 0, 0, '2019-02-07', 1),
(59, 'I need notes of engineering', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. praesent odio orci, pharetra efficitur fringilla sed, tristique lacinia ante. nam elit quam, interdum sit amet libero in, pretium dignissim felis. vivamus sit amet metus nec ante rhoncus facilisis. ', 'kaviraj', 'engineering', 0, 0, '2019-02-07', 1),
(60, 'Help', 'I need help', 'Kaviraj', 'it', 1, 1, '2019-02-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reported`
--

CREATE TABLE `reported` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reported`
--

INSERT INTO `reported` (`id`, `user`, `pid`) VALUES
(8, 'kaviraj', '48'),
(9, 'yuvraj', '60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `mobile` varchar(110) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `current` varchar(30) DEFAULT NULL,
  `completed` varchar(30) DEFAULT NULL,
  `institution` varchar(30) DEFAULT NULL,
  `sector` varchar(30) DEFAULT NULL,
  `type` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `dob`, `mobile`, `email`, `pwd`, `current`, `completed`, `institution`, `sector`, `type`) VALUES
(34, 'John', 'Smith', 'Jsmith', ' 98-12-12', '5555555', 'jsmith@hotmail.com', 'f4d45b2c5e2bc95dc284762bacec1293', 'Bsc Applied Computing', 'none', 'UOM ', 'IT', 'basic'),
(35, 'Paul', 'Maker', ' Pmaker', '99-05-01', '6666666', 'pmaker@hotmail.com', 'e8838e11e49b38d4907b263f56634af7', 'Bsc Computer Science', 'none', 'UDM ', 'IT', 'basic'),
(36, 'Harry', 'Potter', 'Hpotter', '97-05-09', '2223338', 'hpotter@gmail.com', '6bfcfc9d346555f71bed597d19e2876c', 'Bsc Chemistry', 'none', 'UOM', 'Science', 'basic'),
(37, 'Mark', 'Fuller', 'Mfuller', '90-08-25', '7777888', 'mfuller@gmail.com', '52355c6a2126a8736ba095079491b803', 'Msc Project Management', 'Bsc Information Systems', 'UOM ', 'IT', 'basic'),
(38, 'Ram', 'Singh', 'Rsingh', '95-06-06', '3333555', 'rsingh@hotmail.com', '1298b43cd9fd45473b2ebe8b280d6c0f', 'Bsc Aquaculture', 'none', ' UOM ', 'Agriculture', 'basic'),
(39, 'Frank', ' Maurice', ' Fmaurice ', '99-02-28', '5555666', 'fmaurice@gmail.com', 'ab146dceb0275ea65d748e0a34430cf6', 'Bsc Law and Criminal Justice', 'none', 'UDM ', 'Law', 'basic'),
(40, 'Xi', 'Chu', 'Xchu', '95-08-07', '2222111', 'xchu@hotmail.com', 'e6eabdf5e163d7f3b07685e7653a59d3', 'BEng Civil Engineering', 'none', 'OUM', 'Engineering', 'basic'),
(41, 'Siddhart', 'Parsad', 'Sparsad', '19-12-22', '7778888', 'sparsad@gmail.com', '45fc5bfac9dacaa97c73c32693c04fc1', 'BEng Mechanical Engineering', 'none', 'UDM', 'Engineering', 'basic'),
(42, 'Ron', 'Weasley', 'rweasley', '98-12-31', '5555666', 'rweasley@hotmail.com', '601bec0a9c73e45333cdab71ed7b4753', 'Bsc Crop Technology', 'none', 'UOM', 'Agriculture', 'basic'),
(50, 'yuvraj', 'test', 'yuvraj', 'January 8, 2019 2:20 AM', '50909090', 'yuvraj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'BSC Physics', 'Applied computing', 'UOM', 'it', 'basic'),
(51, 'kaviraj', 'test', 'kaviraj', 'January 8, 2019 2:20 AM', '56767676', 'kaviraj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'account', 'finace', 'CTI', 'it', 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `voted`
--

CREATE TABLE `voted` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `pid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voted`
--

INSERT INTO `voted` (`id`, `user`, `pid`) VALUES
(24, 'kaviraj', '48'),
(25, 'yuvraj', '60');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reported`
--
ALTER TABLE `reported`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voted`
--
ALTER TABLE `voted`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `reported`
--
ALTER TABLE `reported`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `voted`
--
ALTER TABLE `voted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
