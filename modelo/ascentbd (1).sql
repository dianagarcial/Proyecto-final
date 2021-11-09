-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2021 a las 19:52:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

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

CREATE TABLE `actividad` (
  `codigo` int(11) NOT NULL,
  `medioEvaluacion` varchar(40) NOT NULL,
  `codigoGrupo` int(11) NOT NULL,
  `codPeriodo` varchar(10) NOT NULL,
  `codPi` varchar(4) NOT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`codigo`, `medioEvaluacion`, `codigoGrupo`, `codPeriodo`, `codPi`, `fechaEntrega`, `estado`) VALUES
(7, 'Parcial3', 1, '2021-03', '1.2', '2021-11-09', 'Entregado'),
(8, 'Parcial 3', 2, '2021-03', '3.1', '2021-11-09', 'Entregado'),
(9, 'Parcial 3', 3, '2021-03', '5.2', '2021-11-09', 'Entregado'),
(10, 'Presentación Oral', 1, '2021-03', '3.2 ', '2021-11-09', 'Entregado'),
(11, 'Trabajo final', 3, '2021-03', '2.1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `COD_programa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`codigo`, `nombre`, `COD_programa`) VALUES
(552203, 'Biofísica médica', 1),
(553002, 'Biomédica II', 1),
(553003, 'Biomédica I', 1),
(553442, 'Materiales Biomédico', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinadorabet`
--

CREATE TABLE `coordinadorabet` (
  `usuario` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinadorabet`
--

INSERT INTO `coordinadorabet` (`usuario`) VALUES
('maria.a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorprograma`
--

CREATE TABLE `directorprograma` (
  `usuario` varchar(120) NOT NULL,
  `codigo_prog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directorprograma`
--

INSERT INTO `directorprograma` (`usuario`, `codigo_prog`) VALUES
('juan.carlos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencia`
--

CREATE TABLE `evidencia` (
  `codigo` int(11) NOT NULL,
  `codigo_rub` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `archivo` varchar(300) DEFAULT NULL,
  `nivel` varchar(10) NOT NULL,
  `comentario_entrega` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evidencia`
--

INSERT INTO `evidencia` (`codigo`, `codigo_rub`, `nombre`, `archivo`, `nivel`, `comentario_entrega`) VALUES
(7, 11, 'EA552203-1.2-1', 'Evidencia Alta.pdf', 'Alto', ''),
(8, 12, 'EA552203-3.1-51', 'Evidencia Alta - copia.pdf', 'Alto', ''),
(9, 13, 'EA553442-5.2-33', 'Evidencia Alta.pdf', 'Alto', ''),
(10, 14, 'EA552203-3.2-1', 'Evidencia Alta - copia.pdf', 'Alto', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `codigo` int(11) NOT NULL,
  `codigo_asgs` int(11) NOT NULL,
  `correo_pr` varchar(100) NOT NULL,
  `codigo_Grup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`codigo`, `codigo_asgs`, `correo_pr`, `codigo_Grup`) VALUES
(1, 552203, 'jose.luis', '1'),
(2, 552203, 'jose.luis', '51'),
(3, 553442, 'jose.luis', '33');

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
('3.3', 'Usa un segundo idioma (inglés) para comunicarse.', 3),
('4.1', ' Reconoce su responsabilidad ética y profesional tanto en las soluciones de ingeniería como en su desarrollo personal y profesional.', 4),
('4.2', 'Considera el impacto de las soluciones de ingeniería en el contexto global, económico, ambiental y social.', 4),
('5.1', 'Participan en el fortalecimiento del equipo de trabajo aportando ideas y respetando las opiniones de los otros miembros.', 5),
('5.2', 'Gestionan las actividades al interior del equipo de trabajo para abordar un proyecto.', 5),
('6.1', 'Gestionan las actividades al interior del equipo de trabajo para abordar un proyecto.', 6),
('6.2', 'Analizar e interpretar datos con el fin de obtener conclusiones adecuadas.', 6),
('7.1', 'Realiza búsquedas de información y emplea adecuadamente la información consultada.', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `usuario` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`usuario`) VALUES
('jose.luis');

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
  `codigo_act` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `archivo` varchar(300) DEFAULT NULL,
  `comentario_entrega` varchar(300) DEFAULT NULL,
  `calificacion` varchar(30) DEFAULT NULL,
  `comentarioDir` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rubrica`
--

INSERT INTO `rubrica` (`codigo`, `codigo_act`, `nombre`, `fecha`, `archivo`, `comentario_entrega`, `calificacion`, `comentarioDir`) VALUES
(11, 7, 'Rub552203-1.2-1', '2021-11-09', 'SO1.xlsx', '', 'Aprobado', ''),
(12, 8, 'Rub552203-3.1-51', '2021-11-09', 'SO2 - copia.xlsx', '', 'Aprobado', 'No tiene bien la estructura '),
(13, 9, 'Rub553442-5.2-33', '2021-11-09', 'SO5 - copia.xlsx', '', NULL, NULL),
(14, 10, 'Rub552203-3.2-1', '2021-11-09', 'SO3 - copia.xlsx', '', NULL, NULL);

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
(2, 'Diseño en Ingeniería', 'El diseño en ingeniería es un proceso de creación de un sistema, componente o proceso para satisfacer las necesidades y especificaciones teniendo en cuenta las restricciones. Es un proceso iterativo, creativo y de toma de decisiones en el que se aplican las ciencias básicas, las matemáticas y las ciencias de la ingeniería para convertir los recursos en soluciones.\r\nEl diseño en ingeniería implica la identificación de oportunidades, el desarrollo de requerimientos, la realización de análisis y síntesis, la generación de múltiples soluciones, la evaluación de las soluciones en función de los requerimientos, la consideración de riesgos y el intercambio de cualidades, con el fin de obtener una solución de alta calidad bajo las circunstancias dadas.\r\nSolo con fines ilustrativos, los ejemplos de posibles restricciones incluyen: accesibilidad, estética, códigos, constructibilidad, costo, ergonomía, extensibilidad, funcionalidad, interoperabilidad, consideraciones legales, mantenibilidad, posibilidad de fabricación, comercialización, política, regulaciones, cronograma, estándares, sostenibilidad o usabilidad.'),
(3, 'Comunicación Efectiva', 'La capacidad de transmitir información a otro de manera efectiva y eficiente.\r\nComunicación verbal, comunicación no verbal, comunicación escrita, comunicación visual.\r\nhttps://www.careercontessa.com/advice/soft-skills-definition/\r\nhttps://www.skillsyouneed.com/ips/communication-skills.html\r\nhttps://healthfully.com/67317-definition-effective-communication-skills.html'),
(4, 'Responsabilidad ética y profesional', '1. Veracidad: actuar de conformidad con la verdad, con honestidad y transparencia en la ejecución de nuestros trabajos, en la expresión pública de nuestros conceptos, y siendo agentes dignos de confianza para usuarios, clientes, colegas, compañeros, empleados y/o empleadores.\r\n2. Integridad: enarbolar y fortalecer el honor y la dignidad de la Ingeniería, ejerciéndola con integridad profesional, promoviendo las buenas prácticas y el respeto a los demás.\r\n3. Responsabilidad: ejercer nuestra actividad atendiendo a las consecuencias de nuestras acciones, dando prioridad a la protección de la vida, la seguridad, la salubridad, el medio ambiente y el cuidado del bien público y fomentando el desarrollo personal y la actualización de los conocimientos, tanto propios como de colegas y terceros.\r\n4. Precisión: desarrollar nuestras actividades con precisión y rigurosidad, exclusivamente dentro de los umbrales de nuestra competencia, soportando nuestro desarrollo profesional en el mérito y calidad de nuestros servicios,\r\n* Declaración de los Principios Éticos de los Ingenieros, 2017\r\nhttp://www.capacitacion.aciem.org/Especiales_Comisiones/2017/Ago/PDF_Declaracion_Principios_Eticos_Ingenieros.pdf '),
(5, 'Trabajo en equipo', 'Un equipo de trabajo está conformado por más de una persona las cuales colaboran para lograr un objetivo común. El equipo debe incluir a personas con diversos conocimientos, habilidades o perspectivas.'),
(6, 'Experimentos', 'NULL'),
(7, 'Auto-aprendizaje', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nomUsuario` varchar(120) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  `tipoUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nomUsuario`, `contrasena`, `nombre`, `apellido`, `foto`, `tipoUsuario`) VALUES
('jose.luis', '90e528618534d005b1a7e7b7a367813f', 'Jose Luis', 'Hernandez Zambrano', 'https://drive.google.com/file/d/1jjuPoNA4QdEv4YFZG_IIHHqfAWUOmpPD/view?usp=sharing', 'Profesor'),
('juan.carlos', 'f5737d25829e95b9c234b7fa06af8736', 'Juan Carlos', 'Aguilar Medina', 'https://drive.google.com/file/d/1KXcLZNfPEMEu-CSI1M4G-igHddXWPrvE/view?usp=sharing', 'Director'),
('maria.a', '*A0C0E23FFE6BC07A77D', 'Maria Alejandra', 'Castillo Mora', 'https://drive.google.com/file/d/1Zoudp3BaKnFePVJyA3asEaE-i5HApYBK/view?usp=sharing', 'Coordinador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigoACTGRUPO_fk` (`codigoGrupo`),
  ADD KEY `codigoPERASG_fk` (`codPeriodo`),
  ADD KEY `codigoPIASG_fk` (`codPi`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `ProgramaAsi_fk` (`COD_programa`);

--
-- Indices de la tabla `coordinadorabet`
--
ALTER TABLE `coordinadorabet`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `directorprograma`
--
ALTER TABLE `directorprograma`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `progDiy_fk` (`codigo_prog`);

--
-- Indices de la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_rubEVI_fk` (`codigo_rub`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codigo`),
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
  ADD KEY `usuarioDi_fk` (`usuario`);

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
  ADD KEY `codigoACTUrUb_fk` (`codigo_act`);

--
-- Indices de la tabla `so`
--
ALTER TABLE `so`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nomUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `evidencia`
--
ALTER TABLE `evidencia`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rubrica`
--
ALTER TABLE `rubrica`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `codigoACTGRUPO_fk` FOREIGN KEY (`codigoGrupo`) REFERENCES `grupo` (`codigo`),
  ADD CONSTRAINT `codigoPERASG_fk` FOREIGN KEY (`codPeriodo`) REFERENCES `periodo` (`codigo`),
  ADD CONSTRAINT `codigoPIASG_fk` FOREIGN KEY (`codPi`) REFERENCES `pi` (`codigo`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `ProgramaAsi_fk` FOREIGN KEY (`COD_programa`) REFERENCES `programaacademico` (`codigo`);

--
-- Filtros para la tabla `coordinadorabet`
--
ALTER TABLE `coordinadorabet`
  ADD CONSTRAINT `usuarioCo_fk` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`nomUsuario`);

--
-- Filtros para la tabla `directorprograma`
--
ALTER TABLE `directorprograma`
  ADD CONSTRAINT `progDiy_fk` FOREIGN KEY (`codigo_prog`) REFERENCES `programaacademico` (`codigo`),
  ADD CONSTRAINT `usuarioDiy_fk` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`nomUsuario`);

--
-- Filtros para la tabla `evidencia`
--
ALTER TABLE `evidencia`
  ADD CONSTRAINT `codigo_rubEVI_fk` FOREIGN KEY (`codigo_rub`) REFERENCES `rubrica` (`codigo`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `codiASIGPR_fk` FOREIGN KEY (`correo_pr`) REFERENCES `profesor` (`usuario`),
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
  ADD CONSTRAINT `usuarioDi_fk` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`nomUsuario`);

--
-- Filtros para la tabla `rubrica`
--
ALTER TABLE `rubrica`
  ADD CONSTRAINT `codigoACTUrUb_fk` FOREIGN KEY (`codigo_act`) REFERENCES `actividad` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
