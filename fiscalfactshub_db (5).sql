-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 07:17:56
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
-- Base de datos: `fiscalfactshub_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_quote`
--

CREATE TABLE `pedidos_quote` (
  `id_p` int(11) NOT NULL,
  `nombre_proyecto_p` varchar(100) NOT NULL,
  `dias_credito_p` varchar(50) NOT NULL,
  `fecha_emision_p` date NOT NULL,
  `fecha_entrega_p` date DEFAULT NULL,
  `fecha_pago_p` date DEFAULT NULL,
  `fecha_entrada_alamcen_p` date DEFAULT NULL,
  `estado_solicitud_p` varchar(50) DEFAULT NULL,
  `estado_entrega_p` varchar(50) DEFAULT NULL,
  `estado_almacen_p` varchar(50) DEFAULT NULL,
  `observaciones_solicitud_p` varchar(255) DEFAULT NULL,
  `observaciones_entrega_p` varchar(255) DEFAULT NULL,
  `observaciones_almacen_p` varchar(255) DEFAULT NULL,
  `factura_p` varchar(255) DEFAULT NULL,
  `xml_p` varchar(255) DEFAULT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos_quote`
--

INSERT INTO `pedidos_quote` (`id_p`, `nombre_proyecto_p`, `dias_credito_p`, `fecha_emision_p`, `fecha_entrega_p`, `fecha_pago_p`, `fecha_entrada_alamcen_p`, `estado_solicitud_p`, `estado_entrega_p`, `estado_almacen_p`, `observaciones_solicitud_p`, `observaciones_entrega_p`, `observaciones_almacen_p`, `factura_p`, `xml_p`, `id_proveedor`) VALUES
(2, 'SI', '15 Dias', '2023-10-26', '2023-11-01', '2023-11-04', NULL, 'concretado', 'preparando', NULL, 'Test de Hiojan', 'Hola como estan?', NULL, 'Ejercicio2.pdf', 'DetallesPedidoSIIII.xml', 43),
(4, 'Proyecto 22', '15 Dias', '2023-10-26', '2023-10-27', '0000-00-00', NULL, 'atendido', '', NULL, 'Esto es un texto de prueba.', '', NULL, '', 'DetallesPedido.xml', 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_quote`
--

CREATE TABLE `reportes_quote` (
  `id_r` int(11) NOT NULL,
  `motivo_r` varchar(150) NOT NULL,
  `fecha_recepcion_r` date NOT NULL,
  `cantidad_p_r` int(11) NOT NULL,
  `cantidad_r_r` int(11) NOT NULL,
  `devueltos_r` int(11) NOT NULL,
  `observaciones_r` varchar(255) DEFAULT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_quote`
--

CREATE TABLE `users_quote` (
  `id_uq` int(11) NOT NULL,
  `nombres_uq` varchar(100) NOT NULL,
  `apellidos_uq` varchar(100) NOT NULL,
  `rfc_uq` varchar(50) NOT NULL,
  `pass_uq` varchar(50) NOT NULL,
  `roll_uq` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users_quote`
--

INSERT INTO `users_quote` (`id_uq`, `nombres_uq`, `apellidos_uq`, `rfc_uq`, `pass_uq`, `roll_uq`) VALUES
(1, 'Hiojan Geovanny', 'Carrasco Garcia', 'XYZ123456ABC', 'mypass123', 'accountant'),
(2, 'Geovanny', 'Garcia Carrasco', 'GOPM800315ABC', 'mypass1234', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_ffh`
--

CREATE TABLE `user_ffh` (
  `id_u` int(11) NOT NULL,
  `rfc_u` varchar(20) NOT NULL,
  `type_rfc_u` varchar(30) NOT NULL,
  `curp_u` varchar(50) NOT NULL,
  `pass_u` varchar(20) NOT NULL,
  `reason_u` varchar(50) NOT NULL,
  `type_proveedor_1_u` varchar(30) NOT NULL,
  `type_proveedor_2_u` varchar(50) NOT NULL,
  `const_fiscal_u` varchar(50) NOT NULL,
  `const_o_cump_u` varchar(50) NOT NULL,
  `const_cta_banc_u` varchar(50) NOT NULL,
  `direction_u` varchar(50) NOT NULL,
  `name_vtas_u` varchar(50) NOT NULL,
  `email_vtas_u` varchar(50) NOT NULL,
  `phone_vtas_u` int(10) NOT NULL,
  `mobile_vtas_u` int(10) NOT NULL,
  `name_conta_u` varchar(50) NOT NULL,
  `email_conta_u` varchar(50) NOT NULL,
  `phone_conta_u` int(10) NOT NULL,
  `mobile_conta_u` int(10) NOT NULL,
  `name_cc_u` varchar(50) NOT NULL,
  `email_cc_u` varchar(50) NOT NULL,
  `phone_cc_u` int(10) NOT NULL,
  `mobile_cc_u` int(10) NOT NULL,
  `days_credit_u` varchar(20) DEFAULT NULL,
  `state_u` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_ffh`
--

INSERT INTO `user_ffh` (`id_u`, `rfc_u`, `type_rfc_u`, `curp_u`, `pass_u`, `reason_u`, `type_proveedor_1_u`, `type_proveedor_2_u`, `const_fiscal_u`, `const_o_cump_u`, `const_cta_banc_u`, `direction_u`, `name_vtas_u`, `email_vtas_u`, `phone_vtas_u`, `mobile_vtas_u`, `name_conta_u`, `email_conta_u`, `phone_conta_u`, `mobile_conta_u`, `name_cc_u`, `email_cc_u`, `phone_cc_u`, `mobile_cc_u`, `days_credit_u`, `state_u`) VALUES
(42, 'HCG133126FTF', 'Fisica', 'CAGH020905HMCRRJA2', 'e', 'tESTNO', 'Bienes', 'Electrico', 'Actividad 2.pdf', 'Actividad 2.pdf', 'Actividad 2.pdf', 'testtestets', 'treste d', 'treste1@gmail.com', 1111111111, 2147483647, 'treste f', 'treste2@gmail.com', 2147483647, 2147483647, 'treste e', 'treste3@gmail.com', 2147483647, 2147483647, '8 Dias', 'acepted'),
(43, 'HCG133126NOO', 'Fisica', 'CAGH020905HMCRRJA2', 'yy', 'yyyyy', 'Servicios', 'Reparación y mantenimiento', 'portada.pdf', 'portada.pdf', 'portada.pdf', 'testtestets', 'treste d', 'treste1@gmail.com', 1111111111, 2147483647, 'treste f', 'treste2@gmail.com', 2147483647, 2147483647, 'treste e', 'treste3@gmail.com', 2147483647, 2147483647, '15 Dias', 'acepted');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos_quote`
--
ALTER TABLE `pedidos_quote`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `reportes_quote`
--
ALTER TABLE `reportes_quote`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `id_p` (`id_p`);

--
-- Indices de la tabla `users_quote`
--
ALTER TABLE `users_quote`
  ADD PRIMARY KEY (`id_uq`);

--
-- Indices de la tabla `user_ffh`
--
ALTER TABLE `user_ffh`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos_quote`
--
ALTER TABLE `pedidos_quote`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reportes_quote`
--
ALTER TABLE `reportes_quote`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users_quote`
--
ALTER TABLE `users_quote`
  MODIFY `id_uq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user_ffh`
--
ALTER TABLE `user_ffh`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos_quote`
--
ALTER TABLE `pedidos_quote`
  ADD CONSTRAINT `pedidos_quote_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `user_ffh` (`id_u`);

--
-- Filtros para la tabla `reportes_quote`
--
ALTER TABLE `reportes_quote`
  ADD CONSTRAINT `reportes_quote_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `pedidos_quote` (`id_p`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
