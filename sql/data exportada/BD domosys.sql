-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2014 a las 19:54:34
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
-- Estructura de tabla para la tabla `arduino`
--

CREATE TABLE IF NOT EXISTS `arduino` (
`ID_ARDUINO` int(11) NOT NULL,
  `ID_RASPBE` int(11) NOT NULL,
  `NOMBRE_ARD` varchar(200) NOT NULL,
  `NUM_SERIE_ARD` varchar(10) NOT NULL,
  `PUERTO_COM` varchar(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `arduino`
--

INSERT INTO `arduino` (`ID_ARDUINO`, `ID_RASPBE`, `NOMBRE_ARD`, `NUM_SERIE_ARD`, `PUERTO_COM`) VALUES
(1, 1, 'UNO R3', '1111A', 'COM1'),
(2, 1, 'Duemilanove', '1111B', 'COM2'),
(20, 1, 'UNO R3', '111A', 'COM1'),
(21, 1, 'Duemilanove', '111B', 'COM2'),
(37, 1, 'UNO R3', '1113', 'COM1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audit_cliente`
--

CREATE TABLE IF NOT EXISTS `audit_cliente` (
`ID_REG_CLIE` int(11) NOT NULL,
  `ID_CLIE` int(11) NOT NULL,
  `COMENTARIO_CLIE` varchar(500) NOT NULL,
  `FECH_HOR_CLIE` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=371 ;

--
-- Volcado de datos para la tabla `audit_cliente`
--

INSERT INTO `audit_cliente` (`ID_REG_CLIE`, `ID_CLIE`, `COMENTARIO_CLIE`, `FECH_HOR_CLIE`) VALUES
(1, 1, 'La persona Administrador Admin, RUT 00000000-0, ha sido registrada en el sistema con fecha 2014-06-16 13:02:43. Su nombre de usuario es admin.', '2014-06-16 13:02:43'),
(2, 2, 'La persona Juan Francisco Perez, RUT 111-1, ha sido registrada en el sistema con fecha 2014-06-16 13:02:43. Su nombre de usuario es juan.', '2014-06-16 13:02:43'),
(3, 3, 'La persona Francisco Juan Bustos, RUT 222-2, ha sido registrada en el sistema con fecha 2014-06-16 13:02:57. Su nombre de usuario es francisco.', '2014-06-16 13:02:57'),
(5, 3, 'El usuario Francisco Juan Bustos, RUT 222-2, ha sido eliminado con fecha 2014-06-16 13:07:51.', '2014-06-16 13:07:51'),
(6, 2, 'El usuario Juan Francisco Perez, RUT 111-1, ha sido eliminado con fecha 2014-06-16 13:08:15.', '2014-06-16 13:08:15'),
(7, 4, 'La persona Juan Francisco Perez, RUT 111-1, ha sido registrada en el sistema con fecha 2014-06-16 13:09:42. Su nombre de usuario es juan.', '2014-06-16 13:09:42'),
(8, 5, 'La persona Francisco Juan Bustos, RUT 222-2, ha sido registrada en el sistema con fecha 2014-06-16 13:09:42. Su nombre de usuario es francisco.', '2014-06-16 13:09:42'),
(9, 4, 'El usuario Juan Francisco Perez, RUT 111-1, ha sido eliminado con fecha 2014-06-16 13:10:30.', '2014-06-16 13:10:30'),
(10, 6, 'La persona Juan Francisco Perez, RUT 1231, ha sido registrada en el sistema con fecha 2014-06-16 13:11:58. Su nombre de usuario es juan2.', '2014-06-16 13:11:58'),
(11, 7, 'La persona Francisco Juan Bustos, RUT 123, ha sido registrada en el sistema con fecha 2014-06-16 13:11:58. Su nombre de usuario es francisco2.', '2014-06-16 13:11:58'),
(12, 8, 'La persona Juan Francisco Perez, RUT 111-1, ha sido registrada en el sistema con fecha 2014-06-16 13:11:58. Su nombre de usuario es juan3.', '2014-06-16 13:11:58'),
(13, 9, 'La persona Francisco Juan Bustos, RUT 5555-5, ha sido registrada en el sistema con fecha 2014-06-16 13:11:58. Su nombre de usuario es francisco3.', '2014-06-16 13:11:58'),
(14, 7, 'El usuario Francisco Juan Bustos, RUT 123, ha sido eliminado con fecha 2014-06-16 13:15:57.', '2014-06-16 13:15:57'),
(15, 8, 'El usuario Juan Francisco Perez, RUT 111-1, ha sido eliminado con fecha 2014-06-16 13:15:57.', '2014-06-16 13:15:57'),
(16, 6, 'El usuario Juan Francisco Perez, RUT 1231, ha sido eliminado con fecha 2014-06-16 13:36:22.', '2014-06-16 13:36:22'),
(17, 5, 'El usuario Francisco Juan Bustos, RUT 222-2, ha sido eliminado con fecha 2014-06-16 13:39:03.', '2014-06-16 13:39:03'),
(18, 10, 'La persona Francisco Juan Bustos, RUT 222-2, ha sido registrada en el sistema con fecha 2014-06-16 13:44:04. Su nombre de usuario es francisco.', '2014-06-16 13:44:04'),
(19, 18, 'La persona Francisco Juan Bustos, RUT 2242342, ha sido registrada en el sistema con fecha 2014-06-16 13:44:35. Su nombre de usuario es franc423isco.', '2014-06-16 13:44:35'),
(20, 19, 'La persona Francisco Juan Bustos, RUT 223242, ha sido registrada en el sistema con fecha 2014-06-16 13:44:35. Su nombre de usuario es franc4234isco.', '2014-06-16 13:44:35'),
(21, 20, 'La persona Francisco Juan Bustos, RUT 22342, ha sido registrada en el sistema con fecha 2014-06-16 13:44:35. Su nombre de usuario es fran234cisco.', '2014-06-16 13:44:35'),
(22, 10, 'El usuario Francisco Juan Bustos, RUT 222-2, ha sido eliminado con fecha 2014-06-16 13:45:40.', '2014-06-16 13:45:40'),
(23, 18, 'El usuario Francisco Juan Bustos, RUT 2242342, ha sido eliminado con fecha 2014-06-16 13:45:40.', '2014-06-16 13:45:40'),
(24, 9, 'El usuario Francisco Juan Bustos, RUT 5555-5, ha sido eliminado con fecha 2014-06-16 13:47:55.', '2014-06-16 13:47:55'),
(25, 19, 'El usuario Francisco Juan Bustos, RUT 223242, ha sido eliminado con fecha 2014-06-16 13:47:56.', '2014-06-16 13:47:56'),
(26, 20, 'El usuario Francisco Juan Bustos, RUT 22342, ha sido eliminado con fecha 2014-06-16 13:47:56.', '2014-06-16 13:47:56'),
(27, 2, 'La persona Juan Francisco Perez, RUT 11-1, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es juan1.', '2014-06-17 18:44:54'),
(28, 3, 'La persona Francisco Juan Bustos, RUT 22-2, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es francisco1.', '2014-06-17 18:44:54'),
(29, 4, 'La persona Juan Francisco Perez, RUT 111-1, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es juan2.', '2014-06-17 18:44:54'),
(30, 5, 'La persona Francisco Juan Bustos, RUT 222-2, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es francisco2.', '2014-06-17 18:44:54'),
(31, 6, 'La persona Juan Francisco Perez, RUT 1111-1, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es juan3.', '2014-06-17 18:44:54'),
(32, 7, 'La persona Francisco Juan Bustos, RUT 2222-2, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es francisco3.', '2014-06-17 18:44:54'),
(33, 8, 'La persona Juan Francisco Perez, RUT 11111-1, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es juan4.', '2014-06-17 18:44:54'),
(34, 9, 'La persona Francisco Juan Bustos, RUT 22222-2, ha sido registrada en el sistema con fecha 2014-06-17 18:44:54. Su nombre de usuario es francisco4.', '2014-06-17 18:44:54'),
(35, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-17 18:45:13.', '2014-06-17 18:45:13'),
(36, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-17 18:45:31.', '2014-06-17 18:45:31'),
(37, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 18:47:05.', '2014-06-17 18:47:05'),
(38, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-17 18:47:16.', '2014-06-17 18:47:16'),
(39, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-17 18:47:41.', '2014-06-17 18:47:41'),
(40, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-17 18:48:38.', '2014-06-17 18:48:38'),
(41, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 18:49:02.', '2014-06-17 18:49:02'),
(42, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-17 18:51:23.', '2014-06-17 18:51:23'),
(43, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-17 18:57:45.', '2014-06-17 18:57:45'),
(44, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-17 18:58:00.', '2014-06-17 18:58:00'),
(45, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 19:43:09.', '2014-06-17 19:43:09'),
(46, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-17 19:43:54.', '2014-06-17 19:43:54'),
(47, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-17 19:45:46.', '2014-06-17 19:45:46'),
(48, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 19:47:03.', '2014-06-17 19:47:03'),
(49, 5, 'El usuario Francisco Juan Bustos, RUT 222-2, ha sido eliminado con fecha 2014-06-17 19:50:59.', '2014-06-17 19:50:59'),
(50, 6, 'El usuario Juan Francisco Perez, RUT 1111-1, ha sido eliminado con fecha 2014-06-17 19:50:59.', '2014-06-17 19:50:59'),
(51, 7, 'El usuario Francisco Juan Bustos, RUT 2222-2, ha sido eliminado con fecha 2014-06-17 19:50:59.', '2014-06-17 19:50:59'),
(52, 8, 'El usuario Juan Francisco Perez, RUT 11111-1, ha sido eliminado con fecha 2014-06-17 19:50:59.', '2014-06-17 19:50:59'),
(53, 4, 'El usuario Juan Francisco Perez, RUT 111-1, ha sido eliminado con fecha 2014-06-17 19:52:18.', '2014-06-17 19:52:18'),
(54, 9, 'El usuario Francisco Juan Bustos, RUT 22222-2, ha sido eliminado con fecha 2014-06-17 19:52:18.', '2014-06-17 19:52:18'),
(55, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 23:13:15.', '2014-06-17 23:13:15'),
(56, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-21 09:50:50.', '2014-06-21 09:50:50'),
(57, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-21 09:55:33.', '2014-06-21 09:55:33'),
(58, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 09:55:43.', '2014-06-21 09:55:43'),
(59, 4, 'La persona  , RUT , ha sido registrada en el sistema con fecha 2014-06-21 10:48:15. Su nombre de usuario es .', '2014-06-21 10:48:15'),
(60, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-21 16:36:41.', '2014-06-21 16:36:41'),
(61, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 16:36:51.', '2014-06-21 16:36:51'),
(62, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 16:38:29.', '2014-06-21 16:38:29'),
(63, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 16:46:46.', '2014-06-21 16:46:46'),
(64, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-21 17:31:50.', '2014-06-21 17:31:50'),
(65, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-21 17:32:08.', '2014-06-21 17:32:08'),
(66, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-21 17:32:42.', '2014-06-21 17:32:42'),
(67, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-21 17:32:53.', '2014-06-21 17:32:53'),
(68, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-21 17:33:17.', '2014-06-21 17:33:17'),
(69, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-21 17:33:51.', '2014-06-21 17:33:51'),
(70, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-21 17:33:58.', '2014-06-21 17:33:58'),
(71, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 17:49:44.', '2014-06-21 17:49:44'),
(72, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-21 17:50:24.', '2014-06-21 17:50:24'),
(73, 2, 'El usuario juan1 ha Iniciado sesión con fecha 2014-06-21 17:50:43.', '2014-06-21 17:50:43'),
(74, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-21 17:51:27.', '2014-06-21 17:51:27'),
(75, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 11:17:04.', '2014-06-22 11:17:04'),
(76, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-22 11:17:13.', '2014-06-22 11:17:13'),
(77, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 11:19:04.', '2014-06-22 11:19:04'),
(78, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-22 11:19:12.', '2014-06-22 11:19:12'),
(79, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 12:01:55.', '2014-06-22 12:01:55'),
(80, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 13:35:28.', '2014-06-22 13:35:28'),
(81, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-22 15:39:32.', '2014-06-22 15:39:32'),
(82, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 15:43:48.', '2014-06-22 15:43:48'),
(83, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 18:08:25.', '2014-06-22 18:08:25'),
(84, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:39:55.', '2014-06-23 18:39:55'),
(85, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-23 18:40:05.', '2014-06-23 18:40:05'),
(86, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:40:19.', '2014-06-23 18:40:19'),
(87, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-23 18:40:54.', '2014-06-23 18:40:54'),
(88, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:41:07.', '2014-06-23 18:41:07'),
(89, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-23 18:41:15.', '2014-06-23 18:41:15'),
(90, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:41:26.', '2014-06-23 18:41:26'),
(91, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-23 18:41:35.', '2014-06-23 18:41:35'),
(92, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:41:50.', '2014-06-23 18:41:50'),
(93, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-23 18:46:42.', '2014-06-23 18:46:42'),
(94, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:47:00.', '2014-06-23 18:47:00'),
(95, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-23 18:52:50.', '2014-06-23 18:52:50'),
(96, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-23 18:52:59.', '2014-06-23 18:52:59'),
(97, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-23 18:53:20.', '2014-06-23 18:53:20'),
(98, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:53:30.', '2014-06-23 18:53:30'),
(99, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-23 18:53:38.', '2014-06-23 18:53:38'),
(100, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 18:54:00.', '2014-06-23 18:54:00'),
(101, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-23 18:54:07.', '2014-06-23 18:54:07'),
(102, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 18:54:26.', '2014-06-23 18:54:26'),
(103, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-23 19:19:32.', '2014-06-23 19:19:32'),
(104, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:20:00.', '2014-06-23 19:20:00'),
(105, 2, 'La sesión del usuario juan1 ha caducado tras 225 minutos de inactividad, con fecha 2014-06-23 19:24:45.', '2014-06-23 19:24:45'),
(106, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:25:20.', '2014-06-23 19:25:20'),
(107, 2, 'La sesión del usuario juan1 ha caducado tras 58 minutos de inactividad, con fecha 2014-06-23 19:27:18.', '2014-06-23 19:27:18'),
(108, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:29:33.', '2014-06-23 19:29:33'),
(109, 2, 'La sesión del usuario juan1 ha caducado tras -7440 minutos de inactividad, con fecha 2014-06-23 19:32:37.', '2014-06-23 19:32:37'),
(110, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:34:20.', '2014-06-23 19:34:20'),
(111, 2, 'La sesión del usuario juan1 ha caducado tras 7920 minutos de inactividad, con fecha 2014-06-23 19:37:32.', '2014-06-23 19:37:32'),
(112, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:38:23.', '2014-06-23 19:38:23'),
(113, 2, 'La sesión del usuario juan1 ha caducado tras 0.1 minutos de inactividad, con fecha 2014-06-23 19:39:29.', '2014-06-23 19:39:29'),
(114, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:41:45.', '2014-06-23 19:41:45'),
(115, 1, 'La sesión del usuario admin ha caducado tras 2.5833333333333 minutos de inactividad, con fecha 2014-06-23 19:45:20.', '2014-06-23 19:45:20'),
(116, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:45:27.', '2014-06-23 19:45:27'),
(117, 1, 'La sesión del usuario admin ha caducado tras 0.33333333333333 minutos de inactividad, con fecha 2014-06-23 19:46:47.', '2014-06-23 19:46:47'),
(118, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:46:53.', '2014-06-23 19:46:53'),
(119, 1, 'La sesión del usuario admin ha caducado tras 0.58333333333333 minutos de inactividad, con fecha 2014-06-23 19:48:28.', '2014-06-23 19:48:28'),
(120, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:48:34.', '2014-06-23 19:48:34'),
(121, 1, 'La sesión del usuario admin ha caducado tras 2.7833333333333 minutos de inactividad, con fecha 2014-06-23 19:52:21.', '2014-06-23 19:52:21'),
(122, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:52:28.', '2014-06-23 19:52:28'),
(123, 1, 'La sesión del usuario admin ha caducado tras 0.016666666666667 minutos de inactividad, con fecha 2014-06-23 19:57:29.', '2014-06-23 19:57:29'),
(124, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:57:39.', '2014-06-23 19:57:39'),
(125, 1, 'La sesión del usuario admin ha caducado tras 3.3166666666667 minutos de inactividad, con fecha 2014-06-23 20:05:58.', '2014-06-23 20:05:58'),
(126, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 20:06:05.', '2014-06-23 20:06:05'),
(127, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:31:54.', '2014-06-24 09:31:54'),
(128, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 09:32:11.', '2014-06-24 09:32:11'),
(129, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:33:04.', '2014-06-24 09:33:04'),
(130, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:34:07.', '2014-06-24 09:34:07'),
(131, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:35:07.', '2014-06-24 09:35:07'),
(132, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:35:59.', '2014-06-24 09:35:59'),
(133, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:38:16.', '2014-06-24 09:38:16'),
(134, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:38:51.', '2014-06-24 09:38:51'),
(135, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:41:36.', '2014-06-24 09:41:36'),
(136, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:46:03.', '2014-06-24 09:46:03'),
(137, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:46:33.', '2014-06-24 09:46:33'),
(138, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:47:13.', '2014-06-24 09:47:13'),
(139, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:49:20.', '2014-06-24 09:49:20'),
(140, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:49:53.', '2014-06-24 09:49:53'),
(141, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:50:13.', '2014-06-24 09:50:13'),
(142, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:50:25.', '2014-06-24 09:50:25'),
(143, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:50:43.', '2014-06-24 09:50:43'),
(144, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:51:29.', '2014-06-24 09:51:29'),
(145, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:51:57.', '2014-06-24 09:51:57'),
(146, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:52:23.', '2014-06-24 09:52:23'),
(147, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:52:50.', '2014-06-24 09:52:50'),
(148, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:53:24.', '2014-06-24 09:53:24'),
(149, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:53:54.', '2014-06-24 09:53:54'),
(150, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:54:22.', '2014-06-24 09:54:22'),
(151, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:54:43.', '2014-06-24 09:54:43'),
(152, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:55:01.', '2014-06-24 09:55:01'),
(153, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:55:24.', '2014-06-24 09:55:24'),
(154, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:55:51.', '2014-06-24 09:55:51'),
(155, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:56:17.', '2014-06-24 09:56:17'),
(156, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:56:33.', '2014-06-24 09:56:33'),
(157, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:57:47.', '2014-06-24 09:57:47'),
(158, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 09:58:21.', '2014-06-24 09:58:21'),
(159, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:00:29.', '2014-06-24 10:00:29'),
(160, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 10:00:38.', '2014-06-24 10:00:38'),
(161, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:03:24.', '2014-06-24 10:03:24'),
(162, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 10:03:32.', '2014-06-24 10:03:32'),
(163, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:04:25.', '2014-06-24 10:04:25'),
(164, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 10:04:31.', '2014-06-24 10:04:31'),
(165, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:05:28.', '2014-06-24 10:05:28'),
(166, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 10:05:46.', '2014-06-24 10:05:46'),
(167, 4, 'El usuario  , RUT , ha actualizado sus datos con fecha 2014-06-24 10:15:16.', '2014-06-24 10:15:16'),
(168, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:16:23.', '2014-06-24 10:16:23'),
(169, 4, 'El usuario Nombre ape_pat, RUT , ha actualizado sus datos con fecha 2014-06-24 10:18:51.', '2014-06-24 10:18:51'),
(170, 4, 'El usuario Nombre ape_pat, RUT 444-4, ha actualizado sus datos con fecha 2014-06-24 10:19:20.', '2014-06-24 10:19:20'),
(171, 4, 'El usuario Nombre ape_pat, RUT 444-4, ha actualizado sus datos con fecha 2014-06-24 10:19:53.', '2014-06-24 10:19:53'),
(172, 4, 'El usuario Nombre ape_pat, RUT 444-4, ha actualizado sus datos con fecha 2014-06-24 10:20:15.', '2014-06-24 10:20:15'),
(173, 4, 'El usuario Nombre ape_pat, RUT 444-4, ha actualizado sus datos con fecha 2014-06-24 10:20:32.', '2014-06-24 10:20:32'),
(174, 4, 'El usuario Nombre ape_pat, RUT 444-4, ha actualizado sus datos con fecha 2014-06-24 10:21:06.', '2014-06-24 10:21:06'),
(175, 4, 'El usuario Nombre ape_pat, RUT 444-4, ha actualizado sus datos con fecha 2014-06-24 10:27:16.', '2014-06-24 10:27:16'),
(176, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 10:42:24.', '2014-06-24 10:42:24'),
(177, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 10:42:34.', '2014-06-24 10:42:34'),
(178, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 11:09:07.', '2014-06-24 11:09:07'),
(179, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 12:00:55.', '2014-06-24 12:00:55'),
(180, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 12:15:21.', '2014-06-24 12:15:21'),
(181, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 12:15:32.', '2014-06-24 12:15:32'),
(182, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 12:15:46.', '2014-06-24 12:15:46'),
(183, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 12:16:07.', '2014-06-24 12:16:07'),
(184, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 12:25:49.', '2014-06-24 12:25:49'),
(185, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 17:10:19.', '2014-06-24 17:10:19'),
(186, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 17:29:10.', '2014-06-24 17:29:10'),
(187, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 17:44:37.', '2014-06-24 17:44:37'),
(188, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 18:47:32.', '2014-06-24 18:47:32'),
(189, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 18:47:56.', '2014-06-24 18:47:56'),
(190, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 18:48:07.', '2014-06-24 18:48:07'),
(191, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 18:48:40.', '2014-06-24 18:48:40'),
(192, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 19:02:48.', '2014-06-24 19:02:48'),
(193, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 19:03:58.', '2014-06-24 19:03:58'),
(194, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 20:05:43.', '2014-06-24 20:05:43'),
(195, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-06-24 20:13:05.', '2014-06-24 20:13:05'),
(196, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 20:13:16.', '2014-06-24 20:13:16'),
(197, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-06-24 20:13:24.', '2014-06-24 20:13:24'),
(198, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 20:13:42.', '2014-06-24 20:13:42'),
(199, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-24 20:14:23.', '2014-06-24 20:14:23'),
(200, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 11:52:50.', '2014-06-25 11:52:50'),
(201, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-06-25 11:54:36.', '2014-06-25 11:54:36'),
(202, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 12:01:43.', '2014-06-25 12:01:43'),
(203, 3, 'La sesión del usuario francisco1 ha caducado tras 46790413.9 minutos de inactividad, con fecha 2014-06-25 12:07:11.', '2014-06-25 12:07:11'),
(204, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 18:42:28.', '2014-06-25 18:42:28'),
(205, 2, 'La sesión del usuario juan1 ha caducado tras 0.91666666666667 minutos de inactividad, con fecha 2014-06-25 18:45:23.', '2014-06-25 18:45:23'),
(206, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 18:45:46.', '2014-06-25 18:45:46'),
(207, 2, 'La sesión del usuario juan1 ha caducado tras 10.7 minutos de inactividad, con fecha 2014-06-25 19:01:28.', '2014-06-25 19:01:28'),
(208, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:01:35.', '2014-06-25 19:01:35'),
(209, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-25 19:02:26.', '2014-06-25 19:02:26'),
(210, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:02:37.', '2014-06-25 19:02:37'),
(211, 1, 'La sesión del usuario admin ha caducado tras 6.2 minutos de inactividad, con fecha 2014-06-25 19:13:49.', '2014-06-25 19:13:49'),
(212, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:13:55.', '2014-06-25 19:13:55'),
(213, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-25 19:21:37.', '2014-06-25 19:21:37'),
(214, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:21:48.', '2014-06-25 19:21:48'),
(215, 2, 'La sesión del usuario juan1 ha caducado tras 1.7 minutos de inactividad, con fecha 2014-06-25 19:28:30.', '2014-06-25 19:28:30'),
(216, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:28:56.', '2014-06-25 19:28:56'),
(217, 2, 'La sesión del usuario juan1 ha caducado tras 1.35 minutos de inactividad, con fecha 2014-06-25 19:35:17.', '2014-06-25 19:35:17'),
(218, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:35:25.', '2014-06-25 19:35:25'),
(219, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-25 19:39:12.', '2014-06-25 19:39:12'),
(220, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:39:48.', '2014-06-25 19:39:48'),
(221, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-06-25 19:40:39.', '2014-06-25 19:40:39'),
(222, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:40:49.', '2014-06-25 19:40:49'),
(223, 2, 'La sesión del usuario juan1 ha caducado tras 0.11666666666667 minutos de inactividad, con fecha 2014-06-25 19:45:56.', '2014-06-25 19:45:56'),
(224, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:46:05.', '2014-06-25 19:46:05'),
(225, 2, 'La sesión del usuario juan1 ha caducado tras 0.033333333333333 minutos de inactividad, con fecha 2014-06-25 19:51:07.', '2014-06-25 19:51:07'),
(226, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:51:14.', '2014-06-25 19:51:14'),
(227, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-25 19:51:55.', '2014-06-25 19:51:55'),
(228, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 20:23:53.', '2014-06-25 20:23:53'),
(229, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-06-25 20:24:05.', '2014-06-25 20:24:05'),
(230, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 20:24:16.', '2014-06-25 20:24:16'),
(231, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-06-25 20:26:07.', '2014-06-25 20:26:07'),
(232, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 20:26:17.', '2014-06-25 20:26:17'),
(233, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:07:09.', '2014-07-01 19:07:09'),
(234, 1, 'La sesión del usuario admin ha caducado tras 0.21666666666667 minutos de inactividad, con fecha 2014-07-01 19:12:22.', '2014-07-01 19:12:22'),
(235, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:12:30.', '2014-07-01 19:12:30'),
(236, 1, 'La sesión del usuario admin ha caducado tras 3.2166666666667 minutos de inactividad, con fecha 2014-07-01 19:20:43.', '2014-07-01 19:20:43'),
(237, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:20:49.', '2014-07-01 19:20:49'),
(238, 1, 'La sesión del usuario admin ha caducado tras 7.9 minutos de inactividad, con fecha 2014-07-01 19:33:43.', '2014-07-01 19:33:43'),
(239, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:33:49.', '2014-07-01 19:33:49'),
(240, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-01 19:37:54.', '2014-07-01 19:37:54'),
(241, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:41:34.', '2014-07-01 19:41:34'),
(242, 1, 'La sesión del usuario admin ha caducado tras 1.6833333333333 minutos de inactividad, con fecha 2014-07-01 19:48:15.', '2014-07-01 19:48:15'),
(243, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:48:23.', '2014-07-01 19:48:23'),
(244, 1, 'La sesión del usuario admin ha caducado tras 0.083333333333333 minutos de inactividad, con fecha 2014-07-01 19:53:28.', '2014-07-01 19:53:28'),
(245, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:53:34.', '2014-07-01 19:53:34'),
(246, 1, 'La sesión del usuario admin ha caducado tras 7.2166666666667 minutos de inactividad, con fecha 2014-07-01 20:05:47.', '2014-07-01 20:05:47'),
(247, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:05:53.', '2014-07-01 20:05:53'),
(248, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:25:00.', '2014-07-01 20:25:00'),
(249, 1, 'La sesión del usuario admin ha caducado tras 2.0833333333333 minutos de inactividad, con fecha 2014-07-01 20:32:05.', '2014-07-01 20:32:05'),
(250, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:50:54.', '2014-07-01 20:50:54'),
(251, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-01 20:56:57.', '2014-07-01 20:56:57'),
(252, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:57:09.', '2014-07-01 20:57:09'),
(253, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 21:16:19.', '2014-07-01 21:16:19'),
(254, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 20:26:18.', '2014-07-02 20:26:18'),
(255, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 20:27:46.', '2014-07-02 20:27:46'),
(256, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 20:28:15.', '2014-07-02 20:28:15'),
(257, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 21:03:32.', '2014-07-02 21:03:32'),
(258, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-02 22:24:13.', '2014-07-02 22:24:13'),
(259, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 18:31:12.', '2014-07-03 18:31:12'),
(260, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-03 19:56:49.', '2014-07-03 19:56:49'),
(261, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 19:57:02.', '2014-07-03 19:57:02'),
(262, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-03 20:08:57.', '2014-07-03 20:08:57'),
(263, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 20:09:12.', '2014-07-03 20:09:12'),
(264, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-03 20:11:10.', '2014-07-03 20:11:10'),
(265, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 20:14:56.', '2014-07-03 20:14:56'),
(266, 2, 'El usuario Juan Francisco Perez, RUT 11-1, ha actualizado sus datos con fecha 2014-07-03 20:16:03.', '2014-07-03 20:16:03'),
(267, 2, 'El usuario Juan Francisco Perez, RUT 11-1, ha actualizado sus datos con fecha 2014-07-03 20:17:38.', '2014-07-03 20:17:38'),
(268, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:03:43.', '2014-07-04 18:03:43'),
(269, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-04 18:23:55.', '2014-07-04 18:23:55'),
(270, 2, 'El usuario Juan Francisco Perez, RUT 11-1, ha actualizado sus datos con fecha 2014-07-04 18:26:10.', '2014-07-04 18:26:10'),
(271, 2, 'El usuario Juan Francisco Perez, RUT 11-1, ha actualizado sus datos con fecha 2014-07-04 18:27:54.', '2014-07-04 18:27:54'),
(272, 2, 'El usuario Juan Francisco Perez, RUT 11-1, ha actualizado sus datos con fecha 2014-07-04 18:28:37.', '2014-07-04 18:28:37'),
(273, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:28:53.', '2014-07-04 18:28:53'),
(274, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-04 18:29:03.', '2014-07-04 18:29:03'),
(275, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:29:12.', '2014-07-04 18:29:12'),
(276, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-07-04 18:29:25.', '2014-07-04 18:29:25'),
(277, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:30:25.', '2014-07-04 18:30:25'),
(278, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-04 18:51:46.', '2014-07-04 18:51:46'),
(279, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:51:54.', '2014-07-04 18:51:54'),
(280, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-04 19:07:14.', '2014-07-04 19:07:14'),
(281, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 19:07:22.', '2014-07-04 19:07:22'),
(282, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-04 20:17:04.', '2014-07-04 20:17:04'),
(283, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:17:12.', '2014-07-04 20:17:12'),
(284, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-07-04 20:20:06.', '2014-07-04 20:20:06'),
(285, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:20:18.', '2014-07-04 20:20:18'),
(286, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-04 20:21:09.', '2014-07-04 20:21:09'),
(287, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:21:26.', '2014-07-04 20:21:26'),
(288, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-07-04 20:22:50.', '2014-07-04 20:22:50'),
(289, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:22:59.', '2014-07-04 20:22:59'),
(290, 2, 'La sesión del usuario juan1 ha caducado tras 206.01666666667 minutos de inactividad, con fecha 2014-07-05 01:49:00.', '2014-07-05 01:49:00'),
(291, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 01:49:42.', '2014-07-05 01:49:42'),
(292, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-05 02:17:34.', '2014-07-05 02:17:34'),
(293, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 02:17:44.', '2014-07-05 02:17:44'),
(294, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-05 02:49:25.', '2014-07-05 02:49:25'),
(295, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 02:49:33.', '2014-07-05 02:49:33'),
(296, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-05 04:02:13.', '2014-07-05 04:02:13'),
(297, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 04:06:51.', '2014-07-05 04:06:51'),
(298, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-05 04:09:55.', '2014-07-05 04:09:55'),
(299, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:09:09.', '2014-07-05 09:09:09'),
(300, 2, 'La sesión del usuario juan1 ha caducado tras 1.4666666666667 minutos de inactividad, con fecha 2014-07-05 09:15:37.', '2014-07-05 09:15:37'),
(301, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:15:44.', '2014-07-05 09:15:44'),
(302, 2, 'La sesión del usuario juan1 ha caducado tras 7.8 minutos de inactividad, con fecha 2014-07-05 09:28:32.', '2014-07-05 09:28:32'),
(303, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:28:41.', '2014-07-05 09:28:41'),
(304, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:38:22.', '2014-07-05 09:38:22'),
(305, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-05 09:38:50.', '2014-07-05 09:38:50'),
(306, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:39:04.', '2014-07-05 09:39:04'),
(307, 2, 'La sesión del usuario juan1 ha caducado tras 0.016666666666667 minutos de inactividad, con fecha 2014-07-05 09:44:05.', '2014-07-05 09:44:05'),
(308, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:44:16.', '2014-07-05 09:44:16'),
(309, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:53:20.', '2014-07-05 09:53:20'),
(310, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 11:27:37.', '2014-07-13 11:27:37'),
(311, 2, 'La sesión del usuario juan1 ha caducado tras 3.45 minutos de inactividad, con fecha 2014-07-13 11:36:04.', '2014-07-13 11:36:04'),
(312, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 11:36:10.', '2014-07-13 11:36:10'),
(313, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 11:50:42.', '2014-07-13 11:50:42'),
(314, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 13:34:48.', '2014-07-13 13:34:48'),
(315, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 14:25:53.', '2014-07-13 14:25:53'),
(316, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 14:40:36.', '2014-07-13 14:40:36'),
(317, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 20:46:10.', '2014-07-13 20:46:10'),
(318, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:00:32.', '2014-07-13 21:00:32'),
(319, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:05:56.', '2014-07-13 21:05:56'),
(320, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:11:16.', '2014-07-13 21:11:16'),
(321, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:16:27.', '2014-07-13 21:16:27'),
(322, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:23:21.', '2014-07-13 21:23:21'),
(323, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-14 19:54:02.', '2014-07-14 19:54:02'),
(324, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-16 18:18:51.', '2014-07-16 18:18:51'),
(325, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-16 18:19:13.', '2014-07-16 18:19:13'),
(326, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-16 18:34:12.', '2014-07-16 18:34:12'),
(327, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-16 18:34:44.', '2014-07-16 18:34:44'),
(328, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-16 18:35:00.', '2014-07-16 18:35:00'),
(329, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-19 11:12:30.', '2014-07-19 11:12:30'),
(330, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 14:51:40.', '2014-07-27 14:51:40'),
(331, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:30:39.', '2014-07-27 19:30:39'),
(332, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 19:37:25.', '2014-07-27 19:37:25'),
(333, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:37:37.', '2014-07-27 19:37:37'),
(334, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-27 19:45:22.', '2014-07-27 19:45:22'),
(335, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:45:34.', '2014-07-27 19:45:34'),
(336, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 19:47:59.', '2014-07-27 19:47:59'),
(337, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:48:16.', '2014-07-27 19:48:16'),
(338, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-27 21:12:27.', '2014-07-27 21:12:27'),
(339, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:12:38.', '2014-07-27 21:12:38'),
(340, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 21:13:05.', '2014-07-27 21:13:05'),
(341, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:13:14.', '2014-07-27 21:13:14'),
(342, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-27 21:14:49.', '2014-07-27 21:14:49'),
(343, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:15:38.', '2014-07-27 21:15:38'),
(344, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 21:16:35.', '2014-07-27 21:16:35'),
(345, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:16:59.', '2014-07-27 21:16:59'),
(346, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 23:17:24.', '2014-07-27 23:17:24'),
(347, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-27 23:26:42.', '2014-07-27 23:26:42'),
(348, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 23:26:52.', '2014-07-27 23:26:52'),
(349, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 23:44:06.', '2014-07-27 23:44:06'),
(350, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-28 23:11:41.', '2014-07-28 23:11:41'),
(351, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-29 00:04:43.', '2014-07-29 00:04:43'),
(352, 3, 'El usuario francisco1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 00:04:52.', '2014-07-29 00:04:52'),
(353, 3, 'El usuario francisco1 ha Cerrado sesión con fecha 2014-07-29 00:07:08.', '2014-07-29 00:07:08'),
(354, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 00:07:27.', '2014-07-29 00:07:27'),
(355, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-29 00:08:21.', '2014-07-29 00:08:21'),
(356, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 00:08:37.', '2014-07-29 00:08:37'),
(357, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 18:48:22.', '2014-07-29 18:48:22'),
(358, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 21:39:57.', '2014-07-29 21:39:57'),
(359, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:28:08.', '2014-07-30 10:28:08'),
(360, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:33:14.', '2014-07-30 10:33:14'),
(361, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:41:36.', '2014-07-30 10:41:36'),
(362, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:46:58.', '2014-07-30 10:46:58'),
(363, 2, 'El usuario juan1 ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:12:07.', '2014-07-30 13:12:07'),
(364, 2, 'El usuario juan1 ha Cerrado sesión con fecha 2014-07-30 13:16:33.', '2014-07-30 13:16:33'),
(365, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:26:08.', '2014-07-30 13:26:08'),
(366, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:31:18.', '2014-07-30 13:31:18'),
(367, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:36:24.', '2014-07-30 13:36:24'),
(368, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:42:44.', '2014-07-30 13:42:44'),
(369, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:47:54.', '2014-07-30 13:47:54'),
(370, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-30 13:49:15.', '2014-07-30 13:49:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audit_raspberry`
--

CREATE TABLE IF NOT EXISTS `audit_raspberry` (
`ID_REG_RASP` int(11) NOT NULL,
  `ID_RASP` int(11) NOT NULL,
  `COMENTARIO_RASP` varchar(500) NOT NULL,
  `FECH_HOR_RASP` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `audit_raspberry`
--

INSERT INTO `audit_raspberry` (`ID_REG_RASP`, `ID_RASP`, `COMENTARIO_RASP`, `FECH_HOR_RASP`) VALUES
(1, 1, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 1.', '2014-06-16 13:03:13'),
(2, 2, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 2.', '2014-06-16 13:03:13'),
(3, 21, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-24 20:07:52.  Su ID es 21.', '2014-06-24 20:07:52'),
(4, 58, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-24 20:10:41.  Su ID es 58.', '2014-06-24 20:10:41'),
(5, 59, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-24 20:10:41.  Su ID es 59.', '2014-06-24 20:10:41'),
(6, 1, 'La placa Raspberry cuyo ID es 1 ha sido modificada con fecha 2014-06-24 20:12:41.', '2014-06-24 20:12:41'),
(7, 58, 'La placa Raspberry cuyo ID es 58 ha sido eliminada con fecha 2014-07-16 18:55:08.', '2014-07-16 18:55:08'),
(8, 1, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 1.', '2014-06-16 13:03:13'),
(9, 2, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 2.', '2014-06-16 13:03:13'),
(10, 21, 'La placa Raspberry cuyo ID es 21 ha sido eliminada con fecha 2014-07-30 13:01:51.', '2014-07-30 13:01:51'),
(11, 60, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-07-30 13:32:46.  Su ID es 60.', '2014-07-30 13:32:46'),
(12, 61, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-07-30 13:33:24.  Su ID es 61.', '2014-07-30 13:33:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`ID_CLIENTE` int(11) NOT NULL,
  `RUT` varchar(10) NOT NULL,
  `NOMBRES` varchar(150) NOT NULL,
  `APE_PATERNO` varchar(150) NOT NULL,
  `APE_MATERNO` varchar(150) NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `GENERO` varchar(1) NOT NULL,
  `COMUNA` varchar(100) NOT NULL,
  `CALLE` varchar(300) NOT NULL,
  `FONO_MOVIL` varchar(10) NOT NULL,
  `FONO_FIJO` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `USER_CLIE` varchar(50) NOT NULL,
  `PASS_CLIE` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `RUT`, `NOMBRES`, `APE_PATERNO`, `APE_MATERNO`, `FECHA_NAC`, `GENERO`, `COMUNA`, `CALLE`, `FONO_MOVIL`, `FONO_FIJO`, `EMAIL`, `USER_CLIE`, `PASS_CLIE`) VALUES
(1, '00000000-0', 'Administrador', 'Admin', 'Admin', '0000-00-00', 'M', 'Santiago', 'Santiago', '09', '02', 'admin.domosys@gmail.com', 'admin', 'ýÓ˜œW¢ÆŒðGL\0âz\Z'),
(2, '11-1', 'Juan Francisco', 'Perez', 'Bustos', '1990-01-18', 'M', 'Santiago', 'Calle #1', '091111111', '02111111', 'juan.perez1@gmail.co', 'juan1', 'úŒ‹ä>èÉFJwSÝ×'),
(3, '22-2', 'Francisco Juan', 'Bustos', 'Perez', '1990-02-28', 'M', 'Santiago', 'Calle #2', '092222222', '02222222', 'francisco.bustos1@gmail.com', 'francisco1', 'J€&½ðØ¼î\ré`ûí<Ñ'),
(4, '444-4', 'Nombre4', 'ape_pat4', 'ape_mat4', '2012-06-23', 'M', 'Independencia', 'calle #123', '98391222', '20312934', 'email@gmail.com', 'user4', '¯\0KaéáéJê±¤é»×›');

--
-- Disparadores `cliente`
--
DELIMITER //
CREATE TRIGGER `TR_BORRADO_USUARIO` AFTER DELETE ON `cliente`
 FOR EACH ROW INSERT INTO AUDIT_CLIENTE VALUES (null, old.ID_CLIENTE, CONCAT('El usuario ',old.NOMBRES,' ',old.APE_PATERNO,', RUT ',old.RUT,', ha sido eliminado con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_NUEVO_USUARIO` AFTER INSERT ON `cliente`
 FOR EACH ROW INSERT INTO AUDIT_CLIENTE VALUES (null, new.ID_CLIENTE, CONCAT('La persona ',new.NOMBRES,' ',new.APE_PATERNO,', RUT ',new.RUT,', ha sido registrada en el sistema con fecha ',CURRENT_TIMESTAMP,'. Su nombre de usuario es ',new.USER_CLIE,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_UPDATE_USUARIO` BEFORE UPDATE ON `cliente`
 FOR EACH ROW INSERT INTO AUDIT_CLIENTE VALUES (null, old.ID_CLIENTE, CONCAT('El usuario ',old.NOMBRES,' ',old.APE_PATERNO,', RUT ',old.RUT,', ha actualizado sus datos con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente`
--

CREATE TABLE IF NOT EXISTS `componente` (
`ID_COMPONENTE` int(11) NOT NULL,
  `ID_ARD` int(11) NOT NULL,
  `PIN_ARD` int(11) NOT NULL,
  `TIPO_COMP` tinyint(1) NOT NULL,
  `NOMBRE_COMP` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `componente`
--

INSERT INTO `componente` (`ID_COMPONENTE`, `ID_ARD`, `PIN_ARD`, `TIPO_COMP`, `NOMBRE_COMP`) VALUES
(1, 1, 6, 1, 'Luz Dormitorio'),
(2, 1, 7, 0, 'Sensor Movimiento Living'),
(3, 1, 8, 1, 'Luz Comedor'),
(4, 21, 13, 1, 'Luz de los Simpsons'),
(6, 1, 9, 1, 'Luz final final'),
(8, 1, 10, 0, 'Sensor de Loggia'),
(17, 1, 9, 0, 'Sensor perimetral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
`ID_COMENTARIO` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `COMENTARIO_CONTACTO` varchar(700) NOT NULL,
  `FECH_HOR_CONTACTO` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`ID_COMENTARIO`, `ID_USER`, `COMENTARIO_CONTACTO`, `FECH_HOR_CONTACTO`) VALUES
(1, 0, 'La persona Alonso, teléfono móvil: 22131231, dirección e-mail: algo@gmail.com, ha enviado el comentario: Prueba, con fecha 2014-06-24 11:39:56.', '2014-06-24 11:39:56'),
(2, 0, 'La persona Alonso, teléfono móvil: 02189321, dirección e-mail: email@gmail.com, ha enviado el comentario: Necesito que me llamen, con fecha 2014-06-24 11:42:34.', '2014-06-24 11:42:34'),
(3, 0, 'La persona Francisco, teléfono móvil: 22131231, dirección e-mail: prueba2@gmail.com, ha enviado el comentario: qweqw, con fecha 2014-06-24 11:45:57.', '2014-06-24 11:45:57'),
(4, 0, 'La persona Nombre4, teléfono móvil: 98391222, dirección e-mail: algo@gmail.com, ha enviado el comentario: Esto es un comentario\r\n, con fecha 2014-06-24 11:55:52.', '2014-06-24 11:55:52'),
(5, 2, 'El usuario juan1 ha enviado el comentario: Mejoren la interfaz, con fecha 2014-06-24 12:14:12.', '2014-06-24 12:14:12'),
(6, 2, 'El usuario juan1 ha enviado el comentario: Cualquier cosa, con fecha 2014-06-24 12:14:43.', '2014-06-24 12:14:43'),
(10, 0, 'La persona Prueba, teléfono móvil: 98391222, dirección e-mail: prueba3@gmail.com, ha enviado el comentario: Para más información acerca de nuestro producto comuníquese con nosotros por medio de este formularioPara más información acerca de nuestro producto comuníquese con nosotros por medio de este formularioPara más información acerca de nuestro producto comuníquese con nosotros por medio de este formularioPara más información acerca de nuestro producto comuníquese con nosotros por medio de este formularioPara más información acerca de nuestro producto comuníquese con nosotros por medio de este formularioPara más información acerca de nuestro producto comuníquese con nosotros por medio de e', '2014-06-24 17:36:25'),
(15, 2, 'El usuario juan1 ha enviado el comentario: prueba con el diego, con fecha 2014-06-24 19:03:16.', '2014-06-24 19:03:16'),
(16, 0, 'La persona Alonso, teléfono móvil: 231, dirección e-mail: alonso@gmail.com, ha enviado el comentario: Prueba desde el formulario externo, con fecha 2014-06-24 19:04:31.', '2014-06-24 19:04:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raspberry`
--

CREATE TABLE IF NOT EXISTS `raspberry` (
`ID_RASPBERRY` int(11) NOT NULL,
  `ID_CLIEN` int(11) NOT NULL,
  `NUM_SERIE_RASP` varchar(20) NOT NULL,
  `MAC_RASP` varchar(17) NOT NULL,
  `ETHERNET` tinyint(1) NOT NULL,
  `WIFI` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `raspberry`
--

INSERT INTO `raspberry` (`ID_RASPBERRY`, `ID_CLIEN`, `NUM_SERIE_RASP`, `MAC_RASP`, `ETHERNET`, `WIFI`) VALUES
(1, 2, '111', '11:11:11', 1, 0),
(59, 2, '2223', '33:22:22', 0, 1),
(60, 3, '2314', '12:er', 1, 0),
(61, 4, '1222223', 'er:TH', 0, 1);

--
-- Disparadores `raspberry`
--
DELIMITER //
CREATE TRIGGER `TR_BORRADO_RASPBERRY` AFTER DELETE ON `raspberry`
 FOR EACH ROW INSERT INTO AUDIT_RASPBERRY VALUES (null, old.ID_RASPBERRY, CONCAT('La placa Raspberry cuyo ID es ',old.ID_RASPBERRY,' ha sido eliminada con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_NUEVA_RASPBERRY` AFTER INSERT ON `raspberry`
 FOR EACH ROW INSERT INTO AUDIT_RASPBERRY VALUES (null, new.ID_RASPBERRY, CONCAT('Una nueva placa Raspberry ha sido agregada con fecha ',CURRENT_TIMESTAMP,'.  Su ID es ',new.ID_RASPBERRY,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_UPDATE_RASPBERRY` BEFORE UPDATE ON `raspberry`
 FOR EACH ROW INSERT INTO AUDIT_RASPBERRY VALUES (null, old.ID_RASPBERRY, CONCAT('La placa Raspberry cuyo ID es ',old.ID_RASPBERRY,' ha sido modificada con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arduino`
--
ALTER TABLE `arduino`
 ADD PRIMARY KEY (`ID_ARDUINO`), ADD UNIQUE KEY `UN_num_serie_ard` (`NUM_SERIE_ARD`), ADD KEY `FK_ARDUINO_RASPBERRY` (`ID_RASPBE`);

--
-- Indices de la tabla `audit_cliente`
--
ALTER TABLE `audit_cliente`
 ADD PRIMARY KEY (`ID_REG_CLIE`), ADD KEY `FK_AUDIT_CLIENTE_CLIENTE` (`ID_CLIE`);

--
-- Indices de la tabla `audit_raspberry`
--
ALTER TABLE `audit_raspberry`
 ADD PRIMARY KEY (`ID_REG_RASP`), ADD KEY `FK_AUDIT_RASPBERRY_RASPBERRY` (`ID_RASP`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`ID_CLIENTE`), ADD UNIQUE KEY `UN_rut` (`RUT`), ADD UNIQUE KEY `UN_user_clie` (`USER_CLIE`), ADD UNIQUE KEY `UN_email` (`EMAIL`);

--
-- Indices de la tabla `componente`
--
ALTER TABLE `componente`
 ADD PRIMARY KEY (`ID_COMPONENTE`), ADD KEY `FK_COMPONENTE_ARDUINO` (`ID_ARD`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
 ADD PRIMARY KEY (`ID_COMENTARIO`);

--
-- Indices de la tabla `raspberry`
--
ALTER TABLE `raspberry`
 ADD PRIMARY KEY (`ID_RASPBERRY`), ADD UNIQUE KEY `UN_mac_rasp` (`MAC_RASP`), ADD UNIQUE KEY `UN_num_serie_rasp` (`NUM_SERIE_RASP`), ADD KEY `FK_RASPBERRY_CLIENTE` (`ID_CLIEN`);

--
-- Indices de la tabla `uso`
--
ALTER TABLE `uso`
 ADD PRIMARY KEY (`ID_USO`), ADD KEY `FK_USO_COMPONENTE` (`ID_COMP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arduino`
--
ALTER TABLE `arduino`
MODIFY `ID_ARDUINO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `audit_cliente`
--
ALTER TABLE `audit_cliente`
MODIFY `ID_REG_CLIE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=371;
--
-- AUTO_INCREMENT de la tabla `audit_raspberry`
--
ALTER TABLE `audit_raspberry`
MODIFY `ID_REG_RASP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `componente`
--
ALTER TABLE `componente`
MODIFY `ID_COMPONENTE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
MODIFY `ID_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `raspberry`
--
ALTER TABLE `raspberry`
MODIFY `ID_RASPBERRY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `uso`
--
ALTER TABLE `uso`
MODIFY `ID_USO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arduino`
--
ALTER TABLE `arduino`
ADD CONSTRAINT `FK_ARDUINO_RASPBERRY` FOREIGN KEY (`ID_RASPBE`) REFERENCES `raspberry` (`ID_RASPBERRY`) ON DELETE CASCADE;

--
-- Filtros para la tabla `componente`
--
ALTER TABLE `componente`
ADD CONSTRAINT `FK_COMPONENTE_ARDUINO` FOREIGN KEY (`ID_ARD`) REFERENCES `arduino` (`ID_ARDUINO`) ON DELETE CASCADE;

--
-- Filtros para la tabla `raspberry`
--
ALTER TABLE `raspberry`
ADD CONSTRAINT `FK_RASPBERRY_CLIENTE` FOREIGN KEY (`ID_CLIEN`) REFERENCES `cliente` (`ID_CLIENTE`) ON DELETE CASCADE;

--
-- Filtros para la tabla `uso`
--
ALTER TABLE `uso`
ADD CONSTRAINT `FK_USO_COMPONENTE` FOREIGN KEY (`ID_COMP`) REFERENCES `componente` (`ID_COMPONENTE`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
