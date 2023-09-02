-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: gastos
-- ------------------------------------------------------
-- Server version	5.5.35-0+wheezy1

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
-- Table structure for table `banco`
--

DROP TABLE IF EXISTS `banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banco` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(20) DEFAULT NULL,
  `cuenta` varchar(10) DEFAULT NULL,
  `fecha_emision` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `importe` double DEFAULT NULL,
  `detalle` varchar(50) DEFAULT NULL,
  `cobrado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banco`
--

LOCK TABLES `banco` WRITE;
/*!40000 ALTER TABLE `banco` DISABLE KEYS */;
INSERT INTO `banco` VALUES (2,'2325','CSM','2014-07-28','2014-07-30',6500,'','N'),(3,'2325','COM','2014-07-28','2014-07-30',5000,'heladera','N'),(16,'2545','NG','2014-08-01','2014-08-30',5000,'GAS MO','N'),(17,'2545','NG','0000-00-00','0000-00-00',5000,'GAS OIL','N'),(18,'2565','NG','0000-00-00','0000-00-00',50000,'beautycom','N'),(21,'2356','NG','0000-00-00','0000-00-00',5000.36,'alfa','N'),(22,'2356','NG','0000-00-00','0000-00-00',5000.36,'ALFAPARF','N'),(23,'2323','NG','0000-00-00','0000-00-00',500.36,'ALFAPARF','N'),(24,'2323','NG','0000-00-00','0000-00-00',5000,'alfaparf','N'),(25,'2323','NG','0000-00-00','0000-00-00',5000,'alfaparf','N'),(27,'321354','NG','0000-00-00','0000-00-00',36521,'Sensei pago ','N'),(28,'321354','NG','2014-08-13','2014-09-20',5000,'Sensei pago cerveza barril','S');
/*!40000 ALTER TABLE `banco` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-13 18:54:05
