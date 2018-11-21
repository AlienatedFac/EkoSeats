-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2018 a las 17:58:07
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ekobdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id`, `Nombre`, `Password`, `Correo`) VALUES
(1, 'Fernando', '8675', 'oppaiskoibito@gmail.com'),
(2, 'Yisus', 'Pantalones25', 'nose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `Existencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id`, `Nombre`, `Descripcion`, `Precio`, `Existencia`) VALUES
(1, 'Articulo 1', 'Articulo 1', 6000, 2),
(2, 'articulo 2', 'Artivulo 2', 5000, 5),
(3, 'Articulo 3', 'Articulo 3', 8000, 4),
(4, 'Articulo 4', 'Articulo 4', 7000, 7000),
(5, 'articulo 5', 'Articulo 5', 45666, 1),
(6, 'Articulo 6', 'Articulo 6', 4522, 15),
(7, 'Articulo 7', 'Articulo 7', 20000, 15),
(8, 'Articulo 8', 'Articulo 8', 20000, 15),
(9, 'Articulo 9', 'Articulo 9', 20000, 15),
(10, 'Articulo 10', 'Articulo 10', 20000, 15),
(11, 'Articulo 11', 'Articulo 11', 20000, 15),
(12, 'Articulo 12', 'Articulo 12', 20000, 15),
(13, 'Articulo 13', 'Articulo 13', 20000, 15),
(14, 'Articulo 14', 'Articulo 14', 20000, 15),
(15, 'Articulo 15', 'Articulo 15', 20000, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillones`
--

CREATE TABLE `sillones` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sillones`
--

INSERT INTO `sillones` (`id`, `Nombre`, `Descripcion`, `Precio`) VALUES
(1, 'Articulo1', 'Articulo1', 6000),
(2, 'Articulo1', 'Articulo1', 6000),
(3, 'Articulo1', 'Articulo1', 6000),
(4, 'Articulo1', 'Articulo1', 6000),
(5, 'Articulo1', 'Articulo1', 6000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sillones`
--
ALTER TABLE `sillones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sillones`
--
ALTER TABLE `sillones`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
