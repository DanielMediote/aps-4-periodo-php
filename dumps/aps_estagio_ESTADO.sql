-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: aps_estagio
-- ------------------------------------------------------
-- Server version	5.7.21-1

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
-- Table structure for table `ESTADO`
--

DROP TABLE IF EXISTS `ESTADO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ESTADO` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `regiao` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ESTADO`
--

LOCK TABLES `ESTADO` WRITE;
/*!40000 ALTER TABLE `ESTADO` DISABLE KEYS */;
INSERT INTO `ESTADO` VALUES (1,'Acre','AC','Norte'),(2,'Alagoas','AL','Nordeste'),(3,'Amazonas','AM','Norte'),(4,'Amapá','AP','Norte'),(5,'Bahia','BA','Nordeste'),(6,'Ceará','CE','Nordeste'),(7,'Distrito Federal','DF','Centro-Oeste'),(8,'Espírito Santo','ES','Sudeste'),(9,'Goiás','GO','Centro-Oeste'),(10,'Maranhão','MA','Nordeste'),(11,'Minas Gerais','MG','Sudeste'),(12,'Mato Grosso do Sul','MS','Centro-Oeste'),(13,'Mato Grosso','MT','Centro-Oeste'),(14,'Pará','PA','Norte'),(15,'Paraíba','PB','Nordeste'),(16,'Pernambuco','PE','Nordeste'),(17,'Piauí','PI','Nordeste'),(18,'Paraná','PR','Sul'),(19,'Rio de Janeiro','RJ','Sudeste'),(20,'Rio Grande do Norte','RN','Nordeste'),(21,'Rondônia','RO','Norte'),(22,'Roraima','RR','Norte'),(23,'Rio Grande do Sul','RS','Sul'),(24,'Santa Catarina','SC','Sul'),(25,'Sergipe','SE','Nordeste'),(26,'São Paulo','SP','Sudeste'),(27,'Tocantins','TO','Norte');
/*!40000 ALTER TABLE `ESTADO` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-22 13:38:11
