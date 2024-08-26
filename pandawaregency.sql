/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - jjuycagx_pandawa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jjuycagx_pandawa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `jjuycagx_pandawa`;

/*Table structure for table `bumm` */

DROP TABLE IF EXISTS `bumm`;

CREATE TABLE `bumm` (
  `bumm_id` int(5) NOT NULL AUTO_INCREMENT,
  `bumm_produk` varchar(50) DEFAULT NULL,
  `bumm_harga` double(10,2) DEFAULT NULL,
  `bumm_pemilik` varchar(50) DEFAULT NULL,
  `bumm_ringkasan` text DEFAULT NULL,
  `bumm_isi` text DEFAULT NULL,
  `bumm_photo` varchar(100) DEFAULT NULL,
  `kategori_id` int(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  PRIMARY KEY (`bumm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `bumm` */

/*Table structure for table `divisi` */

DROP TABLE IF EXISTS `divisi`;

CREATE TABLE `divisi` (
  `divisi_id` int(5) NOT NULL AUTO_INCREMENT,
  `divisi_nama` varchar(100) DEFAULT NULL,
  `divisi_ket` text DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`divisi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `divisi` */

insert  into `divisi`(`divisi_id`,`divisi_nama`,`divisi_ket`,`user_id`) values 
(7,'KETUA PAGUYUBAN','',8),
(8,'SEKRETARIS','',8),
(9,'PENGAWAS KEUANGAN','',8),
(10,'SEKRETARIS SRIKANDI','',8),
(11,'BENDAHARA 1','',8),
(12,'BENDAHARA 2','',8),
(13,'BENDAHARA 3','',8),
(14,'KOORDINASI SRIKANDI','',8),
(15,'PENGGIAT PROGRAM SRIKANDI','',8),
(16,'PENYALUR IDE IT / TEKNOLOGI','',8),
(17,'HUMAS 1','',8),
(18,'HUMAS 2','',8),
(19,'HUMAS 3','',8),
(20,'HUMAS 4','',8),
(21,'KEAMANAN LINGKUNGAN 1','',8),
(22,'KEAMANAN LINGKUNGAN 2','',8),
(23,'KEAMANAN LINGKUNGAN 3','',8),
(24,'PEMBINA KEBERSIHAN','',8);

/*Table structure for table `divisi_detail` */

DROP TABLE IF EXISTS `divisi_detail`;

CREATE TABLE `divisi_detail` (
  `divisi_det_id` int(10) NOT NULL AUTO_INCREMENT,
  `divisi_det_ringkasan` text DEFAULT NULL,
  `divisi_det_isi` text DEFAULT NULL,
  `divisi_det_photo` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `divisi_id` int(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`divisi_det_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `divisi_detail` */

insert  into `divisi_detail`(`divisi_det_id`,`divisi_det_ringkasan`,`divisi_det_isi`,`divisi_det_photo`,`created_date`,`divisi_id`,`created_by`,`modified_date`,`modified_by`) values 
(7,'KETUA','                                      tes                                        ','divisi-26082024113240.png','2024-08-26',7,'admin','2024-08-26','admin');

/*Table structure for table `donasi` */

DROP TABLE IF EXISTS `donasi`;

CREATE TABLE `donasi` (
  `donasi_id` int(10) NOT NULL AUTO_INCREMENT,
  `donasi_nama` varchar(100) DEFAULT NULL,
  `donasi_ringkasan` text DEFAULT NULL,
  `donasi_isi` text DEFAULT NULL,
  `donasi_photo` varchar(100) DEFAULT NULL,
  `donasi_target` double(10,2) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `priority` int(10) DEFAULT NULL,
  PRIMARY KEY (`donasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `donasi` */

insert  into `donasi`(`donasi_id`,`donasi_nama`,`donasi_ringkasan`,`donasi_isi`,`donasi_photo`,`donasi_target`,`created_date`,`modified_date`,`created_by`,`modified_by`,`priority`) values 
(2,'17 Agustus Warga Paguyuban Pandawa Regency 2','Penyelenggaraan 17 Agustus Warga Pandawa Regency 2w','                                                            <p>Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan </p>\r\n<p>Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid GabuganPembangunan Masjid GabuganPembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan</p>\r\n<p>Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid Gabugan Pembangunan Masjid GabuganPembangunan Masjid Gabugan </p>                                                                ','donasi-10082024181118.jpg',30000000.00,'2021-01-03','2024-08-10','admin masjid','admin',1);

/*Table structure for table `donatur` */

DROP TABLE IF EXISTS `donatur`;

CREATE TABLE `donatur` (
  `donatur_id` int(10) NOT NULL AUTO_INCREMENT,
  `donatur_nama` varchar(100) DEFAULT NULL,
  `donatur_jumlah` double(10,2) DEFAULT NULL,
  `donatur_rekening` varchar(100) DEFAULT NULL,
  `donatur_tanggal` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `donasi_id` int(10) DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  PRIMARY KEY (`donatur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `donatur` */

insert  into `donatur`(`donatur_id`,`donatur_nama`,`donatur_jumlah`,`donatur_rekening`,`donatur_tanggal`,`created_by`,`created_date`,`donasi_id`,`modified_by`,`modified_date`) values 
(2,'yanto mm',200000.00,'202002-020202-2020','2020-11-08','admin masjid','2020-11-08',5,'admin masjid','2020-11-08'),
(3,'Ilham',500000.00,'1128-23123-12313','2021-01-03','admin masjid','2021-01-03',1,NULL,NULL),
(4,'Rian',2000000.00,'22-22-2-2-2-2','2021-01-03','Ardana Gama','2021-01-03',2,NULL,NULL);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `kategori_id` int(5) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(100) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `kategori_status_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`kategori_id`,`kategori_nama`,`user_id`,`kategori_status_id`) values 
(14,'KERJA BAKTI',8,1),
(15,'RAPAT BULANAN',8,1),
(16,'LAIN - LAIN',8,1);

/*Table structure for table `kategori_status` */

DROP TABLE IF EXISTS `kategori_status`;

CREATE TABLE `kategori_status` (
  `kategori_status_id` int(3) NOT NULL AUTO_INCREMENT,
  `kategori_status_nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kategori_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `kategori_status` */

insert  into `kategori_status`(`kategori_status_id`,`kategori_status_nama`) values 
(1,'KEGIATAN');

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(10) NOT NULL AUTO_INCREMENT,
  `kegiatan_nama` varchar(100) DEFAULT NULL,
  `kegiatan_ringkasan` text DEFAULT NULL,
  `kegiatan_isi` longtext DEFAULT NULL,
  `kegiatan_photo` varchar(100) DEFAULT NULL,
  `kegiatan_tanggal` date DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `kategori_id` int(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  PRIMARY KEY (`kegiatan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`kegiatan_id`,`kegiatan_nama`,`kegiatan_ringkasan`,`kegiatan_isi`,`kegiatan_photo`,`kegiatan_tanggal`,`created_date`,`kategori_id`,`created_by`,`modified_by`,`modified_date`) values 
(17,'Kerja Bakti Pada Untuk HUT RI','Kerja Bakti Dilaksanakan Untuk membersih kan dan mengecor Letter H','                          \r\n                        ','kegiatan-13082024094851.jpeg','2024-08-13','2024-08-13',14,'admin','admin','2024-08-13'),
(18,'tes','aaa','                          \r\n                        ','kegiatan-23082024110703.jpeg','2024-08-23','2024-08-23',14,'admin','admin','2024-08-23'),
(19,'tessss','sss','                          \r\n                        ','kegiatan-26082024113018.jpeg','2024-08-26','2024-08-26',14,'admin','admin','2024-08-26');

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `level_id` int(5) NOT NULL AUTO_INCREMENT,
  `level_nama` varchar(10) DEFAULT NULL,
  `level_jabatan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `level` */

insert  into `level`(`level_id`,`level_nama`,`level_jabatan`) values 
(5,'1','admin');

/*Table structure for table `struktur` */

DROP TABLE IF EXISTS `struktur`;

CREATE TABLE `struktur` (
  `struktur_id` int(10) NOT NULL AUTO_INCREMENT,
  `struktur_nama` varchar(50) DEFAULT NULL,
  `struktur_ket` varchar(255) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `isdeleted` tinyint(1) DEFAULT NULL,
  `deletedby` varchar(100) DEFAULT NULL,
  `deletedutc` datetime DEFAULT NULL,
  `createdutc` datetime DEFAULT NULL,
  `lastmodifiedby` varchar(100) DEFAULT NULL,
  `lastmodifiedutc` datetime DEFAULT NULL,
  PRIMARY KEY (`struktur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `struktur` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(100) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `level_id` int(5) DEFAULT NULL,
  `user_aktif` enum('Y','N') DEFAULT NULL,
  `user_photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_username`,`user_password`,`user_name`,`level_id`,`user_aktif`,`user_photo`) values 
(8,'admin','21232f297a57a5a743894a0e4a801fc3','admin',5,'Y','admin.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
