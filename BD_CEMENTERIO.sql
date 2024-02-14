/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `bd_cementerio` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `bd_cementerio`;

CREATE TABLE IF NOT EXISTS `tb_cabecera_factura` (
  `id_cabecera_factura` int(10) NOT NULL AUTO_INCREMENT,
  `numero_factura` int(10) DEFAULT 1,
  `fecha_hora_pago` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  `descripcion_factura` varchar(100) DEFAULT NULL,
  `metodo_pago` varchar(50) DEFAULT NULL,
  `id_trabajadores` int(10) DEFAULT NULL,
  `id_propietario` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_cabecera_factura`),
  KEY `id_trabajadores` (`id_trabajadores`),
  KEY `id_propietario` (`id_propietario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_concesion` (
  `id_concesion` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_consecion` date DEFAULT NULL,
  `id_propietario` int(10) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `costo_concesion` int(10) DEFAULT NULL,
  `duracion_concesion` varchar(50) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_concesion`),
  KEY `id_propietario` (`id_propietario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_detalle_factura` (
  `id_detalle_factura` int(10) NOT NULL AUTO_INCREMENT,
  `id_cabecera_factura` int(10) DEFAULT NULL,
  `id_servicio_adicionales` int(10) DEFAULT NULL,
  `id_ventas/concesion` int(10) DEFAULT NULL,
  `subtotal_factura` float DEFAULT NULL,
  `cantidad_compra` int(10) DEFAULT NULL,
  `iva` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `descuento` float DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_detalle_factura`),
  KEY `id_cabecera_factura` (`id_cabecera_factura`),
  KEY `id_servicio_adicionales` (`id_servicio_adicionales`),
  KEY `id_ventas/concesion` (`id_ventas/concesion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_difunto` (
  `id_difunto` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_difunto` varchar(50) DEFAULT NULL,
  `id_tumba` int(10) DEFAULT NULL,
  `apellidos_difunto` varchar(50) DEFAULT NULL,
  `fecha_nacimiento_difunto` date DEFAULT NULL,
  `fecha_difuncion` date DEFAULT NULL,
  `causa_difuncion` varchar(100) DEFAULT NULL,
  `id_visitas` int(10) DEFAULT NULL,
  `id_exhumacion` int(10) DEFAULT NULL,
  `id_inhumacion` int(10) DEFAULT NULL,
  `id_geneologia` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_difunto`),
  KEY `id_tumba` (`id_tumba`),
  KEY `id_exhumacion` (`id_exhumacion`),
  KEY `id_inhumacion` (`id_inhumacion`),
  KEY `id_geneologia` (`id_geneologia`),
  KEY `id_visitante` (`id_visitas`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tb_difunto` (`id_difunto`, `nombre_difunto`, `id_tumba`, `apellidos_difunto`, `fecha_nacimiento_difunto`, `fecha_difuncion`, `causa_difuncion`, `id_visitas`, `id_exhumacion`, `id_inhumacion`, `id_geneologia`, `estado`) VALUES
	(1, 'Gabriel Alejandro', 1, 'Ramirez Rosales', '1981-05-23', '2005-01-28', 'Cardiopatía Isquémica', NULL, NULL, NULL, NULL, 1),
	(2, 'Ana del Rocio', 4, 'Pilay Tejena', '1970-01-19', '2020-05-02', 'Cáncer de pulmón', NULL, NULL, NULL, NULL, 1),
	(3, 'Nelson Fabian', 8, 'Reyes Garces', '1977-02-14', '2023-10-09', 'Condiciones neonatales', NULL, NULL, NULL, NULL, 1),
	(4, 'Lady Gabriela', 6, 'Luna Sanchez', '1951-06-09', '1978-12-15', 'Infecciones del tracto respiratorio inferior', NULL, NULL, NULL, NULL, 1),
	(5, 'Nancy Isabel', 7, 'Escobar Paredes', '1890-08-25', '1910-09-10', 'Infarto', NULL, NULL, NULL, NULL, 1);

CREATE TABLE IF NOT EXISTS `tb_exhumacion` (
  `id_exhumacion` int(10) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(100) DEFAULT NULL,
  `fecha_hora_exhumacion` datetime DEFAULT NULL,
  `destino_restos` varchar(100) DEFAULT NULL,
  `id_trabajadores` int(10) DEFAULT NULL,
  `descripcion_exhumacion` varchar(100) DEFAULT NULL,
  `estado` int(1) unsigned zerofill DEFAULT 1,
  PRIMARY KEY (`id_exhumacion`),
  KEY `id_trabajadores` (`id_trabajadores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_geneologia` (
  `id_geneologia` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_antepasado` varchar(50) DEFAULT NULL,
  `relacion` varchar(10) DEFAULT NULL,
  `fecha_nacimiento_antepasado` date DEFAULT NULL,
  `fecha_defuncion_antepasado` date DEFAULT NULL,
  `lugar_nacimiento_antepasado` varchar(50) DEFAULT NULL,
  `lugar_defuncion_antepasado` varchar(50) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_geneologia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_inhumacion` (
  `id_inhumacion` int(10) NOT NULL AUTO_INCREMENT,
  `ubicacion_tumba` varchar(100) DEFAULT NULL,
  `fecha_hora_Inhumacion` datetime DEFAULT NULL,
  `descripcion_inhumacion` varchar(100) DEFAULT NULL,
  `id_trabajadores` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_inhumacion`),
  KEY `id_trabajadores` (`id_trabajadores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_mantenimiento` (
  `id_mantenimiento` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion_mantenimiento` varchar(100) DEFAULT NULL,
  `fecha_mantenimiento` date DEFAULT NULL,
  `costo_mantenimiento` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_mantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_persona` (
  `id_persona` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `cedula` varchar(10) NOT NULL DEFAULT '0',
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` varchar(100) NOT NULL DEFAULT '0',
  `edad` int(10) NOT NULL DEFAULT 0,
  `genero` varchar(10) NOT NULL DEFAULT '0',
  `telefono` varchar(10) NOT NULL DEFAULT '0',
  `telefono_movil` varchar(10) NOT NULL DEFAULT '0',
  `correo_electronico` varchar(100) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tb_persona` (`id_persona`, `nombre`, `apellido`, `cedula`, `fecha_nacimiento`, `direccion`, `edad`, `genero`, `telefono`, `telefono_movil`, `correo_electronico`, `estado`) VALUES
	(1, 'Melanie Solange', 'Moran Arguello', '1314217761', '2000-03-31', 'Flor de bastion bloque 8', 23, 'Femenino', '0993223489', '02858506', 'melaniem2000@gmail.com', NULL),
	(2, 'Andrea Leonela', 'Campuzano Mendoza', '0928915842', '1998-06-27', 'Flor de bastion bloque 8', 25, 'Femenino', '0982611619', '02854609', 'leonelacampuzano@gmail.com', NULL),
	(3, 'Lilian Mariuxi', 'Moran Domenech', '1311020679', '1981-09-19', 'Flor de bastion bloque 8 Mz 1274', 42, 'Femenino', '0989220412', '02858506', 'liliandomenech@gmail.com', NULL),
	(4, 'Victor Daniel', 'Arias Meza', '0915904015', '1977-01-19', 'Flor de bastion bloque 8', 46, 'Masculino', '098140159', '02858596', 'victorarias1977@gmail.com', NULL),
	(5, 'Alex Ruben', 'Cobos Veloz', '0956782541', '1970-10-20', 'Pascuales', 53, 'Masculino', '0924955296', '02858545', 'alexcobos@gmail.com', NULL),
	(6, 'Gonzalo Luis', 'Balcazar Campoverde', '0958407678', '1978-05-25', 'Cooperativa 5 de diciembre', 45, 'Masxulino', '0990185961', '02859885', 'gonzalobalcazar@gmail.com', NULL),
	(7, 'Juan Jose', 'Ortega Vintimilla', '0986745213', '1970-10-25', 'Florida Norte', 53, 'Masculina', '0953246789', '02867421', 'juanortega@gmail.com', NULL);

CREATE TABLE IF NOT EXISTS `tb_propietario` (
  `id_propietario` int(10) NOT NULL AUTO_INCREMENT,
  `id_persona` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_propietario`),
  KEY `id_persona` (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tb_propietario` (`id_propietario`, `id_persona`, `estado`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 1);

CREATE TABLE IF NOT EXISTS `tb_renovacion` (
  `id_renovacion` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_renovacion` date DEFAULT NULL,
  `nueva_fecha_vencimiento` date DEFAULT NULL,
  `costo_renovacion` int(10) DEFAULT NULL,
  `id_concesion` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_renovacion`),
  KEY `costo_renovacion` (`costo_renovacion`),
  KEY `id_concesion` (`id_concesion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_reservas_citas` (
  `id_reservas_citas` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_reserva` date DEFAULT NULL,
  `hora_reserva` date DEFAULT NULL,
  `tipo_servicio` varchar(50) DEFAULT NULL,
  `detalle_servicio` varchar(100) DEFAULT NULL,
  `id_propietario` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_reservas_citas`),
  KEY `id_propietario` (`id_propietario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_reserva_servicios_adicionales` (
  `id_reserva_servicios_adicionales` int(10) NOT NULL AUTO_INCREMENT,
  `cantidad` int(10) DEFAULT NULL,
  `fecha_servicio` date DEFAULT NULL,
  `hora_servicio` time DEFAULT NULL,
  `id_reservas_citas` int(10) DEFAULT NULL,
  `id_servicio_adicionales` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_reserva_servicios_adicionales`),
  KEY `id_servicio_adicionales` (`id_servicio_adicionales`),
  KEY `id_reservas_citas` (`id_reservas_citas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_servicio_adicionales` (
  `id_servicio_adicionales` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(50) DEFAULT NULL,
  `descripcion_servicio` varchar(100) DEFAULT NULL,
  `costo` float DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_servicio_adicionales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_tipo_usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_trabajadores` (
  `id_trabajadores` int(10) NOT NULL AUTO_INCREMENT,
  `tiempo_trabajado` int(2) DEFAULT NULL,
  `salario_trabajador` int(10) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `fecha_incio_contrato` date DEFAULT NULL,
  `fecha_fin_contrato` date DEFAULT NULL,
  `tipo_contrato` varchar(50) DEFAULT NULL,
  `id_persona` int(10) DEFAULT NULL,
  `id_difunto` int(10) DEFAULT NULL,
  `id_tumba` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_trabajadores`),
  KEY `id_persona` (`id_persona`),
  KEY `id_difunto` (`id_difunto`),
  KEY `id_tumba` (`id_tumba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_tumba` (
  `id_tumba` int(10) NOT NULL AUTO_INCREMENT,
  `numero_tumba` int(100) DEFAULT NULL,
  `seccion` int(10) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `fila` int(30) DEFAULT NULL,
  `estado_tumba` varchar(50) DEFAULT NULL,
  `id_mantenimiento` int(10) DEFAULT NULL,
  `id_propietario` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_tumba`),
  KEY `id_mantenimiento` (`id_mantenimiento`),
  KEY `id_propietario` (`id_propietario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tb_tumba` (`id_tumba`, `numero_tumba`, `seccion`, `tipo`, `fila`, `estado_tumba`, `id_mantenimiento`, `id_propietario`, `estado`) VALUES
	(1, 23, 2, 'boveda', 4, 'ocupada', NULL, NULL, 1),
	(2, 10, 6, 'Panteon', 1, 'disponible', NULL, NULL, 1),
	(3, 120, 8, 'Columbario', 10, 'reservada', NULL, NULL, 1),
	(4, 30, 5, 'Osorio', 25, 'ocupada', NULL, NULL, 1),
	(5, 96, 3, 'Sepultura Tierra', 30, 'disponible', NULL, NULL, 1),
	(6, 45, 10, 'Osorio', 9, 'ocupada', NULL, NULL, 1),
	(7, 36, 15, 'Panteon', 2, 'ocupada', NULL, NULL, 1),
	(8, 5, 5, 'boveda', 6, 'ocupada', NULL, NULL, 1);

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `id_tipo_usuario` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_usuario`),
  KEY `id_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tb_usuario` (`id_usuario`, `usuario`, `clave`, `id_tipo_usuario`, `estado`) VALUES
	(1, 'admin', '12345', NULL, 1);

CREATE TABLE IF NOT EXISTS `tb_ventas/concesion` (
  `id_ventas/concesion` int(10) NOT NULL AUTO_INCREMENT,
  `inscripcion` varchar(50) DEFAULT NULL,
  `costo` int(10) DEFAULT NULL,
  `monto` int(10) DEFAULT NULL,
  `fecha_compra/concesion` date DEFAULT NULL,
  `contrato` varchar(50) DEFAULT NULL,
  `descripcion_ventas` varchar(100) DEFAULT NULL,
  `id_concesion` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_ventas/concesion`),
  KEY `id_concesion` (`id_concesion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


CREATE TABLE IF NOT EXISTS `tb_visitas` (
  `id_visitas` int(10) NOT NULL AUTO_INCREMENT,
  `Relación_difunto` varchar(30) DEFAULT NULL,
  `fecha_visita` date DEFAULT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_persona` int(10) DEFAULT NULL,
  `id_tumba` int(10) DEFAULT NULL,
  `estado` int(1) DEFAULT 1,
  PRIMARY KEY (`id_visitas`),
  KEY `id_persona` (`id_persona`),
  KEY `id_tumba` (`id_tumba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
