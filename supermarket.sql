-- MySQL dump 10.11
--
-- to install this database, from a terminal, type:
-- mysql -u USERNAME -p -h SERVERNAME supermarket < supermarket.sql
--
-- Host: localhost    Database: supermarket
-- ------------------------------------------------------
-- Server version   5.0.45-log

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

DROP DATABASE IF EXISTS supermarket;
CREATE DATABASE supermarket;
USE supermarket;

--
-- Table structure for table `supermarket`
--

DROP TABLE IF EXISTS `supermarket`;
CREATE TABLE `supermarket` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(35) NOT NULL default '',
  `planogram` char(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supermarket`
--

LOCK TABLES `supermarket` WRITE;
/*!40000 ALTER TABLE `supermarket` DISABLE KEYS */;
INSERT INTO `supermarket` VALUES (1,'HiLo','Picture1'),
(2,'Loshusan','Picture2'),
(3,'Brooklyn_Supermarket','Picture3'),
(4,'Sovereign','Picture4'),
(5,'Super_Valu','Picture5'),
(6,'Hughenden','Picture6'),
(7,'Shoppers_Delight','Picture7'),
(8,'Sampars','Picture8'),
(9,'Golden_Grocery','Picture9'),
(10,'Shoppers_Fair','Picture10'),
(11,'Joong_Supermarket','Picture11'),
(12,'MegaMart','Picture12'),
(13,'PriceSmart','Picture13');
/*!40000 ALTER TABLE `supermarket` ENABLE KEYS */;
UNLOCK TABLES;
