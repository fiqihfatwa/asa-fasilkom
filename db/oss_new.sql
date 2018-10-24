/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - oss
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`oss` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `oss`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `created_by` int(50) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`nama_admin`,`created_by`,`created_time`) values 
(1,'admin',NULL,NULL);

/*Table structure for table `data_admin` */

DROP TABLE IF EXISTS `data_admin`;

CREATE TABLE `data_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `data_admin` */

insert  into `data_admin`(`id`,`nama_admin`,`username`,`password`) values 
(1,'admin','admin','21232f297a57a5a743894a0e4a801fc3');

/*Table structure for table `data_mahasiswa` */

DROP TABLE IF EXISTS `data_mahasiswa`;

CREATE TABLE `data_mahasiswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `program_studi` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `data_mahasiswa` */

insert  into `data_mahasiswa`(`id`,`nama_depan`,`nama_belakang`,`nim`,`email`,`tempat_lahir`,`tanggal_lahir`,`program_studi`,`password`) values 
(7,'Muhammad',' Isa Dadi Hasibuan','141402039','isa.dadi@students.usu.ac.id',' KOTA BINJAI','1996-12-06','Sosiologi','$2y$10$NBooMgNU4NOvjg725Vvc8e.jCf6Zv3/3VSxEfIyPgRdPwhVqQpJWS'),
(12,'Ridho',' Fariha','141402021','ridhofariha@students.usu.ac.id',' KOTA MEDAN','1997-05-17','Antropologi','$2y$10$hPCFla0iKpkNzielp83Hn.aQ1WyZn00HOebmGzSKEXRVfS0I3EXu6'),
(13,'NABILA',' DEANNA','141402131','deannabila@students.usu.ac.id',' KOTA MEDAN','1996-10-20','Teknologi Informasi','$2y$10$adIqSxOcYVduZAKXksxVp.F3.HjpCP68WsFuRvugpChQQdKEC/6Zy'),
(14,'MHD',' IBRAHIM LUBIS','141402103','muhammadibrahimlubis@students.usu.ac.id',' KOTA MEDAN','1996-05-25','Teknologi Informasi','$2y$10$dIROmMwDeqaUBOhNMVpn5epLJBWgIXIB8DZcJaJrM/O6VPeZIAYoi'),
(16,'Taufiq',' Rourkyendo','171402030','taufiq.rourkyendo@students.usu.ac.id',' KAB. LANGKAT','1998-12-11','Teknologi Informasi','$2y$10$wPdlX//.yabqrGEMKeNQNuxpJUHpe90HxrToxn.SF.7yzPM4Ctvia'),
(17,'AHMAD',' ADIL','171402081','ahmad.adil819@students.usu.ac.id',' KAB. SLEMAN','1999-01-08','Teknologi Informasi','$2y$10$Oz7JjtS7TuZFQAKvIvwageLOICyFsK2WOpg7KmIC45Ny9.faave3K');

/*Table structure for table `data_pegawai` */

DROP TABLE IF EXISTS `data_pegawai`;

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `data_pegawai` */

insert  into `data_pegawai`(`id`,`username`,`password`,`bagian`,`fakultas`,`program_studi`) values 
(1,'Fakultas Akademik','78df579d8baa4f457a42dbc592ebd2ee','Pegawai Kasub Akademik','Fakultas Ilmu Politik dan Sosial','-'),
(3,'Fakultas Kemahasiswaan','79db7d99c0b1a24d44eb1176630b8273','Pegawai Kasub Kemahasiswaan','Fakultas Ilmu Politik dan Sosial','-'),
(6,'Antropologi','e3d60f202ceef167bdc96b60f80b9347','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Antropologi'),
(8,'Ilmu Administrasi Bisnis','b8f8d2fef3efc7b85f3d86237bf4ed2b','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Ilmu Administrasi Bisnis'),
(10,'Ilmu Komunikasi','900b0f5be94d7602fbd8cbe03b5274ba','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Ilmu Komunikasi'),
(12,'Ilmu Administrasi Publik','64233c53ba8df55824d80af6a96841bf','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Ilmu Administrasi Publik'),
(14,'Kesejahteraan Sosial','14429682b2cc3cdabce778351cb1bfdd','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Kesejahteraan Sosial'),
(16,'Ilmu Politik','563fb4075858619cc1c92eb9b0717e57','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Ilmu Politik'),
(17,'Sosiologi','664656ef342e28059789d8c99ebbf0c9','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Sosiologi'),
(19,'Perpajakan','e7721bdebf0c3d73d11cb33faad64af0','Pegawai Prodi','Fakultas Ilmu Politik dan Sosial','Perpajakan');

/*Table structure for table `detail_edaran` */

DROP TABLE IF EXISTS `detail_edaran`;

CREATE TABLE `detail_edaran` (
  `id_detail_edaran` int(10) NOT NULL AUTO_INCREMENT,
  `id_edaran` int(10) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_detail_edaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_edaran` */

/*Table structure for table `detail_surat` */

DROP TABLE IF EXISTS `detail_surat`;

CREATE TABLE `detail_surat` (
  `id_detail` int(10) NOT NULL AUTO_INCREMENT,
  `id_isi` int(10) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_isi` (`id_isi`),
  CONSTRAINT `detail_surat_ibfk_1` FOREIGN KEY (`id_isi`) REFERENCES `isi_surat` (`id_isi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

/*Data for the table `detail_surat` */

insert  into `detail_surat`(`id_detail`,`id_isi`,`id_surat`,`keterangan`) values 
(38,3,1,'Taufiq  Rourkyendo'),
(39,3,2,'171402030'),
(40,3,3,'Pangkalan Brandan'),
(41,3,4,'1998-12-11'),
(42,3,5,'Jalan Piturah, Gg.Bakti, Pangkalan Brandan'),
(43,3,6,'082276648478'),
(44,3,7,'robinhd300@gmail.com'),
(45,3,8,'2017'),
(46,3,9,'3'),
(47,3,10,'2021'),
(48,3,11,'3.9'),
(49,3,12,''),
(50,3,13,'Keterangan aktif kuliah'),
(51,3,14,'SPP-171402030.jpeg'),
(52,3,15,'KTM-171402030.jpeg'),
(53,3,32,'Suwitono'),
(54,3,33,'Pangkalan Brandan'),
(55,3,43,'S1'),
(56,3,44,'Ilmu Komputer dan Teknologi Informasi'),
(57,3,45,'Teknologi Informasi'),
(58,4,1,'Ariel  Febrian'),
(59,4,2,'171402150'),
(60,4,3,'teluk ambun'),
(61,4,4,'1998-02-09'),
(62,4,5,'asrama putera '),
(63,4,6,'081269918734'),
(64,4,7,'arielfebrian98@gmail.com'),
(65,4,8,'2017'),
(66,4,9,'3'),
(67,4,10,'2021'),
(68,4,11,'3.58'),
(69,4,12,'3.51'),
(70,4,13,'mau ambil beasiswa unggulan'),
(71,4,14,'SPP-171402150.jpeg'),
(72,4,15,'KTM-171402150.jpeg'),
(73,4,32,'udin pohan'),
(74,4,33,'siti ambia, kec,singkil,kab.aceh singkil'),
(75,4,43,'S1'),
(76,4,44,'Ilmu Komputer dan Teknologi Informasi'),
(77,4,45,'Teknologi Informasi'),
(78,5,1,'MUHAMMAD  BAGUS SYAHPUTRA TAMBUNAN'),
(79,5,2,'171402090'),
(80,5,3,'Kisaran'),
(81,5,4,'1999-08-30'),
(82,5,5,'Dusun 2 Air Genting, Air Batu, Asahan'),
(83,5,6,'082276593144'),
(84,5,7,'mhdbagus79@gmail.com'),
(85,5,8,'2016'),
(86,5,9,'1'),
(87,5,10,'2019'),
(88,5,11,'3.6'),
(89,5,12,'3.6'),
(90,5,13,'Ngetes program'),
(91,5,14,'SPP-171402090.jpeg'),
(92,5,15,'KTM-171402090.jpeg'),
(93,5,32,'Anonim'),
(94,5,33,'Dusun 3'),
(95,5,43,'S1'),
(96,5,44,'Ilmu Komputer dan Teknologi Informasi'),
(97,5,45,'Teknologi Informasi'),
(123,7,16,'Taufiq  Rourkyendo'),
(124,7,17,'171402030'),
(125,7,18,'Pangkalan Brandan'),
(126,7,19,'1998-12-11'),
(127,7,20,'Jalan Piturah, Gg.Bakti, Pangkalan Brandan'),
(128,7,21,'082276648478'),
(129,7,22,'robinhd300@gmail.com'),
(130,7,23,'2017'),
(131,7,24,'3'),
(132,7,25,'2021'),
(133,7,26,'3.9'),
(134,7,27,''),
(135,7,28,'Pernyataan masih kuliah'),
(136,7,29,'SPP-171402030.jpeg'),
(137,7,30,'KTM-171402030.jpeg'),
(138,7,31,'KTM-171402030.jpeg'),
(139,7,34,'Suwitono'),
(140,7,35,''),
(141,7,36,''),
(142,7,37,''),
(143,7,38,''),
(144,7,39,''),
(145,7,40,'Sei Lepan'),
(146,7,41,'Langkat'),
(147,7,42,'Pangkalan Brandan'),
(148,7,43,'S1'),
(149,7,44,'Ilmu Komputer dan Teknologi Informasi'),
(150,7,45,'Teknologi Informasi');

/*Table structure for table `edaran` */

DROP TABLE IF EXISTS `edaran`;

CREATE TABLE `edaran` (
  `id_edaran` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(10) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  PRIMARY KEY (`id_edaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `edaran` */

/*Table structure for table `isi_surat` */

DROP TABLE IF EXISTS `isi_surat`;

CREATE TABLE `isi_surat` (
  `id_isi` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_proses` date DEFAULT NULL,
  `tanggal_keluar` datetime DEFAULT NULL,
  `status_surat` enum('Pending','On Process','Selesai','Ditolak') NOT NULL,
  `nim` char(14) NOT NULL,
  `resi` varchar(5) NOT NULL,
  PRIMARY KEY (`id_isi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `isi_surat` */

insert  into `isi_surat`(`id_isi`,`id_jenis`,`tanggal_masuk`,`tanggal_proses`,`tanggal_keluar`,`status_surat`,`nim`,`resi`) values 
(3,1,'2018-10-23','2018-10-23',NULL,'On Process','171402030',''),
(4,1,'2018-10-23','2018-10-23',NULL,'On Process','171402150',''),
(5,1,'2018-10-23','2018-10-23',NULL,'On Process','171402090',''),
(7,2,'2018-10-23','2018-10-23',NULL,'On Process','171402030','');

/*Table structure for table `jenis_surat` */

DROP TABLE IF EXISTS `jenis_surat`;

CREATE TABLE `jenis_surat` (
  `id_jenis` int(1) NOT NULL AUTO_INCREMENT,
  `jenis_surat` varchar(225) NOT NULL,
  `terusan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_surat` */

insert  into `jenis_surat`(`id_jenis`,`jenis_surat`,`terusan`) values 
(1,'Surat keterangan aktif kuliah','Kemahasiswaan'),
(2,'Surat pernyataan masih kuliah','Kemahasiswaan');

/*Table structure for table `log_pegawai` */

DROP TABLE IF EXISTS `log_pegawai`;

CREATE TABLE `log_pegawai` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `isi_log` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `log_pegawai` */

insert  into `log_pegawai`(`id`,`isi_log`,`tanggal`) values 
(4,'Fakultas Kemahasiswaan telah memeroses Surat keterangan aktif kuliah milik Taufiq  Rourkyendo','2018-10-23 12:52:32'),
(5,'Fakultas Kemahasiswaan telah memeroses Surat keterangan aktif kuliah milik Taufiq  Rourkyendo','2018-10-23 13:05:14'),
(6,'Fakultas Kemahasiswaan telah memeroses Surat keterangan aktif kuliah milik Ariel  Febrian','2018-10-23 13:55:01'),
(7,'Fakultas Kemahasiswaan telah memeroses Surat keterangan aktif kuliah milik MUHAMMAD  BAGUS SYAHPUTRA TAMBUNAN','2018-10-23 14:13:29'),
(8,'Fakultas Kemahasiswaan telah memeroses Surat pernyataan masih kuliah milik Taufiq  Rourkyendo','2018-10-23 18:18:18');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `nim` varchar(9) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `program_studi` varchar(150) DEFAULT NULL,
  `link_foto` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id_mahasiswa`,`nama_depan`,`nama_belakang`,`nim`,`email`,`tempat_lahir`,`tanggal_lahir`,`program_studi`,`link_foto`) values 
(12,'Ridho',' Fariha','141402021','ridhofariha@students.usu.ac.id',' KOTA MEDAN','1997-05-17','Antropologi',NULL),
(13,'NABILA',' DEANNA','141402131','deannabila@students.usu.ac.id',' KOTA MEDAN','1996-10-20','Teknologi Informasi',NULL),
(14,'MHD',' IBRAHIM LUBIS','141402103','muhammadibrahimlubis@students.usu.ac.id',' KOTA MEDAN','1996-05-25','Teknologi Informasi',NULL),
(30,'AHMAD',' ADIL','171402081','ahmad.adil819@students.usu.ac.id',' KAB. SLEMAN','1999-01-08','Teknologi Informasi','https://portal.usu.ac.id/photos/171402081.jpg'),
(61,'Taufiq',' Rourkyendo','171402030','taufiq.rourkyendo@students.usu.ac.id',' KAB. LANGKAT','1998-12-11','Teknologi Informasi','https://portal.usu.ac.id/photos/171402030.jpg'),
(62,'ILHAM',' SYAFUTRA','170402128','ilhamsyafutra@students.usu.ac.id',' KOTA LHOKSEUMAWE','1999-06-16','Teknik Elektro','https://portal.usu.ac.id/photos/170402128.jpg'),
(63,'ROGATE',' SOLA FIDE','171402138','rogate.sola.fide@students.usu.ac.id',' JAKARTA SELATAN','1998-01-13','Teknologi Informasi','https://portal.usu.ac.id/photos/171402138.jpg'),
(64,'Ariel',' Febrian','171402150','arielfebrian@students.usu.ac.id',' KAB.ACEH SINGKIL','1998-02-09','Teknologi Informasi','https://portal.usu.ac.id/photos/171402150.jpg'),
(65,'MUHAMMAD',' BAGUS SYAHPUTRA TAMBUNAN','171402090','mhd_bagus@students.usu.ac.id',' KAB. ASAHAN','1999-07-30','Teknologi Informasi','https://portal.usu.ac.id/photos/171402090.jpg');

/*Table structure for table `notif_surat_mahasiswa` */

DROP TABLE IF EXISTS `notif_surat_mahasiswa`;

CREATE TABLE `notif_surat_mahasiswa` (
  `id_notif` int(9) NOT NULL AUTO_INCREMENT,
  `isi_notif` text NOT NULL,
  `alasan` text,
  `tanggal_diproses` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_surat` int(9) NOT NULL,
  `proses` char(1) NOT NULL,
  `selesai` char(1) NOT NULL,
  `dibaca` char(1) NOT NULL,
  PRIMARY KEY (`id_notif`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `notif_surat_mahasiswa` */

insert  into `notif_surat_mahasiswa`(`id_notif`,`isi_notif`,`alasan`,`tanggal_diproses`,`id_surat`,`proses`,`selesai`,`dibaca`) values 
(7,'Surat anda sedang di proses',NULL,'2018-10-23 13:05:14',3,'Y','N','N'),
(8,'Surat anda sedang di proses',NULL,'2018-10-23 13:55:01',4,'Y','N','N'),
(9,'Surat anda sedang di proses',NULL,'2018-10-23 14:13:29',5,'Y','N','N'),
(10,'Surat anda sedang di proses',NULL,'2018-10-23 18:18:18',7,'Y','N','N');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `bagian` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `created_by` int(50) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id_pegawai`,`bagian`,`fakultas`,`program_studi`,`created_by`,`created_time`) values 
(1,'Pegawai Kasub Akademik','Fakultas Ilmu Politik dan Sosial','-',NULL,NULL),
(2,'Pegawai Kasub Kemahasiswaan','Fakultas Ilmu Komputer dan Teknologi Informasi','',NULL,NULL);

/*Table structure for table `surat` */

DROP TABLE IF EXISTS `surat`;

CREATE TABLE `surat` (
  `id_surat` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(10) NOT NULL,
  `form_surat` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `placeholder` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `surat` */

insert  into `surat`(`id_surat`,`id_jenis`,`form_surat`,`type`,`name`,`placeholder`) values 
(1,1,'Nama','text','nama','Masukkan nama'),
(2,1,'NIM','text','nim','Masukkan NIM'),
(3,1,'Tempat','text','tempat','Masukkan tempat lahir'),
(4,1,'Tgl.Lahir','text','tglLahir','Masukkan tanggal lahir (YYYY-MM-DD)'),
(5,1,'Alamat','text','alamat','Masukkan alamat lengkap'),
(6,1,'HP','text','hp','Masukkan no.hp'),
(7,1,'Email','email','email','Masukkan email'),
(8,1,'Tahun masuk','text','ThnMsk','Masukkan tahun masuk'),
(9,1,'Semester','text','semester','Masukkan semester saat ini'),
(10,1,'Rencana tamat','text','rencanaTamat','Masukkan rencana tamat'),
(11,1,'IPS','text','ips','Masukkan IPS'),
(12,1,'IPK','text','ipk','Masukkan IPK (kosongkan bila tidak ada)'),
(13,1,'Keperluan surat','text','keterangan','Masukkan keterangan '),
(14,1,'Scan SPP','file','spp','Masukkan scan SPP terakhir'),
(15,1,'scan KTM','file','ktm','Masukkan scan KTM'),
(16,2,'Nama','text','nama','Masukkan nama'),
(17,2,'NIM','text','nim','Masukkan NIM'),
(18,2,'Tempat','text','tempat','Masukkan tempat lahir'),
(19,2,'Tgl.Lahir','text','tglLahir','Masukkan tanggal lahir (YYYY-MM-DD)'),
(20,2,'Alamat','text','alamat','Masukkan alamat lengkap'),
(21,2,'HP/Telepon','text','hp','Masukkan no.hp/Telepon'),
(22,2,'Email','email','email','Masukkan email'),
(23,2,'Tahun masuk','text','ThnMsk','Masukkan tahun masuk'),
(24,2,'Semester','text','semester','Masukkan semester saat ini'),
(25,2,'Rencana tamat','text','rencanaTamat','Masukkan rencana tamat'),
(26,2,'IPS','text','ips','Masukkan IPS'),
(27,2,'IPK','text','ipk','Masukkan IPK (kosongkan bila tidak ada)'),
(28,2,'Keperluan surat','text','keterangan','Masukkan keterangan '),
(29,2,'Scan SPP','file','spp','Masukkan scan SPP terakhir'),
(30,2,'scan KTM','file','ktm','Masukkan scan KTM'),
(31,2,'scan SK/Surat Keterangan dari tempat orang tua bekerja','file','skortu','Masukkan scan SK/Surat keterangan dari tempat oran'),
(32,2,'Nama orangtua','text','nama_ortu','Masukkan Nama Orangtua'),
(33,1,'Alamat orangtua','text','alamat_ortu','Masukkan Alamat Orangtua'),
(34,1,'Nama orangtua','text','nama_ortu','Masukkan Nama Orangtua'),
(35,2,'NIP/NRP/Nopen','text','nip','Masukkan NIP/NRP/Nopen'),
(36,2,'Pangkat','text','pangkat','Masukkan Pangkat (kosongkan bila tidak ada)'),
(37,2,'Golongan','text','golongan','Masukkan Golongan (kosongkan bila tidak ada)'),
(38,2,'Jabatan','text','jabatan','Masukkan Jabatan (kosongkan bila tidak ada)'),
(39,2,'Instansi','text','instansi','Masukkan Instansi (kosongkan bila tidak ada)'),
(40,2,'Kecamatan','text','kec','Masukkan Kecamatan'),
(41,2,'Kabupaten','text','kab','Masukkan Kabupaten'),
(42,2,'Kota','text','kota','Masukkan Kota'),
(43,1,'Jenjang Studi','text','j_studi','Masukkan Jenjang Studi'),
(44,1,'Departemen','text','dept','Masukkan Departemen'),
(45,1,'Prodi','text','prodi','Masukkan Prodi'),
(46,2,'Jenjang Studi','text','j_studi','Masukkan Jenjang Studi'),
(47,2,'Departemen','text','dept','Masukkan Departemen'),
(48,2,'Prodi','text','prodi','Masukkan Prodi'),
(49,0,'','','','');

/*Table structure for table `surat_balasan` */

DROP TABLE IF EXISTS `surat_balasan`;

CREATE TABLE `surat_balasan` (
  `id_balasan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_surat` varchar(80) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  PRIMARY KEY (`id_balasan`),
  KEY `id_jenis` (`id_jenis`),
  CONSTRAINT `surat_balasan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_surat` (`id_jenis`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `surat_balasan` */

insert  into `surat_balasan`(`id_balasan`,`nama_surat`,`id_jenis`) values 
(3,'Surat keterangan aktif kuliah milik Taufiq  Rourkyendo',1),
(4,'Surat keterangan aktif kuliah milik Ariel  Febrian',1),
(5,'Surat keterangan aktif kuliah milik MUHAMMAD  BAGUS SYAHPUTRA TAMBUNAN',1),
(6,'Surat pernyataan masih kuliah milik Taufiq  Rourkyendo',2);

/*Table structure for table `user_group` */

DROP TABLE IF EXISTS `user_group`;

CREATE TABLE `user_group` (
  `group_id` int(50) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) NOT NULL,
  `created_by` int(50) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user_group` */

insert  into `user_group`(`group_id`,`level`,`created_by`,`created_time`) values 
(1,'admin',NULL,NULL),
(2,'pegawai',NULL,NULL),
(3,'mahasiswa',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_time` datetime DEFAULT NULL,
  `group_id` int(50) NOT NULL,
  `kon_id` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`username`,`password`,`created_time`,`group_id`,`kon_id`) values 
(39,'admin','21232f297a57a5a743894a0e4a801fc3',NULL,1,1),
(40,'Fakultas Akademik','78df579d8baa4f457a42dbc592ebd2ee',NULL,2,1),
(42,'171402030','a9be25651b7f51db3ee242844ee0711d','2018-10-15 21:11:24',3,61),
(43,'170402128','89654909734519a9e18ee56c0f02c328','2018-10-15 21:22:46',3,62),
(44,'171402138','ea7c83f1503aa10a658b034e4624a251','2018-10-18 08:51:40',3,63),
(45,'Fakultas Kemahasiswaan','79db7d99c0b1a24d44eb1176630b8273',NULL,2,2),
(46,'171402150','52f48a1f44daf3658d084b02dc09535b','2018-10-23 13:47:18',3,64),
(47,'171402090','526c3898e49cf6e1ccbfa8be72cf9764','2018-10-23 14:06:47',3,65);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
