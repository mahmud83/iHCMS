-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2012 at 04:37 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.3.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";

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

-- --------------------------------------------------------

--
-- Table structure for table `cbr`
--

CREATE TABLE IF NOT EXISTS `cbr` (
  `id` int(11) NOT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
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
  `warga_negara` int(11) DEFAULT NULL COMMENT 'negara asal karyawan',
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
  `negara` int(11) DEFAULT NULL COMMENT 'negara tempat tinggal',
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
  `user_id` int(11) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nip_UNIQUE` (`nip`),
  KEY `fk_karyawan_negara1_idx` (`negara`),
  KEY `fk_karyawan_propinsi1_idx` (`propinsi`),
  KEY `fk_karyawan_negara2_idx` (`warga_negara`),
  KEY `fk_karyawan_user1_idx` (`user_id`),
  KEY `fk_karyawan_jabatan1_idx` (`jabatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_historical_jabatan`
--

CREATE TABLE IF NOT EXISTS `karyawan_historical_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_historical_jabatan_karyawan1_idx` (`karyawan_id`),
  KEY `fk_karyawan_historical_jabatan_jabatan1_idx` (`jabatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `jenis` varchar(100) DEFAULT NULL COMMENT 'jenis pendidikan yang ditempuh (nilai diambil dari setting)\\\\\\\\n',
  `institusi` varchar(100) DEFAULT NULL COMMENT 'institusi tempat menempuh pendidikan',
  `major` varchar(45) DEFAULT NULL COMMENT 'program studi, penjurusan / sepsialisasi',
  `nilai` varchar(25) DEFAULT NULL COMMENT 'Indeks Prestasi',
  `tgl_masuk` date DEFAULT NULL COMMENT 'tanggal masuk',
  `tgl_keluar` date DEFAULT NULL COMMENT 'tanggal keluar',
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_pendidikan_karyawan1_idx` (`karyawan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `w_country`
--

CREATE TABLE IF NOT EXISTS `w_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL COMMENT 'format penulisan kode negara dalam 2 huruf',
  `name` varchar(100) NOT NULL COMMENT 'nama terang negara	',
  `iso3` varchar(3) DEFAULT NULL COMMENT 'penulisan kode negara dalam format 3 huruf',
  `numcode` int(11) DEFAULT NULL COMMENT 'kode negara dalam angka',
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_UNIQUE` (`code`),
  UNIQUE KEY `iso3_UNIQUE` (`iso3`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `w_country`
--

INSERT INTO `w_country` (`id`, `code`, `name`, `iso3`, `numcode`) VALUES
(1, 'AD', 'Andorra', 'AND', 20),
(2, 'BV', 'Bouvet Island', '', NULL),
(3, 'ID', 'Indonesia', 'IDN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `w_link`
--

CREATE TABLE IF NOT EXISTS `w_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `auth` text,
  `w_module_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_link_link1_idx` (`parent_id`),
  KEY `fk_w_link_w_module1_idx` (`w_module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `w_link`
--

INSERT INTO `w_link` (`id`, `parent_id`, `name`, `title`, `url`, `image`, `auth`, `w_module_id`) VALUES
(11, NULL, 'wModule', 'module', 'wModule', '', '', 1),
(12, NULL, 'wLink', 'link', 'wLink', '', '', 1),
(13, NULL, 'wCountry', 'country', 'wCountry', '', '', 1),
(14, NULL, 'wState', 'State', 'wState', '', '', 1),
(15, NULL, 'wUnit', 'Unit', 'wUnit', '', '', 1),
(16, NULL, 'wOccupation', 'Occupation', 'wOccupation', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `w_module`
--

CREATE TABLE IF NOT EXISTS `w_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_module_module1_idx` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `w_module`
--

INSERT INTO `w_module` (`id`, `parent_id`, `name`, `title`, `description`, `url`, `image`) VALUES
(1, NULL, 'core', 'System Core', '', 'core', ''),
(2, NULL, 'pim', 'Personal Information Manager', '', 'pim', ''),
(3, NULL, 'renum', 'Renumeration', '', 'renum', '');

-- --------------------------------------------------------

--
-- Table structure for table `w_occupation`
--

CREATE TABLE IF NOT EXISTS `w_occupation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `level` int(11) DEFAULT '0',
  `parent` int(11) DEFAULT NULL,
  `w_unit_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jabatan_jabatan1_idx` (`parent`),
  KEY `fk_w_occupation_w_unit1_idx` (`w_unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `w_preference`
--

CREATE TABLE IF NOT EXISTS `w_preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `w_preference`
--

INSERT INTO `w_preference` (`id`, `name`, `value`) VALUES
(1, 'site_name', 'iHCMS');

-- --------------------------------------------------------

--
-- Table structure for table `w_state`
--

CREATE TABLE IF NOT EXISTS `w_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL COMMENT 'nama propinsi',
  `code` varchar(5) DEFAULT NULL COMMENT 'kode propinsi',
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propinsi_negara1_idx` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `w_state`
--

INSERT INTO `w_state` (`id`, `name`, `code`, `country_id`) VALUES
(1, 'Yogyakarta', '', 3),
(2, 'Jakarta', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `w_unit`
--

CREATE TABLE IF NOT EXISTS `w_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_w_unit_w_unit1_idx` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `w_unit`
--

INSERT INTO `w_unit` (`id`, `code`, `name`, `level`, `parent_id`) VALUES
(1, '', 'Dewan Direksi', NULL, NULL),
(2, '', 'Kantor Pusat', 1, 1),
(3, '', 'SBU Tandun', 1, 1),
(4, '', 'SBU Tandun', 1, 1),
(5, '', 'SBU Sei Galuh', 1, 1),
(6, '', 'SBU Sei Rokan', 1, 1),
(7, '', 'SBU Sei Rokan', 1, 1),
(8, '', 'SBU Lubuk Dalam', 1, 1),
(9, '', 'Kebun Tandun', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `w_user`
--

CREATE TABLE IF NOT EXISTS `w_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id',
  `username` varchar(45) NOT NULL COMMENT 'username untuk login',
  `password` varchar(45) NOT NULL COMMENT 'password untuk login',
  `hash` varchar(45) NOT NULL COMMENT '\\\\\\\\\\\\\\''kode enkripsi khusus milik user\\\\\\\\\\\\\\''',
  `tgl_buat` datetime DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `deskripsi` text,
  `status` enum('aktif','non-aktif') DEFAULT 'non-aktif' COMMENT 'status user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `w_user`
--

INSERT INTO `w_user` (`id`, `username`, `password`, `hash`, `tgl_buat`, `tgl_edit`, `deskripsi`, `status`) VALUES
(1, 'admin', '3566e246ab80b9989149b84a0b62e433', '50b86eafe09b14.73729655', '2012-11-30 08:30:39', '2012-11-30 08:30:39', NULL, 'aktif');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cbr`
--
ALTER TABLE `cbr`
  ADD CONSTRAINT `fk_cbr_jabatan1` FOREIGN KEY (`jabatan_id`) REFERENCES `w_occupation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `cbr_accountability`
--
ALTER TABLE `cbr_accountability`
  ADD CONSTRAINT `fk_cbr_accountability_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cbr_know_how`
--
ALTER TABLE `cbr_know_how`
  ADD CONSTRAINT `fk_cbr_know_how_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cbr_problem_solving`
--
ALTER TABLE `cbr_problem_solving`
  ADD CONSTRAINT `fk_cbr_problem_solving_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `fk_karyawan_jabatan1` FOREIGN KEY (`jabatan_id`) REFERENCES `w_occupation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_negara1` FOREIGN KEY (`negara`) REFERENCES `w_country` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_negara2` FOREIGN KEY (`warga_negara`) REFERENCES `w_country` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_propinsi1` FOREIGN KEY (`propinsi`) REFERENCES `w_state` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_user1` FOREIGN KEY (`user_id`) REFERENCES `w_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_historical_jabatan`
--
ALTER TABLE `karyawan_historical_jabatan`
  ADD CONSTRAINT `fk_karyawan_historical_jabatan_jabatan1` FOREIGN KEY (`jabatan_id`) REFERENCES `w_occupation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_karyawan_historical_jabatan_karyawan1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_imigrasi`
--
ALTER TABLE `karyawan_imigrasi`
  ADD CONSTRAINT `fk_employee_imigrasi_employee1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_imigrasi_negara1` FOREIGN KEY (`negara_id`) REFERENCES `w_country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `w_link`
--
ALTER TABLE `w_link`
  ADD CONSTRAINT `fk_link_link1` FOREIGN KEY (`parent_id`) REFERENCES `w_link` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_w_link_w_module1` FOREIGN KEY (`w_module_id`) REFERENCES `w_module` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `w_module`
--
ALTER TABLE `w_module`
  ADD CONSTRAINT `fk_module_module1` FOREIGN KEY (`parent_id`) REFERENCES `w_module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `w_occupation`
--
ALTER TABLE `w_occupation`
  ADD CONSTRAINT `fk_jabatan_jabatan1` FOREIGN KEY (`parent`) REFERENCES `w_occupation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_w_occupation_w_unit1` FOREIGN KEY (`w_unit_id`) REFERENCES `w_unit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `w_state`
--
ALTER TABLE `w_state`
  ADD CONSTRAINT `fk_propinsi_negara1` FOREIGN KEY (`country_id`) REFERENCES `w_country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `w_unit`
--
ALTER TABLE `w_unit`
  ADD CONSTRAINT `fk_w_unit_w_unit1` FOREIGN KEY (`parent_id`) REFERENCES `w_unit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;
