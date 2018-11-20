-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 01:01 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parinam`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `student_id` varchar(225) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `marks` int(100) NOT NULL,
  `max_mark` int(100) NOT NULL,
  `passing_marks` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `semester`, `student_id`, `subject_id`, `marks`, `max_mark`, `passing_marks`) VALUES
(3, 5, 'ezaz@gmail.com', 'DSA123', 34, 100, 30),
(4, 5, 'ezaz@gmail.com', 'TOAC', 23, 100, 30),
(5, 6, 'ezaz12312312@gmail.com', 'DSA123', 50, 100, 30),
(6, 7, 'abdul@gmail.com', 'DSA123', 88, 100, 30),
(7, 7, 'abdul@gmail.com', 'TOAC', 0, 100, 30);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(100) NOT NULL,
  `student_id` varchar(225) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `student_id`, `subject_id`, `semester`, `status`, `date`) VALUES
(1, 'abdul@gmail.com', 'DSA123', 7, 0, '2018-11-20 11:27:25'),
(2, 'abdul@gmail.com', 'DSA123', 7, 0, '2018-11-20 12:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semester` int(100) NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `roll_num` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `name`, `department`, `semester`, `reg_num`, `roll_num`, `mother`, `father`, `dob`) VALUES
(1, 'ezaz12017@gmail.com', 'adfads', 'Mechanical', 1, 'afda', 'adf', 'adf', 'afd', '2018-11-07'),
(2, 'ezaz@gmail.com', 'Ezazul Haque Mullha', 'cse', 5, '123', 'CS11', 'Aliza', 'Akkas', '2018-11-07'),
(6, 'abdul@gmail.com', 'Ashish', 'cse', 7, '123456', 'CS16011', 'ASFasf', 'afadfas', '2018-11-09'),
(4, 'ezaz12312312@gmail.com', 'Ezazul Haque Mullha', 'cse', 6, '1233', '132123', 'Aliza', 'Akkas', '2018-10-31'),
(5, 'ezazeducation@gmail.com', 'Ezazul Haque Mullha', 'Mechanical', 2, '1233123123', '1231231312312', 'asfsd', 'afd', '2018-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` bigint(100) NOT NULL,
  `sub_id` varchar(225) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_id`, `sub_name`, `teacher_id`) VALUES
(1, 'DSA123', 'Data Structure And Algorithm', 'ezaz12017@gmail.com'),
(2, 'TOAC', 'Therory Of Automata And Computation', 'ezaz12017@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `email`, `name`, `department`, `password`) VALUES
(1, 'ezaz12017@gmail.com', 'Ezazul Haque', 'CSE', 'ezaz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
