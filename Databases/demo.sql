-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 03:39 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `user` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `par_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `user`, `text`, `date`, `par_code`) VALUES
(1, 'Admin', 'kaV wello', '2019-01-28 09:35:05', ''),
(2, 'Admin', 'kaV wello', '2019-01-28 18:39:18', ''),
(3, 'Admin', '12345', '2019-01-28 18:45:21', '8BXmYi'),
(4, 'Admin', '45678', '2019-01-28 18:45:30', '8BXmYi'),
(5, 'Admin', 'kaV wello', '2019-01-28 20:36:26', '8BXmYi');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `faculty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `faculty`) VALUES
(1, 'Mechanical engineer', 'Engineering'),
(2, 'Finance', 'FLM');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(15) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(13, '20150727_131238.jpg'),
(14, 'student-icon.png'),
(15, 'spa-lotus.jpg'),
(16, '12138369_860925877336462_460081317212209237_o.jpg'),
(17, '20180923_235448.jpg'),
(18, '13935174_126965434411498_3209674775319632028_n.jpg'),
(19, '41418420_2210572665627889_9011587963993194496_o.jpg'),
(20, '41418420_2210572665627889_9011587963993194496_o.jpg'),
(21, '41418420_2210572665627889_9011587963993194496_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(15) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(48, '10441450_615959661837387_3341202488448908678_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `user` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `user`, `text`, `date`, `code`) VALUES
(2, 'Admin', 'This is a comment', '2019-01-28 11:26:30', ''),
(3, 'Admin', 'hgfdcsxz', '2019-01-28 09:34:47', 'DF7u2Z'),
(4, 'Admin', 'hello every one', '2019-01-28 09:34:58', 'lqqfqF'),
(5, 'Admin', 'hi', '2019-01-28 18:39:23', '9QYUn7'),
(6, 'Admin', 'hi', '2019-01-28 18:43:15', '2AOQFr'),
(7, 'Admin', 'hi nm', '2019-01-28 18:45:12', '8BXmYi'),
(8, 'Admin', 'hi everyone', '2019-01-28 20:36:40', 'D19QP6'),
(9, 'Admin', 'wasdfghjk', '2019-01-28 20:49:06', 'flXvlA'),
(10, 'Admin', 'wasdfghjk', '2019-01-28 23:39:33', '6fKGcU'),
(11, 'Admin', 'wasdfghjk', '2019-01-28 23:59:07', 'CNQIOT'),
(12, 'Admin', 'wasdfghjk', '2019-01-28 23:59:52', 'Qd9jjs'),
(13, 'Admin', 'wasdfghjk', '2019-01-29 00:10:51', 'fe44d0'),
(14, 'Admin', 'wasdfghjk', '2019-01-29 00:19:17', 'Jvpuff'),
(15, 'Admin', 'wasdfghjk', '2019-01-29 00:25:41', '4wRVyl'),
(16, 'Admin', 'wasdfghjk', '2019-01-29 00:26:15', 'WZPLwG'),
(17, 'Admin', 'wasdfghjk', '2019-01-29 00:30:03', 'Mwx2Og'),
(18, 'Admin', 'wasdfghjk', '2019-01-29 10:20:21', 'TZeOpc'),
(19, 'Admin', 'wasdfghjk', '2019-01-29 10:20:40', 'D9CyvG'),
(20, 'Admin', 'wasdfghjk', '2019-01-29 10:29:40', 'n4bgr4'),
(21, 'Admin', 'wasdfghjk', '2019-01-29 10:32:16', 'bXA3Tl'),
(22, 'Admin', 'hello nidhisa', '2019-01-29 15:26:43', 'wG04p4'),
(23, 'Admin', 'hello nidhisa', '2019-01-29 15:28:36', 'xl3VNd'),
(24, 'Admin', 'hello nidhisa', '2019-01-29 15:30:20', '0Ko2YK'),
(25, 'Admin', 'hello nidhisa', '2019-01-29 15:30:45', '6wQzwF'),
(26, 'Admin', 'hello nidhisa', '2019-01-29 15:31:04', 'ZCC2EL'),
(27, 'Admin', 'hello nidhisa', '2019-01-29 15:31:17', 'aI8dFP'),
(28, 'Admin', 'hello nidhisa', '2019-01-29 15:34:02', 'x8c72G'),
(29, 'Admin', 'hello nidhisa', '2019-01-29 15:38:52', 'qc7YnU'),
(30, 'Admin', 'hello nidhisa', '2019-01-29 15:40:45', '7fk1R1'),
(31, 'Admin', 'Hello eeye=r', '2019-01-30 19:26:35', 'nCORlS');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` text NOT NULL,
  `telnum` text NOT NULL,
  `fieldofstudy` text NOT NULL,
  `mobnum` text NOT NULL,
  `email` text NOT NULL,
  `edu1name` text NOT NULL,
  `edu1course` text NOT NULL,
  `edu1detail` text NOT NULL,
  `edu2name` text NOT NULL,
  `edu2course` text NOT NULL,
  `edu2detail` text NOT NULL,
  `comp1name` text NOT NULL,
  `comp1post` text NOT NULL,
  `comp1detail` text NOT NULL,
  `comp2name` text NOT NULL,
  `comp2post` text NOT NULL,
  `comp2detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `address`, `telnum`, `fieldofstudy`, `mobnum`, `email`, `edu1name`, `edu1course`, `edu1detail`, `edu2name`, `edu2course`, `edu2detail`, `comp1name`, `comp1post`, `comp1detail`, `comp2name`, `comp2post`, `comp2detail`) VALUES
(40, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(41, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(42, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(43, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(44, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(45, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(46, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(47, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(48, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(49, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(50, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(51, 'Vashish', 'Nilkanthsingh', 'Tbs Lane Triolet', '57783935', '', '57783935', 'vashish33@gmail.com', 'UOM', 'Maths', 'Pkner', 'BRSSS', 'Maths', 'Pkner', 'SueprU', '$Sales', 'boku', 'FDSS', '$Teacher', 'efweef'),
(52, 'Reena', 'Rambo', 'Lalmatie', '57878787', '', '2656565', 'reena@rambo.com', 'Rajkumar Gajudhur', 'Management', 'Hsc', 'UOM', 'Management', 'Hsc', '', '$', '', '', '$', ''),
(53, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(54, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(55, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(56, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(57, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(58, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(59, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(60, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Accounting', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(61, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Medicine', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(62, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Medicine', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', ''),
(63, 'Vashish', 'Imrith', 'TBS Lane Triolet', '57783935', 'Medicine', '', 'vashish33@gmail.com', '', '', '', 'Vashish Imrith', '', '', '', '$', '', '', '$', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fieldOfStudy` varchar(20) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `levelOfStudy` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `landline` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstName`, `lastName`, `gender`, `fieldOfStudy`, `coursename`, `levelOfStudy`, `phone`, `address`, `landline`) VALUES
(1, 'vashish', 'vashish33@gmail.com', '', '', 'Nilkanthsingh', 'male', 'Engineering', 'BEng Telecommunications Engineering with Networking', '21503', '57783935', '', ''),
(5, 'Nidhisha', '', '', '', '', 'female', 'Engineering', 'BSC Applied Computing', '', '', '', ''),
(6, 'reena', '', '', '', '', 'female', 'Hospitality', 'Nursing', '', '', '', ''),
(7, 'John', '', '', '', '', 'male', 'Engineering', 'BSC Electric', '', '', '', ''),
(8, 'Jane', '', '', '', '', 'female', 'LAW', 'Management', '', '', '', ''),
(9, 'Janadhan', '', '', '', '', 'male', 'Medicine', '', '', '', '', ''),
(10, 'Lokesh', '', '', '', '', 'male', 'Finance', '', '', '', '', ''),
(11, 'Jhoomla', '', '', '', '', 'female', 'Engineering', '', '', '', '', ''),
(12, 'Janan', '', '', '', '', 'female', 'Engineering', '', '', '', '', ''),
(13, 'Danny', '', '', '', '', 'male', 'Engineering', '', '', '', '', ''),
(14, 'John', '', '', '', '', 'male', 'Engineering', '', '', '', '', ''),
(15, 'jack', '', '', '', '', 'male', 'Engineering', 'BENG Mechanical Engineering', '', '', '', ''),
(16, 'Deepa', '', '', '', '', 'female', 'Hospitality', 'Nursing', '', '', '', ''),
(17, 'Harjan', '', '', '', '', 'male', 'Medicine', 'Chiropractor', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
