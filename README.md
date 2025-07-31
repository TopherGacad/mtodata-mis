Repository: tophergacad/mtodata-mis
Files analyzed: 115

Estimated tokens: 204.7k

Directory structure:
└── tophergacad-mtodata-mis/
    ├── README.md
    ├── database/
    │   └── mtodata.sql
    ├── public/
    │   ├── assets/
    │   │   └── trike_header.JPG
    │   ├── css/
    │   │   ├── addunit.css
    │   │   ├── complainantInfo.css
    │   │   ├── dashboard.css
    │   │   ├── donorinfo.css
    │   │   ├── editpages.css
    │   │   ├── edituser.css
    │   │   ├── loading.css
    │   │   ├── login.css
    │   │   ├── reports.css
    │   │   ├── termsofuse.css
    │   │   └── unitinfo.css
    │   └── images/
    ├── services/
    │   ├── addunit.js
    │   ├── dashboard.js
    │   ├── datetoday.js
    │   ├── donorinfo.js
    │   ├── editComplaint.js
    │   ├── editdonor.js
    │   ├── editMember.js
    │   ├── editprogram.js
    │   ├── edituser.js
    │   ├── exportComplainant.js
    │   ├── exportComplaint.js
    │   ├── exportdonor.js
    │   ├── exportFinance.js
    │   ├── exportMember.js
    │   ├── exportUnit.js
    │   ├── loading.js
    │   ├── login.js
    │   ├── unitinfo.js
    │   ├── viewComplainant.js
    │   └── viewmem.js
    └── views/
        ├── html/
        │   ├── dashboard.html
        │   └── login.html
        ├── pages/
        │   ├── adddonor.php
        │   ├── adddonor_tres.php
        │   ├── addunit.php
        │   ├── addunit_sec.php
        │   ├── donorinfo.php
        │   ├── donorinfo_tres.php
        │   ├── editComplainants.php
        │   ├── editComplainants_vice.php
        │   ├── editcomplaint.php
        │   ├── editcomplaint_vice.php
        │   ├── editmem.php
        │   ├── editmem_sec.php
        │   ├── editprograms.php
        │   ├── editprograms_vice.php
        │   ├── editunit.php
        │   ├── editunit_sec.php
        │   ├── edituser.php
        │   ├── insertComplainant.php
        │   ├── insertComplainant_vice.php
        │   ├── insertdonor.php
        │   ├── insertunit.php
        │   ├── termsofuse.php
        │   ├── unitinfo.php
        │   ├── unitinfo_sec.php
        │   ├── updatedonordetails.php
        │   ├── updatedonordetails_tres.php
        │   ├── updatedonorinfo.php
        │   ├── updatedonorinfo_tres.php
        │   ├── updatemem.php
        │   ├── updatemem_sec.php
        │   ├── updateprograms.php
        │   ├── updateprograms_vice.php
        │   ├── updateunit.php
        │   ├── updateunit_sec.php
        │   ├── updateuser.php
        │   ├── viewComplainants.php
        │   ├── viewComplainants_vice.php
        │   ├── viewComplaint.php
        │   ├── viewComplaint_vice.php
        │   ├── viewdonors.php
        │   ├── viewdonors_tres.php
        │   ├── viewevents.php
        │   ├── viewevents_tres.php
        │   ├── viewevents_vice.php
        │   ├── viewmem.php
        │   ├── viewmem_sec.php
        │   ├── viewmem_tres.php
        │   ├── viewunit.php
        │   └── viewunit_sec.php
        ├── php/
        │   ├── addevents.php
        │   ├── addfinancerecord.php
        │   ├── addmember.php
        │   ├── adduser.php
        │   ├── checkcontact.php
        │   ├── checkemail.php
        │   ├── checklicense.php
        │   ├── checkmemcontact.php
        │   ├── checkusername.php
        │   ├── complaints.php
        │   ├── dashboard.php
        │   ├── db_conn.php
        │   ├── delete_member.php
        │   ├── delete_user.php
        │   ├── deleteComplainant.php
        │   ├── deleteComplaint.php
        │   ├── deleteEvent.php
        │   ├── login.php
        │   ├── logout.php
        │   ├── secview.php
        │   ├── tre-auditview.php
        │   └── viceview.php
        └── reports/
            ├── balance_sheet.php
            ├── comp-report.php
            ├── con-report.php
            ├── don-report.php
            ├── ep.php
            ├── finance_IS.php
            ├── memcertification.php
            └── meminfo.php


================================================
FILE: README.md
================================================
# mtodata-mis
PUP Group-Capstone Project: Management Information System for Marulas Tricycle Operators and Drivers Association.

###How to Login?
1. Upload the database 'mtodata'
2. Login to mtodata system
3. Username: sampleadmin
4. email: admin@example.com
5. password: admin123




================================================
FILE: database/mtodata.sql
================================================
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



================================================
FILE: public/assets/trike_header.JPG
================================================
[Non-text file]


================================================
FILE: public/css/addunit.css
================================================
:root {
    --backdrop-color: #f3f3f3;
    --border-color: #DAE4F2;
    --primary-font-color: #404c57;
    --btn-hover: #677c8f;
    --def-white: #FFFFFF;
    --box-shadow: rgba(25, 39, 52, 0.08);
    --btn-color: #2490ef;
    --btn-save: #28a745;
    --update-hover: #1f7e35;
    --dark-blue: #1842BD;
    --link-color: #6764EE;
    --border-color: #BABABA;
    --base-color: #FEFEFE;
    --default-font-color: #282828;
    --active-dot:  #717171;
    --login-left: #ECF4FF;
    --error-color:#E53B34;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--backdrop-color);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--primary-font-color);
}

.head-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: fit-content;
    padding: 5px 15px;
    background-color: var(--def-white);
    border-bottom: 1px solid var(--border-color);
    position: fixed;
    width: 100%;
    z-index: 999;
    top: 0;
}

.main-logo {
    width: 100px;
}

.ot-header {
    width: 100vw;
    padding: 10px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, var(--dark-blue), var(--def-white));
    box-shadow: var(--box-shadow);
    position: fixed;
    top: 40px;
    right: 0;
}

.ot-header h3 {
    padding-left: 100px;
    color: var(--def-white);
}

.ot-header h3 a {
    padding-right: 10px;
    color: var(--def-white);
}

.content-container {
    margin-top: 120px;
    padding: 20px;
    z-index: 998;
    align-content: center;
}

.modal-btn {
    padding: 10px;
    border-radius: 5px;
    width: 60px;
    margin-right: 10px;
    border: none;
    color: var(--def-white);
    cursor: pointer;
    font-size: 12px;
    box-shadow: var(--box-shadow);
}

.view {
    color: var(--def-white);
    background-color: var(--primary-font-color);
    width: 70px;
}

.btn-container {
    margin-right: 60px;
}

.cancelBtn {
    background-color: var(--btn-color);
    color: var(--def-white);
}

.cancelBtn:hover {
    background-color: var(--btn-hover);
}

.update-btn {
    background-color: var(--btn-save);
}

.update-btn:hover {
    background-color: var(--update-hover);
}

.section img {
    width: 200px;
    height: 200px;
    margin-left: 15px;
    border: 1px solid var(--backdrop-color);

}

.fields {
    display: flex;
    flex-direction: column;
    padding: 10px 15px;
}

.fields label {
    padding-bottom: 5px;
}

.fields span {
    color: red;
}

form {
    display: flex;
    flex-direction: column;
    align-items: end;
}

.user-container,
.profile-container,
.password-container,
.pic-container,
.container {
    width: 75%;
    height: fit-content;
    margin-right: 5%;
    margin-bottom: 20px;
    background-color: var(--def-white);
    border-radius: 10px;
    box-shadow: var(--box-shadow);
    padding: 15px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.main {
    display: flex;
}

textarea {
    resize: none;
    height: 110px;
}

.fields input,
.fields select,
textarea {
    padding: 10px 15px;
    border-radius: 7px;
    border: 1px solid var(--border-color);
    background-color: var(--backdrop-color);
    font-weight: 100;
}

.section {
    width: 50%;
}

.see-password-container {
    margin-left: 13px;
}

/* TOAST */
.toast-container {
    display: flex;
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1000; 
    visibility: hidden;
}
.errortoast-container{
    display: flex;
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 28%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1000; 
    visibility: hidden;
}

.toast-icon {
    font-size: 25px;
}

.toast-left {
    background-color: var(--error-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success {
    background-color: var(--update-hover);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success,
.toast-left,
.toast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.toast-right p {
    padding-left: 15px;
    padding-right: 15px;
}



================================================
FILE: public/css/complainantInfo.css
================================================
:root {
    --backdrop-color: #f3f3f3;
    --border-color: #DAE4F2;
    --primary-font-color: #404c57;
    --btn-hover: #677c8f;
    --def-white: #FFFFFF;
    --box-shadow: rgba(25, 39, 52, 0.08);
    --btn-color: #2490ef;
    --btn-save: #28a745;
    --update-hover: #1f7e35;
    --dark-blue: #1842BD;
    --link-color: #6764EE;
    --border-color: #e2e2e2;
    --base-color: #FEFEFE;
    --default-font-color: #282828;
    --active-dot: #717171;
    --login-left: #ECF4FF;
    --error-color: #E53B34;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
    --hover-background: #ccd9eb;
}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--backdrop-color);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--primary-font-color);
}

main {
    height: 100vh;
}

.head-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: fit-content;
    padding: 5px 15px;
    background-color: var(--def-white);
    border-bottom: 1px solid var(--border-color);
    max-width: 100%;
}

.main-logo {
    width: 100px;
}

.ot-header {
    max-width: 100vw;
    padding: 10px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, var(--dark-blue), var(--def-white));
    box-shadow: var(--box-shadow);
}

.ot-header h3 {
    padding-left: 100px;
    color: var(--def-white);
}

.ot-header h3 a {
    padding-right: 10px;
    color: var(--def-white);
}

.modal-btn {
    padding: 10px;
    border-radius: 5px;
    width: 60px;
    margin-right: 10px;
    border: none;
    color: var(--def-white);
    cursor: pointer;
    font-size: 12px;
    box-shadow: var(--box-shadow);
}

.btn-container {
    margin-right: 60px;
}

.exportBtn {
    width: 35px;
    margin-right: 20px;
    padding: 10px;
    font-size: 13px;
    cursor: pointer;
    border: none;
    background-color: var(--dark-blue);
    color: var(--base-color);
    border-radius: 5px;
}

.unit-search {
    padding: 8px;
    border-radius: 5px;
    border: none;
    width: 170px;
}

.cancelBtn {
    background-color: var(--btn-color);
    color: var(--def-white);
    margin-left: 20px;
}

.cancelBtn:hover {
    background-color: var(--btn-hover);
}

.addunit-btn {
    background-color: var(--btn-save);
    width: 100px;
}

.addunit-btn:hover {
    background-color: var(--update-hover);
}

.content-container {
    height: fit-content;
    max-height: 80%;
    min-height: 40%;
    margin: 20px;
    overflow: auto;
    background-color: var(--base-color);
}

table {
    border-collapse: collapse;
    text-align: center;
}

th {
    width: 100%;
    padding: 10px 20px;
    position: sticky;
    top: 0;
    background-color: var(--hover-background);
    border-bottom: 1px solid var(--border-color);
    color: var(--dark-blue);
    font-weight: 900;
}

tr:hover {
    background-color: var(--hover-background);
}

td {
    padding: 10px;
    min-width: 300px;
    max-width: 300px;
    border-bottom: 1px solid var(--border-color);
}

.compId, .action{
    min-width: 90px;
    max-width: 90px;
}

.name,
.gender,
.phone{
    min-width: 300px;
    max-width: 300px;
}

.action .fa-solid {
    text-decoration: none;
    cursor: pointer;
    color: var(--dark-blue);
}

.fa-pen-to-square {
    padding-left: 5px;
}


/* TOAST */

.toast-container {
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1200;
    display: flex;
    visibility: hidden;
}

.toast-icon {
    font-size: 25px;
}

.toast-left {
    background-color: var(--error-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success {
    background-color: var(--update-hover);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success,
.toast-left,
.toast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.toast-right p {
    padding-left: 15px;
}

@media screen and (min-width: 1920px){
    td {
        padding: 10px;
        min-width: 340px;
        max-width: 340px;
        border-bottom: 1px solid var(--border-color);
    }
    
    .compId, .action{
        min-width: 340px;
        max-width: 340px;
    }
    
    .name,
    .gender,
    .phone{
        min-width: 340px;
        max-width: 340px;
    }
}


================================================
FILE: public/css/dashboard.css
================================================
/* COLOR */
:root {
    --base-color: #FEFEFE;
    --dark-blue: #1842BD;
    --font-color: #7EAFF6;
    --hover-background: #BCCDE4;
    --white-color: #FFFFFF;
    --content-font-color: #282828;
    --box-shadow: #00000040;
    --border-color: #DAE4F2;
    --green-color: #28a745;
    --bg-green: #e8ffec;
    --warning: #fab8c3;
    --dash-orange: #fac081;
    --dash-green: #98cf9a;
    --dash-yellow: #fcdc72;
    --dash-cyan: #75bdc7;
    --span-red: red;
    --dash-viewreport-bg: rgba(236, 236, 236, 0.842);
    --expired-bg: rgb(156, 156, 156);
    --error-color: #E53B34;
    --hard-bg: #ff9692;
    --bg-red:rgba(255, 230, 229, 0.884);
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
}

body {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Inter', sans-serif;
    font-size: 13px;
}

.bg-container {
    background-image: url('../../public/assets/mtodata_bg.png');
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    opacity: 0.1;
    height: 100vh;
    width: 100vw;
}

/* LAYOUT */
.top-design {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100vw;
    height: 6%;
    background: linear-gradient(to left, var(--dark-blue), var(--white-color));
    position: fixed;
    top: 0;
}

.top-user {
    color: var(--content-font-color);
    z-index: 9999;
    margin-left: 22%;
    justify-self: flex-start;
}

.top-user strong {
    color: var(--dark-blue);
}

.top-date {
    color: var(--base-color);
    z-index: 9999;
    padding-right: 20px;
    font-size: 12px;
    text-orientation: sideways-right;
    justify-self: flex-end;
}

/* SIDE NAV BAR */
.item-container {
    margin-top: 50px;
}

.side-nav {
    width: 20%;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    background-color: var(--base-color);
}

.header-nav {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 30px;
    color: #7EAFF6;
}

.logo {
    width: 100%;
}

.header-nav p {
    font-size: 12px;
    line-height: 0px;
}

ul {
    margin-top: 30px;
    padding: 0;
    list-style: none;
    height: 100%;
    width: 100%;
    text-align: center;
}

li {
    line-height: 50px;
    border-bottom: 1px solid #DAE4F2;
    color: var(--dark-blue);
    font-weight: 600;
    width: 100%;
    cursor: pointer;
}

ul a {
    text-decoration: none;
    color: var(--dark-blue);
}

li:hover {
    background-color: var(--hover-background);
    color: var(--content-font-color);
    transition: .5s;
}

/* MAIN CONTENT */
.dashboard-container {
    display: none;
    height: 80vh;
    /*from min height: 570px*/
    position: absolute;
    width: 75%;
    top: 7%;
    left: 22%;
}

.dashboard-container::-webkit-scrollbar {
    display: none;
}
.dash-header{
    height: 8%;
    width: 100%;
    display: flex;
    text-align: center;
    justify-content: left;
    color: var(--font-color);
}
.dash-header abbr{
    text-align: left;
    text-decoration:none ;
}

.dash-date{
    font-size: 14px;
    font-weight: 300;
    color: var(--font-color);
}
.top-dash {
    height: 27%;
    position: absolute;
    top: 45px;
}

.bottom-dash {
    display: flex;
    justify-content: space-between;
    position: absolute;
    width: 100%;
    bottom: 0;
    height: 60%;
}

.border {
    border-radius: 10px;
    box-shadow: 0px 2px 2px .5px var(--box-shadow);
    background-color: var(--base-color);
}

section {
    display: flex;
    justify-content: space-between;
    height: 50%;
    width: 100%;
}

.card {
    height: 100%;
    width: 23%;
    text-align: center;
}

.card-header {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    line-height: 0;
    box-shadow: 0px 0px 2px .5px var(--box-shadow);
    border-radius: 10px 10px 0px 0px;
    border-bottom: 1px solid var(--border-color);
    padding: 10px 0px;
    font-size: 14px;
    background-color: var(--base-color);
}

.card-header h4 {
    color: var(--dark-blue);
}

.card-icon {
    font-size: 20px;
    padding: 10px;
    border-radius: 10px;
}

.link-container {
    height: 10%;
    width: inherit;
    display: flex;
    justify-content: center;
    position: absolute;
    bottom: 0;
}

.link-container button {
    width: 100%;
    height: 100%;
    border-radius: 0px 0px 10px 10px;
    border: none;
    cursor: pointer;
    color: var(--content-font-color);
}
.link-container abbr{
    text-decoration: none;
    width: 100%;
}

.fa-user-group {
    background-color: var(--dash-orange);
    color: var(--white-color);
}

.fa-hand-holding-dollar,
.fa-money-bill-transfer {
    background-color: var(--dash-green);
    color: var(--white-color);
}

.fa-circle-dollar-to-slot,
.fa-sack-dollar {
    background-color: var(--dash-yellow);
    color: var(--white-color);
}

.fa-file-circle-exclamation {
    background-color: var(--dash-cyan);
    color: var(--white-color);
}

.fa-face-frown {
    background-color: #999999;
    color: var(--white-color);
}

.count-container {
    font-size: 20px;
    height: 40%;
    text-align: center;
}
.botleft-dash {
    height: 100%;
    width: 55%;
    overflow: auto;
    z-index: 1;
}

.botleft-dash th {
    padding: 5px;
    position: sticky;
    top: 58px;
    font-weight: 600;
    font-family: 'Roboto',sans-serif;
}
.finance_download{
    position: absolute;
    bottom: 20px;
    opacity: 0.6;
}
.finance_download:hover{
    opacity: 1;
}
.entry {
    position: sticky;
    top: 0;
}

.botright-dash {
    height: 100%;
    width: 40%;
    overflow: auto;
    z-index: 1;
}

.events {
    position: sticky;
    top: 0;
}

.events-link {
    position: sticky;
    bottom: 0;
    text-align: center;
    background-color: var(--border-color);
}

.dash-content {
    font-family: 'Roboto', sans-serif;
    padding: 5px;
}

.agenda-box {
    display: flex;
    align-items: center;
    padding: 5px 15px;
    border-bottom: 1px solid var(--border-color);
    color: var(--content-font-color);
    font-size: 13px;
}
.agenda-box i{
    font-size: 30px;
    color:var(--hover-background);
}
.detail-contain{
    display: flex;
    flex-direction: column;
    padding-left: 30px;
}
.dash-title{
    color: var(--dark-blue);
    margin: 1px;
    font-size: medium;
    font-weight: 600;
}
.dash-loc,.dash-time{
    color: var(--content-font-color);
    margin: 1px;
    font-size: small;
    font-weight: 500;
}



/* USER PANE */
.users-container,
.member-container,
.finance-container,
.complain-container,
.event-container {
    display: none;
    overflow: hidden;
    height: 85vh;
    width: 77%;
    position: absolute;
    top: 7%;
    left: 22%;
}

/* HEADER */
header {
    display: flex;
    justify-content: space-between;
    color: var(--font-color);
    padding: 12px 10px;
}

.head-left {
    display: block;
}

.head-right {
    display: flex;
    align-items: end;
}

.usermoreBtn,
.exportBtn,
.user-search,
.mem-search,
.adduserBtn,
.addmemBtn,
.addFinanceBtn,
.addComplainBtn,
.addEventBtn {
    margin-left: 20px;
}

header h3 {
    font-size: 19px;
    line-height: 0px;
}

.user-search,
.mem-search {
    margin-right: 0;
    width: 70%;
    height: 14px;
}

.adduserBtn,
.addmemBtn,
.addFinanceBtn,
.addComplainBtn,
.addEventBtn {
    background-color: var(--dark-blue);
    color: var(--white-color);
    width: 150px;
    border: none;
    border-radius: 10px;
    padding: 10px 15px;
    cursor: pointer;
}

.fields span {
    color: var(--span-red);
}

.field-container {
    display: flex;
    align-items: end;
    gap: 5px;
}

.donor {
    width: 66%;
}
.comp-contain{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row;
    width: 90%;
}
.add-donor{
    padding: 12px;
    width: 110%;
    border: none;
    font-size: 13px;
    text-align: center;
    cursor: pointer;
    color: var(--base-color);
    background-color: var(--dark-blue);
}
.add-complainant{
    padding: 12px;
    width: 150px;
    border: none;
    font-size: 13px;
    text-align: center;
    cursor: pointer;
    color: var(--base-color);
    background-color: var(--dark-blue);
}
.is-bud {
    display: flex;
    align-items: center;
    justify-content: start;
    margin-bottom: 5px;
}

.is-bud input {
    width: fit-content;
    margin-right: 10px;
}

.is-bud label {
    padding: 0;
}

.usermoreBtn,
.exportBtn,
.user-searchBtn,
.mem-searchBtn {
    background-color: var(--dark-blue);
    color: var(--white-color);
    border: none;
    border-radius: 10px;
    padding: 10px;
    cursor: pointer;
}

.fa-plus {
    font-size: 12px;
}

.adduserBtn:hover,
.addmemBtn:hover {
    background-color: #7EAFF6;
}

main {
    background-color: var(--base-color);
    border: none;
    height: 80%;
    overflow-y: scroll;
}

main::-webkit-scrollbar {
    display: none;
}

.botright-dash::-webkit-scrollbar {
    display: none;
}

.botleft-dash::-webkit-scrollbar {
    display: none;
}

table {
    width: 100%;
    text-align: center;
    border-collapse: collapse;
    background-color: var(--white-color);
}

abbr {
    text-decoration: none;
}
th {
    background-color: var(--border-color);
    padding: 15px;
    font-size: 15px;
    color: var(--dark-blue);
    position: sticky;
    top: 0;
}
/* .table-container td{
    font-weight: 600;
    font-family: 'Ronoto',sans-serif;
} */
.debit-row {
    background-color:var(--bg-green);
}
.debit-row:hover{
    background-color:var(--dash-green);
}

.credit-row {
    background-color:var(--bg-red);
}
.credit-row:hover{
    background-color:var(--hard-bg);
}
td {
    padding: 10px 5px;
}
.id,
.action,
.date,
.time {
    min-width: 60px;
    max-width: 60px;
}

.username,
.memname,
.name,
.location {
    min-width: 140px;
    max-width: 140px;
}

.email,
.title,
.contact,
.comp-date {
    min-width: 120px;
    max-width: 120px;
}

.role,
.amount,
.code {
    min-width: 90px;
    max-width: 90px;
}

.type {
    min-width: 50px;
    max-width: 50px;
}

tr {
    border-bottom: 1px solid var(--border-color);
}

/* ACTIVE ^ EXPIRED STATUS STYLING */
.Active,
.Expired {
    height: fit-content;
    width: 60%;
    border-radius: 10px;
    font-size: 13px;
    margin: 0px auto;
    color: var(--base-color);
}

.Active p,
.Expired p {
    margin: 0px;
}

.Active {
    background-color: var(--green-color);
}

.Expired {
    background-color: var(--expired-bg);
}

tr:hover {
    background-color: var(--hover-background);
}

.tools {
    background-color: transparent;
    color: var(--dark-blue);
    font-size: 16px;
    padding: 0 3px;
    cursor: pointer;
}

/* FOOTER */
footer {
    justify-content: space-around;
    height: 5%;
    width: 100vw;
    position: fixed;
    bottom: 0;
    background-color: var(--font-color);
    font-size: 9px;
    color: var(--dark-blue);
    z-index: 11;
}

.flex {
    display: flex;
    align-items: center;
}

.border-right {
    border-right: 1px solid var(--dark-blue);
    padding-right: 10px;
    padding-left: 5px;
    margin-right: 5px;
}

.link-footer a:hover {
    color: var(--base-color);
}

/* STYLES TO TOGGLE */
.active {
    display: block;
}

.hide {
    display: none;
}

.btn-active {
    background-color: var(--dark-blue);
    color: var(--white-color);
}

.modal-active {
    display: block;
}

.bg {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(2px);
}

input:disabled,
select:disabled {
    color: #999999;
    background-color: #dddddd;
}

input[type="button"]:disabled {
    color: #999999;
    background-color: #123292;
    cursor: not-allowed;
}

/* MODALS */
.addUser-modal-container,
.addMem-modal-container,
.addFinance-modal-container,
.addComplaint-modal-container,
.addEvent-modal-container {
    display: none;
    flex-direction: column;
    width: 70%;
    height: fit-content;
    border-radius: 10px;
    position: fixed;
    background-color: var(--base-color);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 9999;
    padding: 15px;
}

.modal-title {
    border-bottom: 1px solid var(--border-color);
    padding-left: 10px;
    padding-bottom: 5px;
    color: var(--dark-blue);
}

.form-container {
    display: flex;
}

.modal-title {
    border-bottom: 1px solid var(--border-color);
    padding-left: 10px;
    padding-bottom: 5px;
    color: var(--dark-blue);
}

.addForm {
    width: 100vw;
    padding: 0px 20px;
}

form {
    display: flex;
    flex-direction: column;
    padding: 20px;
    height: 100%;
}

.fields {
    display: flex;
    flex-direction: column;
    padding-bottom: 10px;
    font-size: 16px;
}

.fix-bud {
    display: flex;
}


.fields input,
.fields select {
    padding-left: 15px;
}

label {
    padding-bottom: 5px;
}

input,
select {
    padding: 10px;
    font-size: 16px;
    width: 85%;
    border-radius: 5px;
    border: 1px solid var(--border-color);
    color: var(--content-font-color);
}

#mem-license::placeholder,
#mem-contact::placeholder {
    font-size: 14px;
}

select {
    width: 90%;
    color: #1842BD;
}

.see-password-container {
    display: flex;
    align-items: center;
    justify-content: start;
}

.see-pass {
    width: fit-content;
}

.see-pass-label {
    padding-bottom: 0;
}

.btn-container {
    display: flex;
    align-items: center;
    justify-content: start;
    padding: 0;
}

.btn-container button,
.cancel-btn {
    width: 100px;
    margin-top: 15px;
    margin-left: 5px;
    padding: 10px;
    font-size: 13px;
    cursor: pointer;
    border: none;
    color: var(--white-color);
    border-radius: 5px;
}

.save-btn {
    background-color: var(--green-color);
}

.cancel-btn {
    background-color: var(--dark-blue);
}

/* ADD COMPLAINT MODAL */
textarea {
    resize: none;
    width: 90%;
    border: 1px solid var(--border-color);
    font-size: 16px;
    padding: 10px;
    color: var(--content-font-color);
    font-family: 'Roboto', sans-serif;
}

.timeDate-container {
    display: flex;
    align-items: center;
    gap: 20px;
}

/* EDIT USER MODAL */
.editUser-modal-container,
.editMember-modal-container {
    display: none;
    flex-direction: column;
    width: 65%;
    height: 75%;
    border-radius: 10px;
    position: fixed;
    background-color: var(--base-color);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 9999;
    padding: 15px;
}

.user-details-container,
.member-details-container {
    padding: 10px 20px 40px 20px;
    display: flex;
    align-items: start;
    justify-content: space-between;
    height: 65%;
}

.user-details-container .fa-pen-to-square {
    padding: 20px;
    font-size: 20px;
    cursor: pointer;
}

.user-details-container .fa-pen-to-square:hover {
    color: var(--hover-background);
}

.user-icon {
    width: 50;
    height: 50%;
    border-radius: 50%;
    padding: 20px;
}

.details .status {
    text-align: center;
    padding: 1px;
    background-color: var(--dash-green);
    color: var(--base-color);
    width: 50%;
    border-radius: 10px;
}

.details p {
    font-size: 15px;
    color: var(--content-font-color);
    font-family: 'Roboto', sans-serif;
    line-height: 5px;
}

.details h4 {
    font-size: 16px;
    color: var(--dark-blue);
    font-weight: 600;
    font-family: 'Roboto', sans-serif;
    padding-bottom: 10px;
}

.details-left {
    padding: 20px 60px 0px 50px;
    width: 90%;
}

.details-right {
    padding: 20px 40px 0px 40px;
    width: 110%;
}


/* TOAST */
.toast-container,
.show {
    display: none;
    position: fixed;
    bottom: 7%;
    right: 1%;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: var(--warning);
    border: none;
    box-shadow: 2px 1px 2px 2px var(--border-color);
    border-radius: 5px;
    height: 15%;
    width: 30%;
    animation: show_toast 0.4s ease forwards;
}
.toast-container::before {
    position: absolute;
    content: "";
    height: 3px;
    width: 100%;
    bottom: 0px;
    left: 0px;
    animation: progress 7s linear forwards;
    background-color: red;
}

@keyframes progress {
    100% {
        width: 0%;
    }
}

/* ERROR TOAST */
.warningToast-container {
    display: none;
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
}

.warningToast-icon {
    font-size: 25px;
}

.warningToast-left {
    background-color: var(--dash-yellow);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.warningToast-left,
.warningToast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.warningToast-right p {
    padding-left: 15px;
}

/* SUCCESSFUL TOAST NOTIF */
.successToast-container {
    display: none;
    position: fixed;
    align-items: center;
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    background-color: var(--base-color);
    color: var(--toast-font-color);
}

.successToast-icon {
    font-size: 25px;
}

.successToast-left {
    background-color: var(--green-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.successToast-left,
.successToast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.successToast-right p {
    padding-left: 25px;
}

/* ASH SUCCESS-TOAST */
.success-toast-container {
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1200;
    display: flex;
    visibility: hidden;
}

.toast-icon {
    font-size: 25px;
}

.toast-left-success {
    background-color: var(--green-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success,
.toast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.toast-right p {
    padding-left: 25px;
}

/* FOR RESPONSIVENESS */
@media screen and (min-width: 1600px) {

    /* SIDE NAVBAR */
    .side-nav {
        width: 21%;
    }

    .header-nav p {
        font-size: 17px;
    }

    .item-container {
        margin-top: 50px;
    }

    li {
        font-size: 17px;
        line-height: 55px;
    }

    /* DASHBOARD PANE */
    .dashboard-container {
        left: 23%;
    }

    .count-container {
        top: 20%;
        font-size: 35px;
    }

    /* USER PANE */
    header {
        padding: 10px;
    }

    header p {
        font-size: 16px;
    }

    header h3 {
        font-size: 20px;
    }

    .usermoreBtn {
        padding: 12px 13px;
        font-size: 15px;
    }

    .user-search,
    .mem-search {
        height: 18px;
        margin-left: 10px;
    }

    .adduserBtn,
    .addmemBtn,
    .addFinanceBtn,
    .addComplainBtn,
    .addEventBtn {
        width: 150px;
        font-size: 15px;
        padding: 12px 10px;
        margin-left: 10px;
    }

    th {
        padding: 20px;
        font-size: 18px;
    }

    td {
        padding: 15px 0px;
        font-size: 16px;
    }

    /* FOOTER */
    footer {
        font-size: 11px;
    }

    /* EDIT USER MODAL */
    .editUser-modal-container,
    .editMember-modal-container {
        display: none;
        flex-direction: column;
        width: 65%;
        height: 60%;
        border-radius: 10px;
        position: fixed;
        background-color: var(--base-color);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 9999;
        padding: 15px;
    }

    .btn-container button,
    .cancel-btn {
        width: 120px;
        font-size: 16px;
    }
}

@media screen and (min-width: 1920px) {
    .item-container {
        margin-top: 80px;
    }

    li {
        font-size: 20px;
        line-height: 65px;
    }

    .adduserBtn,
    .addmemBtn,
    .addFinanceBtn,
    .addComplainBtn,
    .addEventBtn {
        width: 170px;
        font-size: 15px;
        padding: 12px 10px;
        margin-left: 10px;
    }

    /* EDIT USER MODAL */
    .editUser-modal-container,
    .editMember-modal-container {
        height: 60%;
        padding: 15px;
    }

    .user-details-container,
    .member-details-container {
        padding: 20px 20px 50px 20px;
    }

    .user-details-container .fa-pen-to-square {
        padding: 25px;
        font-size: 22px;
    }

    .details p {
        font-size: 17px;
        line-height: 7px;
    }

    .details h4 {
        font-size: 18px;
    }

    .btn-container button,
    .cancel-btn {
        width: 130px;
        margin-left: 10px;
        padding: 15px;
        font-size: 18px;
    }
}



/*Reports CSS*/

.report {
    margin-top: 20px;
    margin-bottom: 20px;
    page-break-inside: avoid;
    text-transform: uppercase;
    border: none;
}

.report th {
    margin: 8px 0;
    font-size: 9pt;
    color: #282828;
    background-color: white;
}

.report td {
    font-size: 8pt;
    text-align: center;

}

#cert_wrapp {
    page-break-inside: avoid;
}

.report tr {
    page-break-inside: avoid;
}

#imgplaceholder {
    height: .7in;
    width: .7in;
}

.top p {
    font-size: 10pt;
    margin: 5px 0;
    letter-spacing: 1px;
}

.top {
    margin-bottom: 10px;
    text-align: center;
}

#top_title {
    font-size: 12pt;
    font-weight: 700;
}

#top_title2 {
    font-size: 12pt;
    font-weight: 700;
    text-align: left;
}

.header_IS #topper {
    display: flex;
    justify-content: space-between;
}

.contents #end {
    text-align: center;
}

.finance-table {
    page-break-inside: avoid;
    border: none;
}

.finance-table tr {
    border: none;
    text-align: left;
    padding: 0;
}

.finance-table td {
    padding: 3px;
}

.finance-table .to_hide {
    color: white;
}

.IS_amount {
    text-align: right;
}

.IS_statements {
    border-color: white;
}

.to_hide {
    color: white;
}

.IS_amount.total_IS {
    border-bottom: 1px solid black;
}

.finance-table .tr_head {
    font-weight: bold;
    padding: 10px 0;
}

.header_IS {
    margin-bottom: 20px;
}

.wrapper {
    page-break-before: always;
}

.wrapper:first-child {
    page-break-before: avoid;
}

.finance-table .td_IS {
    padding-left: 20px;
}

.finance-table2 {
    page-break-inside: avoid;
    border: none;
}

.finance-table2 tr {
    border: none;
    text-align: center;
    padding: 0;
    page-break-inside: avoid;
}

.finance-table2 .tr_head {
    color: #282828;
    background-color: white;
}

.finance-table2 td {
    padding: 3px 0;
    page-break-inside: avoid;
    font-size: 9pt;
}

.EPName {
    font-size: 22pt;
    margin: 50px 0 0;
    text-align: center;
}

.det {
    font-size: 10pt;
    margin: 15px 0;
    font-weight: 600;
}

.det_wrap {
    display: flex;
    align-items: center;
    height: 20px;
}

.detret {
    font-size: 9pt;
}

.det_con_Desc {
    font-size: 9pt;
    page-break-inside: avoid;
}

.det_con {
    margin-bottom: 20px;
}

#center_format {
    text-align: center;
    margin-bottom: 50px;
}

#warningToast2 {
    z-index: 9999;
}




================================================
FILE: public/css/donorinfo.css
================================================
:root {
    --backdrop-color: #f3f3f3;
    --border-color: #DAE4F2;
    --primary-font-color: #404c57;
    --btn-hover: #677c8f;
    --def-white: #FFFFFF;
    --box-shadow: rgba(25, 39, 52, 0.08);
    --btn-color: #2490ef;
    --btn-save: #28a745;
    --update-hover: #1f7e35;
    --dark-blue: #1842BD;
    --link-color: #6764EE;
    --border-color: #e2e2e2;
    --base-color: #FEFEFE;
    --default-font-color: #282828;
    --active-dot: #717171;
    --login-left: #ECF4FF;
    --error-color: #E53B34;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
    --hover-background: #ccd9eb;
}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--backdrop-color);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--primary-font-color);

}

main {
    height: 100vh;
}

.head-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: fit-content;
    padding: 5px 15px;
    background-color: var(--def-white);
    border-bottom: 1px solid var(--border-color);
    max-width: 100%;
}

.main-logo {
    width: 100px;
}

.ot-header {
    max-width: 100vw;
    padding: 10px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, var(--dark-blue), var(--def-white));
    box-shadow: var(--box-shadow);
}

.ot-header h3 {
    padding-left: 100px;
    color: var(--def-white);
}

.ot-header h3 a {
    padding-right: 10px;
    color: var(--def-white);
}

.modal-btn {
    padding: 10px;
    border-radius: 5px;
    width: 60px;
    margin-right: 10px;
    border: none;
    color: var(--def-white);
    cursor: pointer;
    font-size: 12px;
    box-shadow: var(--box-shadow);
}

.btn-container {
    margin-right: 60px;
}
.exportBtn{
    width: 35px;
    margin-right: 20px;
    padding: 10px;
    font-size: 13px;
    cursor: pointer;
    border: none;
    background-color: var(--dark-blue);
    color: var(--base-color);
    border-radius: 5px;
}
.unit-search {
    padding: 8px;
    border-radius: 5px;
    border: none;
    width: 170px;
}

.cancelBtn {
    background-color: var(--btn-color);
    color: var(--def-white);
    margin-left: 20px;
}

.cancelBtn:hover {
    background-color: var(--btn-hover);
}

.addunit-btn {
    background-color: var(--btn-save);
    width: 100px;
}

.addunit-btn:hover {
    background-color: var(--update-hover);
}

.content-container {
    height: fit-content;
    max-height: 80%;
    min-height: 40%;
    margin: 20px;
    overflow: auto;
    background-color: var(--base-color);
}

table {
    border-collapse: collapse;
    text-align: center;
}

th {
    width: 100%;
    padding: 10px 20px;
    position: sticky;
    top: 0;
    background-color: var(--hover-background);
    border-bottom: 1px solid var(--border-color);
    color: var(--dark-blue);
    font-weight: 900;
}

tr:hover {
    background-color: var(--hover-background);
}

td {
    padding: 10px;
    min-width: 100px;
    max-width: 100px;
    border-bottom: 1px solid var(--border-color);
}

.id {
    min-width: 50px;
    max-width: 50px;
}

.name {
    min-width: 160px;
    max-width: 160px;
}

.gender,
.city,
.phone,
.email,
.street,
.barangay,
.date {
    min-width: 120px;
    max-width: 120px;
}

.action {
    max-width: 60px;
    min-width: 60px;
}

.action .fa-solid {
    text-decoration: none;
    cursor: pointer;
    color: var(--dark-blue);
}

.fa-eye{
    padding-left: 5px;
}

/* TOAST */
.toast-container {
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1200;
    display: flex;
    visibility: hidden;
}

.toast-icon {
    font-size: 25px;
}

.toast-left {
    background-color: var(--error-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success {
    background-color: var(--update-hover);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success,
.toast-left,
.toast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.toast-right p {
    padding-left: 15px;
}



@media screen and (min-width: 1920px) {
    
td {
    padding: 10px;
    min-width: 160px;
    max-width: 160px;
    border-bottom: 1px solid var(--border-color);
}
th{
    min-width: 160px;
    max-width: 160px;
}
.id {
    min-width: 100px;
    max-width: 100px;
}

.name {
    min-width: 160px;
    max-width: 160px;
}

.gender,
.city,
.phone,
.email,
.street,
.barangay,
.date {
    min-width: 160px;
    max-width: 160px;
}

.action {
    max-width: 100px;
    min-width: 100px;
}

}


================================================
FILE: public/css/editpages.css
================================================
:root {
    --backdrop-color: #f3f3f3;
    --border-color: #DAE4F2;
    --primary-font-color: #404c57;
    --btn-hover: #677c8f;
    --def-white: #FFFFFF;
    --box-shadow: rgba(25, 39, 52, 0.08);
    --btn-color: #2490ef;
    --btn-save: #28a745;
    --update-hover: #1f7e35;
    --dark-blue: #1842BD;
    --base-color: #FEFEFE;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
    --green-color: #28a745;
    --default-font-color: #282828;
    --active-dot: #717171;
    --error-color: #E53B34;
    --expired-bg: rgb(156, 156, 156);
    --dash-green: #42A147;

}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--backdrop-color);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--primary-font-color);
}

.head-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: fit-content;
    padding: 5px 15px;
    background-color: var(--def-white);
    border-bottom: 1px solid var(--border-color);
    position: fixed;
    width: 100%;
    z-index: 999;
    top: 0;
}

.main-logo {
    width: 100px;
}

.ot-header {
    width: 100vw;
    padding: 10px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, var(--dark-blue), var(--def-white));
    box-shadow: var(--box-shadow);
    position: fixed;
    top: 40px;
    right: 0;
}

.ot-header h3 {
    padding-left: 100px;
    color: var(--def-white);
}

.ot-header h3 a {
    padding-right: 10px;
    color: var(--def-white);
}

.content-container {
    margin-top: 120px;
    padding: 20px;
    z-index: 998;
    align-content: center;
}

.modal-btn {
    padding: 10px;
    border-radius: 5px;
    width: 60px;
    margin-right: 10px;
    border: none;
    color: var(--def-white);
    cursor: pointer;
    font-size: 12px;
    box-shadow: var(--box-shadow);
}

.view,
.donorlist {
    color: var(--def-white);
    background-color: var(--primary-font-color);
    width: 70px;
}

.donorlist {
    width: 80px;
}

.btn-container {
    margin-right: 60px;
}

.cancelBtn {
    background-color: var(--btn-color);
    color: var(--def-white);
}

.cancelBtn:hover {
    background-color: var(--btn-hover);
}

.update-btn {
    background-color: var(--btn-save);
}

.update-btn:hover {
    background-color: var(--update-hover);
}

.section img {
    width: 200px;
    height: 200px;
    margin-left: 15px;
    border: 1px solid var(--backdrop-color);

}

.fields {
    display: flex;
    flex-direction: column;
    padding: 10px 15px;
}

.fields label {
    padding-bottom: 5px;
}

.fields span {
    color: red;
}

form {
    display: flex;
    flex-direction: column;
    align-items: end;
}

.user-container,
.profile-container,
.password-container,
.pic-container,
.container {
    width: 75%;
    height: fit-content;
    margin-right: 5%;
    margin-bottom: 20px;
    background-color: var(--def-white);
    border-radius: 10px;
    box-shadow: var(--box-shadow);
    padding: 15px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.main {
    display: flex;
}

textarea {
    resize: none;
    height: 110px;
}

.fields input,
.fields select,
textarea {
    padding: 10px 15px;
    border-radius: 7px;
    border: 1px solid var(--border-color);
    background-color: var(--backdrop-color);
    font-weight: 100;
}

.section {
    width: 50%;
}

.see-password-container {
    margin-left: 13px;
}

/* TOAST */
.toast-container {
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1200;
    display: flex;
    visibility: hidden;
}

.toast-icon {
    font-size: 25px;
}

.toast-left {
    background-color: var(--error-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success {
    background-color: var(--update-hover);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success,
.toast-left,
.toast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.toast-right p {
    padding-left: 15px;
}

/* ACTIVE ^ EXPIRED STATUS STYLING */
.Active,
.Expired {
    align-self: end;
    height: fit-content;
    height: 15px;
    width: 20%;
    padding: 5px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    color: var(--base-color);
    text-align: center;
}

.Active p,
.Expired p {
    margin: 0px;
}

.Active {
    background-color: var(--dash-green);
}

.Expired {
    background-color: var(--expired-bg);
}

.finance-logs {
    width: 100%;
    text-align: center;
}

.finance-logs th {
    padding-bottom: 10px;
    border-bottom: solid 1px;
}

.finance-logs td {
    padding: 10px 0;
}


================================================
FILE: public/css/edituser.css
================================================
:root {
    --backdrop-color: #f3f3f3;
    --border-color: #DAE4F2;
    --primary-font-color: #404c57;
    --btn-hover: #677c8f;
    --def-white: #FFFFFF;
    --box-shadow: rgba(25, 39, 52, 0.08);
    --btn-color: #2490ef;
    --btn-save: #28a745;
    --update-hover: #1f7e35;
    --dark-blue: #1842BD;

    --base-color: #FEFEFE;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
    --green-color:  #28a745;

    --link-color: #6764EE;
    --border-color: #BABABA;
    --base-color: #FEFEFE;
    --default-font-color: #282828;
    --active-dot:  #717171;
    --login-left: #ECF4FF;
    --error-color:#E53B34;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);

}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--backdrop-color);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--primary-font-color);
}

.head-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: fit-content;
    padding: 5px 15px;
    background-color: var(--def-white);
    border-bottom: 1px solid var(--border-color);
    position: fixed;
    width: 100%;
    z-index: 999;
    top: 0;
}

.main-logo {
    width: 100px;
}

.ot-header {
    width: 100vw;
    padding: 10px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, var(--dark-blue), var(--def-white));
    box-shadow: var(--box-shadow);
    position: fixed;
    top: 40px;
    right: 0;
}

.ot-header h3 {
    padding-left: 100px;
    color: var(--def-white);
}

.ot-header h3 a {
    padding-right: 10px;
    color: var(--def-white);
}

.content-container {
    margin-top: 120px;
    padding: 20px;
    z-index: 998;
    align-content: center;
}

.modal-btn {
    padding: 10px;
    border-radius: 5px;
    width: 60px;
    margin-right: 10px;
    border: none;
    color: var(--def-white);
    cursor: pointer;
    font-size: 12px;
    box-shadow: var(--box-shadow);
}

.view {
    color: var(--def-white);
    background-color: var(--primary-font-color);
    width: 70px;
}

.btn-container {
    margin-right: 60px;
}

.cancelBtn {
    background-color: var(--btn-color);
    color: var(--def-white);
}

.cancelBtn:hover {
    background-color: var(--btn-hover);
}

.update-btn {
    background-color: var(--btn-save);
}

.update-btn:hover {
    background-color: var(--update-hover);
}

.section img {
    width: 200px;
    height: 200px;
    margin-left: 15px;
    border: 1px solid var(--backdrop-color);

}

.fields {
    display: flex;
    flex-direction: column;
    padding: 10px 15px;
}

.fields label {
    padding-bottom: 5px;
}

.fields span {
    color: red;
}

form {
    display: flex;
    flex-direction: column;
    align-items: end;
}

.user-container,
.profile-container,
.password-container,
.pic-container,
.container {
    width: 75%;
    height: fit-content;
    margin-right: 5%;
    margin-bottom: 20px;
    background-color: var(--def-white);
    border-radius: 10px;
    box-shadow: var(--box-shadow);
    padding: 15px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.main {
    display: flex;
}

textarea {
    resize: none;
    height: 110px;
}

.fields input,
.fields select,
textarea {
    padding: 10px 15px;
    border-radius: 7px;
    border: 1px solid var(--border-color);
    background-color: var(--backdrop-color);
    font-weight: 100;
}

.section {
    width: 50%;
}

.see-password-container {
    margin-left: 13px;
}

/* TOAST */
.toast-container {
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1000; 
    display: none;
}

.toast-icon {
    font-size: 25px;
}

.toast-left {
    background-color: var(--error-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success {
    background-color: var(--update-hover);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success,
.toast-left,
.toast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.toast-right p {
    padding-left: 15px;
}




================================================
FILE: public/css/loading.css
================================================
:root{
    --light-blue:#3498db;
}
/* LOADING SCREEN STYLING */
  #loading-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ffffff;
}
.background-wrapper{
    width: 100%;
    height: 100%;
    position: absolute;
    background-image: url(../../public/assets/mtodata_bg.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.07;
}
.logo-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.logo {
    width: 250px;
    height: auto;
}

.loading-bar {
    width: 200px;
    height: 10px;
    border-radius: 15px;
    margin-top: 10px;
    position: relative;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
  .loading-bar{
    top: 0;
    left: 0;
    border: 5px solid var(--base-color); 
    border-top: 5px solid var(--light-blue) ; 
    border-radius: 50%;
    width: 32px;
    height: 32px;
    animation: spin 2s linear infinite;
  }


================================================
FILE: public/css/login.css
================================================
            /* C O L O R */
:root{
    --dark-blue: #1842BD;
    --link-color: #6764EE;
    --border-color: #BABABA;
    --base-color: #FEFEFE;
    --default-font-color: #282828;
    --active-dot:  #717171;
    --login-left: #ECF4FF;
    --error-color:#E53B34;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
}
body{
    margin: 0;
    padding: 0;
    font-family: 'Inter',sans-serif;
    color: var(--default-font-color);
    box-sizing: border-box;
    max-height: 100vh;
    overflow: hidden;
}
.bg-container{
    height: 100vh;
    width: 100vw;
    position: relative;
    background-image:url('../../public/assets/mtodata_bg.png');
    background-size: cover;
    opacity: 0.4;
}

        /*L A Y O U T */
.login-container{
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    position: fixed;
    margin: auto;
    height: 500px;
    width: 800px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    background-color: var(--base-color);
}
.login-container, 
input, 
.login-btn{
    border-radius: 20px;
    border: 1px solid var(--border-color);
}

/* LOGIN LEFT-SIDE */
.left-side{
    text-align: center;
    width: 400px;
    height: 500px;
    border-right: 1px solid var(--border-color);
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    position: relative;
    background-color: var(--login-left);
}
.carousel-img{
    padding-top: 40px;
    width: 230px;
}
.dot-container{
    position: absolute;
    bottom: 50px;
    left: 0;
    right: 0;
}
.dot {
    height: 14px;
    width: 14px;
    margin: 0 2px;
    background-color: var(--border-color);
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
}
.active{
    background-color: var(--active-dot);
}
.img-slides{
    position: absolute;
    padding: 5px 15px;
    margin: 7px;
}
.img-slides p{
    font-size: 14px;
}


/* LOGIN RIGHT-SIDE */
.right-side{
    align-items: center;
    width: 400px;
    height: 500px;
}
.logo{
    padding: 30px;
    width: 267px;
}

.field,
.login-btn{
    font-size: 15px;
    padding: 10px;
}
.field,
.right-side{
    display: flex;
    flex-direction: column;
}
input{
    font-size: 15px;
    padding: 10px 20px;
    width: 290px;
    margin-top: 10px;
}
input::placeholder{
    padding-left: 5px;
}
.login-btn{
    margin: 30px 0px 20px 0px;
    height: 40px;
    width: 340px;
    background-color: var(--dark-blue);
    color: whitesmoke;
    font-weight: 300;
    cursor: pointer;
}
.login-btn:hover{
    background-color: var(--link-color);
}

/* TOAST */
.toast-container{
    display: flex;
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    visibility: hidden;
}
.toast-icon{
    font-size: 25px;
}
.toast-left{
    background-color: var(--error-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}
.toast-left, .toast-right{
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.toast-right p{
    padding-left: 15px;
    font-size: 15px;
}

.terms-container{
    border-radius: 50%;
    height: 50px;
    width: 50px;
    background-color: var(--dark-blue);
    position: absolute;
    bottom: 4%;
    right: 4%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 4px rgba(0.2, 0.2, 0.2, 0.4);
    cursor: pointer;
}
.term-icon{
    position: relative;
    font-size: 27px;
    text-decoration: none;
    color: var(--base-color);
}
.terms-container:hover{
    background-color: #6764EE;
    transition: .4s;
}




================================================
FILE: public/css/reports.css
================================================
* {
    font-family: Arial, Helvetica, sans-serif;
}

html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: auto;
}

p {
    page-break-inside: avoid;
}


.container {
    background-color: white;
    margin: 0 .5in 1in;
    min-height: calc(100vh - 2in);
    box-sizing: border-box;
    position: relative;
    padding-bottom: 50px;
}

.header {
    margin-bottom: 20px;
}

.det {
    font-size: 10pt;
    margin: 15px 0;
    font-weight: 600;
}

.det_wrap {
    display: flex;
    align-items: center;
    height: 20px;
}

.detret {
    font-size: 9pt;
}

.det_con_Desc {
    font-size: 9pt;
}

.det_con {
    margin-bottom: 20px;
}

.footer {
    border-top: 1px solid;
    padding-top: 10px;
    font-size: 9pt;
    font-style: italic;
    position: fixed;
    bottom: 0;
    width: auto;
    box-sizing: border-box;
}

#center_format {
    text-align: center;
    margin-bottom: 50px;
}

.EPName {
    font-size: 22pt;
    margin: 50px 0 0;
    text-align: center;
}

table {
    margin-top: 20px;
    margin-bottom: 20px;
    page-break-inside: avoid;
    width: 100%;
}

.mem_info {
    border-collapse: collapse;
}

.mem_info th {
    margin: 10px 0;
    font-size: 10pt;
    border: thin solid rgb(158, 158, 158);
}

.mem_info td {
    font-size: 9pt;
    text-align: center;
    border: thin solid rgb(158, 158, 158);
}

table tr {
    page-break-inside: avoid;
}

#imgplaceholder {
    height: .7in;
    width: .7in;
}

.top p {
    font-size: 10pt;
    margin: 5px 0;
    letter-spacing: 1px;
}

.top {
    margin-bottom: 10px;
    text-align: center;
}

#top_title {
    font-size: 12pt;
    font-weight: 700;
}

.top .detret {
    font-size: 12pt;
    letter-spacing: 3px;
    margin: 30px 0;
}

.cert_wrap {
    line-height: 1.5;
    font-size: 9.5pt;
    text-align: justify;
}

#cert_wrap01 {
    margin-left: 40px;
}

#signature {
    text-align: right;
}

#cert_con {
    padding: 0 10px;
}

#cert_wrapp {
    page-break-inside: avoid;
}

#top_IS {
    font-size: 12pt;
}

.header_IS {
    margin-bottom: 20px;
}

.IS_amount {
    text-align: right;
}

.to_hide {
    color: white;
}

.IS_amount.total_IS {
    border-bottom: 1px solid black;
}

.tr_head {
    font-weight: bold;
    padding-bottom: 10px;
}




================================================
FILE: public/css/termsofuse.css
================================================
:root {
    --backdrop-color: #f0f0f0;
    --border-color: #DAE4F2;
    --primary-font-color: #404c57;
    --btn-hover: #677c8f;
    --def-white: #FFFFFF;
    --box-shadow: rgba(25, 39, 52, 0.08);
    --btn-color: #2490ef;
    --btn-save: #28a745;
    --update-hover: #1f7e35;
    --dark-blue: #1842BD;
    --font-color: #7EAFF6;
    --link-color: #6764EE;
    --border-color: #BABABA;
    --base-color: #FEFEFE;
    --default-font-color: #282828;
    --active-dot:  #717171;
    --login-left: #ECF4FF;
    --error-color:#E53B34;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
}

body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    box-sizing: border-box;
    background-color: var(--backdrop-color);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--primary-font-color);
    line-height: 18px;
    text-align: justify;
    overflow-x: hidden;
}

/* HEADER */
.head-container {
    display: flex;
    align-items: center;
    height: fit-content;
    padding: 5px 15px;
    background-color: var(--def-white);
    border-bottom: 1px solid var(--border-color);
    position: fixed;
    width: 100%;
    z-index: 999;
    top: 0;
}
ul{
    list-style: none;
    display: flex;
    align-items: center;
}
li{
    margin-left: 25px;
    color: var(--default-font-color);
}
.head-container li:hover{
    color: var(--dark-blue);
}
ul a{
    text-decoration: none;
}
.main-logo {
    width: 100px;
}

.ot-header {
    width: 100vw;
    padding: 10px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, var(--dark-blue), var(--def-white));
    box-shadow: var(--box-shadow);
    position: fixed;
    top: 40px;
    right: 0;
}

.ot-header h3 {
    padding-left: 100px;
    color: var(--def-white);
}

.ot-header h3 a {
    padding-right: 10px;
    color: var(--def-white);
}

.content-container {
    min-height: 100vh;
    z-index: 998;
    align-content: center;
}

/* MAIN CONTENT */
.main-paper {
    width: 70%;
    height: fit-content;
    margin:5% auto ;
    background-color: var(--def-white);
    border-radius: 10px;
    box-shadow: var(--box-shadow);
    padding: 15px 50px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: var(--primary-font-color);
}
summary{
    font-size: 15px;
    font-weight: 600;
}
details li{
    padding-right: 10px;
}
details{
    padding:15px;
    margin-bottom: 5px;
    border-radius: 10px;
    color: var(--primary-font-color);
    background-color: var(--backdrop-color);
}
.isolate{
    padding-left:40px;
}
.padding{
    padding-top: 20px;
}

/* FOOTER */
footer{
    justify-content: space-around;
    height: 5%;
    width: 100vw;
    bottom: 0;
    background-color: var(--font-color);
    font-size:9px ;
    color: var(--dark-blue);
}
.flex{
    display: flex;
    align-items: center;
}
.border-right{
    padding-right: 10px;
    padding-left: 5px;
    margin-right: 5px;
}


================================================
FILE: public/css/unitinfo.css
================================================
:root {
    --backdrop-color: #f3f3f3;
    --border-color: #DAE4F2;
    --primary-font-color: #404c57;
    --btn-hover: #677c8f;
    --def-white: #FFFFFF;
    --box-shadow: rgba(25, 39, 52, 0.08);
    --btn-color: #2490ef;
    --btn-save: #28a745;
    --update-hover: #1f7e35;
    --dark-blue: #1842BD;
    --link-color: #6764EE;
    --border-color: #e2e2e2;
    --base-color: #FEFEFE;
    --default-font-color: #282828;
    --active-dot:  #717171;
    --login-left: #ECF4FF;
    --error-color:#E53B34;
    --toast-font-color: color: rgba(0, 0, 0, 0.7);
    --hover-background: #ccd9eb;
}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--backdrop-color);
    font-size: 16px;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: var(--primary-font-color);
    
}
main{
    height: 100vh;
}
.head-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: fit-content;
    padding: 5px 15px;
    background-color: var(--def-white);
    border-bottom: 1px solid var(--border-color);
    max-width: 100%;
}

.main-logo {
    width: 100px;
}

.ot-header {
    max-width: 100vw;
    padding: 10px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, var(--dark-blue), var(--def-white));
    box-shadow: var(--box-shadow);
}

.ot-header h3 {
    padding-left: 100px;
    color: var(--def-white);
}

.ot-header h3 a {
    padding-right: 10px;
    color: var(--def-white);
}

.modal-btn {
    padding: 10px;
    border-radius: 5px;
    width: 60px;
    margin-right: 10px;
    border: none;
    color: var(--def-white);
    cursor: pointer;
    font-size: 12px;
    box-shadow: var(--box-shadow);
}

.btn-container {
    margin-right: 60px;
}
.exportBtn{
    width: 35px;
    margin-right: 20px;
    padding: 10px;
    font-size: 13px;
    cursor: pointer;
    border: none;
    background-color: var(--dark-blue);
    color: var(--base-color);
    border-radius: 5px;
}
.unit-search{
    padding: 8px;
    border-radius: 5px;
    border: none;
    width: 170px;
}
.cancelBtn {
    background-color: var(--btn-color);
    color: var(--def-white);
    margin-left: 20px;
}

.cancelBtn:hover {
    background-color: var(--btn-hover);
}

.addunit-btn{
    background-color: var(--btn-save);
    width: 100px;
}

.addunit-btn:hover {
    background-color: var(--update-hover);
}
.content-container{
    height: fit-content;
    max-height: 80%;
    min-height: 40%;
    margin: 20px;
    overflow: auto;
    background-color: var(--base-color);
}
table{
    border-collapse: collapse;
    text-align: center;
}
th{
    padding: 10px;
    min-width: 100px;
    max-width: 100px;
    position: sticky;
    top: 0;
    background-color: var(--hover-background);
    border-bottom: 1px solid var(--border-color);
    color: var(--dark-blue);
    font-weight: 900;
}
tr:hover{
    background-color: var(--hover-background);
}
td{
    padding: 10px;
    min-width: 100px;
    max-width: 100px;
    border-bottom: 1px solid var(--border-color);
}
.id{
    min-width: 50px;
    max-width: 50px;
}
.name{
    min-width: 140px;
    max-width: 140px;
}
.action{
    max-width: 60px;
    min-width: 60px;
}
.action .fa-solid{
    text-decoration: none;
    cursor: pointer;
    color: var(--dark-blue);
}
.fa-pen-to-square{
    padding-left: 5px;
}

/* TOAST */
.toast-container {
    align-items: center;
    position: fixed;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    top: 2%;
    left: 0;
    right: 0;
    height: 10%;
    width: 25%;
    margin: auto;
    background-color: var(--base-color);
    color: var(--toast-font-color);
    z-index: 1200; 
    display: flex;
    visibility: hidden;
}

.toast-icon {
    font-size: 25px;
}

.toast-left {
    background-color: var(--error-color);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success {
    background-color: var(--update-hover);
    border-radius: 5px 0px 0px 5px;
    height: 100%;
    width: 15%;
    color: var(--base-color);
}

.toast-left-success,
.toast-left,
.toast-right {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.toast-right p {
    padding-left: 15px;
}





================================================
FILE: services/addunit.js
================================================
var a = document.getElementById('unit-bodyno');
var b = document.getElementById('unit-franno');
var c = document.getElementById('unit-motorno');
var e = document.getElementById('unit-area');

var a_error = document.getElementById('error_1');
var b_error = document.getElementById('error_2');
var c_error = document.getElementById('error_3');
var e_error = document.getElementById('error_4');

var d = document.getElementById('error-con');

const toastContainer = document.querySelector('.toast-container');
const errorToast = document.querySelector('.errortoast-container')

function validate_isNum() {

    var isValidA = !isNaN(a.value);
    var isValidB = !isNaN(b.value);
    var isValidC = !isNaN(c.value);
    var isValidE = !isNaN(e.value);


    if (!isValidA) {
        a.style.border = '2px solid red';
        a_error.innerHTML = 'Invalid Input';
        a_error.style.fontSize = '8pt';
    } else {
        a.style.border = '';
        a_error.innerHTML = '*';
        a_error.style.fontSize = '14px';
    }

    if (!isValidB) {
        b.style.border = '2px solid red';
        b_error.innerHTML = 'Invalid Input';
        b_error.style.fontSize = '8pt';
    } else {
        b.style.border = '';
        b_error.innerHTML = '*';
        b_error.style.fontSize = '14px';
    }

    if (!isValidC) {
        c.style.border = '2px solid red';
        c_error.innerHTML = 'Invalid Input';
        c_error.style.fontSize = '8pt';
    } else {
        c.style.border = '';
        c_error.innerHTML = '*';
        c_error.style.fontSize = '14px';
    }

    if (!isValidE) {
        e.style.border = '2px solid red';
        e_error.innerHTML = 'Invalid Input';
        e_error.style.fontSize = '8pt';
    } else {
        e.style.border = '';
        e_error.innerHTML = '*';
        e_error.style.fontSize = '14px';
    }


    return isValidA && isValidB && isValidC && isValidE;
}

function validate_form() {

    const is_Valid = validate_isNum();

    if (is_Valid) {
        errorToast.style.visibility = 'hidden';
        return true;
    } else {
        errorToast.style.visibility = 'visible';
        d.innerHTML = `<strong>Error</strong> Input fields contains value that did not match the expected value`;
        setTimeout(function () {
            errorToast.style.visibility = 'hidden';
        }, 5000);
        return false;
    }
}

function updateUnitFranvalid() {
    var issue_Date = document.getElementById('unit-franissue');
    var valid_Date = document.getElementById('unit-franvalid');

    var issueDate = new Date(issue_Date.value);
    var validDate = new Date(issueDate.getFullYear() + 5, issueDate.getMonth(), issueDate.getDate());
    valid_Date.value = validDate.toISOString().slice(0, 10);
}

document.addEventListener('DOMContentLoaded', function () {
    var issue_Date = document.getElementById('unit-franissue');
    var valid_Date = document.getElementById('unit-franvalid');

    issue_Date.addEventListener('change', updateUnitFranvalid);
    updateUnitFranvalid();

});


document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const toastContainers = document.getElementById('toast-success');

    if (suc === '0') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful!</strong>Data inserted successfully.`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (suc === 'true%unit') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful!</strong>Unit information updated successfully.`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

});



================================================
FILE: services/dashboard.js
================================================
// MAIN CONTAINERS
const dashContain = document.getElementById("dash-container")
const userContain = document.getElementById("users-container")
const memContain = document.getElementById("member-container")
const financeContain = document.getElementById("finance-container")
const complainContain = document.getElementById("complain-container")
const EventContain = document.getElementById("event-container")

// SIDE-NAV BTN
const dashBtn = document.getElementById("dash-btn")
const memBtn = document.getElementById("member-btn")
const userBtn = document.getElementById("users-btn")
const financeBtn = document.getElementById("finance-btn")
const complainBtn = document.getElementById("complain-btn")
const programsBtn = document.getElementById("programs-btn")

//ADD BUTTONS
const adduserBtn = document.getElementById("addUser-btn")
const addmemBtn = document.getElementById("addmem-btn")
const addfinanceBtn = document.getElementById("addFinance-btn")
const addComplainBtn = document.getElementById("addComplain-btn")
const addEventBtn = document.getElementById("addEvent-btn")

// MODALS
const userModal = document.getElementById("user-modal-container")
const memberModal = document.getElementById("member-modal-container")
const financeModal = document.getElementById("finance-modal-container")
const complainModal = document.getElementById("complaint-modal-container")
const eventModal = document.getElementById("event-modal-container")

const modalBg = document.getElementById('bg')
const seePass = document.getElementById("see-pass")

// CANCEL BUTTONS
const userCancel = document.getElementById("adduser-cancel")
const memberCancel = document.getElementById("member-cancel")
const financeCancel = document.getElementById("finance-cancel")
const complaintCancel = document.getElementById("complaint-cancel")
const eventCancel = document.getElementById("event-cancel")

// FORM MODALS 
adduserBtn.addEventListener("click", function () {
    userModal.style.display = "flex"
    modalBg.style.display = "block"
})
addmemBtn.addEventListener("click", function () {
    memberModal.style.display = "flex"
    modalBg.style.display = "block"
})
addfinanceBtn.addEventListener("click", function () {
    financeModal.style.display = "flex"
    modalBg.style.display = "block"
})
addComplainBtn.addEventListener("click", function () {
    complainModal.style.display = "flex"
    modalBg.style.display = "block"
   
})
addEventBtn.addEventListener("click", function () {
    eventModal.style.display = "flex"
    modalBg.style.display = "block"
})


// USER TYPE DISABLE INPUTS
const selectType = document.getElementById("select-type")
const bodyNo = document.getElementById("body-no")
const donorName = document.getElementById("donor-select")
const expenseType = document.getElementById("expense-type")
const addDonor = document.getElementById("donorbtn")
const amountInput = document.getElementById("amount");
const transDate = document.getElementById("trans-date");
const rem = document.getElementById("remarks");
const today = new Date().toISOString().split('T')[0];

//DISABLE INPUTS FOR FINANCE
function disableInputs() {
    if (selectType.value === "Butaw") {
        bodyNo.disabled = false;
        donorName.disabled = true;
        expenseType.disabled = true;
        addDonor.disabled = true;
        amountInput.value = "10";
        amountInput.disabled = false;
        transDate.disabled = false;
        rem.disabled = true;

    } else if (selectType.value === "Donation") {
        bodyNo.disabled = true;
        donorName.disabled = false;
        expenseType.disabled = true;
        addDonor.disabled = false;
        amountInput.value = "";
        amountInput.disabled = false;
        transDate.disabled = true;
        rem.disabled = true;

    } else if (selectType.value === "Expenses") {
        bodyNo.disabled = true;
        donorName.disabled = true;
        expenseType.disabled = false;
        addDonor.disabled = true;
        amountInput.value = "";
        amountInput.disabled = false;
        transDate.disabled = false;
        rem.disabled = false;
    } else {
        bodyNo.disabled = true;
        donorName.disabled = true;
        expenseType.disabled = true;
        addDonor.disabled = true;
        amountInput.value = "";
        amountInput.disabled = true;
        transDate.disabled = true;
        rem.disabled = true;
    }

    if (selectType.value === "Butaw" || selectType.value === "Donation" || selectType.value === "Expenses") {
        transDate.max = today;
    } else {
        transDate.removeAttribute("max");
    }
}
disableInputs()

// CANCEL BUTTONS
userCancel.addEventListener("click", function () {
    document.getElementById("user-form").reset()
    userModal.style.display = "none"
    modalBg.style.display = "none"
})
memberCancel.addEventListener("click", function () {
    document.getElementById("member-form").reset()
    memberModal.style.display = "none"
    modalBg.style.display = "none"
})
financeCancel.addEventListener("click", function () {
    document.getElementById("finance-form").reset()
    financeModal.style.display = "none"
    modalBg.style.display = "none"
    bodyNo.disabled = true;
    donorName.disabled = true;
    expenseType.disabled = true;
    addDonor.disabled = true;
    amountInput.value = "";
    amountInput.disabled = true;
    transDate.disabled = true;
})
complaintCancel.addEventListener("click", function () {
    document.getElementById("complaint-form").reset()
    complainModal.style.display = "none"
    modalBg.style.display = "none"
})
eventCancel.addEventListener("click", function () {
    var budgetInput = document.getElementById('events-budget');
    document.getElementById("event-form").reset()
    eventModal.style.display = "none"
    modalBg.style.display = "none"
    budgetInput.disabled = true;
})

//FI: CREATE A FUNCTION FOR SHOW PASSWORD INSTEAD OF THIS 
seePass.addEventListener("change", function () {
    const inputPass = document.getElementById("user-pass")
    const confirmPass = document.getElementById("user-confirmPass")
    if (inputPass.type === 'password' || confirmPass.type === 'password') {
        inputPass.type = 'text';
        confirmPass.type = 'text';
    } else {
        inputPass.type = 'password';
        confirmPass.type = 'password';
    }
})


/*TOAST 
const delUser = document.querySelector('.fa-trash-can')
delUser.addEventListener("click", function() {
    console.log("click")
    const toast = document.querySelector(".toast-container")
    toast.style.display = "flex"
        //TO DO: fix click event
    setTimeout(function() {
        toast.classList.add('toast-container-hide')
        toast.style.display = "none"
    }, 7000)
    toast.classList.remove("toast-container-hide")
    // TO DO: if confirm then delete selected user else stay
}) */




//SESSION TIMEOUT
var sessionTimeoutMilliseconds = 60 * 60 * 1000;
var timeoutTimer;

function resetTimeout() {
    clearTimeout(timeoutTimer);
    timeoutTimer = setTimeout(logout, sessionTimeoutMilliseconds);
}

function logout() {
    window.location.href = "../html/login.html";
}
document.addEventListener("mousemove", resetTimeout);

//USER SEARCH
const UsersearchBar = document.getElementById('user-search');
const UsertableBody = document.getElementById('user-table-body');

UsersearchBar.addEventListener('input', () => {
    const searchText = UsersearchBar.value.toLowerCase();

    for (let i = 0; i < UsertableBody.rows.length; i++) {
        const row = UsertableBody.rows[i];
        const userId = row.cells[0].textContent.toLowerCase();
        const userName = row.cells[1].textContent.toLowerCase();
        const userRole = row.cells[2].textContent.toLowerCase();
        const userEmail = row.cells[3].textContent.toLowerCase();

        if (
            userId.includes(searchText) ||
            userName.includes(searchText) ||
            userRole.includes(searchText) ||
            userEmail.includes(searchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//MEMBER SEARCH
const MemsearchBar = document.getElementById('mem-search');
const MemtableBody = document.getElementById('mem-table-body');

MemsearchBar.addEventListener('input', () => {
    const MemsearchText = MemsearchBar.value.toLowerCase();

    for (let i = 0; i < MemtableBody.rows.length; i++) {
        const row = MemtableBody.rows[i];
        const memId = row.cells[0].textContent.toLowerCase();
        const memName = row.cells[1].textContent.toLowerCase();
        const memOperation = row.cells[2].textContent.toLowerCase();
        const memRole = row.cells[3].textContent.toLowerCase();
        const memLicense = row.cells[4].textContent.toLowerCase();
        const memStat = row.cells[5].textContent.toLowerCase();

        if (
            memId.includes(MemsearchText) ||
            memName.includes(MemsearchText) ||
            memOperation.includes(MemsearchText) ||
            memRole.includes(MemsearchText) ||
            memLicense.includes(MemsearchText) ||
            memStat.includes(MemsearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//FINANCE SEARCH
const finsearchBar = document.getElementById('fin-search')
const fintablebody = document.getElementById('fin-table-body')

finsearchBar.addEventListener('input', () => {
    const finsearchText = finsearchBar.value.toLowerCase();

    for (let i = 0; i < fintablebody.rows.length; i++) {
        const row = fintablebody.rows[i];
        const finId = row.cells[0].textContent.toLowerCase();
        const finType = row.cells[1].textContent.toLowerCase();
        const finCode = row.cells[2].textContent.toLowerCase();
        const finName = row.cells[4].textContent.toLowerCase();

        if (
            finId.includes(finsearchText) ||
            finType.includes(finsearchText) ||
            finCode.includes(finsearchText) ||
            finName.includes(finsearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//COMPLAINTS SEARCH
const compSearchBar = document.getElementById('comp-search')
const compTableBody = document.getElementById('complaint-table-body')

compSearchBar.addEventListener('input', () => {
    const compSearchText = compSearchBar.value.toLowerCase();

    for (let i = 0; i < compTableBody.rows.length; i++) {
        const row = compTableBody.rows[i];
        const compId = row.cells[0].textContent.toLowerCase();
        const compName = row.cells[1].textContent.toLowerCase();
        const compCon = row.cells[2].textContent.toLowerCase();
        const compPerson = row.cells[3].textContent.toLowerCase();
        const compDate = row.cells[4].textContent.toLowerCase();
        if (
            compId.includes(compSearchText) ||
            compName.includes(compSearchText) ||
            compCon.includes(compSearchText) ||
            compPerson.includes(compSearchText) ||
            compDate.includes(compSearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

//EVENTS AND PROGRAMS SEARCH
const programsSearch = document.getElementById('programs-search')
const progTableBody = document.getElementById('programs-table-body')

programsSearch.addEventListener('input', () => {
    const progsearchText = programsSearch.value.toLowerCase();

    for (let i = 0; i < progTableBody.rows.length; i++) {
        const row = progTableBody.rows[i];
        const progId = row.cells[0].textContent.toLowerCase();
        const progTitle = row.cells[1].textContent.toLowerCase();
        const progDate = row.cells[2].textContent.toLowerCase();
        const progLoc = row.cells[4].textContent.toLowerCase();

        if (
            progId.includes(progsearchText) ||
            progTitle.includes(progsearchText) ||
            progDate.includes(progsearchText) ||
            progLoc.includes(progsearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});


//WARNING & SUCCESS TOAST FOR ADD USER
function checkEmailExists(email) {

    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkemail.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('street=' + email); // Use "street" parameter instead of "email"
    });
}

// Function to check if the contact number exists in the database
function checkContactExists(contact) {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkcontact.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('contact=' + contact);
    });
}

// Function to check if the username exists in the database
function checkUsernameExists(username) {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkusername.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('user-uname=' + username);
    });
}

// Event listener for input changes
document.getElementById('user-email').addEventListener('input', function () {
    var emailInput = this.value;
    var emailValidation = document.getElementById('email-validation');

    checkEmailExists(emailInput)
        .then(function (exists) {
            if (exists) {
                emailValidation.textContent = 'Email address already exist';
            } else {
                emailValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var contactValidation = document.getElementById('contact-validation');
            var usernameValidation = document.getElementById('username-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '' || usernameValidation.textContent !== '';
        })
        .catch(function (error) {
            console.error(error);
        });
});

// Event listener for input changes
document.getElementById('user-contact').addEventListener('input', function () {
    var contactInput = this.value;
    var contactValidation = document.getElementById('contact-validation');

    checkContactExists(contactInput)
        .then(function (exists) {
            if (exists) {
                contactValidation.textContent = 'Contact number already exist';
            } else {
                contactValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var emailValidation = document.getElementById('email-validation');
            var usernameValidation = document.getElementById('username-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '' || usernameValidation.textContent !== '';
        })
        .catch(function (error) {
            console.error(error);
        });
});

// Event listener for input changes
document.getElementById('user-uname').addEventListener('input', function () {
    var usernameInput = this.value;
    var usernameValidation = document.getElementById('username-validation');

    checkUsernameExists(usernameInput)
        .then(function (exists) {
            if (exists) {
                usernameValidation.textContent = 'Username already exist';
            } else {
                usernameValidation.textContent = '';
            }

            // Disable the save button if either email or contact validation fails
            var saveBtn = document.getElementById('save-btn');
            var emailValidation = document.getElementById('email-validation');
            var contactValidation = document.getElementById('contact-validation');
            saveBtn.disabled = emailValidation.textContent !== '' || contactValidation.textContent !== '' || usernameValidation.textContent !== '';
        })
        .catch(function (error) {
            console.error(error);
        });
});

document.getElementById("user-form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Check if user role is selected
    var role = document.getElementById("select-role").value;
    if (role === "") {
        // Display warning toast
        var warningToast = document.getElementById("warningToast");
        warningToast.style.display = "flex";

        // Hide toast after 3 seconds
        setTimeout(function () {
            warningToast.style.display = "none";
        }, 3000);
        return;
    }

    // Send an AJAX request to add the user to the database
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/adduser.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Display success toast
                    var successToast = document.getElementById("user-successToast");
                    successToast.style.display = "flex";
                    modalBg.style.display = "none";

                    // Hide toast after 2 seconds
                    setTimeout(function () {
                        successToast.style.display = "none";
                        // Refresh the page
                        location.reload();
                    }, 2000);

                    // Reset the form
                    document.getElementById("user-form").reset();

                    // Hide the modal
                    var userModalContainer = document.getElementById("user-modal-container");
                    userModalContainer.style.display = "none";
                } else {
                    // Handle the error case
                    var err = response.error;
                    if (err === "user-role-already-exists") {
                        // Display error toast
                        var toastContainers2 = document.getElementById('warningToast2');
                        var warningCon = document.getElementById('warning-con');
                        warningCon.innerHTML = `<strong>Warning:</strong> ${response.role} Role already exists in the database`;
                        toastContainers2.style.display = "flex";
                        toastContainers2.style.zIndex = "9999999";

                        // Hide toast after 3 seconds
                        setTimeout(function () {
                            toastContainers2.style.display = "none";
                        }, 3000);
                    } else {
                        console.error("Error: " + err);
                    }
                }
            } else {
                // Handle the error case
                console.error("Error: " + xhr.status);
            }
        }
    };
    xhr.send(formData);
});



//Add Complaint Confirmation Toast
document.getElementById("complaint-form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Send an AJAX request to add the user to the database
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/complaints.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Display success toast
                var successToast = document.getElementById("cmplnt-successToast");
                successToast.style.display = "flex";
                modalBg.style.display = "none"

                // Hide toast after 2 seconds
                setTimeout(function () {
                    successToast.style.display = "none";
                    // Refresh the page
                    location.reload();
                }, 2000);

                // Reset the form
                document.getElementById("complaint-form").reset();

                // Hide the modal
                var complaintModalContainer = document.getElementById("complaint-modal-container");
                complaintModalContainer.style.display = "none";
            } else {
                // Handle the error case
                console.error("Error: " + xhr.status);
            }
        }
    };
    xhr.send(formData);
});

//WARNING & SUCCESS TOAST FOR ADD MEMBER
function checkMemContactExists(phone) {

    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checkmemcontact.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('contact=' + phone);
    });
}

// Event listener for input changes in mem-contact
document.getElementById('mem-contact').addEventListener('input', function () {
    var contactInput = this.value;
    var contactValidation = document.getElementById('mem-contact-validation');
    var saveButton = document.getElementById('member-form').querySelector('#save-btn');

    checkMemContactExists(contactInput)
        .then(function (exists) {
            if (exists) {
                contactValidation.textContent = 'Contact number already exist';
            } else {
                contactValidation.textContent = '';
            }

            checkLicenseExists(document.getElementById('mem-license').value)
                .then(function (exists) {
                    var licenseValidation = document.getElementById('license-validation');
                    if (exists) {
                        licenseValidation.textContent = 'License number already exist';
                    } else {
                        licenseValidation.textContent = '';
                    }

                    saveButton.disabled = exists || contactValidation.textContent !== '' || licenseValidation.textContent !== '';
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
        .catch(function (error) {
            console.error(error);
        });
});

// Function to check if the license number exists in the database
function checkLicenseExists(license_no) {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/checklicense.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                resolve(response === 'exists');
            }
        };
        xhr.send('license=' + license_no);
    });
}

// Event listener for input changes in mem-license
document.getElementById('mem-license').addEventListener('input', function () {
    var licenseInput = this.value;
    var licenseValidation = document.getElementById('license-validation');
    var saveButton = document.getElementById('member-form').querySelector('#save-btn');

    checkLicenseExists(licenseInput)
        .then(function (exists) {
            if (exists) {
                licenseValidation.textContent = 'License number already exist';
            } else {
                licenseValidation.textContent = '';
            }

            checkMemContactExists(document.getElementById('mem-contact').value)
                .then(function (exists) {
                    var contactValidation = document.getElementById('mem-contact-validation');
                    if (exists) {
                        contactValidation.textContent = 'Contact number already exist';
                    } else {
                        contactValidation.textContent = '';
                    }

                    saveButton.disabled = exists || licenseValidation.textContent !== '' || contactValidation.textContent !== '';
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
        .catch(function (error) {
            console.error(error);
        });
});


document.getElementById("member-form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Check if user role is selected
    var role = document.getElementById("select-mem").value;
    if (role === "") {
        // Display warning toast
        var warningToast = document.getElementById("mem-warningToast");
        warningToast.style.display = "flex";

        // Hide toast after 3 seconds
        setTimeout(function () {
            warningToast.style.display = "none";
        }, 3000);
        return;
    }

    // Send an AJAX request to add the member to the database
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/addmember.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Display success toast
                var successToast = document.getElementById("mem-successToast");
                successToast.style.display = "flex";
                modalBg.style.display = "none"

                // Hide toast after 2 seconds
                setTimeout(function () {
                    successToast.style.display = "none";
                    // Refresh the page
                    location.reload();
                }, 2000);


                // Reset the form
                document.getElementById("member-form").reset();

                // Hide the modal
                var memberModalContainer = document.getElementById("member-modal-container");
                memberModalContainer.style.display = "none";
            } else {
                // Handle the error case
                console.error("Error: " + xhr.status);
            }
        }
    };
    xhr.send(formData);
});



//RENDERING CONTAINERS AND PREVENT FROM RETURNING TO DASHBOARD
const selectedModule = localStorage.getItem('selectedModule');

// Set the initial selected module or the default module if none is stored
const initialModule = selectedModule || 'dash';
renderModule(initialModule);

// Attach event listeners to the buttons
dashBtn.addEventListener('click', function () {
    renderModule('dash');
});
memBtn.addEventListener('click', function () {
    renderModule('member');
});
userBtn.addEventListener('click', function () {
    renderModule('users');
});
financeBtn.addEventListener('click', function () {
    renderModule('finance');
});
complainBtn.addEventListener('click', function () {
    renderModule('complain');
});
programsBtn.addEventListener('click', function () {
    renderModule('programs');
});

// Render the module based on the selected module
function renderModule(module) {
    // Hide all modules and deactivate all buttons
    dashContain.style.display = 'none';
    userContain.style.display = 'none';
    memContain.style.display = 'none';
    financeContain.style.display = 'none';
    complainContain.style.display = 'none';
    EventContain.style.display = 'none';

    dashBtn.classList.remove('btn-active');
    memBtn.classList.remove('btn-active');
    userBtn.classList.remove('btn-active');
    financeBtn.classList.remove('btn-active');
    complainBtn.classList.remove('btn-active');
    programsBtn.classList.remove('btn-active');

    // Show the selected module and activate its button
    if (module === 'dash') {
        dashContain.style.display = 'block';
        dashBtn.classList.add('btn-active');
    } else if (module === 'member') {
        memContain.style.display = 'block';
        memBtn.classList.add('btn-active');
    } else if (module === 'users') {
        userContain.style.display = 'block';
        userBtn.classList.add('btn-active');
    } else if (module === 'complain') {
        complainContain.style.display = 'block';
        complainBtn.classList.add('btn-active');
    } else if (module === 'finance') {
        financeContain.style.display = 'block'
        financeBtn.classList.add('btn-active')
    } else if (module === 'programs') {
        EventContain.style.display = 'block';
        programsBtn.classList.add('btn-active');
    }

    // Store the selected module in browser storage
    localStorage.setItem('selectedModule', module);
}

// Function to handle logout
function handleLogout() {
    localStorage.removeItem('selectedModule'); // Remove the selected module from storage
    renderModule('dash'); // Set the dashboard as the default module
    // Perform any additional logout actions here
}

//DISABLING OF SIDENAV OPTIONS
const logoutBtn = document.getElementById("logout-btn");
logoutBtn.addEventListener("click", handleLogout);

const listItems = document.querySelectorAll("#nav-list .locked");


listItems.forEach(function (item) {
    item.style.pointerEvents = "none";
    item.style.opacity = "0.5";
});

//Budget Checkbox

function handleBudgetCheckboxChange() {
    var budgetCheckbox = document.getElementById('events-isbudget');
    var budgetInput = document.getElementById('events-budget');

    if (budgetCheckbox.checked) {
        budgetInput.disabled = false;
        budgetInput.required = true;
    } else {
        budgetInput.disabled = true;
        budgetInput.required = false;
    }
}


document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const err = urlParams.get('error');
    const role = urlParams.get('role');
    const toastContainers = document.getElementById('toast-success');
    const toastContainers2 = document.getElementById('warningToast2');

    if (suc === 'true%finance') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful</strong> Finance record added.`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (suc === 'true%events') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful</strong> Program details added`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (suc === 'true%complaint') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful</strong> Complaint added`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (err === 'insufficient-bal') {
        toastContainers2.style.display = 'flex';
        document.getElementById('warning-con').innerHTML = `<strong>Warning</strong> Insufficient Balance`;
        setTimeout(() => {
            toastContainers2.style.display = 'none';
        }, 3000);
    }

});

window.onload = function () {
    if (window.location.search.includes("success")) {
        history.replaceState({}, document.title, window.location.pathname);
    }

    if (window.location.search.includes("error")) {
        history.replaceState({}, document.title, window.location.pathname);
    }
}

listItems.forEach(function (item) {
    item.style.pointerEvents = "none";
    item.style.opacity = "0.5";
});

function countChar(val) {
    var len = val.value.length;
    if (len >= 350) {
        val.value = val.value.substring(0, 350);
    } else {
        var remaining = 350 - len;
        if (remaining > 0) {
            $('#charRem').text('Remaining: ' + remaining);
        } else {
            $('#charRem').text('Remaining: 0');
        }
    }
}

function generatePDF(complaintId, fileName) {
    const pdfUrl = '../reports/' + fileName + '?id=' + complaintId;

    const printContainer = document.createElement('div');
    printContainer.id = 'print-container';
    printContainer.style.display = 'none';
    document.body.appendChild(printContainer);

    const iframe = document.createElement('iframe');
    iframe.src = pdfUrl;
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    iframe.style.border = 'none';
    printContainer.appendChild(iframe);

    iframe.onload = function () {
        const printWindow = iframe.contentWindow || iframe.contentDocument.defaultView;
        printWindow.print();
    };
}
//Generate Membership status Report

function save_generate() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/meminfo.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF1(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF1(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('meminfo.pdf');
    });
}


//Generate Donation Report

function save_generate1() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/don-report.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF2(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF2(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('donation-report.pdf');
    });
}

//Generate Contribution Report

function save_generate2() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/balance_sheet.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF3(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}


function generatePDF3(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('Expenses report.pdf');
    });
}

//Generate Finance Income Report

function save_generate3() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/finance_IS.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#container');
            generatePDF4(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF4(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('finance-report.pdf');
    });
}

//Generate Complaint Report
function save_generate5() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../reports/comp-report.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var compInfoContainer = container.querySelector('#container');
            generatePDF6(compInfoContainer.innerHTML);
        }
    };
    xhr.send();
}


function generatePDF6(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 0.5, 0.5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('complaint-report.pdf');
    });
}

//Generate Program Details Report

function save_generate4(complaintId, fileName) {
    const pdfUrl = '../reports/' + fileName + '?id=' + complaintId;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', pdfUrl, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            var container = document.createElement('div');
            container.innerHTML = response;
            var memInfoContainer = container.querySelector('#ep-container');
            generatePDF5(memInfoContainer.innerHTML);
        }
    };
    xhr.send();
}

function generatePDF5(htmlContent) {
    var element = document.createElement('div');
    element.innerHTML = htmlContent;

    var options = {
        margin: [0.5, 0.5, 1, .5],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        // Save or display the generated PDF here
        pdf.save('Program Details.pdf');
    });
}


// Get the current date
var currentDate = new Date();

// Array of month names
var monthNames = [
    "January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"
];

// Array of weekday names
var weekdayNames = [
    "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
];

// Format the date as desired ("Saturday, 8 July 2023")
var formattedDate = weekdayNames[currentDate.getDay()] + ', ' +
    currentDate.getDate() + ' ' +
    monthNames[currentDate.getMonth()] + ' ' +
    currentDate.getFullYear();

// Insert the formatted date into the <i> element
document.getElementById('current-date').innerText = formattedDate;

function toggleRemarks() {
    var expenseType = document.getElementById('expense-type').value;
    var remarksInput = document.getElementById('rem-container');
    if (expenseType === 'Expenses - ') {
      remarksInput.style.display = 'block';
    } else {
      remarksInput.style.display = 'none';
    }
  }
  
  // Call the toggleRemarks function initially to set the visibility based on the default selected value
  toggleRemarks();
  
  function toggleSelect() {
    var select = document.getElementById("complaintSubjectBody");
    var checkbox = document.getElementById("activateSelect");

    if (checkbox.checked) {
        select.disabled = false;
    } else {
        select.disabled = true;
    }
}




================================================
FILE: services/datetoday.js
================================================
  
// Get the current date
var currentDate = new Date();

// Array of month names
var monthNames = [
    "January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"
];

// Array of weekday names
var weekdayNames = [
    "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
];

// Format the date as desired ("Saturday, 8 July 2023")
var formattedDate = weekdayNames[currentDate.getDay()] + ', ' +
    currentDate.getDate() + ' ' +
    monthNames[currentDate.getMonth()] + ' ' +
    currentDate.getFullYear();

// Insert the formatted date into the <i> element
document.getElementById('current-date').innerText = formattedDate;



================================================
FILE: services/donorinfo.js
================================================
//DONOR INFO SEARCH
const donorSearch = document.getElementById('donor-search');
const donorTableBody = document.getElementById('donor-table-body');

donorSearch.addEventListener('input', () => {
    const donorSearchText = donorSearch.value.toLowerCase();

    for (let i = 0; i < donorTableBody.rows.length; i++) {
        const row = donorTableBody.rows[i];
        const donorId = row.cells[0].textContent.toLowerCase();
        const donorName = row.cells[1].textContent.toLowerCase();
        const donorGender = row.cells[2].textContent.toLowerCase();
        const donorNum = row.cells[3].textContent.toLowerCase();
        const donorEmail = row.cells[4].textContent.toLowerCase();


        if (
            donorId.includes(donorSearchText) ||
            donorName.includes(donorSearchText) ||
            donorGender.includes(donorSearchText) ||
            donorNum.includes(donorSearchText) ||
            donorEmail.includes(donorSearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

// Wrap the code inside a function to ensure it executes after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');

    if (success === 'true') {
        const toastContainer = document.getElementById('toast-success');
        const toastMessage = document.getElementById('success-con');

        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> donor information added.`;

        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    }
});

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const memberID = urlParams.get('id');

    if (memberID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$memberID');
    }
}; 


================================================
FILE: services/editComplaint.js
================================================
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const toastContainers = document.getElementById('toast-success');

    if (suc === 'true') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful!</strong> Complaint updated.`;
        console.log("TEST SUCCESS");
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

});

window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const complaintID = urlParams.get('id');

    if (complaintID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$complaintID');
    }
};

// Get the form and update button elements
const editForm = document.getElementById('form-complaint');
const updateButton = document.getElementById('complaint-update');

// Store the initial form data as a serialized string
const initialFormData = new FormData(editForm);

// Add event listener to the form
editForm.addEventListener('input', function() {
    // Serialize the current form data
    const currentFormData = new FormData(editForm);
    const currentDataString = Array.from(currentFormData.entries()).toString();

    // Compare the current form data with the initial form data
    const hasChanged = currentDataString !== Array.from(initialFormData.entries()).toString();

    // Enable or disable the update button based on whether the values have changed
    updateButton.disabled = !hasChanged;
    console.log('Button has been enabled for Complaint');
});




================================================
FILE: services/editdonor.js
================================================
// Get the form and update button elements
const editForm1 = document.getElementById('edit-donor');
const updateButton1 = document.getElementById('donor-update');

// Store the initial form data as a serialized string
const initialFormData1 = new FormData(editForm1);

// Add event listener to the form
editForm1.addEventListener('input', function () {
    // Serialize the current form data
    const currentFormData1 = new FormData(editForm1);
    const currentDataString1 = Array.from(currentFormData1.entries()).toString();

    // Compare the current form data with the initial form data
    const hasChanged1 = currentDataString1 !== Array.from(initialFormData1.entries()).toString();

    // Enable or disable the update button based on whether the values have changed
    updateButton1.disabled = !hasChanged1;
    console.log('Button has been enabled hehe');
});




================================================
FILE: services/editMember.js
================================================
document.getElementById('mem-pic').addEventListener('change', function (e) {
    var file = e.target.files[0];
    var imageType = /^image\//;

    if (!file || !imageType.test(file.type)) {
        alert('Please select an image file.');
        return;
    }

    var reader = new FileReader();

    reader.onload = function (e) {
        document.getElementById('profileImage').src = e.target.result;
    };

    reader.readAsDataURL(file);
});


function toggle(me, other) {
    me.style.display = 'none';
    var otherElement = document.getElementById(other);
    otherElement.style.display = '';

    if (otherElement.tagName.toLowerCase() === 'select') {
        myValue = me.value;
        for (var n = 0; n < otherElement.options.length; n++) {
            if (otherElement.options[n].value === myValue) {
                otherElement.options[n].selected = true;
                break;
            }
        }
    } else {
        myValue = me.options[me.selectedIndex].value;
        otherElement.value = myValue;
    }
}

// Get the form, file upload input, and update button elements
const editForm = document.getElementById('edit-mem');
const fileInput = document.getElementById('mem-pic');
const updateButton = document.getElementById('member-update');

// Store the initial form data as a serialized string
const initialFormData = new FormData(editForm);

// Add event listener to the form
editForm.addEventListener('input', function () {
    // Serialize the current form data
    const currentFormData = new FormData(editForm);
    const currentDataString = Array.from(currentFormData.entries()).toString();

    // Compare the current form data with the initial form data
    const hasChanged = currentDataString !== Array.from(initialFormData.entries()).toString();

    // Check if the file upload field has changed
    const fileChanged = fileInput.files.length > 0;

    // Enable or disable the update button based on whether there are changes in the form or file upload
    updateButton.disabled = !hasChanged && !fileChanged;
});


function formatPattern(input) {

    // Remove non-alphanumeric characters
    var formattedInput = input.replace(/[^A-Za-z0-9]/g, '');

    // Apply input length limit
    var maxLength = 11; // Set your desired maximum length
    formattedInput = formattedInput.substring(0, maxLength);

    // Add hyphens in the desired pattern
    if (formattedInput.length > 3) {
        formattedInput = formattedInput.substring(0, 3) + '-' + formattedInput.substring(3);
    }
    if (formattedInput.length > 6) {
        formattedInput = formattedInput.substring(0, 6) + '-' + formattedInput.substring(6);
    }

    return formattedInput;
}

function handleInput() {
    var input = document.getElementById("mem-license");
    input.value = formatPattern(input.value);
}







================================================
FILE: services/editprogram.js
================================================
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const toastContainers = document.getElementById('toast-success');

    if (suc === 'true') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful!</strong> Events & Programs updated.`;
        console.log("dapat lumabas ako");
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

});

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const programID = urlParams.get('id');

    if (programID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$programID');
    }
};


================================================
FILE: services/edituser.js
================================================
const seePassCheckbox = document.getElementById("see-pass");
const passwordInput = document.getElementById("user-pass");
const confirmPassInput = document.getElementById("user-confirmPass");
const updateBtn = document.getElementById("user-update");
const form = document.getElementById("user-form");

// Function to display the success toast notification
function displayToast() {
  const successToast = document.getElementById("toast-success");
  successToast.style.display = "flex";
}

// Function to check if any changes are made in the form fields
function checkForChanges() {
  const inputs = form.querySelectorAll("input, select");
  let changesMade = false;

  inputs.forEach(function(input) {
    if (input.id === "user-pass") {
      // Skip checking the password input field
      return;
    }

    if (input.defaultValue !== input.value) {
      changesMade = true;
    }
  });

  const passwordChanged = passwordInput.defaultValue !== passwordInput.value;
  updateBtn.disabled = !changesMade || (seePassCheckbox.checked && !passwordChanged);
}

// Add event listener to form fields to detect changes
form.addEventListener("input", checkForChanges);

// Function to handle form submission
form.addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();

  xhr.open(form.method, form.action, true);
  xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

  xhr.onload = function() {
    if (xhr.status === 200) {
      displayToast(); // Display success toast notification
      setTimeout(function() {
        location.reload(); // Reload the page after a delay
      }, 3000); // Change the delay as per your preference
    } else {
      // Handle error case
      console.log("Error:", xhr.status, xhr.statusText);
    }
  };

  xhr.onerror = function() {
    // Handle error case
    console.log("Request failed");
  };

  xhr.send(formData);
});

// Disable update button initially since there are no changes yet
updateBtn.disabled = true;

// Event listener for see password checkbox
seePassCheckbox.addEventListener("change", function() {
  if (this.checked) {
    passwordInput.type = "text";
    confirmPassInput.type = "text";
  } else {
    passwordInput.type = "password";
    confirmPassInput.type = "password";
  }

  checkForChanges(); // Call checkForChanges() when see password checkbox changes
});


================================================
FILE: services/exportComplainant.js
================================================
//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("complainant-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Complainant List");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function (buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Complainants.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportBtn = document.querySelector("#complainant-export");
exportBtn.addEventListener("click", exportToExcel);


================================================
FILE: services/exportComplaint.js
================================================
//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("complaint-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Complainant Information");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function (buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Members.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportBtn = document.querySelector("#comp-export");
exportBtn.addEventListener("click", exportToExcel);


================================================
FILE: services/exportdonor.js
================================================
//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("donor-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Donor List");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function (buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Donors.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportBtn = document.querySelector("#donor-export");
exportBtn.addEventListener("click", exportToExcel);


================================================
FILE: services/exportFinance.js
================================================

//==============================================================//
//EXPORT FINANCE FUNCTION 
function exportToExcel() {
    const table = document.getElementById("fin-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Financial Record");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function (buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Finance.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportFinBtn = document.getElementById("finance-export");
exportFinBtn.addEventListener("click", exportToExcel);


================================================
FILE: services/exportMember.js
================================================
//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("mem-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Members Information");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function (buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Members.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportBtn = document.querySelector("#mem-export");
exportBtn.addEventListener("click", exportToExcel);


================================================
FILE: services/exportUnit.js
================================================
//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("unit-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Member's Unit List");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function (buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Units.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportBtn = document.querySelector("#unit-export");
exportBtn.addEventListener("click", exportToExcel);


================================================
FILE: services/loading.js
================================================
//PRE-LOADING THE IMAGE TO MAKE SURE THAT IT IS NOT AFFECTED BY THE LOADING
function preloadImage(url, callback) {
    var img = new Image();
    img.onload = callback;
    img.src = url;
  }


//LOADING FUNCTION
function showLoadingAnimation() {
    document.getElementById("loading-container").style.display = "flex";
  }
  
  // Hide the loading animation
  function hideLoadingAnimation() {
    document.getElementById("loading-container").style.display = "none";
  }
  
  // Event listener for page load
  window.addEventListener("load", function() {
    showLoadingAnimation();
  
    // Simulate a delay before hiding the loading animation (e.g., 3 seconds)
    setTimeout(function() {
      hideLoadingAnimation();
    }, 1000);
  });
  
  //PRE LOAD IMAGE AND CALL THE LOADING ANIMATION 
  preloadImage('../../public/assets/mtodata_logo.png', showLoadingAnimation);


================================================
FILE: services/login.js
================================================
const firstDot = document.getElementById("dotBtn1")
const secondDot = document.getElementById("dotBtn2")
const thirdDot = document.getElementById("dotBtn3")
const slide1 = document.getElementById("carousel-1")
const slide2 = document.getElementById("carousel-2")
const slide3 = document.getElementById("carousel-3")
const logForm = document.getElementById("login-form")

//MANUAL OF CAROUSEL
firstDot.addEventListener("click", function () {
    slide1.style.display = "block"
    slide2.style.display = "none"
    slide3.style.display = "none"
})
secondDot.addEventListener("click", function () {
    slide1.style.display = "none"
    slide2.style.display = "block"
    slide3.style.display = "none"
})
thirdDot.addEventListener("click", function () {
    slide1.style.display = "none"
    slide2.style.display = "none"
    slide3.style.display = "block"
})

//AUTOMATION OF CAROUSEL
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("img-slides");
    let dots = document.getElementsByClassName("dot");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    if (slideIndex > slides.length) { slideIndex = 1 }
    dots[slideIndex - 1].className += " active";
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3500);
}

document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    const toastContainers = document.getElementsByClassName('toast-container');

    if (error === '1') {
        Array.from(toastContainers).forEach((container) => {
            container.style.visibility = 'visible';
            document.getElementById("error-cont").innerHTML = `<strong>Error</strong> Account does not exist.`;

        });
        setTimeout(() => {
            Array.from(toastContainers).forEach((container) => {
                container.style.visibility = 'hidden';
            });
        }, 3000);
    } else if (error === '2') {
        Array.from(toastContainers).forEach((container) => {
            container.style.visibility = 'visible';
            document.getElementById("error-cont").innerHTML = `<strong>Try again</strong> Incorrect username or pass.`;
        });
        setTimeout(() => {
            Array.from(toastContainers).forEach((container) => {
                container.style.visibility = 'hidden';
            });
        }, 3000);
    }
})

window.onload = function () {
    if (window.location.search.includes("error")) {
        history.replaceState({}, document.title, window.location.pathname);
    }
}


================================================
FILE: services/unitinfo.js
================================================

// Wrap the code inside a function to ensure it executes after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const toastContainers = document.getElementById('toast-success');
    const toastMessage = document.getElementById('success-con');

    if (suc === '0') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = "<strong>Successful</strong> Unit information added.";
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (suc === 'true') {

        toastContainers.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> donor information added.`;

        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

    if (suc === 'true%unit') {

        toastContainers.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> check the updated unit info.`;

        console.log('hehe');

        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

});

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const memberID = urlParams.get('id');

    if (memberID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$memberID');
    }
};

//UNIT INFO SEARCH
const unitSearch = document.getElementById('unit-search');
const unitTableBody = document.getElementById('unit-table-body');

unitSearch.addEventListener('input', () => {
    const searchText = unitSearch.value.toLowerCase();

    for (let i = 0; i < unitTableBody.rows.length; i++) {
        const row = unitTableBody.rows[i];
        const unitId = row.cells[0].textContent.toLowerCase();
        const unitName = row.cells[1].textContent.toLowerCase();
        const bodyNum = row.cells[2].textContent.toLowerCase();
        const plateNum = row.cells[11].textContent.toLowerCase();
        const bodyColor = row.cells[12].textContent.toLowerCase();
        const district = row.cells[13].textContent.toLowerCase();


        if (
            unitId.includes(searchText) ||
            unitName.includes(searchText) ||
            bodyNum.includes(searchText) ||
            plateNum.includes(searchText) ||
            bodyColor.includes(searchText) ||
            district.includes(searchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

window.onload = function () {
    if (window.location.search.includes("success")) {
        history.replaceState({}, document.title, window.location.pathname);
    }
}


================================================
FILE: services/viewComplainant.js
================================================
//COMPLAINTANT SEARCH
const compSearchBar = document.getElementById('complainant-search')
const compTableBody = document.getElementById('complainant-table-body')

compSearchBar.addEventListener('input', () => {
    const compSearchText = compSearchBar.value.toLowerCase();

    for (let i = 0; i < compTableBody.rows.length; i++) {
        const row = compTableBody.rows[i];
        const compId = row.cells[0].textContent.toLowerCase();
        const compName = row.cells[1].textContent.toLowerCase();
        const compGender = row.cells[2].textContent.toLowerCase();
        const compPhone = row.cells[3].textContent.toLowerCase();
        if (
            compId.includes(compSearchText) ||
            compName.includes(compSearchText) ||
            compGender.includes(compSearchText) ||
            compPhone.includes(compSearchText)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});


================================================
FILE: services/viewmem.js
================================================
// Wrap the code inside a function to ensure it executes after the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');

    if (success === 'true') {
        const toastContainer = document.getElementById('toast-success');
        const toastMessage = document.getElementById('success-con');

        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> check the updated member info.`;

        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    }

    if (success === 'true%member') {
        const toastContainer = document.getElementById('toast-success');
        const toastMessage = document.getElementById('success-con');

        toastContainer.style.visibility = 'visible';
        toastMessage.innerHTML = `<strong>Success</strong> check the updated donor info.`;

        setTimeout(() => {
            toastContainer.style.visibility = 'hidden';
        }, 3000);
    }
});

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const memberID = urlParams.get('id');

    if (memberID) {
        urlParams.delete("success");
        const newUrl = window.location.pathname + "?" + urlParams.toString();
        history.replaceState({}, document.title, newUrl);

        console.log('$memberID');
    }
};


================================================
FILE: views/html/dashboard.html
================================================
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>

<body>
    <div class="bg-container"></div>
    <div class="top-design"></div>

    <!-- SIDE-NAV-BAR -->
    <div class="side-nav">
        <header class="header-nav">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">
            <p>ADMIN PANEL</p>
        </header>
        <div class="item-container">
            <ul>
                <li id="dash-btn"><i class="fa-solid fa-house"></i> DASHBOARD</li>
                <li id="users-btn"><i class="fa-solid fa-users"></i> USERS</li>
                <li id="member-btn"><i class="fa-solid fa-circle-info"></i> MEMBER INFORMATION</li>
                <li id="finance-btn"><i class="fa-solid fa-coins"></i> FINANCE</li>
                <li id="complain-btn"><i class="fa-solid fa-flag"></i> COMPLAINTS</li>
                <li id="programs-btn"><i class="fa-solid fa-calendar-days"></i> EVENTS & PROGRAMS</li>
                <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <!-- DASHBOARD PANE -->
    <div class="dashboard-container" id="dash-container">
        <section class="top-dash">
            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-user-group"></i>
                    <h4 class="">Total Member Count</h4>
                </div>
                <div class="count-container">
                    <p>31</p>
                </div>
                <div class="link-container memCount">
                    <a href="#">View Report</a>
                </div>
            </div>

            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-hand-holding-dollar"></i>
                    <h4 class="">Donations Received</h4>
                </div>
                <div class="count-container">
                    <p><span>&#8369;</span> 1000000</p>
                </div>
                <div class="link-container">
                    <a href="#">View Report</a>
                </div>
            </div>

            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-circle-dollar-to-slot"></i>
                    <h4 class="">Contribution Collected</h4>
                </div>
                <div class="count-container">
                    <p><span>&#8369;</span>31</p>
                </div>
                <div class="link-container">
                    <a href="#">View Report</a>
                </div>
            </div>

            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-file-circle-exclamation"></i>
                    <h4 class="">Complaints Recieved</h4>
                </div>
                <div class="count-container">
                    <p>31</p>
                </div>
                <div class="link-container">
                    <a href="#">View Report</a>
                </div>
            </div>
        </section>
        <div class="botleft-dash border"></div>
        <div class="botright-dash border">
            <div class="card-header">
                <h4>Events</h4>
            </div>
        </div>
    </div>

    <!-- USER PANE -->
    <div class="users-container" id="users-container">
        <header>
            <div class="head-left">
                <h3>USER TYPE MANAGEMENT</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                <input type="text" class="user-search" placeholder="Search">
                <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
            </div>
        </header>

        <main>
            <table id="user-table">
                <tr>
                    <th>USER ID </th>
                    <th>NAME</th>
                    <th>PASSWORD</th>
                    <th>ROLE</th>
                    <th>ACTION</th>
                </tr>
            </table>
        </main>
    </div>

    <!-- MEMBER INFO PANE -->
    <div class="member-container" id="member-container">
        <header>
            <div class="head-left">
                <h3>TODA MEMBERS INFORMATION</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                <input type="text" class="user-search" placeholder="Search">
                <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th>MEMBER ID</th>
                    <th>NAME</th>
                    <th>AREA OF OPERATION</th>
                    <th>LICENSE PLATE</th>
                    <th>ACTION</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Christopher</td>
                    <td>helloworld</td>
                    <td>Developer</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>
            </table>
        </main>
    </div>

    <!-- FINANCE PANE -->
    <div class="finance-container" id="finance-container">
        <header>
            <div class="head-left">
                <h3>FINANCE</h3>
                <p>FINANCE STAFF VIEW</p>
            </div>
            <div class="head-right">
                <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                <input type="text" class="user-search" placeholder="Search">
                <button class="addFinanceBtn" id="addFinance-btn"><i class="fa-solid fa-plus"></i> Add Record</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th><abbr title="Transaction Id">ID</abbr></th>
                    <th>TYPE</th>
                    <th>CODE</th>
                    <th>AMOUNT</th>
                    <th>DATE</th>
                    <th>ACTION</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <!--CODE FORMAT WILL BE: 
                                CONTRIBUTION = CON
                                BUTAW = BUT
                                DONATION = DON
                                FOLLOWED BY DATE SUBMITTED MM/DD/YY
                            -->
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>
            </table>
        </main>
    </div>

    <!-- COMPLAINT PANE -->
    <div class="complain-container" id="complain-container">
        <header>
            <div class="head-left">
                <h3>COMPLAINTS</h3>
                <p>USER VIEW</p>
            </div>
            <div class="head-right">
                <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                <input type="text" class="user-search" placeholder="Search">
                <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New Complaint</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th><abbr title="complain-btn Id">ID</abbr></th>
                    <th>COMPLAINANT</th>
                    <th>SUBJECT TO COMPLAINT</th>
                    <th>DATE</th>
                    <th>ACTION</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jonathan Peol</td>
                    <td>Sean Gomez</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>
            </table>
        </main>

    </div>

    <!-- EVENTS & PROGRAMS PANE -->
    <div class="event-container" id="event-container">
        <header>
            <div class="head-left">
                <h3>EVENTS & PROGRAMS</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                <input type="text" class="user-search" placeholder="Search">
                <button class="addEventBtn" id="addEvent-btn"><i class="fa-solid fa-plus"></i> Add Events</button>
            </div>
        </header>

        <div class="content">
            <h4></h4>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <a href="#" class="border-right">Terms of Use</a>
            <p>Version 1.0</p>
        </div>
    </footer>

    <!-- MODALS -->
    <!-- ADD USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addUser-modal-container" id="user-modal-container">
        <h2 class="modal-title">ADD USER</h2>
        <form action="../php/adduser.php" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")'>
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left">
                    <!-- USERS ROLE -->
                    <div class="fields">
                        <label for="select-role">User's role</label>
                        <select name="userrole" id="select-mem">
                                <option value="pres">President</option>
                                <option value="vpres">Vice President</option>
                                <option value="secretary">Secretary</option>
                                <option value="treasurer">Treasurer</option>
                                <option value="auditor">Auditor</option>
                            </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="user-lastname">Lastname</label>
                        <input type="text" id="user-lastname" name="lastname" placeholder="Lastname" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="user-firstname">Firstname</label>
                        <input type="text" id="user-firstname" name="firstname" placeholder="Firstname" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="user-midname">Middlename</label>
                        <input type="text" id="user-midname" name="fiddlename" placeholder="Middlename" required>
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="user-extension">Extension Name</label>
                        <input type="text" pattern="[A-Za-z]{2,5}" id="user-extension" name="fxtension" placeholder="eg. Jr, Sr" required>
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="memForm-right">
                    <!-- EMAIL -->
                    <div class="fields">
                        <label for="user-email">Email Adress</label>
                        <input type="text" id="user-email" name="street" required>
                    </div>

                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.</label>
                        <input type="text" pattern="[0-9]{11}" id="mem-contact" name="contact" placeholder="eg. 09592220954" required>
                    </div>

                    <!-- PASSWORD -->
                    <div class="fields">
                        <label for="user-pass">Password</label>
                        <input type="password" id="user-pass" name="password" minlength="8" maxlength="12" required>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="fields">
                        <label for="user-confirmPass">Confirm Password</label>
                        <input type="password" id="user-confirmPass" name="confirmpass" required>
                    </div>

                    <!-- SEE PASSWORD -->
                    <div class="see-password-container">
                        <input class="see-pass" type="checkbox" id="see-pass">
                        <label class="see-pass-label" for="see-pass">See password</label>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="adduser-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- EDIT USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="editUser-modal-container" id="editUser-modal">
        <h2 class="modal-title">EDIT USER DETAILS</h2>
        <div class="btn-container">
            <input type="button" value="Cancel" class="cancel-btn" id="editUser-cancel" formnovalidate>
            <button class="save-btn" id="save-btn" type="submit">Save</button>
        </div>
    </div>

    <!-- ADD MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addMem-modal-container" id="member-modal-container">
        <h2 class="modal-title">MEMBER REGISTRATION</h2>
        <form action="">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left">
                    <!-- MEMBERS ROLE -->
                    <div class="fields">
                        <label for="select-mem">Member's role</label>
                        <select name="role" id="select-mem">
                                <option value="Officer">Officer</option>
                                <option value="Driver">Driver only</option>
                                <option value="Operator">Operator only</option>
                                <option value="both">Driver & Operator</option>
                            </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="mem-lastname">Lastname</label>
                        <input type="text" id="mem-lastname" name="lastname" placeholder="Lastname" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="mem-firstname">Firstname</label>
                        <input type="text" id="mem-firstname" name="firstname" placeholder="Firstname" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="mem-midname">Middlename</label>
                        <input type="text" id="mem-midname" name="middlename" placeholder="Middlename" required>
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="mem-extension">Extension Name</label>
                        <input type="text" pattern="[A-Za-z.]{2,5}" id="mem-extension" name="extension" placeholder="eg. Jr, Sr" required>
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Gender</label>
                        <select name="gender" id="select-gender">
                                <option value="Coordinator">Male</option>
                                <option value="Finance">Female</option>
                                <option value="Complaints">Prefer not to say</option>
                            </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="memForm-right">
                    <!-- STREET -->
                    <div class="fields">
                        <label for="mem-street">Street</label>
                        <input type="text" id="mem-street" name="street" required>
                    </div>

                    <!-- BARANGAY -->
                    <div class="fields">
                        <label for="mem-brgy">Barangay</label>
                        <input type="text" id="mem-brgy" name="barangay" required>
                    </div>
                    <!-- CITY -->
                    <div class="fields">
                        <label for="mem-city">City</label>
                        <input type="text" id="mem-city" name="city" required>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.</label>
                        <input type="text" pattern="[0-9]{11}" id="mem-contact" name="contact" placeholder="eg. 09592220954" required>

                    </div>
                    <!-- LICENSE NUMBER -->
                    <div class="fields">
                        <label for="mem-license">License no.</label>
                        <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license" placeholder="eg. A34-34-345645" required>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="member-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- TOAST NOTIFACTIONS -->
    <!-- CONFIRM DELETE TOAST -->
    <div class="toast-container">
        <p>Are you sure you want to permanently delete this user?</p>
        <div class="toast-btn-container">
            <button>Confirm</button>
            <button>Cancel</button>
        </div>
    </div>
    <!-- 
            TO DO: 
            1. USER SUCCESSFULLY ADDED 
            2. USER 
        -->

    <script src="../../services/dashboard.js"></script>
</body>

</html>


================================================
FILE: views/html/login.html
================================================
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/login.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="bg-container"></div>

    <div class="login-container">
        <!-- LOGIN FORM LEFT SIDE -->
        <div class="left-side" id="left-side-e">
            <div class="carousel-container-1 img-slides" id="carousel-1">
                <img class="carousel-img" src="../../public/assets/carousel_1.png" alt="icon for membership info">
                <h3>Membership Management</h3>
                <p>maintain a database of all the members of the association, their personal details, and their membership status.</p>
            </div>

            <div class="carousel-container-2 img-slides" id="carousel-2">
                <img class="carousel-img" src="../../public/assets/carousel_2.png" alt="icon for membership info">
                <h3>Financial Management</h3>
                <p>manage the financial transactions, including membership fees, renewal fees, donations, and other charges.</p>
            </div>

            <div class="carousel-container-3 img-slides" id="carousel-3">
                <img class="carousel-img" src="../../public/assets/carousel_3.png" alt="icon for membership info">
                <h3>Reporting and Analytics</h3>
                <p>provide reports and analytics on various aspects of the association's operations, including financial performance, membership status, and other member's activity.</p>
            </div>

            <div class="dot-container">
                <span id="dotBtn1" class="dot"></span>
                <span id="dotBtn2" class="dot"></span>
                <span id="dotBtn3" class="dot"></span>
            </div>
        </div>

        <!-- LOGIN FORM RIGHT SIDE -->
        <div class="right-side">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">

            <form action="../php/login.php" method="post">

                <div class="field">
                    <label>Username/email</label>
                    <input type="text" name="uname" placeholder="example@gmail.com" required autofocus>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="8-12 characters" required>
                    <button class="login-btn" id="login-btn " type="submit ">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- LOGIN TOAST NOTIFICATION -->
    <!-- ERROR TOAST -->
    <div class="toast-container">
        <div class="toast-left">
            <i class="toast-icon fa-solid fa-circle-exclamation"></i>
        </div>
        <div class="toast-right">
            <p id="error-cont">ERROR: Wrong Password!</p>
        </div>
    </div> 

    <!-- FLOATING HELP MODAL -->
    <!-- <abbr title="Terms of use"> <a href="../../views/pages/termsofuse.php"><div class="terms-container">
       <i class="term-icon fa-solid fa-file-contract"></i>
    </div></a></abbr> -->



    <script src="../../services/login.js "></script>
</body>

</html>


================================================
FILE: views/pages/adddonor.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Donor</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/edituser.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>

    <!-- ERROR TOAST -->
    <div class='toast-container'>
        <div class='toast-left'>
            <i class='toast-icon fa-solid fa-triangle-exclamation'></i>
        </div>
        <div class='toast-right'>
            <p id='error-con'></p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form action='insertdonor.php' method='POST'>
            <div class='ot-header'>
                <h3><a href='../../views/pages/viewdonors.php'><i class='fa-solid fa-arrow-left'></i></a>Add Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='../../views/pages/viewdonors.php'><input type='button' value='Cancel'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button class='update-btn modal-btn' id='user-update' type='submit' name='user-update'>Save</button>
                </div>
            </div>

            <!-- <input type='hidden' name='id' value=''> -->
            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-last'> Lastname <span> *</span></label>
                            <input type='text' id='donor-last' name='donor_last' placeholder='Dela Cruz' required>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-first'> Firstname <span> *</span></label>
                            <input type='text' id='donor-first' name='donor_first' placeholder='Juan' required>
                        </div>

                        <!-- SEX -->
                        <div class='fields'>
                            <label for='donor-sex'>Sex <span> *</span></label>
                            <select name='donor-sex' id='donor_sex' required>
                                <option selected disabled value=''>Select gender</option>
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- MIDDLENAME -->
                        <div class='fields'>
                            <label for='donor-mid'> Middlename</label>
                            <input type='text' id='donor-mid' name='donor_mid' placeholder='Reyes'>
                        </div>

                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-ext'> Extension name</label>
                            <input type='text' id='donor-ext' name='donor_ext' placeholder='eg. Jr, Sr'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Contact Info</h3>
                <div class='main'>
                    <div class='left-side-profile section'>

                        <!-- EMAIL ADDRESS -->
                        <div class='fields'>
                            <label for='donor-email'>Email</label>
                            <input type='email' name='donor-email' id='donor-email'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>



                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact Number</label>
                            <input type='text' name='donor-contact' id='donor_contact' required maxlength="11">
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Address Info</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='donor-street'>Street <span> *</span></label>
                            <input type='text' name='donor-street' id='donor_street' required>
                        </div>

                        <div class='fields'>
                            <label for='donor-brgy'>Barangay <span> *</span></label>
                            <input type='text' name='donor-brgy' id='donor_brgy' required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='donor-city'>City <span> *</span></label>
                            <input type='text' name='donor-city' id='donor_city' required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>


================================================
FILE: views/pages/adddonor_tres.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Donor</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/edituser.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>

    <!-- ERROR TOAST -->
    <div class='toast-container'>
        <div class='toast-left'>
            <i class='toast-icon fa-solid fa-triangle-exclamation'></i>
        </div>
        <div class='toast-right'>
            <p id='error-con'></p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form action='insertdonor.php' method='POST'>
            <div class='ot-header'>
                <h3><a href='../../views/pages/viewdonors_tres.php'><i class='fa-solid fa-arrow-left'></i></a>Add Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='../../views/pages/viewdonors_tres.php'><input type='button' value='Cancel'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button class='update-btn modal-btn' id='user-update' type='submit' name='user-update'>Save</button>
                </div>
            </div>

            <!-- <input type='hidden' name='id' value=''> -->
            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-last'> Lastname <span> *</span></label>
                            <input type='text' id='donor-last' name='donor_last' placeholder='Dela Cruz' required>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-first'> Firstname <span> *</span></label>
                            <input type='text' id='donor-first' name='donor_first' placeholder='Juan' required>
                        </div>

                        <!-- SEX -->
                        <div class='fields'>
                            <label for='donor-sex'>Sex <span> *</span></label>
                            <select name='donor-sex' id='donor_sex' required>
                                <option selected disabled value=''>Select gender</option>
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- MIDDLENAME -->
                        <div class='fields'>
                            <label for='donor-mid'> Middlename</label>
                            <input type='text' id='donor-mid' name='donor_mid' placeholder='Reyes'>
                        </div>

                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-ext'> Extension name</label>
                            <input type='text' id='donor-ext' name='donor_ext' placeholder='eg. Jr, Sr'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Contact Info</h3>
                <div class='main'>
                    <div class='left-side-profile section'>

                        <!-- EMAIL ADDRESS -->
                        <div class='fields'>
                            <label for='donor-email'>Email</label>
                            <input type='email' name='donor-email' id='donor-email'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>



                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact Number</label>
                            <input type='text' name='donor-contact' id='donor_contact' required maxlength="11">
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Address Info</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='donor-street'>Street <span> *</span></label>
                            <input type='text' name='donor-street' id='donor_street' required>
                        </div>

                        <div class='fields'>
                            <label for='donor-brgy'>Barangay <span> *</span></label>
                            <input type='text' name='donor-brgy' id='donor_brgy' required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='donor-city'>City <span> *</span></label>
                            <input type='text' name='donor-city' id='donor_city' required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>


================================================
FILE: views/pages/addunit.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Unit</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/addunit.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>

    <!-- ERROR TOAST -->
    <div class="errortoast-container">
        <div class="toast-left">
            <i class="toast-icon fa-solid fa-circle-exclamation"></i>
        </div>
        <div class="toast-right">
            <p id='error-con'></p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class="toast-container" id="toast-success">
        <div class="toast-left-success">
            <i class="toast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="toast-right">
            <p id='success-con'></p>
        </div>
    </div>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form name='addunit_form' method='POST' action='insertunit.php' onsubmit='return validate_form()'>
            <div class='ot-header'>
                <h3><a href='../../views/pages/unitinfo.php'><i class='fa-solid fa-arrow-left'></i></a>Add Unit Info
                </h3>
                <div class='btn-container'>
                    <a href='../../views/pages/unitinfo.php'><input type='button' value='Cancel'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button class='update-btn modal-btn' id='user-update' type='submit' name='user-update'>Save</button>
                </div>
            </div>

            <!-- <input type='hidden' name='id' value=''> -->
            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <div class='fields'>
                            <label for='add-unit'>Member Name <span> *</span></label>
                            <select name='add_unit' id='add-unit' required>
                                <option value='' selected disabled>Select Member</option>

                                <?php

                                // connect to the MySQL database
                                include "../php/db_conn.php";

                                //retrieve data from input fields   
                                
                                // check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // data retrieving for member's name
                                $sql = "SELECT * FROM mem_info WHERE (mem_role = 'Operator' OR mem_role = 'Both')
                                AND id NOT IN (SELECT mem_id FROM unit_info)";
                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {
                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    $selected = "";
                                    if (isset($_GET['id']) && $_GET['id'] == $row['id']) {
                                        $selected = "selected";
                                    }

                                    echo "<option value='" . $row['id'] . "' " . $selected . ">" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }


                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class='right-side-emp section'>

                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Unit Information</h3>
                <div class='main'>
                    <div class='left-side-profile section'>

                        <!-- BODY NO. -->
                        <div class='fields'>
                            <label for='unit-bodyno'>Body No. <span id='error_1'> *</span></label>
                            <input type='text' id='unit-bodyno' pattern="[0-9]*" maxlength="4" name='unitbody_no'
                                oninput="validate_isNum()" placeholder="eg. 0001" required>
                        </div>

                        <!-- BODY COLOR -->
                        <div class='fields'>
                            <label for='unit-bodycolor'>Body Color <span> *</span></label>
                            <select name='unitbody_color' id='unit-bodycolor' required>
                                <option selected disabled value="">Select Color</option>
                                <option value='Blue'>Blue</option>
                                <option value='Red'>Red</option>
                                <option value='Orange'>Orange</option>
                                <option value='Yellow'>Yellow</option>
                                <option value='Green'>Green</option>
                                <option value='Indigo'>Indigo</option>
                                <option value='Violet'>Violet</option>
                                <option value='Purple'>Purple</option>
                                <option value='Pink'>Pink</option>
                                <option value='Silver'>Silver</option>
                                <option value='Gold'>Gold</option>
                                <option value='Beige'>Beige</option>
                                <option value='Brown'>Brown</option>
                                <option value='Grey/Gray'>Grey/Gray</option>
                                <option value='Black'>Black</option>
                                <option value='White'>White</option>
                            </select>
                        </div>

                        <!-- FRANCHISE NO. -->
                        <div class='fields'>
                            <label for='unit_franno'>Franchise No. <span id='error_2'> *</span></label>
                            <input type='text' id='unit-franno' pattern="[0-9]*" name='unitfran_no'
                                oninput="validate_isNum()" required>
                        </div>
                    </div>

                    <div class='right-side-profile section'>

                        <!-- FRANCHISE DATE ISSUED -->
                        <div class='fields'>
                            <label for='unit-franissue'>Franchise Date issued <span> *</span></label>
                            <input type='date' id='unit-franissue' name='unitfran_issue' max="<?= date('Y-m-d') ?>"
                                onchange="updateUnitFranvalid()" required>
                        </div>

                        <!-- FRANCHISE DATE VALID -->
                        <div class='fields'>
                            <label for='unit-franvalid'>Franchise Date Valid</label>
                            <input type='date' id='unit-franvalid' name='unitfran_valid' READONLY>
                        </div>


                        <!-- AREA CODE -->
                        <div class='fields'>
                            <label for='unit-area'>Area Code <span id='error_4'> *</span></label>
                            <input type='text' id='unit-area' pattern="[0-9]*" name='unit_area'
                                oninput="validate_isNum()" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Motorcycle Information</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_motorno'>Motor No. <span id='error_3'> *</span></label>
                            <input type='text' id='unit-motorno' pattern="[0-9]*" name='unit_motorno'
                                oninput="validate_isNum()" required>
                        </div>

                        <div class='fields'>
                            <label for='unit_chasis'>Chasis No. <span> *</span></label>
                            <input type='text' id='unit-chasis' name='unit_chasis' required>
                        </div>

                        <div class='fields'>
                            <label for='unit_plateno'>Plate No. <span> *</span></label>
                            <input type='text' id='unit-plateno' name='unit_plateno' required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_OR'>LTO OR <span> *</span></label>
                            <input type='text' id='unit-OR' name='unit_OR' required>
                        </div>

                        <div class='fields'>
                            <label for='unit_CR'>LTO CR <span> *</span></label>
                            <input type='text' id='unit-CR' name='unit_CR' required>
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Other Info</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_District'>District <span> *</span></label>
                            <input type='text' id='unit-District' pattern="[0-9]*" maxlength="2" name='unit_District'
                                required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_Control'>Control Plate <span> *</span></label>
                            <input type='text' id='unit-Control' name='unit_Control' required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- SCRIPT VALIDATION -->
    <script src='../../services/addunit.js'></script>
</body>

</html>


================================================
FILE: views/pages/addunit_sec.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Unit</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/addunit.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>

    <!-- ERROR TOAST -->
    <div class="errortoast-container">
        <div class="toast-left">
            <i class="toast-icon fa-solid fa-circle-exclamation"></i>
        </div>
        <div class="toast-right">
            <p id='error-con'></p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class="toast-container" id="toast-success">
        <div class="toast-left-success">
            <i class="toast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="toast-right">
            <p id='success-con'></p>
        </div>
    </div>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form name='addunit_form' method='POST' action='insertunit.php' onsubmit='return validate_form()'>
            <div class='ot-header'>
                <h3><a href='../../views/pages/unitinfo_sec.php'><i class='fa-solid fa-arrow-left'></i></a>Add Unit Info
                </h3>
                <div class='btn-container'>
                    <a href='../../views/pages/unitinfo_sec.php'><input type='button' value='Cancel'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button class='update-btn modal-btn' id='user-update' type='submit' name='user-update'>Save</button>
                </div>
            </div>

            <!-- <input type='hidden' name='id' value=''> -->
            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <div class='fields'>
                            <label for='add-unit'>Member Name <span> *</span></label>
                            <select name='add_unit' id='add-unit' required>
                                <option value='' selected disabled>Select Member</option>

                                <?php

                                // connect to the MySQL database
                                include "../php/db_conn.php";

                                //retrieve data from input fields   
                                
                                // check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // data retrieving for member's name
                                $sql = "SELECT * FROM mem_info WHERE (mem_role = 'Operator' OR mem_role = 'Both')
                                AND id NOT IN (SELECT mem_id FROM unit_info)";
                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {
                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    $selected = "";
                                    if (isset($_GET['id']) && $_GET['id'] == $row['id']) {
                                        $selected = "selected";
                                    }

                                    echo "<option value='" . $row['id'] . "' " . $selected . ">" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }


                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class='right-side-emp section'>

                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Unit Information</h3>
                <div class='main'>
                    <div class='left-side-profile section'>

                        <!-- BODY NO. -->
                        <div class='fields'>
                            <label for='unit-bodyno'>Body No. <span id='error_1'> *</span></label>
                            <input type='text' id='unit-bodyno' pattern="[0-9]*" maxlength="4" name='unitbody_no'
                                oninput="validate_isNum()" placeholder="eg. 0001" required>
                        </div>

                        <!-- BODY COLOR -->
                        <div class='fields'>
                            <label for='unit-bodycolor'>Body Color <span> *</span></label>
                            <select name='unitbody_color' id='unit-bodycolor' required>
                                <option selected disabled value="">Select Color</option>
                                <option value='Blue'>Blue</option>
                                <option value='Red'>Red</option>
                                <option value='Orange'>Orange</option>
                                <option value='Yellow'>Yellow</option>
                                <option value='Green'>Green</option>
                                <option value='Indigo'>Indigo</option>
                                <option value='Violet'>Violet</option>
                                <option value='Purple'>Purple</option>
                                <option value='Pink'>Pink</option>
                                <option value='Silver'>Silver</option>
                                <option value='Gold'>Gold</option>
                                <option value='Beige'>Beige</option>
                                <option value='Brown'>Brown</option>
                                <option value='Grey/Gray'>Grey/Gray</option>
                                <option value='Black'>Black</option>
                                <option value='White'>White</option>
                            </select>
                        </div>

                        <!-- FRANCHISE NO. -->
                        <div class='fields'>
                            <label for='unit_franno'>Franchise No. <span id='error_2'> *</span></label>
                            <input type='text' id='unit-franno' pattern="[0-9]*" name='unitfran_no'
                                oninput="validate_isNum()" required>
                        </div>
                    </div>

                    <div class='right-side-profile section'>

                        <!-- FRANCHISE DATE ISSUED -->
                        <div class='fields'>
                            <label for='unit-franissue'>Franchise Date issued <span> *</span></label>
                            <input type='date' id='unit-franissue' name='unitfran_issue' max="<?= date('Y-m-d') ?>"
                                onchange="updateUnitFranvalid()" required>
                        </div>

                        <!-- FRANCHISE DATE VALID -->
                        <div class='fields'>
                            <label for='unit-franvalid'>Franchise Date Valid</label>
                            <input type='date' id='unit-franvalid' name='unitfran_valid' READONLY>
                        </div>


                        <!-- AREA CODE -->
                        <div class='fields'>
                            <label for='unit-area'>Area Code <span id='error_4'> *</span></label>
                            <input type='text' id='unit-area' pattern="[0-9]*" name='unit_area'
                                oninput="validate_isNum()" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Motorcycle Information</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_motorno'>Motor No. <span id='error_3'> *</span></label>
                            <input type='text' id='unit-motorno' pattern="[0-9]*" name='unit_motorno'
                                oninput="validate_isNum()" required>
                        </div>

                        <div class='fields'>
                            <label for='unit_chasis'>Chasis No. <span> *</span></label>
                            <input type='text' id='unit-chasis' name='unit_chasis' required>
                        </div>

                        <div class='fields'>
                            <label for='unit_plateno'>Plate No. <span> *</span></label>
                            <input type='text' id='unit-plateno' name='unit_plateno' required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_OR'>LTO OR <span> *</span></label>
                            <input type='text' id='unit-OR' name='unit_OR' required>
                        </div>

                        <div class='fields'>
                            <label for='unit_CR'>LTO CR <span> *</span></label>
                            <input type='text' id='unit-CR' name='unit_CR' required>
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Other Info</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_District'>District <span> *</span></label>
                            <input type='text' id='unit-District' pattern="[0-9]*" maxlength="2" name='unit_District'
                                required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_Control'>Control Plate <span> *</span></label>
                            <input type='text' id='unit-Control' name='unit_Control' required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- SCRIPT VALIDATION -->
    <script src='../../services/addunit.js'></script>
</body>

</html>


================================================
FILE: views/pages/donorinfo.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member Donor ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Donor Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>View Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='../../views/pages/viewdonors.php?id=<?php echo $donorID ?>'><input type='button'
                            value='Donor List' class='donorlist modal-btn ' formnovalidate></a>
                    <a href='../../views/pages/updatedonorinfo.php?id=<?php echo $donorID ?>'><input type='button'
                            value='Edit' class='cancelBtn modal-btn' formnovalidate></a>
                </div>
            </div>


            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-firstname'>Firstname<span> *</span></label>
                            <input type='text' id='donor-firstname' name='firstname' readonly
                                value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='donor-midname'>Middlename</label>
                            <input type='text' id='donor-midname' name='middlename' readonly
                                value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='donor-lastname' name='lastname' readonly
                                value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-extension'>Extension Name</label>
                            <input type='text' id='donor-extension' name='extension' readonly
                                value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' readonly
                                value='<?php echo $row['gender']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <div class='main'>
                    <div class='left-side-profile section'>
                        <h3>Address</h3>
                        <!-- STREET -->
                        <div class='fields'>
                            <label for='donor-street'>Street<span> *</span></label>
                            <input type='text' id='donor-street' name='street' readonly
                                value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='donor-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='donor-brgy' name='barangay' readonly
                                value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='donor-city'>City<span> *</span></label>
                            <input type='text' id='donor-city' name='city' readonly value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='donor-contact' name='contact' readonly placeholder="09XXXXXXXXX"
                                maxlength="11" value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- EMAIL NUMBER -->
                        <div class='fields'>
                            <label for='donor-email'>Email<span> *</span></label>
                            <input type='email' id='donor-email' readonly name='email'
                                value='<?php echo $row['email']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Finance Logs</h3>
                <div class='main'>

                    <table class="finance-logs">
                        <thead>
                            <tr>
                                <th>Transaction Code</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            include "../php/db_conn.php";

                            if (isset($_GET['id'])) {
                                $memberID = $_GET['id'];

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Query to retrieve rows from transaction_payment table
                                $sql = "SELECT * FROM transaction_donation WHERE donor_id = '$memberID'
                                ORDER BY date_created DESC";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Loop through each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['date_created'] . "</td>
                                    </tr>
                                        ";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                }

                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </form>


        <!-- SUCCESS TOAST -->
        <div class='toast-container' id='toast-success'>
            <div class='toast-left-success'>
                <i class='toast-icon fa-solid fa-circle-check'></i>
            </div>
            <div class='toast-right'>
                <p id='success-con'></p>
            </div>
        </div>

        <script src='../../services/viewmem.js'></script>
</body>

</html>


================================================
FILE: views/pages/donorinfo_tres.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member Donor ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Donor Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/tre-auditview.php'><i class='fa-solid fa-arrow-left'></i></a>View Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='../../views/pages/viewdonors_tres.php?id=<?php echo $donorID ?>'><input type='button'
                            value='Donor List' class='donorlist modal-btn ' formnovalidate></a>
                    <a href='../../views/pages/updatedonorinfo_tres.php?id=<?php echo $donorID ?>'><input type='button'
                            value='Edit' class='cancelBtn modal-btn' formnovalidate></a>
                </div>
            </div>


            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-firstname'>Firstname<span> *</span></label>
                            <input type='text' id='donor-firstname' name='firstname' readonly
                                value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='donor-midname'>Middlename</label>
                            <input type='text' id='donor-midname' name='middlename' readonly
                                value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='donor-lastname' name='lastname' readonly
                                value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-extension'>Extension Name</label>
                            <input type='text' id='donor-extension' name='extension' readonly
                                value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' readonly
                                value='<?php echo $row['gender']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <div class='main'>
                    <div class='left-side-profile section'>
                        <h3>Address</h3>
                        <!-- STREET -->
                        <div class='fields'>
                            <label for='donor-street'>Street<span> *</span></label>
                            <input type='text' id='donor-street' name='street' readonly
                                value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='donor-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='donor-brgy' name='barangay' readonly
                                value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='donor-city'>City<span> *</span></label>
                            <input type='text' id='donor-city' name='city' readonly value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='donor-contact' name='contact' readonly placeholder="09XXXXXXXXX"
                                maxlength="11" value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- EMAIL NUMBER -->
                        <div class='fields'>
                            <label for='donor-email'>Email<span> *</span></label>
                            <input type='email' id='donor-email' readonly name='email'
                                value='<?php echo $row['email']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Finance Logs</h3>
                <div class='main'>

                    <table class="finance-logs">
                        <thead>
                            <tr>
                                <th>Transaction Code</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            include "../php/db_conn.php";

                            if (isset($_GET['id'])) {
                                $memberID = $_GET['id'];

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Query to retrieve rows from transaction_payment table
                                $sql = "SELECT * FROM transaction_donation WHERE donor_id = '$memberID'
                                ORDER BY date_created DESC";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Loop through each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['date_created'] . "</td>
                                    </tr>
                                        ";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                }

                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </form>


        <!-- SUCCESS TOAST -->
        <div class='toast-container' id='toast-success'>
            <div class='toast-left-success'>
                <i class='toast-icon fa-solid fa-circle-check'></i>
            </div>
            <div class='toast-right'>
                <p id='success-con'></p>
            </div>
        </div>

        <script src='../../services/viewmem.js'></script>
</body>

</html>


================================================
FILE: views/pages/editComplainants.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    // Retrieve complaint information from the database using the complaint ID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM complaint_info WHERE id = '$complaint_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'Complaint does not exist';
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid Complaint ID';
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get Data from form submission
    $EditComplainantFirstname = $_POST["complaintFirstname"];
    $EditComplainantMiddlename = $_POST["complaintMiddlename"];
    $EditComplainantLastname = $_POST["complaintLastname"];
    $EditComplainantExtension = $_POST["extension"];
    $EditComplainantGender = $_POST["gender"];
    $EditComplainantContact = $_POST["contact"];

    // Update Complainant Details
    $sql = "UPDATE complaint_info SET 
                fname = '$EditComplainantFirstname', 
                mname = '$EditComplainantMiddlename', 
                lname = '$EditComplainantLastname', 
                exname = '$EditComplainantExtension', 
                gender = '$EditComplainantGender', 
                phone = '$EditComplainantContact' 
            WHERE id = '$complaint_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Complainant details updated successfully";
        header("Location: ../php/dashboard.php");
        exit();
    } else {
        echo "Error updating complainant details: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Complaintants</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="../../public/css/editpages.css">
        <!-- WEB ICON -->
        <link rel="icon" href="../../public/assets/browse_logo.png">
        <!-- FONT AWESOME/ICONS -->
        <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
    </div>

    <div class="content-container">
        <form method="post" id="form-complaint">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Complainant Details</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="complaint-update" type="submit" name="complaint-update" disabled>Update</button>
                </div>
            </div>

            <div class="user-container">
                <h3>Complainant Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <!-- LASTNAME -->
                        <div class="fields">
                            <label for="complaintLastname">Lastname<span> *</span></label>
                            <input type="text" id="complaintLastname" name="complaintLastname"
                                value="<?php echo isset($row['lname']) ? $row['lname'] : ''; ?>" required>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="complaintFirstname">Firstname<span> *</span></label>
                            <input type="text" id="complaintFirstname" name="complaintFirstname"
                                value="<?php echo isset($row['fname']) ? $row['fname'] : ''; ?>" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="complaintMiddlename">Middlename</label>
                            <input type="text" id="complaintMiddlename" name="complaintMiddlename"
                                value="<?php echo isset($row['mname']) ? $row['mname'] : ''; ?>">
                        </div>
                    </div>

                    <div class="right-side-emp section">
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="extension" name="extension"
                                placeholder="eg. Jr, Sr" value="<?php echo isset($row['exname']) ? $row['exname'] : ''; ?>">
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="gender">Sex<span> *</span></label>
                            <select name="gender" id="gender">
                                <option value="male" <?php if (isset($row['gender']) && $row['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if (isset($row['gender']) && $row['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                <option value="none" <?php if (isset($row['gender']) && $row['gender'] === 'none') echo 'selected'; ?>>Prefer not to say</option>
                            </select>
                        </div>

                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="contact" name="contact"
                                placeholder="eg. 09592220954" value="<?php echo isset($row['phone']) ? $row['phone'] : ''; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const suc = urlParams.get('success');
            const toastContainers = document.getElementById('toast-success');

            if (suc === 'true') {
                toastContainers.style.visibility = 'visible';
                document.getElementById('success-con').innerHTML = `<strong>Successful!</strong> Complaint updated.`;
                console.log("TEST SUCCESS");
                setTimeout(() => {
                    toastContainers.style.visibility = 'hidden';
                }, 3000);
            }
        });

        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            const complaintID = urlParams.get('id');

            if (complaintID) {
                urlParams.delete("success");
                const newUrl = window.location.pathname + "?" + urlParams.toString();
                history.replaceState({}, document.title, newUrl);

                console.log('$complaintID');
            }
        };

        // Get the form and update button elements
        const editForm = document.getElementById('form-complaint');
        const updateButton = document.getElementById('complaint-update');

        // Store the initial form data as a serialized string
        const initialFormData = new FormData(editForm);

        // Add event listener to the form
        editForm.addEventListener('input', function () {
            // Serialize the current form data
            const currentFormData = new FormData(editForm);
            const currentDataString = Array.from(currentFormData.entries()).toString();

            // Compare the current form data with the initial form data
            const hasChanged = currentDataString !== Array.from(initialFormData.entries()).toString();

            // Enable or disable the update button based on whether the values have changed
            updateButton.disabled = !hasChanged;
            console.log('Button has been enabled for Complaint');
        });
    </script>
    </body>
</html>



================================================
FILE: views/pages/editComplainants_vice.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    // Retrieve complaint information from the database using the complaint ID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM complaint_info WHERE id = '$complaint_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'Complaint does not exist';
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid Complaint ID';
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get Data from form submission
    $EditComplainantFirstname = $_POST["complaintFirstname"];
    $EditComplainantMiddlename = $_POST["complaintMiddlename"];
    $EditComplainantLastname = $_POST["complaintLastname"];
    $EditComplainantExtension = $_POST["extension"];
    $EditComplainantGender = $_POST["gender"];
    $EditComplainantContact = $_POST["contact"];

    // Update Complainant Details
    $sql = "UPDATE complaint_info SET 
                fname = '$EditComplainantFirstname', 
                mname = '$EditComplainantMiddlename', 
                lname = '$EditComplainantLastname', 
                exname = '$EditComplainantExtension', 
                gender = '$EditComplainantGender', 
                phone = '$EditComplainantContact' 
            WHERE id = '$complaint_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Complainant details updated successfully";
        header("Location: ../php/viceview.php");
        exit();
    } else {
        echo "Error updating complainant details: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Complaintants</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="../../public/css/editpages.css">
        <!-- WEB ICON -->
        <link rel="icon" href="../../public/assets/browse_logo.png">
        <!-- FONT AWESOME/ICONS -->
        <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
    </div>

    <div class="content-container">
        <form method="post" id="form-complaint">
            <div class="ot-header">
                <h3><a href="../../views/php/viceview.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Complainant Details</h3>
                <div class="btn-container">
                    <a href="../../views/php/viceview.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="complaint-update" type="submit" name="complaint-update" disabled>Update</button>
                </div>
            </div>

            <div class="user-container">
                <h3>Complainant Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <!-- LASTNAME -->
                        <div class="fields">
                            <label for="complaintLastname">Lastname<span> *</span></label>
                            <input type="text" id="complaintLastname" name="complaintLastname"
                                value="<?php echo isset($row['lname']) ? $row['lname'] : ''; ?>" required>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="complaintFirstname">Firstname<span> *</span></label>
                            <input type="text" id="complaintFirstname" name="complaintFirstname"
                                value="<?php echo isset($row['fname']) ? $row['fname'] : ''; ?>" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="complaintMiddlename">Middlename</label>
                            <input type="text" id="complaintMiddlename" name="complaintMiddlename"
                                value="<?php echo isset($row['mname']) ? $row['mname'] : ''; ?>">
                        </div>
                    </div>

                    <div class="right-side-emp section">
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="extension" name="extension"
                                placeholder="eg. Jr, Sr" value="<?php echo isset($row['exname']) ? $row['exname'] : ''; ?>">
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="gender">Sex<span> *</span></label>
                            <select name="gender" id="gender">
                                <option value="male" <?php if (isset($row['gender']) && $row['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if (isset($row['gender']) && $row['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                <option value="none" <?php if (isset($row['gender']) && $row['gender'] === 'none') echo 'selected'; ?>>Prefer not to say</option>
                            </select>
                        </div>

                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="contact" name="contact"
                                placeholder="eg. 09592220954" value="<?php echo isset($row['phone']) ? $row['phone'] : ''; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const suc = urlParams.get('success');
            const toastContainers = document.getElementById('toast-success');

            if (suc === 'true') {
                toastContainers.style.visibility = 'visible';
                document.getElementById('success-con').innerHTML = `<strong>Successful!</strong> Complaint updated.`;
                console.log("TEST SUCCESS");
                setTimeout(() => {
                    toastContainers.style.visibility = 'hidden';
                }, 3000);
            }
        });

        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            const complaintID = urlParams.get('id');

            if (complaintID) {
                urlParams.delete("success");
                const newUrl = window.location.pathname + "?" + urlParams.toString();
                history.replaceState({}, document.title, newUrl);

                console.log('$complaintID');
            }
        };

        // Get the form and update button elements
        const editForm = document.getElementById('form-complaint');
        const updateButton = document.getElementById('complaint-update');

        // Store the initial form data as a serialized string
        const initialFormData = new FormData(editForm);

        // Add event listener to the form
        editForm.addEventListener('input', function () {
            // Serialize the current form data
            const currentFormData = new FormData(editForm);
            const currentDataString = Array.from(currentFormData.entries()).toString();

            // Compare the current form data with the initial form data
            const hasChanged = currentDataString !== Array.from(initialFormData.entries()).toString();

            // Enable or disable the update button based on whether the values have changed
            updateButton.disabled = !hasChanged;
            console.log('Button has been enabled for Complaint');
        });
    </script>
    </body>
</html>



================================================
FILE: views/pages/editcomplaint.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    // Retrieve complaint information from the database using the complaint ID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM complaint_details cd
            INNER JOIN complaint_info ci ON ci.id = cd.complainant_id
            WHERE cd.id = '$complaint_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'Complaint does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid Complaint ID';
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update Database
    // Edit Complaint Module

    // Right Panel
    if (isset($_POST['complaintSubject'])) {
        $EditSubject = $_POST['complaintSubject'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT complaint_person FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['complaint_person'];
        }
    }
    if (isset($_POST['complaintSubjectBody'])) {
        $EditBodyNumber = $_POST['complaintSubjectBody'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT body_no FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['body_no'];
        }
    }
    // Retrieve the default value for complaint-select if there's no change
    if (isset($_POST['complaint-select'])) {
        $complaintantId = $_POST['complaint-select'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT id FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['id'];
        }
    }
    $EditDateCreated = $_POST["date-incident"] . " " . $_POST["time-incident"];
    $EditComplaintDescription = $_POST["desc"];

    // Check if there are changes
    $isChanged = false;

    // Retrieve existing complaint details from the database
    $existingDetailsQuery = "SELECT * FROM complaint_details WHERE id = '$complaint_id'";
    $existingDetailsResult = mysqli_query($conn, $existingDetailsQuery);

    if (mysqli_num_rows($existingDetailsResult) > 0) {
        $existingDetailsRow = mysqli_fetch_assoc($existingDetailsResult);

        // Compare the existing values with the new values
        if ($existingDetailsRow['complaint_person'] != $EditSubject ||
            $existingDetailsRow['body_no'] != $EditBodyNumber ||
            $existingDetailsRow['details'] != $EditComplaintDescription ||
            $existingDetailsRow['date_created'] != $EditDateCreated ||
            $existingDetailsRow['complainant_id'] != $complaintantId
        ) {
            $isChanged = true;
        }
    }

    // Update complaint_details table if there are changes
    if ($isChanged) {
        $sql = "UPDATE complaint_details SET 
                    complaint_person = '$EditSubject', 
                    body_no = '$EditBodyNumber', 
                    details = '$EditComplaintDescription', 
                    date_created = '$EditDateCreated',
                    complainant_id = '$complaintantId'
                WHERE id = '$complaint_id'";

        if (mysqli_query($conn, $sql)) {
            echo "Complaint information updated successfully";
        } else {
            echo "Error updating complaint information: " . mysqli_error($conn);
            exit();
        }
    } else {
        echo "No changes detected. The complaint information remains the same.";
    }

    mysqli_close($conn);

    header("Location: ../php/dashboard.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Complaints</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/editpages.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/browse_logo.png">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
    </div>

    <div class="content-container">
        <form id="form-complaint" method="post">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Complaints Details</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="complaint-update" type="submit" name="complaint-update" disabled>Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Complainant Information</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <div class="fields">
                            <label for='complaint-select'>Complainant Name</label>
                            <select name='complaint-select' id='complaint-select'>
                                <?php
                                // connect to the MySQL database
                                include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaint-select'])) {
                                    $complaintantId = $_POST['complaint-select'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT complainant_id FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $complaintantId = $defaultRow['complainant_id'];
                                    }
                                }

                                // Retrieve and display options
                                $sql = "SELECT * FROM complaint_info";
                                $result = $conn->query($sql);

                                while ($row3 = $result->fetch_assoc()) {
                                    $middleInitial = !empty($row3["mname"]) ? trim($row3["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row3["exname"]) ? ' ' . $row3["exname"] . '., ' : '';
                                    $lastName = $row3["lname"];

                                    if (empty($row3["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    $complainId = $row3["id"]; // Retrieve the ID from the complaint_info table

                                    // Check if the option matches the default value
                                    $selected = ($complainId == $complaintantId) ? 'selected' : '';

                                    echo "<option value='" . $complainId . "' " . $selected . ">" . $lastName . $extensionName . $row3["fname"] . " " . $middleInitial . "</option>";
                                }

                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="profile-container">
                <h3>Person to Complaint Details</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <div class="fields">
                        <label for="complaintSubject">Select Complaint Person<span> *</span></label>
                            <select name='complaintSubject' id='complaintSubject'>
                                <?php
                                    // connect to the MySQL database
                                    include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaintSubject'])) {
                                    $subjectId = $_POST['complaintSubject'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT complaint_person FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $subjectId = $defaultRow['complaint_person'];
                                    }
                                }

                                    $sql = "SELECT * FROM mem_info";

                                    $result = $conn->query($sql);

                                    while ($row2 = $result->fetch_assoc()) {
                                        $middleInitial = !empty($row2["mname"]) ? trim($row2["mname"][0]) . '.' : '';
                                        $extensionName = !empty($row2["exname"]) ? ' ' . $row2["exname"] . '., ' : '';
                                        $lastName = $row2["lname"];

                                        if (empty($row2["exname"])) {
                                            $lastName .= ', ';
                                        }

                                        $complaintId = $row2["id"]; // Retrieve the ID from the complaint_info table

                                        $selected = ($complaintId == $subjectId) ? 'selected' : '';

                                        echo "<option value='" . $complaintId . "' " . $selected . ">". $lastName . $extensionName . $row2["fname"] . " " . $middleInitial . "</option>";
                                    }

                                    // close MySQL connection
                                    $conn->close();
                                ?>
                            </select>
                        </div>  
                    </div>

                    <div class="right-side-profile section">
                        <!-- BODY NUMBER -->
                        <div class="fields">
                            <label for="complaintSubjectBody">Body no.<span> *</span></label>
                            <select name='complaintSubjectBody' id='complaintSubjectBody'>
                                <?php
                                // No need to include "db_conn.php" again here
                                include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaintSubjectBody'])) {
                                    $bodyId = $_POST['complaintSubjectBody'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT body_no FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $bodyId = $defaultRow['body_no'];
                                    }
                                }

                                $sql = "SELECT * FROM unit_info";

                                $result = $conn->query($sql);

                                // Display a default blank option if body_no is 0
                                $selected = ($bodyId === '0') ? 'selected' : '';
                                echo "<option value='' $selected>Select Body Number</option>";

                                while ($row1 = $result->fetch_assoc()) {
                                    $unitId = $row1["id"]; // Retrieve the body number from the unit_info table
                                    $body_no = $row1["body_no"];

                                    // Check if the option matches the default value
                                    $selected = ($unitId == $bodyId) ? 'selected' : '';

                                    echo "<option value='" . $unitId . "' " . $selected . ">" . $body_no . "</option>";
                                }

                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="password-container">
                        <h3>Complaint Description</h3>
                        <div class="main">
                            <div class="section">
                                <!-- TIME -->
                                <div class="fields">
                                    <label for="time-incident">Time of Incident<span> *</span></label>
                                    <input type="time" id="time-incident" name="time-incident"
                                        value="<?php echo substr($row['date_created'], -8, 5); ?>">
                                </div>

                                <!-- DATE -->
                                <div class="fields">
                                    <label for="date-incident">Date of Incident<span> *</span></label>
                                    <input type="date" id="date-incident" name="date-incident"
                                        value="<?php echo substr($row['date_created'], 0, 10); ?>">
                                </div>
                            </div>
                            <div class="section">
                                <!-- DESCRIPTION -->
                                <div class="fields">
                                    <label for="desc">Description<span> *</span></label>
                                    <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350"
                                        onkeyup="countChar(this)"><?php echo isset($row['details']) ? htmlspecialchars($row['details']) : ''; ?></textarea>
                                    <div id="charNum"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
    <script src='../../services/editComplaint.js'></script>
</body>
</html>


================================================
FILE: views/pages/editcomplaint_vice.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    // Retrieve complaint information from the database using the complaint ID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM complaint_details cd
            INNER JOIN complaint_info ci ON ci.id = cd.complainant_id
            WHERE cd.id = '$complaint_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'Complaint does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid Complaint ID';
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update Database
    // Edit Complaint Module

    // Right Panel
    if (isset($_POST['complaintSubject'])) {
        $EditSubject = $_POST['complaintSubject'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT complaint_person FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['complaint_person'];
        }
    }
    if (isset($_POST['complaintSubjectBody'])) {
        $EditBodyNumber = $_POST['complaintSubjectBody'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT body_no FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['body_no'];
        }
    }
    // Retrieve the default value for complaint-select if there's no change
    if (isset($_POST['complaint-select'])) {
        $complaintantId = $_POST['complaint-select'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT id FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['id'];
        }
    }
    $EditDateCreated = $_POST["date-incident"] . " " . $_POST["time-incident"];
    $EditComplaintDescription = $_POST["desc"];

    // Check if there are changes
    $isChanged = false;

    // Retrieve existing complaint details from the database
    $existingDetailsQuery = "SELECT * FROM complaint_details WHERE id = '$complaint_id'";
    $existingDetailsResult = mysqli_query($conn, $existingDetailsQuery);

    if (mysqli_num_rows($existingDetailsResult) > 0) {
        $existingDetailsRow = mysqli_fetch_assoc($existingDetailsResult);

        // Compare the existing values with the new values
        if ($existingDetailsRow['complaint_person'] != $EditSubject ||
            $existingDetailsRow['body_no'] != $EditBodyNumber ||
            $existingDetailsRow['details'] != $EditComplaintDescription ||
            $existingDetailsRow['date_created'] != $EditDateCreated ||
            $existingDetailsRow['complainant_id'] != $complaintantId
        ) {
            $isChanged = true;
        }
    }

    // Update complaint_details table if there are changes
    if ($isChanged) {
        $sql = "UPDATE complaint_details SET 
                    complaint_person = '$EditSubject', 
                    body_no = '$EditBodyNumber', 
                    details = '$EditComplaintDescription', 
                    date_created = '$EditDateCreated',
                    complainant_id = '$complaintantId'
                WHERE id = '$complaint_id'";

        if (mysqli_query($conn, $sql)) {
            echo "Complaint information updated successfully";
        } else {
            echo "Error updating complaint information: " . mysqli_error($conn);
            exit();
        }
    } else {
        echo "No changes detected. The complaint information remains the same.";
    }

    mysqli_close($conn);

    header("Location: ../php/viceview.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Complaints</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/editpages.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/browse_logo.png">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
    </div>

    <div class="content-container">
        <form id="form-complaint" method="post">
            <div class="ot-header">
                <h3><a href="../../views/php/viceview.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Complaints Details</h3>
                <div class="btn-container">
                    <a href="../../views/php/viceview.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="complaint-update" type="submit" name="complaint-update" disabled>Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Complainant Information</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <div class="fields">
                            <label for='complaint-select'>Complainant Name</label>
                            <select name='complaint-select' id='complaint-select'>
                                <?php
                                // connect to the MySQL database
                                include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaint-select'])) {
                                    $complaintantId = $_POST['complaint-select'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT complainant_id FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $complaintantId = $defaultRow['complainant_id'];
                                    }
                                }

                                // Retrieve and display options
                                $sql = "SELECT * FROM complaint_info";
                                $result = $conn->query($sql);

                                while ($row3 = $result->fetch_assoc()) {
                                    $middleInitial = !empty($row3["mname"]) ? trim($row3["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row3["exname"]) ? ' ' . $row3["exname"] . '., ' : '';
                                    $lastName = $row3["lname"];

                                    if (empty($row3["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    $complainId = $row3["id"]; // Retrieve the ID from the complaint_info table

                                    // Check if the option matches the default value
                                    $selected = ($complainId == $complaintantId) ? 'selected' : '';

                                    echo "<option value='" . $complainId . "' " . $selected . ">" . $lastName . $extensionName . $row3["fname"] . " " . $middleInitial . "</option>";
                                }

                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="profile-container">
                <h3>Person to Complaint Details</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <div class="fields">
                        <label for="complaintSubject">Select Complaint Person<span> *</span></label>
                            <select name='complaintSubject' id='complaintSubject'>
                                <?php
                                    // connect to the MySQL database
                                    include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaintSubject'])) {
                                    $subjectId = $_POST['complaintSubject'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT complaint_person FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $subjectId = $defaultRow['complaint_person'];
                                    }
                                }

                                    $sql = "SELECT * FROM mem_info";

                                    $result = $conn->query($sql);

                                    while ($row2 = $result->fetch_assoc()) {
                                        $middleInitial = !empty($row2["mname"]) ? trim($row2["mname"][0]) . '.' : '';
                                        $extensionName = !empty($row2["exname"]) ? ' ' . $row2["exname"] . '., ' : '';
                                        $lastName = $row2["lname"];

                                        if (empty($row2["exname"])) {
                                            $lastName .= ', ';
                                        }

                                        $complaintId = $row2["id"]; // Retrieve the ID from the complaint_info table

                                        $selected = ($complaintId == $subjectId) ? 'selected' : '';

                                        echo "<option value='" . $complaintId . "' " . $selected . ">". $lastName . $extensionName . $row2["fname"] . " " . $middleInitial . "</option>";
                                    }

                                    // close MySQL connection
                                    $conn->close();
                                ?>
                            </select>
                        </div>  
                    </div>

                    <div class="right-side-profile section">
                        <!-- BODY NUMBER -->
                        <div class="fields">
                            <label for="complaintSubjectBody">Body no.<span> *</span></label>
                            <select name='complaintSubjectBody' id='complaintSubjectBody'>
                                <?php
                                // No need to include "db_conn.php" again here
                                include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaintSubjectBody'])) {
                                    $bodyId = $_POST['complaintSubjectBody'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT body_no FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $bodyId = $defaultRow['body_no'];
                                    }
                                }

                                $sql = "SELECT * FROM unit_info";

                                $result = $conn->query($sql);

                                // Display a default blank option if body_no is 0
                                $selected = ($bodyId === '0') ? 'selected' : '';
                                echo "<option value='' $selected>Select Body Number</option>";

                                while ($row1 = $result->fetch_assoc()) {
                                    $unitId = $row1["id"]; // Retrieve the body number from the unit_info table
                                    $body_no = $row1["body_no"];

                                    // Check if the option matches the default value
                                    $selected = ($unitId == $bodyId) ? 'selected' : '';

                                    echo "<option value='" . $unitId . "' " . $selected . ">" . $body_no . "</option>";
                                }

                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="password-container">
                        <h3>Complaint Description</h3>
                        <div class="main">
                            <div class="section">
                                <!-- TIME -->
                                <div class="fields">
                                    <label for="time-incident">Time of Incident<span> *</span></label>
                                    <input type="time" id="time-incident" name="time-incident"
                                        value="<?php echo substr($row['date_created'], -8, 5); ?>">
                                </div>

                                <!-- DATE -->
                                <div class="fields">
                                    <label for="date-incident">Date of Incident<span> *</span></label>
                                    <input type="date" id="date-incident" name="date-incident"
                                        value="<?php echo substr($row['date_created'], 0, 10); ?>">
                                </div>
                            </div>
                            <div class="section">
                                <!-- DESCRIPTION -->
                                <div class="fields">
                                    <label for="desc">Description<span> *</span></label>
                                    <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350"
                                        onkeyup="countChar(this)"><?php echo isset($row['details']) ? htmlspecialchars($row['details']) : ''; ?></textarea>
                                    <div id="charNum"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
    <script src='../../services/editComplaint.js'></script>
</body>
</html>


================================================
FILE: views/pages/editmem.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $memberID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM mem_info WHERE id = '$memberID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit Member Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form id='edit-mem' action='updatemem.php?id=<?php echo $memberID; ?>' method='POST'
            enctype='multipart/form-data'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Member
                    Information</h3>
                <div class='btn-container'>
                    <a href='viewmem.php?id=<?php echo $memberID?>'><input type='button' value='Discard'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button id='member-update' class='update-btn modal-btn' type='submit' disabled>Update</button>
                </div>
            </div>

            <div class='pic-container'>
                <h3>Profile Picture</h3>
                <div class='main'>
                    <div class='section left-pic'>
                        <?php

                        if (empty($row['profilepic'])) {
                            echo "<img src='../../public/assets/defuser_icon.png' alt='' id='profileImage'>";
                        } else {

                            echo "
                            <img src='../../public/images/" . $row['profilepic'] . "' alt='' id='profileImage'>
                            ";
                        }


                        ?>
                    </div>
                    <div class='section right-pic'>
                        <!-- PROFILE PICTURE -->
                        <div class='fields'>
                            <label for='mem-pic'>Upload Profile Icon</label>
                            <input type='file' accept='.png, .jpg, .jpeg' id='mem-pic' name='profile'>
                        </div>

                        <!-- MEMBER STATUS -->
                        <div class='fields'>
                            <label for='mem-status'>Member Status</label>
                            <input type='text' name='mem-status' onclick="toggle(this, 'mem-status-select')"
                                id='mem-status-input' value='<?php echo $row['mem_stat']; ?>'>
                            <select name='mem-status' onchange="toggle(this, 'mem-status-input')" id='mem-status-select'
                                style='display:none'>
                                <option value='' selected disabled>Select Status</option>
                                <option value='Active'>Active</option>
                                <option value='Expired'>Expired</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='mem-firstname'>Firstname<span> *</span></label>
                            <input type='text' id='mem-firstname' name='firstname' maxlength="25" pattern="[A-Za-z ]{2,25}" value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='mem-midname'>Middlename</label>
                            <input type='text' id='mem-midname' name='middlename' maxlength="25" pattern="[A-Za-z ]{2,25}" value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='mem-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='mem-lastname' name='lastname' maxlength="25" pattern="[A-Za-z ]{2,25}" value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='mem-extension'>Extension Name</label>
                            <input type='text' id='mem-extension' name='extension'
                            maxlength="5" pattern="[A-Za-z1-9]{2,5}" value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- MEMBERS ROLE -->
                        <div class='fields'>
                            <label for='role'>Member's role<span> *</span></label>
                            <input type='text' name='role' id='select-mem-input' onclick="toggle(this, 'select-mem-select')" value='<?php echo $row['mem_role']; ?>'>
                            <select name='role' id='select-mem-select' onchange="toggle(this, 'select-mem-input')" style='display:none'>
                                <option value='' selected disabled>Select Status</option>
                                <option value='Driver'>Driver</option>
                                <option value='Operator'>Operator</option>
                                <option value='Both'>Both</option>
                                <option value='Officer'>Officer</option>
                            </select>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' value='<?php echo $row['gender']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <div class='main'>
                    <div class='left-side-profile section'>
                        <h3>Address</h3>
                        <!-- STREET -->
                        <div class='fields'>
                            <label for='mem-street'>Street<span> *</span></label>
                            <input type='text' id='mem-street' name='street' maxlength="25" value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='mem-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='mem-brgy' name='barangay' maxlength="25" value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='mem-city'>City<span> *</span></label>
                            <input type='text' id='mem-city' name='city' maxlength="25" value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='mem-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='mem-contact' name='contact' placeholder="09XXXXXXXXX" maxlength="11"
                            pattern="[0-9]{11}" value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- LICENSE NUMBER -->
                        <div class='fields'>
                            <label for='mem-license'>License no.<span> *</span></label>
                            <input type='text' id='mem-license' name='license' oninput="handleInput()"
                            pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" value='<?php echo $row['license_no']; ?>'>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src='../../services/editMember.js'></script>
</body>

</html>


================================================
FILE: views/pages/editmem_sec.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $memberID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM mem_info WHERE id = '$memberID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit Member Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form id='edit-mem' action='updatemem_sec.php?id=<?php echo $memberID; ?>' method='POST'
            enctype='multipart/form-data'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Member
                    Information</h3>
                <div class='btn-container'>
                    <a href='viewmem_sec.php?id=<?php echo $memberID?>'><input type='button' value='Discard'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button id='member-update' class='update-btn modal-btn' type='submit' disabled>Update</button>
                </div>
            </div>

            <div class='pic-container'>
                <h3>Profile Picture</h3>
                <div class='main'>
                    <div class='section left-pic'>
                        <?php

                        if (empty($row['profilepic'])) {
                            echo "<img src='../../public/assets/defuser_icon.png' alt='' id='profileImage'>";
                        } else {

                            echo "
                            <img src='../../public/images/" . $row['profilepic'] . "' alt='' id='profileImage'>
                            ";
                        }


                        ?>
                    </div>
                    <div class='section right-pic'>
                        <!-- PROFILE PICTURE -->
                        <div class='fields'>
                            <label for='mem-pic'>Upload Profile Icon</label>
                            <input type='file' accept='.png, .jpg, .jpeg' id='mem-pic' name='profile'>
                        </div>

                        <!-- MEMBER STATUS -->
                        <div class='fields'>
                            <label for='mem-status'>Member Status</label>
                            <input type='text' name='mem-status' onclick="toggle(this, 'mem-status-select')"
                                id='mem-status-input' value='<?php echo $row['mem_stat']; ?>'>
                            <select name='mem-status' onchange="toggle(this, 'mem-status-input')" id='mem-status-select'
                                style='display:none'>
                                <option value='' selected disabled>Select Status</option>
                                <option value='Active'>Active</option>
                                <option value='Expired'>Expired</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='mem-firstname'>Firstname<span> *</span></label>
                            <input type='text' id='mem-firstname' name='firstname' maxlength="25" pattern="[A-Za-z ]{2,25}" value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='mem-midname'>Middlename</label>
                            <input type='text' id='mem-midname' name='middlename' maxlength="25" pattern="[A-Za-z ]{2,25}" value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='mem-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='mem-lastname' name='lastname' maxlength="25" pattern="[A-Za-z ]{2,25}" value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='mem-extension'>Extension Name</label>
                            <input type='text' id='mem-extension' name='extension'
                            maxlength="5" pattern="[A-Za-z1-9]{2,5}" value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- MEMBERS ROLE -->
                        <div class='fields'>
                            <label for='role'>Member's role<span> *</span></label>
                            <input type='text' name='role' id='select-mem-input' onclick="toggle(this, 'select-mem-select')" value='<?php echo $row['mem_role']; ?>'>
                            <select name='role' id='select-mem-select' onchange="toggle(this, 'select-mem-input')" style='display:none'>
                                <option value='' selected disabled>Select Status</option>
                                <option value='Driver'>Driver</option>
                                <option value='Operator'>Operator</option>
                                <option value='Both'>Both</option>
                                <option value='Officer'>Officer</option>
                            </select>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' value='<?php echo $row['gender']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <div class='main'>
                    <div class='left-side-profile section'>
                        <h3>Address</h3>
                        <!-- STREET -->
                        <div class='fields'>
                            <label for='mem-street'>Street<span> *</span></label>
                            <input type='text' id='mem-street' name='street' maxlength="25" value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='mem-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='mem-brgy' name='barangay' maxlength="25" value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='mem-city'>City<span> *</span></label>
                            <input type='text' id='mem-city' name='city' maxlength="25" value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='mem-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='mem-contact' name='contact' placeholder="09XXXXXXXXX" maxlength="11"
                            pattern="[0-9]{11}" value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- LICENSE NUMBER -->
                        <div class='fields'>
                            <label for='mem-license'>License no.<span> *</span></label>
                            <input type='text' id='mem-license' name='license' oninput="handleInput()"
                            pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" value='<?php echo $row['license_no']; ?>'>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src='../../services/editMember.js'></script>
</body>

</html>


================================================
FILE: views/pages/editprograms.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}


// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $programID = $_GET['id'];
    ?>


    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Edit Events & Programs</title>

        <!-- STYLESHEET -->
        <link rel='stylesheet' href='../../public/css/editpages.css'>
        <!-- WEB ICON -->
        <link rel='icon' href='../../public/assets/browse_logo.png'>
        <!-- FONT AWESOME/ICONS -->
        <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
    </head>

    <body>

        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='content-container'>
            <form action='updateprograms.php?id=<?php echo $programID; ?>' method='post'>
                <div class='ot-header'>
                    <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Events &
                        Programs</h3>
                    <div class='btn-container'>
                        <a href='../../views/php/dashboard.php'><input type='button' value='Discard'
                                class='cancelBtn modal-btn' id='cancel-btn'></a>
                        <button class='update-btn modal-btn' id='events-update' type='submit'
                            name='events-update'>Update</button>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Event/Program Description</h3>

                    <?php

                    $sql = "SELECT * FROM events_programs WHERE id = $programID";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo "
                        <!-- EVENT TITLE -->
                        <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title'  value='" . $row['ep_title'] . "'>
                        </div>";

                        $sql1 = "SELECT * FROM `transaction_expenses` WHERE program_ID = $programID";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result1) > 0) {
                            $row1 = mysqli_fetch_assoc($result1);

                            echo "
                            <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- EVENT CODE -->
                                <div class='fields'>
                                    <label for='event-code'>Transaction Code</label>
                                    <input type='text' id='event-code' name='event-code'  value='" . $row1['transaction_code'] . "' disabled>
                                </div>
                            </div>
                            <div class='right-side-emp section'>
                                <!-- EVENT BUDGET -->
                                <div class='fields'>
                                    <label for='event-budget'>Budget</label>
                                    <input type='text' id='event-budget'  name='event-budget' value='" . $row1['amount'] . "' disabled>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                    </div>

                    <?php

                    echo "
                        <div class='profile-container'>
                    <h3>Event/Program Details</h3>
                    <div class='main'>
                        <div class='left-side-profile section'>
                            <!-- EVENT ORGANIZER -->
                            <div class='fields'>
                                <label for='event-organizer'>Organizer<span> *</span></label>
                                <input type='text' id='event-organizer' name='event-organizer'  value='" . $row['ep_organizer'] . "'>
                            </div>
                            <!-- EVENT LOCATION -->
                            <div class='fields'>
                                <label for='event-location'>Location<span> *</span></label>
                                <input type='text' id='event-location' name='event-location'  value='" . $row['ep_location'] . "'>
                            </div>
                        </div>
                        <div class='right-side-profile section'>
                            <!-- EVENT TIME -->
                            <div class='fields'>
                                <label for='event-time'>Time<span> *</span></label>
                                <input type='time' id='event-time' name='event-time'  value='" . $row['ep_start'] . "'>
                            </div>
                            <!-- EVENT DATE -->
                            <div class='fields'>
                                <label for='event-date'>Date<span> *</span></label>
                                <input type='date' id='event-date' name='event-date'  value='" . $row['ep_date'] . "'>
                            </div>
                        </div>
                    </div>
                    <!-- EVENT DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-description'>Description<span> *</span></label>
                        <textarea name='event-description' id='event-description' >" . $row['ep_description'] . "</textarea>
                    </div>
                </div>
                        ";

                    }
}

?>
        </form>
    </div>

    <script src='../../services/editprogram.js'></script>
</body>

</html>


================================================
FILE: views/pages/editprograms_vice.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}


// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $programID = $_GET['id'];
    ?>


    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Edit Events & Programs</title>

        <!-- STYLESHEET -->
        <link rel='stylesheet' href='../../public/css/editpages.css'>
        <!-- WEB ICON -->
        <link rel='icon' href='../../public/assets/browse_logo.png'>
        <!-- FONT AWESOME/ICONS -->
        <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
    </head>

    <body>

        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='content-container'>
            <form action='updateprograms_vice.php?id=<?php echo $programID; ?>' method='post'>
                <div class='ot-header'>
                    <h3><a href='../../views/php/viceview.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Events &
                        Programs</h3>
                    <div class='btn-container'>
                        <a href='../../views/php/viceview.php'><input type='button' value='Discard'
                                class='cancelBtn modal-btn' id='cancel-btn'></a>
                        <button class='update-btn modal-btn' id='events-update' type='submit'
                            name='events-update'>Update</button>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Event/Program Description</h3>

                    <?php

                    $sql = "SELECT * FROM events_programs WHERE id = $programID";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo "
                        <!-- EVENT TITLE -->
                        <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title'  value='" . $row['ep_title'] . "'>
                        </div>";

                        $sql1 = "SELECT * FROM `transaction_expenses` WHERE program_ID = $programID";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result1) > 0) {
                            $row1 = mysqli_fetch_assoc($result1);

                            echo "
                            <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- EVENT CODE -->
                                <div class='fields'>
                                    <label for='event-code'>Transaction Code</label>
                                    <input type='text' id='event-code' name='event-code'  value='" . $row1['transaction_code'] . "' disabled>
                                </div>
                            </div>
                            <div class='right-side-emp section'>
                                <!-- EVENT BUDGET -->
                                <div class='fields'>
                                    <label for='event-budget'>Budget</label>
                                    <input type='text' id='event-budget'  name='event-budget' value='" . $row1['amount'] . "' disabled>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                    </div>

                    <?php

                    echo "
                        <div class='profile-container'>
                    <h3>Event/Program Details</h3>
                    <div class='main'>
                        <div class='left-side-profile section'>
                            <!-- EVENT ORGANIZER -->
                            <div class='fields'>
                                <label for='event-organizer'>Organizer<span> *</span></label>
                                <input type='text' id='event-organizer' name='event-organizer'  value='" . $row['ep_organizer'] . "'>
                            </div>
                            <!-- EVENT LOCATION -->
                            <div class='fields'>
                                <label for='event-location'>Location<span> *</span></label>
                                <input type='text' id='event-location' name='event-location'  value='" . $row['ep_location'] . "'>
                            </div>
                        </div>
                        <div class='right-side-profile section'>
                            <!-- EVENT TIME -->
                            <div class='fields'>
                                <label for='event-time'>Time<span> *</span></label>
                                <input type='time' id='event-time' name='event-time'  value='" . $row['ep_start'] . "'>
                            </div>
                            <!-- EVENT DATE -->
                            <div class='fields'>
                                <label for='event-date'>Date<span> *</span></label>
                                <input type='date' id='event-date' name='event-date'  value='" . $row['ep_date'] . "'>
                            </div>
                        </div>
                    </div>
                    <!-- EVENT DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-description'>Description<span> *</span></label>
                        <textarea name='event-description' id='event-description' >" . $row['ep_description'] . "</textarea>
                    </div>
                </div>
                        ";

                    }
}

?>
        </form>
    </div>

    <script src='../../services/editprogram.js'></script>
</body>

</html>


================================================
FILE: views/pages/editunit.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

date_default_timezone_set('Asia/Manila');

// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $unitID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    $sql = "SELECT * FROM unit_info WHERE id = '$unitID'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 0) {
        echo 'user does not exist';
        exit();
    } else {

        $row = mysqli_fetch_assoc($result);

        // Fetch member information
        $memID = $row['mem_id'];

        $sql1 = "SELECT * FROM `mem_info` WHERE (mem_role = 'Operator' OR mem_role = 'Both')";
        $result1 = $conn->query($sql1);

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Unit</title>

            <!-- STYLESHEET -->
            <link rel="stylesheet" href="../../public/css/editpages.css">
            <!-- WEB ICON -->
            <link rel="icon" href="../../public/assets/browse_logo.png">
            <!-- FONT AWESOME/ICONS -->
            <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
        </head>

        <body>

            <div class="head-container">
                <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
            </div>
            <div class="content-container">

                <form action="updateunit.php?id=<?php echo $unitID ?>" method="POST">
                    <div class="ot-header">
                        <h3><a href="../../views/pages/unitinfo.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Unit
                            Information</h3>
                        <div class="btn-container">
                            <a href="../../views/pages/unitinfo.php"><input type="button" value="Discard"
                                    class="cancelBtn modal-btn" id="cancel-btn"></a>
                            <button class="update-btn modal-btn" id="user-update" type="submit"
                                name="user-update">Update</button>
                        </div>
                    </div>

                    <!-- <input type="hidden" name="id" value=""> -->
                    <div class="user-container">
                        <h3>Personal Information</h3>
                        <div class="main">
                            <div class="left-side-emp section">
                                <div class="fields">
                                    <label for="add-unit">Member Name <span> *</span></label>
                                    <select name="add_unit" id="add-unit" required>
                                        <?php
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                                            $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                                            $lastName = $row1["lname"];

                                            if (empty($row1["exname"])) {
                                                $lastName .= ', ';
                                            }

                                            $selected = ($row1['id'] == $row['mem_id']) ? 'selected' : '';

                                            echo "<option value='" . $row1['id'] . "' " . $selected . ">" . $lastName . $extensionName . $row1["fname"] . " " . $middleInitial . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>

                            <div class="right-side-emp section">

                            </div>
                        </div>
                    </div>

                    <div class="profile-container">
                        <h3>Sidecar Information</h3>
                        <div class="main">
                            <div class="left-side-profile section">
                                <!-- BODY NO. -->
                                <div class="fields">
                                    <label for="unit-bodyno">Body No. <span> *</span></label>
                                    <input type="text" id="unit-bodyno" pattern="[0-9]*" maxlenght="4" name="unitbody_no"
                                        required value='<?php echo $row['body_no']; ?>'>
                                </div>

                                <!-- BODY COLOR -->
                                <div class="fields">
                                    <label for="unit-bodycolor">Body Color <span> *</span></label>
                                    <select name='unitbody_color' id='unit-bodycolor' required>
                                        <option value="Blue" <?php if ($row['body_color'] == 'Blue')
                                            echo 'selected'; ?>>Blue
                                        </option>
                                        <option value="Red" <?php if ($row['body_color'] == 'Red')
                                            echo 'selected'; ?>>Red
                                        </option>
                                        <option value="Orange" <?php if ($row['body_color'] == 'Orange')
                                            echo 'selected'; ?>>
                                            Orange</option>
                                        <option value="Yellow" <?php if ($row['body_color'] == 'Yellow')
                                            echo 'selected'; ?>>
                                            Yellow</option>
                                        <option value="Green" <?php if ($row['body_color'] == 'Green')
                                            echo 'selected'; ?>>Green
                                        </option>
                                        <option value="Indigo" <?php if ($row['body_color'] == 'Indigo')
                                            echo 'selected'; ?>>
                                            Indigo</option>
                                        <option value="Violet" <?php if ($row['body_color'] == 'Violet')
                                            echo 'selected'; ?>>
                                            Violet</option>
                                        <option value="Purple" <?php if ($row['body_color'] == 'Purple')
                                            echo 'selected'; ?>>
                                            Purple</option>
                                        <option value="Pink" <?php if ($row['body_color'] == 'Pink')
                                            echo 'selected'; ?>>Pink
                                        </option>
                                        <option value="Silver" <?php if ($row['body_color'] == 'Silver')
                                            echo 'selected'; ?>>
                                            Silver</option>
                                        <option value="Gold" <?php if ($row['body_color'] == 'Gold')
                                            echo 'selected'; ?>>Gold
                                        </option>
                                        <option value="Beige" <?php if ($row['body_color'] == 'Beige')
                                            echo 'selected'; ?>>Beige
                                        </option>
                                        <option value="Brown" <?php if ($row['body_color'] == 'Brown')
                                            echo 'selected'; ?>>Brown
                                        </option>
                                        <option value="Grey/Gray" <?php if ($row['body_color'] == 'Grey/Gray')
                                            echo 'selected'; ?>>Grey/Gray</option>
                                        <option value="Black" <?php if ($row['body_color'] == 'Black')
                                            echo 'selected'; ?>>Black
                                        </option>
                                        <option value="White" <?php if ($row['body_color'] == 'White')
                                            echo 'selected'; ?>>White
                                        </option>

                                    </select>
                                </div>

                                <!-- FRANCHISE NO. -->
                                <div class="fields">
                                    <label for="unit_franno">Franchise No. <span> *</span></label>
                                    <input type="text" id="unit-franno" pattern="[0-9]*" name="unitfran_no" required
                                        value='<?php echo $row['franchise_no']; ?>'>
                                </div>
                            </div>

                            <div class="right-side-profile section">

                                <!-- FRANCHISE DATE ISSUED -->
                                <div class="fields">
                                    <label for="unit-franissue">Franchise Date issued <span> *</span></label>
                                    <input type="date" id="unit-franissue" name="unitfran_issue" required
                                        value="<?php echo $row['date_issue']; ?>" max="<?= date('Y-m-d') ?>"
                                        onchange="updateUnitFranvalid()">
                                </div>


                                <!-- FRANCHISE DATE VALID -->
                                <div class=" fields">
                                    <label for="unit-franvalid">Franchise Date Valid <span> *</span></label>
                                    <input type="date" id="unit-franvalid" name="unitfran_valid"
                                        value='<?php echo $row['date_valid']; ?>' READONLY>
                                </div>

                                <!-- AREA CODE -->
                                <div class="fields">
                                    <label for="unit-area">Area Code <span> *</span></label>
                                    <input type="text" id="unit-area" pattern="[0-9]*" name="unit_area" required
                                        value='<?php echo $row['area_code']; ?>'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h3>Motorcycle Information</h3>
                        <div class="main">
                            <div class="section">
                                <div class="fields">
                                    <label for="unit_motor_no">Motor No. <span> *</span></label>
                                    <input type="text" required name="unit_motor_no" pattern="[0-9]*" maxlenght="4"
                                        value='<?php echo $row['motor_no']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="unit_chasis_no">Chasis No. <span> *</span></label>
                                    <input type="text" name="unit_chasis_no" required value='<?php echo $row['chasis_no']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="unit_plate_no">Plate No. <span> *</span></label>
                                    <input type="text" name="unit_plate_no" required value='<?php echo $row['plate_no']; ?>'>
                                </div>
                            </div>
                            <div class="section">
                                <div class="fields">
                                    <label for="unit_or">LTO OR <span> *</span></label>
                                    <input type="text" name="unit_or" required value='<?php echo $row['lto_or']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="unit_cr">LTO CR <span> *</span></label>
                                    <input type="text" name="unit_cr" required value='<?php echo $row['lto_cr']; ?>'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h3>Other Info</h3>
                        <div class="main">
                            <div class="section">
                                <!-- DISTRICT -->
                                <div class="fields">
                                    <label for="unit-district">District <span> *</span></label>
                                    <input type="text" id="unit-district" pattern="[0-9]*" maxlenght="2" name="unit_district"
                                        required value='<?php echo $row['district']; ?>'>
                                </div>
                            </div>
                            <div class="section">
                                <!-- CONTROL PLATE -->
                                <div class="fields">
                                    <label for="unit-controlplate">Control Plate <span> *</span></label>
                                    <input type="text" id="unit-controlplate" name="unit_controlplate" required
                                        value='<?php echo $row['control_plate']; ?>'>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- SCRIPT VALIDATION -->
            <script src='../../services/addunit.js'></script>
        </body>

        </html>

        <?php
    }
}
?>


================================================
FILE: views/pages/editunit_sec.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

date_default_timezone_set('Asia/Manila');

// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $unitID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    $sql = "SELECT * FROM unit_info WHERE id = '$unitID'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 0) {
        echo 'user does not exist';
        exit();
    } else {

        $row = mysqli_fetch_assoc($result);

        // Fetch member information
        $memID = $row['mem_id'];

        $sql1 = "SELECT * FROM `mem_info` WHERE (mem_role = 'Operator' OR mem_role = 'Both')";
        $result1 = $conn->query($sql1);

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Unit</title>

            <!-- STYLESHEET -->
            <link rel="stylesheet" href="../../public/css/editpages.css">
            <!-- WEB ICON -->
            <link rel="icon" href="../../public/assets/browse_logo.png">
            <!-- FONT AWESOME/ICONS -->
            <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
        </head>

        <body>

            <div class="head-container">
                <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
            </div>
            <div class="content-container">

                <form action="updateunit_sec.php?id=<?php echo $unitID ?>" method="POST">
                    <div class="ot-header">
                        <h3><a href="../../views/pages/unitinfo_sec.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Unit
                            Information</h3>
                        <div class="btn-container">
                            <a href="../../views/pages/unitinfo_sec.php"><input type="button" value="Discard"
                                    class="cancelBtn modal-btn" id="cancel-btn"></a>
                            <button class="update-btn modal-btn" id="user-update" type="submit"
                                name="user-update">Update</button>
                        </div>
                    </div>

                    <!-- <input type="hidden" name="id" value=""> -->
                    <div class="user-container">
                        <h3>Personal Information</h3>
                        <div class="main">
                            <div class="left-side-emp section">
                                <div class="fields">
                                    <label for="add-unit">Member Name <span> *</span></label>
                                    <select name="add_unit" id="add-unit" required>
                                        <?php
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                                            $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                                            $lastName = $row1["lname"];

                                            if (empty($row1["exname"])) {
                                                $lastName .= ', ';
                                            }

                                            $selected = ($row1['id'] == $row['mem_id']) ? 'selected' : '';

                                            echo "<option value='" . $row1['id'] . "' " . $selected . ">" . $lastName . $extensionName . $row1["fname"] . " " . $middleInitial . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>

                            <div class="right-side-emp section">

                            </div>
                        </div>
                    </div>

                    <div class="profile-container">
                        <h3>Sidecar Information</h3>
                        <div class="main">
                            <div class="left-side-profile section">
                                <!-- BODY NO. -->
                                <div class="fields">
                                    <label for="unit-bodyno">Body No. <span> *</span></label>
                                    <input type="text" id="unit-bodyno" pattern="[0-9]*" maxlenght="4" name="unitbody_no"
                                        required value='<?php echo $row['body_no']; ?>'>
                                </div>

                                <!-- BODY COLOR -->
                                <div class="fields">
                                    <label for="unit-bodycolor">Body Color <span> *</span></label>
                                    <select name='unitbody_color' id='unit-bodycolor' required>
                                        <option value="Blue" <?php if ($row['body_color'] == 'Blue')
                                            echo 'selected'; ?>>Blue
                                        </option>
                                        <option value="Red" <?php if ($row['body_color'] == 'Red')
                                            echo 'selected'; ?>>Red
                                        </option>
                                        <option value="Orange" <?php if ($row['body_color'] == 'Orange')
                                            echo 'selected'; ?>>
                                            Orange</option>
                                        <option value="Yellow" <?php if ($row['body_color'] == 'Yellow')
                                            echo 'selected'; ?>>
                                            Yellow</option>
                                        <option value="Green" <?php if ($row['body_color'] == 'Green')
                                            echo 'selected'; ?>>Green
                                        </option>
                                        <option value="Indigo" <?php if ($row['body_color'] == 'Indigo')
                                            echo 'selected'; ?>>
                                            Indigo</option>
                                        <option value="Violet" <?php if ($row['body_color'] == 'Violet')
                                            echo 'selected'; ?>>
                                            Violet</option>
                                        <option value="Purple" <?php if ($row['body_color'] == 'Purple')
                                            echo 'selected'; ?>>
                                            Purple</option>
                                        <option value="Pink" <?php if ($row['body_color'] == 'Pink')
                                            echo 'selected'; ?>>Pink
                                        </option>
                                        <option value="Silver" <?php if ($row['body_color'] == 'Silver')
                                            echo 'selected'; ?>>
                                            Silver</option>
                                        <option value="Gold" <?php if ($row['body_color'] == 'Gold')
                                            echo 'selected'; ?>>Gold
                                        </option>
                                        <option value="Beige" <?php if ($row['body_color'] == 'Beige')
                                            echo 'selected'; ?>>Beige
                                        </option>
                                        <option value="Brown" <?php if ($row['body_color'] == 'Brown')
                                            echo 'selected'; ?>>Brown
                                        </option>
                                        <option value="Grey/Gray" <?php if ($row['body_color'] == 'Grey/Gray')
                                            echo 'selected'; ?>>Grey/Gray</option>
                                        <option value="Black" <?php if ($row['body_color'] == 'Black')
                                            echo 'selected'; ?>>Black
                                        </option>
                                        <option value="White" <?php if ($row['body_color'] == 'White')
                                            echo 'selected'; ?>>White
                                        </option>

                                    </select>
                                </div>

                                <!-- FRANCHISE NO. -->
                                <div class="fields">
                                    <label for="unit_franno">Franchise No. <span> *</span></label>
                                    <input type="text" id="unit-franno" pattern="[0-9]*" name="unitfran_no" required
                                        value='<?php echo $row['franchise_no']; ?>'>
                                </div>
                            </div>

                            <div class="right-side-profile section">

                                <!-- FRANCHISE DATE ISSUED -->
                                <div class="fields">
                                    <label for="unit-franissue">Franchise Date issued <span> *</span></label>
                                    <input type="date" id="unit-franissue" name="unitfran_issue" required
                                        value="<?php echo $row['date_issue']; ?>" max="<?= date('Y-m-d') ?>"
                                        onchange="updateUnitFranvalid()">
                                </div>


                                <!-- FRANCHISE DATE VALID -->
                                <div class=" fields">
                                    <label for="unit-franvalid">Franchise Date Valid <span> *</span></label>
                                    <input type="date" id="unit-franvalid" name="unitfran_valid"
                                        value='<?php echo $row['date_valid']; ?>' READONLY>
                                </div>

                                <!-- AREA CODE -->
                                <div class="fields">
                                    <label for="unit-area">Area Code <span> *</span></label>
                                    <input type="text" id="unit-area" pattern="[0-9]*" name="unit_area" required
                                        value='<?php echo $row['area_code']; ?>'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h3>Motorcycle Information</h3>
                        <div class="main">
                            <div class="section">
                                <div class="fields">
                                    <label for="unit_motor_no">Motor No. <span> *</span></label>
                                    <input type="text" required name="unit_motor_no" pattern="[0-9]*" maxlenght="4"
                                        value='<?php echo $row['motor_no']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="unit_chasis_no">Chasis No. <span> *</span></label>
                                    <input type="text" name="unit_chasis_no" required value='<?php echo $row['chasis_no']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="unit_plate_no">Plate No. <span> *</span></label>
                                    <input type="text" name="unit_plate_no" required value='<?php echo $row['plate_no']; ?>'>
                                </div>
                            </div>
                            <div class="section">
                                <div class="fields">
                                    <label for="unit_or">LTO OR <span> *</span></label>
                                    <input type="text" name="unit_or" required value='<?php echo $row['lto_or']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="unit_cr">LTO CR <span> *</span></label>
                                    <input type="text" name="unit_cr" required value='<?php echo $row['lto_cr']; ?>'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h3>Other Info</h3>
                        <div class="main">
                            <div class="section">
                                <!-- DISTRICT -->
                                <div class="fields">
                                    <label for="unit-district">District <span> *</span></label>
                                    <input type="text" id="unit-district" pattern="[0-9]*" maxlenght="2" name="unit_district"
                                        required value='<?php echo $row['district']; ?>'>
                                </div>
                            </div>
                            <div class="section">
                                <!-- CONTROL PLATE -->
                                <div class="fields">
                                    <label for="unit-controlplate">Control Plate <span> *</span></label>
                                    <input type="text" id="unit-controlplate" name="unit_controlplate" required
                                        value='<?php echo $row['control_plate']; ?>'>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- SCRIPT VALIDATION -->
            <script src='../../services/addunit.js'></script>
        </body>

        </html>

        <?php
    }
}
?>


================================================
FILE: views/pages/edituser.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// Retrieve the user ID from the URL parameter
if (!isset($_GET['user_id'])) {
    // Handle the case when user_id is not provided
    // Display an error message or redirect to another page
    // ...
} else {
    $user_id = $_GET['user_id'];
    
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the user data based on the user ID
    $sql = "SELECT user_id, F_name, L_name, M_name, ex_name, contact, roles, email, username, psword FROM user WHERE user_id = $user_id";
    $result = $conn->query($sql);

    // Check if a user with the provided user ID exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();

        // Assign the user data to variables
        $user_id = $row["user_id"];
        $F_name = $row["F_name"];
        $L_name = $row["L_name"];
        $M_name = $row["M_name"];
        $ex_name = $row["ex_name"];
        $contact = $row["contact"];
        $roles = $row["roles"];
        $email = $row["email"];
        $username = $row["username"];
        $psword = $row["psword"];
    } else {
        // Handle the case when a user with the provided user ID doesn't exist
        // Display an error message or redirect to another page
        // ...
    }

    // close MySQL connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/edituser.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/browse_logo.png">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
    </div>

    <div class="content-container">
    <form action="../pages/updateuser.php?user_id=<?php echo $user_id; ?>" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")' id="user-form">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit User Account</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="user-update" type="submit" name="user-update">Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Personal Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="user-firstname">Firstname<span> *</span></label>
                            <input type="text" id="user-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}" placeholder="Firstname" value="<?php echo $F_name; ?>" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="user-midname">Middlename</label>
                            <input type="text" id="user-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}" placeholder="Middlename" value="<?php echo $M_name; ?>">
                        </div>

                         <!-- LASTNAME -->
                        <div class="fields">
                            <label for="user-lastname">Lastname<span> *</span></label>
                            <input type="text" id="user-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}" placeholder="Lastname" value="<?php echo $L_name; ?>" required>
                        </div>
                    </div>

                    <div class="right-side-emp section">
                          <!-- USERS ROLE -->
                          <div class="fields">
                            <label for="select-role">User's role<span> *</span></label>
                            <select name="userrole" id="select-role" required>
                                <option value="" disabled>Select Role</option>
                                <option value="President" <?php if ($roles == 'President') echo 'selected'; ?>>President</option>
                                <option value="Vice President" <?php if ($roles == 'Vice President') echo 'selected'; ?>>Vice President</option>
                                <option value="Secretary" <?php if ($roles == 'Secretary') echo 'selected'; ?>>Secretary</option>
                                <option value="Treasurer" <?php if ($roles == 'Treasurer') echo 'selected'; ?>>Treasurer</option>
                                <option value="Auditor" <?php if ($roles == 'Auditor') echo 'selected'; ?>>Auditor</option>
                            </select>
                        </div>

                         <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="user-extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="user-extension" name="extension" placeholder="eg. Jr, Sr" value="<?php echo $ex_name; ?>">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="profile-container">
                <h3>Contact Information</h3>
                <div class="main">
                    <div class="left-side-profile section">
                       
                    </div>

                    <div class="right-side-profile section">
                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="mem-contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" maxlength="11" id="mem-contact" name="contact" placeholder="eg. 09592220954" value="<?php echo $contact; ?>" required>
                        </div>

                         <!-- EMAIL -->
                        <div class="fields">
                            <label for="user-email">Email Adress<span> *</span></label>
                            <input type="email" id="user-email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $email; ?>" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="password-container">
                <h3>Password</h3>
                <div class="main">
                    <div class="section">
                        <!-- USERNAME -->
                        <div class="fields">
                            <label for="mem-username">Username<span> *</span></label>
                            <input type="text" id="mem-username" name="username" maxlength="25" placeholder="Username" value="<?php echo $username; ?>">
                        </div>
                    </div>
                    <div class="section">
                        <!-- PASSWORD -->
                        <div class="fields">
                            <label for="user-pass">Password<span> *</span></label>
                            <input type="password" id="user-pass" name="barangay" minlength="8" maxlength="16" value="<?php echo $psword; ?>" required>
                        </div>

                         <!-- SEE PASSWORD -->
                         <div class="see-password-container">
                            <input class="see-pass" type="checkbox" id="see-pass">
                            <label class="see-pass-label" for="see-pass">See password</label>
                        </div>
                    </div>
                </div>
            </div>
            <script>

</script>
        </form>

    <!-- SUCCESS TOAST -->
    <div class="toast-container" id="toast-success">
        <div class="toast-left-success">
            <i class="toast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="toast-right">
            <p><strong>Success!</strong> User successfully updated.</p>
        </div>
    </div>

    </div>
    
    <script src="../../services/edituser.js"></script>
</body>
</html>


================================================
FILE: views/pages/insertComplainant.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";
    
    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    include "../views/php/db_conn.php";

    // Start of Complaint Module

    // Get Data from form submission
    $complaintLastName = $_POST["complaintLastname"];
    $complaintFirstName = $_POST["complaintFirstname"];
    $complaintMiddleName = $_POST["complaintMiddlename"];
    $complaintExtensionName = $_POST["extension"];
    $complaintGender = $_POST["gender"];
    $contactNumber = $_POST["contact"];

    // Complainant Details
    $sql = "INSERT INTO complaint_info (lname, fname, mname, exname, gender, phone) VALUES ('$complaintLastName', '$complaintFirstName', '$complaintMiddleName', '$complaintExtensionName', '$complaintGender', '$contactNumber')";
        if (mysqli_query($conn, $sql)) {
            $complaintId = mysqli_insert_id($conn);
            header("Location: ../php/dashboard.php?id=$complaint_id&success=true%complaint");
            exit();
        } else {
            echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
        }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Complaintant</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="../../public/css/editpages.css">
        <!-- WEB ICON -->
        <link rel="icon" href="../../public/assets/browse_logo.png">
        <!-- FONT AWESOME/ICONS -->
        <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>

        <div class="head-container">
            <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
        </div>

        <div class="content-container">
            <form method="post" id="complaint-form">
                <div class="ot-header">
                    <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>New Complainant Details</h3>
                    <div class="btn-container">
                        <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                        <button class="update-btn modal-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>

                <!-- <input type="hidden" name="id" value=""> -->
                <div class="user-container">
                    <h3>Complainant Information</h3>
                    <div class="main">
                        <div class="left-side-emp section">
                        <!-- LASTNAME -->
                            <div class="fields">
                                <label for="complaintLastname">Lastname<span> *</span></label>
                                <input type="text" id="complaintLastname" name="complaintLastname" placeholder="Dela Cruz" required>
                            </div>

                            <!-- FIRSTNAME -->
                            <div class="fields">
                                <label for="complaintFirstname">Firstname<span> *</span></label>
                                <input type="text" id="complaintFirstname" name="complaintFirstname" placeholder="Juan" required>
                            </div>

                            <!-- MIDNAME -->
                            <div class="fields">
                                <label for="complaintMiddlename">Middlename</label>
                                <input type="text" id="complaintMiddlename" name="complaintMiddlename" placeholder="Reyes">
                            </div>
                        </div>

                        <div class="right-side-emp section">
                            <!-- EXTENSION NAME -->
                            <div class="fields">
                                <label for="extension">Extension Name</label>
                                <input type="text" pattern="[A-Za-z.]{2,5}" id="extension" name="extension" placeholder="eg. Jr, Sr">
                            </div>

                            <!-- GENDER -->
                            <div class="fields">
                                <label for="gender">Sex<span> *</span></label>
                                <select name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="none">Prefer not to say</option>
                                </select>
                            </div>

                            <!-- CONTACT NUMBER -->
                            <div class="fields">
                                <label for="contact">Contact no.<span> *</span></label>
                                <input type="text" pattern="[0-9]{11}" id="contact" name="contact" placeholder="eg. 09592220954" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src='../../services/editComplaint.js'></script>
    </body>
</html>



================================================
FILE: views/pages/insertComplainant_vice.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";
    
    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    include "../views/php/db_conn.php";

    // Start of Complaint Module

    // Get Data from form submission
    $complaintLastName = $_POST["complaintLastname"];
    $complaintFirstName = $_POST["complaintFirstname"];
    $complaintMiddleName = $_POST["complaintMiddlename"];
    $complaintExtensionName = $_POST["extension"];
    $complaintGender = $_POST["gender"];
    $contactNumber = $_POST["contact"];

    // Complainant Details
    $sql = "INSERT INTO complaint_info (lname, fname, mname, exname, gender, phone) VALUES ('$complaintLastName', '$complaintFirstName', '$complaintMiddleName', '$complaintExtensionName', '$complaintGender', '$contactNumber')";
        if (mysqli_query($conn, $sql)) {
            $complaintId = mysqli_insert_id($conn);
            header("Location: ../php/viceview.php?id=$complaint_id&success=true%complaint");
            exit();
        } else {
            echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
        }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Complaintant</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="../../public/css/editpages.css">
        <!-- WEB ICON -->
        <link rel="icon" href="../../public/assets/browse_logo.png">
        <!-- FONT AWESOME/ICONS -->
        <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>

        <div class="head-container">
            <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
        </div>

        <div class="content-container">
            <form method="post" id="complaint-form">
                <div class="ot-header">
                    <h3><a href="../../views/php/viceview.php"><i class="fa-solid fa-arrow-left"></i></a>New Complainant Details</h3>
                    <div class="btn-container">
                        <a href="../../views/php/viceview.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                        <button class="update-btn modal-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>

                <!-- <input type="hidden" name="id" value=""> -->
                <div class="user-container">
                    <h3>Complainant Information</h3>
                    <div class="main">
                        <div class="left-side-emp section">
                        <!-- LASTNAME -->
                            <div class="fields">
                                <label for="complaintLastname">Lastname<span> *</span></label>
                                <input type="text" id="complaintLastname" name="complaintLastname" placeholder="Dela Cruz" required>
                            </div>

                            <!-- FIRSTNAME -->
                            <div class="fields">
                                <label for="complaintFirstname">Firstname<span> *</span></label>
                                <input type="text" id="complaintFirstname" name="complaintFirstname" placeholder="Juan" required>
                            </div>

                            <!-- MIDNAME -->
                            <div class="fields">
                                <label for="complaintMiddlename">Middlename</label>
                                <input type="text" id="complaintMiddlename" name="complaintMiddlename" placeholder="Reyes">
                            </div>
                        </div>

                        <div class="right-side-emp section">
                            <!-- EXTENSION NAME -->
                            <div class="fields">
                                <label for="extension">Extension Name</label>
                                <input type="text" pattern="[A-Za-z.]{2,5}" id="extension" name="extension" placeholder="eg. Jr, Sr">
                            </div>

                            <!-- GENDER -->
                            <div class="fields">
                                <label for="gender">Sex<span> *</span></label>
                                <select name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="none">Prefer not to say</option>
                                </select>
                            </div>

                            <!-- CONTACT NUMBER -->
                            <div class="fields">
                                <label for="contact">Contact no.<span> *</span></label>
                                <input type="text" pattern="[0-9]{11}" id="contact" name="contact" placeholder="eg. 09592220954" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src='../../services/editComplaint.js'></script>
    </body>
</html>



================================================
FILE: views/pages/insertdonor.php
================================================
<?php

include "../php/db_conn.php";

// Check if the form is submitted
if (isset($_POST['user-update'])) {

    date_default_timezone_set('Asia/Manila');
    $dateToday = date('Y-m-d H:i:s');


    // Validate and sanitize the input data
    $donor_last = $_POST['donor_last'];
    $donor_first = $_POST['donor_first'];
    $donor_sex = $_POST['donor-sex'];
    $donor_mid = $_POST['donor_mid'];
    $donor_ext = $_POST['donor_ext'];
    $donor_email = $_POST['donor-email'];
    $donor_contact = $_POST['donor-contact'];
    $donor_street = $_POST['donor-street'];
    $donor_brgy = $_POST['donor-brgy'];
    $donor_city = $_POST['donor-city'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the donor information
    $sql = "INSERT INTO donor_info (lname, fname, gender, mname, exname, email, phone, street, barangay, city,date_created)
            VALUES ('$donor_last', '$donor_first', '$donor_sex', '$donor_mid', '$donor_ext', '$donor_email', '$donor_contact', '$donor_street', '$donor_brgy', '$donor_city', '$dateToday')";

    if ($conn->query($sql) === TRUE) {

        header('location: ../../views/pages/viewdonors_tres.php?success=true');
        exit();
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>


================================================
FILE: views/pages/insertunit.php
================================================
<?php
session_start();

// connect to the MySQL database
include "../php/db_conn.php";

//retrieve data from input fields


// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Manila');
$timestamp = date('Y-m-d H:i:s');

// Retrieve form data
$body = $_POST['unitbody_no'];
$color = $_POST['unitbody_color'];
$fran_no = $_POST['unitfran_no'];
$franissue = $_POST['unitfran_issue'];
$franvalid = isset($_POST['unitfran_valid']) && $_POST['unitfran_valid'] !== '' ? $_POST['unitfran_valid'] : null;
$areacode = $_POST['unit_area'];
$motor_no = $_POST['unit_motorno'];
$chasis = $_POST['unit_chasis'];
$plateno = $_POST['unit_plateno'];
$OR = $_POST['unit_OR'];
$CR = $_POST['unit_CR'];
$District = $_POST['unit_District'];
$Control = $_POST['unit_Control'];
$mem_name = $_POST['add_unit'];

//data insert for input fields
$sql = "INSERT INTO `unit_info` (body_no, mem_id, franchise_no, date_issue, date_valid, area_code,
motor_no, chasis_no, lto_cr, lto_or, plate_no, body_color, district, control_plate, date_created) 
VALUES ('$body', '$mem_name', '$fran_no', '$franissue', '$franvalid', '$areacode', '$motor_no',
'$chasis', '$OR', '$CR', '$plateno', '$color', '$District', '$Control', '$timestamp')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['insert_success'] = true;
    header('location: ../pages/unitinfo.php?success=0');
	exit();   
} else {
    echo "Error inserting data: " . $conn->error;
}


// close MySQL connection
$conn->close();
?>


================================================
FILE: views/pages/termsofuse.php
================================================
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Use</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/termsofuse.css">
    <link rel="stylesheet" href="../../public/css/loading.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/browse_logo.png">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contain-all">
    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
        <ul>
            <a href="../../views/php/dashboard.php"><li>Dashboard</li></a>
        </ul>
    </div>

    <div class="content-container">
        <div class="main-paper">
            <div class="paper-header">
                <h3>Terms of Use – MTODATA: A Management Information System for Marulas TODA (MTODA) in Valenzuela City </h3>
            </div>
            <div class="content">
                <p>Please read these terms and conditions carefully before using the MTODATA application operated by Diploma of Information Communication Technology Students from the Polytechnic University of the Philippines.</p>
            </div>
            <div class="paper-header">
                <h3>Conditions of Use</h3>
            </div>
            <div class="content">
                <p>These Terms of Use ("Terms") govern your use of the Management Information System for Marulas TODA in Valenzuela City ("MTODATA") provided by Diploma in Information Communication Technology students from Polytechnic University of the Philippines. By accessing or using the MTODATA, you agree to comply with its Terms. If you do not agree with any part of these Terms, you should not use the MTODATA. The Marulas TODA and the Students of DICT only grant use and access to this application, products, and services to those who have accepted its terms.</p>
            </div>
            <div class="content padding">

            <details>
                <summary>1. User Accounts</summary>
                <ol type="a">
                    <li>To access MTODATA, you may need to create an account. You agree to provide accurate and complete information during registration and keep your account credentials confidential. You are responsible for all activities that occur under your account. </li>
                    <li>You must be of legal age or have proper authorization to create an account and use MTODATA.</li>
                    <li>You agree to use the MTODATA only for lawful purposes and in compliance with all applicable laws and regulations.</li>
                </ol>
            </details>

            <details>
                <summary>2. Intellectual Property Rights </summary>
                <ol type="a">
                    <li>The MTODATA and its contents, including but not limited to software, text, graphics, images, videos, and logos, are the property of Diploma in Information Communication Technology students from the Polytechnic University of the Philippines and its licensors and are protected by intellectual property laws. Without prior written permission, you may not modify, reproduce, distribute, or create derivative works based on MTODATA or any part thereof. </li>
                    <li>The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines retains all rights, title, and interest in the MTODATA and reserve all rights not expressly granted to you under these Terms.</li>
                    <li>You grant the Diploma in Information Communication Technology students a royalty-free and non-exclusive license to display, use, copy, and transmit the content you upload and publish within the application.</li>
                </ol>
            </details>

            <details>
                <summary>3. Data Privacy</summary>
                <ol type="a">
                    <li>The MTODATA may involve collecting, storing, and processing personal or sensitive information. The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines will handle any such data under its Privacy Policy. </li>
                    <li>The user's of MTODATA are responsible for obtaining any necessary consents or permissions for collecting and processing personal data.</li>
                </ol>
            </details>

            <details>
                <summary>4. Prohibited Conduct </summary>
                    <p class="isolate">a. You agree not to engage in any of the following activities while using the MTODATA:</p>
                    <ol type="i">
                        <li>Violating any applicable laws, regulations, or third-party rights.</li>
                        <li>Interfering with the functionality or security of MTODATA or its servers.</li>
                        <li>Uploading or distributing any malicious software, viruses, or harmful content.</li>
                        <li>Attempting to gain unauthorized access to the MTODATA or other users' accounts.</li>
                        <li>Engaging in any activity that could disrupt or impair the MTODATA or its users' experience.</li>
                    </ol>
                
            </details>

            <details>
                <summary>5. Disclaimer of Warranties </summary>
                <ol type="a">
                    <li>The MTODATA is provided "as is" without express or implied warranties. The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines disclaims all warranties, including but not limited to fitness for a particular purpose, non-infringement, and accuracy or completeness of the MTODATA's content.</li>
            </details>

            <details>
                <summary>6. Limitation of Liability  </summary>
                <ol type="a">
                    <li>The Diploma in Information Communication Technology students from Polytechnic University of the Philippines shall not be liable for any direct, indirect, incidental, consequential, or special damages arising out of or in connection with the use of the MTODATA, even if advised of the possibility of such damages.</li>
            </details>

            <details>
                <summary>7. Modifications and Termination  </summary>
                <ol type="a">
                    <li>The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines may modify, suspend, or terminate the MTODATA or any part thereof at its sole discretion and without prior notice. Diploma in Information Communication Technology students from the Polytechnic University of the Philippines may modify these Terms anytime. Continued use of the MTODATA after modifications constitutes acceptance of the modified Terms.</li>
            </details>

            <details>
                <summary>8. Applicable Law </summary>
                <ol type="a">
                    <li>These Terms shall be governed by and construed under the laws of the Philippines. Any dispute arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts of the Philippines.</li>
            </details>
            
            <div class="content padding">
                <p>By using the Management Information System for Marulas TODA in Valenzuela City, you acknowledge that you have read, understood, and agreed to these Terms of Use. If you disagree with these Terms, you should refrain from accessing or using the MTODATA.</p>
            </div>

        </div>
    </div>

     <!-- FOOTER -->
     <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <p>Version 1.0</p>
        </div>
    </footer>
    </div>

    <!-- LOADING -->
    <div id="loading-container">
        <div class="background-wrapper">
        </div>
        <div class="logo-container">
                <img src="../../public/assets/mtodata_logo.png" alt="Logo" class="logo">
                <div class="loading-bar"></div>
        </div>
    </div>

    
    <script src="../../services/loading.js"></script>
</body>
</html>


================================================
FILE: views/pages/unitinfo.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

date_default_timezone_set('Asia/Manila');

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Unit</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/unitinfo.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>
    <main>
        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='ot-header'>
            <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Unit
                Information</h3>
            <div class='btn-container'>
                <abbr title="Export Report"><button class="unitExportBtn exportBtn" id="unit-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <input type='text' class='unit-search' id='unit-search' placeholder='Search'>
                <a href='../../views/pages/addunit.php'><button class='cancelBtn addunit-btn modal-btn' id='add-unit'
                        type='submit' name='add-unit'><i class='fa-solid fa-plus'></i> Add Unit</button></a>
            </div>
        </div>

        <div class='content-container'>
            <table id='unit-table'>
                <tr>
                    <th class='id'>ID</th>
                    <th class='name'>Name</th>
                    <th>Body No.</th>
                    <th>Franch No.</th>
                    <th>Date issued</th>
                    <th>Date Valid</th>
                    <th>Area code</th>
                    <th>Motor No.</th>
                    <th>Chasis No.</th>
                    <th>OR</th>
                    <th>CR</th>
                    <th>Plate No.</th>
                    <th>Body Color</th>
                    <th class='district'>District</th>
                    <th>Control Plate</th>
                    <th>Date Created</th>
                    <th class='action'>Action</th>
                </tr>

                <tbody id='unit-table-body'>

                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                        // Retrieve member information from the database using the $memberID
                        $sql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM `unit_info`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) === 0) {
                            echo 'Record does not exist';
                            exit();
                        } else {

                            while ($row = mysqli_fetch_assoc($result)) {

                            $memID = $row['mem_id'];

                            $sql1 = "SELECT * FROM `mem_info` WHERE id = '$memID'";

                            $result1 = $conn->query($sql1);


                            while ($row1 = $result1->fetch_assoc()) {

                                $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                                $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                                $firstname = $row1["fname"];
                                $lastName = $row1["lname"];

                                if (empty($row1["exname"])) {
                                    $lastName .= ', ';
                                }
                            } ?>

                            <tr>
                                <td class='id'>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td><?php echo $lastName . $extensionName . $firstname . " " . $middleInitial ?></td>
                                <td><?php echo $row['body_no']; ?></td>
                                <td><?php echo $row['franchise_no']; ?></td>
                                <td><?php echo $row['date_issue']; ?></td>
                                <td><?php echo $row['date_valid']; ?></td>
                                <td><?php echo $row['area_code']; ?></td>
                                <td><?php echo $row['motor_no']; ?></td>
                                <td><?php echo $row['chasis_no']; ?></td>
                                <td><?php echo $row['lto_or']; ?></td>
                                <td><?php echo $row['lto_cr']; ?></td>
                                <td><?php echo $row['plate_no']; ?></td>
                                <td><?php echo $row['body_color']; ?></td>
                                <td><?php echo $row['district']; ?></td>
                                <td><?php echo $row['control_plate']; ?></td>
                                <td><?php echo $row['new_formatted_date']; ?></td>
                                <td class='action'>
                                    <a href='../../views/pages/viewunit.php?id=<?php echo $row['id'];?>
                    '><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                        </td> <?php }
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/unitinfo.js'></script>
    <script src="../../services/exportUnit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
</body>

</html>


================================================
FILE: views/pages/unitinfo_sec.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

date_default_timezone_set('Asia/Manila');

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Unit</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/unitinfo.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>
    <main>
        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='ot-header'>
            <h3><a href='../../views/php/secview.php'><i class='fa-solid fa-arrow-left'></i></a>Unit
                Information</h3>
            <div class='btn-container'>
                <abbr title="Export Report"><button class="unitExportBtn exportBtn" id="unit-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <input type='text' class='unit-search' id='unit-search' placeholder='Search'>
                <a href='../../views/pages/addunit_sec.php'><button class='cancelBtn addunit-btn modal-btn' id='add-unit'
                        type='submit' name='add-unit'><i class='fa-solid fa-plus'></i> Add Unit</button></a>
            </div>
        </div>

        <div class='content-container'>
            <table id='unit-table'>
                <tr>
                    <th class='id'>ID</th>
                    <th class='name'>Name</th>
                    <th>Body No.</th>
                    <th>Franch No.</th>
                    <th>Date issued</th>
                    <th>Date Valid</th>
                    <th>Area code</th>
                    <th>Motor No.</th>
                    <th>Chasis No.</th>
                    <th>OR</th>
                    <th>CR</th>
                    <th>Plate No.</th>
                    <th>Body Color</th>
                    <th class='district'>District</th>
                    <th>Control Plate</th>
                    <th>Date Created</th>
                    <th class='action'>Action</th>
                </tr>

                <tbody id='unit-table-body'>

                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                        // Retrieve member information from the database using the $memberID
                        $sql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM `unit_info`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) === 0) {
                            echo 'Record does not exist';
                            exit();
                        } else {

                            while ($row = mysqli_fetch_assoc($result)) {

                            $memID = $row['mem_id'];

                            $sql1 = "SELECT * FROM `mem_info` WHERE id = '$memID'";

                            $result1 = $conn->query($sql1);


                            while ($row1 = $result1->fetch_assoc()) {

                                $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                                $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                                $firstname = $row1["fname"];
                                $lastName = $row1["lname"];

                                if (empty($row1["exname"])) {
                                    $lastName .= ', ';
                                }
                            } ?>

                            <tr>
                                <td class='id'>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td><?php echo $lastName . $extensionName . $firstname . " " . $middleInitial ?></td>
                                <td><?php echo $row['body_no']; ?></td>
                                <td><?php echo $row['franchise_no']; ?></td>
                                <td><?php echo $row['date_issue']; ?></td>
                                <td><?php echo $row['date_valid']; ?></td>
                                <td><?php echo $row['area_code']; ?></td>
                                <td><?php echo $row['motor_no']; ?></td>
                                <td><?php echo $row['chasis_no']; ?></td>
                                <td><?php echo $row['lto_or']; ?></td>
                                <td><?php echo $row['lto_cr']; ?></td>
                                <td><?php echo $row['plate_no']; ?></td>
                                <td><?php echo $row['body_color']; ?></td>
                                <td><?php echo $row['district']; ?></td>
                                <td><?php echo $row['control_plate']; ?></td>
                                <td><?php echo $row['new_formatted_date']; ?></td>
                                <td class='action'>
                                    <a href='../../views/pages/viewunit_sec.php?id=<?php echo $row['id'];?>
                    '><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                        </td> <?php }
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/unitinfo.js'></script>
    <script src="../../services/exportUnit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
</body>

</html>


================================================
FILE: views/pages/updatedonordetails.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the updated values from the form inputs
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $extension = $_POST['extension'];
        $gender = $_POST['gender'];
        $street = $_POST['street'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        // Retrieve existing donor information
        $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 0) {
            echo 'User does not exist';
            exit();
        } else {
            $row = mysqli_fetch_assoc($result);
        }

        // Perform the update query
        $sql = "UPDATE donor_info SET 
                fname = '$firstname',
                mname = '$middlename',
                lname = '$lastname',
                exname = '$extension',
                gender = '$gender',
                street = '$street',
                barangay = '$barangay',
                city = '$city',
                phone = '$contact',
                email = '$email'
                WHERE id = '$donorID'";

        if (mysqli_query($conn, $sql)) {
            header("Location: donorinfo.php?id=$donorID&success=true%member");
            exit;
        } else {
            echo "Error updating donor information: " . mysqli_error($conn);
            exit;
        }
    }
} else {
    echo 'Invalid donor ID';
    exit();
}

mysqli_close($conn); ?>


================================================
FILE: views/pages/updatedonordetails_tres.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the updated values from the form inputs
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $extension = $_POST['extension'];
        $gender = $_POST['gender'];
        $street = $_POST['street'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        // Retrieve existing donor information
        $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 0) {
            echo 'User does not exist';
            exit();
        } else {
            $row = mysqli_fetch_assoc($result);
        }

        // Perform the update query
        $sql = "UPDATE donor_info SET 
                fname = '$firstname',
                mname = '$middlename',
                lname = '$lastname',
                exname = '$extension',
                gender = '$gender',
                street = '$street',
                barangay = '$barangay',
                city = '$city',
                phone = '$contact',
                email = '$email'
                WHERE id = '$donorID'";

        if (mysqli_query($conn, $sql)) {
            header("Location: donorinfo_tres.php?id=$donorID&success=true%member");
            exit;
        } else {
            echo "Error updating donor information: " . mysqli_error($conn);
            exit;
        }
    }
} else {
    echo 'Invalid donor ID';
    exit();
}

mysqli_close($conn); ?>


================================================
FILE: views/pages/updatedonorinfo.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member Donor ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit Donor Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form id='edit-donor' action='updatedonordetails.php?id=<?php echo $donorID; ?>' method='POST'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='donorinfo.php?id=<?php echo $donorID ?>'><input type='button' value='Discard'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button id='donor-update' class='update-btn modal-btn' type='submit' disabled>Update</button>
                </div>
            </div>


            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-firstname'>Firstname<span> *</span></label>
                            <input type='text' id='donor-firstname' name='firstname'
                                value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='donor-midname'>Middlename</label>
                            <input type='text' id='donor-midname' name='middlename'
                                value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='donor-lastname' name='lastname' value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-extension'>Extension Name</label>
                            <input type='text' id='donor-extension' name='extension'
                                value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' value='<?php echo $row['gender']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <div class='main'>
                    <div class='left-side-profile section'>
                        <h3>Address</h3>
                        <!-- STREET -->
                        <div class='fields'>
                            <label for='donor-street'>Street<span> *</span></label>
                            <input type='text' id='donor-street' name='street' value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='donor-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='donor-brgy' name='barangay' value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='donor-city'>City<span> *</span></label>
                            <input type='text' id='donor-city' name='city' value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='donor-contact' name='contact' placeholder="09XXXXXXXXX"
                                maxlength="11" value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- EMAIL NUMBER -->
                        <div class='fields'>
                            <label for='donor-email'>Email<span> *</span></label>
                            <input type='email' id='donor-email' name='email' value='<?php echo $row['email']; ?>'>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src='../../services/editdonor.js'></script>
</body>

</html>


================================================
FILE: views/pages/updatedonorinfo_tres.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member Donor ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit Donor Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form id='edit-donor' action='updatedonordetails_tres.php?id=<?php echo $donorID; ?>' method='POST'>
            <div class='ot-header'>
                <h3><a href='../../views/php/tre-auditview.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='donorinfo_tres.php?id=<?php echo $donorID ?>'><input type='button' value='Discard'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button id='donor-update' class='update-btn modal-btn' type='submit' disabled>Update</button>
                </div>
            </div>


            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-firstname'>Firstname<span> *</span></label>
                            <input type='text' id='donor-firstname' name='firstname'
                                value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='donor-midname'>Middlename</label>
                            <input type='text' id='donor-midname' name='middlename'
                                value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='donor-lastname' name='lastname' value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-extension'>Extension Name</label>
                            <input type='text' id='donor-extension' name='extension'
                                value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' value='<?php echo $row['gender']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <div class='main'>
                    <div class='left-side-profile section'>
                        <h3>Address</h3>
                        <!-- STREET -->
                        <div class='fields'>
                            <label for='donor-street'>Street<span> *</span></label>
                            <input type='text' id='donor-street' name='street' value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='donor-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='donor-brgy' name='barangay' value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='donor-city'>City<span> *</span></label>
                            <input type='text' id='donor-city' name='city' value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='donor-contact' name='contact' placeholder="09XXXXXXXXX"
                                maxlength="11" value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- EMAIL NUMBER -->
                        <div class='fields'>
                            <label for='donor-email'>Email<span> *</span></label>
                            <input type='email' id='donor-email' name='email' value='<?php echo $row['email']; ?>'>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src='../../services/editdonor.js'></script>
</body>

</html>


================================================
FILE: views/pages/updatemem.php
================================================
<?php
include "../php/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    date_default_timezone_set('Asia/Manila');
    $timestamp = date('Y-m-d H:i:s');

    $memberID = $_GET['id'];
    $mem_stat = $_POST['mem-status'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $exname = $_POST['extension'];
    $mem_role = $_POST['role'];
    $mem_sex = $_POST['gender'];
    $street = $_POST['street'];
    $brgy = $_POST['barangay'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $license = $_POST['license'];

    // Determine the previous mem_status of the member
    $prevMemStatQuery = "SELECT mem_stat FROM mem_info WHERE id = '$memberID'";
    $prevMemStatResult = $conn->query($prevMemStatQuery);
    $prevMemStat = $prevMemStatResult->fetch_assoc()['mem_stat'];

    $query = "UPDATE mem_info SET mem_stat = '$mem_stat', fname = '$fname', mname = '$mname', 
        lname = '$lname', exname = '$exname', mem_role = '$mem_role', gender = '$mem_sex', street = '$street', barangay = '$brgy', 
        city = '$city', phone = '$contact', license_no = '$license'";

    if ($mem_stat === 'Active') {
        $query .= ", date_created = '$timestamp'";
    }

    if ($_FILES['profile']['name'] !== "") {
        $profilepic = $_FILES["profile"]["name"];
        $profilepic_tmp = $_FILES["profile"]["tmp_name"];
        $fileError = $profilePic['error'];
        $profilepic_path = "../../public/images/";

        if (move_uploaded_file($profilepic_tmp, $profilepic_path . $profilepic)) {
            $query .= ", profilepic = '$profilepic'";
        }
    }

    $query .= " WHERE id = '$memberID'";

    if ($conn->query($query) === TRUE) {
        if ($prevMemStat === 'Expired' && $mem_stat === 'Active') {
            $sql = "INSERT INTO transaction_payment (member_id, amount, transaction_code, transaction_type, date_created) VALUES ('$memberID', '1000', '', 'Renewal', '$timestamp')";

            if ($conn->query($sql) === TRUE) {
                // Get the auto-incrementing ID of the inserted row
                $lastInsertedId = $conn->insert_id;

                // Calculate the incrementing number with leading zeros
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);

                $transactionCode = "RNW" . date('mdy') . $incrementingNumber;

                // Update the transaction code in the database
                $updateSql = "UPDATE transaction_payment SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                mysqli_query($conn, $updateSql);
            }
        }
    }


    header("Location: viewmem.php?id=$memberID&success=true");
    exit;
}
?>


================================================
FILE: views/pages/updatemem_sec.php
================================================
<?php
include "../php/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    date_default_timezone_set('Asia/Manila');
    $timestamp = date('Y-m-d H:i:s');

    $memberID = $_GET['id'];
    $mem_stat = $_POST['mem-status'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $exname = $_POST['extension'];
    $mem_role = $_POST['role'];
    $mem_sex = $_POST['gender'];
    $street = $_POST['street'];
    $brgy = $_POST['barangay'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $license = $_POST['license'];

    // Determine the previous mem_status of the member
    $prevMemStatQuery = "SELECT mem_stat FROM mem_info WHERE id = '$memberID'";
    $prevMemStatResult = $conn->query($prevMemStatQuery);
    $prevMemStat = $prevMemStatResult->fetch_assoc()['mem_stat'];

    $query = "UPDATE mem_info SET mem_stat = '$mem_stat', fname = '$fname', mname = '$mname', 
        lname = '$lname', exname = '$exname', mem_role = '$mem_role', gender = '$mem_sex', street = '$street', barangay = '$brgy', 
        city = '$city', phone = '$contact', license_no = '$license'";

    if ($mem_stat === 'Active') {
        $query .= ", date_created = '$timestamp'";
    }

    if ($_FILES['profile']['name'] !== "") {
        $profilepic = $_FILES["profile"]["name"];
        $profilepic_tmp = $_FILES["profile"]["tmp_name"];
        $fileError = $profilePic['error'];
        $profilepic_path = "../../public/images/";

        if (move_uploaded_file($profilepic_tmp, $profilepic_path . $profilepic)) {
            $query .= ", profilepic = '$profilepic'";
        }
    }

    $query .= " WHERE id = '$memberID'";

    if ($conn->query($query) === TRUE) {
        if ($prevMemStat === 'Expired' && $mem_stat === 'Active') {
            $sql = "INSERT INTO transaction_payment (member_id, amount, transaction_code, transaction_type, date_created) VALUES ('$memberID', '1000', '', 'Renewal', '$timestamp')";

            if ($conn->query($sql) === TRUE) {
                // Get the auto-incrementing ID of the inserted row
                $lastInsertedId = $conn->insert_id;

                // Calculate the incrementing number with leading zeros
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);

                $transactionCode = "RNW" . date('mdy') . $incrementingNumber;

                // Update the transaction code in the database
                $updateSql = "UPDATE transaction_payment SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                mysqli_query($conn, $updateSql);
            }
        }
    }


    header("Location: viewmem_sec.php?id=$memberID&success=true");
    exit;
}
?>


================================================
FILE: views/pages/updateprograms.php
================================================
<?php
include "../php/db_conn.php";

date_default_timezone_set('Asia/Manila');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the ID query parameter is set
    if (isset($_GET['id'])) {
        $programID = $_GET['id'];
        $title = $_POST['event-title'];
        $description = $_POST['event-description'];
        $organizer = $_POST['event-organizer'];
        $location = $_POST['event-location'];
        $time = $_POST['event-time'];
        $date = $_POST['event-date'];

        $query = "UPDATE `events_programs` SET `ep_title` = '$title', `ep_organizer` = '$organizer', `ep_description` = '$description', 
        `ep_location` = '$location', `ep_date` = '$date', `ep_start` = '$time' WHERE `events_programs`.`id` = $programID";

        if (mysqli_query($conn, $query)) {
            header("Location: viewevents.php?id=$programID&success=true");
            exit;
        }

    }


}
?>


================================================
FILE: views/pages/updateprograms_vice.php
================================================
<?php
include "../php/db_conn.php";

date_default_timezone_set('Asia/Manila');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the ID query parameter is set
    if (isset($_GET['id'])) {
        $programID = $_GET['id'];
        $title = $_POST['event-title'];
        $description = $_POST['event-description'];
        $organizer = $_POST['event-organizer'];
        $location = $_POST['event-location'];
        $time = $_POST['event-time'];
        $date = $_POST['event-date'];

        $query = "UPDATE `events_programs` SET `ep_title` = '$title', `ep_organizer` = '$organizer', `ep_description` = '$description', 
        `ep_location` = '$location', `ep_date` = '$date', `ep_start` = '$time' WHERE `events_programs`.`id` = $programID";

        if (mysqli_query($conn, $query)) {
            header("Location: viewevents_vice.php?id=$programID&success=true");
            exit;
        }

    }


}
?>


================================================
FILE: views/pages/updateunit.php
================================================
<?php

date_default_timezone_set('Asia/Manila');

// connect to the MySQL database
include "../php/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the ID query parameter is set
    if (isset($_GET['id'])) {

        $unitID = $_GET['id'];

        // Get the updated values from the form inputs
        $unitbody_no = $_POST['unitbody_no'];
        $unitbody_color = $_POST['unitbody_color'];
        $unitfran_no = $_POST['unitfran_no'];
        $unitfran_issue = $_POST['unitfran_issue'];
        $unitfran_valid = $_POST['unitfran_valid'];
        $unit_area = $_POST['unit_area'];
        $unit_motor_no = $_POST['unit_motor_no'];
        $unit_chasis_no = $_POST['unit_chasis_no'];
        $unit_plate_no = $_POST['unit_plate_no'];
        $unit_or = $_POST['unit_or'];
        $unit_cr = $_POST['unit_cr'];
        $unit_district = $_POST['unit_district'];
        $unit_controlplate = $_POST['unit_controlplate'];

        // Update the unit_info table with the new values
        $updateSql = "UPDATE unit_info SET 
            body_no = '$unitbody_no',
            body_color = '$unitbody_color',
            franchise_no = '$unitfran_no',
            date_issue = '$unitfran_issue',
            date_valid = '$unitfran_valid',
            area_code = '$unit_area',
            motor_no = '$unit_motor_no',
            chasis_no = '$unit_chasis_no',
            plate_no = '$unit_plate_no',
            lto_or = '$unit_or',
            lto_cr = '$unit_cr',
            district = '$unit_district',
            control_plate = '$unit_controlplate'
            WHERE id = '$unitID'";

        if (mysqli_query($conn, $updateSql)) {
            header("Location: viewunit.php?id=$unitID&success=true%unit");
            exit;
        } else {
            echo "Error updating transactions: " . mysqli_error($conn);
        }
    }
}

?>


================================================
FILE: views/pages/updateunit_sec.php
================================================
<?php

date_default_timezone_set('Asia/Manila');

// connect to the MySQL database
include "../php/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the ID query parameter is set
    if (isset($_GET['id'])) {

        $unitID = $_GET['id'];

        // Get the updated values from the form inputs
        $unitbody_no = $_POST['unitbody_no'];
        $unitbody_color = $_POST['unitbody_color'];
        $unitfran_no = $_POST['unitfran_no'];
        $unitfran_issue = $_POST['unitfran_issue'];
        $unitfran_valid = $_POST['unitfran_valid'];
        $unit_area = $_POST['unit_area'];
        $unit_motor_no = $_POST['unit_motor_no'];
        $unit_chasis_no = $_POST['unit_chasis_no'];
        $unit_plate_no = $_POST['unit_plate_no'];
        $unit_or = $_POST['unit_or'];
        $unit_cr = $_POST['unit_cr'];
        $unit_district = $_POST['unit_district'];
        $unit_controlplate = $_POST['unit_controlplate'];

        // Update the unit_info table with the new values
        $updateSql = "UPDATE unit_info SET 
            body_no = '$unitbody_no',
            body_color = '$unitbody_color',
            franchise_no = '$unitfran_no',
            date_issue = '$unitfran_issue',
            date_valid = '$unitfran_valid',
            area_code = '$unit_area',
            motor_no = '$unit_motor_no',
            chasis_no = '$unit_chasis_no',
            plate_no = '$unit_plate_no',
            lto_or = '$unit_or',
            lto_cr = '$unit_cr',
            district = '$unit_district',
            control_plate = '$unit_controlplate'
            WHERE id = '$unitID'";

        if (mysqli_query($conn, $updateSql)) {
            header("Location: viewunit_sec.php?id=$unitID&success=true%unit");
            exit;
        } else {
            echo "Error updating transactions: " . mysqli_error($conn);
        }
    }
}

?>


================================================
FILE: views/pages/updateuser.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated user data from the form
    $user_id = $_GET['user_id']; // Assuming user_id is passed as a URL parameter
    $F_name = $_POST['firstname'];
    $L_name = $_POST['lastname'];
    $M_name = $_POST['middlename'];
    $ex_name = $_POST['extension'];
    $contact = $_POST['contact'];
    $roles = $_POST['userrole'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $psword = $_POST['barangay'];

    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the user data in the database
    $sql = "UPDATE user SET F_name = '$F_name', L_name = '$L_name', M_name = '$M_name', ex_name = '$ex_name', contact = '$contact', roles = '$roles', email = '$email', username = '$username', psword = '$psword' WHERE user_id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        // The user data has been successfully updated

        // Return a JSON response indicating success
        $response = array('success' => true);
        echo json_encode($response);
        exit();
    } else {
        // Handle the case when an error occurs during the update operation
        // Return a JSON response indicating the error
        $response = array('success' => false, 'message' => 'Error updating user data');
        echo json_encode($response);
        exit();
    }

    // close MySQL connection
    $conn->close();
} else {
    // If the form is not submitted, return a JSON response indicating an error
    $response = array('success' => false, 'message' => 'Invalid request');
    echo json_encode($response);
    exit();
}
?>


================================================
FILE: views/pages/viewComplainants.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../html/login.html');
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Complainant Information</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="../../public/css/complainantInfo.css">
        <!-- WEB ICON -->
        <link rel="icon" href="../../public/assets/browse_logo.png">
        <!-- FONT AWESOME/ICONS -->
        <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <main>
            <div class="head-container">
                <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
            </div>

            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Complainant's
                    Information</h3>
                <div class="btn-container">
                    <abbr title="Export Report">
                        <button class="complaintExportBtn exportBtn" id="complainant-export"><i
                                class="fa-solid fa-download"></i></button>
                    </abbr>
                    <input type="text" id="complainant-search" class="unit-search" placeholder="Search">
                    <a href="../../views/php/dashboard.php">
                        <input type="button" value="Cancel" class="cancelBtn modal-btn" id="cancel-btn">
                    </a>
                    <a href="../../views/pages/insertComplainant.php">
                        <button class="addunit-btn modal-btn" id="add-unit" type="submit" name="add-unit"><i
                                class="fa-solid fa-plus"></i> Add</button>
                    </a>
                </div>
            </div>
            <!-- COMPLAINANT INFORMATION TABLE -->
            <div class="content-container">
                <table id="complainant-table">
                    <tr>
                        <th class="compId">ID</th>
                        <th class="name">Name</th>
                        <th class="gender">Gender</th>
                        <th class="phone">Phone</th>
                        <th class="action">Action</th>
                    </tr>

                    <tbody id="complainant-table-body">
                        <?php
                        // Connect to the MySQL database
                        include "../php/db_conn.php";

                        $sql = "SELECT * FROM complaint_info";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows === 0) {
                            echo "No rows found.";
                        } else {
                            while ($row = $result->fetch_assoc()) {

                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                echo "
                                    <tr>
                                        <td class='compId'>" . $row['id'] . "</td>
                                        <td class='name'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                                        <td class='gender'>" . $row['gender'] . "</td>
                                        <td class='phone'>" . $row['phone'] . "</td>
                                        <td class='action'>
                                            <i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row['id'] . ")'></i>
                                            <a href='editComplainants.php?id=" . $row['id'] . "'><i class='tools fa-solid fa-pen-to-square'></i></a>
                                        </td>
                                    </tr>";
                            }
                        }
                        ?>
                        <!-- Deleting Complaint -->
                        <script>
                            function deleteComplaint(id) {
                                if (confirm("Are you sure you want to delete this Complaintant?")) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "../php/deleteComplainant.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    location.reload();
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            console.log("ID:", id); // Debug log
                                            var row = document.getElementById("Complaint-" + id);
                                            console.log("Row:", row); // Debug log
                                            if (row) {
                                                console.log("Parent Node:", row.parentNode); // Debug log
                                                row.parentNode.removeChild(row);
                                                console.log("Complaintant deleted successfully.");
                                                alert(xhr.responseText);
                                            } else {
                                                console.error("Row not found for ID:", id);
                                            }
                                        } else {
                                            console.error("Error: " + xhr.status);
                                        }
                                    };
                                    xhr.send("id=" + id);
                                }
                            }

                        </script>
                </tbody>
            </table>
        </div>
    </main>
    <script src='../../services/viewComplainant.js'></script>
    <script src="../../services/exportComplainant.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
</body>
</html>



================================================
FILE: views/pages/viewComplainants_vice.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../html/login.html');
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Complainant Information</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="../../public/css/complainantInfo.css">
        <!-- WEB ICON -->
        <link rel="icon" href="../../public/assets/browse_logo.png">
        <!-- FONT AWESOME/ICONS -->
        <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <main>
            <div class="head-container">
                <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
            </div>

            <div class="ot-header">
                <h3><a href="../../views/php/viceview.php"><i class="fa-solid fa-arrow-left"></i></a>Complainant's
                    Information</h3>
                <div class="btn-container">
                    <abbr title="Export Report">
                        <button class="complaintExportBtn exportBtn" id="complainant-export"><i
                                class="fa-solid fa-download"></i></button>
                    </abbr>
                    <input type="text" id="complainant-search" class="unit-search" placeholder="Search">
                    <a href="../../views/php/viceview.php">
                        <input type="button" value="Cancel" class="cancelBtn modal-btn" id="cancel-btn">
                    </a>
                    <a href="../../views/pages/insertComplainant_vice.php">
                        <button class="addunit-btn modal-btn" id="add-unit" type="submit" name="add-unit"><i
                                class="fa-solid fa-plus"></i> Add</button>
                    </a>
                </div>
            </div>
            <!-- COMPLAINANT INFORMATION TABLE -->
            <div class="content-container">
                <table id="complainant-table">
                    <tr>
                        <th class="compId">ID</th>
                        <th class="name">Name</th>
                        <th class="gender">Gender</th>
                        <th class="phone">Phone</th>
                        <th class="action">Action</th>
                    </tr>

                    <tbody id="complainant-table-body">
                        <?php
                        // Connect to the MySQL database
                        include "../php/db_conn.php";

                        $sql = "SELECT * FROM complaint_info";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows === 0) {
                            echo "No rows found.";
                        } else {
                            while ($row = $result->fetch_assoc()) {

                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                echo "
                                    <tr>
                                        <td class='compId'>" . $row['id'] . "</td>
                                        <td class='name'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                                        <td class='gender'>" . $row['gender'] . "</td>
                                        <td class='phone'>" . $row['phone'] . "</td>
                                        <td class='action'>
                                            <i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row['id'] . ")'></i>
                                            <a href='editComplainants_vice.php?id=" . $row['id'] . "'><i class='tools fa-solid fa-pen-to-square'></i></a>
                                        </td>
                                    </tr>";
                            }
                        }
                        ?>
                        <!-- Deleting Complaint -->
                        <script>
                            function deleteComplaint(id) {
                                if (confirm("Are you sure you want to delete this Complaintant?")) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "../php/deleteComplainant.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    location.reload();
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            console.log("ID:", id); // Debug log
                                            var row = document.getElementById("Complaint-" + id);
                                            console.log("Row:", row); // Debug log
                                            if (row) {
                                                console.log("Parent Node:", row.parentNode); // Debug log
                                                row.parentNode.removeChild(row);
                                                console.log("Complaintant deleted successfully.");
                                                alert(xhr.responseText);
                                            } else {
                                                console.error("Row not found for ID:", id);
                                            }
                                        } else {
                                            console.error("Error: " + xhr.status);
                                        }
                                    };
                                    xhr.send("id=" + id);
                                }
                            }

                        </script>
                </tbody>
            </table>
        </div>
    </main>
    <script src='../../services/viewComplainant.js'></script>
    <script src="../../services/exportComplainant.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
</body>
</html>



================================================
FILE: views/pages/viewComplaint.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Complaints</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>View Complaints</h3>
                    <div class='btn-container'>
                        <?php

                        // connect to the MySQL database
                        include "../php/db_conn.php";

                        // Check if the ID query parameter is set
                        if (isset($_GET['id'])) {
                            $complaint_id = $_GET['id'];
                        }
                            echo "
                            <a href='../../views/pages/editcomplaint.php?id=" . $complaint_id . "'><input type='button' value='Edit' name='complaint-update'
                                class='update-btn modal-btn' id='complaint-update'></a>
                            ";
                            ?>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Complaint Information</h3>

                    <?php
                        $sql = "SELECT complaint_info.id, CONCAT(complaint_info.fname, ' ', complaint_info.lname, ' ', complaint_info.exname) AS complainant, complaint_info.gender, complaint_info.phone
                        FROM complaint_info
                        INNER JOIN complaint_details ON complaint_info.id = complaint_details.complainant_id
                        WHERE complaint_details.id = $complaint_id";

                        $result = mysqli_query($conn, $sql); // Execute the query and assign the result to $result

                        if (!$result) {
                            echo "Error executing the query: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);

                            echo "
                            <!-- COMPLAINANT INFORMATION -->
                            <div class='main'>
                                <div class='left-side-emp section'>
                                    <div class='fields'>
                                        <label for='complainant_name'>Complainant Name</label>
                                        <input type='text' id='complainant_name' name='complainant_name' readonly value='" . $row['complainant'] . "'>
                                        <br>
                                        <label for='complainant_gender'>Gender</label>
                                        <input type='text' id='complainant_gender' readonly name='complainant_gender' value='" . $row['gender'] . "'>
                                </div>
                                </div>
                                <div class='right-side-emp section'>
                                    <div class='fields'>
                                        <label for='complainant_phone'>Phone</label>
                                        <input type='text' id='complainant_phone' readonly name='complainant_phone' value='" . $row['phone'] . "'>
                                    </div>
                                </div>
                            </div>
                            ";  
                            }
                        }               
                    ?>
                    </div>

                    <?php
                        $sql1 = "SELECT CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person, 
                        complaint_details.details, unit_info.body_no AS show_body_no,
                        DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d') AS date_stamp, 
                        DATE_FORMAT(complaint_details.date_created, ' %h:%i %p') AS time_stamp 
                        FROM complaint_details 
                        LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                        LEFT JOIN unit_info ON unit_info.id = complaint_details.body_no
                        WHERE complaint_details.id = $complaint_id"; // Execute the query and assign the result to $result

                        $result = mysqli_query($conn, $sql1);

                        if (!$result) {
                            echo "Error executing the query: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);

                            echo "
                        <div class='profile-container'>
                            <h3>Complaint Details</h3>
                            <div class='main'>
                                <div class='left-side-profile section'>
                                    <!-- COMPLAINT PERSON -->
                                    <div class='fields'>
                                        <label for='complaintPerson'>Complaint Person<span> </span></label>
                                        <input type='text' id='complaintPerson' name='complaintPerson' readonly value='" . $row['show_complaint_person'] . "'>
                                    </div>
                                    <div class='fields'>
                                        <label for='event-time'>Date<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['date_stamp'] . "'>
                                    </div>
                                </div>
                                <div class='right-side-profile section'>
                                    <div class='fields'>
                                        <label for='event-time'>Body Number<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['show_body_no'] . "'>
                                    </div>
                                    <!-- EVENT TIME -->
                                    <div class='fields'>
                                        <label for='event-time'>Time<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['time_stamp'] . "'>
                                    </div>
                                </div>
                            </div>
                        <!-- EVENT DESCRIPTION -->
                        <div class='fields'>
                            <label for='event-description'>Description<span> </span></label>
                            <textarea name='event-description' id='event-description' readonly>" . $row['details'] . "</textarea>
                        </div>
                    </div>
                        ";
                        }
                    }
                    ?>
        </form>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/editcomplaint.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewComplaint_vice.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Complaints</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/viceview.php'><i class='fa-solid fa-arrow-left'></i></a>View Complaints</h3>
                    <div class='btn-container'>
                        <?php

                        // connect to the MySQL database
                        include "../php/db_conn.php";

                        // Check if the ID query parameter is set
                        if (isset($_GET['id'])) {
                            $complaint_id = $_GET['id'];
                        }
                            echo "
                            <a href='../../views/pages/editcomplaint_vice.php?id=" . $complaint_id . "'><input type='button' value='Edit' name='complaint-update'
                                class='update-btn modal-btn' id='complaint-update'></a>
                            ";
                            ?>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Complaint Information</h3>

                    <?php
                        $sql = "SELECT complaint_info.id, CONCAT(complaint_info.fname, ' ', complaint_info.lname, ' ', complaint_info.exname) AS complainant, complaint_info.gender, complaint_info.phone
                        FROM complaint_info
                        INNER JOIN complaint_details ON complaint_info.id = complaint_details.complainant_id
                        WHERE complaint_details.id = $complaint_id";

                        $result = mysqli_query($conn, $sql); // Execute the query and assign the result to $result

                        if (!$result) {
                            echo "Error executing the query: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);

                            echo "
                            <!-- COMPLAINANT INFORMATION -->
                            <div class='main'>
                                <div class='left-side-emp section'>
                                    <div class='fields'>
                                        <label for='complainant_name'>Complainant Name</label>
                                        <input type='text' id='complainant_name' name='complainant_name' readonly value='" . $row['complainant'] . "'>
                                        <br>
                                        <label for='complainant_gender'>Gender</label>
                                        <input type='text' id='complainant_gender' readonly name='complainant_gender' value='" . $row['gender'] . "'>
                                </div>
                                </div>
                                <div class='right-side-emp section'>
                                    <div class='fields'>
                                        <label for='complainant_phone'>Phone</label>
                                        <input type='text' id='complainant_phone' readonly name='complainant_phone' value='" . $row['phone'] . "'>
                                    </div>
                                </div>
                            </div>
                            ";  
                            }
                        }               
                    ?>
                    </div>

                    <?php
                        $sql1 = "SELECT CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person, 
                        complaint_details.details, unit_info.body_no AS show_body_no,
                        DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d') AS date_stamp, 
                        DATE_FORMAT(complaint_details.date_created, ' %h:%i %p') AS time_stamp 
                        FROM complaint_details 
                        LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                        LEFT JOIN unit_info ON unit_info.id = complaint_details.body_no
                        WHERE complaint_details.id = $complaint_id"; // Execute the query and assign the result to $result

                        $result = mysqli_query($conn, $sql1);

                        if (!$result) {
                            echo "Error executing the query: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);

                            echo "
                        <div class='profile-container'>
                            <h3>Complaint Details</h3>
                            <div class='main'>
                                <div class='left-side-profile section'>
                                    <!-- COMPLAINT PERSON -->
                                    <div class='fields'>
                                        <label for='complaintPerson'>Complaint Person<span> </span></label>
                                        <input type='text' id='complaintPerson' name='complaintPerson' readonly value='" . $row['show_complaint_person'] . "'>
                                    </div>
                                    <div class='fields'>
                                        <label for='event-time'>Date<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['date_stamp'] . "'>
                                    </div>
                                </div>
                                <div class='right-side-profile section'>
                                    <div class='fields'>
                                        <label for='event-time'>Body Number<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['show_body_no'] . "'>
                                    </div>
                                    <!-- EVENT TIME -->
                                    <div class='fields'>
                                        <label for='event-time'>Time<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['time_stamp'] . "'>
                                    </div>
                                </div>
                            </div>
                        <!-- EVENT DESCRIPTION -->
                        <div class='fields'>
                            <label for='event-description'>Description<span> </span></label>
                            <textarea name='event-description' id='event-description' readonly>" . $row['details'] . "</textarea>
                        </div>
                    </div>
                        ";
                        }
                    }
                    ?>
        </form>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/editcomplaint.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewdonors.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Donor's Information</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/donorinfo.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>
    <main>
        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='ot-header'>
            <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Donor's Information
            </h3>
            <div class='btn-container'>
                <abbr title="Export Report"><button class="donorExportBtn exportBtn" id="donor-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <input type='text' id='donor-search' class='unit-search' placeholder='Search'>
                <a href='../../views/php/dashboard.php'><input type='button' value='Cancel' class='cancelBtn modal-btn'
                        id='cancel-btn'></a>
                <a href='../../views/pages/adddonor.php'><button class='addunit-btn modal-btn' id='add-unit'
                        type='submit' name='add-unit'><i class='fa-solid fa-plus'></i> Add Donor</button></a>
            </div>
        </div>

        <div class='content-container'>
            <table id='donor-table'>
                <tr>
                    <th class='id'>ID</th>
                    <th class='name'>Name</th>
                    <th class="gender">Gender</th>
                    <th class="phone">Phone</th>
                    <th class="email">Email</th>
                    <th class="street">Street</th>
                    <th class="barangay">Barangay</th>
                    <th class="city">City</th>
                    <th class="date">Date Created</th>
                    <th class='action'>Action</th>
                </tr>

                <tbody id='donor-table-body'>
                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Retrieve member information from the database using the $memberID
                    $sql = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM donor_info";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows === 0) {
                        echo "No rows found.";
                    } else {

                        while ($row = $result->fetch_assoc()) {

                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }

                            echo "
                <tr>
                    <td class='id'>" . $row['id'] . "</td>
                    <td class='name'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                    <td class='gender'>" . $row['gender'] . "</td>
                    <td class='phone'>" . $row['phone'] . "</td>
                    <td class='email'>" . $row['email'] . "</td>
                    <td class='street'>" . $row['street'] . "</td>
                    <td class='barangay'>" . $row['barangay'] . "</td>
                    <td class='city'>" . $row['city'] . "</td>
                    <td class='date'>" . $row['new_formatted_date'] . "</td>
                    <td class='action'>
                        <i class='tools fa-solid fa-trash-can'></i>
                        <a href='donorinfo.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                    </td>
                </tr>";
                        }
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>              
            </table>
        </div>
    </main>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/donorinfo.js'></script>
    <script src="../../services/exportdonor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
</body>

</html>


================================================
FILE: views/pages/viewdonors_tres.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Donor's Information</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/donorinfo.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>
    <main>
        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='ot-header'>
            <h3><a href='../../views/php/tre-auditview.php'><i class='fa-solid fa-arrow-left'></i></a>Donor's Information
            </h3>
            <div class='btn-container'>
                <abbr title="Export Report"><button class="donorExportBtn exportBtn" id="donor-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <input type='text' id='donor-search' class='unit-search' placeholder='Search'>
                <a href='../../views/php/tre-auditview.php'><input type='button' value='Cancel' class='cancelBtn modal-btn'
                        id='cancel-btn'></a>
                <a href='../../views/pages/adddonor_tres.php'><button class='addunit-btn modal-btn' id='add-unit'
                        type='submit' name='add-unit'><i class='fa-solid fa-plus'></i> Add Donor</button></a>
            </div>
        </div>

        <div class='content-container'>
            <table id='donor-table'>
                <tr>
                    <th class='id'>ID</th>
                    <th class='name'>Name</th>
                    <th class="gender">Gender</th>
                    <th class="phone">Phone</th>
                    <th class="email">Email</th>
                    <th class="street">Street</th>
                    <th class="barangay">Barangay</th>
                    <th class="city">City</th>
                    <th class="date">Date Created</th>
                    <th class='action'>Action</th>
                </tr>

                <tbody id='donor-table-body'>
                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Retrieve member information from the database using the $memberID
                    $sql = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM donor_info";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows === 0) {
                        echo "No rows found.";
                    } else {

                        while ($row = $result->fetch_assoc()) {

                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }

                            echo "
                <tr>
                    <td class='id'>" . $row['id'] . "</td>
                    <td class='name'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                    <td class='gender'>" . $row['gender'] . "</td>
                    <td class='phone'>" . $row['phone'] . "</td>
                    <td class='email'>" . $row['email'] . "</td>
                    <td class='street'>" . $row['street'] . "</td>
                    <td class='barangay'>" . $row['barangay'] . "</td>
                    <td class='city'>" . $row['city'] . "</td>
                    <td class='date'>" . $row['new_formatted_date'] . "</td>
                    <td class='action'>
                        <i class='tools fa-solid fa-trash-can'></i>
                        <a href='donorinfo_tres.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                    </td>
                </tr>";
                        }
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>              
            </table>
        </div>
    </main>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/donorinfo.js'></script>
    <script src="../../services/exportdonor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
</body>

</html>


================================================
FILE: views/pages/viewevents.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Events & Programs</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>View Events &
                    Programs</h3>
                <div class='btn-container'>
                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Check if the ID query parameter is set
                    if (isset($_GET['id'])) {
                        $programID = $_GET['id'];

                        echo "
                        <a href='../../views/pages/editprograms.php?id=$programID'><input type='button' value='Edit' name='events-update'
                            class='update-btn modal-btn' id='events-update'></a> 
                        ";
                        ?>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Event/Program Description</h3>

                    <?php

                    $sql = "SELECT * FROM events_programs WHERE id = $programID";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo "
                        <!-- EVENT TITLE -->
                        <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' readonly value='" . $row['ep_title'] . "'>
                        </div>";

                        $sql1 = "SELECT * FROM `transaction_expenses` WHERE program_ID = $programID";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result1) > 0) {
                            $row1 = mysqli_fetch_assoc($result1);

                            echo "
                            <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- EVENT CODE -->
                                <div class='fields'>
                                    <label for='event-code'>Transaction Code</label>
                                    <input type='text' id='event-code' name='event-code' readonly value='" . $row1['transaction_code'] . "'>
                                </div>
                            </div>
                            <div class='right-side-emp section'>
                                <!-- EVENT BUDGET -->
                                <div class='fields'>
                                    <label for='event-budget'>Budget</label>
                                    <input type='text' id='event-budget' readonly name='event-budget' value='" . $row1['amount'] . "'>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                    </div>

                    <?php

                    echo "
                        <div class='profile-container'>
                    <h3>Event/Program Details</h3>
                    <div class='main'>
                        <div class='left-side-profile section'>
                            <!-- EVENT ORGANIZER -->
                            <div class='fields'>
                                <label for='event-organizer'>Organizer<span> *</span></label>
                                <input type='text' id='event-organizer' name='event-organizer' readonly value='" . $row['ep_organizer'] . "'>
                            </div>
                            <!-- EVENT LOCATION -->
                            <div class='fields'>
                                <label for='event-location'>Location<span> *</span></label>
                                <input type='text' id='event-location' name='event-location' readonly value='" . $row['ep_location'] . "'>
                            </div>
                        </div>
                        <div class='right-side-profile section'>
                            <!-- EVENT TIME -->
                            <div class='fields'>
                                <label for='event-time'>Time<span> *</span></label>
                                <input type='time' id='event-time' name='event-time' readonly value='" . $row['ep_start'] . "'>
                            </div>
                            <!-- EVENT DATE -->
                            <div class='fields'>
                                <label for='event-date'>Date<span> *</span></label>
                                <input type='date' id='event-date' name='event-date' readonly value='" . $row['ep_date'] . "'>
                            </div>
                        </div>
                    </div>
                    <!-- EVENT DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-description'>Description<span> *</span></label>
                        <textarea name='event-description' id='event-description' readonly>" . $row['ep_description'] . "</textarea>
                    </div>
                </div>
                        ";

                    }
                    }

                    ?>
        </form>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/editprogram.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewevents_tres.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Events & Programs</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/tre-auditview.php'><i class='fa-solid fa-arrow-left'></i></a>View Events &
                    Programs</h3>
                <div class='btn-container'>
                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Check if the ID query parameter is set
                    if (isset($_GET['id'])) {
                        $programID = $_GET['id'];

                      
            
                        ?>
                        
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Event/Program Description</h3>

                    <?php

                    $sql = "SELECT * FROM events_programs WHERE id = $programID";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo "
                        <!-- EVENT TITLE -->
                        <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' readonly value='" . $row['ep_title'] . "'>
                        </div>";

                        $sql1 = "SELECT * FROM `transaction_expenses` WHERE program_ID = $programID";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result1) > 0) {
                            $row1 = mysqli_fetch_assoc($result1);

                            echo "
                            <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- EVENT CODE -->
                                <div class='fields'>
                                    <label for='event-code'>Transaction Code</label>
                                    <input type='text' id='event-code' name='event-code' readonly value='" . $row1['transaction_code'] . "'>
                                </div>
                            </div>
                            <div class='right-side-emp section'>
                                <!-- EVENT BUDGET -->
                                <div class='fields'>
                                    <label for='event-budget'>Budget</label>
                                    <input type='text' id='event-budget' readonly name='event-budget' value='" . $row1['amount'] . "'>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                    </div>

                    <?php

                    echo "
                        <div class='profile-container'>
                    <h3>Event/Program Details</h3>
                    <div class='main'>
                        <div class='left-side-profile section'>
                            <!-- EVENT ORGANIZER -->
                            <div class='fields'>
                                <label for='event-organizer'>Organizer<span> *</span></label>
                                <input type='text' id='event-organizer' name='event-organizer' readonly value='" . $row['ep_organizer'] . "'>
                            </div>
                            <!-- EVENT LOCATION -->
                            <div class='fields'>
                                <label for='event-location'>Location<span> *</span></label>
                                <input type='text' id='event-location' name='event-location' readonly value='" . $row['ep_location'] . "'>
                            </div>
                        </div>
                        <div class='right-side-profile section'>
                            <!-- EVENT TIME -->
                            <div class='fields'>
                                <label for='event-time'>Time<span> *</span></label>
                                <input type='time' id='event-time' name='event-time' readonly value='" . $row['ep_start'] . "'>
                            </div>
                            <!-- EVENT DATE -->
                            <div class='fields'>
                                <label for='event-date'>Date<span> *</span></label>
                                <input type='date' id='event-date' name='event-date' readonly value='" . $row['ep_date'] . "'>
                            </div>
                        </div>
                    </div>
                    <!-- EVENT DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-description'>Description<span> *</span></label>
                        <textarea name='event-description' id='event-description' readonly>" . $row['ep_description'] . "</textarea>
                    </div>
                </div>
                        ";

                    }
                    }

                    ?>
        </form>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/editprogram.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewevents_vice.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Events & Programs</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/viceview.php'><i class='fa-solid fa-arrow-left'></i></a>View Events &
                    Programs</h3>
                <div class='btn-container'>
                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Check if the ID query parameter is set
                    if (isset($_GET['id'])) {
                        $programID = $_GET['id'];

                        echo "
                        <a href='../../views/pages/editprograms_vice.php?id=$programID'><input type='button' value='Edit' name='events-update'
                            class='update-btn modal-btn' id='events-update'></a> 
                        ";
                        ?>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Event/Program Description</h3>

                    <?php

                    $sql = "SELECT * FROM events_programs WHERE id = $programID";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo "
                        <!-- EVENT TITLE -->
                        <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' readonly value='" . $row['ep_title'] . "'>
                        </div>";

                        $sql1 = "SELECT * FROM `transaction_expenses` WHERE program_ID = $programID";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result1) > 0) {
                            $row1 = mysqli_fetch_assoc($result1);

                            echo "
                            <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- EVENT CODE -->
                                <div class='fields'>
                                    <label for='event-code'>Transaction Code</label>
                                    <input type='text' id='event-code' name='event-code' readonly value='" . $row1['transaction_code'] . "'>
                                </div>
                            </div>
                            <div class='right-side-emp section'>
                                <!-- EVENT BUDGET -->
                                <div class='fields'>
                                    <label for='event-budget'>Budget</label>
                                    <input type='text' id='event-budget' readonly name='event-budget' value='" . $row1['amount'] . "'>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                    </div>

                    <?php

                    echo "
                        <div class='profile-container'>
                    <h3>Event/Program Details</h3>
                    <div class='main'>
                        <div class='left-side-profile section'>
                            <!-- EVENT ORGANIZER -->
                            <div class='fields'>
                                <label for='event-organizer'>Organizer<span> *</span></label>
                                <input type='text' id='event-organizer' name='event-organizer' readonly value='" . $row['ep_organizer'] . "'>
                            </div>
                            <!-- EVENT LOCATION -->
                            <div class='fields'>
                                <label for='event-location'>Location<span> *</span></label>
                                <input type='text' id='event-location' name='event-location' readonly value='" . $row['ep_location'] . "'>
                            </div>
                        </div>
                        <div class='right-side-profile section'>
                            <!-- EVENT TIME -->
                            <div class='fields'>
                                <label for='event-time'>Time<span> *</span></label>
                                <input type='time' id='event-time' name='event-time' readonly value='" . $row['ep_start'] . "'>
                            </div>
                            <!-- EVENT DATE -->
                            <div class='fields'>
                                <label for='event-date'>Date<span> *</span></label>
                                <input type='date' id='event-date' name='event-date' readonly value='" . $row['ep_date'] . "'>
                            </div>
                        </div>
                    </div>
                    <!-- EVENT DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-description'>Description<span> *</span></label>
                        <textarea name='event-description' id='event-description' readonly>" . $row['ep_description'] . "</textarea>
                    </div>
                </div>
                        ";

                    }
                    }

                    ?>
        </form>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/editprogram.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewmem.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Member Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form action='' method='post'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>View Member
                    Information</h3>
                <div class='btn-container'>

                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Check if the ID query parameter is set
                    if (isset($_GET['id'])) {
                        $memberID = $_GET['id'];

                        // Retrieve member information from the database using the $memberID
                        $sql = "SELECT * FROM mem_info WHERE id = '$memberID'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) === 0) {
                            echo 'user does not exist';
                            exit();
                        } else {

                            $row = mysqli_fetch_assoc($result);

                            if ($row['mem_role'] === 'Driver' || empty($row['mem_role'])) {
                                echo "<a href='../../views/pages/editunit.php'><input type='button' value='View Unit'
                                class='view modal-btn' id='hide-button' formnovalidate hidden></a>";
                            } else {

                                // Check if the member ID exists in the unit_info table
                                $unitID = $row['id'];
                                $unitInfoSQL = "SELECT * FROM unit_info WHERE mem_id = '$unitID'";
                                $unitInfoResult = mysqli_query($conn, $unitInfoSQL);

                                $row101 = mysqli_fetch_assoc($unitInfoResult);

                                if (mysqli_num_rows($unitInfoResult) === 0) {
                                    // Redirect the user to addunit.php
                                    echo "<a href='../../views/pages/addunit.php?id=" . $row['id'] . "'><input type='button' value='View Unit' class='view modal-btn' id='hide-button' formnovalidate></a>";
                                } else {
                                    // Redirect the user to editunit.php
                                    echo "<a href='../../views/pages/editunit.php?id=" . $row101['id'] . "'><input type='button' value='View Unit' class='view modal-btn' id='hide-button' formnovalidate></a>";
                                }

                            }

                            echo "
                    <a href='../../views/pages/editmem.php?id=" . $row['id'] . "'><input type='button' value='Edit'
                            class='cancelBtn modal-btn' formnovalidate></a>
                </div>
            </div>

            <div class='pic-container'>
                <h3>
                    Profile Picture
                </h3>
                <div class='main'>
                <div class='section left-pic'>";

                            if (empty($row['profilepic'])) {
                                echo "<img src='../../public/assets/defuser_icon.png' alt='' id='profileImage'>";
                            } else {

                                echo "
                    <img src='../../public/images/" . $row['profilepic'] . "' alt='' id='profileImage'>
                    ";
                            }

                            echo "
                    </div>
                    <div class='section right-pic'>
                         <!-- MEMBER STATUS DISPLAY -->
                            <div class='fields'>
                                <div class='" . $row["mem_stat"] . "'>
                                    <p>" . $row["mem_stat"] . "</p>
                                </div>
                            </div>
                           
                         <!-- MEMBER STATUS -->
                                <div class='fields'>
                                    <label for='mem-status'>Member Status</label>
                                    <input type='text' name='mem-status' id='mem-status' readonly value='" . $row['mem_stat'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='user-container'>
                        <h3>Personal Information</h3>
                        <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- FIRSTNAME -->
                                <div class='fields'>
                                    <label for='mem-firstname'>Firstname<span> *</span></label>
                                    <input type='text' id='mem-firstname' name='firstname' value='" . $row['fname'] . "' readonly>
                                </div>
        
                                <!-- MIDNAME -->
                                <div class='fields'>
                                    <label for='mem-midname'>Middlename</label>
                                    <input type='text' id='mem-midname' name='middlename' value='" . $row['mname'] . "' readonly>
                                </div>
        
                                <!-- LASTNAME -->
                                <div class='fields'>
                                    <label for='mem-lastname'>Lastname<span> *</span></label>
                                    <input type='text' id='mem-lastname' name='lastname' value='" . $row['lname'] . "' readonly>
                                </div>
                            </div>
        
                            <div class='right-side-emp section'>
                                <!-- EXTENSION NAME -->
                                <div class='fields'>
                                    <label for='mem-extension'>Extension Name</label>
                                    <input type='text' id='mem-extension' name='extension' value='" . $row['exname'] . "' readonly>
                                </div>
        
                                <!-- MEMBERS ROLE -->
                                <div class='fields'>
                                    <label for='select-mem'>Member's role<span> *</span></label>
                                    <input type='text'name='role' id='select-mem' readonly value='" . $row['mem_role'] . "'>
                                </div>
        
                                <!-- GENDER -->
                                <div class='fields'>
                                    <label for='select-gender'>Sex<span> *</span></label>
                                    <input type='text'name='gender' id='select-gender' readonly value='" . $row['gender'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class='profile-container'>
        
                        <div class='main'>
                            <div class='left-side-profile section'>
                                <h3>Address</h3>
                                <!-- STREET -->
                                <div class='fields'>
                                    <label for='mem-street'>Street<span> *</span></label>
                                    <input type='text' id='mem-street' name='street' readonly value='" . $row['street'] . "'>
                                </div>
        
                                <!-- BARANGAY -->
                                <div class='fields'>
                                    <label for='mem-brgy'>Barangay<span> *</span></label>
                                    <input type='text' id='mem-brgy' name='barangay' readonly value='" . $row['barangay'] . "'>
                                </div>
                                <!-- CITY -->
                                <div class='fields'>
                                    <label for='mem-city'>City<span> *</span></label>
                                    <input type='text' id='mem-city' name='city' readonly value='" . $row['city'] . "'>
                                </div>
                            </div>
        
                            <div class='right-side-profile section'>
                                <h3>Contact Information</h3>
                                <!-- CONTACT NUMBER -->
                                <div class='fields'>
                                    <label for='mem-contact'>Contact no.<span> *</span></label>
                                    <input type='text' id='mem-contact' name='contact' readonly value='" . $row['phone'] . "'> 
        
                                </div>
                                <!-- LICENSE NUMBER -->
                                <div class='fields'>
                                    <label for='mem-license'>License no.<span> *</span></label>
                                    <input type='text' id='mem-license' name='license' readonly value='" . $row['license_no'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>";



                        }
                    }
                    ?>

                    <div class='profile-container'>
                        <h3>Finance Logs</h3>
                        <div class='main'>

                            <table class="finance-logs">
                                <thead>
                                    <tr>
                                        <th>Transaction Code</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php

                                    include "../php/db_conn.php";

                                    if (isset($_GET['id'])) {
                                        $memberID = $_GET['id'];

                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Query to retrieve rows from transaction_payment table
                                        $sql = "SELECT * FROM transaction_payment WHERE member_id = '$memberID'
                                ORDER BY date_created DESC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // Loop through each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['date_created'] . "</td>
                                    </tr>
                                        ";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </form>

    </div>


    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/viewmem.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewmem_sec.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Member Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form action='' method='post'>
            <div class='ot-header'>
                <h3><a href='../../views/php/secview.php'><i class='fa-solid fa-arrow-left'></i></a>View Member
                    Information</h3>
                <div class='btn-container'>

                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Check if the ID query parameter is set
                    if (isset($_GET['id'])) {
                        $memberID = $_GET['id'];

                        // Retrieve member information from the database using the $memberID
                        $sql = "SELECT * FROM mem_info WHERE id = '$memberID'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) === 0) {
                            echo 'user does not exist';
                            exit();
                        } else {

                            $row = mysqli_fetch_assoc($result);

                            if ($row['mem_role'] === 'Driver' || empty($row['mem_role'])) {
                                echo "<a href='../../views/pages/editunit_sec.php'><input type='button' value='View Unit'
                                class='view modal-btn' id='hide-button' formnovalidate hidden></a>";
                            } else {

                                // Check if the member ID exists in the unit_info table
                                $unitID = $row['id'];
                                $unitInfoSQL = "SELECT * FROM unit_info WHERE mem_id = '$unitID'";
                                $unitInfoResult = mysqli_query($conn, $unitInfoSQL);

                                $row101 = mysqli_fetch_assoc($unitInfoResult);

                                if (mysqli_num_rows($unitInfoResult) === 0) {
                                    // Redirect the user to addunit.php
                                    echo "<a href='../../views/pages/addunit_sec.php?id=" . $row['id'] . "'><input type='button' value='View Unit' class='view modal-btn' id='hide-button' formnovalidate></a>";
                                } else {
                                    // Redirect the user to editunit.php
                                    echo "<a href='../../views/pages/editunit_sec.php?id=" . $row101['id'] . "'><input type='button' value='View Unit' class='view modal-btn' id='hide-button' formnovalidate></a>";
                                }

                            }

                            echo "
                    <a href='../../views/pages/editmem_sec.php?id=" . $row['id'] . "'><input type='button' value='Edit'
                            class='cancelBtn modal-btn' formnovalidate></a>
                </div>
            </div>

            <div class='pic-container'>
                <h3>
                    Profile Picture
                </h3>
                <div class='main'>
                <div class='section left-pic'>";

                            if (empty($row['profilepic'])) {
                                echo "<img src='../../public/assets/defuser_icon.png' alt='' id='profileImage'>";
                            } else {

                                echo "
                    <img src='../../public/images/" . $row['profilepic'] . "' alt='' id='profileImage'>
                    ";
                            }

                            echo "
                    </div>
                    <div class='section right-pic'>
                         <!-- MEMBER STATUS DISPLAY -->
                            <div class='fields'>
                                <div class='" . $row["mem_stat"] . "'>
                                    <p>" . $row["mem_stat"] . "</p>
                                </div>
                            </div>
                           
                         <!-- MEMBER STATUS -->
                                <div class='fields'>
                                    <label for='mem-status'>Member Status</label>
                                    <input type='text' name='mem-status' id='mem-status' readonly value='" . $row['mem_stat'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='user-container'>
                        <h3>Personal Information</h3>
                        <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- FIRSTNAME -->
                                <div class='fields'>
                                    <label for='mem-firstname'>Firstname<span> *</span></label>
                                    <input type='text' id='mem-firstname' name='firstname' value='" . $row['fname'] . "' readonly>
                                </div>
        
                                <!-- MIDNAME -->
                                <div class='fields'>
                                    <label for='mem-midname'>Middlename</label>
                                    <input type='text' id='mem-midname' name='middlename' value='" . $row['mname'] . "' readonly>
                                </div>
        
                                <!-- LASTNAME -->
                                <div class='fields'>
                                    <label for='mem-lastname'>Lastname<span> *</span></label>
                                    <input type='text' id='mem-lastname' name='lastname' value='" . $row['lname'] . "' readonly>
                                </div>
                            </div>
        
                            <div class='right-side-emp section'>
                                <!-- EXTENSION NAME -->
                                <div class='fields'>
                                    <label for='mem-extension'>Extension Name</label>
                                    <input type='text' id='mem-extension' name='extension' value='" . $row['exname'] . "' readonly>
                                </div>
        
                                <!-- MEMBERS ROLE -->
                                <div class='fields'>
                                    <label for='select-mem'>Member's role<span> *</span></label>
                                    <input type='text'name='role' id='select-mem' readonly value='" . $row['mem_role'] . "'>
                                </div>
        
                                <!-- GENDER -->
                                <div class='fields'>
                                    <label for='select-gender'>Sex<span> *</span></label>
                                    <input type='text'name='gender' id='select-gender' readonly value='" . $row['gender'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class='profile-container'>
        
                        <div class='main'>
                            <div class='left-side-profile section'>
                                <h3>Address</h3>
                                <!-- STREET -->
                                <div class='fields'>
                                    <label for='mem-street'>Street<span> *</span></label>
                                    <input type='text' id='mem-street' name='street' readonly value='" . $row['street'] . "'>
                                </div>
        
                                <!-- BARANGAY -->
                                <div class='fields'>
                                    <label for='mem-brgy'>Barangay<span> *</span></label>
                                    <input type='text' id='mem-brgy' name='barangay' readonly value='" . $row['barangay'] . "'>
                                </div>
                                <!-- CITY -->
                                <div class='fields'>
                                    <label for='mem-city'>City<span> *</span></label>
                                    <input type='text' id='mem-city' name='city' readonly value='" . $row['city'] . "'>
                                </div>
                            </div>
        
                            <div class='right-side-profile section'>
                                <h3>Contact Information</h3>
                                <!-- CONTACT NUMBER -->
                                <div class='fields'>
                                    <label for='mem-contact'>Contact no.<span> *</span></label>
                                    <input type='text' id='mem-contact' name='contact' readonly value='" . $row['phone'] . "'> 
        
                                </div>
                                <!-- LICENSE NUMBER -->
                                <div class='fields'>
                                    <label for='mem-license'>License no.<span> *</span></label>
                                    <input type='text' id='mem-license' name='license' readonly value='" . $row['license_no'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>";



                        }
                    }
                    ?>

                    <div class='profile-container'>
                        <h3>Finance Logs</h3>
                        <div class='main'>

                            <table class="finance-logs">
                                <thead>
                                    <tr>
                                        <th>Transaction Code</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php

                                    include "../php/db_conn.php";

                                    if (isset($_GET['id'])) {
                                        $memberID = $_GET['id'];

                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Query to retrieve rows from transaction_payment table
                                        $sql = "SELECT * FROM transaction_payment WHERE member_id = '$memberID'
                                ORDER BY date_created DESC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // Loop through each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['date_created'] . "</td>
                                    </tr>
                                        ";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </form>

    </div>


    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/viewmem.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewmem_tres.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Member Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form action='' method='post'>
            <div class='ot-header'>
                <h3><a href='../../views/php/tre-auditview.php'><i class='fa-solid fa-arrow-left'></i></a>View Member
                    Information</h3>
                <div class='btn-container'>

                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Check if the ID query parameter is set
                    if (isset($_GET['id'])) {
                        $memberID = $_GET['id'];

                        // Retrieve member information from the database using the $memberID
                        $sql = "SELECT * FROM mem_info WHERE id = '$memberID'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) === 0) {
                            echo 'user does not exist';
                            exit();
                        } else {

                            $row = mysqli_fetch_assoc($result);

                            if ($row['mem_role'] === 'Driver' || empty($row['mem_role'])) {
                                
                            } else {

                                // Check if the member ID exists in the unit_info table
                                $unitID = $row['id'];
                                $unitInfoSQL = "SELECT * FROM unit_info WHERE mem_id = '$unitID'";
                                $unitInfoResult = mysqli_query($conn, $unitInfoSQL);

                                $row101 = mysqli_fetch_assoc($unitInfoResult);

                                if (mysqli_num_rows($unitInfoResult) === 0) {
                                    // Redirect the user to addunit.php
                                   
                                } else {
                                    // Redirect the user to editunit.php
                                   
                                }

                            }

                            echo "
                    
                </div>
            </div>

            <div class='pic-container'>
                <h3>
                    Profile Picture
                </h3>
                <div class='main'>
                <div class='section left-pic'>";

                            if (empty($row['profilepic'])) {
                                echo "<img src='../../public/assets/defuser_icon.png' alt='' id='profileImage'>";
                            } else {

                                echo "
                    <img src='../../public/images/" . $row['profilepic'] . "' alt='' id='profileImage'>
                    ";
                            }

                            echo "
                    </div>
                    <div class='section right-pic'>
                         <!-- MEMBER STATUS DISPLAY -->
                            <div class='fields'>
                                <div class='" . $row["mem_stat"] . "'>
                                    <p>" . $row["mem_stat"] . "</p>
                                </div>
                            </div>
                           
                         <!-- MEMBER STATUS -->
                                <div class='fields'>
                                    <label for='mem-status'>Member Status</label>
                                    <input type='text' name='mem-status' id='mem-status' readonly value='" . $row['mem_stat'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='user-container'>
                        <h3>Personal Information</h3>
                        <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- FIRSTNAME -->
                                <div class='fields'>
                                    <label for='mem-firstname'>Firstname<span> *</span></label>
                                    <input type='text' id='mem-firstname' name='firstname' value='" . $row['fname'] . "' readonly>
                                </div>
        
                                <!-- MIDNAME -->
                                <div class='fields'>
                                    <label for='mem-midname'>Middlename</label>
                                    <input type='text' id='mem-midname' name='middlename' value='" . $row['mname'] . "' readonly>
                                </div>
        
                                <!-- LASTNAME -->
                                <div class='fields'>
                                    <label for='mem-lastname'>Lastname<span> *</span></label>
                                    <input type='text' id='mem-lastname' name='lastname' value='" . $row['lname'] . "' readonly>
                                </div>
                            </div>
        
                            <div class='right-side-emp section'>
                                <!-- EXTENSION NAME -->
                                <div class='fields'>
                                    <label for='mem-extension'>Extension Name</label>
                                    <input type='text' id='mem-extension' name='extension' value='" . $row['exname'] . "' readonly>
                                </div>
        
                                <!-- MEMBERS ROLE -->
                                <div class='fields'>
                                    <label for='select-mem'>Member's role<span> *</span></label>
                                    <input type='text'name='role' id='select-mem' readonly value='" . $row['mem_role'] . "'>
                                </div>
        
                                <!-- GENDER -->
                                <div class='fields'>
                                    <label for='select-gender'>Sex<span> *</span></label>
                                    <input type='text'name='gender' id='select-gender' readonly value='" . $row['gender'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class='profile-container'>
        
                        <div class='main'>
                            <div class='left-side-profile section'>
                                <h3>Address</h3>
                                <!-- STREET -->
                                <div class='fields'>
                                    <label for='mem-street'>Street<span> *</span></label>
                                    <input type='text' id='mem-street' name='street' readonly value='" . $row['street'] . "'>
                                </div>
        
                                <!-- BARANGAY -->
                                <div class='fields'>
                                    <label for='mem-brgy'>Barangay<span> *</span></label>
                                    <input type='text' id='mem-brgy' name='barangay' readonly value='" . $row['barangay'] . "'>
                                </div>
                                <!-- CITY -->
                                <div class='fields'>
                                    <label for='mem-city'>City<span> *</span></label>
                                    <input type='text' id='mem-city' name='city' readonly value='" . $row['city'] . "'>
                                </div>
                            </div>
        
                            <div class='right-side-profile section'>
                                <h3>Contact Information</h3>
                                <!-- CONTACT NUMBER -->
                                <div class='fields'>
                                    <label for='mem-contact'>Contact no.<span> *</span></label>
                                    <input type='text' id='mem-contact' name='contact' readonly value='" . $row['phone'] . "'> 
        
                                </div>
                                <!-- LICENSE NUMBER -->
                                <div class='fields'>
                                    <label for='mem-license'>License no.<span> *</span></label>
                                    <input type='text' id='mem-license' name='license' readonly value='" . $row['license_no'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>";



                        }
                    }
                    ?>

                    <div class='profile-container'>
                        <h3>Finance Logs</h3>
                        <div class='main'>

                            <table class="finance-logs">
                                <thead>
                                    <tr>
                                        <th>Transaction Code</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php

                                    include "../php/db_conn.php";

                                    if (isset($_GET['id'])) {
                                        $memberID = $_GET['id'];

                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Query to retrieve rows from transaction_payment table
                                        $sql = "SELECT * FROM transaction_payment WHERE member_id = '$memberID'
                                ORDER BY date_created DESC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // Loop through each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['date_created'] . "</td>
                                    </tr>
                                        ";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </form>

    </div>


    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/viewmem.js'></script>
</body>

</html>


================================================
FILE: views/pages/viewunit.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $unitID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    $sql = "SELECT * FROM unit_info WHERE id = '$unitID'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 0) {
        echo 'user does not exist';
        exit();
    } else {

        $row = mysqli_fetch_assoc($result);

        // Fetch member information
        $memID = $row['mem_id'];
        $sql1 = "SELECT * FROM `mem_info` WHERE id = '$memID'";
        $result1 = $conn->query($sql1);
    }


    ?>
    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>View Unit</title>

        <!-- STYLESHEET -->
        <link rel='stylesheet' href='../../public/css/editpages.css'>
        <!-- WEB ICON -->
        <link rel='icon' href='../../public/assets/browse_logo.png'>
        <!-- FONT AWESOME/ICONS -->
        <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
    </head>

    <body>

        <!-- SUCCESS TOAST -->
        <div class='toast-container' id='toast-success'>
            <div class='toast-left-success'>
                <i class='toast-icon fa-solid fa-circle-check'></i>
            </div>
            <div class='toast-right'>
                <p id='success-con'></p>
            </div>
        </div>

        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='content-container'>

            <form>


                <div class='ot-header'>
                    <h3><a href='../../views/pages/unitinfo.php'><i class='fa-solid fa-arrow-left'></i></a>View Unit
                        Information</h3>
                    <div class='btn-container'>
                        <a href='../../views/pages/editunit.php?id=<?php echo $unitID ?>'><input type='button' value='Edit'
                                class='cancelBtn modal-btn' id='cancel-btn'></a>
                    </div>
                </div>

                <?php



                while ($row1 = $result1->fetch_assoc()) {
                    $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                    $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                    $firstname = $row1["fname"];
                    $lastName = $row1["lname"];

                    if (empty($row1["exname"])) {
                        $lastName .= ', ';
                    }

                }

                echo "
                        

                        <!-- <input type='hidden' name='id' value=''> -->
                        <div class='user-container'>
                            <h3>Personal Information</h3>
                            <div class='main'>
                                <div class='left-side-emp section'>
                                    <div class='fields'>
                                        <label for='add-unit'>Member Name <span> *</span></label>
                                        <input name='add_unit' id='add-unit' required
                                            value='" . $lastName . $extensionName . $firstname . " " . $middleInitial . "'readonly>
                                    </div>
                                </div>

                                <div class='right-side-emp section'>

                                </div>
                            </div>
                        </div>

                        <div class='profile-container'>
                            <h3>Sidecar Information</h3>
                            <div class='main'>
                                <div class='left-side-profile section'>
                                    <!-- BODY NO. -->
                                    <div class='fields'>
                                        <label for='unit-bodyno'>Body No. <span> *</span></label>
                                        <input type='text' id='unit-bodyno' name='unitbody_no'
                                            value='" . $row['body_no'] . "' required readonly>
                                    </div>

                                    <!-- BODY COLOR -->
                                    <div class='fields'>
                                        <label for='unit-bodycolor'>Body Color <span> *</span></label>
                                        <input type='text' id='unit-bodycolor' name='unitbody_color'
                                            value='" . $row['body_color'] . "' required readonly>
                                    </div>

                                    <!-- FRANCHISE NO. -->
                                    <div class='fields'>
                                        <label for='unit_franno'>Franchise No. <span> *</span></label>
                                        <input type='text' id='unit-franno' name='unitfran_no'
                                            value='" . $row['franchise_no'] . "' required readonly>
                                    </div>
                                </div>

                                <div class='right-side-profile section'>

                                    <!-- FRANCHISE DATE ISSUED -->
                                    <div class='fields'>
                                        <label for='unit-franissue'>Franchise Date issued <span> *</span></label>
                                        <input type='date' id='unit-franissue' name='unitfran_issue'
                                            value='" . $row['date_issue'] . "' required readonly>
                                    </div>

                                    <!-- FRANCHISE DATE VALID -->
                                    <div class='fields'>
                                        <label for='unit-franvalid'>Franchise Date Valid <span> *</span></label>
                                        <input type='date' id='unit-franvalid' name='unitfran_valid'
                                            value='" . $row['date_valid'] . "' required readonly>
                                    </div>

                                    <!-- AREA CODE -->
                                    <div class='fields'>
                                        <label for='unit-area'>Area Code <span> *</span></label>
                                        <input type='text' id='unit-area' name='unit_area' value='" . $row['area_code'] . "'
                                            required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='container'>
                            <h3>Motorcycle Information</h3>
                            <div class='main'>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>Motor No. <span> *</span></label>
                                        <input type='text' value='" . $row['motor_no'] . "' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>Chasis No. <span> *</span></label>
                                        <input type='text' value='" . $row['chasis_no'] . "' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>Plate No. <span> *</span></label>
                                        <input type='text' value='" . $row['plate_no'] . "' required readonly>
                                    </div>
                                </div>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>LTO OR <span> *</span></label>
                                        <input type='text' value='" . $row['lto_or'] . "' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>LTO CR <span> *</span></label>
                                        <input type='text' value='" . $row['lto_cr'] . "' required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='container'>
                            <h3>Other Info</h3>
                            <div class='main'>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>District <span> *</span></label>
                                        <input type='text' value='" . $row['district'] . "' required readonly>
                                    </div>
                                </div>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>Control Plate <span> *</span></label>
                                        <input type='text' value='" . $row['control_plate'] . "' required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>";

}
?>

            <div class='profile-container'>
                <h3>Finance Logs</h3>
                <div class='main'>

                    <table class="finance-logs">
                        <thead>
                            <tr>
                                <th>Transaction Code</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            include "../php/db_conn.php";

                            if (isset($_GET['id'])) {
                                $memberID = $_GET['id'];

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Query to retrieve rows from transaction_payment table
                                $sql = "SELECT tc.*
                                FROM transaction_contribution tc
                                JOIN unit_info ui ON tc.body_no = ui.body_no
                                ORDER BY tc.date_created DESC;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Loop through each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['for_date'] . "</td>
                                    </tr>
                                        ";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                }

                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

    </div>

    <script src='../../services/unitinfo.js'></script>

</body>

</html>


================================================
FILE: views/pages/viewunit_sec.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $unitID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    $sql = "SELECT * FROM unit_info WHERE id = '$unitID'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 0) {
        echo 'user does not exist';
        exit();
    } else {

        $row = mysqli_fetch_assoc($result);

        // Fetch member information
        $memID = $row['mem_id'];
        $sql1 = "SELECT * FROM `mem_info` WHERE id = '$memID'";
        $result1 = $conn->query($sql1);
    }


    ?>
    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>View Unit</title>

        <!-- STYLESHEET -->
        <link rel='stylesheet' href='../../public/css/editpages.css'>
        <!-- WEB ICON -->
        <link rel='icon' href='../../public/assets/browse_logo.png'>
        <!-- FONT AWESOME/ICONS -->
        <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
    </head>

    <body>

        <!-- SUCCESS TOAST -->
        <div class='toast-container' id='toast-success'>
            <div class='toast-left-success'>
                <i class='toast-icon fa-solid fa-circle-check'></i>
            </div>
            <div class='toast-right'>
                <p id='success-con'></p>
            </div>
        </div>

        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='content-container'>

            <form>


                <div class='ot-header'>
                    <h3><a href='../../views/pages/unitinfo_sec.php'><i class='fa-solid fa-arrow-left'></i></a>View Unit
                        Information</h3>
                    <div class='btn-container'>
                        <a href='../../views/pages/editunit_sec.php?id=<?php echo $unitID ?>'><input type='button' value='Edit'
                                class='cancelBtn modal-btn' id='cancel-btn'></a>
                    </div>
                </div>

                <?php



                while ($row1 = $result1->fetch_assoc()) {
                    $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                    $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                    $firstname = $row1["fname"];
                    $lastName = $row1["lname"];

                    if (empty($row1["exname"])) {
                        $lastName .= ', ';
                    }

                }

                echo "
                        

                        <!-- <input type='hidden' name='id' value=''> -->
                        <div class='user-container'>
                            <h3>Personal Information</h3>
                            <div class='main'>
                                <div class='left-side-emp section'>
                                    <div class='fields'>
                                        <label for='add-unit'>Member Name <span> *</span></label>
                                        <input name='add_unit' id='add-unit' required
                                            value='" . $lastName . $extensionName . $firstname . " " . $middleInitial . "'readonly>
                                    </div>
                                </div>

                                <div class='right-side-emp section'>

                                </div>
                            </div>
                        </div>

                        <div class='profile-container'>
                            <h3>Sidecar Information</h3>
                            <div class='main'>
                                <div class='left-side-profile section'>
                                    <!-- BODY NO. -->
                                    <div class='fields'>
                                        <label for='unit-bodyno'>Body No. <span> *</span></label>
                                        <input type='text' id='unit-bodyno' name='unitbody_no'
                                            value='" . $row['body_no'] . "' required readonly>
                                    </div>

                                    <!-- BODY COLOR -->
                                    <div class='fields'>
                                        <label for='unit-bodycolor'>Body Color <span> *</span></label>
                                        <input type='text' id='unit-bodycolor' name='unitbody_color'
                                            value='" . $row['body_color'] . "' required readonly>
                                    </div>

                                    <!-- FRANCHISE NO. -->
                                    <div class='fields'>
                                        <label for='unit_franno'>Franchise No. <span> *</span></label>
                                        <input type='text' id='unit-franno' name='unitfran_no'
                                            value='" . $row['franchise_no'] . "' required readonly>
                                    </div>
                                </div>

                                <div class='right-side-profile section'>

                                    <!-- FRANCHISE DATE ISSUED -->
                                    <div class='fields'>
                                        <label for='unit-franissue'>Franchise Date issued <span> *</span></label>
                                        <input type='date' id='unit-franissue' name='unitfran_issue'
                                            value='" . $row['date_issue'] . "' required readonly>
                                    </div>

                                    <!-- FRANCHISE DATE VALID -->
                                    <div class='fields'>
                                        <label for='unit-franvalid'>Franchise Date Valid <span> *</span></label>
                                        <input type='date' id='unit-franvalid' name='unitfran_valid'
                                            value='" . $row['date_valid'] . "' required readonly>
                                    </div>

                                    <!-- AREA CODE -->
                                    <div class='fields'>
                                        <label for='unit-area'>Area Code <span> *</span></label>
                                        <input type='text' id='unit-area' name='unit_area' value='" . $row['area_code'] . "'
                                            required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='container'>
                            <h3>Motorcycle Information</h3>
                            <div class='main'>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>Motor No. <span> *</span></label>
                                        <input type='text' value='" . $row['motor_no'] . "' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>Chasis No. <span> *</span></label>
                                        <input type='text' value='" . $row['chasis_no'] . "' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>Plate No. <span> *</span></label>
                                        <input type='text' value='" . $row['plate_no'] . "' required readonly>
                                    </div>
                                </div>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>LTO OR <span> *</span></label>
                                        <input type='text' value='" . $row['lto_or'] . "' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>LTO CR <span> *</span></label>
                                        <input type='text' value='" . $row['lto_cr'] . "' required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='container'>
                            <h3>Other Info</h3>
                            <div class='main'>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>District <span> *</span></label>
                                        <input type='text' value='" . $row['district'] . "' required readonly>
                                    </div>
                                </div>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>Control Plate <span> *</span></label>
                                        <input type='text' value='" . $row['control_plate'] . "' required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>";

}
?>

            <div class='profile-container'>
                <h3>Finance Logs</h3>
                <div class='main'>

                    <table class="finance-logs">
                        <thead>
                            <tr>
                                <th>Transaction Code</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            include "../php/db_conn.php";

                            if (isset($_GET['id'])) {
                                $memberID = $_GET['id'];

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Query to retrieve rows from transaction_payment table
                                $sql = "SELECT tc.*
                                FROM transaction_contribution tc
                                JOIN unit_info ui ON tc.body_no = ui.body_no
                                ORDER BY tc.date_created DESC;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Loop through each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['for_date'] . "</td>
                                    </tr>
                                        ";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                }

                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

    </div>

    <script src='../../services/unitinfo.js'></script>

</body>

</html>


================================================
FILE: views/php/addevents.php
================================================
<?php

include 'db_conn.php';

date_default_timezone_set('Asia/Manila');
$timestamp = date('Y-m-d H:i:s');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form inputs

    $title = $_POST['event-title'];
    $description = $_POST['desc'];
    $budget = $_POST['events-budget'];
    $organizer = $_POST['events-organizer'];
    $location = $_POST['events-location'];
    $time = $_POST['events-time'];
    $date = $_POST['events-date'];
    $esc_desc = addslashes($description);


    $PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
    FROM transaction_finance
    WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
    AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
    $Pas_Result = $conn->query($PasNet);

    $CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
    SUM(debit) AS total_revenue FROM transaction_finance
    WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
    AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
    $Cur_Result = $conn->query($CurNet);

    if ($Pas_Result && $Cur_Result) {
        $row1 = mysqli_fetch_assoc($Pas_Result);
        $row2 = mysqli_fetch_assoc($Cur_Result);

        $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
        $TotalNet = $row1['pastNeT'] + $row2['curNeT'];
    }

    if ($TotalNet < $budget) {
        header("Location: dashboard.php?error=insufficient-bal");
    } else {
        // Insert the data into events_programs table
        $sql = "INSERT INTO events_programs (ep_title, ep_description, ep_organizer, ep_location, ep_start, ep_date, date_created) 
    VALUES ('$title', '$esc_desc', '$organizer', '$location', '$time', '$date','$timestamp')";

        $result = $conn->query($sql);

        if ($result) {

            $proID = $conn->insert_id;

            if (isset($_POST['events-isbudget'])) {

                // Insert the data into transaction_expenses table
                $sql1 = "INSERT INTO transaction_expenses (amount, transaction_code, transaction_type, for_month, program_ID, date_created) 
            VALUES ('$budget', '', 'Programs', '$date','$proID','$timestamp')";
                $result1 = $conn->query($sql1);

                if ($result1) {
                    // Get the auto-incrementing ID of the inserted row
                    $lastInsertedId = $conn->insert_id;

                    // Calculate the incrementing number with leading zeros
                    $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);

                    $dateToday = date('mdy');

                    $transactionCode = "PRO{$dateToday}{$incrementingNumber}";

                    $updateSql = "UPDATE transaction_expenses SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                    mysqli_query($conn, $updateSql);
                } else {
                    // Error occurred while inserting budget value
                    echo "Error: " . $conn->error;
                }
            }

            header('Location: dashboard.php?success=true%events');
            exit();
        } else {
            // Error occurred while inserting data into events_programs table
            echo "Error: " . $conn->error;
        }
    }

}

// Close database connection
mysqli_close($conn);
?>


================================================
FILE: views/php/addfinancerecord.php
================================================
<?php
include "db_conn.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    date_default_timezone_set('Asia/Manila');
    $timestamp = date('Y-m-d H:i:s');

    // Retrieve the form data
    $financeType = $_POST['type'];
    $expenseType = $_POST['expense_type'];
    $transactionDate = $_POST['trans_date'];
    $amount = $_POST['amount'];

    $PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
    FROM transaction_finance
    WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
    AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
    $Pas_Result = $conn->query($PasNet);

    $CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
    SUM(debit) AS total_revenue FROM transaction_finance
    WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
    AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
    $Cur_Result = $conn->query($CurNet);

    if ($Pas_Result && $Cur_Result) {
        $row1 = mysqli_fetch_assoc($Pas_Result);
        $row2 = mysqli_fetch_assoc($Cur_Result);

        $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
        $TotalNet = $row1['pastNeT'] + $row2['curNeT'];
    }

    switch ($financeType) {
        case 'Butaw':

            // Check if bodyNo is provided
            if (!empty($_POST['bodynum'])) {
                $bodyNo = $_POST['bodynum'];
            } else {
                $bodyNo = ''; // Set a default value
            }

            $financeCode = 'CON';
            $tranType = 'Contribution';
            // Insert into transaction_contribution table
            $insertSql = "INSERT INTO transaction_contribution (body_no, for_date, amount, transaction_code, date_created, transaction_type) 
            VALUES ('$bodyNo', '$transactionDate', '$amount', '','$timestamp','$tranType')";

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_contribution SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                header("Location: dashboard.php?success=true%finance");
                exit;
            } else {
                echo "Error inserting record: " . $conn->error;
            }

            break;

        case 'Donation':

            // Check if donorID is provided
            if (!empty($_POST['donor_select'])) {
                $donorID = $_POST['donor_select'];
            } else {
                $donorID = ''; // Set a default value
            }

            $financeCode = 'DON';
            $tranType = 'Donation';
            // Insert into transaction_donation table
            $insertSql = "INSERT INTO transaction_donation (donor_id, amount, transaction_code, date_created, transaction_type) 
            VALUES ('$donorID', '$amount', '','$timestamp','$tranType')";

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_donation SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                echo "Record inserted successfully.";
                header("Location: dashboard.php?success=true%finance");
            } else {
                echo "Error inserting record: " . $conn->error;
            }

            break;

        case 'Expenses':
            $financeCode = '';
            switch ($expenseType) {
                case 'Expenses - Rent':
                    $financeCode = 'REN';
                    break;
                case 'Expenses - Electricity':
                    $financeCode = 'ELE';
                    break;
                case 'Expenses - Water':
                    $financeCode = 'WAT';
                    break;
                case 'Expenses - ':
                    $financeCode = 'OTH';
            }

            if ($TotalNet < $amount) {
                header("Location: dashboard.php?error=insufficient-bal");
            } else {

                if ($expenseType === 'Expenses - ') {
                    $remarks = $_POST['remarks'];
                    $expenseType .= $remarks;
                }

                // Insert into expenses table
                $insertSql = "INSERT INTO transaction_expenses (for_month, amount, transaction_code, date_created, transaction_type) VALUES ('$transactionDate', '$amount', '','$timestamp','$expenseType')";

            }

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_expenses SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                header("Location: dashboard.php?success=true%finance");
            } else {
                echo "Error inserting record: " . $conn->error;
            }
            break;
    }

}

?>


================================================
FILE: views/php/addmember.php
================================================
<?php
// Database connection parameters
include "db_conn.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form submission
$mem_role = $_POST["role"];
$lname = $_POST["lastname"];
$fname = $_POST["firstname"];
$mname = $_POST["middlename"];
$exname = $_POST["extension"];
$gender = $_POST["gender"];
$street = $_POST["street"];
$barangay = $_POST["barangay"];
$city = $_POST["city"];
$phone = $_POST["contact"];
$license_no = $_POST["license"];
$profilepic = $_FILES["profile"]["name"];
$profilepic_tmp = $_FILES["profile"]["tmp_name"];
$profilepic_path = "../../public/images/"; // Update this with the appropriate path to store the profile pictures
$mem_stat = 'Active';

// Move the uploaded file to the desired location
move_uploaded_file($profilepic_tmp, $profilepic_path . $profilepic);

date_default_timezone_set('Asia/Manila');
$dateToday = date('mdy');

// Prepare SQL query
$sql = "INSERT INTO mem_info (mem_role, lname, fname, mname, exname, gender, street, barangay, city, phone, license_no, profilepic, mem_stat) VALUES ('$mem_role', '$lname', '$fname', '$mname', '$exname', '$gender', '$street', '$barangay', '$city', '$phone', '$license_no', '$profilepic', '$mem_stat')";

// Execute query
if (mysqli_query($conn, $sql)) {

    $memberId = mysqli_insert_id($conn);

    $sql1 = "INSERT INTO transaction_payment (member_id, amount, transaction_code, transaction_type) VALUES ('$memberId', '2000', '', 'New Member')";

    if ($conn->query($sql1) === TRUE) {
        // Get the auto-incrementing ID of the inserted row
        $lastInsertedId = mysqli_insert_id($conn);

        // Calculate the incrementing number with leading zeros
        $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);

        //Generate the transaction code
        $transactionCode = "NEW" . date('mdy') . $incrementingNumber;

        // Update the transaction code in the database
        $updateSql = "UPDATE transaction_payment SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

        if ($conn->query($updateSql) === TRUE) {
            header('Content-Type: application/json');
            http_response_code(200);
            echo json_encode(array('message' => 'Member added successfully'));
            header("Location: ../../views/php/dashboard.php");
            exit();
        } else {
            echo "Error updating data: " . $conn->error;
        }
    } else {
        echo "Error inserting data: " . $conn->error;
    }

} else {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(array('message' => 'Error inserting data: ' . mysqli_error($conn)));
}

// Close database connection
mysqli_close($conn);
?>


================================================
FILE: views/php/adduser.php
================================================
<?php
include "db_conn.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form submission
$roles = $_POST["userrole"];
$L_name = $_POST["lastname"];
$F_name = $_POST["firstname"];
$M_name = $_POST["middlename"];
$ex_name = $_POST["extension"];
$username = $_POST["user-uname"];
$email = $_POST["street"];
$contact = $_POST["contact"];
$psword = $_POST["password"];

// Check if role already exists in the database
$role_check_query = "SELECT * FROM user WHERE roles='$roles' LIMIT 1";
$result1 = mysqli_query($conn, $role_check_query);
$user1 = mysqli_fetch_assoc($result1);

if ($user1) { // If role already exists, return error response
    $response = array(
        'success' => false,
        'error' => 'user-role-already-exists',
        'role' => $roles
    );
    echo json_encode($response);
} else { // If role does not exist, insert data into the database
    // Check if email already exists in the database
    $email_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // If email already exists, return error response
        $response = array(
            'success' => false,
            'error' => 'email-already-exists'
        );
        echo json_encode($response);
    } else { // If email does not exist, insert data into the database
        $sql = "INSERT INTO user (roles, L_name, F_name, M_name, ex_name, username, email, contact, psword) VALUES ('$roles', '$L_name', '$F_name', '$M_name', '$ex_name', '$username', '$email', '$contact', '$psword')";
        if (mysqli_query($conn, $sql)) {
            $response = array(
                'success' => true
            );
            echo json_encode($response);
        } else {
            $response = array(
                'success' => false,
                'error' => 'database-error',
                'message' => mysqli_error($conn)
            );
            echo json_encode($response);
        }
    }
}

// Close database connection
mysqli_close($conn);
?>


================================================
FILE: views/php/checkcontact.php
================================================
<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'contact' parameter from the request
$contact = $_POST['contact'];

// Prepare the SQL statement to check if the contact exists
$stmt = $conn->prepare("SELECT contact FROM user WHERE contact = ?");
$stmt->bind_param("s", $contact);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$contactExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($contactExists) {
    echo 'exists'; // Contact exists in the database
} else {
    echo 'not_exists'; // Contact does not exist in the database
}
?>


================================================
FILE: views/php/checkemail.php
================================================
<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'email' parameter from the request
$email = $_POST['street'];

// Prepare the SQL statement to check if the email exists
$stmt = $conn->prepare("SELECT email FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$emailExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($emailExists) {
    echo 'exists'; // Email exists in the database
} else {
    echo 'not_exists'; // Email does not exist in the database
}
?>


================================================
FILE: views/php/checklicense.php
================================================
<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'license' parameter from the request
$license_no = $_POST['license'];

// Prepare the SQL statement to check if the license number exists
$stmt = $conn->prepare("SELECT license_no FROM mem_info WHERE license_no = ?");
$stmt->bind_param("s", $license_no);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$licenseExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($licenseExists) {
    echo 'exists'; // License number exists in the database
} else {
    echo 'not_exists'; // License number does not exist in the database
}
?>


================================================
FILE: views/php/checkmemcontact.php
================================================
<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'contact' parameter from the request
$phone = $_POST['contact'];

// Prepare the SQL statement to check if the member's contact exists
$stmt = $conn->prepare("SELECT phone FROM mem_info WHERE phone = ?");
$stmt->bind_param("s", $phone);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$memContactExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($memContactExists) {
    echo 'exists'; // Member's contact exists in the database
} else {
    echo 'not_exists'; // Member's contact does not exist in the database
}
?>


================================================
FILE: views/php/checkusername.php
================================================
<?php
// Include the database connection file
include "db_conn.php";

// Retrieve the 'username' parameter from the request
$username = $_POST['user-uname'];

// Prepare the SQL statement to check if the username exists
$stmt = $conn->prepare("SELECT username FROM user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$usernameExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($usernameExists) {
  echo 'exists'; // Username exists in the database
} else {
  echo 'not_exists'; // Username does not exist in the database
}
?>


================================================
FILE: views/php/complaints.php
================================================
<?php
    include "db_conn.php";

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Start of Complaint Module

    // Get Data from form submission
    $personToComplain = $_POST["ComplaintSubject"];
    $bodyNumber = $_POST["complaintSubjectBody"];
    $description = $_POST["desc"];
    $dateCreated = $_POST["date-incident"] . " " . $_POST["time-incident"];
    if (isset($_POST['complaint-select'])) {
        $complaint_id = $_POST['complaint-select'];
    }
    // Complainant Information
    //
    $sql = "INSERT INTO complaint_details (complaint_person, body_no, details, date_created, complainant_id) VALUES ('$personToComplain', '$bodyNumber', '$description', '$dateCreated', '$complaint_id')";
    if (mysqli_query($conn, $sql)) {
        echo "Complaint details inserted successfully";
        header("Location: ../php/dashboard.php?id=$complaint_id&success=true%complain");
        exit();
    } else {
        echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
    }

    // Close database connection
    mysqli_close($conn);
?>



================================================
FILE: views/php/dashboard.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// connect to the MySQL database
include "db_conn.php";

$updateQuery = "UPDATE mem_info SET mem_stat = 'Expired' WHERE mem_stat = 'Active' AND date_created < DATE_SUB(NOW(), INTERVAL 2 YEAR)";
mysqli_query($conn, $updateQuery);

date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../public/css/loading.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>

    <!-- JS LIBRARIES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

</head>

<body>
    <!-- BACKGROUND -->
    <div class="bg-container"></div>

    <!-- TOP DESIGN -->
    <div class="top-design">
        <p class="top-user"><strong>Welcome! </strong>
            <?php echo $_SESSION['email'] ?>
        </p>
        <p class="top-date">
            <i id="current-date"></i>
        </p>
    </div>

    <!-- SIDE-NAV-BAR -->
    <div class="side-nav">
        <!-- SIDENAV HEADER -->
        <header class="header-nav">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">
            <p>ADMIN PANEL</p>
        </header>

        <!-- ITEM CONTAINER -->
        <div class="item-container">
            <ul>
                <li id="dash-btn"><i class="fa-solid fa-house"></i> DASHBOARD</li>
                <li id="users-btn"><i class="fa-solid fa-users"></i> USERS</li>
                <li id="member-btn"><i class="fa-solid fa-circle-info"></i> MEMBER INFORMATION</li>
                <li id="finance-btn"><i class="fa-solid fa-coins"></i> FINANCE</li>
                <li id="complain-btn"><i class="fa-solid fa-flag"></i> COMPLAINTS</li>
                <li id="programs-btn"><i class="fa-solid fa-calendar-days"></i> EVENTS & PROGRAMS</li>
                <a href="logout.php">
                    <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <!-- DASHBOARD PANE -->
    <div class='dashboard-container' id='dash-container'>
        <div class="dash-header">
            <?php
            $startOfMonth = date('Y-m-01');
            $formattedStartOfMonth = date('m/d/Y', strtotime($startOfMonth));

            $now = new DateTime();
            $formattedDate = $now->format('m/d/Y');
            echo "
            <abbr title='Start of the Month to Current date'><h3>MONTHLY REPORT:<span class='dash-date'> (" . $formattedStartOfMonth . " - " . $formattedDate . ")</span></h3></abbr>
            ";
            ?>
        </div>
        <section class='top-dash'>
            <?php

            // connect to the MySQL database
            include "db_conn.php";

            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // member count
            $mem = "SELECT COUNT(id) AS mem_count FROM mem_info WHERE mem_stat = 'Active'";
            $mem_result = $conn->query($mem);

            $don = "SELECT SUM(amount) AS don_count FROM transaction_donation
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $don_result = $conn->query($don);

            $com = "SELECT COUNT(id) AS com_count FROM complaint_details
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $com_result = $conn->query($com);

            $PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
            FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
            AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
            $Pas_Result = $conn->query($PasNet);

            $CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
            SUM(debit) AS total_revenue FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
            AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
            $Cur_Result = $conn->query($CurNet);

            if ($mem_result) {
                $row = mysqli_fetch_assoc($mem_result);
                echo "
                <!-- MEMBER COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-user-group'></i>
                        <h4 class=''>Total Member Count</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . $row['mem_count'] . "</p>
                    </div>
                    <div class='link-container memCount'>
                        <abbr title='Member Info Report'><button class='save' id='retrieve-donation' onclick=\"save_generate()\">Download Report</button></abbr>
                    </div>
                </div>";
            }

            if ($Pas_Result && $Cur_Result) {
                $row1 = mysqli_fetch_assoc($Pas_Result);
                $row2 = mysqli_fetch_assoc($Cur_Result);

                $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
                $TotalNet = $row1['pastNeT'] + $row2['curNeT'];

                echo "
                        <!-- DONATION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-hand-holding-dollar'></i>
                                <h4 class=''>Total Amount Received</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalRev != 0 ? $TotalRev : "0") . "</p>
                            </div>
                            <div class='link-container'>
                                <abbr title='Financial Report'><button class='save' id='retrieve1' onclick=\"save_generate3()\">Download Report</button></abbr>
                            </div>
                        </div>
                        
            <!-- CONTRIBUTION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-circle-dollar-to-slot'></i>
                                <h4 class=''>Total Fund Balance</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalNet != 0 ? $TotalNet : "0") . "</p>
                            </div>
                            <div class='link-container'>
                            <abbr title='Expenses Report'><button class='save' id='retrieve1' onclick=\"save_generate2()\">Download Report</button></abbr>
                            </div>
                        </div>";
            }


            if ($com_result) {
                $row = mysqli_fetch_assoc($com_result);
                $com_count = $row['com_count'];
                echo "
                    <!-- COMPLAINTS COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-file-circle-exclamation'></i>
                        <h4 class=''>Complaints Recieved</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . ($com_count != 0 ? $com_count : "0") . "</p>
                    </div>
                    <div class='link-container com_count'>
                    
                    </div>
                </div>";
            }
            // close MySQL connection
            $conn->close();
            ?>
        </section>

        <div class="bottom-dash">
            <div class='botleft-dash border'>
                <!-- FINANCE ENTRY -->
                <div class='card-header entry'>
                    <h4>Recent Financial Entry</h4>
                </div>

                <div class="table-container">
                    <table id="dash-table">
                        <tr>
                            <th>Transaction Code</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Date</th>
                        </tr>

                        <tbody>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            $selectFinance = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                            $FinaceResult = $conn->query($selectFinance);

                            while ($FinRecent = $FinaceResult->fetch_assoc()) {
                                $debit = $FinRecent['debit'];
                                $credit = $FinRecent['credit'];
                                $rowClass = '';

                                // Check if the debit value is greater than 0
                                if ($debit > 0) {
                                    $rowClass = 'debit-row'; // CSS class for debit rows
                                }

                                // Check if the credit value is greater than 0
                                if ($credit > 0) {
                                    $rowClass = 'credit-row'; // CSS class for credit rows
                                }

                                echo "
                                    <tr class='$rowClass'>
                                        <td>" . $FinRecent['transaction_code'] . "</td>
                                        <td>" . $debit . "</td>
                                        <td>" . $credit . "</td>
                                        <td>" . $FinRecent['new_formatted_date'] . "</td>
                                    </tr>
                                ";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <abbr title="Download Financial Report"><button class="finance_download exportBtn"
                        onclick="save_generate3()"><i class="fa-solid fa-download"></i></button></abbr>

            </div>
            <div class='botright-dash border'>
                <!-- EVENTS AND PROGRAMS ENTRY -->
                <div class='card-header events'>
                    <h4>Incoming Events</h4>
                </div>

                <div class='dash-content'>
                    <?php

                    // connect to the MySQL database
                    include "db_conn.php";
                    $dateToday = date('ymd');

                    $showPrograms = "SELECT *, CONCAT(DATE_FORMAT(ep_date, '%Y-%m-%d'), ' ', DATE_FORMAT(ep_start, '%h:%i %p')) AS concatenated_datetime FROM events_programs 
                        WHERE ep_date >= $dateToday ORDER BY concatenated_datetime ASC";
                    $showProgramResult = $conn->query($showPrograms);

                    while ($EPRecent = $showProgramResult->fetch_assoc()) {
                        echo "
                            <div class='agenda-box'>
                                <i class='fa-solid fa-calendar-day'></i>
                                <div class='detail-contain'>
                                    <p class='dash-title'>" . $EPRecent['ep_title'] . "</p>
                                    <p class='dash-loc'>" . $EPRecent['ep_location'] . "</p>
                                    <p class='dash-time'>" . $EPRecent['concatenated_datetime'] . "</p>
                                </div>
                            </div>
                            ";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

    </div>

    <!-- USER PANE -->
    <div class="users-container" id="users-container">
        <header>
            <div class="head-left">
                <h3>USER TYPE MANAGEMENT</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="user-search" placeholder="Search">
                    <button class="user-searchBtn" id="user-searchBtn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
            </div>
        </header>
        <main>
            <table id="user-table">
                <thead>
                    <tr>
                        <th class="id">USER ID</th>
                        <th class="username">NAME</th>
                        <th class="role">ROLE</th>
                        <th class="email">EMAIL</th>
                        <th class="datecreated">DATE CREATED</th>
                        <th class="action">ACTION</th>
                    </tr>
                </thead>

                <tbody id="user-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table
                    $sql = "SELECT user_id, CONCAT(F_name, ' ', L_name) AS Name, roles, email, date_created FROM user ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr id='user-" . $row["user_id"] . "'>
                        <td class='userid'>" . $row["user_id"] . "</td>
                        <td class='username'>" . $row["Name"] . "</td>
                        <td class='role'>" . $row["roles"] . "</td>
                        <td class='email'>" . $row["email"] . "</td>
                        <td class='datecreated'>" . $row["date_created"] . "</td>
                        <td class='action'>
                            <abbr title='Delete'><i class='tools fa-solid fa-trash-can'></i></abbr>
                            <abbr title='Edit'><a href='../../views/pages/edituser.php?user_id=" . $row["user_id"] . "'><i class='tools fa-solid fa-pen-to-square'></i></a></abbr>
                        </td>
                    </tr>";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <script>
        function deleteUser(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                // send AJAX request to delete the user from the database and remove the row from the table
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_user.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // remove the row from the table
                        var row = document.getElementById("user-" + id);
                        row.parentNode.removeChild(row);
                        // display success message
                        alert(xhr.responseText);
                    }
                };
                xhr.send("id=" + id);
            }
        }

        // Attach event listeners to delete buttons
        var deleteButtons = document.getElementsByClassName("tools fa-trash-can");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener("click", function () {
                var userId = this.closest("tr").querySelector(".userid").textContent;
                deleteUser(userId);
            });
        }
    </script>


    <!-- MEMBER INFO PANE -->
    <div class="member-container" id="member-container">
        <header>
            <div class="head-left">
                <h3>TODA MEMBERS INFORMATION</h3>
                <p>SECRETARY VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Excel"><button class="compExportBtn exportBtn" id="mem-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="mem-search" id="mem-search" placeholder="Search">
                    <abbr title="Unit Information"><a href="../../views/pages/unitinfo.php"><button class="mem-searchBtn"
                                id="add-unit"><i class="fa-solid fa-id-card-clip"></i></button></a></abbr>
                </div>
                <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
            </div>
        </header>

        <main>
            <table id="mem-table">
                <tr>
                    <th class="id">MEM ID</th>
                    <th class="memname">NAME</th>
                    <th class="area">AREA OF OPERATION</th>
                    <th class="role">ROLE</th>
                    <th class="license">LICENSE NO.</th>
                    <th class="status">STATUS</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="mem-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table with concatenated fname and lname
                    $sql = "SELECT * FROM mem_info ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // Check if there are any members
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }


                            // Display the member information, including the updated mem_stat
                            echo "
        <tr id='row-" . $row["id"] . "'>
            <td class='memid'>" . $row["id"] . "</td>
            <td class='memname'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
            <td class='area'>" . $row["barangay"] . "</td>
            <td class='memrole'>" . $row["mem_role"] . "</td>
            <td class='license'>" . $row["license_no"] . "</td>
            <td class='status'>
                <div class='" . $row["mem_stat"] . "'>
                    <p>" . $row["mem_stat"] . "</p>
                </div>
            </td>
            <td class='action'>
                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='showToastMember(" . $row["id"] . ")'></i></abbr>
                <abbr title='View'><a href='../../views/pages/viewmem.php?id=" . $row['id'] . "'><i class='fa-sharp fa-solid fa-eye'></i></a></abbr>
                <abbr title='Print Member Certification'><i class='tools fa-solid fa-print save' data-container='memcert' onclick=\"generatePDF('" . $row["id"] . "', 'memcertification.php')\"></i></abbr>
            </td>
        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>

                    <script>
                        function showToastMember(id) {
                            if (confirm("Are you sure you want to delete this member?")) {
                                // send AJAX request to delete the member from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "delete_member.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("row-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FINANCE PANE -->
    <div class="finance-container" id="finance-container">
        <header>
            <div class="head-left">
                <h3>FINANCE</h3>
                <p>TREASURER VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Excel"><button class="financeExportBtn exportBtn" id="finance-export"><i
                        class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="user-search" id="fin-search" placeholder="Search">
                    <abbr title="Donor List"><a href="../../views/pages/viewdonors.php"><button class="user-searchBtn" id="add-donor"><i
                                class="fa-solid fa-user-plus"></i></button></a></abbr>
                </div>
                <button class="addFinanceBtn" id="addFinance-btn"><i class="fa-solid fa-plus"></i> Add Record</button>
            </div>
        </header>

        <main>
            <table id="fin-table">
                <tr>
                    <th class="id"><abbr title="Transaction Id">ID</abbr></th>
                    <th class="name">TYPE</th>
                    <th class="code">CODE</th>
                    <th class="amount">AMOUNT</th>
                    <th class="amount">DEBIT</th>
                    <th class="amount">CREDIT</th>
                    <th class="name">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id='fin-table-body'>
                    <?php

                    include 'db_conn.php';

                    $timestamp = date('Y-m-d H:i:s');

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Delete transactions associated with non-existent member IDs
                    $deleteTransactionSql = "DELETE FROM transaction_payment WHERE member_id NOT IN (SELECT id FROM mem_info)";
                    $deleteTransactionResult = $conn->query($deleteTransactionSql);

                    if ($deleteTransactionResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }



                    // Remove deleted data from transaction_finance
                    $deleteSql = "DELETE tf FROM transaction_finance tf
                    LEFT JOIN transaction_donation td ON tf.transaction_code = td.transaction_code
                    LEFT JOIN transaction_contribution tc ON tf.transaction_code = tc.transaction_code
                    LEFT JOIN transaction_expenses te ON tf.transaction_code = te.transaction_code
                    LEFT JOIN transaction_payment tp ON tf.transaction_code = tp.transaction_code
                    WHERE td.transaction_code IS NULL
                    AND tc.transaction_code IS NULL
                    AND te.transaction_code IS NULL
                    AND tp.transaction_code IS NULL";

                    $deleteResult = $conn->query($deleteSql);

                    if ($deleteResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $sql = "INSERT INTO transaction_finance (amount, transaction_code, account_type, transaction_date, date_created) 
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_donation
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_donation.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_contribution
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_contribution.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_expenses
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_expenses.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_payment
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_payment.transaction_code)";

                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $updateSql = "UPDATE transaction_finance SET ";
                    $updateSql .= "debit = CASE ";
                    $updateSql .= "WHEN account_type IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE debit ";
                    $updateSql .= "END, ";
                    $updateSql .= "credit = CASE ";
                    $updateSql .= "WHEN account_type NOT IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE credit ";
                    $updateSql .= "END";
                    $updateResult = $conn->query($updateSql);

                    if ($updateResult === false) {
                        die("Error executing the update query: " . $conn->error);
                    }

                    // Fetch inserted data
                    $selectSql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                    $selectResult = $conn->query($selectSql);

                    if ($selectResult->num_rows === 0) {
                        echo "No rows found.";
                    } else {

                        while ($row = $selectResult->fetch_assoc()) {

                            echo "
                    <tr>
                        <td id='id'>" . $row["ID"] . "</td>
                        <td class='name'>" . $row["account_type"] . "</td>
                        <td class='code'>" . $row["transaction_code"] . "</td>
                        <td class='amount'>&#8369;" . $row["amount"] . "</td>
                        <td class='amount'>" . $row["debit"] . "</td>
                        <td class='amount'>" . $row["credit"] . "</td>
                        <td class='name'>" . $row["new_formatted_date"] . "</td>
                        <td class='action'>" ?>

                            <?php
                            if ($row['account_type'] === 'Donation') {
                                $ViewSelectSql = "SELECT donor_id FROM transaction_donation WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['donor_id'];

                                    echo "<abbr title='View'><a href='../pages/donorinfo.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }
                            } else if ($row['account_type'] === 'New Member' || $row['account_type'] === 'Renewal') {
                                $ViewSelectSql = "SELECT member_id FROM transaction_payment WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['member_id'];

                                    echo "<abbr title='View'><a href='../pages/viewmem.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }
                            } else if ($row['account_type'] === 'Programs') {
                                $ViewSelectSql = "SELECT program_ID FROM transaction_expenses WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['program_ID'];

                                    echo "<abbr title='View'><a href='../pages/viewevents.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }
                            } else if ($row['account_type'] === 'Contribution') {
                                $transactionCode = $row['transaction_code'];

                                $sql = "SELECT unit_info.id
                                FROM unit_info
                                INNER JOIN transaction_contribution ON unit_info.body_no = transaction_contribution.body_no
                                WHERE transaction_contribution.transaction_code = '$transactionCode'";

                                $result = mysqli_query($conn, $sql);

                                if ($row = mysqli_fetch_assoc($result)) {
                                    $unitId = $row['id'];

                                    echo "<abbr title='View'><a href='../pages/viewunit.php?id=$unitId'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }

                            }
                        }
                    }
                    $conn->close();
                    ?>

                    </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>

    <!-- COMPLAINTS PANE -->
    <div class="complain-container" id="complain-container">
        <header>
            <div class="head-left">
                <h3>COMPLAINTS</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="comp-search" placeholder="Search">
                    <abbr title="Complainant List"><a href="../../views/pages/viewComplainants.php"><button class="user-searchBtn"
                            id="add-complainants"><i class="fa-solid fa-user-plus"></i></i></button></a></abbr>
                </div>
                <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New
                    Complaint</button>
            </div>
        </header>

        <main>
            <table id="complaint-table">
                <tr>
                    <th class="id"><abbr title="complain-btn Id">ID</abbr></th>
                    <th class="name">COMPLAINANT</th>
                    <th class="contact">CONTACT NO.</th>
                    <th class="name">SUBJECT TO COMPLAINT</th>
                    <th class="comp-date">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="complaint-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT complaint_details.id AS id, CONCAT(complaint_info.fname, ' ', complaint_info.lname) AS complainant,
                    CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person,
                     complaint_info.phone, complaint_details.complaint_person, 
                    DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d %h:%i %p') AS date_created FROM complaint_details 
                    INNER JOIN complaint_info ON complaint_info.id = complaint_details.complainant_id
                    LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                    ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr id='complaint-" . $row["id"] . "'>
                            <td class='uid'>" . $row["id"] . "</td>
                            <td class='username'>" . $row["complainant"] . "</td>
                            <td class='contacts'>" . $row["phone"] . "</td>
                            <td class='complaintPerson'>" . $row["show_complaint_person"] . "</td>
                            <td class='actionDate'>" . $row["date_created"] . "</td>

                            <td class='action'>
                                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row["id"] . ")'></i></abbr>
                                <abbr title='View'><a href='../../views/pages/viewComplaint.php?id=" . $row["id"] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>
                                <abbr title='Print Complaint'><i class='tools fa-solid fa-print save' data-container='complaints' onclick=\"generatePDF('" . $row["id"] . "', 'comp-report.php')\"></i></abbr>
                            </td>
                        </tr>";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                    <!-- Complaint User -->
                    <script>
                        function deleteComplaint(id) {
                            if (confirm("Are you sure you want to delete this Complaint?")) {
                                // send AJAX request to delete the user from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "deleteComplaint.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("complaint-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>

            </table>
        </main>
    </div>

    <!-- EVENTS & PROGRAMS PANE -->
    <div class='event-container' id='event-container'>
        <header>
            <div class='head-left'>
                <h3>EVENTS & PROGRAMS</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class='head-right'>
                <div class='search-container'>
                    <input type='text' class='user-search' id="programs-search" placeholder='Search'>
                    <button class='user-searchBtn'><i class='fa-solid fa-magnifying-glass'></i></button>
                </div>
                <button class='addEventBtn' id='addEvent-btn'><i class='fa-solid fa-plus'></i> Add Events</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th class="id"><abbr title='complain-btn Id'>ID</abbr></th>
                    <th class="title">EVENT& PROGRAM TITLE</th>
                    <th class="date">EVENT DATE</th>
                    <th class="time">TIME</th>
                    <th class="location">LOCATION</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="programs-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT *, TIME_FORMAT(ep_start, '%h:%i %p') AS ep_time FROM `events_programs` ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "

                <tr>
                    <td class='id'>" . $row["id"] . "</td>
                    <td class='title'>" . $row["ep_title"] . "</td>
                    <td class='date'>" . $row["ep_date"] . "</td>
                    <td class='time'>" . $row["ep_time"] . "</td>
                    <td class='location'>" . $row["ep_location"] . "</td>
                    <td class='action'>
                    <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteEvent(" . $row["id"] . ")'></i></abbr>
                        <abbr title='View'><a href='../../views/pages/viewevents.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>
                        <abbr title='Print Events'><i class='tools fa-solid fa-print save' data-container='ep' onclick=\"save_generate4('" . $row["id"] . "', 'ep.php')\"></i></abbr>
                    </td>
                </tr> ";

                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                    <script>
                        function deleteEvent(id) {
                                if (confirm("Are you sure you want to delete this Event?")) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "../php/deleteEvent.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    location.reload();
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            console.log("ID:", id); // Debug log
                                            var row = document.getElementById("Complaint-" + id);
                                            console.log("Row:", row); // Debug log
                                            if (row) {
                                                console.log("Parent Node:", row.parentNode); // Debug log
                                                row.parentNode.removeChild(row);
                                                console.log("Event deleted successfully.");
                                                alert(xhr.responseText);
                                            } else {
                                                console.error("Row not found for ID:", id);
                                            }
                                        } else {
                                            console.error("Error: " + xhr.status);
                                        }
                                    };
                                    xhr.send("id=" + id);
                                }
                            }

                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FOOTER -->
    <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <!-- <a href="../../views/pages/termsofuse.php" class="border-right">Terms of Use</a> -->
            <p>Version 1.0</p>
        </div>
    </footer>

    <!-- MODALS -->
    <!-- ADD USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addUser-modal-container" id="user-modal-container">
        <h2 class="modal-title">ADD USER</h2>
        <form action="../php/adduser.php" method="post"
            oninput='city.setCustomValidity(city.value != password.value ? "Passwords do not match." : "")'
            id="user-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="userForm-left addForm">
                    <!-- USERS ROLE -->
                    <div class="fields">
                        <label for="select-role">User's role<span> *</span></label>
                        <select name="userrole" id="select-role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                        </select>
                    </div>

                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="user-lastname">Lastname<span> *</span></label>
                        <input type="text" id="user-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="user-firstname">Firstname<span> *</span></label>
                        <input type="text" id="user-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="user-midname">Middlename</label>
                        <input type="text" id="user-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="user-extension">Extension Name</label>
                        <input type="text" maxlength="5" pattern="[A-Za-z]{2,5}" id="user-extension" name="extension"
                            placeholder="eg. Jr, Sr">
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="userForm-right addForm">

                    <!-- USERNAME -->
                    <div class="fields">
                        <label for="user-uname">Username<span> *</span></label>
                        <input type="text" id="user-uname" name="user-uname" maxlength="25"
                            placeholder="juandelacruz123" required>
                        <span id="username-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- EMAIL -->
                    <div class="fields">
                        <label for="user-email">Email Address<span> *</span></label>
                        <input type="email" id="user-email" name="street"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="juan@example.com" required>
                        <span id="email-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlength="11" id="user-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="contact-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- PASSWORD -->
                    <div class="fields">
                        <label for="user-pass">Password<span> *</span></label>
                        <input type="password" id="user-pass" name="password" minlength="8" maxlength="16"
                            placeholder="8-16 characters only" required>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="fields">
                        <label for="user-confirmPass">Confirm Password<span> *</span></label>
                        <input type="password" id="user-confirmPass" name="city" required>
                    </div>

                    <!-- SEE PASSWORD -->
                    <div class="see-password-container">
                        <input class="see-pass" type="checkbox" id="see-pass">
                        <label class="see-pass-label" for="see-pass">See password</label>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="adduser-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select user role!</p>
            </div>
        </div>
    </div>

    <div class="warningToast-container" id="warningToast2">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p id="warning-con"></p>
        </div>
    </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="user-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p id="event-success"><strong>Success!</strong> User successfully added.</p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='success-toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <!-- ADD MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addMem-modal-container" id="member-modal-container">
        <h2 class="modal-title">MEMBER REGISTRATION</h2>
        <form action="../php/addmember.php" method="post" id="member-form" enctype="multipart/form-data">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left addForm">
                    <!-- MEMBERS ROLE -->
                    <div class="fields">
                        <label for="select-mem">Member's role<span> *</span></label>
                        <select name="role" id="select-mem">
                            <option value="" selected disabled>Select Role</option>
                            <option value="Officer">Officer</option>
                            <option value="Driver">Driver only</option>
                            <option value="Operator">Operator only</option>
                        </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="mem-lastname">Lastname<span> *</span></label>
                        <input type="text" id="mem-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="mem-firstname">Firstname<span> *</span></label>
                        <input type="text" id="mem-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="mem-midname">Middlename</label>
                        <input type="text" id="mem-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="mem-extension">Extension Name</label>
                        <input type="text" id="mem-extension" name="extension" maxlength="5" pattern="[A-Za-z1-9]{2,5}"
                            placeholder="eg. Jr, Sr">
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Sex<span> *</span></label>
                        <select name="gender" id="select-gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="memForm-right addForm">
                    <!-- STREET -->
                    <div class="fields">
                        <label for="mem-street">Street<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-street" name="street" required>
                    </div>

                    <!-- BARANGAY -->
                    <div class="fields">
                        <label for="mem-brgy">Barangay<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-brgy" name="barangay" required>
                    </div>
                    <!-- CITY -->
                    <div class="fields">
                        <label for="mem-city">City<span> *</span></label>
                        <input type="text" maxlength="25" pattern="[A-Za-z ]{2,25}" id="mem-city" name="city" required>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlenght="11" id="mem-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="mem-contact-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- LICENSE NUMBER -->
                    <div class="fields">
                        <label for="mem-license">License no.<span> *</span></label>
                        <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license"
                            placeholder="eg. A34-34-345645" required>
                        <span id="license-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- USER PROFILE PICTURE -->
                    <div class="fields">
                        <label for="mem-pic">Upload Profile Icon</label>
                        <input type="file" accept=".png, .jpg, .jpeg" id="mem-pic" name="profile">
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="member-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="mem-warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select member role!</p>
            </div>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="mem-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Member successfully added.</p>
        </div>
    </div>

    <!-- ADD FINANCE MODAL -->
    <div class='bg' id='bg'></div>
    <div class='addFinance-modal-container' id='finance-modal-container'>
        <h2 class='modal-title'>ADD FINANCIAL RECORD</h2>
        <form action='addfinancerecord.php' method="POST" id='finance-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='financeForm-left addForm'>
                    <!-- FINANCE TYPE -->
                    <div class='fields'>
                        <label for='select-type'>Finance Type<span> *</span>
                        </label>
                        <select name='type' id='select-type' onchange="disableInputs()" required>
                            <option value='' selected disabled>Select Account type</option>
                            <option value='Butaw'>Butaw/Contribution</option>
                            <option value='Donation'>Donation</option>
                            <option value='Expenses'>Expenses</option>
                        </select>
                    </div>
                    <!-- BODY NO. -->
                    <div class='fields'>
                        <label for='bodynum'>Body No.<span> *</span></label>
                        <select id='body-no' name='bodynum' required disabled>
                            <option selected disabled value=''>Select Body No.</option>
                            <?php

                            include
                                "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sqlBody = "SELECT * FROM unit_info";
                            $resultBody = $conn->query($sqlBody);


                            while ($rowBody = $resultBody->fetch_assoc()) {

                                echo "<option value='" . $rowBody["body_no"] . "'>" . $rowBody["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- DONOR NAME -->
                    <div class='field-container'>
                        <div class='fields donor'>
                            <label for='donor-select'>Donor Name</label>
                            <select name='donor_select' id='donor-select' onchange='handleDonorSelection()' required
                                disabled>
                                <option selected disabled value=''>Select Donor</option>
                                <?php

                                // connect to the MySQL database
                                include "db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM donor_info";

                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {

                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    echo "<option value='" . $row["id"] . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }
                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class='fields'>
                            <a href='../../views/pages/adddonor.php'><input type='button' id='donorbtn'
                                    class="add-donor" value='Add donor'></a>
                        </div>
                    </div>
                </div>

                <!-- FORM-RIGHT -->
                <div class='financeForm-right addForm'>
                    <div class='fields'>
                        <label for='expense-type'>Expense Type</label>
                        <select name='expense_type' id='expense-type' required disabled onchange="toggleRemarks()">
                            <option selected disabled value=''>Select Expense type</option>
                            <option value='Expenses - Rent'>Rent</option>
                            <option value='Expenses - Electricity'>Electricity</option>
                            <option value='Expenses - Water'>Water</option>
                            <option value='Expenses - '>Others</option>
                        </select>
                    </div>

                    <!-- ACCOUNT ID -->
                    <div class='fields' id="rem-container">
                        <label for='remarks'>Remarks<span> *</span></label>
                        <input type='text' id='remarks' name='remarks' disabled>
                    </div>


                    <!-- ACCOUNT ID -->
                    <div class='fields'>
                        <label for='trans-date'>Transaction date<span> *</span></label>
                        <input type='date' id='trans-date' name='trans_date' max="<?php echo date('Y-m-d'); ?>" required
                            disabled>
                    </div>

                    <!--  AMOUNT  -->
                    <div class='fields'>
                        <label for='amount'>Amount<span> *</span></label>
                        <input type='number' id='amount' name='amount' pattern="[0-9]*" placeholder='₱' required
                            disabled>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='finance-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD COMPLAINT MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addComplaint-modal-container" id="complaint-modal-container">
        <h2 class="modal-title">ADD COMPLAINT</h2>
        <form action="../php/complaints.php" method="post" id="complaint-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="complaintForm-left addForm">
                    <div class='fields complaint'>
                        <label for='complaint-select' required>Complainant Name<span> *</span></label>
                        <select name='complaint-select' id='complaint-select' required>
                            <option selected value='' required>Select Complainant</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM complaint_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $complaintId = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $complaintId . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <!-- New Complainant -->
                    <div class='fields'>
                        <div class="comp-contain">
                            <label for="date-incident">Add new complainant:<span></span></label>
                            <a href="../../views/pages/insertComplainant.php"><input type='button'
                                    class="add-complainant" value='New Complainant'></a>
                        </div>
                    </div>

                    <!-- SUBJECT -->
                    <div class="fields">
                        <label for="ComplaintSubject" required>Person to Complain<span> *</span></label>
                        <select name='ComplaintSubject' id='ComplaintSubject' required>
                            <option selected value='' required>Select Person to Complain</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM mem_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $mem_info = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $mem_info . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            $id = $_GET['id'];

                            if (!empty($id)) {
                                $sql = "SELECT *
                                                    FROM mem_info
                                                    LEFT JOIN unit_info ON mem_info.id = unit_info.member_id
                                                    WHERE mem_info.id = '$id'";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo '<script>
                                                    var complaintSubjectBodySelect = document.getElementById("complaintSubjectBody");
                                                    complaintSubjectBodySelect.disabled = false;
                                                    var option = document.createElement("option");
                                                    option.value = "' . $row["id"] . '";
                                                    option.textContent = "' . $row["body_no"] . '";
                                                    complaintSubjectBodySelect.innerHTML = "";
                                                    complaintSubjectBodySelect.appendChild(option);
                                                    </script>';
                                } else {
                                    echo '<script>document.getElementById("complaintSubjectBody").disabled = true;</script>';
                                }
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- BODY NUMBER -->
                    <div class="fields">
                        <label for="complaintSubjectBody">Body no.</label>
                        <select name='complaintSubjectBody' id='complaintSubjectBody' disabled>
                            <option selected value=''>Select Body Number</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM unit_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $unit_info = $row["id"]; // Retrieve the ID from the complaint_info table
                                echo "<option value='" . $unit_info . "'>" . $row["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="is-bud">
                        <input type="checkbox" id="activateSelect" onchange="toggleSelect()" />
                        <label for="activateSelect">Activate</label>
                    </div>

                    <style>

                    </style>

                </div>

                <!-- FORM-RIGHT -->
                <div class="complaintForm-right addForm">

                    <!-- DESCRIPTION -->
                    <div class="fields">
                        <label for="desc">Description<span> *</span></label>
                        <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350" onkeyup="countChar(this)"
                            required></textarea>
                    </div>

                    <!-- Date and Time -->
                    <div class="timeDate-container">
                        <!-- TIME -->
                        <div class="fields">
                            <label for="time-incident">Time of Incident<span> *</span></label>
                            <input type="time" id="time-incident" name="time-incident" required>
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" required>
                        </div>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="complaint-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- WARNING TOAST -->
    <div class="warningToast-container" id="cmplnt-warningToast">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p><strong>Try Again</strong> Placeholder warning!</p>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="cmplnt-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Complaint successfully submitted.</p>
        </div>
    </div>

    <!-- ADD EVENTS & PROGRAMS -->
    <div class='bg' id='bg'></div>
    <div class='addEvent-modal-container' id='event-modal-container'>
        <h2 class='modal-title'>SCHEDULE AN EVENT OR PROGRAM</h2>
        <form action='addevents.php' method='POST' id='event-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='complaintForm-left addForm'>
                    <!-- EVENT TITLE -->
                    <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' placeholder='eg. Meeting' required>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-desc'>Description<span> *</span></label>
                        <textarea name='desc' id='event-desc' cols='30' rows='14'></textarea>
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class='complaintForm-right addForm'>

                    <!--EVENT OR PROGRAM BUDGET-->
                    <div class='fields'>
                        <label for='events-budget'>Budget</label>
                        <input type='text' id='events-budget' pattern="[0-9]*" name='events-budget' disabled>
                    </div>

                    <div class='is-bud'>
                        <input type='checkbox' id='events-isbudget' name='events-isbudget'
                            onchange='handleBudgetCheckboxChange()'>
                        <label for='events-isbudget'>With Budget</label>
                    </div>

                    <!-- EVENT ORGANIZER -->
                    <div class='fields'>
                        <label for='events-organizer'>Organizer</label>
                        <input type='text' id='events-organizer' name='events-organizer'>
                    </div>

                    <!-- EVENT LOCATION -->
                    <div class='fields'>
                        <label for='events-location'>Location</label>
                        <input type='text' id='events-location' name='events-location' required>
                    </div>

                    <div class='timeDate-container'>
                        <!-- TIME -->
                        <div class='fields'>
                            <label for='events-time'>Time<span> *</span></label>
                            <input type='time' id='events-time' name='events-time' required>
                        </div>

                        <!-- DATE -->
                        <div class='fields'>
                            <label for='events-date'>Date<span> *</span></label>
                            <input type='date' id='events-date' name='events-date' required>
                        </div>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='event-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- TOAST NOTIFACTIONS -->
    <!-- CONFIRM DELETE TOAST -->
    <div class="toast-container">
        <p>Are you sure you want to permanently delete this user?</p>
        <div class="toast-btn-container">
            <button>Confirm</button>
            <button>Cancel</button>
        </div>
    </div>

    <!-- LOADING -->
    <div id="loading-container">
        <div class="background-wrapper">
        </div>
        <div class="logo-container">
            <img src="../../public/assets/mtodata_logo.png" alt="Logo" class="logo">
            <div class="loading-bar"></div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <!-- Javascript Library for Excel -->
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <!-- Main Script for Dashboard -->
    <script src="../../services/dashboard.js"></script>
    <!-- Script for Exporting into Excel -->
    <script src="../../services/exportMember.js"></script>
    <script src="../../services/exportFinance.js"></script>
    <!-- Script for date today  -->
    <script src="../../services/datetoday.js"></script>
    <!-- Script for Loading Screen -->
    <script src="../../services/loading.js"></script>
    <script src="../../services/monthly.js"></script>
</body>

</html>



================================================
FILE: views/php/db_conn.php
================================================
<?php

$sname= "localhost";
$uname= "root";
$password = "";


$db_name = "mtodata";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


================================================
FILE: views/php/delete_member.php
================================================
<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the member ID from the AJAX request
$id = $_POST["id"];

// prepare and execute the SQL query to delete the member from the database
$sql = "DELETE FROM mem_info WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    // if deletion was successful, return success message
    echo "Member deleted successfully.";
} else {
    // if deletion failed, return error message
    echo "Error deleting member: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>


================================================
FILE: views/php/delete_user.php
================================================
<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the user ID from the AJAX request
$id = $_POST["id"];

// prepare and execute the SQL query to delete the user from the database
$sql = "DELETE FROM user WHERE user_id=$id";
if ($conn->query($sql) === TRUE) {
    // if deletion was successful, return success message
    echo "User deleted successfully.";
} else {
    // if deletion failed, return error message
    echo "Error deleting user: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>



================================================
FILE: views/php/deleteComplainant.php
================================================
<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the member ID from the AJAX request
$id = $_POST["id"];

// Prepare and execute the SQL queries to delete the rows from the respective tables
$sql2 = "DELETE FROM complaint_info WHERE id=$id";

if ($conn->query($sql2) === TRUE) {
    // If deletion was successful, return success message
    echo "Complaint deleted successfully.";
} else {
    // If deletion failed, return error message
    echo "Error deleting Complaint: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>



================================================
FILE: views/php/deleteComplaint.php
================================================
<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the member ID from the AJAX request
$id = $_POST["id"];

// Prepare and execute the SQL queries to delete the rows from the respective tables
$sql2 = "DELETE FROM complaint_details WHERE id=$id";

if ($conn->query($sql2) === TRUE) {
    // If deletion was successful, return success message
    echo "Complaint deleted successfully.";
} else {
    // If deletion failed, return error message
    echo "Error deleting Complaint: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>



================================================
FILE: views/php/deleteEvent.php
================================================
<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the member ID from the AJAX request
$id = $_POST["id"];

// Prepare and execute the SQL queries to delete the rows from the respective tables
$sql = "DELETE FROM events_programs WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // If deletion was successful, return success message
    echo "Event deleted successfully.";
} else {
    // If deletion failed, return error message
    echo "Error deleting Complaint: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>



================================================
FILE: views/php/login.php
================================================
<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$sql = "SELECT * FROM user WHERE (email='$email' OR username='$email')";

	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) === 0) {
		$_SESSION['login_error'] = true;
		header("Location: ../html/login.html?error=1");
		exit();
	} else {
		$row = mysqli_fetch_assoc($result);
		if ($row['psword'] === $pass) {
			if ($row['roles'] === 'President') {
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/dashboard.php");
				exit();
			} else if ($row['roles'] === 'Vice President') {
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/viceview.php");
				exit();
			} else if ($row['roles'] === 'Secretary') {
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/secview.php");
				exit();
			} else if ($row['roles'] === 'Treasurer' || 'Auditor') {
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/tre-auditview.php");
				exit();
			}


		} else {
			$_SESSION['login_error'] = true;
			header("Location: ../html/login.html?error=2");
			exit();
		}
	}
} else {
	header("Location: ../html/login.html");
	exit();
}


================================================
FILE: views/php/logout.php
================================================
<?php 
session_start();

session_unset();
session_destroy();

header("Location: ../html/login.html");



================================================
FILE: views/php/secview.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// connect to the MySQL database
include "db_conn.php";

$updateQuery = "UPDATE mem_info SET mem_stat = 'Expired' WHERE mem_stat = 'Active' AND date_created < DATE_SUB(NOW(), INTERVAL 2 YEAR)";
mysqli_query($conn, $updateQuery);

date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../public/css/loading.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>

    <!-- JS LIBRARIES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

</head>

<body>
    <!-- BACKGROUND -->
    <div class="bg-container"></div>

    <!-- TOP DESIGN -->
    <div class="top-design">
        <p class="top-user"><strong>Welcome! </strong>
            <?php echo $_SESSION['email'] ?>
        </p>
        <p class="top-date">
            <i id="current-date"></i>
        </p>
    </div>

    <!-- SIDE-NAV-BAR -->
    <div class="side-nav">
        <!-- SIDENAV HEADER -->
        <header class="header-nav">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">
            <p>SECRETARY PANEL</p>
        </header>

        <!-- ITEM CONTAINER -->
        <div class="item-container">
            <ul id="nav-list">
                <li id="dash-btn"><i class="fa-solid fa-house"></i> DASHBOARD</li>
                <abbr title="You don't have permission to access this."><li id="users-btn" class="locked"><i class="fa-solid fa-lock"></i> USERS</li></abbr>
                <li id="member-btn"><i class="fa-solid fa-circle-info"></i> MEMBER INFORMATION</li>
                <abbr title="You don't have permission to access this."><li id="finance-btn" class="locked"><i class="fa-solid fa-lock"></i> FINANCE</li></abbr>
                <abbr title="You don't have permission to access this."><li id="complain-btn" class="locked"><i class="fa-solid fa-lock"></i> COMPLAINTS</li></abbr>
                <abbr title="You don't have permission to access this."><li id="programs-btn" class="locked"><i class="fa-solid fa-lock"></i> EVENTS & PROGRAMS</li></abbr>
                <a href="logout.php">
                    <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <!-- DASHBOARD PANE -->
    <div class='dashboard-container' id='dash-container'>
        <div class="dash-header">
            <?php
            $startOfMonth = date('Y-m-01');
            $formattedStartOfMonth = date('m/d/Y', strtotime($startOfMonth));

            $now = new DateTime();
            $formattedDate = $now->format('m/d/Y');
            echo "
            <abbr title='Start of the Month to Current date'><h3>MONTHLY REPORT:<span class='dash-date'> (" . $formattedStartOfMonth . " - " . $formattedDate . ")</span></h3></abbr>
            ";
            ?>
        </div>
        <section class='top-dash'>
            <?php

            // connect to the MySQL database
            include "db_conn.php";

            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // member count
            $mem = "SELECT COUNT(id) AS mem_count FROM mem_info WHERE mem_stat = 'Active'";
            $mem_result = $conn->query($mem);

            $don = "SELECT SUM(amount) AS don_count FROM transaction_donation
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $don_result = $conn->query($don);

            $com = "SELECT COUNT(id) AS com_count FROM complaint_details
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $com_result = $conn->query($com);

            $PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
            FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
            AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
            $Pas_Result = $conn->query($PasNet);

            $CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
            SUM(debit) AS total_revenue FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
            AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
            $Cur_Result = $conn->query($CurNet);

            if ($mem_result) {
                $row = mysqli_fetch_assoc($mem_result);
                echo "
                <!-- MEMBER COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-user-group'></i>
                        <h4 class=''>Total Member Count</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . $row['mem_count'] . "</p>
                    </div>
                    <div class='link-container memCount'>
                        <abbr title='Member Info Report'><button class='save' id='retrieve-donation' onclick=\"save_generate()\">Download Report</button></abbr>
                    </div>
                </div>";
            }

            if ($Pas_Result && $Cur_Result) {
                $row1 = mysqli_fetch_assoc($Pas_Result);
                $row2 = mysqli_fetch_assoc($Cur_Result);

                $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
                $TotalNet = $row1['pastNeT'] + $row2['curNeT'];

                echo "
                        <!-- DONATION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-hand-holding-dollar'></i>
                                <h4 class=''>Total Amount Received</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalRev != 0 ? $TotalRev : "0") . "</p>
                            </div>
                            <div class='link-container'>
                                <abbr title='Financial Report'><button class='save' id='retrieve1' onclick=\"save_generate3()\">Download Report</button></abbr>
                            </div>
                        </div>
                        
            <!-- CONTRIBUTION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-circle-dollar-to-slot'></i>
                                <h4 class=''>Total Fund Balance</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalNet != 0 ? $TotalNet : "0") . "</p>
                            </div>
                            <div class='link-container'>
                            <abbr title='Expenses Report'><button class='save' id='retrieve1' onclick=\"save_generate2()\">Download Report</button></abbr>
                            </div>
                        </div>";
            }


            if ($com_result) {
                $row = mysqli_fetch_assoc($com_result);
                $com_count = $row['com_count'];
                echo "
                    <!-- COMPLAINTS COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-file-circle-exclamation'></i>
                        <h4 class=''>Complaints Recieved</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . ($com_count != 0 ? $com_count : "0") . "</p>
                    </div>
                    <div class='link-container com_count'>
                   
                    </div>
                </div>";
            }
            // close MySQL connection
            $conn->close();
            ?>
        </section>

        <div class="bottom-dash">
            <div class='botleft-dash border'>
                <!-- FINANCE ENTRY -->
                <div class='card-header entry'>
                    <h4>Recent Financial Entry</h4>
                </div>

                <div class="table-container">
                    <table id="dash-table">
                        <tr>
                            <th>Transaction Code</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Date</th>
                        </tr>

                        <tbody>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            $selectFinance = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                            $FinaceResult = $conn->query($selectFinance);

                            while ($FinRecent = $FinaceResult->fetch_assoc()) {
                                $debit = $FinRecent['debit'];
                                $credit = $FinRecent['credit'];
                                $rowClass = '';

                                // Check if the debit value is greater than 0
                                if ($debit > 0) {
                                    $rowClass = 'debit-row'; // CSS class for debit rows
                                }

                                // Check if the credit value is greater than 0
                                if ($credit > 0) {
                                    $rowClass = 'credit-row'; // CSS class for credit rows
                                }

                                echo "
                                    <tr class='$rowClass'>
                                        <td>" . $FinRecent['transaction_code'] . "</td>
                                        <td>" . $debit . "</td>
                                        <td>" . $credit . "</td>
                                        <td>" . $FinRecent['new_formatted_date'] . "</td>
                                    </tr>
                                ";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <abbr title="Download Financial Report"><button class="finance_download exportBtn"
                        onclick="save_generate3()"><i class="fa-solid fa-download"></i></button></abbr>

            </div>
            <div class='botright-dash border'>
                <!-- EVENTS AND PROGRAMS ENTRY -->
                <div class='card-header events'>
                    <h4>Incoming Events</h4>
                </div>

                <div class='dash-content'>
                    <?php

                    // connect to the MySQL database
                    include "db_conn.php";
                    $dateToday = date('ymd');

                    $showPrograms = "SELECT *, CONCAT(DATE_FORMAT(ep_date, '%Y-%m-%d'), ' ', DATE_FORMAT(ep_start, '%h:%i %p')) AS concatenated_datetime FROM events_programs 
                        WHERE ep_date >= $dateToday ORDER BY concatenated_datetime ASC";
                    $showProgramResult = $conn->query($showPrograms);

                    while ($EPRecent = $showProgramResult->fetch_assoc()) {
                        echo "
                            <div class='agenda-box'>
                                <i class='fa-solid fa-calendar-day'></i>
                                <div class='detail-contain'>
                                    <p class='dash-title'>" . $EPRecent['ep_title'] . "</p>
                                    <p class='dash-loc'>" . $EPRecent['ep_location'] . "</p>
                                    <p class='dash-time'>" . $EPRecent['concatenated_datetime'] . "</p>
                                </div>
                            </div>
                            ";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

    </div>

    <!-- USER PANE -->
    <div class="users-container" id="users-container">
        <header>
            <div class="head-left">
                <h3>USER TYPE MANAGEMENT</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="user-search" placeholder="Search">
                    <button class="user-searchBtn" id="user-searchBtn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
            </div>
        </header>
        <main>
            <table id="user-table">
                <thead>
                    <tr>
                        <th class="id">USER ID</th>
                        <th class="username">NAME</th>
                        <th class="role">ROLE</th>
                        <th class="email">EMAIL</th>
                        <th class="datecreated">DATE CREATED</th>
                        <th class="action">ACTION</th>
                    </tr>
                </thead>

                <tbody id="user-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table
                    $sql = "SELECT user_id, CONCAT(F_name, ' ', L_name) AS Name, roles, email, date_created FROM user ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr id='user-" . $row["user_id"] . "'>
                        <td class='userid'>" . $row["user_id"] . "</td>
                        <td class='username'>" . $row["Name"] . "</td>
                        <td class='role'>" . $row["roles"] . "</td>
                        <td class='email'>" . $row["email"] . "</td>
                        <td class='datecreated'>" . $row["date_created"] . "</td>
                        <td class='action'>
                            <abbr title='Delete'><i class='tools fa-solid fa-trash-can'></i></abbr>
                            <a href='../../views/pages/edituser.php?user_id=" . $row["user_id"] . "'><i class='tools fa-solid fa-pen-to-square'></i></a>
                        </td>
                    </tr>";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <script>
        function deleteUser(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                // send AJAX request to delete the user from the database and remove the row from the table
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_user.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // remove the row from the table
                        var row = document.getElementById("user-" + id);
                        row.parentNode.removeChild(row);
                        // display success message
                        alert(xhr.responseText);
                    }
                };
                xhr.send("id=" + id);
            }
        }

        // Attach event listeners to delete buttons
        var deleteButtons = document.getElementsByClassName("tools fa-trash-can");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener("click", function () {
                var userId = this.closest("tr").querySelector(".userid").textContent;
                deleteUser(userId);
            });
        }
    </script>


    <!-- MEMBER INFO PANE -->
    <div class="member-container" id="member-container">
        <header>
            <div class="head-left">
                <h3>TODA MEMBERS INFORMATION</h3>
                <p>SECRETARY VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Report"><button class="compExportBtn exportBtn" id="mem-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="mem-search" id="mem-search" placeholder="Search">
                    <abbr title="Unit info"><a href="../../views/pages/unitinfo_sec.php"><button class="mem-searchBtn"
                                id="add-unit"><i class="fa-solid fa-id-card-clip"></i></button></a></abbr>
                </div>
                <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
            </div>
        </header>

        <main>
            <table id="mem-table">
                <tr>
                    <th class="id">MEM ID</th>
                    <th class="memname">NAME</th>
                    <th class="area">AREA OF OPERATION</th>
                    <th class="role">ROLE</th>
                    <th class="license">LICENSE NO.</th>
                    <th class="status">STATUS</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="mem-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table with concatenated fname and lname
                    $sql = "SELECT * FROM mem_info ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // Check if there are any members
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }


                            // Display the member information, including the updated mem_stat
                            echo "
        <tr id='row-" . $row["id"] . "'>
            <td class='memid'>" . $row["id"] . "</td>
            <td class='memname'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
            <td class='area'>" . $row["barangay"] . "</td>
            <td class='memrole'>" . $row["mem_role"] . "</td>
            <td class='license'>" . $row["license_no"] . "</td>
            <td class='status'>
                <div class='" . $row["mem_stat"] . "'>
                    <p>" . $row["mem_stat"] . "</p>
                </div>
            </td>
            <td class='action'>
                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='showToastMember(" . $row["id"] . ")'></i></abbr>
                <a href='../../views/pages/viewmem_sec.php?id=" . $row['id'] . "'><i class='fa-sharp fa-solid fa-eye'></i></a>
                <i class='tools fa-solid fa-print save' data-container='memcert' onclick=\"generatePDF('" . $row["id"] . "', 'memcertification.php')\"></i>
            </td>
        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>

                    <script>
                        function showToastMember(id) {
                            if (confirm("Are you sure you want to delete this member?")) {
                                // send AJAX request to delete the member from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "delete_member.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("row-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FINANCE PANE -->
    <div class="finance-container" id="finance-container">
        <header>
            <div class="head-left">
                <h3>FINANCE</h3>
                <p>FINANCE STAFF VIEW</p>
            </div>
            <div class="head-right">
                <button class="financeExportBtn exportBtn" id="finance-export"><i
                        class="fa-solid fa-download"></i></button>
                <div class="search-container">
                    <input type="text" class="user-search" id="fin-search" placeholder="Search">
                    <a href="../../views/pages/viewdonors.php"><button class="user-searchBtn" id="add-donor"><i
                                class="fa-solid fa-user-plus"></i></button></a>
                </div>
                <button class="addFinanceBtn" id="addFinance-btn"><i class="fa-solid fa-plus"></i> Add Record</button>
            </div>
        </header>

        <main>
            <table id="fin-table">
                <tr>
                    <th class="id"><abbr title="Transaction Id">ID</abbr></th>
                    <th class="name">TYPE</th>
                    <th class="code">CODE</th>
                    <th class="amount">AMOUNT</th>
                    <th class="amount">DEBIT</th>
                    <th class="amount">CREDIT</th>
                    <th class="name">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id='fin-table-body'>
                    <?php

                    include 'db_conn.php';

                    $timestamp = date('Y-m-d H:i:s');

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Delete transactions associated with non-existent member IDs
                    $deleteTransactionSql = "DELETE FROM transaction_payment WHERE member_id NOT IN (SELECT id FROM mem_info)";
                    $deleteTransactionResult = $conn->query($deleteTransactionSql);

                    if ($deleteTransactionResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }



                    // Remove deleted data from transaction_finance
                    $deleteSql = "DELETE tf FROM transaction_finance tf
                    LEFT JOIN transaction_donation td ON tf.transaction_code = td.transaction_code
                    LEFT JOIN transaction_contribution tc ON tf.transaction_code = tc.transaction_code
                    LEFT JOIN transaction_expenses te ON tf.transaction_code = te.transaction_code
                    LEFT JOIN transaction_payment tp ON tf.transaction_code = tp.transaction_code
                    WHERE td.transaction_code IS NULL
                    AND tc.transaction_code IS NULL
                    AND te.transaction_code IS NULL
                    AND tp.transaction_code IS NULL";

                    $deleteResult = $conn->query($deleteSql);

                    if ($deleteResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $sql = "INSERT INTO transaction_finance (amount, transaction_code, account_type, transaction_date, date_created) 
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_donation
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_donation.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_contribution
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_contribution.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_expenses
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_expenses.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_payment
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_payment.transaction_code)";

                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $updateSql = "UPDATE transaction_finance SET ";
                    $updateSql .= "debit = CASE ";
                    $updateSql .= "WHEN account_type IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE debit ";
                    $updateSql .= "END, ";
                    $updateSql .= "credit = CASE ";
                    $updateSql .= "WHEN account_type NOT IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE credit ";
                    $updateSql .= "END";
                    $updateResult = $conn->query($updateSql);

                    if ($updateResult === false) {
                        die("Error executing the update query: " . $conn->error);
                    }

                    // Fetch inserted data
                    $selectSql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                    $selectResult = $conn->query($selectSql);

                    if ($selectResult->num_rows === 0) {
                        echo "No rows found.";
                    } else {

                        while ($row = $selectResult->fetch_assoc()) {

                            echo "
                    <tr>
                        <td id='id'>" . $row["ID"] . "</td>
                        <td class='name'>" . $row["account_type"] . "</td>
                        <td class='code'>" . $row["transaction_code"] . "</td>
                        <td class='amount'>&#8369;" . $row["amount"] . "</td>
                        <td class='amount'>" . $row["debit"] . "</td>
                        <td class='amount'>" . $row["credit"] . "</td>
                        <td class='name'>" . $row["new_formatted_date"] . "</td>
                        <td class='action'>" ?>

                            <?php
                            if ($row['account_type'] === 'Donation') {
                                $ViewSelectSql = "SELECT donor_id FROM transaction_donation WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['donor_id'];

                                    echo "<a href='../pages/donorinfo.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'New Member' || $row['account_type'] === 'Renewal') {
                                $ViewSelectSql = "SELECT member_id FROM transaction_payment WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['member_id'];

                                    echo "<a href='../pages/viewmem_sec.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'Programs') {
                                $ViewSelectSql = "SELECT program_ID FROM transaction_expenses WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['program_ID'];

                                    echo "<a href='../pages/viewevents.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'Contribution') {
                                $transactionCode = $row['transaction_code'];

                                $sql = "SELECT unit_info.id
                                FROM unit_info
                                INNER JOIN transaction_contribution ON unit_info.body_no = transaction_contribution.body_no
                                WHERE transaction_contribution.transaction_code = '$transactionCode'";

                                $result = mysqli_query($conn, $sql);

                                if ($row = mysqli_fetch_assoc($result)) {
                                    $unitId = $row['id'];

                                    echo "<a href='../pages/viewunit_sec.php?id=$unitId'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }

                            }
                        }
                    }
                    $conn->close();
                    ?>

                    </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>

    <!-- COMPLAINTS PANE -->
    <div class="complain-container" id="complain-container">
        <header>
            <div class="head-left">
                <h3>COMPLAINTS</h3>
                <p>USER VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="comp-search" placeholder="Search">
                    <a href="../../views/pages/viewComplainants.php"><button class="user-searchBtn"
                            id="add-complainants"><i class="fa-solid fa-user-plus"></i></i></button></a>
                </div>
                <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New
                    Complaint</button>
            </div>
        </header>

        <main>
            <table id="complaint-table">
                <tr>
                    <th class="id"><abbr title="complain-btn Id">ID</abbr></th>
                    <th class="name">COMPLAINANT</th>
                    <th class="contact">CONTACT NO.</th>
                    <th class="name">SUBJECT TO COMPLAINT</th>
                    <th class="comp-date">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="complaint-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT complaint_details.id AS id, CONCAT(complaint_info.fname, ' ', complaint_info.lname) AS complainant,
                    CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person,
                     complaint_info.phone, complaint_details.complaint_person, 
                    DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d %h:%i %p') AS date_created FROM complaint_details 
                    INNER JOIN complaint_info ON complaint_info.id = complaint_details.complainant_id
                    LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                    ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr id='complaint-" . $row["id"] . "'>
                            <td class='uid'>" . $row["id"] . "</td>
                            <td class='username'>" . $row["complainant"] . "</td>
                            <td class='contacts'>" . $row["phone"] . "</td>
                            <td class='complaintPerson'>" . $row["show_complaint_person"] . "</td>
                            <td class='actionDate'>" . $row["date_created"] . "</td>

                            <td class='action'>
                                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row["id"] . ")'></i></abbr>
                                <a href='../../views/pages/viewComplaint.php?id=" . $row["id"] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                                <i class='tools fa-solid fa-print save' data-container='complaints' onclick=\"generatePDF('" . $row["id"] . "', 'comp-report.php')\"></i>
                            </td>
                        </tr>";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                    <!-- Complaint User -->
                    <script>
                        function deleteComplaint(id) {
                            if (confirm("Are you sure you want to delete this Complaint?")) {
                                // send AJAX request to delete the user from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "deleteComplaint.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("complaint-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>

            </table>
        </main>
    </div>

    <!-- EVENTS & PROGRAMS PANE -->
    <div class='event-container' id='event-container'>
        <header>
            <div class='head-left'>
                <h3>EVENTS & PROGRAMS</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class='head-right'>
                <div class='search-container'>
                    <input type='text' class='user-search' id="programs-search" placeholder='Search'>
                    <button class='user-searchBtn'><i class='fa-solid fa-magnifying-glass'></i></button>
                </div>
                <button class='addEventBtn' id='addEvent-btn'><i class='fa-solid fa-plus'></i> Add Events</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th class="id"><abbr title='complain-btn Id'>ID</abbr></th>
                    <th class="title">EVENT& PROGRAM TITLE</th>
                    <th class="date">EVENT DATE</th>
                    <th class="time">TIME</th>
                    <th class="location">LOCATION</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="programs-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT *, TIME_FORMAT(ep_start, '%h:%i %p') AS ep_time FROM `events_programs` ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "

                <tr>
                    <td class='id'>" . $row["id"] . "</td>
                    <td class='title'>" . $row["ep_title"] . "</td>
                    <td class='date'>" . $row["ep_date"] . "</td>
                    <td class='time'>" . $row["ep_time"] . "</td>
                    <td class='location'>" . $row["ep_location"] . "</td>
                    <td class='action'>
                    <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteEvent(" . $row["id"] . ")'></i></abbr>
                        <a href='../../views/pages/viewevents.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                        <i class='tools fa-solid fa-print save' data-container='ep' onclick=\"save_generate4('" . $row["id"] . "', 'ep.php')\"></i>
                    </td>
                </tr> ";

                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                    <script>
                        function deleteEvent(id) {
                                if (confirm("Are you sure you want to delete this Event?")) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "../php/deleteEvent.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    location.reload();
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            console.log("ID:", id); // Debug log
                                            var row = document.getElementById("Complaint-" + id);
                                            console.log("Row:", row); // Debug log
                                            if (row) {
                                                console.log("Parent Node:", row.parentNode); // Debug log
                                                row.parentNode.removeChild(row);
                                                console.log("Event deleted successfully.");
                                                alert(xhr.responseText);
                                            } else {
                                                console.error("Row not found for ID:", id);
                                            }
                                        } else {
                                            console.error("Error: " + xhr.status);
                                        }
                                    };
                                    xhr.send("id=" + id);
                                }
                            }

                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FOOTER -->
    <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <a href="../../views/pages/termsofuse.php" class="border-right">Terms of Use</a>
            <p>Version 1.0</p>
        </div>
    </footer>

    <!-- MODALS -->
    <!-- ADD USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addUser-modal-container" id="user-modal-container">
        <h2 class="modal-title">ADD USER</h2>
        <form action="../php/adduser.php" method="post"
            oninput='city.setCustomValidity(city.value != password.value ? "Passwords do not match." : "")'
            id="user-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="userForm-left addForm">
                    <!-- USERS ROLE -->
                    <div class="fields">
                        <label for="select-role">User's role<span> *</span></label>
                        <select name="userrole" id="select-role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                            <option value="Auditor">Auditor</option>
                        </select>
                    </div>

                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="user-lastname">Lastname<span> *</span></label>
                        <input type="text" id="user-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="user-firstname">Firstname<span> *</span></label>
                        <input type="text" id="user-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="user-midname">Middlename</label>
                        <input type="text" id="user-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="user-extension">Extension Name</label>
                        <input type="text" maxlength="5" pattern="[A-Za-z]{2,5}" id="user-extension" name="extension"
                            placeholder="eg. Jr, Sr">
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="userForm-right addForm">

                    <!-- USERNAME -->
                    <div class="fields">
                        <label for="user-uname">Username<span> *</span></label>
                        <input type="text" id="user-uname" name="user-uname" maxlength="25"
                            placeholder="juandelacruz123" required>
                        <span id="username-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- EMAIL -->
                    <div class="fields">
                        <label for="user-email">Email Address<span> *</span></label>
                        <input type="email" id="user-email" name="street"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="juan@example.com" required>
                        <span id="email-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlength="11" id="user-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="contact-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- PASSWORD -->
                    <div class="fields">
                        <label for="user-pass">Password<span> *</span></label>
                        <input type="password" id="user-pass" name="password" minlength="8" maxlength="16"
                            placeholder="8-16 characters only" required>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="fields">
                        <label for="user-confirmPass">Confirm Password<span> *</span></label>
                        <input type="password" id="user-confirmPass" name="city" required>
                    </div>

                    <!-- SEE PASSWORD -->
                    <div class="see-password-container">
                        <input class="see-pass" type="checkbox" id="see-pass">
                        <label class="see-pass-label" for="see-pass">See password</label>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="adduser-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select user role!</p>
            </div>
        </div>
    </div>

    <div class="warningToast-container" id="warningToast2">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p id="warning-con"></p>
        </div>
    </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="user-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p id="event-success"><strong>Success!</strong> User successfully added.</p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='success-toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <!-- ADD MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addMem-modal-container" id="member-modal-container">
        <h2 class="modal-title">MEMBER REGISTRATION</h2>
        <form action="../php/addmember.php" method="post" id="member-form" enctype="multipart/form-data">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left addForm">
                    <!-- MEMBERS ROLE -->
                    <div class="fields">
                        <label for="select-mem">Member's role<span> *</span></label>
                        <select name="role" id="select-mem">
                            <option value="" selected disabled>Select Role</option>
                            <option value="Officer">Officer</option>
                            <option value="Driver">Driver only</option>
                            <option value="Operator">Operator only</option>
                        </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="mem-lastname">Lastname<span> *</span></label>
                        <input type="text" id="mem-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="mem-firstname">Firstname<span> *</span></label>
                        <input type="text" id="mem-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="mem-midname">Middlename</label>
                        <input type="text" id="mem-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="mem-extension">Extension Name</label>
                        <input type="text" id="mem-extension" name="extension" maxlength="5" pattern="[A-Za-z1-9]{2,5}"
                            placeholder="eg. Jr, Sr">
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Sex<span> *</span></label>
                        <select name="gender" id="select-gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="memForm-right addForm">
                    <!-- STREET -->
                    <div class="fields">
                        <label for="mem-street">Street<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-street" name="street" required>
                    </div>

                    <!-- BARANGAY -->
                    <div class="fields">
                        <label for="mem-brgy">Barangay<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-brgy" name="barangay" required>
                    </div>
                    <!-- CITY -->
                    <div class="fields">
                        <label for="mem-city">City<span> *</span></label>
                        <input type="text" maxlength="25" pattern="[A-Za-z ]{2,25}" id="mem-city" name="city" required>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlenght="11" id="mem-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="mem-contact-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- LICENSE NUMBER -->
                    <div class="fields">
                        <label for="mem-license">License no.<span> *</span></label>
                        <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license"
                            placeholder="eg. A34-34-345645" required>
                        <span id="license-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- USER PROFILE PICTURE -->
                    <div class="fields">
                        <label for="mem-pic">Upload Profile Icon</label>
                        <input type="file" accept=".png, .jpg, .jpeg" id="mem-pic" name="profile">
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="member-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="mem-warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select member role!</p>
            </div>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="mem-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Member successfully added.</p>
        </div>
    </div>

    <!-- ADD FINANCE MODAL -->
    <div class='bg' id='bg'></div>
    <div class='addFinance-modal-container' id='finance-modal-container'>
        <h2 class='modal-title'>ADD FINANCIAL RECORD</h2>
        <form action='addfinancerecord.php' method="POST" id='finance-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='financeForm-left addForm'>
                    <!-- FINANCE TYPE -->
                    <div class='fields'>
                        <label for='select-type'>Finance Type<span> *</span>
                        </label>
                        <select name='type' id='select-type' onchange="disableInputs()" required>
                            <option value='' selected disabled>Select Account type</option>
                            <option value='Butaw'>Butaw/Contribution</option>
                            <option value='Donation'>Donation</option>
                            <option value='Expenses'>Expenses</option>
                        </select>
                    </div>
                    <!-- BODY NO. -->
                    <div class='fields'>
                        <label for='bodynum'>Body No.<span> *</span></label>
                        <select id='body-no' name='bodynum' required disabled>
                            <option selected disabled value=''>Select Body No.</option>
                            <?php

                            include
                                "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sqlBody = "SELECT * FROM unit_info";
                            $resultBody = $conn->query($sqlBody);


                            while ($rowBody = $resultBody->fetch_assoc()) {

                                echo "<option value='" . $rowBody["body_no"] . "'>" . $rowBody["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- DONOR NAME -->
                    <div class='field-container'>
                        <div class='fields donor'>
                            <label for='donor-select'>Donor Name</label>
                            <select name='donor_select' id='donor-select' onchange='handleDonorSelection()' required
                                disabled>
                                <option selected disabled value=''>Select Donor</option>
                                <?php

                                // connect to the MySQL database
                                include "db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM donor_info";

                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {

                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    echo "<option value='" . $row["id"] . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }
                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class='fields'>
                            <a href='../../views/pages/adddonor.php'><input type='button' id='donorbtn'
                                    class="add-donor" value='Add donor'></a>
                        </div>
                    </div>
                </div>

                <!-- FORM-RIGHT -->
                <div class='financeForm-right addForm'>
                    <div class='fields'>
                        <label for='expense-type'>Expense Type</label>
                        <select name='expense_type' id='expense-type' required disabled onchange="toggleRemarks()">
                            <option selected disabled value=''>Select Expense type</option>
                            <option value='Expenses - Rent'>Rent</option>
                            <option value='Expenses - Electricity'>Electricity</option>
                            <option value='Expenses - Water'>Water</option>
                            <option value='Expenses - '>Others</option>
                        </select>
                    </div>

                    <!-- ACCOUNT ID -->
                    <div class='fields' id="rem-container">
                        <label for='remarks'>Remarks<span> *</span></label>
                        <input type='text' id='remarks' name='remarks' disabled>
                    </div>


                    <!-- ACCOUNT ID -->
                    <div class='fields'>
                        <label for='trans-date'>Transaction date<span> *</span></label>
                        <input type='date' id='trans-date' name='trans_date' max="<?php echo date('Y-m-d'); ?>" required
                            disabled>
                    </div>

                    <!--  AMOUNT  -->
                    <div class='fields'>
                        <label for='amount'>Amount<span> *</span></label>
                        <input type='number' id='amount' name='amount' pattern="[0-9]*" placeholder='₱' required
                            disabled>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='finance-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD COMPLAINT MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addComplaint-modal-container" id="complaint-modal-container">
        <h2 class="modal-title">ADD COMPLAINT</h2>
        <form action="../php/complaints.php" method="post" id="complaint-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="complaintForm-left addForm">
                    <div class='fields complaint'>
                        <label for='complaint-select' required>Complainant Name<span> *</span></label>
                        <select name='complaint-select' id='complaint-select' required>
                            <option selected value='' required>Select Complainant</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM complaint_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $complaintId = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $complaintId . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <!-- New Complainant -->
                    <div class='fields'>
                        <div class="comp-contain">
                            <label for="date-incident">Add new complainant:<span></span></label>
                            <a href="../../views/pages/insertComplainant.php"><input type='button'
                                    value='New Complainant'></a>
                        </div>
                    </div>

                    <!-- SUBJECT -->
                    <div class="fields">
                        <label for="ComplaintSubject" required>Person to Complain<span> *</span></label>
                        <select name='ComplaintSubject' id='ComplaintSubject' required>
                            <option selected value='' required>Select Person to Complain</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM mem_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $mem_info = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $mem_info . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            $id = $_GET['id'];

                            if (!empty($id)) {
                                $sql = "SELECT *
                                                    FROM mem_info
                                                    LEFT JOIN unit_info ON mem_info.id = unit_info.member_id
                                                    WHERE mem_info.id = '$id'";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo '<script>
                                                    var complaintSubjectBodySelect = document.getElementById("complaintSubjectBody");
                                                    complaintSubjectBodySelect.disabled = false;
                                                    var option = document.createElement("option");
                                                    option.value = "' . $row["id"] . '";
                                                    option.textContent = "' . $row["body_no"] . '";
                                                    complaintSubjectBodySelect.innerHTML = "";
                                                    complaintSubjectBodySelect.appendChild(option);
                                                    </script>';
                                } else {
                                    echo '<script>document.getElementById("complaintSubjectBody").disabled = true;</script>';
                                }
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- BODY NUMBER -->
                    <div class="fields">
                        <label for="complaintSubjectBody">Body no.</label>
                        <select name='complaintSubjectBody' id='complaintSubjectBody' disabled>
                            <option selected value=''>Select Body Number</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM unit_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $unit_info = $row["id"]; // Retrieve the ID from the complaint_info table
                                echo "<option value='" . $unit_info . "'>" . $row["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="is-bud">
                        <input type="checkbox" id="activateSelect" onchange="toggleSelect()" />
                        <label for="activateSelect">Activate</label>
                    </div>

                    <style>

                    </style>

                </div>

                <!-- FORM-RIGHT -->
                <div class="complaintForm-right addForm">

                    <!-- DESCRIPTION -->
                    <div class="fields">
                        <label for="desc">Description<span> *</span></label>
                        <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350" onkeyup="countChar(this)"
                            required></textarea>
                    </div>

                    <!-- Date and Time -->
                    <div class="timeDate-container">
                        <!-- TIME -->
                        <div class="fields">
                            <label for="time-incident">Time of Incident<span> *</span></label>
                            <input type="time" id="time-incident" name="time-incident" required>
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" required>
                        </div>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="complaint-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- WARNING TOAST -->
    <div class="warningToast-container" id="cmplnt-warningToast">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p><strong>Try Again</strong> Placeholder warning!</p>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="cmplnt-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Complaint successfully submitted.</p>
        </div>
    </div>

    <!-- ADD EVENTS & PROGRAMS -->
    <div class='bg' id='bg'></div>
    <div class='addEvent-modal-container' id='event-modal-container'>
        <h2 class='modal-title'>SCHEDULE AN EVENT OR PROGRAM</h2>
        <form action='addevents.php' method='POST' id='event-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='complaintForm-left addForm'>
                    <!-- EVENT TITLE -->
                    <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' placeholder='eg. Meeting' required>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-desc'>Description<span> *</span></label>
                        <textarea name='desc' id='event-desc' cols='30' rows='14'></textarea>
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class='complaintForm-right addForm'>

                    <!--EVENT OR PROGRAM BUDGET-->
                    <div class='fields'>
                        <label for='events-budget'>Budget</label>
                        <input type='text' id='events-budget' pattern="[0-9]*" name='events-budget' disabled>
                    </div>

                    <div class='is-bud'>
                        <input type='checkbox' id='events-isbudget' name='events-isbudget'
                            onchange='handleBudgetCheckboxChange()'>
                        <label for='events-isbudget'>With Budget</label>
                    </div>

                    <!-- EVENT ORGANIZER -->
                    <div class='fields'>
                        <label for='events-organizer'>Organizer</label>
                        <input type='text' id='events-organizer' name='events-organizer'>
                    </div>

                    <!-- EVENT LOCATION -->
                    <div class='fields'>
                        <label for='events-location'>Location</label>
                        <input type='text' id='events-location' name='events-location' required>
                    </div>

                    <div class='timeDate-container'>
                        <!-- TIME -->
                        <div class='fields'>
                            <label for='events-time'>Time<span> *</span></label>
                            <input type='time' id='events-time' name='events-time' required>
                        </div>

                        <!-- DATE -->
                        <div class='fields'>
                            <label for='events-date'>Date<span> *</span></label>
                            <input type='date' id='events-date' name='events-date' required>
                        </div>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='event-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- TOAST NOTIFACTIONS -->
    <!-- CONFIRM DELETE TOAST -->
    <div class="toast-container">
        <p>Are you sure you want to permanently delete this user?</p>
        <div class="toast-btn-container">
            <button>Confirm</button>
            <button>Cancel</button>
        </div>
    </div>

    <!-- LOADING -->
    <div id="loading-container">
        <div class="background-wrapper">
        </div>
        <div class="logo-container">
            <img src="../../public/assets/mtodata_logo.png" alt="Logo" class="logo">
            <div class="loading-bar"></div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <!-- Javascript Library for Excel -->
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <!-- Main Script for Dashboard -->
    <script src="../../services/dashboard.js"></script>
    <!-- Script for Exporting into Excel -->
    <script src="../../services/exportMember.js"></script>
    <script src="../../services/exportFinance.js"></script>
    <!-- Script for date today  -->
    <script src="../../services/datetoday.js"></script>
    <!-- Script for Loading Screen -->
    <script src="../../services/loading.js"></script>
    <script src="../../services/monthly.js"></script>
</body>

</html>



================================================
FILE: views/php/tre-auditview.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// connect to the MySQL database
include "db_conn.php";

$updateQuery = "UPDATE mem_info SET mem_stat = 'Expired' WHERE mem_stat = 'Active' AND date_created < DATE_SUB(NOW(), INTERVAL 2 YEAR)";
mysqli_query($conn, $updateQuery);

date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../public/css/loading.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>

    <!-- JS LIBRARIES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

</head>

<body>
    <!-- BACKGROUND -->
    <div class="bg-container"></div>

    <!-- TOP DESIGN -->
    <div class="top-design">
        <p class="top-user"><strong>Welcome! </strong>
            <?php echo $_SESSION['email'] ?>
        </p>
        <p class="top-date">
            <i id="current-date"></i>
        </p>
    </div>

    <!-- SIDE-NAV-BAR -->
    <div class="side-nav">
        <!-- SIDENAV HEADER -->
        <header class="header-nav">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">
            <p>TREASURER PANEL</p>
        </header>

        <!-- ITEM CONTAINER -->
        <div class="item-container">
            <ul id="nav-list">
                <li id="dash-btn"><i class="fa-solid fa-house"></i> DASHBOARD</li>
                <abbr title="You don't have permission to access this."><li id="users-btn" class="locked"><i class="fa-solid fa-lock"></i> USERS</li></abbr>
                <abbr title="You don't have permission to access this."><li id="member-btn" class="locked"><i class="fa-solid fa-lock"></i> MEMBER INFORMATION</li></abbr>
                <li id="finance-btn"><i class="fa-solid fa-coins"></i> FINANCE</li>
                <abbr title="You don't have permission to access this."><li id="complain-btn" class="locked"><i class="fa-solid fa-lock"></i> COMPLAINTS</li></abbr>
                <abbr title="You don't have permission to access this."><li id="programs-btn" class="locked"><i class="fa-solid fa-lock"></i> EVENTS & PROGRAMS</li></abbr>
                <a href="logout.php">
                    <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <!-- DASHBOARD PANE -->
    <div class='dashboard-container' id='dash-container'>
        <div class="dash-header">
            <?php
            $startOfMonth = date('Y-m-01');
            $formattedStartOfMonth = date('m/d/Y', strtotime($startOfMonth));

            $now = new DateTime();
            $formattedDate = $now->format('m/d/Y');
            echo "
            <abbr title='Start of the Month to Current date'><h3>MONTHLY REPORT:<span class='dash-date'> (" . $formattedStartOfMonth . " - " . $formattedDate . ")</span></h3></abbr>
            ";
            ?>
        </div>
        <section class='top-dash'>
            <?php

            // connect to the MySQL database
            include "db_conn.php";

            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // member count
            $mem = "SELECT COUNT(id) AS mem_count FROM mem_info WHERE mem_stat = 'Active'";
            $mem_result = $conn->query($mem);

            $don = "SELECT SUM(amount) AS don_count FROM transaction_donation
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $don_result = $conn->query($don);

            $com = "SELECT COUNT(id) AS com_count FROM complaint_details
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $com_result = $conn->query($com);

            $PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
            FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
            AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
            $Pas_Result = $conn->query($PasNet);

            $CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
            SUM(debit) AS total_revenue FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
            AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
            $Cur_Result = $conn->query($CurNet);

            if ($mem_result) {
                $row = mysqli_fetch_assoc($mem_result);
                echo "
                <!-- MEMBER COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-user-group'></i>
                        <h4 class=''>Total Member Count</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . $row['mem_count'] . "</p>
                    </div>
                    <div class='link-container memCount'>
                        <abbr title='Member Info Report'><button class='save' id='retrieve-donation' onclick=\"save_generate()\">Download Report</button></abbr>
                    </div>
                </div>";
            }

            if ($Pas_Result && $Cur_Result) {
                $row1 = mysqli_fetch_assoc($Pas_Result);
                $row2 = mysqli_fetch_assoc($Cur_Result);

                $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
                $TotalNet = $row1['pastNeT'] + $row2['curNeT'];

                echo "
                        <!-- DONATION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-hand-holding-dollar'></i>
                                <h4 class=''>Total Amount Received</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalRev != 0 ? $TotalRev : "0") . "</p>
                            </div>
                            <div class='link-container'>
                                <abbr title='Financial Report'><button class='save' id='retrieve1' onclick=\"save_generate3()\">Download Report</button></abbr>
                            </div>
                        </div>
                        
            <!-- CONTRIBUTION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-circle-dollar-to-slot'></i>
                                <h4 class=''>Total Fund Balance</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalNet != 0 ? $TotalNet : "0") . "</p>
                            </div>
                            <div class='link-container'>
                            <abbr title='Expenses Report'><button class='save' id='retrieve1' onclick=\"save_generate2()\">Download Report</button></abbr>
                            </div>
                        </div>";
            }


            if ($com_result) {
                $row = mysqli_fetch_assoc($com_result);
                $com_count = $row['com_count'];
                echo "
                    <!-- COMPLAINTS COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-file-circle-exclamation'></i>
                        <h4 class=''>Complaints Recieved</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . ($com_count != 0 ? $com_count : "0") . "</p>
                    </div>
                    <div class='link-container com_count'>
                   
                    </div>
                </div>";
            }
            // close MySQL connection
            $conn->close();
            ?>
        </section>

        <div class="bottom-dash">
            <div class='botleft-dash border'>
                <!-- FINANCE ENTRY -->
                <div class='card-header entry'>
                    <h4>Recent Financial Entry</h4>
                </div>

                <div class="table-container">
                    <table id="dash-table">
                        <tr>
                            <th>Transaction Code</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Date</th>
                        </tr>

                        <tbody>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            $selectFinance = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                            $FinaceResult = $conn->query($selectFinance);

                            while ($FinRecent = $FinaceResult->fetch_assoc()) {
                                $debit = $FinRecent['debit'];
                                $credit = $FinRecent['credit'];
                                $rowClass = '';

                                // Check if the debit value is greater than 0
                                if ($debit > 0) {
                                    $rowClass = 'debit-row'; // CSS class for debit rows
                                }

                                // Check if the credit value is greater than 0
                                if ($credit > 0) {
                                    $rowClass = 'credit-row'; // CSS class for credit rows
                                }

                                echo "
                                    <tr class='$rowClass'>
                                        <td>" . $FinRecent['transaction_code'] . "</td>
                                        <td>" . $debit . "</td>
                                        <td>" . $credit . "</td>
                                        <td>" . $FinRecent['new_formatted_date'] . "</td>
                                    </tr>
                                ";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <abbr title="Download Financial Report"><button class="finance_download exportBtn"
                        onclick="save_generate3()"><i class="fa-solid fa-download"></i></button></abbr>

            </div>
            <div class='botright-dash border'>
                <!-- EVENTS AND PROGRAMS ENTRY -->
                <div class='card-header events'>
                    <h4>Incoming Events</h4>
                </div>

                <div class='dash-content'>
                    <?php

                    // connect to the MySQL database
                    include "db_conn.php";
                    $dateToday = date('ymd');

                    $showPrograms = "SELECT *, CONCAT(DATE_FORMAT(ep_date, '%Y-%m-%d'), ' ', DATE_FORMAT(ep_start, '%h:%i %p')) AS concatenated_datetime FROM events_programs 
                        WHERE ep_date >= $dateToday ORDER BY concatenated_datetime ASC";
                    $showProgramResult = $conn->query($showPrograms);

                    while ($EPRecent = $showProgramResult->fetch_assoc()) {
                        echo "
                            <div class='agenda-box'>
                                <i class='fa-solid fa-calendar-day'></i>
                                <div class='detail-contain'>
                                    <p class='dash-title'>" . $EPRecent['ep_title'] . "</p>
                                    <p class='dash-loc'>" . $EPRecent['ep_location'] . "</p>
                                    <p class='dash-time'>" . $EPRecent['concatenated_datetime'] . "</p>
                                </div>
                            </div>
                            ";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

    </div>

    <!-- USER PANE -->
    <div class="users-container" id="users-container">
        <header>
            <div class="head-left">
                <h3>USER TYPE MANAGEMENT</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="user-search" placeholder="Search">
                    <button class="user-searchBtn" id="user-searchBtn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
            </div>
        </header>
        <main>
            <table id="user-table">
                <thead>
                    <tr>
                        <th class="id">USER ID</th>
                        <th class="username">NAME</th>
                        <th class="role">ROLE</th>
                        <th class="email">EMAIL</th>
                        <th class="datecreated">DATE CREATED</th>
                        <th class="action">ACTION</th>
                    </tr>
                </thead>

                <tbody id="user-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table
                    $sql = "SELECT user_id, CONCAT(F_name, ' ', L_name) AS Name, roles, email, date_created FROM user ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr id='user-" . $row["user_id"] . "'>
                        <td class='userid'>" . $row["user_id"] . "</td>
                        <td class='username'>" . $row["Name"] . "</td>
                        <td class='role'>" . $row["roles"] . "</td>
                        <td class='email'>" . $row["email"] . "</td>
                        <td class='datecreated'>" . $row["date_created"] . "</td>
                        <td class='action'>
                            <abbr title='Delete'><i class='tools fa-solid fa-trash-can'></i></abbr>
                            <a href='../../views/pages/edituser.php?user_id=" . $row["user_id"] . "'><i class='tools fa-solid fa-pen-to-square'></i></a>
                        </td>
                    </tr>";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <script>
        function deleteUser(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                // send AJAX request to delete the user from the database and remove the row from the table
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_user.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // remove the row from the table
                        var row = document.getElementById("user-" + id);
                        row.parentNode.removeChild(row);
                        // display success message
                        alert(xhr.responseText);
                    }
                };
                xhr.send("id=" + id);
            }
        }

        // Attach event listeners to delete buttons
        var deleteButtons = document.getElementsByClassName("tools fa-trash-can");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener("click", function () {
                var userId = this.closest("tr").querySelector(".userid").textContent;
                deleteUser(userId);
            });
        }
    </script>


    <!-- MEMBER INFO PANE -->
    <div class="member-container" id="member-container">
        <header>
            <div class="head-left">
                <h3>TODA MEMBERS INFORMATION</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Report"><button class="compExportBtn exportBtn" id="mem-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="mem-search" id="mem-search" placeholder="Search">
                    <abbr title="Unit info"><a href="../../views/pages/unitinfo.php"><button class="mem-searchBtn"
                                id="add-unit"><i class="fa-solid fa-id-card-clip"></i></button></a></abbr>
                </div>
                <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
            </div>
        </header>

        <main>
            <table id="mem-table">
                <tr>
                    <th class="id">MEM ID</th>
                    <th class="memname">NAME</th>
                    <th class="area">AREA OF OPERATION</th>
                    <th class="role">ROLE</th>
                    <th class="license">LICENSE NO.</th>
                    <th class="status">STATUS</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="mem-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table with concatenated fname and lname
                    $sql = "SELECT * FROM mem_info ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // Check if there are any members
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }


                            // Display the member information, including the updated mem_stat
                            echo "
        <tr id='row-" . $row["id"] . "'>
            <td class='memid'>" . $row["id"] . "</td>
            <td class='memname'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
            <td class='area'>" . $row["barangay"] . "</td>
            <td class='memrole'>" . $row["mem_role"] . "</td>
            <td class='license'>" . $row["license_no"] . "</td>
            <td class='status'>
                <div class='" . $row["mem_stat"] . "'>
                    <p>" . $row["mem_stat"] . "</p>
                </div>
            </td>
            <td class='action'>
                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='showToastMember(" . $row["id"] . ")'></i></abbr>
                <a href='../../views/pages/viewmem_tres.php?id=" . $row['id'] . "'><i class='fa-sharp fa-solid fa-eye'></i></a>
                <i class='tools fa-solid fa-print save' data-container='memcert' onclick=\"generatePDF('" . $row["id"] . "', 'memcertification.php')\"></i>
            </td>
        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>

                    <script>
                        function showToastMember(id) {
                            if (confirm("Are you sure you want to delete this member?")) {
                                // send AJAX request to delete the member from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "delete_member.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("row-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FINANCE PANE -->
    <div class="finance-container" id="finance-container">
        <header>
            <div class="head-left">
                <h3>FINANCE</h3>
                <p>TREASURER VIEW</p>
            </div>
            <div class="head-right">
                <button class="financeExportBtn exportBtn" id="finance-export"><i
                        class="fa-solid fa-download"></i></button>
                <div class="search-container">
                    <input type="text" class="user-search" id="fin-search" placeholder="Search">
                    <a href="../../views/pages/viewdonors_tres.php"><button class="user-searchBtn" id="add-donor"><i
                                class="fa-solid fa-user-plus"></i></button></a>
                </div>
                <button class="addFinanceBtn" id="addFinance-btn"><i class="fa-solid fa-plus"></i> Add Record</button>
            </div>
        </header>

        <main>
            <table id="fin-table">
                <tr>
                    <th class="id"><abbr title="Transaction Id">ID</abbr></th>
                    <th class="name">TYPE</th>
                    <th class="code">CODE</th>
                    <th class="amount">AMOUNT</th>
                    <th class="amount">DEBIT</th>
                    <th class="amount">CREDIT</th>
                    <th class="name">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id='fin-table-body'>
                    <?php

                    include 'db_conn.php';

                    $timestamp = date('Y-m-d H:i:s');

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Delete transactions associated with non-existent member IDs
                    $deleteTransactionSql = "DELETE FROM transaction_payment WHERE member_id NOT IN (SELECT id FROM mem_info)";
                    $deleteTransactionResult = $conn->query($deleteTransactionSql);

                    if ($deleteTransactionResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }



                    // Remove deleted data from transaction_finance
                    $deleteSql = "DELETE tf FROM transaction_finance tf
                    LEFT JOIN transaction_donation td ON tf.transaction_code = td.transaction_code
                    LEFT JOIN transaction_contribution tc ON tf.transaction_code = tc.transaction_code
                    LEFT JOIN transaction_expenses te ON tf.transaction_code = te.transaction_code
                    LEFT JOIN transaction_payment tp ON tf.transaction_code = tp.transaction_code
                    WHERE td.transaction_code IS NULL
                    AND tc.transaction_code IS NULL
                    AND te.transaction_code IS NULL
                    AND tp.transaction_code IS NULL";

                    $deleteResult = $conn->query($deleteSql);

                    if ($deleteResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $sql = "INSERT INTO transaction_finance (amount, transaction_code, account_type, transaction_date, date_created) 
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_donation
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_donation.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_contribution
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_contribution.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_expenses
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_expenses.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_payment
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_payment.transaction_code)";

                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $updateSql = "UPDATE transaction_finance SET ";
                    $updateSql .= "debit = CASE ";
                    $updateSql .= "WHEN account_type IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE debit ";
                    $updateSql .= "END, ";
                    $updateSql .= "credit = CASE ";
                    $updateSql .= "WHEN account_type NOT IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE credit ";
                    $updateSql .= "END";
                    $updateResult = $conn->query($updateSql);

                    if ($updateResult === false) {
                        die("Error executing the update query: " . $conn->error);
                    }

                    // Fetch inserted data
                    $selectSql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                    $selectResult = $conn->query($selectSql);

                    if ($selectResult->num_rows === 0) {
                        echo "No rows found.";
                    } else {

                        while ($row = $selectResult->fetch_assoc()) {

                            echo "
                    <tr>
                        <td id='id'>" . $row["ID"] . "</td>
                        <td class='name'>" . $row["account_type"] . "</td>
                        <td class='code'>" . $row["transaction_code"] . "</td>
                        <td class='amount'>&#8369;" . $row["amount"] . "</td>
                        <td class='amount'>" . $row["debit"] . "</td>
                        <td class='amount'>" . $row["credit"] . "</td>
                        <td class='name'>" . $row["new_formatted_date"] . "</td>
                        <td class='action'>" ?>

                            <?php
                            if ($row['account_type'] === 'Donation') {
                                $ViewSelectSql = "SELECT donor_id FROM transaction_donation WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['donor_id'];

                                    echo "<a href='../pages/donorinfo_tres.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'New Member' || $row['account_type'] === 'Renewal') {
                                $ViewSelectSql = "SELECT member_id FROM transaction_payment WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['member_id'];

                                    echo "<a href='../pages/viewmem_tres.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'Programs') {
                                $ViewSelectSql = "SELECT program_ID FROM transaction_expenses WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['program_ID'];

                                    echo "<a href='../pages/viewevents_tres.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'Contribution') {
                                $transactionCode = $row['transaction_code'];

                                $sql = "SELECT unit_info.id
                                FROM unit_info
                                INNER JOIN transaction_contribution ON unit_info.body_no = transaction_contribution.body_no
                                WHERE transaction_contribution.transaction_code = '$transactionCode'";

                                $result = mysqli_query($conn, $sql);

                                if ($row = mysqli_fetch_assoc($result)) {
                                    $unitId = $row['id'];

                                    echo "<a href='../pages/viewunit.php?id=$unitId'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }

                            }
                        }
                    }
                    $conn->close();
                    ?>

                    </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>

    <!-- COMPLAINTS PANE -->
    <div class="complain-container" id="complain-container">
        <header>
            <div class="head-left">
                <h3>COMPLAINTS</h3>
                <p>USER VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="comp-search" placeholder="Search">
                    <a href="../../views/pages/viewComplainants.php"><button class="user-searchBtn"
                            id="add-complainants"><i class="fa-solid fa-user-plus"></i></i></button></a>
                </div>
                <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New
                    Complaint</button>
            </div>
        </header>

        <main>
            <table id="complaint-table">
                <tr>
                    <th class="id"><abbr title="complain-btn Id">ID</abbr></th>
                    <th class="name">COMPLAINANT</th>
                    <th class="contact">CONTACT NO.</th>
                    <th class="name">SUBJECT TO COMPLAINT</th>
                    <th class="comp-date">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="complaint-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT complaint_details.id AS id, CONCAT(complaint_info.fname, ' ', complaint_info.lname) AS complainant,
                    CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person,
                     complaint_info.phone, complaint_details.complaint_person, 
                    DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d %h:%i %p') AS date_created FROM complaint_details 
                    INNER JOIN complaint_info ON complaint_info.id = complaint_details.complainant_id
                    LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                    ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr id='complaint-" . $row["id"] . "'>
                            <td class='uid'>" . $row["id"] . "</td>
                            <td class='username'>" . $row["complainant"] . "</td>
                            <td class='contacts'>" . $row["phone"] . "</td>
                            <td class='complaintPerson'>" . $row["show_complaint_person"] . "</td>
                            <td class='actionDate'>" . $row["date_created"] . "</td>

                            <td class='action'>
                                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row["id"] . ")'></i></abbr>
                                <a href='../../views/pages/viewComplaint.php?id=" . $row["id"] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                                <i class='tools fa-solid fa-print save' data-container='complaints' onclick=\"generatePDF('" . $row["id"] . "', 'comp-report.php')\"></i>
                            </td>
                        </tr>";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                    <!-- Complaint User -->
                    <script>
                        function deleteComplaint(id) {
                            if (confirm("Are you sure you want to delete this Complaint?")) {
                                // send AJAX request to delete the user from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "deleteComplaint.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("complaint-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>

            </table>
        </main>
    </div>

    <!-- EVENTS & PROGRAMS PANE -->
    <div class='event-container' id='event-container'>
        <header>
            <div class='head-left'>
                <h3>EVENTS & PROGRAMS</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class='head-right'>
                <div class='search-container'>
                    <input type='text' class='user-search' id="programs-search" placeholder='Search'>
                    <button class='user-searchBtn'><i class='fa-solid fa-magnifying-glass'></i></button>
                </div>
                <button class='addEventBtn' id='addEvent-btn'><i class='fa-solid fa-plus'></i> Add Events</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th class="id"><abbr title='complain-btn Id'>ID</abbr></th>
                    <th class="title">EVENT& PROGRAM TITLE</th>
                    <th class="date">EVENT DATE</th>
                    <th class="time">TIME</th>
                    <th class="location">LOCATION</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="programs-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT *, TIME_FORMAT(ep_start, '%h:%i %p') AS ep_time FROM `events_programs` ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "

                <tr>
                    <td class='id'>" . $row["id"] . "</td>
                    <td class='title'>" . $row["ep_title"] . "</td>
                    <td class='date'>" . $row["ep_date"] . "</td>
                    <td class='time'>" . $row["ep_time"] . "</td>
                    <td class='location'>" . $row["ep_location"] . "</td>
                    <td class='action'>
                    <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteEvent(" . $row["id"] . ")'></i></abbr>
                        <a href='../../views/pages/viewevents_tres.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                        <i class='tools fa-solid fa-print save' data-container='ep' onclick=\"save_generate4('" . $row["id"] . "', 'ep.php')\"></i>
                    </td>
                </tr> ";

                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                    <script>
                        function deleteEvent(id) {
                                if (confirm("Are you sure you want to delete this Event?")) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "../php/deleteEvent.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    location.reload();
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            console.log("ID:", id); // Debug log
                                            var row = document.getElementById("Complaint-" + id);
                                            console.log("Row:", row); // Debug log
                                            if (row) {
                                                console.log("Parent Node:", row.parentNode); // Debug log
                                                row.parentNode.removeChild(row);
                                                console.log("Event deleted successfully.");
                                                alert(xhr.responseText);
                                            } else {
                                                console.error("Row not found for ID:", id);
                                            }
                                        } else {
                                            console.error("Error: " + xhr.status);
                                        }
                                    };
                                    xhr.send("id=" + id);
                                }
                            }

                            document.getElementbyId()

                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FOOTER -->
    <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <a href="../../views/pages/termsofuse.php" class="border-right">Terms of Use</a>
            <p>Version 1.0</p>
        </div>
    </footer>

    <!-- MODALS -->
    <!-- ADD USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addUser-modal-container" id="user-modal-container">
        <h2 class="modal-title">ADD USER</h2>
        <form action="../php/adduser.php" method="post"
            oninput='city.setCustomValidity(city.value != password.value ? "Passwords do not match." : "")'
            id="user-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="userForm-left addForm">
                    <!-- USERS ROLE -->
                    <div class="fields">
                        <label for="select-role">User's role<span> *</span></label>
                        <select name="userrole" id="select-role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                            <option value="Auditor">Auditor</option>
                        </select>
                    </div>

                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="user-lastname">Lastname<span> *</span></label>
                        <input type="text" id="user-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="user-firstname">Firstname<span> *</span></label>
                        <input type="text" id="user-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="user-midname">Middlename</label>
                        <input type="text" id="user-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="user-extension">Extension Name</label>
                        <input type="text" maxlength="5" pattern="[A-Za-z]{2,5}" id="user-extension" name="extension"
                            placeholder="eg. Jr, Sr">
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="userForm-right addForm">

                    <!-- USERNAME -->
                    <div class="fields">
                        <label for="user-uname">Username<span> *</span></label>
                        <input type="text" id="user-uname" name="user-uname" maxlength="25"
                            placeholder="juandelacruz123" required>
                        <span id="username-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- EMAIL -->
                    <div class="fields">
                        <label for="user-email">Email Address<span> *</span></label>
                        <input type="email" id="user-email" name="street"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="juan@example.com" required>
                        <span id="email-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlength="11" id="user-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="contact-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- PASSWORD -->
                    <div class="fields">
                        <label for="user-pass">Password<span> *</span></label>
                        <input type="password" id="user-pass" name="password" minlength="8" maxlength="16"
                            placeholder="8-16 characters only" required>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="fields">
                        <label for="user-confirmPass">Confirm Password<span> *</span></label>
                        <input type="password" id="user-confirmPass" name="city" required>
                    </div>

                    <!-- SEE PASSWORD -->
                    <div class="see-password-container">
                        <input class="see-pass" type="checkbox" id="see-pass">
                        <label class="see-pass-label" for="see-pass">See password</label>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="adduser-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select user role!</p>
            </div>
        </div>
    </div>

    <div class="warningToast-container" id="warningToast2">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p id="warning-con"></p>
        </div>
    </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="user-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p id="event-success"><strong>Success!</strong> User successfully added.</p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='success-toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <!-- ADD MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addMem-modal-container" id="member-modal-container">
        <h2 class="modal-title">MEMBER REGISTRATION</h2>
        <form action="../php/addmember.php" method="post" id="member-form" enctype="multipart/form-data">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left addForm">
                    <!-- MEMBERS ROLE -->
                    <div class="fields">
                        <label for="select-mem">Member's role<span> *</span></label>
                        <select name="role" id="select-mem">
                            <option value="" selected disabled>Select Role</option>
                            <option value="Officer">Officer</option>
                            <option value="Driver">Driver only</option>
                            <option value="Operator">Operator only</option>
                        </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="mem-lastname">Lastname<span> *</span></label>
                        <input type="text" id="mem-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="mem-firstname">Firstname<span> *</span></label>
                        <input type="text" id="mem-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="mem-midname">Middlename</label>
                        <input type="text" id="mem-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="mem-extension">Extension Name</label>
                        <input type="text" id="mem-extension" name="extension" maxlength="5" pattern="[A-Za-z1-9]{2,5}"
                            placeholder="eg. Jr, Sr">
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Sex<span> *</span></label>
                        <select name="gender" id="select-gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="memForm-right addForm">
                    <!-- STREET -->
                    <div class="fields">
                        <label for="mem-street">Street<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-street" name="street" required>
                    </div>

                    <!-- BARANGAY -->
                    <div class="fields">
                        <label for="mem-brgy">Barangay<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-brgy" name="barangay" required>
                    </div>
                    <!-- CITY -->
                    <div class="fields">
                        <label for="mem-city">City<span> *</span></label>
                        <input type="text" maxlength="25" pattern="[A-Za-z ]{2,25}" id="mem-city" name="city" required>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlenght="11" id="mem-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="mem-contact-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- LICENSE NUMBER -->
                    <div class="fields">
                        <label for="mem-license">License no.<span> *</span></label>
                        <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license"
                            placeholder="eg. A34-34-345645" required>
                        <span id="license-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- USER PROFILE PICTURE -->
                    <div class="fields">
                        <label for="mem-pic">Upload Profile Icon</label>
                        <input type="file" accept=".png, .jpg, .jpeg" id="mem-pic" name="profile">
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="member-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="mem-warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select member role!</p>
            </div>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="mem-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Member successfully added.</p>
        </div>
    </div>

    <!-- ADD FINANCE MODAL -->
    <div class='bg' id='bg'></div>
    <div class='addFinance-modal-container' id='finance-modal-container'>
        <h2 class='modal-title'>ADD FINANCIAL RECORD</h2>
        <form action='addfinancerecord.php' method="POST" id='finance-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='financeForm-left addForm'>
                    <!-- FINANCE TYPE -->
                    <div class='fields'>
                        <label for='select-type'>Finance Type<span> *</span>
                        </label>
                        <select name='type' id='select-type' onchange="disableInputs()" required>
                            <option value='' selected disabled>Select Account type</option>
                            <option value='Butaw'>Butaw/Contribution</option>
                            <option value='Donation'>Donation</option>
                            <option value='Expenses'>Expenses</option>
                        </select>
                    </div>
                    <!-- BODY NO. -->
                    <div class='fields'>
                        <label for='bodynum'>Body No.<span> *</span></label>
                        <select id='body-no' name='bodynum' required disabled>
                            <option selected disabled value=''>Select Body No.</option>
                            <?php

                            include
                                "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sqlBody = "SELECT * FROM unit_info";
                            $resultBody = $conn->query($sqlBody);


                            while ($rowBody = $resultBody->fetch_assoc()) {

                                echo "<option value='" . $rowBody["body_no"] . "'>" . $rowBody["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- DONOR NAME -->
                    <div class='field-container'>
                        <div class='fields donor'>
                            <label for='donor-select'>Donor Name</label>
                            <select name='donor_select' id='donor-select' onchange='handleDonorSelection()' required
                                disabled>
                                <option selected disabled value=''>Select Donor</option>
                                <?php

                                // connect to the MySQL database
                                include "db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM donor_info";

                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {

                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    echo "<option value='" . $row["id"] . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }
                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class='fields'>
                            <a href='../../views/pages/adddonor_tres.php'><input type='button' class="add-donor" id='donorbtn'
                                    value='Add donor'></a>
                        </div>
                    </div>
                </div>

                <!-- FORM-RIGHT -->
                <div class='financeForm-right addForm'>
                    <div class='fields'>
                        <label for='expense-type'>Expense Type</label>
                        <select name='expense_type' id='expense-type' required disabled onchange="toggleRemarks()">
                            <option selected disabled value=''>Select Expense type</option>
                            <option value='Expenses - Rent'>Rent</option>
                            <option value='Expenses - Electricity'>Electricity</option>
                            <option value='Expenses - Water'>Water</option>
                            <option value='Expenses - '>Others</option>
                        </select>
                    </div>

                    <!-- ACCOUNT ID -->
                    <div class='fields' id="rem-container">
                        <label for='remarks'>Remarks<span> *</span></label>
                        <input type='text' id='remarks' name='remarks' disabled>
                    </div>


                    <!-- ACCOUNT ID -->
                    <div class='fields'>
                        <label for='trans-date'>Transaction date<span> *</span></label>
                        <input type='date' id='trans-date' name='trans_date' max="<?php echo date('Y-m-d'); ?>" required
                            disabled>
                    </div>

                    <!--  AMOUNT  -->
                    <div class='fields'>
                        <label for='amount'>Amount<span> *</span></label>
                        <input type='number' id='amount' name='amount' pattern="[0-9]*" placeholder='₱' required
                            disabled>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='finance-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD COMPLAINT MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addComplaint-modal-container" id="complaint-modal-container">
        <h2 class="modal-title">ADD COMPLAINT</h2>
        <form action="../php/complaints.php" method="post" id="complaint-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="complaintForm-left addForm">
                    <div class='fields complaint'>
                        <label for='complaint-select' required>Complainant Name<span> *</span></label>
                        <select name='complaint-select' id='complaint-select' required>
                            <option selected value='' required>Select Complainant</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM complaint_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $complaintId = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $complaintId . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <!-- New Complainant -->
                    <div class='fields'>
                        <div class="comp-contain">
                            <label for="date-incident">Add new complainant:<span></span></label>
                            <a href="../../views/pages/insertComplainant.php"><input type='button'
                                    class="add-complainant" value='New Complainant'></a>
                        </div>
                    </div>

                    <!-- SUBJECT -->
                    <div class="fields">
                        <label for="ComplaintSubject" required>Person to Complain<span> *</span></label>
                        <select name='ComplaintSubject' id='ComplaintSubject' required>
                            <option selected value='' required>Select Person to Complain</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM mem_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $mem_info = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $mem_info . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            $id = $_GET['id'];

                            if (!empty($id)) {
                                $sql = "SELECT *
                                                    FROM mem_info
                                                    LEFT JOIN unit_info ON mem_info.id = unit_info.member_id
                                                    WHERE mem_info.id = '$id'";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo '<script>
                                                    var complaintSubjectBodySelect = document.getElementById("complaintSubjectBody");
                                                    complaintSubjectBodySelect.disabled = false;
                                                    var option = document.createElement("option");
                                                    option.value = "' . $row["id"] . '";
                                                    option.textContent = "' . $row["body_no"] . '";
                                                    complaintSubjectBodySelect.innerHTML = "";
                                                    complaintSubjectBodySelect.appendChild(option);
                                                    </script>';
                                } else {
                                    echo '<script>document.getElementById("complaintSubjectBody").disabled = true;</script>';
                                }
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- BODY NUMBER -->
                    <div class="fields">
                        <label for="complaintSubjectBody">Body no.</label>
                        <select name='complaintSubjectBody' id='complaintSubjectBody' disabled>
                            <option selected value=''>Select Body Number</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM unit_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $unit_info = $row["id"]; // Retrieve the ID from the complaint_info table
                                echo "<option value='" . $unit_info . "'>" . $row["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="is-bud">
                        <input type="checkbox" id="activateSelect" onchange="toggleSelect()" />
                        <label for="activateSelect">Activate</label>
                    </div>

                    <style>

                    </style>

                </div>

                <!-- FORM-RIGHT -->
                <div class="complaintForm-right addForm">

                    <!-- DESCRIPTION -->
                    <div class="fields">
                        <label for="desc">Description<span> *</span></label>
                        <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350" onkeyup="countChar(this)"
                            required></textarea>
                    </div>

                    <!-- Date and Time -->
                    <div class="timeDate-container">
                        <!-- TIME -->
                        <div class="fields">
                            <label for="time-incident">Time of Incident<span> *</span></label>
                            <input type="time" id="time-incident" name="time-incident" required>
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" required>
                        </div>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="complaint-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- WARNING TOAST -->
    <div class="warningToast-container" id="cmplnt-warningToast">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p><strong>Try Again</strong> Placeholder warning!</p>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="cmplnt-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Complaint successfully submitted.</p>
        </div>
    </div>

    <!-- ADD EVENTS & PROGRAMS -->
    <div class='bg' id='bg'></div>
    <div class='addEvent-modal-container' id='event-modal-container'>
        <h2 class='modal-title'>SCHEDULE AN EVENT OR PROGRAM</h2>
        <form action='addevents.php' method='POST' id='event-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='complaintForm-left addForm'>
                    <!-- EVENT TITLE -->
                    <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' placeholder='eg. Meeting' required>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-desc'>Description<span> *</span></label>
                        <textarea name='desc' id='event-desc' cols='30' rows='14'></textarea>
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class='complaintForm-right addForm'>

                    <!--EVENT OR PROGRAM BUDGET-->
                    <div class='fields'>
                        <label for='events-budget'>Budget</label>
                        <input type='text' id='events-budget' pattern="[0-9]*" name='events-budget' disabled>
                    </div>

                    <div class='is-bud'>
                        <input type='checkbox' id='events-isbudget' name='events-isbudget'
                            onchange='handleBudgetCheckboxChange()'>
                        <label for='events-isbudget'>With Budget</label>
                    </div>

                    <!-- EVENT ORGANIZER -->
                    <div class='fields'>
                        <label for='events-organizer'>Organizer</label>
                        <input type='text' id='events-organizer' name='events-organizer'>
                    </div>

                    <!-- EVENT LOCATION -->
                    <div class='fields'>
                        <label for='events-location'>Location</label>
                        <input type='text' id='events-location' name='events-location' required>
                    </div>

                    <div class='timeDate-container'>
                        <!-- TIME -->
                        <div class='fields'>
                            <label for='events-time'>Time<span> *</span></label>
                            <input type='time' id='events-time' name='events-time' required>
                        </div>

                        <!-- DATE -->
                        <div class='fields'>
                            <label for='events-date'>Date<span> *</span></label>
                            <input type='date' id='events-date' name='events-date' required>
                        </div>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='event-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- TOAST NOTIFACTIONS -->
    <!-- CONFIRM DELETE TOAST -->
    <div class="toast-container">
        <p>Are you sure you want to permanently delete this user?</p>
        <div class="toast-btn-container">
            <button>Confirm</button>
            <button>Cancel</button>
        </div>
    </div>

    <!-- LOADING -->
    <div id="loading-container">
        <div class="background-wrapper">
        </div>
        <div class="logo-container">
            <img src="../../public/assets/mtodata_logo.png" alt="Logo" class="logo">
            <div class="loading-bar"></div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <!-- Javascript Library for Excel -->
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <!-- Main Script for Dashboard -->
    <script src="../../services/dashboard.js"></script>
    <!-- Script for Exporting into Excel -->
    <script src="../../services/exportMember.js"></script>
    <script src="../../services/exportFinance.js"></script>
    <!-- Script for date today  -->
    <script src="../../services/datetoday.js"></script>
    <!-- Script for Loading Screen -->
    <script src="../../services/loading.js"></script>
    <script src="../../services/monthly.js"></script>
</body>

</html>



================================================
FILE: views/php/viceview.php
================================================
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// connect to the MySQL database
include "db_conn.php";

$updateQuery = "UPDATE mem_info SET mem_stat = 'Expired' WHERE mem_stat = 'Active' AND date_created < DATE_SUB(NOW(), INTERVAL 2 YEAR)";
mysqli_query($conn, $updateQuery);

date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../public/css/loading.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>

    <!-- JS LIBRARIES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

</head>

<body>
    <!-- BACKGROUND -->
    <div class="bg-container"></div>

    <!-- TOP DESIGN -->
    <div class="top-design">
        <p class="top-user"><strong>Welcome! </strong>
            <?php echo $_SESSION['email'] ?>
        </p>
        <p class="top-date">
            <i id="current-date"></i>
        </p>
    </div>

    <!-- SIDE-NAV-BAR -->
    <div class="side-nav">
        <!-- SIDENAV HEADER -->
        <header class="header-nav">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">
            <p>VICE PRESIDENT PANEL</p>
        </header>

        <!-- ITEM CONTAINER -->
        <div class="item-container">
            <ul id="nav-list">
                <li id="dash-btn" class="option"><i class="fa-solid fa-house"></i> DASHBOARD</li>
                <abbr title="You don't have permission to access this."><li id="users-btn" class="locked"><i class="fa-solid fa-lock"></i> USERS</li></abbr>
                <abbr title="You don't have permission to access this."><li id="member-btn" class="locked"><i class="fa-solid fa-lock"></i> MEMBER INFORMATION</li></abbr>
                <abbr title="You don't have permission to access this."><li id="finance-btn" class="locked"><i class="fa-solid fa-lock"></i> FINANCE</li></abbr>
                <li id="complain-btn" class="option"><i class="fa-solid fa-flag"></i> COMPLAINTS</li>
                <li id="programs-btn" class="option"><i class="fa-solid fa-calendar-days"></i> EVENTS & PROGRAMS</li>
                <a href="logout.php">
                    <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <!-- DASHBOARD PANE -->
    <div class='dashboard-container' id='dash-container'>
        <div class="dash-header">
            <?php
            $startOfMonth = date('Y-m-01');
            $formattedStartOfMonth = date('m/d/Y', strtotime($startOfMonth));

            $now = new DateTime();
            $formattedDate = $now->format('m/d/Y');
            echo "
            <abbr title='Start of the Month to Current date'><h3>MONTHLY REPORT:<span class='dash-date'> (" . $formattedStartOfMonth . " - " . $formattedDate . ")</span></h3></abbr>
            ";
            ?>
        </div>
        <section class='top-dash'>
            <?php

            // connect to the MySQL database
            include "db_conn.php";

            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // member count
            $mem = "SELECT COUNT(id) AS mem_count FROM mem_info WHERE mem_stat = 'Active'";
            $mem_result = $conn->query($mem);

            $don = "SELECT SUM(amount) AS don_count FROM transaction_donation
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $don_result = $conn->query($don);

            $com = "SELECT COUNT(id) AS com_count FROM complaint_details
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $com_result = $conn->query($com);

            $PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
            FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
            AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
            $Pas_Result = $conn->query($PasNet);

            $CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
            SUM(debit) AS total_revenue FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
            AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
            $Cur_Result = $conn->query($CurNet);

            if ($mem_result) {
                $row = mysqli_fetch_assoc($mem_result);
                echo "
                <!-- MEMBER COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-user-group'></i>
                        <h4 class=''>Total Member Count</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . $row['mem_count'] . "</p>
                    </div>
                    <div class='link-container memCount'>
                        <abbr title='Member Info Report'><button class='save' id='retrieve-donation' onclick=\"save_generate()\">Download Report</button></abbr>
                    </div>
                </div>";
            }

            if ($Pas_Result && $Cur_Result) {
                $row1 = mysqli_fetch_assoc($Pas_Result);
                $row2 = mysqli_fetch_assoc($Cur_Result);

                $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
                $TotalNet = $row1['pastNeT'] + $row2['curNeT'];

                echo "
                        <!-- DONATION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-hand-holding-dollar'></i>
                                <h4 class=''>Total Amount Received</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalRev != 0 ? $TotalRev : "0") . "</p>
                            </div>
                            <div class='link-container'>
                                <abbr title='Financial Report'><button class='save' id='retrieve1' onclick=\"save_generate3()\">Download Report</button></abbr>
                            </div>
                        </div>
                        
            <!-- CONTRIBUTION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-circle-dollar-to-slot'></i>
                                <h4 class=''>Total Fund Balance</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalNet != 0 ? $TotalNet : "0") . "</p>
                            </div>
                            <div class='link-container'>
                            <abbr title='Expenses Report'><button class='save' id='retrieve1' onclick=\"save_generate2()\">Download Report</button></abbr>
                            </div>
                        </div>";
            }


            if ($com_result) {
                $row = mysqli_fetch_assoc($com_result);
                $com_count = $row['com_count'];
                echo "
                    <!-- COMPLAINTS COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-file-circle-exclamation'></i>
                        <h4 class=''>Complaints Recieved</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . ($com_count != 0 ? $com_count : "0") . "</p>
                    </div>
                    <div class='link-container com_count'>
                   
                    </div>
                </div>";
            }
            // close MySQL connection
            $conn->close();
            ?>
        </section>

        <div class="bottom-dash">
            <div class='botleft-dash border'>
                <!-- FINANCE ENTRY -->
                <div class='card-header entry'>
                    <h4>Recent Financial Entry</h4>
                </div>

                <div class="table-container">
                    <table id="dash-table">
                        <tr>
                            <th>Transaction Code</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Date</th>
                        </tr>

                        <tbody>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            $selectFinance = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                            $FinaceResult = $conn->query($selectFinance);

                            while ($FinRecent = $FinaceResult->fetch_assoc()) {
                                $debit = $FinRecent['debit'];
                                $credit = $FinRecent['credit'];
                                $rowClass = '';

                                // Check if the debit value is greater than 0
                                if ($debit > 0) {
                                    $rowClass = 'debit-row'; // CSS class for debit rows
                                }

                                // Check if the credit value is greater than 0
                                if ($credit > 0) {
                                    $rowClass = 'credit-row'; // CSS class for credit rows
                                }

                                echo "
                                    <tr class='$rowClass'>
                                        <td>" . $FinRecent['transaction_code'] . "</td>
                                        <td>" . $debit . "</td>
                                        <td>" . $credit . "</td>
                                        <td>" . $FinRecent['new_formatted_date'] . "</td>
                                    </tr>
                                ";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <abbr title="Download Financial Report"><button class="finance_download exportBtn"
                        onclick="save_generate3()"><i class="fa-solid fa-download"></i></button></abbr>

            </div>
            <div class='botright-dash border'>
                <!-- EVENTS AND PROGRAMS ENTRY -->
                <div class='card-header events'>
                    <h4>Incoming Events</h4>
                </div>

                <div class='dash-content'>
                    <?php

                    // connect to the MySQL database
                    include "db_conn.php";
                    $dateToday = date('ymd');

                    $showPrograms = "SELECT *, CONCAT(DATE_FORMAT(ep_date, '%Y-%m-%d'), ' ', DATE_FORMAT(ep_start, '%h:%i %p')) AS concatenated_datetime FROM events_programs 
                        WHERE ep_date >= $dateToday ORDER BY concatenated_datetime ASC";
                    $showProgramResult = $conn->query($showPrograms);

                    while ($EPRecent = $showProgramResult->fetch_assoc()) {
                        echo "
                            <div class='agenda-box'>
                                <i class='fa-solid fa-calendar-day'></i>
                                <div class='detail-contain'>
                                    <p class='dash-title'>" . $EPRecent['ep_title'] . "</p>
                                    <p class='dash-loc'>" . $EPRecent['ep_location'] . "</p>
                                    <p class='dash-time'>" . $EPRecent['concatenated_datetime'] . "</p>
                                </div>
                            </div>
                            ";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

    </div>

    <!-- USER PANE -->
    <div class="users-container" id="users-container">
        <header>
            <div class="head-left">
                <h3>USER TYPE MANAGEMENT</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="user-search" placeholder="Search">
                    <button class="user-searchBtn" id="user-searchBtn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
            </div>
        </header>
        <main>
            <table id="user-table">
                <thead>
                    <tr>
                        <th class="id">USER ID</th>
                        <th class="username">NAME</th>
                        <th class="role">ROLE</th>
                        <th class="email">EMAIL</th>
                        <th class="datecreated">DATE CREATED</th>
                        <th class="action">ACTION</th>
                    </tr>
                </thead>

                <tbody id="user-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table
                    $sql = "SELECT user_id, CONCAT(F_name, ' ', L_name) AS Name, roles, email, date_created FROM user ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr id='user-" . $row["user_id"] . "'>
                        <td class='userid'>" . $row["user_id"] . "</td>
                        <td class='username'>" . $row["Name"] . "</td>
                        <td class='role'>" . $row["roles"] . "</td>
                        <td class='email'>" . $row["email"] . "</td>
                        <td class='datecreated'>" . $row["date_created"] . "</td>
                        <td class='action'>
                            <abbr title='Delete'><i class='tools fa-solid fa-trash-can'></i></abbr>
                            <abbr title='Edit'><a href='../../views/pages/edituser.php?user_id=" . $row["user_id"] . "'><i class='tools fa-solid fa-pen-to-square'></i></a></abbr>
                        </td>
                    </tr>";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <script>
        function deleteUser(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                // send AJAX request to delete the user from the database and remove the row from the table
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_user.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // remove the row from the table
                        var row = document.getElementById("user-" + id);
                        row.parentNode.removeChild(row);
                        // display success message
                        alert(xhr.responseText);
                    }
                };
                xhr.send("id=" + id);
            }
        }

        // Attach event listeners to delete buttons
        var deleteButtons = document.getElementsByClassName("tools fa-trash-can");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener("click", function () {
                var userId = this.closest("tr").querySelector(".userid").textContent;
                deleteUser(userId);
            });
        }
    </script>


    <!-- MEMBER INFO PANE -->
    <div class="member-container" id="member-container">
        <header>
            <div class="head-left">
                <h3>TODA MEMBERS INFORMATION</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Report"><button class="compExportBtn exportBtn" id="mem-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="mem-search" id="mem-search" placeholder="Search">
                    <abbr title="Unit info"><a href="../../views/pages/unitinfo.php"><button class="mem-searchBtn"
                                id="add-unit"><i class="fa-solid fa-id-card-clip"></i></button></a></abbr>
                </div>
                <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
            </div>
        </header>

        <main>
            <table id="mem-table">
                <tr>
                    <th class="id">MEM ID</th>
                    <th class="memname">NAME</th>
                    <th class="area">AREA OF OPERATION</th>
                    <th class="role">ROLE</th>
                    <th class="license">LICENSE NO.</th>
                    <th class="status">STATUS</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="mem-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table with concatenated fname and lname
                    $sql = "SELECT * FROM mem_info ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // Check if there are any members
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }


                            // Display the member information, including the updated mem_stat
                            echo "
        <tr id='row-" . $row["id"] . "'>
            <td class='memid'>" . $row["id"] . "</td>
            <td class='memname'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
            <td class='area'>" . $row["barangay"] . "</td>
            <td class='memrole'>" . $row["mem_role"] . "</td>
            <td class='license'>" . $row["license_no"] . "</td>
            <td class='status'>
                <div class='" . $row["mem_stat"] . "'>
                    <p>" . $row["mem_stat"] . "</p>
                </div>
            </td>
            <td class='action'>
                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='showToastMember(" . $row["id"] . ")'></i></abbr>
                <a href='../../views/pages/viewmem.php?id=" . $row['id'] . "'><i class='fa-sharp fa-solid fa-eye'></i></a>
                <i class='tools fa-solid fa-print save' data-container='memcert' onclick=\"generatePDF('" . $row["id"] . "', 'memcertification.php')\"></i>
            </td>
        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>

                    <script>
                        function showToastMember(id) {
                            if (confirm("Are you sure you want to delete this member?")) {
                                // send AJAX request to delete the member from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "delete_member.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("row-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FINANCE PANE -->
    <div class="finance-container" id="finance-container">
        <header>
            <div class="head-left">
                <h3>FINANCE</h3>
                <p>FINANCE STAFF VIEW</p>
            </div>
            <div class="head-right">
                <button class="financeExportBtn exportBtn" id="finance-export"><i
                        class="fa-solid fa-download"></i></button>
                <div class="search-container">
                    <input type="text" class="user-search" id="fin-search" placeholder="Search">
                    <a href="../../views/pages/viewdonors.php"><button class="user-searchBtn" id="add-donor"><i
                                class="fa-solid fa-user-plus"></i></button></a>
                </div>
                <button class="addFinanceBtn" id="addFinance-btn"><i class="fa-solid fa-plus"></i> Add Record</button>
            </div>
        </header>

        <main>
            <table id="fin-table">
                <tr>
                    <th class="id"><abbr title="Transaction Id">ID</abbr></th>
                    <th class="name">TYPE</th>
                    <th class="code">CODE</th>
                    <th class="amount">AMOUNT</th>
                    <th class="amount">DEBIT</th>
                    <th class="amount">CREDIT</th>
                    <th class="name">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id='fin-table-body'>
                    <?php

                    include 'db_conn.php';

                    $timestamp = date('Y-m-d H:i:s');

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Delete transactions associated with non-existent member IDs
                    $deleteTransactionSql = "DELETE FROM transaction_payment WHERE member_id NOT IN (SELECT id FROM mem_info)";
                    $deleteTransactionResult = $conn->query($deleteTransactionSql);

                    if ($deleteTransactionResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }



                    // Remove deleted data from transaction_finance
                    $deleteSql = "DELETE tf FROM transaction_finance tf
                    LEFT JOIN transaction_donation td ON tf.transaction_code = td.transaction_code
                    LEFT JOIN transaction_contribution tc ON tf.transaction_code = tc.transaction_code
                    LEFT JOIN transaction_expenses te ON tf.transaction_code = te.transaction_code
                    LEFT JOIN transaction_payment tp ON tf.transaction_code = tp.transaction_code
                    WHERE td.transaction_code IS NULL
                    AND tc.transaction_code IS NULL
                    AND te.transaction_code IS NULL
                    AND tp.transaction_code IS NULL";

                    $deleteResult = $conn->query($deleteSql);

                    if ($deleteResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $sql = "INSERT INTO transaction_finance (amount, transaction_code, account_type, transaction_date, date_created) 
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_donation
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_donation.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_contribution
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_contribution.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_expenses
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_expenses.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_payment
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_payment.transaction_code)";

                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $updateSql = "UPDATE transaction_finance SET ";
                    $updateSql .= "debit = CASE ";
                    $updateSql .= "WHEN account_type IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE debit ";
                    $updateSql .= "END, ";
                    $updateSql .= "credit = CASE ";
                    $updateSql .= "WHEN account_type NOT IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE credit ";
                    $updateSql .= "END";
                    $updateResult = $conn->query($updateSql);

                    if ($updateResult === false) {
                        die("Error executing the update query: " . $conn->error);
                    }

                    // Fetch inserted data
                    $selectSql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                    $selectResult = $conn->query($selectSql);

                    if ($selectResult->num_rows === 0) {
                        echo "No rows found.";
                    } else {

                        while ($row = $selectResult->fetch_assoc()) {

                            echo "
                    <tr>
                        <td id='id'>" . $row["ID"] . "</td>
                        <td class='name'>" . $row["account_type"] . "</td>
                        <td class='code'>" . $row["transaction_code"] . "</td>
                        <td class='amount'>&#8369;" . $row["amount"] . "</td>
                        <td class='amount'>" . $row["debit"] . "</td>
                        <td class='amount'>" . $row["credit"] . "</td>
                        <td class='name'>" . $row["new_formatted_date"] . "</td>
                        <td class='action'>" ?>

                            <?php
                            if ($row['account_type'] === 'Donation') {
                                $ViewSelectSql = "SELECT donor_id FROM transaction_donation WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['donor_id'];

                                    echo "<a href='../pages/donorinfo.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'New Member' || $row['account_type'] === 'Renewal') {
                                $ViewSelectSql = "SELECT member_id FROM transaction_payment WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['member_id'];

                                    echo "<a href='../pages/viewmem.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'Programs') {
                                $ViewSelectSql = "SELECT program_ID FROM transaction_expenses WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['program_ID'];

                                    echo "<a href='../pages/viewevents_vice.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }
                            } else if ($row['account_type'] === 'Contribution') {
                                $transactionCode = $row['transaction_code'];

                                $sql = "SELECT unit_info.id
                                FROM unit_info
                                INNER JOIN transaction_contribution ON unit_info.body_no = transaction_contribution.body_no
                                WHERE transaction_contribution.transaction_code = '$transactionCode'";

                                $result = mysqli_query($conn, $sql);

                                if ($row = mysqli_fetch_assoc($result)) {
                                    $unitId = $row['id'];

                                    echo "<a href='../pages/viewunit.php?id=$unitId'><i class='tools fa-sharp fa-solid fa-eye'></i></a>";
                                }

                            }
                        }
                    }
                    $conn->close();
                    ?>

                    </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>

    <!-- COMPLAINTS PANE -->
    <div class="complain-container" id="complain-container">
        <header>
            <div class="head-left">
                <h3>COMPLAINTS</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="comp-search" placeholder="Search">
                    <a href="../../views/pages/viewComplainants_vice.php"><button class="user-searchBtn"
                            id="add-complainants"><i class="fa-solid fa-user-plus"></i></i></button></a>
                </div>
                <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New
                    Complaint</button>
            </div>
        </header>

        <main>
            <table id="complaint-table">
                <tr>
                    <th class="id"><abbr title="complain-btn Id">ID</abbr></th>
                    <th class="name">COMPLAINANT</th>
                    <th class="contact">CONTACT NO.</th>
                    <th class="name">SUBJECT TO COMPLAINT</th>
                    <th class="comp-date">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="complaint-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT complaint_details.id AS id, CONCAT(complaint_info.fname, ' ', complaint_info.lname) AS complainant,
                    CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person,
                     complaint_info.phone, complaint_details.complaint_person, 
                    DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d %h:%i %p') AS date_created FROM complaint_details 
                    INNER JOIN complaint_info ON complaint_info.id = complaint_details.complainant_id
                    LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                    ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr id='complaint-" . $row["id"] . "'>
                            <td class='uid'>" . $row["id"] . "</td>
                            <td class='username'>" . $row["complainant"] . "</td>
                            <td class='contacts'>" . $row["phone"] . "</td>
                            <td class='complaintPerson'>" . $row["show_complaint_person"] . "</td>
                            <td class='actionDate'>" . $row["date_created"] . "</td>

                            <td class='action'>
                                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row["id"] . ")'></i></abbr>
                                <a href='../../views/pages/viewComplaint_vice.php?id=" . $row["id"] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                                <i class='tools fa-solid fa-print save' data-container='complaints' onclick=\"generatePDF('" . $row["id"] . "', 'comp-report.php')\"></i>
                            </td>
                        </tr>";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                    <!-- Complaint User -->
                    <script>
                        function deleteComplaint(id) {
                            if (confirm("Are you sure you want to delete this Complaint?")) {
                                // send AJAX request to delete the user from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "deleteComplaint.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("complaint-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>

            </table>
        </main>
    </div>

    <!-- EVENTS & PROGRAMS PANE -->
    <div class='event-container' id='event-container'>
        <header>
            <div class='head-left'>
                <h3>EVENTS & PROGRAMS</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class='head-right'>
                <div class='search-container'>
                    <input type='text' class='user-search' id="programs-search" placeholder='Search'>
                    <button class='user-searchBtn'><i class='fa-solid fa-magnifying-glass'></i></button>
                </div>
                <button class='addEventBtn' id='addEvent-btn'><i class='fa-solid fa-plus'></i> Add Events</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th class="id"><abbr title='complain-btn Id'>ID</abbr></th>
                    <th class="title">EVENT& PROGRAM TITLE</th>
                    <th class="date">EVENT DATE</th>
                    <th class="time">TIME</th>
                    <th class="location">LOCATION</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="programs-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT *, TIME_FORMAT(ep_start, '%h:%i %p') AS ep_time FROM `events_programs` ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "

                <tr>
                    <td class='id'>" . $row["id"] . "</td>
                    <td class='title'>" . $row["ep_title"] . "</td>
                    <td class='date'>" . $row["ep_date"] . "</td>
                    <td class='time'>" . $row["ep_time"] . "</td>
                    <td class='location'>" . $row["ep_location"] . "</td>
                    <td class='action'>
                    <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteEvent(" . $row["id"] . ")'></i></abbr>
                        <a href='../../views/pages/viewevents_vice.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                        <i class='tools fa-solid fa-print save' data-container='ep' onclick=\"save_generate4('" . $row["id"] . "', 'ep.php')\"></i>
                    </td>
                </tr> ";

                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                    <script>
                        function deleteEvent(id) {
                                if (confirm("Are you sure you want to delete this Event?")) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "../php/deleteEvent.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    location.reload();
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            console.log("ID:", id); // Debug log
                                            var row = document.getElementById("Complaint-" + id);
                                            console.log("Row:", row); // Debug log
                                            if (row) {
                                                console.log("Parent Node:", row.parentNode); // Debug log
                                                row.parentNode.removeChild(row);
                                                console.log("Event deleted successfully.");
                                                alert(xhr.responseText);
                                            } else {
                                                console.error("Row not found for ID:", id);
                                            }
                                        } else {
                                            console.error("Error: " + xhr.status);
                                        }
                                    };
                                    xhr.send("id=" + id);
                                }
                            }

                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FOOTER -->
    <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <a href="../../views/pages/termsofuse.php" class="border-right">Terms of Use</a>
            <p>Version 1.0</p>
        </div>
    </footer>

    <!-- MODALS -->
    <!-- ADD USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addUser-modal-container" id="user-modal-container">
        <h2 class="modal-title">ADD USER</h2>
        <form action="../php/adduser.php" method="post"
            oninput='city.setCustomValidity(city.value != password.value ? "Passwords do not match." : "")'
            id="user-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="userForm-left addForm">
                    <!-- USERS ROLE -->
                    <div class="fields">
                        <label for="select-role">User's role<span> *</span></label>
                        <select name="userrole" id="select-role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                            <option value="Auditor">Auditor</option>
                        </select>
                    </div>

                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="user-lastname">Lastname<span> *</span></label>
                        <input type="text" id="user-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="user-firstname">Firstname<span> *</span></label>
                        <input type="text" id="user-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="user-midname">Middlename</label>
                        <input type="text" id="user-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="user-extension">Extension Name</label>
                        <input type="text" maxlength="5" pattern="[A-Za-z]{2,5}" id="user-extension" name="extension"
                            placeholder="eg. Jr, Sr">
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="userForm-right addForm">

                    <!-- USERNAME -->
                    <div class="fields">
                        <label for="user-uname">Username<span> *</span></label>
                        <input type="text" id="user-uname" name="user-uname" maxlength="25"
                            placeholder="juandelacruz123" required>
                        <span id="username-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- EMAIL -->
                    <div class="fields">
                        <label for="user-email">Email Address<span> *</span></label>
                        <input type="email" id="user-email" name="street"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="juan@example.com" required>
                        <span id="email-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlength="11" id="user-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="contact-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- PASSWORD -->
                    <div class="fields">
                        <label for="user-pass">Password<span> *</span></label>
                        <input type="password" id="user-pass" name="password" minlength="8" maxlength="16"
                            placeholder="8-16 characters only" required>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="fields">
                        <label for="user-confirmPass">Confirm Password<span> *</span></label>
                        <input type="password" id="user-confirmPass" name="city" required>
                    </div>

                    <!-- SEE PASSWORD -->
                    <div class="see-password-container">
                        <input class="see-pass" type="checkbox" id="see-pass">
                        <label class="see-pass-label" for="see-pass">See password</label>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="adduser-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select user role!</p>
            </div>
        </div>
    </div>

    <div class="warningToast-container" id="warningToast2">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p id="warning-con"></p>
        </div>
    </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="user-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p id="event-success"><strong>Success!</strong> User successfully added.</p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='success-toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <!-- ADD MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addMem-modal-container" id="member-modal-container">
        <h2 class="modal-title">MEMBER REGISTRATION</h2>
        <form action="../php/addmember.php" method="post" id="member-form" enctype="multipart/form-data">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left addForm">
                    <!-- MEMBERS ROLE -->
                    <div class="fields">
                        <label for="select-mem">Member's role<span> *</span></label>
                        <select name="role" id="select-mem">
                            <option value="" selected disabled>Select Role</option>
                            <option value="Officer">Officer</option>
                            <option value="Driver">Driver only</option>
                            <option value="Operator">Operator only</option>
                        </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="mem-lastname">Lastname<span> *</span></label>
                        <input type="text" id="mem-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="mem-firstname">Firstname<span> *</span></label>
                        <input type="text" id="mem-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="mem-midname">Middlename</label>
                        <input type="text" id="mem-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="mem-extension">Extension Name</label>
                        <input type="text" id="mem-extension" name="extension" maxlength="5" pattern="[A-Za-z1-9]{2,5}"
                            placeholder="eg. Jr, Sr">
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Sex<span> *</span></label>
                        <select name="gender" id="select-gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="memForm-right addForm">
                    <!-- STREET -->
                    <div class="fields">
                        <label for="mem-street">Street<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-street" name="street" required>
                    </div>

                    <!-- BARANGAY -->
                    <div class="fields">
                        <label for="mem-brgy">Barangay<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-brgy" name="barangay" required>
                    </div>
                    <!-- CITY -->
                    <div class="fields">
                        <label for="mem-city">City<span> *</span></label>
                        <input type="text" maxlength="25" pattern="[A-Za-z ]{2,25}" id="mem-city" name="city" required>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlenght="11" id="mem-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="mem-contact-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- LICENSE NUMBER -->
                    <div class="fields">
                        <label for="mem-license">License no.<span> *</span></label>
                        <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license"
                            placeholder="eg. A34-34-345645" required>
                        <span id="license-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- USER PROFILE PICTURE -->
                    <div class="fields">
                        <label for="mem-pic">Upload Profile Icon</label>
                        <input type="file" accept=".png, .jpg, .jpeg" id="mem-pic" name="profile">
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="member-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="mem-warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select member role!</p>
            </div>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="mem-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Member successfully added.</p>
        </div>
    </div>

    <!-- ADD FINANCE MODAL -->
    <div class='bg' id='bg'></div>
    <div class='addFinance-modal-container' id='finance-modal-container'>
        <h2 class='modal-title'>ADD FINANCIAL RECORD</h2>
        <form action='addfinancerecord.php' method="POST" id='finance-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='financeForm-left addForm'>
                    <!-- FINANCE TYPE -->
                    <div class='fields'>
                        <label for='select-type'>Finance Type<span> *</span>
                        </label>
                        <select name='type' id='select-type' onchange="disableInputs()" required>
                            <option value='' selected disabled>Select Account type</option>
                            <option value='Butaw'>Butaw/Contribution</option>
                            <option value='Donation'>Donation</option>
                            <option value='Expenses'>Expenses</option>
                        </select>
                    </div>
                    <!-- BODY NO. -->
                    <div class='fields'>
                        <label for='bodynum'>Body No.<span> *</span></label>
                        <select id='body-no' name='bodynum' required disabled>
                            <option selected disabled value=''>Select Body No.</option>
                            <?php

                            include
                                "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sqlBody = "SELECT * FROM unit_info";
                            $resultBody = $conn->query($sqlBody);


                            while ($rowBody = $resultBody->fetch_assoc()) {

                                echo "<option value='" . $rowBody["body_no"] . "'>" . $rowBody["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- DONOR NAME -->
                    <div class='field-container'>
                        <div class='fields donor'>
                            <label for='donor-select'>Donor Name</label>
                            <select name='donor_select' id='donor-select' onchange='handleDonorSelection()' required
                                disabled>
                                <option selected disabled value=''>Select Donor</option>
                                <?php

                                // connect to the MySQL database
                                include "db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM donor_info";

                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {

                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    echo "<option value='" . $row["id"] . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }
                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class='fields'>
                            <a href='../../views/pages/adddonor.php'><input type='button' id='donorbtn'
                                    value='Add donor'></a>
                        </div>
                    </div>
                </div>

                <!-- FORM-RIGHT -->
                <div class='financeForm-right addForm'>
                    <div class='fields'>
                        <label for='expense-type'>Expense Type</label>
                        <select name='expense_type' id='expense-type' required disabled onchange="toggleRemarks()">
                            <option selected disabled value=''>Select Expense type</option>
                            <option value='Expenses - Rent'>Rent</option>
                            <option value='Expenses - Electricity'>Electricity</option>
                            <option value='Expenses - Water'>Water</option>
                            <option value='Expenses - '>Others</option>
                        </select>
                    </div>

                    <!-- ACCOUNT ID -->
                    <div class='fields' id="rem-container">
                        <label for='remarks'>Remarks<span> *</span></label>
                        <input type='text' id='remarks' name='remarks' disabled>
                    </div>


                    <!-- ACCOUNT ID -->
                    <div class='fields'>
                        <label for='trans-date'>Transaction date<span> *</span></label>
                        <input type='date' id='trans-date' name='trans_date' max="<?php echo date('Y-m-d'); ?>" required
                            disabled>
                    </div>

                    <!--  AMOUNT  -->
                    <div class='fields'>
                        <label for='amount'>Amount<span> *</span></label>
                        <input type='number' id='amount' name='amount' pattern="[0-9]*" placeholder='₱' required
                            disabled>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='finance-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD COMPLAINT MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addComplaint-modal-container" id="complaint-modal-container">
        <h2 class="modal-title">ADD COMPLAINT</h2>
        <form action="../php/complaints.php" method="post" id="complaint-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="complaintForm-left addForm">
                    <div class='fields complaint'>
                        <label for='complaint-select' required>Complainant Name<span> *</span></label>
                        <select name='complaint-select' id='complaint-select' required>
                            <option selected value='' required>Select Complainant</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM complaint_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $complaintId = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $complaintId . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <!-- New Complainant -->
                    <div class='fields'>
                        <div class="comp-contain">
                            <label for="date-incident">Add new complainant:<span></span></label>
                            <a href="../../views/pages/insertComplainant.php"><input type='button'
                                    class="add-complainant" value='New Complainant'></a>
                        </div>
                    </div>

                    <!-- SUBJECT -->
                    <div class="fields">
                        <label for="ComplaintSubject" required>Person to Complain<span> *</span></label>
                        <select name='ComplaintSubject' id='ComplaintSubject' required>
                            <option selected value='' required>Select Person to Complain</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM mem_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $mem_info = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $mem_info . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            $id = $_GET['id'];

                            if (!empty($id)) {
                                $sql = "SELECT *
                                                    FROM mem_info
                                                    LEFT JOIN unit_info ON mem_info.id = unit_info.member_id
                                                    WHERE mem_info.id = '$id'";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo '<script>
                                                    var complaintSubjectBodySelect = document.getElementById("complaintSubjectBody");
                                                    complaintSubjectBodySelect.disabled = false;
                                                    var option = document.createElement("option");
                                                    option.value = "' . $row["id"] . '";
                                                    option.textContent = "' . $row["body_no"] . '";
                                                    complaintSubjectBodySelect.innerHTML = "";
                                                    complaintSubjectBodySelect.appendChild(option);
                                                    </script>';
                                } else {
                                    echo '<script>document.getElementById("complaintSubjectBody").disabled = true;</script>';
                                }
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- BODY NUMBER -->
                    <div class="fields">
                        <label for="complaintSubjectBody">Body no.</label>
                        <select name='complaintSubjectBody' id='complaintSubjectBody' disabled>
                            <option selected value=''>Select Body Number</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM unit_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $unit_info = $row["id"]; // Retrieve the ID from the complaint_info table
                                echo "<option value='" . $unit_info . "'>" . $row["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="is-bud">
                        <input type="checkbox" id="activateSelect" onchange="toggleSelect()" />
                        <label for="activateSelect">Activate</label>
                    </div>

                    <style>

                    </style>

                </div>

                <!-- FORM-RIGHT -->
                <div class="complaintForm-right addForm">

                    <!-- DESCRIPTION -->
                    <div class="fields">
                        <label for="desc">Description<span> *</span></label>
                        <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350" onkeyup="countChar(this)"
                            required></textarea>
                    </div>

                    <!-- Date and Time -->
                    <div class="timeDate-container">
                        <!-- TIME -->
                        <div class="fields">
                            <label for="time-incident">Time of Incident<span> *</span></label>
                            <input type="time" id="time-incident" name="time-incident" required>
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" required>
                        </div>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="complaint-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- WARNING TOAST -->
    <div class="warningToast-container" id="cmplnt-warningToast">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p><strong>Try Again</strong> Placeholder warning!</p>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="cmplnt-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Complaint successfully submitted.</p>
        </div>
    </div>

    <!-- ADD EVENTS & PROGRAMS -->
    <div class='bg' id='bg'></div>
    <div class='addEvent-modal-container' id='event-modal-container'>
        <h2 class='modal-title'>SCHEDULE AN EVENT OR PROGRAM</h2>
        <form action='addevents.php' method='POST' id='event-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='complaintForm-left addForm'>
                    <!-- EVENT TITLE -->
                    <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' placeholder='eg. Meeting' required>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-desc'>Description<span> *</span></label>
                        <textarea name='desc' id='event-desc' cols='30' rows='14'></textarea>
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class='complaintForm-right addForm'>

                    <!--EVENT OR PROGRAM BUDGET-->
                    <div class='fields'>
                        <label for='events-budget'>Budget</label>
                        <input type='text' id='events-budget' pattern="[0-9]*" name='events-budget' disabled>
                    </div>

                    <div class='is-bud'>
                        <input type='checkbox' id='events-isbudget' name='events-isbudget'
                            onchange='handleBudgetCheckboxChange()'>
                        <label for='events-isbudget'>With Budget</label>
                    </div>

                    <!-- EVENT ORGANIZER -->
                    <div class='fields'>
                        <label for='events-organizer'>Organizer</label>
                        <input type='text' id='events-organizer' name='events-organizer'>
                    </div>

                    <!-- EVENT LOCATION -->
                    <div class='fields'>
                        <label for='events-location'>Location</label>
                        <input type='text' id='events-location' name='events-location' required>
                    </div>

                    <div class='timeDate-container'>
                        <!-- TIME -->
                        <div class='fields'>
                            <label for='events-time'>Time<span> *</span></label>
                            <input type='time' id='events-time' name='events-time' required>
                        </div>

                        <!-- DATE -->
                        <div class='fields'>
                            <label for='events-date'>Date<span> *</span></label>
                            <input type='date' id='events-date' name='events-date' required>
                        </div>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='event-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- TOAST NOTIFACTIONS -->
    <!-- CONFIRM DELETE TOAST -->
    <div class="toast-container">
        <p>Are you sure you want to permanently delete this user?</p>
        <div class="toast-btn-container">
            <button>Confirm</button>
            <button>Cancel</button>
        </div>
    </div>

    <!-- LOADING -->
    <div id="loading-container">
        <div class="background-wrapper">
        </div>
        <div class="logo-container">
            <img src="../../public/assets/mtodata_logo.png" alt="Logo" class="logo">
            <div class="loading-bar"></div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <!-- Javascript Library for Excel -->
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <!-- Main Script for Dashboard -->
    <script src="../../services/dashboard.js"></script>
    <!-- Script for Exporting into Excel -->
    <script src="../../services/exportMember.js"></script>
    <script src="../../services/exportFinance.js"></script>
    <!-- Script for date today  -->
    <script src="../../services/datetoday.js"></script>
    <!-- Script for Loading Screen -->
    <script src="../../services/loading.js"></script>
    <script src="../../services/monthly.js"></script>
</body>

</html>



================================================
FILE: views/reports/balance_sheet.php
================================================
<?php
// connection
include "../php/db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstDate = date('F 01, Y');
$currDate = date('F d, Y');

// data retrieval
$PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
            FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
            AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
$Pas_Result = $conn->query($PasNet);

$CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
            SUM(debit) AS total_revenue FROM transaction_finance
            WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
            AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
$Cur_Result = $conn->query($CurNet);

if ($Pas_Result && $Cur_Result) {
    $row1 = mysqli_fetch_assoc($Pas_Result);
    $row2 = mysqli_fetch_assoc($Cur_Result);

    $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
}

$sql = "SELECT *
FROM transaction_finance
WHERE credit != 0
AND date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Income Statements</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/dashboard.css' type='text/css'>

    <!--html2pdf library-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js'
        integrity='sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>

    <!--es6-promise library-->
    <script src='../../assets/js/es6-promise-master/lib/es6-promise.auto.js'></script>
    <!--jspdf library-->
    <script src='../../assets/js/jsPDF-master/dist/jspdf.es.min.js'></script>
    <!--html2canvas library-->
    <script src='../../assets/js/html2canvas-master/package.json'></script>
    <!--html2pdf library-->
    <script src='../../assets/js/html2pdf.js-master/dist/html2pdf.min.js'></script>
</head>

<body>
    <div class='container-finance' id='container'>
        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p id='top_IS' style='padding-top: 20px'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Transaction Code</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
                            <th class='tr_head' style='text-align: right;'>Balance</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // connection
                        include "../php/db_conn.php";

                        // check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $Bal = $TotalRev;

                        echo "
                        <tr>
                            <td colspan='4' style='text-align: right; padding-right: 15px;'><b>Revenue</b></td>
                            <td style='text-align: right; padding-right: 15px;'>" . number_format($TotalRev, 2) . "</td>
                            </tr>
                            
                            <tr>
                            <td class='to_hide'>:</td>
                        </tr>";

                        while ($row = $result->fetch_assoc()) {

                            $Bal -= $row['credit'];

                            echo "                           
                            <tr>
                            <td>" . $row['date_created'] . "</td>
                            <td>" . $row['transaction_code'] . "</td>
                            <td>" . $row['account_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . number_format($row['credit'], 2) . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . number_format($Bal, 2) . "</td>
                        </tr>";
                        }
                        ?>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($Bal, 2); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src='../../assets/js/print.js'></script>
</body>

</html>


================================================
FILE: views/reports/comp-report.php
================================================
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Complaints</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


</head>

<body>

    <?php

    date_default_timezone_set('Asia/Manila');
    $currentDate = date('Y-m-d');

    //connection
    include "../php/db_conn.php";

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ID = $_GET['id'];

    //data retrieval
    $sql = "SELECT complaint_details.id AS id, CONCAT(complaint_info.fname, ' ', complaint_info.lname) AS complainant,
                    CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person,
                    unit_info.body_no AS show_body_no, DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d %h:%i %p') AS complaint_date,
                    complaint_info.phone, complaint_details.complaint_person, complaint_details.details AS details FROM complaint_details 
                    INNER JOIN complaint_info ON complaint_info.id = complaint_details.complainant_id
                    INNER JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                    LEFT JOIN unit_info ON unit_info.id = complaint_details.body_no WHERE complaint_details.id = $ID";
                    
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows === 0) {
        echo "No rows found.";
    }

    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "

    <div class='container' id='complaints-container'>
        <div class='wrapper' id='cert_wrapp'>
            <div class='header' id='cert_wrapp'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p>3s Center Marulas, Valenzuela City, 1440</p>
                    <p>+63 (XXX) YYY ZZZZ</p>
                </div>
            </div>
            <div class='contents'>
                <div class='det_wrap'>
                    <p class='det'>Complaint No. &nbsp</p>
                    <p class='detret'>" . $row["id"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Date: &nbsp</p>
                    <p class='detret'>" . $currentDate . "</p>
                </div>
                <br><div class='det_wrap'>
                    <p class='det'>Complainant: &nbsp</p>
                    <p class='detret'>" . $row["complainant"] . "</p>
                </div>
                
                <div class='det_wrap'>
                    <p class='det'>Complaint Date: &nbsp</p>
                    <p class='detret'>" . $row["complaint_date"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Subject of Complaint: &nbsp</p>
                    <p class='detret'>" . $row["show_complaint_person"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Body Number: &nbsp</p>
                    <p class='detret'>" . $row["show_body_no"] . "</p>
                </div>
                <br>
                <p class='det'>Details: </p>
                <div class='det_con'>
                    <p class='det_con_Desc'>" . $row["details"] . "</p>
                </div>

    ";
    }

    // close MySQL connection
    $conn->close();

    ?>

    <div class='footer'>
    </div>
    </div>
    </div>
    </div>

    <script src="../../services/dashboard.js"></script>
</body>

</html>


================================================
FILE: views/reports/con-report.php
================================================
<?php
date_default_timezone_set('Asia/Manila');

$currDate = date('F j, Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Status</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>

<body>

    <div class="container" id="container">
        <div class="wrapper">
            <div class='header' id='cert_wrapp'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p>3s Center Marulas, Valenzuela City, 1440</p>
                    <p>+63 (XXX) YYY ZZZZ</p>
                </div>
            </div>
            <div class="contents">
                <table class="report">
                    <p style="text-align: center;"><b>CONTRIBUTION REPORT</b></p>
                    <p style="text-align: center;">As of
                        <?php echo $currDate ?>
                    </p>
                    <thead class="report_head">
                        <tr>
                            <th>BODY NUMBER</th>
                            <th>Transaction code</th>
                            <th>AMOUNT</th>
                            <th>DATE</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!--DB Connection-->
                        <?php


                        include "../php/db_conn.php";

                        //check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        //data retrieval
                        $sql = "SELECT *
                        FROM transaction_contribution
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        ORDER BY for_date DESC;";
                        $result = $conn->query($sql);

                        if ($result === false) {
                            die("Error executing the query: " . $conn->error);
                        }

                        if ($result->num_rows === 0) {
                            echo "<td>No Entry Found</td>";
                        }

                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                            echo "
                            <tr>
                            <td>" . $row["body_no"] . "</td>
                            <td>" . $row["transaction_code"] . "</td>
                            <td>" . $row["amount"] . "</td>
                            <td>" . $row["for_date"] . "</td>
                            </tr> ";
                        }

                        // close MySQL connection
                        $conn->close();

                        ?>
                    </tbody>
                </table>
                <p id="end">------------ NOTHING FOLLOWS ------------</p>
            </div>
        </div>
    </div>

    <script src="../../services/dashboard.js"></script>


</body>

</html>


================================================
FILE: views/reports/don-report.php
================================================
<?php
date_default_timezone_set('Asia/Manila');

// Get the start of the current month
$startOfMonth = date('Y-m-01');

// Get the current date
$currentDate = date('Y-m-d');

$currDate = date('F j, Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Status</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>

<body>

    <div class="container" id="container">
        <div class="wrapper">
            <div class='header' id='cert_wrapp'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p>3s Center Marulas, Valenzuela City, 1440</p>
                    <p>+63 (XXX) YYY ZZZZ</p>
                </div>
            </div>
            <div class="contents">
                <table class="report">
                    <p style="text-align: center;"><b>DONATION REPORT</b></p>
                    <p style="text-align: center;">As of
                        <?php echo $currDate ?>
                    </p>
                    <thead class="report_head">
                        <tr>
                            <th>Name</th>
                            <th>Transaction code</th>
                            <th>AMOUNT</th>
                            <th>DATE</th>
                        </tr>
                    </thead>

                    <!--DB Connection-->
                    <?php

                    //connection
                    include "../php/db_conn.php";

                    //check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    //data retrieval
                    $sql = "SELECT td.*, DATE_FORMAT(td.date_created, '%b %d, %Y') AS date_trans, di.lname, di.fname, di.mname, di.exname
                    FROM transaction_donation AS td
                    JOIN donor_info AS di ON td.donor_id = di.id
                    WHERE td.date_created BETWEEN '$startOfMonth' AND '$currentDate'
                    ORDER BY td.date_created DESC;";
                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    if ($result->num_rows === 0) {
                        echo "<td>No Entry Found</td>";
                    }

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                        $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                        $lastName = $row["lname"];

                        if (empty($row["exname"])) {
                            $lastName .= ', ';
                        }

                        echo "
                    <tbody>
                    <tr>
                        <td>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                        <td>" . $row["transaction_code"] . "</td>
                        <td>" . $row["amount"] . "</td>
                        <td>" . $row["date_trans"] . "</td>
                    </tr>
                </tbody>  
    ";
                    }

                    // close MySQL connection
                    $conn->close();

                    ?>
                </table>
                <p id="end">------------ NOTHING FOLLOWS ------------</p>
            </div>
        </div>
    </div>

    <script src="../../services/dashboard.js"></script>


</body>

</html>


================================================
FILE: views/reports/ep.php
================================================
<?php

$currentDate = date('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events and Programs</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

</head>

<body>

    <!--DB Connection-->
    <?php

    $currentDate = date('Y-m-d');

    //connection
    include "../php/db_conn.php";

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ID = $_GET['id'];

    //data retrieval
    $sql = "SELECT *, TIME_FORMAT(ep_start, '%h:%i %p') AS ep_time FROM events_programs WHERE id = '$ID'";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows === 0) {
        echo "No rows found.";
    }



    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $details = nl2br($row["ep_description"]);


        echo "
                    <div class='container' id='ep-container'>
                        <div class='wrapper'>
                        <div class='header' id='cert_wrapp'>
                        <div class='top'>
                            <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                            <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                            <p>3s Center Marulas, Valenzuela City, 1440</p>
                            <p>+63 (XXX) YYY ZZZZ</p>
                        </div>
                    </div>
                            
                            <div class='EPName'>" . $row["ep_title"] . "</div>
                            <p class='detret' id='center_format'>" . $row["ep_time"] . " at " . $row["ep_location"] . " <br><br>Program by <strong>" . $row["ep_organizer"] . "</strong></p>

                            <p class='det'>Program Details:</p>
                            <div class='det_con'>
                                <p class='det_con_Desc' id='ep_desc'>" . $details . "</p>
                            </div>      
                    </div>
";
    }

    // close MySQL connection
    $conn->close();

    ?>

    <p id="end" style="text-align:center;">------------ NOTHING FOLLOWS ------------</p>
    </div>
    </div>
    </div>

    <script src="../../assets/js/print.js"></script>
</body>

</html>


================================================
FILE: views/reports/finance_IS.php
================================================
<?php
// connection
include "../php/db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstDate = date('F 01, Y');
$currDate = date('F d, Y');

// data retrieval
$sql = "SELECT account_type, SUM(amount) AS total,
(   SELECT SUM(amount)
    FROM transaction_finance
    WHERE account_type LIKE 'Expenses - %'
    AND account_type NOT LIKE 'Expenses - Electricity'
    AND account_type NOT LIKE 'Expenses - Water'
    AND account_type NOT LIKE 'Expenses - Rent'
    AND date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
    AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
) AS oth_exp
FROM transaction_finance 
WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
GROUP BY account_type
";

$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

if ($result) {
    $revenue = 0;
    $expenses = 0;
    $net = 0;
    $don = 0;
    $con = 0;
    $ele = 0;
    $ren = 0;
    $wat = 0;
    $pro = 0;
    $rnw = 0;
    $new = 0;
    $oth = 0;

    while ($row = $result->fetch_assoc()) {
        if ($row['account_type'] === 'Donation') {
            $don = $row['total'];
        } else if ($row['account_type'] === 'Contribution') {
            $con = $row['total'];
        } else if ($row['account_type'] === 'Expenses - Electricity') {
            $ele = $row['total'];
        } else if ($row['account_type'] === 'Expenses - Rent') {
            $ren = $row['total'];
        } else if ($row['account_type'] === 'Expenses - Water') {
            $wat = $row['total'];
        } else if ($row['account_type'] === 'Programs') {
            $pro = $row['total'];
        } else if ($row['account_type'] === 'Renewal') {
            $rnw = $row['total'];
        } else if ($row['account_type'] === 'New Member') {
            $new = $row['total'];
        } else {
            $oth = $row['oth_exp'];
        }

        $sql2 = "SELECT SUM(amount) AS oth_exp
        FROM transaction_finance
        WHERE account_type LIKE 'Expenses - %'
        AND account_type NOT LIKE 'Expenses - Electricity'
        AND account_type NOT LIKE 'Expenses - Water'
        AND account_type NOT LIKE 'Expenses - Rent'";

        $ResSql2 = $conn->query($sql2);
        $row2 = $ResSql2->fetch_assoc();


        if (
            $row['account_type'] === 'Donation' || $row['account_type'] === 'Contribution' ||
            $row['account_type'] === 'Renewal' || $row['account_type'] === 'New Member'
        ) {
            $revenue += $row['total'];
        }

        if (
            $row['account_type'] === 'Expenses - Electricity' || $row['account_type'] === 'Expenses - Water' ||
            $row['account_type'] === 'Expenses - Rent' || $row['account_type'] === 'Programs'
        ) {
            $expenses += $row['total'];
        }

            $othExp = $row2['oth_exp'];
    }

    $sql1 = "SELECT SUM(debit) - SUM(credit) AS pastNeT FROM transaction_finance 
    WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
  AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";

    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if ($result1 === false) {
        die("Error executing the query: " . $conn->error);
    }

}

$pastNetIncome = $row1['pastNeT'];
$TotalRev = $pastNetIncome + $revenue;
$TotalExp = $expenses + $othExp;
$net = $TotalRev - $TotalExp;

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Income Statements</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/dashboard.css' type='text/css'>

    <!--html2pdf library-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js'
        integrity='sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>

    <!--es6-promise library-->
    <script src='../../assets/js/es6-promise-master/lib/es6-promise.auto.js'></script>
    <!--jspdf library-->
    <script src='../../assets/js/jsPDF-master/dist/jspdf.es.min.js'></script>
    <!--html2canvas library-->
    <script src='../../assets/js/html2canvas-master/package.json'></script>
    <!--html2pdf library-->
    <script src='../../assets/js/html2pdf.js-master/dist/html2pdf.min.js'></script>
</head>

<body>
    <div class='container-finance' id='container'>
        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p id='top_IS'>Income Statement</p>
                    <p id='top_IS' style='padding-top: 20px'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table'>
                    <tr>
                        <td class='tr_head'>Revenues</td>
                    </tr>
                    <?php if ($pastNetIncome != 0): ?>
                        <tr>
                            <td class='td_IS'>Remaining Balance</td>
                            <td class='IS_amount'>P&emsp;
                                <?php echo $pastNetIncome; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td class='td_IS'>Collected contributions</td>
                        <td class='IS_amount'>P&emsp;
                            <?php echo $con; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Renewal</td>
                        <td class='IS_amount'>
                            <?php echo $rnw; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>New Members</td>
                        <td class='IS_amount'>
                            <?php echo $new; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Donations</td>
                        <td class='IS_amount total_IS'>
                            <?php echo $don; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Total Revenues:</td>
                        <td></td>
                        <td class='IS_amount total_IS'>P&emsp;
                            <?php echo $TotalRev; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='tr_head'>Operating Expenses</td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Electricity expenses</td>
                        <td class='IS_amount'>P&emsp;
                            <?php echo $ele; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Water expenses</td>
                        <td class='IS_amount'>
                            <?php echo $wat; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Rent expenses</td>
                        <td class='IS_amount'>
                            <?php echo $ren; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Program expenses</td>
                        <td class='IS_amount'>
                            <?php echo $pro; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Others</td>
                        <td class='IS_amount total_IS'>
                            <?php echo $oth; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Total Expenses:</td>
                        <td></td>
                        <td class='IS_amount total_IS'>P&emsp;
                            <?php echo $TotalExp; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='tr_head' colspan="2">Net Income:</td>
                        <td class='IS_amount total_IS'>P&emsp;
                            <?php echo $net; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Collected Contribution -->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Collected Contributions
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Body Number</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // connection
                        include "../php/db_conn.php";

                        // check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sqlCon = "SELECT *, FORMAT(amount, 2) AS TotCon, DATE_FORMAT(date_created, '%M %d, %Y') AS formatted_date
                        FROM transaction_contribution
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_contribution
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $rowCon['body_no'] . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
                        </tr>";
                        }
                        ?>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Collected Payment-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Collected Renewal and New Member Payments
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Name</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // connection
                        include "../php/db_conn.php";

                        // check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sqlCon = "SELECT tc.*, FORMAT(tc.amount, 2) AS TotCon, DATE_FORMAT(tc.date_created, '%M %d, %Y') AS formatted_date, 
                        mi.lname, mi.fname, mi.mname, mi.exname
                        FROM transaction_payment tc
                        JOIN mem_info mi ON tc.member_id = mi.id
                        WHERE tc.date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND tc.date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_payment
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            $middleInitial = !empty($rowCon["mname"]) ? trim($rowCon["mname"][0]) . '.' : '';
                            $extensionName = !empty($rowCon["exname"]) ? ' ' . $rowCon["exname"] . '., ' : '';
                            $lastName = $rowCon["lname"];

                            if (empty($rowCon["exname"])) {
                                $lastName .= ', ';
                            }
                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $lastName . $extensionName . $rowCon["fname"] . " " . $middleInitial . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
                        </tr>";
                        }
                        ?>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Collected Donations-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Collected Donations
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Name</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // connection
                        include "../php/db_conn.php";

                        // check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sqlCon = "SELECT tc.*, FORMAT(tc.amount, 2) AS TotCon, DATE_FORMAT(tc.date_created, '%M %d, %Y') AS formatted_date, 
                        mi.lname, mi.fname, mi.mname, mi.exname
                        FROM transaction_donation tc
                        JOIN donor_info mi ON tc.donor_id = mi.id
                        WHERE tc.date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND tc.date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_donation
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            $middleInitial = !empty($rowCon["mname"]) ? trim($rowCon["mname"][0]) . '.' : '';
                            $extensionName = !empty($rowCon["exname"]) ? ' ' . $rowCon["exname"] . '., ' : '';
                            $lastName = $rowCon["lname"];

                            if (empty($rowCon["exname"])) {
                                $lastName .= ', ';
                            }
                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $lastName . $extensionName . $rowCon["fname"] . " " . $middleInitial . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
                        </tr>";
                        }
                        ?>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- total Expenses-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Total Expenses
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // connection
                        include "../php/db_conn.php";

                        // check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sqlCon = "SELECT *, FORMAT(amount, 2) AS TotCon, DATE_FORMAT(date_created, '%M %d, %Y') AS formatted_date
                        FROM transaction_expenses
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        AND transaction_type <> 'Programs'";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_expenses
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        AND transaction_type <> 'Programs'";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
                        </tr>";
                        }
                        ?>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>

                        <tr>
                            <td colspan="2"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- total Program Expenses-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Total Program Expenses
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head'>Program Name</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // connection
                        include "../php/db_conn.php";

                        // check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sqlCon = "SELECT te.*, FORMAT(te.amount, 2) AS TotCon, DATE_FORMAT(te.date_created, '%M %d, %Y') AS formatted_date, ep.ep_title
                        FROM transaction_expenses te
                        JOIN events_programs ep ON te.program_ID = ep.ID
                        WHERE te.date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND te.date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        AND transaction_type <> 'Expenses - Rent'
                        AND transaction_type <> 'Expenses - Electricity'
                        AND transaction_type <> 'Expenses - Water'";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_expenses
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        AND transaction_type <> 'Expenses - Rent'
                        AND transaction_type <> 'Expenses - Electricity'
                        AND transaction_type <> 'Expenses - Water'";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td>" . $rowCon['ep_title'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
                        </tr>";
                        }
                        ?>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src='../../assets/js/print.js'></script>
</body>

</html>


================================================
FILE: views/reports/memcertification.php
================================================
<?php

$currentDate = date('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Certification</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

</head>

<body>

    <!--DB Connection-->
    <?php

    //connection
    include "../php/db_conn.php";

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ID = $_GET['id'];

    //data retrieval
    $sql = $sql = "SELECT * ,
                DATE_FORMAT(date_created, '%Y-%m-%d') AS membership_stat,
                DATE_FORMAT(DATE_ADD(date_created, INTERVAL 2 YEAR), '%Y-%m-%d') AS expiry_date FROM `mem_info` WHERE id = '$ID'";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows === 0) {
        echo "No rows found.";
    }

    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
        $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
        $lastName = $row["lname"];

        if (empty($row["exname"])) {
            $lastName .= ', ';
        }

        echo "
                    <div class='container' id='memcert-container'>
                    <div class='wrapper'>
                    <div class='header' id='cert_wrapp'>
                        <div class='top'>
                            <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                            <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                            <p>3s Center Marulas, Valenzuela City, 1440</p>
                            <p>+63 (XXX) YYY ZZZZ</p>
                        </div>
                    </div>
                    <div class='contents'>
        
                        <div class='top'>
                            <p class='detret'>MEMBERSHIP CERTIFICATION</p>
                        </div>
                <div class='det_con' id='cert_con'>
                    <p class='cert_wrap'>
                        &emsp; &emsp; &emsp;This certifies that <strong>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</strong>, with the License no.
                        <strong>" . $row["license_no"] . "</strong>, is a valued member of
                        the Marulas Tricycle Operators and Drivers' Association (MTODA). This membership is a testament
                        to their
                        dedication, professionalism, and commitment to providing reliable tricycle transportation
                        services to our community.
                    </p>
                    <p class='cert_wrap'>Membership Details:</p>
                    <p class='cert_wrap' id='cert_wrap01'>
                        •&emsp;Membership Type:&emsp; <i>" . $row["mem_role"] . "</i> <br>
                        •&emsp;Membership Start Date:&emsp;<i>" . $row["membership_stat"] . "</i> <br>
                        •&emsp;Membership Expiry Date:&emsp;<i>" . $row["expiry_date"] . "</i>
                    </p>
                    <p class='cert_wrap'>Rights and Privileges:</p>
                    <p class='cert_wrap' id='cert_wrap01'>
                        1. <strong>Representation:</strong> The members are entitled to representation by the association in matters
                        related to the tricycle industry, advocating for their rights and interests. <br>
                        2. <strong>Support Services:</strong> The members can benefit from various support services offered by the
                        association, including legal guidance, assistance with licensing and permits, and access to
                        industry-related resources. <br>
                        3. <strong>Participation in Association Activities:</strong> The members could actively engage in association
                        activities, such as community outreach programs, charity events, and social gatherings.
                    </p>
                    <p class='cert_wrap'>
                        &emsp; &emsp; &emsp;By maintaining membership with the Tricycle Operator 
                        and Driver Association, the members agree to adhere to the association's 
                        code of conduct, operating guidelines, and ethical standards. Furthermore, 
                        the members commit to upholding the reputation and integrity of the 
                        association and the transportation  industry.
                    </p>
                    <p class='cert_wrap'>
                        &emsp; &emsp; &emsp;This certification is valid until the expiry date 
                        mentioned above, subject to the member's compliance with the association's 
                        rules and regulations. <br><br><br><br>
                    </p>

                    <p class='cert_wrap' id='signature'>
                        <strong>[Signature of the Association President]</strong> <br>
                        " . $currentDate . "
                    </p>
                </div>"
        ;
    }

    // close MySQL connection
    $conn->close();

    ?>

    </div>
    </div>
    </div>

    <script src="../../services/dashboard.js"></script>
</body>

</html>


================================================
FILE: views/reports/meminfo.php
================================================
<?php
date_default_timezone_set('Asia/Manila');
$currentDate = date('F j, Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Status</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>

<body>

    <div class="container" id="container">
        <div class="wrapper">
            <div class='header' id='cert_wrapp'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p>3s Center Marulas, Valenzuela City, 1440</p>
                    <p>+63 (XXX) YYY ZZZZ</p>
                </div>
            </div>
            <div class="contents">
                <table class="report">
                    <br>
                    <p style="text-align: center;"><b>MEMBERSHIP STATUS REPORT</b></p>
                    <p style="text-align: center;">As of
                        <?php echo $currentDate ?>
                    </p>
                    <thead class="report_head">
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Membership Status</th>
                            <th>Date of Registration</th>
                            <th>Expiration</th>
                        </tr>
                    </thead>

                    <!--DB Connection-->
                    <?php

                    //connection
                    include "../php/db_conn.php";

                    //check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    //data retrieval
                    $sql = "SELECT * , DATE_FORMAT(date_created, '%b %d, %Y') AS valid_date,
                DATE_FORMAT(DATE_ADD(date_created, INTERVAL 2 YEAR), '%b %d, %Y') AS expiry_date FROM `mem_info`
                ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    if ($result->num_rows === 0) {
                        echo "No rows found.";
                    }

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                        $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                        $lastName = $row["lname"];

                        if (empty($row["exname"])) {
                            $lastName .= ', ';
                        }

                        echo "
                    <tbody>
                    <tr>
                        <td>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                        <td>" . $row["mem_role"] . "</td>
                        <td>" . $row["mem_stat"] . "</td>
                        <td>" . $row["valid_date"] . "</td>
                        <td>" . $row["expiry_date"] . "</td>
                    </tr>
                </tbody>  
    ";
                    }

                    // close MySQL connection
                    $conn->close();

                    ?>
                </table>
                <p id="end">------------ NOTHING FOLLOWS ------------</p>
            </div>
        </div>
    </div>

    <script src="../../services/dashboard.js"></script>


</body>

</html>
