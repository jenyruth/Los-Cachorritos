-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2018 a las 18:45:20
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cpu_unamba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_per`
--

CREATE TABLE `tab_per` (
  `id` int(11) NOT NULL,
  `dep` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tab_per`
--

INSERT INTO `tab_per` (`id`, `dep`) VALUES
(1, 'Apurimac'),
(2, 'Cusco'),
(3, 'Lima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_rec`
--

CREATE TABLE `tab_rec` (
  `num_rec` int(10) NOT NULL,
  `tipo_us` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tab_rec`
--

INSERT INTO `tab_rec` (`num_rec`, `tipo_us`) VALUES
(123456, 'admin'),
(234567, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_per`
--
ALTER TABLE `tab_per`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_rec`
--
ALTER TABLE `tab_rec`
  ADD PRIMARY KEY (`num_rec`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_per`
--
ALTER TABLE `tab_per`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
