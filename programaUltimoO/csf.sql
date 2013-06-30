-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2013 a las 22:12:54
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `csf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

CREATE TABLE IF NOT EXISTS `aspirantes` (
  `cedula` int(8) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `curso` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `aspirantes`
--

INSERT INTO `aspirantes` (`cedula`, `nombre`, `apellido`, `telefono`, `curso`) VALUES
(3934985, 'Margarita', 'Hernández', '04262366190', 'Informatica'),
(3937860, 'Humberto', 'Mendoza', '04244016315', 'Contador'),
(21369330, 'Leo', 'Mendoza', '04262365140', 'Contaduría'),
(21603564, 'Juan', 'Rodriguez', '04243504335', 'Derecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

CREATE TABLE IF NOT EXISTS `auditorias` (
  `codigoaudi` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `accion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`codigoaudi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Volcado de datos para la tabla `auditorias`
--

INSERT INTO `auditorias` (`codigoaudi`, `usuario`, `accion`, `fecha`, `hora`) VALUES
(1, 'Leonardo J', 'Inicio de Sesion', '2012-12-05', '08:18:43'),
(2, 'Leonardo J', 'Inicio de Sesion', '2012-12-05', '08:20:34'),
(3, 'Leonardo J', 'Inicio de Sesion', '2012-12-05', '08:22:46'),
(4, 'Leonardo J', 'Inicio de Sesion', '2012-12-05', '08:29:16'),
(5, 'Leonardo J', 'Inicio de Sesion', '2012-12-05', '08:35:52'),
(6, 'Leonardo J', 'Inicio de Sesion', '2012-12-05', '10:05:41'),
(7, 'Leonardo J', 'Inicio de Sesion', '2013-02-04', '11:32:22'),
(8, 'Leonardo J', 'Modificar Datos de Usuario', '2013-02-04', '11:32:58'),
(9, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-04', '11:33:10'),
(10, 'Leonardo Jose', 'Modificar Datos de Usuario', '2013-02-04', '11:33:31'),
(11, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-04', '11:33:48'),
(12, 'Juan', 'Inicio de Sesion', '2013-02-04', '11:34:08'),
(13, 'Juan', 'Modificar Datos de Usuario', '2013-02-04', '11:34:27'),
(14, 'Juan Carlos', 'Inicio de Sesion', '2013-02-04', '11:34:38'),
(15, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-06', '10:16:57'),
(16, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-06', '10:17:42'),
(17, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-06', '10:50:13'),
(18, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-06', '11:01:10'),
(19, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-07', '07:14:11'),
(20, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-13', '07:48:52'),
(21, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-13', '08:48:06'),
(22, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-13', '10:21:51'),
(23, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-13', '10:28:15'),
(24, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-13', '10:32:08'),
(25, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-13', '10:35:13'),
(26, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '04:53:01'),
(27, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '05:07:42'),
(28, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '05:14:31'),
(29, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '05:30:18'),
(30, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '05:44:26'),
(31, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '07:21:06'),
(32, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '07:30:46'),
(33, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '07:45:52'),
(34, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '08:04:51'),
(35, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '08:07:32'),
(36, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '08:11:46'),
(37, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '10:57:47'),
(38, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-17', '11:12:08'),
(39, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '07:41:40'),
(40, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '08:29:17'),
(41, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '08:36:39'),
(42, 'Juan Carlos', 'Inicio de Sesion', '2013-02-18', '08:40:35'),
(43, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '09:06:06'),
(44, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '09:38:37'),
(45, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '09:40:38'),
(46, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '10:00:14'),
(47, 'Juan Carlos', 'Inicio de Sesion', '2013-02-18', '10:00:23'),
(48, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '10:18:10'),
(49, 'Juan Carlos', 'Inicio de Sesion', '2013-02-18', '10:18:25'),
(50, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '10:22:54'),
(51, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '01:37:16'),
(52, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '01:40:31'),
(53, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '01:40:56'),
(54, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-18', '02:01:51'),
(55, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-21', '11:54:39'),
(56, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-21', '12:33:36'),
(57, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-21', '12:49:58'),
(58, 'Leonardo Jose', 'Traslado de Equipo', '2013-02-21', '01:10:01'),
(59, 'Leonardo Jose', 'Traslado de Equipo', '2013-02-21', '01:10:18'),
(60, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-22', '09:54:39'),
(61, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-22', '10:03:01'),
(62, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-27', '09:42:08'),
(63, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-27', '09:48:08'),
(64, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-27', '10:07:10'),
(65, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-27', '11:36:20'),
(66, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-27', '11:37:36'),
(67, 'Leonardo Jose', 'Traslado de Equipo', '2013-02-28', '12:06:28'),
(68, 'Leonardo Jose', 'Traslado de Equipo', '2013-02-28', '12:06:50'),
(69, 'Leonardo Jose', 'Traslado de Equipo', '2013-02-28', '12:07:59'),
(70, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-28', '12:29:09'),
(71, 'Leonardo Jose', 'Inicio de Sesion', '2013-02-28', '11:26:32'),
(72, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-01', '12:20:36'),
(73, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-01', '01:03:46'),
(74, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-01', '08:27:23'),
(75, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-01', '09:31:41'),
(76, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-01', '09:45:12'),
(77, 'Leonardo Jose', 'Traslado de Equipo', '2013-03-01', '09:47:05'),
(78, 'Leonardo Jose', 'Mantenimiento de Equipo', '2013-03-01', '09:49:13'),
(79, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-01', '10:15:19'),
(80, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-03', '09:57:45'),
(81, 'Leonardo Jose', 'Inicio de Sesion', '2013-03-03', '10:11:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `codigocargo` int(5) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codigocargo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`codigocargo`, `cargo`) VALUES
(1, 'Instructor(a)'),
(4, 'Contador(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controles`
--

CREATE TABLE IF NOT EXISTS `controles` (
  `codigocontrol` int(11) NOT NULL AUTO_INCREMENT,
  `codigoequipo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `personal` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `accion` enum('Incorporar','Desincorporar') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigocontrol`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `controles`
--

INSERT INTO `controles` (`codigocontrol`, `codigoequipo`, `personal`, `accion`, `fecha`) VALUES
(1, 'PC-T-01', 'Miguel', 'Desincorporar', '2012-11-06'),
(2, 'PC-C-01', 'Mary', 'Incorporar', '2012-11-30'),
(3, 'PC-C-01', 'Mary', 'Desincorporar', '2012-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `codigocurso` int(5) NOT NULL AUTO_INCREMENT,
  `curso` varchar(30) NOT NULL,
  PRIMARY KEY (`codigocurso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`codigocurso`, `curso`) VALUES
(1, 'Informatica'),
(2, 'Contaduría'),
(3, 'Mecánica'),
(4, 'Derecho'),
(5, 'medicina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargados`
--

CREATE TABLE IF NOT EXISTS `encargados` (
  `cedula` int(8) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `encargados`
--

INSERT INTO `encargados` (`cedula`, `nombre`, `apellido`, `cargo`) VALUES
(15734994, 'Yassnelly', 'Alvarez', 'Instructor(a)'),
(4404221, 'Miguel', 'Aponte', 'Instructor(a)'),
(15055288, 'Mary', 'Farfan', 'Instructor(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
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

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`codigoequipo`, `nombre`, `tipo`, `marca`, `serial`, `descripcion`, `cantidad`, `estado`, `ubicacion`) VALUES
('PC-M-01', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-01', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Inactivo', 'LAB. C.N.C'),
('PC-T-01', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Inactivo', 'LAB. C.N.C'),
('PC-M-02', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-T-02', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-02', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-M-03', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-03', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-T-03', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('TORNO-01', 'Torno', 'Herramienta', 'Lab-Volt', 'vacio', 'Blancos', 1, 'Activo', 'LAB. C.N.C'),
('TORNO-02', 'Torno', 'Herramienta', 'Lab-Volt', 'vacio', 'Blanco', 1, 'Activo', 'LAB. C.N.C'),
('PLOT-01', 'Plotter', 'Herramienta', 'Roland', 'vacio', 'Beige con Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-M-04', 'Monitor', 'Computo', 'SAMSUNG', 'vacio', 'Blanca', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-04', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-T-04', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-M-05', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-05', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-T-05', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-M-06', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-06', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-T-06', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('FRES-01', 'Fresadora', 'Herramienta', 'Lab-Volt', 'vacio', 'Blanca', 1, 'Activo', 'LAB. C.N.C'),
('FRES-02', 'Fresadora', 'Herramienta', 'Lab-Volt', 'vacio', 'Blanca', 1, 'Activo', 'LAB. C.N.C'),
('PC-M-07', 'Monitor', 'Computo', 'SIRAGON', 'vacio', 'Negro con Gris', 1, 'Activo', 'LAB. C.N.C'),
('PC-T-07', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-07', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-M-08', 'Monitor', 'Computo', 'SIRAGON', 'vacio', 'Negro con Gris', 1, 'Activo', 'LAB. C.N.C'),
('PC-T-08', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('PC-C-08', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. C.N.C'),
('AIRE', 'Aire Acondicionado', 'Equipo', 'YAMABISHI', 'vacio', 'Blanco', 1, 'Activo', 'LAB. C.N.C'),
('EXT-01', 'Extintor', 'Equipo', 'Medanos', 'vacio', 'Rojo', 1, 'Activo', 'LAB. C.N.C'),
('PIZ-01', 'Pizarron', 'Equipo', 'vacio', 'vacio', 'Blanco AcrÃ­lico', 1, 'Activo', 'LAB. C.N.C'),
('0727', 'Escritorio', 'Oficina', 'vacio', 'vacio', 'Madera con Metal', 1, 'Mantenimiento', 'LAB. Informatica I'),
('LAMP-01', 'LÃ¡mpara de Emergencia', 'Oficina', 'vacio', 'vacio', 'Blanca', 1, 'Activo', 'LAB. C.N.C'),
('ESC-01', 'Escritorio', 'Oficina', 'vacio', 'vacio', 'Madera', 1, 'Activo', 'LAB. C.N.C'),
('PC-M-09', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-09', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-09', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-10', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-10', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-10', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-11', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-11', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-11', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-12', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-12', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-12', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-13', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-13', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-13', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-14', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-14', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-14', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-15', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-15', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-15', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-16', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-16', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-16', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-17', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-17', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-17', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-18', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-18', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-18', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-19', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-19', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-19', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-20', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-20', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-20', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-21', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-21', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-21', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-22', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-22', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-22', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-23', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-23', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-23', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-24', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-24', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-24', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-25', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-25', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-25', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-M-26', 'Monitor', 'Computo', 'NOC', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-C-26', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-T-26', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('SER-M-01', 'Monitor', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('SER-C-01', 'Case', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('IMPC-01', 'Impresora', 'Computo', 'Epson-Stylus', 'vacio', 'Gris con Negro', 1, 'Activo', 'LAB. C.N.C'),
('PROT-00-19', 'Protector de Pantalla', 'Computo', 'Clip', 'vacio', '3 Negros y 16 Blancos', 19, 'Activo', 'LAB. Informatica I'),
('PC-MO-00-08', 'Mouse', 'Computo', 'IBM', 'vacio', '8 Mouse de Color Negro', 8, 'Activo', 'LAB. C.N.C'),
('PC-MO-09-26', 'Mouse', 'Computo', 'IBM', 'vacio', '18 Mouse de Color Negro', 18, 'Activo', 'LAB. Informatica I'),
('SER-T-01', 'Teclado', 'Computo', 'IBM', 'vacio', 'Negro', 1, 'Activo', 'LAB. Informatica I'),
('PC-R-01-08', 'Reguladores', 'Computo', 'Omega', 'vacio', '8 Reguladores Blancos', 8, 'Activo', 'LAB. C.N.C'),
('PC-R-09-26', 'Reguladores', 'Computo', 'Omega', 'vacio', '18 Reguladores Blancos', 18, 'Activo', 'LAB. Informatica I'),
('MESAVID', 'Mesa de Video Beam', 'Oficina', 'Bretford', 'vacio', 'Beige de Metal Movible', 1, 'Activo', 'LAB. Informatica I'),
('PIZ-02', 'Pizarron ', 'Oficina', 'Medanos', 'vacio', 'Blanco Acrilico', 1, 'Activo', 'LAB. Informatica I'),
('EXT-02', 'Extintor', 'Herramienta', 'Medanos', 'vacio', 'Rojo contra fuego', 1, 'Activo', 'LAB. Informatica I'),
('ESTANT-01', 'Estante', 'Oficina', 'vacio', 'vacio', 'Beige de Formica ', 1, 'Activo', 'LAB. Informatica I'),
('ESC-02', 'Escritorio', 'Oficina', 'vacio', 'vacio', 'Madera', 1, 'Activo', 'LAB. Informatica I'),
('MSILLAS-01-16', 'Sillas Giratorias', 'Oficina', 'vacio', 'vacio', 'Grises', 16, 'Activo', 'LAB. C.N.C'),
('MSILLAS-17-37', 'Sillas Giratorias', 'Oficina', 'vacio', 'vacio', 'Grises y una dañada', 21, 'Activo', 'LAB. Informatica I'),
('M-01-08', 'Meson', 'Oficina', 'vacio', 'vacio', '8 Mesones de Madera con gabetas', 8, 'Activo', 'LAB. C.N.C'),
('M-09-20', 'Meson', 'Oficina', 'vacio', 'vacio', '9 Mesones de Madera con gabetas y 3 tipo cubiculos de madera', 12, 'Activo', 'LAB. Informatica I'),
('M-GIBBS-CAM-01', 'MODULO DE TORNO', 'Oficina', 'vacio', 'vacio', 'Manual Gibbs CAM 2002', 4, 'Activo', 'LAB. C.N.C'),
('M-LAB-VOLT-03', 'FAMILIARIZACION CON LA FRESADORA CNC', 'Oficina', 'vacio', 'vacio', 'Manual Automatizacion y Robotica', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-02', 'MODULO DE FRESA', 'Oficina', 'vacio', 'vacio', 'Manual Gibbs CAM 2002', 4, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-03', 'TORNO AVANZADO', 'Oficina', 'vacio', 'vacio', 'Manual', 4, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-04', 'ADDENDUM DE PRODUCCION', 'Oficina', 'vacio', 'vacio', 'Manual GIBBS CAN 2002', 4, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-05', 'GIBBS EDITOR ONE', 'Oficina', 'vacio', 'vacio', 'Manual', 4, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-06', 'GUIA DE PLUG-INS', 'Oficina', 'vacio', 'vacio', 'Manual Gibbs CAM 2002', 4, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-07', 'MANUAL DE WIZARS', 'Oficina', 'vacio', 'vacio', 'Manual Gibbs CAM 2002', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-08', 'GUIA COMUN DE REFERENCIA', 'Oficina', 'vacio', 'vacio', 'Manual Gibbs CAM 2002', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-09', 'GUIA DE INTRODUCCION', 'Oficina', 'vacio', 'vacio', 'Manual Gibbs CAM 2002', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-10', 'CREACION DE GEOMETRIA', 'Oficina', 'vacio', 'vacio', 'Manual', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-11', 'MECANIZADO POR CNC TORNO Y FRESADORA', 'Oficina', 'vacio', 'vacio', 'Manual', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-12', 'PROGRAMA MECANIZADO POR CNC', 'Oficina', 'vacio', 'vacio', 'Manual', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-13', 'SOFTWARE PARA FRESADORA CNC', 'Oficina', 'vacio', 'vacio', 'Manual Version 5.2', 1, 'Activo', 'LAB. C.N.C'),
('M-GIBBS-CAM-14', 'SOFTWARE PARA TORNO CNC', 'Oficina', 'vacio', 'vacio', 'Manual Version 5.2', 1, 'Activo', 'LAB. C.N.C'),
('M-LAB-VOLT-01', 'SOFTWARE PARA FRESADORA CNC', 'Oficina', 'vacio', 'vacio', 'Manual Automatizacion y Robotica', 1, 'Activo', 'LAB. C.N.C'),
('M-LAB-VOLT-02', ' SOFTWARE PARA TORNO CNC', 'Oficina', 'vacio', 'vacio', 'Manual', 1, 'Activo', 'LAB. C.N.C'),
('M-LAB-VOLT-04', 'FAMILIARIZACION CON LA TORNO CNC', 'Oficina', 'vacio', 'vacio', 'Manual', 1, 'Activo', 'LAB. C.N.C'),
('M-LAB-VOLT-05', 'TORNO CNC', 'Oficina', 'vacio', 'vacio', 'Manual 5.500', 1, 'Activo', 'LAB. C.N.C'),
('M-LAB-VOLT-06', 'AUTOMATIC TOOL CHANGER', 'Oficina', 'vacio', 'vacio', 'Manual Mod: 5514  MANUAL DE INSTRUCCIÃ“N', 1, 'Activo', 'LAB. C.N.C'),
('M-LAB-VOLT-07', 'DAC/FAC LINK II', 'Oficina', 'vacio', 'vacio', 'Manual ', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-01', 'PUNTO GIRATORIO', 'Herramienta', 'vacio', 'vacio', 'Herramienta ', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-02', 'PINZA PARA LA FRESA ', 'Herramienta', 'vacio', 'vacio', 'Herramienta de 3/8"', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-03', 'PINZA PARA LA FRESA ', 'Herramienta', 'vacio', 'vacio', 'Herramienta de 3/16"', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-04', ' PINZA PARA LA FRESA ', 'Herramienta', 'vacio', 'vacio', 'Herramienta de 1/4"', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-05', 'LLAVE DE DADO', 'Herramienta', 'vacio', 'vacio', 'Herramienta de  8.5 mm', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-06', 'SOPORTE. H.B ', 'Herramienta', 'vacio', 'vacio', 'Herramienta ROUSE L5', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-07', 'SOPORTE NVR', 'Herramienta', 'vacio', 'vacio', 'Herramienta 3/8-2', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-08', 'SOPORTE BRIDA PARA LA FRESADORA', 'Herramienta', 'vacio', 'vacio', 'Herramienta', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-09', 'LLAVE DE PLATO DEL TORNO', 'Herramienta', 'vacio', 'vacio', 'Herramienta', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-10', 'PORTAHERRAMIENTAS PARA TORNO DE UNA CUCH', 'Herramienta', 'vacio', 'vacio', 'Herramienta', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-11', 'FRESA DE 1/4" x 3/8"', 'Herramienta', 'vacio', 'vacio', 'Herramienta HSS  POLAND', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-12', 'FRESA DE 3/16" x 3/8"', 'Herramienta', 'vacio', 'vacio', 'Herramienta HSS  POLAND', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-13', 'FRESA DE 1/2" x  3/8"', 'Herramienta', 'vacio', 'vacio', 'Herramienta HSS  POLAND', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-14', 'SOPORTE DE CALCE PARA LA FRESADORA', 'Herramienta', 'vacio', 'vacio', 'Herramienta', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-15', 'MECHA', 'Herramienta', 'vacio', 'vacio', 'Herramienta de 1/2"', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-16', 'MECHA ', 'Herramienta', 'vacio', 'vacio', 'Herramienta de 3/16"', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-17', 'LLAVE ALLEN ', 'Herramienta', 'vacio', 'vacio', 'Herramienta', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-18', 'LLAVE AJUSTABLE ', 'Herramienta', 'vacio', 'vacio', 'Herramienta de 10" ( TAPARIA 1172N )', 1, 'Activo', 'LAB. C.N.C'),
('HERR-EQ-19', 'LLAVE DE BOCA FIJA ', 'Herramienta', 'vacio', 'vacio', 'Herramienta de 7/16" - 3/8"', 1, 'Activo', 'LAB. C.N.C'),
('LABM-CAD-CAM-01', 'LLAVE ELECTRONICA', 'Herramienta', 'vacio', 'vacio', '( SRB02094  0129A38145 )', 1, 'Activo', 'LAB. C.N.C'),
('LABM-CAD-CAM-02', 'CD. DE INSTALACION CNC', 'Oficina', 'vacio', 'vacio', 'NIVEL 5 PARA FRESADORA Y TORNO', 1, 'Activo', 'LAB. C.N.C'),
('LABM-CAD-CAM-03', 'SOFTWARE IBM MONITOR CD', 'Oficina', 'vacio', 'vacio', 'CD', 1, 'Activo', 'LAB. C.N.C'),
('LABM-CAD-CAM-04', 'DISKETTE, FIRMWARE 5500', 'Oficina', 'vacio', 'vacio', 'VERSION 3.03.06. 1/1', 1, 'Activo', 'LAB. C.N.C'),
('LABM-CAD-CAM-05', 'BROCHA DE 1"', 'Herramienta', 'vacio', 'vacio', 'Herramienta', 1, 'Activo', 'LAB. C.N.C'),
('LABM-CAD-CAM-06', 'BROCHA DE 3"', 'Herramienta', 'vacio', 'vacio', 'Herramienta', 1, 'Activo', 'LAB. C.N.C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `codigoestado` int(5) NOT NULL AUTO_INCREMENT,
  `estado` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codigoestado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`codigoestado`, `estado`) VALUES
(1, 'Activo'),
(3, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios`
--

CREATE TABLE IF NOT EXISTS `laboratorios` (
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `dependencia` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `encargado` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `encargado2` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `laboratorios`
--

INSERT INTO `laboratorios` (`nombre`, `capacidad`, `dependencia`, `encargado`, `encargado2`) VALUES
('LAB. C.N.C', 0, 'C.T.I La Victoria', 'Yassnelly', 'Miguel'),
('LAB. Informatica I', 0, 'C.F.S Metalminero La Victoria', 'Mary', 'vacio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE IF NOT EXISTS `mantenimientos` (
  `codigoequipo` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigomantenimiento` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigomantenimiento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`codigoequipo`, `codigomantenimiento`, `nombre`, `tipo`, `descripcion`, `fecha`) VALUES
('PC-C-01', 1, 'Mary', 'Preventivo', 'Formateo para cambio de windows', '2012-11-06'),
('PC-C-01', 2, 'Mary', 'Preventivo', 'Analizar antivirus', '2012-11-30'),
('0727', 3, 'Mary', 'Preventivo', ' Madera con Metal', '2013-03-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `codigomarca` int(5) NOT NULL AUTO_INCREMENT,
  `marca` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codigomarca`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`codigomarca`, `marca`) VALUES
(1, 'IBM'),
(2, 'SIRAGON'),
(3, 'SAMSUNG'),
(4, 'Lab-Volt'),
(5, 'Roland'),
(6, 'YAMABISHI'),
(7, 'Superstack'),
(8, 'Medanos'),
(9, 'NOC'),
(10, 'Epson-Stylus'),
(11, 'Clip'),
(12, 'Omega'),
(13, 'Bretford'),
(14, 'D-Link'),
(16, 'LG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `codigotipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigotipo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`codigotipo`, `tipo`) VALUES
(1, 'Computo'),
(2, 'Herramienta'),
(3, 'Equipo'),
(4, 'Oficina'),
(10, 'Deportivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslados`
--

CREATE TABLE IF NOT EXISTS `traslados` (
  `codigotranslado` int(8) NOT NULL AUTO_INCREMENT,
  `codigoequipo` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigotranslado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `traslados`
--

INSERT INTO `traslados` (`codigotranslado`, `codigoequipo`, `ubicacion1`, `ubicacion`, `nombre`, `fecha`) VALUES
(1, 'PC-C-01', 'LAB. C.N.C', 'LAB. Informatica I', 'Miguel', '2012-11-06'),
(2, 'PC-C-01', 'LAB. Informatica I', 'LAB. C.N.C', 'Yassnelly', '2012-11-06'),
(3, 'PC-C-01', 'LAB. C.N.C', 'LAB. Informatica I', 'Miguel', '2012-11-30'),
(4, 'PC-C-01', 'LAB. Informatica I', 'LAB. C.N.C', 'Mary', '2012-11-30'),
(5, 'PC-C-01', 'LAB. C.N.C', 'LAB. Informatica I', 'Miguel', '2012-11-30'),
(6, 'PC-C-01', 'LAB. Informatica I', 'LAB. C.N.C', 'Yassnelly', '2012-11-30'),
(7, '0727', 'LAB. C.N.C', 'LAB. Informatica I', 'Mary', '2013-02-21'),
(8, '0727', 'LAB. Informatica I', 'LAB. C.N.C', 'Mary', '2013-02-21'),
(9, 'AIRE', 'LAB. C.N.C', 'LAB. Informatica I', 'Mary', '2013-02-28'),
(10, 'AIRE', 'LAB. Informatica I', 'LAB. C.N.C', 'Mary', '2013-02-28'),
(11, '0727', 'LAB. C.N.C', 'LAB. Informatica I', 'Mary', '2013-02-28'),
(12, 'IMPC-01', 'LAB. Informatica I', 'LAB. C.N.C', 'Mary', '2013-03-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` int(8) NOT NULL,
  `telefono` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombreusuario` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigo` blob NOT NULL,
  `pregunta` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `respuesta` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `telefono`, `cargo`, `nombre`, `apellido`, `nombreusuario`, `codigo`, `pregunta`, `respuesta`) VALUES
(21369330, '04262365140', 'Administrador', 'Leonardo Jose', 'Mendoza', 'leonardo', 0x3230326362393632616335393037356239363462303731353264323334623730, 'hola', 'chao'),
(21272323, '04144919853', 'Facilitador', 'Juan Carlos', 'Tapias', 'juan', 0x3832376363623065656138613730366334633334613136383931663834653762, 'edad', '19'),
(20695525, '000', 'Administrador', 'Manuel', 'Sotomayor', 'manuelen', 0x3230326362393632616335393037356239363462303731353264323334623730, '123', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
