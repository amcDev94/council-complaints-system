-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2023 a las 19:59:59
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_quejas_madrid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `codigo` int(3) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `mapa` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`codigo`, `nombre`, `mapa`) VALUES
(1, 'Chamberí', 'chamberi.jpg'),
(2, 'Centro', 'centro.jpg'),
(3, 'Salamanca', 'salamanca.jpg'),
(4, 'Retiro', 'retiro.jpg'),
(5, 'Arganzuela', 'arganzuela.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quejas`
--

CREATE TABLE `quejas` (
  `codigo_distrito` int(3) NOT NULL,
  `x` int(12) NOT NULL,
  `y` int(12) NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `numero_queja` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `quejas`
--

INSERT INTO `quejas` (`codigo_distrito`, `x`, `y`, `sexo`, `tipo`, `descripcion`, `numero_queja`) VALUES
(3, 125, 135, 'M', 'social', 'Cacas de perro por todas partes. Menudo asco.', 3),
(4, 402, 90, 'M', 'ambiental', 'mi perro se ha caido', 4),
(3, 233, 326, 'F', 'social', 'Me hacen bullying.', 5),
(1, 55, 83, 'M', 'social', 'Mal asunto por aquí.', 8),
(1, 205, 264, 'M', 'conflictiva', 'Mucho conflicto callejero socorro.', 10),
(1, 390, 249, 'F', 'ambiental', 'Se ha caído un árbol.', 11),
(3, 381, 208, 'F', 'ambiental', 'Se han escapado los toros.', 12),
(3, 374, 387, 'M', 'conflictiva', 'Peleas en el parque.', 13),
(2, 257, 250, 'M', 'ambiental', 'Mucha contaminación.', 14),
(2, 246, 380, 'F', 'social', 'No puedo dormir por las fiestas.', 15),
(2, 152, 251, 'F', 'conflictiva', 'PELEAS TODO EL DÍA.', 16),
(4, 344, 61, 'M', 'ambiental', 'La calle está demasiado sucia.', 17),
(4, 206, 299, 'F', 'social', 'Qué pesados los ciclistas.', 18),
(4, 147, 66, 'F', 'conflictiva', 'Mucho botellón.', 19),
(4, 198, 232, 'M', 'ambiental', 'Tengo alergia por el polen.', 20),
(5, 122, 151, 'M', 'social', 'Demasiado tráfico por la zona.', 21),
(5, 292, 235, 'M', 'conflictiva', 'El frutero es un borde.', 22),
(5, 188, 145, 'F', 'ambiental', 'Basura sin recoger.', 23),
(5, 221, 256, 'M', 'social', 'Casi me atropellan!!!!', 24),
(4, 302, 243, 'M', 'conflictiva', 'Hay gente que se abraza raro (cruising).', 25),
(5, 319, 229, 'F', 'conflictiva', 'En la entrada del Mercadona me han robado los pepinos un grupo de niños disfrazados de princesas. Además me han llamado señora!!', 29);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `quejas`
--
ALTER TABLE `quejas`
  ADD PRIMARY KEY (`numero_queja`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `quejas`
--
ALTER TABLE `quejas`
  MODIFY `numero_queja` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
