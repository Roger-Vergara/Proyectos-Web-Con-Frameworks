-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2020 a las 03:28:18
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `civ_visitante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_basicos`
--

CREATE TABLE `datos_basicos` (
  `ci` int(30) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Volcado de datos para la tabla `datos_basicos`
--

INSERT INTO `datos_basicos` (`ci`, `nombre`, `apellido`, `nombre_usuario`, `correo`, `fecha_nacimiento`, `telefono`, `clave`, `imagen`) VALUES
(29671832, 'Roger', 'Vergara', 'jonclaibersonsilva345mataburros', 'correo@gmail.com', '1980-01-01', '+584248897654', 'ppp4@', '94900224_830000330843183_6660674001766973440_n.jpg'),
(1982345, 'Fernando', 'Apedo', 'pedorro000', 'pedorro34@gmail.com', '2001-12-26', '+584261934567', 'mmm$56', '94691054_2681463332090506_1370011927958257664_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
