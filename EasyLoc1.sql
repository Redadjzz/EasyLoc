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
  `Password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (5,'Letang','Nicolas','jak','pand@panda.fr','$2y$10$6ympRjSOdlMXvpMV1pJV4uDmzU7bFnBglZk5SL4qHKn6XKdLllVZi',0),(6,'pierre','paul','jacque','pand@panda.fr','$2y$10$HFkV2Nyh62/tN16fE4jFzO7yeMIDJVjXAKM5mBD4LlWyeFeCYREK2',0),(7,'Letang','Nicolas','s4nj1','fake@mail.fr','$2y$10$mxgadibrkt5O/i/h9rTxY.VjSIi3IhslT7/7i5.qVfQ6xeVItEu1S',1);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appartement`
--

DROP TABLE IF EXISTS `appartement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appartement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appartement`
--

LOCK TABLES `appartement` WRITE;
/*!40000 ALTER TABLE `appartement` DISABLE KEYS */;
INSERT INTO `appartement` VALUES (1,'Prestigieux immeuble de rapport ?? 1000 Biscayne Blvd Miami','FL 33132 Miami Comt?? de Miami-Dade Florida',17,500,1,'image/Appartement/appartLux1.jpg','oiAppart/appart1ext.jpg','oiAppart/appart1int.jpg','Cr??ez votre propre mus??e dans le ciel dans cette r??sidence d\'un demi-??tage de Zaha Hadid. Avec plus de 30 000 pieds carr??s de commodit??s con??ues de mani??re architecturale et d\'espaces de rassemblement. Opulence d??finie. Vivez dans un immeuble de luxe de premi??re classe v??ritablement boutique dans le centre des quartiers les plus passionnants de Miami',NULL),(2,'Prestigieux duplex de 870 m2 en vente Miami Florida','Miami Florida',16,800,1,'image/Appartement/appartLux2.jpg','oiAppart/appart2ext.jpg','oiAppart/appart2int.jpg','Cette luxueuse villa duplex en duplex entretient un lien tr??s fort avec le paysage environnant, tous les espaces int??rieurs et ext??rieurs offrant une vue directe sur une ligne d\'horizon continue. L\'espace de 9 363 pieds carr??s est entour?? de baies vitr??es offrant une vue imprenable et dispose d\'une terrasse de piscine priv??e avec une cuisine ext??rieure et une douche',NULL),(3,'Prestigieux apportement de rapport en location ?? Miami, ??tats-Unis','Miami, ??tats-Unis',6,1200,1,'image/Appartement/appartLux3.jpg','oiAppart/appart3ext.jpg','oiAppart/appart3int.jpg','Un v??ritable appartement de design dans le ciel ?? l\'int??rieur de la tour r??sidentielle la plus exclusive de Miami - One Thousand Museum Residence 4401 est une expression triomphante de l\'architecture l??gendaire de Zaha Hadid et du design d\'int??rieur et du mobilier personnalis?? du plus haut calibre de la soci??t?? de design CEU. r??sidence d\'un demi-??tage comprenant 4 chambres g??n??reuses, un salon d\'exposition de 1 000 pieds carr??s ?? l\'est et une cuisine ??l??gante de Poliform avec appareils ??lectrom??nagers Gaggenau et Subzero. Les terrasses de cette r??sidence ?? flux continu offrent des vues spectaculaires sur le lever et le coucher du soleil combinant la baie, la ville et un ciel infini. Seulement 84 maisons, des ??quipements extraordinaires offrent un style de vie sur mesure adapt?? ?? chaque r??sident, du spa cinq ??toiles avec entra??nement personnel personnalis?? aux piscines int??rieure et ext??rieure, en passant par un hall et un sky lounge dignes d\'un h??tel de classe mondiale.',1000),(4,'Prestigieux appartement de rapport en location ?? Miami, ??tats-Unis','Miami, ??tats-Unis',12,1500,1,'image/Appartement/appartLux4.jpg','oiAppart/appart4ext.jpg','oiAppart/appart4int.jpg','L\'appartement le plus exclusif et le plus luxueux de tout Brickell | Centre-ville de Miami! Un vrai\r\nMANSION DANS LE CIEL au coeur de Brickell, mais sur l\'??le exclusive de Brickell Key - \"Une ??le dans la\r\nville\". Maison sur 3 niveaux avec 6 lits, 6 salles de bain compl??tes et 2 demi-bains, plafonds hauts de 12 pieds, ascenseur priv??, vue imprenable sur l\'eau et le\r\nSKYLINE, et 4 terrasses de pr??s de 2000 pieds carr??s d\'espace de vie ext??rieur + une piscine priv??e sur le toit entour??e de ciel bleu, la baie et les toits de Miami. Vivez la ??vie insulaire?? et marchez vers l\'agitation de Brickell: Shopping,\r\ndivertissement, restaurants et le centre-ville de Brickell! 3 places de parking Premium + voiturier et toutes ??l??gamment meubl??es par Artefacto. L\'Asie est le premier b??timent de luxe de Brickell Key avec des ??quipements 5 ??toiles. Enti??rement meubl??. Bail d\'un an\r\nseul.',2000);
/*!40000 ALTER TABLE `appartement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bateau`
--

DROP TABLE IF EXISTS `bateau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bateau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bateau`
--

LOCK TABLES `bateau` WRITE;
/*!40000 ALTER TABLE `bateau` DISABLE KEYS */;
INSERT INTO `bateau` VALUES (1,'272 pieds OMEGA LUXURY VIP YACHT - 30 PERSONNES','St-Tropez',5,2000,1,'image/Yacht/yachtLux1.jpg','oiBateau/yacht1ext.jpg','oiBateau/yacht1int.jpg','Le yacht de luxe bien connu de 83 m??tres O\'MEGA peut obliger et engager jusqu\'?? 30 visiteurs dans l\'extravagance la plus extr??me, O\'Mega garantit les solaces d\'un ??norme et vaste navire personnel mais en plus l\'accomplissement de vos occasions d\'entreprise engageantes ou inhabituelles Mega Yacht o ??m??ga son immense salle de r??union est facilement accessible depuis le salon fondamental et donne la protection n??cessaire. D??tendez-vous dans le salon de massage du dos, pratiquez dans la salle d\'exercice / studio de yoga, restaurez-vous avec votre cosm??tologue priv??, entra??nez-vous dans le centre de loisirs et laissez-vous aller dans le jacuzzi int??rieur et ext??rieur.',83),(2,'236 pieds SERENITY LUXURY VIP YACHT - 30 PERSONNES','Dubai',6,2500,1,'image/Yacht/yachtLux2.jpg','oiBateau/yacht2ext.jpg','oiBateau/yacht2int.jpg','Les bureaux de d??tente et de divertissement remarquables de Peacefulness en font le yacht contractuel id??al pour se m??ler et s\'engager avec la famille et les amis.Le yacht ?? moteur de 236,22 pieds de 72 m, sp??cialement implicite en 2004 par Austal et r??am??nag?? pour la derni??re fois en 2017. L\'int??rieur de Tranquility comprend 15 chambres, dont un expert suite, 6 cabines VIP, 5 pavillons doubles, 2 pavillons jumeaux et 2 lits pullman. Elle est en outre ??quip??e pour transporter jusqu\'?? 31 ??quipes disponibles localement afin de garantir un aper??u occasionnel du yacht extravagance. Un style immortel, d\'excellentes d??corations et des si??ges luxueux mettent en valeur tout au long pour cr??er un air exquis et agr??able.',72),(3,'Bateau de f??te pour jusqu\'?? 90 personnes','Dubai',5,3000,1,'image/Yacht/yachtLux3.jpg','oiBateau/yacht3ext.jpg','oiBateau/yacht3int.jpg','\r\nParfait pour votre:\r\nMariage\r\nDate d\'anniversaire\r\nAnniversaires\r\n??v??nements d\'entreprise\r\nOu simplement pour faire la f??te avec vos amis et votre famille\r\n',150),(4,'YACHT VIP LUXURY SENSATION de 164 pieds','Miami, Etat-unis',5,2800,1,'image/Yacht/yachtLux4.jpg','oiBateau/yacht4ext.jpg','oiBateau/yacht4int.jpg','Le yacht Sensation de 164 pieds peut accueillir dix personnes dans cinq cabines. Le stateroom de son propri??taire pleine largeur, qui est plac?? sur le pont principal, est tr??s remarquable. Il y a un lit king-size ?? b??bord et ?? tribord, un immense dressing. La salle de bains du propri??taire est situ??e ?? l\'avant de cette chambre et dispose d\'installations pour lui et pour elle ainsi que d\'une superbe salle de bain centrale.\r\nLe yacht sensation est le yacht de location id??al pour socialiser et se divertir en famille et entre amis, gr??ce ?? ses superbes installations de loisirs et de divertissement. Une excursion en bateau vous laissera un effet ind??l??bile et vous vous en souviendrez pendant de nombreuses ann??es. Glisser sur la surface aquatique vous donne une sensation de libert?? et de s??r??nit?? absolue. Cabines: 5',100);
/*!40000 ALTER TABLE `bateau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maison`
--

DROP TABLE IF EXISTS `maison`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maison`
--

LOCK TABLES `maison` WRITE;
/*!40000 ALTER TABLE `maison` DISABLE KEYS */;
INSERT INTO `maison` VALUES (1,'Demeure de prestige 7 chambres en vente Duba??, ??mirats Arabes Unis','Duba??, ??mirats Arabes Unis',7,4000,1,'image/Maison/maisonLux1.jpg','oiMaison/maison1ext.jpg','oiMaison/maison1int.jpg','Qu\'est-ce que la vie de luxe? Il ne s\'agit pas seulement d\'extravagance et d\'opulence, mais aussi d\'embrasser et de profiter d\'un style de vie luxueux. XXII Carat offre non seulement des vues magnifiques sur Duba?? et Palm Jumeirah, une intimit?? ultime, un h??bergement spacieux et des ??quipements de premi??re classe, mais aussi la possibilit?? de vous immerger dans un mode de vie vraiment magnifique. XXII CARAT est la quintessence de la vie somptueuse et c\'est tout simplement unique en son genre. Caract??ristiques uniques: -L\'exp??rience ultime de la vie au bord de l\'eau -Collection de 22 manoirs luxueux sur la plage -Communaut?? ferm??e -Vue panoramique sur les toits de la marina de Duba?? et Palm Jumeirah -Les h??tels voisins One & Only The Palm, Zabeel Sary et W Duba?? -Les plus grands jardins paysagers priv??s sur le Palm Jumierah -Acc??s exclusif ?? la plage -La disposition de chaque villa dispose de 7 suites-chambres Villas: -360 degr??s eau d??gag??e et vue sur la ville -Piscine priv??e -Jardin paysager priv?? et terrasse -Les villas de premi??re ligne offrent un acc??s priv?? exclusif directement depuis la parcelle -Les villas centrales ont acc??s ?? une terrasse priv??e sur le toit et un ascenseur direct au parking en sous-sol -Des plans d\'??tage vastes -Les villas s??lectionn??es ont des espaces de bureau et de biblioth??que -Personnalisation sur les plans d\'??tage -Chambres de femme avec entr??e s??par??e et d??barras propre hammam Caract??ristiques int??rieures: - Armoires de cuisine fabriqu??es en France, con??ues sur mesure et enti??rement accessoiris??es finies en bois naturel - Application de cuisine de qualit?? professionnelle liances de Miele et La Cornue - Plan de travail en pierre et dosseret en marbre dans la cuisine - Cave ?? vin climatis??e par Miele - Armoires de salle de bain fabriqu??es en Italie et con??ues sur mesure - Robinets et accessoires faits ?? la main en Italie - Baignoire en cristal Baldi, fabriqu??e ?? la main en Italie - Livre s??lectionn?? ?? la main -Marbre italien assorti -Raccords ??lectriques europ??ens import??s -Les caract??ristiques d\'am??nagement sont personnalisables selon les pr??f??rences du client.Services et ??quipements: -Service de conciergerie -Service de s??curit?? -Parking valet -Parking s??curis?? en sous-sol pour les r??sidents -Meet & Greet -M??nage -Jardinage - Entretien de la piscine -Soutien technique -Installations du club -82 pi / 25mt. piscine centrale avec acc??s ?? la plage -Bar Caribana -Restaurant Caract??ristiques du b??timent: -Style architectural m??diterran??en -Structure du site en terrasse -Villas couvertes de peintures Keim: peinture min??rale bavaroise de haute qualit?? avec une garantie de 50 ans sur la d??coloration -Murs remplis de briques d\'argile rouge par Yamama, un mat??riau naturel d\'Arabie Saoudite -Profil Windows-Schuco ??quip?? de syst??mes de r??duction de la poussi??re et du bruit -Syst??me de cl??ture antibruit -30% du site est couvert par un espace vert paysager -Smart home Syst??me Gira -Equipement de hammam Tylo Talise Ottoman spa Le programme de partenariat avec Talise Ottoman Spa propose un abonnement familial annuel pour tous les nouveaux propri??taires de demeures XXII Carat.',2000),(2,'Maison de 6 chambres de luxe en vente ?? Novelia Village, Dubai,','Novelia Village, Dubai,',6,2900,1,'image/Maison/maisonLux2.jpg','oiMaison/maison2ext.jpg','oiMaison/maison2int.jpg','Luxhabitat Sotheby???s International Realty a l???honneur de vous pr??senter cette exquise villa de 6 chambres ?? coucher ?? Bromellia, Al Barari.\r\nIl est difficile d???imaginer une propri??t?? plus susceptible d?????voquer des images de charme extraordinaire et de style luxueux que cette captivante villa de six chambres. Somptueux ?? tous points de vue, il est dot?? d???int??rieurs vraiment remarquables, d???un design illustre et d???une vue imprenable sur le lac. Chaque d??tail a ??t?? soign?? dans les moindres d??tails sur l???ensemble de la parcelle, qui fait plus de 19 000 pieds carr??s. C???est une villa unique en son genre, une maison de r??ve avec des caract??ristiques absolument fantastiques.\r\nL???un de nos aspects pr??f??r??s est le tout nouveau relooking ext??rieur qui a transform?? l?????norme jardin en un spectacle extravagant de splendeur avec son propre bar de natation, sa piscine de plong??e, son foyer, son espace barbecue et la rivi??re tranquille qui coule le long de la propri??t??. ?? l???int??rieur, le grand hall d???entr??e offre une premi??re impression dominante et s???ouvre sur les ??l??gants salons et salles ?? manger avec leur mobilier design. Aucun amateur de cuisine ne pourrait ??tre d????u par la cuisine et ses appareils de qualit?? professionnelle. Il y a beaucoup d???espace pour se divertir ainsi qu???un bureau priv?? au rez-de-chauss??e et deux sous-sols. Toutes les chambres spacieuses ont leur propre salle de bains, ainsi que des salles de bains et des salles d???eau suppl??mentaires pour les clients et le personnel. Il y a ??galement une grande terrasse sur le toit et un jardin, ce qui vous permet de toujours organiser une soir??e avec vue.\r\nAl Barari est l???une des communaut??s les plus recherch??es de Duba?? gr??ce ?? son environnement exclusif, son atmosph??re retir??e, son cadre luxuriant et ses ??quipements de luxe. Cette propri??t?? de luxe de r??ve est l???une des villas les plus accueillantes du d??veloppement d???Al Barari. Les r??sidents peuvent toujours se sentir comme s???ils avaient ??chapp?? au stress de la ville tout en profitant d???un acc??s rapide ?? l???autoroute, de restaurants raffin??s, de magasins pratiques et d???un centre de remise en forme et de bien-??tre tranquille.\r\nUn luxe chic et contemporain ?? un niveau que vous ne trouverez nulle part ailleurs ; contactez Luxhabitat Sotheby???s International Realty pour organiser une visite priv??e d??s aujourd???hui.',1500),(3,'Villa de luxe de 7 chambres en vente Duba??','Duba??',7,4500,1,'image/Maison/maisonLux3.jpg','oiMaison/maison3ext.jpg','oiMaison/maison3int.jpg','Qu\'est-ce que la vie de luxe? Il ne s\'agit pas seulement d\'extravagance et d\'opulence, mais aussi d\'embrasser et de profiter d\'un style de vie luxueux. XXII Carat offre non seulement des vues magnifiques sur Duba?? et Palm Jumeirah, une intimit?? ultime, un h??bergement spacieux et des ??quipements de premi??re classe, mais aussi la possibilit?? de vous immerger dans un mode de vie vraiment magnifique. XXII CARAT est la quintessence de la vie somptueuse et c\'est tout simplement unique en son genre. Caract??ristiques uniques: -L\'exp??rience ultime de la vie au bord de l\'eau -Collection de 22 manoirs luxueux sur la plage -Communaut?? ferm??e -Vue panoramique sur les toits de la marina de Duba?? et Palm Jumeirah -Les h??tels voisins One & Only The Palm, Zabeel Sary et W Duba?? -Les plus grands jardins paysagers priv??s sur le Palm Jumierah -Acc??s exclusif ?? la plage -La disposition de chaque villa dispose de 7 suites-chambres Villas: -360 degr??s eau d??gag??e et vue sur la ville -Piscine priv??e -Jardin paysager priv?? et terrasse -Les villas de premi??re ligne offrent un acc??s priv?? exclusif directement depuis la parcelle -Les villas centrales ont acc??s ?? une terrasse priv??e sur le toit et un ascenseur direct au parking en sous-sol -Des plans d\'??tage vastes -Les villas s??lectionn??es ont des espaces de bureau et de biblioth??que -Personnalisation sur les plans d\'??tage -Chambres de femme avec entr??e s??par??e et d??barras propre hammam Caract??ristiques int??rieures: - Armoires de cuisine fabriqu??es en France, con??ues sur mesure et enti??rement accessoiris??es finies en bois naturel - Application de cuisine de qualit?? professionnelle liances de Miele et La Cornue - Plan de travail en pierre et dosseret en marbre dans la cuisine - Cave ?? vin climatis??e par Miele - Armoires de salle de bain fabriqu??es en Italie et con??ues sur mesure - Robinets et accessoires faits ?? la main en Italie - Baignoire en cristal Baldi, fabriqu??e ?? la main en Italie - Livre s??lectionn?? ?? la main -Marbre italien assorti -Raccords ??lectriques europ??ens import??s -Les caract??ristiques d\'am??nagement sont personnalisables selon les pr??f??rences du client.Services et ??quipements: -Service de conciergerie -Service de s??curit?? -Parking valet -Parking s??curis?? en sous-sol pour les r??sidents -Meet & Greet -M??nage -Jardinage - Entretien de la piscine -Soutien technique -Installations du club -82 pi / 25mt. piscine centrale avec acc??s ?? la plage -Bar Caribana -Restaurant Caract??ristiques du b??timent: -Style architectural m??diterran??en -Structure du site en terrasse -Villas couvertes de peintures Keim: peinture min??rale bavaroise de haute qualit?? avec une garantie de 50 ans sur la d??coloration -Murs remplis de briques d\'argile rouge par Yamama, un mat??riau naturel d\'Arabie Saoudite -Profil Windows-Schuco ??quip?? de syst??mes de r??duction de la poussi??re et du bruit -Syst??me de cl??ture antibruit -30% du site est couvert par un espace vert paysager -Smart home Syst??me Gira -Equipement de hammam Tylo Talise Ottoman spa Le programme de partenariat avec Talise Ottoman Spa propose un abonnement familial annuel pour tous les nouveaux propri??taires de demeures XXII Carat.',2500),(4,'Villa de luxe de 13 pi??ces en vente Duba??','Duba??',5,3000,1,'image/Maison/maisonLux4.jpg','oiMaison/maison4ext.jpg','oiMaison/maison4int.jpg','La Maison iKeys est honor?? de pr??senter cette villa exceptionnelle de 5 chambres de luxe unique en son genre ?? Palm Jumeirah.\r\nCette toute nouvelle villa personnalis??e repr??sente le summum de l\'excellence et de la qualit?? disponible dans une propri??t?? de luxe. Chaque d??tail des cuisines gastronomiques, aux meubles design Bentley respire l\'??l??gance et le style Haute couture. Il est difficile d\'imaginer une propri??t?? de luxe dans le monde qui pourrait rivaliser avec cette somptueuse villa en qualit?? et en emplacement.\r\nCette Propri??t?? exceptionnelle r??partie sur trois ??tages, occupe un terrain de 14 000 pieds carr??s ?? l\'extr??mit?? de la fa??ade la plus recherch??e du Palm Jumeirah. Ce petit bout de paradis est b??n??ficie de sa propre plage priv??e et des vues extraordinaires ?? 360 degr??s.',14000);
/*!40000 ALTER TABLE `maison` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penthouse`
--

DROP TABLE IF EXISTS `penthouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penthouse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penthouse`
--

LOCK TABLES `penthouse` WRITE;
/*!40000 ALTER TABLE `penthouse` DISABLE KEYS */;
INSERT INTO `penthouse` VALUES (1,'Penthouse de luxe de 1347 m2 en location New York, ??tat de New York','??tat de New York',7,5000,1,'image/Penthouse/penthouseLux1.jpg','oiPenthouse/penthouse1ext.jpg','oiPenthouse/penthouse1int.jpg','THE PENTHOUSE ?? One Hundred Barclay offre une opportunit?? exclusive de poss??der les deux derniers ??tages du premier gratte-ciel Art d??co du monde, l\'une des plus grandes r??sidences priv??es de New York. Ce palais dans le ciel, qui s\'??tend sur 14 500 pieds carr??s, est id??al pour un acheteur exigeant qui veut la toile de luxe parfaite pour concevoir leur maison de r??ve.\r\n\r\nLa galerie d\'entr??e vitr??e m??ne ?? l\'une des plus grandes salles de s??jour de New York, mesurant pr??s de 100 pieds de long par plus de 30 pieds de large, abritant l\'un des plus longs murs d\'art continu dans n\'importe quelle maison priv??e. Les hauts plafonds de 21 pieds et les fen??tres cintr??es spectaculaires encadrent les vues embl??matiques de l\'horizon de New York, de la Statue de la Libert?? et de la rivi??re Hudson.\r\n\r\nLa cuisine professionnelle, vaste espace de divertissement de plus de 1 000 pieds carr??s, comprend un garde-manger, une salle ?? manger, une cave ?? vins (capacit?? de 630 bouteilles) et un salon apr??s-d??ner avec bar et foyer au gaz ?? deux faces. Il y a des comptoirs et dosseret en marbre Calacatta Gold, des armoires en ch??ne sur mesure, des ??viers Franke et un ensemble d\'appareils Gaggenau haut de gamme avec deux r??frig??rateurs et cong??lateurs, un four ?? micro-ondes, deux fours ?? convection de 30 po et une cuisini??re ?? huit br??leurs. plaque de cuisson, table de cuisson ?? induction de 36 po et cuisini??re accessoire: cuiseur ?? vapeur, friteuse et teppanyaki, ainsi que deux lave-vaisselle.\r\n\r\nEn plus du salon et de la cuisine, le Penthouse comprend plus de 6 000 pieds carr??s d\'espace enti??rement personnalisable, pouvant accueillir des am??nagements allant de une ?? sept chambres. En tant que l\'une des premi??res r??sidences de la ville, cet espace superlatif offre des possibilit??s presque illimit??es pour cr??er une r??sidence parfaitement adapt??e. La maison enti??re comporte l\'infrastructure ??lectrique compl??te pour soutenir l\'??clairage fait sur commande, les montages de style de lustre, la domotique, et un ascenseur interne.\r\n\r\nOne Hundred Barclay offre aux r??sidents plus de 40 000 pieds carr??s de commodit??s, le forfait le plus robuste de Tribeca, avec deux piscines, une salle de jeux, un centre de fitness avec hammam et sauna, un salon multim??dia, des salles de musique, un salon Landmarked bar, stockage du vin et salle de d??gustation, v??lo et stockage priv??, avec quatre terrasses tentaculaires pour divertir.\r\n',1347),(2,'Penthouse de luxe de 4 chambres en location Duba??','Duba??',4,2650,1,'image/Penthouse/penthouseLux2.jpg','oiPenthouse/penthouse2ext.jpg','oiPenthouse/penthouse2int.jpg','\r\nPenthouse en demi-??tage dans l\'exclusif Bulgari Resort and Residences situ?? sur l\'??lite Jumeirah Bay Island, Duba??, EAU. Cette propri??t?? est entour??e d\'une crique de plage de sable, de jardins verdoyants et d\'une vue panoramique sur le centre-ville de Duba?? et le port de plaisance. Le Bulgari Resort Dubai est l\'un des six seuls h??tels et complexes Bulgari au monde. Les r??sidents et les utilisateurs disposent d\'un pont de 300 m??tres construit exclusivement pour leur commodit?? et leur facilit?? d\'utilisation. Caract??ristiques de l\'??tablissement; - Penthouse de luxe de 4 chambres. - une vue sur la mer, l\'horizon, le port de plaisance, le Burj Khalifa et le Burj Al Arab. - Acc??s par ascenseur priv?? au penthouse. - Terrasses enti??rement am??nag??es. - Salles de bains attenantes. - Cuisine ouverte et enti??rement ??quip??e. - Chambre de bonne. Caract??ristiques de Bulgari Residences: - Salle de sport et installations de relaxation ultramodernes. -Plage priv??e. - Service de voiturier. - Concierge 24h / 24. - l\'acc??s aux restaurants gastronomiques, au spa et au yacht club de l\'h??tel Bulgari.\r\n',991),(3,'Penthouse de luxe de 4 chambres en location Duba??, ??mirats Arabes Unis','Duba??, ??mirats Arabes Unis',4,1854,1,'image/Penthouse/penthouseLux3.jpg','oiPenthouse/penthouse3ext.jpg','oiPenthouse/penthouse3int.jpg','\r\nUne destination r??sidentielle majestueuse nich??e dans le croissant ouest de Palm Jumeirah. Exclusivement desservies par W Dubai - The Palm, les luxueuses r??sidences incarnent le summum de la vie en bord de mer ?? Duba??. Comprenant 104 maisons con??ues avec go??t r??parties sur huit manoirs, ce d??veloppement unique offre une exp??rience de vie extraordinaire garantissant une intimit??, une s??curit?? et un confort optimaux. L\'architecture fluide distincte est inspir??e par l\'??rosion ??olienne naturelle des montagnes de la r??gion, permettant ?? sa sculpture moderne de se fondre sans effort avec la beaut?? de son environnement naturel. Cet appartement de grand standing avec services exclusifs s\'??tend sur 8271 pieds carr??s et dispose d\'un vaste am??nagement d??cloisonn?? et de chambres somptueuses bien am??nag??es. Les fen??tres du sol au plafond entourent tout l\'espace de vie et s\'ouvrent sur de vastes terrasses priv??es qui donnent sur une vue imprenable sur le golfe Persique scintillant et la ligne d\'horizon ?? couper le souffle de la ville. La cuisine ouverte est enti??rement ??quip??e d\'armoires Poggenpohl exceptionnelles et d\'appareils ??lectrom??nagers de qualit?? professionnelle de Miele. Une palette neutre apaisante enrichie par la lumi??re naturelle et compl??t??e par un mobilier soigneusement s??lectionn?? impr??gne ses int??rieurs sophistiqu??s. Les r??sidents sont r??compens??s par une multitude de commodit??s remarquables sur place, notamment une piscine ?? d??bordement incurv??e au niveau du podium, un acc??s direct ?? la plage priv??e immacul??e, des services de conciergerie d??di??s et un acc??s exclusif au Club 104 qui offre un centre de remise en forme enti??rement ??quip??, une salle polyvalente, un cin??ma et un restaurant signature. Cet appartement serait un choix r??sidentiel ou une option d\'investissement spectaculaire. Toutes les photos proviennent d\'appartements t??moins et peuvent ne pas ??tre des photos du num??ro d\'unit?? sp??cifique mentionn??.\r\n',1132),(4,'Penthouse de luxe de 4 pi??ces en location ','1451 Brickell Avenue, Miami, FL 33131, Miami, Comt?? de Miami-Dade, Florida',4,1254,1,'image/Penthouse/penthouseLux4.jpg','oiPenthouse/penthouse4ext.jpg','oiPenthouse/penthouse4int.jpg','Echo Brickell est une boutique, r??sidentiel de grande hauteur dans l\'??picentre de la plus rapide quartier m??tropolitaine croissante de Miami, situ?? sur le c??t?? Est de la convoit??e Brickell Avenue. Echo Brickell est le r??sultat d\'une collaboration en temps de premi??re entre le c??l??bre architecte Carlos Ott et les innovateurs estim??s ?? yoo Studio. Avec seulement 180 r??sidences, Echo Brickell est l\'ic??ne architecturale la plus exclusive au sud de New York. Les r??sidences enti??rement fini, au design raffin?? disposent d\'une cuisine d\'??t?? et des appareils haut de gamme. Terrasses expansives apporter l\'ext??rieur et sol en marbre dans les espaces de vie ??l??ve l\'??chelle de grandeur. Ces r??sidences en ??dition limit??e r??unir l\'architecture innovante et un design int??rieur moderne pour cr??er un espace de vie qui est impeccable, passionnante et unique. L\'??tat de l\'art des r??sidences d\'Echo Brickell seront red??finir la norme d\'excellence pour la Floride du Sud haute lever vie. D??veloppeur ECHO BRICKELL CARLOS OTT Penthouse Propri??t?? enti??rement red??fini ce qu\'on peut attendre d\'un penthouse ultra-luxe avec le Carlos Ott Penthouse ?? Echo Brickell. Top-of-the-line mat??riaux, la conception in??gal??e, et une vue imprenable se r??unissent tout au long de 13 618 pieds carr??s de l\'Attique d\'annoncer clairement et ind??niablement que cette r??sidence de classe mondiale est non seulement unique; il est in??gal??e. Deux ??tages ultra-luxueux 4 chambres + salle de bain + 7,5 Piscine + Gym + Service Suite total Pieds carr??s: 13,618 pieds carr??s / 1,265 m?? Int??rieur: 10,110 pieds carr??s / 938 m?? Ext??rieur: 3,518 Pieds carr??s / 326 m??\r\n',3210);
/*!40000 ALTER TABLE `penthouse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studio`
--

DROP TABLE IF EXISTS `studio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studio`
--

LOCK TABLES `studio` WRITE;
/*!40000 ALTER TABLE `studio` DISABLE KEYS */;
INSERT INTO `studio` VALUES (5,'Studio de luxe en location de 100 m??','Rue de la Verrerie dans le 4??me arrondissement de Paris',3,550,1,'image/Studio/studioLux1.jpg','oiStudio/studio1ext.jpg','oiStudio/studio1int.jpg','3 pi??ces au 3??me ??tage d\'un immeuble du 18??me si??cle et il peut accueillir 4 personnes. Cet appartement est ??quip?? avec : un lave linge, un s??che linge, un lave-vaisselle, un acc??s internet haut d??bit illimit?? avec le wifi, un balcon.\r\n\r\nL\'immeuble du 18??me si??cle est ??quip?? avec : un ascenseur, un code d entr??e, vid??ophone.',100),(6,'Studio de luxe en location de 116 m??','Rue Meslay dans le 3??me arrondissement de Paris',4,651,1,'image/Studio/studioLux2.jpg','oiStudio/studio2ext.jpg','oiStudio/studio2int.jpg','4 pi??ces au 2??me ??tage d\'un immeuble du 19??me si??cle et il peut accueillir 6 personnes. Cet appartement est ??quip?? avec : un lave linge, un s??che linge, un lave-vaisselle, les chaines cabl??es, la t??l??vision, un acc??s internet haut d??bit illimit?? avec le wifi.\r\n\r\nL\'immeuble du 19??me si??cle est ??quip?? avec : un code d entr??e, un interphone.',116),(7,'Studio de luxe en location de 113 m??','Quai de Grenelle dans le 15??me arrondissement de Paris',4,514,1,'image/Studio/studioLux3.jpg','oiStudio/studio3ext.jpg','oiStudio/studio3int.jpg','4 pi??ces, est situ?? quai de Grenelle dans le 15??me arrondissement de Paris , au 24??me ??tage d\'un immeuble du 20??me si??cle et il peut accueillir 6 personnes. Cet appartement est ??quip?? avec : un lave linge, un s??che linge, un lave-vaisselle, les chaines cabl??es, la t??l??vision, un acc??s internet haut d??bit illimit?? avec le wifi.\r\n\r\nL\'immeuble du 20??me si??cle est ??quip?? avec : un ascenseur, un code d entr??e, une concierge.',113),(8,'Studio de luxe en location de 100 m??','Quai d Orsay dans le 7??me arrondissement de Paris',3,642,1,'image/Studio/studioLux4.jpg','oiStudio/studio4ext.jpg','oiStudio/studio4int.jpg','3 pi??ces, est situ?? quai d Orsay dans le 7??me arrondissement , au 6??me ??tage d\'un immeuble du 19??me si??cle et il peut accueillir 4 personnes. Cet appartement est ??quip?? avec : un lave linge, un s??che linge, un lave-vaisselle, les chaines cabl??es, la t??l??vision, un acc??s internet haut d??bit illimit?? avec le wifi, un balcon, une chaine hifi, Air Conditionn??.\r\n\r\nL\'immeuble du 19??me si??cle est ??quip?? avec : un parking, un ascenseur, un code d entr??e, vid??ophone, une concierge.\r\n',100);
/*!40000 ALTER TABLE `studio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
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
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Letang','Nicolas','sanji','nicolas@travail.com','f7c3bc1d808e04732adf679965ccc34ca7ae3441',0),(2,'Letang','Nicolas','sanji','nicolas@travail.com','7c4a8d09ca3762af61e59520943dc26494f8941b',0),(3,'pierre ','pauls ','popol','popol@pol.fr','f7c3bc1d808e04732adf679965ccc34ca7ae3441',0),(4,'Letang','Nicolas','s4nj1','fake@mail.fr','8a847452935321628e2c31c3092860dd9519c852',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-22 16:27:24
