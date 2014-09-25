-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2014 a las 17:01:51
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `domosys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audit_raspberry`
--

CREATE TABLE IF NOT EXISTS `audit_raspberry` (
`ID_REG_RASP` int(11) NOT NULL,
  `ID_RASP` int(11) NOT NULL,
  `COMENTARIO_RASP` varchar(500) NOT NULL,
  `FECH_HOR_RASP` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `audit_raspberry`
--

INSERT INTO `audit_raspberry` (`ID_REG_RASP`, `ID_RASP`, `COMENTARIO_RASP`, `FECH_HOR_RASP`) VALUES
(null, 1, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 1.', '2014-06-16 13:03:13'),
(null, 2, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 2.', '2014-06-16 13:03:13'),


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audit_raspberry`
--
ALTER TABLE `audit_raspberry`
 ADD PRIMARY KEY (`ID_REG_RASP`), ADD KEY `FK_AUDIT_RASPBERRY_RASPBERRY` (`ID_RASP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `audit_raspberry`
--
ALTER TABLE `audit_raspberry`
MODIFY `ID_REG_RASP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
