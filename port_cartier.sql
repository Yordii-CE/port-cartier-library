CREATE DATABASE  IF NOT EXISTS `port_cartier` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `port_cartier`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: port_cartier
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `publicationYear` varchar(20) NOT NULL,
  `category` enum('novel','comic','video games','dvd','blu-ray','cd') NOT NULL,
  `type` enum('child','teenager','adult') NOT NULL,
  `genre` enum('comedy','drama','horror','science','fiction','documentary') NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (31,'The Great Gatsby','978-3-16-148410-0','F. Scott Fitzgerald','1925','novel','adult','drama','A story of wealth, love, and tragedy in the 1920s.'),(32,'Harry Potter and the Sorcerer\'s Stone','978-3-16-148410-1','J.K. Rowling','1997','novel','child','drama','The first book in the Harry Potter series.'),(33,'1984','978-3-16-148410-2','George Orwell','1949','novel','adult','horror','A dystopian novel set in a totalitarian society.'),(34,'The Hobbit','978-3-16-148410-3','J.R.R. Tolkien','1937','novel','child','fiction','The prequel to The Lord of the Rings.'),(35,'To Kill a Mockingbird','978-3-16-148410-4','Harper Lee','1960','novel','adult','drama','A classic novel exploring racial injustice.'),(36,'Watchmen','978-3-16-148410-5','Alan Moore','1986','comic','adult','documentary','A groundbreaking graphic novel about flawed superheroes.'),(37,'The Witcher 3: Wild Hunt','978-3-16-148410-6','Andrzej Sapkowski','2015','video games','adult','science','An open-world action role-playing game based on The Witcher series.'),(38,'The Shawshank Redemption','978-3-16-148410-7','Stephen King','1994','dvd','adult','drama','A film adaptation of Stephen King\'s novella.'),(39,'The Dark Knight','978-3-16-148410-8','Christopher Nolan','2008','blu-ray','adult','fiction','A critically acclaimed superhero film.'),(40,'Thriller','978-3-16-148410-9','Michael Jackson','1982','cd','adult','drama','One of the best-selling albums of all time.');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loans` (
  `id` int NOT NULL AUTO_INCREMENT,
  `documentId` int NOT NULL,
  `memberId` int NOT NULL,
  `loanDate` datetime NOT NULL,
  `returnDate` datetime NOT NULL,
  `status` enum('returned','lent') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `loans_memberId_idx` (`memberId`),
  KEY `loans_documentId_idx` (`documentId`),
  CONSTRAINT `loans_documentId` FOREIGN KEY (`documentId`) REFERENCES `documents` (`id`),
  CONSTRAINT `loans_memberId` FOREIGN KEY (`memberId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans`
--

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;
INSERT INTO `loans` VALUES (8,32,2,'2023-05-23 12:26:53','2023-05-17 00:00:00','returned'),(9,31,2,'2023-05-23 16:24:29','2023-05-10 00:00:00','returned'),(10,31,2,'2023-05-23 16:54:13','2023-05-06 00:00:00','lent'),(11,31,2,'2023-05-23 16:58:12','2023-05-22 00:00:00','lent'),(12,39,5,'2023-05-23 22:13:04','2023-05-10 00:00:00','returned');
/*!40000 ALTER TABLE `loans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserves`
--

DROP TABLE IF EXISTS `reserves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reserves` (
  `id` int NOT NULL AUTO_INCREMENT,
  `documentId` int NOT NULL,
  `memberId` int NOT NULL,
  `bookingDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reserves_documentId_idx` (`documentId`),
  KEY `reserves_memberId_idx` (`memberId`),
  CONSTRAINT `reserves_documentId` FOREIGN KEY (`documentId`) REFERENCES `documents` (`id`),
  CONSTRAINT `reserves_memberId` FOREIGN KEY (`memberId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserves`
--

LOCK TABLES `reserves` WRITE;
/*!40000 ALTER TABLE `reserves` DISABLE KEYS */;
INSERT INTO `reserves` VALUES (11,31,1,'2023-05-23 22:07:28'),(12,31,1,'2023-05-23 22:07:28'),(13,40,1,'2023-05-23 22:09:16'),(14,39,5,'2023-05-23 22:11:43');
/*!40000 ALTER TABLE `reserves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `rol` enum('member','admin','employee') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Yordii','Yordii','hola@gmail.cmo','12345','5 de diciembre','94112 12121','admin'),(2,'Yordii','Calle','hola@gmail.cmo','12345','5 de diciembre','94112 12121','member'),(3,'Jhenifer','Vasquez','hola@gmail.cmo','12345','5 de diciembre','94112 12121','member'),(4,'Yordii','Calle','hola@gmail.cmo','23232','5 de diciembre','2222','employee'),(5,'Alonso','Gomez','alonso@gmail.cmo','1234','5 de diciembre','94112 12121','member'),(6,'Jhonatan','Alvarez','jhonatan@gmail.com','12345','Canada','+1 912912812','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'port_cartier'
--

--
-- Dumping routines for database 'port_cartier'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-25  8:36:36
