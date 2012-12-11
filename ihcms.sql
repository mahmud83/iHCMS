-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2012 at 07:27 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.3.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ihcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Guest', 2, 'guest', NULL, 'N;'),
('Karyawan.*', 1, NULL, NULL, 'N;'),
('Karyawan.Admin', 0, NULL, NULL, 'N;'),
('Karyawan.Create', 0, NULL, NULL, 'N;'),
('Karyawan.Delete', 0, NULL, NULL, 'N;'),
('Karyawan.Index', 0, NULL, NULL, 'N;'),
('Karyawan.Update', 0, NULL, NULL, 'N;'),
('Karyawan.View', 0, NULL, NULL, 'N;'),
('KaryawanSertifikasi.*', 1, NULL, NULL, 'N;'),
('KaryawanSertifikasi.Admin', 0, NULL, NULL, 'N;'),
('KaryawanSertifikasi.Create', 0, NULL, NULL, 'N;'),
('KaryawanSertifikasi.Delete', 0, NULL, NULL, 'N;'),
('KaryawanSertifikasi.Index', 0, NULL, NULL, 'N;'),
('KaryawanSertifikasi.Update', 0, NULL, NULL, 'N;'),
('KaryawanSertifikasi.View', 0, NULL, NULL, 'N;'),
('Login.*', 1, NULL, NULL, 'N;'),
('Login.Index', 0, NULL, NULL, 'N;'),
('Negara.*', 1, NULL, NULL, 'N;'),
('Negara.Admin', 0, NULL, NULL, 'N;'),
('Negara.Create', 0, NULL, NULL, 'N;'),
('Negara.Delete', 0, NULL, NULL, 'N;'),
('Negara.Index', 0, NULL, NULL, 'N;'),
('Negara.Update', 0, NULL, NULL, 'N;'),
('Negara.View', 0, NULL, NULL, 'N;'),
('Pim.Default.*', 1, NULL, NULL, 'N;'),
('Pim.Default.Index', 0, NULL, NULL, 'N;'),
('Pim.Karyawan.*', 1, NULL, NULL, 'N;'),
('Pim.Karyawan.Admin', 0, NULL, NULL, 'N;'),
('Pim.Karyawan.Create', 0, NULL, NULL, 'N;'),
('Pim.Karyawan.Delete', 0, NULL, NULL, 'N;'),
('Pim.Karyawan.Index', 0, NULL, NULL, 'N;'),
('Pim.Karyawan.Update', 0, NULL, NULL, 'N;'),
('Pim.Karyawan.View', 0, NULL, NULL, 'N;'),
('Pim.KaryawanImigrasi.*', 1, NULL, NULL, 'N;'),
('Pim.KaryawanImigrasi.Admin', 0, NULL, NULL, 'N;'),
('Pim.KaryawanImigrasi.Create', 0, NULL, NULL, 'N;'),
('Pim.KaryawanImigrasi.Delete', 0, NULL, NULL, 'N;'),
('Pim.KaryawanImigrasi.Index', 0, NULL, NULL, 'N;'),
('Pim.KaryawanImigrasi.Update', 0, NULL, NULL, 'N;'),
('Pim.KaryawanImigrasi.View', 0, NULL, NULL, 'N;'),
('Pim.KaryawanKontakdarurat.*', 1, NULL, NULL, 'N;'),
('Pim.KaryawanKontakdarurat.Admin', 0, NULL, NULL, 'N;'),
('Pim.KaryawanKontakdarurat.Create', 0, NULL, NULL, 'N;'),
('Pim.KaryawanKontakdarurat.Delete', 0, NULL, NULL, 'N;'),
('Pim.KaryawanKontakdarurat.Index', 0, NULL, NULL, 'N;'),
('Pim.KaryawanKontakdarurat.Update', 0, NULL, NULL, 'N;'),
('Pim.KaryawanKontakdarurat.View', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPendidikan.*', 1, NULL, NULL, 'N;'),
('Pim.KaryawanPendidikan.Admin', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPendidikan.Create', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPendidikan.Delete', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPendidikan.Index', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPendidikan.Update', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPendidikan.View', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPengalamankerja.*', 1, NULL, NULL, 'N;'),
('Pim.KaryawanPengalamankerja.Admin', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPengalamankerja.Create', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPengalamankerja.Delete', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPengalamankerja.Index', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPengalamankerja.Update', 0, NULL, NULL, 'N;'),
('Pim.KaryawanPengalamankerja.View', 0, NULL, NULL, 'N;'),
('Pim.KaryawanSertifikasi.*', 1, NULL, NULL, 'N;'),
('Pim.KaryawanSertifikasi.Admin', 0, NULL, NULL, 'N;'),
('Pim.KaryawanSertifikasi.Create', 0, NULL, NULL, 'N;'),
('Pim.KaryawanSertifikasi.Delete', 0, NULL, NULL, 'N;'),
('Pim.KaryawanSertifikasi.Index', 0, NULL, NULL, 'N;'),
('Pim.KaryawanSertifikasi.Update', 0, NULL, NULL, 'N;'),
('Pim.KaryawanSertifikasi.View', 0, NULL, NULL, 'N;'),
('Pim.KaryawanTanggungan.*', 1, NULL, NULL, 'N;'),
('Pim.KaryawanTanggungan.Admin', 0, NULL, NULL, 'N;'),
('Pim.KaryawanTanggungan.Create', 0, NULL, NULL, 'N;'),
('Pim.KaryawanTanggungan.Delete', 0, NULL, NULL, 'N;'),
('Pim.KaryawanTanggungan.Index', 0, NULL, NULL, 'N;'),
('Pim.KaryawanTanggungan.Update', 0, NULL, NULL, 'N;'),
('Pim.KaryawanTanggungan.View', 0, NULL, NULL, 'N;'),
('Preference.*', 1, NULL, NULL, 'N;'),
('Preference.Admin', 0, NULL, NULL, 'N;'),
('Preference.Create', 0, NULL, NULL, 'N;'),
('Preference.Delete', 0, NULL, NULL, 'N;'),
('Preference.Index', 0, NULL, NULL, 'N;'),
('Preference.Update', 0, NULL, NULL, 'N;'),
('Preference.View', 0, NULL, NULL, 'N;'),
('Propinsi.*', 1, NULL, NULL, 'N;'),
('Propinsi.Admin', 0, NULL, NULL, 'N;'),
('Propinsi.Create', 0, NULL, NULL, 'N;'),
('Propinsi.Delete', 0, NULL, NULL, 'N;'),
('Propinsi.Index', 0, NULL, NULL, 'N;'),
('Propinsi.Update', 0, NULL, NULL, 'N;'),
('Propinsi.View', 0, NULL, NULL, 'N;'),
('Site.*', 1, NULL, NULL, 'N;'),
('Site.Contact', 0, NULL, NULL, 'N;'),
('Site.Error', 0, NULL, NULL, 'N;'),
('Site.Index', 0, NULL, NULL, 'N;'),
('Site.Login', 0, NULL, NULL, 'N;'),
('Site.Logout', 0, NULL, NULL, 'N;'),
('User.*', 1, NULL, NULL, 'N;'),
('User.Admin', 0, NULL, NULL, 'N;'),
('User.Create', 0, NULL, NULL, 'N;'),
('User.Delete', 0, NULL, NULL, 'N;'),
('User.Index', 0, NULL, NULL, 'N;'),
('User.Update', 0, NULL, NULL, 'N;'),
('User.View', 0, NULL, NULL, 'N;'),
('Wilayah.Default.*', 1, NULL, NULL, 'N;'),
('Wilayah.Default.Index', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthItemChild`
--

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
('Authenticated', 'Karyawan.*'),
('Authenticated', 'KaryawanSertifikasi.*'),
('Authenticated', 'Login.*'),
('Authenticated', 'Negara.*'),
('Authenticated', 'Negara.Admin'),
('Authenticated', 'Negara.Create'),
('Authenticated', 'Negara.Delete'),
('Authenticated', 'Negara.Index'),
('Authenticated', 'Negara.Update'),
('Authenticated', 'Negara.View'),
('Authenticated', 'Preference.*'),
('Authenticated', 'Propinsi.*'),
('Authenticated', 'Site.*'),
('Authenticated', 'User.*'),
('Authenticated', 'User.Admin'),
('Authenticated', 'User.Create'),
('Authenticated', 'User.Delete'),
('Authenticated', 'User.Index'),
('Authenticated', 'User.Update'),
('Authenticated', 'User.View');

-- --------------------------------------------------------

--
-- Table structure for table `cbr`
--

CREATE TABLE IF NOT EXISTS `cbr` (
  `id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `date` date NOT NULL COMMENT 'tanggal input cbr',
  `kh_score` int(11) NOT NULL COMMENT 'score Know How',
  `ps_persent` int(11) NOT NULL COMMENT 'persentasi nilai problem solving',
  `ps_score` int(11) NOT NULL COMMENT 'score problem solving',
  `ac_score` int(11) NOT NULL COMMENT 'score Accountability',
  PRIMARY KEY (`id`),
  KEY `fk_cbr_jabatan1_idx` (`jabatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cbr_accountability`
--

CREATE TABLE IF NOT EXISTS `cbr_accountability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cbr_id` int(11) NOT NULL,
  `fta` varchar(45) NOT NULL COMMENT 'Freedom To Act',
  `aid` varchar(45) DEFAULT NULL COMMENT 'Area Indeterminate',
  `amt` varchar(45) DEFAULT NULL COMMENT 'Area Magnitude',
  `toi` varchar(45) DEFAULT NULL COMMENT 'Type Of Impact',
  `prf` varchar(45) DEFAULT NULL COMMENT 'Profile',
  PRIMARY KEY (`id`),
  KEY `fk_cbr_accountability_cbr1_idx` (`cbr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cbr_know_how`
--

CREATE TABLE IF NOT EXISTS `cbr_know_how` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cbr_id` int(11) NOT NULL,
  `tkh` varchar(45) NOT NULL COMMENT 'Technical Know How',
  `mkh` varchar(45) NOT NULL COMMENT 'Management Know How',
  `hrs` varchar(45) NOT NULL COMMENT 'Human Relation Skill',
  PRIMARY KEY (`id`),
  KEY `fk_cbr_know_how_cbr1_idx` (`cbr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cbr_problem_solving`
--

CREATE TABLE IF NOT EXISTS `cbr_problem_solving` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cbr_id` int(11) NOT NULL,
  `tet` varchar(45) NOT NULL COMMENT 'Thingking Environtment',
  `tce` varchar(45) NOT NULL COMMENT 'Thingking Challenge',
  PRIMARY KEY (`id`),
  KEY `fk_cbr_problem_solving_cbr1_idx` (`cbr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'nomer karyawan',
  `nip` varchar(45) NOT NULL,
  `nama_depan` varchar(45) NOT NULL COMMENT 'nama depan karyawan',
  `nama_tengah` varchar(45) DEFAULT NULL COMMENT 'nama tengah karyawan',
  `nama_belakang` varchar(45) DEFAULT NULL COMMENT 'nama belakang karyawan',
  `nama_panggilan` varchar(45) DEFAULT NULL COMMENT 'nikcname / nama panggilan karyawan',
  `tgl_lahir` date DEFAULT NULL COMMENT 'tanggal lahir karyawan',
  `warga_negara` int(11) NOT NULL COMMENT 'negara asal karyawan',
  `kelamin` varchar(45) DEFAULT NULL COMMENT 'jenis kelamin karyawan',
  `no_ktp` varchar(255) DEFAULT NULL COMMENT 'nomor ktp karyawan',
  `no_ktp_exp_date` date DEFAULT NULL COMMENT 'tanggal berakhir ktp karyawan',
  `no_sim` varchar(255) DEFAULT NULL COMMENT 'nomor sim / driver license karyawan',
  `no_sim_exp_date` date DEFAULT NULL COMMENT 'tanggal berakhir sim karyawan',
  `status_kawin` varchar(45) DEFAULT NULL COMMENT 'status perkawinan karyawan',
  `status_karyawan` int(11) DEFAULT NULL,
  `alamat1` varchar(255) DEFAULT NULL COMMENT 'alamat utama karyawan',
  `alamat2` varchar(255) DEFAULT NULL COMMENT 'alamat alternatif karyawan',
  `kota` varchar(100) DEFAULT NULL COMMENT 'kota tempat tinggal ',
  `negara` int(11) NOT NULL COMMENT 'negara tempat tinggal',
  `propinsi` int(11) DEFAULT NULL COMMENT 'propinsi tempat tinggal',
  `kodepos` varchar(100) DEFAULT NULL COMMENT 'kodepos tempat tinggal',
  `tlp_rumah` varchar(50) DEFAULT NULL COMMENT 'nomer telepon rumah',
  `tlp_mobile` varchar(50) DEFAULT NULL COMMENT 'nomer telepon handphone',
  `tlp_kantor` varchar(50) DEFAULT NULL COMMENT 'nomer telepon kantor',
  `email1` varchar(50) DEFAULT NULL COMMENT 'email utama',
  `email2` varchar(50) DEFAULT NULL COMMENT 'email lain',
  `custom` text COMMENT 'custom field',
  `avatar` varchar(200) NOT NULL,
  `avatar_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nip` (`nip`),
  KEY `fk_karyawan_negara1_idx` (`negara`),
  KEY `fk_karyawan_propinsi1_idx` (`propinsi`),
  KEY `fk_karyawan_negara2_idx` (`warga_negara`),
  KEY `fk_karyawan_user1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nip`, `nama_depan`, `nama_tengah`, `nama_belakang`, `nama_panggilan`, `tgl_lahir`, `warga_negara`, `kelamin`, `no_ktp`, `no_ktp_exp_date`, `no_sim`, `no_sim_exp_date`, `status_kawin`, `status_karyawan`, `alamat1`, `alamat2`, `kota`, `negara`, `propinsi`, `kodepos`, `tlp_rumah`, `tlp_mobile`, `tlp_kantor`, `email1`, `email2`, `custom`, `avatar`, `avatar_date`, `user_id`) VALUES
(1, '10018030', 'dimas', '', 'angger', '', '0000-00-00', 3, '', '', '0000-00-00', '', '0000-00-00', '', NULL, '', '', '', 3, 2, '', '', '', '', '', '', '', 'male.jpg', '0000-00-00', 8),
(3, '0987654321', 'tar', 'jo', 'no', 'tarjono', '0000-00-00', 3, 'Pria', '0987654', '0000-00-00', '87678987', '0000-00-00', '', NULL, '', '', '', 3, 2, '55167', '', '', '', '', '', '', '50bef0a05cf9d1.40982545-nyoh cilikan.png', '0000-00-00', 13);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_imigrasi`
--

CREATE TABLE IF NOT EXISTS `karyawan_imigrasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL,
  `nomor_dokumen` varchar(100) NOT NULL,
  `tgl_dikeluarkan` date NOT NULL COMMENT 'tanggal dikeluarkan nya dokumen',
  `tgl_berakhir` date NOT NULL COMMENT 'tanggal berakhir nya dokumen',
  `status_kelayakan` varchar(100) DEFAULT NULL COMMENT 'kelayakan status dokumen',
  `review_date` date DEFAULT NULL COMMENT 'tanggal di review nya status kelayakan dokumen',
  `negara_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_imigrasi_employee1_idx` (`karyawan_id`),
  KEY `fk_karyawan_imigrasi_negara1_idx` (`negara_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_kontakdarurat`
--

CREATE TABLE IF NOT EXISTS `karyawan_kontakdarurat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL COMMENT 'kode karyawan',
  `nama` varchar(255) NOT NULL COMMENT 'nama lengkap yang bisa dihubungi',
  `relasi` varchar(255) NOT NULL COMMENT 'relasi dengan karyawan (tipe relasi melalui tabel setting)',
  `telp_rumah` varchar(50) DEFAULT NULL COMMENT 'nomor telepon rumah',
  `telp_mobile` varchar(50) DEFAULT NULL COMMENT 'nomor handphone',
  `telp_kantor` varchar(50) DEFAULT NULL COMMENT 'nomer telepon kantor',
  PRIMARY KEY (`id`),
  KEY `fk_employee_emergency_contact_employee1_idx` (`karyawan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_pendidikan`
--

CREATE TABLE IF NOT EXISTS `karyawan_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL COMMENT 'nomor karyawan',
  `jenis` varchar(100) DEFAULT NULL COMMENT 'jenis pendidikan yang ditempuh (nilai diambil dari setting)\\n',
  `institusi` varchar(100) DEFAULT NULL COMMENT 'institusi tempat menempuh pendidikan',
  `major` varchar(45) DEFAULT NULL COMMENT 'program studi, penjurusan / sepsialisasi',
  `nilai` varchar(25) DEFAULT NULL COMMENT 'Indeks Prestasi',
  `tgl_masuk` date DEFAULT NULL COMMENT 'tanggal masuk',
  `tgl_keluar` date DEFAULT NULL COMMENT 'tanggal keluar',
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_pendidikan_karyawan1_idx` (`karyawan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `karyawan_pendidikan`
--

INSERT INTO `karyawan_pendidikan` (`id`, `karyawan_id`, `jenis`, `institusi`, `major`, `nilai`, `tgl_masuk`, `tgl_keluar`) VALUES
(1, 1, 'S1', 'Universitas Ahmad Dahlan', 'Teknik Informatika', '3.45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_pengalamankerja`
--

CREATE TABLE IF NOT EXISTS `karyawan_pengalamankerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id pengalaman kerja',
  `karyawan_id` int(11) NOT NULL COMMENT 'nomer karyawan',
  `perusahaan` varchar(255) NOT NULL COMMENT 'perusahaan terdahulu tempat karyawan pernah bekerja',
  `jabatan` varchar(255) NOT NULL COMMENT 'jabatan terakhir di perusahaan',
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `komentar` text,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_pengalamankerja_karyawan1_idx` (`karyawan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_sertifikasi`
--

CREATE TABLE IF NOT EXISTS `karyawan_sertifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL COMMENT 'nomor karyawan',
  `jenis` varchar(100) NOT NULL COMMENT 'jenis sertifikasi yang dimiliki (data diambil dari setting)',
  `nomor` varchar(50) NOT NULL COMMENT 'nomor seri sertifikat',
  `tgl_dikeluarkan` date NOT NULL COMMENT 'tanggal dikeluarkan sertifikat',
  `tgl_berakhir` date NOT NULL COMMENT 'tanggal berakhir sertifikat',
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_sertifikasi_karyawan1_idx` (`karyawan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_tanggungan`
--

CREATE TABLE IF NOT EXISTS `karyawan_tanggungan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL COMMENT 'kode karyawan',
  `nama` varchar(255) NOT NULL COMMENT 'nama orang tertanggung',
  `relasi` varchar(255) NOT NULL COMMENT 'relasi dengan karyawan (tipe relasi melalui setting)',
  `tgl_lahir` date DEFAULT NULL COMMENT 'tanggal lahir tertanggung',
  PRIMARY KEY (`id`),
  KEY `fk_employee_tanggungan_employee1_idx` (`karyawan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE IF NOT EXISTS `negara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(2) NOT NULL COMMENT 'format penulisan kode negara dalam 2 huruf',
  `nama` varchar(100) NOT NULL COMMENT 'nama terang negara	',
  `iso3` varchar(3) DEFAULT NULL COMMENT 'penulisan kode negara dalam format 3 huruf',
  `numcode` int(11) DEFAULT NULL COMMENT 'kode negara dalam angka',
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_UNIQUE` (`kode`),
  UNIQUE KEY `iso3_UNIQUE` (`iso3`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `kode`, `nama`, `iso3`, `numcode`) VALUES
(1, 'AD', 'Andorra', 'AND', 20),
(2, 'BV', 'Bouvet Island', '', NULL),
(3, 'ID', 'Indonesia', 'IDN', NULL),
(4, 'US', 'Amerika Serikat', 'USA', NULL),
(8, 'AE', 'United Arab Emirates', 'ARE', 784),
(10, 'AF', 'Afganistan', 'AFG', 4);

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE IF NOT EXISTS `preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `preference`
--

INSERT INTO `preference` (`id`, `name`, `value`) VALUES
(1, 'site_logo', 'logo/logo.png'),
(2, 'site_name', 'iHCMS'),
(3, 'theme', 'benthik');

-- --------------------------------------------------------

--
-- Table structure for table `propinsi`
--

CREATE TABLE IF NOT EXISTS `propinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL COMMENT 'nama propinsi',
  `kode` varchar(5) DEFAULT NULL COMMENT 'kode propinsi',
  `negara_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propinsi_negara1_idx` (`negara_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `propinsi`
--

INSERT INTO `propinsi` (`id`, `nama`, `kode`, `negara_id`) VALUES
(2, 'Yogyakarta', 'JOG', 3),
(8, 'Jakarta', 'JKT', 3),
(18, 'Jawa Barat', 'JBR', 3),
(19, 'Jawa Timur', 'JTM', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Rights`
--

CREATE TABLE IF NOT EXISTS `Rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4913838a9f50a329bd49b3ea0e0e421b', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/536.26.14 (KHTML, like Gecko)', 1351592698, ''),
('7249af0bde2b6d873fd5dac2939c51bd', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.92 Safari/537.4', 1351598778, ''),
('d614c63077b782c0d68e0215de70733a', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.92 Safari/537.4', 1351525653, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id',
  `username` varchar(45) NOT NULL COMMENT '\\''username untuk login\\''',
  `password` varchar(45) NOT NULL COMMENT '\\''password untuk login\\''',
  `hash` varchar(45) NOT NULL COMMENT '\\''kode enkripsi khusus milik user\\''',
  `tgl_buat` datetime DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `deskripsi` text,
  `status` enum('aktif','non-aktif') DEFAULT 'non-aktif' COMMENT 'status user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hash`, `tgl_buat`, `tgl_edit`, `deskripsi`, `status`) VALUES
(1, 'masbenx', 'a12a095b40f06a95d6e478c1c75cd32d', '50adc1ab30eae2.62563975', '2012-11-22 06:09:47', '2012-11-22 06:09:47', '', 'non-aktif'),
(7, 'danang', 'f9ed82ad94aa662928554a9011a11d58', '50adc5d8471c69.99539251', '2012-11-22 06:25:48', '2012-11-22 06:27:36', '<p>okesip</p>', 'non-aktif'),
(8, 'dimas', '3566e246ab80b9989149b84a0b62e433', '50b86eafe09b14.73729655', '2012-11-30 08:30:39', '2012-11-30 08:30:39', '<p>aku kudu piye</p>', 'non-aktif'),
(13, 'tarjono', '9fc847a437a28bb4af79de8b0326ee0f', '50bef0a05cf9d1.40982545', '2012-12-05 06:58:40', '2012-12-05 06:58:40', NULL, 'non-aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(11) NOT NULL,
  `user_role_group_id` int(11) NOT NULL,
  KEY `fk_user_has_user_role_group_user_role_group1_idx` (`user_role_group_id`),
  KEY `fk_user_has_user_role_group_user_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_role_group`
--

CREATE TABLE IF NOT EXISTS `user_role_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id user role',
  `nama` varchar(255) DEFAULT NULL COMMENT 'nama user role',
  `deskripsi` text COMMENT 'deskripsi singkat tentang user role',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cbr`
--
ALTER TABLE `cbr`
  ADD CONSTRAINT `fk_cbr_jabatan1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cbr_accountability`
--
ALTER TABLE `cbr_accountability`
  ADD CONSTRAINT `fk_cbr_accountability_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cbr_know_how`
--
ALTER TABLE `cbr_know_how`
  ADD CONSTRAINT `fk_cbr_know_how_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cbr_problem_solving`
--
ALTER TABLE `cbr_problem_solving`
  ADD CONSTRAINT `fk_cbr_problem_solving_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `fk_karyawan_negara1` FOREIGN KEY (`negara`) REFERENCES `negara` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_negara2` FOREIGN KEY (`warga_negara`) REFERENCES `negara` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_propinsi1` FOREIGN KEY (`propinsi`) REFERENCES `propinsi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `karyawan_imigrasi`
--
ALTER TABLE `karyawan_imigrasi`
  ADD CONSTRAINT `fk_employee_imigrasi_employee1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_imigrasi_negara1` FOREIGN KEY (`negara_id`) REFERENCES `negara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `karyawan_kontakdarurat`
--
ALTER TABLE `karyawan_kontakdarurat`
  ADD CONSTRAINT `fk_employee_emergency_contact_employee1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_pendidikan`
--
ALTER TABLE `karyawan_pendidikan`
  ADD CONSTRAINT `fk_karyawan_pendidikan_karyawan1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_pengalamankerja`
--
ALTER TABLE `karyawan_pengalamankerja`
  ADD CONSTRAINT `fk_karyawan_pengalamankerja_karyawan1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_sertifikasi`
--
ALTER TABLE `karyawan_sertifikasi`
  ADD CONSTRAINT `fk_karyawan_sertifikasi_karyawan1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_tanggungan`
--
ALTER TABLE `karyawan_tanggungan`
  ADD CONSTRAINT `fk_employee_tanggungan_employee1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `propinsi`
--
ALTER TABLE `propinsi`
  ADD CONSTRAINT `fk_propinsi_negara1` FOREIGN KEY (`negara_id`) REFERENCES `negara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Rights`
--
ALTER TABLE `Rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fk_user_has_user_role_group_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_has_user_role_group_user_role_group1` FOREIGN KEY (`user_role_group_id`) REFERENCES `user_role_group` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
