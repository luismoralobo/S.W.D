-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2018 a las 00:27:01
-- Versión del servidor: 5.6.27-log
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `id` int(11) NOT NULL,
  `documento` int(15) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ficha` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `programa` varchar(350) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `inicio_desercion` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `fin_desercion` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`id`, `documento`, `nombre`, `apellidos`, `correo`, `contraseña`, `ficha`, `programa`, `estado`, `inicio_desercion`, `fin_desercion`) VALUES
(1, 0, 'luis', 'Martinez', 'lfmora261@misena.edu.co', '123456789', '1503799', 'ADSI', 'Desertado', '2018-08-31 22:21:05.817672', '0000-00-00 00:00:00.000000'),
(2, 789456123, 'Mora', 'mora', 'mora@misena.edu.co', 'luis', '123456789', 'ADSI', 'Formacion', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 14789, 'Juan', 'Perez', 'juan@misena.edu.co', '123456', '15469854', 'Adsi', 'Formacion', '2018-08-31 19:56:22.374911', '0000-00-00 00:00:00.000000'),
(4, 147, 'Maria', 'Perez', 'juan@misena.edu.co', '13245646', '15469854', 'TPS', 'Formacion', '2018-08-31 22:21:24.314395', '0000-00-00 00:00:00.000000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
