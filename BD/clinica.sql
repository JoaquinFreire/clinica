-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2021 a las 18:58:26
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades_cronicas`
--

CREATE TABLE `enfermedades_cronicas` (
  `Id` int(11) NOT NULL,
  `Diabetes` int(11) NOT NULL,
  `Hipertension` int(11) NOT NULL,
  `Cardiaco` int(11) NOT NULL,
  `Trasplantados` int(11) NOT NULL,
  `Alergico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hist_clinica`
--

CREATE TABLE `hist_clinica` (
  `Id` int(11) NOT NULL,
  `Paciente_id(FK)` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Grupo_Sanguineo` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Apellido` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Domicilio` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Altura` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Numero_Matriculo` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Apellido` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `DNI` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Sexo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Pass` int(11) NOT NULL,
  `CP` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Calle` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Altura` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Piso` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Dpto` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Manzana` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Lote` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Provincia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Localidad` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Mail` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Tel` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Tel_dos` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `FNAC` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `Nombre`, `Apellido`, `DNI`, `Sexo`, `Pass`, `CP`, `Calle`, `Altura`, `Piso`, `Dpto`, `Manzana`, `Lote`, `Provincia`, `Localidad`, `Mail`, `Tel`, `Tel_dos`, `FNAC`) VALUES
(1, 'Lautaro', 'Barrionuevo', '44579213', 'Masculino', 12345, '5016', '', '', '', '', '22', '03', 'Córdoba', 'Córdoba', 'lautarobarrionuevo516@gmail.com', '3515284882', '3517102126', '17/12/2002'),
(2, 'Laura', 'Velázquez', '44276009', 'Femenino', 12345, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'María José', 'Del Tullú', '44672223', 'Otro', 12345, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proxima_consulta`
--

CREATE TABLE `proxima_consulta` (
  `ID` int(11) NOT NULL,
  `Dni` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `contraseña` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `proxima_consulta`
--

INSERT INTO `proxima_consulta` (`ID`, `Dni`, `Fecha`, `Hora`, `contraseña`) VALUES
(1, 0, '2021-09-29', '14:13:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_clinico`
--

CREATE TABLE `seguimiento_clinico` (
  `ID` int(11) NOT NULL,
  `Hist_Clinica_Id` int(11) NOT NULL,
  `Fecha` int(11) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Altura` int(11) NOT NULL,
  `Presion` int(11) NOT NULL,
  `Saturacion` int(11) NOT NULL,
  `Observacion` int(11) NOT NULL,
  `Medico_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `enfermedades_cronicas`
--
ALTER TABLE `enfermedades_cronicas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `hist_clinica`
--
ALTER TABLE `hist_clinica`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proxima_consulta`
--
ALTER TABLE `proxima_consulta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `seguimiento_clinico`
--
ALTER TABLE `seguimiento_clinico`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `enfermedades_cronicas`
--
ALTER TABLE `enfermedades_cronicas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hist_clinica`
--
ALTER TABLE `hist_clinica`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proxima_consulta`
--
ALTER TABLE `proxima_consulta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seguimiento_clinico`
--
ALTER TABLE `seguimiento_clinico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
