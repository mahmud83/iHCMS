/*
 Navicat Premium Data Transfer

 Source Server         : localhost (AMPPS)
 Source Server Type    : MySQL
 Source Server Version : 50529
 Source Host           : localhost
 Source Database       : ihcms

 Target Server Type    : MySQL
 Target Server Version : 50529
 File Encoding         : utf-8

 Date: 03/04/2013 22:47:23 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `AuthAssignment`
-- ----------------------------
DROP TABLE IF EXISTS `AuthAssignment`;
CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `AuthAssignment`
-- ----------------------------
BEGIN;
INSERT INTO `AuthAssignment` VALUES ('admin', '1', null, 'N;');
COMMIT;

-- ----------------------------
--  Table structure for `AuthItem`
-- ----------------------------
DROP TABLE IF EXISTS `AuthItem`;
CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `AuthItem`
-- ----------------------------
BEGIN;
INSERT INTO `AuthItem` VALUES ('employee', '2', 'role untuk grup karyawan', null, 'N;'), ('Jabatan.*', '1', null, null, 'N;'), ('Jabatan.Admin', '0', null, null, 'N;'), ('Jabatan.Create', '0', null, null, 'N;'), ('Jabatan.Delete', '0', null, null, 'N;'), ('Jabatan.Index', '0', null, null, 'N;'), ('Jabatan.Update', '0', null, null, 'N;'), ('Jabatan.View', '0', null, null, 'N;'), ('Link.*', '1', null, null, 'N;'), ('Link.Admin', '0', null, null, 'N;'), ('Link.Create', '0', null, null, 'N;'), ('Link.Delete', '0', null, null, 'N;'), ('Link.Index', '0', null, null, 'N;'), ('Link.Update', '0', null, null, 'N;'), ('Link.View', '0', null, null, 'N;'), ('Login.*', '1', null, null, 'N;'), ('Login.Index', '0', null, null, 'N;'), ('Negara.*', '1', null, null, 'N;'), ('Negara.Admin', '0', null, null, 'N;'), ('Negara.Create', '0', null, null, 'N;'), ('Negara.Delete', '0', null, null, 'N;'), ('Negara.Index', '0', null, null, 'N;'), ('Negara.Update', '0', null, null, 'N;'), ('Negara.View', '0', null, null, 'N;'), ('Pim.Default.*', '1', null, null, 'N;'), ('Pim.Default.Index', '0', null, null, 'N;'), ('Pim.Karyawan.*', '1', null, null, 'N;'), ('Pim.Karyawan.Admin', '0', null, null, 'N;'), ('Pim.Karyawan.Create', '0', null, null, 'N;'), ('Pim.Karyawan.Delete', '0', null, null, 'N;'), ('Pim.Karyawan.DetailEmp', '0', null, null, 'N;'), ('Pim.Karyawan.Index', '0', null, null, 'N;'), ('Pim.Karyawan.Update', '0', null, null, 'N;'), ('Pim.Karyawan.View', '0', null, null, 'N;'), ('Pim.Karyawan.WithUser', '0', null, null, 'N;'), ('Pim.KaryawanImigrasi.*', '1', null, null, 'N;'), ('Pim.KaryawanImigrasi.Admin', '0', null, null, 'N;'), ('Pim.KaryawanImigrasi.Create', '0', null, null, 'N;'), ('Pim.KaryawanImigrasi.Delete', '0', null, null, 'N;'), ('Pim.KaryawanImigrasi.EmpDetail', '0', null, null, 'N;'), ('Pim.KaryawanImigrasi.Index', '0', null, null, 'N;'), ('Pim.KaryawanImigrasi.Update', '0', null, null, 'N;'), ('Pim.KaryawanImigrasi.View', '0', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.*', '1', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.Admin', '0', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.Create', '0', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.Delete', '0', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.EmpDetail', '0', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.Index', '0', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.Update', '0', null, null, 'N;'), ('Pim.KaryawanKontakdarurat.View', '0', null, null, 'N;'), ('Pim.KaryawanPendidikan.*', '1', null, null, 'N;'), ('Pim.KaryawanPendidikan.Admin', '0', null, null, 'N;'), ('Pim.KaryawanPendidikan.Create', '0', null, null, 'N;'), ('Pim.KaryawanPendidikan.Delete', '0', null, null, 'N;'), ('Pim.KaryawanPendidikan.EmpDetail', '0', null, null, 'N;'), ('Pim.KaryawanPendidikan.Index', '0', null, null, 'N;'), ('Pim.KaryawanPendidikan.Update', '0', null, null, 'N;'), ('Pim.KaryawanPendidikan.View', '0', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.*', '1', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.Admin', '0', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.Create', '0', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.Delete', '0', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.EmpDetail', '0', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.Index', '0', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.Update', '0', null, null, 'N;'), ('Pim.KaryawanPengalamankerja.View', '0', null, null, 'N;'), ('Pim.KaryawanSertifikasi.*', '1', null, null, 'N;'), ('Pim.KaryawanSertifikasi.Admin', '0', null, null, 'N;'), ('Pim.KaryawanSertifikasi.Create', '0', null, null, 'N;'), ('Pim.KaryawanSertifikasi.Delete', '0', null, null, 'N;'), ('Pim.KaryawanSertifikasi.EmpDetail', '0', null, null, 'N;'), ('Pim.KaryawanSertifikasi.Index', '0', null, null, 'N;'), ('Pim.KaryawanSertifikasi.Update', '0', null, null, 'N;'), ('Pim.KaryawanSertifikasi.View', '0', null, null, 'N;'), ('Pim.KaryawanTanggungan.*', '1', null, null, 'N;'), ('Pim.KaryawanTanggungan.Admin', '0', null, null, 'N;'), ('Pim.KaryawanTanggungan.Create', '0', null, null, 'N;'), ('Pim.KaryawanTanggungan.Delete', '0', null, null, 'N;'), ('Pim.KaryawanTanggungan.EmpDetail', '0', null, null, 'N;'), ('Pim.KaryawanTanggungan.Index', '0', null, null, 'N;'), ('Pim.KaryawanTanggungan.Update', '0', null, null, 'N;'), ('Pim.KaryawanTanggungan.View', '0', null, null, 'N;'), ('Pim.PPerson.*', '1', null, null, 'N;'), ('Pim.PPerson.Admin', '0', null, null, 'N;'), ('Pim.PPerson.Create', '0', null, null, 'N;'), ('Pim.PPerson.Delete', '0', null, null, 'N;'), ('Pim.PPerson.Detail', '0', null, null, 'N;'), ('Pim.PPerson.Index', '0', null, null, 'N;'), ('Pim.PPerson.Update', '0', null, null, 'N;'), ('Pim.PPerson.View', '0', null, null, 'N;'), ('Pim.PPersonEducation.*', '1', null, null, 'N;'), ('Pim.PPersonEducation.Admin', '0', null, null, 'N;'), ('Pim.PPersonEducation.Create', '0', null, null, 'N;'), ('Pim.PPersonEducation.Delete', '0', null, null, 'N;'), ('Pim.PPersonEducation.Index', '0', null, null, 'N;'), ('Pim.PPersonEducation.Update', '0', null, null, 'N;'), ('Pim.PPersonEducation.View', '0', null, null, 'N;'), ('Preference.*', '1', null, null, 'N;'), ('Preference.Admin', '0', null, null, 'N;'), ('Preference.Create', '0', null, null, 'N;'), ('Preference.Delete', '0', null, null, 'N;'), ('Preference.Form', '0', null, null, 'N;'), ('Preference.Index', '0', null, null, 'N;'), ('Preference.Update', '0', null, null, 'N;'), ('Preference.View', '0', null, null, 'N;'), ('Propinsi.*', '1', null, null, 'N;'), ('Propinsi.Admin', '0', null, null, 'N;'), ('Propinsi.Create', '0', null, null, 'N;'), ('Propinsi.Delete', '0', null, null, 'N;'), ('Propinsi.Index', '0', null, null, 'N;'), ('Propinsi.Update', '0', null, null, 'N;'), ('Propinsi.View', '0', null, null, 'N;'), ('Renum.Cbr.*', '1', null, null, 'N;'), ('Renum.Cbr.Admin', '0', null, null, 'N;'), ('Renum.Cbr.Create', '0', null, null, 'N;'), ('Renum.Cbr.Delete', '0', null, null, 'N;'), ('Renum.Cbr.Form', '0', null, null, 'N;'), ('Renum.Cbr.Index', '0', null, null, 'N;'), ('Renum.Cbr.Update', '0', null, null, 'N;'), ('Renum.Cbr.View', '0', null, null, 'N;'), ('Renum.CbrAccountability.*', '1', null, null, 'N;'), ('Renum.CbrAccountability.Admin', '0', null, null, 'N;'), ('Renum.CbrAccountability.Create', '0', null, null, 'N;'), ('Renum.CbrAccountability.Delete', '0', null, null, 'N;'), ('Renum.CbrAccountability.Index', '0', null, null, 'N;'), ('Renum.CbrAccountability.Update', '0', null, null, 'N;'), ('Renum.CbrAccountability.View', '0', null, null, 'N;'), ('Renum.CbrKnowHow.*', '1', null, null, 'N;'), ('Renum.CbrKnowHow.Admin', '0', null, null, 'N;'), ('Renum.CbrKnowHow.Create', '0', null, null, 'N;'), ('Renum.CbrKnowHow.Delete', '0', null, null, 'N;'), ('Renum.CbrKnowHow.Index', '0', null, null, 'N;'), ('Renum.CbrKnowHow.Update', '0', null, null, 'N;'), ('Renum.CbrKnowHow.View', '0', null, null, 'N;'), ('Renum.CbrProblemSolving.*', '1', null, null, 'N;'), ('Renum.CbrProblemSolving.Admin', '0', null, null, 'N;'), ('Renum.CbrProblemSolving.Create', '0', null, null, 'N;'), ('Renum.CbrProblemSolving.Delete', '0', null, null, 'N;'), ('Renum.CbrProblemSolving.Index', '0', null, null, 'N;'), ('Renum.CbrProblemSolving.Update', '0', null, null, 'N;'), ('Renum.CbrProblemSolving.View', '0', null, null, 'N;'), ('Renum.Default.*', '1', null, null, 'N;'), ('Renum.Default.Index', '0', null, null, 'N;'), ('Site.*', '1', null, null, 'N;'), ('Site.Contact', '0', null, null, 'N;'), ('Site.Error', '0', null, null, 'N;'), ('Site.Index', '0', null, null, 'N;'), ('Site.Login', '0', null, null, 'N;'), ('Site.Logout', '0', null, null, 'N;'), ('User.*', '1', null, null, 'N;'), ('User.Admin', '0', null, null, 'N;'), ('User.Create', '0', null, null, 'N;'), ('User.Delete', '0', null, null, 'N;'), ('User.Index', '0', null, null, 'N;'), ('User.Update', '0', null, null, 'N;'), ('User.View', '0', null, null, 'N;'), ('WCountry.*', '1', null, null, 'N;'), ('WCountry.Admin', '0', null, null, 'N;'), ('WCountry.Create', '0', null, null, 'N;'), ('WCountry.Delete', '0', null, null, 'N;'), ('WCountry.Index', '0', null, null, 'N;'), ('WCountry.Update', '0', null, null, 'N;'), ('WCountry.View', '0', null, null, 'N;'), ('Wilayah.Default.*', '1', null, null, 'N;'), ('Wilayah.Default.Index', '0', null, null, 'N;'), ('WLink.*', '1', null, null, 'N;'), ('WLink.Admin', '0', null, null, 'N;'), ('WLink.Create', '0', null, null, 'N;'), ('WLink.Delete', '0', null, null, 'N;'), ('WLink.Index', '0', null, null, 'N;'), ('WLink.Update', '0', null, null, 'N;'), ('WLink.View', '0', null, null, 'N;'), ('WModule.*', '1', null, null, 'N;'), ('WModule.Admin', '0', null, null, 'N;'), ('WModule.Create', '0', null, null, 'N;'), ('WModule.Delete', '0', null, null, 'N;'), ('WModule.Index', '0', null, null, 'N;'), ('WModule.Update', '0', null, null, 'N;'), ('WModule.View', '0', null, null, 'N;'), ('WOccupation.*', '1', null, null, 'N;'), ('WOccupation.Admin', '0', null, null, 'N;'), ('WOccupation.Create', '0', null, null, 'N;'), ('WOccupation.Delete', '0', null, null, 'N;'), ('WOccupation.Index', '0', null, null, 'N;'), ('WOccupation.Update', '0', null, null, 'N;'), ('WOccupation.View', '0', null, null, 'N;'), ('WPreference.*', '1', null, null, 'N;'), ('WPreference.Admin', '0', null, null, 'N;'), ('WPreference.Create', '0', null, null, 'N;'), ('WPreference.Delete', '0', null, null, 'N;'), ('WPreference.Index', '0', null, null, 'N;'), ('WPreference.Update', '0', null, null, 'N;'), ('WPreference.View', '0', null, null, 'N;'), ('WState.*', '1', null, null, 'N;'), ('WState.Admin', '0', null, null, 'N;'), ('WState.Create', '0', null, null, 'N;'), ('WState.Delete', '0', null, null, 'N;'), ('WState.Index', '0', null, null, 'N;'), ('WState.Update', '0', null, null, 'N;'), ('WState.View', '0', null, null, 'N;'), ('WUnit.*', '1', null, null, 'N;'), ('WUnit.Admin', '0', null, null, 'N;'), ('WUnit.Create', '0', null, null, 'N;'), ('WUnit.Delete', '0', null, null, 'N;'), ('WUnit.Index', '0', null, null, 'N;'), ('WUnit.Update', '0', null, null, 'N;'), ('WUnit.View', '0', null, null, 'N;'), ('WUser.*', '1', null, null, 'N;'), ('WUser.Add', '0', null, null, 'N;'), ('WUser.Admin', '0', null, null, 'N;'), ('WUser.ChangePassword', '0', null, null, 'N;'), ('WUser.Create', '0', null, null, 'N;'), ('WUser.Delete', '0', null, null, 'N;'), ('WUser.Index', '0', null, null, 'N;'), ('WUser.Lookup', '0', null, null, 'N;'), ('WUser.Update', '0', null, null, 'N;'), ('WUser.View', '0', null, null, 'N;');
COMMIT;

-- ----------------------------
--  Table structure for `AuthItemChild`
-- ----------------------------
DROP TABLE IF EXISTS `AuthItemChild`;
CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `Rights`
-- ----------------------------
DROP TABLE IF EXISTS `Rights`;
CREATE TABLE `Rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `cbr`
-- ----------------------------
DROP TABLE IF EXISTS `cbr`;
CREATE TABLE `cbr` (
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
  KEY `fk_cbr_jabatan1_idx` (`jabatan_id`),
  CONSTRAINT `fk_cbr_jabatan1` FOREIGN KEY (`jabatan_id`) REFERENCES `w_occupation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cbr`
-- ----------------------------
BEGIN;
INSERT INTO `cbr` VALUES ('1', '7', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('2', '23', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('3', '31', '2013-03-04', '700', '57', '400', '175', '1275', '0', null), ('4', '40', '2013-03-04', '700', '57', '400', '175', '1275', '0', null), ('5', '47', '2013-03-04', '700', '57', '400', '175', '1275', '0', null), ('6', '59', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('7', '68', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('8', '82', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('9', '91', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('10', '104', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('11', '119', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('12', '126', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('13', '133', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('14', '140', '2013-03-04', '700', '57', '400', '115', '1215', '0', null), ('15', '3', '2013-03-04', '608', '57', '350', '700', '1658', '0', null), ('16', '272', '2013-03-04', '608', '57', '350', '528', '1486', '0', null), ('17', '364', '2013-03-04', '608', '57', '350', '528', '1486', '0', null), ('18', '440', '2013-03-04', '608', '57', '350', '528', '1486', '0', null), ('19', '499', '2013-03-04', '460', '50', '230', '350', '1040', '0', null), ('20', '515', '2013-03-04', '528', '50', '264', '115', '907', '0', null), ('21', '334', '2013-03-04', '528', '57', '304', '115', '947', '0', null), ('22', '420', '2013-03-04', '528', '57', '304', '115', '947', '0', null), ('23', '485', '2013-03-04', '528', '57', '304', '115', '947', '0', null), ('24', '153', '2013-03-04', '230', '33', '76', '100', '406', '0', null), ('25', '276', '2013-03-04', '230', '33', '76', '100', '406', '0', null), ('26', '368', '2013-03-04', '230', '33', '76', '100', '406', '0', null), ('27', '444', '2013-03-04', '230', '33', '76', '100', '406', '0', null), ('28', '255', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('29', '266', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('30', '340', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('31', '345', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('32', '350', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('33', '355', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('34', '360', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('35', '425', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('36', '431', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('37', '495', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('38', '490', '2013-03-04', '230', '33', '76', '175', '481', '0', null), ('49', '436', '2013-03-04', '230', '33', '76', '175', '481', '0', null);
COMMIT;

-- ----------------------------
--  Table structure for `cbr_accountability`
-- ----------------------------
DROP TABLE IF EXISTS `cbr_accountability`;
CREATE TABLE `cbr_accountability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cbr_id` int(11) NOT NULL,
  `fta` varchar(45) NOT NULL COMMENT 'Freedom To Act',
  `aid` varchar(45) DEFAULT NULL COMMENT 'Area Indeterminate',
  `amt` varchar(45) DEFAULT NULL COMMENT 'Area Magnitude',
  `toi` varchar(45) DEFAULT NULL COMMENT 'Type Of Impact',
  `prf` varchar(45) DEFAULT NULL COMMENT 'Profile',
  PRIMARY KEY (`id`),
  KEY `fk_cbr_accountability_cbr1_idx` (`cbr_id`),
  CONSTRAINT `fk_cbr_accountability_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cbr_accountability`
-- ----------------------------
BEGIN;
INSERT INTO `cbr_accountability` VALUES ('4', '1', 'F', 'C', '', '', '0'), ('5', '2', 'F', 'C', '', '', '0'), ('6', '3', 'F', 'D', '', '', '1'), ('7', '4', 'F', 'D', '', '', '1'), ('8', '5', 'F', 'D', '', '', '1'), ('9', '6', 'F', 'C', '', '', '0'), ('10', '7', 'F', 'C', '', '', '0'), ('11', '8', 'F', 'C', '', '', '0'), ('12', '9', 'F', 'C', '', '', '0'), ('13', '10', 'F', 'C', '', '', '0'), ('14', '11', 'F', 'C', '', '', '0'), ('15', '12', 'F', 'C', '', '', '0'), ('16', '13', 'F', 'C', '', '', '0'), ('17', '14', 'F', 'C', '', '', '0'), ('18', '15', 'F', '', '4', 'P', '3+'), ('19', '16', 'F', '', '3', 'P', '3+'), ('20', '17', 'F', '', '3', 'P', '3+'), ('21', '18', 'F', '', '3', 'P', '3+'), ('22', '19', 'E', '', '3', 'P', '3+'), ('23', '20', 'E', 'D', '', '', '1'), ('24', '21', 'E', 'D', '', '', '1'), ('25', '22', 'E', 'D', '', '', '1'), ('26', '23', 'E', 'D', '', '', '1'), ('27', '24', 'D', 'D', '', '', '3+'), ('28', '25', 'D', 'D', '', '', '3+'), ('29', '26', 'D', 'D', '', '', '3+'), ('30', '27', 'D', 'D', '', '', '3+'), ('31', '28', 'D', '', '2', 'P', '3+'), ('32', '29', 'D', '', '2', 'P', '3+'), ('33', '30', 'D', '', '2', 'P', '3+'), ('34', '31', 'D', '', '2', 'P', '3+'), ('35', '32', 'D', '', '2', 'P', '3+'), ('36', '33', 'D', '', '2', 'P', '3+'), ('37', '34', 'D', '', '2', 'P', '3+'), ('38', '35', 'D', '', '2', 'P', '3+'), ('39', '36', 'D', '', '2', 'P', '3+'), ('40', '37', 'D', '', '2', 'P', '3+'), ('41', '38', 'D', '', '2', 'P', '3+'), ('52', '49', 'D', '', '2', 'P', '3+');
COMMIT;

-- ----------------------------
--  Table structure for `cbr_know_how`
-- ----------------------------
DROP TABLE IF EXISTS `cbr_know_how`;
CREATE TABLE `cbr_know_how` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cbr_id` int(11) NOT NULL,
  `tkh` varchar(45) NOT NULL COMMENT 'Technical Know How',
  `mkh` varchar(45) NOT NULL COMMENT 'Management Know How',
  `hrs` varchar(45) NOT NULL COMMENT 'Human Relation Skill',
  PRIMARY KEY (`id`),
  KEY `fk_cbr_know_how_cbr1_idx` (`cbr_id`),
  CONSTRAINT `fk_cbr_know_how_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cbr_know_how`
-- ----------------------------
BEGIN;
INSERT INTO `cbr_know_how` VALUES ('4', '1', 'G', 'III', '3'), ('5', '2', 'G', 'III', '3'), ('6', '3', 'G', 'III', '3'), ('7', '4', 'G', 'III', '3'), ('8', '5', 'G', 'III', '3'), ('9', '6', 'G', 'III', '3'), ('10', '7', 'G', 'III', '3'), ('11', '8', 'G', 'III', '3'), ('12', '9', 'G', 'III', '3'), ('13', '10', 'G', 'III', '3'), ('14', '11', 'G', 'III', '3'), ('15', '12', 'G', 'III', '3'), ('16', '13', 'G', 'III', '3'), ('17', '14', 'G', 'III', '3'), ('18', '15', 'F+', 'III', '3'), ('19', '16', 'F+', 'III', '3'), ('20', '17', 'F+', 'III', '3'), ('21', '18', 'F+', 'III', '3'), ('22', '19', 'F-', 'III', '3'), ('23', '20', 'F', 'III', '3'), ('24', '21', 'F', 'III', '3'), ('25', '22', 'F', 'III', '3'), ('26', '23', 'F', 'III', '3'), ('27', '24', 'E+', 'I', '2'), ('28', '25', 'E+', 'I', '2'), ('29', '26', 'E+', 'I', '2'), ('30', '27', 'E+', 'I', '2'), ('31', '28', 'E', 'I', '3'), ('32', '29', 'E', 'I', '3'), ('33', '30', 'E', 'I', '3'), ('34', '31', 'E', 'I', '3'), ('35', '32', 'E', 'I', '3'), ('36', '33', 'E', 'I', '3'), ('37', '34', 'E', 'I', '3'), ('38', '35', 'E', 'I', '3'), ('39', '36', 'E', 'I', '3'), ('40', '37', 'E', 'I', '3'), ('41', '38', 'E', 'I', '3'), ('52', '49', 'E', 'I', '3');
COMMIT;

-- ----------------------------
--  Table structure for `cbr_problem_solving`
-- ----------------------------
DROP TABLE IF EXISTS `cbr_problem_solving`;
CREATE TABLE `cbr_problem_solving` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cbr_id` int(11) NOT NULL,
  `tet` varchar(45) NOT NULL COMMENT 'Thingking Environtment',
  `tce` varchar(45) NOT NULL COMMENT 'Thingking Challenge',
  PRIMARY KEY (`id`),
  KEY `fk_cbr_problem_solving_cbr1_idx` (`cbr_id`),
  CONSTRAINT `fk_cbr_problem_solving_cbr1` FOREIGN KEY (`cbr_id`) REFERENCES `cbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cbr_problem_solving`
-- ----------------------------
BEGIN;
INSERT INTO `cbr_problem_solving` VALUES ('4', '1', 'F', '4+'), ('5', '2', 'F', '4+'), ('6', '3', 'F', '4+'), ('7', '4', 'F', '4+'), ('8', '5', 'F', '4+'), ('9', '6', 'F', '4+'), ('10', '7', 'F', '4+'), ('11', '8', 'F', '4+'), ('12', '9', 'F', '4+'), ('13', '10', 'F', '4+'), ('14', '11', 'F', '4+'), ('15', '12', 'F', '4+'), ('16', '13', 'F', '4+'), ('17', '14', 'F', '4+'), ('18', '15', 'F', '4+'), ('19', '16', 'F', '4+'), ('20', '17', 'F', '4+'), ('21', '18', 'F', '4+'), ('22', '19', 'F', '4'), ('23', '20', 'F', '4'), ('24', '21', 'F', '4+'), ('25', '22', 'F', '4+'), ('26', '23', 'F', '4+'), ('27', '24', 'E', '3'), ('28', '25', 'E', '3'), ('29', '26', 'E', '3'), ('30', '27', 'E', '3'), ('31', '28', 'E', '3'), ('32', '29', 'E', '3'), ('33', '30', 'E', '3'), ('34', '31', 'E', '3'), ('35', '32', 'E', '3'), ('36', '33', 'E', '3'), ('37', '34', 'E', '3'), ('38', '35', 'E', '3'), ('39', '36', 'E', '3'), ('40', '37', 'E', '3'), ('41', '38', 'E', '3'), ('52', '49', 'E', '3');
COMMIT;

-- ----------------------------
--  Table structure for `competency_cli`
-- ----------------------------
DROP TABLE IF EXISTS `competency_cli`;
CREATE TABLE `competency_cli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) DEFAULT NULL,
  `competency_type_id` int(11) NOT NULL,
  `p_person_id` int(11) NOT NULL,
  `w_occupation_id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cli_rekap_competency_type1` (`competency_type_id`),
  KEY `fk_cli_rekap_p_person1` (`p_person_id`),
  KEY `fk_cli_rekap_w_occupation1` (`w_occupation_id`),
  CONSTRAINT `fk_cli_rekap_competency_type1` FOREIGN KEY (`competency_type_id`) REFERENCES `competency_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cli_rekap_p_person1` FOREIGN KEY (`p_person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cli_rekap_w_occupation1` FOREIGN KEY (`w_occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `competency_library`
-- ----------------------------
DROP TABLE IF EXISTS `competency_library`;
CREATE TABLE `competency_library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `dimension` varchar(45) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `definition` text,
  `level_1` varchar(255) DEFAULT NULL,
  `level_2` varchar(255) DEFAULT NULL,
  `level_3` varchar(255) DEFAULT NULL,
  `level_4` varchar(255) DEFAULT NULL,
  `level_5` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `active` enum('1','0') DEFAULT '1',
  `dictionary_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competency_library_dictionary_type1` (`dictionary_type_id`),
  CONSTRAINT `fk_competency_library_dictionary_type1` FOREIGN KEY (`dictionary_type_id`) REFERENCES `competency_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `competency_rekap`
-- ----------------------------
DROP TABLE IF EXISTS `competency_rekap`;
CREATE TABLE `competency_rekap` (
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
  KEY `fk_competency_rekap_w_occupation1` (`w_occupation_id`),
  CONSTRAINT `fk_competency_rekap_competency_library1` FOREIGN KEY (`competency_library_id`) REFERENCES `competency_library` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_competency_rekap_p_person1` FOREIGN KEY (`p_person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_competency_rekap_w_occupation1` FOREIGN KEY (`w_occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `competency_result`
-- ----------------------------
DROP TABLE IF EXISTS `competency_result`;
CREATE TABLE `competency_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) DEFAULT NULL,
  `assessor_id` int(11) NOT NULL,
  `assessed_id` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `evidence` text,
  `date` date DEFAULT NULL,
  `competency_library_id` int(11) NOT NULL,
  `w_occupation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competency_result_p_person1` (`assessor_id`),
  KEY `fk_competency_result_p_person2` (`assessed_id`),
  KEY `fk_competency_result_competency_library1` (`competency_library_id`),
  KEY `fk_competency_result_w_occupation1` (`w_occupation_id`),
  CONSTRAINT `fk_competency_result_p_person1` FOREIGN KEY (`assessor_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_competency_result_p_person2` FOREIGN KEY (`assessed_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_competency_result_competency_library1` FOREIGN KEY (`competency_library_id`) REFERENCES `competency_library` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_competency_result_w_occupation1` FOREIGN KEY (`w_occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `competency_task`
-- ----------------------------
DROP TABLE IF EXISTS `competency_task`;
CREATE TABLE `competency_task` (
  `w_occupation_id` int(11) NOT NULL,
  `competency_library_id` int(11) NOT NULL,
  `rcl` int(11) DEFAULT NULL,
  `itj` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_occupation_id`,`competency_library_id`),
  KEY `fk_w_occupation_has_competency_library_competency_library1` (`competency_library_id`),
  KEY `fk_w_occupation_has_competency_library_w_occupation1` (`w_occupation_id`),
  CONSTRAINT `fk_w_occupation_has_competency_library_w_occupation1` FOREIGN KEY (`w_occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_w_occupation_has_competency_library_competency_library1` FOREIGN KEY (`competency_library_id`) REFERENCES `competency_library` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `competency_type`
-- ----------------------------
DROP TABLE IF EXISTS `competency_type`;
CREATE TABLE `competency_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `p_person`
-- ----------------------------
DROP TABLE IF EXISTS `p_person`;
CREATE TABLE `p_person` (
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
  KEY `fk_p_person_w_user2_idx` (`modified_by`),
  CONSTRAINT `fk_karyawan_user1` FOREIGN KEY (`user_id`) REFERENCES `w_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_karyawan_jabatan1` FOREIGN KEY (`jabatan_id`) REFERENCES `w_occupation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_p_person_w_religion1` FOREIGN KEY (`religion_id`) REFERENCES `w_religion` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_p_person_w_state1` FOREIGN KEY (`identity_state`) REFERENCES `w_state` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_p_person_w_user1` FOREIGN KEY (`create_by`) REFERENCES `w_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_p_person_w_user2` FOREIGN KEY (`modified_by`) REFERENCES `w_user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `p_person`
-- ----------------------------
BEGIN;
INSERT INTO `p_person` VALUES ('2', '22', null, '50ff6479af4d63.98803648.png', '2', '0987654321', 'Danang', 'nurfauzi', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2013-01-23', '1', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `p_person_education`
-- ----------------------------
DROP TABLE IF EXISTS `p_person_education`;
CREATE TABLE `p_person_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'nomor karyawan',
  `level` varchar(100) DEFAULT NULL COMMENT 'jenis pendidikan yang ditempuh (nilai diambil dari setting)\\\\\\\\n',
  `institution_name` varchar(100) DEFAULT NULL COMMENT 'institusi tempat menempuh pendidikan',
  `institution_major` varchar(45) DEFAULT NULL COMMENT 'program studi, penjurusan / sepsialisasi',
  `gpa_score` varchar(25) DEFAULT NULL COMMENT 'Indeks Prestasi',
  `tgl_masuk` date DEFAULT NULL COMMENT 'tanggal masuk',
  `tgl_keluar` date DEFAULT NULL COMMENT 'tanggal keluar',
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_pendidikan_karyawan1_idx` (`person_id`),
  CONSTRAINT `fk_karyawan_pendidikan_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `p_person_emergency_contact`
-- ----------------------------
DROP TABLE IF EXISTS `p_person_emergency_contact`;
CREATE TABLE `p_person_emergency_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'kode karyawan',
  `name` varchar(255) NOT NULL COMMENT 'nama lengkap yang bisa dihubungi',
  `relation` varchar(255) NOT NULL COMMENT 'relasi dengan karyawan (tipe relasi melalui tabel setting)',
  `phone_home` varchar(20) DEFAULT NULL COMMENT 'nomor telepon rumah',
  `phone_mobile` varchar(20) DEFAULT NULL COMMENT 'nomor handphone',
  `phone_office` varchar(20) DEFAULT NULL COMMENT 'nomer telepon kantor',
  PRIMARY KEY (`id`),
  KEY `fk_employee_emergency_contact_employee1_idx` (`person_id`),
  CONSTRAINT `fk_employee_emergency_contact_employee1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `p_person_family`
-- ----------------------------
DROP TABLE IF EXISTS `p_person_family`;
CREATE TABLE `p_person_family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'kode karyawan',
  `name` varchar(255) NOT NULL COMMENT 'nama orang tertanggung',
  `relation_id` int(11) DEFAULT NULL COMMENT 'relasi dengan karyawan (tipe relasi melalui setting)',
  `birth_date` date DEFAULT NULL COMMENT 'tanggal lahir tertanggung',
  `birth_place` varchar(45) DEFAULT NULL,
  `sex_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_tanggungan_employee1_idx` (`person_id`),
  CONSTRAINT `fk_employee_tanggungan_employee1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `p_person_imigration`
-- ----------------------------
DROP TABLE IF EXISTS `p_person_imigration`;
CREATE TABLE `p_person_imigration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `document_number` varchar(100) NOT NULL,
  `document_issue_date` date DEFAULT NULL COMMENT 'tanggal dikeluarkan nya dokumen',
  `document_valid_date` date NOT NULL COMMENT 'tanggal berakhir nya dokumen',
  `country_issued` int(11) NOT NULL,
  `detail` varchar(200) DEFAULT NULL COMMENT 'kelayakan status dokumen',
  PRIMARY KEY (`id`),
  KEY `fk_employee_imigrasi_employee1_idx` (`person_id`),
  KEY `fk_karyawan_imigrasi_negara1_idx` (`country_issued`),
  CONSTRAINT `fk_employee_imigrasi_employee1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_karyawan_imigrasi_negara1` FOREIGN KEY (`country_issued`) REFERENCES `w_country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `p_person_occupation_historical`
-- ----------------------------
DROP TABLE IF EXISTS `p_person_occupation_historical`;
CREATE TABLE `p_person_occupation_historical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `occupation_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_historical_jabatan_karyawan1_idx` (`person_id`),
  KEY `fk_karyawan_historical_jabatan_jabatan1_idx` (`occupation_id`),
  CONSTRAINT `fk_karyawan_historical_jabatan_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_karyawan_historical_jabatan_jabatan1` FOREIGN KEY (`occupation_id`) REFERENCES `w_occupation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `p_person_sertification`
-- ----------------------------
DROP TABLE IF EXISTS `p_person_sertification`;
CREATE TABLE `p_person_sertification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL COMMENT 'nomor karyawan',
  `sertificate_type` varchar(100) NOT NULL COMMENT 'jenis sertifikasi yang dimiliki (data diambil dari setting)',
  `sertificate_number` varchar(50) NOT NULL COMMENT 'nomor seri sertifikat',
  `publish_date` date DEFAULT NULL COMMENT 'tanggal dikeluarkan sertifikat',
  `valid_date` date DEFAULT NULL COMMENT 'tanggal berakhir sertifikat',
  `image` varchar(200) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_sertifikasi_karyawan1_idx` (`person_id`),
  CONSTRAINT `fk_karyawan_sertifikasi_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `p_person_skill`
-- ----------------------------
DROP TABLE IF EXISTS `p_person_skill`;
CREATE TABLE `p_person_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id pengalaman kerja',
  `person_id` int(11) NOT NULL COMMENT 'nomer karyawan',
  `company` varchar(255) NOT NULL COMMENT 'perusahaan terdahulu tempat karyawan pernah bekerja',
  `job_title` varchar(255) NOT NULL COMMENT 'jabatan terakhir di perusahaan',
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `detail` text,
  PRIMARY KEY (`id`),
  KEY `fk_karyawan_pengalamankerja_karyawan1_idx` (`person_id`),
  CONSTRAINT `fk_karyawan_pengalamankerja_karyawan1` FOREIGN KEY (`person_id`) REFERENCES `p_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `sessions`
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_country`
-- ----------------------------
DROP TABLE IF EXISTS `w_country`;
CREATE TABLE `w_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL COMMENT 'format penulisan kode negara dalam 2 huruf',
  `name` varchar(100) NOT NULL COMMENT 'nama terang negara	',
  `iso3` varchar(3) DEFAULT NULL COMMENT 'penulisan kode negara dalam format 3 huruf',
  `numcode` int(11) DEFAULT NULL COMMENT 'kode negara dalam angka',
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_UNIQUE` (`code`),
  UNIQUE KEY `iso3_UNIQUE` (`iso3`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_country`
-- ----------------------------
BEGIN;
INSERT INTO `w_country` VALUES ('1', 'AD', 'Andorra', 'AND', '20'), ('2', 'BV', 'Bouvet Island', '', null), ('3', 'ID', 'Indonesia', 'IDN', null);
COMMIT;

-- ----------------------------
--  Table structure for `w_job_family`
-- ----------------------------
DROP TABLE IF EXISTS `w_job_family`;
CREATE TABLE `w_job_family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `information` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_job_family`
-- ----------------------------
BEGIN;
INSERT INTO `w_job_family` VALUES ('1', 'SDM / Umum', ''), ('2', 'Pemasaran, Perencanaan & Pengembangan', ''), ('3', 'Produksi', ''), ('4', 'Keuangan', ''), ('5', 'SPI', ''), ('6', 'Sek Per', ''), ('7', 'Rumah Sakit', '');
COMMIT;

-- ----------------------------
--  Table structure for `w_link`
-- ----------------------------
DROP TABLE IF EXISTS `w_link`;
CREATE TABLE `w_link` (
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
  KEY `fk_w_link_w_module1_idx` (`w_module_id`),
  CONSTRAINT `fk_link_link1` FOREIGN KEY (`parent_id`) REFERENCES `w_link` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_w_link_w_module1` FOREIGN KEY (`w_module_id`) REFERENCES `w_module` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_link`
-- ----------------------------
BEGIN;
INSERT INTO `w_link` VALUES ('11', null, 'wModule', 'module', 'wModule', '', '', '1'), ('12', null, 'wLink', 'link', 'wLink', '', '', '1'), ('13', null, 'wCountry', 'country', 'wCountry', '', '', '1'), ('14', null, 'wState', 'State', 'wState', '', '', '1'), ('15', null, 'wUnit', 'Unit', 'wUnit', '', '', '1'), ('16', null, 'wOccupation', 'Occupation', 'wOccupation', '', '', '1'), ('17', null, 'wPreference', 'Settings', 'wPreference', '', '', '1'), ('18', null, 'employee', 'Employee', 'pPerson', '', '', '2'), ('19', null, 'wUser', 'User', 'wUser', '', '', '1'), ('20', null, 'input form cbr', 'input CBR', 'cbr/form', '', '', '3'), ('21', null, 'wJobFamily', 'Job Family', 'wJobFamily', '', '', '1'), ('22', null, 'daftar cbr', 'Daftar CBR', 'cbr/index', '', '', '3'), ('23', null, 'job family cbr', 'Job Family CBR', 'cbr/byJobFamily', '', '', '3'), ('24', null, 'softCompetency', 'Soft Competency', 'softCompetency/exercise', '', '', '5');
COMMIT;

-- ----------------------------
--  Table structure for `w_module`
-- ----------------------------
DROP TABLE IF EXISTS `w_module`;
CREATE TABLE `w_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_module_module1_idx` (`parent_id`),
  CONSTRAINT `fk_module_module1` FOREIGN KEY (`parent_id`) REFERENCES `w_module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_module`
-- ----------------------------
BEGIN;
INSERT INTO `w_module` VALUES ('1', null, 'core', 'System Core', '', 'core', ''), ('2', null, 'pim', 'Personal Information Manager', '', 'pim', ''), ('3', null, 'renum', 'Remuneration', '', 'renum', ''), ('5', null, 'cli', 'Competency Level Index', null, 'cli', null);
COMMIT;

-- ----------------------------
--  Table structure for `w_occupation`
-- ----------------------------
DROP TABLE IF EXISTS `w_occupation`;
CREATE TABLE `w_occupation` (
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
  KEY `fk_w_occupation_w_golongan1` (`golongan_id`),
  CONSTRAINT `fk_jabatan_jabatan1` FOREIGN KEY (`parent`) REFERENCES `w_occupation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_w_occupation_w_job_family1` FOREIGN KEY (`job_family`) REFERENCES `w_job_family` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_w_occupation_w_golongan1` FOREIGN KEY (`golongan_id`) REFERENCES `w_golongan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_w_occupation_w_unit1` FOREIGN KEY (`w_unit_id`) REFERENCES `w_unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=519 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_occupation`
-- ----------------------------
BEGIN;
INSERT INTO `w_occupation` VALUES ('1', '', 'Direktur Utama', '0', null, '1', null, null), ('2', '', 'Direktur Produksi', '1', '1', '1', null, null), ('3', '', 'General Manager', '0', null, '3', null, null), ('4', '', 'Direktur Keuangan', '1', '1', '1', null, null), ('5', '', 'Direktur Pemasaran & Perencanaan Pengembangan', '1', '1', '1', null, null), ('6', '', 'Direktur SDM/Umum', '1', '1', '1', null, null), ('7', '', 'Kepala Bagian Sekretaris Perusahaan', '0', null, '23', null, null), ('8', '', 'Diperbantukan di PTP Agrintara  Sebagai Kuasa Direksi', '0', null, '23', null, null), ('9', '', 'Direktur Keuangan dan pemasaran PT Pupuk Agro Nusantara', '0', null, '23', null, null), ('10', '', 'Kepala Urusan Rumah Tangga', '1', '7', '23', null, null), ('11', '', 'Sekretaris Panitia Pelelangan', '0', null, '23', null, null), ('12', '', 'Kepala Urusan  Sekretariat dan Protokoler', '1', '7', '23', null, null), ('13', '', 'Kepala Urusan Humas, Legal, Kepatuhan dan Hubungan Investor', '1', '7', '23', null, null), ('14', '', 'Asisten Urusan  LO Jakarta', '0', null, '23', null, null), ('15', '', 'Asisten Urusan Operasional URTA', '0', null, '23', null, null), ('16', '', 'Asisten Urusan  Sekretariat Sekretaris Direksi', '0', null, '23', null, null), ('17', '', 'Asisten Urusan Sekretariat', '0', null, '23', null, null), ('18', '', 'Asisten Urusan Teknologi Informasi Panitia Pelelangan', '0', null, '23', null, null), ('19', '', 'Asisten Urusan Humas', '2', '13', '23', null, null), ('20', '', 'Asisten Urusan Hukum Panitia Pelelangan', '0', null, '23', null, null), ('21', '', 'Asisten Urusan  Legal, Kepatuhan dan Hubungan Investor ', '2', '13', '23', null, null), ('22', '', 'Asisten Urusan Admi URTA', '0', null, '23', null, null), ('23', '', 'Kepala Bagian Satuan Pengawasan Internal', '0', null, '24', null, null), ('24', '', 'Kepala Urusan Pemeriksaan Bidang Teknik /Pengolahan ', '1', '23', '24', null, null), ('25', '', 'Kepala Urusan Pengawasan Bidang Keuangan, Pemasaran dan SDM/Umum', '1', '23', '24', null, null), ('26', '', 'Kepala Urusan Pengawasan Bidang Tanaman', '1', '23', '24', null, null), ('27', '', 'Kepala Urusan Pemeriksaan Bidang Teknik Umum', '1', '23', '24', null, null), ('28', '', 'Asisten Urusan Pengawasan Bidang Tanaman', '2', '26', '24', null, null), ('29', '', 'Asisten Urusan Pengawasan Bidang Pengolahan, Instalasi dan Teknik Umum', '2', '27', '24', null, null), ('30', '', 'Asisten  Urusan Pengawasan Bidang Keuangan, Pemasaran dan SDM/Umum', '2', '25', '24', null, null), ('31', '', 'Kepala Bagian Tanaman', '0', null, '10', null, null), ('32', '', 'Kepala Urusan Pemupukan/Pemeliharaan TM', '1', '31', '10', null, null), ('33', '', 'Kepala Urusan Produksi dan Infrastruktur', '1', '31', '10', null, null), ('34', '', 'Kepala Urusan Investasi dan Pemetan', '1', '31', '10', null, null), ('35', '', 'Asisten Urusan Administrasi', '0', null, '10', null, null), ('36', '', 'Asisten Urusan Bibitan dan Investasi Tanaman', '3', '34', '10', null, null), ('37', '', 'Asisten Urusan Pemupukan dan Hama Penyakit Tanaman', '2', '32', '10', null, null), ('38', '', 'Asisten Urusan Produksi', '2', '33', '10', null, null), ('39', '', 'Asisten Urusan Pemetaan Tanaman', '2', '34', '10', null, null), ('40', '', 'Kepala Bagian Teknik', '0', null, '11', null, null), ('41', '', 'Kepala Urusan  Instalasi Listrik & Air di Luar PKS', '1', '40', '11', null, null), ('42', '', 'Kepala Urusan  Traksi dan Alat Berat', '1', '40', '11', null, null), ('43', '', 'Kepala Urusan  Teknik Spil', '1', '40', '11', null, null), ('44', '', 'Asisten Urusan Traksi dan Alat Berat', '2', '42', '11', null, null), ('45', '', 'Asisten Urusan Instalasi Listrik & Air di Luar PKS', '2', '41', '11', null, null), ('46', '', 'Asisten Urusan Teknik Sipil', '2', '43', '11', null, null), ('47', '', 'Kepala Bagian Pengolahan', '0', null, '12', null, null), ('48', '', 'Kepala Urusan Instalasi PKS', '1', '47', '12', null, null), ('49', '', 'Kepala Urusan Pengolahan Kelapa Sawit', '1', '47', '12', null, null), ('50', '', 'Kepala Urusan Instalasi dan Pengolahan Pabrik Karet', '1', '47', '12', null, null), ('51', '', 'Kepala Urusan Sistem Manajemen Mutu & Lingkungan', '1', '47', '12', null, null), ('52', '', 'Asisten Urusan Istalasi dan Pengolahan Pabrik Karet', '2', '50', '12', null, null), ('53', '', 'Asisten Urusan Instalasi PKS', '2', '48', '12', null, null), ('54', '', 'Asisten Urusan Pengolahan Kelapa Sawit', '2', '49', '12', null, null), ('55', '', 'Asisten Urusan  Sistem Manajemen Lingkungan', '2', '51', '12', null, null), ('56', '', 'Asisten Urusan  Sistem Manajemen Mutu', '2', '51', '12', null, null), ('57', '', 'Asisten Urusan Pengolahan Pabrik PKO dan Kompos', '0', null, '12', null, null), ('58', '', 'Asisten Urusan Administrasi', '0', null, '12', null, null), ('59', '', 'Kepala Bagian Akuntansi', '0', null, '14', null, null), ('60', '', 'Kepala Urusan Tata Buku', '1', '59', '14', null, null), ('61', '', 'Kepala Urusan Verifikasi', '1', '59', '14', null, null), ('62', '', 'Kepala Urusan Pelaporan', '1', '59', '14', null, null), ('63', '', 'Asisten Urusan Laporan Manajemen Bulanan', '2', '62', '14', null, null), ('64', '', 'Asisten Urusan Verifikasi', '2', '61', '14', null, null), ('65', '', 'Asisten Urusan Penyusunan LM Triwulan & Tahunan', '2', '62', '14', null, null), ('66', '', 'Asisten Urusan Tata Buku', '2', '60', '14', null, null), ('67', '', 'Asisten Urusan Analis Sistem', '0', null, '14', null, null), ('68', '', 'Kepala Bagian Pembiayaan', '0', null, '15', null, null), ('69', '', 'Kepala Urusan Pajak dan Asuransi', '1', '68', '15', null, null), ('70', '', 'Kepala Urusan  Pengelolaan Kas dan Pendanaan Eksternal', '1', '68', '15', null, null), ('71', '', 'Kepala Urusan  Anggaran', '1', '68', '15', null, null), ('72', '', 'Asisten Urusan Pengelolaan Kas', '2', '70', '15', null, null), ('73', '', 'Asisten Urusan Pajak', '2', '69', '15', null, null), ('74', '', 'Asisten Urusan Asuransi', '2', '69', '15', null, null), ('75', '', 'Asisten Urusan Anggaran', '2', '71', '15', null, null), ('76', '', 'Kepala Bagian  PKBL', '0', null, '16', null, null), ('77', '', 'Kepala Urusan Administrasi Kemitraan dan Bina Lingkungan ', '1', '76', '16', null, null), ('78', '', 'Kepala Urusan Kemitraan dan Bina Lingkungan', '1', '76', '16', null, null), ('79', '', 'Asisten Urusan Bina Lingkungan', '2', '77', '16', null, null), ('80', '', 'Asisten Administrasi/Keuangan', '2', '77', '16', null, null), ('81', '', 'Asisten Urusan Kemitraan', '2', '78', '16', null, null), ('82', '', 'Kepala Bagian Pemasaran', '0', null, '19', null, null), ('83', '', 'Kepala Urusan  Analisa Pasar dan Pemasaran Karet', '1', '82', '19', null, null), ('84', '', 'Kepala Urusan  Pemasaran Kelapa Sawit', '1', '82', '19', null, null), ('85', '', 'Asisten  Urusan Diperbantukan di PT SAN Dumai', '0', null, '19', null, null), ('86', '', 'Asisten Urusan Analisis Pasar', '2', '83', '19', null, null), ('87', '', 'Asisten  Urusan Pemasaran Kelapa Sawit', '2', '84', '19', null, null), ('88', '', 'Asisten Urusan Pemasaran Karet ', '2', '83', '19', null, null), ('89', '', 'Asisten  Urusan Pemasaran Kelapa Sawit', '2', '83', '19', null, null), ('90', '', 'Asisten Urusan ITMS Siak', '0', null, '19', null, null), ('91', '', 'Kepala Bagian  Perencanaan, Pengkajian & Teknologi Informasi', '0', null, '17', null, null), ('92', '', 'Kepala Urusan Manajemen Resiko ', '1', '91', '17', null, null), ('93', '', 'Kepala Urusan  Perencanaan dan Pengkajian', '1', '91', '17', null, null), ('94', '', 'Kepala Urusan Pengembangan Teknologi Informasi', '1', '91', '17', null, null), ('95', '', 'Asisten Urusan Perencanaan ', '2', '93', '17', null, null), ('96', '', 'Asisten Urusan Sistem Informasi Manajemen dan Database', '0', null, '17', null, null), ('97', '', 'Asisten Urusan Hardware', '0', null, '17', null, null), ('98', '', 'Asisten Urusan  Pengkajian Bidang Tanaman', '0', null, '17', null, null), ('99', '', 'Asisten Urusan Jaringan dan Sistem Komunikasi Data', '0', null, '17', null, null), ('100', '', 'Asisten Urusan Manajemen Resiko', '2', '92', '17', null, null), ('101', '', 'Asisten Urusan Perencanaan dan Pengkajian Area SBU Tandun', '0', null, '17', null, null), ('102', '', 'Asisten Urusan Perencanaan dan Pengkajian Area SBU Sei Rokan', '0', null, '17', null, null), ('103', '', 'Asisten Urusan SOP Perusahaan', '0', null, '17', null, null), ('104', '', 'Kepala Bagian SDM', '0', null, '20', null, null), ('105', '', 'Kepala Urusan Diperbantukan kepada Kepala Bagian SDM', '1', '104', '20', null, null), ('106', '', 'Kepala Urusan Pengembangan', '1', '104', '20', null, null), ('107', '', 'Kepala Urusan  Personalia', '1', '104', '20', null, null), ('108', '', 'Kepala Urusan  Hubungan Industrial', '1', '104', '20', null, null), ('109', '', 'Kepala Urusan  Kesehatan', '1', '104', '20', null, null), ('110', '', 'Asisten Urusan Pengembangan SDM', '2', '106', '20', null, null), ('111', '', 'Asisten Urusan Hubungan Industrial', '2', '108', '20', null, null), ('112', '', 'Asisten Urusan Personalia Karyawan Gol IIIA-IVD', '2', '107', '20', null, null), ('113', '', 'Asisten Urusan  Personalia Karyawan Gol IA-IID', '2', '107', '20', null, null), ('114', '', 'Asisten Urusan Personalia Karyawan Gol IIIA-IVD', '2', '107', '20', null, null), ('115', '', 'Asisten Urusan Instalasi Farmasi / Apoteker', '2', '109', '20', null, null), ('116', '', 'Asisten Urusan Pelayanan Kesehatan', '2', '109', '20', null, null), ('117', '', 'Asisten Urusan Pengembangan SDM', '2', '106', '20', null, null), ('118', '', 'Asisten Urusan Administrasi Kesehatan', '0', null, '20', null, null), ('119', '', 'Kepala Bagian Umum', '0', null, '21', null, null), ('120', '', 'Kepala Urusan Sosial dan Pendidikan', '1', '119', '21', null, null), ('121', '', 'Kepala Urusan Hukum dan Agraria', '1', '119', '21', null, null), ('122', '', 'Kepala Urusan SMK3', '1', '119', '21', null, null), ('123', '', 'Asisten Urusan Sosial dan Pendidikan', '2', '120', '21', null, null), ('124', '', 'Asisten Urusan SMK3', '2', '122', '21', null, null), ('125', '', 'Asisten Urusan Hukum dan Agraria', '2', '121', '21', null, null), ('126', '', 'Kepala Bagian Pengadaan ', '0', null, '22', null, null), ('127', '', 'Kepala Urusan Pengadaan Barang dan Jasa Umum', '1', '126', '22', null, null), ('128', '', 'Kepala Urusan Pengadaan Barang dan Jasa Teknik/Konstruksi /Gudang', '1', '126', '22', null, null), ('129', '', 'Asisten Urusan Gudang Sentral', '2', '128', '22', null, null), ('130', '', 'Asisten Urusan Pengadaan Barang Teknik', '2', '128', '22', null, null), ('131', '', 'Asisten  Urusan Pengadaan Barang dan Jasa Teknik /Konstruksi', '2', '128', '22', null, null), ('132', '', 'Asisten Urusan Pengadaan Barang dan Jasa Umum', '2', '128', '22', null, null), ('133', '', 'Kepala Bagian Pengembangan Usaha', '0', null, '18', null, null), ('134', '', 'Kepala Urusan  Pengembangan Usaha Non Tanaman', '1', '133', '18', null, null), ('135', '', 'Kepala Urusan Pengembangan Tanaman', '1', '133', '18', null, null), ('136', '', 'Kepala Urusan Administrasi Anak Perusahaan dan Kemitraan', '1', '133', '18', null, null), ('137', '', 'Asisten Urusan Pengembangan Industri Hilir & Diversifikasi Usaha', '0', null, '18', null, null), ('138', '', 'Asisten Urusan Administrasi Anak Perusahaan & Kemitraan', '2', '136', '18', null, null), ('139', '', 'Asisten Urusan Pengembangan Tanaman Kebun Inti/Kemitraan', '2', '135', '18', null, null), ('140', '', 'Kepala Bagian Pembelian Bahan Baku dan Pengelolaan Plasma/KKPA', '0', null, '13', null, null), ('141', '', 'Kepala Urusan Operasional Pembelian TBS Plasma, Non Plasma dan Bokar ', '1', '140', '13', null, null), ('142', '', 'Kepala Urusan  Administrasi/Keuangan dan Pelaporan', '1', '140', '13', null, null), ('143', '', 'Kepala Urusan Pengelolaan Plasma/KKPA', '1', '140', '13', null, null), ('144', '', 'Asisten Urusan Administrasi Keuangan dan Pelaporan Pembelian TBS & Bokar', '2', '141', '13', null, null), ('145', '', 'Asisten Urusan Administrasi Pengelolaan Plasma & KKPA', '2', '143', '13', null, null), ('146', '', 'Asisten Urusan Operasional Pembelian TBS Plasma/Non Plasma ', '2', '141', '13', null, null), ('147', '', 'Asisten Urusan Operasional Pengelolaan Plasma', '2', '143', '13', null, null), ('148', '', 'Asisten Urusan Operasional Pembelian Bokar', '2', '141', '13', null, null), ('149', '', 'Asisten Urusan Operasional Pengelolaan KKPA', '0', null, '13', null, null), ('150', '', 'Kepala Urusan Tanaman', '1', '3', '3', null, null), ('151', '', 'Asisten Urusan Tanaman', '2', '150', '3', null, null), ('152', '', 'Kepala Urusan Teknik/Pengolahan', '1', '3', '3', null, null), ('153', '', 'Asisten Urusan Teknik/Pengolahan', '2', '152', '3', null, null), ('154', '', 'Kepala Urusan Administrasi Keuangan, SDM & Umum', '1', '3', '3', null, null), ('155', '', 'Asisten Urusan Administrasi  Keuangan ', '2', '154', '3', null, null), ('156', '', 'Asisten Urusan Administrasi SDM & Umum', '2', '154', '3', null, null), ('157', '', 'Manajer Kebun', '0', null, '9', null, null), ('158', null, 'Asisten Kepala Rayon A', '1', '157', '9', null, null), ('159', null, 'Asisten Kepala Rayon B', '1', '157', '9', null, null), ('160', null, 'Asisten Tanaman Afd. I', '1', '157', '9', null, null), ('161', null, 'Asisten Tanaman Afd. II', '1', '157', '9', null, null), ('162', null, 'Asisten Tanaman Afd. III', '1', '157', '9', null, null), ('163', null, 'Asisten Tanaman Afd. IV', '1', '157', '9', null, null), ('164', null, 'Asisten Tanaman Afd. V', '1', '157', '9', null, null), ('165', null, 'Asisten Tanaman Afd. VI', '1', '157', '9', null, null), ('166', null, 'Asisten Tanaman Afd. VII', '1', '157', '9', null, null), ('167', null, 'Asisten Tanaman Afd. VIII', '1', '157', '9', null, null), ('168', null, 'Asisten Tanaman Afd. IX', '1', '157', '9', null, null), ('169', null, 'Asisten Tanaman Afd. X', '1', '157', '9', null, null), ('170', null, 'Asisten Teknik Umum', '1', '157', '9', null, null), ('171', null, 'Asisten  Administrasi Keuangan', '1', '157', '9', null, null), ('172', null, 'Asisten Administrasi SDM/Umum', '1', '157', '9', null, null), ('173', '', ' Asisten Administrasi Keuangan diperbantukan kepada Asisten Administrasi Keuangan ', '2', '171', '9', null, null), ('174', '', 'Manajer Kebun', '0', null, '25', null, null), ('177', '', 'Asisten Kepala', '1', '174', '25', null, null), ('178', null, 'Asisten Tanaman Afd. I', '1', '174', '25', null, null), ('179', null, 'Asisten Tanaman Afd. II', '1', '174', '25', null, null), ('180', null, 'Asisten Tanaman Afd. III', '1', '174', '25', null, null), ('181', null, 'Asisten Tanaman Afd. IV', '1', '174', '25', null, null), ('182', null, 'Asisten Tanaman Afd. V', '1', '174', '25', null, null), ('183', null, 'Asisten Tanaman Afd. VI', '1', '174', '25', null, null), ('184', null, 'Asisten Teknik Umum', '1', '174', '25', null, null), ('185', null, 'Asisten  Administrasi Keuangan', '1', '174', '25', null, null), ('186', null, 'Asisten Administrasi SDM/Umum', '1', '174', '25', null, null), ('187', '', 'Manajer Kebun', '0', null, '26', null, null), ('188', null, 'Asisten Kepala Rayon A', '1', '187', '26', null, null), ('189', null, 'Asisten Kepala Rayon B', '1', '187', '26', null, null), ('190', null, 'Asisten Tanaman Afd. I', '1', '187', '26', null, null), ('191', null, 'Asisten Tanaman Afd. II', '1', '187', '26', null, null), ('192', null, 'Asisten Tanaman Afd. III', '1', '187', '26', null, null), ('193', null, 'Asisten Tanaman Afd. IV', '1', '187', '26', null, null), ('194', null, 'Asisten Tanaman Afd. V', '1', '187', '26', null, null), ('195', null, 'Asisten Tanaman Afd. VI', '1', '187', '26', null, null), ('196', null, 'Asisten Tanaman Afd. VII', '1', '187', '26', null, null), ('197', null, 'Asisten Tanaman Afd. VIII', '1', '187', '26', null, null), ('198', null, 'Asisten Tanaman Afd. IX', '1', '187', '26', null, null), ('199', null, 'Asisten Tanaman Afd. X', '1', '187', '26', null, null), ('200', '', 'Asisten Diperbantukan Ke Askep dan SISKA', '1', '187', '26', null, null), ('201', null, 'Asisten Teknik Umum', '1', '187', '26', null, null), ('202', null, 'Asisten  Administrasi Keuangan', '1', '187', '26', null, null), ('203', null, 'Asisten Administrasi SDM/Umum', '1', '187', '26', null, null), ('204', '', 'Asisten Administrasi SDM/Umum diperbantukan kepada Ast. Administrasi SDM/Umum ', '2', '203', '26', null, null), ('205', '', 'Manajer  Kebun', '0', null, '27', null, null), ('206', '', 'Asisten Kepala Rayon A (Karet)', '1', '205', '27', null, null), ('207', '', 'Asisten Kepala Rayon B (Kelapa Sawit)', '1', '205', '27', null, null), ('208', '', 'Asisten Tanaman Afd. I', '1', '205', '27', null, null), ('209', '', 'Asisten Tanaman Afd. II', '1', '205', '27', null, null), ('210', '', 'Asisten Tanaman Afd. III', '1', '205', '27', null, null), ('211', '', 'Asisten Tanaman Afd. IV', '1', '205', '27', null, null), ('212', '', 'Asisten Tanaman Afd. V', '1', '205', '27', null, null), ('213', '', 'Asisten Tanaman Afd. VI', '1', '205', '27', null, null), ('214', '', 'Asisten Tanaman Afd. VII', '1', '205', '27', null, null), ('215', '', 'Asisten Tanaman Afd. VIII', '1', '205', '27', null, null), ('216', '', 'Asisten  Teknik Umum', '1', '205', '27', null, null), ('217', '', 'Asisten Administrasi Keuangan', '1', '205', '27', null, null), ('218', '', 'Asisten Administrasi SDM/Umum', '1', '205', '27', null, null), ('219', '', 'Manajer Kebun', '0', null, '28', null, null), ('220', '', 'Asisten Kepala', '1', '219', '28', null, null), ('221', '', 'Maskep Pabrik Karet', '1', '219', '28', null, null), ('222', '', 'Asisten Tanaman Afd. I', '1', '219', '28', null, null), ('223', '', 'Asisten Tanaman Afd. II', '1', '219', '28', null, null), ('224', '', 'Asisten Tanaman Afd. III', '1', '219', '28', null, null), ('225', '', 'Asisten Tanaman Afd. IV', '1', '219', '28', null, null), ('226', '', 'Asisten Tanaman Afd. V', '1', '219', '28', null, null), ('227', '', 'Asisten Tanaman Afd. VI', '1', '219', '28', null, null), ('228', '', 'Asisten  Teknik Umum', '1', '219', '28', null, null), ('229', '', 'Asisten Administrasi Keuangan', '1', '219', '28', null, null), ('230', '', 'Asisten Administrasi SDM/Umum', '1', '219', '28', null, null), ('231', '', 'Asisten Teknik Pabrik / Pengolahan PK', '1', '219', '28', null, null), ('232', '', 'Manajer Kebun', '0', null, '29', null, null), ('233', '', 'Asisten Kepala', '1', '232', '29', null, null), ('234', '', 'Asisten Tanaman Afd. I', '1', '232', '29', null, null), ('235', '', 'Asisten Tanaman Afd. II', '1', '232', '29', null, null), ('236', '', 'Asisten Tanaman Afd. III', '1', '232', '29', null, null), ('237', '', 'Asisten Tanaman Afd. IV', '1', '232', '29', null, null), ('238', '', 'Asisten Tanaman Afd. V', '1', '232', '29', null, null), ('239', '', 'Asisten Tanaman Afd. VI', '1', '232', '29', null, null), ('240', '', 'Asisten  Teknik Umum', '1', '232', '29', null, null), ('241', '', 'Asisten Administrasi Keuangan', '1', '232', '29', null, null), ('242', '', 'Asisten Administrasi SDM/Umum', '1', '232', '29', null, null), ('243', '', 'Manajer Kebun', '0', null, '30', null, null), ('244', '', 'Asisten Kepala', '1', '243', '30', null, null), ('245', '', 'Asisten Tanaman Afd. I', '1', '243', '30', null, null), ('246', '', 'Asisten Tanaman Afd. II', '1', '243', '30', null, null), ('247', '', 'Asisten Tanaman Afd. III', '1', '243', '30', null, null), ('248', '', 'Asisten Tanaman Afd. IV', '1', '243', '30', null, null), ('249', '', 'Asisten Tanaman KKPA Bumi Asih dan Kopontren', '1', '243', '30', null, null), ('250', '', 'Asisten  Teknik Umum', '1', '243', '30', null, null), ('251', '', 'Asisten Administrasi Keuangan', '1', '243', '30', null, null), ('252', '', 'Asisten Administrasi SDM/Umum', '1', '243', '30', null, null), ('253', '', 'Manajer PKS', '0', null, '31', null, null), ('254', '', 'Masinis Kepala Pabrik PKO', '1', '253', '31', null, null), ('255', '', 'Asisten Teknik Pabrik PKS', '1', '253', '31', null, null), ('256', '', 'Asisten Teknik Pabrik - Pabrik PKO', '1', '253', '31', null, null), ('257', '', 'Asisten Pengendalian Mutu PKS', '1', '253', '31', null, null), ('258', '', 'Asisten  Pengolahan PKS', '1', '253', '31', null, null), ('259', '', 'Asisten  Pengolahan PKS', '1', '253', '31', null, null), ('260', '', 'Asisten Pengolahan Pabrik PKO', '1', '253', '31', null, null), ('261', '', 'Asisten Pengolahan Pabrik PKO', '1', '253', '31', null, null), ('262', '', 'Asisten Administrasi  Keuangan & Umum PKS', '1', '253', '31', null, null), ('263', '', 'Asisten Administrasi Keuangan dan Umum Pabrik PKO - PKS Tandun', '1', '253', '31', null, null), ('264', '', 'Asisten Administrasi Keuangan dan Umum diperbantukan kepada Asisten Administrasi Keuangan dan Umum PKS Tandun', '1', '253', '31', null, null), ('265', '', 'Manajer PKS', '0', null, '32', null, null), ('266', '', 'Asisten Teknik Pabrik ', '1', '265', '32', null, null), ('267', '', 'Asisten Pengendalian Mutu', '1', '265', '32', null, null), ('268', '', 'Asisten Pengolahan', '1', '265', '32', null, null), ('269', '', 'Asisten Pengolahan', '1', '265', '32', null, null), ('270', '', 'Asisten Pabrik Kompos', '1', '265', '32', null, null), ('271', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '265', '32', null, null), ('272', '', 'General Manager', '0', null, '5', null, null), ('273', '', 'Kepala Urusan Tanaman', '1', '272', '5', null, null), ('274', '', 'Asisten Urusan Tanaman', '2', '273', '5', null, null), ('275', '', 'Kepala Urusan Teknik/Pengolahan', '1', '272', '5', null, null), ('276', '', 'Asisten Urusan Teknik/Pengolahan', '2', '275', '5', null, null), ('277', '', 'Kepala Urusan Administrasi Keuangan, SDM & Umum', '1', '272', '5', null, null), ('278', '', 'Asisten Urusan Administrasi  Keuangan', '2', '277', '5', null, null), ('279', '', 'Asisten Urusan Administrasi SDM & Umum', '2', '277', '5', null, null), ('280', '', 'Kepala Urusan Operasional Pembelian TBS Plasma, Non Plasma dan Pengelolaan Plasma/KKPA', '1', '272', '5', null, null), ('281', '', 'Manajer Kebun', '0', null, '34', null, null), ('282', '', 'Asisten Kepala', '1', '281', '34', null, null), ('283', '', 'Asisten Tanaman Afd. I', '1', '281', '34', null, null), ('284', '', 'Asisten Tanaman Afd. II', '1', '281', '34', null, null), ('285', '', 'Asisten Tanaman Afd.III', '1', '281', '34', null, null), ('286', '', 'Asisten Tanaman Afd. IV', '1', '281', '34', null, null), ('287', '', 'Asisten Tanaman Afd. V', '1', '281', '34', null, null), ('288', '', 'Asisten Teknik Umum', '1', '281', '34', null, null), ('289', '', 'Asisten Administrasi Keuangan', '1', '281', '34', null, null), ('290', '', 'Asisten Administrasi SDM/Umum', '1', '281', '34', null, null), ('291', '', 'Manajer Kebun', '0', null, '35', null, null), ('292', '', 'Asisten Kepala', '1', '291', '35', null, null), ('293', '', 'Asisten Tanaman Afd. I', '1', '291', '35', null, null), ('294', '', 'Asisten Tanaman Afd. II', '1', '291', '35', null, null), ('295', '', 'Asisten Tanaman Afd.III', '1', '291', '35', null, null), ('296', '', 'Asisten Tanaman Afd. IV', '1', '291', '35', null, null), ('297', '', 'Asisten Teknik Umum', '1', '291', '35', null, null), ('298', '', 'Asisten Administrasi Keuangan', '1', '291', '35', null, null), ('299', '', 'Asisten Administrasi SDM/Umum', '1', '291', '35', null, null), ('300', '', 'Manajer Kebun', '0', null, '36', null, null), ('301', '', 'Asisten Kepala Kebun KKPA Sei Pagar', '1', '300', '36', null, null), ('302', '', 'Asisten Kepala Kebun Inti Sei Pagar', '1', '300', '36', null, null), ('303', '', 'Asisten Tanaman Afd. I', '1', '300', '36', null, null), ('304', '', 'Asisten Tanaman Afd. II merangkap Asisten Operasional SISKA ', '1', '300', '36', null, null), ('305', '', 'Asisten Tanaman Afd. III', '1', '300', '36', null, null), ('306', '', 'Asisten Tanaman Afd. IV', '1', '300', '36', null, null), ('307', '', 'Asisten Tanaman KKPA Sukses Makmur', '1', '300', '36', null, null), ('308', '', 'Asisten Tanaman KKPA Iyo Basamo', '1', '300', '36', null, null), ('309', '', 'Asisten Tanaman KKPA Sawit Makmur (1.150 Ha)', '1', '300', '36', null, null), ('310', '', 'Asisten Tanaman KKPA Sawit Makmur (500 Ha)', '1', '300', '36', null, null), ('311', '', 'Asisten Tanaman KKPA Hidup Baru', '1', '300', '36', null, null), ('312', '', 'Asisten Teknik Umum', '1', '300', '36', null, null), ('313', '', 'Asisten Administrasi  Keuangan ', '1', '300', '36', null, null), ('314', '', 'Asisten Administrasi SDM/Umum', '1', '300', '36', null, null), ('315', '', 'Manajer Kebun', '0', null, '37', null, null), ('316', '', 'Asisten Kepala', '1', '315', '37', null, null), ('317', '', 'Asisten Tanaman Afd. I', '1', '315', '37', null, null), ('318', '', 'Asisten Tanaman Afd. II', '1', '315', '37', null, null), ('319', '', 'Asisten Tanaman Afd. III', '1', '315', '37', null, null), ('320', '', 'Asisten Tanaman Afd. IV', '1', '315', '37', null, null), ('321', '', 'Asisten Tanaman Afd. V', '1', '315', '37', null, null), ('322', '', 'Asisten Tanaman Afd. VI', '1', '315', '37', null, null), ('323', '', 'Asisten Teknik  Umum', '1', '315', '37', null, null), ('324', '', 'Asisten Administrasi  Keuangan ', '1', '315', '37', null, null), ('325', '', 'Asisten Administrasi SDM/Umum', '1', '315', '37', null, null), ('326', '', 'Manajer Kebun', '0', null, '38', null, null), ('327', '', 'Asisten Kepala', '1', '326', '38', null, null), ('328', '', 'Asisten Tanaman Afd. I', '1', '326', '38', null, null), ('329', '', 'Asisten Tanaman Afd. II', '1', '326', '38', null, null), ('330', '', 'Asisten Tanaman Afd. III', '1', '326', '38', null, null), ('331', '', 'Asisten Teknik Umum', '1', '326', '38', null, null), ('332', '', 'Asisten Administrasi Keuangan', '1', '326', '38', null, null), ('333', '', 'Asisten Administrasi SDM/Umum', '1', '326', '38', null, null), ('334', '', 'Manajer Kebun', '0', null, '39', null, null), ('335', '', 'Asisten Kepala  Rayon TPU Kebun Plasma SGO/SPA/TPU/SGH ', '1', '334', '39', null, null), ('336', '', 'Asisten Kepala  Rayon SGO Kebun Plasma SGO/SPA/TPU/SGH ', '1', '334', '39', null, null), ('337', '', 'Asisten Kepala  Rayon SGH Kebun Plasma SGO/SPA/TPU/SGH ', '1', '334', '39', null, null), ('338', '', 'Asisten Administrasi SDM/Umum', '1', '334', '39', null, null), ('339', '', 'Manajer PKS', '0', null, '40', null, null), ('340', '', 'Asisten Teknik Pabrik', '1', '339', '40', null, null), ('341', '', 'Asisten Pengendalian Mutu', '1', '339', '40', null, null), ('342', '', 'Asisten  Pengolahan', '1', '339', '40', null, null), ('343', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '339', '40', null, null), ('344', '', 'Masinis Kepala', '0', null, '42', null, null), ('345', '', 'Asisten Teknik Pabrik', '1', '344', '42', null, null), ('346', '', 'Asisten Pengendalian Mutu', '1', '344', '42', null, null), ('347', '', 'Asisten  Pengolahan', '1', '344', '42', null, null), ('348', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '344', '42', null, null), ('349', '', 'Manajer PKS', '0', null, '41', null, null), ('350', '', 'Asisten Teknik Pabrik', '1', '349', '41', null, null), ('351', '', 'Asisten Pengendalian Mutu', '1', '349', '41', null, null), ('352', '', 'Asisten  Pengolahan', '1', '349', '41', null, null), ('353', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '349', '41', null, null), ('354', '', 'Masinis Kepala', '0', null, '44', null, null), ('355', '', 'Asisten Teknik Pabrik', '1', '354', '44', null, null), ('356', '', 'Asisten Pengendalian Mutu', '1', '354', '44', null, null), ('357', '', 'Asisten  Pengolahan', '1', '354', '44', null, null), ('358', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '354', '44', null, null), ('359', '', 'Masinis Kepala', '0', null, '43', null, null), ('360', '', 'Asisten Teknik Pabrik', '1', '359', '43', null, null), ('361', '', 'Asisten Pengendalian Mutu', '1', '359', '43', null, null), ('362', '', 'Asisten  Pengolahan', '1', '359', '43', null, null), ('363', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '359', '43', null, null), ('364', '', 'General Manager', '0', null, '6', null, null), ('365', '', 'Kepala Urusan Tanaman', '1', '364', '6', null, null), ('366', '', 'Asisten Urusan Tanaman', '2', '365', '6', null, null), ('367', '', 'Kepala Urusan Teknik/Pengolahan', '1', '364', '6', null, null), ('368', '', 'Asisten Urusan Teknik/Pengolahan', '2', '367', '6', null, null), ('369', '', 'Kepala Urusan Administrasi Keuangan, SDM & Umum', '1', '364', '6', null, null), ('370', '', 'Asisten Urusan Administrasi  Keuangan', '2', '369', '6', null, null), ('371', '', 'Asisten Urusan Administrasi SDM & Umum', '2', '369', '6', null, null), ('372', '', 'Manajer Kebun', '0', null, '45', null, null), ('373', '', 'Asisten Kepala Rayon A', '1', '372', '45', null, null), ('374', '', 'Asisten Kepala Rayon B', '1', '372', '45', null, null), ('375', '', 'Asisten Tanaman Afd. I', '1', '372', '45', null, null), ('376', '', 'Asisten Tanaman Afd. II', '1', '372', '45', null, null), ('377', '', 'Asisten Tanaman Afd. III', '1', '372', '45', null, null), ('378', '', 'Asisten Tanaman Afd. IV', '1', '372', '45', null, null), ('379', '', 'Asisten Tanaman Afd. V', '1', '372', '45', null, null), ('380', '', 'Asisten Tanaman Afd. VI', '1', '372', '45', null, null), ('381', '', 'Asisten Tanaman Afd. VII', '1', '372', '45', null, null), ('382', '', 'Asisten Tanaman Afd. VIII', '1', '372', '45', null, null), ('383', '', 'Asisten Tanaman Afd. IX', '1', '372', '45', null, null), ('384', '', 'Asisten Tanaman Afd. X', '1', '372', '45', null, null), ('385', '', 'Asisten Tanaman Afd. XI', '1', '372', '45', null, null), ('386', '', 'Asisten Tanaman Afd. XII', '1', '372', '45', null, null), ('387', '', 'Asisten Teknik Umum', '1', '372', '45', null, null), ('388', '', 'Asisten Administrasi Keuangan', '1', '372', '45', null, null), ('389', '', 'Asisten Administrasi Keuangan diperbantukan kepada Asisten Administrasi Keuangan ', '1', '372', '45', null, null), ('390', '', 'Asisten Administrasi SDM/Umum', '1', '372', '45', null, null), ('391', '', 'Asisten Administrasi SDM/Umum diperbantukan kepada Asisten Administrasi SDM/Umum  ', '1', '372', '45', null, null), ('392', '', 'Manajer Kebun', '0', null, '46', null, null), ('393', '', 'Asisten Kepala', '1', '392', '46', null, null), ('394', '', 'Asisten Tanaman Afd. I', '1', '392', '46', null, null), ('395', '', 'Asisten Tanaman Afd. II', '1', '392', '46', null, null), ('396', '', 'Asisten Tanaman Afd. III', '1', '392', '46', null, null), ('397', '', 'Asisten Tanaman Afd. IV', '1', '392', '46', null, null), ('398', '', 'Asisten Teknik Umum', '1', '392', '46', null, null), ('399', '', 'Asisten Administrasi  Keuangan', '1', '392', '46', null, null), ('400', '', 'Asisten Administrasi Keuangan diperbantukan kepada Asisten Administrasi Keuangan ', '1', '392', '46', null, null), ('401', '', 'Asisten Administrasi SDM/Umum', '1', '392', '46', null, null), ('402', '', 'Manajer Kebun', '0', null, '47', null, null), ('403', '', 'Asisten Kepala ', '1', '402', '47', null, null), ('404', '', 'Asisten Tanaman Afd. I', '1', '402', '47', null, null), ('405', '', 'Asisten Tanaman Afd. II', '1', '402', '47', null, null), ('406', '', 'Asisten Tanaman Afd. III', '1', '402', '47', null, null), ('407', '', 'Asisten Tanaman Afd. IV', '1', '402', '47', null, null), ('408', '', 'Asisten Teknik Umum', '1', '402', '47', null, null), ('409', '', 'Asisten Administrasi  Keuangan', '1', '402', '47', null, null), ('410', '', 'Asisten Administrasi SDM/Umum', '1', '402', '47', null, null), ('411', '', 'Manajer Kebun', '0', null, '48', null, null), ('412', '', 'Asisten Kepala ', '1', '411', '48', null, null), ('413', '', 'Asisten Tanaman Afd. I', '1', '411', '48', null, null), ('414', '', 'Asisten Tanaman Afd. II', '1', '411', '48', null, null), ('415', '', 'Asisten Tanaman Afd. III', '1', '411', '48', null, null), ('416', '', 'Asisten Tanaman Afd. IV', '1', '411', '48', null, null), ('417', '', 'Asisten Teknik Umum', '1', '411', '48', null, null), ('418', '', 'Asisten Administrasi  Keuangan', '1', '411', '48', null, null), ('419', '', 'Asisten Administrasi SDM/Umum', '1', '411', '48', null, null), ('420', '', 'Manajer Kebun', '0', null, '49', null, null), ('421', '', 'Asisten Kepala Rayon SIN Kebun Plasma STA/SSI/SIN', '1', '420', '49', null, null), ('422', '', 'Asisten Kepala Rayon STA Kebun Plasma STA/SSI/SIN', '1', '420', '49', null, null), ('423', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '420', '49', null, null), ('424', '', 'Manajer PKS', '0', null, '50', null, null), ('425', '', 'Asisten Teknik Pabrik', '1', '424', '50', null, null), ('426', '', 'Asisten Pengendalian Mutu', '1', '424', '50', null, null), ('427', '', 'Asisten Pabrik Kompos', '1', '424', '50', null, null), ('428', '', 'Asisten  Pengolahan', '1', '424', '50', null, null), ('429', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '424', '50', null, null), ('430', '', 'Manajer PKS', '0', null, '51', null, null), ('431', '', 'Asisten Teknik Pabrik', '1', '430', '51', null, null), ('432', '', 'Asisten Pengendalian Mutu', '1', '430', '51', null, null), ('433', '', 'Asisten  Pengolahan', '1', '430', '51', null, null), ('434', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '430', '51', null, null), ('435', '', 'Manajer PKS', '0', null, '52', null, null), ('436', '', 'Asisten Teknik Pabrik', '1', '435', '52', null, null), ('437', '', 'Asisten Pengendalian Mutu', '1', '435', '52', null, null), ('438', '', 'Asisten  Pengolahan', '1', '435', '52', null, null), ('439', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '435', '52', null, null), ('440', '', 'General Manager', '0', null, '8', null, null), ('441', '', 'Kepala Urusan Tanaman', '1', '440', '8', null, null), ('442', '', 'Asisten Urusan Tanaman', '2', '441', '8', null, null), ('443', '', 'Kepala Urusan Teknik/Pengolahan', '1', '440', '8', null, null), ('444', '', 'Asisten Urusan Teknik/Pengolahan', '2', '443', '8', null, null), ('445', '', 'Kepala Urusan Administrasi Keuangan, SDM & Umum', '1', '440', '8', null, null), ('446', '', 'Asisten Urusan Administrasi  Keuangan', '2', '445', '8', null, null), ('447', '', 'Asisten Urusan Administrasi SDM & Umum', '2', '445', '8', null, null), ('448', '', 'Manajer Kebun', '0', null, '53', null, null), ('449', '', 'Asisten Kepala ', '1', '448', '53', null, null), ('450', '', 'Asisten Tanaman Afd. I', '1', '448', '53', null, null), ('451', '', 'Asisten Tanaman Afd. II', '1', '448', '53', null, null), ('452', '', 'Asisten Tanaman Afd. III', '1', '448', '53', null, null), ('453', '', 'Asisten Tanaman Afd. IV', '1', '448', '53', null, null), ('454', '', 'Asisten Tanaman Afd. V', '1', '448', '53', null, null), ('455', '', 'Asisten Tanaman Afd. VI', '1', '448', '53', null, null), ('456', '', 'Asisten Teknik Umum', '1', '448', '53', null, null), ('457', '', 'Asisten Administrasi Keuangan', '1', '448', '53', null, null), ('458', '', 'Asisten Administrasi SDM/Umum', '1', '448', '53', null, null), ('459', '', 'Manajer Kebun', '0', null, '54', null, null), ('460', '', 'Asisten Kepala', '1', '459', '54', null, null), ('461', '', 'Asisten Tanaman Afd. I', '1', '459', '54', null, null), ('462', '', 'Asisten Tanaman Afd. II', '1', '459', '54', null, null), ('463', '', 'Asisten Tanaman Afd. III', '1', '459', '54', null, null), ('464', '', 'Asisten Tanaman Afd. IV', '1', '459', '54', null, null), ('465', '', 'Asisten Teknik Umum', '1', '459', '54', null, null), ('466', '', 'Asisten Administrasi  Keuangan ', '1', '459', '54', null, null), ('467', '', 'Asisten Administrasi SDM/Umum', '1', '459', '54', null, null), ('468', '', 'Manajer Kebun', '0', null, '55', null, null), ('469', '', 'Asisten Kepala Rayon Pesikaian', '1', '468', '55', null, null), ('470', '', 'Asisten Kepala Kebun Inti/KKPA', '1', '468', '55', null, null), ('471', '', 'Asisten Tanaman Afd. I', '1', '468', '55', null, null), ('472', '', 'Asisten Tanaman Afd. II', '1', '468', '55', null, null), ('473', '', 'Asisten Tanaman Afd. III', '1', '468', '55', null, null), ('474', '', 'Asisten Tanaman Afd. IV', '1', '468', '55', null, null), ('475', '', 'Asisten Tanaman Afd. V', '1', '468', '55', null, null), ('476', '', 'Asisten Tanaman Afd. VI', '1', '468', '55', null, null), ('477', '', 'Asisten Tanaman Afd.  VII (Rayon Pesikaian)', '1', '468', '55', null, null), ('478', '', 'Asisten Tanaman Afd. VIII (Rayon Pesikaian)', '1', '468', '55', null, null), ('479', '', 'Asisten Tanaman Afd. IX (Rayon Pesikaian)', '1', '468', '55', null, null), ('480', '', 'Asisten Teknik Umum', '1', '468', '55', null, null), ('481', '', 'Asisten Administrasi  Keuangan', '1', '468', '55', null, null), ('482', '', 'Asisten Administrasi SDM/Umum diperbantukan kepada Asisten Administrasi SDM/Umum ', '1', '468', '55', null, null), ('483', '', 'Asisten Administrasi SDM/Umum', '1', '468', '55', null, null), ('484', '', 'Manajer Kebun', '0', null, '56', null, null), ('485', '', 'Manajer Kebun', '0', null, '58', null, null), ('486', '', 'Asisten Kepala Rayon SBT Kebun Plasma SBT/LDA', '1', '485', '58', null, null), ('487', '', 'Asisten Kepala Rayon LDA Kebun Plasma SBT/LDA', '1', '485', '58', null, null), ('488', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '485', '58', null, null), ('489', '', 'Manajer PKS', '0', null, '59', null, null), ('490', '', 'AsistenTeknik Pabrik ', '1', '489', '59', null, null), ('491', '', 'Asisten Pengendalian Mutu', '1', '489', '59', null, null), ('492', '', 'Asisten Pengolahan', '1', '489', '59', null, null), ('493', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '489', '59', null, null), ('494', '', 'Manajer PKS', '0', null, '60', null, null), ('495', '', 'Asisten Teknik Pabrik ', '1', '494', '60', null, null), ('496', '', 'Asisten Pengendalian Mutu', '1', '494', '60', null, null), ('497', '', 'Asisten Pengolahan', '1', '494', '60', null, null), ('498', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '494', '60', null, null), ('499', '', 'Kepala Unit PPKR', '0', null, '57', null, null), ('500', '', 'Asisten Pengolahan ', '1', '499', '57', null, null), ('501', '', 'Asisten Administrasi  Keuangan ', '1', '499', '57', null, null), ('502', '', 'Asisten Urs. Administrasi SDM & Umum', '1', '499', '57', null, null), ('503', '', 'Site Manager Pembangunan PKS Air Molek', '0', null, '61', null, null), ('504', '', 'Kepala Unit Rumah Sakit', '0', null, '62', null, null), ('505', '', 'Asisten Urusan Medis/Dokter Rumah Sakit ', '1', '504', '62', null, null), ('506', '', 'Kepala Perawat Rumah Sakit', '1', '504', '62', null, null), ('507', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '504', '62', null, null), ('508', '', 'Kepala Unit Rumah Sakit', '0', null, '63', null, null), ('509', '', 'Asisten Urusan Medis/Dokter Rumah Sakit ', '1', '508', '63', null, null), ('510', '', 'Kepala Perawat Rumah Sakit', '1', '508', '63', null, null), ('511', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '508', '63', null, null), ('512', '', 'Kepala Unit Rumah Sakit', '0', null, '64', null, null), ('513', '', 'Asisten Urusan Medis/Dokter Rumah Sakit ', '1', '512', '64', null, null), ('514', '', 'Asisten Administrasi  Keuangan dan Umum', '1', '512', '64', null, null), ('515', '', 'Kepala Unit Usaha Peternakan Sapi Berbasis Sistem Integrasi Sapi Kelapa sawit (Siska)', '0', null, '65', null, null), ('516', '', 'Asisten Kepala', '1', '515', '65', null, null), ('517', '', 'Asisten Operasional SISKA', '1', '515', '65', null, null), ('518', '', 'Asisten Administrasi Keuangan dan Umum Unit Usaha Peternakan Sapi Berbasis SISKA', '1', '515', '65', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `w_option`
-- ----------------------------
DROP TABLE IF EXISTS `w_option`;
CREATE TABLE `w_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_option`
-- ----------------------------
BEGIN;
INSERT INTO `w_option` VALUES ('1', 'cbr_mkh', '{\"a\":{\"a-\":{\"n\":{\"1\":38,\"2\":43,\"3\":50},\"i\":{\"1\":50,\"2\":57,\"3\":66},\"ii\":{\"1\":66,\"2\":76,\"3\":87},\"iii\":{\"1\":87,\"2\":100,\"3\":115},\"iv\":{\"1\":115,\"2\":132,\"3\":152}},\"a\":{\"n\":{\"1\":43,\"2\":50,\"3\":57},\"i\":{\"1\":57,\"2\":66,\"3\":76},\"ii\":{\"1\":76,\"2\":87,\"3\":100},\"iii\":{\"1\":100,\"2\":115,\"3\":132},\"iv\":{\"1\":132,\"2\":152,\"3\":176}},\"a+\":{\"n\":{\"1\":50,\"2\":57,\"3\":66},\"i\":{\"1\":66,\"2\":76,\"3\":87},\"ii\":{\"1\":87,\"2\":100,\"3\":115},\"iii\":{\"1\":115,\"2\":132,\"3\":152},\"iv\":{\"1\":152,\"2\":175,\"3\":200}}},\"b\":{\"b-\":{\"n\":{\"1\":50,\"2\":57,\"3\":66},\"i\":{\"1\":66,\"2\":76,\"3\":87},\"ii\":{\"1\":87,\"2\":100,\"3\":115},\"iii\":{\"1\":115,\"2\":132,\"3\":152},\"iv\":{\"1\":152,\"2\":175,\"3\":200}},\"b\":{\"n\":{\"1\":57,\"2\":66,\"3\":76},\"i\":{\"1\":76,\"2\":87,\"3\":100},\"ii\":{\"1\":100,\"2\":115,\"3\":132},\"iii\":{\"1\":132,\"2\":152,\"3\":175},\"iv\":{\"1\":175,\"2\":200,\"3\":230}},\"b+\":{\"n\":{\"1\":66,\"2\":76,\"3\":87},\"i\":{\"1\":87,\"2\":100,\"3\":115},\"ii\":{\"1\":115,\"2\":132,\"3\":152},\"iii\":{\"1\":152,\"2\":175,\"3\":200},\"iv\":{\"1\":200,\"2\":230,\"3\":264}}},\"c\":{\"c-\":{\"n\":{\"1\":66,\"2\":76,\"3\":87},\"i\":{\"1\":87,\"2\":100,\"3\":115},\"ii\":{\"1\":115,\"2\":132,\"3\":152},\"iii\":{\"1\":152,\"2\":175,\"3\":200},\"iv\":{\"1\":200,\"2\":230,\"3\":264}},\"c\":{\"n\":{\"1\":76,\"2\":87,\"3\":100},\"i\":{\"1\":100,\"2\":115,\"3\":132},\"ii\":{\"1\":132,\"2\":152,\"3\":175},\"iii\":{\"1\":175,\"2\":200,\"3\":230},\"iv\":{\"1\":230,\"2\":264,\"3\":304}},\"c+\":{\"n\":{\"1\":87,\"2\":100,\"3\":115},\"i\":{\"1\":115,\"2\":132,\"3\":152},\"ii\":{\"1\":152,\"2\":175,\"3\":200},\"iii\":{\"1\":200,\"2\":230,\"3\":264},\"iv\":{\"1\":264,\"2\":304,\"3\":350}}},\"d\":{\"d-\":{\"n\":{\"1\":87,\"2\":100,\"3\":115},\"i\":{\"1\":115,\"2\":132,\"3\":152},\"ii\":{\"1\":152,\"2\":175,\"3\":200},\"iii\":{\"1\":200,\"2\":230,\"3\":264},\"iv\":{\"1\":264,\"2\":304,\"3\":350}},\"d\":{\"n\":{\"1\":100,\"2\":115,\"3\":132},\"i\":{\"1\":132,\"2\":152,\"3\":175},\"ii\":{\"1\":175,\"2\":200,\"3\":230},\"iii\":{\"1\":230,\"2\":264,\"3\":304},\"iv\":{\"1\":304,\"2\":350,\"3\":400}},\"d+\":{\"n\":{\"1\":115,\"2\":132,\"3\":152},\"i\":{\"1\":152,\"2\":175,\"3\":200},\"ii\":{\"1\":200,\"2\":230,\"3\":264},\"iii\":{\"1\":264,\"2\":304,\"3\":350},\"iv\":{\"1\":350,\"2\":400,\"3\":460}}},\"e\":{\"e-\":{\"n\":{\"1\":115,\"2\":132,\"3\":152},\"i\":{\"1\":152,\"2\":175,\"3\":200},\"ii\":{\"1\":200,\"2\":230,\"3\":264},\"iii\":{\"1\":264,\"2\":304,\"3\":350},\"iv\":{\"1\":350,\"2\":400,\"3\":460}},\"e\":{\"n\":{\"1\":132,\"2\":152,\"3\":175},\"i\":{\"1\":175,\"2\":200,\"3\":230},\"ii\":{\"1\":230,\"2\":264,\"3\":304},\"iii\":{\"1\":304,\"2\":350,\"3\":400},\"iv\":{\"1\":400,\"2\":460,\"3\":528}},\"e+\":{\"n\":{\"1\":152,\"2\":175,\"3\":200},\"i\":{\"1\":200,\"2\":230,\"3\":264},\"ii\":{\"1\":264,\"2\":304,\"3\":350},\"iii\":{\"1\":350,\"2\":400,\"3\":460},\"iv\":{\"1\":460,\"2\":528,\"3\":608}}},\"f\":{\"f-\":{\"n\":{\"1\":152,\"2\":175,\"3\":200},\"i\":{\"1\":200,\"2\":230,\"3\":264},\"ii\":{\"1\":264,\"2\":304,\"3\":350},\"iii\":{\"1\":350,\"2\":400,\"3\":460},\"iv\":{\"1\":460,\"2\":528,\"3\":608}},\"f\":{\"n\":{\"1\":175,\"2\":200,\"3\":230},\"i\":{\"1\":230,\"2\":264,\"3\":304},\"ii\":{\"1\":304,\"2\":350,\"3\":400},\"iii\":{\"1\":400,\"2\":460,\"3\":528},\"iv\":{\"1\":528,\"2\":608,\"3\":700}},\"f+\":{\"n\":{\"1\":200,\"2\":230,\"3\":264},\"i\":{\"1\":264,\"2\":304,\"3\":350},\"ii\":{\"1\":350,\"2\":400,\"3\":460},\"iii\":{\"1\":460,\"2\":528,\"3\":608},\"iv\":{\"1\":608,\"2\":700,\"3\":800}}},\"g\":{\"g-\":{\"n\":{\"1\":200,\"2\":230,\"3\":264},\"i\":{\"1\":264,\"2\":304,\"3\":350},\"ii\":{\"1\":350,\"2\":400,\"3\":460},\"iii\":{\"1\":460,\"2\":528,\"3\":608},\"iv\":{\"1\":608,\"2\":700,\"3\":800}},\"g\":{\"n\":{\"1\":230,\"2\":264,\"3\":304},\"i\":{\"1\":304,\"2\":350,\"3\":400},\"ii\":{\"1\":400,\"2\":460,\"3\":528},\"iii\":{\"1\":528,\"2\":608,\"3\":700},\"iv\":{\"1\":700,\"2\":800,\"3\":920}},\"g+\":{\"n\":{\"1\":264,\"2\":304,\"3\":350},\"i\":{\"1\":350,\"2\":400,\"3\":460},\"ii\":{\"1\":460,\"2\":528,\"3\":608},\"iii\":{\"1\":608,\"2\":700,\"3\":800},\"iv\":{\"1\":800,\"2\":920,\"3\":1056}}},\"h\":{\"h-\":{\"n\":{\"1\":264,\"2\":304,\"3\":350},\"i\":{\"1\":350,\"2\":400,\"3\":460},\"ii\":{\"1\":460,\"2\":528,\"3\":608},\"iii\":{\"1\":608,\"2\":700,\"3\":800},\"iv\":{\"1\":800,\"2\":920,\"3\":1056}},\"h\":{\"n\":{\"1\":304,\"2\":350,\"3\":400},\"i\":{\"1\":400,\"2\":460,\"3\":528},\"ii\":{\"1\":528,\"2\":608,\"3\":700},\"iii\":{\"1\":700,\"2\":800,\"3\":920},\"iv\":{\"1\":920,\"2\":1056,\"3\":1216}},\"h+\":{\"n\":{\"1\":350,\"2\":400,\"3\":460},\"i\":{\"1\":460,\"2\":528,\"3\":608},\"ii\":{\"1\":608,\"2\":700,\"3\":800},\"iii\":{\"1\":800,\"2\":920,\"3\":1056},\"iv\":{\"1\":1056,\"2\":1216,\"3\":1400}}}}'), ('2', 'cbr_psv_', '{\"a\":{\"a\":{\"1\":10,\"2\":14,\"3\":19,\"4\":25,\"5\":33},\"a+\":{\"1\":12,\"2\":16,\"3\":22,\"4\":29,\"5\":38}},\"b\":{\"b\":{\"1\":12,\"2\":16,\"3\":22,\"4\":29,\"5\":38},\"b+\":{\"1\":14,\"2\":19,\"3\":25,\"4\":33,\"5\":43}},\"c\":{\"c\":{\"1\":14,\"2\":19,\"3\":25,\"4\":33,\"5\":43},\"c+\":{\"1\":16,\"2\":22,\"3\":29,\"4\":38,\"5\":50}},\"d\":{\"d\":{\"1\":16,\"2\":22,\"3\":29,\"4\":38,\"5\":50},\"d+\":{\"1\":19,\"2\":25,\"3\":33,\"4\":43,\"5\":57}},\"e\":{\"e\":{\"1\":19,\"2\":25,\"3\":33,\"4\":43,\"5\":57},\"e+\":{\"1\":22,\"2\":29,\"3\":38,\"4\":50,\"5\":66}},\"f\":{\"f\":{\"1\":22,\"2\":29,\"3\":38,\"4\":50,\"5\":66},\"f+\":{\"1\":25,\"2\":33,\"3\":43,\"4\":57,\"5\":76}},\"g\":{\"g\":{\"1\":25,\"2\":33,\"3\":43,\"4\":57,\"5\":76},\"g+\":{\"1\":29,\"2\":38,\"3\":50,\"4\":66,\"5\":87}},\"h\":{\"h\":{\"1\":29,\"2\":38,\"3\":50,\"4\":66,\"5\":87},\"h+\":{\"1\":33,\"2\":43,\"3\":57,\"4\":76,\"5\":100}}}'), ('3', 'cbr_acc', '{\"a\":{\"a\":\"8\",\"b\":\"10\",\"c\":\"14\",\"d\":\"19\",\"1\":{\"r\":\"10\",\"c\":\"14\",\"s\":\"19\",\"p\":\"25\"},\"2\":{\"r\":\"14\",\"c\":\"19\",\"s\":\"25\",\"p\":\"33\"},\"3\":{\"r\":\"19\",\"c\":\"25\",\"s\":\"33\",\"p\":\"43\"},\"4\":{\"r\":\"25\",\"c\":\"33\",\"s\":\"43\",\"p\":\"57\"},\"5\":{\"r\":\"33\",\"c\":\"43\",\"s\":\"57\",\"p\":\"76\"}},\"b\":{\"a\":\"12\",\"b\":\"16\",\"c\":\"22\",\"d\":\"29\",\"1\":{\"r\":\"16\",\"c\":\"22\",\"s\":\"29\",\"p\":\"38\"},\"2\":{\"r\":\"22\",\"c\":\"29\",\"s\":\"38\",\"p\":\"50\"},\"3\":{\"r\":\"29\",\"c\":\"38\",\"s\":\"50\",\"p\":\"66\"},\"4\":{\"r\":\"38\",\"c\":\"50\",\"s\":\"66\",\"p\":\"87\"},\"5\":{\"r\":\"50\",\"c\":\"66\",\"s\":\"87\",\"p\":\"115\"}},\"c\":{\"a\":\"19\",\"b\":\"25\",\"c\":\"33\",\"d\":\"43\",\"1\":{\"r\":\"25\",\"c\":\"33\",\"s\":\"43\",\"p\":\"57\"},\"2\":{\"r\":\"33\",\"c\":\"43\",\"s\":\"57\",\"p\":\"76\"},\"3\":{\"r\":\"43\",\"c\":\"57\",\"s\":\"76\",\"p\":\"100\"},\"4\":{\"r\":\"57\",\"c\":\"76\",\"s\":\"100\",\"p\":\"132\"},\"5\":{\"r\":\"76\",\"c\":\"100\",\"s\":\"132\",\"p\":\"175\"}},\"d\":{\"a\":\"29\",\"b\":\"38\",\"c\":\"50\",\"d\":\"66\",\"1\":{\"r\":\"38\",\"c\":\"50\",\"s\":\"66\",\"p\":\"87\"},\"2\":{\"r\":\"50\",\"c\":\"66\",\"s\":\"87\",\"p\":\"115\"},\"3\":{\"r\":\"66\",\"c\":\"87\",\"s\":\"115\",\"p\":\"152\"},\"4\":{\"r\":\"87\",\"c\":\"115\",\"s\":\"152\",\"p\":\"200\"},\"5\":{\"r\":\"115\",\"c\":\"152\",\"s\":\"200\",\"p\":\"264\"}},\"e\":{\"a\":\"43\",\"b\":\"57\",\"c\":\"76\",\"d\":\"100\",\"1\":{\"r\":\"57\",\"c\":\"76\",\"s\":\"100\",\"p\":\"132\"},\"2\":{\"r\":\"76\",\"c\":\"100\",\"s\":\"132\",\"p\":\"175\"},\"3\":{\"r\":\"100\",\"c\":\"132\",\"s\":\"175\",\"p\":\"230\"},\"4\":{\"r\":\"132\",\"c\":\"175\",\"s\":\"230\",\"p\":\"304\"},\"5\":{\"r\":\"175\",\"c\":\"230\",\"s\":\"304\",\"p\":\"400\"}},\"f\":{\"a\":\"66\",\"b\":\"87\",\"c\":\"115\",\"d\":\"152\",\"1\":{\"r\":\"87\",\"c\":\"115\",\"s\":\"152\",\"p\":\"200\"},\"2\":{\"r\":\"115\",\"c\":\"152\",\"s\":\"200\",\"p\":\"264\"},\"3\":{\"r\":\"152\",\"c\":\"200\",\"s\":\"264\",\"p\":\"350\"},\"4\":{\"r\":\"200\",\"c\":\"264\",\"s\":\"350\",\"p\":\"460\"},\"5\":{\"r\":\"264\",\"c\":\"350\",\"s\":\"460\",\"p\":\"608\"}},\"g\":{\"a\":\"100\",\"b\":\"132\",\"c\":\"175\",\"d\":\"230\",\"1\":{\"r\":\"132\",\"c\":\"175\",\"s\":\"230\",\"p\":\"304\"},\"2\":{\"r\":\"175\",\"c\":\"230\",\"s\":\"304\",\"p\":\"400\"},\"3\":{\"r\":\"230\",\"c\":\"304\",\"s\":\"400\",\"p\":\"528\"},\"4\":{\"r\":\"304\",\"c\":\"400\",\"s\":\"528\",\"p\":\"700\"},\"5\":{\"r\":\"400\",\"c\":\"528\",\"s\":\"700\",\"p\":\"920\"}}}'), ('4', 'cbr_psp', '{\"87\":{\"38\":33,\"43\":38,\"50\":43,\"57\":50,\"66\":57,\"76\":66,\"87\":76,\"100\":87,\"115\":100,\"132\":115,\"152\":132,\"175\":152,\"200\":175,\"230\":200,\"264\":230,\"304\":264,\"350\":304,\"400\":350,\"460\":400,\"528\":460,\"608\":528,\"700\":608,\"800\":700,\"920\":800,\"1056\":920,\"1216\":1056,\"1400\":1216,\"1600\":1400,\"1840\":1600,\"2112\":1840,\"2432\":2112,\"2800\":2432,\"3200\":2800},\"76\":{\"38\":29,\"43\":33,\"50\":38,\"57\":43,\"66\":50,\"76\":57,\"87\":66,\"100\":76,\"115\":87,\"132\":100,\"152\":115,\"175\":132,\"200\":152,\"230\":175,\"264\":200,\"304\":230,\"350\":264,\"400\":304,\"460\":350,\"528\":400,\"608\":460,\"700\":528,\"800\":608,\"920\":700,\"1056\":800,\"1216\":920,\"1400\":1056,\"1600\":1216,\"1840\":1400,\"2112\":1600,\"2432\":1840,\"2800\":2112,\"3200\":2432},\"65\":{\"38\":25,\"43\":29,\"50\":33,\"57\":38,\"66\":43,\"76\":50,\"87\":57,\"100\":66,\"115\":76,\"132\":87,\"152\":100,\"175\":115,\"200\":132,\"230\":152,\"264\":175,\"304\":200,\"350\":230,\"400\":264,\"460\":304,\"528\":350,\"608\":400,\"700\":460,\"800\":528,\"920\":608,\"1056\":700,\"1216\":800,\"1400\":920,\"1600\":1056,\"1840\":1216,\"2112\":1400,\"2432\":1600,\"2800\":1840,\"3200\":2112},\"57\":{\"38\":22,\"43\":25,\"50\":29,\"57\":33,\"66\":38,\"76\":43,\"87\":50,\"100\":57,\"115\":66,\"132\":76,\"152\":68,\"175\":100,\"200\":115,\"230\":132,\"264\":152,\"304\":175,\"350\":200,\"400\":230,\"460\":264,\"528\":304,\"608\":350,\"700\":400,\"800\":460,\"920\":528,\"1056\":608,\"1216\":700,\"1400\":800,\"1600\":920,\"1840\":1056,\"2112\":1216,\"2432\":1400,\"2800\":1600,\"3200\":1840},\"50\":{\"38\":19,\"43\":22,\"50\":25,\"57\":29,\"66\":33,\"76\":38,\"87\":43,\"100\":50,\"115\":57,\"132\":66,\"152\":76,\"175\":87,\"200\":100,\"230\":115,\"264\":132,\"304\":152,\"350\":175,\"400\":200,\"460\":230,\"528\":264,\"608\":304,\"700\":350,\"800\":400,\"920\":460,\"1056\":528,\"1216\":608,\"1400\":700,\"1600\":800,\"1840\":920,\"2112\":1056,\"2432\":1216,\"2800\":1400,\"3200\":1600},\"43\":{\"38\":16,\"43\":19,\"50\":22,\"57\":25,\"66\":29,\"76\":33,\"87\":38,\"100\":43,\"115\":50,\"132\":57,\"152\":66,\"175\":76,\"200\":87,\"230\":100,\"264\":115,\"304\":132,\"350\":152,\"400\":175,\"460\":200,\"528\":230,\"608\":264,\"700\":304,\"800\":350,\"920\":400,\"1056\":460,\"1216\":528,\"1400\":608,\"1600\":700,\"1840\":800,\"2112\":920,\"2432\":1056,\"2800\":1216,\"3200\":1400},\"38\":{\"38\":14,\"43\":16,\"50\":19,\"57\":22,\"66\":25,\"76\":29,\"87\":33,\"100\":38,\"115\":43,\"132\":50,\"152\":57,\"175\":66,\"200\":76,\"230\":87,\"264\":100,\"304\":115,\"350\":132,\"400\":152,\"460\":175,\"528\":200,\"608\":230,\"700\":264,\"800\":304,\"920\":350,\"1056\":400,\"1216\":460,\"1400\":528,\"1600\":608,\"1840\":700,\"2112\":800,\"2432\":920,\"2800\":1056,\"3200\":1216},\"33\":{\"38\":12,\"43\":14,\"50\":16,\"57\":19,\"66\":22,\"76\":25,\"87\":29,\"100\":33,\"115\":38,\"132\":43,\"152\":50,\"175\":57,\"200\":66,\"230\":76,\"264\":87,\"304\":100,\"350\":115,\"400\":132,\"460\":152,\"528\":175,\"608\":200,\"700\":230,\"800\":264,\"920\":304,\"1056\":350,\"1216\":400,\"1400\":460,\"1600\":528,\"1840\":608,\"2112\":700,\"2432\":800,\"2800\":920,\"3200\":1056},\"29\":{\"38\":10,\"43\":12,\"50\":14,\"57\":16,\"66\":19,\"76\":22,\"87\":25,\"100\":29,\"115\":33,\"132\":38,\"152\":43,\"175\":50,\"200\":57,\"230\":66,\"264\":76,\"304\":87,\"350\":100,\"400\":115,\"460\":132,\"528\":152,\"608\":175,\"700\":200,\"800\":230,\"920\":264,\"1056\":304,\"1216\":350,\"1400\":400,\"1600\":460,\"1840\":528,\"2112\":608,\"2432\":700,\"2800\":800,\"3200\":920},\"25\":{\"38\":9,\"43\":10,\"50\":12,\"57\":14,\"66\":16,\"76\":19,\"87\":22,\"100\":25,\"115\":29,\"132\":33,\"152\":38,\"175\":43,\"200\":50,\"230\":57,\"264\":66,\"304\":76,\"350\":87,\"400\":100,\"460\":115,\"528\":132,\"608\":152,\"700\":175,\"800\":200,\"920\":230,\"1056\":264,\"1216\":304,\"1400\":350,\"1600\":400,\"1840\":460,\"2112\":528,\"2432\":608,\"2800\":700,\"3200\":800},\"22\":{\"38\":8,\"43\":9,\"50\":10,\"57\":12,\"66\":14,\"76\":16,\"87\":19,\"100\":22,\"115\":25,\"132\":29,\"152\":33,\"175\":38,\"200\":43,\"230\":50,\"264\":57,\"304\":66,\"350\":76,\"400\":87,\"460\":100,\"528\":115,\"608\":132,\"700\":152,\"800\":175,\"920\":200,\"1056\":230,\"1216\":264,\"1400\":304,\"1600\":350,\"1840\":400,\"2112\":460,\"2432\":528,\"2800\":608,\"3200\":700},\"19\":{\"38\":7,\"43\":8,\"50\":9,\"57\":10,\"66\":12,\"76\":14,\"87\":16,\"100\":19,\"115\":22,\"132\":25,\"152\":29,\"175\":33,\"200\":38,\"230\":43,\"264\":50,\"304\":57,\"350\":66,\"400\":76,\"460\":87,\"528\":100,\"608\":115,\"700\":132,\"800\":152,\"920\":175,\"1056\":200,\"1216\":230,\"1400\":264,\"1600\":304,\"1840\":350,\"2112\":400,\"2432\":460,\"2800\":528,\"3200\":608},\"16\":{\"38\":6,\"43\":7,\"50\":8,\"57\":9,\"66\":10,\"76\":12,\"87\":14,\"100\":16,\"115\":19,\"132\":22,\"152\":25,\"175\":29,\"200\":33,\"230\":38,\"264\":43,\"304\":50,\"350\":57,\"400\":66,\"460\":76,\"528\":87,\"608\":100,\"700\":115,\"800\":132,\"920\":152,\"1056\":175,\"1216\":200,\"1400\":230,\"1600\":264,\"1840\":304,\"2112\":350,\"2432\":400,\"2800\":460,\"3200\":528},\"14\":{\"38\":5,\"43\":6,\"50\":7,\"57\":8,\"66\":9,\"76\":10,\"87\":12,\"100\":14,\"115\":16,\"132\":19,\"152\":22,\"175\":25,\"200\":29,\"230\":33,\"264\":38,\"304\":43,\"350\":50,\"400\":57,\"460\":66,\"528\":76,\"608\":87,\"700\":100,\"800\":115,\"920\":132,\"1056\":152,\"1216\":175,\"1400\":200,\"1600\":230,\"1840\":364,\"2112\":304,\"2432\":350,\"2800\":400,\"3200\":460},\"12\":{\"38\":4,\"43\":5,\"50\":6,\"57\":7,\"66\":8,\"76\":9,\"87\":10,\"100\":12,\"115\":14,\"132\":16,\"152\":19,\"175\":22,\"200\":25,\"230\":29,\"264\":33,\"304\":38,\"350\":43,\"400\":50,\"460\":57,\"528\":66,\"608\":76,\"700\":87,\"800\":100,\"920\":115,\"1056\":132,\"1216\":152,\"1400\":175,\"1600\":200,\"1840\":230,\"2112\":264,\"2432\":304,\"2800\":350,\"3200\":400},\"10\":{\"38\":3,\"43\":4,\"50\":5,\"57\":6,\"66\":7,\"76\":8,\"87\":9,\"100\":10,\"115\":12,\"132\":14,\"152\":16,\"175\":19,\"200\":22,\"230\":25,\"264\":29,\"304\":33,\"350\":38,\"400\":43,\"460\":50,\"528\":57,\"608\":66,\"700\":76,\"800\":87,\"920\":100,\"1056\":115,\"1216\":132,\"1400\":152,\"1600\":175,\"1840\":200,\"2112\":230,\"2432\":264,\"2800\":304,\"3200\":350}}'), ('5', 'cbr_hub', '{\"152\":[\"25\",\"29\"],\"175\":[\"25\",\"29\",\"33\"],\"200\":[\"29\",\"33\",\"38\"],\"230\":[\"33\",\"38\",\"43\"],\"264\":[\"33\",\"38\",\"43\"],\"304\":[\"38\",\"43\",\"50\"],\"350\":[\"38\",\"43\",\"50\"],\"400\":[\"43\",\"50\",\"57\"],\"460\":[\"50\",\"57\"],\"528\":[\"50\",\"57\",\"66\"],\"608\":[\"50\",\"57\",\"66\"],\"700\":[\"57\",\"66\"]}'), ('6', 'cbr_level', '[\"5600\",\"4864\",\"4224\",\"3680\",\"3200\",\"2800\",\"2432\",\"2112\",\"1840\",\"1600\",\"1400\",\"1216\",\"1056\",\"920\",\"800\",\"700\",\"608\",\"528\",\"460\",\"400\",\"350\",\"304\",\"264\",\"230\",\"200\",\"175\",\"152\",\"132\",\"115\",\"100\",\"87\",\"76\",\"66\",\"57\",\"50\",\"43\",\"38\",\"33\",\"29\",\"25\",\"22\",\"19\",\"16\",\"14\",\"12\",\"10\",\"9\",\"8\",\"7\",\"6\",\"5\",\"4\"]'), ('7', 'cbr_psv', '\r\n{\"a\":{\"1\":\"10\",\"1+\":\"12\",\"2\":\"14\",\"2+\":\"16\",\"3\":\"19\",\"3+\":\"22\",\"4\":\"25\",\"4+\":\"29\",\"5\":\"33\",\"5+\":\"38\"},\"b\":{\"1\":\"12\",\"1+\":\"14\",\"2\":\"16\",\"2+\":\"19\",\"3\":\"22\",\"3+\":\"25\",\"4\":\"29\",\"4+\":\"33\",\"5\":\"38\",\"5+\":\"43\"},\"c\":{\"1\":\"14\",\"1+\":\"16\",\"2\":\"19\",\"2+\":\"22\",\"3\":\"25\",\"3+\":\"29\",\"4\":\"33\",\"4+\":\"38\",\"5\":\"43\",\"5+\":\"50\"},\"d\":{\"1\":\"16\",\"1+\":\"19\",\"2\":\"22\",\"2+\":\"25\",\"3\":\"29\",\"3+\":\"33\",\"4\":\"38\",\"4+\":\"43\",\"5\":\"50\",\"5+\":\"57\"},\"e\":{\"1\":\"19\",\"1+\":\"22\",\"2\":\"25\",\"2+\":\"29\",\"3\":\"33\",\"3+\":\"38\",\"4\":\"43\",\"4+\":\"50\",\"5\":\"57\",\"5+\":\"66\"},\"f\":{\"1\":\"22\",\"1+\":\"25\",\"2\":\"29\",\"2+\":\"33\",\"3\":\"38\",\"3+\":\"43\",\"4\":\"50\",\"4+\":\"57\",\"5\":\"66\",\"5+\":\"76\"},\"g\":{\"1\":\"25\",\"1+\":\"29\",\"2\":\"33\",\"2+\":\"38\",\"3\":\"43\",\"3+\":\"50\",\"4\":\"57\",\"4+\":\"66\",\"5\":\"76\",\"5+\":\"87\"},\"h\":{\"1\":\"29\",\"1+\":\"33\",\"2\":\"38\",\"2+\":\"43\",\"3\":\"50\",\"3+\":\"57\",\"4\":\"66\",\"4+\":\"76\",\"5\":\"87\",\"5+\":\"100\"}}');
COMMIT;

-- ----------------------------
--  Table structure for `w_preference`
-- ----------------------------
DROP TABLE IF EXISTS `w_preference`;
CREATE TABLE `w_preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_preference`
-- ----------------------------
BEGIN;
INSERT INTO `w_preference` VALUES ('1', 'site_name', 'iHCMS LPP'), ('2', 'site_logo', ''), ('3', 'tagline', 'Human Resource Friendly'), ('4', 'email', 'ihcms@lpp.ac.id'), ('5', 'timezone', '-'), ('6', 'date_format', ''), ('7', 'time_format', ''), ('8', 'week_start', '');
COMMIT;

-- ----------------------------
--  Table structure for `w_religion`
-- ----------------------------
DROP TABLE IF EXISTS `w_religion`;
CREATE TABLE `w_religion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_state`
-- ----------------------------
DROP TABLE IF EXISTS `w_state`;
CREATE TABLE `w_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL COMMENT 'nama propinsi',
  `code` varchar(5) DEFAULT NULL COMMENT 'kode propinsi',
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propinsi_negara1_idx` (`country_id`),
  CONSTRAINT `fk_propinsi_negara1` FOREIGN KEY (`country_id`) REFERENCES `w_country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_state`
-- ----------------------------
BEGIN;
INSERT INTO `w_state` VALUES ('1', 'Yogyakarta', '', '3'), ('2', 'Jakarta', '', '3');
COMMIT;

-- ----------------------------
--  Table structure for `w_unit`
-- ----------------------------
DROP TABLE IF EXISTS `w_unit`;
CREATE TABLE `w_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_w_unit_w_unit1_idx` (`parent_id`),
  CONSTRAINT `fk_w_unit_w_unit1` FOREIGN KEY (`parent_id`) REFERENCES `w_unit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_unit`
-- ----------------------------
BEGIN;
INSERT INTO `w_unit` VALUES ('1', '', 'Dewan Direksi', null, null), ('2', '', 'Kantor Pusat', '1', '1'), ('3', '', 'SBU Tandun', '1', '1'), ('5', '', 'SBU Sei Galuh', '1', '1'), ('6', '', 'SBU Sei Rokan', '1', '1'), ('8', '', 'SBU Lubuk Dalam', '1', '1'), ('9', '', 'Kebun Tandun', '2', '3'), ('10', '', 'Bagian Tanaman', '2', '2'), ('11', '', 'Bagian Teknik', '2', '2'), ('12', '', 'Bagian Pengolahan', '2', '2'), ('13', '', 'Bagian  Pembelian Bahan Baku  & Pengelolaan Plasma/KKPA', '2', '2'), ('14', '', 'Bagian Akuntansi', '2', '2'), ('15', '', 'Bagian Pembiayaan', '2', '2'), ('16', '', 'Bagian PKBL', '2', '2'), ('17', '', 'Bagian P2 TI', '2', '2'), ('18', '', 'Bagian  Pengembangan  Usaha', '2', '2'), ('19', '', 'Bagian  Pemasaran', '2', '2'), ('20', '', 'Bagian SDM', '2', '2'), ('21', '', 'Bagian Umum', '2', '2'), ('22', '', 'Bagian Pengadaan', '2', '2'), ('23', '', 'Bagian  Sekretaris Perusahaan', '2', '2'), ('24', '', 'Bagian SPI', '2', '2'), ('25', '', 'Kebun Sei Berlian', '2', '3'), ('26', '', 'Kebun Terantam', '2', '3'), ('27', '', 'Kebun Sei Kencana', '2', '3'), ('28', '', 'Kebun Sei Lindai', '2', '3'), ('29', '', 'Kebun Tamora', '2', '3'), ('30', '', 'Kebun Inti/KKPA Sei Batulangkah', '2', '3'), ('31', '', 'PKS Tandun', '2', '3'), ('32', '', 'PKS Terantam', '2', '3'), ('33', '', 'PKO Tandun', '2', '3'), ('34', '', 'Kebun Inti/KKPA Sei Galuh', '2', '5'), ('35', '', 'Kebun Inti/KKPA Sei Garo', '2', '5'), ('36', '', 'Kebun Inti/KKPA Sei Pagar', '2', '5'), ('37', '', 'Kebun Tanjung Medan', '2', '5'), ('38', '', 'Kebun Inti Tanah Putih', '2', '5'), ('39', '', 'Kebun Plasma SGO/SPA/TPU/SGH', '2', '5'), ('40', '', 'PKS  Sei Galuh', '2', '5'), ('41', '', 'PKS Sei Garo', '2', '5'), ('42', '', 'PKS Sei Pagar', '2', '5'), ('43', '', 'PKS Tanjung Medan', '2', '5'), ('44', '', 'PKS Tanah Putih', '2', '5'), ('45', '', 'Kebun Sei Rokan', '2', '6'), ('46', '', 'Kebun Inti Sei Intan', '2', '6'), ('47', '', 'Kebun Sei Siasam', '2', '6'), ('48', '', 'Kebun Inti/KKPA Sei Tapung', '2', '6'), ('49', '', 'KebunPlasma STA/SSI/SIN', '2', '6'), ('50', '', 'PKS Sei Rokan', '2', '6'), ('51', '', 'PKS Sei Intan', '2', '6'), ('52', '', 'PKS Sei Tapung', '2', '6'), ('53', '', 'Kebun Inti Lubuk Dalam', '2', '8'), ('54', '', 'Kebun Inti Sei Buatan', '2', '8'), ('55', '', 'Kebun Inti/KKPA Air Molek I', '2', '8'), ('56', '', 'Kebun Inti/KKPA Air Molek II', '2', '8'), ('57', '', 'PPKR Bukit  Selasih', '2', '8'), ('58', '', 'KebunPlasma SBT/LDA', '2', '8'), ('59', '', 'PKS Lubuk Dalam', '2', '8'), ('60', '', 'PKS Sei Buatan', '2', '8'), ('61', '', 'PKS Air Molek', '2', '8'), ('62', '', 'Rumah Sakit Nusa Lima', '1', '1'), ('63', '', 'Rumah Sakit Tandun', '1', '1'), ('64', '', 'Rumah Sakit Sri Rokan', '1', '1'), ('65', '', 'Unit Usaha Peternakan Sapi  Berbasis Sistem Integrasi Sapi Kelapa Sawit (SISKA) ', '1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `w_user`
-- ----------------------------
DROP TABLE IF EXISTS `w_user`;
CREATE TABLE `w_user` (
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
  KEY `fk_w_user_w_user2_idx` (`modified_by`),
  CONSTRAINT `fk_w_user_w_user1` FOREIGN KEY (`created_by`) REFERENCES `w_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_w_user_w_user2` FOREIGN KEY (`modified_by`) REFERENCES `w_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `w_user`
-- ----------------------------
BEGIN;
INSERT INTO `w_user` VALUES ('1', 'admin', '3566e246ab80b9989149b84a0b62e433', '50b86eafe09b14.73729655', null, '0', '2013-01-14', '1', '', '1'), ('2', 'andik', 'f3fa9c8837a9e923f73272d2dd0aa7f1', '50f38538e948c8.81636082', '2013-01-14', '1', '2013-01-16', '1', 'andik hore sad', '1'), ('22', 'hasoe', '0fab68e2a7719245c3a135dee512c0da', '50ff6479af4d63.98803648', '2013-01-23', '1', null, null, null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
