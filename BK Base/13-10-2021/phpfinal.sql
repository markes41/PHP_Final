-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2021 a las 01:21:30
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `Id` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Compra` int(11) DEFAULT NULL,
  `Fecha_Pago` date NOT NULL,
  `Estado` bit(1) NOT NULL,
  `Importe` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Precio_Unitario` decimal(10,2) NOT NULL,
  `Titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Ventas` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(4) NOT NULL,
  `Username` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Nacimiento` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Dni` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_Rol` int(4) DEFAULT NULL,
  `Carrito` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Activo` bit(1) DEFAULT NULL,
  `Codigo_Recuperacion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Username`, `Password`, `Nombre`, `Apellido`, `Email`, `Fecha_Nacimiento`, `Dni`, `Id_Rol`, `Carrito`, `Activo`, `Codigo_Recuperacion`) VALUES
(1, NULL, '123', NULL, '', 'marcio', NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Dinovo1997', NULL, '', 'marcioabriola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Dinovo1997', NULL, '', 'marcioabriola2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Dinovo1997', NULL, '', 'marcioabriola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Dinovo1997', NULL, '', 'marcioabriola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Dinovo1997', NULL, '', 'marcioabriola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Dinovo1997', NULL, '', 'marcioabriola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, '123456', NULL, '', 'marciola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'dXR3iAQT57Ds4yL', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'Dinovo1997', NULL, '', 'marciolax@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, '123456', NULL, '', 'aawdawdaw@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'w', 'w', '', 'w', '0000-00-00', '400', NULL, NULL, NULL, NULL),
(13, NULL, '123456', NULL, NULL, 'awdawd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, '123456', 'wad', 'wad', 'wadwafwegfsef@gmail.com', '2021-10-28', '4566', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_Usuario` (`Id_Usuario`),
  ADD UNIQUE KEY `Id_Compra` (`Id_Compra`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_Rol` (`Id_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `PagosUsuarios` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `UsuarioRol` FOREIGN KEY (`Id_Rol`) REFERENCES `roles` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
