-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2018 a las 23:00:49
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

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
(18, 'GASTOS DE SEPELIO', 'CUBRE', 1000, '3490020', '', 'COAU00000003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automovil`
--

CREATE TABLE `automovil` (
  `id_automovil` int(11) NOT NULL,
  `idnum` int(15) NOT NULL,
  `cod_cliente` varchar(40) DEFAULT NULL,
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
  `prima_total` decimal(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automovil`
--

INSERT INTO `automovil` (`id_automovil`, `idnum`, `cod_cliente`, `nro_poliza`, `clase`, `placa`, `marca`, `ano`, `color`, `modelo`, `traccion`, `uso`, `distrito`, `plazas`, `chasis`, `motor`, `auto_cap_aseg`, `prima_total`) VALUES
(1, 1, 'CUB00000001', 'AULP00000001', 'VAGONETA', '1606HYI', 'JEEP', '2003', 'BLANCO', 'LIBERTY', '4X2', 'PARTICULAR', 'LA PAZ', '5', '1J4GK58K03W656993', 'N/D', '11000.00', '0.00'),
(2, 2, 'CUB00000002', 'AULP00000002', 'VAGONETA', '3010UZK', 'KIA', '2012', 'BLANCO', 'SPORTAGE', '4X4', 'PARTICULAR', 'LA PAZ', '5', 'KNAPB811CC7337457', 'G4KDCS316154', '15000.00', '0.00');

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
  `auto_cap_aseg` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automovil_cotizacion`
--

INSERT INTO `automovil_cotizacion` (`id_automovil`, `idnum`, `cod_cliente`, `cod_cotizacion`, `nro_poliza`, `clase`, `placa`, `marca`, `ano`, `color`, `modelo`, `traccion`, `uso`, `distrito`, `plazas`, `chasis`, `motor`, `auto_cap_aseg`) VALUES
(1, 0, '2063802', 'COAU00000001', '', '', '1606HYI', 'JEEP', '2003', '', 'LIBERTY', '', '', '', '5', '', '', '11000.00'),
(2, 0, '3491838', 'COAU00000002', '', '', '3010UZK', 'KIA', '2012', '', 'SPORTAGE', '', '', '', '5', '', '', '15000.00'),
(3, 0, '3490020', 'COAU00000003', '', '', '4500XXI', 'NISSAN', '2017', '', 'MARCH', '', '', '', '5', '', '', '16600.00');

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
(8, 'DAÑOS A CAUSA DE LA NATURALEZA', NULL, 'SI CUBRE', '3490020', '', 'COAU00000003');

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
  `prima_riesgo` decimal(12,9) DEFAULT NULL,
  `intermediario` decimal(12,9) DEFAULT NULL,
  `gastos_admon` decimal(12,9) DEFAULT NULL,
  `aps` decimal(12,9) DEFAULT NULL,
  `fpa` decimal(12,9) DEFAULT NULL,
  `remesas_exterior` decimal(12,9) DEFAULT NULL,
  `utilidad` decimal(12,9) DEFAULT NULL,
  `iva` decimal(12,9) DEFAULT NULL,
  `it` decimal(12,9) DEFAULT NULL,
  `itf` decimal(12,9) DEFAULT NULL,
  `prima_total` decimal(12,9) DEFAULT NULL,
  `prima_tecnica` decimal(12,9) DEFAULT NULL,
  `prima_adiciona` decimal(12,9) DEFAULT NULL,
  `tipo_pago` varchar(20) NOT NULL,
  `intermediario_prima` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calculo_prima`
--

INSERT INTO `calculo_prima` (`id_calculo_prima`, `modalidad`, `ramo`, `cod_cliente`, `nro_poliza`, `prima_riesgo`, `intermediario`, `gastos_admon`, `aps`, `fpa`, `remesas_exterior`, `utilidad`, `iva`, `it`, `itf`, `prima_total`, `prima_tecnica`, `prima_adiciona`, `tipo_pago`, `intermediario_prima`) VALUES
(1, '91', '05', 'CUB00000001', 'AULP00000001', '125.400000000', '22.572000000', '25.080000000', '2.508000000', '0.627000000', '3.135000000', '12.540000000', '29.799354839', '6.876774194', '0.687677419', '229.225806452', '151.107000000', '78.118806452', 'CONTADO', 'CORRESUR S.R.L. Corredores y Asesores de Seguros.'),
(2, '91', '05', 'CUB00000002', 'AULP00000002', '171.000000000', '30.780000000', '34.200000000', '3.420000000', '0.855000000', '4.275000000', '17.100000000', '40.635483871', '9.377419355', '0.937741935', '312.580645161', '206.055000000', '106.525645161', 'CONTADO', 'DIRECTA');

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
(45, 'RESCISIÓN DE CONTRATO A PRORRATA', 'SI CUBRE', '3490020', '', 'COAU00000003');

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
  `zona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nro_poliza`, `prima_contado`, `fecha_vencimiento_pago`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`) VALUES
(1, 'AULP00000001', '229.23', '2018-04-12', 'CUB00000001', 1, 1, 'EMMA LOURDES', 'CLAURE', 'BASCON', '', 'AV. ANTEZANA LA PAZ  Y CHUQUISACA NO. 728', '2063802', '4141559', '73026627', '', '2845970', 'SALAZAR', 'CONTADO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'NORTE'),
(2, 'AULP00000002', '275.81', '2018-04-12', 'CUB00000002', 2, 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', 'AV CIRCUNVALACION # 460.', '3491838', '70680566', '70680566', '', '3491838', 'POMIER', 'CONTADO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'Z. VILLA COPACABANA');

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
(1, '', '2063802', 'COAU00000001', 1, 'EMMA LOURDES', 'CLAURE', 'BASCON', '', '', '', '', '', '', '', ''),
(2, '', '3491838', 'COAU00000002', 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', '', '', '', '', '', '', ''),
(3, '', '3490020', 'COAU00000003', 3, 'IMELDA MABEL', 'MERUVIA', 'BELLOTT', '', '', '', '', '', '', '', '');

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
(2, 'AULP00000002', 'CUB00000002', 2, 2, 'JAVIER ANDRES', 'POMIER', 'CHOQUE', '', 'AV CIRCUNVALACION # 460.', '3491838', '70680566', '70680566', '', '3491838', 'POMIER', 'CREDITO', '2018-03-23', '2019-03-23', '2018-03-23', 'LA PAZ', 'Z. VILLA COPACABANA');

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
  `prima_tecnica` decimal(12,12) NOT NULL,
  `prima_adicional` decimal(12,12) NOT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `num_poliza` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'DIRECTA'),
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
(79, 'WARTBURG');

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
(3, 'SOLO SE ASEGURAN VEHÍCULOS CON ANTIGÜEDAD DE HASTA  20 AÑOS', '3490020', '', 'COAU00000003');

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
(18, 'FORMULARIO PEP, SOLO PARA PERSONAS PÚBLICAS Y/O POLÍTICAMENTE EXPUESTAS (A SER PROPORCIONADO POR LA COMPAÑÍA)', '3490020', '', 'COAU00000003');

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
(1, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', '25000.00'),
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
(1, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', 25000, 'CUB00000001', 'AULP00000001', 'CUBRE', 'COAU00000001'),
(2, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000001', 'AULP00000001', 'CUBRE', 'COAU00000001'),
(4, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', 25000, 'CUB00000002', 'AULP00000002', 'CUBRE', 'COAU00000002'),
(5, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, 'CUB00000002', 'AULP00000002', 'CUBRE', 'COAU00000002'),
(7, 'RESPONSABILIDAD CIVIL EXTRACONTRACTUAL', 25000, '3490020', '', 'CUBRE', 'COAU00000003'),
(8, 'RESPONSABILIDAD CIVIL CONSECUENCIAL', 3000, '3490020', '', 'CUBRE', 'COAU00000003');

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
(20, 'ROBO PARCIAL', '80', '3490020', '', '', 'COAU00000003');

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
-- Indices de la tabla `estado_cubre`
--
ALTER TABLE `estado_cubre`
  ADD PRIMARY KEY (`id_cubre`);

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
  MODIFY `id_acc_pers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `automovil`
--
ALTER TABLE `automovil`
  MODIFY `id_automovil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `automovil_cotizacion`
--
ALTER TABLE `automovil_cotizacion`
  MODIFY `id_automovil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ben_adic_au`
--
ALTER TABLE `ben_adic_au`
  MODIFY `id_ben_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ben_adic_au_pol`
--
ALTER TABLE `ben_adic_au_pol`
  MODIFY `id_ben_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `calculo_prima`
--
ALTER TABLE `calculo_prima`
  MODIFY `id_calculo_prima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clau_adic_au`
--
ALTER TABLE `clau_adic_au`
  MODIFY `id_clau_adic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clau_adic_au_pol`
--
ALTER TABLE `clau_adic_au_pol`
  MODIFY `id_clau_adic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes_cotizacion`
--
ALTER TABLE `clientes_cotizacion`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes_tomador`
--
ALTER TABLE `clientes_tomador`
  MODIFY `id_cliente_tomador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_cuotas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuota_inicial`
--
ALTER TABLE `cuota_inicial`
  MODIFY `id_cuo_ini` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_cubre`
--
ALTER TABLE `estado_cubre`
  MODIFY `id_cubre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `intermediarios`
--
ALTER TABLE `intermediarios`
  MODIFY `id_inter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `marcas_automovil`
--
ALTER TABLE `marcas_automovil`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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
  MODIFY `id_notacla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id_produccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `req_aseg_au`
--
ALTER TABLE `req_aseg_au`
  MODIFY `id_reqaseg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `req_aseg_au_pol`
--
ALTER TABLE `req_aseg_au_pol`
  MODIFY `id_reqaseg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `respon_civil_auto`
--
ALTER TABLE `respon_civil_auto`
  MODIFY `id_respciv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `respon_civil_auto_pol`
--
ALTER TABLE `respon_civil_auto_pol`
  MODIFY `id_respciv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `riesgo_cubierto_au`
--
ALTER TABLE `riesgo_cubierto_au`
  MODIFY `id_riecu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `riesgo_cubierto_au_pol`
--
ALTER TABLE `riesgo_cubierto_au_pol`
  MODIFY `id_riecu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
