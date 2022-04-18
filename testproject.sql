-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 02:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(50) NOT NULL,
  `emp_psw` varchar(50) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_sname` varchar(50) NOT NULL,
  `emp_birth` date NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `position` enum('admin','driver','employee','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_psw`, `emp_name`, `emp_sname`, `emp_birth`, `emp_phone`, `qualification`, `position`) VALUES
('admin', '0062', 'ณัฐนันท์', 'แก้วมณี', '1999-06-02', '0938210957', 'บลาๆ555', 'admin'),
('driver', '1234', 'จตุพร', 'จันทร์วิเศษ', '1999-07-02', '0932654102', 'คนขับรถสุดเท่ๆ', 'driver'),
('employee', '1595', 'ขยัน', 'ทำงาน', '1999-11-03', '0965823167', 'พนักงานทั่วไป', 'employee'),
('hindshima', 'yuijimono12', 'ตำนาน', 'ตลอดไป', '1998-05-04', '09658754', 'ยังไงดี', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
