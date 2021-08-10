-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2020 a las 00:13:37
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
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `codigodbarra` int(9) NOT NULL COMMENT 'codigo de barra, similar a id, pero es para diferenciar de roles'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `floricultura`
--

INSERT INTO `floricultura` (`id`, `dni`, `nombre`, `apellido`, `edad`, `email`, `codigodbarra`) VALUES
(1, 40583752, 'Brian', 'Rogers', 23, 'rogersbrian@gmail.com', 100000001),
(10, 12345678, 'Rocio', 'Torres', 24, 'rociotorres@gmail.com', 1),
(24, 53478202, 'Lautaro', 'Marecos', 18, 'lautimar@gmail.com', 3),
(27, 12345679, 'constanza', 'luiza', 30, 'ahsdoiuf@gmail.com', 5),
(28, 75893121, 'Vilma', 'Victoria', 35, 'vv@gmail.com', 6),
(29, 89234568, 'Rebecca', 'Rebecca', 56, 'rr@gmail.com', 7),
(31, 22334455, 'leandro', 'garrido', 25, 'lg@gmail.com', 15),
(32, 42567893, 'Franco', 'Fuentes', 22, 'ffuentes@gmail.cpm', 8),
(33, 12365589, 'Bob', 'Stone', 30, 'BobStone@gmail.com', 4);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
