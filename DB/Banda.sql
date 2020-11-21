-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: Banda
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-1

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
-- Table structure for table `Cancion`
--

DROP TABLE IF EXISTS `Cancion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cancion` (
  `clv_Cancion` varchar(11) NOT NULL,
  `nombreCancion` varchar(45) NOT NULL,
  `Duracion_Cancion` time(6) NOT NULL,
  `Status_Cancion` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`clv_Cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cancion`
--

LOCK TABLES `Cancion` WRITE;
/*!40000 ALTER TABLE `Cancion` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cancion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disco`
--

DROP TABLE IF EXISTS `Disco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Disco` (
  `clv_Disco` varchar(20) NOT NULL,
  `Nombre_Disco` varchar(45) NOT NULL,
  `cantCanciones` int(2) NOT NULL,
  `Anio_Disco` date NOT NULL,
  `Status_Disco` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`clv_Disco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disco`
--

LOCK TABLES `Disco` WRITE;
/*!40000 ALTER TABLE `Disco` DISABLE KEYS */;
/*!40000 ALTER TABLE `Disco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Eventos`
--

DROP TABLE IF EXISTS `Eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Eventos` (
  `clv_Eventos` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEventos` varchar(45) NOT NULL,
  `Descripcion_Eventos` varchar(250) NOT NULL,
  `Direccion_Eventos` varchar(45) NOT NULL,
  `fechainicio_Eventos` date NOT NULL,
  `HoraInicio_Eventos` time(6) NOT NULL,
  `FechaFin_Eventos` date NOT NULL,
  `HoraFin_Eventos` time(6) NOT NULL,
  `Status_Eventos` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`clv_Eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Eventos`
--

LOCK TABLES `Eventos` WRITE;
/*!40000 ALTER TABLE `Eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FotosGaleria`
--

DROP TABLE IF EXISTS `FotosGaleria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FotosGaleria` (
  `clv_FotosGaleria` int(11) NOT NULL,
  `Nombre_FotosGaleria` varchar(45) NOT NULL,
  `Desc_FotosGaleria` varchar(45) NOT NULL,
  `URL_FotosGaleria` varchar(45) NOT NULL,
  `Status_FotosGaleria` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`clv_FotosGaleria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FotosGaleria`
--

LOCK TABLES `FotosGaleria` WRITE;
/*!40000 ALTER TABLE `FotosGaleria` DISABLE KEYS */;
INSERT INTO `FotosGaleria` VALUES (1,'foto1','logo de la banda','../Recursos/Public/galeria/img1.png','1'),(2,'foto2','otro','../Recursos/Public/galeria/img2.png','1'),(3,'foto3','oij','../Recursos/Public/galeria/img3.png','1'),(4,'foto4','bhj','../Recursos/Public/galeria/img4.png','1'),(5,'foto5','bnm','../Recursos/Public/galeria/img5.png','1'),(6,'foto6','cvbn','../Recursos/Public/galeria/img6.png','1'),(7,'foto7','vbnm','../Recursos/Public/galeria/img7.png','1'),(8,'foto8','ertyu','../Recursos/Public/galeria/img8.png','1'),(9,'foto9','qwert','../Recursos/Public/galeria/img9.png','1'),(10,'foto10','werty','../Recursos/Public/galeria/img10.png','1');
/*!40000 ALTER TABLE `FotosGaleria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Informacion`
--

DROP TABLE IF EXISTS `Informacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Informacion` (
  `clv_Informacion` int(11) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Facebook_URL` varchar(45) NOT NULL,
  `instagram_URL` varchar(45) NOT NULL,
  `SoundCloud_URL` varchar(45) NOT NULL,
  `Tweeter_URL` varchar(45) NOT NULL,
  `Youtube_URL` varchar(100) NOT NULL,
  `HistoriaBanda` varchar(500) NOT NULL,
  `FOTOSSINDETALLAR` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`clv_Informacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Informacion`
--

LOCK TABLES `Informacion` WRITE;
/*!40000 ALTER TABLE `Informacion` DISABLE KEYS */;
INSERT INTO `Informacion` VALUES (1,'7124569823','danie_beltran@hotmail.com','https://www.facebook.com/bandaoutsideoficial','https://www.instagram.com/bandaoutsidebogota/','https://soundcloud.com/banda-outside','https://twitter.com/outside_banda','https://www.youtube.com/channel/UC763zG65wIrm-hvtCUgeu2Q','la banda se creo hace 8 años con el vocalista daniel beltran y luego paso que','../Recursos/Public/imginf.png');
/*!40000 ALTER TABLE `Informacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Noticias`
--

DROP TABLE IF EXISTS `Noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Noticias` (
  `idNoticias` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Noticias` varchar(45) NOT NULL,
  `Descripcion_Noticias` varchar(245) NOT NULL,
  `FechaPublicacion_Noticias` date NOT NULL,
  `HoraPub_Noticias` time(6) NOT NULL,
  `FechaFin_Noticias` date NOT NULL COMMENT '\n',
  `HoraFinPub_Noticias` time(6) NOT NULL,
  `URL_Img_Noticias` varchar(100) NOT NULL,
  `Status_Noticias` char(1) NOT NULL,
  PRIMARY KEY (`idNoticias`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Noticias`
--

LOCK TABLES `Noticias` WRITE;
/*!40000 ALTER TABLE `Noticias` DISABLE KEYS */;
INSERT INTO `Noticias` VALUES (1,'proximo video','lanzamineto de nuestro proximo video musical','2019-11-19','11:00:00.000000','2019-11-29','11:00:00.000000','../Recursos/Public/Noticias/img1.png','1'),(2,'nuevo video','proximo lunes','0000-00-00','00:00:00.000000','0000-00-00','00:00:00.000000','../Recursos/Public/Noticias/img2.png','1'),(3,'celebrando','la  banda esta contenta','0000-00-00','00:00:00.000000','0000-00-00','00:00:00.000000','../Recursos/Public/Noticias/img3.png','1'),(4,'fotos','fotos exclusivas de la nueva grabacion','0000-00-00','00:00:00.000000','0000-00-00','00:00:00.000000','../Recursos/Public/Noticias/img4.png','1'),(5,'regresa pronto','proximo sensillo','0000-00-00','00:00:00.000000','0000-00-00','00:00:00.000000','../Recursos/Public/Noticias/img5.png','1'),(6,'nuevo!!','nuevo poster','0000-00-00','00:00:00.000000','0000-00-00','00:00:00.000000','../Recursos/Public/Noticias/img6.png','1'),(7,'somos raza','sensillo promocional','0000-00-00','00:00:00.000000','0000-00-00','00:00:00.000000','../Recursos/Public/Noticias/img7.png','1'),(8,'logo','estamos esperando','0000-00-00','00:00:00.000000','0000-00-00','00:00:00.000000','../Recursos/Public/Noticias/img8.png','1');
/*!40000 ALTER TABLE `Noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `clv_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(45) NOT NULL,
  `contrasenia` varchar(10) NOT NULL,
  `Tipo_Usuario` varchar(45) NOT NULL,
  `Email_Usuario` varchar(45) NOT NULL,
  `Status_Usuario` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`clv_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'Admin','admin123','Administrador','isaiasclaudio777@gmail.com','1'),(2,'','admin123','','isaiasclaudio777@gmail.com','1');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Videos`
--

DROP TABLE IF EXISTS `Videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Videos` (
  `idVideos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `seccion` varchar(45) NOT NULL,
  `URL_Video` varchar(45) NOT NULL,
  `StatusVideos` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idVideos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Videos`
--

LOCK TABLES `Videos` WRITE;
/*!40000 ALTER TABLE `Videos` DISABLE KEYS */;
INSERT INTO `Videos` VALUES (1,'','FondoHome','../../Recursos/Public/fondos/','1'),(2,'zIG4YHCt7nA','VideosLista','https://www.youtube.com/watch?v=zIG4YHCt7nA','1'),(3,'LiMi_K0Lu-E','VideosLista','https://www.youtube.com/watch?v=LiMi_K0Lu-E','1'),(4,'B8RS3mgpnfQ','VideosLista','https://www.youtube.com/watch?v=B8RS3mgpnfQ','1'),(5,'tsJEmLkphrI','VideosLista','https://www.youtube.com/watch?v=tsJEmLkphrI','1');
/*!40000 ALTER TABLE `Videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancionDisco`
--

DROP TABLE IF EXISTS `cancionDisco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cancionDisco` (
  `clv_Disco` varchar(20) NOT NULL,
  `clv_Cancion` varchar(11) NOT NULL,
  PRIMARY KEY (`clv_Disco`),
  KEY `cancionDisco_Cancion_FK` (`clv_Cancion`),
  CONSTRAINT `cancionDisco_Cancion_FK` FOREIGN KEY (`clv_Cancion`) REFERENCES `Cancion` (`clv_Cancion`) ON UPDATE CASCADE,
  CONSTRAINT `cancionDisco_Disco_FK` FOREIGN KEY (`clv_Disco`) REFERENCES `Disco` (`clv_Disco`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancionDisco`
--

LOCK TABLES `cancionDisco` WRITE;
/*!40000 ALTER TABLE `cancionDisco` DISABLE KEYS */;
/*!40000 ALTER TABLE `cancionDisco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'Banda'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-22 11:27:44
