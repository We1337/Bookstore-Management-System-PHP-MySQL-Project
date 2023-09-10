-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: bookstoredatabase
-- ------------------------------------------------------
-- Server version	8.0.34-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `a_id` int NOT NULL AUTO_INCREMENT,
  `a_unm` varchar(30) NOT NULL,
  `a_pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book` (
  `b_id` int NOT NULL AUTO_INCREMENT,
  `b_nm` varchar(50) NOT NULL,
  `b_cat` varchar(50) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_price` int NOT NULL,
  `b_img` varchar(50) NOT NULL,
  `b_time` int NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (15,'Sherlock Hollmes','Suspence','new',140,'book_img/0201354934.jpg',1693902773),(16,'Murder on The Orient Express','Suspence','Suspence Book about Murder.',60,'book_img/d3.jpg',1554088749),(18,'A Dictionary of Architecture','Architecture','Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume',500,'book_img/ARC9.jpg',1554089362),(19,'CAT Book','Competitive Exam','Book about Competitive Exam CAT.\r\nIn CAT Collegians are Eligible for Give Exam.',260,'book_img/CAT.jpg',1554089935),(20,'Visual Basic 2005','Programming','VB.Net Connectivity.',430,'book_img/comp8.jpg',1554090190),(21,'HTML for World Wide Web','Web Design','HTML uses tags,it\'s not case sensitive,work with own html tags which must be enclosed.',240,'book_img/0201354934.jpg',1554090473),(22,'A TEXTBOOK OF COST AND MANAGEMENT ACCOUNTING 8th e','Management','Student friendly and examination oriented approach # Innovative, comprehensive and systematic presentation of the subject matter # Use of diagrams and exhibits to help students understand concepts easily and clearly # Around 500 solved problems and illustrations with working notes # Solved and unsolved practical questions from various university and professional examinations like BCom, MCom, CA, CS, ICWA, etc. # Objective type questions and select theory questions # Ideal for self study.',410,'book_img/busi7.jpg',1554091189),(23,'Spider Man','Comics','Spider Man Comic Book.',120,'book_img/comic1.jpg',1554091718),(24,'The Mad, Mad World of Cricket','Sport','The funny side of the gentleman?s game?captured by a master cartoonist In India cricket is more than a game; it is a national obsession. And with a World Cup always around the corner, there is no better way to prepare for the excitement of seeing the men in blue in action than with renowned cartoonist Sudhir Dar?s creations.',200,'book_img/c1.jpg',1554092107),(25,'A Dictionary of','Architecture','Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume',500,'book_img/ARC9.jpg',1555228720),(26,'BILL DAVE MANAGEMENT','Management','This book is about management by Bill Dave',90,'book_img/MANAGEMENT2.jpg',1555250569);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_nm` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (13,'Suspence'),(14,'Architecture'),(15,'Competitive Exam'),(16,'Programming'),(17,'Web Design'),(18,'Business'),(19,'Comics'),(20,'Sport'),(21,'Management');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `c_fnm` varchar(100) NOT NULL,
  `c_mno` int NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_msg` longtext NOT NULL,
  `c_time` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (5,'Kumar Baraiya',2147483647,'kumar@gmail.com','Awesome Books.','1554092678'),(10,'Dhaval Makwana',2147483647,'dhavalmak77@gmail.com','Best Books','1554201509'),(12,'Dhaval',123654789,'dhaval@gmail.com','Looking For New Books','1554219813');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order` (
  `o_id` int NOT NULL AUTO_INCREMENT,
  `o_name` varchar(30) NOT NULL,
  `o_address` varchar(200) NOT NULL,
  `o_pincode` int NOT NULL,
  `o_city` varchar(30) NOT NULL,
  `o_state` varchar(30) NOT NULL,
  `o_mobile` varchar(11) NOT NULL,
  `o_rid` int NOT NULL,
  `o_total_price` int NOT NULL,
  `o_list_books` longtext NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (39,'Dhaval Akal','Mahuva',125478,'nuihu','Gujarat','123456789',1,500000,'book_id-amout: 15-12, book_id-amout: 16-10'),(40,'Dhaval Makwana','Mahuva',125478,'nuihu','Gujarat','123456789',1,500000,'book_id-amout: 15-12, book_id-amout: 16-10'),(41,'bobs','mahuva',125478,'Gajarat','Gujarat','1234567899',1,500,'(Name: A Dictionary of. Amout: 1),'),(42,'bobs','mahuva',125478,'Gajarat','Gujarat','1234567899',1,500,'(Name: A Dictionary of. Amout: 1),'),(43,'bobs','mahuva',125478,'Gajarat','Gujarat','1234567899',1,200,'(Name: The Mad, Mad World of Cricket. Amout: 1),'),(44,'rock','mahuva',125478,'Gajarat','Gujarat','1234567899',1,500,'(Name: A Dictionary of. Amout: 1),');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `register` (
  `r_id` int NOT NULL AUTO_INCREMENT,
  `r_fnm` varchar(100) NOT NULL,
  `r_unm` varchar(50) NOT NULL,
  `r_pwd` varchar(30) NOT NULL,
  `r_cno` varchar(11) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_question` varchar(100) NOT NULL,
  `r_answer` varchar(50) NOT NULL,
  `r_time` varchar(20) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'Dhaval Makwana','dhaval','dhaval123','9876543210','dhavalmak77@gmail.com','Which is your Favourite Movie ?','shawshank redemption','1554092678'),(2,'Kumar Baraiya','kumar','kumar123','1234567890','kbaraiya@gmail.com','Which is your Favourite Movie ?','123','1554201585'),(3,'Hiren Makwana','hirenmakwana','hirenmakwana','7894561230','hiren@gmail.com','Which is your Favourite Movie ?','prometheus','1555655074');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-10 22:56:54
