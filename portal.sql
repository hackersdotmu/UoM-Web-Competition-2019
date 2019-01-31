-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 08:30 AM
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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `message`, `sender`, `receiver`, `title`, `date`) VALUES
(38, 'Name: Kaviraj Gosaye\nMobile: 6343434\nEmail: Kaviraj@gmail.com\nCourse: Computerscience', 'Kaviraj', 'yuvraj034c', 'It technician', '2019-01-31'),
(39, 'Hello, I want yor helpp..\n\nName: Yuvraj Seegolam\nMobile: 58831357\nEmail: Yuvraj108c@gmail.com\nCourse: Appliedcomputing', 'yuvraj034c', 'Kaviraj', 'I want a job.', '2019-01-31'),
(40, 'Name: Yuvraj Seegolam\nMobile: 58831357\nEmail: Yuvraj108c@gmail.com\nCourse: Appliedcomputing\n\nI am interested to become your partner..', 'yuvraj034c', 'Kaviraj', 'I want a project partner', '2019-01-31');

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
(32, 'I want a job.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. iusto, veritatis, corrupti delectus explicabo soluta non dolorem at minus ipsam rerum sunt rem voluptate ipsum numquam dicta doloremque quam repudiandae unde.\nlorem ipsum dolor sit amet consectetur ', 'Kaviraj', 'it', 0, 1, '2019-01-31', 1),
(33, 'I want a project partner', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. iusto, veritatis, corrupti delectus explicabo soluta non dolorem at minus ipsam rerum sunt rem voluptate ipsum numquam dicta doloremque quam repudiandae unde.\nlorem ipsum dolor sit amet consectetur ', 'Kaviraj', 'finance', 0, 0, '2019-01-31', 1),
(34, 'This is post 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. iusto, veritatis, corrupti delectus explicabo soluta non dolorem at minus ipsam rerum sunt rem voluptate ipsum numquam dicta doloremque quam repudiandae unde.\nlorem ipsum dolor sit amet consectetur ', 'Kaviraj', 'law', 0, 0, '2019-01-31', 1),
(35, 'This is post 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. iusto, veritatis, corrupti delectus explicabo soluta non dolorem at minus ipsam rerum sunt rem voluptate ipsum numquam dicta doloremque quam repudiandae unde.\nlorem ipsum dolor sit amet consectetur ', 'yuvraj034c', 'agriculture', 0, 0, '2019-01-31', 1),
(36, 'I want a job.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. iusto, veritatis, corrupti delectus explicabo soluta non dolorem at minus ipsam rerum sunt rem voluptate ipsum numquam dicta doloremque quam repudiandae unde.\nlorem ipsum dolor sit amet consectetur ', 'yuvraj034c', 'finance', 0, 0, '2019-01-31', 1),
(37, 'It technician', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. iusto, veritatis, corrupti delectus explicabo soluta non dolorem at minus ipsam rerum sunt rem voluptate ipsum numquam dicta doloremque quam repudiandae unde.\nlorem ipsum dolor sit amet consectetur ', 'yuvraj034c', 'it', 0, 1, '2019-01-31', 1),
(38, 'I want a project partner', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. iusto, veritatis, corrupti delectus explicabo soluta non dolorem at minus ipsam rerum sunt rem voluptate ipsum numquam dicta doloremque quam repudiandae unde.\nlorem ipsum dolor sit amet consectetur ', 'Kaviraj', 'it', 1, 1, '2019-01-31', 1);

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
(5, 'yuvraj034c', '38');

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
(20, 'Yuvraj', 'Seegolam', 'yuvraj034c', 'January 8, 2019 2:20 AM', '58831357', 'Yuvraj108c@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Appliedcomputing', '-', 'Uom', 'It', 'basic'),
(21, 'Kaviraj', 'Gosaye', 'Kaviraj', 'January 8, 2019 2:20 AM', '6343434', 'Kaviraj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Computerscience', 'Appliedcomputing', 'Uom', 'It', 'basic'),
(34, 'John', 'Smith', 'Jsmith', ' 98-12-12', '5555555', 'jsmith@hotmail.com', 'f4d45b2c5e2bc95dc284762bacec1293', 'Bsc Applied Computing', 'none', 'UOM ', 'IT', 'basic'),
(35, 'Paul', 'Maker', ' Pmaker', '99-05-01', '6666666', 'pmaker@hotmail.com', 'e8838e11e49b38d4907b263f56634af7', 'Bsc Computer Science', 'none', 'UDM ', 'IT', 'basic'),
(36, 'Harry', 'Potter', 'Hpotter', '97-05-09', '2223338', 'hpotter@gmail.com', '6bfcfc9d346555f71bed597d19e2876c', 'Bsc Chemistry', 'none', 'UOM', 'Science', 'basic'),
(37, 'Mark', 'Fuller', 'Mfuller', '90-08-25', '7777888', 'mfuller@gmail.com', '52355c6a2126a8736ba095079491b803', 'Msc Project Management', 'Bsc Information Systems', 'UOM ', 'IT', 'basic'),
(38, 'Ram', 'Singh', 'Rsingh', '95-06-06', '3333555', 'rsingh@hotmail.com', '1298b43cd9fd45473b2ebe8b280d6c0f', 'Bsc Aquaculture', 'none', ' UOM ', 'Agriculture', 'basic'),
(39, 'Frank', ' Maurice', ' Fmaurice ', '99-02-28', '5555666', 'fmaurice@gmail.com', 'ab146dceb0275ea65d748e0a34430cf6', 'Bsc Law and Criminal Justice', 'none', 'UDM ', 'Law', 'basic'),
(40, 'Xi', 'Chu', 'Xchu', '95-08-07', '2222111', 'xchu@hotmail.com', 'e6eabdf5e163d7f3b07685e7653a59d3', 'BEng Civil Engineering', 'none', 'OUM', 'Engineering', 'basic'),
(41, 'Siddhart', 'Parsad', 'Sparsad', '19-12-22', '7778888', 'sparsad@gmail.com', '45fc5bfac9dacaa97c73c32693c04fc1', 'BEng Mechanical Engineering', 'none', 'UDM', 'Engineering', 'basic'),
(42, 'Ron', 'Weasley', 'rweasley', '98-12-31', '5555666', 'rweasley@hotmail.com', '601bec0a9c73e45333cdab71ed7b4753', 'Bsc Crop Technology', 'none', 'UOM', 'Agriculture', 'basic');

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
(7, 'yuvraj034c', '14'),
(8, 'yuvraj034c', '31'),
(9, 'yuvraj034c', '15'),
(10, 'Kaviraj', '31'),
(11, 'Kaviraj', '14'),
(12, 'Kaviraj', '37'),
(13, 'yuvraj034c', '32'),
(14, 'yuvraj034c', '38');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reported`
--
ALTER TABLE `reported`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `voted`
--
ALTER TABLE `voted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
