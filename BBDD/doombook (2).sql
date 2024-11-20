-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2022 a las 19:31:56
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `doombook`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `Dni_autor` mediumint(9) NOT NULL,
  `Nombre_autor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`Dni_autor`, `Nombre_autor`) VALUES
(1, 'G RR Martin'),
(2, 'Akira Toriyama'),
(3, 'Ken Waiku'),
(4, 'Hiroyuki Takei'),
(5, 'Yusei Matsue'),
(6, 'Tite Kubo'),
(7, 'Ross Molico'),
(8, 'Yuka Kitagawa'),
(9, 'Jeong Gyeong Yu'),
(10, 'Nozomi Mino'),
(11, 'Aya Kanno'),
(12, 'Khota Hirano'),
(13, 'Arata Miyasuki'),
(14, 'Yoshimura Kana'),
(15, 'Tsukasa Hojos'),
(16, 'Tasuku Karasuma'),
(17, 'Boichi'),
(18, 'Miguel de Cervantes'),
(19, 'Leopoldo Alas Clarín'),
(20, 'Fernando de Rojas'),
(21, 'Diego Hurtado de Mendoza'),
(22, 'Emily Brontë'),
(23, 'Aldous Huxley'),
(24, 'William Golding'),
(25, 'Federio García Lorca'),
(26, 'Oscar Wilde'),
(27, 'Bram Stoker'),
(28, 'Stephen King'),
(29, 'Patrick Süskind'),
(30, 'Max Brooks'),
(31, 'Mary Shelley'),
(32, 'William Peter Blatty'),
(33, 'Bret Easton Ellis'),
(34, 'Ira Levin'),
(35, 'Mark Twain'),
(36, 'Robert Louis Stevenson'),
(37, 'Daniel Defoe'),
(38, 'Herman Melville'),
(39, 'Julio Verne'),
(40, 'Rudyard Kipling'),
(41, 'Jonathan Swift');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `Cod_editorial` mediumint(9) NOT NULL,
  `Nombre_editorial` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`Cod_editorial`, `Nombre_editorial`) VALUES
(1, 'Planeta'),
(2, 'Alfaguara'),
(3, 'Ediciones SM'),
(4, 'Anaya'),
(5, 'Ediciones Vicens Vives'),
(6, 'Alianza'),
(7, 'Debolsillo'),
(8, 'Catedra'),
(9, 'Austral'),
(10, 'Alma'),
(11, 'Booket'),
(12, 'Círculo de lectores'),
(13, 'Picador'),
(14, 'RBA'),
(15, 'Norma'),
(16, 'Ivrea'),
(17, 'Panini'),
(18, 'Kitsune Manga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Cod_pedido` mediumint(9) NOT NULL,
  `Cod_usuario` mediumint(9) NOT NULL,
  `Valor_total_pedido` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_publicacion`
--

CREATE TABLE `pedido_publicacion` (
  `Cod_pedido` mediumint(9) NOT NULL,
  `Cod_interno` mediumint(9) NOT NULL,
  `Fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `Cod_interno` mediumint(9) NOT NULL,
  `Cod_publico` int(10) NOT NULL,
  `Título` varchar(30) NOT NULL,
  `Descripcion_publicacion` text NOT NULL,
  `Cod_editorial` mediumint(9) NOT NULL,
  `img` longblob NOT NULL,
  `Stock_publicacion` int(3) NOT NULL,
  `Precio_publicacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion_autor`
--

CREATE TABLE `publicacion_autor` (
  `DNI_autor` mediumint(9) NOT NULL,
  `Cod_interno` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion_tipo`
--

CREATE TABLE `publicacion_tipo` (
  `Cod_tipo` mediumint(9) NOT NULL,
  `Cod_interno` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `Cod_tipo` mediumint(9) NOT NULL,
  `Descripcion_Tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`Cod_tipo`, `Descripcion_Tipo`) VALUES
(1, 'Shonen'),
(2, 'Shojo'),
(3, 'Seinen'),
(4, 'Clasico'),
(5, 'Terror'),
(6, 'Aventuras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `Cod_tipo_usuario` int(1) NOT NULL,
  `Descripcion_Usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Cod_tipo_usuario`, `Descripcion_Usuario`) VALUES
(1, 'Admin'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Cod_usuario` mediumint(9) NOT NULL,
  `Nombre_usuario` varchar(11) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Alias` varchar(10) NOT NULL,
  `Pass` varchar(32) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Cod_tipo_usuario` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Cod_usuario`, `Nombre_usuario`, `Apellido`, `Telefono`, `Alias`, `Pass`, `Direccion`, `Cod_tipo_usuario`) VALUES
(4, 'Andres', 'Jaramillo', 964789685, 'fufu', 'venuska', 'calle falsa 123', 1),
(5, 'Jon', 'Jauregi', 964789685, 'txus', 'venuska', 'calle falsa 123', 2),
(7, 'Cris', 'Sierra', 665825254, 'jars', 'venuska', 'calle falsa', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Dni_autor`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`Cod_editorial`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Cod_pedido`),
  ADD UNIQUE KEY `Cod_usuario` (`Cod_usuario`);

--
-- Indices de la tabla `pedido_publicacion`
--
ALTER TABLE `pedido_publicacion`
  ADD PRIMARY KEY (`Cod_pedido`,`Cod_interno`),
  ADD KEY `Cod_interno` (`Cod_interno`);

--
-- Indices de la tabla `publicacion_autor`
--
ALTER TABLE `publicacion_autor`
  ADD PRIMARY KEY (`DNI_autor`,`Cod_interno`),
  ADD KEY `Cod_interno` (`Cod_interno`);

--
-- Indices de la tabla `publicacion_tipo`
--
ALTER TABLE `publicacion_tipo`
  ADD PRIMARY KEY (`Cod_tipo`,`Cod_interno`),
  ADD KEY `Cod_interno` (`Cod_interno`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`Cod_tipo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`Cod_tipo_usuario`),
  ADD KEY `Cod_tipo_usuario` (`Cod_tipo_usuario`),
  ADD KEY `Cod_tipo_usuario_2` (`Cod_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Cod_usuario`),
  ADD KEY `tipousuario` (`Cod_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Cod_usuario` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`Cod_usuario`) REFERENCES `usuario` (`Cod_usuario`);

--
-- Filtros para la tabla `pedido_publicacion`
--
ALTER TABLE `pedido_publicacion`
  ADD CONSTRAINT `pedido_publicacion_ibfk_2` FOREIGN KEY (`Cod_pedido`) REFERENCES `pedido` (`Cod_pedido`);

--
-- Filtros para la tabla `publicacion_autor`
--
ALTER TABLE `publicacion_autor`
  ADD CONSTRAINT `publicacion_autor_ibfk_1` FOREIGN KEY (`DNI_autor`) REFERENCES `autor` (`Dni_autor`);

--
-- Filtros para la tabla `publicacion_tipo`
--
ALTER TABLE `publicacion_tipo`
  ADD CONSTRAINT `publicacion_tipo_ibfk_1` FOREIGN KEY (`Cod_tipo`) REFERENCES `tipo` (`Cod_tipo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `tipousuario` FOREIGN KEY (`Cod_tipo_usuario`) REFERENCES `tipo_usuario` (`Cod_tipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
