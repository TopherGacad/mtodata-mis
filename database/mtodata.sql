-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 01:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `complaint_details`
--

CREATE TABLE `complaint_details` (
  `id` int(11) NOT NULL,
  `complaint_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_no` int(11) DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `complainant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaint_info`
--

CREATE TABLE `complaint_info` (
  `id` int(11) NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exname` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Male',
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(11) NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exname` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Male',
  `street` varchar(95) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`id`, `lname`, `fname`, `mname`, `exname`, `gender`, `street`, `barangay`, `city`, `phone`, `email`, `date_created`) VALUES
(1, 'Dela Cruz', 'Mae', 'Marcelo', '', 'Female', 'Marivelez St.', 'Sta Clara', 'Bulacan', '12354454554', 'mae@gmail.com', '2023-07-20 16:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `events_programs`
--

CREATE TABLE `events_programs` (
  `id` int(11) NOT NULL,
  `ep_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ep_organizer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ep_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ep_date` date NOT NULL,
  `ep_start` time NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mem_info`
--

CREATE TABLE `mem_info` (
  `id` int(11) NOT NULL,
  `mem_role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exname` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Male',
  `street` varchar(95) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_no` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilepic` blob NOT NULL,
  `mem_stat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mem_info`
--

INSERT INTO `mem_info` (`id`, `mem_role`, `lname`, `fname`, `mname`, `exname`, `gender`, `street`, `barangay`, `city`, `phone`, `license_no`, `profilepic`, `mem_stat`, `date_created`) VALUES
(5, 'Operator', 'Reyes', 'John Lloyd', '', 'Jr', 'Male', 'Makiling St.', 'Sta. Mesa', 'Manila', '09123456974', 'F34-23-343423', 0x70726f66332e6a7067, 'Active', '2023-07-20 16:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_contribution`
--

CREATE TABLE `transaction_contribution` (
  `ID` int(11) NOT NULL,
  `transaction_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Contribution',
  `body_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `for_date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction_contribution`
--

INSERT INTO `transaction_contribution` (`ID`, `transaction_code`, `transaction_type`, `body_no`, `amount`, `for_date`, `date_created`, `user_name`) VALUES
(1, 'CON0721230001', 'Contribution', 1, 10, '2023-07-20', '2023-07-20 23:46:10', ''),
(2, 'CON0721230002', 'Contribution', 1, 10, '2023-07-21', '2023-07-21 03:43:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_donation`
--

CREATE TABLE `transaction_donation` (
  `ID` int(11) NOT NULL,
  `transaction_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Donation',
  `donor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction_donation`
--

INSERT INTO `transaction_donation` (`ID`, `transaction_code`, `transaction_type`, `donor_id`, `amount`, `date_created`, `user_name`) VALUES
(1, 'DON0721230001', 'Donation', 1, 1200, '2023-07-20 16:53:47', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_expenses`
--

CREATE TABLE `transaction_expenses` (
  `ID` int(11) NOT NULL,
  `transaction_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `for_month` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `program_ID` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction_expenses`
--

INSERT INTO `transaction_expenses` (`ID`, `transaction_code`, `transaction_type`, `for_month`, `amount`, `program_ID`, `date_created`, `user_name`) VALUES
(1, 'REN0721230001', 'Expenses - Rent', '2023-07-20', 700, NULL, '2023-07-20 16:54:52', ''),
(2, 'PRO0721230002', 'Programs', '2023-07-22', 500, 1, '2023-07-20 23:55:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_finance`
--

CREATE TABLE `transaction_finance` (
  `ID` int(11) NOT NULL,
  `transaction_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction_finance`
--

INSERT INTO `transaction_finance` (`ID`, `transaction_code`, `account_type`, `amount`, `transaction_date`, `debit`, `credit`, `date_created`, `user_name`) VALUES
(11, 'NEW0721230001', 'New Member', 2000, '2023-07-21', 2000, 0, '2023-07-20 16:49:26', ''),
(12, 'DON0721230001', 'Donation', 1200, '2023-07-21', 1200, 0, '2023-07-20 16:53:47', ''),
(13, 'REN0721230001', 'Expenses - Rent', 700, '2023-07-21', 0, 700, '2023-07-20 16:54:53', ''),
(14, 'CON0721230001', 'Contribution', 10, '2023-07-21', 10, 0, '2023-07-20 23:46:10', ''),
(15, 'PRO0721230002', 'Programs', 500, '2023-07-21', 0, 500, '2023-07-20 23:55:49', ''),
(17, 'CON0721230002', 'Contribution', 10, '2023-07-21', 10, 0, '2023-07-21 03:43:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_payment`
--

CREATE TABLE `transaction_payment` (
  `ID` int(11) NOT NULL,
  `transaction_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `member_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction_payment`
--

INSERT INTO `transaction_payment` (`ID`, `transaction_code`, `transaction_type`, `member_id`, `amount`, `date_created`, `user_name`) VALUES
(1, 'NEW0721230001', 'New Member', 5, 2000, '2023-07-20 16:49:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `unit_info`
--

CREATE TABLE `unit_info` (
  `id` int(11) NOT NULL,
  `body_no` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `franchise_no` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_issue` date NOT NULL,
  `date_valid` date NOT NULL,
  `area_code` int(11) NOT NULL,
  `motor_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chasis_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lto_cr` int(11) NOT NULL,
  `lto_or` int(11) NOT NULL,
  `plate_no` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` int(11) NOT NULL,
  `control_plate` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_info`
--

INSERT INTO `unit_info` (`id`, `body_no`, `mem_id`, `franchise_no`, `date_issue`, `date_valid`, `area_code`, `motor_no`, `chasis_no`, `lto_cr`, `lto_or`, `plate_no`, `body_color`, `district`, `control_plate`, `date_created`) VALUES
(1, 1, 5, '10', '2023-07-20', '2028-07-19', 15222, '22343434', '2342', 234234, 34, '234234', 'Green', 1, 23234, '2023-07-20 16:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `roles` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `F_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `L_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex_name` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `psword` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `roles`, `F_name`, `L_name`, `M_name`, `ex_name`, `contact`, `email`, `username`, `psword`, `date_created`) VALUES
(2, 'President', 'Sample', 'Admin', '', '', '12345678901', 'admin@example.com', 'sampleadmin', 'admin123', '2023-07-25 11:10:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint_details`
--
ALTER TABLE `complaint_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `body_no` (`body_no`),
  ADD KEY `complaint_id` (`complainant_id`) USING BTREE;

--
-- Indexes for table `complaint_info`
--
ALTER TABLE `complaint_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_programs`
--
ALTER TABLE `events_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mem_info`
--
ALTER TABLE `mem_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_contribution`
--
ALTER TABLE `transaction_contribution`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `transaction_code` (`transaction_code`),
  ADD KEY `body_no` (`body_no`);

--
-- Indexes for table `transaction_donation`
--
ALTER TABLE `transaction_donation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `transaction_code` (`transaction_code`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `transaction_expenses`
--
ALTER TABLE `transaction_expenses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `transaction_code` (`transaction_code`),
  ADD KEY `transaction_expenses_ibfk_2` (`program_ID`);

--
-- Indexes for table `transaction_finance`
--
ALTER TABLE `transaction_finance`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `transaction_code` (`transaction_code`);

--
-- Indexes for table `transaction_payment`
--
ALTER TABLE `transaction_payment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `transaction_code` (`transaction_code`),
  ADD KEY `member_id` (`member_id`);

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
-- AUTO_INCREMENT for table `complaint_details`
--
ALTER TABLE `complaint_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint_info`
--
ALTER TABLE `complaint_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_programs`
--
ALTER TABLE `events_programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mem_info`
--
ALTER TABLE `mem_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction_contribution`
--
ALTER TABLE `transaction_contribution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_donation`
--
ALTER TABLE `transaction_donation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_expenses`
--
ALTER TABLE `transaction_expenses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_finance`
--
ALTER TABLE `transaction_finance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaction_payment`
--
ALTER TABLE `transaction_payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit_info`
--
ALTER TABLE `unit_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `unit_info`
--
ALTER TABLE `unit_info`
  ADD CONSTRAINT `unit_info_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `mem_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
