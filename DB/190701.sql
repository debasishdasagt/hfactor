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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_appointment_otp`
--

LOCK TABLES `d_appointment_otp` WRITE;
/*!40000 ALTER TABLE `d_appointment_otp` DISABLE KEYS */;
INSERT INTO `d_appointment_otp` VALUES (28,'uJkffMdaT5','200021','ssdfg','666518','2019-06-07 19:37:36',1,'2019-06-07','OTP for Appointment Booking is 666518','N','A','2019-06-07 19:07:36',NULL),(29,'ahMYJKf19P','200021','7654322222','040646','2019-06-07 19:39:17',1,'2019-06-07','OTP for Appointment Booking is 040646','N','A','2019-06-07 19:09:17',NULL),(30,'feflcd60P9','200021','7654322222','775654','2019-06-07 19:52:05',1,'2019-06-07','OTP for Appointment Booking is 775654','N','A','2019-06-07 19:22:05',NULL),(31,'RFHltm11Mi','200020','sdfgsdfgsdf','162525','2019-06-07 19:55:04',1,'2019-06-07','OTP for Appointment Booking is 162525','N','A','2019-06-07 19:25:05',NULL),(32,'vVXIxktYES','200021','9774308994','804052','2019-06-07 19:58:21',1,'2019-06-07','OTP for Appointment Booking is 804052','N','A','2019-06-07 19:28:21',NULL),(33,'StkJNqaTLP','200021','7654322222','192448','2019-06-07 20:25:08',1,'2019-06-07','OTP for Appointment Booking is 192448','Y','V','2019-06-07 19:55:08',NULL),(34,'pc1kxeOySm','200021','6388282','162404','2019-06-07 20:31:40',1,'2019-06-07','OTP for Appointment Booking is 162404','Y','V','2019-06-07 20:01:40',NULL),(35,'ZFjZxlNgtS','200020','9856013261','188041','2019-06-09 01:37:14',1,'2019-06-09','OTP for Appointment Booking is 188041','Y','V','2019-06-09 01:07:15',NULL),(36,'bUEioNSPVM','200021','9856013261','158392','2019-06-10 06:18:24',1,'2019-06-10','OTP for Appointment Booking is 158392','Y','V','2019-06-10 05:48:24',NULL),(37,'DYfYW8BoXg','200021','9774308994','731199','2019-06-11 19:45:25',1,'2019-06-11','OTP for Appointment Booking is 731199','Y','V','2019-06-11 19:15:25',NULL),(38,'NKxhLyOS27','200021','9774308994','933571','2019-06-11 19:50:39',1,'2019-06-11','OTP for Appointment Booking is 933571','Y','V','2019-06-11 19:20:39',NULL),(39,'V63kcFgVqn','200021','9774308994','110994','2019-06-13 00:38:14',1,'2019-06-13','OTP for Appointment Booking is 110994','Y','V','2019-06-13 00:08:14',NULL),(40,'T10nYZscsj','200021','9856013261','872465','2019-06-13 00:38:48',1,'2019-06-13','OTP for Appointment Booking is 872465','Y','V','2019-06-13 00:08:48',NULL),(41,'t9uswzHbNM','200021','asdfasdf','032126','2019-06-15 20:15:16',1,'2019-06-15','OTP for Appointment Booking is 032126','Y','V','2019-06-15 19:45:16',NULL),(42,'8JOnjmGjCJ','200021','sfghfdsgh','217107','2019-06-15 20:15:45',1,'2019-06-15','OTP for Appointment Booking is 217107','Y','V','2019-06-15 19:45:45',NULL),(43,'3lMgbpsN28','200021','sdfgsdfg','052069','2019-06-15 20:16:05',1,'2019-06-15','OTP for Appointment Booking is 052069','Y','V','2019-06-15 19:46:05',NULL),(44,'7kmbvuC2uX','200021','sdfsdfsd','702887','2019-06-15 20:16:28',1,'2019-06-15','OTP for Appointment Booking is 702887','Y','V','2019-06-15 19:46:28',NULL),(45,'6gLk3qD9o1','200021','dfghdfgh','449126','2019-06-15 20:16:52',1,'2019-06-15','OTP for Appointment Booking is 449126','Y','V','2019-06-15 19:46:52',NULL),(46,'qdvpealqhm','200021','3453453453453','747392','2019-06-16 20:28:10',1,'2019-06-16','OTP for Appointment Booking is 747392','Y','V','2019-06-16 19:58:11',NULL),(47,'JjZ6ofww9s','200021','63456345','174580','2019-06-16 20:29:35',1,'2019-06-16','OTP for Appointment Booking is 174580','Y','V','2019-06-16 19:59:35',NULL),(48,'alcjn8CRe0','200021','35234345345','980428','2019-06-16 20:32:43',1,'2019-06-16','OTP for Appointment Booking is 980428','Y','V','2019-06-16 20:02:43',NULL),(49,'IiR13f3Ips','200021','345345345','132554','2019-06-17 00:30:58',1,'2019-06-17','OTP for Appointment Booking is 132554','Y','V','2019-06-17 00:00:58',NULL),(50,'ujAiqC9hfg','200021','9862804507','483424','2019-06-17 23:00:07',1,'2019-06-17','OTP for Appointment Booking is 483424','Y','V','2019-06-17 22:30:07',NULL),(51,'q1YtkqKtod','200021','9862804507','544017','2019-06-17 23:03:21',1,'2019-06-17','OTP for Appointment Booking is 544017','Y','V','2019-06-17 22:33:21',NULL),(52,'4LPDpnpzQi','200021','9774308994','402634','2019-06-30 23:03:45',1,'2019-06-30','OTP for Appointment Booking is 402634','N','A','2019-06-30 22:33:45',NULL),(53,'ZahvtGhz8G','200021','9774308994','550651','2019-06-30 23:04:45',1,'2019-06-30','OTP for Appointment Booking is 550651','Y','V','2019-06-30 22:34:45',NULL),(54,'1NzqimHv19','200021','4356356345','002166','2019-07-01 00:29:17',1,'2019-06-30','OTP for Appointment Booking is 002166','Y','V','2019-06-30 23:59:17',NULL),(55,'KpuYbkQmHS','200021','3453453345','788762','2019-07-01 00:31:36',1,'2019-07-01','OTP for Appointment Booking is 788762','Y','V','2019-07-01 00:01:36',NULL),(56,'rO5DBTL2Ip','200021','9774308994','906964','2019-07-02 00:32:04',1,'2019-07-02','OTP for Appointment Booking is 906964','Y','V','2019-07-02 00:02:06',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_chamber_appointment`
--

LOCK TABLES `d_chamber_appointment` WRITE;
/*!40000 ALTER TABLE `d_chamber_appointment` DISABLE KEYS */;
INSERT INTO `d_chamber_appointment` VALUES (1,1,5000018,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 19:28:21','0000-00-00 00:00:00'),(2,2,5000019,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 19:55:08','0000-00-00 00:00:00'),(3,3,5000020,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 20:01:40','0000-00-00 00:00:00'),(4,1,5000021,'200020','16:00:00','22:00:00','2019-06-09','00:00:00','','','','A','2019-06-09 01:07:15','0000-00-00 00:00:00'),(5,1,5000022,'200021','18:00:00','22:50:00','2019-06-10','18:50:00','Y','','dfasdfasd','A','2019-06-10 05:48:24','0000-00-00 00:00:00'),(6,1,5000023,'200021','23:40:00','23:59:00','2019-06-12','23:45:00','Y','Y','','A','2019-06-11 19:15:25','2019-06-12 07:39:29'),(7,1,5000024,'200021','22:00:00','22:50:00','2019-06-11','22:25:00','Y','','','A','2019-06-11 19:20:39','0000-00-00 00:00:00'),(8,1,5000025,'200021','18:00:00','22:50:00','2019-06-13','18:50:00','Y','Y','','A','2019-06-13 00:08:14','2019-06-13 00:10:01'),(9,1,5000026,'200021','23:00:00','23:59:00','2019-06-13','23:25:00','Y','','','A','2019-06-13 00:08:48','2019-06-13 00:10:18'),(10,1,5000027,'200021','23:00:00','23:59:00','2019-06-15','19:25:00','Y','Y','','A','2019-06-15 19:45:16','2019-06-15 19:47:46'),(11,2,5000028,'200021','23:00:00','23:59:00','2019-06-15','20:50:00','Y','','','A','2019-06-15 19:45:45','2019-06-15 19:47:54'),(12,3,5000029,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','A','2019-06-15 19:46:05','0000-00-00 00:00:00'),(13,4,5000030,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','A','2019-06-15 19:46:28','0000-00-00 00:00:00'),(14,5,5000031,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','A','2019-06-15 19:46:52','0000-00-00 00:00:00'),(15,1,5000032,'200021','23:00:00','23:59:00','2019-06-16','20:05:00','Y','Y','','A','2019-06-16 19:58:11','2019-06-16 20:09:28'),(16,2,5000033,'200021','23:00:00','23:59:00','2019-06-16','00:00:00','','','','A','2019-06-16 19:59:35','0000-00-00 00:00:00'),(17,3,5000034,'200021','23:00:00','23:59:00','2019-06-16','00:00:00','','','','A','2019-06-16 20:02:43','0000-00-00 00:00:00'),(18,1,5000035,'200021','18:00:00','22:50:00','2019-06-17','18:30:00','Y','Y','','A','2019-06-17 00:00:58','2019-06-17 00:02:12'),(19,1,5000036,'200021','08:00:00','12:00:00','2019-06-18','00:00:00','','','','A','2019-06-17 22:30:07','0000-00-00 00:00:00'),(20,1,5000037,'200021','22:59:00','23:59:00','2019-06-17','23:10:00','Y','Y','','A','2019-06-17 22:33:21','2019-06-17 22:35:55'),(21,1,5000068,'200021','23:00:00','23:59:00','2019-06-30','00:00:00','','','','A','2019-06-30 22:34:45','0000-00-00 00:00:00'),(22,1,5000069,'200021','18:00:00','22:50:00','2019-07-01','23:22:00','Y','Y','','A','2019-06-30 23:59:18','2019-07-01 22:14:51'),(23,1,5000070,'200021','22:59:00','23:59:00','2019-07-01','00:00:00','','','','A','2019-07-01 00:01:36','0000-00-00 00:00:00'),(24,1,5000071,'200021','08:00:00','12:00:00','2019-07-02','14:03:00','Y','Y','','A','2019-07-02 00:02:06','2019-07-02 00:03:50');
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
INSERT INTO `d_chamber_days` VALUES (1,'200020','Sunday','16:00:00','22:00:00',10,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(2,'200020','Monday','16:00:00','22:00:00',6,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(4,'200020','Thursday','16:00:00','22:00:00',9,'00:00:00','00:00:00',0,'D','2019-06-04 13:27:16','0000-00-00 00:00:00'),(5,'200020','Friday','16:00:00','22:00:00',9,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(6,'200020','Saturday','16:00:00','22:00:00',3,'00:00:00','00:00:00',0,'A','2019-06-04 13:27:16','0000-00-00 00:00:00'),(7,'200021','Sunday','18:00:00','22:50:00',10,'23:00:00','23:59:00',5,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(8,'200021','Monday','18:00:00','22:50:00',10,'22:59:00','23:59:00',5,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(9,'200021','Tuesday','22:00:00','22:50:00',10,'08:00:00','12:00:00',4,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(10,'200021','Wednesday','22:00:00','22:50:00',10,'23:40:00','23:59:00',5,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(11,'200021','Thursday','18:00:00','22:50:00',10,'23:00:00','23:59:00',4,'A','2019-06-04 13:34:25','0000-00-00 00:00:00'),(12,'200021','Saturday','18:00:00','22:50:00',10,'23:00:00','23:59:00',5,'A','2019-06-04 13:34:25','0000-00-00 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=380 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_lab_tests`
--

LOCK TABLES `d_lab_tests` WRITE;
/*!40000 ALTER TABLE `d_lab_tests` DISABLE KEYS */;
INSERT INTO `d_lab_tests` VALUES (1,'300002','X-ray','X-Ray','General','admin','Y','admin','D','2019-05-26 11:40:50','2019-06-14 00:10:11'),(2,'300003','CT-Scan','computerized tomography scan','General','admin','Y','admin','D','2019-05-26 11:43:20','2019-06-14 00:10:13'),(3,'300004','Ultra Sonography','Ultra Sonography','General','admin','Y','admin','D','2019-05-26 11:45:58','2019-06-14 00:10:16'),(4,'300005','Blood Group Test','Blood Group Test','General','admin','Y','admin','D','2019-05-26 11:46:54','2019-06-14 00:10:20'),(5,'300006','Blood Glucose level check','General','Blood Glucose level check','chinmoy','Y','admin','D','2019-05-30 07:28:32','2019-06-14 00:10:22'),(6,'300007','Pagnancy Test','Pagnancy Test','General','cbiswas','Y','admin','D','2019-05-30 07:33:21','2019-06-14 00:10:24'),(7,'300008','Blood Group Test','Know your Blood Group','General','litan_1982','Y','admin','D','2019-06-01 21:14:36','2019-06-14 00:09:53'),(8,'300009','24 Hrs. Urinary Albumin',NULL,'General','admin','Y','admin','A','2019-06-14 00:01:41',NULL),(9,'300010','24 Hrs. Urinary Calcium',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:17',NULL),(10,'300011','24 Hrs. Urinary Chloride',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:17',NULL),(11,'300012','24 Hrs. Urinary Creatinine',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:17',NULL),(12,'300013','24 Hrs. Urinary Phosphorus',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:17',NULL),(13,'300014','24 Hrs. Urinary Potassium',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:17',NULL),(14,'300015','24 Hrs. Urinary Protein',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:17',NULL),(15,'300016','24 Hrs. Urinary Sodium',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:17',NULL),(16,'300017','24 Hrs. Urinary Urea',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(17,'300018','24 Hrs. Urinary Uric Acid',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(18,'300019','Absolute Eosinophil Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(19,'300020','Absolute Lymphocyte Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(20,'300021','Absolute Neutrophil Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(21,'300022','Acid Fast Bacilli',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(22,'300023','Acid Phosphatase',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(23,'300024','Adenosine Deaminase (ADA), Ascitic Fluid',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(24,'300025','Albumin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(25,'300026','Albumin-Creatinine Ratio',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(26,'300027','Aldehyde Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(27,'300028','ALFA FETO-PROTEIN',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(28,'300029','Alkaline Phosphatase',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(29,'300030','AMH Plus (AMH, LH, Prolactin, Oestradiol)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(30,'300031','Amylase',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:18',NULL),(31,'300032','ANA &amp; Anti-ds DNA',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(32,'300033','Anti CCP',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(33,'300034','Anti ds DNA',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(34,'300035','Anti HBe',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(35,'300036','Anti HBs',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(36,'300037','Anti Jo-1 Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(37,'300038','Anti Nuclear Antibody-IFA',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(38,'300039','Anti Nuclear Antibody (ANA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(39,'300040','Anti RNP/Sm Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(40,'300041','Anti Scl-70 Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(41,'300042','Anti Smith Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(42,'300043','Anti SS-B/La Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(43,'300044','Anti Thyroglobulin Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(44,'300045','Anti Thyroid Peroxidase (TPO) Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(45,'300046','Antifungal Susceptibility for Yeast',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(46,'300047','Anti-Mullerian Hormone (US)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(47,'300048','Anti-Tubercular Drug Sensitivity, 10 Drugs Panel',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(48,'300049','Anti-Tubercular Drug Sensitivity, 4 Drugs Panel',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(49,'300050','Anti-Tubercular Drug Sensitivity, 5 Drugs Panel',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(50,'300051','Arterial Blood Gas Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:19',NULL),(51,'300052','Ascitic Fluid Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(52,'300053','Ascitic Fluid Malignant Cell',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(53,'300054','Aspiration Cytology',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(54,'300055','BAL Fluid Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(55,'300056','Bence Jones Protein',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(56,'300057','Beta-HCG (Human Chorionic Gonadotropin)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(57,'300058','Bicarbonate',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(58,'300059','Bilirubin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(59,'300060','Blast Cells',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(60,'300061','Blood for Microfilaria by QBC',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(61,'300062','Blood Grouping',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(62,'300063','Blood Smear',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(63,'300064','Bone Marrow Examination',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(64,'300065','Bronchial Wash Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(65,'300066','Bronchial Wash Analysis with Cytology',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:20',NULL),(66,'300067','BUN',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(67,'300068','CA-125',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(68,'300069','CA 19-9; Pancreatic Cancer Marker',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(69,'300070','Calcium, Ionized',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(70,'300071','Calcium, Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(71,'300072','CAPD Fluid Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(72,'300073','Carbon di-oxide',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(73,'300074','Carcino-Embryonic Antigen (CEA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(74,'300075','Cardiac Serum Profile',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(75,'300076','Cardiac Serum Profile (with CRP-US)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(76,'300077','Cervical Smear',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(77,'300078','Cervical Smear (Liquid Based)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(78,'300079','Chloride',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(79,'300080','Cholesterol, Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(80,'300081','CK-MB (ECLIA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(81,'300082','Clot Retraction Time',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(82,'300083','Cold Agglutinin (Cryoglobulin)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(83,'300084','Complete Haemogram (CHG / CBC)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(84,'300085','Conjugated Bilirubin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(85,'300086','C-peptide',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(86,'300087','C-Reactive Protein',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(87,'300088','C-Reactive Protein-hs',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:21',NULL),(88,'300089','Creatine Kinase-MB',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(89,'300090','Creatine Phosphokinase (CPK)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(90,'300091','Creatinine',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(91,'300092','Creatinine Clearance Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(92,'300093','Creatinine, CAPD Fluid',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(93,'300094','Crossmatching',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(94,'300095','Cryptococcus Antigen',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(95,'300096','Culture And Sensitivity',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(96,'300097','Culture And Sensitivity (Blood)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(97,'300098','Culture for Mycobacteria',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(98,'300099','Cytological Examination',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(99,'300100','Cytomegalovirus Antibodies (IgG &amp; IgM)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(100,'300101','Cytomegalovirus Antibody (IgG)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(101,'300102','Cytomegalovirus Antibody (IgM)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(102,'300103','Dengue Fever Combo Panel',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(103,'300104','Differential Leucocyte Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(104,'300105','Direct Coombs Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(105,'300106','Electrolytes',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(106,'300107','ENA Screen',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(107,'300108','Enterocheck-WB',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(108,'300109','Erythrocyte Sedimentation Rate',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(109,'300110','Examination of CSF',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(110,'300111','Examination of Faeces',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:22',NULL),(111,'300112','Faecal Occult Blood',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(112,'300113','Faecal Reducing Substance',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(113,'300114','Ferritin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(114,'300115','First Trimester Screen',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(115,'300116','Flow Cytometry-Acute Leukemia (Subtyping)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(116,'300117','FNAC (CT-guided)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(117,'300118','FNAC (Ultrasound-guided)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(118,'300119','Foetal Haemoglobin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(119,'300120','Folate / Folic Acid',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(120,'300121','Follicle Stimulating Hormone (FSH)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(121,'300122','Free Beta-HCG',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(122,'300123','Fungal Culture',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(123,'300124','Fungal Study',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(124,'300125','Fungal Study (Nail Clipping)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(125,'300126','Fungal Study (Skin Scrapping)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(126,'300127','GAD-65 (Glutamic Acid Decarboxylase-65)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(127,'300128','Gall Bladder Stone Analysis (FTIR)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(128,'300129','Gamma GT',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(129,'300130','Globulin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(130,'300131','Glucose Challenge Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(131,'300132','Glucose Tolerance Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(132,'300133','Glucose Tolerance Test (100 gms)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(133,'300134','Glucose Tolerance Test, 2Hrs',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(134,'300135','Glucose Tolerance Test, 3 Hrs',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(135,'300136','Glucose, Fasting',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:23',NULL),(136,'300137','Glucose, Post Prandial',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(137,'300138','Glucose, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(138,'300139','Glucose-6-P-Dehydrogenase',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(139,'300140','Glycosylated Haemoglobin (HbA1c)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(140,'300141','Gram Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(141,'300142','Haemoglobin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(142,'300143','Haemoglobin Electrophoresis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(143,'300144','Haemogram',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(144,'300145','Hanging Drop Preparation',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(145,'300146','HBsAg (Australia Antigen)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(146,'300147','HBsAg (ELFA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(147,'300148','HCV Antibody (ELFA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(148,'300149','HDL Cholesterol',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(149,'300150','Hepatitis A (HAV)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(150,'300151','Hepatitis A Virus (HAV), IgG',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(151,'300152','Hepatitis A Virus (HAV), IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(152,'300153','Hepatitis A Virus, IgM (ELFA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(153,'300154','Hepatitis A Virus, IgM and Total (ELFA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(154,'300155','Hepatitis A Virus, Total (ELFA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(155,'300156','Hepatitis B  Vaccine (Adult)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(156,'300157','Hepatitis B  Vaccine (Child)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(157,'300158','Hepatitis B Core Antibody (Anti HBc), IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(158,'300159','Hepatitis B Core Antibody (Anti HBc), Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:24',NULL),(159,'300160','Hepatitis B Virus, DNA Qualitative',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(160,'300161','Hepatitis B Virus, DNA Quantitative',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(161,'300162','Hepatitis Be Antigen',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(162,'300163','Hepatitis C Viral RNA, Genotype',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(163,'300164','Hepatitis C Viral,  PCR-Qualitative',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(164,'300165','Hepatitis C Virus Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(165,'300166','Hepatitis C Virus Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(166,'300167','Hepatitis C Virus RNA RT PCR-Quantitative',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(167,'300168','Hepatitis E Virus IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(168,'300169','Herpes Simplex (II) IgG Ab',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(169,'300170','Herpes Simplex Antibodies I &amp; II (IgG &amp; IgM)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(170,'300171','Herpes Simplex Antibodies IgG &amp; IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(171,'300172','Herpes Simplex I&amp;II IgG Ab. (ECLIA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(172,'300173','Herpes Simplex( I&amp;II) IgM Ab.',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(173,'300174','Herpes Simplex(I) IgG Ab.',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(174,'300175','Histopathology (Renal Biopsy)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(175,'300176','Histopathology Exam (Big)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(176,'300177','Histopathology Exam (Block)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(177,'300178','Histopathology Exam (Colonoscopic Biopsy)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(178,'300179','Histopathology Exam (Endoscopic Biopsy)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(179,'300180','Histopathology Exam (Frozen Section)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(180,'300181','Histopathology Exam (Medium)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(181,'300182','Histopathology Exam (Slide Review)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:25',NULL),(182,'300183','Histopathology Exam (Small)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(183,'300184','Histopathology Exam, Bone Biopsy',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(184,'300185','Histopathology Exam, Liver Biopsy',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(185,'300186','Histopathology, Bone Marrow Trephine Biopsy',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(186,'300187','Histopathology, Complex/Cancer Specimen',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(187,'300188','Histopathology, DIF, Kidney Biopsy',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(188,'300189','Histopathology, DIF, Skin Biopsy',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(189,'300190','Histopathology, DIF, Skin Biopsy Panel',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(190,'300191','Histopathology, DIF, Skin Biopsy, C1q',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(191,'300192','Histopathology, DIF, Skin Biopsy, C3',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(192,'300193','Histopathology, DIF, Skin Biopsy, IgA',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(193,'300194','Histopathology, DIF, Skin Biopsy, IgA &amp; IgG',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(194,'300195','Histopathology, DIF, Skin Biopsy, IgG',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(195,'300196','Histopathology, DIF, Skin Biopsy, IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(196,'300197','Histopathology, Hirschprung Disease',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(197,'300198','Histopathology, Nerve Biopsy',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(198,'300199','Histopathology, Skin Biopsy',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(199,'300200','Histopathology, Skin Biopsy (Two Sites)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(200,'300201','HIV PRO VIRAL DNA PCR',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(201,'300202','HIV RNA Real Time PCR-Quantitative',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(202,'300203','Human Papilloma Virus (HPV)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(203,'300204','Immucheck TB Platinum',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(204,'300205','Immunohistochemistry Marker, Calretinin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(205,'300206','Immunohistochemistry Marker, CD 117',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(206,'300207','Immunohistochemistry Marker, CD 15',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(207,'300208','Immunohistochemistry Marker, CD 20',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(208,'300209','Immunohistochemistry Marker, CD 3',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(209,'300210','Immunohistochemistry Marker, CD 30',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:26',NULL),(210,'300211','Immunohistochemistry Marker, CD 34',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(211,'300212','Immunohistochemistry Marker, CD 45 (Leucocyte Common Antigen/LCA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(212,'300213','Immunohistochemistry Marker, CD 99',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(213,'300214','Immunohistochemistry Marker, c-erb B2/Her-2/neu',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(214,'300215','Immunohistochemistry Marker, Cytokeratin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(215,'300216','Immunohistochemistry Marker, Desmin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(216,'300217','Immunohistochemistry Marker, Estrogen Receptor (ER)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(217,'300218','Immunohistochemistry Marker, HMB-45',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(218,'300219','Immunohistochemistry Marker, Pancytokeratin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(219,'300220','Immunohistochemistry Marker, Progesterone Receptor (PR)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(220,'300221','Immunohistochemistry Marker, S100',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(221,'300222','Immunohistochemistry Marker, SMA',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(222,'300223','Immunohistochemistry Marker, Synaptophysin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(223,'300224','Immunohistochemistry Marker, TTF-1',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(224,'300225','Immunohistochemistry Marker, Vimentin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(225,'300226','India Ink Preparation',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(226,'300227','Indirect Coombs Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(227,'300228','International Normalised Ratio (INR)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(228,'300229','Iron',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:27',NULL),(229,'300230','Iron,TIBC,UIBC',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(230,'300231','Kidney Function Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(231,'300232','L.E.Cell Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(232,'300233','Lactate Dehydrogenase',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(233,'300234','LDL Cholesterol',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(234,'300235','Leutinising Hormone (LH)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(235,'300236','Lipase',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(236,'300237','Lipid Profile',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(237,'300238','Liver Function Tests',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(238,'300239','Lymphocyte Enumeration (CD4 &amp; CD3)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(239,'300240','Magnesium',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(240,'300241','Malaria Parasite (Digital Cytometry)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(241,'300242','Malarial Parasite',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(242,'300243','Malarial Parasite (Smear)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(243,'300244','Malignant Cell (Body fluid, Sputum &amp; Urinary)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(244,'300245','Microalbuminuria',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(245,'300246','Mycobacterium Tuberculosis PCR (MTB PCR)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(246,'300247','Nasal Discharge Eosinophil',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(247,'300248','Neo Natal Septic Screen',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(248,'300249','Oestradiol',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(249,'300250','Optimal Rapid Malaria Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:28',NULL),(250,'300251','Osmolality, Urine',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(251,'300252','Osmotic Fragility Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(252,'300253','Ova and Cyst',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(253,'300254','PAPP-A',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(254,'300255','Partial Thromboplastin Time',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(255,'300256','PCOD (Polycystic Ovarian Disease) Panel',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(256,'300257','Pericardial Fluid Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(257,'300258','Phosphorus',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(258,'300259','Plasma Hb',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(259,'300260','Platelet Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(260,'300261','Pleural Fluid Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(261,'300262','Potassium',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(262,'300263','Procalcitonin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(263,'300264','Progesterone',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(264,'300265','Prolactin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(265,'300266','Prostate Specific Ag. (PSA)- Free',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(266,'300267','Prostate Specific Ag. (PSA) -Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(267,'300268','Protein',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:29',NULL),(268,'300269','Protein Electrophoresis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(269,'300270','Prothrombin Time',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(270,'300271','Qualitative GB Stone Analysis by FTIR',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(271,'300272','Quantitative Renal Stone Analysis by FTIR',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(272,'300273','RET(Elisa Test)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(273,'300274','Reticulocyte Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(274,'300275','Reticulocyte Production Index (RPI)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(275,'300276','Rheumatoid Factor',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(276,'300277','Rubella Antibodies IgG &amp; IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(277,'300278','Rubella Antibody IgG',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(278,'300279','Rubella Antibody IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(279,'300280','Scrub Typhus Antibody',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(280,'300281','Semen Analysis By SQA V',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(281,'300282','Serological Test For Paragonimiasis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(282,'300283','Serum Free T3 + T4',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(283,'300284','Serum IgE-Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(284,'300285','Serum Osmolality',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(285,'300286','Serum Pleural Albumin Gradient',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(286,'300287','Serum Total Bilirubin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(287,'300288','Serum Total Protein',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(288,'300289','SGOT',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(289,'300290','SGPT',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:30',NULL),(290,'300291','Sickling Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(291,'300292','Slit Skin Smear',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(292,'300293','Sodium',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(293,'300294','Sodium, Sweat',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(294,'300295','Special Stain-Amyloid Stain, Congo Red',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(295,'300296','Special Stain-Giemsa Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(296,'300297','Special Stain-Masson Trichrome Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(297,'300298','Special Stain-Modified Z.N. Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(298,'300299','Special Stain-Papanicoloau Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(299,'300300','Special Stain-Periodic Acid Schiff Stain (PAS)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(300,'300301','Special Stain-Van Giesons Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(301,'300302','Special Stain-Verhoeff Van Giesons Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(302,'300303','Special Stain-von Kossa Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(303,'300304','Special Stain-Wade Fite Faraco Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(304,'300305','Special Stain-Ziehl Neelson Stain',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(305,'300306','Sucrose Lysis Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(306,'300307','Synovial Fluid Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(307,'300308','Syphicheck',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(308,'300309','T3, Free',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(309,'300310','T3, Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(310,'300311','T4, Free',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:31',NULL),(311,'300312','T4, Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(312,'300313','TESTING',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(313,'300314','Testosterone',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(314,'300315','Thyroid Hormones (Free T3,T4 &amp;TSH)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(315,'300316','Thyroid Hormones (T3 &amp; T4 )',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(316,'300317','Thyroid Hormones (T3 ,T4 &amp; TSH)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(317,'300318','Thyroid Stimulating Hormone',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(318,'300319','Torch Panel',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(319,'300320','Total Granulocyte Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(320,'300321','Total Iron Binding Capacity',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(321,'300322','Total Leucocyte Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(322,'300323','Total RBC Count',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(323,'300324','Toxoplasma Antibodies IgG &amp; IgM',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(324,'300325','Toxoplasma Antibody (IgG)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(325,'300326','Toxoplasma Antibody (IgM)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(326,'300327','Toxoplasma IgG &amp; IgM Ab. (ECLIA)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(327,'300328','Triglycerides',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(328,'300329','TRIPLE &nbsp;TEST',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(329,'300330','Troponin-I Ultra',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(330,'300331','Troponin-T',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(331,'300332','TYPHI Antibody Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(332,'300333','TYPHI Antibody Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(333,'300334','Typhidot',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(334,'300335','Unconjugated Bilirubin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:32',NULL),(335,'300336','Urea',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(336,'300337','Urea, CAPD Fluid',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(337,'300338','Urease Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(338,'300339','Uric acid',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(339,'300340','Urinary 17-Ketosteroid',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(340,'300341','Urinary Albumin, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(341,'300342','Urinary Amylase, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(342,'300343','Urinary Bile Pigment',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(343,'300344','Urinary Bile Salt',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(344,'300345','Urinary Calcium, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(345,'300346','Urinary Chloride, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(346,'300347','Urinary Creatinine, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(347,'300348','Urinary DPD (Deoxy pyridinoline)',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(348,'300349','Urinary Hb',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(349,'300350','Urinary Ketone Bodies',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(350,'300351','Urinary Magnesium',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(351,'300352','Urinary NTx',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(352,'300353','Urinary Phosphorus, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(353,'300354','Urinary Potassium, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(354,'300355','Urinary Protein Creatinine Ratio',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(355,'300356','Urinary Protein, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(356,'300357','Urinary Sodium, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(357,'300358','Urinary Specific Gravity',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(358,'300359','Urinary Urea, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:33',NULL),(359,'300360','Urinary Uric Acid, Random',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(360,'300361','Urine Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(361,'300362','Urine Crosslaps EIA',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(362,'300363','Urine Protein',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(363,'300364','Urine Sugar',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(364,'300365','Urobilinogen',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(365,'300366','Vaginal Swab',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(366,'300367','VDRL',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(367,'300368','Venous Blood Gas Analysis',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(368,'300369','Vitamin B12',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(369,'300370','Vitamin D Total',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(370,'300371','VLDL CHOLESTEROL',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(371,'300372','Weil Felix',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(372,'300373','Widal Test',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(373,'300374','Xpert MTB Plus Rifampicin',NULL,'General','admin','Y','admin','A','2019-06-14 00:08:34',NULL),(379,'300379','test for-dash test','fddd','General','admin','N',NULL,'D','2019-06-15 08:44:44','2019-06-15 08:45:17');
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
-- Table structure for table `d_new_patient_otp`
--

DROP TABLE IF EXISTS `d_new_patient_otp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_new_patient_otp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_session_id` varchar(45) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_new_patient_otp`
--

LOCK TABLES `d_new_patient_otp` WRITE;
/*!40000 ALTER TABLE `d_new_patient_otp` DISABLE KEYS */;
INSERT INTO `d_new_patient_otp` VALUES (52,'puDI3xOHDe','9856013263','296477','2019-06-29 22:36:35',3,'2019-06-29','OTP for Registration is 296477','N','A','2019-06-29 22:06:35',NULL),(53,'ljRypjiTHc','9856013268','581025','2019-06-29 22:51:50',2,'2019-06-29','OTP for Registration is 581025','N','A','2019-06-29 22:21:50',NULL),(54,'sgqfgncBWK','9856013268','530648','2019-06-29 23:05:42',2,'2019-06-29','OTP for Registration is 530648','N','A','2019-06-29 22:35:42',NULL),(55,'h7OKlFRps3','9856013269','441497','2019-06-29 23:30:27',2,'2019-06-29','OTP for Registration is 441497','N','A','2019-06-29 23:00:28',NULL),(56,'q8PLwmgrkn','9863773882','263442','2019-06-29 23:57:33',1,'2019-06-29','OTP for Registration is 263442','N','A','2019-06-29 23:27:33',NULL),(57,'EP3EEYsj42','8934843687','478683','2019-06-30 00:00:54',2,'2019-06-29','OTP for Registration is 478683','N','A','2019-06-29 23:30:54',NULL),(58,'ZkxuewgO2M','6798839898','894488','2019-06-30 07:22:43',2,'2019-06-30','OTP for Registration is 894488','Y','V','2019-06-30 06:52:43',NULL),(59,'vGuc5FJRe7','3452345234','871004','2019-06-30 07:31:13',1,'2019-06-30','OTP for Registration is 871004','Y','V','2019-06-30 07:01:13',NULL),(60,'vGuc5FJRe7','3452345234','898595','2019-06-30 07:35:17',1,'2019-06-30','OTP for Registration is 898595','Y','V','2019-06-30 07:05:17',NULL),(61,'dJhtjvachY','4543252345','039899','2019-06-30 07:36:04',1,'2019-06-30','OTP for Registration is 039899','Y','V','2019-06-30 07:06:04',NULL),(62,'V3zJRw0TVy','9986766465','448963','2019-06-30 07:39:03',1,'2019-06-30','OTP for Registration is 448963','Y','V','2019-06-30 07:09:04',NULL),(63,'GtNsS5j6L0','4365356345','996064','2019-06-30 07:41:36',1,'2019-06-30','OTP for Registration is 996064','Y','V','2019-06-30 07:11:36',NULL),(64,'HbEbAMxMwB','9345567389','532105','2019-06-30 10:26:43',1,'2019-06-30','OTP for Registration is 532105','Y','V','2019-06-30 09:56:43',NULL),(65,'eqiOOmFHIO','9774308994','168392','2019-06-30 10:28:54',1,'2019-06-30','OTP for Registration is 168392','N','A','2019-06-30 09:58:54',NULL),(66,'NkowSd9Q5q','9774308994','173793','2019-06-30 10:29:26',1,'2019-06-30','OTP for Registration is 173793','Y','V','2019-06-30 09:59:27',NULL),(67,'9UrUaAUd22','8837726222','144753','2019-06-30 10:44:55',1,'2019-06-30','OTP for Registration is 144753','Y','V','2019-06-30 10:14:55',NULL),(68,'zOwoiLSWe9','9774308994','791081','2019-06-30 10:45:45',1,'2019-06-30','OTP for Registration is 791081','Y','V','2019-06-30 10:15:45',NULL),(69,'Bbd4nZMCmw','9774308994','725752','2019-06-30 13:49:42',3,'2019-06-30','OTP for Registration is 725752','N','A','2019-06-30 13:19:42',NULL),(70,'DViiGvLMPy','9774308994','983180','2019-06-30 21:36:11',3,'2019-06-30','OTP for Registration is 983180','N','A','2019-06-30 21:06:11',NULL),(71,'PcyjExAwQ3','9774308994','685698','2019-06-30 21:38:25',1,'2019-06-30','OTP for Registration is 685698','Y','V','2019-06-30 21:08:25',NULL),(72,'H0QM74lork','9774308994','110127','2019-06-30 22:00:08',1,'2019-06-30','OTP for Registration is 110127','Y','V','2019-06-30 21:30:08',NULL),(73,'km1M4U2iAf','9774308994','102422','2019-06-30 22:10:08',1,'2019-06-30','OTP for Registration is 102422','Y','V','2019-06-30 21:40:08',NULL),(74,'coY3YTiQNI','9774308994','540278','2019-06-30 22:10:37',1,'2019-06-30','OTP for Registration is 540278','Y','V','2019-06-30 21:40:37',NULL),(75,'EDfn24Ouki','9774308994','712482','2019-06-30 22:11:05',1,'2019-06-30','OTP for Registration is 712482','Y','V','2019-06-30 21:41:05',NULL),(76,'hMiZwIU2G1','9774308994','937728','2019-06-30 22:19:53',1,'2019-06-30','OTP for Registration is 937728','Y','V','2019-06-30 21:49:53',NULL),(77,'ud9efHaBkU','9774308994','499346','2019-06-30 22:34:33',1,'2019-06-30','OTP for Registration is 499346','N','A','2019-06-30 22:04:33',NULL),(78,'ImkqWVRKDm','9774308994','161847','2019-06-30 22:39:13',1,'2019-06-30','OTP for Registration is 161847','Y','V','2019-06-30 22:09:13',NULL),(79,'qaP1Kb0r1I','9774308994','841022','2019-06-30 22:43:07',1,'2019-06-30','OTP for Registration is 841022','Y','V','2019-06-30 22:13:07',NULL),(80,'yCM9CnrHOj','9774308994','173227','2019-06-30 22:53:59',1,'2019-06-30','OTP for Registration is 173227','Y','V','2019-06-30 22:23:59',NULL),(81,'Fx1RoM7CoA','9486789445','210887','2019-06-30 23:01:37',1,'2019-06-30','OTP for Registration is 210887','Y','V','2019-06-30 22:31:37',NULL),(82,'U5r5iu22eU','9774308994','418086','2019-06-30 23:02:48',1,'2019-06-30','OTP for Registration is 418086','Y','V','2019-06-30 22:32:48',NULL),(83,'pLApJxK3rb','9774308994','891163','2019-07-01 22:12:01',2,'2019-07-01','OTP for Registration is 891163','N','A','2019-07-01 21:42:01',NULL),(84,'yoKmh751R5','9774308994','524252','2019-07-01 22:18:21',1,'2019-07-01','OTP for Registration is 524252','N','A','2019-07-01 21:48:21',NULL),(85,'DkJusK8y1U','9774308994','234942','2019-07-01 22:21:47',1,'2019-07-01','OTP for Registration is 234942','N','A','2019-07-01 21:51:47',NULL),(86,'q8K4VXxtMm','9774308994','416691','2019-07-01 22:27:58',1,'2019-07-01','OTP for Registration is 416691','N','A','2019-07-01 21:57:58',NULL),(87,'FEZdydcdp0','9774308994','058456','2019-07-01 22:29:05',1,'2019-07-01','OTP for Registration is 058456','N','A','2019-07-01 21:59:05',NULL),(88,'LadY6ejUJw','9774308994','733965','2019-07-01 22:30:56',1,'2019-07-01','OTP for Registration is 733965','N','A','2019-07-01 22:00:56',NULL),(89,'hySRmtdgVi','9774308994','321631','2019-07-01 22:49:03',1,'2019-07-01','OTP for Registration is 321631','N','A','2019-07-01 22:19:03',NULL),(90,'MyEXybeunu','9774308994','612089','2019-07-01 22:49:58',1,'2019-07-01','OTP for Registration is 612089','N','A','2019-07-01 22:19:58',NULL),(91,'1iBigvrNW6','9774308994','820321','2019-07-01 23:00:27',1,'2019-07-01','OTP for Registration is 820321','N','A','2019-07-01 22:30:27',NULL),(92,'CdGmYIqDKz','9774308994','236441','2019-07-01 23:10:44',1,'2019-07-01','OTP for Registration is 236441','N','A','2019-07-01 22:40:44',NULL),(93,'fiakuLfQsA','9774308994','380500','2019-07-01 23:12:10',1,'2019-07-01','OTP for Registration is 380500','N','A','2019-07-01 22:42:10',NULL),(94,'70OlN7Kzk2','9774308994','322297','2019-07-01 23:39:17',1,'2019-07-01','OTP for Registration is 322297','N','A','2019-07-01 23:09:17',NULL),(95,'ijAWkeKvqQ','9774308994','710921','2019-07-01 23:40:16',1,'2019-07-01','OTP for Registration is 710921','N','A','2019-07-01 23:10:16',NULL),(96,'1IAVvZkhkE','9774308994','775672','2019-07-01 23:44:44',1,'2019-07-01','OTP for Registration is 775672','N','A','2019-07-01 23:14:44',NULL),(97,'tgafMFQfpW','9774308994','490810','2019-07-01 23:51:35',1,'2019-07-01','OTP for Registration is 490810','N','A','2019-07-01 23:21:35',NULL),(98,'ESfq61fIhJ','9774308994','629187','2019-07-02 00:01:50',1,'2019-07-01','OTP for Registration is 629187','Y','V','2019-07-01 23:31:51',NULL),(99,'hoih2Ah7QY','9774308994','011629','2019-07-02 00:04:49',1,'2019-07-01','OTP for Registration is 011629','N','A','2019-07-01 23:34:51',NULL),(100,'m2bNhXvklo','9774308994','874219','2019-07-02 00:08:13',1,'2019-07-01','OTP for Registration is 874219','N','A','2019-07-01 23:38:15',NULL),(101,'KCIaP5Mggh','9774308994','392588','2019-07-02 00:15:27',1,'2019-07-01','OTP for Registration is 392588','N','A','2019-07-01 23:45:29',NULL),(102,'Tq9KmfFAiF','9774308994','438687','2019-07-02 00:25:22',1,'2019-07-01','OTP for Registration is 438687','Y','V','2019-07-01 23:55:24',NULL),(103,'CBuyaJoU4E','9774308994','837586','2019-07-02 00:45:37',1,'2019-07-02','OTP for Registration is 837586','N','A','2019-07-02 00:15:38',NULL),(104,'68v6a6SpLg','9774308994','301253','2019-07-02 00:47:57',1,'2019-07-02','OTP for Registration is 301253','N','A','2019-07-02 00:17:58',NULL),(105,'ZEgouvZLk6','9774308994','413256','2019-07-02 00:51:55',1,'2019-07-02','OTP for Registration is 413256','N','A','2019-07-02 00:21:57',NULL),(106,'jfcKIWyQh3','9774308994','716850','2019-07-02 00:53:45',1,'2019-07-02','OTP for Registration is 716850','N','A','2019-07-02 00:23:46',NULL),(107,'pXcksSzzPF','9862773881','665664','2019-07-02 00:57:20',1,'2019-07-02','OTP for Registration is 665664','Y','V','2019-07-02 00:27:21',NULL);
/*!40000 ALTER TABLE `d_new_patient_otp` ENABLE KEYS */;
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
  `patient_dob` date DEFAULT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `record_created_by` varchar(500) NOT NULL,
  `record_status` varchar(10) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_patient_info`
--

LOCK TABLES `d_patient_info` WRITE;
/*!40000 ALTER TABLE `d_patient_info` DISABLE KEYS */;
INSERT INTO `d_patient_info` VALUES (1,5000019,'aertwertw','wertwert',NULL,'7654322222','self','A','2019-06-07 19:55:08','0000-00-00 00:00:00'),(2,5000020,'53637','vdhshd',NULL,'6388282','self','A','2019-06-07 20:01:40','0000-00-00 00:00:00'),(3,5000021,'Radhika Lama Das','Amtali, Agartala, West Tripura',NULL,'9856013261','self','A','2019-06-09 01:07:15','0000-00-00 00:00:00'),(4,5000022,'Radhika Lama Das','Amtali, Agartala, West Tripura',NULL,'9856013261','self','A','2019-06-10 05:48:24','0000-00-00 00:00:00'),(5,5000023,'Test Patient','Amtali, Agartala, West Tripura',NULL,'9774308994','self','A','2019-06-11 19:15:25','0000-00-00 00:00:00'),(6,5000024,'fsdfsdf','sdfsdf',NULL,'9774308994','self','A','2019-06-11 19:20:39','0000-00-00 00:00:00'),(7,5000025,'dhdghdfgh','dfhdfgh',NULL,'9774308994','self','A','2019-06-13 00:08:14','0000-00-00 00:00:00'),(8,5000026,'ssfs','sfsfsf',NULL,'9856013261','self','A','2019-06-13 00:08:49','0000-00-00 00:00:00'),(9,5000027,'asdfasd','afasdfasdf',NULL,'asdfasdf','self','A','2019-06-15 19:45:16','0000-00-00 00:00:00'),(10,5000028,'eafzhxgn','ghsfgh',NULL,'sfghfdsgh','self','A','2019-06-15 19:45:46','0000-00-00 00:00:00'),(11,5000029,'xdfgsd','fgsdfg',NULL,'sdfgsdfg','self','A','2019-06-15 19:46:05','0000-00-00 00:00:00'),(12,5000030,'sdfsdf','sdfsdfsf',NULL,'sdfsdfsd','self','A','2019-06-15 19:46:28','0000-00-00 00:00:00'),(13,5000031,'dghdfgh','dghdfghd',NULL,'dfghdfgh','self','A','2019-06-15 19:46:52','0000-00-00 00:00:00'),(14,5000032,'gsfgs','sfgsfgsdfg',NULL,'3453453453453','self','A','2019-06-16 19:58:11','0000-00-00 00:00:00'),(15,5000033,'sgsdfgsd','sdfgsdfgsdfgsfdgf',NULL,'63456345','self','A','2019-06-16 19:59:35','0000-00-00 00:00:00'),(16,5000034,'sasfg','sdfgsdfgsdfg',NULL,'35234345345','self','A','2019-06-16 20:02:44','0000-00-00 00:00:00'),(17,5000035,'dsdf','dfgdfg',NULL,'345345345','self','A','2019-06-17 00:00:58','0000-00-00 00:00:00'),(18,5000036,'CHINMAY BISWAS','TMC ROAD, HAPANIA, 1st FLOOR OF UBI ATM, AGARTALA, WEST TRIPURA',NULL,'9862804507','self','A','2019-06-17 22:30:07','0000-00-00 00:00:00'),(19,5000037,'CHINMAY BISWAS','TMC ROAD, HAPANIA, 1st FLOOR OF UBI ATM, AGARTALA, WEST TRIPURA',NULL,'9862804507','self','A','2019-06-17 22:33:21','0000-00-00 00:00:00'),(20,5000057,'sdfgsdfgsdfg','sfsdfsdf','1900-11-11','3452345234','self','A','2019-06-30 07:05:17','0000-00-00 00:00:00'),(21,5000058,'wwrtwertwrt','sdfgsdfgsdfg','2019-06-19','4543252345','self','A','2019-06-30 07:06:04','0000-00-00 00:00:00'),(22,5000058,'wwrtwertwrt','sdfgsdfgsdfg','2019-06-19','4543252345','self','A','2019-06-30 07:06:04','0000-00-00 00:00:00'),(23,5000059,'afsdfgsdfg','sdfgsdfgds','2019-06-12','9986766465','self','A','2019-06-30 07:09:04','0000-00-00 00:00:00'),(24,5000060,'356345634','456345634564','2019-06-12','4365356345','self','A','2019-06-30 07:11:36','0000-00-00 00:00:00'),(25,5000061,'sdfgsdfg','dasfgsdfgsdf','2019-06-18','9345567389','self','A','2019-06-30 09:56:44','0000-00-00 00:00:00'),(26,5000064,'Test today','sdfgdsfgsdf','2019-06-18','8837726222','self','A','2019-06-30 10:14:55','0000-00-00 00:00:00'),(27,5000065,'Radhika Lam','sdfgsdfgdffgdf','1990-08-10','9486789445','self','A','2019-06-30 22:31:37','0000-00-00 00:00:00'),(28,5000068,'dhdghdfgh','dfhdfgh',NULL,'9774308994','self','A','2019-06-30 22:34:45','0000-00-00 00:00:00'),(29,5000069,'adwert','wtrwertwert',NULL,'4356356345','self','A','2019-06-30 23:59:18','0000-00-00 00:00:00'),(30,5000070,'ssdfgsfgs','fgsdfgsdfg',NULL,'3453453345','self','A','2019-07-01 00:01:36','0000-00-00 00:00:00'),(31,5000071,'dhdghdfgh','dfhdfgh',NULL,'9774308994','self','A','2019-07-02 00:02:06','0000-00-00 00:00:00'),(32,5000072,'Debasish Das','Amtali, Uttar Madhya Para','1990-08-10','9862773881','self','A','2019-07-02 00:27:21','0000-00-00 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_redirect_url`
--

LOCK TABLES `d_redirect_url` WRITE;
/*!40000 ALTER TABLE `d_redirect_url` DISABLE KEYS */;
INSERT INTO `d_redirect_url` VALUES (2,'r.php?q=fgwUYW','modules/patient/afterappo.php?appoid=6',NULL,NULL,NULL,'Y','2019-06-12 07:45:59',NULL),(3,'r.php?q=vTYgpU','modules/patient/afterappo.php?appoid=8',NULL,NULL,NULL,'Y','2019-06-13 00:10:53',NULL),(15,'r.php?q=2Q3vak','modules/patient/afterappo.php','10',NULL,NULL,'Y','2019-06-15 23:16:40',NULL),(16,'r.php?q=K9Ol7A','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 20:09:54',NULL),(17,'r.php?q=MPPgPq','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 20:42:14',NULL),(18,'r.php?q=IDUvni','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 20:47:49',NULL),(19,'r.php?q=PqjGqJ','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 20:51:30',NULL),(20,'r.php?q=bxV8YI','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 21:08:54',NULL),(21,'r.php?q=yY1DwG','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 21:10:43',NULL),(22,'r.php?q=liUSGh','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 21:14:35',NULL),(23,'r.php?q=sG5Y2x','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 21:20:09',NULL),(24,'r.php?q=7ihNt3','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 21:54:02',NULL),(25,'r.php?q=BA6umN','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 22:06:38',NULL),(26,'r.php?q=rEv6kt','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 23:23:34',NULL),(27,'r.php?q=8RXpns','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 23:40:08',NULL),(28,'r.php?q=yVVyqw','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 23:42:27',NULL),(29,'r.php?q=hHIqD4','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 23:44:56',NULL),(30,'r.php?q=qHSQ0X','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 23:45:41',NULL),(31,'r.php?q=QP9FOj','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 23:49:11',NULL),(32,'r.php?q=M0gVqJ','modules/patient/afterappo.php','15',NULL,NULL,'Y','2019-06-16 23:52:29',NULL),(33,'r.php?q=nGVZR0','modules/patient/afterappo.php','18',NULL,NULL,'Y','2019-06-17 00:02:44',NULL),(34,'r.php?q=swF6oY','modules/patient/afterappo.php','18',NULL,NULL,'Y','2019-06-17 00:45:37',NULL),(35,'r.php?q=ny18IN','modules/patient/afterappo.php','18',NULL,NULL,'Y','2019-06-17 00:48:23',NULL),(36,'r.php?q=ZuXgkK','modules/patient/afterappo.php','20',NULL,NULL,'Y','2019-06-17 22:39:00',NULL),(37,'r.php?q=LlJxxD','modules/patient/afterappo.php','22',NULL,NULL,'Y','2019-07-01 22:15:18',NULL),(38,'r.php?q=Bssruf','modules/patient/afterappo.php','24',NULL,NULL,'Y','2019-07-02 00:11:22',NULL);
/*!40000 ALTER TABLE `d_redirect_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_sms_sent`
--

DROP TABLE IF EXISTS `d_sms_sent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `d_sms_sent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_body` varchar(500) DEFAULT NULL,
  `mob_number` varchar(45) DEFAULT NULL,
  `sent_status` varchar(45) DEFAULT NULL,
  `record_status` varchar(45) DEFAULT NULL,
  `record_created_on` datetime DEFAULT NULL,
  `record_updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_sms_sent`
--

LOCK TABLES `d_sms_sent` WRITE;
/*!40000 ALTER TABLE `d_sms_sent` DISABLE KEYS */;
INSERT INTO `d_sms_sent` VALUES (1,'Thank you for visiting : <Chamber Name>.  Please visit: http://localhost/hfactor/r.php?q=rEv6kt to find best labs arround you','',NULL,'A','2019-06-16 23:23:40',NULL),(2,'Thank you for visiting : <Chamber Name>.  Please visit: http://localhost/hfactor/r.php?q=yVVyqw to find best labs arround you','',NULL,'A','2019-06-16 23:42:41',NULL),(3,'Thank you for visiting : <Chamber Name>.  Please visit: http://localhost/hfactor/r.php?q=hHIqD4 to find best labs arround you','',NULL,'A','2019-06-16 23:45:05',NULL),(4,'Thank you for visiting : <Chamber Name>.  Please visit: http://localhost/hfactor/r.php?q=qHSQ0X to find best labs arround you','',NULL,'A','2019-06-16 23:48:09',NULL),(5,'Thank you for visiting : <Chamber Name>.  Please visit: http://localhost/hfactor/r.php?q=M0gVqJ to find best labs arround you','3453453453453',NULL,'A','2019-06-16 23:52:41',NULL),(6,'Thank you for visiting : <Chamber Name>.  Please visit: http://192.168.100.21/hfactor/r.php?q=ZuXgkK to find best labs arround you','9862804507',NULL,'A','2019-06-17 22:39:17',NULL),(7,'Thank you for visiting : <Chamber Name>.  Please visit: http://localhost/hfactor/r.php?q=Bssruf to find best labs arround you','9774308994',NULL,'A','2019-07-02 00:11:28',NULL);
/*!40000 ALTER TABLE `d_sms_sent` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_tests_recommended`
--

LOCK TABLES `d_tests_recommended` WRITE;
/*!40000 ALTER TABLE `d_tests_recommended` DISABLE KEYS */;
INSERT INTO `d_tests_recommended` VALUES (4,'200021','5000023','300004','A','2019-06-12 07:45:59',NULL),(5,'200021','5000023','300007','A','2019-06-12 07:45:59',NULL),(6,'200021','5000023','300008','A','2019-06-12 07:45:59',NULL),(7,'200021','5000025','300004','D','2019-06-13 00:10:53',NULL),(8,'200021','5000025','300007','D','2019-06-13 00:10:53',NULL),(9,'200021','5000025','300005','D','2019-06-13 00:10:53',NULL),(10,'200021','5000025','300004','A','2019-06-13 00:58:57',NULL),(11,'200021','5000025','300008','A','2019-06-13 00:58:57',NULL),(12,'200021','5000025','300006','A','2019-06-13 00:58:57',NULL),(13,'200021','5000027','300339','D','2019-06-15 20:11:02',NULL),(14,'200021','5000028','300062','D','2019-06-15 20:18:43',NULL),(15,'200021','5000028','300339','D','2019-06-15 20:18:43',NULL),(16,'200021','5000028','300062','A','2019-06-15 20:18:59',NULL),(17,'200021','5000028','300339','A','2019-06-15 20:19:00',NULL),(18,'200021','5000027','300051','D','2019-06-15 21:42:22',NULL),(19,'200021','5000027','300014','D','2019-06-15 21:42:22',NULL),(20,'200021','5000027','300051','D','2019-06-15 21:44:10',NULL),(21,'200021','5000027','300037','D','2019-06-15 21:44:10',NULL),(22,'200021','5000027','300169','D','2019-06-15 21:51:17',NULL),(23,'200021','5000027','300020','D','2019-06-15 21:51:17',NULL),(24,'200021','5000027','300023','D','2019-06-15 21:54:40',NULL),(25,'200021','5000027','300051','D','2019-06-15 21:54:40',NULL),(26,'200021','5000027','300023','D','2019-06-15 22:21:38',NULL),(27,'200021','5000027','300027','D','2019-06-15 22:21:38',NULL),(28,'200021','5000027','300056','D','2019-06-15 23:00:03',NULL),(29,'200021','5000027','300335','D','2019-06-15 23:00:03',NULL),(30,'200021','5000027','300156','D','2019-06-15 23:06:10',NULL),(31,'200021','5000027','300025','D','2019-06-15 23:06:10',NULL),(32,'200021','5000027','300013','A','2019-06-15 23:16:39',NULL),(33,'200021','5000027','300054','A','2019-06-15 23:16:39',NULL),(34,'200021','5000027','300062','A','2019-06-15 23:16:39',NULL),(35,'200021','5000027','300339','A','2019-06-15 23:16:39',NULL),(36,'200021','5000032','300062','D','2019-06-16 20:09:54',NULL),(37,'200021','5000032','300339','D','2019-06-16 20:09:54',NULL),(38,'200021','5000032','300062','D','2019-06-16 20:42:14',NULL),(39,'200021','5000032','300339','D','2019-06-16 20:42:14',NULL),(40,'200021','5000032','300062','D','2019-06-16 20:47:49',NULL),(41,'200021','5000032','300339','D','2019-06-16 20:47:49',NULL),(42,'200021','5000032','300062','D','2019-06-16 20:51:29',NULL),(43,'200021','5000032','300339','D','2019-06-16 20:51:29',NULL),(44,'200021','5000032','300062','D','2019-06-16 21:08:53',NULL),(45,'200021','5000032','300339','D','2019-06-16 21:08:54',NULL),(46,'200021','5000032','300062','D','2019-06-16 21:10:42',NULL),(47,'200021','5000032','300339','D','2019-06-16 21:10:42',NULL),(48,'200021','5000032','300062','D','2019-06-16 21:14:35',NULL),(49,'200021','5000032','300339','D','2019-06-16 21:14:35',NULL),(50,'200021','5000032','300062','D','2019-06-16 21:20:09',NULL),(51,'200021','5000032','300062','D','2019-06-16 21:54:01',NULL),(52,'200021','5000032','300062','D','2019-06-16 22:06:38',NULL),(53,'200021','5000032','300062','D','2019-06-16 23:23:34',NULL),(54,'200021','5000032','300062','D','2019-06-16 23:40:08',NULL),(55,'200021','5000032','300062','D','2019-06-16 23:42:27',NULL),(56,'200021','5000032','300062','D','2019-06-16 23:44:56',NULL),(57,'200021','5000032','300062','D','2019-06-16 23:45:41',NULL),(58,'200021','5000032','300062','D','2019-06-16 23:49:11',NULL),(59,'200021','5000032','300062','A','2019-06-16 23:52:29',NULL),(60,'200021','5000035','300062','D','2019-06-17 00:02:44',NULL),(61,'200021','5000037','300062','A','2019-06-17 22:39:00',NULL),(62,'200021','5000037','300339','A','2019-06-17 22:39:00',NULL),(63,'200021','5000069','300339','A','2019-07-01 22:15:18',NULL),(64,'200021','5000069','300062','A','2019-07-01 22:15:18',NULL),(65,'200021','5000071','300062','A','2019-07-02 00:11:22',NULL),(66,'200021','5000071','300339','A','2019-07-02 00:11:22',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_chamber_mapping`
--

LOCK TABLES `d_user_chamber_mapping` WRITE;
/*!40000 ALTER TABLE `d_user_chamber_mapping` DISABLE KEYS */;
INSERT INTO `d_user_chamber_mapping` VALUES (1,'debasish','200013','A','2019-05-30 01:12:32',NULL),(2,'mitandas','200016','A','2019-05-31 00:44:22',NULL),(3,'amit_1986','200019','A','2019-06-01 20:56:42',NULL),(4,'chamberuser1','200021','A','2019-07-01 00:03:15',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_info`
--

LOCK TABLES `d_user_info` WRITE;
/*!40000 ALTER TABLE `d_user_info` DISABLE KEYS */;
INSERT INTO `d_user_info` VALUES (1,'admin','Super Administrator','Agartala','debasishdas.agt@gmail.com','9774308994','N','2019-05-19','2019-05-19','2019-05-19 00:00:00','2019-05-29 02:16:32','D'),(2,'admin','Super Administrator','Agartala','debasishdas.agt@gmail.com','9774308994','N','2019-05-19','0000-00-00','2019-05-29 02:16:32','2019-05-29 02:18:58','D'),(3,'admin','Super Administrator','Agartala','debasishdas.agt@gmail.com','9862773881','N','2019-05-19','1990-08-10','2019-05-29 02:18:58',NULL,'A'),(5,'debasish','Debasish Das','Agartala, West Tripura','debasishdas.agt@gmail.com','9774308994','N','2019-05-30','1990-08-10','2019-05-30 01:12:31','2019-05-30 06:45:23','D'),(6,'debasish','Debasish Das','Amtali,Agartala, West Tripura','debasishdas.trp@gmail.com','9774308994','N','2019-05-30','1990-08-10','2019-05-30 06:45:23',NULL,'A'),(7,'cbiswas','Chinmoy Biswas','Hapania, agartala, West Tripura','cbiswas.agt@gmail.com','9774308992','N','2019-05-30','1990-05-23','2019-05-30 06:48:55',NULL,'A'),(8,'chinmoy','Chinmoy Biswas','Hapania, agartala, West Tripura','cbiswas.agt@gmail.com','9774308994','N','2019-05-30','1990-05-23','2019-05-30 07:15:00',NULL,'A'),(9,'mitandas','Mitan Das','Hapania','mitandas.trp@gmail.com','8656888','N','2019-05-31','1990-12-02','2019-05-31 00:44:22',NULL,'A'),(10,'amit_1986','AMIT PRADHAN','jogendranagae','baalamit@gmail.com','9774578321','N','2019-06-01','1986-03-03','2019-06-01 20:56:42',NULL,'A'),(11,'litan_1982','Litan Sharma','Amtali','esss@gmail.com','9862809865','N','2019-06-01','1993-02-15','2019-06-01 21:11:50',NULL,'A'),(12,'chamberuser1','Biswas Kutir 2 user','sfdsfs','','','N','2019-07-01','0000-00-00','2019-07-01 00:03:15',NULL,'A');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_password`
--

LOCK TABLES `d_user_password` WRITE;
/*!40000 ALTER TABLE `d_user_password` DISABLE KEYS */;
INSERT INTO `d_user_password` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','D',NULL,'2019-05-29 01:26:32'),(4,'admin','0192023a7bbd73250516f069df18b500','D','2019-05-29 01:26:32','2019-05-29 01:35:33'),(6,'admin','21232f297a57a5a743894a0e4a801fc3','A','2019-05-29 01:35:33',NULL),(7,'debasish','2eb5a42705deca5350087fe7f0621f57','D','2019-05-30 01:12:32','2019-05-30 06:45:46'),(8,'debasish','a8b0fcef262e4e95a728d675d944f1b0','A','2019-05-30 06:45:46','2019-05-30 23:56:51'),(9,'cbiswas','3557b855cfb822b7eadf7498fb9f581b','A','2019-05-30 06:48:55','2019-05-30 23:58:49'),(10,'chinmoy','f88ed22b8ef52a487b8c2d6fa8768ce7','A','2019-05-30 07:15:00','2019-05-30 23:56:45'),(11,'mitandas','0c17e9ef691b18325202cb58952cde6a','A','2019-05-31 00:44:22','2019-05-31 00:44:58'),(12,'amit_1986','2d15347f6f69a7ce09056577dd380a41','A','2019-06-01 20:56:42',NULL),(13,'litan_1982','c8837b23ff8aaa8a2dde915473ce0991','A','2019-06-01 21:11:51',NULL),(14,'chamberuser1','2eb5a42705deca5350087fe7f0621f57','A','2019-07-01 00:03:15',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_user_role`
--

LOCK TABLES `d_user_role` WRITE;
/*!40000 ALTER TABLE `d_user_role` DISABLE KEYS */;
INSERT INTO `d_user_role` VALUES (1,'admin','1001','D',NULL,'2019-05-29 01:00:19'),(3,'admin','1001','D','2019-05-29 01:00:19','2019-05-29 01:01:38'),(4,'admin','1002','D','2019-05-29 01:01:38','2019-05-29 01:01:47'),(5,'admin','1002','D','2019-05-29 01:01:47','2019-05-29 01:02:54'),(6,'admin','1001','A','2019-05-29 01:02:54',NULL),(8,'debasish','1003','A','2019-05-30 01:12:32',NULL),(9,'cbiswas','1002','A','2019-05-30 06:48:55',NULL),(10,'chinmoy','1002','A','2019-05-30 07:15:00',NULL),(11,'mitandas','1003','A','2019-05-31 00:44:22',NULL),(12,'amit_1986','1003','A','2019-06-01 20:56:42',NULL),(13,'litan_1982','1002','A','2019-06-01 21:11:51',NULL),(14,'chamberuser1','1003','A','2019-07-01 00:03:15',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab_test_mapping`
--

LOCK TABLES `lab_test_mapping` WRITE;
/*!40000 ALTER TABLE `lab_test_mapping` DISABLE KEYS */;
INSERT INTO `lab_test_mapping` VALUES (8,'400007','300002','500','D','2019-05-27 00:39:45','2019-05-27 01:12:27'),(9,'400007','300003','700','D','2019-05-27 00:39:59',NULL),(10,'400007','300004','300','D','2019-05-27 00:46:07',NULL),(11,'400007','300002','600','D','2019-05-27 01:13:06',NULL),(12,'400007','300007','500','D','2019-05-30 07:36:56',NULL),(13,'400007','300006','100','D','2019-05-30 07:37:10',NULL),(14,'400008','300006','100','D','2019-05-30 07:37:46',NULL),(15,'400008','300007','700','D','2019-05-30 07:37:53',NULL),(16,'400008','300002','900','D','2019-05-30 07:38:01',NULL),(17,'400009','300003','8700','D','2019-06-01 21:13:09',NULL),(18,'400009','300004','2800','D','2019-06-01 21:13:31',NULL),(19,'400009','300008','150','D','2019-06-01 21:19:53',NULL),(20,'400007','300062','300','A','2019-06-14 00:11:18',NULL),(21,'400007','300097','800','A','2019-06-14 00:11:27',NULL),(22,'400009','300062','200','A','2019-06-14 00:11:37',NULL),(23,'400009','300097','900','A','2019-06-14 00:11:50',NULL),(24,'400007','300339','1000','A','2019-06-14 00:12:02',NULL),(25,'400008','300339','900','A','2019-06-14 00:12:12',NULL),(26,'400008','300018','700','A','2019-06-14 00:12:21',NULL),(27,'400009','300360','800','A','2019-06-14 00:12:30',NULL),(28,'400007','300142','500','A','2019-06-14 00:14:37',NULL),(29,'400008','300143','700','A','2019-06-14 00:15:00',NULL),(30,'400009','300142','500','A','2019-06-14 00:15:07',NULL);
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
INSERT INTO `m_seq_num` VALUES (1,'Doctor',1,38,'A',NULL,NULL),(2,'Chamber',2,22,'A',NULL,NULL),(3,'Lab Test',3,380,'A',NULL,NULL),(4,'Lab',4,11,'A',NULL,NULL),(5,'Patient',5,73,'A',NULL,NULL);
/*!40000 ALTER TABLE `m_seq_num` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_sms_sent`
--

DROP TABLE IF EXISTS `m_sms_sent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `m_sms_sent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_body` varchar(140) DEFAULT NULL,
  `sms_sent_to` varchar(45) DEFAULT NULL,
  `sms_response` varchar(45) DEFAULT NULL,
  `sms_ref` varchar(500) DEFAULT NULL,
  `record_creted_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_sms_sent`
--

LOCK TABLES `m_sms_sent` WRITE;
/*!40000 ALTER TABLE `m_sms_sent` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_sms_sent` ENABLE KEYS */;
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
-- Temporary view structure for view `test_pricing`
--

DROP TABLE IF EXISTS `test_pricing`;
/*!50001 DROP VIEW IF EXISTS `test_pricing`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `test_pricing` AS SELECT 
 1 AS `test_id`,
 1 AS `test_name`,
 1 AS `lab_id`,
 1 AS `lab_name`,
 1 AS `test_rate`*/;
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_chamber_appointment`
--

LOCK TABLES `tmp_chamber_appointment` WRITE;
/*!40000 ALTER TABLE `tmp_chamber_appointment` DISABLE KEYS */;
INSERT INTO `tmp_chamber_appointment` VALUES (1,'zUtQusg8OS',1,5000002,'200020','16:00:00','22:00:00','2019-06-07','00:00:00','','','','A','2019-06-07 15:00:46','0000-00-00 00:00:00'),(2,'2nTTbRWf1n',1,5000003,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 15:21:04','0000-00-00 00:00:00'),(3,'220vmYabG0',1,5000005,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 15:22:47','0000-00-00 00:00:00'),(4,'ELjLF4TOGA',1,5000006,'200020','16:00:00','22:00:00','2019-06-07','00:00:00','','','','A','2019-06-07 15:24:45','0000-00-00 00:00:00'),(5,'7eCpCpMYuW',1,5000007,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:22:37','0000-00-00 00:00:00'),(6,'jAQ8y4lPij',1,5000008,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:26:07','0000-00-00 00:00:00'),(7,'fsqUpUfftv',1,5000009,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:29:50','0000-00-00 00:00:00'),(8,'evPpv4mp9Z',1,5000011,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:31:49','0000-00-00 00:00:00'),(9,'HODfXYyt6V',1,5000012,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 16:33:49','0000-00-00 00:00:00'),(10,'vVXIxktYES',1,5000018,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','A','2019-06-07 19:28:21','0000-00-00 00:00:00'),(11,'StkJNqaTLP',2,5000019,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','C','2019-06-07 19:55:08','0000-00-00 00:00:00'),(12,'pc1kxeOySm',3,5000020,'200021','18:00:00','22:50:00','2019-06-08','00:00:00','','','','C','2019-06-07 20:01:40','0000-00-00 00:00:00'),(13,'ZFjZxlNgtS',1,5000021,'200020','16:00:00','22:00:00','2019-06-09','00:00:00','','','','C','2019-06-09 01:07:15','0000-00-00 00:00:00'),(14,'bUEioNSPVM',1,5000022,'200021','18:00:00','22:50:00','2019-06-10','00:00:00','','','','C','2019-06-10 05:48:24','0000-00-00 00:00:00'),(15,'DYfYW8BoXg',1,5000023,'200021','23:40:00','23:59:00','2019-06-12','00:00:00','','','','C','2019-06-11 19:15:25','0000-00-00 00:00:00'),(16,'NKxhLyOS27',1,5000024,'200021','22:00:00','22:50:00','2019-06-11','00:00:00','','','','C','2019-06-11 19:20:39','0000-00-00 00:00:00'),(17,'V63kcFgVqn',1,5000025,'200021','18:00:00','22:50:00','2019-06-13','00:00:00','','','','C','2019-06-13 00:08:14','0000-00-00 00:00:00'),(18,'T10nYZscsj',1,5000026,'200021','23:00:00','23:59:00','2019-06-13','00:00:00','','','','C','2019-06-13 00:08:48','0000-00-00 00:00:00'),(19,'t9uswzHbNM',1,5000027,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','C','2019-06-15 19:45:16','0000-00-00 00:00:00'),(20,'8JOnjmGjCJ',2,5000028,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','C','2019-06-15 19:45:45','0000-00-00 00:00:00'),(21,'3lMgbpsN28',3,5000029,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','C','2019-06-15 19:46:05','0000-00-00 00:00:00'),(22,'7kmbvuC2uX',4,5000030,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','C','2019-06-15 19:46:28','0000-00-00 00:00:00'),(23,'6gLk3qD9o1',5,5000031,'200021','23:00:00','23:59:00','2019-06-15','00:00:00','','','','C','2019-06-15 19:46:52','0000-00-00 00:00:00'),(24,'qdvpealqhm',1,5000032,'200021','23:00:00','23:59:00','2019-06-16','00:00:00','','','','C','2019-06-16 19:58:11','0000-00-00 00:00:00'),(25,'JjZ6ofww9s',2,5000033,'200021','23:00:00','23:59:00','2019-06-16','00:00:00','','','','C','2019-06-16 19:59:35','0000-00-00 00:00:00'),(26,'alcjn8CRe0',3,5000034,'200021','23:00:00','23:59:00','2019-06-16','00:00:00','','','','C','2019-06-16 20:02:43','0000-00-00 00:00:00'),(27,'IiR13f3Ips',1,5000035,'200021','18:00:00','22:50:00','2019-06-17','00:00:00','','','','C','2019-06-17 00:00:58','0000-00-00 00:00:00'),(28,'ujAiqC9hfg',1,5000036,'200021','08:00:00','12:00:00','2019-06-18','00:00:00','','','','C','2019-06-17 22:30:07','0000-00-00 00:00:00'),(29,'q1YtkqKtod',1,5000037,'200021','22:59:00','23:59:00','2019-06-17','00:00:00','','','','C','2019-06-17 22:33:21','0000-00-00 00:00:00'),(30,'4LPDpnpzQi',1,5000066,'200021','23:00:00','23:59:00','2019-06-30','00:00:00','','','','A','2019-06-30 22:33:46','0000-00-00 00:00:00'),(31,'ZahvtGhz8G',1,5000068,'200021','23:00:00','23:59:00','2019-06-30','00:00:00','','','','C','2019-06-30 22:34:45','0000-00-00 00:00:00'),(32,'1NzqimHv19',1,5000069,'200021','18:00:00','22:50:00','2019-07-01','00:00:00','','','','C','2019-06-30 23:59:18','0000-00-00 00:00:00'),(33,'KpuYbkQmHS',1,5000070,'200021','22:59:00','23:59:00','2019-07-01','00:00:00','','','','C','2019-07-01 00:01:36','0000-00-00 00:00:00'),(34,'rO5DBTL2Ip',1,5000071,'200021','08:00:00','12:00:00','2019-07-02','00:00:00','','','','C','2019-07-02 00:02:06','0000-00-00 00:00:00');
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
  `patient_dob` date DEFAULT NULL,
  `record_created_by` varchar(500) NOT NULL,
  `record_status` varchar(10) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_modified_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_patient_info`
--

LOCK TABLES `tmp_patient_info` WRITE;
/*!40000 ALTER TABLE `tmp_patient_info` DISABLE KEYS */;
INSERT INTO `tmp_patient_info` VALUES (1,'ELjLF4TOGA',5000006,'Debasish Das','Agartala, Amtali','9774308994',NULL,'self','A','2019-06-07 15:24:45','0000-00-00 00:00:00'),(2,'7eCpCpMYuW',5000007,'kdjfg','lkejtheklr','kejkht',NULL,'self','A','2019-06-07 16:22:37','0000-00-00 00:00:00'),(3,'jAQ8y4lPij',5000008,'flgkdfklgdlfk','klertjeklrtjl','9774308994',NULL,'self','A','2019-06-07 16:26:07','0000-00-00 00:00:00'),(4,'fsqUpUfftv',5000009,'kdjfghdfj','kdjfghdjgk','7577466673',NULL,'self','A','2019-06-07 16:29:50','0000-00-00 00:00:00'),(5,'evPpv4mp9Z',5000011,'kfdgnkjdfgdk','klfdgjdklfgdlk','75674393333',NULL,'self','A','2019-06-07 16:31:49','0000-00-00 00:00:00'),(6,'HODfXYyt6V',5000012,'sdtgfe','ertyer','7577466673',NULL,'self','A','2019-06-07 16:33:49','0000-00-00 00:00:00'),(7,'GHXSus5Q2q',5000013,'fsdfsdff','sdfsdfdf','9774308994',NULL,'self','A','2019-06-07 18:44:35','0000-00-00 00:00:00'),(8,'uJkffMdaT5',5000014,'xv','sdfgsdfg','ssdfg',NULL,'self','A','2019-06-07 19:07:36','0000-00-00 00:00:00'),(9,'ahMYJKf19P',5000015,'cb','xcbvxvbx','7654322222',NULL,'self','A','2019-06-07 19:09:18','0000-00-00 00:00:00'),(10,'feflcd60P9',5000016,'sdfgsdfgsdfg','sdfgsdfgsdfg','7654322222',NULL,'self','A','2019-06-07 19:22:05','0000-00-00 00:00:00'),(11,'RFHltm11Mi',5000017,'sfdgsdfg','sdfgsdfg','sdfgsdfgsdf',NULL,'self','A','2019-06-07 19:25:05','0000-00-00 00:00:00'),(12,'vVXIxktYES',5000018,'sdfgdfg','dfghdfg','9774308994',NULL,'self','A','2019-06-07 19:28:21','0000-00-00 00:00:00'),(13,'StkJNqaTLP',5000019,'aertwertw','wertwert','7654322222',NULL,'self','C','2019-06-07 19:55:08','0000-00-00 00:00:00'),(14,'pc1kxeOySm',5000020,'53637','vdhshd','6388282',NULL,'self','C','2019-06-07 20:01:40','0000-00-00 00:00:00'),(15,'ZFjZxlNgtS',5000021,'Radhika Lama Das','Amtali, Agartala, West Tripura','9856013261',NULL,'self','C','2019-06-09 01:07:15','0000-00-00 00:00:00'),(16,'bUEioNSPVM',5000022,'Radhika Lama Das','Amtali, Agartala, West Tripura','9856013261',NULL,'self','C','2019-06-10 05:48:24','0000-00-00 00:00:00'),(17,'DYfYW8BoXg',5000023,'Test Patient','Amtali, Agartala, West Tripura','9774308994',NULL,'self','C','2019-06-11 19:15:25','0000-00-00 00:00:00'),(18,'NKxhLyOS27',5000024,'fsdfsdf','sdfsdf','9774308994',NULL,'self','C','2019-06-11 19:20:39','0000-00-00 00:00:00'),(19,'V63kcFgVqn',5000025,'dhdghdfgh','dfhdfgh','9774308994',NULL,'self','C','2019-06-13 00:08:14','0000-00-00 00:00:00'),(20,'T10nYZscsj',5000026,'ssfs','sfsfsf','9856013261',NULL,'self','C','2019-06-13 00:08:49','0000-00-00 00:00:00'),(21,'t9uswzHbNM',5000027,'asdfasd','afasdfasdf','asdfasdf',NULL,'self','C','2019-06-15 19:45:16','0000-00-00 00:00:00'),(22,'8JOnjmGjCJ',5000028,'eafzhxgn','ghsfgh','sfghfdsgh',NULL,'self','C','2019-06-15 19:45:46','0000-00-00 00:00:00'),(23,'3lMgbpsN28',5000029,'xdfgsd','fgsdfg','sdfgsdfg',NULL,'self','C','2019-06-15 19:46:05','0000-00-00 00:00:00'),(24,'7kmbvuC2uX',5000030,'sdfsdf','sdfsdfsf','sdfsdfsd',NULL,'self','C','2019-06-15 19:46:28','0000-00-00 00:00:00'),(25,'6gLk3qD9o1',5000031,'dghdfgh','dghdfghd','dfghdfgh',NULL,'self','C','2019-06-15 19:46:52','0000-00-00 00:00:00'),(26,'qdvpealqhm',5000032,'gsfgs','sfgsfgsdfg','3453453453453',NULL,'self','C','2019-06-16 19:58:11','0000-00-00 00:00:00'),(27,'JjZ6ofww9s',5000033,'sgsdfgsd','sdfgsdfgsdfgsfdgf','63456345',NULL,'self','C','2019-06-16 19:59:35','0000-00-00 00:00:00'),(28,'alcjn8CRe0',5000034,'sasfg','sdfgsdfgsdfg','35234345345',NULL,'self','C','2019-06-16 20:02:44','0000-00-00 00:00:00'),(29,'IiR13f3Ips',5000035,'dsdf','dfgdfg','345345345',NULL,'self','C','2019-06-17 00:00:58','0000-00-00 00:00:00'),(30,'ujAiqC9hfg',5000036,'CHINMAY BISWAS','TMC ROAD, HAPANIA, 1st FLOOR OF UBI ATM, AGARTALA, WEST TRIPURA','9862804507',NULL,'self','C','2019-06-17 22:30:07','0000-00-00 00:00:00'),(31,'q1YtkqKtod',5000037,'CHINMAY BISWAS','TMC ROAD, HAPANIA, 1st FLOOR OF UBI ATM, AGARTALA, WEST TRIPURA','9862804507',NULL,'self','C','2019-06-17 22:33:21','0000-00-00 00:00:00'),(32,'h7OKlFRps3',5000049,'Test Name','Agartala','9856013269','1990-08-10','self','A','2019-06-29 23:00:28','0000-00-00 00:00:00'),(33,'q8PLwmgrkn',5000051,'dddd','eeeeee','9863773882','1999-10-10','self','A','2019-06-29 23:27:33','0000-00-00 00:00:00'),(34,'EP3EEYsj42',5000052,'2454235','wertwetwet','8934843687','2019-06-20','self','A','2019-06-29 23:30:54','0000-00-00 00:00:00'),(35,'ZkxuewgO2M',5000054,'wrwrter','sfgsfgfds','6798839898','1990-08-10','self','C','2019-06-30 06:52:44','0000-00-00 00:00:00'),(36,'vGuc5FJRe7',5000056,'sdfgsdfgsdfg','sfsdfsdf','3452345234','1900-11-11','self','C','2019-06-30 07:01:13','0000-00-00 00:00:00'),(37,'vGuc5FJRe7',5000057,'sdfgsdfgsdfg','sfsdfsdf','3452345234','1900-11-11','self','A','2019-06-30 07:05:17','0000-00-00 00:00:00'),(38,'dJhtjvachY',5000058,'wwrtwertwrt','sdfgsdfgsdfg','4543252345','2019-06-19','self','A','2019-06-30 07:06:04','0000-00-00 00:00:00'),(39,'V3zJRw0TVy',5000059,'afsdfgsdfg','sdfgsdfgds','9986766465','2019-06-12','self','C','2019-06-30 07:09:04','0000-00-00 00:00:00'),(40,'GtNsS5j6L0',5000060,'356345634','456345634564','4365356345','2019-06-12','self','C','2019-06-30 07:11:36','0000-00-00 00:00:00'),(41,'HbEbAMxMwB',5000061,'sdfgsdfg','dasfgsdfgsdf','9345567389','2019-06-18','self','C','2019-06-30 09:56:44','0000-00-00 00:00:00'),(42,'9UrUaAUd22',5000064,'Test today','sdfgdsfgsdf','8837726222','2019-06-18','self','C','2019-06-30 10:14:55','0000-00-00 00:00:00'),(43,'Fx1RoM7CoA',5000065,'Radhika Lam','sdfgsdfgdffgdf','9486789445','1990-08-10','self','C','2019-06-30 22:31:37','0000-00-00 00:00:00'),(44,'4LPDpnpzQi',5000066,'dhdghdfgh','dfhdfgh','9774308994',NULL,'self','A','2019-06-30 22:33:45','0000-00-00 00:00:00'),(45,'ZahvtGhz8G',5000068,'dhdghdfgh','dfhdfgh','9774308994',NULL,'self','C','2019-06-30 22:34:45','0000-00-00 00:00:00'),(46,'1NzqimHv19',5000069,'adwert','wtrwertwert','4356356345',NULL,'self','C','2019-06-30 23:59:18','0000-00-00 00:00:00'),(47,'KpuYbkQmHS',5000070,'ssdfgsfgs','fgsdfgsdfg','3453453345',NULL,'self','C','2019-07-01 00:01:36','0000-00-00 00:00:00'),(48,'rO5DBTL2Ip',5000071,'dhdghdfgh','dfhdfgh','9774308994',NULL,'self','C','2019-07-02 00:02:06','0000-00-00 00:00:00'),(49,'pXcksSzzPF',5000072,'Debasish Das','Amtali, Uttar Madhya Para','9862773881','1990-08-10','self','C','2019-07-02 00:27:21','0000-00-00 00:00:00');
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

--
-- Final view structure for view `test_pricing`
--

/*!50001 DROP VIEW IF EXISTS `test_pricing`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `test_pricing` AS select `lab_test_mapping`.`test_id` AS `test_id`,`GET_TEST_NAME`(`lab_test_mapping`.`test_id`) AS `test_name`,`lab_test_mapping`.`lab_id` AS `lab_id`,`GET_LAB_NAME`(`lab_test_mapping`.`lab_id`) AS `lab_name`,`lab_test_mapping`.`test_rate` AS `test_rate` from `lab_test_mapping` where (`lab_test_mapping`.`record_status` = 'A') */;
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

-- Dump completed on 2019-07-02  0:32:26
