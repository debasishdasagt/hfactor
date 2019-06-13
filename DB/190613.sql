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
-- Table structure for table `d_appointment_otp`
--

DROP TABLE IF EXISTS `d_appointment_otp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_appointment_otp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_session_id` varchar(45) DEFAULT NULL,
  `chamber_id` varchar(45) DEFAULT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `otp` varchar(45) DEFAULT NULL,
  `otp_expr_on` datetime DEFAULT NULL,
  `sent_count` int(11) DEFAULT NULL,
  `otp_sent_date` date DEFAULT NULL,
  `otp_msg_body` varchar(500) DEFAULT NULL,
  `otp_verification_status` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_appointment_otp`
--

LOCK TABLES `d_appointment_otp` WRITE;
/*!40000 ALTER TABLE `d_appointment_otp` DISABLE KEYS */;
INSERT INTO `d_appointment_otp` VALUES (28,'uJkffMdaT5','200021','ssdfg','666518','2019-06-07 19:37:36',1,'2019-06-07','OTP for Appointment Booking is 666518','N','A','2019-06-07 19:07:36',NULL),(29,'ahMYJKf19P','200021','7654322222','040646','2019-06-07 19:39:17',1,'2019-06-07','OTP for Appointment Booking is 040646','N','A','2019-06-07 19:09:17',NULL),(30,'feflcd60P9','200021','7654322222','775654','2019-06-07 19:52:05',1,'2019-06-07','OTP for Appointment Booking is 775654','N','A','2019-06-07 19:22:05',NULL),(31,'RFHltm11Mi','200020','sdfgsdfgsdf','162525','2019-06-07 19:55:04',1,'2019-06-07','OTP for Appointment Booking is 162525','N','A','2019-06-07 19:25:05',NULL),(32,'vVXIxktYES','200021','9774308994','804052','2019-06-07 19:58:21',1,'2019-06-07','OTP for Appointment Booking is 804052','N','A','2019-06-07 19:28:21',NULL),(33,'StkJNqaTLP','200021','7654322222','192448','2019-06-07 20:25:08',1,'2019-06-07','OTP for Appointment Booking is 192448','Y','V','2019-06-07 19:55:08',NULL),(34,'pc1kxeOySm','200021','6388282','162404','2019-06-07 20:31:40',1,'2019-06-07','OTP for Appointment Booking is 162404','Y','V','2019-06-07 20:01:40',NULL),(35,'ZFjZxlNgtS','200020','9856013261','188041','2019-06-09 01:37:14',1,'2019-06-09','OTP for Appointment Booking is 188041','Y','V','2019-06-09 01:07:15',NULL),(36,'bUEioNSPVM','200021','9856013261','158392','2019-06-10 06:18:24',1,'2019-06-10','OTP for Appointment Booking is 158392','Y','V','2019-06-10 05:48:24',NULL),(37,'DYfYW8BoXg','200021','9774308994','731199','2019-06-11 19:45:25',1,'2019-06-11','OTP for Appointment Booking is 731199','Y','V','2019-06-11 19:15:25',NULL),(38,'NKxhLyOS27','200021','9774308994','933571','2019-06-11 19:50:39',1,'2019-06-11','OTP for Appointment Booking is 933571','Y','V','2019-06-11 19:20:39',NULL),(39,'V63kcFgVqn','200021','9774308994','110994','2019-06-13 00:38:14',1,'2019-06-13','OTP for Appointment Booking is 110994','Y','V','2019-06-13 00:08:14',NULL),(40,'T10nYZscsj','200021','9856013261','872465','2019-06-13 00:38:48',1,'2019-06-13','OTP for Appointment Booking is 872465','Y','V','2019-06-13 00:08:48',NULL);
/*!40000 ALTER TABLE `d_appointment_otp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_chamber_appointment`
--

DROP TABLE IF EXISTS `d_chamber_appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_chamber_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slot_seq` int(11) DEFAULT NULL,
  `patient_id` bigint(20) NOT NULL,
  `chamber_id` varchar(45) DEFAULT NULL,
  `app_time_from` time NOT NULL,
  `app_time_to` time DEFAULT NULL,
  `app_date` date NOT NULL,
  `app_reporting_time` time DEFAULT NULL,
  `app_confirmed` varchar(45) DEFAULT NULL,
  `app_completed` varchar(10) NOT NULL,
  `app_remarks` varchar(500) NOT NULL,
  `record_status` varchar(45) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_chamber_appointment`
--

LOCK TABLES `d_chamber_appointment` WRITE;
/*!40000 ALTER TABLE `d_chamber_appointment` DISABLE KEYS */;
INSERT INTO `d_chamber_appointment` VALUES (1,1,5000018,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 19:28:21','0000-00-00 00:00:00'),(2,2,5000019,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 19:55:08','0000-00-00 00:00:00'),(3,3,5000020,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 20:01:40','0000-00-00 00:00:00'),(4,1,5000021,'200020','16:00:00','22:00:00','2019-06-09','00:00:00','','','','A','2019-06-09 01:07:15','0000-00-00 00:00:00'),(5,1,5000022,'200021','18:00:00','22:50:00','2019-06-10','18:50:00','Y','','dfasdfasd','A','2019-06-10 05:48:24','0000-00-00 00:00:00'),(6,1,5000023,'200021','23:40:00','23:59:00','2019-06-12','23:45:00','Y','Y','','A','2019-06-11 19:15:25','2019-06-12 07:39:29'),(7,1,5000024,'200021','22:00:00','22:50:00','2019-06-11','22:25:00','Y','','','A','2019-06-11 19:20:39','0000-00-00 00:00:00'),(8,1,5000025,'200021','18:00:00','22:50:00','2019-06-13','18:50:00','Y','Y','','A','2019-06-13 00:08:14','2019-06-13 00:10:01'),(9,1,5000026,'200021','23:00:00','23:59:00','2019-06-13','23:25:00','Y','','','A','2019-06-13 00:08:48','2019-06-13 00:10:18');
/*!40000 ALTER TABLE `d_chamber_appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_chamber_days`
--

DROP TABLE IF EXISTS `d_chamber_days`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_chamber_days` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `record_updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_chamber_days`
--

LOCK TABLES `d_chamber_days` WRITE;
/*!40000 ALTER TABLE `d_chamber_days` DISABLE KEYS */;
INSERT INTO `d_chamber_days` VALUES (1,'200020','Sunday','16:00:00','22:00:00',10,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(2,'200020','Monday','16:00:00','22:00:00',6,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(4,'200020','Thursday','16:00:00','22:00:00',9,'00:00:00','00:00:00',0,'D','2019-06-04 13:27:16','0000-00-00 00:00:00'),(5,'200020','Friday','16:00:00','22:00:00',9,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(6,'200020','Saturday','16:00:00','22:00:00',3,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(7,'200021','Sunday','18:00:00','22:50:00',10,'00:00:00','00:00:00',0,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(8,'200021','Monday','18:00:00','22:50:00',10,'00:00:00','00:00:00',0,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(9,'200021','Tuesday','22:00:00','22:50:00',10,'08:00:00','12:00:00',4,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(10,'200021','Wednesday','22:00:00','22:50:00',10,'23:40:00','23:59:00',5,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(11,'200021','Thursday','18:00:00','22:50:00',10,'23:00:00','23:59:00',4,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(12,'200021','Saturday','18:00:00','22:50:00',10,'00:00:00','00:00:00',0,'A','2019-06-04 13:34:25','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `d_chamber_days` ENABLE KEYS */;
UNLOCK TABLES;

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
  `chamber_remarks` varchar(500) NOT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_chambers`
--

LOCK TABLES `d_chambers` WRITE;
/*!40000 ALTER TABLE `d_chambers` DISABLE KEYS */;
INSERT INTO `d_chambers` VALUES (5,'200012','10029','Hapania','Hapania Bazar, Agartala, West Tripura',NULL,'799014','','D','2019-05-25 21:27:05','2019-05-31 00:12:15'),(6,'200013','10028','Amtali','Amtali Bazar, Agartala, West Tripura',NULL,'799130','','A','2019-05-25 21:29:14',NULL),(7,'200014','10029','Badharght','Badharghat, Agartala',NULL,'799003','','D','2019-05-25 21:30:54','2019-05-31 00:12:59'),(8,'200015','10028','Math Chowmuhani','Math Chowmuhani',NULL,'799001','','A','2019-05-31 00:11:21',NULL),(9,'200016','10030','Dr. Health','Indranagar',NULL,'799006','','A','2019-05-31 00:42:10',NULL),(10,'200017','10029','Hapania Hospital Square','Hapania Hospital Square, Hapania, Agartala','9863553422','799014','','A','2019-05-31 08:35:05',NULL),(11,'200018','10035','Sparsh','sdfgsdfg','345345345345','54674567','','A','2019-06-01 19:20:43',NULL),(12,'200019','10036','HAPANIA','Hapania Hospital Square, Hapania, Agartala','03812370105','799014','','A','2019-06-01 20:53:57',NULL),(13,'200020','10036','Biswas Kutir','Hapania, Agartala, West Tripura','9774308992','799014','Its Closed on Wednesday','A','2019-06-04 13:27:16',NULL),(14,'200021','10036','Biswas Kutir2','Hapania, Agartala, West Tripura','9774308992','799014','Its Closed on friday','A','2019-06-04 13:34:25',NULL);
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
-- Table structure for table `d_patient_info`
--

DROP TABLE IF EXISTS `d_patient_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_patient_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` bigint(20) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_address` varchar(600) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `record_created_by` varchar(500) NOT NULL,
  `record_status` varchar(10) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_patient_info`
--

LOCK TABLES `d_patient_info` WRITE;
/*!40000 ALTER TABLE `d_patient_info` DISABLE KEYS */;
INSERT INTO `d_patient_info` VALUES (1,5000019,'aertwertw','wertwert','7654322222','self','A','2019-06-07 19:55:08','0000-00-00 00:00:00'),(2,5000020,'53637','vdhshd','6388282','self','A','2019-06-07 20:01:40','0000-00-00 00:00:00'),(3,5000021,'Radhika Lama Das','Amtali, Agartala, West Tripura','9856013261','self','A','2019-06-09 01:07:15','0000-00-00 00:00:00'),(4,5000022,'Radhika Lama Das','Amtali, Agartala, West Tripura','9856013261','self','A','2019-06-10 05:48:24','0000-00-00 00:00:00'),(5,5000023,'Test Patient','Amtali, Agartala, West Tripura','9774308994','self','A','2019-06-11 19:15:25','0000-00-00 00:00:00'),(6,5000024,'fsdfsdf','sdfsdf','9774308994','self','A','2019-06-11 19:20:39','0000-00-00 00:00:00'),(7,5000025,'dhdghdfgh','dfhdfgh','9774308994','self','A','2019-06-13 00:08:14','0000-00-00 00:00:00'),(8,5000026,'ssfs','sfsfsf','9856013261','self','A','2019-06-13 00:08:49','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `d_patient_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_redirect_url`
--

DROP TABLE IF EXISTS `d_redirect_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_redirect_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `public_url` varchar(500) DEFAULT NULL,
  `internal_url` varchar(500) DEFAULT NULL,
  `p1` varchar(45) DEFAULT NULL,
  `p2` varchar(45) DEFAULT NULL,
  `p3` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_redirect_url`
--

LOCK TABLES `d_redirect_url` WRITE;
/*!40000 ALTER TABLE `d_redirect_url` DISABLE KEYS */;
INSERT INTO `d_redirect_url` VALUES (2,'r.php?q=fgwUYW','modules/patient/afterappo.php?appoid=6',NULL,NULL,NULL,'Y','2019-06-12 07:45:59',NULL),(3,'r.php?q=vTYgpU','modules/patient/afterappo.php?appoid=8',NULL,NULL,NULL,'Y','2019-06-13 00:10:53',NULL),(4,'r.php?q=aQvhvH','modules/patient/afterappo.php','8',NULL,NULL,'Y','2019-06-13 00:58:57',NULL);
/*!40000 ALTER TABLE `d_redirect_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_tests_recommended`
--

DROP TABLE IF EXISTS `d_tests_recommended`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_tests_recommended` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chamber_id` varchar(45) DEFAULT NULL,
  `patient_id` varchar(45) DEFAULT NULL,
  `test_id` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_tests_recommended`
--

LOCK TABLES `d_tests_recommended` WRITE;
/*!40000 ALTER TABLE `d_tests_recommended` DISABLE KEYS */;
INSERT INTO `d_tests_recommended` VALUES (4,'200021','5000023','300004','A','2019-06-12 07:45:59',NULL),(5,'200021','5000023','300007','A','2019-06-12 07:45:59',NULL),(6,'200021','5000023','300008','A','2019-06-12 07:45:59',NULL),(7,'200021','5000025','300004','D','2019-06-13 00:10:53',NULL),(8,'200021','5000025','300007','D','2019-06-13 00:10:53',NULL),(9,'200021','5000025','300005','D','2019-06-13 00:10:53',NULL),(10,'200021','5000025','300004','A','2019-06-13 00:58:57',NULL),(11,'200021','5000025','300008','A','2019-06-13 00:58:57',NULL),(12,'200021','5000025','300006','A','2019-06-13 00:58:57',NULL);
/*!40000 ALTER TABLE `d_tests_recommended` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_seq_num`
--

LOCK TABLES `m_seq_num` WRITE;
/*!40000 ALTER TABLE `m_seq_num` DISABLE KEYS */;
INSERT INTO `m_seq_num` VALUES (1,'Doctor',1,38,'A',NULL,NULL),(2,'Chamber',2,22,'A',NULL,NULL),(3,'Lab Test',3,9,'A',NULL,NULL),(4,'Lab',4,11,'A',NULL,NULL),(5,'Patient',5,27,'A',NULL,NULL);
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
-- Temporary view structure for view `patient_test_pricing`
--

DROP TABLE IF EXISTS `patient_test_pricing`;
/*!50001 DROP VIEW IF EXISTS `patient_test_pricing`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `patient_test_pricing` AS SELECT 
 1 AS `chamber_id`,
 1 AS `patient_id`,
 1 AS `test_name`,
 1 AS `test_id`,
 1 AS `test_rate`,
 1 AS `lab_id`,
 1 AS `lab_name`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tmp_chamber_appointment`
--

DROP TABLE IF EXISTS `tmp_chamber_appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tmp_chamber_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_session_id` varchar(500) NOT NULL,
  `slot_seq` int(11) DEFAULT NULL,
  `patient_id` bigint(20) NOT NULL,
  `chamber_id` varchar(45) DEFAULT NULL,
  `app_time_from` time NOT NULL,
  `app_time_to` time DEFAULT NULL,
  `app_date` date NOT NULL,
  `app_reporting_time` time DEFAULT NULL,
  `app_confirmed` varchar(45) DEFAULT NULL,
  `app_completed` varchar(10) NOT NULL,
  `app_remarks` varchar(500) NOT NULL,
  `record_status` varchar(45) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_chamber_appointment`
--

LOCK TABLES `tmp_chamber_appointment` WRITE;
/*!40000 ALTER TABLE `tmp_chamber_appointment` DISABLE KEYS */;
INSERT INTO `tmp_chamber_appointment` VALUES (1,'zUtQusg8OS',1,5000002,'200020','16:00:00','22:00:00','2019-06-07','00:00:00','','','','A','2019-06-07 15:00:46','0000-00-00 00:00:00'),(2,'2nTTbRWf1n',1,5000003,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 15:21:04','0000-00-00 00:00:00'),(3,'220vmYabG0',1,5000005,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 15:22:47','0000-00-00 00:00:00'),(4,'ELjLF4TOGA',1,5000006,'200020','16:00:00','22:00:00','2019-06-07','00:00:00','','','','A','2019-06-07 15:24:45','0000-00-00 00:00:00'),(5,'7eCpCpMYuW',1,5000007,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:22:37','0000-00-00 00:00:00'),(6,'jAQ8y4lPij',1,5000008,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:26:07','0000-00-00 00:00:00'),(7,'fsqUpUfftv',1,5000009,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:29:50','0000-00-00 00:00:00'),(8,'evPpv4mp9Z',1,5000011,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:31:49','0000-00-00 00:00:00'),(9,'HODfXYyt6V',1,5000012,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:33:49','0000-00-00 00:00:00'),(10,'vVXIxktYES',1,5000018,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 19:28:21','0000-00-00 00:00:00'),(11,'StkJNqaTLP',2,5000019,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','C','2019-06-07 19:55:08','0000-00-00 00:00:00'),(12,'pc1kxeOySm',3,5000020,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','C','2019-06-07 20:01:40','0000-00-00 00:00:00'),(13,'ZFjZxlNgtS',1,5000021,'200020','16:00:00','22:00:00','2019-06-09','00:00:00','','','','C','2019-06-09 01:07:15','0000-00-00 00:00:00'),(14,'bUEioNSPVM',1,5000022,'200021','18:00:00','22:50:00','2019-06-10','00:00:00','','','','C','2019-06-10 05:48:24','0000-00-00 00:00:00'),(15,'DYfYW8BoXg',1,5000023,'200021','23:40:00','23:59:00','2019-06-12','00:00:00','','','','C','2019-06-11 19:15:25','0000-00-00 00:00:00'),(16,'NKxhLyOS27',1,5000024,'200021','22:00:00','22:50:00','2019-06-11','00:00:00','','','','C','2019-06-11 19:20:39','0000-00-00 00:00:00'),(17,'V63kcFgVqn',1,5000025,'200021','18:00:00','22:50:00','2019-06-13','00:00:00','','','','C','2019-06-13 00:08:14','0000-00-00 00:00:00'),(18,'T10nYZscsj',1,5000026,'200021','23:00:00','23:59:00','2019-06-13','00:00:00','','','','C','2019-06-13 00:08:48','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tmp_chamber_appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_patient_info`
--

DROP TABLE IF EXISTS `tmp_patient_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tmp_patient_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_session_id` varchar(100) NOT NULL,
  `patient_id` bigint(20) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `patient_address` varchar(600) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `record_created_by` varchar(500) NOT NULL,
  `record_status` varchar(10) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_patient_info`
--

LOCK TABLES `tmp_patient_info` WRITE;
/*!40000 ALTER TABLE `tmp_patient_info` DISABLE KEYS */;
INSERT INTO `tmp_patient_info` VALUES (1,'ELjLF4TOGA',5000006,'Debasish Das','Agartala, Amtali','9774308994','self','A','2019-06-07 15:24:45','0000-00-00 00:00:00'),(2,'7eCpCpMYuW',5000007,'kdjfg','lkejtheklr','kejkht','self','A','2019-06-07 16:22:37','0000-00-00 00:00:00'),(3,'jAQ8y4lPij',5000008,'flgkdfklgdlfk','klertjeklrtjl','9774308994','self','A','2019-06-07 16:26:07','0000-00-00 00:00:00'),(4,'fsqUpUfftv',5000009,'kdjfghdfj','kdjfghdjgk','7577466673','self','A','2019-06-07 16:29:50','0000-00-00 00:00:00'),(5,'evPpv4mp9Z',5000011,'kfdgnkjdfgdk','klfdgjdklfgdlk','75674393333','self','A','2019-06-07 16:31:49','0000-00-00 00:00:00'),(6,'HODfXYyt6V',5000012,'sdtgfe','ertyer','7577466673','self','A','2019-06-07 16:33:49','0000-00-00 00:00:00'),(7,'GHXSus5Q2q',5000013,'fsdfsdff','sdfsdfdf','9774308994','self','A','2019-06-07 18:44:35','0000-00-00 00:00:00'),(8,'uJkffMdaT5',5000014,'xv','sdfgsdfg','ssdfg','self','A','2019-06-07 19:07:36','0000-00-00 00:00:00'),(9,'ahMYJKf19P',5000015,'cb','xcbvxvbx','7654322222','self','A','2019-06-07 19:09:18','0000-00-00 00:00:00'),(10,'feflcd60P9',5000016,'sdfgsdfgsdfg','sdfgsdfgsdfg','7654322222','self','A','2019-06-07 19:22:05','0000-00-00 00:00:00'),(11,'RFHltm11Mi',5000017,'sfdgsdfg','sdfgsdfg','sdfgsdfgsdf','self','A','2019-06-07 19:25:05','0000-00-00 00:00:00'),(12,'vVXIxktYES',5000018,'sdfgdfg','dfghdfg','9774308994','self','A','2019-06-07 19:28:21','0000-00-00 00:00:00'),(13,'StkJNqaTLP',5000019,'aertwertw','wertwert','7654322222','self','C','2019-06-07 19:55:08','0000-00-00 00:00:00'),(14,'pc1kxeOySm',5000020,'53637','vdhshd','6388282','self','C','2019-06-07 20:01:40','0000-00-00 00:00:00'),(15,'ZFjZxlNgtS',5000021,'Radhika Lama Das','Amtali, Agartala, West Tripura','9856013261','self','C','2019-06-09 01:07:15','0000-00-00 00:00:00'),(16,'bUEioNSPVM',5000022,'Radhika Lama Das','Amtali, Agartala, West Tripura','9856013261','self','C','2019-06-10 05:48:24','0000-00-00 00:00:00'),(17,'DYfYW8BoXg',5000023,'Test Patient','Amtali, Agartala, West Tripura','9774308994','self','C','2019-06-11 19:15:25','0000-00-00 00:00:00'),(18,'NKxhLyOS27',5000024,'fsdfsdf','sdfsdf','9774308994','self','C','2019-06-11 19:20:39','0000-00-00 00:00:00'),(19,'V63kcFgVqn',5000025,'dhdghdfgh','dfhdfgh','9774308994','self','C','2019-06-13 00:08:14','0000-00-00 00:00:00'),(20,'T10nYZscsj',5000026,'ssfs','sfsfsf','9856013261','self','C','2019-06-13 00:08:49','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tmp_patient_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ihealthcare'
--

--
-- Dumping routines for database 'ihealthcare'
--
/*!50003 DROP FUNCTION IF EXISTS `get_app_seq` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_app_seq`(`ch_id` VARCHAR(10), `app_time_from` TIME, `app_time_to` TIME, `app_date` DATE) RETURNS int(11)
    NO SQL
BEGIN
declare cur_seq int;
declare new_seq int;
set cur_seq:=(select ifnull(max(d_chamber_appointment.slot_seq),0) from d_chamber_appointment where d_chamber_appointment.chamber_id=ch_id and d_chamber_appointment.app_time_from=app_time_from and d_chamber_appointment.app_time_to=app_time_to and d_chamber_appointment.app_date=app_date and record_status='A');
set new_seq:= cur_seq+1;
RETURN new_seq;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `get_chamber_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
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
/*!50003 DROP FUNCTION IF EXISTS `get_chamber_info` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_chamber_info`(`ch_id` varchar(45)) RETURNS varchar(500) CHARSET latin1
BEGIN
declare ch_name varchar(500);
set ch_name:=(select ifnull(concat(chamber_name," - ",chamber_address),"") from d_chambers where chamber_id=ch_id and record_status='A' );
RETURN ch_name;
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
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
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
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
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
/*!50003 DROP FUNCTION IF EXISTS `get_lab_name` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `GET_LAB_NAME`(`l_id` varchar(45)) RETURNS varchar(500) CHARSET latin1
BEGIN
declare l_name varchar(500);
set l_name:=(select ifnull(lab_name,"") from d_labs where lab_id=l_id and record_status='A' );
RETURN l_name;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `get_patient_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_patient_id`() RETURNS varchar(7) CHARSET latin1
BEGIN
declare cur_seq int;
declare p_id varchar(7);
declare reg_prefix varchar(1);
set reg_prefix:="5";

set cur_seq:=(select seq_num from m_seq_num where reg_type_code=reg_prefix);
set p_id:=(select concat(reg_prefix, Lpad(cur_seq,6,'0')));
update m_seq_num set seq_num=cur_seq+1 where reg_type_code=reg_prefix;
RETURN p_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `get_patient_name` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_patient_name`(`p_id` varchar(45)) RETURNS varchar(500) CHARSET latin1
BEGIN
declare p_name varchar(500);
set p_name:=(select ifnull(patient_name,"") from d_patient_info where patient_id=p_id and record_status='A' );
RETURN p_name;
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
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `get_test_id`() RETURNS varchar(6) CHARSET latin1
    NO SQL
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
/*!50003 DROP FUNCTION IF EXISTS `get_test_name` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `GET_TEST_NAME`(`test_id` varchar(45)) RETURNS varchar(500) CHARSET latin1
BEGIN
declare t_name varchar(500);
set t_name:=(select ifnull(test_name,"") from d_lab_tests where test_code=test_id and record_status='A' );
RETURN t_name;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `patient_test_pricing`
--

/*!50001 DROP VIEW IF EXISTS `patient_test_pricing`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `patient_test_pricing` AS select `d_tests_recommended`.`chamber_id` AS `chamber_id`,`d_tests_recommended`.`patient_id` AS `patient_id`,`GET_TEST_NAME`(`d_tests_recommended`.`test_id`) AS `test_name`,`lab_test_mapping`.`test_id` AS `test_id`,`lab_test_mapping`.`test_rate` AS `test_rate`,`lab_test_mapping`.`lab_id` AS `lab_id`,`GET_LAB_NAME`(`lab_test_mapping`.`lab_id`) AS `lab_name` from (`lab_test_mapping` join `d_tests_recommended` on(((`d_tests_recommended`.`test_id` = `lab_test_mapping`.`test_id`) and (`d_tests_recommended`.`record_status` = 'A')))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-13  8:54:20
