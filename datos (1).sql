-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2017 a las 07:29:08
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `serie` varchar(5) NOT NULL,
  `temperatura` float(4,2) NOT NULL,
  `humedad` float(4,2) NOT NULL,
  `precipitacion` float(4,2) NOT NULL,
  `velocidad_del_viento` float(4,2) NOT NULL,
  `dirección_del_viento` float(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `fecha`, `serie`, `temperatura`, `humedad`, `precipitacion`, `velocidad_del_viento`, `dirección_del_viento`) VALUES
(1, '2017-08-31 02:25:11', '111', 10.00, 0.00, 0.00, 0.00, 0.0),
(2, '2017-08-31 03:26:16', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(3, '2017-08-31 04:17:15', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(4, '2017-08-31 04:32:54', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(5, '2017-08-31 04:32:55', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(6, '2017-08-31 04:32:55', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(7, '2017-08-31 04:32:55', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(8, '2017-08-31 04:32:56', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(9, '2017-08-31 04:32:56', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(10, '2017-08-31 04:32:56', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(11, '2017-08-31 04:32:56', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(12, '2017-08-31 04:32:56', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(13, '2017-10-15 20:24:53', '', 30.00, 2.00, 3.00, 4.00, 5.0),
(14, '2017-10-15 20:28:46', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(15, '2017-10-15 20:34:59', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(16, '2017-10-15 20:36:55', '', 12.00, 12.00, 12.00, 12.00, 10.0),
(17, '2017-10-15 21:05:44', '', 12.00, 12.00, 12.00, 12.00, 10.0),
(19, '2017-10-15 21:08:38', '', 31.00, 0.80, 5.40, 55.00, 124.0),
(20, '2017-10-15 21:44:59', '', 12.00, 12.00, 12.00, 12.00, 12.0),
(21, '2017-10-15 21:50:45', '', 12.00, 12.00, 12.00, 12.00, 12.0),
(22, '2017-10-15 23:16:26', '', 12.00, 12.00, 12.00, 12.00, 12.0),
(23, '2017-10-15 23:16:53', '', 12.00, 12.00, 12.00, 12.00, 12.0),
(24, '2017-10-15 23:19:07', '', 12.00, 12.00, 12.00, 12.00, 12.0),
(25, '2017-10-15 23:19:25', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(26, '2017-10-15 23:19:54', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(27, '2017-10-15 23:28:09', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(28, '2017-10-15 23:28:50', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(29, '2017-10-16 20:00:59', '', 30.00, 12.00, 30.00, 55.00, 12.0),
(30, '2017-10-16 20:08:22', '', 30.00, 12.00, 30.00, 55.00, 12.0),
(31, '2017-10-16 20:08:24', '', 30.00, 12.00, 30.00, 55.00, 12.0),
(32, '2017-10-16 20:09:02', '', 35.00, 13.00, 44.00, 66.00, 55.0),
(33, '2017-10-16 20:18:07', '', 35.00, 44.00, 22.00, 55.00, 11.0),
(34, '2017-10-16 20:29:36', '', 12.00, 14.00, 15.00, 13.00, 16.0),
(35, '2017-10-16 20:30:19', '', 12.00, 14.00, 15.00, 13.00, 16.0),
(36, '2017-10-16 20:31:38', '', 33.00, 35.00, 36.00, 34.00, 37.0),
(37, '2017-10-16 20:31:45', '', 33.00, 35.00, 36.00, 34.00, 37.0),
(38, '2017-10-16 20:57:30', '', 17.00, 17.00, 17.00, 17.00, 17.0),
(39, '2017-10-16 20:58:08', '', 17.00, 17.00, 17.00, 17.00, 17.0),
(40, '2017-10-16 20:58:58', '', 37.00, 0.80, 3.40, 55.00, 133.0),
(41, '2017-10-16 21:01:59', '', 32.00, 55.00, 1.40, 3.40, 252.0),
(42, '2017-10-16 21:03:46', '1', 33.00, 60.00, 0.70, 2.20, 136.0),
(43, '2017-10-16 22:38:05', '1', 33.00, 60.00, 0.70, 2.20, 136.0),
(44, '2017-10-16 22:38:13', '1', 12.00, 12.00, 12.00, 12.00, 12.0),
(45, '2017-10-17 04:13:25', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(46, '2017-10-17 04:13:38', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(47, '2017-10-17 04:14:32', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(48, '2017-10-17 04:14:35', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(49, '2017-10-17 04:15:16', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(50, '2017-10-17 04:16:29', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(51, '2017-10-17 04:17:28', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(52, '2017-10-17 05:24:22', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(53, '2017-10-17 05:24:24', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(54, '2017-10-17 05:24:25', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(55, '2017-10-17 05:26:52', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(56, '2017-10-17 05:27:52', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(57, '2017-10-17 05:31:29', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(58, '2017-10-18 02:21:41', '', 12.00, 12.00, 12.00, 12.00, 12.0),
(59, '2017-10-19 01:23:41', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(60, '2017-10-19 01:26:50', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(61, '2017-10-19 01:36:24', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(62, '2017-10-19 10:26:07', '1', 12.00, 12.00, 12.00, 12.00, 12.0),
(63, '2017-10-20 03:23:51', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(64, '2017-10-20 03:49:13', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(65, '2017-10-20 03:49:14', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(66, '2017-10-20 03:49:20', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(67, '2017-10-20 03:49:41', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(68, '2017-10-20 03:51:56', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(69, '2017-10-20 03:51:57', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(70, '2017-10-20 03:52:11', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(71, '2017-10-20 03:54:10', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(72, '2017-10-20 03:54:11', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(73, '2017-10-20 03:56:54', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(74, '2017-10-20 03:57:05', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(75, '2017-10-20 04:08:41', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(76, '2017-10-20 04:09:23', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(77, '2017-10-20 04:09:27', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(78, '2017-10-20 04:10:00', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(79, '2017-10-20 04:17:09', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(80, '2017-10-20 04:17:15', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(81, '2017-10-20 04:17:16', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(82, '2017-10-20 04:17:17', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(83, '2017-10-20 04:17:30', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(84, '2017-10-20 04:17:31', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(85, '2017-10-20 04:17:59', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(86, '2017-10-20 04:19:01', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(87, '2017-10-20 04:20:30', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(88, '2017-10-20 04:20:34', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(89, '2017-10-20 04:20:41', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(90, '2017-10-20 04:21:47', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(91, '2017-10-20 04:21:50', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(92, '2017-10-20 04:22:29', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(93, '2017-10-20 04:22:35', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(94, '2017-10-20 04:24:19', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(95, '2017-10-20 04:24:57', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(96, '2017-10-20 04:26:11', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(97, '2017-10-20 04:26:12', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(98, '2017-10-20 04:26:17', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(99, '2017-10-20 04:26:18', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(100, '2017-10-20 04:26:37', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(101, '2017-10-20 04:27:19', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(102, '2017-10-20 04:27:21', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(103, '2017-10-20 04:27:57', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(104, '2017-10-20 04:28:32', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(105, '2017-10-20 04:29:05', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(106, '2017-10-20 04:29:34', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(107, '2017-10-20 04:29:36', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(108, '2017-10-20 04:31:20', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(109, '2017-10-20 04:31:21', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(110, '2017-10-20 04:31:34', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(111, '2017-10-20 04:31:35', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(112, '2017-10-20 04:31:35', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(113, '2017-10-20 04:31:36', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(114, '2017-10-20 04:33:43', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(115, '2017-10-20 04:33:45', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(116, '2017-10-20 04:34:18', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(117, '2017-10-20 04:34:19', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(118, '2017-10-20 04:39:55', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(119, '2017-10-20 04:42:49', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(120, '2017-10-20 04:42:50', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(121, '2017-10-20 04:42:55', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(122, '2017-10-20 04:44:22', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(123, '2017-10-20 04:44:32', '1', 0.00, 0.00, 0.00, 0.00, 0.0),
(124, '2017-10-20 04:44:42', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(125, '2017-10-20 04:49:33', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(126, '2017-10-20 04:49:35', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(127, '2017-10-20 04:49:36', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(128, '2017-10-20 04:51:37', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(129, '2017-10-20 04:51:37', '', 0.00, 0.00, 0.00, 0.00, 0.0),
(130, '2017-10-20 04:51:38', '', 0.00, 0.00, 0.00, 0.00, 0.0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
