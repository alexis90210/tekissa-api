-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: egliseiccniamey
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

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
-- Table structure for table `agent_integration`
--

DROP TABLE IF EXISTS `agent_integration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agent_integration` (
  `id_agent_integration` bigint NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `civilite` varchar(5) NOT NULL,
  `noms` varchar(200) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `tranche_age` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `situationMatrimoniale` varchar(100) DEFAULT NULL,
  `SituationProfessionnelle` varchar(255) DEFAULT NULL,
  `SiEtudiantFiliere` varchar(100) DEFAULT NULL,
  `SiEmployeFonction` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_agent_integration`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent_integration`
--

LOCK TABLES `agent_integration` WRITE;
/*!40000 ALTER TABLE `agent_integration` DISABLE KEYS */;
/*!40000 ALTER TABLE `agent_integration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispatching`
--

DROP TABLE IF EXISTS `dispatching`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispatching` (
  `id_dispatching` bigint NOT NULL AUTO_INCREMENT,
  `id_invite` bigint DEFAULT NULL,
  `id_agent_integration` bigint DEFAULT NULL,
  `commentaire` text,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_dispatching`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispatching`
--

LOCK TABLES `dispatching` WRITE;
/*!40000 ALTER TABLE `dispatching` DISABLE KEYS */;
/*!40000 ALTER TABLE `dispatching` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invites`
--

DROP TABLE IF EXISTS `invites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invites` (
  `id_invite` bigint NOT NULL AUTO_INCREMENT,
  `civilite` varchar(5) NOT NULL,
  `noms` varchar(200) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `tranche_age` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `situationMatrimoniale` varchar(100) DEFAULT NULL,
  `CommentAvezVousConnuICCNiamey` varchar(100) DEFAULT NULL,
  `SituationProfessionnelle` varchar(255) DEFAULT NULL,
  `SiEtudiantFiliere` varchar(100) DEFAULT NULL,
  `SiEmployeFonction` varchar(100) DEFAULT NULL,
  `EtesVousDejaMembreDuneEglise` varchar(10) DEFAULT NULL,
  `SouhaitezVousRejoindreICCNiamey` varchar(10) DEFAULT NULL,
  `AvezVousDejaAccepteJesusChristDansVotreVie` varchar(10) DEFAULT NULL,
  `AimerezVousEtreAccompagne` varchar(10) DEFAULT NULL,
  `SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche` varchar(10) DEFAULT NULL,
  `AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte` text,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_invite`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invites`
--

LOCK TABLES `invites` WRITE;
/*!40000 ALTER TABLE `invites` DISABLE KEYS */;
INSERT INTO `invites` VALUES (5,'M.','Doe','John','25-34','+227 912345678','+227 912345678','123 Rue des Acacias, Niamey, Niger','13.5123','2.1123','Célibataire','Par un ami','Etudiant','Informatique','N/A','Oui','Oui','Oui','Non','Oui','Pas pour le moment','2025-01-11 20:41:51'),(6,'Mr.','Ngoyi Moussounda','Alexis Mavy','<18','222862009','','Caracolas','0','0','','','','','','','','',NULL,'','','2025-01-12 06:46:31'),(7,'Mme.','Dombi','lea','25-30','222862009','','Caracolas','0','0','en couple','une-connaissance','Etudiant','Medecine','','Oui.','Oui.','Oui.','Oui.','Oui.','','2025-01-12 06:48:46'),(9,'','','','','','','','0','0','','','','','','','','','','','','2025-01-12 07:05:54'),(10,'Mr.','Ngoyi Moussounda','Alexis Mavy','<18','222862009','123456','Caracolas','0','0','celibataire','une-connaissance','Eleve','','','Oui.','Oui.','Oui.','Oui.','Oui.','satisfaisant','2025-01-12 07:32:27');
/*!40000 ALTER TABLE `invites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `star`
--

DROP TABLE IF EXISTS `star`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `star` (
  `id_star` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `civilite` varchar(5) NOT NULL,
  `noms` varchar(200) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `tranche_age` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `situationMatrimoniale` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_star`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `star`
--

LOCK TABLES `star` WRITE;
/*!40000 ALTER TABLE `star` DISABLE KEYS */;
/*!40000 ALTER TABLE `star` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `superviseur`
--

DROP TABLE IF EXISTS `superviseur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `superviseur` (
  `id_superviseur` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `civilite` varchar(5) NOT NULL,
  `noms` varchar(200) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `tranche_age` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `situationMatrimoniale` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_superviseur`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `superviseur`
--

LOCK TABLES `superviseur` WRITE;
/*!40000 ALTER TABLE `superviseur` DISABLE KEYS */;
/*!40000 ALTER TABLE `superviseur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-12  9:25:10
