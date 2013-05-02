-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2013 at 03:37 AM
-- Server version: 5.5.29-log
-- PHP Version: 5.3.21

SET FOREIGN_KEY_CHECKS=0;
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan_id` int(11) DEFAULT NULL,
  `date` date NOT NULL COMMENT 'tanggal input cbr',
  `kh_score` int(11) NOT NULL COMMENT 'score Know How',
  `ps_persent` int(11) NOT NULL COMMENT 'persentasi nilai problem solving',
  `ps_score` int(11) NOT NULL COMMENT 'score problem solving',
  `ac_score` int(11) NOT NULL COMMENT 'score Accountability',
  `total` int(11) NOT NULL,
  `relation` smallint(6) DEFAULT '0',
  `information` text,
  PRIMARY KEY (`id`),
  KEY `fk_cbr_jabatan1_idx` (`jabatan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=473 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=476 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=476 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=476 ;

-- --------------------------------------------------------

--
-- Table structure for table `competency_category`
--

CREATE TABLE IF NOT EXISTS `competency_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `definition` text,
  `competency_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competency_category_competency_type1_idx` (`competency_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=199 ;

-- --------------------------------------------------------

--
-- Table structure for table `competency_cli`
--

CREATE TABLE IF NOT EXISTS `competency_cli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) DEFAULT NULL,
  `competency_type_id` int(11) NOT NULL,
  `p_person_id` int(11) NOT NULL,
  `w_occupation_id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cli_rekap_competency_type1` (`competency_type_id`),
  KEY `fk_cli_rekap_p_person1` (`p_person_id`),
  KEY `fk_cli_rekap_w_occupation1` (`w_occupation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `competency_library`
--

CREATE TABLE IF NOT EXISTS `competency_library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `dimension` varchar(45) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  `level_1` text,
  `level_2` text,
  `level_3` text,
  `level_4` text,
  `level_5` text,
  `date` date DEFAULT NULL,
  `active` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_competency_library_competency_category1_idx` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=162 ;

-- --------------------------------------------------------

--
-- Table structure for table `competency_rekap`
--

CREATE TABLE IF NOT EXISTS `competency_rekap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rcl` varchar(45) DEFAULT NULL,
  `itj` varchar(45) DEFAULT NULL,
  `competency_library_id` int(11) NOT NULL,
  `p_person_id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `w_occupation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competency_rekap_competency_library1` (`competency_library_id`),
  KEY `fk_competency_rekap_p_person1` (`p_person_id`),
  KEY `fk_competency_rekap_w_occupation1` (`w_occupation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `competency_result`
--

CREATE TABLE IF NOT EXISTS `competency_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) DEFAULT NULL,
  `assessor_id` int(11) NOT NULL,
  `assessed_id` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `evidence` text,
  `date` date DEFAULT NULL,
  `competency_library_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competency_result_p_person1` (`assessor_id`),
  KEY `fk_competency_result_p_person2` (`assessed_id`),
  KEY `fk_competency_result_competency_library1_idx` (`competency_library_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `competency_task`
--

CREATE TABLE IF NOT EXISTS `competency_task` (
  `w_occupation_id` int(11) NOT NULL,
  `competency_library_id` int(11) NOT NULL,
  `rcl` int(11) DEFAULT NULL,
  `itj` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_occupation_id`,`competency_library_id`),
  KEY `fk_w_occupation_has_competency_library_competency_library1` (`competency_library_id`),
  KEY `fk_w_occupation_has_competency_library_w_occupation1` (`w_occupation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `competency_type`
--

CREATE TABLE IF NOT EXISTS `competency_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person`
--

CREATE TABLE IF NOT EXISTS `p_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'nomer karyawan',
  `user_id` int(11) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `avatar` varchar(200) NOT NULL,
  `employee_status` smallint(6) DEFAULT NULL,
  `employee_code` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL COMMENT 'nama depan karyawan',
  `lastname` varchar(45) DEFAULT NULL COMMENT 'nama tengah karyawan',
  `nickname` varchar(45) DEFAULT NULL COMMENT 'nikcname / nama panggilan karyawan',
  `birth_date` date DEFAULT NULL COMMENT 'tanggal lahir karyawan',
  `birth_place` varchar(45) DEFAULT NULL,
  `blood_id` varchar(5) DEFAULT NULL COMMENT 'kota tempat tinggal ',
  `marital_id` smallint(6) DEFAULT NULL COMMENT 'status perkawinan karyawan',
  `sex_id` smallint(6) DEFAULT NULL COMMENT 'sex id :\\n1 = male\\n2 = female',
  `religion_id` int(11) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL COMMENT 'alamat utama karyawan',
  `address2` varchar(255) DEFAULT NULL COMMENT 'alamat alternatif karyawan',
  `pos_code` varchar(10) DEFAULT NULL COMMENT 'kodepos tempat tinggal',
  `identity_number` varchar(40) DEFAULT NULL COMMENT 'nomor ktp karyawan',
  `identity_valid` date DEFAULT NULL COMMENT 'tanggal berakhir ktp karyawan',
  `identity_state` int(11) DEFAULT NULL,
  `identity_pos_code` varchar(10) DEFAULT NULL,
  `driver_license_number` varchar(45) DEFAULT NULL COMMENT 'nomor sim / driver license karyawan',
  `driver_license_valid` date DEFAULT NULL COMMENT 'tanggal berakhir sim karyawan',
  `email1` varchar(50) DEFAULT NULL COMMENT 'email utama',
  `email2` varchar(50) DEFAULT NULL COMMENT 'email lain',
  `phone_mobile` varchar(20) DEFAULT NULL COMMENT 'nomer telepon rumah',
  `phone_home` varchar(20) DEFAULT NULL COMMENT 'nomer telepon handphone',
  `phone_office` varchar(20) DEFAULT NULL COMMENT 'nomer telepon kantor',
  `custom` text COMMENT 'custom field',
  `create_date` date NOT NULL,
  `create_by` int(11) NOT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nip_UNIQUE` (`employee_code`),
  KEY `fk_karyawan_user1_idx` (`user_id`),
  KEY `fk_karyawan_jabatan1_idx` (`jabatan_id`),
  KEY `fk_p_person_w_religion1_idx` (`religion_id`),
  KEY `fk_p_person_w_state1_idx` (`identity_state`),
  KEY `fk_p_person_w_user1_idx` (`create_by`),
  KEY `fk_p_person_w_user2_idx` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person_education`
--

CREATE TABLE IF NOT EXISTS `p_person_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'nomor karyawan',
  `level` varchar(100) DEFAULT NULL COMMENT 'jenis pendidikan yang ditempuh (nilai diambil dari setting)\\\\\\\\n',
  `institution_name` varchar(100) DEFAULT NULL COMMENT 'institusi tempat menempuh pendidikan',
  `institution_major` varchar(45) DEFAULT NULL COMMENT 'program studi, penjurusan / sepsialisasi',
  `gpa_score` varchar(25) DEFAULT NULL COMMENT 'Indeks Prestasi',
  `tgl_masuk` date DEFAULT NULL COMMENT 'tanggal masuk',
  `tgl_keluar` date DEFAULT NULL COMMENT 'tanggal keluar',
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_pendidikan_karyawan1_idx` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person_emergency_contact`
--

CREATE TABLE IF NOT EXISTS `p_person_emergency_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'kode karyawan',
  `name` varchar(255) NOT NULL COMMENT 'nama lengkap yang bisa dihubungi',
  `relation` varchar(255) NOT NULL COMMENT 'relasi dengan karyawan (tipe relasi melalui tabel setting)',
  `phone_home` varchar(20) DEFAULT NULL COMMENT 'nomor telepon rumah',
  `phone_mobile` varchar(20) DEFAULT NULL COMMENT 'nomor handphone',
  `phone_office` varchar(20) DEFAULT NULL COMMENT 'nomer telepon kantor',
  PRIMARY KEY (`id`),
  KEY `fk_employee_emergency_contact_employee1_idx` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person_family`
--

CREATE TABLE IF NOT EXISTS `p_person_family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'kode karyawan',
  `name` varchar(255) NOT NULL COMMENT 'nama orang tertanggung',
  `relation_id` int(11) DEFAULT NULL COMMENT 'relasi dengan karyawan (tipe relasi melalui setting)',
  `birth_date` date DEFAULT NULL COMMENT 'tanggal lahir tertanggung',
  `birth_place` varchar(45) DEFAULT NULL,
  `sex_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_tanggungan_employee1_idx` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person_imigration`
--

CREATE TABLE IF NOT EXISTS `p_person_imigration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `document_number` varchar(100) NOT NULL,
  `document_issue_date` date DEFAULT NULL COMMENT 'tanggal dikeluarkan nya dokumen',
  `document_valid_date` date NOT NULL COMMENT 'tanggal berakhir nya dokumen',
  `country_issued` int(11) NOT NULL,
  `detail` varchar(200) DEFAULT NULL COMMENT 'kelayakan status dokumen',
  PRIMARY KEY (`id`),
  KEY `fk_employee_imigrasi_employee1_idx` (`person_id`),
  KEY `fk_karyawan_imigrasi_negara1_idx` (`country_issued`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person_occupation_historical`
--

CREATE TABLE IF NOT EXISTS `p_person_occupation_historical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `occupation_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_historical_jabatan_karyawan1_idx` (`person_id`),
  KEY `fk_karyawan_historical_jabatan_jabatan1_idx` (`occupation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person_sertification`
--

CREATE TABLE IF NOT EXISTS `p_person_sertification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'nomor karyawan',
  `sertificate_type` varchar(100) NOT NULL COMMENT 'jenis sertifikasi yang dimiliki (data diambil dari setting)',
  `sertificate_number` varchar(50) NOT NULL COMMENT 'nomor seri sertifikat',
  `publish_date` date DEFAULT NULL COMMENT 'tanggal dikeluarkan sertifikat',
  `valid_date` date DEFAULT NULL COMMENT 'tanggal berakhir sertifikat',
  `image` varchar(200) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_sertifikasi_karyawan1_idx` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_person_skill`
--

CREATE TABLE IF NOT EXISTS `p_person_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id pengalaman kerja',
  `person_id` int(11) NOT NULL COMMENT 'nomer karyawan',
  `company` varchar(255) NOT NULL COMMENT 'perusahaan terdahulu tempat karyawan pernah bekerja',
  `job_title` varchar(255) NOT NULL COMMENT 'jabatan terakhir di perusahaan',
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `detail` text,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_pengalamankerja_karyawan1_idx` (`person_id`)
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

-- --------------------------------------------------------

--
-- Table structure for table `w_golongan`
--

CREATE TABLE IF NOT EXISTS `w_golongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `strata` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `w_job_family`
--

CREATE TABLE IF NOT EXISTS `w_job_family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `information` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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
  `job_family` int(11) DEFAULT NULL,
  `golongan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jabatan_jabatan1_idx` (`parent`),
  KEY `fk_w_occupation_w_unit1_idx` (`w_unit_id`),
  KEY `fk_w_occupation_w_job_family1_idx` (`job_family`),
  KEY `fk_w_occupation_w_golongan1` (`golongan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=531 ;

-- --------------------------------------------------------

--
-- Table structure for table `w_option`
--

CREATE TABLE IF NOT EXISTS `w_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `w_preference`
--

CREATE TABLE IF NOT EXISTS `w_preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `w_religion`
--

CREATE TABLE IF NOT EXISTS `w_religion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- Table structure for table `w_user`
--

CREATE TABLE IF NOT EXISTS `w_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id',
  `username` varchar(45) NOT NULL COMMENT 'username untuk login',
  `password` varchar(45) NOT NULL COMMENT 'password untuk login',
  `hash` varchar(45) NOT NULL COMMENT '\\\\\\\\\\\\\\''kode enkripsi khusus milik user\\\\\\\\\\\\\\''',
  `created_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `description` text,
  `status_id` smallint(6) DEFAULT NULL COMMENT 'status user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `fk_w_user_w_user1_idx` (`created_by`),
  KEY `fk_w_user_w_user2_idx` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

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
-- Constraints for table `competency_category`
--
ALTER TABLE `competency_category`
  ADD CONSTRAINT `fk_competency_category_competency_type1` FOREIGN KEY (`competency_type_id`) REFERENCES `competency_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `competency_cli`
--
ALTER TABLE `competency_cli`
  ADD CONSTRAINT `fk_cli_rekap_competency_type1` FOREIGN KEY (`competency_type_id`) REFERENCES `competency_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cli_rekap_p_person1` FOREIGN KEY (`p_person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cli_rekap_w_occupation1` FOREIGN KEY (`w_occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `competency_library`
--
ALTER TABLE `competency_library`
  ADD CONSTRAINT `fk_competency_library_competency_category1` FOREIGN KEY (`category`) REFERENCES `competency_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `competency_rekap`
--
ALTER TABLE `competency_rekap`
  ADD CONSTRAINT `fk_competency_rekap_p_person1` FOREIGN KEY (`p_person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_competency_rekap_w_occupation1` FOREIGN KEY (`w_occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `competency_result`
--
ALTER TABLE `competency_result`
  ADD CONSTRAINT `fk_competency_result_competency_library1` FOREIGN KEY (`competency_library_id`) REFERENCES `competency_library` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_competency_result_p_person1` FOREIGN KEY (`assessor_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_competency_result_p_person2` FOREIGN KEY (`assessed_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `competency_task`
--
ALTER TABLE `competency_task`
  ADD CONSTRAINT `fk_w_occupation_has_competency_library_w_occupation1` FOREIGN KEY (`w_occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `p_person`
--
ALTER TABLE `p_person`
  ADD CONSTRAINT `fk_karyawan_jabatan1` FOREIGN KEY (`jabatan_id`) REFERENCES `w_occupation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_user1` FOREIGN KEY (`user_id`) REFERENCES `w_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_person_w_religion1` FOREIGN KEY (`religion_id`) REFERENCES `w_religion` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_person_w_state1` FOREIGN KEY (`identity_state`) REFERENCES `w_state` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_person_w_user1` FOREIGN KEY (`create_by`) REFERENCES `w_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_person_w_user2` FOREIGN KEY (`modified_by`) REFERENCES `w_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `p_person_education`
--
ALTER TABLE `p_person_education`
  ADD CONSTRAINT `fk_karyawan_pendidikan_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_person_emergency_contact`
--
ALTER TABLE `p_person_emergency_contact`
  ADD CONSTRAINT `fk_employee_emergency_contact_employee1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_person_family`
--
ALTER TABLE `p_person_family`
  ADD CONSTRAINT `fk_employee_tanggungan_employee1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_person_imigration`
--
ALTER TABLE `p_person_imigration`
  ADD CONSTRAINT `fk_employee_imigrasi_employee1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_karyawan_imigrasi_negara1` FOREIGN KEY (`country_issued`) REFERENCES `w_country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `p_person_occupation_historical`
--
ALTER TABLE `p_person_occupation_historical`
  ADD CONSTRAINT `fk_karyawan_historical_jabatan_jabatan1` FOREIGN KEY (`occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_karyawan_historical_jabatan_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_person_sertification`
--
ALTER TABLE `p_person_sertification`
  ADD CONSTRAINT `fk_karyawan_sertifikasi_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_person_skill`
--
ALTER TABLE `p_person_skill`
  ADD CONSTRAINT `fk_karyawan_pengalamankerja_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_w_occupation_w_golongan1` FOREIGN KEY (`golongan_id`) REFERENCES `w_golongan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_w_occupation_w_job_family1` FOREIGN KEY (`job_family`) REFERENCES `w_job_family` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_w_occupation_w_unit1` FOREIGN KEY (`w_unit_id`) REFERENCES `w_unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `w_user`
--
ALTER TABLE `w_user`
  ADD CONSTRAINT `fk_w_user_w_user1` FOREIGN KEY (`created_by`) REFERENCES `w_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_w_user_w_user2` FOREIGN KEY (`modified_by`) REFERENCES `w_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
