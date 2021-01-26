-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 19-01-2021 a las 15:59:15
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
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre`, `descripcion`, `categoria`, `precio`, `peso`) VALUES
(1, 'Herramientas de Artesano', 'Estas herramientas incluyen los objetos necesarios para realizar un trabajo o cerrar un trato. Tener competencia con un set de herramientas de artesano te permite añadir tu bonificador por competencia a cualquier prueba de característica que hagas al usar las herramientas de tu artesanía. Cada tipo de herramientas de artesano requiere tener su propia competencia.', 'Herramientas', '-', '-'),
(2, 'Herramientas de Ladrón', 'Este set de herramientas incluye una lima pequeña, un set de ganzúas, un espejo pequeño sobre una empuñadura de metal, un set de tijeras de hoja estrecha y un par de alicates. Tener competencia con estas herramientas te permite añadir tu bonificador por competencia a cualquier prueba de característica que realices para desactivar trampas o abrir cerraduras.', 'Herramientas', '25 po', '1 lb'),
(3, 'Herramientas de Navegante', 'Este set de instrumentos se usa para navegar por el mar. Tener competencia con las herramientas de navegante te permite registrar la trayectoria de un barco y seguir cartas de navegación. Además, te permiten añadir tu bonificador por competencia a cualquier prueba de característica que hagas para orientarte en el mar.', 'Herramientas', '25 po', '2 lb'),
(4, 'Kit de Disfraz', 'Esta bolsa contiene maquillaje, tinte de pelo y un pequeño atrezo que te permiten cambiar tu apariencia física. Tener competencia con este kit te permite añadir tu bonificador por competencia a cualquier prueba de característica que hagas para crear un disfraz.', 'Herramientas', '25 po', '3 lb'),
(5, 'Kit de Envenenador', 'Un kit de envenenador incluye viales, productos químicos y otras herramientas necesarias para crear venenos. Tener competencia con este kit te permite añadir tu bonificador por competencia a cualquier prueba de característica que hagas para fabricar o usar venenos.', 'Herramientas', '50 po', '2 lb'),
(6, 'Kit de Falsificacion', 'Esta cajita contiene varios papeles y pergaminos, plumas y tintas, sellos y lacres, láminas de oro y metal, y otros suministros necesarios para crear copias convincentes de documentos. Tener competencia con este kit te permite añadir tu bonificador por competencia a cualquier prueba de característica que hagas para falsificar un documento.', 'Herramientas', '15 po', '5 lb'),
(7, 'Kit de Herborista', 'Este kit contiene varios instrumentos que los herboristas usan para crear remedios y pociones, como tijeras, mortero y mano, bolsas y viales. Tener competencia con este kit te permite añadir tu bonificador por competencia a cualquier prueba de característica que hagas para identificar y usar hierbas. Asimismo, es necesario tener competencia con este kit para crear antitoxinas y pociones de curación.', 'Herramientas', '5 po', '3 lb');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
