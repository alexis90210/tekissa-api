-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: mboka
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.21.10.2

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id_article` bigint NOT NULL AUTO_INCREMENT,
  `id_boutique` bigint NOT NULL,
  `id_categorie` bigint NOT NULL,
  `nom` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT '',
  `etat` varchar(100) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prix` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,1,8,'Barelyne','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefb49caa7.jpg','1','2022-04-27 17:08:10','2000'),(2,1,8,'Sandale','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefb49caa7.jpg','1','2022-04-27 17:08:28','1500'),(3,1,8,'Pontalon','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefb49caa7.jpg','1','2022-04-27 17:08:28','1500'),(4,1,8,'Chemise','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefb49caa7.jpg','1','2022-04-27 17:08:28','1500');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boutique`
--

DROP TABLE IF EXISTS `boutique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boutique` (
  `id_boutique` bigint NOT NULL AUTO_INCREMENT,
  `id_client` bigint NOT NULL,
  `nom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT '',
  `etat` varchar(100) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `licence` int DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_boutique`),
  UNIQUE KEY `noDuplicate` (`id_client`,`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boutique`
--

LOCK TABLES `boutique` WRITE;
/*!40000 ALTER TABLE `boutique` DISABLE KEYS */;
INSERT INTO `boutique` VALUES (1,1,'Orca','poudriere','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefb49caa7.jpg','1','2022-04-26 06:18:54',NULL,'Brazzaville'),(2,2,'Samba la poudriere','poudriere','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefb49caa7.jpg','1','2022-04-26 21:17:16',NULL,'Brazzaville'),(3,3,'Kiabi','poudriere','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefb49caa7.jpg','1','2022-04-28 19:47:25',NULL,'Brazzaville'),(4,4,'El baraka','poudriere','https://7117-169-255-121-10.ngrok.io/public/image/3d-illustration-smartphone-with-store-screen-with-paper-bags-shop-online-concept_58466-14531-626aefed29ed8.jpg','1','2022-04-28 19:49:56',NULL,'Brazzaville');
/*!40000 ALTER TABLE `boutique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie_boutique`
--

DROP TABLE IF EXISTS `categorie_boutique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie_boutique` (
  `id_categorie_boutique` bigint NOT NULL AUTO_INCREMENT,
  `id_categorie` bigint NOT NULL,
  `id_boutique` bigint NOT NULL,
  `etat` varchar(100) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categorie_boutique`),
  UNIQUE KEY `noDuplicate` (`id_categorie`,`id_boutique`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie_boutique`
--

LOCK TABLES `categorie_boutique` WRITE;
/*!40000 ALTER TABLE `categorie_boutique` DISABLE KEYS */;
INSERT INTO `categorie_boutique` VALUES (1,8,1,'1','2022-04-30 23:29:03'),(2,8,2,'1','2022-04-30 23:29:03'),(3,9,3,'1','2022-04-30 23:29:03'),(4,10,4,'1','2022-04-30 23:29:03');
/*!40000 ALTER TABLE `categorie_boutique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id_categorie` bigint NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `etat` varchar(100) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT '',
  PRIMARY KEY (`id_categorie`),
  UNIQUE KEY `noDuplicate` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (8,'Chaussures pour Enfant','1','2022-04-28 19:11:03','https://7117-169-255-121-10.ngrok.io/public/image/cute-pink-baby-shoes_1203-1853-626ae8e211562.jpg'),(9,'Vetement pour Enfant','1','2022-04-28 19:21:14','https://7117-169-255-121-10.ngrok.io/public/image/baby-clothing-626ae96dc2743.jpg'),(10,'Tenue pour Marriage','1','2022-04-28 19:23:45','https://7117-169-255-121-10.ngrok.io/public/image/groom-holds-bride-s-hands-where-are-two-wedding-rings_8353-10454-626ae9dc6089a.jpg'),(11,'Tenue pour Homme','1','2022-04-28 19:24:37','https://7117-169-255-121-10.ngrok.io/public/image/people-lifestyle-business-style-fashion-men-s-wear-concept-positive-successful-young-ceo-sitting-armchair-smiling-dressed-elegant-shoes-trousers-jacket-white-t-shirt_343059-1787-626aea1c00bc2.jpg'),(12,'Tenue pour Femme','1','2022-04-28 19:25:46','https://7117-169-255-121-10.ngrok.io/public/image/cute-woman-bright-hat-purple-blouse-is-leaning-stand-with-dresses-posing-with-package-isolated-background_197531-17610-626aea5033e5b.jpg'),(13,'Appareils electroniques','1','2022-04-28 19:26:34','https://7117-169-255-121-10.ngrok.io/public/image/digital-device-eletronic-networking-media_53876-31695-626aea99c11dd.jpg'),(14,'Meuble & Lit ','1','2022-04-28 19:28:19','https://7117-169-255-121-10.ngrok.io/public/image/interior-design-with-photoframes-plants_23-2149385437-626aeb61dc973.jpg'),(15,'Apparels electromenagers','1','2022-04-28 19:31:16','https://7117-169-255-121-10.ngrok.io/public/image/electromenager-changement-visuel-626aeb9f49679.jpg'),(16,'Chaussures pour Hommes','1','2022-04-28 19:32:12','https://7117-169-255-121-10.ngrok.io/public/image/fashion-shoes-sneakers_1203-7529-626aebf9481a8.jpg'),(17,'Chaussures pour Femmes','1','2022-04-28 19:33:32','https://7117-169-255-121-10.ngrok.io/public/image/woman-posing-with-stylish-footwear-summer-fashion-bag-long-legs-shopping_285396-491-626aec26a3ddb.jpg'),(18,'Pieces pour Automobiles','1','2022-04-28 19:34:42','https://7117-169-255-121-10.ngrok.io/public/image/car-engine-engine-compartment-car-engine-background_93675-128715-626aec67f2b74.jpg'),(19,'Pharmacie & Medicaments','1','2022-04-28 19:35:59','https://7117-169-255-121-10.ngrok.io/public/image/closeup-view-pharmacist-hand-taking-medicine-box-from-shelf-drug-store_342744-320-626aecb93b277.jpg'),(20,'Medicaments traditionnels','1','2022-04-28 19:37:09','https://7117-169-255-121-10.ngrok.io/public/image/marijuana-buds-with-marijuana-joints-cannabis-oil_1150-20687-626aecff99eed.jpg'),(21,'Ophtamologie & Lunettes','1','2022-04-28 19:38:27','https://7117-169-255-121-10.ngrok.io/public/image/black-glasses_93675-130801-626aed4de2f3e.jpg'),(22,'Bijoux pour Femme','1','2022-04-28 19:39:24','https://7117-169-255-121-10.ngrok.io/public/image/woman-with-nail-art-promoting-design-luxury-earrings-ring_114579-3704-626aed7fb281f.jpg'),(23,'Bijoux pour Homme','1','2022-04-28 19:42:50','https://7117-169-255-121-10.ngrok.io/public/image/ezgif-2-96586981a5-626aee476ea78.png'),(24,'Mèche & Beauté','1','2022-04-28 19:44:06','https://7117-169-255-121-10.ngrok.io/public/image/strands-blond-hair-white-background_185193-74521-626aee9f1ebf9.jpg'),(25,'Divers','1','2022-04-28 19:44:56','https://7117-169-255-121-10.ngrok.io/public/image/think-outside-box-quotes-business-concept_1357-260-626aeed665e4e.jpg');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `id_client` bigint NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `civilite` varchar(2) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT '',
  `etat` varchar(100) NOT NULL DEFAULT '1',
  `parrainage` tinyint(1) DEFAULT '0',
  `parrain` varchar(100) DEFAULT '0',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` tinyint(1) DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `noDuplicate` (`mobile`,`nom`,`prenom`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Elombe','viny','1','069500886','poudriere','Brazzaville','','1',1,'044038043','2022-04-25 19:07:07',0,''),(3,'Elombe','alexis','1','069500889','poudriere','Brazzaville','','1',1,'044038043','2022-04-28 17:11:38',0,''),(5,'Ngoyi','viny','1','069500880','poudriere','Brazzaville','http://127.0.0.1:8000/public/image/ic_launcher-626af1e283022.png','1',1,'044038043','2022-04-28 19:54:26',0,'12345');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `followers`
--

DROP TABLE IF EXISTS `followers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `followers` (
  `id_followers` bigint NOT NULL AUTO_INCREMENT,
  `id_boutique` bigint NOT NULL,
  `id_client` bigint NOT NULL,
  `etat` varchar(10) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_followers`),
  UNIQUE KEY `noDuplicate` (`id_boutique`,`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `followers`
--

LOCK TABLES `followers` WRITE;
/*!40000 ALTER TABLE `followers` DISABLE KEYS */;
INSERT INTO `followers` VALUES (1,1,1,'1','2022-04-30 14:51:29'),(2,2,1,'1','2022-04-30 14:51:38'),(3,3,1,'1','2022-04-30 14:51:44'),(4,4,1,'1','2022-04-30 14:51:50');
/*!40000 ALTER TABLE `followers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messagerie` (
  `id_messagerie` bigint NOT NULL AUTO_INCREMENT,
  `id_envoyeur` bigint NOT NULL,
  `id_receveur` bigint NOT NULL,
  `message` text NOT NULL,
  `etat` varchar(10) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_messagerie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messagerie`
--

LOCK TABLES `messagerie` WRITE;
/*!40000 ALTER TABLE `messagerie` DISABLE KEYS */;
/*!40000 ALTER TABLE `messagerie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parrainnage`
--

DROP TABLE IF EXISTS `parrainnage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parrainnage` (
  `id_parrainnage` bigint NOT NULL AUTO_INCREMENT,
  `tel_parrain` varchar(30) NOT NULL,
  `tel_filleul` varchar(30) NOT NULL,
  `etat` varchar(10) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_parrainnage`),
  UNIQUE KEY `noDuplicate` (`tel_parrain`,`tel_filleul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parrainnage`
--

LOCK TABLES `parrainnage` WRITE;
/*!40000 ALTER TABLE `parrainnage` DISABLE KEYS */;
/*!40000 ALTER TABLE `parrainnage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preference_article`
--

DROP TABLE IF EXISTS `preference_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `preference_article` (
  `id_preference_article` bigint NOT NULL AUTO_INCREMENT,
  `id_article` bigint NOT NULL,
  `id_client` bigint NOT NULL,
  `etat` varchar(10) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_preference_article`),
  UNIQUE KEY `noDuplicate` (`id_article`,`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preference_article`
--

LOCK TABLES `preference_article` WRITE;
/*!40000 ALTER TABLE `preference_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `preference_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `id_reservation` bigint NOT NULL AUTO_INCREMENT,
  `id_client` bigint NOT NULL,
  `r_code` varchar(255) NOT NULL,
  `panier` json NOT NULL,
  `prix` varchar(100) DEFAULT '0',
  `etat` varchar(100) NOT NULL DEFAULT '1',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_boutique` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_reservation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,1,'80','[{\"id\": \"1\", \"nom\": \"Telephone\", \"prix\": \"20000\", \"quantite\": \"2\"}, {\"id\": \"2\", \"nom\": \"Ordinateur\", \"prix\": \"200000\", \"quantite\": \"1\"}]','0','1','2022-04-26 22:31:31','0');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-07 11:10:29
