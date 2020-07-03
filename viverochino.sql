-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2020 a las 00:07:26
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viverochino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `floricultura`
--

CREATE TABLE `floricultura` (
  `id` int(5) NOT NULL,
  `dni` int(8) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `contrasena` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `floricultura`
--

INSERT INTO `floricultura` (`id`, `dni`, `nombre`, `apellido`, `edad`, `contrasena`, `email`) VALUES
(1, 40583752, 'Brian', 'Rogers', 23, 'asdfghlm', 'rogersbrian@gmail.com'),
(10, 12345678, 'bri', 'ro', 21, 'cvbnm', 'rg@mail.com'),
(22, 23313145, 'Bri2', 'Roguer', 45, 'binbinbin', 'rogue@gmail.com'),
(24, 53478202, 'Lautaro', 'Marecos', 18, '234HkolPÃ±nt', 'lautimar@gmail.com'),
(25, 33556612, 'Bob', 'Stone', 66, '65tynymym', 'bs@gmail.com'),
(27, 12345679, 'constanza', 'luiza', 30, 'lola2345', 'ahsdoiuf@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `floricultura`
--
ALTER TABLE `floricultura`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `floricultura`
--
ALTER TABLE `floricultura`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
