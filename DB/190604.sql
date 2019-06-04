-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 01:04 PM
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
CREATE DATABASE IF NOT EXISTS `ihealthcare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ihealthcare`;

DELIMITER $$
--
-- Functions
--
DROP FUNCTION IF EXISTS `get_chamber_id`$$
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

DROP FUNCTION IF EXISTS `get_doctor_id`$$
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

DROP FUNCTION IF EXISTS `get_lab_id`$$
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

DROP FUNCTION IF EXISTS `get_patient_id`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `get_patient_id` () RETURNS VARCHAR(7) CHARSET latin1 BEGIN
declare cur_seq int;
declare p_id varchar(7);
declare reg_prefix varchar(1);
set reg_prefix:="5";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set p_id:=(select concat(reg_prefix, Lpad(cur_seq,6,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN p_id;
END$$

DROP FUNCTION IF EXISTS `get_test_id`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `get_test_id` () RETURNS VARCHAR(6) CHARSET latin1 NO SQL
BEGIN
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

DROP TABLE IF EXISTS `d_chambers`;
CREATE TABLE `d_chambers` (
  `id` int(11) NOT NULL,
  `chamber_id` varchar(45) DEFAULT NULL,
  `doctor_code` varchar(45) DEFAULT NULL,
  `chamber_name` varchar(500) DEFAULT NULL,
  `chamber_address` varchar(500) DEFAULT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  `chamber_area_pin` varchar(45) DEFAULT NULL,
  `chamber_remarks` varchar(500) NOT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_chambers`
--

INSERT INTO `d_chambers` (`id`, `chamber_id`, `doctor_code`, `chamber_name`, `chamber_address`, `contact_number`, `chamber_area_pin`, `chamber_remarks`, `record_status`, `record_created_on`, `record_updated_on`) VALUES
(5, '200012', '10029', 'Hapania', 'Hapania Bazar, Agartala, West Tripura', NULL, '799014', '', 'D', '2019-05-25 21:27:05', '2019-05-31 00:12:15'),
(6, '200013', '10028', 'Amtali', 'Amtali Bazar, Agartala, West Tripura', NULL, '799130', '', 'A', '2019-05-25 21:29:14', NULL),
(7, '200014', '10029', 'Badharght', 'Badharghat, Agartala', NULL, '799003', '', 'D', '2019-05-25 21:30:54', '2019-05-31 00:12:59'),
(8, '200015', '10028', 'Math Chowmuhani', 'Math Chowmuhani', NULL, '799001', '', 'A', '2019-05-31 00:11:21', NULL),
(9, '200016', '10030', 'Dr. Health', 'Indranagar', NULL, '799006', '', 'A', '2019-05-31 00:42:10', NULL),
(10, '200017', '10029', 'Hapania Hospital Square', 'Hapania Hospital Square, Hapania, Agartala', '9863553422', '799014', '', 'A', '2019-05-31 08:35:05', NULL),
(11, '200018', '10035', 'Sparsh', 'sdfgsdfg', '345345345345', '54674567', '', 'A', '2019-06-01 19:20:43', NULL),
(12, '200019', '10036', 'HAPANIA', 'Hapania Hospital Square, Hapania, Agartala', '03812370105', '799014', '', 'A', '2019-06-01 20:53:57', NULL),
(13, '200020', '10036', 'Biswas Kutir', 'Hapania, Agartala, West Tripura', '9774308992', '799014', 'Its Closed on Wednesday', 'A', '2019-06-04 13:27:16', NULL),
(14, '200021', '10036', 'Biswas Kutir2', 'Hapania, Agartala, West Tripura', '9774308992', '799014', 'Its Closed on friday', 'A', '2019-06-04 13:34:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_chamber_appointment`
--

DROP TABLE IF EXISTS `d_chamber_appointment`;
CREATE TABLE `d_chamber_appointment` (
  `id` int(11) NOT NULL,
  `patient_id` bigint(20) NOT NULL,
  `app_time` varchar(40) NOT NULL,
  `app_date` date NOT NULL,
  `app_completed` varchar(10) NOT NULL,
  `app_remarks` varchar(500) NOT NULL,
  `record_status` int(11) NOT NULL,
  `record_created_on` int(11) NOT NULL,
  `record_modified_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_chamber_days`
--

DROP TABLE IF EXISTS `d_chamber_days`;
CREATE TABLE `d_chamber_days` (
  `id` bigint(20) NOT NULL,
  `chamber_id` varchar(45) NOT NULL,
  `week_day` varchar(45) NOT NULL,
  `opening_time1` time NOT NULL,
  `closing_time1` time NOT NULL,
  `limit1` int(11) NOT NULL,
  `opening_time2` time NOT NULL,
  `closing_time2` time NOT NULL,
  `limit2` int(11) NOT NULL,
  `record_status` varchar(45) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_chamber_days`
--

INSERT INTO `d_chamber_days` (`id`, `chamber_id`, `week_day`, `opening_time1`, `closing_time1`, `limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`, `record_updated_on`) VALUES
(1, '200020', 'Sunday', '16:00:00', '22:00:00', 10, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:27:16', '0000-00-00 00:00:00'),
(2, '200020', 'Monday', '16:00:00', '22:00:00', 6, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:27:16', '0000-00-00 00:00:00'),
(3, '200020', 'Tuesday', '16:00:00', '22:00:00', 7, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:27:16', '0000-00-00 00:00:00'),
(4, '200020', 'Thursday', '16:00:00', '22:00:00', 9, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:27:16', '0000-00-00 00:00:00'),
(5, '200020', 'Friday', '16:00:00', '22:00:00', 9, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:27:16', '0000-00-00 00:00:00'),
(6, '200020', 'Saturday', '16:00:00', '22:00:00', 5, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:27:16', '0000-00-00 00:00:00'),
(7, '200021', 'Sunday', '18:00:00', '22:50:00', 10, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:34:25', '0000-00-00 00:00:00'),
(8, '200021', 'Monday', '18:00:00', '22:50:00', 10, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:34:25', '0000-00-00 00:00:00'),
(9, '200021', 'Tuesday', '18:00:00', '22:50:00', 10, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:34:25', '0000-00-00 00:00:00'),
(10, '200021', 'Wednesday', '18:00:00', '22:50:00', 10, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:34:25', '0000-00-00 00:00:00'),
(11, '200021', 'Thursday', '18:00:00', '22:50:00', 10, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:34:25', '0000-00-00 00:00:00'),
(12, '200021', 'Saturday', '18:00:00', '22:50:00', 10, '00:00:00', '00:00:00', 0, 'A', '2019-06-04 13:34:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `d_doctor_info`
--

DROP TABLE IF EXISTS `d_doctor_info`;
CREATE TABLE `d_doctor_info` (
  `id` int(11) NOT NULL,
  `doctor_code` varchar(20) DEFAULT NULL,
  `d_name` varchar(500) DEFAULT NULL,
  `d_hospital` varchar(500) DEFAULT NULL,
  `d_designation` varchar(500) DEFAULT NULL,
  `d_expirience` varchar(500) DEFAULT NULL,
  `d_degree` varchar(500) DEFAULT NULL,
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

INSERT INTO `d_doctor_info` (`id`, `doctor_code`, `d_name`, `d_hospital`, `d_designation`, `d_expirience`, `d_degree`, `d_speciality`, `d_fee`, `d_mob`, `d_email`, `d_profile_image`, `record_status`, `record_created_on`, `record_modified_on`) VALUES
(51, '10028', 'Debasish Das', 'Agartala Nursing Home', 'Doctor', '10 Plus Years', NULL, 'Specialization 2', 300, '9774308994', 'debasishdas.agt@gmail.com', '10028_Debasish.jpg', 'A', '2019-05-25 21:14:31', NULL),
(52, '10029', 'Chinmoy Biswas', 'Tripura Medical College', 'Ceif Doctor', '8 Plys Years', NULL, 'SP1', 300, '9862773881', 'debasishdas.agt@gmail.com', '10029_1926697_1386714384930700_1808468485_n.jpg', 'A', '2019-05-25 21:25:16', NULL),
(53, '10030', 'Dr. Milan Deb', 'TMC', 'Dentist ', 'Mor Than 12 years', NULL, 'Medicine', 300, '9862773881', 'milandeb. agt@yahoo.com', '10030_15592434208725273826165533597813.jpg', 'A', '2019-05-31 00:39:10', NULL),
(57, '10034', 'hdfghdghdh', '', '', 'dfghdfgh', '', 'ONCOLOGY', 300, 'fdghdfhfdg', '', NULL, 'A', '2019-06-01 19:15:48', NULL),
(58, '10035', 'sdg', 'fgsdf', 'sdfgsdfgsd', 'gsdfgsd', 'fgsdf', 'ONCOLOGY', 499, 'gsdfgsdfg', 'fgsdfgsd', '10035_Avril_Lavigne_Beautiful_1920x1080 HDTV 1080p.jpg', 'A', '2019-06-01 19:18:02', NULL),
(59, '10036', 'Tanmay Biswas', 'AGMC', 'jr Doctor', '23 Years', 'MBBS, MD', 'DIABETOLOGIST', 200, '9774308992', 'tanmay@icare.in', NULL, 'A', '2019-06-01 20:50:34', NULL),
(60, '10037', 'Dr. rudra Das', 'Agartala Nursing Home', 'Main Doctor', '4 Year', 'MBBS, MD', 'NEPHROLOGIST', 200, '2342342343', 'dskjgdsfgsk', '10037_Wentworth_Earl_Miller_1680 x 1050 widescreen.jpg', 'A', '2019-06-02 09:25:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_labs`
--

DROP TABLE IF EXISTS `d_labs`;
CREATE TABLE `d_labs` (
  `id` int(11) NOT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `lab_name` varchar(500) DEFAULT NULL,
  `lab_address` varchar(500) DEFAULT NULL,
  `lab_contact` varchar(45) DEFAULT NULL,
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
  `record_updated_on` datetime DEFAULT NULL,
  `d_labscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_labs`
--

INSERT INTO `d_labs` (`id`, `lab_id`, `lab_name`, `lab_address`, `lab_contact`, `lab_area_pin`, `lab_doctor`, `opening_time`, `closing_time`, `sunday_open`, `monday_open`, `tuesday_open`, `wednesday_open`, `thursday_open`, `friday_open`, `saturday_open`, `record_status`, `record_created_on`, `record_updated_on`, `d_labscol`) VALUES
(1, '400007', 'Medicare Lab', 'Amtali Bazara, Agartala, West Tripura', NULL, '799130', 'Braja Gopal Das', '07:00:00', '22:00:00', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'A', '2019-05-26 19:56:32', '2019-05-26 21:40:25', NULL),
(2, '400008', 'New Diagnostics Tech.', 'Hapania Bazar, Agartala, West Tripura', NULL, '799014', 'C Biswas', '07:00:00', '22:00:00', 'on', 'on', 'on', 'on', '', 'on', 'on', 'A', '2019-05-30 07:09:52', NULL, NULL),
(3, '400009', 'Roy Pathology', 'Hapania Bazar, Agartala, West Tripura', '03812370303', '799014', 'Tanmay Biswas', '06:00:00', '23:00:00', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'A', '2019-06-01 21:04:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_lab_tests`
--

DROP TABLE IF EXISTS `d_lab_tests`;
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
(4, '300005', 'Blood Group Test', 'Blood Group Test', 'General', 'admin', 'Y', 'admin', 'A', '2019-05-26 11:46:54', '2019-05-26 14:14:24'),
(5, '300006', 'Blood Glucose level check', 'General', 'Blood Glucose level check', 'chinmoy', 'Y', 'admin', 'A', '2019-05-30 07:28:32', '2019-05-30 07:36:05'),
(6, '300007', 'Pagnancy Test', 'Pagnancy Test', 'General', 'cbiswas', 'Y', 'admin', 'A', '2019-05-30 07:33:21', '2019-05-30 07:34:35'),
(7, '300008', 'Blood Group Test', 'Know your Blood Group', 'General', 'litan_1982', 'Y', 'admin', 'A', '2019-06-01 21:14:36', '2019-06-01 21:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `d_patient_info`
--

DROP TABLE IF EXISTS `d_patient_info`;
CREATE TABLE `d_patient_info` (
  `id` int(11) NOT NULL,
  `patient_id` bigint(20) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_address` varchar(600) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `record_created_by` varchar(500) NOT NULL,
  `record_status` varchar(10) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_user_chamber_mapping`
--

DROP TABLE IF EXISTS `d_user_chamber_mapping`;
CREATE TABLE `d_user_chamber_mapping` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) DEFAULT NULL,
  `chamber_id` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_crreated_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_user_chamber_mapping`
--

INSERT INTO `d_user_chamber_mapping` (`id`, `user_id`, `chamber_id`, `record_status`, `record_crreated_on`, `record_updated_on`) VALUES
(1, 'debasish', '200013', 'A', '2019-05-30 01:12:32', NULL),
(2, 'mitandas', '200016', 'A', '2019-05-31 00:44:22', NULL),
(3, 'amit_1986', '200019', 'A', '2019-06-01 20:56:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_user_info`
--

DROP TABLE IF EXISTS `d_user_info`;
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
(3, 'admin', 'Super Administrator', 'Agartala', 'debasishdas.agt@gmail.com', '9862773881', 'N', '2019-05-19', '1990-08-10', '2019-05-29 02:18:58', NULL, 'A'),
(5, 'debasish', 'Debasish Das', 'Agartala, West Tripura', 'debasishdas.agt@gmail.com', '9774308994', 'N', '2019-05-30', '1990-08-10', '2019-05-30 01:12:31', '2019-05-30 06:45:23', 'D'),
(6, 'debasish', 'Debasish Das', 'Amtali,Agartala, West Tripura', 'debasishdas.trp@gmail.com', '9774308994', 'N', '2019-05-30', '1990-08-10', '2019-05-30 06:45:23', NULL, 'A'),
(7, 'cbiswas', 'Chinmoy Biswas', 'Hapania, agartala, West Tripura', 'cbiswas.agt@gmail.com', '9774308992', 'N', '2019-05-30', '1990-05-23', '2019-05-30 06:48:55', NULL, 'A'),
(8, 'chinmoy', 'Chinmoy Biswas', 'Hapania, agartala, West Tripura', 'cbiswas.agt@gmail.com', '9774308994', 'N', '2019-05-30', '1990-05-23', '2019-05-30 07:15:00', NULL, 'A'),
(9, 'mitandas', 'Mitan Das', 'Hapania', 'mitandas.trp@gmail.com', '8656888', 'N', '2019-05-31', '1990-12-02', '2019-05-31 00:44:22', NULL, 'A'),
(10, 'amit_1986', 'AMIT PRADHAN', 'jogendranagae', 'baalamit@gmail.com', '9774578321', 'N', '2019-06-01', '1986-03-03', '2019-06-01 20:56:42', NULL, 'A'),
(11, 'litan_1982', 'Litan Sharma', 'Amtali', 'esss@gmail.com', '9862809865', 'N', '2019-06-01', '1993-02-15', '2019-06-01 21:11:50', NULL, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `d_user_lab_mapping`
--

DROP TABLE IF EXISTS `d_user_lab_mapping`;
CREATE TABLE `d_user_lab_mapping` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) DEFAULT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_crreated_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_user_lab_mapping`
--

INSERT INTO `d_user_lab_mapping` (`id`, `user_id`, `lab_id`, `record_status`, `record_crreated_on`, `record_updated_on`) VALUES
(1, 'cbiswas', '400007', 'A', '2019-05-30 06:48:55', NULL),
(2, 'chinmoy', '400008', 'A', '2019-05-30 07:15:01', NULL),
(3, 'litan_1982', '400009', 'A', '2019-06-01 21:11:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_user_password`
--

DROP TABLE IF EXISTS `d_user_password`;
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
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'A', '2019-05-29 01:35:33', NULL),
(7, 'debasish', '2eb5a42705deca5350087fe7f0621f57', 'D', '2019-05-30 01:12:32', '2019-05-30 06:45:46'),
(8, 'debasish', 'a8b0fcef262e4e95a728d675d944f1b0', 'A', '2019-05-30 06:45:46', '2019-05-30 23:56:51'),
(9, 'cbiswas', '3557b855cfb822b7eadf7498fb9f581b', 'A', '2019-05-30 06:48:55', '2019-05-30 23:58:49'),
(10, 'chinmoy', 'f88ed22b8ef52a487b8c2d6fa8768ce7', 'A', '2019-05-30 07:15:00', '2019-05-30 23:56:45'),
(11, 'mitandas', '0c17e9ef691b18325202cb58952cde6a', 'A', '2019-05-31 00:44:22', '2019-05-31 00:44:58'),
(12, 'amit_1986', '2d15347f6f69a7ce09056577dd380a41', 'A', '2019-06-01 20:56:42', NULL),
(13, 'litan_1982', 'c8837b23ff8aaa8a2dde915473ce0991', 'A', '2019-06-01 21:11:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_user_role`
--

DROP TABLE IF EXISTS `d_user_role`;
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
(6, 'admin', '1001', 'A', '2019-05-29 01:02:54', NULL),
(8, 'debasish', '1003', 'A', '2019-05-30 01:12:32', NULL),
(9, 'cbiswas', '1002', 'A', '2019-05-30 06:48:55', NULL),
(10, 'chinmoy', '1002', 'A', '2019-05-30 07:15:00', NULL),
(11, 'mitandas', '1003', 'A', '2019-05-31 00:44:22', NULL),
(12, 'amit_1986', '1003', 'A', '2019-06-01 20:56:42', NULL),
(13, 'litan_1982', '1002', 'A', '2019-06-01 21:11:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_mapping`
--

DROP TABLE IF EXISTS `lab_test_mapping`;
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
(11, '400007', '300002', '600', 'A', '2019-05-27 01:13:06', NULL),
(12, '400007', '300007', '500', 'A', '2019-05-30 07:36:56', NULL),
(13, '400007', '300006', '100', 'A', '2019-05-30 07:37:10', NULL),
(14, '400008', '300006', '100', 'A', '2019-05-30 07:37:46', NULL),
(15, '400008', '300007', '700', 'A', '2019-05-30 07:37:53', NULL),
(16, '400008', '300002', '900', 'A', '2019-05-30 07:38:01', NULL),
(17, '400009', '300003', '8700', 'A', '2019-06-01 21:13:09', NULL),
(18, '400009', '300004', '2800', 'A', '2019-06-01 21:13:31', NULL),
(19, '400009', '300008', '150', 'A', '2019-06-01 21:19:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_seq_num`
--

DROP TABLE IF EXISTS `m_seq_num`;
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
(1, 'Doctor', 1, 38, 'A', NULL, NULL),
(2, 'Chamber', 2, 22, 'A', NULL, NULL),
(3, 'Lab Test', 3, 9, 'A', NULL, NULL),
(4, 'Lab', 4, 10, 'A', NULL, NULL),
(5, 'Patient', 5, 2, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_user_roles`
--

DROP TABLE IF EXISTS `m_user_roles`;
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
(3, '1003', 'Chamber', 'A', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_chambers`
--
ALTER TABLE `d_chambers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_chamber_appointment`
--
ALTER TABLE `d_chamber_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_chamber_days`
--
ALTER TABLE `d_chamber_days`
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
-- Indexes for table `d_patient_info`
--
ALTER TABLE `d_patient_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_user_chamber_mapping`
--
ALTER TABLE `d_user_chamber_mapping`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `d_chamber_appointment`
--
ALTER TABLE `d_chamber_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_chamber_days`
--
ALTER TABLE `d_chamber_days`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `d_doctor_info`
--
ALTER TABLE `d_doctor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `d_labs`
--
ALTER TABLE `d_labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `d_lab_tests`
--
ALTER TABLE `d_lab_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `d_patient_info`
--
ALTER TABLE `d_patient_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_user_chamber_mapping`
--
ALTER TABLE `d_user_chamber_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `d_user_info`
--
ALTER TABLE `d_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `d_user_lab_mapping`
--
ALTER TABLE `d_user_lab_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `d_user_password`
--
ALTER TABLE `d_user_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `d_user_role`
--
ALTER TABLE `d_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lab_test_mapping`
--
ALTER TABLE `lab_test_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `m_seq_num`
--
ALTER TABLE `m_seq_num`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_user_roles`
--
ALTER TABLE `m_user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
