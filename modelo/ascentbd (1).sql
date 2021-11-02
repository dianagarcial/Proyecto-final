-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 14:48:36
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ascentbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--
CREATE DATABASE ascentbd;
USE ascentbd;

CREATE TABLE `actividad` (
  `codigo` int(11) NOT NULL,
  `fechaLimite` date NOT NULL,
  `medioEvaluacion` varchar(40) NOT NULL,
  `codigo_asig` int(11) NOT NULL,
  `codigoprogra` int(11) NOT NULL,
  `codigoperiodo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`codigo`, `fechaLimite`, `medioEvaluacion`, `codigo_asig`, `codigoprogra`, `codigoperiodo`) VALUES
(1, '2022-06-06', 'Parcial1', 552203, 1, '2022-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`codigo`, `nombre`) VALUES
(552203, 'BIOFÍSICA MÉDICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `codigo_rub` int(11) NOT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `comentario` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`codigo_rub`, `estado`, `comentario`) VALUES
(1, 'Aprobado', 'La entrega cumple con los requisitos establecidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinadorabet`
--

CREATE TABLE `coordinadorabet` (
  `correo_usuario` varchar(120) NOT NULL,
  `ano_inicial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinadorabet`
--

INSERT INTO `coordinadorabet` (`correo_usuario`, `ano_inicial`) VALUES
('maria.a@uao.edu.co', 2021);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorprograma`
--

CREATE TABLE `directorprograma` (
  `correo_usuario` varchar(120) NOT NULL,
  `codigo_prog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directorprograma`
--

INSERT INTO `directorprograma` (`correo_usuario`, `codigo_prog`) VALUES
('juan.carlos@uao.edu.co', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `codigo_act` int(11) NOT NULL,
  `codigo_PI` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`codigo_act`, `codigo_PI`) VALUES
(1, '1.1'),
(1, '3.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencia`
--

CREATE TABLE `evidencia` (
  `codigo_rub` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `archivo` blob DEFAULT NULL,
  `nivel` varchar(10) NOT NULL,
  `comentario_entrega` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evidencia`
--

INSERT INTO `evidencia` (`codigo_rub`, `nombre`, `archivo`, `nivel`, `comentario_entrega`) VALUES
(1, 'EVA552203-1.1-1', NULL, 'Alto', NULL),
(1, 'EVA552203-1.1-1', NULL, 'Bajo', NULL),
(1, 'EVM552203-1.1-1', NULL, 'Medio', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `codigo` varchar(5) NOT NULL,
  `codigo_asgs` int(11) NOT NULL,
  `correo_pr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`codigo`, `codigo_asgs`, `correo_pr`) VALUES
('1', 552203, 'jose.luis@uao.edu.co'),
('51', 552203, 'jose.luis@uao.edu.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `codigo` varchar(10) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`codigo`, `fechaInicio`, `fechaFin`) VALUES
('2021-03', '2021-06-15', '2021-11-25'),
('2022-01', '2022-01-24', '2022-06-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pi`
--

CREATE TABLE `pi` (
  `codigo` varchar(4) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `codigo_SO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pi`
--

INSERT INTO `pi` (`codigo`, `nombre`, `codigo_SO`) VALUES
('1.1', 'Identifica y formula problemas complejos de ingeniería.', 1),
('1.2', 'Resuelve problemas complejos de ingeniería aplicando principios de ingeniería, ciencias y matemáticas.', 1),
('2.1', 'Aplica un proceso estructurado de diseño en ingeniería para producir alternativas de solución que satisfagan las necesidades de las personas y consideren los atributos de diseño.', 2),
('2.2', 'Considera en el proceso de diseño en ingeniería aspectos tales como la salud pública, seguridad, bienestar, así como factores globales, culturales, sociales y económicos, entre otros.', 2),
('3.1', 'Produce documentos con una estructura, gramática y claridad apropiadas, para diferentes audiencias.', 3),
('3.2', 'Hace presentaciones orales usando una estructura, lenguaje, fluidez y estilo apropiados.', 3),
('3.3', 'Usa un segundo idioma (inglés) para comunicarse.', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `correo_usuario` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`correo_usuario`) VALUES
('jose.luis@uao.edu.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programaacademico`
--

CREATE TABLE `programaacademico` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programaacademico`
--

INSERT INTO `programaacademico` (`codigo`, `nombre`) VALUES
(1, 'Ingeniería Biomédica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubrica`
--

CREATE TABLE `rubrica` (
  `codigo` int(11) NOT NULL,
  `codigo_grp` varchar(5) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `archivo` blob DEFAULT NULL,
  `comentario_entrega` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rubrica`
--

INSERT INTO `rubrica` (`codigo`, `codigo_grp`, `nombre`, `fecha`, `archivo`, `comentario_entrega`) VALUES
(1, '1', 'Rub552203-1.1-1', '2021-10-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `so`
--

CREATE TABLE `so` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `so`
--

INSERT INTO `so` (`codigo`, `nombre`, `descripcion`) VALUES
(1, 'Problemas Complejos de Ingeniería', 'Los problemas complejos de \r\ningeniería incluyen una o más de las siguientes características: implican \r\nproblemas técnicos de gran alcance o conflictivos, no tienen una solución \r\nobvia, abordan problemas no incluidos en los actuales estándares y códigos, \r\ninvolucran a diversos grupos de interesados, incluyen diferentes partes, \r\ncomponentes o sub-problemas, involucran múltiples disciplinas, o \r\ntiene consecuencias significativas en una ámplia variedad de contextos'),
(2, 'DEFINICIÓN DE DISEÑO EN INGENIERÍA ', 'El diseño en ingeniería es un proceso de creación de un sistema, componente o proceso para satisfacer las necesidades y especificaciones teniendo en cuenta las restricciones. Es un proceso iterativo, creativo y de toma de decisiones en el que se aplican las ciencias básicas, las matemáticas y las ciencias de la ingeniería para convertir los recursos en soluciones.\r\nEl diseño en ingeniería implica la identificación de oportunidades, el desarrollo de requerimientos, la realización de análisis y síntesis, la generación de múltiples soluciones, la evaluación de las soluciones en función de los requerimientos, la consideración de riesgos y el intercambio de cualidades, con el fin de obtener una solución de alta calidad bajo las circunstancias dadas.\r\nSolo con fines ilustrativos, los ejemplos de posibles restricciones incluyen: accesibilidad, estética, códigos, constructibilidad, costo, ergonomía, extensibilidad, funcionalidad, interoperabilidad, consideraciones legales, mantenibilidad, posibilidad de fabricación, comercialización, política, regulaciones, cronograma, estándares, sostenibilidad o usabilidad.'),
(3, 'DEFINICIÓN DE HABILIDADES DE COMUNICACIÓN', 'La capacidad de transmitir información a otro de manera efectiva y eficiente.\r\nComunicación verbal, comunicación no verbal, comunicación escrita, comunicación visual.\r\nhttps://www.careercontessa.com/advice/soft-skills-definition/\r\nhttps://www.skillsyouneed.com/ips/communication-skills.html\r\nhttps://healthfully.com/67317-definition-effective-communication-skills.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `correo` varchar(120) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  `tipoUsuario` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correo`, `contrasena`, `nombre`, `apellido`, `foto`, `tipoUsuario`) VALUES
('jose.luis@uao.edu.co', '*84BA13D1328D526BA94', 'Jose Luis', 'Hernandez Zambrano', 'https://drive.google.com/file/d/1jjuPoNA4QdEv4YFZG_IIHHqfAWUOmpPD/view?usp=sharing', 'Profesor'),
('juan.carlos@uao.edu.co', '*D9C84B0F760BC1A8E80', 'Juan Carlos', 'Aguilar Medina', 'https://drive.google.com/file/d/1KXcLZNfPEMEu-CSI1M4G-igHddXWPrvE/view?usp=sharing', 'Director'),
('maria.a@uao.edu.co', 'maria123', 'Maria Alejandra', 'Castillo Mora', 'https://drive.google.com/file/d/1Zoudp3BaKnFePVJyA3asEaE-i5HApYBK/view?usp=sharing', 'Coordinador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigoACTASI_fk` (`codigo_asig`),
  ADD KEY `codigoACIONpro_fk` (`codigoprogra`),
  ADD KEY `codigoPERASG_fk` (`codigoperiodo`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`codigo_rub`);

--
-- Indices de la tabla `coordinadorabet`
--
ALTER TABLE `coordinadorabet`
  ADD PRIMARY KEY (`correo_usuario`);

--
-- Indices de la tabla `directorprograma`
--
ALTER TABLE `directorprograma`
  ADD PRIMARY KEY (`correo_usuario`),
  ADD KEY `progDiy_fk` (`codigo_prog`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`codigo_act`,`codigo_PI`),
  ADD KEY `codigopiev_fk` (`codigo_PI`);

--
-- Indices de la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD PRIMARY KEY (`codigo_rub`,`nivel`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codigo`,`codigo_asgs`),
  ADD KEY `codiASIGPR_fk` (`correo_pr`),
  ADD KEY `codiGRPASGS_fk` (`codigo_asgs`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pi`
--
ALTER TABLE `pi`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigoPI_fk` (`codigo_SO`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD KEY `usuarioDi_fk` (`correo_usuario`);

--
-- Indices de la tabla `programaacademico`
--
ALTER TABLE `programaacademico`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `rubrica`
--
ALTER TABLE `rubrica`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigoRUBGRP_fk` (`codigo_grp`);

--
-- Indices de la tabla `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rubrica`
--
ALTER TABLE `rubrica`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `codigoACIONpro_fk` FOREIGN KEY (`codigoprogra`) REFERENCES `programaacademico` (`codigo`),
  ADD CONSTRAINT `codigoACTASI_fk` FOREIGN KEY (`codigo_asig`) REFERENCES `asignatura` (`codigo`),
  ADD CONSTRAINT `codigoPERASG_fk` FOREIGN KEY (`codigoperiodo`) REFERENCES `periodo` (`codigo`);

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `codigoRUBCALI_fk` FOREIGN KEY (`codigo_rub`) REFERENCES `rubrica` (`codigo`);

--
-- Filtros para la tabla `coordinadorabet`
--
ALTER TABLE `coordinadorabet`
  ADD CONSTRAINT `usuarioCo_fk` FOREIGN KEY (`correo_usuario`) REFERENCES `usuario` (`correo`);

--
-- Filtros para la tabla `directorprograma`
--
ALTER TABLE `directorprograma`
  ADD CONSTRAINT `progDiy_fk` FOREIGN KEY (`codigo_prog`) REFERENCES `programaacademico` (`codigo`),
  ADD CONSTRAINT `usuarioDiy_fk` FOREIGN KEY (`correo_usuario`) REFERENCES `usuario` (`correo`);

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `codigoactev_fk` FOREIGN KEY (`codigo_act`) REFERENCES `actividad` (`codigo`),
  ADD CONSTRAINT `codigopiev_fk` FOREIGN KEY (`codigo_PI`) REFERENCES `pi` (`codigo`);

--
-- Filtros para la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD CONSTRAINT `codigo_rubEVI_fk` FOREIGN KEY (`codigo_rub`) REFERENCES `rubrica` (`codigo`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `codiASIGPR_fk` FOREIGN KEY (`correo_pr`) REFERENCES `profesor` (`correo_usuario`),
  ADD CONSTRAINT `codiGRPASGS_fk` FOREIGN KEY (`codigo_asgs`) REFERENCES `asignatura` (`codigo`);

--
-- Filtros para la tabla `pi`
--
ALTER TABLE `pi`
  ADD CONSTRAINT `codigoPI_fk` FOREIGN KEY (`codigo_SO`) REFERENCES `so` (`codigo`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `usuarioDi_fk` FOREIGN KEY (`correo_usuario`) REFERENCES `usuario` (`correo`);

--
-- Filtros para la tabla `rubrica`
--
ALTER TABLE `rubrica`
  ADD CONSTRAINT `codigoRUBGRP_fk` FOREIGN KEY (`codigo_grp`) REFERENCES `grupo` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
