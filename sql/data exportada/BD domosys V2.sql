-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2014 a las 20:03:06
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `arduino`
--

INSERT INTO `arduino` (`ID_ARDUINO`, `ID_RASPBE`, `NOMBRE_ARD`, `NUM_SERIE_ARD`, `PUERTO_COM`) VALUES
(1, 1, 'UNO R3', '1111A', 'COM1'),
(2, 2, 'UNO R3', '2222B', 'COM2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audit_cliente`
--

CREATE TABLE IF NOT EXISTS `audit_cliente` (
`ID_REG_CLIE` int(11) NOT NULL,
  `ID_CLIE` int(11) NOT NULL,
  `COMENTARIO_CLIE` varchar(500) NOT NULL,
  `FECH_HOR_CLIE` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=323 ;

--
-- Volcado de datos para la tabla `audit_cliente`
--

INSERT INTO `audit_cliente` (`ID_REG_CLIE`, `ID_CLIE`, `COMENTARIO_CLIE`, `FECH_HOR_CLIE`) VALUES
(1, 1, 'La persona Administrador Admin, RUT 00000000-0, ha sido registrada en el sistema con fecha 2014-07-30 13:56:28. Su nombre de usuario es admin.', '2014-07-30 13:56:28'),
(2, 2, 'La persona Juan Francisco Perez, RUT 16956417-5, ha sido registrada en el sistema con fecha 2014-07-30 13:56:28. Su nombre de usuario es juan.', '2014-07-30 13:56:28'),
(3, 3, 'La persona Francisco Juan Bustos, RUT 15721493-4, ha sido registrada en el sistema con fecha 2014-07-30 13:56:28. Su nombre de usuario es francisco.', '2014-07-30 13:56:28'),
(4, 1, 'La persona Administrador Admin, RUT 00000000-0, ha sido registrada en el sistema con fecha 2014-06-16 13:02:43. Su nombre de usuario es admin.', '2014-06-16 13:02:43'),
(5, 2, 'La persona Juan Francisco Perez, RUT 16956417-5, ha sido registrada en el sistema con fecha 2014-06-16 13:02:43. Su nombre de usuario es juan.', '2014-06-16 13:02:43'),
(6, 3, 'La persona Francisco Juan Bustos, RUT 15721493-4, ha sido registrada en el sistema con fecha 2014-06-16 13:02:57. Su nombre de usuario es francisco.', '2014-06-16 13:02:57'),
(7, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-17 18:45:13.', '2014-06-17 18:45:13'),
(8, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-17 18:45:31.', '2014-06-17 18:45:31'),
(9, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 18:47:05.', '2014-06-17 18:47:05'),
(10, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-17 18:47:16.', '2014-06-17 18:47:16'),
(11, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-17 18:47:41.', '2014-06-17 18:47:41'),
(12, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-17 18:48:38.', '2014-06-17 18:48:38'),
(13, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 18:49:02.', '2014-06-17 18:49:02'),
(14, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-17 18:51:23.', '2014-06-17 18:51:23'),
(15, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-17 18:57:45.', '2014-06-17 18:57:45'),
(16, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-17 18:58:00.', '2014-06-17 18:58:00'),
(17, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 19:43:09.', '2014-06-17 19:43:09'),
(18, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-17 19:43:54.', '2014-06-17 19:43:54'),
(19, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-17 19:45:46.', '2014-06-17 19:45:46'),
(20, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 19:47:03.', '2014-06-17 19:47:03'),
(21, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-17 23:13:15.', '2014-06-17 23:13:15'),
(22, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-21 09:50:50.', '2014-06-21 09:50:50'),
(23, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-21 09:55:33.', '2014-06-21 09:55:33'),
(24, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 09:55:43.', '2014-06-21 09:55:43'),
(25, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-21 16:36:41.', '2014-06-21 16:36:41'),
(26, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 16:36:51.', '2014-06-21 16:36:51'),
(27, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 16:38:29.', '2014-06-21 16:38:29'),
(28, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 16:46:46.', '2014-06-21 16:46:46'),
(29, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-21 17:31:50.', '2014-06-21 17:31:50'),
(30, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-21 17:32:08.', '2014-06-21 17:32:08'),
(31, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-21 17:32:42.', '2014-06-21 17:32:42'),
(32, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-21 17:32:53.', '2014-06-21 17:32:53'),
(33, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-21 17:33:17.', '2014-06-21 17:33:17'),
(34, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-21 17:33:51.', '2014-06-21 17:33:51'),
(35, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-21 17:33:58.', '2014-06-21 17:33:58'),
(36, 1, 'El usuario admin ha Iniciado sesión con fecha 2014-06-21 17:49:44.', '2014-06-21 17:49:44'),
(37, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-21 17:50:24.', '2014-06-21 17:50:24'),
(38, 2, 'El usuario juan ha Iniciado sesión con fecha 2014-06-21 17:50:43.', '2014-06-21 17:50:43'),
(39, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-21 17:51:27.', '2014-06-21 17:51:27'),
(40, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 11:17:04.', '2014-06-22 11:17:04'),
(41, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-22 11:17:13.', '2014-06-22 11:17:13'),
(42, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 11:19:04.', '2014-06-22 11:19:04'),
(43, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-22 11:19:12.', '2014-06-22 11:19:12'),
(44, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 12:01:55.', '2014-06-22 12:01:55'),
(45, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 13:35:28.', '2014-06-22 13:35:28'),
(46, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-22 15:39:32.', '2014-06-22 15:39:32'),
(47, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 15:43:48.', '2014-06-22 15:43:48'),
(48, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-22 18:08:25.', '2014-06-22 18:08:25'),
(49, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:39:55.', '2014-06-23 18:39:55'),
(50, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-23 18:40:05.', '2014-06-23 18:40:05'),
(51, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:40:19.', '2014-06-23 18:40:19'),
(52, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-23 18:40:54.', '2014-06-23 18:40:54'),
(53, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:41:07.', '2014-06-23 18:41:07'),
(54, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-23 18:41:15.', '2014-06-23 18:41:15'),
(55, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:41:26.', '2014-06-23 18:41:26'),
(56, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-23 18:41:35.', '2014-06-23 18:41:35'),
(57, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:41:50.', '2014-06-23 18:41:50'),
(58, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-23 18:46:42.', '2014-06-23 18:46:42'),
(59, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:47:00.', '2014-06-23 18:47:00'),
(60, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-23 18:52:50.', '2014-06-23 18:52:50'),
(61, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-23 18:52:59.', '2014-06-23 18:52:59'),
(62, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-23 18:53:20.', '2014-06-23 18:53:20'),
(63, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Smartphone con fecha 2014-06-23 18:53:30.', '2014-06-23 18:53:30'),
(64, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-23 18:53:38.', '2014-06-23 18:53:38'),
(65, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 18:54:00.', '2014-06-23 18:54:00'),
(66, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-23 18:54:07.', '2014-06-23 18:54:07'),
(67, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 18:54:26.', '2014-06-23 18:54:26'),
(68, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-23 19:19:32.', '2014-06-23 19:19:32'),
(69, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:20:00.', '2014-06-23 19:20:00'),
(70, 2, 'La sesión del usuario juan ha caducado tras 225 minutos de inactividad, con fecha 2014-06-23 19:24:45.', '2014-06-23 19:24:45'),
(71, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:25:20.', '2014-06-23 19:25:20'),
(72, 2, 'La sesión del usuario juan ha caducado tras 58 minutos de inactividad, con fecha 2014-06-23 19:27:18.', '2014-06-23 19:27:18'),
(73, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:29:33.', '2014-06-23 19:29:33'),
(74, 2, 'La sesión del usuario juan ha caducado tras -7440 minutos de inactividad, con fecha 2014-06-23 19:32:37.', '2014-06-23 19:32:37'),
(75, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:34:20.', '2014-06-23 19:34:20'),
(76, 2, 'La sesión del usuario juan ha caducado tras 7920 minutos de inactividad, con fecha 2014-06-23 19:37:32.', '2014-06-23 19:37:32'),
(77, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:38:23.', '2014-06-23 19:38:23'),
(78, 2, 'La sesión del usuario juan ha caducado tras 0.1 minutos de inactividad, con fecha 2014-06-23 19:39:29.', '2014-06-23 19:39:29'),
(79, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:41:45.', '2014-06-23 19:41:45'),
(80, 1, 'La sesión del usuario admin ha caducado tras 2.5833333333333 minutos de inactividad, con fecha 2014-06-23 19:45:20.', '2014-06-23 19:45:20'),
(81, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:45:27.', '2014-06-23 19:45:27'),
(82, 1, 'La sesión del usuario admin ha caducado tras 0.33333333333333 minutos de inactividad, con fecha 2014-06-23 19:46:47.', '2014-06-23 19:46:47'),
(83, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:46:53.', '2014-06-23 19:46:53'),
(84, 1, 'La sesión del usuario admin ha caducado tras 0.58333333333333 minutos de inactividad, con fecha 2014-06-23 19:48:28.', '2014-06-23 19:48:28'),
(85, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:48:34.', '2014-06-23 19:48:34'),
(86, 1, 'La sesión del usuario admin ha caducado tras 2.7833333333333 minutos de inactividad, con fecha 2014-06-23 19:52:21.', '2014-06-23 19:52:21'),
(87, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:52:28.', '2014-06-23 19:52:28'),
(88, 1, 'La sesión del usuario admin ha caducado tras 0.016666666666667 minutos de inactividad, con fecha 2014-06-23 19:57:29.', '2014-06-23 19:57:29'),
(89, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 19:57:39.', '2014-06-23 19:57:39'),
(90, 1, 'La sesión del usuario admin ha caducado tras 3.3166666666667 minutos de inactividad, con fecha 2014-06-23 20:05:58.', '2014-06-23 20:05:58'),
(91, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-23 20:06:05.', '2014-06-23 20:06:05'),
(92, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:31:54.', '2014-06-24 09:31:54'),
(93, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 09:32:11.', '2014-06-24 09:32:11'),
(94, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:33:04.', '2014-06-24 09:33:04'),
(95, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:34:07.', '2014-06-24 09:34:07'),
(96, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:35:07.', '2014-06-24 09:35:07'),
(97, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:35:59.', '2014-06-24 09:35:59'),
(98, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:38:16.', '2014-06-24 09:38:16'),
(99, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:38:51.', '2014-06-24 09:38:51'),
(100, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:41:36.', '2014-06-24 09:41:36'),
(101, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:46:03.', '2014-06-24 09:46:03'),
(102, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:46:33.', '2014-06-24 09:46:33'),
(103, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:47:13.', '2014-06-24 09:47:13'),
(104, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:49:20.', '2014-06-24 09:49:20'),
(105, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:49:53.', '2014-06-24 09:49:53'),
(106, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:50:13.', '2014-06-24 09:50:13'),
(107, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:50:25.', '2014-06-24 09:50:25'),
(108, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:50:43.', '2014-06-24 09:50:43'),
(109, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:51:29.', '2014-06-24 09:51:29'),
(110, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:51:57.', '2014-06-24 09:51:57'),
(111, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:52:23.', '2014-06-24 09:52:23'),
(112, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:52:50.', '2014-06-24 09:52:50'),
(113, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:53:24.', '2014-06-24 09:53:24'),
(114, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:53:54.', '2014-06-24 09:53:54'),
(115, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:54:22.', '2014-06-24 09:54:22'),
(116, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:54:43.', '2014-06-24 09:54:43'),
(117, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:55:01.', '2014-06-24 09:55:01'),
(118, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:55:24.', '2014-06-24 09:55:24'),
(119, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:55:51.', '2014-06-24 09:55:51'),
(120, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:56:17.', '2014-06-24 09:56:17'),
(121, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:56:33.', '2014-06-24 09:56:33'),
(122, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 09:57:47.', '2014-06-24 09:57:47'),
(123, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 09:58:21.', '2014-06-24 09:58:21'),
(124, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:00:29.', '2014-06-24 10:00:29'),
(125, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 10:00:38.', '2014-06-24 10:00:38'),
(126, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:03:24.', '2014-06-24 10:03:24'),
(127, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 10:03:32.', '2014-06-24 10:03:32'),
(128, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:04:25.', '2014-06-24 10:04:25'),
(129, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 10:04:31.', '2014-06-24 10:04:31'),
(130, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:05:28.', '2014-06-24 10:05:28'),
(131, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 10:05:46.', '2014-06-24 10:05:46'),
(132, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 10:16:23.', '2014-06-24 10:16:23'),
(133, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 10:42:24.', '2014-06-24 10:42:24'),
(134, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 10:42:34.', '2014-06-24 10:42:34'),
(135, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 11:09:07.', '2014-06-24 11:09:07'),
(136, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 12:00:55.', '2014-06-24 12:00:55'),
(137, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 12:15:21.', '2014-06-24 12:15:21'),
(138, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 12:15:32.', '2014-06-24 12:15:32'),
(139, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 12:15:46.', '2014-06-24 12:15:46'),
(140, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 12:16:07.', '2014-06-24 12:16:07'),
(141, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 12:25:49.', '2014-06-24 12:25:49'),
(142, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 17:10:19.', '2014-06-24 17:10:19'),
(143, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 17:29:10.', '2014-06-24 17:29:10'),
(144, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Tablet con fecha 2014-06-24 17:44:37.', '2014-06-24 17:44:37'),
(145, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 18:47:32.', '2014-06-24 18:47:32'),
(146, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 18:47:56.', '2014-06-24 18:47:56'),
(147, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 18:48:07.', '2014-06-24 18:48:07'),
(148, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-24 18:48:40.', '2014-06-24 18:48:40'),
(149, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 19:02:48.', '2014-06-24 19:02:48'),
(150, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 19:03:58.', '2014-06-24 19:03:58'),
(151, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 20:05:43.', '2014-06-24 20:05:43'),
(152, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-06-24 20:13:05.', '2014-06-24 20:13:05'),
(153, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 20:13:16.', '2014-06-24 20:13:16'),
(154, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-06-24 20:13:24.', '2014-06-24 20:13:24'),
(155, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-24 20:13:42.', '2014-06-24 20:13:42'),
(156, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-24 20:14:23.', '2014-06-24 20:14:23'),
(157, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 11:52:50.', '2014-06-25 11:52:50'),
(158, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-06-25 11:54:36.', '2014-06-25 11:54:36'),
(159, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 12:01:43.', '2014-06-25 12:01:43'),
(160, 3, 'La sesión del usuario francisco ha caducado tras 46790413.9 minutos de inactividad, con fecha 2014-06-25 12:07:11.', '2014-06-25 12:07:11'),
(161, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 18:42:28.', '2014-06-25 18:42:28'),
(162, 2, 'La sesión del usuario juan ha caducado tras 0.91666666666667 minutos de inactividad, con fecha 2014-06-25 18:45:23.', '2014-06-25 18:45:23'),
(163, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 18:45:46.', '2014-06-25 18:45:46'),
(164, 2, 'La sesión del usuario juan ha caducado tras 10.7 minutos de inactividad, con fecha 2014-06-25 19:01:28.', '2014-06-25 19:01:28'),
(165, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:01:35.', '2014-06-25 19:01:35'),
(166, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-25 19:02:26.', '2014-06-25 19:02:26'),
(167, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:02:37.', '2014-06-25 19:02:37'),
(168, 1, 'La sesión del usuario admin ha caducado tras 6.2 minutos de inactividad, con fecha 2014-06-25 19:13:49.', '2014-06-25 19:13:49'),
(169, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:13:55.', '2014-06-25 19:13:55'),
(170, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-06-25 19:21:37.', '2014-06-25 19:21:37'),
(171, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:21:48.', '2014-06-25 19:21:48'),
(172, 2, 'La sesión del usuario juan ha caducado tras 1.7 minutos de inactividad, con fecha 2014-06-25 19:28:30.', '2014-06-25 19:28:30'),
(173, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:28:56.', '2014-06-25 19:28:56'),
(174, 2, 'La sesión del usuario juan ha caducado tras 1.35 minutos de inactividad, con fecha 2014-06-25 19:35:17.', '2014-06-25 19:35:17'),
(175, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:35:25.', '2014-06-25 19:35:25'),
(176, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-25 19:39:12.', '2014-06-25 19:39:12'),
(177, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:39:48.', '2014-06-25 19:39:48'),
(178, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-06-25 19:40:39.', '2014-06-25 19:40:39'),
(179, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:40:49.', '2014-06-25 19:40:49'),
(180, 2, 'La sesión del usuario juan ha caducado tras 0.11666666666667 minutos de inactividad, con fecha 2014-06-25 19:45:56.', '2014-06-25 19:45:56'),
(181, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:46:05.', '2014-06-25 19:46:05'),
(182, 2, 'La sesión del usuario juan ha caducado tras 0.033333333333333 minutos de inactividad, con fecha 2014-06-25 19:51:07.', '2014-06-25 19:51:07'),
(183, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 19:51:14.', '2014-06-25 19:51:14'),
(184, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-25 19:51:55.', '2014-06-25 19:51:55'),
(185, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 20:23:53.', '2014-06-25 20:23:53'),
(186, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-06-25 20:24:05.', '2014-06-25 20:24:05'),
(187, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 20:24:16.', '2014-06-25 20:24:16'),
(188, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-06-25 20:26:07.', '2014-06-25 20:26:07'),
(189, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-06-25 20:26:17.', '2014-06-25 20:26:17'),
(190, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:07:09.', '2014-07-01 19:07:09'),
(191, 1, 'La sesión del usuario admin ha caducado tras 0.21666666666667 minutos de inactividad, con fecha 2014-07-01 19:12:22.', '2014-07-01 19:12:22'),
(192, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:12:30.', '2014-07-01 19:12:30'),
(193, 1, 'La sesión del usuario admin ha caducado tras 3.2166666666667 minutos de inactividad, con fecha 2014-07-01 19:20:43.', '2014-07-01 19:20:43'),
(194, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:20:49.', '2014-07-01 19:20:49'),
(195, 1, 'La sesión del usuario admin ha caducado tras 7.9 minutos de inactividad, con fecha 2014-07-01 19:33:43.', '2014-07-01 19:33:43'),
(196, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:33:49.', '2014-07-01 19:33:49'),
(197, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-01 19:37:54.', '2014-07-01 19:37:54'),
(198, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:41:34.', '2014-07-01 19:41:34'),
(199, 1, 'La sesión del usuario admin ha caducado tras 1.6833333333333 minutos de inactividad, con fecha 2014-07-01 19:48:15.', '2014-07-01 19:48:15'),
(200, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:48:23.', '2014-07-01 19:48:23'),
(201, 1, 'La sesión del usuario admin ha caducado tras 0.083333333333333 minutos de inactividad, con fecha 2014-07-01 19:53:28.', '2014-07-01 19:53:28'),
(202, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 19:53:34.', '2014-07-01 19:53:34'),
(203, 1, 'La sesión del usuario admin ha caducado tras 7.2166666666667 minutos de inactividad, con fecha 2014-07-01 20:05:47.', '2014-07-01 20:05:47'),
(204, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:05:53.', '2014-07-01 20:05:53'),
(205, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:25:00.', '2014-07-01 20:25:00'),
(206, 1, 'La sesión del usuario admin ha caducado tras 2.0833333333333 minutos de inactividad, con fecha 2014-07-01 20:32:05.', '2014-07-01 20:32:05'),
(207, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:50:54.', '2014-07-01 20:50:54'),
(208, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-01 20:56:57.', '2014-07-01 20:56:57'),
(209, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 20:57:09.', '2014-07-01 20:57:09'),
(210, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-01 21:16:19.', '2014-07-01 21:16:19'),
(211, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 20:26:18.', '2014-07-02 20:26:18'),
(212, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 20:27:46.', '2014-07-02 20:27:46'),
(213, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 20:28:15.', '2014-07-02 20:28:15'),
(214, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-02 21:03:32.', '2014-07-02 21:03:32'),
(215, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-02 22:24:13.', '2014-07-02 22:24:13'),
(216, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 18:31:12.', '2014-07-03 18:31:12'),
(217, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-03 19:56:49.', '2014-07-03 19:56:49'),
(218, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 19:57:02.', '2014-07-03 19:57:02'),
(219, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-03 20:08:57.', '2014-07-03 20:08:57'),
(220, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 20:09:12.', '2014-07-03 20:09:12'),
(221, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-03 20:11:10.', '2014-07-03 20:11:10'),
(222, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-03 20:14:56.', '2014-07-03 20:14:56'),
(223, 2, 'El usuario Juan Francisco Perez, RUT 16956417-5, ha actualizado sus datos con fecha 2014-07-03 20:16:03.', '2014-07-03 20:16:03'),
(224, 2, 'El usuario Juan Francisco Perez, RUT 16956417-5, ha actualizado sus datos con fecha 2014-07-03 20:17:38.', '2014-07-03 20:17:38'),
(225, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:03:43.', '2014-07-04 18:03:43'),
(226, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-04 18:23:55.', '2014-07-04 18:23:55'),
(227, 2, 'El usuario Juan Francisco Perez, RUT 16956417-5, ha actualizado sus datos con fecha 2014-07-04 18:26:10.', '2014-07-04 18:26:10'),
(228, 2, 'El usuario Juan Francisco Perez, RUT 16956417-5, ha actualizado sus datos con fecha 2014-07-04 18:27:54.', '2014-07-04 18:27:54'),
(229, 2, 'El usuario Juan Francisco Perez, RUT 16956417-5, ha actualizado sus datos con fecha 2014-07-04 18:28:37.', '2014-07-04 18:28:37'),
(230, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:28:53.', '2014-07-04 18:28:53'),
(231, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-04 18:29:03.', '2014-07-04 18:29:03'),
(232, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:29:12.', '2014-07-04 18:29:12'),
(233, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-07-04 18:29:25.', '2014-07-04 18:29:25'),
(234, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:30:25.', '2014-07-04 18:30:25'),
(235, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-04 18:51:46.', '2014-07-04 18:51:46'),
(236, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 18:51:54.', '2014-07-04 18:51:54'),
(237, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-04 19:07:14.', '2014-07-04 19:07:14'),
(238, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 19:07:22.', '2014-07-04 19:07:22'),
(239, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-04 20:17:04.', '2014-07-04 20:17:04'),
(240, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:17:12.', '2014-07-04 20:17:12'),
(241, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-07-04 20:20:06.', '2014-07-04 20:20:06'),
(242, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:20:18.', '2014-07-04 20:20:18'),
(243, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-04 20:21:09.', '2014-07-04 20:21:09'),
(244, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:21:26.', '2014-07-04 20:21:26'),
(245, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-07-04 20:22:50.', '2014-07-04 20:22:50'),
(246, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-04 20:22:59.', '2014-07-04 20:22:59'),
(247, 2, 'La sesión del usuario juan ha caducado tras 206.01666666667 minutos de inactividad, con fecha 2014-07-05 01:49:00.', '2014-07-05 01:49:00'),
(248, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 01:49:42.', '2014-07-05 01:49:42'),
(249, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-05 02:17:34.', '2014-07-05 02:17:34'),
(250, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 02:17:44.', '2014-07-05 02:17:44'),
(251, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-05 02:49:25.', '2014-07-05 02:49:25'),
(252, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 02:49:33.', '2014-07-05 02:49:33'),
(253, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-05 04:02:13.', '2014-07-05 04:02:13'),
(254, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 04:06:51.', '2014-07-05 04:06:51'),
(255, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-05 04:09:55.', '2014-07-05 04:09:55'),
(256, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:09:09.', '2014-07-05 09:09:09'),
(257, 2, 'La sesión del usuario juan ha caducado tras 1.4666666666667 minutos de inactividad, con fecha 2014-07-05 09:15:37.', '2014-07-05 09:15:37'),
(258, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:15:44.', '2014-07-05 09:15:44'),
(259, 2, 'La sesión del usuario juan ha caducado tras 7.8 minutos de inactividad, con fecha 2014-07-05 09:28:32.', '2014-07-05 09:28:32'),
(260, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:28:41.', '2014-07-05 09:28:41'),
(261, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:38:22.', '2014-07-05 09:38:22'),
(262, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-05 09:38:50.', '2014-07-05 09:38:50'),
(263, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:39:04.', '2014-07-05 09:39:04'),
(264, 2, 'La sesión del usuario juan ha caducado tras 0.016666666666667 minutos de inactividad, con fecha 2014-07-05 09:44:05.', '2014-07-05 09:44:05'),
(265, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:44:16.', '2014-07-05 09:44:16'),
(266, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-05 09:53:20.', '2014-07-05 09:53:20'),
(267, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 11:27:37.', '2014-07-13 11:27:37'),
(268, 2, 'La sesión del usuario juan ha caducado tras 3.45 minutos de inactividad, con fecha 2014-07-13 11:36:04.', '2014-07-13 11:36:04'),
(269, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 11:36:10.', '2014-07-13 11:36:10'),
(270, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 11:50:42.', '2014-07-13 11:50:42'),
(271, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 13:34:48.', '2014-07-13 13:34:48'),
(272, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 14:25:53.', '2014-07-13 14:25:53'),
(273, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 14:40:36.', '2014-07-13 14:40:36'),
(274, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 20:46:10.', '2014-07-13 20:46:10'),
(275, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:00:32.', '2014-07-13 21:00:32'),
(276, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:05:56.', '2014-07-13 21:05:56'),
(277, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:11:16.', '2014-07-13 21:11:16'),
(278, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:16:27.', '2014-07-13 21:16:27'),
(279, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-13 21:23:21.', '2014-07-13 21:23:21'),
(280, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-14 19:54:02.', '2014-07-14 19:54:02'),
(281, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-16 18:18:51.', '2014-07-16 18:18:51'),
(282, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-16 18:19:13.', '2014-07-16 18:19:13'),
(283, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-16 18:34:12.', '2014-07-16 18:34:12'),
(284, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-16 18:34:44.', '2014-07-16 18:34:44'),
(285, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-16 18:35:00.', '2014-07-16 18:35:00'),
(286, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-19 11:12:30.', '2014-07-19 11:12:30'),
(287, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 14:51:40.', '2014-07-27 14:51:40'),
(288, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:30:39.', '2014-07-27 19:30:39'),
(289, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 19:37:25.', '2014-07-27 19:37:25'),
(290, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:37:37.', '2014-07-27 19:37:37'),
(291, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-27 19:45:22.', '2014-07-27 19:45:22'),
(292, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:45:34.', '2014-07-27 19:45:34'),
(293, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 19:47:59.', '2014-07-27 19:47:59'),
(294, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 19:48:16.', '2014-07-27 19:48:16'),
(295, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-27 21:12:27.', '2014-07-27 21:12:27'),
(296, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:12:38.', '2014-07-27 21:12:38'),
(297, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 21:13:05.', '2014-07-27 21:13:05'),
(298, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:13:14.', '2014-07-27 21:13:14'),
(299, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-27 21:14:49.', '2014-07-27 21:14:49'),
(300, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:15:38.', '2014-07-27 21:15:38'),
(301, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 21:16:35.', '2014-07-27 21:16:35'),
(302, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 21:16:59.', '2014-07-27 21:16:59'),
(303, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 23:17:24.', '2014-07-27 23:17:24'),
(304, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-27 23:26:42.', '2014-07-27 23:26:42'),
(305, 1, 'El usuario admin ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-27 23:26:52.', '2014-07-27 23:26:52'),
(306, 1, 'El usuario admin ha Cerrado sesión con fecha 2014-07-27 23:44:06.', '2014-07-27 23:44:06'),
(307, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-28 23:11:41.', '2014-07-28 23:11:41'),
(308, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-29 00:04:43.', '2014-07-29 00:04:43'),
(309, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 00:04:52.', '2014-07-29 00:04:52'),
(310, 3, 'El usuario francisco ha Cerrado sesión con fecha 2014-07-29 00:07:08.', '2014-07-29 00:07:08'),
(311, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 00:07:27.', '2014-07-29 00:07:27'),
(312, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-29 00:08:21.', '2014-07-29 00:08:21'),
(313, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 00:08:37.', '2014-07-29 00:08:37'),
(314, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 18:48:22.', '2014-07-29 18:48:22'),
(315, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-29 21:39:57.', '2014-07-29 21:39:57'),
(316, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:28:08.', '2014-07-30 10:28:08'),
(317, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:33:14.', '2014-07-30 10:33:14'),
(318, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:41:36.', '2014-07-30 10:41:36'),
(319, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 10:46:58.', '2014-07-30 10:46:58'),
(320, 2, 'El usuario juan ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:57:27.', '2014-07-30 13:57:27'),
(321, 2, 'El usuario juan ha Cerrado sesión con fecha 2014-07-30 13:58:27.', '2014-07-30 13:58:27'),
(322, 3, 'El usuario francisco ha Iniciado sesión desde un dispositivo Escritorio con fecha 2014-07-30 13:58:36.', '2014-07-30 13:58:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audit_raspberry`
--

CREATE TABLE IF NOT EXISTS `audit_raspberry` (
`ID_REG_RASP` int(11) NOT NULL,
  `ID_RASP` int(11) NOT NULL,
  `COMENTARIO_RASP` varchar(500) NOT NULL,
  `FECH_HOR_RASP` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `audit_raspberry`
--

INSERT INTO `audit_raspberry` (`ID_REG_RASP`, `ID_RASP`, `COMENTARIO_RASP`, `FECH_HOR_RASP`) VALUES
(1, 1, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-07-30 13:56:28.  Su ID es 1.', '2014-07-30 13:56:28'),
(2, 2, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-07-30 13:56:28.  Su ID es 2.', '2014-07-30 13:56:28'),
(3, 1, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 1.', '2014-06-16 13:03:13'),
(4, 2, 'Una nueva placa Raspberry ha sido agregada con fecha 2014-06-16 13:03:13.  Su ID es 2.', '2014-06-16 13:03:13');

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
  `FONO_MOVIL` varchar(8) NOT NULL,
  `FONO_FIJO` varchar(8) DEFAULT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `USER_CLIE` varchar(20) NOT NULL,
  `PASS_CLIE` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `RUT`, `NOMBRES`, `APE_PATERNO`, `APE_MATERNO`, `FECHA_NAC`, `GENERO`, `COMUNA`, `CALLE`, `FONO_MOVIL`, `FONO_FIJO`, `EMAIL`, `USER_CLIE`, `PASS_CLIE`) VALUES
(1, '00000000-0', 'Administrador', 'Admin', 'Admin', '0000-00-00', 'M', 'Santiago', 'Santiago', '09', '02', 'admin.domosys@gmail.com', 'admin', 'ýÓ˜œW¢ÆŒðGL\0âz\Z'),
(2, '16956417-5', 'Juan Francisco', 'Perez', 'Bustos', '1990-01-18', 'M', 'Santiago', 'Calle #1', '09111111', '02111111', 'juan.perez@gmail.com', 'juan', 'úŒ‹ä>èÉFJwSÝ×'),
(3, '15721493-4', 'Francisco Juan', 'Bustos', 'Perez', '1990-02-28', 'M', 'Santiago', 'Calle #2', '09222222', '02222222', 'francisco.bustos@gmail.com', 'francisco', 'J€&½ðØ¼î\ré`ûí<Ñ');

--
-- Disparadores `cliente`
--
DELIMITER //
CREATE TRIGGER `TR_BORRADO_USUARIO` AFTER DELETE ON `cliente`
 FOR EACH ROW INSERT INTO audit_cliente VALUES (null, old.ID_CLIENTE, CONCAT('El usuario ',old.NOMBRES,' ',old.APE_PATERNO,', RUT ',old.RUT,', ha sido eliminado con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_NUEVO_USUARIO` AFTER INSERT ON `cliente`
 FOR EACH ROW INSERT INTO audit_cliente VALUES (null, new.ID_CLIENTE, CONCAT('La persona ',new.NOMBRES,' ',new.APE_PATERNO,', RUT ',new.RUT,', ha sido registrada en el sistema con fecha ',CURRENT_TIMESTAMP,'. Su nombre de usuario es ',new.USER_CLIE,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_UPDATE_USUARIO` BEFORE UPDATE ON `cliente`
 FOR EACH ROW INSERT INTO audit_cliente VALUES (null, old.ID_CLIENTE, CONCAT('El usuario ',old.NOMBRES,' ',old.APE_PATERNO,', RUT ',old.RUT,', ha actualizado sus datos con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `componente`
--

INSERT INTO `componente` (`ID_COMPONENTE`, `ID_ARD`, `PIN_ARD`, `TIPO_COMP`, `NOMBRE_COMP`) VALUES
(1, 1, 6, 1, 'Luz Dormitorio'),
(2, 1, 7, 0, 'Sensor de Movimiento Dormitorio'),
(3, 1, 8, 1, 'Luz Living'),
(4, 2, 9, 1, 'Luz Cocina'),
(5, 2, 10, 0, 'Sensor de Movimiento Living'),
(6, 2, 11, 1, 'Luz Comedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
`ID_COMENTARIO` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `COMENTARIO_CONTACTO` varchar(700) NOT NULL,
  `FECH_HOR_CONTACTO` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `raspberry`
--

INSERT INTO `raspberry` (`ID_RASPBERRY`, `ID_CLIEN`, `NUM_SERIE_RASP`, `MAC_RASP`, `ETHERNET`, `WIFI`) VALUES
(1, 1, '111', '11:11:11', 1, 0),
(2, 2, '222', '22:22:22', 1, 0);

--
-- Disparadores `raspberry`
--
DELIMITER //
CREATE TRIGGER `TR_BORRADO_RASPBERRY` AFTER DELETE ON `raspberry`
 FOR EACH ROW INSERT INTO audit_raspberry VALUES (null, old.ID_RASPBERRY, CONCAT('La placa Raspberry cuyo ID es ',old.ID_RASPBERRY,' ha sido eliminada con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_NUEVA_RASPBERRY` AFTER INSERT ON `raspberry`
 FOR EACH ROW INSERT INTO audit_raspberry VALUES (null, new.ID_RASPBERRY, CONCAT('Una nueva placa Raspberry ha sido agregada con fecha ',CURRENT_TIMESTAMP,'.  Su ID es ',new.ID_RASPBERRY,'.'), CURRENT_TIMESTAMP)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `TR_UPDATE_RASPBERRY` BEFORE UPDATE ON `raspberry`
 FOR EACH ROW INSERT INTO audit_raspberry VALUES (null, old.ID_RASPBERRY, CONCAT('La placa Raspberry cuyo ID es ',old.ID_RASPBERRY,' ha sido modificada con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `uso`
--

INSERT INTO `uso` (`ID_USO`, `ID_COMP`, `ESTADO`, `COMENTARIO_USO`, `FECH_HOR_INI`, `FECH_HOR_FIN`) VALUES
(1, 1, 0, 'Luz Dormitorio Apagada', '2014-01-14 13:05:00', '2014-01-14 13:05:00'),
(2, 2, 0, 'Sensor de Movimiento Living Desactivado', '2014-01-14 13:10:00', '2014-01-14 13:10:00'),
(3, 3, 0, 'Luz Living Apagada', '2014-01-14 13:15:00', '2014-01-14 13:15:00'),
(4, 4, 0, 'Luz Cocina Apagada.', '2014-01-14 13:20:00', '2014-01-14 13:20:00'),
(5, 5, 0, 'Sensor de Movimiento Living Desactivado.', '2014-01-14 13:25:00', '2014-01-14 13:25:00'),
(6, 6, 0, 'Luz Comedor Apagada.', '2014-01-14 13:30:00', '2014-01-14 13:30:00'),
(7, 1, 0, 'Luz Dormitorio Apagada', '2014-01-15 07:59:59', '2014-01-15 15:59:59'),
(8, 3, 0, 'Luz Living Apagada', '2014-01-15 07:59:59', '2014-01-15 15:59:59'),
(9, 4, 0, 'Luz Cocina Apagada.', '2014-01-15 07:59:59', '2014-01-15 23:59:59'),
(10, 6, 0, 'Luz Comedor Apagada.', '2014-01-15 07:59:59', '2014-01-15 23:59:59'),
(11, 1, 0, 'Luz Dormitorio Apagada', '2014-02-15 07:59:59', '2014-02-15 23:59:59'),
(12, 3, 0, 'Luz Living Apagada', '2014-02-15 07:59:59', '2014-02-15 23:59:59'),
(13, 4, 0, 'Luz Cocina Apagada.', '2014-02-15 07:59:59', '2014-02-15 15:59:59'),
(14, 6, 0, 'Luz Comedor Apagada.', '2014-02-15 07:59:59', '2014-02-15 15:59:59'),
(15, 1, 0, 'Luz Dormitorio Apagada', '2014-03-15 07:59:59', '2014-03-15 15:59:59'),
(16, 3, 0, 'Luz Living Apagada', '2014-03-15 07:59:59', '2014-03-15 15:59:59'),
(17, 4, 0, 'Luz Cocina Apagada.', '2014-03-15 07:59:59', '2014-03-15 23:59:59'),
(18, 6, 0, 'Luz Comedor Apagada.', '2014-03-15 07:59:59', '2014-03-15 23:59:59'),
(19, 1, 0, 'Luz Dormitorio Apagada', '2014-04-15 07:59:59', '2014-04-15 23:59:59'),
(20, 3, 0, 'Luz Living Apagada', '2014-04-15 07:59:59', '2014-04-15 23:59:59'),
(21, 4, 0, 'Luz Cocina Apagada.', '2014-04-15 07:59:59', '2014-04-15 15:59:59'),
(22, 6, 0, 'Luz Comedor Apagada.', '2014-04-15 07:59:59', '2014-04-15 15:59:59'),
(23, 1, 0, 'Luz Dormitorio Apagada', '2014-05-15 07:59:59', '2014-05-15 15:59:59'),
(24, 3, 0, 'Luz Living Apagada', '2014-05-15 07:59:59', '2014-05-15 15:59:59'),
(25, 4, 0, 'Luz Cocina Apagada.', '2014-05-15 07:59:59', '2014-05-15 23:59:59'),
(26, 6, 0, 'Luz Comedor Apagada.', '2014-05-15 07:59:59', '2014-05-15 23:59:59'),
(27, 1, 0, 'Luz Dormitorio Apagada', '2014-06-15 07:59:59', '2014-06-15 23:59:59'),
(28, 3, 0, 'Luz Living Apagada', '2014-06-15 07:59:59', '2014-06-15 23:59:59'),
(29, 4, 0, 'Luz Cocina Apagada.', '2014-06-15 07:59:59', '2014-06-15 15:59:59'),
(30, 6, 0, 'Luz Comedor Apagada.', '2014-06-15 07:59:59', '2014-06-15 15:59:59'),
(31, 1, 0, 'Luz Dormitorio Apagada', '2014-07-15 07:59:59', '2014-07-15 15:59:59'),
(32, 3, 0, 'Luz Living Apagada', '2014-07-15 07:59:59', '2014-07-15 15:59:59'),
(33, 4, 0, 'Luz Cocina Apagada.', '2014-07-15 07:59:59', '2014-07-15 23:59:59'),
(34, 6, 0, 'Luz Comedor Apagada.', '2014-07-15 07:59:59', '2014-07-15 23:59:59'),
(35, 1, 0, 'Luz Dormitorio Apagada', '2014-08-15 07:59:59', '2014-08-15 23:59:59'),
(36, 3, 0, 'Luz Living Apagada', '2014-08-15 07:59:59', '2014-08-15 23:59:59'),
(37, 4, 0, 'Luz Cocina Apagada.', '2014-08-15 07:59:59', '2014-08-15 15:59:59'),
(38, 6, 0, 'Luz Comedor Apagada.', '2014-08-15 07:59:59', '2014-08-15 15:59:59'),
(39, 1, 0, 'Luz Dormitorio Apagada', '2014-09-15 07:59:59', '2014-09-15 15:59:59'),
(40, 3, 0, 'Luz Living Apagada', '2014-09-15 07:59:59', '2014-09-15 15:59:59'),
(41, 4, 0, 'Luz Cocina Apagada.', '2014-09-15 07:59:59', '2014-09-15 23:59:59'),
(42, 6, 0, 'Luz Comedor Apagada.', '2014-09-15 07:59:59', '2014-09-15 23:59:59'),
(43, 1, 0, 'Luz Dormitorio Apagada', '2014-10-15 07:59:59', '2014-10-15 23:59:59'),
(44, 3, 0, 'Luz Living Apagada', '2014-10-15 07:59:59', '2014-10-15 23:59:59'),
(45, 4, 0, 'Luz Cocina Apagada.', '2014-10-15 07:59:59', '2014-10-15 15:59:59'),
(46, 6, 0, 'Luz Comedor Apagada.', '2014-10-15 07:59:59', '2014-10-15 15:59:59'),
(47, 1, 0, 'Luz Dormitorio Apagada', '2014-11-15 07:59:59', '2014-11-15 15:59:59'),
(48, 3, 0, 'Luz Living Apagada', '2014-11-15 07:59:59', '2014-11-15 15:59:59'),
(49, 4, 0, 'Luz Cocina Apagada.', '2014-11-15 07:59:59', '2014-11-15 23:59:59'),
(50, 6, 0, 'Luz Comedor Apagada.', '2014-11-15 07:59:59', '2014-11-15 23:59:59'),
(51, 1, 0, 'Luz Dormitorio Apagada', '2014-12-15 07:59:59', '2014-12-15 23:59:59'),
(52, 3, 0, 'Luz Living Apagada', '2014-12-15 07:59:59', '2014-12-15 23:59:59'),
(53, 4, 0, 'Luz Cocina Apagada.', '2014-12-15 07:59:59', '2014-12-15 15:59:59'),
(54, 6, 0, 'Luz Comedor Apagada.', '2014-12-15 07:59:59', '2014-12-15 15:59:59');

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
 ADD PRIMARY KEY (`ID_REG_CLIE`);

--
-- Indices de la tabla `audit_raspberry`
--
ALTER TABLE `audit_raspberry`
 ADD PRIMARY KEY (`ID_REG_RASP`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`ID_CLIENTE`), ADD UNIQUE KEY `UN_rut` (`RUT`), ADD UNIQUE KEY `UN_email` (`EMAIL`), ADD UNIQUE KEY `UN_user_clie` (`USER_CLIE`);

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
MODIFY `ID_ARDUINO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `audit_cliente`
--
ALTER TABLE `audit_cliente`
MODIFY `ID_REG_CLIE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT de la tabla `audit_raspberry`
--
ALTER TABLE `audit_raspberry`
MODIFY `ID_REG_RASP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `componente`
--
ALTER TABLE `componente`
MODIFY `ID_COMPONENTE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
MODIFY `ID_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `raspberry`
--
ALTER TABLE `raspberry`
MODIFY `ID_RASPBERRY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `uso`
--
ALTER TABLE `uso`
MODIFY `ID_USO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
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
