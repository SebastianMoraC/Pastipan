-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-05-2020 a las 13:44:20
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pastipan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Product_Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Cost` int(11) NOT NULL,
  `Expiration` date NOT NULL,
  `Proveedor` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Type` (`Type`),
  KEY `Proveedor` (`Proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Product_Name`, `Cost`, `Expiration`, `Proveedor`, `Type`) VALUES
(8, 'Boligrafo', 1900, '2025-01-01', 13, 9),
(10, 'Smirnoff', 16000, '2019-01-05', 15, 5),
(13, 'Detodito Natural 150gr', 2500, '2022-11-16', 8, 3),
(25, 'Club Colombia', 5000, '2008-02-01', 16, 5),
(28, 'Sprite', 1900, '2028-12-12', 6, 1),
(30, 'Leche AlquerÃ­a 1.5 litros', 1900, '2020-05-01', 17, 2),
(33, 'De todito ', 1900, '2020-04-01', 8, 3),
(34, 'Doritos', 2000, '2025-08-01', 8, 3),
(36, 'Pringles', 10000, '2021-12-15', 8, 3),
(37, 'Doritos', 1900, '2019-12-18', 8, 3),
(39, 'Corona', 15000, '2021-11-01', 16, 5),
(40, 'Corona', 25000, '2021-08-05', 16, 5),
(41, 'Corona', 28000, '2021-12-01', 16, 5),
(42, 'Poker', 2500, '2018-02-01', 16, 5),
(43, 'Poker', 2500, '2021-12-01', 16, 5),
(44, 'Club Colombia Negra', 5000, '2021-08-05', 16, 5),
(45, 'Club Colombia Amarillo', 2800, '2025-09-15', 16, 5),
(46, 'Poker', 2400, '2022-11-12', 16, 5),
(49, 'CafÃ© Latte', 25000, '2020-09-15', 11, 7),
(50, 'Nesquik', 15000, '2025-08-04', 10, 7),
(51, 'Milo', 14000, '2021-09-15', 9, 7),
(52, 'Milo', 14000, '2029-02-04', 9, 7),
(53, 'Milo', 24000, '2028-12-14', 9, 7),
(54, 'Milo', 12000, '2019-05-04', 9, 7),
(55, 'Chocolate en Polvo', 24000, '2021-04-18', 10, 7),
(56, 'Chocolate en Polvo', 24000, '2021-01-19', 10, 7),
(57, 'Milo', 2000, '2004-02-01', 9, 7),
(60, 'Fanta', 2400, '2029-05-04', 6, 1),
(61, 'Sprite', 2400, '2022-08-04', 6, 1),
(62, 'Pepsi 2L', 2800, '2025-12-08', 5, 1),
(63, 'Fresh limÃ³n', 2800, '2021-08-05', 12, 1),
(65, 'Papas Fritas', 4000, '2020-12-09', 8, 3),
(70, 'Fanta', 2300, '2021-05-04', 6, 1),
(72, 'Margarita', 2300, '2021-08-04', 8, 3),
(73, 'Margarita 250gr', 2300, '2024-05-01', 8, 3),
(75, 'Milo 25gr', 35000, '2020-04-19', 9, 7),
(76, 'Nesquik', 25000, '2020-09-15', 10, 7),
(77, 'CafÃ© Latte', 26000, '2021-12-01', 11, 7),
(79, 'Lapicero', 2100, '2010-10-01', 13, 9),
(80, 'CafÃ©', 4000, '2020-05-22', 14, 7),
(81, 'Smirnoff', 13000, '2024-12-01', 15, 5),
(82, 'Poker', 4000, '2021-05-01', 16, 5),
(83, 'Leche', 4000, '2021-08-01', 17, 2),
(86, 'Lapicero', 1000, '2020-09-19', 23, 9),
(88, 'Alpinito', 2000, '2020-05-22', 25, 8),
(89, 'Coca Cola', 2500, '2021-05-04', 6, 1),
(90, 'De todito', 2400, '2021-01-01', 8, 3),
(91, 'Pan Coco', 2400, '2020-05-06', 29, 4),
(92, 'Coca Cola', 2500, '2021-05-04', 6, 1),
(93, 'Fresh limÃ³n', 3000, '2021-01-19', 12, 1),
(95, 'Gaseosas Kaos', 20000, '2000-02-01', 31, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Proveedor` text COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `Celular` int(11) NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id`, `Proveedor`, `Direccion`, `Celular`, `Email`) VALUES
(5, 'Postobon', 'Bogota Usaquen 23-45', 3108523, 'postobon@gmail.com'),
(6, 'Coca Cola', 'Cali Las Marianas 22-34', 3651298, 'cocacola@gmail.com'),
(7, 'AJE', 'Parque Industial 12-34', 3129874, 'aje@gmail.com'),
(8, 'Frito Lay', 'Centro 12-25', 3216498, 'fritolay@gmail.com'),
(9, 'Milo', 'Bogota Ferias 12#', 3217584, 'milo@gmail.com'),
(10, 'Nesquik', 'Bogota 98-45', 3646575, 'nesquik@gmail.com'),
(11, 'Sello Rojo', 'Centro 22-36', 3189684, 'sellorojo@gmail.com'),
(12, 'Del Valle', 'Medellin 22-65', 3116993, 'delvalle@gmail.com'),
(13, 'Paper Mate', 'Micaela 85-26', 3116464, 'papermate@gmail.com'),
(14, 'Mariscal', 'Rafaela 32-65', 3136936, 'mariscal@gmail.com'),
(15, 'Diageo', 'Bogota Ferias 34-32', 3194114, 'diageo@gmail.com'),
(16, 'Bavaria', 'Cuba 23-58', 3174631, 'bavaria@gmail.com'),
(17, 'AlquerÃ­a', 'Manila 22-68', 3161221, 'alqueria@gmail.com'),
(23, 'Faber Castell', 'Villa De Leya 12-6', 3136224, 'faber@gmail.com'),
(25, 'Colanta', 'Bogota-99-99', 3159314, 'colanta@gmail.com'),
(29, 'Patipan', 'Pastipan', 3113614, 'pastipan@gmail.com'),
(31, 'Kaos sa', 'Amigos Feria', 3111133, 'kaos@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `type`
--

INSERT INTO `type` (`Id`, `Product`) VALUES
(1, 'Gaseosas'),
(2, 'Lacteos'),
(3, 'Snacks'),
(4, 'Harinas'),
(5, 'Licor'),
(6, 'Granos'),
(7, 'Disoluciones'),
(8, 'Yogurts'),
(9, 'Variedades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Product` int(11) NOT NULL,
  `Product_Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Proveedor` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Product` (`Id_Product`),
  KEY `Type` (`Type`),
  KEY `Proveedor` (`Proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id`, `Id_Product`, `Product_Name`, `Price`, `Proveedor`, `Type`, `Date`) VALUES
(8, 16, 'Del Valle', 2300, 12, 1, '2020-01-01'),
(9, 1, 'Coca Cola', 2875, 6, 1, '2018-08-08'),
(10, 5, 'Queso Extra 150gr', 17250, 17, 2, '2019-12-20'),
(11, 14, 'Poker', 9200, 16, 5, '2020-01-15'),
(12, 19, 'Colombiana', 3105, 5, 1, '2015-05-04'),
(13, 12, 'Fanta', 2300, 6, 1, '2020-01-01'),
(15, 18, 'Fresh', 3680, 12, 1, '2020-04-30'),
(16, 23, 'Colombiana', 2185, 5, 1, '2020-04-30'),
(17, 24, 'Coca Cola', 2415, 6, 1, '2020-04-30'),
(18, 32, 'Queso Rockefeller', 6210, 17, 2, '2020-05-03'),
(19, 26, 'Pepsi', 4025, 5, 1, '2020-05-04'),
(21, 66, 'Fanta Naranja 2 L ', 3220, 6, 1, '2020-05-05'),
(22, 48, 'CafÃ© Latte', 28750, 11, 7, '2020-05-05'),
(23, 59, 'Big Cola', 2760, 7, 1, '2020-05-05'),
(24, 71, 'Big Cola', 2645, 7, 1, '2020-05-05'),
(25, 67, 'Big Cola', 2921, 7, 1, '2020-05-05'),
(26, 78, 'Del Valle', 6900, 12, 1, '2020-05-05'),
(27, 69, 'Coca Cola', 2645, 6, 1, '2020-05-05'),
(28, 85, 'Coca Cola', 2645, 6, 1, '2020-05-05'),
(29, 20, 'Coca Cola', 2760, 6, 1, '2020-05-05'),
(30, 27, 'Coca Cola', 3335, 6, 1, '2020-05-05'),
(31, 22, 'Fanta', 2300, 6, 1, '2020-05-05'),
(32, 58, 'Coca Cola', 16100, 6, 1, '2020-05-05'),
(33, 84, 'Alqueria', 2645, 17, 2, '2020-05-05'),
(34, 38, 'De todito', 2875, 8, 3, '2020-05-05'),
(35, 31, 'Leche Alpina', 10350, 17, 2, '2020-05-06');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `type` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`Proveedor`) REFERENCES `proveedor` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`Type`) REFERENCES `type` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`Proveedor`) REFERENCES `proveedor` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
