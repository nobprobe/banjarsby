/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.5.5-10.1.9-MariaDB : Database - databanjarsurabaya
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`databanjarsurabaya` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `databanjarsurabaya`;

/*Table structure for table `datawarga` */

DROP TABLE IF EXISTS `datawarga`;

CREATE TABLE `datawarga` (
  `id_warga` varchar(6) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `alamat` text,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_warga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `datawarga` */

/*Table structure for table `login_mahasiswa` */

DROP TABLE IF EXISTS `login_mahasiswa`;

CREATE TABLE `login_mahasiswa` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cookie_set` varchar(50) NOT NULL,
  `last_time_login` time DEFAULT NULL,
  `log_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login_mahasiswa` */

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_perguruan_tinggi` int(11) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Tahun_angkatan` year(4) NOT NULL,
  `Facebook` varchar(50) NOT NULL,
  `Twitter` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id_mahasiswa`,`id_perguruan_tinggi`,`Nama`,`Email`,`Fakultas`,`Jurusan`,`Tahun_angkatan`,`Facebook`,`Twitter`) values (1,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(2,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(3,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(4,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(5,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(6,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(7,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(8,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(9,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby'),(10,1,'nobby','nobby.phala@gmail.com','ftif','tc',2014,'nobby','nobby');

/*Table structure for table `perguruan_tinggi` */

DROP TABLE IF EXISTS `perguruan_tinggi`;

CREATE TABLE `perguruan_tinggi` (
  `id_perguruan_tinggi` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_perguruan` varchar(50) NOT NULL,
  `Alias` varchar(50) NOT NULL,
  `Jumlah_anggota` int(11) NOT NULL,
  PRIMARY KEY (`id_perguruan_tinggi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `perguruan_tinggi` */

insert  into `perguruan_tinggi`(`id_perguruan_tinggi`,`Nama_perguruan`,`Alias`,`Jumlah_anggota`) values (1,'Institut Teknologi Sepuluh Nopember','ITS',10),(2,'Universitas Airlangga','UNAIr',10);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
