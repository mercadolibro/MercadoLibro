-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-06-2013 a las 08:06:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mercadolibro`
--
DROP DATABASE `mercadolibro`;
CREATE DATABASE `mercadolibro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mercadolibro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` varchar(15) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `cuenta` varchar(45) NOT NULL,
  `fondos` double DEFAULT '0',
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `cuenta_UNIQUE` (`cuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT DELAYED IGNORE INTO `cliente` (`cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `contrasena`, `correo`, `cuenta`, `fondos`) VALUES
('1065650321', 'Gilmar', 'Ocampo Nieves', 'nose', '123', '275778340404b093d8bc8a87b3ac1fba5927ea60', 'giocni@gmail.com', '2ewe', 5000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `idfac` int(11) NOT NULL,
  `cod_libro` varchar(45) NOT NULL,
  `valor` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idfac`,`cod_libro`),
  KEY `emplibro_idx` (`cod_libro`),
  KEY `v_idx` (`idfac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `portada` varchar(60) NOT NULL,
  `valor` int(11) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `editorial` varchar(45) NOT NULL,
  `anio` year(4) NOT NULL,
  `edicion` varchar(45) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT DELAYED IGNORE INTO `libro` (`codigo`, `nombre`, `portada`, `valor`, `autor`, `categoria`, `editorial`, `anio`, `edicion`, `descripcion`, `cantidad`) VALUES
('1a', 'Resident Evil', './portadas/residentevil.jpg', 35000, 'Umbrella Corporation', 'Suspenso', 'Tinunmas', 2004, '2', 'La historia se basa en la expansion de un virus (llamado virus T), generando que los muertos vuelvan a la vida.', 45),
('1b', 'Programacion PHP', './portadas/php.jpg', 42000, 'php y msql', 'Educativo', 'Norma', 2008, '3', 'Libro para la carrera en tecnologias en la informacion; Practico libro para el inicio en el mundo WEB para novatos y expertos.', 25),
('1c', '100 años de Soledad', './portadas/soledad.gif', 60000, 'Grabiel Garcia Marquez', 'Novela', 'Sudamericana', 1982, '1', 'El libro narra la historia de la familia Buendía a lo largo de siete generaciones en el pueblo ficticio de Macondo.', 78),
('1d', 'Guerra de las Galaxias', './portadas/galaxia.jpg', 32000, 'Erick jhonson', 'ficcion', 'Rik', 1982, '2', 'Libro de Ficcion sobre el espacio exterior y guerras futuristas, muy bueno para personas con buena imaginacion.', 20),
('1e', 'Harry Potter y las Reliquias de la muerte', './portadas/harrypotter7.jpg', 43000, 'J. K. Rowling', 'ficcion', 'G I O', 2005, '1', 'Historia de ficcion, basada en la vida de un joven mago en la escuela de magia hogwarts.', 34),
('1f', 'Programacion C++', './portadas/programacion.jpg', 43000, 'Andres Rojas', 'Educativo', 'Norma', 2010, '1', 'Libro para los inicios en la programacion orientada a objetos con c ++.', 15),
('1g', 'Deporte,Desaparecidos y Dictadura', './portadas/deporte.jpg', 15000, 'Silvia M.', 'Deportes', 'Anki', 2012, '1', 'Libro que habla sobre los deportistas mas han influenciado y fomentado el depote al mundo.', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super_factura`
--

DROP TABLE IF EXISTS `super_factura`;
CREATE TABLE IF NOT EXISTS `super_factura` (
  `n_factura` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cliente` varchar(45) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `fecha_pago` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`n_factura`),
  KEY `emp_cliente_idx` (`cod_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `foranea_libro` FOREIGN KEY (`cod_libro`) REFERENCES `libro` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `super_factura`
--
ALTER TABLE `super_factura`
  ADD CONSTRAINT `emp_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
