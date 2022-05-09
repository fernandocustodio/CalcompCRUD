CREATE DATABASE  IF NOT EXISTS `calcomp` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `calcomp`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: calcomp
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `dqc84`
--

DROP TABLE IF EXISTS `dqc84`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dqc84` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MODEL` int(11) NOT NULL,
  `FAT_PART_NO` varchar(15) NOT NULL,
  `TOTAL_LOCATION` int(11) NOT NULL,
  `UPDATE_DT` timestamp NOT NULL,
  `CREATE_DT` timestamp NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `FAT_PART_NO` (`FAT_PART_NO`),
  KEY `FK_DQC_MODEL_idx` (`MODEL`),
  CONSTRAINT `FK_DQCMODEL_MODEL` FOREIGN KEY (`MODEL`) REFERENCES `dqcmodel` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dqc841`
--

DROP TABLE IF EXISTS `dqc841`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dqc841` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FAT_PART_NO` int(11) NOT NULL,
  `PARTS_NO` varchar(15) NOT NULL,
  `UNT_USG` int(11) NOT NULL,
  `DESCRIPTION` longtext NOT NULL,
  `REF_DESIGNATOR` longtext,
  `UPDATE_DT` timestamp NOT NULL,
  `CREATE_DT` timestamp NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_DQC84_FAT_PART_NO` (`FAT_PART_NO`),
  CONSTRAINT `FK_DQC84_FAT_PART_NO` FOREIGN KEY (`FAT_PART_NO`) REFERENCES `dqc84` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `dqcmodel`
--

DROP TABLE IF EXISTS `dqcmodel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dqcmodel` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MODEL` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MODEL_UNIQUE` (`MODEL`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-08 22:25:33
