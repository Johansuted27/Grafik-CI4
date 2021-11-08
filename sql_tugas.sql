/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - tugas-grafik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tugas-grafik` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tugas-grafik`;

/*Table structure for table `tbl_penjualan` */

DROP TABLE IF EXISTS `tbl_penjualan`;

CREATE TABLE `tbl_penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_penjualan` */

insert  into `tbl_penjualan`(`id`,`bulan`,`tahun`,`total`,`created_at`,`updated_at`) values 
(1,'Januari','2021',271,'2021-11-08 17:10:27','2021-11-08 17:08:26'),
(2,'Februari','2021',310,'2021-11-08 17:10:28','2021-11-08 17:08:43'),
(3,'Maret','2021',129,'2021-11-08 17:10:28','2021-11-08 17:08:50'),
(4,'April','2021',60,'2021-11-08 17:10:29','2021-11-08 17:08:54'),
(5,'Mei','2021',170,'2021-11-08 17:10:29','2021-11-08 17:09:00'),
(6,'Juni','2021',160,'2021-11-08 17:10:29','2021-11-08 17:09:01'),
(7,'Juli','2021',223,'2021-11-08 17:10:30','2021-11-08 17:09:10'),
(8,'Agustus','2021',350,'2021-11-08 17:10:30','2021-11-08 17:09:12'),
(9,'September','2021',421,'2021-11-08 17:10:30','2021-11-08 17:09:15'),
(10,'Oktober','2021',240,'2021-11-08 17:10:31','2021-11-08 17:09:17'),
(11,'November','2021',300,'2021-11-08 17:10:31','2021-11-08 17:09:20'),
(12,'Desember','2021',310,'2021-11-08 17:10:31','2021-11-08 17:09:22'),
(13,'Januari','2019',271,'2021-11-08 17:19:04','2021-11-08 17:08:26'),
(14,'Februari','2019',190,'2021-11-08 17:19:55','2021-11-08 17:08:50'),
(15,'Maret','2019',281,'2021-11-08 17:19:57','2021-11-08 17:08:50'),
(16,'April','2019',129,'2021-11-08 17:19:59','2021-11-08 17:08:54'),
(17,'Mei','2019',210,'2021-11-08 17:20:01','2021-11-08 17:09:00'),
(18,'Juni','2019',312,'2021-11-08 17:20:04','2021-11-08 17:09:01'),
(19,'Juli','2019',92,'2021-11-08 17:20:09','2021-11-08 17:09:10'),
(20,'Agustus','2019',182,'2021-11-08 17:20:11','2021-11-08 17:09:12'),
(21,'September','2019',291,'2021-11-08 17:20:13','2021-11-08 17:09:15'),
(22,'Oktober','2019',228,'2021-11-08 17:20:15','2021-11-08 17:09:17'),
(23,'November','2019',290,'2021-11-08 17:20:18','2021-11-08 17:09:20'),
(24,'Desember','2019',149,'2021-11-08 17:20:24','2021-11-08 17:09:22');

/*Table structure for table `tbl_pjl_produk` */

DROP TABLE IF EXISTS `tbl_pjl_produk`;

CREATE TABLE `tbl_pjl_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `terjual` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pjl_produk` */

insert  into `tbl_pjl_produk`(`id`,`nama_produk`,`terjual`,`created_at`,`updated_at`) values 
(1,'Nike',219,'2021-11-08 17:48:03','2021-11-08 17:48:03'),
(2,'Addidas',189,'2021-11-08 17:48:09','2021-11-08 17:48:09'),
(3,'Ventella',230,'2021-11-08 17:48:19','2021-11-08 17:48:19'),
(4,'Vans',413,'2021-11-08 17:48:30','2021-11-08 17:48:24'),
(5,'Converse',312,'2021-11-08 17:48:39','2021-11-08 17:48:39'),
(6,'Puma',80,'2021-11-08 17:48:55','2021-11-08 17:48:55'),
(7,'Specs',233,'2021-11-08 17:49:11','2021-11-08 17:49:11'),
(8,'Piero',229,'2021-11-08 17:49:39','2021-11-08 17:49:26'),
(9,'Reebok',240,'2021-11-08 17:50:27','2021-11-08 17:50:27'),
(10,'New Balance',391,'2021-11-08 17:50:36','2021-11-08 17:50:36');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
