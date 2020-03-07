-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: serachdb
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'First Article','cdmcd snfvonfrv vfkmv nfjecnd nvsodsmd v nvnf foijmifoesjrf nmklmfrv nvksjnfj sdnvksdjvcn ncvosdjcnsc \nsdmkmsc mvdsvm mvsmvlvl dmv,xvm  reiogureogj dhfas sdvnds,nv vjdfoijv cnxvckdmnfkl dfkmvfdo mfoaskdmfcoids','Noor','2017-11-25 12:33:55'),(2,'Third article','cdmcd snfvonfrv vfkmv nfjecnd nvsodsmd v nvnf foijmifoesjrf nmklmfrv nvksjnfj sdnvksdjvcn ncvosdjcnsc \r sdmkmsc mvdsvm mvsmvlvl dmv,xvm  reiogureogj dhfas sdvnds,nv vjdfoijv ddd cnxvckdmnfkl dfkmvfdo mfoaskdmfcoids','Noor','2017-11-25 12:33:55'),(3,'Second Article','cdmcd snfvonfrv vfkmv nfjecnd nvsodsmd v nvnf foijmifoesjrf nmklmfrv nvksjnfj sdnvksdjvcn ncvosdjcnsc \r sdmkmsc mvdsvm mvsmvlvl dmv,xvm  reiogureogj dhfas sdvnds,nv vjdfoijv cnxvckdmnfkl xxx dfkmvfdo mfoaskdmfcoids','Ali','2018-05-12 10:33:55'),(4,'fourth article','this is article numberfour. mvfd,n kfdlvgk bmkdlvl vmxvx,cv moifoif mvofv mvpierjgmreo bfweiufb jfwe8f9jef nfifnweirf nvfrufioe nfurwfnhurwi nvinfirnf nuvnwriufnr nwfuwe9f nSYUgqs mwfjeroigjre jpobtjtjo','asghar','2020-01-02 06:24:11'),(5,'Fifh article','This is article num ber 5','Alia','2019-04-04 11:03:44');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-07 20:36:15
