-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2014 a las 04:17:59
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

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
`IdEvento` double NOT NULL,
  `NombreEvento` tinytext NOT NULL,
  `FechaYHora` datetime NOT NULL,
  `Lugar` tinytext NOT NULL,
  `Descripcion` text NOT NULL,
  `Locacion` tinytext NOT NULL,
  `Organizador` double NOT NULL,
  `Id_Log` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`IdEvento`, `NombreEvento`, `FechaYHora`, `Lugar`, `Descripcion`, `Locacion`, `Organizador`, `Id_Log`) VALUES
(2, 'cumple de obama', '2014-09-23 00:00:00', 'Güachinton', 'chopipaneada', '38°53?52?N 77°02?12?O', 1, 1),
(3, 'cumple de obama', '2014-09-02 00:00:00', 'casa blanca', 'choripaneada', '38 53 52 N 77 02 12 O', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacion`
--

CREATE TABLE IF NOT EXISTS `invitacion` (
`Id_invitacion` double NOT NULL,
  `IdInvitado` double NOT NULL,
  `Asistencia` tinyint(1) DEFAULT NULL,
  `adultos` tinyint(4) NOT NULL,
  `niños` tinyint(4) NOT NULL,
  `costo` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `okPago` tinyint(1) DEFAULT NULL,
  `notificado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `invitacion`
--

INSERT INTO `invitacion` (`Id_invitacion`, `IdInvitado`, `Asistencia`, `adultos`, `niños`, `costo`, `balance`, `okPago`, `notificado`) VALUES
(1, 1, 0, 2, 2, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`IdLog` double NOT NULL,
  `FechaYHora` datetime NOT NULL,
  `id_usuario` double NOT NULL,
  `descripcion` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`IdLog`, `FechaYHora`, `id_usuario`, `descripcion`) VALUES
(1, '2014-09-02 00:00:00', 1, '0'),
(2, '2014-09-10 00:00:00', 1, 'hola como estan?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`Id_Usuarios` double NOT NULL,
  `Nombre` tinytext NOT NULL,
  `Email` tinytext NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` tinytext NOT NULL,
  `Provincia` tinytext NOT NULL,
  `Ciudad` tinytext NOT NULL,
  `Password` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuarios`, `Nombre`, `Email`, `FechaNacimiento`, `Sexo`, `Provincia`, `Ciudad`, `Password`) VALUES
(1, 'javier', 'javiermorabes@gmail.com', '1990-05-21', 'masculino', 'Rio Negro', 'San Carlos de Bariloche', 'Bazzinga');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
 ADD PRIMARY KEY (`IdEvento`), ADD KEY `Log_Evento_idx` (`Id_Log`), ADD KEY `organiza_idx` (`Organizador`);

--
-- Indices de la tabla `invitacion`
--
ALTER TABLE `invitacion`
 ADD PRIMARY KEY (`Id_invitacion`), ADD KEY `invitado_idx` (`IdInvitado`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`IdLog`), ADD KEY `Escribe usuario_idx` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Id_Usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
MODIFY `IdEvento` double NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `invitacion`
--
ALTER TABLE `invitacion`
MODIFY `Id_invitacion` double NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
MODIFY `IdLog` double NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `Id_Usuarios` double NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
ADD CONSTRAINT `Log_Evento` FOREIGN KEY (`Id_Log`) REFERENCES `log` (`IdLog`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `organiza` FOREIGN KEY (`Organizador`) REFERENCES `usuarios` (`Id_Usuarios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `invitacion`
--
ALTER TABLE `invitacion`
ADD CONSTRAINT `invitado` FOREIGN KEY (`IdInvitado`) REFERENCES `usuarios` (`Id_Usuarios`);

--
-- Filtros para la tabla `log`
--
ALTER TABLE `log`
ADD CONSTRAINT `Escribe usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`Id_Usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
