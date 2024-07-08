-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2024 a las 01:47:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(5) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `unidad`, `fecha`) VALUES
(1, 'Matematica', '0000-00-00'),
(3, 'Logica', '2024-07-12'),
(4, 'Fisica', '2024-06-27'),
(5, 'Danza', '2024-05-29'),
(6, '', '0000-00-00'),
(7, 'aLGREBRA', '9231-04-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(5) NOT NULL,
  `codigo` int(10) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `codigo`, `producto`, `descripcion`, `precio`) VALUES
(32, 1, 'Silla gamer', 'Si buscas confort y estilo esta silla es para vos', 10.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `consulta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`nombre`, `apellido`, `mail`, `consulta`) VALUES
('Joaquin ', 'Cardillo', 'joecardillo@hotmail.com', 'Hola queria saber a que hora se podia ir al cumpleaños'),
('Tomas', 'Sacchini', 'toagsacchini@hotmail.com', 'Queria saber hasta cuando se puede entregar este unidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`email`, `clave`) VALUES
('tomas@gmail', '$2y$10$Sboa7kS3dh82ulb/cEZ/u.nDJxuyCO31zof4DsZT.Zv'),
('mili@gmail.com', '$2y$10$9GH0w/g3tnEtq2bV.4ADe.q/qhQPsZkURf12U1bbLon'),
('lau@gmail.com', '$2y$10$8jeIF4s0lfWxlA9kM6T2ieiqFxbiCOiE0ciXuWTa4Ix'),
('pino@gmail.com', '$2y$10$hdSd.64ARLuu7DPw0lmo.uRU/gskkIcfwcZbf6Djj0O'),
('andy@gmail.com', '$2y$10$s04qSVbqY31DF2Zp3l8owOVHiSojwYMZOBZp5fk8LTo'),
('juan@gmial.com', '$2y$10$wmFTRmJloONxZx1EbZKEQeFQvGDXdQ7LQEd2ng2IzAC'),
('tuti@gmail.com', '$2y$10$PUwt8ukYs.fc7DBFG9PJF.waxGIAUxe0HQTolBkZBPw'),
('luqui@gmail.com', '$2y$10$TmYZ/9gLxKVzXKBZM8haPuW5uRwj.gp.8GvLUrQnJAg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
