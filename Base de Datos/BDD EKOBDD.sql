-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2018 a las 14:29:56
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
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Tipo` enum('usuario','proveedor','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id`, `Nombre`, `Password`, `Correo`, `Tipo`) VALUES
(1, 'fernando', '8675', 'oppaiskoibito@gmail.com', 'proveedor'),
(6, 'SexMachine', '8675', 'substratum21@gmail.com', 'usuario'),
(8, 'Fernando A', '8675', '201700057@estudiantes.upqroo.edu.mx', 'usuario'),
(9, 'admin', '8675', 'na', 'proveedor'),
(10, 'usuario1', '8675', 'na', 'usuario'),
(11, 'admin3', '8675', 'na', 'usuario'),
(12, 'OK', '8675', 'na', 'usuario'),
(13, 'Jesus', 'pantalones25', 'pronto_reto@hotmail.com', ''),
(14, 'Araujo', '8675', '201700057@estudiantes.upqroo.edu.mx', 'proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Usuario` varchar(100) NOT NULL,
  `Seccion` varchar(100) NOT NULL,
  `Id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cojines`
--

CREATE TABLE `cojines` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credensas`
--

CREATE TABLE `credensas` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadros`
--

CREATE TABLE `cuadros` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decoracion`
--

CREATE TABLE `decoracion` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lamparas`
--

CREATE TABLE `lamparas` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `Nombre`, `Descripcion`, `Precio`, `Existencia`, `Vendedor`) VALUES
(1, 'Eco Mesa', 'Mesa a base de cristal y Madera', 2500, 15, 'Fernando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `Existencia` int(11) NOT NULL,
  `Vendedor` varchar(100) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id`, `Nombre`, `Descripcion`, `Precio`, `Existencia`, `Vendedor`) VALUES
(1, 'BioGibson', 'Sala hecha de madera de pino tipo pallet, tratada para exterior y entinada con cera rústica.  Versátil, ecológico, industrial, resistente,.', 6000, 5, 'admin'),
(2, 'Sillon Palet', 'Es una sala palet', 4500, 15, 'admin'),
(16, 'Sillon Palet', 'Es un comodo sillon tipo palet', 4500, 15, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

CREATE TABLE `sillas` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillones`
--

CREATE TABLE `sillones` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sillones`
--

INSERT INTO `sillones` (`id`, `Nombre`, `Descripcion`, `Precio`, `Existencia`, `Vendedor`) VALUES
(3, 'Sillon Huevo', 'Sillon hecho a base de cartones de huevo', 200, 15, 'Fernando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sofa`
--

CREATE TABLE `sofa` (
  `id` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Existencia` int(100) NOT NULL,
  `Vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sofa`
--

INSERT INTO `sofa` (`id`, `Nombre`, `Descripcion`, `Precio`, `Existencia`, `Vendedor`) VALUES
(1, 'Sofa CueroEcologico', 'Sofa de material que simula cuero pero ecologico', 1000, 15, 'Fernando');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cojines`
--
ALTER TABLE `cojines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `credensas`
--
ALTER TABLE `credensas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `decoracion`
--
ALTER TABLE `decoracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lamparas`
--
ALTER TABLE `lamparas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sillas`
--
ALTER TABLE `sillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sillones`
--
ALTER TABLE `sillones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sofa`
--
ALTER TABLE `sofa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cojines`
--
ALTER TABLE `cojines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `credensas`
--
ALTER TABLE `credensas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `decoracion`
--
ALTER TABLE `decoracion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lamparas`
--
ALTER TABLE `lamparas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `sillas`
--
ALTER TABLE `sillas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sillones`
--
ALTER TABLE `sillones`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sofa`
--
ALTER TABLE `sofa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
