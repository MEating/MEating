-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2014 a las 08:21:55
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `meating`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `IdEvento` double NOT NULL AUTO_INCREMENT,
  `NombreEvento` tinytext NOT NULL,
  `FechaYHora` datetime NOT NULL,
  `Lugar` tinytext NOT NULL,
  `Descripcion` text NOT NULL,
  `Locacion` tinytext NOT NULL,
  `Organizador` double NOT NULL,
  `Id_Log` double NOT NULL,
  PRIMARY KEY (`IdEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacion`
--

CREATE TABLE IF NOT EXISTS `invitacion` (
  `Id_invitacion` double NOT NULL AUTO_INCREMENT,
  `IdInvitado` double NOT NULL,
  `Asistencia` tinyint(1) NOT NULL,
  `adultos` tinyint(4) NOT NULL,
  `niños` tinyint(4) NOT NULL,
  `costo` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `okPago` tinyint(1) NOT NULL,
  `notificado` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_invitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `IdLog` double NOT NULL AUTO_INCREMENT,
  `FechaYHora` datetime NOT NULL,
  `id_usuario` double NOT NULL,
  `descripcion` tinyint(4) NOT NULL,
  PRIMARY KEY (`IdLog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id_Usuarios` double NOT NULL AUTO_INCREMENT,
  `Nombre` tinytext NOT NULL,
  `Email` tinytext NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` tinytext NOT NULL,
  `Provincia` tinytext NOT NULL,
  `Ciudad` tinytext NOT NULL,
  `Password` tinytext NOT NULL,
  PRIMARY KEY (`Id_Usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
