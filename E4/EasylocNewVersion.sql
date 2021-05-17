-- MySQL dump 10.18  Distrib 10.3.27-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Easyloc
-- ------------------------------------------------------
-- Server version	10.3.27-MariaDB-0+deb10u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Appartement`
--

DROP TABLE IF EXISTS `Appartement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Appartement` (
  `id_Appartement` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Nb_piece` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Dispo` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Other_image` varchar(255) DEFAULT NULL,
  `Other_image2` varchar(255) DEFAULT NULL,
  `Description` text NOT NULL,
  `Superficie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Appartement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Appartement`
--

LOCK TABLES `Appartement` WRITE;
/*!40000 ALTER TABLE `Appartement` DISABLE KEYS */;
INSERT INTO `Appartement` VALUES (1,'Prestigieux immeuble de rapport à 1000 Biscayne Blvd Miami','FL 33132 Miami Comté de Miami-Dade Florida',17,500,1,'image/appartLux1.jpg','oi/appart1ext.jpg','oi/appart1int.jpg','Créez votre propre musée dans le ciel dans cette résidence d\'un demi-étage de Zaha Hadid. Avec plus de 30 000 pieds carrés de commodités conçues de manière architecturale et d\'espaces de rassemblement. Opulence définie. Vivez dans un immeuble de luxe de première classe véritablement boutique dans le centre des quartiers les plus passionnants de Miami',NULL),(2,'Prestigieux duplex de 870 m2 en vente Miami Florida','Miami Florida',16,800,1,'image/appartLux2.jpg','','','Cette luxueuse villa duplex en duplex entretient un lien très fort avec le paysage environnant, tous les espaces intérieurs et extérieurs offrant une vue directe sur une ligne d\'horizon continue. L\'espace de 9 363 pieds carrés est entouré de baies vitrées offrant une vue imprenable et dispose d\'une terrasse de piscine privée avec une cuisine extérieure et une douche',NULL);
/*!40000 ALTER TABLE `Appartement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Bateau`
--

DROP TABLE IF EXISTS `Bateau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bateau` (
  `id_Bateau` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Nb_piece` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Dispo` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Other_image` varchar(255) DEFAULT NULL,
  `Other_image2` varchar(255) DEFAULT NULL,
  `Description` text NOT NULL,
  `Superficie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Bateau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bateau`
--

LOCK TABLES `Bateau` WRITE;
/*!40000 ALTER TABLE `Bateau` DISABLE KEYS */;
/*!40000 ALTER TABLE `Bateau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Camping`
--

DROP TABLE IF EXISTS `Camping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Camping` (
  `id_Camping` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Nb_piece` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Dispo` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Other_image` varchar(255) DEFAULT NULL,
  `Other_image2` varchar(255) DEFAULT NULL,
  `Description` text NOT NULL,
  `Superficie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Camping`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Camping`
--

LOCK TABLES `Camping` WRITE;
/*!40000 ALTER TABLE `Camping` DISABLE KEYS */;
/*!40000 ALTER TABLE `Camping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Maison`
--

DROP TABLE IF EXISTS `Maison`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Maison` (
  `id_Maison` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Nb_piece` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Dispo` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Other_image` varchar(255) DEFAULT NULL,
  `Other_image2` varchar(255) DEFAULT NULL,
  `Description` text NOT NULL,
  `Superficie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Maison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Maison`
--

LOCK TABLES `Maison` WRITE;
/*!40000 ALTER TABLE `Maison` DISABLE KEYS */;
/*!40000 ALTER TABLE `Maison` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Studio`
--

DROP TABLE IF EXISTS `Studio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Studio` (
  `id_Studion` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Nb_piece` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Dispo` tinyint(1) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Other_image` varchar(255) DEFAULT NULL,
  `Other_image2` varchar(255) DEFAULT NULL,
  `Description` text NOT NULL,
  `Superficie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Studion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Studio`
--

LOCK TABLES `Studio` WRITE;
/*!40000 ALTER TABLE `Studio` DISABLE KEYS */;
/*!40000 ALTER TABLE `Studio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Pseudo` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` longtext NOT NULL,
  `is_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'Letang','Nicolas','sanji','nicolas@travail.com','f7c3bc1d808e04732adf679965ccc34ca7ae3441',0),(2,'Letang','Nicolas','sanji','nicolas@travail.com','7c4a8d09ca3762af61e59520943dc26494f8941b',0),(3,'pierre ','pauls ','popol','popol@pol.fr','f7c3bc1d808e04732adf679965ccc34ca7ae3441',0),(4,'Letang','Nicolas','s4nj1','fake@mail.fr','8a847452935321628e2c31c3092860dd9519c852',1);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-18  0:34:55
