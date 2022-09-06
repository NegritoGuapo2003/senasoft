-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2022 a las 19:56:50
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
-- Base de datos: `participacion_ciudadana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbladministrador`
--

CREATE TABLE `tbladministrador` (
  `adm_codigo` int(11) NOT NULL,
  `adm_nombre` varchar(60) NOT NULL,
  `adm_clave` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblbarrio_vereda`
--

CREATE TABLE `tblbarrio_vereda` (
  `bv_codigo` int(11) NOT NULL,
  `bv_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcertificados`
--

CREATE TABLE `tblcertificados` (
  `ce_codigo` int(11) NOT NULL,
  `ce_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblciudadano`
--

CREATE TABLE `tblciudadano` (
  `ciu_tipo_documento` varchar(30) NOT NULL,
  `ciu_documento` varchar(11) NOT NULL,
  `ciu_nombre` varchar(50) NOT NULL,
  `ciu_apellidos` varchar(50) NOT NULL,
  `ciu_telefono_fijo` varchar(20) DEFAULT NULL,
  `ciu_celular` varchar(20) DEFAULT NULL,
  `ciu_email` varchar(50) NOT NULL,
  `mun_codigo` int(11) NOT NULL,
  `ciu_direccion` varchar(100) DEFAULT NULL,
  `bv_codigo` int(11) NOT NULL,
  `ciu_fecha_nacimiento` date NOT NULL,
  `et_codigo` int(11) NOT NULL,
  `cd_codigo` int(11) NOT NULL,
  `ciu_estrato` varchar(1) NOT NULL,
  `ne_codigo` int(11) NOT NULL,
  `ciu_acceso_dispositivos` varchar(2) NOT NULL,
  `ta_codigo` int(11) NOT NULL,
  `ciu_acceso_internet` varchar(2) DEFAULT NULL,
  `reg_codigo` varchar(11) DEFAULT NULL,
  `ciu_codigo_validacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblciudadano_pregunta`
--

CREATE TABLE `tblciudadano_pregunta` (
  `pr_codigo` int(11) NOT NULL,
  `ciu_cedula` int(11) NOT NULL,
  `cp_respuesta` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcondicion`
--

CREATE TABLE `tblcondicion` (
  `con_codigo` int(11) NOT NULL,
  `con_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbletnia`
--

CREATE TABLE `tbletnia` (
  `et_codigo` int(11) NOT NULL,
  `et_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfiltros`
--

CREATE TABLE `tblfiltros` (
  `fi_codigo` int(11) NOT NULL,
  `fi_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmunicipio`
--

CREATE TABLE `tblmunicipio` (
  `mun_codigo` int(11) NOT NULL,
  `mun_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblnivel_educativo`
--

CREATE TABLE `tblnivel_educativo` (
  `ne_codigo` int(11) NOT NULL,
  `ne_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblnotificacion`
--

CREATE TABLE `tblnotificacion` (
  `not_codigo` int(11) NOT NULL,
  `ciu_documento` int(11) NOT NULL,
  `not_descripcion` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpreguntas`
--

CREATE TABLE `tblpreguntas` (
  `pr_codigo` int(11) NOT NULL,
  `pr_nombre` varchar(50) NOT NULL,
  `te_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblregimen`
--

CREATE TABLE `tblregimen` (
  `re_codigo` int(11) NOT NULL,
  `re_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsexo`
--

CREATE TABLE `tblsexo` (
  `se_codigo` int(11) NOT NULL,
  `se_nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsondeo`
--

CREATE TABLE `tblsondeo` (
  `so_codigo` int(11) NOT NULL,
  `so_nombre` varchar(800) NOT NULL,
  `ciu_documento` int(11) NOT NULL,
  `fi_codigo` int(11) NOT NULL,
  `so_fecha_inicio` date NOT NULL,
  `so_fecha_cierre` date NOT NULL,
  `so_imagen` varchar(500) NOT NULL,
  `adm_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsondeo_pregunta`
--

CREATE TABLE `tblsondeo_pregunta` (
  `pr_codigo` int(11) NOT NULL,
  `so_codigo` int(11) NOT NULL,
  `sp_respuesta` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltema`
--

CREATE TABLE `tbltema` (
  `te_codigo` int(11) NOT NULL,
  `te_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipos_acceso`
--

CREATE TABLE `tbltipos_acceso` (
  `ta_codigo` int(11) NOT NULL,
  `ta_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbladministrador`
--
ALTER TABLE `tbladministrador`
  ADD PRIMARY KEY (`adm_codigo`);

--
-- Indices de la tabla `tblbarrio_vereda`
--
ALTER TABLE `tblbarrio_vereda`
  ADD PRIMARY KEY (`bv_codigo`);

--
-- Indices de la tabla `tblcertificados`
--
ALTER TABLE `tblcertificados`
  ADD PRIMARY KEY (`ce_codigo`);

--
-- Indices de la tabla `tblciudadano`
--
ALTER TABLE `tblciudadano`
  ADD PRIMARY KEY (`ciu_documento`);

--
-- Indices de la tabla `tblciudadano_pregunta`
--
ALTER TABLE `tblciudadano_pregunta`
  ADD PRIMARY KEY (`pr_codigo`,`ciu_cedula`);

--
-- Indices de la tabla `tblcondicion`
--
ALTER TABLE `tblcondicion`
  ADD PRIMARY KEY (`con_codigo`);

--
-- Indices de la tabla `tbletnia`
--
ALTER TABLE `tbletnia`
  ADD PRIMARY KEY (`et_codigo`);

--
-- Indices de la tabla `tblfiltros`
--
ALTER TABLE `tblfiltros`
  ADD PRIMARY KEY (`fi_codigo`);

--
-- Indices de la tabla `tblmunicipio`
--
ALTER TABLE `tblmunicipio`
  ADD PRIMARY KEY (`mun_codigo`);

--
-- Indices de la tabla `tblnivel_educativo`
--
ALTER TABLE `tblnivel_educativo`
  ADD PRIMARY KEY (`ne_codigo`);

--
-- Indices de la tabla `tblnotificacion`
--
ALTER TABLE `tblnotificacion`
  ADD PRIMARY KEY (`not_codigo`);

--
-- Indices de la tabla `tblpreguntas`
--
ALTER TABLE `tblpreguntas`
  ADD PRIMARY KEY (`pr_codigo`);

--
-- Indices de la tabla `tblregimen`
--
ALTER TABLE `tblregimen`
  ADD PRIMARY KEY (`re_codigo`);

--
-- Indices de la tabla `tblsexo`
--
ALTER TABLE `tblsexo`
  ADD PRIMARY KEY (`se_codigo`);

--
-- Indices de la tabla `tblsondeo`
--
ALTER TABLE `tblsondeo`
  ADD PRIMARY KEY (`so_codigo`);

--
-- Indices de la tabla `tblsondeo_pregunta`
--
ALTER TABLE `tblsondeo_pregunta`
  ADD PRIMARY KEY (`pr_codigo`,`so_codigo`);

--
-- Indices de la tabla `tbltema`
--
ALTER TABLE `tbltema`
  ADD PRIMARY KEY (`te_codigo`);

--
-- Indices de la tabla `tbltipos_acceso`
--
ALTER TABLE `tbltipos_acceso`
  ADD PRIMARY KEY (`ta_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbladministrador`
--
ALTER TABLE `tbladministrador`
  MODIFY `adm_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblbarrio_vereda`
--
ALTER TABLE `tblbarrio_vereda`
  MODIFY `bv_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcertificados`
--
ALTER TABLE `tblcertificados`
  MODIFY `ce_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcondicion`
--
ALTER TABLE `tblcondicion`
  MODIFY `con_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbletnia`
--
ALTER TABLE `tbletnia`
  MODIFY `et_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblfiltros`
--
ALTER TABLE `tblfiltros`
  MODIFY `fi_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblmunicipio`
--
ALTER TABLE `tblmunicipio`
  MODIFY `mun_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblnivel_educativo`
--
ALTER TABLE `tblnivel_educativo`
  MODIFY `ne_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblnotificacion`
--
ALTER TABLE `tblnotificacion`
  MODIFY `not_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblpreguntas`
--
ALTER TABLE `tblpreguntas`
  MODIFY `pr_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblregimen`
--
ALTER TABLE `tblregimen`
  MODIFY `re_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblsexo`
--
ALTER TABLE `tblsexo`
  MODIFY `se_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblsondeo`
--
ALTER TABLE `tblsondeo`
  MODIFY `so_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbltema`
--
ALTER TABLE `tbltema`
  MODIFY `te_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbltipos_acceso`
--
ALTER TABLE `tbltipos_acceso`
  MODIFY `ta_codigo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
