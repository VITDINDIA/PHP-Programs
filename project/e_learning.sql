-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 10:55 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `level` varchar(10) NOT NULL,
  `trainer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cname`, `cost`, `duration`, `level`, `trainer_id`) VALUES
(1, 'PHP', 5000, 2, 'Beginner', 1),
(2, 'ASP', 7000, 3, 'Advance', 2),
(3, 'JAVA', 6000, 2, 'Beginner', 4),
(4, 'HTML and CSS', 2000, 3, 'Beginner', 1),
(5, 'MySQL', 2000, 2, 'Beginner', 1),
(6, 'Big DATA', 10000, 5, 'Beginner', 0),
(7, 'Hadoop', 5000, 2, 'Beginner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `tname`, `email`, `contact`, `qualification`, `password`) VALUES
(1, 'Abhinav', 'abhinav@gmail.com', '9012178088', 'Btech', 'admin'),
(2, 'Sapan', 'sapan@gmail.com', '9012178088', 'Mtech', 'admin'),
(3, 'Aditya', 'Aditya@gmail.com', '9012178088', 'MCA', 'admin'),
(4, 'Sharad', 'Sharad@gmail.com', '8912178088', 'BCA', 'abjsd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `contact`, `email`, `password`, `city`) VALUES
(1, 'Abhinav', '9808156144', 'bjaksjb@gmail.com', '1234', 'Meerut'),
(3, 'Sapan', '9012178088', 'vdc@vidya.edu.in', '9012178088', 'Agra');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_courses_trainers`
-- (See below for the actual view)
--
CREATE TABLE `view_courses_trainers` (
`cname` varchar(30)
,`cost` int(11)
,`duration` int(11)
,`level` varchar(10)
,`tname` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `view_courses_trainers`
--
DROP TABLE IF EXISTS `view_courses_trainers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_courses_trainers`  AS  select `courses`.`cname` AS `cname`,`courses`.`cost` AS `cost`,`courses`.`duration` AS `duration`,`courses`.`level` AS `level`,`trainers`.`tname` AS `tname` from (`courses` left join `trainers` on((`trainers`.`id` = `courses`.`trainer_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
