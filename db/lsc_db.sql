-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 11:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(25) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`) VALUES
(1, 'fatmah', 'fatmah@du.edu.om', '$2y$10$dXRaW2KB9Gnvg3CH93PMjuBP3GclDufRCmT3XCm3ypqm5N/Ji4uyK', '99998888');

-- --------------------------------------------------------

--
-- Table structure for table `peer_tutor`
--

CREATE TABLE `peer_tutor` (
  `pt_id` int(11) NOT NULL,
  `pt_st_id` int(11) NOT NULL,
  `pt_name` varchar(20) NOT NULL,
  `pt_code` varchar(10) NOT NULL,
  `pt_register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pt_email` varchar(50) NOT NULL,
  `pt_major` varchar(20) NOT NULL,
  `pt_department` varchar(30) NOT NULL,
  `pt_gpa_major` varchar(20) NOT NULL,
  `pt_gpa_cumul` varchar(20) NOT NULL,
  `pt_bank_name` varchar(50) NOT NULL,
  `pt_bank_account_no` int(15) NOT NULL,
  `pt_gender` int(11) NOT NULL,
  `pt_teach_gender` varchar(20) NOT NULL,
  `pt_max_student_count` int(2) NOT NULL,
  `pt_phone` int(8) NOT NULL,
  `pt_password` varchar(500) NOT NULL,
  `pt_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peer_tutor`
--

INSERT INTO `peer_tutor` (`pt_id`, `pt_st_id`, `pt_name`, `pt_code`, `pt_register_date`, `pt_email`, `pt_major`, `pt_department`, `pt_gpa_major`, `pt_gpa_cumul`, `pt_bank_name`, `pt_bank_account_no`, `pt_gender`, `pt_teach_gender`, `pt_max_student_count`, `pt_phone`, `pt_password`, `pt_status`) VALUES
(1, 20140000, 'said', 'ss', '2020-03-10 15:50:32', 'said@du.edu.om', 'cs', 'cs', '84', '85', 'bank muscat', 2147483647, 0, 'male', 3, 99966666, '$2y$10$dXRaW2KB9Gnvg3CH93PMjuBP3GclDufRCmT3XCm3ypqm5N/Ji4uyK', 0),
(4, 20120000, 'said ali', 'sa', '2020-03-12 05:32:45', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(5, 20120000, 'said ali', 'sa', '2020-03-12 05:32:50', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(6, 20120000, 'said ali', 'sa', '2020-03-12 05:33:41', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(7, 20120000, 'said ali', 'sa', '2020-03-12 05:33:45', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(8, 20120000, 'said ali', 'sa', '2020-03-12 05:47:45', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(9, 20120000, 'said ali', 'sa', '2020-03-12 05:48:28', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(10, 20120000, 'said ali', 'sa', '2020-03-12 05:51:18', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(11, 20120000, 'said ali', 'sa', '2020-03-12 05:53:10', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(12, 20120000, 'said ali', 'sa', '2020-03-12 05:53:19', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(13, 20120000, 'said ali', 'sa', '2020-03-12 05:57:48', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(14, 20120000, 'said ali', 'sa', '2020-03-12 05:59:27', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(15, 20120000, 'said ali', 'sa', '2020-03-12 05:59:38', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(16, 20120000, 'said ali', 'sa', '2020-03-12 06:02:05', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(17, 20120000, 'said ali', 'sa', '2020-03-12 07:41:40', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(18, 20120000, 'said ali', 'sa', '2020-03-12 08:46:36', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0),
(19, 20120000, 'said ali', 'sa', '2020-03-15 05:37:27', 's@gmail.com', 'cs', 'cs', '88', '88', 'Dhofar', 2147483647, 0, 'both', 4, 99998888, 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pt_courses`
--

CREATE TABLE `pt_courses` (
  `pt_course_id` int(11) NOT NULL,
  `pt_id` int(11) NOT NULL,
  `pt_course_code` varchar(25) NOT NULL,
  `pt_subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt_courses`
--

INSERT INTO `pt_courses` (`pt_course_id`, `pt_id`, `pt_course_code`, `pt_subject`) VALUES
(68, 19, 'tt', 'ttttt');

-- --------------------------------------------------------

--
-- Table structure for table `pt_daily_record`
--

CREATE TABLE `pt_daily_record` (
  `dr_id` varchar(30) NOT NULL,
  `dr_name` varchar(30) NOT NULL,
  `dr_code` varchar(10) NOT NULL,
  `dr_subject` varchar(20) NOT NULL,
  `dr_time_from` time NOT NULL,
  `dr_time_to` time NOT NULL,
  `dr_time_in` time NOT NULL,
  `dr_time_out` time NOT NULL,
  `dr_nos` varchar(15) NOT NULL,
  `dr_nost` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pt_schedule`
--

CREATE TABLE `pt_schedule` (
  `pt_sch_id` int(11) NOT NULL,
  `pt_sch_day` varchar(50) NOT NULL,
  `pt_sch_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pt_sch_week_no` int(5) NOT NULL,
  `pt_sch_time` varchar(50) NOT NULL,
  `pt_id` int(11) NOT NULL,
  `pt_sch_subject` varchar(50) NOT NULL,
  `pt_sch_semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pt_weekly_schedule`
--

CREATE TABLE `pt_weekly_schedule` (
  `pt_w_sch_id` int(11) NOT NULL,
  `pt_id` int(11) NOT NULL,
  `sch_time_id` int(11) NOT NULL,
  `pt_w_sch_day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt_weekly_schedule`
--

INSERT INTO `pt_weekly_schedule` (`pt_w_sch_id`, `pt_id`, `sch_time_id`, `pt_w_sch_day`) VALUES
(26, 19, 2, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_time`
--

CREATE TABLE `schedule_time` (
  `sch_time_id` int(11) NOT NULL,
  `sch_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_time`
--

INSERT INTO `schedule_time` (`sch_time_id`, `sch_time`) VALUES
(1, '8:00-8:30'),
(2, '8:30-9:00'),
(3, '9:00-9:30'),
(4, '9:30-10:00'),
(5, '10:00-10:30'),
(6, '10:30-11:00'),
(7, '11:00-11:30'),
(8, '12:00-12:30'),
(9, '12:30-1:00'),
(10, '1:00-1:30'),
(11, '1:30-2:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_daily_record`
--

CREATE TABLE `student_daily_record` (
  `st_dr_id` varchar(20) NOT NULL,
  `st_dr_day` varchar(20) NOT NULL,
  `st_dr_date` date NOT NULL,
  `st_dr_week_no` varchar(10) NOT NULL,
  `st_name` varchar(20) NOT NULL,
  `st_id` varchar(15) NOT NULL,
  `st_phone` varchar(15) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_program` varchar(50) NOT NULL,
  `st_subject` varchar(20) NOT NULL,
  `st_pt_code` varchar(20) NOT NULL,
  `st_time_from` time NOT NULL,
  `st_time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `sr_name` varchar(20) NOT NULL,
  `sr_id_number` int(10) NOT NULL,
  `sr_program` varchar(20) NOT NULL,
  `sr_subject` varchar(20) NOT NULL,
  `sr_pt_code` varchar(11) NOT NULL,
  `sr_time_from` time NOT NULL,
  `sr_time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `peer_tutor`
--
ALTER TABLE `peer_tutor`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `pt_courses`
--
ALTER TABLE `pt_courses`
  ADD PRIMARY KEY (`pt_course_id`);

--
-- Indexes for table `pt_schedule`
--
ALTER TABLE `pt_schedule`
  ADD PRIMARY KEY (`pt_sch_id`);

--
-- Indexes for table `pt_weekly_schedule`
--
ALTER TABLE `pt_weekly_schedule`
  ADD PRIMARY KEY (`pt_w_sch_id`),
  ADD KEY `sch_time_id` (`sch_time_id`),
  ADD KEY `pt_id` (`pt_id`);

--
-- Indexes for table `schedule_time`
--
ALTER TABLE `schedule_time`
  ADD PRIMARY KEY (`sch_time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peer_tutor`
--
ALTER TABLE `peer_tutor`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pt_courses`
--
ALTER TABLE `pt_courses`
  MODIFY `pt_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pt_schedule`
--
ALTER TABLE `pt_schedule`
  MODIFY `pt_sch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pt_weekly_schedule`
--
ALTER TABLE `pt_weekly_schedule`
  MODIFY `pt_w_sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `schedule_time`
--
ALTER TABLE `schedule_time`
  MODIFY `sch_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pt_weekly_schedule`
--
ALTER TABLE `pt_weekly_schedule`
  ADD CONSTRAINT `pt_weekly_schedule_ibfk_1` FOREIGN KEY (`sch_time_id`) REFERENCES `schedule_time` (`sch_time_id`),
  ADD CONSTRAINT `pt_weekly_schedule_ibfk_2` FOREIGN KEY (`pt_id`) REFERENCES `peer_tutor` (`pt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
