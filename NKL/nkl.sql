-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 15:30:34
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nkl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberia`
--

DROP TABLE IF EXISTS `barberia`;
CREATE TABLE `barberia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barberia`
--

INSERT INTO `barberia` (`id`, `nombre`, `cedula`, `correo`, `telefono`, `direccion`, `fecha`) VALUES
(1, 'lenin orlando', '18093568', 'leni@gmail.com', '04126001614', 'guatire', '2023-11-16'),
(3, 'karelys vera', '17921240', 'kare@gmail.com', '04242173924', 'guarenas', '2023-11-24'),
(4, 'nicole vera', '15662244', 'nicole@gmail.com', '04126001615', 'guarenas', '2023-11-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `cedula`, `correo`, `telefono`, `direccion`, `fecha`) VALUES
(1, 'lenin hidalgo', '18093568', 'leni@gmail.com', '04126001614', 'guatire', '2023-11-16'),
(3, 'karelys vera', '17921240', 'kare@gmail.com', '04242173924', 'caracas', '2023-11-18'),
(4, 'nicole vera', '6222434', 'nicole@gmail.com', '04126001615', 'guarenas', '2023-11-18'),
(5, 'adrian porras', '15662244', 'adri@gmail.com', '0412600331', 'guarenas', '2023-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

DROP TABLE IF EXISTS `programacion`;
CREATE TABLE `programacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programacion`
--

INSERT INTO `programacion` (`id`, `nombre`, `cedula`, `correo`, `telefono`, `direccion`, `fecha`) VALUES
(1, 'lenin hidaldo', '18093568', 'leni@gmail.com', '04126001614', 'guatire', '2023-11-16'),
(2, 'karelys vera', '17921240', 'kare@gmail.com', '04242173924', 'caracas', '2023-11-22'),
(4, 'nicole vera', '15662244', 'nicole@gmail.com', '0412600331', 'guarenas', '2023-11-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barberia`
--
ALTER TABLE `barberia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barberia`
--
ALTER TABLE `barberia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
