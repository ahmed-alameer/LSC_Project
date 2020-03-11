-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 06:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

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
  `pt_bank_account_no` varchar(100) NOT NULL,
  `pt_teach_gender` varchar(20) NOT NULL,
  `pt_max_student_count` varchar(15) NOT NULL,
  `pt_phone` varchar(20) NOT NULL,
  `pt_password` varchar(500) NOT NULL,
  `pt_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peer_tutor`
--

INSERT INTO `peer_tutor` (`pt_id`, `pt_st_id`, `pt_name`, `pt_code`, `pt_register_date`, `pt_email`, `pt_major`, `pt_department`, `pt_gpa_major`, `pt_gpa_cumul`, `pt_bank_name`, `pt_bank_account_no`, `pt_teach_gender`, `pt_max_student_count`, `pt_phone`, `pt_password`, `pt_status`) VALUES
(1, 20140000, 'said', 'ss', '2020-03-10 15:50:32', 'said@du.edu.om', 'cs', 'cs', '84', '85', 'bank muscat', '2222222222222', 'male', '3', '99966666', '$2y$10$dXRaW2KB9Gnvg3CH93PMjuBP3GclDufRCmT3XCm3ypqm5N/Ji4uyK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pt_code_course`
--

CREATE TABLE `pt_code_course` (
  `pt_id` int(11) NOT NULL,
  `pt_code` varchar(20) NOT NULL,
  `pt_course_code` varchar(25) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `pt_schudle`
--

CREATE TABLE `pt_schudle` (
  `s_id` varchar(20) NOT NULL,
  `s_day` varchar(20) NOT NULL,
  `s_date` date NOT NULL,
  `s_week_no` varchar(10) NOT NULL,
  `s_time_from` time NOT NULL,
  `s_time_to` int(11) NOT NULL,
  `s_pt_code` varchar(20) NOT NULL,
  `s_subject` varchar(20) NOT NULL,
  `s_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `pt_code_course`
--
ALTER TABLE `pt_code_course`
  ADD PRIMARY KEY (`pt_id`);

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
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pt_code_course`
--
ALTER TABLE `pt_code_course`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
