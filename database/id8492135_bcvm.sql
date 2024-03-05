-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2020 at 05:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8492135_bcvm`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `myimage` blob NOT NULL,
  `name` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `myimage`, `name`, `mark`, `batch`) VALUES
(2, 0x636b6e2e6a7067, 'Chandan Kumar Nayak', '79.50', '2010-2013');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `myimage` blob NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `password`, `myimage`, `name`, `email`, `phone`, `subject`, `location`) VALUES
(1, 'c', 'c', 0x46425f494d475f313535373331323835373831392e706e67, 'Chandan Kumar Nayak', '1998chandannayak@gmail.com', '8455944781', '', 'Bhubaneshwar');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `myimage` blob NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_username`, `password`, `myimage`, `name`, `email`, `phone`, `subject`, `qualification`, `location`, `status`) VALUES
(5, 'x', 'x', 0x6368616e64752e6a7067, 'Chandan Kumar Nayak', '1998chandannayak@gmail.com', '8455944781', 'Science', 'B. Tech', 'Bbsr', '1');

-- --------------------------------------------------------

--
-- Table structure for table `food_chart`
--

CREATE TABLE `food_chart` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `breakfast` varchar(255) NOT NULL,
  `lunch` varchar(255) NOT NULL,
  `tiffin` varchar(255) NOT NULL,
  `dinner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_chart`
--

INSERT INTO `food_chart` (`id`, `day`, `breakfast`, `lunch`, `tiffin`, `dinner`) VALUES
(1, 'Monday', 'a', 'b', 'c', 'f'),
(2, 'Tuesday', 'r', 'e', 'g', 'f'),
(3, 'Wednesday', 'w', 'e', 'e', 'f'),
(4, 'Thursday', 'r', 'e', 'w', 'd'),
(5, 'Friday', 'f', 'y', 'h', 'b'),
(6, 'Saturday', 'g', 'b', 'v', 'c'),
(7, 'Sunday', 't', 'g', 'f', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `report_card`
--

CREATE TABLE `report_card` (
  `id` int(11) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `faculty_username` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `full_mark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_card`
--

INSERT INTO `report_card` (`id`, `student_username`, `email`, `name`, `year`, `faculty_username`, `faculty_name`, `date`, `subject`, `mark`, `full_mark`) VALUES
(4, 'ss', '1998chandannayak@gmail.com', 'Chandan Kumar Nayak', '2010', '', 'Suresh Chandra Dalai', '23-05-2020', 'English', '25', '30'),
(5, 'ss', '1998chandannayak@gmail.com', 'Chandan Kumar Nayak', '2010', '', 'Suresh Chandra Dalai', '06-05-2020', 'English', '25', '30'),
(6, 'ss', '1998chandannayak@gmail.com', 'Chandan Kumar Nayak', '2010', '', 'Suresh Chandra Dalai', '26-05-2020', 'Science', '25', '30'),
(7, 'ss', '1998chandannayak@gmail.com', 'Chandan Kumar Nayak', '2010', 'x', 'Suresh Chandra Dalai', '27-05-2020', 'Science', '20', '30');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `myimage` blob NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `year` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_username`, `password`, `myimage`, `name`, `email`, `phone`, `year`, `f_name`, `status`) VALUES
(6, 'ss', 'ss', 0x636b6e2e6a7067, 'Chandan Kumar Nayak', '1998chandannayak@gmail.com', '8455944781', '2010', 'Rabindra Nayak', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_chart`
--
ALTER TABLE `food_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_card`
--
ALTER TABLE `report_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_chart`
--
ALTER TABLE `food_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report_card`
--
ALTER TABLE `report_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
