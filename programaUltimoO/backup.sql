-- MySQL dump 10.13  Distrib 5.5.8, for Win32 (x86)
--
-- Host: localhost    Database: csf
-- ------------------------------------------------------
-- Server version	5.5.8

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
-- Table structure for table `aspirantes`
--

DROP TABLE IF EXISTS `aspirantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspirantes` (
  `cedula` int(8) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `curso` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspirantes`
--

LOCK TABLES `aspirantes` WRITE;
/*!40000 ALTER TABLE `aspirantes` DISABLE KEYS */;
INSERT INTO `aspirantes` VALUES (3934985,'Margarita','Hernández','04262366190','Informatica'),(3937860,'Humberto','Mendoza','04244016315','Contador'),(21369330,'Leo','Mendoza','04262365140','Contaduría'),(21603564,'Juan','Rodriguez','04243504335','Derecho');
/*!40000 ALTER TABLE `aspirantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditorias`
--

DROP TABLE IF EXISTS `auditorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditorias` (
  `codigoaudi` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `accion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`codigoaudi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditorias`
--

LOCK TABLES `auditorias` WRITE;
/*!40000 ALTER TABLE `auditorias` DISABLE KEYS */;
INSERT INTO `auditorias` VALUES (4,'','Traslado de Equipo','2012-11-30','10:46:32'),(5,'Leonardo J','Traslado de Equipo','2012-11-30','10:50:43'),(6,'Miguel','Traslado de Equipo','2012-11-30','10:53:05'),(7,'Mary','Mantenimiento de Equipo','2012-11-30','10:57:32'),(8,'Leonardo J','Traslado de Equipo','2012-11-30','11:01:29'),(9,'Leonardo J','Desincorporar','2012-11-30','11:08:23'),(10,'Leonardo J','Modificar Datos de Usuario','2012-11-30','11:15:00');
/*!40000 ALTER TABLE `auditorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `codigocargo` int(5) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codigocargo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Instructor(a)'),(4,'Contador(a)');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controles`
--

DROP TABLE IF EXISTS `controles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controles` (
  `codigocontrol` int(11) NOT NULL AUTO_INCREMENT,
  `codigoequipo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `personal` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `accion` enum('Incorporar','Desincorporar') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigocontrol`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controles`
--

LOCK TABLES `controles` WRITE;
/*!40000 ALTER TABLE `controles` DISABLE KEYS */;
INSERT INTO `controles` VALUES (1,'PC-T-01','Miguel','Desincorporar','2012-11-06'),(2,'PC-C-01','Mary','Incorporar','2012-11-30'),(3,'PC-C-01','Mary','Desincorporar','2012-11-30');
/*!40000 ALTER TABLE `controles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `codigocurso` int(5) NOT NULL AUTO_INCREMENT,
  `curso` varchar(30) NOT NULL,
  PRIMARY KEY (`codigocurso`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Informatica'),(2,'Contaduría'),(3,'Mecánica'),(4,'Derecho');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encargados`
--

DROP TABLE IF EXISTS `encargados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encargados` (
  `cedula` int(8) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encargados`
--

LOCK TABLES `encargados` WRITE;
/*!40000 ALTER TABLE `encargados` DISABLE KEYS */;
INSERT INTO `encargados` VALUES (15734994,'Yassnelly','Alvarez','Instructor(a)'),(4404221,'Miguel','Aponte','Instructor(a)'),(15055288,'Mary','Farfan','Instructor(a)');
/*!40000 ALTER TABLE `encargados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipos`
--

DROP TABLE IF EXISTS `equipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipos` (
  `codigoequipo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigoequipo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos`
--

LOCK TABLES `equipos` WRITE;
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` VALUES ('PC-M-01','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-C-01','Case','Computo','IBM','vacio','Negro',1,'Inactivo','LAB. C.N.C'),('PC-T-01','Teclado','Computo','IBM','vacio','Negro',1,'Inactivo','LAB. C.N.C'),('PC-M-02','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-T-02','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-C-02','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-M-03','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-C-03','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-T-03','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('TORNO-01','Torno','Herramienta','Lab-Volt','vacio','Blancos',1,'Activo','LAB. C.N.C'),('TORNO-02','Torno','Herramienta','Lab-Volt','vacio','Blanco',1,'Activo','LAB. C.N.C'),('PLOT-01','Plotter','Herramienta','Roland','vacio','Beige con Negro',1,'Activo','LAB. C.N.C'),('PC-M-04','Monitor','Computo','SAMSUNG','vacio','Blanca',1,'Activo','LAB. C.N.C'),('PC-C-04','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-T-04','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-M-05','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-C-05','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-T-05','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-M-06','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-C-06','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-T-06','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('FRES-01','Fresadora','Herramienta','Lab-Volt','vacio','Blanca',1,'Activo','LAB. C.N.C'),('FRES-02','Fresadora','Herramienta','Lab-Volt','vacio','Blanca',1,'Activo','LAB. C.N.C'),('PC-M-07','Monitor','Computo','SIRAGON','vacio','Negro con Gris',1,'Activo','LAB. C.N.C'),('PC-T-07','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-C-07','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-M-08','Monitor','Computo','SIRAGON','vacio','Negro con Gris',1,'Activo','LAB. C.N.C'),('PC-T-08','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('PC-C-08','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. C.N.C'),('#9','Switch','Herramienta','Superstack','vacio','Blanco',1,'Activo','LAB. C.N.C'),('AIRE','Aire Acondicionado','Equipo','YAMABISHI','vacio','Blanco',1,'Activo','LAB. C.N.C'),('EXT-01','Extintor','Equipo','Medanos','vacio','Rojo',1,'Activo','LAB. C.N.C'),('PIZ-01','Pizarron','Equipo','vacio','vacio','Blanco AcrÃ­lico',1,'Activo','LAB. C.N.C'),('0727','Escritorio','Oficina','vacio','vacio','Madera con Metal',1,'Activo','LAB. C.N.C'),('LAMP-01','LÃ¡mpara de Emergencia','Oficina','vacio','vacio','Blanca',1,'Activo','LAB. C.N.C'),('ESC-01','Escritorio','Oficina','vacio','vacio','Madera',1,'Activo','LAB. C.N.C'),('PC-M-09','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-09','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-09','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-10','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-10','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-10','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-11','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-11','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-11','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-12','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-12','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-12','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-13','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-13','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-13','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-14','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-14','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-14','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-15','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-15','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-15','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-16','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-16','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-16','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-17','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-17','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-17','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-18','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-18','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-18','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-19','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-19','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-19','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-20','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-20','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-20','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-21','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-C-21','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-21','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-22','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-22','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-22','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-23','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-23','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-23','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-24','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-24','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-24','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-25','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-25','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-25','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-M-26','Monitor','Computo','NOC','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PC-C-26','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-T-26','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('SER-M-01','Monitor','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('SER-C-01','Case','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('IMPC-01','Impresora','Computo','Epson-Stylus','vacio','Gris con Negro',1,'Activo','LAB. Informatica I'),('PROT-00-19','Protector de Pantalla','Computo','Clip','vacio','3 Negros y 16 Blancos',19,'Activo','LAB. Informatica I'),('PC-MO-00-08','Mouse','Computo','IBM','vacio','8 Mouse de Color Negro',8,'Activo','LAB. C.N.C'),('PC-MO-09-26','Mouse','Computo','IBM','vacio','18 Mouse de Color Negro',18,'Activo','LAB. Informatica I'),('SER-T-01','Teclado','Computo','IBM','vacio','Negro',1,'Activo','LAB. Informatica I'),('PC-R-01-08','Reguladores','Computo','Omega','vacio','8 Reguladores Blancos',8,'Activo','LAB. C.N.C'),('PC-R-09-26','Reguladores','Computo','Omega','vacio','18 Reguladores Blancos',18,'Activo','LAB. Informatica I'),('MESAVID','Mesa de Video Beam','Oficina','Bretford','vacio','Beige de Metal Movible',1,'Activo','LAB. Informatica I'),('PIZ-02','Pizarron ','Oficina','Medanos','vacio','Blanco Acrilico',1,'Activo','LAB. Informatica I'),('EXT-02','Extintor','Herramienta','Medanos','vacio','Rojo contra fuego',1,'Activo','LAB. Informatica I'),('ESTANT-01','Estante','Oficina','vacio','vacio','Beige de Formica ',1,'Activo','LAB. Informatica I'),('#8 ','Switch','Computo','D-Link','vacio','Negro',1,'Activo','LAB. Informatica I'),('ESC-02','Escritorio','Oficina','vacio','vacio','Madera',1,'Activo','LAB. Informatica I'),('MSILLAS-01-16','Sillas Giratorias','Oficina','vacio','vacio','Grises',16,'Activo','LAB. C.N.C'),('MSILLAS-17-37','Sillas Giratorias','Oficina','vacio','vacio','Grises y una dañada',21,'Activo','LAB. Informatica I'),('M-01-08','Meson','Oficina','vacio','vacio','8 Mesones de Madera con gabetas',8,'Activo','LAB. C.N.C'),('M-09-20','Meson','Oficina','vacio','vacio','9 Mesones de Madera con gabetas y 3 tipo cubiculos de madera',12,'Activo','LAB. Informatica I'),('M-GIBBS-CAM-01','MODULO DE TORNO','Oficina','vacio','vacio','Manual Gibbs CAM 2002',4,'Activo','LAB. C.N.C'),('M-LAB-VOLT-03','FAMILIARIZACION CON LA FRESADORA CNC','Oficina','vacio','vacio','Manual Automatizacion y Robotica',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-02','MODULO DE FRESA','Oficina','vacio','vacio','Manual Gibbs CAM 2002',4,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-03','TORNO AVANZADO','Oficina','vacio','vacio','Manual',4,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-04','ADDENDUM DE PRODUCCION','Oficina','vacio','vacio','Manual GIBBS CAN 2002',4,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-05','GIBBS EDITOR ONE','Oficina','vacio','vacio','Manual',4,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-06','GUIA DE PLUG-INS','Oficina','vacio','vacio','Manual Gibbs CAM 2002',4,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-07','MANUAL DE WIZARS','Oficina','vacio','vacio','Manual Gibbs CAM 2002',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-08','GUIA COMUN DE REFERENCIA','Oficina','vacio','vacio','Manual Gibbs CAM 2002',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-09','GUIA DE INTRODUCCION','Oficina','vacio','vacio','Manual Gibbs CAM 2002',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-10','CREACION DE GEOMETRIA','Oficina','vacio','vacio','Manual',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-11','MECANIZADO POR CNC TORNO Y FRESADORA','Oficina','vacio','vacio','Manual',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-12','PROGRAMA MECANIZADO POR CNC','Oficina','vacio','vacio','Manual',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-13','SOFTWARE PARA FRESADORA CNC','Oficina','vacio','vacio','Manual Version 5.2',1,'Activo','LAB. C.N.C'),('M-GIBBS-CAM-14','SOFTWARE PARA TORNO CNC','Oficina','vacio','vacio','Manual Version 5.2',1,'Activo','LAB. C.N.C'),('M-LAB-VOLT-01','SOFTWARE PARA FRESADORA CNC','Oficina','vacio','vacio','Manual Automatizacion y Robotica',1,'Activo','LAB. C.N.C'),('M-LAB-VOLT-02',' SOFTWARE PARA TORNO CNC','Oficina','vacio','vacio','Manual',1,'Activo','LAB. C.N.C'),('M-LAB-VOLT-04','FAMILIARIZACION CON LA TORNO CNC','Oficina','vacio','vacio','Manual',1,'Activo','LAB. C.N.C'),('M-LAB-VOLT-05','TORNO CNC','Oficina','vacio','vacio','Manual 5.500',1,'Activo','LAB. C.N.C'),('M-LAB-VOLT-06','AUTOMATIC TOOL CHANGER','Oficina','vacio','vacio','Manual Mod: 5514  MANUAL DE INSTRUCCIÃ“N',1,'Activo','LAB. C.N.C'),('M-LAB-VOLT-07','DAC/FAC LINK II','Oficina','vacio','vacio','Manual ',1,'Activo','LAB. C.N.C'),('HERR-EQ-01','PUNTO GIRATORIO','Herramienta','vacio','vacio','Herramienta ',1,'Activo','LAB. C.N.C'),('HERR-EQ-02','PINZA PARA LA FRESA ','Herramienta','vacio','vacio','Herramienta de 3/8\"',1,'Activo','LAB. C.N.C'),('HERR-EQ-03','PINZA PARA LA FRESA ','Herramienta','vacio','vacio','Herramienta de 3/16\"',1,'Activo','LAB. C.N.C'),('HERR-EQ-04',' PINZA PARA LA FRESA ','Herramienta','vacio','vacio','Herramienta de 1/4\"',1,'Activo','LAB. C.N.C'),('HERR-EQ-05','LLAVE DE DADO','Herramienta','vacio','vacio','Herramienta de  8.5 mm',1,'Activo','LAB. C.N.C'),('HERR-EQ-06','SOPORTE. H.B ','Herramienta','vacio','vacio','Herramienta ROUSE L5',1,'Activo','LAB. C.N.C'),('HERR-EQ-07','SOPORTE NVR','Herramienta','vacio','vacio','Herramienta 3/8-2',1,'Activo','LAB. C.N.C'),('HERR-EQ-08','SOPORTE BRIDA PARA LA FRESADORA','Herramienta','vacio','vacio','Herramienta',1,'Activo','LAB. C.N.C'),('HERR-EQ-09','LLAVE DE PLATO DEL TORNO','Herramienta','vacio','vacio','Herramienta',1,'Activo','LAB. C.N.C'),('HERR-EQ-10','PORTAHERRAMIENTAS PARA TORNO DE UNA CUCH','Herramienta','vacio','vacio','Herramienta',1,'Activo','LAB. C.N.C'),('HERR-EQ-11','FRESA DE 1/4\" x 3/8\"','Herramienta','vacio','vacio','Herramienta HSS  POLAND',1,'Activo','LAB. C.N.C'),('HERR-EQ-12','FRESA DE 3/16\" x 3/8\"','Herramienta','vacio','vacio','Herramienta HSS  POLAND',1,'Activo','LAB. C.N.C'),('HERR-EQ-13','FRESA DE 1/2\" x  3/8\"','Herramienta','vacio','vacio','Herramienta HSS  POLAND',1,'Activo','LAB. C.N.C'),('HERR-EQ-14','SOPORTE DE CALCE PARA LA FRESADORA','Herramienta','vacio','vacio','Herramienta',1,'Activo','LAB. C.N.C'),('HERR-EQ-15','MECHA','Herramienta','vacio','vacio','Herramienta de 1/2\"',1,'Activo','LAB. C.N.C'),('HERR-EQ-16','MECHA ','Herramienta','vacio','vacio','Herramienta de 3/16\"',1,'Activo','LAB. C.N.C'),('HERR-EQ-17','LLAVE ALLEN ','Herramienta','vacio','vacio','Herramienta',1,'Activo','LAB. C.N.C'),('HERR-EQ-18','LLAVE AJUSTABLE ','Herramienta','vacio','vacio','Herramienta de 10\" ( TAPARIA 1172N )',1,'Activo','LAB. C.N.C'),('HERR-EQ-19','LLAVE DE BOCA FIJA ','Herramienta','vacio','vacio','Herramienta de 7/16\" - 3/8\"',1,'Activo','LAB. C.N.C'),('LABM-CAD-CAM-01','LLAVE ELECTRONICA','Herramienta','vacio','vacio','( SRB02094  0129A38145 )',1,'Activo','LAB. C.N.C'),('LABM-CAD-CAM-02','CD. DE INSTALACION CNC','Oficina','vacio','vacio','NIVEL 5 PARA FRESADORA Y TORNO',1,'Activo','LAB. C.N.C'),('LABM-CAD-CAM-03','SOFTWARE IBM MONITOR CD','Oficina','vacio','vacio','CD',1,'Activo','LAB. C.N.C'),('LABM-CAD-CAM-04','DISKETTE, FIRMWARE 5500','Oficina','vacio','vacio','VERSION 3.03.06. 1/1',1,'Activo','LAB. C.N.C'),('LABM-CAD-CAM-05','BROCHA DE 1\"','Herramienta','vacio','vacio','Herramienta',1,'Activo','LAB. C.N.C'),('LABM-CAD-CAM-06','BROCHA DE 3\"','Herramienta','vacio','vacio','Herramienta',1,'Activo','LAB. C.N.C');
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `codigoestado` int(5) NOT NULL AUTO_INCREMENT,
  `estado` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codigoestado`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Activo'),(3,'Inactivo');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laboratorios`
--

DROP TABLE IF EXISTS `laboratorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laboratorios` (
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `dependencia` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `encargado` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `encargado2` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laboratorios`
--

LOCK TABLES `laboratorios` WRITE;
/*!40000 ALTER TABLE `laboratorios` DISABLE KEYS */;
INSERT INTO `laboratorios` VALUES ('LAB. C.N.C',0,'C.T.I La Victoria','Yassnelly','Miguel'),('LAB. Informatica I',0,'C.F.S Metalminero La Victoria','Mary','vacio');
/*!40000 ALTER TABLE `laboratorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mantenimientos`
--

DROP TABLE IF EXISTS `mantenimientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mantenimientos` (
  `codigoequipo` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigomantenimiento` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigomantenimiento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mantenimientos`
--

LOCK TABLES `mantenimientos` WRITE;
/*!40000 ALTER TABLE `mantenimientos` DISABLE KEYS */;
INSERT INTO `mantenimientos` VALUES ('PC-C-01',1,'Mary','Preventivo','Formateo para cambio de windows','2012-11-06'),('PC-C-01',2,'Mary','Preventivo','Analizar antivirus','2012-11-30');
/*!40000 ALTER TABLE `mantenimientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `codigomarca` int(5) NOT NULL AUTO_INCREMENT,
  `marca` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codigomarca`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'IBM'),(2,'SIRAGON'),(3,'SAMSUNG'),(4,'Lab-Volt'),(5,'Roland'),(6,'YAMABISHI'),(7,'Superstack'),(8,'Medanos'),(9,'NOC'),(10,'Epson-Stylus'),(11,'Clip'),(12,'Omega'),(13,'Bretford'),(14,'D-Link'),(16,'LG');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos`
--

DROP TABLE IF EXISTS `tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos` (
  `codigotipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigotipo`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos`
--

LOCK TABLES `tipos` WRITE;
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` VALUES (1,'Computo'),(2,'Herramienta'),(3,'Equipo'),(4,'Oficina'),(10,'Deportivo');
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traslados`
--

DROP TABLE IF EXISTS `traslados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traslados` (
  `codigotranslado` int(8) NOT NULL AUTO_INCREMENT,
  `codigoequipo` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigotranslado`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traslados`
--

LOCK TABLES `traslados` WRITE;
/*!40000 ALTER TABLE `traslados` DISABLE KEYS */;
INSERT INTO `traslados` VALUES (1,'PC-C-01','LAB. C.N.C','LAB. Informatica I','Miguel','2012-11-06'),(2,'PC-C-01','LAB. Informatica I','LAB. C.N.C','Yassnelly','2012-11-06'),(3,'PC-C-01','LAB. C.N.C','LAB. Informatica I','Miguel','2012-11-30'),(4,'PC-C-01','LAB. Informatica I','LAB. C.N.C','Mary','2012-11-30'),(5,'PC-C-01','LAB. C.N.C','LAB. Informatica I','Miguel','2012-11-30'),(6,'PC-C-01','LAB. Informatica I','LAB. C.N.C','Yassnelly','2012-11-30');
/*!40000 ALTER TABLE `traslados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `cedula` int(8) NOT NULL,
  `telefono` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombreusuario` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pregunta` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `respuesta` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (21369330,'04262365140','Administrador','Leonardo J','Mendoza H','leonardo','123','hola','chau'),(21272323,'04262366190','Facilitador','Juan','Tapias','juan','12345','edad','19'),(18163228,'04144458688','Facilitador','Jesus','Saturno','Jesus','1234','Casado','Si');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-12-03 11:41:02
