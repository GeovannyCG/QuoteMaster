-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-10-2023 a las 05:07:51
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

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

DROP TABLE IF EXISTS `pedidos_quote`;
CREATE TABLE IF NOT EXISTS `pedidos_quote` (
  `id_p` int NOT NULL AUTO_INCREMENT,
  `nombre_proyecto_p` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `dias_credito_p` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_emision_p` date NOT NULL,
  `fecha_entrega_p` date DEFAULT NULL,
  `fecha_pago_p` date DEFAULT NULL,
  `fecha_entrada_alamcen_p` date DEFAULT NULL,
  `estado_solicitud_p` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado_entrega_p` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado_almacen_p` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observaciones_solicitud_p` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observaciones_entrega_p` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observaciones_almacen_p` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `factura_p` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `xml_p` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_proveedor` int NOT NULL,
  PRIMARY KEY (`id_p`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos_quote`
--

INSERT INTO `pedidos_quote` (`id_p`, `nombre_proyecto_p`, `dias_credito_p`, `fecha_emision_p`, `fecha_entrega_p`, `fecha_pago_p`, `fecha_entrada_alamcen_p`, `estado_solicitud_p`, `estado_entrega_p`, `estado_almacen_p`, `observaciones_solicitud_p`, `observaciones_entrega_p`, `observaciones_almacen_p`, `factura_p`, `xml_p`, `id_proveedor`) VALUES
(2, 'SI', '15 Dias', '2023-10-26', '2023-11-01', '2023-11-04', '2023-10-27', 'concretado', 'hallegado', 'ingresado', 'Test de Hiojan', 'Listo esperamos una revision.', 'fsdafsdaf', 'Ejercicio2.pdf', 'DetallesPedidoSIIII.xml', 43),
(5, 'Cableado Telmex', '15 Dias', '2023-10-27', '2023-10-28', '2023-11-11', '2023-10-27', 'concretado', 'hallegado', 'ingresado', 'Entrega rapida', 'Ha llegado', 'Listo todo ha pasado', 'Permisos y aplicaciones.pdf', 'DetallesPedido.xml', 43),
(12, 'fdsafsadf', '15 Dias', '2023-10-27', '2023-11-04', '2023-11-04', '2023-10-27', 'concretado', 'hallegado', 'ingresado', 'sfsadfsadf', 'SADEEEF', 'listo', 'Plantilla-factura.pdf', 'Pedido.xml', 43),
(13, 'Test Proyecto', '30 Dias', '2023-10-27', '2023-11-18', '2023-11-11', '2023-10-27', 'concretado', 'hallegado', 'ingresado', 'Lo necesito', 'Listo', 'Aceptado', 'Plantilla-factura.pdf', 'Pedido.xml', 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_quote`
--

DROP TABLE IF EXISTS `reportes_quote`;
CREATE TABLE IF NOT EXISTS `reportes_quote` (
  `id_r` int NOT NULL AUTO_INCREMENT,
  `motivo_r` varchar(150) NOT NULL,
  `fecha_recepcion_r` date NOT NULL,
  `cantidad_p_r` int NOT NULL,
  `cantidad_r_r` int NOT NULL,
  `devueltos_r` int NOT NULL,
  `observaciones_r` varchar(255) DEFAULT NULL,
  `id_p` int NOT NULL,
  `id_proveedor` int NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_p` (`id_p`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_quote`
--

DROP TABLE IF EXISTS `users_quote`;
CREATE TABLE IF NOT EXISTS `users_quote` (
  `id_uq` int NOT NULL AUTO_INCREMENT,
  `nombres_uq` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos_uq` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rfc_uq` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass_uq` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `roll_uq` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_uq`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

DROP TABLE IF EXISTS `user_ffh`;
CREATE TABLE IF NOT EXISTS `user_ffh` (
  `id_u` int NOT NULL AUTO_INCREMENT,
  `rfc_u` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `type_rfc_u` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `curp_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass_u` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `reason_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type_proveedor_1_u` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `type_proveedor_2_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `const_fiscal_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `const_o_cump_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `const_cta_banc_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `direction_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `name_vtas_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_vtas_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_vtas_u` int NOT NULL,
  `mobile_vtas_u` int NOT NULL,
  `name_conta_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_conta_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_conta_u` int NOT NULL,
  `mobile_conta_u` int NOT NULL,
  `name_cc_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_cc_u` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_cc_u` int NOT NULL,
  `mobile_cc_u` int NOT NULL,
  `days_credit_u` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state_u` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_ffh`
--

INSERT INTO `user_ffh` (`id_u`, `rfc_u`, `type_rfc_u`, `curp_u`, `pass_u`, `reason_u`, `type_proveedor_1_u`, `type_proveedor_2_u`, `const_fiscal_u`, `const_o_cump_u`, `const_cta_banc_u`, `direction_u`, `name_vtas_u`, `email_vtas_u`, `phone_vtas_u`, `mobile_vtas_u`, `name_conta_u`, `email_conta_u`, `phone_conta_u`, `mobile_conta_u`, `name_cc_u`, `email_cc_u`, `phone_cc_u`, `mobile_cc_u`, `days_credit_u`, `state_u`) VALUES
(43, 'HCG133126NOO', 'Fisica', 'CAGH020905HMCRRJA1', 'mypass55', 'Razon test', 'Bienes', 'Plásticos', 'Archivo test 1.pdf', 'Archivo test 2.pdf', 'Archivo test 3.pdf', 'Direcion test', 'treste det', 'treste1e3@gmail.com', 1111111155, 2147483647, 'treste fet', 'treste2e2@gmail.com', 2147483647, 2147483647, 'treste eet', 'treste3e1@gmail.com', 2147483647, 2147483647, '15 Dias', 'acepted'),
(44, 'HCG133126FTF', 'Fisica', 'CAGH020905HMCRRJA2', 'mypassword', 'Razon social', 'Servicios', 'Fianzas', 'constanciafiscal.pdf', 'constanciacumplimiento.pdf', 'constanciabancaria.pdf', 'Direccion 1', 'treste d', 'treste1@gmail.com', 1111111112, 2147483647, 'treste f', 'treste2@gmail.com', 2147483647, 2147483647, 'treste e', 'treste3@gmail.com', 2147483647, 2147483647, '15 Dias', 'cheking');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos_quote`
--
ALTER TABLE `pedidos_quote`
  ADD CONSTRAINT `pedidos_quote_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `user_ffh` (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
