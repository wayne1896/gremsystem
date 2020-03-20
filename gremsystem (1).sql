-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2019 a las 07:37:27
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gremsystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deceso`
--

CREATE TABLE `deceso` (
  `id_deceso` int(11) NOT NULL,
  `nombre_deceso` varchar(100) DEFAULT NULL,
  `fecha_deceso` date DEFAULT NULL,
  `Suculsar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependientesclien`
--

CREATE TABLE `dependientesclien` (
  `id_socio` int(11) NOT NULL,
  `nombredependien` varchar(100) DEFAULT NULL,
  `parentesco` varchar(30) DEFAULT NULL,
  `fechanacimientodepen` date DEFAULT NULL,
  `esadodependien` char(20) DEFAULT NULL,
  `id_clien` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dependientesclien`
--

INSERT INTO `dependientesclien` (`id_socio`, `nombredependien`, `parentesco`, `fechanacimientodepen`, `esadodependien`, `id_clien`) VALUES
(1, 'Jose', 'hijo', '2019-07-01', 'Vivo', 1),
(2, 'Jose', 'hijo', '2019-07-01', 'Vivo', 1),
(3, 'amaury', 'hijo', '2019-06-04', 'Vivo', 1),
(4, 'amaury', 'hijo', '2019-06-04', 'Vivo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deuda`
--

CREATE TABLE `deuda` (
  `id_deuda` int(11) NOT NULL,
  `deuda` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` char(20) DEFAULT NULL,
  `id_clien` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deuda`
--

INSERT INTO `deuda` (`id_deuda`, `deuda`, `fecha`, `estado`, `id_clien`) VALUES
(1, 1000, '2019-06-01', 'A', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombreemple` varchar(100) DEFAULT NULL,
  `apellidoemple` varchar(100) DEFAULT NULL,
  `direccionemple` varchar(100) DEFAULT NULL,
  `cedulaemple` varchar(20) DEFAULT NULL,
  `posicionemple` char(100) DEFAULT NULL,
  `nacimientoemple` date DEFAULT NULL,
  `telefonoemple` varchar(20) DEFAULT NULL,
  `estadoemple` char(1) NOT NULL,
  `Suculsar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombreemple`, `apellidoemple`, `direccionemple`, `cedulaemple`, `posicionemple`, `nacimientoemple`, `telefonoemple`, `estadoemple`, `Suculsar`) VALUES
(1, 'carlos', 'gomez', 'bonao', '048-0113346-5', 'cobrador', '2019-05-01', '809-966-4550', 'a', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gremio`
--

CREATE TABLE `gremio` (
  `Suculsar` int(11) NOT NULL,
  `nombre_neg` varchar(50) DEFAULT NULL,
  `numero_neg` varchar(15) DEFAULT NULL,
  `estado_neg` char(1) DEFAULT NULL,
  `direccion_neg` year(4) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantida` int(11) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `Suculsar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginuser`
--

CREATE TABLE `loginuser` (
  `id_user` int(11) NOT NULL,
  `nombreuser` varchar(100) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `correouser` varchar(100) NOT NULL,
  `claveuser` varchar(50) DEFAULT NULL,
  `privilegio` char(20) DEFAULT NULL,
  `preg1` varchar(100) NOT NULL,
  `preg2` varchar(100) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `loginuser`
--

INSERT INTO `loginuser` (`id_user`, `nombreuser`, `usuario`, `correouser`, `claveuser`, `privilegio`, `preg1`, `preg2`, `id_empleado`) VALUES
(1, 'Carlos Jose Gomez', 'cwayne', 'carlosjose1234@hotmail.es', 'wayne', 'admin', 'bonao', 'arjona', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `id_clien` int(11) NOT NULL,
  `nombreclien` varchar(20) DEFAULT NULL,
  `apellidoclien` varchar(100) DEFAULT NULL,
  `cedulaclien` varchar(100) DEFAULT NULL,
  `telefonoclien` varchar(20) DEFAULT NULL,
  `fechaclien` date NOT NULL,
  `direccionclien` varchar(100) NOT NULL,
  `estadoclien` char(1) DEFAULT NULL,
  `Suculsar` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`id_clien`, `nombreclien`, `apellidoclien`, `cedulaclien`, `telefonoclien`, `fechaclien`, `direccionclien`, `estadoclien`, `Suculsar`, `id_empleado`) VALUES
(1, 'pedro jose', 'olivero', '048-01111111-5', '809-296-6110', '2019-06-01', 'bonao', 'a', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deceso`
--
ALTER TABLE `deceso`
  ADD PRIMARY KEY (`id_deceso`),
  ADD KEY `Suculsar` (`Suculsar`);

--
-- Indices de la tabla `dependientesclien`
--
ALTER TABLE `dependientesclien`
  ADD PRIMARY KEY (`id_socio`),
  ADD KEY `id_clien` (`id_clien`);

--
-- Indices de la tabla `deuda`
--
ALTER TABLE `deuda`
  ADD PRIMARY KEY (`id_deuda`),
  ADD KEY `id_clien` (`id_clien`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `Suculsar` (`Suculsar`);

--
-- Indices de la tabla `gremio`
--
ALTER TABLE `gremio`
  ADD PRIMARY KEY (`Suculsar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `Suculsar` (`Suculsar`);

--
-- Indices de la tabla `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`id_clien`),
  ADD KEY `Suculsar` (`Suculsar`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dependientesclien`
--
ALTER TABLE `dependientesclien`
  MODIFY `id_socio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `socio`
--
ALTER TABLE `socio`
  MODIFY `id_clien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
