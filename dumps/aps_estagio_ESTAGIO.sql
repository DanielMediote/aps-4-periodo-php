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
-- Table structure for table `ESTAGIO`
--

DROP TABLE IF EXISTS `ESTAGIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ESTAGIO` (
  `estagio_id` int(11) NOT NULL AUTO_INCREMENT,
  `estagio_id_aluno` int(11) DEFAULT NULL,
  `estagio-id_professor` int(11) DEFAULT NULL,
  `estagio_horas` time DEFAULT NULL,
  `estagio_id_empresa` int(11) DEFAULT NULL,
  `estagio_contrato` longblob,
  `estagio_convenio` longblob,
  `estagio_id_faculdade` int(11) DEFAULT NULL,
  PRIMARY KEY (`estagio_id`),
  KEY `fk_ESTAGIO_PROFESSOR_idx` (`estagio-id_professor`),
  KEY `fk_ESTAGIO_ALUNO_idx` (`estagio_id_aluno`),
  KEY `fk_ESTAGIO_FACULDADE_idx` (`estagio_id_faculdade`),
  CONSTRAINT `fk_ESTAGIO_ALUNO` FOREIGN KEY (`estagio_id_aluno`) REFERENCES `ALUNO` (`aluno_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ESTAGIO_FACULDADE` FOREIGN KEY (`estagio_id_faculdade`) REFERENCES `FACULDADE` (`faculdade_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ESTAGIO_PROFESSOR` FOREIGN KEY (`estagio-id_professor`) REFERENCES `PROFESSOR` (`prof_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ESTAGIO`
--

LOCK TABLES `ESTAGIO` WRITE;
/*!40000 ALTER TABLE `ESTAGIO` DISABLE KEYS */;
/*!40000 ALTER TABLE `ESTAGIO` ENABLE KEYS */;
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
