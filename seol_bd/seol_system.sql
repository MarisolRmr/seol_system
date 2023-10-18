-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2023 a las 02:23:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seol_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document_table`
--

CREATE TABLE `document_table` (
  `document_id` int(11) NOT NULL,
  `nombre_documento` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `tarifa` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_table`
--

CREATE TABLE `event_table` (
  `event_id` int(11) NOT NULL,
  `nombre_evento` varchar(100) DEFAULT NULL,
  `fecha_hora_evento` datetime DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `organizador_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message_table`
--

CREATE TABLE `message_table` (
  `message_id` int(11) NOT NULL,
  `remitente_id` int(11) DEFAULT NULL,
  `destinatario_id` int(11) DEFAULT NULL,
  `contenido_mensaje` text DEFAULT NULL,
  `fecha_hora_mensaje` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_table`
--

CREATE TABLE `payment_table` (
  `payment_id` int(11) NOT NULL,
  `estudiante_id` int(11) DEFAULT NULL,
  `solicitud_id` int(11) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `estado_pago` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request_table`
--

CREATE TABLE `request_table` (
  `request_id` int(11) NOT NULL,
  `estudiante_id` int(11) DEFAULT NULL,
  `documento_id` int(11) DEFAULT NULL,
  `estado_solicitud` varchar(20) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `document_table`
--
ALTER TABLE `document_table`
  ADD PRIMARY KEY (`document_id`);

--
-- Indices de la tabla `event_table`
--
ALTER TABLE `event_table`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `organizador_id` (`organizador_id`);

--
-- Indices de la tabla `message_table`
--
ALTER TABLE `message_table`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `remitente_id` (`remitente_id`),
  ADD KEY `destinatario_id` (`destinatario_id`);

--
-- Indices de la tabla `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `estudiante_id` (`estudiante_id`),
  ADD KEY `solicitud_id` (`solicitud_id`);

--
-- Indices de la tabla `request_table`
--
ALTER TABLE `request_table`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `estudiante_id` (`estudiante_id`),
  ADD KEY `documento_id` (`documento_id`);

--
-- Indices de la tabla `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `document_table`
--
ALTER TABLE `document_table`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_table`
--
ALTER TABLE `event_table`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `message_table`
--
ALTER TABLE `message_table`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `request_table`
--
ALTER TABLE `request_table`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `event_table`
--
ALTER TABLE `event_table`
  ADD CONSTRAINT `event_table_ibfk_1` FOREIGN KEY (`organizador_id`) REFERENCES `user_table` (`user_id`);

--
-- Filtros para la tabla `message_table`
--
ALTER TABLE `message_table`
  ADD CONSTRAINT `message_table_ibfk_1` FOREIGN KEY (`remitente_id`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `message_table_ibfk_2` FOREIGN KEY (`destinatario_id`) REFERENCES `user_table` (`user_id`);

--
-- Filtros para la tabla `payment_table`
--
ALTER TABLE `payment_table`
  ADD CONSTRAINT `payment_table_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `payment_table_ibfk_2` FOREIGN KEY (`solicitud_id`) REFERENCES `request_table` (`request_id`);

--
-- Filtros para la tabla `request_table`
--
ALTER TABLE `request_table`
  ADD CONSTRAINT `request_table_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `request_table_ibfk_2` FOREIGN KEY (`documento_id`) REFERENCES `document_table` (`document_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
