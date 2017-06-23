-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2017 a las 05:13:34
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estudiante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(125) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Carrera` varchar(125) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Codigo`, `Nombre`, `Edad`, `Direccion`, `Carrera`) VALUES
(1, 'Luis Dominguez', 22, 'San Salvador', 'Redes Informaticas'),
(4, 'Josue Palacios', 19, 'Santa Tecla', 'Sistemas'),
(5, 'Mario', 19, 'Morazan', 'Sistemas'),
(6, 'Josue', 20, '4e46dc0969e6621f2d61d2228e3cd91b75cd9edc', 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `activo` char(1) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Codigo`, `usuario`, `password`, `Nombre`, `Apellido`, `activo`) VALUES
(1, 'JosueG', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Juan Josue', 'Palacios Garcia', '1'),
(2, 'MarioR', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Mario Adalberto', 'Joaquin Rivera', '0'),
(3, 'LuisD', '99800b85d3383e3a2fb45eb7d0066a4879a9dad0', 'Luis Arturo', 'Dominguez Castillo', '1'),
(4, 'KevinP', '4e46dc0969e6621f2d61d2228e3cd91b75cd9edc', 'Kevin Alexander', 'Vazquez Cordoba', '1'),
(5, 'MiguelP', '4e46dc0969e6621f2d61d2228e3cd91b75cd9edc', 'Miguel Alexander ', 'Palacios Rivera', '1'),
(6, 'WilliamM', '77ab6cf1d1243ccad67ba55b07dc0ea6793ef84a', 'William', 'Martinez', '1'),
(7, 'Maria Magdalena', '77ab6cf1d1243ccad67ba55b07dc0ea6793ef84a', 'Maria', 'Montana', '1'),
(8, 'DouglasM', '4e46dc0969e6621f2d61d2228e3cd91b75cd9edc', 'Douglas Alberto', 'Menjivar Quiterio', '1'),
(15, 'MariaDB', '046ab10764116d22a9a4c59312ed05c46c2d8565', 'Mario', 'Palacios', '1'),
(16, 'RFortis', 'd7323b828a9632d0775d63e340dd4c62777ddb34', 'Ricardo', 'Fortis', '1'),
(17, 'LuisaD', 'c9f28ab7dc768e4707b1d7940fcbed57e5269527', 'Luisa', 'Dominguez', '1'),
(18, 'CarlosO', '68765a2d58d0b0cd25394b756b49bd4568858a9d', 'Carlos', 'Opico', '1'),
(19, 'SandyP', '098eb6352be0b7f2b9c8c7c1bf66d74a403f26cb', 'Sandy', 'Ortiz', '1'),
(20, 'CheleD', '046ab10764116d22a9a4c59312ed05c46c2d8565', 'Antonio', 'Funes', '0'),
(21, 'AlbaG', 'a3d319ea15c04214b2b0abecfdeee2b1b670c09f', 'Alba Morena', 'Palacios Garcia', '1'),
(22, 'AlexS', 'a07b0c8434a6271c0a66dfb80b9d632b03933bf2', 'Alexandra', 'Sanchez', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
