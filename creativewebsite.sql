-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 06:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creativewebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `job_id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `id` int(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `employer_name` varchar(255) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `comp_location` varchar(255) NOT NULL,
  `applicant` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id`, `job_id`, `employer_name`, `job_name`, `salary`, `working_hours`, `des`, `comp_location`, `applicant`, `created_at`) VALUES
(18, '6', 'hasan', 'java', '100', '9', 'this is a job', 'mirpur', 'hulk@gmail.com', '2018-12-25 21:10:57.05897'),
(19, '6', 'hasan', 'java', '100', '9', 'this is a job', 'mirpur', 'hulk@gmail.com', '2018-12-26 00:38:28.59869');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `e_id` int(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_email` varchar(255) NOT NULL,
  `e_pass` varchar(255) NOT NULL,
  `e_num` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `e_des` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`e_id`, `e_name`, `e_email`, `e_pass`, `e_num`, `location`, `e_des`, `created_at`) VALUES
(1, 'thor', 's@e.com', 'asd', '01324', 'vutergolli', 'stormbreaker', '2018-12-18 13:35:27.05543'),
(2, 'google', 'g@gmail.com', '1234', '01873', 'LA', 'lol', '2018-12-19 18:45:11.33455');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `f_id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_pass` varchar(255) NOT NULL,
  `f_contact_no` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`f_id`, `f_name`, `f_email`, `f_pass`, `f_contact_no`, `age`, `skill`, `expertise`, `rate`, `history`, `des`, `created_at`) VALUES
(5, 'Hasan', 'h@h.com', '1234', '01737512549', '28', 'Mobile app developer', 'Professional', '130-250$', 'Software Engineer', 'This iks test', '2018-12-02 16:50:09.52413'),
(6, 'Hdsan', 'scs ', 'smd s m', '01', '2', 'Musician', 'Professional', '40$-75$', 'FKNM', 'CMS', '2018-12-02 16:54:51.01964'),
(7, 'jk', 'ja', 'af', 'af', '12', 'Interior designer', 'Professional', '75$-130$', 'NONE', '', '2018-12-08 12:52:25.48974'),
(9, 'hulk', 'hulk@gmail.com', '1111', '01212', '73', 'Web developer', 'Professional', '40$-75$', 'NONE', 'jkfajaf', '2018-12-19 17:00:45.93878');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `job_id` int(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `comp_location` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5),
  `employer_name` varchar(255) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`job_id`, `salary`, `working_hours`, `des`, `comp_location`, `created_at`, `employer_name`, `job_name`, `skill`) VALUES
(5, 'SMLF', ';FMLfcml', 'dflm', ';lfm', '2018-12-19 19:40:49.15503', 'g@gmail.com', 'kfm', ''),
(6, '100', '9', 'this is a job', 'mirpur', '0000-00-00 00:00:00.00000', 'hasan', 'java', ''),
(7, '1000', '6', 'lol', 'dhaka', '2018-12-20 10:20:04.46832', 'g@gmail.com', 'developer', ''),
(8, '12000', '8', 'This is a job', 'Mirpur', '2018-12-21 19:34:11.85316', 'g@gmail.com', 'Hire a dveoper', 'Web developer');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(255) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`, `created_at`) VALUES
(2, 'photographer', '2018-12-21 18:35:07.85115'),
(3, 'Musician', '2018-12-21 18:43:30.56060'),
(4, 'Web developer', '2018-12-21 18:44:40.64175');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `e_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `f_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
