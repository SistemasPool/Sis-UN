-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 22:16:42
-- Versión del servidor: 10.1.32-MariaDB
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
-- Base de datos: `unibienes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acc_perso_au`
--

CREATE TABLE `acc_perso_au` (
  `id_acc_pers` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `cubre` varchar(50) NOT NULL,
  `suma_asegurada` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acc_perso_au`
--

INSERT INTO `acc_perso_au` (`id_acc_pers`, `nombre`, `cubre`, `suma_asegurada`) VALUES
(1, 'MUERTE ACCIDENTAL  C/U', '', '10000.00'),
(2, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', '10000.00'),
(3, 'GASTOS MÉDICOS  C/U', '', '2000.00'),
(4, 'GASTOS DE SEPELIO', 'CUBRE', '1000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acc_perso_au_pol`
--

CREATE TABLE `acc_perso_au_pol` (
  `id_acc_pers` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `cubre` varchar(30) NOT NULL,
  `suma_asegurada` int(30) DEFAULT NULL,
  `cod_cliente` varchar(20) NOT NULL,
  `num_poliza` varchar(20) NOT NULL,
  `cod_cotizacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acc_perso_au_pol`
--

INSERT INTO `acc_perso_au_pol` (`id_acc_pers`, `nombre`, `cubre`, `suma_asegurada`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) VALUES
(1, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(2, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(3, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(4, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(8, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(9, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(10, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(11, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(15, 'MUERTE ACCIDENTAL  C/U', '', 10000, '3490020', '', 'COAU00000003'),
(16, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, '3490020', '', 'COAU00000003'),
(17, 'GASTOS MÉDICOS  C/U', '', 2000, '3490020', '', 'COAU00000003'),
(18, 'GASTOS DE SEPELIO', 'CUBRE', 1000, '3490020', '', 'COAU00000003'),
(140, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(141, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(142, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(143, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(316, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(317, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(318, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(319, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(323, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(324, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(325, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(326, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(330, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(331, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(332, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(333, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(405, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(406, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(407, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(408, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(412, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(413, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(414, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(415, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(419, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(420, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(421, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(422, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(426, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(427, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(428, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(429, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(430, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000009', '', 'COAU00000012'),
(431, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000009', '', 'COAU00000012'),
(432, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000009', '', 'COAU00000012'),
(433, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000009', '', 'COAU00000012'),
(437, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000009', '', 'COAU00000013'),
(438, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000009', '', 'COAU00000013'),
(439, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000009', '', 'COAU00000013'),
(440, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000009', '', 'COAU00000013'),
(441, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000005', '', 'COAU00000014'),
(442, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000005', '', 'COAU00000014'),
(443, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000005', '', 'COAU00000014'),
(444, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000005', '', 'COAU00000014'),
(445, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000006', '', 'COAU00000015'),
(446, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000006', '', 'COAU00000015'),
(447, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000006', '', 'COAU00000015'),
(448, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000006', '', 'COAU00000015'),
(466, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000006', '', 'COAU00000016'),
(467, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000006', '', 'COAU00000016'),
(468, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000006', '', 'COAU00000016'),
(469, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000006', '', 'COAU00000016'),
(470, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000007', '', 'COAU00000017'),
(471, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000007', '', 'COAU00000017'),
(472, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000007', '', 'COAU00000017'),
(473, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000007', '', 'COAU00000017'),
(474, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000008', '', 'COAU00000018'),
(475, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000008', '', 'COAU00000018'),
(476, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000008', '', 'COAU00000018'),
(477, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000008', '', 'COAU00000018'),
(478, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000005', '', 'COAU00000019'),
(479, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000005', '', 'COAU00000019'),
(480, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000005', '', 'COAU00000019'),
(481, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000005', '', 'COAU00000019'),
(499, 'MUERTE ACCIDENTAL  C/U', '', 10000, 'CUB00000010', '', 'COAU00000020'),
(500, 'INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL  C/U', '', 10000, 'CUB00000010', '', 'COAU00000020'),
(501, 'GASTOS MÉDICOS  C/U', '', 2000, 'CUB00000010', '', 'COAU00000020'),
(502, 'GASTOS DE SEPELIO', 'CUBRE', 1000, 'CUB00000010', '', 'COAU00000020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asegurado_conductor`
--

CREATE TABLE `asegurado_conductor` (
  `id_aseg_cond` int(11) NOT NULL,
  `nombre_conductor` varchar(100) DEFAULT NULL,
  `no_licencia_cond` varchar(20) DEFAULT NULL,
  `categoria_cond` varchar(2) DEFAULT NULL,
  `fecha_emision_lic_cond` date DEFAULT NULL,
  `domicilio_cond` varchar(100) DEFAULT NULL,
  `telefono_cond` varchar(12) DEFAULT NULL,
  `relacion_cond` varchar(30) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `num_poliza` varchar(30) DEFAULT NULL,
  `num_siniestro` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asegurado_conductor`
--

INSERT INTO `asegurado_conductor` (`id_aseg_cond`, `nombre_conductor`, `no_licencia_cond`, `categoria_cond`, `fecha_emision_lic_cond`, `domicilio_cond`, `telefono_cond`, `relacion_cond`, `fecha_registro`, `num_poliza`, `num_siniestro`, `cod_cliente`) VALUES
(1, 'Ramiro MuÃ±oz', '3365304', 'c', '2016-02-16', '', '', '', '2018-05-25', 'AULP00000003', 'SIAU00000001', 'CUB00000003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automovil`
--

CREATE TABLE `automovil` (
  `id_automovil` int(11) NOT NULL,
  `idnum` int(15) NOT NULL,
  `cod_cliente` varchar(40) DEFAULT NULL,
  `cod_cotizacion` varchar(30) NOT NULL,
  `nro_poliza` varchar(50) DEFAULT NULL,
  `clase` varchar(100) DEFAULT NULL,
  `placa` varchar(100) DEFAULT NULL,
  `marca` varchar(100) NOT NULL,
  `ano` varchar(10) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `traccion` varchar(100) DEFAULT NULL,
  `uso` varchar(30) DEFAULT NULL,
  `distrito` varchar(30) DEFAULT NULL,
  `plazas` varchar(10) DEFAULT NULL,
  `chasis` varchar(100) DEFAULT NULL,
  `motor` varchar(100) DEFAULT NULL,
  `auto_cap_aseg` decimal(12,2) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `intermediario` varchar(255) NOT NULL,
  `tasa_prima` decimal(12,10) NOT NULL,
  `prima_total` decimal(12,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automovil`
--

INSERT INTO `automovil` (`id_automovil`, `idnum`, `cod_cliente`, `cod_cotizacion`, `nro_poliza`, `clase`, `placa`, `marca`, `ano`, `color`, `modelo`, `traccion`, `uso`, `distrito`, `plazas`, `chasis`, `motor`, `auto_cap_aseg`, `plan`, `intermediario`, `tasa_prima`, `prima_total`) VALUES
(1, 1, 'CUB00000001', '', 'AULP00000001', 'VAGONETA', '1606HYI', 'JEEP', '2003', 'BLANCO', 'LIBERTY', '4X2', 'PARTICULAR', 'LA PAZ', '5', '1J4GK58K03W656993', 'N/D', '11000.00', '', '', '0.0000000000', '0.0000'),
(2, 2, 'CUB00000002', '', 'AULP00000002', 'VAGONETA', '3010UZK', 'KIA', '2012', 'BLANCO', 'SPORTAGE', '4X4', 'PARTICULAR', 'LA PAZ', '5', 'KNAPB811CC7337457', 'G4KDCS316154', '15000.00', '', '', '0.0000000000', '0.0000'),
(4, 3, 'CUB00000003', '', 'AULP00000003', 'AUTOMOVIL', '4723FHS', 'VOLKSWAGEN', '2018', 'NEGRO', 'GOL', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', '9BWAB45U1JT072719', 'CFZS96922', '11000.00', 'PRODUCTO A', '0', '2.0838709677', '229.2258'),
(5, 4, 'CUB00000003', '', 'AULP00000004', 'VAGONETA', '4467SIF', 'MITSUBISHI', '2017', 'PLATEADO METALICO', 'MONTERO SPORT', '4X4 DOBLE', 'PARTICULAR', 'LA PAZ', '7', 'MMBGUKS50HH004211', '6B31BJ7110', '40000.00', 'PRODUCTO A', '0', '2.0838709677', '833.5484'),
(6, 5, 'CUB00000003', '', 'AULP00000005', 'VAGONETA', '4699AEH', 'BMW', '2018', 'VERDE METALIZADO', 'X6', '4X4 DOBLE', 'PARTICULAR', 'LA PAZ', '5', 'WBAKU2102J0Y34082', '04835035', '95000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '2098.4600'),
(20, 16, 'CUB00000004', 'COAU00000004', 'AULP00000006', 'VAGONETA', '3470PZS', 'SUZUKI', '2014', 'NEGRO', 'GRAND VITARA', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', 'JS3TE54V0E4101185', 'J20A804144', '18000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '0.0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automovil_cotizacion`
--

CREATE TABLE `automovil_cotizacion` (
  `id_automovil` int(11) NOT NULL,
  `idnum` int(15) NOT NULL,
  `cod_cliente` varchar(40) DEFAULT NULL,
  `cod_cotizacion` varchar(30) NOT NULL,
  `nro_poliza` varchar(50) DEFAULT NULL,
  `clase` varchar(100) DEFAULT NULL,
  `placa` varchar(100) DEFAULT NULL,
  `marca` varchar(100) NOT NULL,
  `ano` varchar(10) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `traccion` varchar(100) DEFAULT NULL,
  `uso` varchar(30) DEFAULT NULL,
  `distrito` varchar(30) DEFAULT NULL,
  `plazas` varchar(10) DEFAULT NULL,
  `chasis` varchar(100) DEFAULT NULL,
  `motor` varchar(100) DEFAULT NULL,
  `auto_cap_aseg` decimal(12,2) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `intermediario` varchar(255) NOT NULL,
  `tasa_prima` decimal(12,10) NOT NULL,
  `prima_total` decimal(12,4) NOT NULL,
  `prima_credito` decimal(12,6) NOT NULL,
  `cuota_inicial_au` decimal(12,6) NOT NULL,
  `tipo_pago` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automovil_cotizacion`
--

INSERT INTO `automovil_cotizacion` (`id_automovil`, `idnum`, `cod_cliente`, `cod_cotizacion`, `nro_poliza`, `clase`, `placa`, `marca`, `ano`, `color`, `modelo`, `traccion`, `uso`, `distrito`, `plazas`, `chasis`, `motor`, `auto_cap_aseg`, `plan`, `intermediario`, `tasa_prima`, `prima_total`, `prima_credito`, `cuota_inicial_au`, `tipo_pago`) VALUES
(1, 0, '2063802', 'COAU00000001', '', 'VAGONETA', '1606HYI', 'JEEP', '2003', '', 'LIBERTY', '', 'PARTICULAR', 'LA PAZ', '5', '', '', '11000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '0.0000', '0.000000', '0.000000', ''),
(2, 0, '3491838', 'COAU00000002', '', 'VAGONETA', '3010UZK', 'KIA', '2012', 'BLANCO', 'SPORTAGE', '', 'PARTICULAR', 'LA PAZ', '5', '', '', '15000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '1.8387096770', '0.0000', '0.000000', '0.000000', ''),
(3, 0, '3490020', 'COAU00000003', '', 'AUTOMOVIL', '4500XXI', 'NISSAN', '2017', '', 'MARCH', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', '', '', '16600.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '0.0000', '0.000000', '0.000000', ''),
(28, 0, '3444716', 'COAU00000004', '', 'VAGONETA', '3470PZS', 'SUZUKI', '2014', 'NEGRO', 'GRAND VITARA', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', 'JS3TE54V0E4101185', 'J20A804144', '18000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '375.1000', '397.600000', '69.000000', 'CREDITO'),
(71, 0, '3365304', 'COAU00000005', '', 'AUTOMOVIL', '4723FHS', 'VOLKSWAGEN', '2018', 'NEGRO', 'GOL', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', '9BWAB45U1JT072719', 'CFZS96922', '11000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '229.2258', '0.000000', '0.000000', ''),
(72, 0, '3365304', 'COAU00000006', '', 'VAGONETA', '4467SIF', 'MITSUBISHI', '2017', 'PLATEADO METALICO', 'MONTERO SPORT', '4X4 DOBLE', 'PARTICULAR', 'LA PAZ', '7', 'MMBGUKS50HH004211', '6B31BJ7110', '40000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '833.5484', '0.000000', '0.000000', ''),
(73, 0, '3365304', 'COAU00000007', '', 'VAGONETA', '4699AEH', 'BMW', '2018', 'VERDE METALIZADO', 'X6', '4X4 DOBLE', 'PARTICULAR', 'LA PAZ', '5', 'WBAKU2102J0Y34082', '04835035', '95000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '1979.6774', '2098.460000', '367.230500', ''),
(89, 0, 'CUB00000004', 'COAU00000012', '', 'AUTOMOVIL', 'E/T', 'FIAT', '2018', '', 'UNO', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', '', '', '14000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '291.7419', '0.000000', '0.000000', ''),
(90, 0, 'CUB00000004', 'COAU00000013', '', 'AUTOMOVIL', 'E/T', 'FIAT', '2018', '', 'UNO', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', '', '', '12180.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '253.8155', '0.000000', '0.000000', ''),
(91, 0, 'CUB00000009', 'COAU00000014', '', 'VAGONETA', '2542XND', 'NISSAN', '2005', 'PLATEADO METALICO', 'PATROL', '4X4', 'PARTICULAR', 'LA PAZ', '7', '', '', '30000.00', 'PRODUCTO A', 'IBA Corredores y Asesores de Seguros S.R.L.', '2.0838709677', '625.1613', '0.000000', '0.000000', ''),
(92, 0, 'CUB00000006', 'COAU00000015', '', 'AUTOMOVIL', '3469PST', 'GEELY', '2014', 'ROJO', 'SL', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', 'L837844SXEX000246', 'JLAG1BCCXB00032', '10000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '208.3871', '0.000000', '0.000000', ''),
(95, 0, 'CUB00000006', 'COAU00000016', '', 'AUTOMOVIL', '3469PST', 'GEELY', '2014', 'ROJO', 'SL', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', 'L837844SXEX000246', 'JLAG1BCCXB00032', '12000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '250.0645', '0.000000', '0.000000', ''),
(96, 0, 'CUB00000007', 'COAU00000017', '', 'AUTOMOVIL', '1432HCR', 'NISSAN', '2017', '', 'JETTA', '', '', '', '5', '', '', '20000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '416.7742', '0.000000', '0.000000', ''),
(97, 0, 'CUB00000008', 'COAU00000018', '', 'VAGONETA', 'E/T', 'KIA', '2018', '.', 'VAGONETA', '4x4', 'PARTICULAR', 'LA PAZ', '5', '', '', '32233.50', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '671.7045', '0.000000', '0.000000', ''),
(98, 0, 'CUB00000005', 'COAU00000019', '', 'AUTOMOVIL', '123ABC', 'VOLKSWAGEN', '2018', '', 'GOLF', '', '', '', '5', '', '', '10000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '208.3871', '0.000000', '0.000000', ''),
(101, 0, 'CUB00000010', 'COAU00000020', '', 'AUTOMOVIL', '4628ESP', 'NISSAN', '2010', 'BLANCO', 'SENTRA', 'SIMPLE', 'PARTICULAR', 'LA PAZ', '5', 'ASDADAAD8Y88', 'ASDASDA8788', '12000.00', 'PRODUCTO A', 'CARTERA DIRECTA', '2.0838709677', '250.0645', '0.000000', '0.000000', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `id_cliente` int(11) NOT NULL,
  `nro_poliza` varchar(100) NOT NULL,
  `prima_contado` decimal(12,2) NOT NULL,
  `fecha_vencimiento_pago` date NOT NULL,
  `cod_cliente` varchar(100) NOT NULL,
  `idnumero` int(11) NOT NULL,
  `idnum` int(10) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `nit_ci` varchar(30) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nitf_cif` varchar(30) NOT NULL,
  `pagador` varchar(255) NOT NULL,
  `tipo_pago` varchar(50) NOT NULL,
  `inicio_vigencia` date NOT NULL,
  `final_vigencia` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `distrito` varchar(20) NOT NULL,
  `zona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`id_cliente`, `nro_poliza`, `prima_contado`, `fecha_vencimiento_pago`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`) VALUES
(1, 'AULP00000001', '229.23', '2018-04-12', 'CUB00000001', 1, 1, 'EMMA LOURDES', 'CLAURE', 'BASCON', '', 'AV. ANTEZANA LA PAZ  Y CHUQUISACA NO. 728', '2063802', '4141559', '73026627', '', '2845970', 'SALAZAR', 'CONTADO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'NORTE'),
(2, 'AULP00000002', '275.81', '2018-04-12', 'CUB00000002', 2, 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', 'AV CIRCUNVALACION # 460.', '3491838', '70680566', '70680566', '', '3491838', 'POMIER', 'CONTADO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'Z. VILLA COPACABANA'),
(4, 'AULP00000003', '0.00', '2018-05-13', 'CUB00000003', 3, 3, 'RAMIRO DAVID', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '2720243', '72000444', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', 'RAL BOLIVIA SRL', '233038028', 'CONTADO', '2018-04-20', '2019-04-20', '2018-04-23', 'LA PAZ', 'Z. BOLOGNIA'),
(6, 'AULP00000004', '0.00', '2018-05-13', 'CUB00000003', 4, 4, 'RAMIRO DAVID', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '2720243', '72000444', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', 'RAL BOLIVIA SRL', '233038028', 'CONTADO', '2018-04-20', '2019-04-20', '2018-04-20', 'LA PAZ', 'Z. BOLOGNIA'),
(7, 'AULP00000005', '0.00', '2018-05-13', 'CUB00000003', 5, 5, 'RAMIRO DAVID', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '2720243', '72000444', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', 'RAL BOLIVIA SRL', '233038028', 'CONTADO', '2018-04-20', '2019-04-20', '2018-04-20', 'LA PAZ', 'Z. BOLOGNIA'),
(10, 'AULP00000006', '0.00', '0000-00-00', 'CUB00000004', 6, 6, 'CARLOS ABRAHAN', 'CABERO', 'FERNANDEZ', '', 'BLOQUE 89 DEPTO 302', '3444716', '76288886', '76288886', '.', '3444716', 'CABERO', 'CREDITO', '2018-05-24', '2019-05-24', '2018-05-24', 'LA PAZ', 'LOS PINOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario_cotizacion`
--

CREATE TABLE `beneficiario_cotizacion` (
  `id_cliente` int(11) NOT NULL,
  `nro_poliza` varchar(100) NOT NULL,
  `cod_cliente` varchar(100) NOT NULL,
  `cod_cotizacion` varchar(30) NOT NULL,
  `idnumero` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `nit_ci` varchar(30) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nitf_cif` varchar(30) NOT NULL,
  `pagador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `beneficiario_cotizacion`
--

INSERT INTO `beneficiario_cotizacion` (`id_cliente`, `nro_poliza`, `cod_cliente`, `cod_cotizacion`, `idnumero`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`) VALUES
(1, '', '2063802', 'COAU00000001', 1, 'EMMA LOURDES', 'CLAURE', 'BASCON', '', 'AV ANTEZANA LA PAZ Y CHUQUISACA No 728', '2063802', '4141559', '', '', '', ''),
(2, '', '3491838', 'COAU00000002', 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', 'AV CIRCUNVALACION # 460', '3491838', '70680566', '', '', '', ''),
(3, '', '3490020', 'COAU00000003', 3, 'IMELDA MABEL', 'MERUVIA', 'BELLOTT', '', '', '3490020', '', '', '', '', ''),
(4, '', '3444716', 'COAU00000004', 4, 'CARLOS ABRAHAN', 'CABERO', 'FERNANDEZ', '', 'AV LOS PINOS # 302', '3444716', '71563378', '', '', '', ''),
(5, '', '3365304', 'COAU00000005', 5, 'RAMIRO', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '72000444', '', '', '', ''),
(6, '', '3365304', 'COAU00000006', 6, 'RAMIRO', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '72000444', '', '', '', ''),
(7, '', '3365304', 'COAU00000007', 7, 'RAMIRO', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '72000444', '', '', '', ''),
(65, '', 'CUB00000004', 'COAU00000012', 0, 'JAQUELINE', 'BARRAGAN', 'DE CUELLAR', '', '.', '.', '.', '', '', '', ''),
(66, '', 'CUB00000004', 'COAU00000013', 0, 'JAQUELINE', 'BARRAGAN', 'DE CUELLAR', '', '.', '.', '.', '', '', '', ''),
(67, '', 'CUB00000009', 'COAU00000014', 0, 'RAUL', 'UGARTE', 'MARTINEZ', '', 'VALENCIA # 343', '1614398', '2232232', '', '', '', ''),
(68, '', 'CUB00000006', 'COAU00000015', 0, 'JORGE EDUARDO', 'JORDAN', 'VALDEZ', '', 'AV HERNANDO SILES # 6106', '3394299', '.', '', '', '', ''),
(71, '', 'CUB00000006', 'COAU00000016', 0, 'JORGE EDUARDO', 'JORDAN', 'VALDEZ', '', 'AV HERNANDO SILES # 6106', '3394299', '.', '', '', '', ''),
(72, '', 'CUB00000007', 'COAU00000017', 0, 'MAURICIO FERNANDO', 'CAMACHO', 'KRINGS', '', 'AV HERNANDO SILES # 6106', '4390083', '2222222', '', '', '', ''),
(73, '', 'CUB00000008', 'COAU00000018', 0, 'JEANETH', 'QUISBERT', '.', '', '.', '.', '.', '', '', '', ''),
(74, '', 'CUB00000005', 'COAU00000019', 0, 'NESTOR', 'LOPEZ', 'LAGOS', '', 'C/N1 NÂ°777', '12830496', '3232323', '', '', '', ''),
(77, '', 'CUB00000010', 'COAU00000020', 0, 'HUGO EDUARDO', 'CONDORI', 'QUISPE', '', 'ALTO MIRAFLORES C FINAL PUERTO RICO # 215', '8333458', '.', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ben_adic_au`
--

CREATE TABLE `ben_adic_au` (
  `id_ben_au` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `suma_asegurada` int(30) DEFAULT NULL,
  `cubre` varchar(100) DEFAULT NULL,
  `cod_cliente` varchar(50) NOT NULL,
  `num_poliza` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ben_adic_au`
--

INSERT INTO `ben_adic_au` (`id_ben_au`, `nombre`, `suma_asegurada`, `cubre`, `cod_cliente`, `num_poliza`) VALUES
(1, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', '', ''),
(2, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', '', ''),
(3, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ben_adic_au_pol`
--

CREATE TABLE `ben_adic_au_pol` (
  `id_ben_au` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `suma_asegurada` int(30) DEFAULT NULL,
  `cubre` varchar(100) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL,
  `cod_cotizacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ben_adic_au_pol`
--

INSERT INTO `ben_adic_au_pol` (`id_ben_au`, `nombre`, `suma_asegurada`, `cubre`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) VALUES
(1, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(2, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(4, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(5, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(7, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', '3490020', '', 'COAU00000003'),
(8, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', '3490020', '', 'COAU00000003'),
(66, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(67, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(68, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(144, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(145, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(147, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(148, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(150, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(151, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(185, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(186, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(187, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(188, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(189, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(190, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(191, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(192, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(193, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(194, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(195, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(196, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(197, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000009', '', 'COAU00000012'),
(198, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000009', '', 'COAU00000012'),
(199, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000009', '', 'COAU00000012'),
(200, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000009', '', 'COAU00000013'),
(201, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000009', '', 'COAU00000013'),
(202, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000009', '', 'COAU00000013'),
(203, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(204, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(205, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(206, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(207, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(208, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(215, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(216, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(217, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(218, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(219, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(220, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(221, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(222, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(223, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(224, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(225, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(226, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(230, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', '', '', 'COAU00000019'),
(231, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', '', '', 'COAU00000019'),
(232, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', '', '', 'COAU00000019'),
(233, 'AMPLIACIÓN DE AVISO DE SINIESTRO A 10 DÍAS', NULL, 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(234, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(235, 'SUBROGACIÓN DE DERECHOS (PREVIA SOLICITUD)', NULL, 'SI CUBRE', 'CUB00000010', '', 'COAU00000020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calculo_prima`
--

CREATE TABLE `calculo_prima` (
  `id_calculo_prima` int(11) NOT NULL,
  `modalidad` varchar(2) DEFAULT NULL,
  `ramo` varchar(2) DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `nro_poliza` varchar(30) DEFAULT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `valor_asegurado` decimal(10,2) NOT NULL,
  `distrito` varchar(25) NOT NULL,
  `prima_riesgo` decimal(15,9) DEFAULT NULL,
  `intermediario` decimal(15,9) DEFAULT NULL,
  `gastos_admon` decimal(15,9) DEFAULT NULL,
  `aps` decimal(15,9) DEFAULT NULL,
  `fpa` decimal(15,9) DEFAULT NULL,
  `remesas_exterior` decimal(15,9) DEFAULT NULL,
  `utilidad` decimal(15,9) DEFAULT NULL,
  `iva` decimal(15,9) DEFAULT NULL,
  `it` decimal(15,9) DEFAULT NULL,
  `itf` decimal(15,9) DEFAULT NULL,
  `prima_total` decimal(15,9) DEFAULT NULL,
  `prima_tecnica` decimal(15,9) DEFAULT NULL,
  `prima_adiciona` decimal(15,9) DEFAULT NULL,
  `tipo_pago` varchar(20) NOT NULL,
  `intermediario_prima` varchar(150) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calculo_prima`
--

INSERT INTO `calculo_prima` (`id_calculo_prima`, `modalidad`, `ramo`, `cod_cliente`, `nro_poliza`, `nombre_cliente`, `valor_asegurado`, `distrito`, `prima_riesgo`, `intermediario`, `gastos_admon`, `aps`, `fpa`, `remesas_exterior`, `utilidad`, `iva`, `it`, `itf`, `prima_total`, `prima_tecnica`, `prima_adiciona`, `tipo_pago`, `intermediario_prima`, `fecha_registro`) VALUES
(1, '91', '05', 'CUB00000001', 'AULP00000001', 'EMMA LOURDES  CLAURE  BASCON', '11000.00', 'LA PAZ', '125.400000000', '22.572000000', '25.080000000', '2.508000000', '0.627000000', '3.135000000', '12.540000000', '29.799354838', '6.876774194', '0.687677419', '229.225806451', '151.107000000', '78.118806451', 'CONTADO', 'CORRESUR S.R.L. Corredores y Asesores de Seguros.', '2018-03-23'),
(2, '91', '05', 'CUB00000002', 'AULP00000002', 'JAVIER ANDRES 	POMIER 	CHOQUE', '15000.00', 'LA PAZ', '171.000000000', '0.000000000', '34.200000000', '3.420000000', '0.855000000', '4.275000000', '17.100000000', '35.854838709', '8.274193548', '0.827419354', '275.806451612', '175.275000000', '100.531451612', 'CONTADO', 'CARTERA DIRECTA', '2018-03-23'),
(3, '91', '05', 'CUB00000003', 'AULP00000003', 'RAMIRO DAVID 	MUÑOZ 	LINARES', '11000.00', 'LA PAZ', '125.400000000', '0.000000000', '25.080000000', '2.508000000', '0.627000000', '3.135000000', '12.540000000', '26.293548387', '6.067741935', '0.606774194', '202.258064516', '128.535000000', '73.723064516', 'CONTADO', 'CARTERA DIRECTA', '2018-04-23'),
(4, '91', '05', 'CUB00000003', 'AULP00000004', 'RAMIRO DAVID 	MUÑOZ 	LINARES', '40000.00', 'LA PAZ', '456.000000000', '0.000000000', '91.200000000', '9.120000000', '2.280000000', '11.400000000', '45.600000000', '95.612903226', '22.064516129', '2.206451613', '735.483870968', '467.400000000', '268.083870968', 'CONTADO', 'CARTERA DIRECTA', '2018-04-23'),
(8, '91', '05', 'CUB00000003', 'AULP00000005', 'RAMIRO DAVID 	MUÑOZ 	LINARES', '95000.00', 'LA PAZ', '1083.000000000', '0.000000000', '216.600000000', '21.660000000', '5.415000000', '27.075000000', '108.300000000', '227.080645161', '52.403225806', '5.240322581', '1746.774193548', '1110.075000000', '636.699193548', 'CONTADO', 'CARTERA DIRECTA', '2018-04-23'),
(12, '91', '05', 'CUB00000004', 'AULP00000006', 'CARLOS ABRAHAM VERA MARQUEZ', '18000.00', 'LA PAZ', '205.200000000', '36.936000000', '41.040000000', '4.104000000', '1.026000000', '5.130000000', '20.520000000', '48.762580645', '11.252903226', '1.125290323', '397.602580645', '210.330000000', '187.272580645', 'CREDITO', 'CARTERA DIRECTA', '2018-05-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circun_siniestro`
--

CREATE TABLE `circun_siniestro` (
  `id_circunstancia` int(11) NOT NULL,
  `fecha_incidente` date DEFAULT NULL,
  `hora_incidente` time DEFAULT NULL,
  `lugar_incidente` varchar(100) DEFAULT NULL,
  `fecha_reclamo` date DEFAULT NULL,
  `estado_vehiculo` varchar(100) DEFAULT NULL,
  `velocidad` varchar(20) DEFAULT NULL,
  `autoridad_intervino` varchar(100) DEFAULT NULL,
  `num_caso` varchar(20) DEFAULT NULL,
  `oficial_caso` varchar(100) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `num_poliza` varchar(30) DEFAULT NULL,
  `num_siniestro` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `narracion_hecho` text,
  `datalle_dano` text,
  `pago_franquicia` varchar(100) DEFAULT NULL,
  `transito_circ` varchar(100) DEFAULT NULL,
  `alcoholemia_circ` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `circun_siniestro`
--

INSERT INTO `circun_siniestro` (`id_circunstancia`, `fecha_incidente`, `hora_incidente`, `lugar_incidente`, `fecha_reclamo`, `estado_vehiculo`, `velocidad`, `autoridad_intervino`, `num_caso`, `oficial_caso`, `fecha_registro`, `num_poliza`, `num_siniestro`, `cod_cliente`, `narracion_hecho`, `datalle_dano`, `pago_franquicia`, `transito_circ`, `alcoholemia_circ`) VALUES
(1, '0000-00-00', '19:30:00', 'calle pasosqanqui', '0000-00-00', 'Seleccione el Estado', '', 'Transito', '', '', '2018-05-25', 'AULP00000003', 'SIAU00000001', 'CUB00000003', 'Cuando circulaba por la calle panama al momento de para el vehiculo por semaforo rojo fue embestido por otro vehiculo que daÃ±o la parte trasera, parachoue trasero y otros por determinar en la inspeccion.', 'parachoque trasero, superior, medio, inferior y daÃ±os en el mazo de cables que pasa por el parachoque. ', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clau_adic_au`
--

CREATE TABLE `clau_adic_au` (
  `id_clau_adic` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `cubre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clau_adic_au`
--

INSERT INTO `clau_adic_au` (`id_clau_adic`, `nombre`, `cubre`) VALUES
(1, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE'),
(2, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE'),
(3, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE'),
(4, 'AUSENCIA DE CONTROL', 'SI CUBRE'),
(5, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE'),
(6, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE'),
(7, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE'),
(8, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE'),
(9, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE'),
(10, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE'),
(11, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE'),
(12, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE'),
(13, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE'),
(14, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clau_adic_au_pol`
--

CREATE TABLE `clau_adic_au_pol` (
  `id_clau_adic` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `cubre` varchar(100) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL,
  `cod_cotizacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clau_adic_au_pol`
--

INSERT INTO `clau_adic_au_pol` (`id_clau_adic`, `nombre`, `cubre`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) VALUES
(1, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(2, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(3, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(4, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(5, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(6, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(7, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(8, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(9, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(10, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(11, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(12, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(13, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(16, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', '', '', 'COAU00000001'),
(17, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(18, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(19, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(20, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(21, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(22, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(23, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(24, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(25, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(26, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(27, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(28, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(29, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(30, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(32, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(33, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(34, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(35, 'AUSENCIA DE CONTROL', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(36, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(37, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(38, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(39, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(40, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(41, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(42, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(43, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(44, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(45, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', '3490020', '', 'COAU00000003'),
(327, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(328, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(329, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(330, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(331, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(332, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(333, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(334, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(335, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(336, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(337, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(338, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(339, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(714, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(715, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(716, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(717, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(718, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(719, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(720, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(721, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(722, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(723, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(724, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(725, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(726, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(727, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(729, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(730, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(731, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(732, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(733, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(734, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(735, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(736, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(737, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(738, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(739, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(740, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(741, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(742, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', '', '', 'COAU00000006'),
(744, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(745, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(746, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(747, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(748, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(749, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(750, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(751, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(752, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(753, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(754, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(755, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(756, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(757, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', '3365304', '', 'COAU00000007'),
(921, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(922, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(923, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(924, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(925, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(926, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(927, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(928, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(929, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(930, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(931, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(932, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(933, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(934, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(936, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(937, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(938, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(939, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(940, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(941, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(942, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(943, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(944, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(945, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(946, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(947, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(948, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(949, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(951, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(952, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(953, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(954, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(955, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(956, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(957, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(958, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(959, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(960, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(961, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(962, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(963, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(964, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(966, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(967, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(968, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(969, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(970, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(971, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(972, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(973, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(974, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(975, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(976, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(977, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(978, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(979, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(980, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(981, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(982, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(983, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(984, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(985, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(986, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(987, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(988, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(989, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(990, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(991, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(992, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(995, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000007', '', 'COAU00000012'),
(996, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(997, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(998, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(999, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1000, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1001, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1002, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1003, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1004, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1005, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1006, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1007, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1008, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1009, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000007', '', 'COAU00000013'),
(1010, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1011, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1012, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1013, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1014, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1015, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1016, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1017, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1018, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1019, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1020, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1021, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1022, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1023, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000005', '', 'COAU00000014'),
(1024, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1025, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1026, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1027, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1028, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1029, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1030, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1031, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1032, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1033, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1034, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1035, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1036, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1037, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000006', '', 'COAU00000015'),
(1069, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1070, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1071, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1072, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1073, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1074, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1075, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1076, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1077, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1078, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1079, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1080, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1081, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1082, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000006', '', 'COAU00000016'),
(1083, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1084, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1085, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1086, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1087, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1088, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1089, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1090, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1091, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1092, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1093, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1094, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1095, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1096, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000007', '', 'COAU00000017'),
(1097, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1098, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1099, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1100, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1101, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1102, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1103, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1104, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1105, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1106, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1107, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1108, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1109, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1110, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000008', '', 'COAU00000018'),
(1111, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1112, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1113, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1114, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1115, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1116, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1117, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1118, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1119, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1120, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1121, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1122, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1123, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1124, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000005', '', 'COAU00000017'),
(1126, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', '', '', 'COAU00000018'),
(1127, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', '', '', 'COAU00000018'),
(1128, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', '', '', 'COAU00000018'),
(1129, 'AUSENCIA DE CONTROL', 'SI CUBRE', '', '', 'COAU00000018'),
(1130, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', '', '', 'COAU00000018'),
(1131, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', '', '', 'COAU00000018'),
(1132, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', '', '', 'COAU00000018'),
(1133, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', '', '', 'COAU00000018'),
(1134, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', '', '', 'COAU00000018'),
(1135, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', '', '', 'COAU00000018'),
(1136, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', '', '', 'COAU00000018'),
(1137, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', '', '', 'COAU00000018'),
(1138, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', '', '', 'COAU00000018'),
(1139, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', '', '', 'COAU00000018'),
(1141, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', '', '', 'COAU00000019'),
(1142, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', '', '', 'COAU00000019'),
(1143, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', '', '', 'COAU00000019'),
(1144, 'AUSENCIA DE CONTROL', 'SI CUBRE', '', '', 'COAU00000019'),
(1145, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', '', '', 'COAU00000019'),
(1146, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', '', '', 'COAU00000019'),
(1147, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', '', '', 'COAU00000019'),
(1148, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', '', '', 'COAU00000019'),
(1149, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', '', '', 'COAU00000019'),
(1150, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', '', '', 'COAU00000019'),
(1151, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', '', '', 'COAU00000019'),
(1152, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', '', '', 'COAU00000019'),
(1153, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', '', '', 'COAU00000019'),
(1154, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', '', '', 'COAU00000019'),
(1156, 'REHABILITACIÓN AUTOMATICA DE LA SUMA ASEGURADA CON PRIMA MÍNIMA 20.00 USD', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1157, 'CLÁUSULA PARA ROBO DE PARTES Y PIEZAS', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1158, 'EXTENSIÓN DE COBERTURA PARA RESPONSABILIDAD CIVIL A OCUPANTES HASTA USD 3,000.00.', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1159, 'AUSENCIA DE CONTROL', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1160, 'DAÑOS PROPIOS AL VEHÍCULO POR LA CARGA TRANSPORTADA HASTA USD 500.00.', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1161, 'INCLUSIONES Y EXCLUSIONES', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1162, 'FLETE AÉREO HASTA USD 1,000.00.', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1163, 'VEHÍCULOS EN EXHIBICIÓN', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1164, 'ACCESORIOS DE VEHÍCULOS', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1165, 'ELEGIBILIDAD DE TALLERES', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1166, 'ELIGIBILIDAD DE AJUSTADORES', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1167, 'ADELANTO DEL 50% DEL SINIESTRO', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1168, 'CIRCULACIÓN EN VÍAS NO AUTORIZADAS', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020'),
(1169, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', 'CUB00000010', '', 'COAU00000020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nro_poliza` varchar(100) NOT NULL,
  `prima_contado` decimal(12,2) NOT NULL,
  `fecha_vencimiento_pago` date NOT NULL,
  `cod_cliente` varchar(100) NOT NULL,
  `idnumero` int(11) NOT NULL,
  `idnum` int(10) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `nit_ci` varchar(30) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nitf_cif` varchar(30) NOT NULL,
  `pagador` varchar(255) NOT NULL,
  `tipo_pago` varchar(50) NOT NULL,
  `inicio_vigencia` date NOT NULL,
  `final_vigencia` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `distrito` varchar(20) NOT NULL,
  `zona` varchar(255) NOT NULL,
  `cod_cotizacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nro_poliza`, `prima_contado`, `fecha_vencimiento_pago`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`, `cod_cotizacion`) VALUES
(1, 'AULP00000001', '229.23', '2018-04-12', 'CUB00000001', 1, 1, 'EMMA LOURDES', 'CLAURE', 'BASCON', '', 'AV. ANTEZANA LA PAZ  Y CHUQUISACA NO. 728', '2063802', '4141559', '73026627', '', '2845970', 'SALAZAR', 'CONTADO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'NORTE', ''),
(2, 'AULP00000002', '275.81', '2018-04-12', 'CUB00000002', 2, 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', 'AV CIRCUNVALACION # 460.', '3491838', '70680566', '70680566', '', '3491838', 'POMIER', 'CONTADO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'Z. VILLA COPACABANA', ''),
(4, 'AULP00000003', '0.00', '2018-05-13', 'CUB00000003', 3, 3, 'RAMIRO DAVID', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '2720243', '72000444', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', 'RAL BOLIVIA SRL', '233038028', 'CONTADO', '2018-04-20', '2019-04-20', '2018-04-23', 'LA PAZ', 'Z. BOLOGNIA', ''),
(5, 'AULP00000006', '0.00', '2018-05-29', 'CUB00000004', 4, 4, 'CARLOS ABRAHAN', 'CABERO', 'FERNANDEZ', '', 'BLOQUE 89 DEPTO 302', '3444716', '76288886', '76288886', '.', '3444716', 'CABERO', 'CREDITO', '2018-05-23', '2019-05-23', '2018-05-24', 'LA PAZ', 'LOS PINOS', 'COAU00000004'),
(6, '', '0.00', '0000-00-00', 'CUB00000005', 5, 5, 'NESTOR', 'LOPEZ', 'LAGOS', '', 'C/N1 NÂ°777', '12830496', '3232323', '71563378', 'tuzoceleste@hotmail.com', '12830496', 'LOPEZ', '', '0000-00-00', '1971-01-01', '2018-06-04', '', '', ''),
(7, '', '0.00', '0000-00-00', 'CUB00000010', 10, 10, 'HUGO EDUARDO', 'CONDORI', 'QUISPE', '', 'ALTO MIRAFLORES C FINAL PUERTO RICO # 215', '8333458', '.', '71507432', 'ECONDORI@UNIBIENES.COM.BO', '8333458', 'CONDORI', '', '0000-00-00', '1971-01-01', '2018-06-04', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_cotizacion`
--

CREATE TABLE `clientes_cotizacion` (
  `id_cliente` int(11) NOT NULL,
  `nro_poliza` varchar(100) NOT NULL,
  `cod_cliente` varchar(100) NOT NULL,
  `cod_cotizacion` varchar(30) NOT NULL,
  `idnumero` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `nit_ci` varchar(30) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nitf_cif` varchar(30) NOT NULL,
  `pagador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes_cotizacion`
--

INSERT INTO `clientes_cotizacion` (`id_cliente`, `nro_poliza`, `cod_cliente`, `cod_cotizacion`, `idnumero`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`) VALUES
(1, '', '2063802', 'COAU00000001', 1, 'EMMA LOURDES', 'CLAURE', 'BASCON', '', 'AV ANTEZANA LA PAZ Y CHUQUISACA No 728', '2063802', '4141559', '', '', '', ''),
(2, '', '3491838', 'COAU00000002', 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', 'AV CIRCUNVALACION # 460', '3491838', '70680566', '', '', '', ''),
(3, '', '3490020', 'COAU00000003', 3, 'IMELDA MABEL', 'MERUVIA', 'BELLOTT', '', '', '3490020', '', '', '', '', ''),
(24, '', '3444716', 'COAU00000004', 4, 'CARLOS ABRAHAN', 'CABERO', 'FERNANDEZ', '', 'AV LOS PINOS # 302', '3444716', '71563378', '', '', '', ''),
(50, '', '3365304', 'COAU00000005', 5, 'RAMIRO', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '72000444', '', '', '', ''),
(51, '', '3365304', 'COAU00000006', 6, 'RAMIRO', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '72000444', '', '', '', ''),
(52, '', '3365304', 'COAU00000007', 7, 'RAMIRO', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '72000444', '', '', '', ''),
(67, '', 'CUB00000006', 'COAU00000011', 11, 'NESTOR GREGORIO', 'LOPEZ', 'LAGOS', '', 'PINO # 23', '12830496', '2222222', '', '', '', ''),
(68, '', 'CUB00000007', 'COAU00000012', 12, 'JAQUELINE', 'BARRAGAN', 'DE CUELLAR', '', '.', '.', '.', '', '', '', ''),
(69, '', 'CUB00000007', 'COAU00000013', 13, 'JAQUELINE', 'BARRAGAN', 'DE CUELLAR', '', '.', '.', '.', '', '', '', ''),
(71, '', 'CUB00000006', 'COAU00000015', 15, 'JORGE EDUARDO', 'JORDAN', 'VALDEZ', '', 'AV HERNANDO SILES # 6106', '3394299', '.', '', '', '', ''),
(74, '', 'CUB00000006', 'COAU00000016', 16, 'JORGE EDUARDO', 'JORDAN', 'VALDEZ', '', 'AV HERNANDO SILES # 6106', '3394299', '.', '', '', '', ''),
(75, '', 'CUB00000005', 'COAU00000019', 19, 'NESTOR', 'LOPEZ', 'LAGOS', '', 'C/N1 NÂ°777', '12830496', '3232323', '', '', '', ''),
(78, '', 'CUB00000010', 'COAU00000020', 20, 'HUGO EDUARDO', 'CONDORI', 'QUISPE', '', 'ALTO MIRAFLORES C FINAL PUERTO RICO # 215', '8333458', '.', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_tomador`
--

CREATE TABLE `clientes_tomador` (
  `id_cliente_tomador` int(11) NOT NULL,
  `nro_poliza` varchar(100) NOT NULL,
  `cod_cliente` varchar(100) NOT NULL,
  `idnumero` int(11) NOT NULL,
  `idnum` int(10) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `nit_ci` varchar(30) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nitf_cif` varchar(30) NOT NULL,
  `pagador` varchar(255) NOT NULL,
  `tipo_pago` varchar(50) NOT NULL,
  `inicio_vigencia` date NOT NULL,
  `final_vigencia` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `distrito` varchar(20) NOT NULL,
  `zona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes_tomador`
--

INSERT INTO `clientes_tomador` (`id_cliente_tomador`, `nro_poliza`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`) VALUES
(1, 'AULP00000001', 'CUB00000001', 1, 1, 'ADOLFO HERNAN', 'SALAZAR', 'RUIZ', '', 'EDIF. TORRE NORTE. PISO 5 OF H, AV. AMERICA CASI AV. SANTA CRUZ No 360', '2845970', '4141559', '72221237', '', '2845970', 'SALAZAR', 'CREDITO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'NORTE'),
(2, 'AULP00000002', 'CUB00000002', 2, 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', 'AV CIRCUNVALACION # 460.', '3491838', '70680566', '70680566', '', '3491838', 'POMIER', 'CREDITO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'Z. VILLA COPACABANA'),
(4, 'AULP00000003', 'CUB00000003', 0, 0, 'RAMIRO', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '2720243', '72000444', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', 'RAL BOLIVIA SRL', '233038028', 'CONTADO', '2018-04-20', '2019-04-20', '2018-04-23', 'LA PAZ', 'Z. BOLOGNIA'),
(5, 'AULP00000004', 'CUB00000003', 0, 0, 'RAMIRO DAVID', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '2720243', '72000444', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', 'RAL BOLIVIA SRL', '233038028', 'CONTADO', '2018-04-20', '2019-04-20', '2018-04-23', 'LA PAZ', 'Z. BOLOGNIA'),
(6, 'AULP00000005', 'CUB00000003', 0, 0, 'RAMIRO DAVID', 'MUÑOZ', 'LINARES', '', 'C 5 # 325', '3365304', '2720243', '72000444', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', 'RAL BOLIVIA SRL', '233038028', 'CONTADO', '2018-04-20', '2019-04-20', '2018-04-20', 'LA PAZ', 'Z. BOLOGNIA'),
(26, 'AULP00000006', 'CUB00000004', 0, 0, 'CARLOS ABRAHAN', 'CABERO', 'FERNANDEZ', '', 'BLOQUE 89 DEPTO 302', '3444716', '76288886', '76288886', '.', '3444716', 'CABERO', 'CREDITO', '2018-05-24', '2019-05-24', '2018-05-24', 'LA PAZ', 'LOS PINOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_tomador_cotizacion`
--

CREATE TABLE `clientes_tomador_cotizacion` (
  `id_cliente_tomador` int(11) NOT NULL,
  `nro_poliza` varchar(100) NOT NULL,
  `cod_cliente` varchar(100) NOT NULL,
  `cod_cotizacion` varchar(100) NOT NULL,
  `idnumero` int(11) NOT NULL,
  `idnum` int(10) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `nit_ci` varchar(30) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nitf_cif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes_tomador_cotizacion`
--

INSERT INTO `clientes_tomador_cotizacion` (`id_cliente_tomador`, `nro_poliza`, `cod_cliente`, `cod_cotizacion`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`) VALUES
(12, '', '3444716', 'COAU00000004', 0, 0, 'GIOVANA', 'VERA', 'MARQUEZ', 'AV LOS PINOS # 302', '3315431', '71563378', '', '', ''),
(38, '', '3365304', 'COAU00000005', 0, 0, 'RAMIRO', 'MUÑOZ', 'LINARES', 'C 5 # 325', '3365304', '72000444', '', '', ''),
(39, '', '3365304', 'COAU00000006', 0, 0, 'RAMIRO', 'MUÑOZ', 'LINARES', 'C 5 # 325', '3365304', '72000444', '', '', ''),
(40, '', '3365304', 'COAU00000007', 0, 0, 'RAMIRO', 'MUÑOZ', 'LINARES', 'C 5 # 325', '3365304', '72000444', '', '', ''),
(42, '', '2845970', 'COAU00000001', 0, 0, 'ADOLFO HERNAN', 'SALAZAR', 'RUIZ', 'EDIF. TORRE NORTE PISO 5 OF H, AV. AMERICA CASI AV. SANTA CRUZ No 360', '2063802', '4141559', '', '', ''),
(43, '', '3491838', 'COAU00000002', 0, 0, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', 'AV CIRCUNVALACION # 460', '70680566', '70680566', '', '', ''),
(54, '', 'CUB00000006', 'COAU00000008', 0, 0, 'NESTOR GREGORIO', 'LOPEZ', 'LAGOS', 'PINO # 23', '12830496', '2222222', '', '', ''),
(55, '', 'CUB00000006', 'COAU00000009', 0, 0, 'NESTOR GREGORIO', 'LOPEZ', 'LAGOS', 'PINO # 23', '12830496', '2222222', '', '', ''),
(56, '', 'CUB00000006', 'COAU00000010', 0, 0, 'NESTOR GREGORIO', 'LOPEZ', 'LAGOS', 'PINO # 23', '12830496', '2222222', '', '', ''),
(57, '', 'CUB00000006', 'COAU00000011', 0, 0, 'NESTOR GREGORIO', 'LOPEZ', 'LAGOS', 'PINO # 23', '12830496', '2222222', '', '', ''),
(58, '', 'CUB00000007', 'COAU00000012', 0, 0, 'JAQUELINE', 'BARRAGAN', 'DE CUELLAR', '.', '.', '.', '', '', ''),
(59, '', 'CUB00000007', 'COAU00000013', 0, 0, 'JAQUELINE', 'BARRAGAN', 'DE CUELLAR', '.', '.', '.', '', '', ''),
(60, '', 'CUB00000009', 'COAU00000014', 0, 0, 'RAUL', 'UGARTE', 'MARTINEZ', 'VALENCIA # 343', '1614398', '2232232', '', '', ''),
(61, '', 'CUB00000006', 'COAU00000015', 0, 0, 'JORGE EDUARDO', 'JORDAN', 'VALDEZ', 'AV HERNANDO SILES # 6106', '3394299', '.', '', '', ''),
(64, '', 'CUB00000006', 'COAU00000016', 0, 0, 'JORGE EDUARDO', 'JORDAN', 'VALDEZ', 'AV HERNANDO SILES # 6106', '3394299', '.', '', '', ''),
(65, '', 'CUB00000007', 'COAU00000017', 0, 0, 'MAURICIO FERNANDO', 'CAMACHO', 'KRINGS', 'AV HERNANDO SILES # 6106', '4390083', '2222222', '', '', ''),
(66, '', 'CUB00000008', 'COAU00000018', 0, 0, 'JEANETH', 'QUISBERT', '.', '.', '.', '.', '', '', ''),
(67, '', 'CUB00000005', 'COAU00000019', 0, 0, 'NESTOR', 'LOPEZ', 'LAGOS', 'C/N1 NÂ°777', '12830496', '3232323', '', '', ''),
(70, '', 'CUB00000010', 'COAU00000020', 0, 0, 'HUGO EDUARDO', 'CONDORI', 'QUISPE', 'ALTO MIRAFLORES C FINAL PUERTO RICO # 215', '8333458', '.', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coberturas_siniestros`
--

CREATE TABLE `coberturas_siniestros` (
  `id_cobsin` int(11) NOT NULL,
  `cober_sin` varchar(20) DEFAULT NULL,
  `num_siniestro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coberturas_siniestros`
--

INSERT INTO `coberturas_siniestros` (`id_cobsin`, `cober_sin`, `num_siniestro`) VALUES
(1, 'DAÑOS PROPIOS', 'SIAU00000001'),
(2, 'RC', 'SIAU00000001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cob_adic_au`
--

CREATE TABLE `cob_adic_au` (
  `id_cob_ad_au` int(11) NOT NULL,
  `nombre_cob_au` varchar(100) DEFAULT NULL,
  `valor_aseg_au` varchar(30) DEFAULT NULL,
  `fran_au` varchar(10) DEFAULT NULL,
  `coaseg_au` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cob_adic_au`
--

INSERT INTO `cob_adic_au` (`id_cob_ad_au`, `nombre_cob_au`, `valor_aseg_au`, `fran_au`, `coaseg_au`) VALUES
(1, 'Perdida Total por Robo:', '16000', '50', '0'),
(2, 'Robo Parcial y Piezas:', '16000', '50', '20'),
(4, 'Riesgo Total', '4000', '50', '80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cob_adic_au_pol`
--

CREATE TABLE `cob_adic_au_pol` (
  `id_cob_ad_au` int(11) NOT NULL,
  `nombre_cob_au` varchar(100) DEFAULT NULL,
  `valor_aseg_au` varchar(30) DEFAULT NULL,
  `fran_au` varchar(10) DEFAULT NULL,
  `coaseg_au` varchar(50) DEFAULT NULL,
  `nro_poliza_auto` varchar(100) DEFAULT NULL,
  `codigo_cliente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `id_cuotas` int(11) NOT NULL,
  `monto` decimal(12,2) DEFAULT NULL,
  `fecha_cuotas` date DEFAULT NULL,
  `prima_tecnica` decimal(15,10) NOT NULL,
  `prima_adicional` decimal(15,10) NOT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `num_poliza` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`id_cuotas`, `monto`, `fecha_cuotas`, `prima_tecnica`, `prima_adicional`, `cod_cliente`, `num_poliza`, `estado`) VALUES
(5, '69.00', '2018-07-12', '36.5006936737', '32.4993063263', 'CUB00000004', 'AULP00000006', 'NO PAGADO'),
(6, '69.00', '2018-08-11', '36.5006936737', '32.4993063263', 'CUB00000004', 'AULP00000006', 'NO PAGADO'),
(7, '69.00', '2018-09-10', '36.5006936737', '32.4993063263', 'CUB00000004', 'AULP00000006', 'NO PAGADO'),
(8, '69.00', '2018-10-10', '36.5006936737', '32.4993063263', 'CUB00000004', 'AULP00000006', 'NO PAGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_inicial`
--

CREATE TABLE `cuota_inicial` (
  `id_cuo_ini` int(11) NOT NULL,
  `monto` decimal(12,2) DEFAULT NULL,
  `fecha_cuotas` date DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `num_poliza` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuota_inicial`
--

INSERT INTO `cuota_inicial` (`id_cuo_ini`, `monto`, `fecha_cuotas`, `cod_cliente`, `num_poliza`, `estado`) VALUES
(3, '121.60', '2018-06-12', 'CUB00000004', 'AULP00000006', 'NO PAGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `danos_persona`
--

CREATE TABLE `danos_persona` (
  `id_danos_personas` int(11) NOT NULL,
  `tipo_persona` varchar(30) DEFAULT NULL,
  `nombre_persona` varchar(100) DEFAULT NULL,
  `edad_persona` varchar(3) DEFAULT NULL,
  `direccion_persona` varchar(100) DEFAULT NULL,
  `telefono_persona` varchar(12) DEFAULT NULL,
  `comentario_lesiones_persona` text,
  `comentario_adicional_persona` text,
  `fecha_registro` date DEFAULT NULL,
  `num_poliza` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `num_siniestro` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `danos_persona`
--

INSERT INTO `danos_persona` (`id_danos_personas`, `tipo_persona`, `nombre_persona`, `edad_persona`, `direccion_persona`, `telefono_persona`, `comentario_lesiones_persona`, `comentario_adicional_persona`, `fecha_registro`, `num_poliza`, `cod_cliente`, `num_siniestro`) VALUES
(1, 'Seleccione Tipo de Persona', '', '', '', '', '', '', '0000-00-00', 'AULP00000003', 'CUB00000003', 'SIAU00000001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_act_sin`
--

CREATE TABLE `datos_act_sin` (
  `id_datos_act_sin` int(11) NOT NULL,
  `num_siniestro` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `monto_reserva` decimal(10,2) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_act_sin`
--

INSERT INTO `datos_act_sin` (`id_datos_act_sin`, `num_siniestro`, `estado`, `monto_reserva`, `fecha_registro`) VALUES
(1, 'SIAU00000001', 'PENDIENTE', '6500.00', '2018-05-25 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_cubre`
--

CREATE TABLE `estado_cubre` (
  `id_cubre` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_cubre`
--

INSERT INTO `estado_cubre` (`id_cubre`, `estado`) VALUES
(1, 'CUBRE'),
(2, 'NO CUBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_log` int(11) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL,
  `accion` varchar(30) DEFAULT NULL,
  `nombre_pc` varchar(30) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `formulario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_log`, `usuario`, `cod_cliente`, `num_poliza`, `accion`, `nombre_pc`, `fecha`, `formulario`) VALUES
(1, 'nlopez', '', '', 'REGISTRO', 'Nestor', '2018-05-08 17:01:54', '/unibienesserver/prueba.php'),
(2, 'nlopez', '', '', 'Registro', 'Nestor', '2018-05-08 17:02:31', '/unibienesserver/prueba.php'),
(3, '', 'CUB00000008', 'AULP00000012', 'Registro Cliente', 'Nestor', '2018-05-08 21:05:12', '/Unibienesserver/clientes/include/guardar.php'),
(4, 'nlopez', 'CUB00000008', '', 'Registro Cliente', 'Nestor', '2018-05-08 21:07:33', '/Unibienesserver/clientes/include/guardar.php'),
(5, 'nlopez', 'CUB00000008', '', 'Actualiza Cliente', 'Nestor', '2018-05-08 21:43:55', '/Unibienesserver/clientes/include/update.php'),
(6, 'nlopez', 'CUB00000005', '', 'Registro Cliente', 'Nestor', '2018-05-11 16:10:05', '/unibienesserver/clientes/include/guardar.php'),
(7, 'nlopez', 'CUB00000006', '', 'Registro Cliente', 'Nestor', '2018-05-14 16:38:12', '/unibienesserver/clientes/include/guardar.php'),
(8, 'nlopez', 'CUB00000007', '', 'Registro Cliente', 'Nestor', '2018-05-16 22:24:29', '/unibienesserver/clientes/include/guardar.php'),
(9, 'nlopez', 'CUB00000008', '', 'Registro Cliente', 'DeadPool', '2018-05-18 22:29:58', '/unibienesserver/clientes/include/guardar.php'),
(10, 'nlopez', 'CUB00000005', '', 'Registro Cliente', 'DeadPool', '2018-06-04 14:29:16', '/unibienesserver/clientes/include/guardar.php'),
(11, 'nlopez', 'CUB00000006', '', 'Registro Cliente', 'DeadPool', '2018-06-04 14:58:51', '/unibienesserver/clientes/include/guardar.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intermediarios`
--

CREATE TABLE `intermediarios` (
  `id_inter` int(11) NOT NULL,
  `intermediario` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `intermediarios`
--

INSERT INTO `intermediarios` (`id_inter`, `intermediario`) VALUES
(1, 'CARTERA DIRECTA'),
(3, 'A.E.C. Fides Brokers Ltda. Asesores de Seguros.'),
(4, 'AON. Bolivia S.A. Corredores de Seguros.'),
(5, 'ASESCOR S.R.L. Corredores de Seguros.'),
(6, 'BCS. Brokers Corporativos de Seguros S.R.L.'),
(7, 'Cabezas S.R.L. Corredores y Asesores de Seguros'),
(8, 'Consegur S.R.L. Corredores y Asesores de Seguros'),
(9, 'Consejeros y Corredores de Seguros Bolivia S.R.L.'),
(10, 'Consultores de Seguros S.A.'),
(11, 'Corredora Boliviana de Seguros Ltda. Asesores de Seguros'),
(12, 'Corredora de Seguros G & G Ltda.'),
(13, 'Corredora de Seguros S.R.L. (CONSESO Ltda.)'),
(14, 'CORRESUR S.R.L. Corredores y Asesores de Seguros.'),
(15, 'CUBRE SRL Corredores y Asesores de Seguros.'),
(16, 'Delta Brokers Insurance S.A. Corredores de Seguros.'),
(17, 'Estrategica S.R.L. Corredores y Asesores de Seguros y Riesgos.'),
(18, 'Génesis Brokers Ltda. Corredora de Seguros.'),
(19, 'H.K.A. Corredores y Asesores de Seguros S.R.L.'),
(20, 'HP Brokers Corredores y Asesores de Seguros S.R.L.'),
(21, 'IBA Corredores y Asesores de Seguros S.R.L.'),
(22, 'Intermed Brokers S.R.L. Corredores y Asesores de Seguros.'),
(23, 'International Insurance Brokers S.R.L. Asesores y Corredores de Seguros.'),
(24, 'Interseguros S.A. Corrredores y Asesores.'),
(25, 'Justa S.R.L. Corredores de Seguros.'),
(26, 'Kieffer & Asociados S.A. Corredores de Seguros.'),
(27, 'PATRIA S.A. Corredores y Asesores de Seguros.'),
(28, 'PREVICOR Corredores y Asesores de Seguros S.R.L.'),
(29, 'PUERTO SEGURO Corredores y Asesores de Seguros S.R.L.'),
(30, 'Royal Brokers S.R.L. Corredores de Seguros.'),
(31, 'International Insurance Brokers S.R.L. Asesores y Corredores de Seguros.'),
(32, 'Saavedra Pacheco Corrredores de Seguros S.R.L.'),
(33, 'Sudamenricana S.R.L. Corredores de Seguros.'),
(34, 'TOCARSBROKERS S.R.L.'),
(35, 'Universal Brokers S.A. Corredores y Consultores de Seguros.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_automovil`
--

CREATE TABLE `marcas_automovil` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas_automovil`
--

INSERT INTO `marcas_automovil` (`id_marca`, `marca`) VALUES
(2, 'ALFA ROMEO'),
(3, 'ARO'),
(4, 'ASIA'),
(5, 'ASIA MOTORS'),
(6, 'ASTON MARTIN'),
(7, 'AUDI'),
(8, 'AUSTIN'),
(9, 'AUVERLAND'),
(10, 'BENTLEY'),
(11, 'BERTONE'),
(12, 'BMW'),
(13, 'CADILLAC'),
(14, 'CHEVROLET'),
(15, 'CHRYSLER'),
(16, 'CITROEN'),
(17, 'CORVETTE'),
(18, 'DACIA'),
(19, 'DAEWOO'),
(20, 'DAF'),
(21, 'DAIHATSU'),
(22, 'DAIMLER'),
(23, 'DODGE'),
(24, 'FERRARI'),
(25, 'FIAT'),
(26, 'FORD'),
(27, 'GALLOPER'),
(28, 'GMC'),
(29, 'HONDA'),
(30, 'HUMMER'),
(31, 'HYUNDAI'),
(32, 'INFINITI'),
(33, 'INNOCENTI'),
(34, 'ISUZU'),
(35, 'IVECO'),
(36, 'IVECO-PEGASO'),
(37, 'JAGUAR'),
(38, 'JEEP'),
(39, 'KIA'),
(40, 'LADA'),
(41, 'LAMBORGHINI'),
(42, 'LANCIA'),
(43, 'LAND-ROVER'),
(44, 'LDV'),
(45, 'LEXUS'),
(46, 'LOTUS'),
(47, 'MAHINDRA'),
(48, 'MASERATI'),
(49, 'MAYBACH'),
(50, 'MAZDA'),
(51, 'MERCEDES-BENZ'),
(52, 'MG'),
(53, 'MINI'),
(54, 'MITSUBISHI'),
(55, 'MORGAN'),
(56, 'NISSAN'),
(57, 'OPEL'),
(58, 'PEUGEOT'),
(59, 'PONTIAC'),
(60, 'PORSCHE'),
(61, 'RENAULT'),
(62, 'ROLLS-ROYCE'),
(63, 'ROVER'),
(64, 'SAAB'),
(65, 'SANTANA'),
(66, 'SEAT'),
(67, 'SKODA'),
(68, 'SMART'),
(69, 'SSANGYONG'),
(70, 'SUBARU'),
(71, 'SUZUKI'),
(72, 'TALBOT'),
(73, 'TATA'),
(74, 'TOYOTA'),
(75, 'UMM'),
(76, 'VAZ'),
(77, 'VOLKSWAGEN'),
(78, 'VOLVO'),
(79, 'WARTBURG'),
(80, 'GEELY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_automotor`
--

CREATE TABLE `notas_automotor` (
  `id_nota_auto` int(11) NOT NULL,
  `nota_automotor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notas_automotor`
--

INSERT INTO `notas_automotor` (`id_nota_auto`, `nota_automotor`) VALUES
(1, 'ANEXO EXTRATERRITORIAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_aclar_au`
--

CREATE TABLE `nota_aclar_au` (
  `id_notacla` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nota_aclar_au`
--

INSERT INTO `nota_aclar_au` (`id_notacla`, `nombre`) VALUES
(1, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_aclar_au_pol`
--

CREATE TABLE `nota_aclar_au_pol` (
  `id_notacla` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL,
  `cod_cotizacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nota_aclar_au_pol`
--

INSERT INTO `nota_aclar_au_pol` (`id_notacla`, `nombre`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) VALUES
(1, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(2, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(3, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', '3490020', '', 'COAU00000003'),
(23, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(49, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(50, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(51, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(63, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(64, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(65, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(66, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(67, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000007', '', 'COAU00000012'),
(68, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000007', '', 'COAU00000013'),
(69, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000005', '', 'COAU00000014'),
(70, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000006', '', 'COAU00000015'),
(73, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000006', '', 'COAU00000016'),
(74, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000007', '', 'COAU00000017'),
(75, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000008', '', 'COAU00000018'),
(76, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000005', '', 'COAU00000017'),
(77, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', '', '', 'COAU00000018'),
(78, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', '', '', 'COAU00000019'),
(79, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', 'CUB00000010', '', 'COAU00000020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id_produccion` int(11) NOT NULL,
  `ccompania` char(3) DEFAULT NULL,
  `cparte` char(1) DEFAULT NULL,
  `coficina` char(3) DEFAULT NULL,
  `csector` char(1) DEFAULT NULL,
  `cmoneda` char(1) DEFAULT NULL,
  `finformacion` date DEFAULT NULL,
  `cmodalidad` char(2) DEFAULT NULL,
  `cramo` char(2) DEFAULT NULL,
  `cpoliza` char(2) DEFAULT NULL,
  `mcapitalasegurado` decimal(16,2) DEFAULT NULL,
  `qpolizanewemitida` int(10) DEFAULT NULL,
  `qpolizarenovada` int(10) DEFAULT NULL,
  `mprimadirecta` decimal(16,2) DEFAULT NULL,
  `mcapitalanulado` decimal(16,2) DEFAULT NULL,
  `qpolizaanulada` int(10) DEFAULT NULL,
  `mprimaanulada` decimal(16,2) DEFAULT NULL,
  `mcapaseguradoneto` decimal(16,2) DEFAULT NULL,
  `qpolizasnetas` int(10) DEFAULT NULL,
  `mprimaneta` decimal(16,2) DEFAULT NULL,
  `mprimaacepreaseg` decimal(16,2) DEFAULT NULL,
  `mprimacedidareaseg` decimal(16,2) DEFAULT NULL,
  `manulprimascedre` decimal(16,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_automotores`
--

CREATE TABLE `producto_automotores` (
  `id_prod_auto` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `monto` decimal(12,2) DEFAULT NULL,
  `producto_auto` varchar(100) DEFAULT NULL,
  `tasa_prima` decimal(12,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto_automotores`
--

INSERT INTO `producto_automotores` (`id_prod_auto`, `nombre`, `monto`, `producto_auto`, `tasa_prima`) VALUES
(1, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', '2.0838709677'),
(2, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '30000.00', 'PRODUCTO B', '2.2483870968'),
(3, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '50000.00', 'PRODUCTO C', '2.5225806452');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_automotores_pol`
--

CREATE TABLE `producto_automotores_pol` (
  `id_prod_auto` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `monto` decimal(12,2) DEFAULT NULL,
  `producto_auto` varchar(100) DEFAULT NULL,
  `cod_cotizacion` varchar(15) DEFAULT NULL,
  `nro_poliza` varchar(15) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto_automotores_pol`
--

INSERT INTO `producto_automotores_pol` (`id_prod_auto`, `nombre`, `monto`, `producto_auto`, `cod_cotizacion`, `nro_poliza`, `cod_cliente`) VALUES
(23, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000004', '', ''),
(24, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000004', '', ''),
(25, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000004', '', ''),
(101, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000001', '', ''),
(102, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000002', '', ''),
(103, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'CUB00000003', 'AULP00000003', ''),
(104, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'CUB00000003', 'AULP00000004', ''),
(105, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000006', '', ''),
(106, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000006', '', ''),
(107, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000007', 'AULP00000005', ''),
(108, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000007', '', ''),
(109, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000007', '', ''),
(143, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000008', '', ''),
(144, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000008', '', ''),
(145, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000008', '', ''),
(146, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000009', '', ''),
(147, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000009', '', ''),
(148, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000009', '', ''),
(149, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000010', '', ''),
(150, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000010', '', ''),
(151, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000010', '', ''),
(152, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000011', 'AULP00000010', 'CUB00000006'),
(153, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000011', 'AULP00000010', 'CUB00000006'),
(154, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000011', 'AULP00000010', 'CUB00000006'),
(155, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000019', 'AULP00000006', 'CUB00000004'),
(156, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000012'),
(157, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000012'),
(158, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000013'),
(159, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000013'),
(160, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000013'),
(161, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000014'),
(162, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000014'),
(163, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', NULL, '', 'COAU00000014'),
(164, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000015', '', 'COAU00000015'),
(165, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000015', '', 'COAU00000015'),
(166, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000015', '', 'COAU00000015'),
(173, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000016', '', 'COAU00000016'),
(174, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000016', '', 'COAU00000016'),
(175, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000016', '', 'COAU00000016'),
(176, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000017', '', ''),
(177, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000017', '', ''),
(178, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000017', '', ''),
(179, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000018', '', ''),
(180, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000018', '', ''),
(181, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000018', '', ''),
(182, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000017', '', ''),
(183, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000017', '', ''),
(184, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000017', '', ''),
(185, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '0.00', '', 'COAU00000018', '', ''),
(186, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '0.00', '', 'COAU00000018', '', ''),
(187, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '0.00', '', 'COAU00000018', '', ''),
(188, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '0.00', '', 'COAU00000019', '', ''),
(189, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '0.00', '', 'COAU00000019', '', ''),
(190, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '0.00', '', 'COAU00000019', '', ''),
(191, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000020', '', ''),
(192, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000020', '', ''),
(193, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00', 'PRODUCTO A', 'COAU00000020', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `req_aseg_au`
--

CREATE TABLE `req_aseg_au` (
  `id_reqaseg` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `req_aseg_au`
--

INSERT INTO `req_aseg_au` (`id_reqaseg`, `nombre`) VALUES
(2, 'FOTOCOPIA DEL CARNET DE PROPIEDAD'),
(3, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.'),
(4, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)'),
(5, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `req_aseg_au_pol`
--

CREATE TABLE `req_aseg_au_pol` (
  `id_reqaseg` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL,
  `cod_cotizacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `req_aseg_au_pol`
--

INSERT INTO `req_aseg_au_pol` (`id_reqaseg`, `nombre`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) VALUES
(1, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(2, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(3, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(4, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000001', 'AULP00000001', 'COAU00000001'),
(8, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(9, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(10, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(11, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000002', 'AULP00000002', 'COAU00000002'),
(15, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', '3490020', '', 'COAU00000003'),
(16, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', '3490020', '', 'COAU00000003'),
(17, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', '3490020', '', 'COAU00000003'),
(18, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', '3490020', '', 'COAU00000003'),
(140, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(141, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(142, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(143, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000004', 'AULP00000006', 'COAU00000004'),
(316, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(317, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(318, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(319, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000003', 'AULP00000003', 'COAU00000005'),
(323, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(324, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(325, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(326, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000003', 'AULP00000004', 'COAU00000006'),
(330, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(331, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(332, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(333, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000003', 'AULP00000005', 'COAU00000007'),
(405, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(406, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(407, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(408, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000007', 'COAU00000008'),
(412, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(413, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(414, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(415, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000008', 'COAU00000009'),
(419, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(420, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(421, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(422, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000009', 'COAU00000010'),
(426, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(427, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(428, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(429, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', 'AULP00000010', 'COAU00000011'),
(430, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000007', '', 'COAU00000012'),
(431, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000007', '', 'COAU00000012'),
(432, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000007', '', 'COAU00000012'),
(433, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000007', '', 'COAU00000012'),
(437, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000007', '', 'COAU00000013'),
(438, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000007', '', 'COAU00000013'),
(439, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000007', '', 'COAU00000013'),
(440, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000007', '', 'COAU00000013'),
(441, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000005', '', 'COAU00000014'),
(442, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000005', '', 'COAU00000014'),
(443, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000005', '', 'COAU00000014'),
(444, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000005', '', 'COAU00000014'),
(445, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000006', '', 'COAU00000015'),
(446, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000006', '', 'COAU00000015'),
(447, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', '', 'COAU00000015'),
(448, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', '', 'COAU00000015'),
(466, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000006', '', 'COAU00000016'),
(467, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000006', '', 'COAU00000016'),
(468, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', '', 'COAU00000016'),
(469, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000006', '', 'COAU00000016'),
(470, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000007', '', 'COAU00000017'),
(471, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000007', '', 'COAU00000017'),
(472, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000007', '', 'COAU00000017'),
(473, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000007', '', 'COAU00000017'),
(474, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000008', '', 'COAU00000018'),
(475, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000008', '', 'COAU00000018'),
(476, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000008', '', 'COAU00000018'),
(477, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000008', '', 'COAU00000018'),
(478, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000005', '', 'COAU00000017'),
(479, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000005', '', 'COAU00000017'),
(480, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000005', '', 'COAU00000017'),
(481, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000005', '', 'COAU00000017'),
(485, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', '', '', 'COAU00000018'),
(486, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', '', '', 'COAU00000018'),
(487, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', '', '', 'COAU00000018'),
(488, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', '', '', 'COAU00000018'),
(492, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', '', '', 'COAU00000019'),
(493, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', '', '', 'COAU00000019'),
(494, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', '', '', 'COAU00000019'),
(495, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', '', '', 'COAU00000019'),
(499, 'FOTOCOPIA DEL CARNET DE PROPIEDAD', 'CUB00000010', '', 'COAU00000020'),
(500, 'INSPECCIÓN PREVIA AL VEHÍCULO EXCEPTO PARA VEHÍCULOS 0 KM.', 'CUB00000010', '', 'COAU00000020'),
(501, 'FORMULARIO UIF (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000010', '', 'COAU00000020'),
(502, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', 'CUB00000010', '', 'COAU00000020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respon_civil_auto`
--

CREATE TABLE `respon_civil_auto` (
  `id_respciv` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `suma_asegurada` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respon_civil_auto`
--

INSERT INTO `respon_civil_auto` (`id_respciv`, `nombre`, `suma_asegurada`) VALUES
(2, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', '3000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respon_civil_auto_pol`
--

CREATE TABLE `respon_civil_auto_pol` (
  `id_respciv` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `suma_asegurada` int(12) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cod_cotizacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respon_civil_auto_pol`
--

INSERT INTO `respon_civil_auto_pol` (`id_respciv`, `nombre`, `suma_asegurada`, `cod_cliente`, `num_poliza`, `estado`, `cod_cotizacion`) VALUES
(2, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000001', 'AULP00000001', 'CUBRE', 'COAU00000001'),
(5, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000002', 'AULP00000002', 'CUBRE', 'COAU00000002'),
(8, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, '3490020', '', 'CUBRE', 'COAU00000003'),
(28, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000004', 'AULP00000006', 'CUBRE', 'COAU00000004'),
(54, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000003', 'AULP00000003', 'CUBRE', 'COAU00000005'),
(55, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000003', 'AULP00000004', 'CUBRE', 'COAU00000006'),
(56, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000003', 'AULP00000005', 'CUBRE', 'COAU00000007'),
(68, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000006', 'AULP00000007', 'CUBRE', 'COAU00000008'),
(69, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000006', 'AULP00000008', 'CUBRE', 'COAU00000009'),
(70, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000006', 'AULP00000009', 'CUBRE', 'COAU00000010'),
(71, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000006', 'AULP00000010', 'CUBRE', 'COAU00000011'),
(72, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000007', '', 'CUBRE', 'COAU00000012'),
(73, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000007', '', 'CUBRE', 'COAU00000013'),
(74, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000005', '', 'CUBRE', 'COAU00000014'),
(75, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000006', '', 'CUBRE', 'COAU00000015'),
(78, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000006', '', 'CUBRE', 'COAU00000016'),
(79, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000007', '', 'CUBRE', 'COAU00000017'),
(80, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000008', '', 'CUBRE', 'COAU00000018'),
(81, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000005', '', 'CUBRE', 'COAU00000017'),
(82, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, '', '', 'CUBRE', 'COAU00000018'),
(83, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, '', '', 'CUBRE', 'COAU00000019'),
(84, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000010', '', 'CUBRE', 'COAU00000020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_civil_siniestro`
--

CREATE TABLE `resp_civil_siniestro` (
  `int_resp_civ_sin` int(11) NOT NULL,
  `propietario_civ_sin` varchar(100) DEFAULT NULL,
  `direccion_civ_sin` varchar(100) DEFAULT NULL,
  `detalle_danos_civ_sin` text,
  `fecha_emis_civ_sin` date DEFAULT NULL,
  `tipo_vehiculo_civ_sin` varchar(30) DEFAULT NULL,
  `marca_civ_sin` varchar(30) DEFAULT NULL,
  `placa_civ_sin` varchar(10) DEFAULT NULL,
  `nom_cond_civ_sin` varchar(100) DEFAULT NULL,
  `tel_civ_sin` varchar(12) DEFAULT NULL,
  `dom_civ_sin` varchar(100) DEFAULT NULL,
  `num_licencia_civ_sin` varchar(12) DEFAULT NULL,
  `cat_lic_civ_sin` varchar(2) DEFAULT NULL,
  `comentario_civ_sin` text,
  `num_poliza` varchar(30) DEFAULT NULL,
  `num_siniestro` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resp_civil_siniestro`
--

INSERT INTO `resp_civil_siniestro` (`int_resp_civ_sin`, `propietario_civ_sin`, `direccion_civ_sin`, `detalle_danos_civ_sin`, `fecha_emis_civ_sin`, `tipo_vehiculo_civ_sin`, `marca_civ_sin`, `placa_civ_sin`, `nom_cond_civ_sin`, `tel_civ_sin`, `dom_civ_sin`, `num_licencia_civ_sin`, `cat_lic_civ_sin`, `comentario_civ_sin`, `num_poliza`, `num_siniestro`, `cod_cliente`, `fecha_registro`) VALUES
(1, 'Maira Rusa Sossa', '', '', '0000-00-00', 'Vagoneta ', 'Nissan', '791ALG', '', '', '', '', '', '', 'AULP00000003', 'SIAU00000001', 'CUB00000003', '2018-05-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo_cubierto_au`
--

CREATE TABLE `riesgo_cubierto_au` (
  `id_riecu` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `porcentaje` varchar(30) DEFAULT NULL,
  `franquicia` varchar(50) NOT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `riesgo_cubierto_au`
--

INSERT INTO `riesgo_cubierto_au` (`id_riecu`, `nombre`, `porcentaje`, `franquicia`, `cod_cliente`, `num_poliza`) VALUES
(1, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', '', '', ''),
(2, 'PÉRDIDA TOTAL POR ROBO ', '100', '', '', ''),
(3, 'DAÑOS PROPIOS ', '100', 'Franq. USD 50.00 P/Evento', '', ''),
(4, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'Franq. USD 50.00 P/Evento', '', ''),
(5, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'Franq. USD 50.00 P/Evento', '', ''),
(6, 'ROBO PARCIAL', '80', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo_cubierto_au_pol`
--

CREATE TABLE `riesgo_cubierto_au_pol` (
  `id_riecu` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `porcentaje` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) NOT NULL,
  `num_poliza` varchar(30) NOT NULL,
  `franquicia` varchar(30) NOT NULL,
  `cod_cotizacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `riesgo_cubierto_au_pol`
--

INSERT INTO `riesgo_cubierto_au_pol` (`id_riecu`, `nombre`, `porcentaje`, `cod_cliente`, `num_poliza`, `franquicia`, `cod_cotizacion`) VALUES
(1, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000001', 'AULP00000001', '', 'COAU00000001'),
(2, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000001', 'AULP00000001', '', 'COAU00000001'),
(3, 'DAÑOS PROPIOS ', '100', 'CUB00000001', 'AULP00000001', 'Franq. USD 50.00 P/Evento', 'COAU00000001'),
(4, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000001', 'AULP00000001', 'Franq. USD 50.00 P/Evento', 'COAU00000001'),
(5, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000001', 'AULP00000001', 'Franq. USD 50.00 P/Evento', 'COAU00000001'),
(6, 'ROBO PARCIAL', '80', 'CUB00000001', 'AULP00000001', '', 'COAU00000001'),
(8, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000002', 'AULP00000002', '', 'COAU00000002'),
(9, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000002', 'AULP00000002', '', 'COAU00000002'),
(10, 'DAÑOS PROPIOS ', '100', 'CUB00000002', 'AULP00000002', 'Franq. USD 50.00 P/Evento', 'COAU00000002'),
(11, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000002', 'AULP00000002', 'Franq. USD 50.00 P/Evento', 'COAU00000002'),
(12, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000002', 'AULP00000002', 'Franq. USD 50.00 P/Evento', 'COAU00000002'),
(13, 'ROBO PARCIAL', '80', 'CUB00000002', 'AULP00000002', '', 'COAU00000002'),
(15, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', '3490020', '', '', 'COAU00000003'),
(16, 'PÉRDIDA TOTAL POR ROBO ', '100', '3490020', '', '', 'COAU00000003'),
(17, 'DAÑOS PROPIOS ', '100', '3490020', '', 'Franq. USD 50.00 P/Evento', 'COAU00000003'),
(18, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', '3490020', '', 'Franq. USD 50.00 P/Evento', 'COAU00000003'),
(19, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', '3490020', '', 'Franq. USD 50.00 P/Evento', 'COAU00000003'),
(20, 'ROBO PARCIAL', '80', '3490020', '', '', 'COAU00000003'),
(289, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000004', 'AULP00000006', '', 'COAU00000004'),
(290, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000004', 'AULP00000006', '', 'COAU00000004'),
(291, 'DAÑOS PROPIOS ', '100', 'CUB00000004', 'AULP00000006', 'Franq. USD 50.00 P/Evento', 'COAU00000004'),
(292, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000004', 'AULP00000006', 'Franq. USD 50.00 P/Evento', 'COAU00000004'),
(293, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', '3444716', 'AULP00000006', 'Franq. USD 50.00 P/Evento', 'COAU00000004'),
(294, 'ROBO PARCIAL', '80', 'CUB00000004', 'AULP00000006', '', 'COAU00000004'),
(330, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000003', 'AULP00000003', '', 'COAU00000005'),
(331, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000003', 'AULP00000003', '', 'COAU00000005'),
(332, 'DAÑOS PROPIOS ', '100', 'CUB00000003', 'AULP00000003', 'Franq. USD 50.00 P/Evento', 'COAU00000005'),
(333, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000003', 'AULP00000003', 'Franq. USD 50.00 P/Evento', 'COAU00000005'),
(334, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000003', 'AULP00000003', 'Franq. USD 50.00 P/Evento', 'COAU00000005'),
(335, 'ROBO PARCIAL', '80', 'CUB00000003', 'AULP00000003', '', 'COAU00000005'),
(337, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000003', 'AULP00000004', '', 'COAU00000006'),
(338, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000003', 'AULP00000004', '', 'COAU00000006'),
(339, 'DAÑOS PROPIOS ', '100', 'CUB00000003', 'AULP00000004', 'Franq. USD 50.00 P/Evento', 'COAU00000006'),
(340, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000003', 'AULP00000004', 'Franq. USD 50.00 P/Evento', 'COAU00000006'),
(341, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000003', 'AULP00000004', 'Franq. USD 50.00 P/Evento', 'COAU00000006'),
(342, 'ROBO PARCIAL', '80', 'CUB00000003', 'AULP00000004', '', 'COAU00000006'),
(344, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000003', 'AULP00000005', '', 'COAU00000007'),
(345, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000003', 'AULP00000005', '', 'COAU00000007'),
(346, 'DAÑOS PROPIOS ', '100', 'CUB00000003', 'AULP00000005', 'Franq. USD 250.00 P/Evento', 'COAU00000007'),
(347, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000003', 'AULP00000005', 'Franq. USD 250.00 P/Evento', 'COAU00000007'),
(348, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000003', 'AULP00000005', 'Franq. USD 250.00 P/Evento', 'COAU00000007'),
(349, 'ROBO PARCIAL', '80', 'CUB00000003', 'AULP00000005', '', 'COAU00000007'),
(425, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000006', 'AULP00000007', '', 'COAU00000008'),
(426, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000006', 'AULP00000007', '', 'COAU00000008'),
(427, 'DAÑOS PROPIOS ', '100', 'CUB00000006', 'AULP00000007', 'Franq. USD 50.00 P/Evento', 'COAU00000008'),
(428, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000006', 'AULP00000007', 'Franq. USD 50.00 P/Evento', 'COAU00000008'),
(429, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000006', 'AULP00000007', 'Franq. USD 50.00 P/Evento', 'COAU00000008'),
(430, 'ROBO PARCIAL', '80', 'CUB00000006', 'AULP00000007', '', 'COAU00000008'),
(432, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000006', 'AULP00000008', '', 'COAU00000009'),
(433, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000006', 'AULP00000008', '', 'COAU00000009'),
(434, 'DAÑOS PROPIOS ', '100', 'CUB00000006', 'AULP00000008', 'Franq. USD 50.00 P/Evento', 'COAU00000009'),
(435, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000006', 'AULP00000008', 'Franq. USD 50.00 P/Evento', 'COAU00000009'),
(436, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000006', 'AULP00000008', 'Franq. USD 50.00 P/Evento', 'COAU00000009'),
(437, 'ROBO PARCIAL', '80', 'CUB00000006', 'AULP00000008', '', 'COAU00000009'),
(439, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000006', 'AULP00000009', '', 'COAU00000010'),
(440, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000006', 'AULP00000009', '', 'COAU00000010'),
(441, 'DAÑOS PROPIOS ', '100', 'CUB00000006', 'AULP00000009', 'Franq. USD 50.00 P/Evento', 'COAU00000010'),
(442, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000006', 'AULP00000009', 'Franq. USD 50.00 P/Evento', 'COAU00000010'),
(443, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000006', 'AULP00000009', 'Franq. USD 50.00 P/Evento', 'COAU00000010'),
(444, 'ROBO PARCIAL', '80', 'CUB00000006', 'AULP00000009', '', 'COAU00000010'),
(446, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000006', 'AULP00000010', '', 'COAU00000011'),
(447, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000006', 'AULP00000010', '', 'COAU00000011'),
(448, 'DAÑOS PROPIOS ', '100', 'CUB00000006', 'AULP00000010', 'Franq. USD 50.00 P/Evento', 'COAU00000011'),
(449, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000006', 'AULP00000010', 'Franq. USD 50.00 P/Evento', 'COAU00000011'),
(450, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000006', 'AULP00000010', 'Franq. USD 50.00 P/Evento', 'COAU00000011'),
(451, 'ROBO PARCIAL', '80', 'CUB00000006', 'AULP00000010', '', 'COAU00000011'),
(452, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000007', '', '', 'COAU00000012'),
(453, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000007', '', '', 'COAU00000012'),
(454, 'DAÑOS PROPIOS ', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000012'),
(455, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000012'),
(456, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000012'),
(457, 'ROBO PARCIAL', '80', 'CUB00000007', '', '', 'COAU00000012'),
(459, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000007', '', '', 'COAU00000013'),
(460, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000007', '', '', 'COAU00000013'),
(461, 'DAÑOS PROPIOS ', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000013'),
(462, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000013'),
(463, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000013'),
(464, 'ROBO PARCIAL', '80', 'CUB00000007', '', '', 'COAU00000013'),
(465, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000005', '', '', 'COAU00000014'),
(466, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000005', '', '', 'COAU00000014'),
(467, 'DAÑOS PROPIOS ', '100', 'CUB00000005', '', 'Franq. USD 50.00 P/Evento', 'COAU00000014'),
(468, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000005', '', 'Franq. USD 50.00 P/Evento', 'COAU00000014'),
(469, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000005', '', 'Franq. USD 50.00 P/Evento', 'COAU00000014'),
(470, 'ROBO PARCIAL', '80', 'CUB00000005', '', '', 'COAU00000014'),
(471, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000006', '', '', 'COAU00000015'),
(472, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000006', '', '', 'COAU00000015'),
(473, 'DAÑOS PROPIOS ', '100', 'CUB00000006', '', 'Franq. USD 50.00 P/Evento', 'COAU00000015'),
(474, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000006', '', 'Franq. USD 50.00 P/Evento', 'COAU00000015'),
(475, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000006', '', 'Franq. USD 50.00 P/Evento', 'COAU00000015'),
(476, 'ROBO PARCIAL', '80', 'CUB00000006', '', '', 'COAU00000015'),
(489, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000006', '', 'Franq. USD 50.00 P/Evento', 'COAU00000017'),
(490, 'ROBO PARCIAL', '80', 'CUB00000006', '', '', 'COAU00000017'),
(492, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000006', '', '', 'COAU00000016'),
(493, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000006', '', '', 'COAU00000016'),
(494, 'DAÑOS PROPIOS ', '100', 'CUB00000006', '', 'Franq. USD 50.00 P/Evento', 'COAU00000016'),
(495, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000006', '', 'Franq. USD 50.00 P/Evento', 'COAU00000016'),
(496, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000006', '', 'Franq. USD 50.00 P/Evento', 'COAU00000016'),
(497, 'ROBO PARCIAL', '80', 'CUB00000006', '', '', 'COAU00000016'),
(498, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000007', '', '', 'COAU00000017'),
(499, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000007', '', '', 'COAU00000017'),
(500, 'DAÑOS PROPIOS ', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000017'),
(501, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000017'),
(502, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000007', '', 'Franq. USD 50.00 P/Evento', 'COAU00000017'),
(503, 'ROBO PARCIAL', '80', 'CUB00000007', '', '', 'COAU00000017'),
(504, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000008', '', '', 'COAU00000018'),
(505, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000008', '', '', 'COAU00000018'),
(506, 'DAÑOS PROPIOS ', '100', 'CUB00000008', '', 'Franq. USD 50.00 P/Evento', 'COAU00000018'),
(507, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000008', '', 'Franq. USD 50.00 P/Evento', 'COAU00000018'),
(508, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000008', '', 'Franq. USD 50.00 P/Evento', 'COAU00000018'),
(509, 'ROBO PARCIAL', '80', 'CUB00000008', '', '', 'COAU00000018'),
(510, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000005', '', '', 'COAU00000017'),
(511, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000005', '', '', 'COAU00000017'),
(512, 'DAÑOS PROPIOS ', '100', 'CUB00000005', '', 'Franq. USD 50.00 P/Evento', 'COAU00000017'),
(513, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000005', '', 'Franq. USD 50.00 P/Evento', 'COAU00000017'),
(514, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000005', '', 'Franq. USD 50.00 P/Evento', 'COAU00000017'),
(515, 'ROBO PARCIAL', '80', 'CUB00000005', '', '', 'COAU00000017'),
(517, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', '', '', '', 'COAU00000018'),
(518, 'PÉRDIDA TOTAL POR ROBO ', '100', '', '', '', 'COAU00000018'),
(519, 'DAÑOS PROPIOS ', '100', '', '', 'Franq. USD 50.00 P/Evento', 'COAU00000018'),
(520, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', '', '', 'Franq. USD 50.00 P/Evento', 'COAU00000018'),
(521, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', '', '', 'Franq. USD 50.00 P/Evento', 'COAU00000018'),
(522, 'ROBO PARCIAL', '80', '', '', '', 'COAU00000018'),
(524, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', '', '', '', 'COAU00000019'),
(525, 'PÉRDIDA TOTAL POR ROBO ', '100', '', '', '', 'COAU00000019'),
(526, 'DAÑOS PROPIOS ', '100', '', '', 'Franq. USD 50.00 P/Evento', 'COAU00000019'),
(527, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', '', '', 'Franq. USD 50.00 P/Evento', 'COAU00000019'),
(528, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', '', '', 'Franq. USD 50.00 P/Evento', 'COAU00000019'),
(529, 'ROBO PARCIAL', '80', '', '', '', 'COAU00000019'),
(531, 'PÉRDIDA TOTAL POR ACCIDENTE', '100', 'CUB00000010', '', '', 'COAU00000020'),
(532, 'PÉRDIDA TOTAL POR ROBO ', '100', 'CUB00000010', '', '', 'COAU00000020'),
(533, 'DAÑOS PROPIOS ', '100', 'CUB00000010', '', 'Franq. USD 50.00 P/Evento', 'COAU00000020'),
(534, 'CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO', '100', 'CUB00000010', '', 'Franq. USD 50.00 P/Evento', 'COAU00000020'),
(535, 'SABOTAJE, VANDALISMO Y TERRORISMO', '100', 'CUB00000010', '', 'Franq. USD 50.00 P/Evento', 'COAU00000020'),
(536, 'ROBO PARCIAL', '80', 'CUB00000010', '', '', 'COAU00000020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siniestros`
--

CREATE TABLE `siniestros` (
  `id_siniestro` int(11) NOT NULL,
  `id_sin` int(12) DEFAULT NULL,
  `num_siniestro` varchar(30) DEFAULT NULL,
  `asegurado` varchar(100) DEFAULT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono_fijo` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_denuncia` date DEFAULT NULL,
  `fecha_siniestro` date DEFAULT NULL,
  `num_poliza` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `cobertura_aplicar` varchar(30) DEFAULT NULL,
  `monto_reserva` decimal(12,2) NOT NULL,
  `placa_sin` varchar(8) DEFAULT NULL,
  `marca` varchar(30) NOT NULL,
  `uso` varchar(30) NOT NULL,
  `clase` varchar(30) NOT NULL,
  `detalle_sin` text,
  `estado` varchar(30) DEFAULT NULL,
  `fecha_respuesta` date DEFAULT NULL,
  `fran_coaseg_sin` decimal(10,2) DEFAULT NULL,
  `monto_reclamado` decimal(10,2) DEFAULT NULL,
  `monto_pagado` decimal(10,2) DEFAULT NULL,
  `observaciones` text,
  `fecha_registro` date DEFAULT NULL,
  `inicio_vigencia` date DEFAULT NULL,
  `final_vigencia` date DEFAULT NULL,
  `insperctor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `siniestros`
--

INSERT INTO `siniestros` (`id_siniestro`, `id_sin`, `num_siniestro`, `asegurado`, `direccion`, `telefono_fijo`, `email`, `fecha_denuncia`, `fecha_siniestro`, `num_poliza`, `cod_cliente`, `cobertura_aplicar`, `monto_reserva`, `placa_sin`, `marca`, `uso`, `clase`, `detalle_sin`, `estado`, `fecha_respuesta`, `fran_coaseg_sin`, `monto_reclamado`, `monto_pagado`, `observaciones`, `fecha_registro`, `inicio_vigencia`, `final_vigencia`, `insperctor`) VALUES
(1, 1, 'SIAU00000001', 'RAMIRO DAVID MUÑOZ LINARES', 'C 5 # 325', '2720243', 'MUNOZ_SOC.LEGAL@HOTMAIL.COM', '2018-05-22', '2018-05-22', 'AULP00000003', 'CUB00000003', 'DAÑOS PROPIOS', '6500.00', '4699AEH', 'BMW', 'PARTICULAR', 'VAGONETA', '', '', '0000-00-00', '0.00', '0.00', '0.00', '', '2018-05-25', '2018-04-20', '2019-04-20', 'DAVID GUTIERREZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_automovil`
--

CREATE TABLE `tipo_automovil` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_automovil`
--

INSERT INTO `tipo_automovil` (`id_tipo`, `tipo`) VALUES
(3, 'MOTOCICLETA'),
(4, 'AUTOMOVIL'),
(5, 'JEEP'),
(6, 'CAMIONETA'),
(7, 'VAGONETA'),
(8, 'MINIBUS'),
(9, 'MICROBUS'),
(10, 'COLECTIVO'),
(11, 'OMNIBUS'),
(12, 'CAMIÓN'),
(13, 'TRACTO AMIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL,
  `pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`id_tipo_pago`, `pago`) VALUES
(1, 'CREDITO'),
(2, 'CONTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `pass`, `correo`) VALUES
(1, 'Nestor', 'Lopez Lagos', 'nlopez', '123456', 'tuzoceleste@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acc_perso_au`
--
ALTER TABLE `acc_perso_au`
  ADD PRIMARY KEY (`id_acc_pers`);

--
-- Indices de la tabla `acc_perso_au_pol`
--
ALTER TABLE `acc_perso_au_pol`
  ADD PRIMARY KEY (`id_acc_pers`);

--
-- Indices de la tabla `asegurado_conductor`
--
ALTER TABLE `asegurado_conductor`
  ADD PRIMARY KEY (`id_aseg_cond`);

--
-- Indices de la tabla `automovil`
--
ALTER TABLE `automovil`
  ADD PRIMARY KEY (`id_automovil`);

--
-- Indices de la tabla `automovil_cotizacion`
--
ALTER TABLE `automovil_cotizacion`
  ADD PRIMARY KEY (`id_automovil`);

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `beneficiario_cotizacion`
--
ALTER TABLE `beneficiario_cotizacion`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `ben_adic_au`
--
ALTER TABLE `ben_adic_au`
  ADD PRIMARY KEY (`id_ben_au`);

--
-- Indices de la tabla `ben_adic_au_pol`
--
ALTER TABLE `ben_adic_au_pol`
  ADD PRIMARY KEY (`id_ben_au`);

--
-- Indices de la tabla `calculo_prima`
--
ALTER TABLE `calculo_prima`
  ADD PRIMARY KEY (`id_calculo_prima`);

--
-- Indices de la tabla `circun_siniestro`
--
ALTER TABLE `circun_siniestro`
  ADD PRIMARY KEY (`id_circunstancia`);

--
-- Indices de la tabla `clau_adic_au`
--
ALTER TABLE `clau_adic_au`
  ADD PRIMARY KEY (`id_clau_adic`);

--
-- Indices de la tabla `clau_adic_au_pol`
--
ALTER TABLE `clau_adic_au_pol`
  ADD PRIMARY KEY (`id_clau_adic`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `clientes_cotizacion`
--
ALTER TABLE `clientes_cotizacion`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `clientes_tomador`
--
ALTER TABLE `clientes_tomador`
  ADD PRIMARY KEY (`id_cliente_tomador`);

--
-- Indices de la tabla `clientes_tomador_cotizacion`
--
ALTER TABLE `clientes_tomador_cotizacion`
  ADD PRIMARY KEY (`id_cliente_tomador`);

--
-- Indices de la tabla `coberturas_siniestros`
--
ALTER TABLE `coberturas_siniestros`
  ADD PRIMARY KEY (`id_cobsin`);

--
-- Indices de la tabla `cob_adic_au`
--
ALTER TABLE `cob_adic_au`
  ADD PRIMARY KEY (`id_cob_ad_au`);

--
-- Indices de la tabla `cob_adic_au_pol`
--
ALTER TABLE `cob_adic_au_pol`
  ADD PRIMARY KEY (`id_cob_ad_au`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`id_cuotas`);

--
-- Indices de la tabla `cuota_inicial`
--
ALTER TABLE `cuota_inicial`
  ADD PRIMARY KEY (`id_cuo_ini`);

--
-- Indices de la tabla `danos_persona`
--
ALTER TABLE `danos_persona`
  ADD PRIMARY KEY (`id_danos_personas`);

--
-- Indices de la tabla `datos_act_sin`
--
ALTER TABLE `datos_act_sin`
  ADD PRIMARY KEY (`id_datos_act_sin`);

--
-- Indices de la tabla `estado_cubre`
--
ALTER TABLE `estado_cubre`
  ADD PRIMARY KEY (`id_cubre`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `intermediarios`
--
ALTER TABLE `intermediarios`
  ADD PRIMARY KEY (`id_inter`);

--
-- Indices de la tabla `marcas_automovil`
--
ALTER TABLE `marcas_automovil`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `notas_automotor`
--
ALTER TABLE `notas_automotor`
  ADD PRIMARY KEY (`id_nota_auto`);

--
-- Indices de la tabla `nota_aclar_au`
--
ALTER TABLE `nota_aclar_au`
  ADD PRIMARY KEY (`id_notacla`);

--
-- Indices de la tabla `nota_aclar_au_pol`
--
ALTER TABLE `nota_aclar_au_pol`
  ADD PRIMARY KEY (`id_notacla`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id_produccion`);

--
-- Indices de la tabla `producto_automotores`
--
ALTER TABLE `producto_automotores`
  ADD PRIMARY KEY (`id_prod_auto`);

--
-- Indices de la tabla `producto_automotores_pol`
--
ALTER TABLE `producto_automotores_pol`
  ADD PRIMARY KEY (`id_prod_auto`);

--
-- Indices de la tabla `req_aseg_au`
--
ALTER TABLE `req_aseg_au`
  ADD PRIMARY KEY (`id_reqaseg`);

--
-- Indices de la tabla `req_aseg_au_pol`
--
ALTER TABLE `req_aseg_au_pol`
  ADD PRIMARY KEY (`id_reqaseg`);

--
-- Indices de la tabla `respon_civil_auto`
--
ALTER TABLE `respon_civil_auto`
  ADD PRIMARY KEY (`id_respciv`);

--
-- Indices de la tabla `respon_civil_auto_pol`
--
ALTER TABLE `respon_civil_auto_pol`
  ADD PRIMARY KEY (`id_respciv`);

--
-- Indices de la tabla `resp_civil_siniestro`
--
ALTER TABLE `resp_civil_siniestro`
  ADD PRIMARY KEY (`int_resp_civ_sin`);

--
-- Indices de la tabla `riesgo_cubierto_au`
--
ALTER TABLE `riesgo_cubierto_au`
  ADD PRIMARY KEY (`id_riecu`);

--
-- Indices de la tabla `riesgo_cubierto_au_pol`
--
ALTER TABLE `riesgo_cubierto_au_pol`
  ADD PRIMARY KEY (`id_riecu`);

--
-- Indices de la tabla `siniestros`
--
ALTER TABLE `siniestros`
  ADD PRIMARY KEY (`id_siniestro`);

--
-- Indices de la tabla `tipo_automovil`
--
ALTER TABLE `tipo_automovil`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id_tipo_pago`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acc_perso_au`
--
ALTER TABLE `acc_perso_au`
  MODIFY `id_acc_pers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `acc_perso_au_pol`
--
ALTER TABLE `acc_perso_au_pol`
  MODIFY `id_acc_pers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT de la tabla `asegurado_conductor`
--
ALTER TABLE `asegurado_conductor`
  MODIFY `id_aseg_cond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `automovil`
--
ALTER TABLE `automovil`
  MODIFY `id_automovil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `automovil_cotizacion`
--
ALTER TABLE `automovil_cotizacion`
  MODIFY `id_automovil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `beneficiario_cotizacion`
--
ALTER TABLE `beneficiario_cotizacion`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `ben_adic_au`
--
ALTER TABLE `ben_adic_au`
  MODIFY `id_ben_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ben_adic_au_pol`
--
ALTER TABLE `ben_adic_au_pol`
  MODIFY `id_ben_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT de la tabla `calculo_prima`
--
ALTER TABLE `calculo_prima`
  MODIFY `id_calculo_prima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `circun_siniestro`
--
ALTER TABLE `circun_siniestro`
  MODIFY `id_circunstancia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clau_adic_au`
--
ALTER TABLE `clau_adic_au`
  MODIFY `id_clau_adic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clau_adic_au_pol`
--
ALTER TABLE `clau_adic_au_pol`
  MODIFY `id_clau_adic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1171;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes_cotizacion`
--
ALTER TABLE `clientes_cotizacion`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `clientes_tomador`
--
ALTER TABLE `clientes_tomador`
  MODIFY `id_cliente_tomador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `clientes_tomador_cotizacion`
--
ALTER TABLE `clientes_tomador_cotizacion`
  MODIFY `id_cliente_tomador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `coberturas_siniestros`
--
ALTER TABLE `coberturas_siniestros`
  MODIFY `id_cobsin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cob_adic_au`
--
ALTER TABLE `cob_adic_au`
  MODIFY `id_cob_ad_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cob_adic_au_pol`
--
ALTER TABLE `cob_adic_au_pol`
  MODIFY `id_cob_ad_au` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  MODIFY `id_cuotas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cuota_inicial`
--
ALTER TABLE `cuota_inicial`
  MODIFY `id_cuo_ini` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `danos_persona`
--
ALTER TABLE `danos_persona`
  MODIFY `id_danos_personas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_act_sin`
--
ALTER TABLE `datos_act_sin`
  MODIFY `id_datos_act_sin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado_cubre`
--
ALTER TABLE `estado_cubre`
  MODIFY `id_cubre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `intermediarios`
--
ALTER TABLE `intermediarios`
  MODIFY `id_inter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `marcas_automovil`
--
ALTER TABLE `marcas_automovil`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `notas_automotor`
--
ALTER TABLE `notas_automotor`
  MODIFY `id_nota_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nota_aclar_au`
--
ALTER TABLE `nota_aclar_au`
  MODIFY `id_notacla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nota_aclar_au_pol`
--
ALTER TABLE `nota_aclar_au_pol`
  MODIFY `id_notacla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id_produccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto_automotores`
--
ALTER TABLE `producto_automotores`
  MODIFY `id_prod_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto_automotores_pol`
--
ALTER TABLE `producto_automotores_pol`
  MODIFY `id_prod_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT de la tabla `req_aseg_au`
--
ALTER TABLE `req_aseg_au`
  MODIFY `id_reqaseg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `req_aseg_au_pol`
--
ALTER TABLE `req_aseg_au_pol`
  MODIFY `id_reqaseg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT de la tabla `respon_civil_auto`
--
ALTER TABLE `respon_civil_auto`
  MODIFY `id_respciv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `respon_civil_auto_pol`
--
ALTER TABLE `respon_civil_auto_pol`
  MODIFY `id_respciv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `resp_civil_siniestro`
--
ALTER TABLE `resp_civil_siniestro`
  MODIFY `int_resp_civ_sin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `riesgo_cubierto_au`
--
ALTER TABLE `riesgo_cubierto_au`
  MODIFY `id_riecu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `riesgo_cubierto_au_pol`
--
ALTER TABLE `riesgo_cubierto_au_pol`
  MODIFY `id_riecu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=538;

--
-- AUTO_INCREMENT de la tabla `siniestros`
--
ALTER TABLE `siniestros`
  MODIFY `id_siniestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_automovil`
--
ALTER TABLE `tipo_automovil`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
