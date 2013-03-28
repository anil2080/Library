-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: oss
-- ------------------------------------------------------
-- Server version	5.5.29-0ubuntu0.12.04.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bill_no` char(40) NOT NULL,
  `date_of_purchase` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vendor_id` int(10) unsigned DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bill_no` (`bill_no`),
  KEY `vendor_id` (`vendor_id`),
  CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_detail` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill_detail`
--

LOCK TABLES `bill_detail` WRITE;
/*!40000 ALTER TABLE `bill_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `bill_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_title` char(30) NOT NULL,
  `author_name` char(30) NOT NULL,
  `publisher_name` char(30) DEFAULT NULL,
  `subject_id` int(10) unsigned NOT NULL,
  `number_of_copy` tinyint(3) unsigned NOT NULL,
  `main_subject_id` int(10) unsigned NOT NULL,
  `existing_number_of_copy` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `main_subject_id` (`main_subject_id`),
  CONSTRAINT `book_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  CONSTRAINT `book_ibfk_2` FOREIGN KEY (`main_subject_id`) REFERENCES `main_subject` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'HeadFirst','headabc','tatamgrawhill',1,3,1,0),(2,'Complete Reference','alex','pearson',1,2,1,2),(3,'E-Balaguru','bala','pearson',1,0,1,0),(4,'Let us c','karnetkar','mcgrawhill',2,2,1,2),(5,'exploring c','karnetkar','pearson',2,0,1,0),(6,'HTML nd php','keshi','mcgrawhill',3,0,1,0),(7,'CSS','HeadFirst','pearson',3,0,1,0),(8,'marketing skills','xyz','mcgrawhill',4,0,2,0),(9,'Sales skills','karan','pearson',4,0,2,0),(17,'headfirst','headabc','pearson',1,0,1,0),(18,'headfirst','headabc','wrox',2,0,1,0),(21,'headfirst','headabc','pearson',3,0,1,0),(22,'ppm','alex','wrox',4,0,2,0),(23,'ppm','headabc','pearson',4,0,2,0),(24,'headfirst','headabc','wrox1',1,0,1,0),(31,'1','','',10,0,5,0),(32,'abcd','keshi','wrox',11,10,6,10);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_copies`
--

DROP TABLE IF EXISTS `book_copies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_copies` (
  `book_id` int(10) unsigned DEFAULT NULL,
  `id` int(10) unsigned DEFAULT NULL,
  `existing_book_id` int(10) unsigned NOT NULL,
  `issued_to` int(10) unsigned DEFAULT NULL,
  `visible` enum('TRUE','FALSE') DEFAULT NULL,
  `addition` char(50) DEFAULT NULL,
  `price` smallint(5) unsigned DEFAULT NULL,
  `discount` smallint(5) unsigned DEFAULT NULL,
  `net_price` smallint(5) unsigned DEFAULT NULL,
  `bill_detail_id` int(10) unsigned DEFAULT NULL,
  `vendor_id` int(10) unsigned DEFAULT NULL,
  `volume` char(50) DEFAULT NULL,
  `date_of_purchase` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isbn_number` char(50) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL,
  `reserve` enum('TRUE','FALSE') DEFAULT NULL,
  `reserve_for` int(10) unsigned DEFAULT NULL,
  UNIQUE KEY `existing_book_id` (`existing_book_id`),
  KEY `book_id` (`book_id`),
  KEY `issued_to` (`issued_to`),
  KEY `bill_detail_id` (`bill_detail_id`),
  KEY `vendor_id` (`vendor_id`),
  KEY `reserve_for` (`reserve_for`),
  CONSTRAINT `book_copies_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  CONSTRAINT `book_copies_ibfk_2` FOREIGN KEY (`issued_to`) REFERENCES `member` (`id`),
  CONSTRAINT `book_copies_ibfk_3` FOREIGN KEY (`bill_detail_id`) REFERENCES `bill_detail` (`id`),
  CONSTRAINT `book_copies_ibfk_4` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_detail` (`id`),
  CONSTRAINT `book_copies_ibfk_5` FOREIGN KEY (`reserve_for`) REFERENCES `member` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_copies`
--

LOCK TABLES `book_copies` WRITE;
/*!40000 ALTER TABLE `book_copies` DISABLE KEYS */;
INSERT INTO `book_copies` VALUES (1,4,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2013-03-25 10:55:20',NULL,NULL,NULL,NULL),(1,1,1,NULL,'FALSE','1st',NULL,NULL,NULL,NULL,NULL,'1','2013-03-19 10:11:03',NULL,NULL,NULL,NULL),(1,2,2,NULL,'FALSE','2nd',NULL,NULL,NULL,NULL,NULL,'1','2013-03-19 10:14:35',NULL,NULL,NULL,NULL),(1,3,3,NULL,'FALSE','1st',NULL,NULL,NULL,NULL,NULL,'1','2013-03-19 10:15:14',NULL,NULL,NULL,NULL),(2,1,4,NULL,'TRUE','1st',NULL,NULL,NULL,NULL,NULL,'1','2013-03-19 10:15:49',NULL,NULL,NULL,NULL),(2,2,5,NULL,'TRUE','2nd',NULL,NULL,NULL,NULL,NULL,'2','2013-03-19 10:16:08',NULL,NULL,NULL,NULL),(4,1,6,NULL,'TRUE','1st',NULL,NULL,NULL,NULL,NULL,'1.0','2013-03-19 10:16:45',NULL,NULL,NULL,NULL),(4,2,7,NULL,'TRUE','2nd',NULL,NULL,NULL,NULL,NULL,'2.0','2013-03-19 10:17:01',NULL,NULL,NULL,NULL),(32,1,8,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,2,9,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,3,10,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,4,11,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,5,12,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,6,13,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,7,14,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,8,15,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,9,16,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL),(32,10,17,NULL,NULL,'1',200,50,150,NULL,NULL,'1','0000-00-00 00:00:00','11111',NULL,NULL,NULL);
/*!40000 ALTER TABLE `book_copies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `department` char(15) DEFAULT NULL,
  `member_id` int(10) unsigned DEFAULT NULL,
  `user_name` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  KEY `member_id` (`member_id`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_subject`
--

DROP TABLE IF EXISTS `main_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main_subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_subject`
--

LOCK TABLES `main_subject` WRITE;
/*!40000 ALTER TABLE `main_subject` DISABLE KEYS */;
INSERT INTO `main_subject` VALUES (1,'Computer Science'),(6,'Information technology'),(2,'Managment'),(3,'Maths'),(4,'science'),(5,'test');
/*!40000 ALTER TABLE `main_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_name` char(30) DEFAULT NULL,
  `department` char(15) DEFAULT NULL,
  `year_of_joining` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `course_id` int(10) unsigned DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  `father_name` char(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city_id` int(10) unsigned DEFAULT NULL,
  `street_id` int(10) unsigned DEFAULT NULL,
  `state_id` int(10) unsigned DEFAULT NULL,
  `country_id` int(10) unsigned DEFAULT NULL,
  `zip` char(6) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL,
  `contact_number` char(10) DEFAULT NULL,
  `max_copy` tinyint(3) unsigned DEFAULT NULL,
  `copy_alloted` tinyint(3) unsigned DEFAULT NULL,
  `visible` enum('TRUE','FALSE') DEFAULT 'TRUE',
  `fine_till_yet` int(10) unsigned DEFAULT NULL,
  `fine_paid` int(10) unsigned DEFAULT NULL,
  `image_extension` char(5) DEFAULT NULL,
  `reserve_status` enum('TRUE','FALSE') DEFAULT 'TRUE',
  `reserve_id` int(10) unsigned DEFAULT NULL,
  `reserve_void_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`),
  KEY `course_id` (`course_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `member_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`),
  CONSTRAINT `member_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  CONSTRAINT `member_ibfk_3` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_copies`
--

DROP TABLE IF EXISTS `member_copies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member_copies` (
  `member_id` int(10) unsigned DEFAULT NULL,
  `issued_book` varchar(500) DEFAULT NULL,
  KEY `member_id` (`member_id`),
  CONSTRAINT `member_copies_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_copies`
--

LOCK TABLES `member_copies` WRITE;
/*!40000 ALTER TABLE `member_copies` DISABLE KEYS */;
/*!40000 ALTER TABLE `member_copies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodical`
--

DROP TABLE IF EXISTS `periodical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodical` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `volume` char(50) DEFAULT NULL,
  `price` smallint(5) unsigned DEFAULT NULL,
  `discount` smallint(5) unsigned DEFAULT NULL,
  `net_price` smallint(5) unsigned DEFAULT NULL,
  `bill_number` char(50) DEFAULT NULL,
  `date_of_purchase` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vendor_name` char(50) DEFAULT NULL,
  `language` char(50) DEFAULT NULL,
  `number_of_copy` smallint(5) unsigned DEFAULT NULL,
  `visible` enum('TRUE','FALSE') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodical`
--

LOCK TABLES `periodical` WRITE;
/*!40000 ALTER TABLE `periodical` DISABLE KEYS */;
INSERT INTO `periodical` VALUES (1,'per1','1',225,25,200,'bill01','0000-00-00 00:00:00','vendor1','english',10,'TRUE'),(2,'per2','1',255,25,230,'bill02','0000-00-00 00:00:00','vendor1','english',5,'TRUE'),(3,'per1','2',255,25,230,'bill03','0000-00-00 00:00:00','vendor2','french',5,'TRUE'),(4,'per3','1',200,20,180,'bill04','0000-00-00 00:00:00','vendor1','english',15,'TRUE'),(5,'per4','2',200,20,180,'bill05','0000-00-00 00:00:00','vendor3','english',10,'TRUE');
/*!40000 ALTER TABLE `periodical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `street`
--

DROP TABLE IF EXISTS `street`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `street` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `street`
--

LOCK TABLES `street` WRITE;
/*!40000 ALTER TABLE `street` DISABLE KEYS */;
/*!40000 ALTER TABLE `street` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (9,''),(8,'abc'),(2,'C'),(6,'English'),(1,'Java'),(4,'Marketing'),(7,'Maths'),(10,'mno'),(11,'php'),(5,'Sales'),(3,'WebDesigning');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor_detail`
--

DROP TABLE IF EXISTS `vendor_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `head_name` char(50) NOT NULL,
  `name` char(30) DEFAULT NULL,
  `street` char(50) DEFAULT NULL,
  `city` char(50) DEFAULT NULL,
  `state` char(50) DEFAULT NULL,
  `country` char(50) DEFAULT NULL,
  `postal_code` mediumint(8) unsigned DEFAULT NULL,
  `visible` enum('TRUE','FALSE') DEFAULT 'TRUE',
  `remarks` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `head_name` (`head_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor_detail`
--

LOCK TABLES `vendor_detail` WRITE;
/*!40000 ALTER TABLE `vendor_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendor_detail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-28 15:26:40
