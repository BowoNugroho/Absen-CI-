/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : satpam

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-07-23 22:37:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_lokasi`;
CREATE TABLE `tbl_lokasi` (
  `id_lokasi` varchar(255) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_lokasi
-- ----------------------------
INSERT INTO `tbl_lokasi` VALUES ('1679091c5a880faf6fb5e6087eb1b2dc', 'XII TKJ A');
INSERT INTO `tbl_lokasi` VALUES ('c4ca4238a0b923820dcc509a6f75849b', 'X TKJ A');
INSERT INTO `tbl_lokasi` VALUES ('c81e728d9d4c2f636f067f89cc14862c', 'X TKJ B');
INSERT INTO `tbl_lokasi` VALUES ('eccbc87e4b5ce2fe28308fd9f2a7baf3', 'XI TKJ A');

-- ----------------------------
-- Table structure for tbl_patroli
-- ----------------------------
DROP TABLE IF EXISTS `tbl_patroli`;
CREATE TABLE `tbl_patroli` (
  `id_patroli` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_jam` datetime NOT NULL,
  `id_lokasi` varchar(255) NOT NULL,
  `id_petugas` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_patroli`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_patroli
-- ----------------------------
INSERT INTO `tbl_patroli` VALUES ('1', '2019-02-10 07:35:04', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '1231', 'nihil');
INSERT INTO `tbl_patroli` VALUES ('4', '2019-02-10 08:48:57', 'c81e728d9d4c2f636f067f89cc14862c', '1231', '');
INSERT INTO `tbl_patroli` VALUES ('5', '2019-02-10 08:49:03', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '1231', '');
INSERT INTO `tbl_patroli` VALUES ('6', '2019-02-10 08:49:06', 'c4ca4238a0b923820dcc509a6f75849b', '1231', '');
INSERT INTO `tbl_patroli` VALUES ('7', '2019-02-14 09:17:57', 'c4ca4238a0b923820dcc509a6f75849b', '1231', 'Absen satu Ijin');
INSERT INTO `tbl_patroli` VALUES ('8', '2019-02-14 09:20:10', 'c81e728d9d4c2f636f067f89cc14862c', '1231', '');
INSERT INTO `tbl_patroli` VALUES ('9', '2019-02-14 09:57:26', 'c4ca4238a0b923820dcc509a6f75849b', '1231', '');
INSERT INTO `tbl_patroli` VALUES ('10', '2019-02-14 09:59:36', 'c81e728d9d4c2f636f067f89cc14862c', '1231', 'jajan\r\n');
INSERT INTO `tbl_patroli` VALUES ('11', '2019-02-16 19:25:30', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '1231', 'nihil\r\n');
INSERT INTO `tbl_patroli` VALUES ('12', '2019-02-17 07:32:40', 'c81e728d9d4c2f636f067f89cc14862c', '1231', '');

-- ----------------------------
-- Table structure for tbl_petugas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_petugas`;
CREATE TABLE `tbl_petugas` (
  `id_petugas` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_petugas
-- ----------------------------
INSERT INTO `tbl_petugas` VALUES ('1231', 'coba', 'admin', 'coba', 'c3ec0f7b054e729c5a716c8125839829');
INSERT INTO `tbl_petugas` VALUES ('142543', 'coba1', 'petugas', 'coba1', 'bf0c95ff56e3b2598456cd455a8684c1');
