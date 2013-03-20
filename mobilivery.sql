-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-03-19 23:15:24
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for mobilivery
CREATE DATABASE IF NOT EXISTS `mobilivery` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mobilivery`;


-- Dumping structure for table mobilivery.articulo_caracteristica
CREATE TABLE IF NOT EXISTS `articulo_caracteristica` (
  `id` int(10) DEFAULT NULL,
  `id_articulo_menu` int(10) DEFAULT NULL,
  `id_articulo_orden` int(10) DEFAULT NULL,
  `id_caracteristica` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.articulo_caracteristica: ~19 rows (approximately)
/*!40000 ALTER TABLE `articulo_caracteristica` DISABLE KEYS */;
INSERT INTO `articulo_caracteristica` (`id`, `id_articulo_menu`, `id_articulo_orden`, `id_caracteristica`) VALUES
	(1, 1, NULL, 1),
	(2, 2, NULL, 2),
	(3, 3, NULL, 3),
	(4, 3, NULL, 4),
	(5, 5, NULL, 5),
	(7, 5, NULL, 7),
	(6, 5, NULL, 6),
	(8, 6, NULL, 5),
	(9, 6, NULL, 6),
	(10, 6, NULL, 7),
	(11, 7, NULL, 5),
	(15, 9, NULL, 6),
	(13, 7, NULL, 7),
	(14, 9, NULL, 5),
	(12, 7, NULL, 6),
	(16, 9, NULL, 7),
	(17, 8, NULL, 6),
	(18, 9, NULL, 8),
	(19, 9, NULL, 9);
/*!40000 ALTER TABLE `articulo_caracteristica` ENABLE KEYS */;


-- Dumping structure for table mobilivery.articulo_menu
CREATE TABLE IF NOT EXISTS `articulo_menu` (
  `id` int(10) DEFAULT NULL,
  `id_categoria` int(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.articulo_menu: ~19 rows (approximately)
/*!40000 ALTER TABLE `articulo_menu` DISABLE KEYS */;
INSERT INTO `articulo_menu` (`id`, `id_categoria`, `nombre`, `descripcion`, `foto`, `precio`) VALUES
	(1, 1, 'Boneless wings', '12 bolitas de pollo empanizadas, bañadas en salsa original hot wings y acompañadas de salsa blue cheese.', 'imgs/arts/1.png', 70),
	(2, 1, 'Nachos', 'Receta de la casa con frijoles, guacamole, pico de gallo y mezcla de quesos.', 'imgs/arts/2.png', 60),
	(3, 1, 'Papas', 'Papas fritas en aceite de cacahuate y sazonadas con paprika', 'imgs/arts/3.png', 35),
	(4, 1, 'Guacamole', 'Lo puedes pedir de entrada o para ponérselo a otro de nuestros deliciosos platillos.', 'imgs/arts/4.png', 30),
	(5, 2, 'Döner Kebab', 'El tradicional kebab turco en pan grueso.', 'imgs/arts/5.png', 50),
	(6, 2, 'Plato Kebab', 'Nuestra carne kebab con ensalada y papas.', 'imgs/arts/6.png', 70),
	(7, 2, 'Dürüm Kebab', 'Kebab en pan pita delgado.', 'imgs/arts/7.png', 40),
	(8, 2, 'Pommdöner', 'Papas a la francesa con carne de pollo o cordero en pan pita grueso con salsa.', 'imgs/arts/8.png', 45),
	(9, 2, 'Combo Kebab', 'Un kebab a escoger, refresco y papas.', 'imgs/arts/9.png', 80),
	(10, 3, 'Poutine original', 'La original con salsa gravy y queso.', 'imgs/arts/10.png', 70),
	(11, 3, 'Poutine bacon', 'Poutine con tocino.', 'imgs/arts/11.png', 80),
	(12, 3, 'Poutine vegetariana', 'Poutine con pimiento y cebolla.', 'imgs/arts/12.png', 75),
	(13, 3, 'Poutine salchichas', 'Poutine con salchichas.', 'imgs/arts/13.png', 80),
	(14, 4, 'Burrito de pollo', 'El original burrito con pollo.', 'imgs/arts/14.png', 60),
	(15, 4, 'Burrito de carne', 'El original burrito con carne.', 'imgs/arts/15.png', 60),
	(16, 4, 'Burrito de camarón', 'La versión del pacífico con camarón y salsa especial.', 'imgs/arts/16.png', 80),
	(17, 4, 'Burrito de huevo', 'Para el desayuno burrito con huevo.', 'imgs/arts/17.png', 50),
	(18, 5, 'Cheesecake', NULL, NULL, 45),
	(18, 5, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `articulo_menu` ENABLE KEYS */;


-- Dumping structure for table mobilivery.articulo_orden
CREATE TABLE IF NOT EXISTS `articulo_orden` (
  `id` int(10) DEFAULT NULL,
  `id_articulo_menu` int(10) DEFAULT NULL,
  `comentarios` varchar(100) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.articulo_orden: ~0 rows (approximately)
/*!40000 ALTER TABLE `articulo_orden` DISABLE KEYS */;
/*!40000 ALTER TABLE `articulo_orden` ENABLE KEYS */;


-- Dumping structure for table mobilivery.caracteristica
CREATE TABLE IF NOT EXISTS `caracteristica` (
  `id` int(10) NOT NULL DEFAULT '0',
  `nombre` varchar(50) DEFAULT NULL,
  `valor_unico` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.caracteristica: ~9 rows (approximately)
/*!40000 ALTER TABLE `caracteristica` DISABLE KEYS */;
INSERT INTO `caracteristica` (`id`, `nombre`, `valor_unico`) VALUES
	(1, 'Extras boneless', NULL),
	(2, 'Extras nachos', NULL),
	(3, 'Corte papas', 1),
	(4, 'Extras papas', NULL),
	(5, 'Tipo de carne', 1),
	(6, 'Salsa', NULL),
	(7, 'Ensalada', NULL),
	(8, 'Tipo de pan', 1),
	(9, 'Sabor refresco', 1);
/*!40000 ALTER TABLE `caracteristica` ENABLE KEYS */;


-- Dumping structure for table mobilivery.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `icono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.categoria: ~6 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `nombre`, `icono`) VALUES
	(1, 'Entradas', 'imgs/cats/1.png'),
	(2, 'Kebabs', 'imgs/cats/2.png'),
	(3, 'Poutines', 'imgs/cats/3.png'),
	(4, 'Burritos', 'imgs/cats/4.png'),
	(5, 'Postres', 'imgs/cats/5.png'),
	(6, 'Bebidas', 'imgs/cats/6.png');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


-- Dumping structure for table mobilivery.comercio
CREATE TABLE IF NOT EXISTS `comercio` (
  `id` int(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `latitud` double DEFAULT NULL,
  `longitud` double DEFAULT NULL,
  `radioCobertura` double DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `temaHeader` char(1) DEFAULT NULL,
  `temaPage` char(1) DEFAULT NULL,
  `temaFooter` char(1) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fotosCategorias` int(1) DEFAULT '0',
  `fondo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.comercio: ~1 rows (approximately)
/*!40000 ALTER TABLE `comercio` DISABLE KEYS */;
INSERT INTO `comercio` (`id`, `nombre`, `logo`, `latitud`, `longitud`, `radioCobertura`, `telefono`, `temaHeader`, `temaPage`, `temaFooter`, `foto`, `descripcion`, `fotosCategorias`, `fondo`) VALUES
	(1, 'Porkas', 'logo.png', 19.374797718184286, -99.25263398937989, 1500, '5536744626', 'c', 'c', 'b', 'comercio.png', 'Desde 1998 ofreciendo las delicias más carstensosas de la comida de calle internacional.', 0, '');
/*!40000 ALTER TABLE `comercio` ENABLE KEYS */;


-- Dumping structure for table mobilivery.configuraciones
CREATE TABLE IF NOT EXISTS `configuraciones` (
  `temaHeader` char(1) DEFAULT 'c',
  `temaPage` char(1) DEFAULT 'c',
  `temaFooter` char(1) DEFAULT 'c',
  `fotosCategorias` int(1) DEFAULT '0',
  `imgFondoMovil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.configuraciones: ~0 rows (approximately)
/*!40000 ALTER TABLE `configuraciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `configuraciones` ENABLE KEYS */;


-- Dumping structure for table mobilivery.horario
CREATE TABLE IF NOT EXISTS `horario` (
  `dia` int(1) DEFAULT NULL,
  `horario` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.horario: ~5 rows (approximately)
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` (`dia`, `horario`) VALUES
	(3, '11:00-20:30'),
	(4, '11:00-20:30'),
	(5, '11:00-20:30'),
	(6, '11:00-20:30'),
	(7, '11:00-20:30');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;


-- Dumping structure for table mobilivery.opcion
CREATE TABLE IF NOT EXISTS `opcion` (
  `id` int(10) DEFAULT NULL,
  `id_caracteristica` int(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mobilivery.opcion: ~25 rows (approximately)
/*!40000 ALTER TABLE `opcion` DISABLE KEYS */;
INSERT INTO `opcion` (`id`, `id_caracteristica`, `nombre`, `precio`) VALUES
	(1, 1, 'Salsa blue cheese', 10),
	(2, 1, 'Salsa original', 15),
	(3, 2, 'Chilli con carne', 15),
	(4, 2, 'Guacamole', 15),
	(5, 2, 'Tocino', 15),
	(6, 3, 'Regular', 0),
	(7, 3, 'Espiral', 0),
	(8, 3, 'Gajo', 0),
	(9, 4, 'Queso', 10),
	(10, 5, 'Pollo', 0),
	(11, 5, 'Cordero', 0),
	(12, 6, 'Picante roja', 0),
	(13, 6, 'Salsa de ajo', 0),
	(14, 7, 'Tomate', 0),
	(15, 7, 'Cebolla', 0),
	(16, 7, 'Col morada', 0),
	(17, 7, 'Queso', 8),
	(18, 7, 'Pepino', 0),
	(19, 6, 'Salsa coctail', 0),
	(20, 8, 'Pita grueso', 0),
	(21, 8, 'Pita delgado (dürüm)', 0),
	(22, 9, 'Cola', 0),
	(23, 9, 'Manzana', 0),
	(24, 9, 'Agua', 0),
	(25, 9, 'Té helado', 0);
/*!40000 ALTER TABLE `opcion` ENABLE KEYS */;


-- Dumping structure for table mobilivery.stellar_sessions
CREATE TABLE IF NOT EXISTS `stellar_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table mobilivery.stellar_sessions: 1 rows
/*!40000 ALTER TABLE `stellar_sessions` DISABLE KEYS */;
INSERT INTO `stellar_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('b43510bdc38377212fcea574af86abb3', '127.0.0.1', '0', 1363138488, '');
/*!40000 ALTER TABLE `stellar_sessions` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
