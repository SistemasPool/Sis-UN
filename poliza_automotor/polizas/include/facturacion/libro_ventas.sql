-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2018 a las 22:39:36
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
-- Estructura de tabla para la tabla `libro_ventas`
--

CREATE TABLE `libro_ventas` (
  `id_lv` int(11) NOT NULL,
  `fecha_factura` date DEFAULT NULL,
  `fecha` varchar(10) NOT NULL,
  `num_factura` varchar(12) DEFAULT NULL,
  `idnum` int(11) NOT NULL,
  `autorizacion` varchar(30) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `ci_nit` varchar(12) DEFAULT NULL,
  `nombre_razon` varchar(255) DEFAULT NULL,
  `importe_venta` decimal(10,2) DEFAULT NULL,
  `importe_tasas` decimal(3,2) DEFAULT NULL,
  `exp_oper_ext` decimal(3,2) DEFAULT NULL,
  `ventas_grav` decimal(3,2) DEFAULT NULL,
  `sub_total` decimal(10,2) DEFAULT NULL,
  `desc_bon` decimal(3,2) DEFAULT NULL,
  `imp_deb_fiscal` decimal(10,2) DEFAULT NULL,
  `debito_fiscal` decimal(10,2) DEFAULT NULL,
  `codigo_control` varchar(30) DEFAULT NULL,
  `concepto` text,
  `num_poliza` varchar(30) DEFAULT NULL,
  `cod_cliente` varchar(30) DEFAULT NULL,
  `f_registro` date NOT NULL,
  `distrito` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro_ventas`
--
ALTER TABLE `libro_ventas`
  ADD PRIMARY KEY (`id_lv`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro_ventas`
--
ALTER TABLE `libro_ventas`
  MODIFY `id_lv` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
