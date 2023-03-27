-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 09:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_details`
--

CREATE TABLE `accounting_details` (
  `id` int(11) NOT NULL,
  `account_Type` varchar(5) NOT NULL,
  `Amount` int(7) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `butaw`
--

CREATE TABLE `butaw` (
  `id` int(11) NOT NULL,
  `body_no` int(5) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `account_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint_details`
--

CREATE TABLE `complaint_details` (
  `id` int(11) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `body_no` int(11) NOT NULL,
  `details` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint_info`
--

CREATE TABLE `complaint_info` (
  `id` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `exname` varchar(5) DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `account_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `exname` varchar(5) DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `street` varchar(95) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mem_info`
--

CREATE TABLE `mem_info` (
  `id` int(11) NOT NULL,
  `mem_role` enum('Officer','Driver Only','Operator Only','Driver and Operator') NOT NULL DEFAULT 'Driver and Operator',
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `exname` varchar(5) DEFAULT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `street` varchar(95) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(35) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `license_no` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unit_info`
--

CREATE TABLE `unit_info` (
  `id` int(11) NOT NULL,
  `body_no` int(5) NOT NULL,
  `mem_id` int(5) NOT NULL,
  `franchise_no` varchar(7) NOT NULL,
  `date_issue` date NOT NULL,
  `date_valid` date NOT NULL,
  `area_code` int(2) NOT NULL,
  `motor_no` varchar(15) NOT NULL,
  `chasis_no` varchar(15) NOT NULL,
  `lto_cr` int(8) NOT NULL,
  `lto_or` int(9) NOT NULL,
  `plate_no` varchar(9) NOT NULL,
  `body_color` varchar(5) NOT NULL,
  `district` int(2) NOT NULL,
  `control_plate` int(5) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `ex_name` varchar(5) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_details`
--
ALTER TABLE `accounting_details`
  ADD KEY `account_ID` (`account_Type`);

--
-- Indexes for table `butaw`
--
ALTER TABLE `butaw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `body_no` (`body_no`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `complaint_details`
--
ALTER TABLE `complaint_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaint_id` (`complaint_id`),
  ADD KEY `body_no` (`body_no`);

--
-- Indexes for table `complaint_info`
--
ALTER TABLE `complaint_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donor_id` (`donor_id`),
  ADD KEY `donor_id_2` (`donor_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mem_info`
--
ALTER TABLE `mem_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_info`
--
ALTER TABLE `unit_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_id` (`mem_id`),
  ADD KEY `body_no` (`body_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `butaw`
--
ALTER TABLE `butaw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint_details`
--
ALTER TABLE `complaint_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint_info`
--
ALTER TABLE `complaint_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_details`
--
ALTER TABLE `donor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mem_info`
--
ALTER TABLE `mem_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_info`
--
ALTER TABLE `unit_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `butaw`
--
ALTER TABLE `butaw`
  ADD CONSTRAINT `butaw_ibfk_1` FOREIGN KEY (`body_no`) REFERENCES `unit_info` (`body_no`),
  ADD CONSTRAINT `butaw_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounting_type` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `complaint_details`
--
ALTER TABLE `complaint_details`
  ADD CONSTRAINT `complaint_details_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `complaint_info` (`id`),
  ADD CONSTRAINT `complaint_details_ibfk_2` FOREIGN KEY (`body_no`) REFERENCES `unit_info` (`body_no`);

--
-- Constraints for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD CONSTRAINT `donor_details_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor_info` (`id`),
  ADD CONSTRAINT `donor_details_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounting_type` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mem_info`
--
ALTER TABLE `mem_info`
  ADD CONSTRAINT `mem_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `unit_info` (`mem_id`);

--
-- Constraints for table `unit_info`
--
ALTER TABLE `unit_info`
  ADD CONSTRAINT `unit_info_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `mem_info` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
