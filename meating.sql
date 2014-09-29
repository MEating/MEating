-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2014 a las 03:26:29
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
  `Organizador` tinytext NOT NULL,
  `Id_Log` double NOT NULL,
  PRIMARY KEY (`IdEvento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`IdEvento`, `NombreEvento`, `FechaYHora`, `Lugar`, `Descripcion`, `Locacion`, `Organizador`, `Id_Log`) VALUES
(1, 'Cumple de Eze', '2014-09-26 00:00:00', 'casa de eze', 'festejo del cumpleaños de .exe', '44 35 21.81N 104 42 57.78W ', 'si', 1),
(2, 'cumple de cris', '2014-09-17 07:05:20', 'casa de cris', 'ya dije', '28.396403,-81.578271 ', 'no', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacion`
--

CREATE TABLE IF NOT EXISTS `invitacion` (
  `Id_invitacion` double NOT NULL AUTO_INCREMENT,
  `NombreInvitado` datetime NOT NULL,
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
  `NUsuario` tinytext NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuarios`, `Nombre`, `Email`, `FechaNacimiento`, `Sexo`, `Provincia`, `Ciudad`, `Password`) VALUES
(1, 'javier', 'javiermorabes@hotmail.com', '2012-05-21', 'masculino', 'Rio Negro', 'Bariloche', '12345'),
(2, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(3, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(4, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(5, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(6, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(7, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(8, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(9, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(10, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(11, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(12, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(13, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(14, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(15, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(16, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(17, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(18, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(19, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(20, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(21, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(22, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(23, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(24, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(25, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(26, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(27, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(28, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(29, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(30, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(31, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(32, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(33, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(34, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(35, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(36, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(37, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(38, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(39, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(40, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(41, '', '', '1990-05-21', 'Masculino', '', '', '12345'),
(42, '', '', '1990-05-21', 'Masculino', '', '', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
