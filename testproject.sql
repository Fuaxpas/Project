-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 02:13 PM
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
('driver2', '123456789', 'ตำนาน', 'ระเอียด', '1997-06-10', '0931254678', 'คนขับรถโครตเก่ง', 'driver'),
('employee', '1595', 'ขยัน', 'ทำงาน', '1999-11-03', '0965823167', 'พนักงานทั่วไป', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `province` varchar(50) NOT NULL,
  `amphur` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `st_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`st_id`, `st_name`, `st_address`, `province`, `amphur`, `district`, `postcode`, `st_phone`) VALUES
('ST001', 'ร้านดิวดี้', '69 หน้าปากซอยไม่ค่อยห่าง', '1', '49', '235', '10140', '06969696969'),
('ST002', 'ร้านแจ่ม', '78 ค่อยๆมา', '1', '18', '122', '10600', '02457845678'),
('ST003', 'ร้านตี๋ติมสด', '6969 แทงทะลุ', '1', '35', '198', '10150', '06969696978');

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `truck_id` varchar(20) NOT NULL,
  `truck_detail` varchar(100) NOT NULL,
  `truck_route` varchar(100) NOT NULL,
  `emp_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`truck_id`, `truck_detail`, `truck_route`, `emp_id`) VALUES
('81กข3', 'กระบะมีตู้แช่ 3 ตู้', 'วิ่งเส้นทางที่ 1', 'driver2'),
('8กฟ29', 'กระบะมีตู้แช่ 4 ตู้', 'วิ่งถนนเส้นที่ 2', 'driver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`truck_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `truck`
--
ALTER TABLE `truck`
  ADD CONSTRAINT `truck_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
