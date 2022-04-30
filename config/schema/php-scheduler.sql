-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2022 a las 22:58:08
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php-scheduler`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `day`
--

CREATE TABLE `day` (
  `id` int(255) NOT NULL,
  `6_id` int(255) NOT NULL,
  `7_id` int(255) NOT NULL,
  `8_id` int(255) NOT NULL,
  `9_id` int(255) NOT NULL,
  `10_id` int(255) NOT NULL,
  `11_id` int(255) NOT NULL,
  `12_id` int(255) NOT NULL,
  `13_id` int(255) NOT NULL,
  `14_id` int(255) NOT NULL,
  `15_id` int(255) NOT NULL,
  `16_id` int(255) NOT NULL,
  `17_id` int(255) NOT NULL,
  `18_id` int(255) NOT NULL,
  `19_id` int(255) NOT NULL,
  `20_id` int(255) NOT NULL,
  `21_id` int(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hour`
--

CREATE TABLE `hour` (
  `id` int(255) NOT NULL,
  `subjet` varchar(25) NOT NULL,
  `color` varchar(25) NOT NULL,
  `desc` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `born_date` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`),
  ADD KEY `6_id` (`6_id`),
  ADD KEY `7_id` (`7_id`),
  ADD KEY `8_id` (`8_id`),
  ADD KEY `9_id` (`9_id`),
  ADD KEY `10_id` (`10_id`),
  ADD KEY `11_id` (`11_id`),
  ADD KEY `12_id` (`12_id`),
  ADD KEY `13_id` (`13_id`),
  ADD KEY `14_id` (`14_id`),
  ADD KEY `15_id` (`15_id`),
  ADD KEY `16_id` (`16_id`),
  ADD KEY `17_id` (`17_id`),
  ADD KEY `18_id` (`18_id`),
  ADD KEY `19_id` (`19_id`),
  ADD KEY `20_id` (`20_id`),
  ADD KEY `21_id` (`21_id`);

--
-- Indices de la tabla `hour`
--
ALTER TABLE `hour`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `day`
--
ALTER TABLE `day`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hour`
--
ALTER TABLE `hour`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `day`
--
ALTER TABLE `day`
  ADD CONSTRAINT `fk_6_day` FOREIGN KEY (`6_id`) REFERENCES `hour` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
