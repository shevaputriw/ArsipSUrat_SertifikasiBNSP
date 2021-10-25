/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.35-MariaDB : Database - arsip_surat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`arsip_surat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `arsip_surat`;

/*Table structure for table `surat` */

DROP TABLE IF EXISTS `surat`;

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `kategori_surat` varchar(30) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `file_surat` varchar(100) DEFAULT NULL,
  `waktu_pengarsipan` datetime DEFAULT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `surat` */

insert  into `surat`(`id_surat`,`nomor_surat`,`kategori_surat`,`judul`,`file_surat`,`waktu_pengarsipan`) values 
(6,'192/PL2.TI/UND/2021','Undangan','Undangan Rapat Desa ke-1','Undangan_Kehadiran_Rapat_Desa.pdf','2021-10-24 22:04:53');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
