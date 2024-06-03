/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.13-MariaDB : Database - dbmasjid
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbmasjid` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbmasjid`;

/*Table structure for table `bumm` */

DROP TABLE IF EXISTS `bumm`;

CREATE TABLE `bumm` (
  `bumm_id` int(5) NOT NULL AUTO_INCREMENT,
  `bumm_produk` varchar(50) DEFAULT NULL,
  `bumm_harga` double(10,2) DEFAULT NULL,
  `bumm_pemilik` varchar(50) DEFAULT NULL,
  `bumm_ringkasan` text,
  `bumm_isi` text,
  `bumm_photo` varchar(100) DEFAULT NULL,
  `kategori_id` int(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  PRIMARY KEY (`bumm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `bumm` */

insert  into `bumm`(`bumm_id`,`bumm_produk`,`bumm_harga`,`bumm_pemilik`,`bumm_ringkasan`,`bumm_isi`,`bumm_photo`,`kategori_id`,`created_by`,`created_date`,`modified_by`,`modified_date`) values 
(1,'Keripik',50000.00,'Saidi','keripik ini terbuat dari rasa yang pernah ada ','<p>keripik ini terbuat dari rasa yang pernah ada&nbsp;</p>','bumm-21112020124751.jpg',10,'admin masjid','2020-11-21','admin masjid','2021-01-24'),
(2,'Madu',40000.00,'masjid','madu ini terbuat dari sari makanan','<p>madu ini terbuat dari sari makanan</p>','bumm-28112020233543.jpg',10,'admin masjid','2020-11-28','admin masjid','2021-01-24'),
(3,'Gula',50000.00,'Saidi','GULA PASIR','<p>GULA PASIR MANIS terbuat dari tebu alami</p>','bumm-01012021025518.jpg',11,'admin masjid','2021-01-01','admin masjid','2021-01-24'),
(4,'Beras',50000.00,'Saidi','beras putih','<p>beras putih</p>','bumm-01012021025725.jpg',11,'admin masjid','2021-01-01','admin masjid','2021-01-24');

/*Table structure for table `divisi` */

DROP TABLE IF EXISTS `divisi`;

CREATE TABLE `divisi` (
  `divisi_id` int(5) NOT NULL AUTO_INCREMENT,
  `divisi_nama` varchar(100) DEFAULT NULL,
  `divisi_ket` text,
  `user_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`divisi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `divisi` */

insert  into `divisi`(`divisi_id`,`divisi_nama`,`divisi_ket`,`user_id`) values 
(1,'IT DAN PENGARSIPAN','',1),
(2,'KEBERSIHAN DAN KEAMANAN','',1),
(3,'PENDIDIKAN DAN DAKWAH','',1),
(5,'PEMBANGUNAN DAN PEMELIHARAAN','',1),
(6,'SOSIAL MASYARAKAT','',1);

/*Table structure for table `divisi_detail` */

DROP TABLE IF EXISTS `divisi_detail`;

CREATE TABLE `divisi_detail` (
  `divisi_det_id` int(10) NOT NULL AUTO_INCREMENT,
  `divisi_det_ringkasan` text,
  `divisi_det_isi` text,
  `divisi_det_photo` varchar(100) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `divisi_id` int(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`divisi_det_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `divisi_detail` */

insert  into `divisi_detail`(`divisi_det_id`,`divisi_det_ringkasan`,`divisi_det_isi`,`divisi_det_photo`,`created_date`,`divisi_id`,`created_by`,`modified_date`,`modified_by`) values 
(3,'Andai saja aku masih punya kesempatan kedua','<p>Kebersihan dan keamanan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Ardana Gama prasetyo</p>','divisi-08112020061146.jpg','2020-11-08',2,'admin masjid','2020-11-08','admin masjid'),
(4,'Arsip, Perpustakaan dan Dokumentasi','<p>Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan DokumentasiArsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi&nbsp;Arsip, Perpustakaan dan Dokumentasi</p>','divisi-26122020230339.jpg','2020-12-26',1,'admin masjid',NULL,NULL),
(5,'PENDIDIKAN DAN DAKWAH','<p>PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAH&nbsp;</p>\r\n<p>PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAHPENDIDIKAN DAN DAKWAH&nbsp;PENDIDIKAN DAN DAKWAH</p>','divisi-26122020230800.jpg','2020-12-26',3,'admin masjid',NULL,NULL);

/*Table structure for table `donasi` */

DROP TABLE IF EXISTS `donasi`;

CREATE TABLE `donasi` (
  `donasi_id` int(10) NOT NULL AUTO_INCREMENT,
  `donasi_nama` varchar(100) DEFAULT NULL,
  `donasi_ringkasan` text,
  `donasi_isi` text,
  `donasi_photo` varchar(100) DEFAULT NULL,
  `donasi_target` double(10,2) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`donasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `donasi` */

insert  into `donasi`(`donasi_id`,`donasi_nama`,`donasi_ringkasan`,`donasi_isi`,`donasi_photo`,`donasi_target`,`created_date`,`modified_date`,`created_by`,`modified_by`) values 
(2,'PEMBANGUNAN MESJID','Pembangunan Masjid Gabugan','<p>Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;</p>\r\n<p>Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid GabuganPembangunan Masjid GabuganPembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan</p>\r\n<p>Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid GabuganPembangunan Masjid Gabugan&nbsp;</p>','donasi-03012021103118.jpg',30000000.00,'2021-01-03',NULL,'admin masjid',NULL),
(3,'PEMBANGUNAN MESJID','Pembangunan Masjid Gabugan','<p>Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;</p>\r\n<p>Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid GabuganPembangunan Masjid GabuganPembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan</p>\r\n<p>Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid Gabugan&nbsp;Pembangunan Masjid GabuganPembangunan Masjid Gabugan&nbsp;</p>','donasi-03012021103118.jpg',30000000.00,'2021-01-03',NULL,'admin masjid',NULL),
(5,'DONASI COVID','DONASI INI DITUJUKAN UNTUK KORBAN COVID 19\r\nDONASI INI DITUJUKAN UNTUK KORBAN COVID 19\r\nDONASI INI DITUJUKAN UNTUK KORBAN COVID 19','<ul>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n</ul>','donasi-03012021054939.jpg',4000000.00,'2020-11-08','2020-11-08','admin masjid','admin masjid'),
(6,'DONASI COVID','DONASI INI DITUJUKAN UNTUK KORBAN COVID 19\r\nDONASI INI DITUJUKAN UNTUK KORBAN COVID 19\r\nDONASI INI DITUJUKAN UNTUK KORBAN COVID 19','<ul>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n<li>DONASI INI DITUJUKAN UNTUK KORBAN COVID 19</li>\r\n</ul>','donasi-03012021054939.jpg',4000000.00,'2021-11-08','2020-11-08','admin masjid','admin masjid');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`kategori_id`,`kategori_nama`,`user_id`,`kategori_status_id`) values 
(5,'kajian rutin jumat malam',1,1),
(6,'KAJIAN RUTIN AHAD PAGI',1,1),
(7,'TAHSIN BAPAK/IBU',1,1),
(8,'NGAJIPRENUER',1,1),
(9,'RUMAH TAHFIHDZ',1,1),
(10,'cemilan',1,2),
(11,'bahan pokok',1,2),
(12,'Aksesoris',1,3),
(13,'Random',1,1);

/*Table structure for table `kategori_status` */

DROP TABLE IF EXISTS `kategori_status`;

CREATE TABLE `kategori_status` (
  `kategori_status_id` int(3) NOT NULL AUTO_INCREMENT,
  `kategori_status_nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kategori_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_status` */

insert  into `kategori_status`(`kategori_status_id`,`kategori_status_nama`) values 
(1,'KEGIATAN'),
(2,'BUMM');

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(10) NOT NULL AUTO_INCREMENT,
  `kegiatan_nama` varchar(100) DEFAULT NULL,
  `kegiatan_ringkasan` text,
  `kegiatan_isi` longtext,
  `kegiatan_photo` varchar(100) DEFAULT NULL,
  `kegiatan_tanggal` date DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `kategori_id` int(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  PRIMARY KEY (`kegiatan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`kegiatan_id`,`kegiatan_nama`,`kegiatan_ringkasan`,`kegiatan_isi`,`kegiatan_photo`,`kegiatan_tanggal`,`created_date`,`kategori_id`,`created_by`,`modified_by`,`modified_date`) values 
(6,'Kajian Rutin Jumat malam','Pengajian rutin yang diadakan oleh masjid at taqwa gabugan','<p>Pengajian rutin yang diadakan oleh masjid at taqwa gabugan</p>','kegiatan-26122020114412.jpg','2020-11-17','2020-11-09',5,'admin masjid','admin masjid','2021-01-01'),
(7,'Kajian Rutin Ahad Pagi','Kajian Rutin Ahad Pagi dilaksanakan Tanggal 09 Januari 2020','<p>PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJID.</p>\r\n<p>PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJID&nbsp;&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;&nbsp;PEMBERSIHAN HALAMAN MASJID</p>\r\n<p>&nbsp;</p>\r\n<p>PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJIDPEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID&nbsp;PEMBERSIHAN HALAMAN MASJID</p>\r\n<p>&nbsp;</p>','kegiatan-26122020113533.jpg','2020-12-26','2020-12-26',6,'admin masjid','admin masjid','2021-01-01'),
(8,'Tahun baru hijriah','TAHUN BARU HIJRIAH','<p>TAHUN BARU HIJRIAH</p>','kegiatan-02012021002605.jpg','2021-01-02','2021-01-02',5,'admin masjid','admin masjid','2021-01-02'),
(9,'MAULID NABI','AAA','<p>AAA</p>','kegiatan-02012021003143.jpg','2021-01-02','2021-01-02',6,'admin masjid','admin masjid','2021-01-02'),
(10,'Wirid rutin','Wirid Rutin Jumat malam','<p>Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malamWirid Malam jumat malamWirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malamWirid Malam jumat malam&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malamWirid Malam jumat malamWirid Malam jumat malamWirid Malam jumat malam&nbsp;Wirid Malam jumat malamWirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;Wirid Malam jumat malamWirid Malam jumat malam&nbsp;Wirid Malam jumat malam&nbsp;</p>','kegiatan-17012021153334.jpg','2021-01-18','2021-01-17',5,'admin masjid','admin masjid','2021-01-17'),
(11,'Ceramah Ramadhan 1','Ceramah Ramadhan 1','<p>Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;</p>\r\n<p>&nbsp;Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1</p>\r\n<p>&nbsp;</p>\r\n<p>Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;Ceramah Ramadhan 1Ceramah Ramadhan 1Ceramah Ramadhan 1&nbsp;</p>','kegiatan-17012021153457.jpg','2021-01-17','2021-01-17',6,'admin masjid','admin masjid','2021-01-17'),
(12,'Pelatihan Wirausaha','Pelatihan Wirausaha','<p>Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;</p>\r\n<p>&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;</p>\r\n<p>Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha&nbsp;Pelatihan WirausahaPelatihan Wirausaha</p>','kegiatan-24012021085701.jpg','2021-01-24','2021-01-24',8,'admin masjid','admin masjid','2021-01-24'),
(13,'Hafalan Harian','Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian ','<p>Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;&nbsp;Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;&nbsp;Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;</p>\r\n<p>Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;&nbsp;Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;&nbsp;Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;&nbsp;Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;</p>\r\n<p>Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;&nbsp;Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;&nbsp;Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian Hafalan Harian&nbsp;</p>','kegiatan-24012021085921.jpg','2021-01-24','2021-01-24',9,'admin masjid','admin masjid','2021-01-24'),
(14,'Mengenal Baginda Rasul','Mengenal Baginda Rasul','<p>Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul</p>\r\n<p>&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul</p>\r\n<p>Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul&nbsp;Mengenal Baginda Rasul&nbsp;Mengenal Baginda RasulMengenal Baginda Rasul</p>','kegiatan-24012021090312.jpg','2021-01-26','2021-01-24',7,'admin masjid','admin masjid','2021-01-24'),
(15,'Faizal','aizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaal','<p>aizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaal</p>','kegiatan-24012021125627.jpg','2021-01-24','2021-01-24',6,'admin masjid','admin masjid','2021-01-24'),
(16,'Random','aizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaal','<p>aizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaalFaizaaaaaal</p>','kegiatan-24012021130029.jpg','2021-01-06','2021-01-24',13,'admin masjid','admin masjid','2021-01-24');

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `level_id` int(5) NOT NULL AUTO_INCREMENT,
  `level_nama` varchar(10) DEFAULT NULL,
  `level_jabatan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`level_id`,`level_nama`,`level_jabatan`) values 
(1,'1','ketua'),
(3,'2','ADMIN');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_username`,`user_password`,`user_name`,`level_id`,`user_aktif`,`user_photo`) values 
(1,'admin','21232f297a57a5a743894a0e4a801fc3','admin masjid',1,'Y','admin.jpg'),
(6,'ardan','21232f297a57a5a743894a0e4a801fc3','Ardana Gama',1,'Y','produk-25102020082930.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
