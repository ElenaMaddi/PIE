-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `librarie` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `librarie`;

--
-- Table structure for table `angajati`
--

DROP TABLE IF EXISTS `angajati`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `angajati` (
  `idang` int(11) NOT NULL,
  `functie` varchar(50) DEFAULT NULL,
  `salariu` int(11) DEFAULT NULL,
  PRIMARY KEY (`idang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `angajati`
--

LOCK TABLES `angajati` WRITE;
/*!40000 ALTER TABLE `angajati` DISABLE KEYS */;
INSERT INTO `angajati` VALUES (11,'Vanzator',1500),(22,'Manager',2000),(33,'Operator curatenie',1500),(44,'Distribuitor',2000),(55,'Contabil',2500);
/*!40000 ALTER TABLE `angajati` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autor` (
  `idautor` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `datan` date DEFAULT NULL,
  PRIMARY KEY (`idautor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` VALUES (11,'R.J.Ellory','1967-06-02'),(22,'Paula Hawkins','1989-02-01'),(33,'Mark Twain','1835-11-30'),(44,'Jules Verne','1828-02-08'),(55,'Jane Austen','1775-12-16'),(66,'Osho','1931-12-11'),(77,'Ion Creanga','1837-03-01'),(88,'Mihai Eminescu','2019-01-16');
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carte`
--

DROP TABLE IF EXISTS `carte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carte` (
  `idcarte` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `stoc` int(11) DEFAULT NULL,
  `autor` int(11) DEFAULT NULL,
  `editura` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcarte`),
  KEY `FK_autor` (`autor`),
  CONSTRAINT `FK_autor` FOREIGN KEY (`autor`) REFERENCES `autor` (`idautor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carte`
--

LOCK TABLES `carte` WRITE;
/*!40000 ALTER TABLE `carte` DISABLE KEYS */;
INSERT INTO `carte` VALUES (3,'Mandrie si prejudecata',40,10,55,'Epica'),(5,'Ratiune si simtire',40,6,55,'Litera'),(8,'Sarea in bucate',10,3,77,'Epica'),(10,'Capra cu trei iezi',10,15,77,'ANDREAS'),(11,'Amintiri din copilarie',10,32,77,'ANDREAS'),(12,'Povesti ilustrate',8,8,77,'ANDREAS'),(14,'Punguta cu doi bani',9,11,77,'ANDREAS'),(42,'test',12,12,NULL,'asd');
/*!40000 ALTER TABLE `carte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (111,'Ion Popescu ','Strada Narciselor, nr.3','0756456987'),(112,'Alin Popa','Strada Brailei, nr 5.','0740617345'),(113,'Sarbu Alexa','Strada Domneasca, nr.3','0730234567');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comenzi`
--

DROP TABLE IF EXISTS `comenzi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comenzi` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(6) DEFAULT NULL,
  `carte` varchar(60) DEFAULT NULL,
  `film` varchar(60) DEFAULT NULL,
  `muzica` varchar(60) DEFAULT NULL,
  `jucarie` varchar(60) DEFAULT NULL,
  `papetarie` varchar(60) DEFAULT NULL,
  `nume` varchar(60) NOT NULL,
  `judet` varchar(30) NOT NULL,
  `localitate` varchar(30) NOT NULL,
  `adresa` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comenzi`
--

LOCK TABLES `comenzi` WRITE;
/*!40000 ALTER TABLE `comenzi` DISABLE KEYS */;
INSERT INTO `comenzi` VALUES (4,2,'11-10','6-40,9-30',NULL,'7-10,5-40','5-10','test','Galati','Galati','Strada Domneasca, nr. 45');
/*!40000 ALTER TABLE `comenzi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `idfactura` int(11) NOT NULL,
  `idclient` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `idproduse` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`idfactura`),
  KEY `FK_idclient` (`idclient`),
  CONSTRAINT `FK_idclient` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` VALUES (1,112,'Incheiat',NULL,'2019-01-16');
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `idfilm` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `stoc` int(11) DEFAULT NULL,
  `durata` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idfilm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES (1,'Crazy Stupid Love',50,6,'1h 58m'),(2,'Divergent',30,5,'2h 19m'),(4,'Before I Fall',50,2,'1h 38m'),(5,'Bad Moms',30,12,'1h 40m'),(6,'The Lucky One',40,6,'1h 40 m'),(7,'Annabelle',50,8,'1h 38m'),(8,'Fifty Shades Of Grey',50,6,'1h 20m'),(9,'F the Prom',30,12,'1h 50m'),(10,'Aquaman',60,30,'2h 25m'),(22,'Movie',22,2,'1h'),(23,'test',23,23,'23m');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jucarie`
--

DROP TABLE IF EXISTS `jucarie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jucarie` (
  `idjucarie` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `stoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`idjucarie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jucarie`
--

LOCK TABLES `jucarie` WRITE;
/*!40000 ALTER TABLE `jucarie` DISABLE KEYS */;
INSERT INTO `jucarie` VALUES (0,'HU',111,1),(1,'Robot',22,4),(2,'Masina',30,0),(3,'Barbie',50,10),(4,'Puzzle',30,2),(5,'Papusa',10,3),(6,'Set masinute',60,5),(7,'Ursulet',40,7),(8,'Set Lego',100,12),(9,'Papusa Ken',70,8),(10,'Figurina Star Wars',40,1),(11,'Urs ',90,3),(12,'Set pictura',150,5);
/*!40000 ALTER TABLE `jucarie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `muzica`
--

DROP TABLE IF EXISTS `muzica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `muzica` (
  `idmuzica` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `stoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmuzica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `muzica`
--

LOCK TABLES `muzica` WRITE;
/*!40000 ALTER TABLE `muzica` DISABLE KEYS */;
INSERT INTO `muzica` VALUES (1,'CD - Disturbed',100,21),(2,'CD - Evanescence',70,3),(3,'CD - Three Days Grace',90,2),(4,'CD - Hollywood Undead',150,5),(5,'CD - KORN',60,4),(6,'CD - Alternosfera',70,10),(7,'CD - Bucovina',80,9),(8,'CD - Shinedown',100,7),(9,'CD - One Direction ',20,20),(10,'CD - Halestorm',100,2);
/*!40000 ALTER TABLE `muzica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papetarie`
--

DROP TABLE IF EXISTS `papetarie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papetarie` (
  `idpapetarie` int(11) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `stoc` int(11) DEFAULT NULL,
  `culoare` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idpapetarie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papetarie`
--

LOCK TABLES `papetarie` WRITE;
/*!40000 ALTER TABLE `papetarie` DISABLE KEYS */;
INSERT INTO `papetarie` VALUES (1,'Pix',3,10,'Negru'),(2,'Pix',3,20,'Roz'),(3,'Creion',1,12,'Negru'),(4,'Set Creioane Colorate',10,6,'Toate'),(5,'Hartie A4',10,100,'Alb'),(6,'Hartie Colorata',2,150,'Toate'),(7,'Foi A3',4,50,'Alb'),(8,'Caiet A4',3,7,'Alb');
/*!40000 ALTER TABLE `papetarie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(320) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','admin','admin'),(2,'test@test.com','test','test');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vanzator`
--

DROP TABLE IF EXISTS `vanzator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vanzator` (
  `idvanzator` varchar(50) NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `idang` int(11) NOT NULL,
  PRIMARY KEY (`idvanzator`),
  KEY `FK_angajat` (`idang`),
  CONSTRAINT `FK_angajat` FOREIGN KEY (`idang`) REFERENCES `angajati` (`idang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vanzator`
--

LOCK TABLES `vanzator` WRITE;
/*!40000 ALTER TABLE `vanzator` DISABLE KEYS */;
INSERT INTO `vanzator` VALUES ('1','Popa Ion','ion','1234',11),('2','Oprea Alina','alina','1234',11);
/*!40000 ALTER TABLE `vanzator` ENABLE KEYS */;
UNLOCK TABLES;
