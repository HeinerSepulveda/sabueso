/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.25-MariaDB : Database - sabueso
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sabueso` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sabueso`;

/*Table structure for table `inventario_activos` */

DROP TABLE IF EXISTS `inventario_activos`;

CREATE TABLE `inventario_activos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano` varchar(4) DEFAULT NULL,
  `fechaInventario` datetime DEFAULT NULL,
  `articulo` varchar(255) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL,
  `tipoActivo` varchar(255) DEFAULT NULL,
  `cantidad` int(12) DEFAULT NULL,
  `valorComercial` int(12) DEFAULT NULL,
  `valorTotal` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `inventario_activos` */

insert  into `inventario_activos`(`id`,`ano`,`fechaInventario`,`articulo`,`responsable`,`tipoActivo`,`cantidad`,`valorComercial`,`valorTotal`) values (1,'2022','2023-01-05 21:38:30','Laptop','Daniel','Tecnologia',7,1500000,1500000);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
