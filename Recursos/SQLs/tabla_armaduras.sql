-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 19-01-2021 a las 15:58:52
-- Versión del servidor: 5.7.27
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fei2020`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `armadura`
--

CREATE TABLE `armadura` (
  `id_armadura` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac` int(11) NOT NULL,
  `bonif_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penalizacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuerza` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `armadura`
--

INSERT INTO `armadura` (`id_armadura`, `nombre`, `categoria`, `ac`, `bonif_des`, `penalizacion`, `fuerza`, `precio`, `peso`) VALUES
(1, 'Acolchada', 'Ligera', 11, 'Destreza', 'Desventaja', NULL, '5 po', '8 lb'),
(2, 'Cuero', 'Ligera', 11, 'Destreza', NULL, NULL, '10 po', '10 lb'),
(3, 'Cuero Tachonado', 'Ligera', 12, 'Destreza', NULL, NULL, '45 po', '13 lb'),
(4, 'Camisote de Malla', 'Intermedia', 13, 'Destreza (Max +2)', NULL, NULL, '50 po', '20 lb'),
(5, 'Coraza', 'Intermedia', 14, 'Destreza (Max +2)', NULL, NULL, '400 po', '20 lb'),
(6, 'Cota de Escamas', 'Intermedia', 14, 'Destreza (Max +2)', NULL, NULL, '50 po', '20 lb'),
(7, 'Pieles', 'Intermedia', 12, 'Destreza (Max +2)', NULL, NULL, '10 po', '12 lb'),
(8, 'Placas y Malla', 'Intermedia', 15, 'Destreza (Max +2)', 'Desventaja', NULL, '750 po', '40 lb'),
(9, 'Armadura de Anillas', 'Pesada', 14, '0', 'Desventaja en Sigilo', NULL, '30 po', '40 lb'),
(10, 'Armadura de Placas', 'Pesada', 18, '0', 'Desventaja en Sigilo', 'Fuerza >= 15', '1500 po', '65 lb'),
(11, 'Armadura Laminada', 'Pesada', 17, '0', 'Desventaja en Sigilo', 'Fuerza >= 15', '200 po', '60 lb'),
(12, 'Cota de Malla', 'Pesada', 16, '0', 'Desventaja en Sigilo', 'Fuerza >= 13', '75 po', '55 lb'),
(13, 'Escudo', 'Escudo', 2, '0', NULL, NULL, '10 po', '6 lb');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `armadura`
--
ALTER TABLE `armadura`
  ADD PRIMARY KEY (`id_armadura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `armadura`
--
ALTER TABLE `armadura`
  MODIFY `id_armadura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
