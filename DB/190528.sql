-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: ihealthcare
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `d_chambers`
--

DROP TABLE IF EXISTS `d_chambers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_chambers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_chambers`
--

LOCK TABLES `d_chambers` WRITE;
/*!40000 ALTER TABLE `d_chambers` DISABLE KEYS */;
INSERT INTO `d_chambers` VALUES (5,'200012','10029','Hapania','Hapania Bazar, Agartala, West Tripura','799014','18:00:00','22:00:00','on','on','on','on','on','on','','A','2019-05-25 21:27:05',NULL),(6,'200013','10028','Amtali','Amtali Bazar, Agartala, West Tripura','799130','18:00:00','22:00:00','on','on','on','on','','on','on','A','2019-05-25 21:29:14',NULL),(7,'200014','10029','Badharght','Badharghat, Agartala','799003','10:00:00','14:00:00','','','','','','','on','A','2019-05-25 21:30:54',NULL);
/*!40000 ALTER TABLE `d_chambers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_doctor_info`
--

DROP TABLE IF EXISTS `d_doctor_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_doctor_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `record_modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_doctor_info`
--

LOCK TABLES `d_doctor_info` WRITE;
/*!40000 ALTER TABLE `d_doctor_info` DISABLE KEYS */;
INSERT INTO `d_doctor_info` VALUES (51,'10028','Debasish Das','Agartala Nursing Home','Doctor','10 Plus Years','Specialization 2',300,'9774308994','debasishdas.agt@gmail.com','10028_Debasish.jpg','A','2019-05-25 21:14:31',NULL),(52,'10029','Chinmoy Biswas','Tripura Medical College','Ceif Doctor','8 Plys Years','SP1',300,'9862773881','debasishdas.agt@gmail.com','10029_1926697_1386714384930700_1808468485_n.jpg','A','2019-05-25 21:25:16',NULL);
/*!40000 ALTER TABLE `d_doctor_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_lab_tests`
--

DROP TABLE IF EXISTS `d_lab_tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_lab_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_code` varchar(45) DEFAULT NULL,
  `test_name` varchar(500) DEFAULT NULL,
  `test_description` varchar(1000) DEFAULT NULL,
  `test_catagory` varchar(500) DEFAULT NULL,
  `test_added_by` varchar(500) DEFAULT NULL,
  `test_approved` varchar(40) DEFAULT NULL,
  `test_approved_by` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_lab_tests`
--

LOCK TABLES `d_lab_tests` WRITE;
/*!40000 ALTER TABLE `d_lab_tests` DISABLE KEYS */;
INSERT INTO `d_lab_tests` VALUES (1,'300002','X-ray','X-Ray','General','admin','Y','admin','A','2019-05-26 11:40:50','2019-05-26 14:14:20'),(2,'300003','CT-Scan','computerized tomography scan','General','admin','Y','admin','A','2019-05-26 11:43:20','2019-05-26 14:14:22'),(3,'300004','Ultra Sonography','Ultra Sonography','General','admin','Y','admin','A','2019-05-26 11:45:58','2019-05-26 14:14:23'),(4,'300005','Blood Group Test','Blood Group Test','General','admin','Y','admin','A','2019-05-26 11:46:54','2019-05-26 14:14:24');
/*!40000 ALTER TABLE `d_lab_tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_labs`
--

DROP TABLE IF EXISTS `d_labs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_labs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_labs`
--

LOCK TABLES `d_labs` WRITE;
/*!40000 ALTER TABLE `d_labs` DISABLE KEYS */;
INSERT INTO `d_labs` VALUES (1,'400007','Medicare Lab','Amtali Bazara, Agartala, West Tripura','799130','Braja Gopal Das','07:00:00','22:00:00','on','on','on','on','on','on','on','A','2019-05-26 19:56:32','2019-05-26 21:40:25');
/*!40000 ALTER TABLE `d_labs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_user_info`
--

DROP TABLE IF EXISTS `d_user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `record_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `testt_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_info`
--

LOCK TABLES `d_user_info` WRITE;
/*!40000 ALTER TABLE `d_user_info` DISABLE KEYS */;
INSERT INTO `d_user_info` VALUES (1,'admin','Super Administrator','Agartala','debasishdas.agt@gmail.com','9774308994','Administrator','2019-05-19','2019-05-19','2019-05-19 00:00:00',NULL,'A');
/*!40000 ALTER TABLE `d_user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_user_password`
--

DROP TABLE IF EXISTS `d_user_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_user_password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_password`
--

LOCK TABLES `d_user_password` WRITE;
/*!40000 ALTER TABLE `d_user_password` DISABLE KEYS */;
INSERT INTO `d_user_password` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','A',NULL,NULL);
/*!40000 ALTER TABLE `d_user_password` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_user_role`
--

DROP TABLE IF EXISTS `d_user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `user_role_code` varchar(45) NOT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_role`
--

LOCK TABLES `d_user_role` WRITE;
/*!40000 ALTER TABLE `d_user_role` DISABLE KEYS */;
INSERT INTO `d_user_role` VALUES (1,'admin','1001','A',NULL,NULL);
/*!40000 ALTER TABLE `d_user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lab_test_mapping`
--

DROP TABLE IF EXISTS `lab_test_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lab_test_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` varchar(45) DEFAULT NULL,
  `test_id` varchar(45) DEFAULT NULL,
  `test_rate` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab_test_mapping`
--

LOCK TABLES `lab_test_mapping` WRITE;
/*!40000 ALTER TABLE `lab_test_mapping` DISABLE KEYS */;
INSERT INTO `lab_test_mapping` VALUES (8,'400007','300002','500','D','2019-05-27 00:39:45','2019-05-27 01:12:27'),(9,'400007','300003','700','A','2019-05-27 00:39:59',NULL),(10,'400007','300004','300','A','2019-05-27 00:46:07',NULL),(11,'400007','300002','600','A','2019-05-27 01:13:06',NULL);
/*!40000 ALTER TABLE `lab_test_mapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_seq_num`
--

DROP TABLE IF EXISTS `m_seq_num`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `m_seq_num` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_type` varchar(500) DEFAULT NULL,
  `reg_type_code` int(11) DEFAULT NULL,
  `seq_num` double DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_seq_num`
--

LOCK TABLES `m_seq_num` WRITE;
/*!40000 ALTER TABLE `m_seq_num` DISABLE KEYS */;
INSERT INTO `m_seq_num` VALUES (1,'Doctor',1,30,'A',NULL,NULL),(2,'Chamber',2,15,'A',NULL,NULL),(3,'Lab Test',3,6,'A',NULL,NULL),(4,'Lab',4,8,'A',NULL,NULL);
/*!40000 ALTER TABLE `m_seq_num` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_user_roles`
--

DROP TABLE IF EXISTS `m_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `m_user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_code` varchar(45) NOT NULL,
  `role` varchar(500) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_creted_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_user_roles`
--

LOCK TABLES `m_user_roles` WRITE;
/*!40000 ALTER TABLE `m_user_roles` DISABLE KEYS */;
INSERT INTO `m_user_roles` VALUES (1,'1001','Administrator','A',NULL,NULL),(2,'1002','Lab','A',NULL,NULL);
/*!40000 ALTER TABLE `m_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ihealthcare'
--

--
-- Dumping routines for database 'ihealthcare'
--
/*!50003 DROP FUNCTION IF EXISTS `get_chamber_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_chamber_id`() RETURNS varchar(6) CHARSET latin1
BEGIN
declare cur_seq int;
declare chamber_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="2";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set chamber_id:=(select concat(reg_prefix, Lpad(cur_seq,5,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN chamber_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `get_doctor_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_doctor_id`() RETURNS varchar(6) CHARSET latin1
BEGIN
declare cur_seq int;
declare doctor_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="1";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set doctor_id:=(select concat(reg_prefix, Lpad(cur_seq,4,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN doctor_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `get_lab_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_lab_id`() RETURNS varchar(6) CHARSET latin1
BEGIN
declare cur_seq int;
declare lab_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="4";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set lab_id:=(select concat(reg_prefix, Lpad(cur_seq,5,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN lab_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `get_test_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_test_id`() RETURNS varchar(6) CHARSET latin1
BEGIN
declare cur_seq int;
declare test_id varchar(6);
declare reg_prefix varchar(1);
set reg_prefix:="3";
set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set test_id:=(select concat(reg_prefix, Lpad(cur_seq,5,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN test_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-28  6:58:28
