-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 20-01-2021 a las 15:25:34
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
-- Estructura de tabla para la tabla `arma`
--

CREATE TABLE `arma` (
  `id_arma` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daño` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_daño` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mod_daño_ataque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alcance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prop1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prop2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prop3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prop4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `arma`
--

INSERT INTO `arma` (`id_arma`, `nombre`, `categoria`, `daño`, `tipo_daño`, `mod_daño_ataque`, `alcance`, `prop1`, `prop2`, `prop3`, `prop4`, `precio`, `peso`) VALUES
(1, 'Daga', 'Sencilla', '1d4', 'Perforante', 'Fuerza o Destreza', '20/60', 'Arrojadiza', 'Distancia', 'Ligera', 'Sutil', '2 po', '1 lb'),
(2, 'Dardo', 'Sencilla', '1d4', 'Perforante', 'Fuerza o Destreza', '20/60', 'Arrojadiza', 'Distancia', 'Sutil', NULL, '5 pc', '1/4 lb'),
(3, 'Gran Clava', 'Sencilla', '1d8', 'Contundente', 'Fuerza', NULL, 'Dos Manos', NULL, NULL, NULL, '2 pp', '10 lb'),
(4, 'Hacha de Mano', 'Sencilla', '1d6', 'Cortante', 'Fuerza', '20/60', 'Arrojadiza', 'Distancia', 'Ligera', NULL, '5 po', '2 lb'),
(5, 'Arco Corto', 'Sencilla', '1d6', 'Perforante', 'Destreza', '80/320', 'Distancia', 'Dos Manos', 'Municion', NULL, '25 po', '2 lb'),
(6, 'Ballesta Ligera', 'Sencilla', '1d8', 'Perforante', 'Destreza', '80/320', 'Recarga', 'Distancia', 'Dos Manos', 'Municion', '25 po', '5 lb'),
(7, 'Baston', 'Sencilla', '1d6/1d8', 'Contundente', 'Fuerza', NULL, 'Versatil', NULL, NULL, NULL, '2 pp', '4 lb'),
(8, 'Clava', 'Sencilla', '1d4', 'Contundente', 'Fuerza', NULL, 'Ligera', NULL, NULL, NULL, '1 pp', '2 lb'),
(9, 'Honda', 'Sencilla', '1d4', 'Contundente', 'Destreza', '30/120', 'Distancia', 'Municion', NULL, NULL, '1 pp', '0 lb'),
(10, 'Hoz', 'Sencilla', '1d4', 'Cortante', 'Fuerza', NULL, 'Ligera', NULL, NULL, NULL, '1 po', '2 lb'),
(11, 'Jabalina', 'Sencilla', '1d6', 'Perforante', 'Fuerza', '30/120', 'Arrojadiza', 'Distancia', NULL, NULL, '5 pp', '2 lb'),
(12, 'Lanza', 'Sencilla', '1d6', 'Perforante', 'Fuerza', '20/60', 'Arrojadiza', 'Distancia', 'Ligera', NULL, '1 po', '3 lb'),
(13, 'Martillo Ligero', 'Sencilla', '1d4', 'Contundente', 'Fuerza', '20/60', 'Arrojadiza', 'Distancia', 'Ligera', NULL, '2 pp', '2 lb'),
(14, 'Maza', 'Sencilla', '1d6', 'Contundente', 'Fuerza', NULL, NULL, NULL, NULL, NULL, '5 po', '4 lb'),
(15, 'Alabarda', 'Marcial', '1d10', 'Cortante', 'Fuerza', NULL, 'Alcance', NULL, NULL, NULL, '20 po', '6 lb'),
(16, 'Arco Largo', 'Marcial', '1d8', 'Perforante', 'Destreza', '150/600', 'Distancia', 'Dos Manos', 'Municion', 'Pesada', '50 po', '2 lb'),
(17, 'Ballesta de Mano', 'Marcial', '1d6', 'Perforante', 'Destreza', '30/120', 'Recarga', 'Distancia', 'Ligera', 'Municion', '75 po', '3 lb'),
(18, 'Ballesta Pesada', 'Marcial', '1d10', 'Perforante', 'Destreza', '100/400', 'Recarga', 'Distancia', 'Dos Manos', 'Municion', '50 po', '18 lb'),
(19, 'Cimitarra', 'Marcial', '1d6', 'Cortante', 'Fuerza o Destreza', NULL, 'Ligera', 'Sutil', NULL, NULL, '25 po', '3 lb'),
(20, 'Espada Corta', 'Marcial', '1d6', 'Perforante', 'Fuerza o Destreza', NULL, 'Ligera', 'Sutil', NULL, NULL, '10 po', '2 lb'),
(21, 'Espada Larga', 'Marcial', '1d8/1d10', 'Cortante', 'Fuerza', NULL, 'Versatil', NULL, NULL, NULL, '15 po', '3 lb'),
(22, 'Estoque', 'Marcial', '1d8', 'Perforante', 'Fuerza o Destreza', NULL, 'Sutil', NULL, NULL, NULL, '25 po', '2 lb'),
(23, 'Gran Hacha', 'Marcial', '1d12', 'Cortante', 'Fuerza', NULL, 'Dos Manos', 'Pesada', NULL, NULL, '30 po', '7 lb'),
(24, 'Guja', 'Marcial', '1d10', 'Cortante', 'Fuerza', NULL, 'Alcance', 'Dos Manos', 'Pesada', NULL, '20 po', '6 lb'),
(25, 'Hacha de Batalla', 'Marcial', '1d8 / 1d10', 'Cortante', 'Fuerza', NULL, 'Versatil', NULL, NULL, NULL, '10 po', '4 lb'),
(26, 'Lanza de Caballeria', 'Marcial', '1d12', 'Perforante', 'Fuerza', NULL, 'Alcance', 'Especial', NULL, NULL, '10 po', '6 lb'),
(27, 'Latigo', 'Marcial', '1d4', 'Cortante', 'Fuerza o Destreza', NULL, 'Alcance', 'Sutil', NULL, NULL, '2 po', '3 lb'),
(28, 'Lucero del Alba', 'Marcial', '1d8', 'Perforante', 'Fuerza', NULL, NULL, NULL, NULL, NULL, '15 po', '4 lb'),
(29, 'Mandoble', 'Marcial', '2d6', 'Cortante', 'Fuerza', NULL, 'Dos Manos', 'Pesada', NULL, NULL, '50 po', '6 lb'),
(30, 'Mangual', 'Marcial', '1d8', 'Contundente', 'Fuerza', NULL, NULL, NULL, NULL, NULL, '10 po', '2 lb'),
(31, 'Martillo de Guerra', 'Marcial', '1d8 / 1d10', 'Contundente', 'Fuerza', NULL, 'Versatil', NULL, NULL, NULL, '15 po', '2 lb'),
(32, 'Mazo de Guerra', 'Marcial', '2d6', 'Contundente', 'Fuerza', NULL, 'Dos Manos', 'Pesada', NULL, NULL, '10 po', '10 lb'),
(33, 'Pica', 'Marcial', '1d10', 'Perforante', 'Fuerza', NULL, 'Alcance', 'Dos Manos', 'Pesado', NULL, '5 po', '18 lb'),
(34, 'Pico de Guerra', 'Marcial', '1d8', 'Perforante', 'Fuerza', NULL, NULL, NULL, NULL, NULL, '5 po', '2 lb'),
(35, 'Red', 'Marcial', '-', '-', 'Destreza', '5/15', 'Arrojadiza', 'Distancia', 'Especial', NULL, '1 po', '3 lb'),
(36, 'Tridente', 'Marcial', '1d6 / 1d8', 'Perforante', 'Fuerza', '20/60', 'Arrojadiza', 'Distancia', 'Versatil', NULL, '5 po', '4 lb');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arma`
--
ALTER TABLE `arma`
  ADD PRIMARY KEY (`id_arma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arma`
--
ALTER TABLE `arma`
  MODIFY `id_arma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
