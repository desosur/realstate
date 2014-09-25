-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2014 a las 17:01:59
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
-- Estructura de tabla para la tabla `uso`
--

CREATE TABLE IF NOT EXISTS `uso` (
`ID_USO` int(11) NOT NULL,
  `ID_COMP` int(11) NOT NULL,
  `ESTADO` tinyint(1) NOT NULL,
  `COMENTARIO_USO` varchar(500) DEFAULT NULL,
  `FECH_HOR_INI` datetime DEFAULT NULL,
  `FECH_HOR_FIN` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `uso`
--

INSERT INTO `uso` (`ID_USO`, `ID_COMP`, `ESTADO`, `COMENTARIO_USO`, `FECH_HOR_INI`, `FECH_HOR_FIN`) VALUES
(null, 1, 0, 'Luz Dormitorio Apagada', '2014-06-16 13:04:19', '2014-07-19 11:16:11'),
(null, 2, 0, 'Sensor Movimiento Living Desactivado', '2014-06-16 13:04:19', '2014-07-19 11:16:11'),
(null, 3, 0, 'Luz Comedor Apagada', '2014-06-16 13:04:20', '2014-07-19 11:16:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `uso`
--
ALTER TABLE `uso`
 ADD PRIMARY KEY (`ID_USO`), ADD KEY `FK_USO_COMPONENTE` (`ID_COMP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `uso`
--
ALTER TABLE `uso`
MODIFY `ID_USO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `uso`
--
ALTER TABLE `uso`
ADD CONSTRAINT `FK_USO_COMPONENTE` FOREIGN KEY (`ID_COMP`) REFERENCES `componente` (`ID_COMPONENTE`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
