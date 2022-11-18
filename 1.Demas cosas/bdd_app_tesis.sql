-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2022 a las 20:46:29
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd_app_tesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` int(10) UNSIGNED NOT NULL,
  `nombre_actividad` varchar(30) NOT NULL,
  `inicio_actividad` date NOT NULL,
  `relacion_actividad_entrenador` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividadesclientes`
--

CREATE TABLE `actividadesclientes` (
  `id_actividad_cliente` int(10) UNSIGNED NOT NULL,
  `numero_repeticiones` int(3) NOT NULL,
  `numero_serie` int(3) NOT NULL,
  `musculo_trabajado` varchar(30) NOT NULL,
  `dificultad` varchar(30) NOT NULL,
  `relacion_actividadcliente_actividad` int(10) UNSIGNED NOT NULL,
  `relacion_actividadcliente_entrenador` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `fecha_nacimiento_cliente` date NOT NULL,
  `relacion_usuario_cliente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `fecha_nacimiento_cliente`, `relacion_usuario_cliente`) VALUES
(5, 'Joselin', 'Gonzalez', '0000-00-00', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_disponibles`
--

CREATE TABLE `cursos_disponibles` (
  `id_curso` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `imagen` varchar(20) NOT NULL,
  `texto_2` varchar(50) NOT NULL,
  `texto_3` varchar(50) NOT NULL,
  `texto_4` varchar(300) NOT NULL,
  `pagina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos_disponibles`
--

INSERT INTO `cursos_disponibles` (`id_curso`, `titulo`, `imagen`, `texto_2`, `texto_3`, `texto_4`, `pagina`) VALUES
(1, 'FitCombat', 'blog-2.jpg', '¿Para que sirve el FitCombat?', 'Beneficios', 'Fortalece el músculo más importante del corazón. Eleva la autoestima y sube el buen ánimo y te llena de energía. Quema aproximadamente 600 calorías en 45 minutos. Mejora tu oxigenación.', 'videos/FitCombat/index-videos.php'),
(2, 'Yoga', 'blog-3.jpg', '¿Para que sirve?', 'Ventajas', 'práctica que conecta el cuerpo, la respiración y la mente. Esta práctica utiliza posturas físicas, ejercicios de respiración y meditación para mejorar la salud general. El yoga se desarrolló como una práctica espiritual hace miles de años.', 'videos/Yoga/index-videos.php'),
(3, 'Zumba', 'zumba-trainer.jpg', 'En que me Beneficia?', 'Dance', 'En una clase de una hora de zumba, una persona puede eliminar hasta 800 calorías. La razón es que esta impacta todos los aspectos del acondicionamiento físico,', 'videos/Zumba/index-videos.php'),
(4, 'CrossFit', 'blog-5.jpg', 'Porque es importante?', 'Cardio', 'CrossFit se define como un sistema de entrenamiento de fuerza y acondicionamiento basado en ejercicios funcionales constantemente variados.', 'videos/CrossFit/index-videos.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_pagados`
--

CREATE TABLE `cursos_pagados` (
  `id_pago` int(10) NOT NULL,
  `nombre_curso` varchar(100) NOT NULL,
  `costo_curso` int(5) NOT NULL,
  `id_relacion_cliente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos_pagados`
--

INSERT INTO `cursos_pagados` (`id_pago`, `nombre_curso`, `costo_curso`, `id_relacion_cliente`) VALUES
(59, 'Zumba', 30, 5),
(60, 'FitCombat', 60, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_opcionales_cliente`
--

CREATE TABLE `datos_opcionales_cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `edad_cliente` int(4) NOT NULL,
  `altura_cliente` float NOT NULL,
  `peso_cliente` float NOT NULL,
  `medida_pierna_cliente` float NOT NULL,
  `medida_brazo_cliente` float NOT NULL,
  `medida_cintura_cliente` float NOT NULL,
  `patologia_cliente` varchar(100) NOT NULL,
  `link_foto_perfil_cliente` varchar(200) NOT NULL,
  `recidencia_cliente` varchar(200) NOT NULL,
  `id_relacion_clientes_datos` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `id_entrenador` int(10) UNSIGNED NOT NULL,
  `nombre_entrenador` varchar(50) NOT NULL,
  `apellido_entrenador` varchar(50) NOT NULL,
  `fecha_nacimiento_entrenador` date NOT NULL,
  `residencia_entrenador` varchar(100) NOT NULL,
  `link_foto_perfil` varchar(800) DEFAULT NULL,
  `relacion_usuario_entrenador` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrenadores`
--

INSERT INTO `entrenadores` (`id_entrenador`, `nombre_entrenador`, `apellido_entrenador`, `fecha_nacimiento_entrenador`, `residencia_entrenador`, `link_foto_perfil`, `relacion_usuario_entrenador`) VALUES
(6, 'carlos', 'Sanchez', '2000-10-20', '', NULL, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id_estudios` int(10) UNSIGNED NOT NULL,
  `nombre_estudio` varchar(50) NOT NULL,
  `lugar_estudio` varchar(50) NOT NULL,
  `fecha_experiencia_entrenador` date NOT NULL,
  `link_foto_estudio` varchar(800) DEFAULT NULL,
  `relacion_estudio_entrenador` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE `logros` (
  `id_logro` int(10) UNSIGNED NOT NULL,
  `peso_final` float NOT NULL,
  `medida_pierna_logro` float NOT NULL,
  `medida_brazo_logro` float NOT NULL,
  `medida_cintura_logro` float NOT NULL,
  `relacion_logro_cliente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_actividad_cliente`
--

CREATE TABLE `relacion_actividad_cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_actividad` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_cliente_entrenador`
--

CREATE TABLE `relacion_cliente_entrenador` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_entrenador` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `nivel` enum('entrenador','cliente') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `contrasena`, `nivel`) VALUES
(19, 'Juan De Nadie', 'Ramirez', 'juandenadie@gmail.com', '123456789', 'entrenador'),
(20, 'Joselin', 'Gonzalez', 'joselingonzaalez@gmail.com', '238548413', 'cliente'),
(21, 'carlos', 'Sanchez', 'cs96548@gmail.com', '12345678', 'entrenador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `fk_relacion_actividad_entrenador` (`relacion_actividad_entrenador`);

--
-- Indices de la tabla `actividadesclientes`
--
ALTER TABLE `actividadesclientes`
  ADD PRIMARY KEY (`id_actividad_cliente`),
  ADD KEY `fk_relacion_actividadcliente_actividad` (`relacion_actividadcliente_actividad`),
  ADD KEY `fk_relacion_actividadcliente_entrenador` (`relacion_actividadcliente_entrenador`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_relacion_usuario_cliente` (`relacion_usuario_cliente`);

--
-- Indices de la tabla `cursos_disponibles`
--
ALTER TABLE `cursos_disponibles`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `cursos_pagados`
--
ALTER TABLE `cursos_pagados`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_id_relacion_cliente` (`id_relacion_cliente`) USING BTREE;

--
-- Indices de la tabla `datos_opcionales_cliente`
--
ALTER TABLE `datos_opcionales_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_relacion_clientes_datos` (`id_relacion_clientes_datos`);

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`id_entrenador`),
  ADD KEY `fk_relacion_usuario_entrenador` (`relacion_usuario_entrenador`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id_estudios`),
  ADD KEY `fk_relacion_estudio_entrenador` (`relacion_estudio_entrenador`);

--
-- Indices de la tabla `logros`
--
ALTER TABLE `logros`
  ADD PRIMARY KEY (`id_logro`),
  ADD KEY `fk_relacion_logro_cliente` (`relacion_logro_cliente`);

--
-- Indices de la tabla `relacion_actividad_cliente`
--
ALTER TABLE `relacion_actividad_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_cliente` (`id_cliente`),
  ADD KEY `fk_id_actividad` (`id_actividad`);

--
-- Indices de la tabla `relacion_cliente_entrenador`
--
ALTER TABLE `relacion_cliente_entrenador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_cliente` (`id_cliente`),
  ADD KEY `fk_id_entrenador` (`id_entrenador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `actividadesclientes`
--
ALTER TABLE `actividadesclientes`
  MODIFY `id_actividad_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cursos_disponibles`
--
ALTER TABLE `cursos_disponibles`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos_pagados`
--
ALTER TABLE `cursos_pagados`
  MODIFY `id_pago` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `datos_opcionales_cliente`
--
ALTER TABLE `datos_opcionales_cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `id_entrenador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id_estudios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `logros`
--
ALTER TABLE `logros`
  MODIFY `id_logro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `relacion_actividad_cliente`
--
ALTER TABLE `relacion_actividad_cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `relacion_cliente_entrenador`
--
ALTER TABLE `relacion_cliente_entrenador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_relacion_actividad_entrenador` FOREIGN KEY (`relacion_actividad_entrenador`) REFERENCES `entrenadores` (`id_entrenador`) ON DELETE CASCADE;

--
-- Filtros para la tabla `actividadesclientes`
--
ALTER TABLE `actividadesclientes`
  ADD CONSTRAINT `actividadesclientes_ibfk_1` FOREIGN KEY (`id_actividad_cliente`) REFERENCES `relacion_actividad_cliente` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_relacion_actividadcliente_actividad` FOREIGN KEY (`relacion_actividadcliente_actividad`) REFERENCES `actividades` (`id_actividad`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_relacion_actividadcliente_entrenador` FOREIGN KEY (`relacion_actividadcliente_entrenador`) REFERENCES `entrenadores` (`id_entrenador`) ON DELETE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_relacion_usuario_cliente` FOREIGN KEY (`relacion_usuario_cliente`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cursos_pagados`
--
ALTER TABLE `cursos_pagados`
  ADD CONSTRAINT `cursos_pagados_ibfk_1` FOREIGN KEY (`id_relacion_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_opcionales_cliente`
--
ALTER TABLE `datos_opcionales_cliente`
  ADD CONSTRAINT `datos_opcionales_cliente_ibfk_1` FOREIGN KEY (`id_relacion_clientes_datos`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD CONSTRAINT `fk_relacion_usuario_entrenador` FOREIGN KEY (`relacion_usuario_entrenador`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD CONSTRAINT `fk_relacion_estudio_entrenador` FOREIGN KEY (`relacion_estudio_entrenador`) REFERENCES `entrenadores` (`id_entrenador`) ON DELETE CASCADE;

--
-- Filtros para la tabla `logros`
--
ALTER TABLE `logros`
  ADD CONSTRAINT `fk_relacion_logro_cliente` FOREIGN KEY (`relacion_logro_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `relacion_actividad_cliente`
--
ALTER TABLE `relacion_actividad_cliente`
  ADD CONSTRAINT `relacion_actividad_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `relacion_cliente_entrenador`
--
ALTER TABLE `relacion_cliente_entrenador`
  ADD CONSTRAINT `relacion_cliente_entrenador_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_cliente_entrenador_ibfk_2` FOREIGN KEY (`id_entrenador`) REFERENCES `entrenadores` (`id_entrenador`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
