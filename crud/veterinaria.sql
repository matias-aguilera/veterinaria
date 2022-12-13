-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 18:35:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `rut`, `nombre`, `telefono`, `correo`, `contraseña`) VALUES
(1, '123456789', 'boris', '12345678910', 'boris@gmail.com', '1234567'),
(2, '111111111', 'adsasd', '124569873', 'pedro@gmail.com', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crud`
--

INSERT INTO `crud` (`id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 'caballo', '                                                                en el techo', '2022-12-11 01:49:01'),
(2, 'animal', 'uyui', '2022-12-11 01:49:37'),
(4, 'perrito', 'lipigas', '2022-12-11 02:10:50'),
(5, 'lala', 'canario', '2022-12-11 02:18:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `animal` varchar(30) NOT NULL,
  `raza` varchar(30) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `nro_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `nombre`, `animal`, `raza`, `edad`, `nro_id`) VALUES
(1, 'chorizo', 'perro', 'pastor aleman', '3', '360'),
(2, 'felicia', 'gato', 'cafe', '4', ''),
(3, 'gato', 'caballo', 'cafe', '15', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `rut`, `correo`, `telefono`, `direccion`, `contraseña`) VALUES
(1, 'boris', '123456789', 'boris@gmail.com', '12345678910', 'calle boris', '1234567'),
(2, 'boris', '123456789', 'boris@gmail.com', '12345678910', '', '1234567'),
(3, 'pedro ', '1459862', 'pedro@gmail.com', '12345678910', 'calle pedro', '1234'),
(4, 'pedro ', '1459862', 'pedro@gmail.com', '12345678910', 'calle pedro', '1234'),
(5, 'antoni', '3216547', 'antoni@gmail.com', '654789321', 'calle antoni', '32145'),
(6, 'chorizo', '1234', 'chorizo@gmail.com', '12345678910', 'calle chorizo', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(1, 'test@gmail.com', '1234'),
(3, 'test@gmail.com', '$2y$10$CR3VGjtGo3aemx3Qz2L0vuLJm4M4quxwol7vXMqgvLkfTUV31O27i'),
(4, 'alejandro@gmail.com', '$2y$10$68qUSQWm8nmSpygbFvkVWuMPt495JMF35Dk8NKZozn5pu1rPQBBOq'),
(5, 'marcel@gmail.com', '$2y$10$.LGoDxEzt/.VgkafH4nEd.Aa.1RXNbI9lbUNqmyf.LYIUlnNrzfFa'),
(6, 'marcel@gmail.com', '$2y$10$ifYRoTjjhVWsIHYLa.QObOrcFAzduJktWb4qE2S2cRSvOgwW//1nu'),
(7, 'eze@gmail.com', '$2y$10$VbRR86mae7j2QH8mej8O4Ol/hB6uVptCWq2LrFzaTivqdbSjgLVIS'),
(8, 'juan@gmail.com', '$2y$10$XIlcLtb/7SZ4lINdp20vXuXY4epsiBaSXmDU/FRHr.IbNW4viskhG'),
(9, 'asd@lalas.com', '$2y$10$/xh.Ol0mJlq6JmI.Y8Cyt.NUdeHmzfBq8L9VUipnTbsnaq6eU24Vy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `veterinario`
--

INSERT INTO `veterinario` (`id`, `nombre`, `rut`, `correo`, `telefono`, `direccion`, `especialidad`, `contraseña`) VALUES
(1, 'boris', '123456789', 'boris@gmail.com', '12345678910', 'calle boris', 'general', '1234567');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
