-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3308
-- Tiempo de generación: 15-06-2023 a las 03:51:34
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anime-rocket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías`
--

CREATE TABLE `categorías` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sipnosis` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `capitulos` int(100) NOT NULL,
  `fecha-inserción` date NOT NULL,
  `votos` int(255) NOT NULL,
  `anios` year(4) NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id`, `titulo`, `sipnosis`, `thumbnail`, `capitulos`, `fecha-inserción`, `votos`, `anios`, `fecha_publicacion`) VALUES
(1, 'sword art online', 'basicamente habla de un videojuego de realidad virtual que atrapo a todos los jugadores dentro del juego', 'https://picsum.photos/300/200', 1, '2023-06-11', 0, 2004, '2023-06-12 02:42:37'),
(2, 'tengen toppa gurren laggan', 'unos sobrevivientes que viven bajo tierra y pelean contra hombres-bestias usando robots gigantes', 'https://picsum.photos/300/200', 54, '2023-06-11', 178, 2004, '2023-06-12 03:14:34'),
(3, 'yugioh', 'los mocosos usando cartas de monstruos con dispositivos especiales para crear hologramas de monstruos', 'https://picsum.photos/300/200', 88, '2023-06-11', 212, 2003, '2023-06-12 03:14:34'),
(4, 'boku no hero academia', 'Un mundo donde las personas que tienen superpoderes es algo normal, hay una escuela para que los jovenes aprendan a ser superheroes', 'https://picsum.photos/300/200', 146, '2023-06-11', 241, 2004, '2023-06-12 03:17:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_roles`
--

CREATE TABLE `rel_roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_status`
--

CREATE TABLE `rel_status` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_video_categoria`
--

CREATE TABLE `rel_video_categoria` (
  `id` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_video_lista`
--

CREATE TABLE `rel_video_lista` (
  `id` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_lista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwords` varchar(16) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `sstatus` int(1) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `passwords`, `telefono`, `sstatus`, `rol`) VALUES
(1, 'Jesus Jimenez', 'jimenezjesusenrique02@gmail.com', '123456789', '9981065765', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `categoría` varchar(30) NOT NULL,
  `lista` int(4) NOT NULL,
  `fecha_insercion` date NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `orden` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `thumbnail`, `archivo`, `categoría`, `lista`, `fecha_insercion`, `fecha_publicacion`, `orden`) VALUES
(1, 'prueba 1', 'https://picsum.photos/300/200', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 23:02:56', 0),
(2, 'prueba 2', 'https://picsum.photos/300/200', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 23:02:56', 0),
(3, 'prueba 3', 'https://picsum.photos/300/200', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 23:02:56', 0),
(4, 'prueba 4', 'https://picsum.photos/300/200\r\n', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 22:58:56', 0),
(5, 'prueba 5', 'https://picsum.photos/300/200\r\n', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 22:58:56', 0),
(6, 'prueba 6', 'https://picsum.photos/300/200\r\n', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 23:02:30', 0),
(7, 'prueba 7', 'https://picsum.photos/300/200\r\n', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 23:02:30', 0),
(8, 'prueba 8', 'https://picsum.photos/300/200\r\n', 'imagen', 'accion', 1, '2023-06-11', '2023-06-11 23:02:30', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorías`
--
ALTER TABLE `categorías`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rel_roles`
--
ALTER TABLE `rel_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rel_status`
--
ALTER TABLE `rel_status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rel_video_categoria`
--
ALTER TABLE `rel_video_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorías`
--
ALTER TABLE `categorías`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rel_roles`
--
ALTER TABLE `rel_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rel_status`
--
ALTER TABLE `rel_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rel_video_categoria`
--
ALTER TABLE `rel_video_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
