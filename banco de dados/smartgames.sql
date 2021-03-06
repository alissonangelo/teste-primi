-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: db_smartgames
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_cidade`
--

DROP TABLE IF EXISTS `tbl_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_cidade` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_cidade`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cidade`
--

LOCK TABLES `tbl_cidade` WRITE;
/*!40000 ALTER TABLE `tbl_cidade` DISABLE KEYS */;
INSERT INTO `tbl_cidade` VALUES (1,'Jandira'),(2,'Osasco'),(3,'Itapevi'),(4,'São Paulo'),(5,'Barueri');
/*!40000 ALTER TABLE `tbl_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_classificacao`
--

DROP TABLE IF EXISTS `tbl_classificacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_classificacao` (
  `cod_classificacao` int(11) NOT NULL AUTO_INCREMENT,
  `classificacao` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_classificacao`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_classificacao`
--

LOCK TABLES `tbl_classificacao` WRITE;
/*!40000 ALTER TABLE `tbl_classificacao` DISABLE KEYS */;
INSERT INTO `tbl_classificacao` VALUES (1,'Livre'),(2,'10 Anos'),(3,'12 Anos'),(4,'14  Anos'),(5,'16 Anos'),(6,'18 Anos');
/*!40000 ALTER TABLE `tbl_classificacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_desenvolvedora`
--

DROP TABLE IF EXISTS `tbl_desenvolvedora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_desenvolvedora` (
  `cod_desenvolvedora` int(11) NOT NULL AUTO_INCREMENT,
  `desenvolvedora` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_desenvolvedora`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_desenvolvedora`
--

LOCK TABLES `tbl_desenvolvedora` WRITE;
/*!40000 ALTER TABLE `tbl_desenvolvedora` DISABLE KEYS */;
INSERT INTO `tbl_desenvolvedora` VALUES (1,'Warner Bros. Interactive'),(2,'Valve Software'),(3,'Sony Computer Entertainment'),(4,'Team Ico'),(5,'Electronic Arts'),(6,'Bandai Namco Entertainment');
/*!40000 ALTER TABLE `tbl_desenvolvedora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco`
--

DROP TABLE IF EXISTS `tbl_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_endereco` (
  `cod_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cidade` int(11) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `cep` varchar(9) NOT NULL,
  PRIMARY KEY (`cod_endereco`),
  KEY `cod_cidade` (`cod_cidade`),
  CONSTRAINT `tbl_endereco_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `tbl_cidade` (`cod_cidade`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco`
--

LOCK TABLES `tbl_endereco` WRITE;
/*!40000 ALTER TABLE `tbl_endereco` DISABLE KEYS */;
INSERT INTO `tbl_endereco` VALUES (1,5,'Av. Piracema','Tamboré','669','06460-030'),(2,5,'Rua General de Divisão Pedro Rodrigues da Silva','Nova Aldeinha','400','06440-180'),(3,2,'Av. dos Autonomistas','Vila Yara','1400','06020-010'),(4,3,'R. Leopoldina de Camargo','Centro','260','06653-040'),(5,4,'Avenida Aricanduva','Aricanduva','5555','03572-000');
/*!40000 ALTER TABLE `tbl_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estoque`
--

DROP TABLE IF EXISTS `tbl_estoque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_estoque` (
  `cod_estoque` int(11) NOT NULL AUTO_INCREMENT,
  `cod_loja` int(11) NOT NULL,
  `cod_jogo` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`cod_estoque`),
  KEY `cod_loja` (`cod_loja`),
  KEY `cod_jogo` (`cod_jogo`),
  CONSTRAINT `tbl_estoque_ibfk_1` FOREIGN KEY (`cod_loja`) REFERENCES `tbl_loja` (`cod_loja`),
  CONSTRAINT `tbl_estoque_ibfk_2` FOREIGN KEY (`cod_jogo`) REFERENCES `tbl_jogo` (`cod_jogo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estoque`
--

LOCK TABLES `tbl_estoque` WRITE;
/*!40000 ALTER TABLE `tbl_estoque` DISABLE KEYS */;
INSERT INTO `tbl_estoque` VALUES (1,1,1,25),(2,1,3,10),(3,1,6,5),(4,2,1,13),(5,2,2,10),(6,3,1,20),(7,3,2,20),(8,3,3,8),(9,3,4,5),(10,3,5,16),(11,3,6,30),(12,4,4,20),(13,4,5,15);
/*!40000 ALTER TABLE `tbl_estoque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_jogo`
--

DROP TABLE IF EXISTS `tbl_jogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_jogo` (
  `cod_jogo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cod_classificacao` int(11) NOT NULL,
  `cod_desenvolvedora` int(11) NOT NULL,
  `data_lancamento` varchar(10) NOT NULL,
  `img_jogo` varchar(200) NOT NULL,
  PRIMARY KEY (`cod_jogo`),
  KEY `cod_classificacao` (`cod_classificacao`),
  KEY `cod_desenvolvedora` (`cod_desenvolvedora`),
  CONSTRAINT `tbl_jogo_ibfk_1` FOREIGN KEY (`cod_classificacao`) REFERENCES `tbl_classificacao` (`cod_classificacao`),
  CONSTRAINT `tbl_jogo_ibfk_2` FOREIGN KEY (`cod_desenvolvedora`) REFERENCES `tbl_desenvolvedora` (`cod_desenvolvedora`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jogo`
--

LOCK TABLES `tbl_jogo` WRITE;
/*!40000 ALTER TABLE `tbl_jogo` DISABLE KEYS */;
INSERT INTO `tbl_jogo` VALUES (1,'Mortal Kombat 11',6,1,'23/04/2019','https://store-images.s-microsoft.com/image/apps.9688.70804610839547354.8da93c46-fd13-4b16-8ebe-e8e02c53d93e.09c2e91e-28bd-4f6f-bfd6-79d6b241667a?w=180&h=270&q=60'),(2,'Portal 2',2,2,'19/04/2011','https://store.playstation.com/store/api/chihiro/00_09_000/container/BR/pt/999/UP2061-NPUB31077_00-PORTAL2DIGITAL01/1580198984000/image?w=240&h=240&bg_color=000000&opacity=100&_version=00_09_000'),(3,'The Last Of Us',6,3,'14/06/2013','https://upload.wikimedia.org/wikipedia/pt/b/be/The_Last_of_Us_capa.png'),(4,'Shadow of the Colossus',4,4,'18/10/2005','https://upload.wikimedia.org/wikipedia/pt/6/66/ShadowOfTheColossusGH.jpg'),(5,'FIFA 20',1,5,'27/09/2019','https://cdn-products.eneba.com/resized-products/qoA2QojrFaqg8VtfKSEJm1jsXU-9UEJJSNf2WTvMBjE_390x400_1x-0.jpeg'),(6,'NARUTO SHIPPUDEN: Ultimate Ninja STORM 4',4,6,'04/02/2016','https://cdn-products.eneba.com/resized-products/KA2Y2Qb_390x400_1x-0.jpg');
/*!40000 ALTER TABLE `tbl_jogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_jogo_plataforma`
--

DROP TABLE IF EXISTS `tbl_jogo_plataforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_jogo_plataforma` (
  `cod_jogo_plataforma` int(11) NOT NULL AUTO_INCREMENT,
  `cod_jogo` int(11) NOT NULL,
  `cod_plataforma` int(11) NOT NULL,
  PRIMARY KEY (`cod_jogo_plataforma`),
  KEY `cod_jogo` (`cod_jogo`),
  KEY `cod_plataforma` (`cod_plataforma`),
  CONSTRAINT `tbl_jogo_plataforma_ibfk_1` FOREIGN KEY (`cod_jogo`) REFERENCES `tbl_jogo` (`cod_jogo`),
  CONSTRAINT `tbl_jogo_plataforma_ibfk_2` FOREIGN KEY (`cod_plataforma`) REFERENCES `tbl_plataforma` (`cod_plataforma`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jogo_plataforma`
--

LOCK TABLES `tbl_jogo_plataforma` WRITE;
/*!40000 ALTER TABLE `tbl_jogo_plataforma` DISABLE KEYS */;
INSERT INTO `tbl_jogo_plataforma` VALUES (1,1,4),(2,1,6),(3,1,8),(4,2,3),(5,2,5),(6,3,3),(7,3,4),(8,4,2),(9,4,3),(10,4,4),(11,5,4),(12,5,6),(13,5,8),(14,6,4),(15,6,6);
/*!40000 ALTER TABLE `tbl_jogo_plataforma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_loja`
--

DROP TABLE IF EXISTS `tbl_loja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_loja` (
  `cod_loja` int(11) NOT NULL AUTO_INCREMENT,
  `unidade` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cod_endereco` int(11) NOT NULL,
  `img_loja` varchar(200) NOT NULL,
  PRIMARY KEY (`cod_loja`),
  KEY `cod_endereco` (`cod_endereco`),
  CONSTRAINT `tbl_loja_ibfk_1` FOREIGN KEY (`cod_endereco`) REFERENCES `tbl_endereco` (`cod_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_loja`
--

LOCK TABLES `tbl_loja` WRITE;
/*!40000 ALTER TABLE `tbl_loja` DISABLE KEYS */;
INSERT INTO `tbl_loja` VALUES (1,'Shopping Tamboré','(11) 4551-5988',1,'https://www.guiadasemana.com.br/contentFiles/system/pictures/2012/11/62022/original/shopping-tambore.jpg'),(2,'Parque Shopping','(11) 4668-8955',2,'https://www.parqueshoppingbarueri.com.br/upload/shopping/2.jpg'),(3,'Shopping Aricanduva','(11) 4774-0211',5,'https://lh3.googleusercontent.com/proxy/G0MsWoMmW6utLeL4aezpKCFG1-G0mjOPb5Tjl4Oifg8OPH3E25hr_WdJ_Cw8Ib7Qo5GvQU9oBe3u7hV97H91hTJo9YopPZp87Vzy-Dn7VjVz_kp3x8a63FBZuK3GaNH_Uf9OhBTeCA'),(4,'Ita Shopping Centro','(11) 5112-3200',4,'https://www.itashopping.com.br/itashopping_centro/cache/widgetkit/gallery/54/foto_02-52390e6c9e.jpg');
/*!40000 ALTER TABLE `tbl_loja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plataforma`
--

DROP TABLE IF EXISTS `tbl_plataforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_plataforma` (
  `cod_plataforma` int(11) NOT NULL AUTO_INCREMENT,
  `plataforma` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod_plataforma`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plataforma`
--

LOCK TABLES `tbl_plataforma` WRITE;
/*!40000 ALTER TABLE `tbl_plataforma` DISABLE KEYS */;
INSERT INTO `tbl_plataforma` VALUES (1,'PlayStation 1'),(2,'PlayStation 2'),(3,'PlayStation 3'),(4,'PlayStation 4'),(5,'Xbox 360'),(6,'Xbox One'),(7,'Nintendo Wii'),(8,'Nintendo Switch');
/*!40000 ALTER TABLE `tbl_plataforma` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-16  3:27:24
