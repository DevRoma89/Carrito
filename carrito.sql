-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2024 a las 20:57:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` int(20) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`Id`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Placa De Video Asus Dual GeForce RTX 3050', 2142000, 'Gráfico: NVIDIA® GeForce RTX™ 3050\r\nMemoria de video: 8GB GDDR6\r\nSalida de video: 1 x DVI-D, 1 x HDMI 2.1, 1 x DisplayPort 1.4a\r\nEstándar de bus: PCI Express 4.0\r\nInterfaz de memoria: 128-bit', 'img/01.jpg'),
(2, 'Placa De Video Asus Dual GeForce RTX 4060', 4001000, 'Gráfico: NVIDIA® GeForce RTX™ 4060 Ti\r\nMemoria de video: 8GB GDDR6\r\nSalida de video: 1 x HDMI 2.1a, 3 x DisplayPort 1.4a\r\nEstándar de bus: PCI Express 4.0\r\nInterfaz de memoria: 128-bit', 'img/02.jpg'),
(3, 'Placa De Video Gigabyte AORUS GeForce RTX 4070 ', 6735000, 'Gráfico: GeForce RTX™ 4070 SUPER\r\nMemoria de video: 12 GB GDDR6X\r\nSalida de video: DisplayPort 1.4a *3, HDMI 2.1a *1\r\nEstándar de bus: PCI-E 4.0\r\nInterfaz de memoria: 192 bit', 'img/03.jpg'),
(4, 'Placa De Video Asus ROG Strix GeForce RTX 4090 ', 20039000, 'Gráfico: NVIDIA® GeForce RTX™ 4090\r\nMemoria de video: 24GB GDDR6X\r\nSalida de video: HDMI 2.1a, DisplayPort 1.4a\r\nEstándar de bus: PCI Express 4.0\r\nInterfaz de memoria: 384-bit', 'img/04.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`idUser`, `username`, `password`, `rol`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`) VALUES
(1, 'Manu', '1234', 1, '', '', '', '', ''),
(2, NULL, '1234', 2, 'Prueba', '1', '5224719', '0971938711', 'manu@gmail.com'),
(3, 'Rodri', '1234', 2, 'Rodrigo', 'Estigarribia', '5224719', '0971938711', 're@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
