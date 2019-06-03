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
  `contact_number` varchar(45) DEFAULT NULL,
  `chamber_area_pin` varchar(45) DEFAULT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `opening_time2` time DEFAULT NULL,
  `closing_time2` time DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_chambers`
--

LOCK TABLES `d_chambers` WRITE;
/*!40000 ALTER TABLE `d_chambers` DISABLE KEYS */;
INSERT INTO `d_chambers` VALUES (5,'200012','10029','Hapania','Hapania Bazar, Agartala, West Tripura',NULL,'799014','18:00:00','22:00:00',NULL,NULL,'on','on','on','on','on','on','','D','2019-05-25 21:27:05','2019-05-31 00:12:15'),(6,'200013','10028','Amtali','Amtali Bazar, Agartala, West Tripura',NULL,'799130','18:00:00','22:00:00',NULL,NULL,'on','on','on','on','','on','on','A','2019-05-25 21:29:14',NULL),(7,'200014','10029','Badharght','Badharghat, Agartala',NULL,'799003','10:00:00','14:00:00',NULL,NULL,'','','','','','','on','D','2019-05-25 21:30:54','2019-05-31 00:12:59'),(8,'200015','10028','Math Chowmuhani','Math Chowmuhani',NULL,'799001','18:00:00','22:00:00',NULL,NULL,'on','on','on','on','','on','on','A','2019-05-31 00:11:21',NULL),(9,'200016','10030','Dr. Health','Indranagar',NULL,'799006','08:00:00','12:00:00',NULL,NULL,'on','','','on','','on','on','A','2019-05-31 00:42:10',NULL),(10,'200017','10029','Hapania Hospital Square','Hapania Hospital Square, Hapania, Agartala','9863553422','799014','07:03:00','09:33:00','18:03:00','22:03:00','','on','on','on','on','on','on','A','2019-05-31 08:35:05',NULL),(11,'200018','10035','Sparsh','sdfgsdfg','345345345345','54674567','00:00:00','19:30:00','00:00:00','00:00:00','on','on','on','on','on','on','on','A','2019-06-01 19:20:43',NULL),(12,'200019','10036','HAPANIA','Hapania Hospital Square, Hapania, Agartala','03812370105','799014','07:30:00','10:30:00','17:30:00','22:30:00','on','on','on','','on','on','on','A','2019-06-01 20:53:57',NULL);
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
  `d_degree` varchar(500) DEFAULT NULL,
  `d_speciality` varchar(500) DEFAULT NULL,
  `d_fee` double DEFAULT NULL,
  `d_mob` varchar(500) DEFAULT NULL,
  `d_email` varchar(500) DEFAULT NULL,
  `d_profile_image` varchar(500) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_doctor_info`
--

LOCK TABLES `d_doctor_info` WRITE;
/*!40000 ALTER TABLE `d_doctor_info` DISABLE KEYS */;
INSERT INTO `d_doctor_info` VALUES (51,'10028','Debasish Das','Agartala Nursing Home','Doctor','10 Plus Years',NULL,'Specialization 2',300,'9774308994','debasishdas.agt@gmail.com','10028_Debasish.jpg','A','2019-05-25 21:14:31',NULL),(52,'10029','Chinmoy Biswas','Tripura Medical College','Ceif Doctor','8 Plys Years',NULL,'SP1',300,'9862773881','debasishdas.agt@gmail.com','10029_1926697_1386714384930700_1808468485_n.jpg','A','2019-05-25 21:25:16',NULL),(53,'10030','Dr. Milan Deb','TMC','Dentist ','Mor Than 12 years',NULL,'Medicine',300,'9862773881','milandeb. agt@yahoo.com','10030_15592434208725273826165533597813.jpg','A','2019-05-31 00:39:10',NULL),(57,'10034','hdfghdghdh','','','dfghdfgh','','ONCOLOGY',300,'fdghdfhfdg','',NULL,'A','2019-06-01 19:15:48',NULL),(58,'10035','sdg','fgsdf','sdfgsdfgsd','gsdfgsd','fgsdf','ONCOLOGY',499,'gsdfgsdfg','fgsdfgsd','10035_Avril_Lavigne_Beautiful_1920x1080 HDTV 1080p.jpg','A','2019-06-01 19:18:02',NULL),(59,'10036','Tanmay Biswas','AGMC','jr Doctor','23 Years','MBBS, MD','DIABETOLOGIST',200,'9774308992','tanmay@icare.in',NULL,'A','2019-06-01 20:50:34',NULL),(60,'10037','Dr. rudra Das','Agartala Nursing Home','Main Doctor','4 Year','MBBS, MD','NEPHROLOGIST',200,'2342342343','dskjgdsfgsk','10037_Wentworth_Earl_Miller_1680 x 1050 widescreen.jpg','A','2019-06-02 09:25:03',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_lab_tests`
--

LOCK TABLES `d_lab_tests` WRITE;
/*!40000 ALTER TABLE `d_lab_tests` DISABLE KEYS */;
INSERT INTO `d_lab_tests` VALUES (1,'300002','X-ray','X-Ray','General','admin','Y','admin','A','2019-05-26 11:40:50','2019-05-26 14:14:20'),(2,'300003','CT-Scan','computerized tomography scan','General','admin','Y','admin','A','2019-05-26 11:43:20','2019-05-26 14:14:22'),(3,'300004','Ultra Sonography','Ultra Sonography','General','admin','Y','admin','A','2019-05-26 11:45:58','2019-05-26 14:14:23'),(4,'300005','Blood Group Test','Blood Group Test','General','admin','Y','admin','A','2019-05-26 11:46:54','2019-05-26 14:14:24'),(5,'300006','Blood Glucose level check','General','Blood Glucose level check','chinmoy','Y','admin','A','2019-05-30 07:28:32','2019-05-30 07:36:05'),(6,'300007','Pagnancy Test','Pagnancy Test','General','cbiswas','Y','admin','A','2019-05-30 07:33:21','2019-05-30 07:34:35'),(7,'300008','Blood Group Test','Know your Blood Group','General','litan_1982','Y','admin','A','2019-06-01 21:14:36','2019-06-01 21:19:19');
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
  `d_labscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_labs`
--

LOCK TABLES `d_labs` WRITE;
/*!40000 ALTER TABLE `d_labs` DISABLE KEYS */;
INSERT INTO `d_labs` VALUES (1,'400007','Medicare Lab','Amtali Bazara, Agartala, West Tripura',NULL,'799130','Braja Gopal Das','07:00:00','22:00:00','on','on','on','on','on','on','on','A','2019-05-26 19:56:32','2019-05-26 21:40:25',NULL),(2,'400008','New Diagnostics Tech.','Hapania Bazar, Agartala, West Tripura',NULL,'799014','C Biswas','07:00:00','22:00:00','on','on','on','on','','on','on','A','2019-05-30 07:09:52',NULL,NULL),(3,'400009','Roy Pathology','Hapania Bazar, Agartala, West Tripura','03812370303','799014','Tanmay Biswas','06:00:00','23:00:00','on','on','on','on','on','on','on','A','2019-06-01 21:04:06',NULL,NULL);
/*!40000 ALTER TABLE `d_labs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_user_chamber_mapping`
--

DROP TABLE IF EXISTS `d_user_chamber_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_user_chamber_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(500) DEFAULT NULL,
  `chamber_id` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_crreated_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_chamber_mapping`
--

LOCK TABLES `d_user_chamber_mapping` WRITE;
/*!40000 ALTER TABLE `d_user_chamber_mapping` DISABLE KEYS */;
INSERT INTO `d_user_chamber_mapping` VALUES (1,'debasish','200013','A','2019-05-30 01:12:32',NULL),(2,'mitandas','200016','A','2019-05-31 00:44:22',NULL),(3,'amit_1986','200019','A','2019-06-01 20:56:42',NULL);
/*!40000 ALTER TABLE `d_user_chamber_mapping` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_info`
--

LOCK TABLES `d_user_info` WRITE;
/*!40000 ALTER TABLE `d_user_info` DISABLE KEYS */;
INSERT INTO `d_user_info` VALUES (1,'admin','Super Administrator','Agartala','debasishdas.agt@gmail.com','9774308994','N','2019-05-19','2019-05-19','2019-05-19 00:00:00','2019-05-29 02:16:32','D'),(2,'admin','Super Administrator','Agartala','debasishdas.agt@gmail.com','9774308994','N','2019-05-19','0000-00-00','2019-05-29 02:16:32','2019-05-29 02:18:58','D'),(3,'admin','Super Administrator','Agartala','debasishdas.agt@gmail.com','9862773881','N','2019-05-19','1990-08-10','2019-05-29 02:18:58',NULL,'A'),(5,'debasish','Debasish Das','Agartala, West Tripura','debasishdas.agt@gmail.com','9774308994','N','2019-05-30','1990-08-10','2019-05-30 01:12:31','2019-05-30 06:45:23','D'),(6,'debasish','Debasish Das','Amtali,Agartala, West Tripura','debasishdas.trp@gmail.com','9774308994','N','2019-05-30','1990-08-10','2019-05-30 06:45:23',NULL,'A'),(7,'cbiswas','Chinmoy Biswas','Hapania, agartala, West Tripura','cbiswas.agt@gmail.com','9774308992','N','2019-05-30','1990-05-23','2019-05-30 06:48:55',NULL,'A'),(8,'chinmoy','Chinmoy Biswas','Hapania, agartala, West Tripura','cbiswas.agt@gmail.com','9774308994','N','2019-05-30','1990-05-23','2019-05-30 07:15:00',NULL,'A'),(9,'mitandas','Mitan Das','Hapania','mitandas.trp@gmail.com','8656888','N','2019-05-31','1990-12-02','2019-05-31 00:44:22',NULL,'A'),(10,'amit_1986','AMIT PRADHAN','jogendranagae','baalamit@gmail.com','9774578321','N','2019-06-01','1986-03-03','2019-06-01 20:56:42',NULL,'A'),(11,'litan_1982','Litan Sharma','Amtali','esss@gmail.com','9862809865','N','2019-06-01','1993-02-15','2019-06-01 21:11:50',NULL,'A');
/*!40000 ALTER TABLE `d_user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_user_lab_mapping`
--

DROP TABLE IF EXISTS `d_user_lab_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_user_lab_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(500) DEFAULT NULL,
  `lab_id` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_crreated_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_lab_mapping`
--

LOCK TABLES `d_user_lab_mapping` WRITE;
/*!40000 ALTER TABLE `d_user_lab_mapping` DISABLE KEYS */;
INSERT INTO `d_user_lab_mapping` VALUES (1,'cbiswas','400007','A','2019-05-30 06:48:55',NULL),(2,'chinmoy','400008','A','2019-05-30 07:15:01',NULL),(3,'litan_1982','400009','A','2019-06-01 21:11:51',NULL);
/*!40000 ALTER TABLE `d_user_lab_mapping` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_password`
--

LOCK TABLES `d_user_password` WRITE;
/*!40000 ALTER TABLE `d_user_password` DISABLE KEYS */;
INSERT INTO `d_user_password` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','D',NULL,'2019-05-29 01:26:32'),(4,'admin','0192023a7bbd73250516f069df18b500','D','2019-05-29 01:26:32','2019-05-29 01:35:33'),(6,'admin','21232f297a57a5a743894a0e4a801fc3','A','2019-05-29 01:35:33',NULL),(7,'debasish','2eb5a42705deca5350087fe7f0621f57','D','2019-05-30 01:12:32','2019-05-30 06:45:46'),(8,'debasish','a8b0fcef262e4e95a728d675d944f1b0','A','2019-05-30 06:45:46','2019-05-30 23:56:51'),(9,'cbiswas','3557b855cfb822b7eadf7498fb9f581b','A','2019-05-30 06:48:55','2019-05-30 23:58:49'),(10,'chinmoy','f88ed22b8ef52a487b8c2d6fa8768ce7','A','2019-05-30 07:15:00','2019-05-30 23:56:45'),(11,'mitandas','0c17e9ef691b18325202cb58952cde6a','A','2019-05-31 00:44:22','2019-05-31 00:44:58'),(12,'amit_1986','2d15347f6f69a7ce09056577dd380a41','A','2019-06-01 20:56:42',NULL),(13,'litan_1982','c8837b23ff8aaa8a2dde915473ce0991','A','2019-06-01 21:11:51',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_role`
--

LOCK TABLES `d_user_role` WRITE;
/*!40000 ALTER TABLE `d_user_role` DISABLE KEYS */;
INSERT INTO `d_user_role` VALUES (1,'admin','1001','D',NULL,'2019-05-29 01:00:19'),(3,'admin','1001','D','2019-05-29 01:00:19','2019-05-29 01:01:38'),(4,'admin','1002','D','2019-05-29 01:01:38','2019-05-29 01:01:47'),(5,'admin','1002','D','2019-05-29 01:01:47','2019-05-29 01:02:54'),(6,'admin','1001','A','2019-05-29 01:02:54',NULL),(8,'debasish','1003','A','2019-05-30 01:12:32',NULL),(9,'cbiswas','1002','A','2019-05-30 06:48:55',NULL),(10,'chinmoy','1002','A','2019-05-30 07:15:00',NULL),(11,'mitandas','1003','A','2019-05-31 00:44:22',NULL),(12,'amit_1986','1003','A','2019-06-01 20:56:42',NULL),(13,'litan_1982','1002','A','2019-06-01 21:11:51',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab_test_mapping`
--

LOCK TABLES `lab_test_mapping` WRITE;
/*!40000 ALTER TABLE `lab_test_mapping` DISABLE KEYS */;
INSERT INTO `lab_test_mapping` VALUES (8,'400007','300002','500','D','2019-05-27 00:39:45','2019-05-27 01:12:27'),(9,'400007','300003','700','A','2019-05-27 00:39:59',NULL),(10,'400007','300004','300','A','2019-05-27 00:46:07',NULL),(11,'400007','300002','600','A','2019-05-27 01:13:06',NULL),(12,'400007','300007','500','A','2019-05-30 07:36:56',NULL),(13,'400007','300006','100','A','2019-05-30 07:37:10',NULL),(14,'400008','300006','100','A','2019-05-30 07:37:46',NULL),(15,'400008','300007','700','A','2019-05-30 07:37:53',NULL),(16,'400008','300002','900','A','2019-05-30 07:38:01',NULL),(17,'400009','300003','8700','A','2019-06-01 21:13:09',NULL),(18,'400009','300004','2800','A','2019-06-01 21:13:31',NULL),(19,'400009','300008','150','A','2019-06-01 21:19:53',NULL);
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
INSERT INTO `m_seq_num` VALUES (1,'Doctor',1,38,'A',NULL,NULL),(2,'Chamber',2,20,'A',NULL,NULL),(3,'Lab Test',3,9,'A',NULL,NULL),(4,'Lab',4,10,'A',NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_user_roles`
--

LOCK TABLES `m_user_roles` WRITE;
/*!40000 ALTER TABLE `m_user_roles` DISABLE KEYS */;
INSERT INTO `m_user_roles` VALUES (1,'1001','Administrator','A',NULL,NULL),(2,'1002','Laboratory','A',NULL,NULL),(3,'1003','Chamber','A',NULL,NULL);
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

-- Dump completed on 2019-06-03  8:28:50
