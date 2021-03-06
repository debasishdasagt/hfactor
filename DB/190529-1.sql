-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 01:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihealthcare`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `get_chamber_id` () RETURNS VARCHAR(6) CHARSET latin1 BEGIN
declare cur_seq int;
declare chamber_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="2";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set chamber_id:=(select concat(reg_prefix, Lpad(cur_seq,5,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN chamber_id;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `get_doctor_id` () RETURNS VARCHAR(6) CHARSET latin1 BEGIN
declare cur_seq int;
declare doctor_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="1";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set doctor_id:=(select concat(reg_prefix, Lpad(cur_seq,4,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN doctor_id;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `get_lab_id` () RETURNS VARCHAR(6) CHARSET latin1 BEGIN
declare cur_seq int;
declare lab_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="4";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set lab_id:=(select concat(reg_prefix, Lpad(cur_seq,5,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN lab_id;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `get_test_id` () RETURNS VARCHAR(6) CHARSET latin1 BEGIN
declare cur_seq int;
declare test_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="3";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set test_id:=(select concat(reg_prefix, Lpad(cur_seq,5,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN test_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `d_chambers`
--

CREATE TABLE `d_chambers` (
  `id` int(11) NOT NULL,
  `chamber_id` varchar(45) DEFAULT NULL,
  `doctor_code` varchar(45) DEFAULT NULL,
  `chamber_name` varchar(500) DEFAULT NULL,
  `chamber_address` varchar(500) DEFAULT NULL,
  `chamber_area_pin` varchar(45) DEFAULT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `sunday_open` varchar(45) DEFAULT NULL,
  `monday_open` varchar(45) DEFAULT NULL,
  `tuesday_open` varchar(45) DEFAULT NULL,
  `wednesday_open` varchar(45) DEFAULT NULL,
  `thursday_open` varchar(45) DEFAULT NULL,
  `friday_open` varchar(45) DEFAULT NULL,
  `saturday_open` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_chambers`
--

INSERT INTO `d_chambers` (`id`, `chamber_id`, `doctor_code`, `chamber_name`, `chamber_address`, `chamber_area_pin`, `opening_time`, `closing_time`, `sunday_open`, `monday_open`, `tuesday_open`, `wednesday_open`, `thursday_open`, `friday_open`, `saturday_open`, `record_status`, `record_created_on`, `record_updated_on`) VALUES
(5, '200012', '10029', 'Hapania', 'Hapania Bazar, Agartala, West Tripura', '799014', '18:00:00', '22:00:00', 'on', 'on', 'on', 'on', 'on', 'on', '', 'A', '2019-05-25 21:27:05', NULL),
(6, '200013', '10028', 'Amtali', 'Amtali Bazar, Agartala, West Tripura', '799130', '18:00:00', '22:00:00', 'on', 'on', 'on', 'on', '', 'on', 'on', 'A', '2019-05-25 21:29:14', NULL),
(7, '200014', '10029', 'Badharght', 'Badharghat, Agartala', '799003', '10:00:00', '14:00:00', '', '', '', '', '', '', 'on', 'A', '2019-05-25 21:30:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_doctor_info`
--

CREATE TABLE `d_doctor_info` (
  `id` int(11) NOT NULL,
  `doctor_code` varchar(20) DEFAULT NULL,
  `d_name` varchar(500) DEFAULT NULL,
  `d_hospital` varchar(500) DEFAULT NULL,
  `d_designation` varchar(500) DEFAULT NULL,
  `d_expirience` varchar(500) DEFAULT NULL,
  `d_speciality` varchar(500) DEFAULT NULL,
  `d_fee` double DEFAULT NULL,
  `d_mob` varchar(500) DEFAULT NULL,
  `d_email` varchar(500) DEFAULT NULL,
  `d_profile_image` varchar(500) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_doctor_info`
--

INSERT INTO `d_doctor_info` (`id`, `doctor_code`, `d_name`, `d_hospital`, `d_designation`, `d_expirience`, `d_speciality`, `d_fee`, `d_mob`, `d_email`, `d_profile_image`, `record_status`, `record_created_on`, `record_modified_on`) VALUES
(51, '10028', 'Debasish Das', 'Agartala Nursing Home', 'Doctor', '10 Plus Years', 'Specialization 2', 300, '9774308994', 'debasishdas.agt@gmail.com', '10028_Debasish.jpg', 'A', '2019-05-25 21:14:31', NULL),
(52, '10029', 'Chinmoy Biswas', 'Tripura Medical College', 'Ceif Doctor', '8 Plys Years', 'SP1', 300, '9862773881', 'debasishdas.agt@gmail.com', '10029_1926697_1386714384930700_1808468485_n.jpg', 'A', '2019-05-25 21:25:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_labs`
--

CREATE TABLE `d_labs` (
  `id` int(11) NOT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `lab_name` varchar(500) DEFAULT NULL,
  `lab_address` varchar(500) DEFAULT NULL,
  `lab_area_pin` varchar(45) DEFAULT NULL,
  `lab_doctor` varchar(500) DEFAULT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `sunday_open` varchar(45) DEFAULT NULL,
  `monday_open` varchar(45) DEFAULT NULL,
  `tuesday_open` varchar(45) DEFAULT NULL,
  `wednesday_open` varchar(45) DEFAULT NULL,
  `thursday_open` varchar(45) DEFAULT NULL,
  `friday_open` varchar(45) DEFAULT NULL,
  `saturday_open` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_labs`
--

INSERT INTO `d_labs` (`id`, `lab_id`, `lab_name`, `lab_address`, `lab_area_pin`, `lab_doctor`, `opening_time`, `closing_time`, `sunday_open`, `monday_open`, `tuesday_open`, `wednesday_open`, `thursday_open`, `friday_open`, `saturday_open`, `record_status`, `record_created_on`, `record_updated_on`) VALUES
(1, '400007', 'Medicare Lab', 'Amtali Bazara, Agartala, West Tripura', '799130', 'Braja Gopal Das', '07:00:00', '22:00:00', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'A', '2019-05-26 19:56:32', '2019-05-26 21:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `d_lab_tests`
--

CREATE TABLE `d_lab_tests` (
  `id` int(11) NOT NULL,
  `test_code` varchar(45) DEFAULT NULL,
  `test_name` varchar(500) DEFAULT NULL,
  `test_description` varchar(1000) DEFAULT NULL,
  `test_catagory` varchar(500) DEFAULT NULL,
  `test_added_by` varchar(500) DEFAULT NULL,
  `test_approved` varchar(40) DEFAULT NULL,
  `test_approved_by` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_lab_tests`
--

INSERT INTO `d_lab_tests` (`id`, `test_code`, `test_name`, `test_description`, `test_catagory`, `test_added_by`, `test_approved`, `test_approved_by`, `record_status`, `record_created_on`, `record_updated_on`) VALUES
(1, '300002', 'X-ray', 'X-Ray', 'General', 'admin', 'Y', 'admin', 'A', '2019-05-26 11:40:50', '2019-05-26 14:14:20'),
(2, '300003', 'CT-Scan', 'computerized tomography scan', 'General', 'admin', 'Y', 'admin', 'A', '2019-05-26 11:43:20', '2019-05-26 14:14:22'),
(3, '300004', 'Ultra Sonography', 'Ultra Sonography', 'General', 'admin', 'Y', 'admin', 'A', '2019-05-26 11:45:58', '2019-05-26 14:14:23'),
(4, '300005', 'Blood Group Test', 'Blood Group Test', 'General', 'admin', 'Y', 'admin', 'A', '2019-05-26 11:46:54', '2019-05-26 14:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `d_user_info`
--

CREATE TABLE `d_user_info` (
  `id` int(11) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `aadress` varchar(500) DEFAULT NULL,
  `email_id` varchar(500) DEFAULT NULL,
  `mobile_number` varchar(40) DEFAULT NULL,
  `user_varified` varchar(45) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_user_info`
--

INSERT INTO `d_user_info` (`id`, `user_id`, `full_name`, `aadress`, `email_id`, `mobile_number`, `user_varified`, `reg_date`, `user_dob`, `created_on`, `modified_on`, `record_status`) VALUES
(1, 'admin', 'Super Administrator', 'Agartala', 'debasishdas.agt@gmail.com', '9774308994', 'N', '2019-05-19', '2019-05-19', '2019-05-19 00:00:00', '2019-05-29 02:16:32', 'D'),
(2, 'admin', 'Super Administrator', 'Agartala', 'debasishdas.agt@gmail.com', '9774308994', 'N', '2019-05-19', '0000-00-00', '2019-05-29 02:16:32', '2019-05-29 02:18:58', 'D'),
(3, 'admin', 'Super Administrator', 'Agartala', 'debasishdas.agt@gmail.com', '9862773881', 'N', '2019-05-19', '1990-08-10', '2019-05-29 02:18:58', NULL, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `d_user_lab_mapping`
--

CREATE TABLE `d_user_lab_mapping` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) DEFAULT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_crreated_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_user_password`
--

CREATE TABLE `d_user_password` (
  `id` int(11) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_user_password`
--

INSERT INTO `d_user_password` (`id`, `user_id`, `user_password`, `record_status`, `created_on`, `modified_on`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'D', NULL, '2019-05-29 01:26:32'),
(4, 'admin', '0192023a7bbd73250516f069df18b500', 'D', '2019-05-29 01:26:32', '2019-05-29 01:35:33'),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'A', '2019-05-29 01:35:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_user_role`
--

CREATE TABLE `d_user_role` (
  `id` int(11) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `user_role_code` varchar(45) NOT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_user_role`
--

INSERT INTO `d_user_role` (`id`, `user_id`, `user_role_code`, `record_status`, `record_created_on`, `record_modified_on`) VALUES
(1, 'admin', '1001', 'D', NULL, '2019-05-29 01:00:19'),
(3, 'admin', '1001', 'D', '2019-05-29 01:00:19', '2019-05-29 01:01:38'),
(4, 'admin', '1002', 'D', '2019-05-29 01:01:38', '2019-05-29 01:01:47'),
(5, 'admin', '1002', 'D', '2019-05-29 01:01:47', '2019-05-29 01:02:54'),
(6, 'admin', '1001', 'A', '2019-05-29 01:02:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_mapping`
--

CREATE TABLE `lab_test_mapping` (
  `id` int(11) NOT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `test_id` varchar(45) DEFAULT NULL,
  `test_rate` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_test_mapping`
--

INSERT INTO `lab_test_mapping` (`id`, `lab_id`, `test_id`, `test_rate`, `record_status`, `record_created_on`, `record_updated_on`) VALUES
(8, '400007', '300002', '500', 'D', '2019-05-27 00:39:45', '2019-05-27 01:12:27'),
(9, '400007', '300003', '700', 'A', '2019-05-27 00:39:59', NULL),
(10, '400007', '300004', '300', 'A', '2019-05-27 00:46:07', NULL),
(11, '400007', '300002', '600', 'A', '2019-05-27 01:13:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_seq_num`
--

CREATE TABLE `m_seq_num` (
  `id` int(11) NOT NULL,
  `reg_type` varchar(500) DEFAULT NULL,
  `reg_type_code` int(11) DEFAULT NULL,
  `seq_num` double DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_seq_num`
--

INSERT INTO `m_seq_num` (`id`, `reg_type`, `reg_type_code`, `seq_num`, `record_status`, `created_on`, `updated_on`) VALUES
(1, 'Doctor', 1, 30, 'A', NULL, NULL),
(2, 'Chamber', 2, 15, 'A', NULL, NULL),
(3, 'Lab Test', 3, 6, 'A', NULL, NULL),
(4, 'Lab', 4, 8, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_user_roles`
--

CREATE TABLE `m_user_roles` (
  `id` int(11) NOT NULL,
  `role_code` varchar(45) NOT NULL,
  `role` varchar(500) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_creted_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user_roles`
--

INSERT INTO `m_user_roles` (`id`, `role_code`, `role`, `record_status`, `record_creted_on`, `record_modified_on`) VALUES
(1, '1001', 'Administrator', 'A', NULL, NULL),
(2, '1002', 'Laboratory', 'A', NULL, NULL),
(3, '1003', 'Chamber', 'A', '2019-05-29 13:33:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_chambers`
--
ALTER TABLE `d_chambers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_doctor_info`
--
ALTER TABLE `d_doctor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_labs`
--
ALTER TABLE `d_labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_lab_tests`
--
ALTER TABLE `d_lab_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_user_info`
--
ALTER TABLE `d_user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testt_idx` (`user_id`);

--
-- Indexes for table `d_user_lab_mapping`
--
ALTER TABLE `d_user_lab_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_user_password`
--
ALTER TABLE `d_user_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_user_role`
--
ALTER TABLE `d_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_test_mapping`
--
ALTER TABLE `lab_test_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_seq_num`
--
ALTER TABLE `m_seq_num`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_user_roles`
--
ALTER TABLE `m_user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_chambers`
--
ALTER TABLE `d_chambers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `d_doctor_info`
--
ALTER TABLE `d_doctor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `d_labs`
--
ALTER TABLE `d_labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_lab_tests`
--
ALTER TABLE `d_lab_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `d_user_info`
--
ALTER TABLE `d_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `d_user_lab_mapping`
--
ALTER TABLE `d_user_lab_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_user_password`
--
ALTER TABLE `d_user_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `d_user_role`
--
ALTER TABLE `d_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lab_test_mapping`
--
ALTER TABLE `lab_test_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_seq_num`
--
ALTER TABLE `m_seq_num`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_user_roles`
--
ALTER TABLE `m_user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
