-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-06-2021 a las 21:33:07
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muebleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_articulo` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `precio` int(10) NOT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `tipo_articulo`, `color`, `precio`) VALUES
(1, 'Sala', 'Gris', 24000),
(4, 'Lavamanos', 'Cafe', 7000),
(2, 'Comedor', 'Cafe', 13000),
(5, 'Mueble lavamanos', 'Blanco', 8000),
(6, 'Lavamanos', 'Cafe', 5000),
(7, 'Cocineta', 'Negro', 28000),
(8, 'Cocineta', 'Rojo', 25600),
(9, 'Comedor', 'Gris', 15000),
(10, 'Conjunto Espejos', 'Gris', 4000),
(11, 'Espejo', 'Blanco', 2000),
(12, 'Lampara', 'Blanco', 1500),
(13, 'Lampara', 'Negro y blanco', 1900),
(14, 'Refrigerador', 'Gris', 15000),
(15, 'Licuadora', 'Gris', 4000),
(16, 'Batidora', 'Blanco', 500),
(17, 'Lavadora', 'Blanco', 8000),
(18, 'Bicicleta', 'Rosa', 3000),
(19, 'Triciclo', 'Negro y rojo', 2000),
(20, 'Conjunto (mesa y sillas)', 'Colores', 600),
(21, 'Litera', 'Cafe', 4800),
(22, 'Recamara', 'Gris', 17000),
(23, 'Recamara', 'Negro', 19800),
(24, 'Recamara', 'Café, negro y blanco', 21000),
(25, 'Recamara', 'Gris', 15300),
(26, 'Sala', 'Beige', 19500),
(27, 'Sala', 'Verde', 18400),
(28, 'Sala', 'Verde', 16500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

DROP TABLE IF EXISTS `t_usuario`;
CREATE TABLE IF NOT EXISTS `t_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(100) NOT NULL,
  `password_usu` varchar(100) NOT NULL,
  `estado` bit(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id_usuario`, `nombre_usu`, `password_usu`, `estado`) VALUES
(1, 'Perla', '1234', b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
