/*
Navicat MySQL Data Transfer

Source Server         : Khirimat_hos
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : nkrm

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2015-04-02 00:38:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('admin', '1', '1426125604');
INSERT INTO `auth_assignment` VALUES ('admin', '4', '1427078648');

-- ----------------------------
-- Table structure for `auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1426125486', '1426125486');
INSERT INTO `auth_item` VALUES ('admin', '2', null, null, null, '1426076383', '1426125523');
INSERT INTO `auth_item` VALUES ('admin_test', '1', null, null, null, '1426125568', '1426125568');
INSERT INTO `auth_item` VALUES ('dd', '2', null, null, null, '1427111116', '1427111116');

-- ----------------------------
-- Table structure for `auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('admin', '/*');
INSERT INTO `auth_item_child` VALUES ('admin_test', 'admin');

-- ----------------------------
-- Table structure for `auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `address` text NOT NULL COMMENT 'ที่อยู่',
  `tambon_id` int(11) NOT NULL COMMENT 'ตำบล',
  `zipcode` varchar(5) NOT NULL COMMENT 'รหัสไปรษณีย์',
  `email` varchar(255) NOT NULL COMMENT 'อีเมลล์',
  `tel` varchar(20) NOT NULL COMMENT 'เบอร์โทร',
  `lat` varchar(45) NOT NULL COMMENT 'ละติจูด',
  `lng` varchar(45) NOT NULL COMMENT 'ลองกิจูด',
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'บันทึกเมื่อ',
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tambon_id` (`tambon_id`),
  CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`tambon_id`) REFERENCES `base_tambon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'มานพ กองอุ่น', '60 หมู่ 9', '341405', '34140', 'kongoon@gmail.com', '0833704413', '15.255223', '104.831955', '2015-02-17 18:38:07', 'สุจินต์', 'สุกกล้า');
INSERT INTO `contact` VALUES ('2', 'ณภาภัช กองอุ่น', '123 หมู่ 4', '103605', '12345', 'test@test.com', '123456', '15.514246', '104.724120', '2015-02-18 00:16:57', 'เกรียงไกร', 'ชาติสุทธิ์');
INSERT INTO `contact` VALUES ('6', '', '33', '640612', '', 'sds@gmail.com', '', '', '', '2015-03-15 15:58:34', 'ทดสอบ', 'กาแฟ');
INSERT INTO `contact` VALUES ('7', '', 'hft', '730505', '', 'ss@mm.vom', '', '', '', '2015-04-01 19:49:13', 'jjj', ';;;;');
INSERT INTO `contact` VALUES ('8', '', 'wdwf', '260403', '', 'bhsds@d.com', '', '', '', '2015-04-01 20:49:48', 'vdvd', 'scscw');
INSERT INTO `contact` VALUES ('9', '', 'dqdq', '230702', '', 'dqdq@g.com', '', '', '', '2015-04-01 20:53:53', 'sas', 'dqdq');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1427697730');
INSERT INTO `migration` VALUES ('m150214_044831_init_user', '1427697735');

-- ----------------------------
-- Table structure for `nur_bed`
-- ----------------------------
DROP TABLE IF EXISTS `nur_bed`;
CREATE TABLE `nur_bed` (
  `bedno` varchar(10) NOT NULL DEFAULT '' COMMENT 'เตียง',
  `ward` varchar(10) DEFAULT NULL COMMENT 'หอผู้ป่วย',
  PRIMARY KEY (`bedno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_bed
-- ----------------------------

-- ----------------------------
-- Table structure for `nur_catogory`
-- ----------------------------
DROP TABLE IF EXISTS `nur_catogory`;
CREATE TABLE `nur_catogory` (
  `code` int(10) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) DEFAULT NULL COMMENT 'รายการ',
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_catogory
-- ----------------------------

-- ----------------------------
-- Table structure for `nur_dept`
-- ----------------------------
DROP TABLE IF EXISTS `nur_dept`;
CREATE TABLE `nur_dept` (
  `id` int(5) NOT NULL DEFAULT '0' COMMENT 'รหัส',
  `name` varchar(50) DEFAULT NULL COMMENT 'แผนก',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_dept
-- ----------------------------
INSERT INTO `nur_dept` VALUES ('1', 'พยาบาลOPD');
INSERT INTO `nur_dept` VALUES ('2', 'พยาบาลER');
INSERT INTO `nur_dept` VALUES ('3', 'พยาบาลLR');
INSERT INTO `nur_dept` VALUES ('4', 'พยาบาลWARD');
INSERT INTO `nur_dept` VALUES ('5', 'แพทย์');
INSERT INTO `nur_dept` VALUES ('6', 'ผู้ช่วยเหลือคนไข้');
INSERT INTO `nur_dept` VALUES ('7', 'คนงาน');
INSERT INTO `nur_dept` VALUES ('8', 'ห้องบัตร');
INSERT INTO `nur_dept` VALUES ('9', 'ซักฟอก');
INSERT INTO `nur_dept` VALUES ('10', 'หน่วยจ่ายกลาง');
INSERT INTO `nur_dept` VALUES ('11', 'โรงครัว');
INSERT INTO `nur_dept` VALUES ('12', 'ห้อง x-ray');
INSERT INTO `nur_dept` VALUES ('13', 'คนขับรถ');
INSERT INTO `nur_dept` VALUES ('14', 'ทำความสะอาด');
INSERT INTO `nur_dept` VALUES ('15', 'อื่นๆ');

-- ----------------------------
-- Table structure for `nur_er`
-- ----------------------------
DROP TABLE IF EXISTS `nur_er`;
CREATE TABLE `nur_er` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vstdate` date NOT NULL COMMENT 'วันที่',
  `vnonac` int(10) NOT NULL COMMENT 'ผู้ป่วย Non ac.illness',
  `vemergency` int(10) NOT NULL COMMENT 'ผู้ป่วย Emergency',
  `vresus` int(10) NOT NULL COMMENT 'ผู้ป่วย Resuscitation',
  `vhome` int(10) NOT NULL COMMENT 'รับยากลับบ้าน',
  `vvisit` int(10) NOT NULL COMMENT 'รับไว้รักษาต่อ',
  `vac` int(10) NOT NULL COMMENT 'ผู้ป่วย Ac.illness',
  `vurgent` int(10) NOT NULL COMMENT 'ผู้ป่วย Urgent',
  `vobservations` int(10) NOT NULL COMMENT 'รับไว้สังเกตอาการ',
  `vrefer` int(10) NOT NULL COMMENT 'ส่งต่อ',
  `vadmit` int(10) NOT NULL COMMENT 'รับย้าย Admit จาก Ward',
  `duty` varchar(50) NOT NULL COMMENT 'เวร',
  `staff` varchar(50) NOT NULL COMMENT 'ผู้บันทึก',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_er
-- ----------------------------

-- ----------------------------
-- Table structure for `nur_head`
-- ----------------------------
DROP TABLE IF EXISTS `nur_head`;
CREATE TABLE `nur_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vstdate` date DEFAULT NULL COMMENT 'วันที่',
  `opdnur1` varchar(10) DEFAULT NULL COMMENT 'พยาบาล1',
  `opdnur2` varchar(10) DEFAULT NULL COMMENT 'พยาบาล2',
  `opdnur3` varchar(10) DEFAULT NULL COMMENT 'พยาบาล3',
  `opdnur4` varchar(10) DEFAULT NULL COMMENT 'พยาบาล4',
  `opddoctor` varchar(10) DEFAULT NULL COMMENT 'แพทย์',
  `opdaides` varchar(10) DEFAULT NULL COMMENT 'ผู้ช่วยเหลือคนไข้',
  `opdworker` varchar(10) DEFAULT NULL COMMENT 'คนงาน',
  `ernur1` varchar(10) DEFAULT NULL COMMENT 'พยาบาล1',
  `ernur2` varchar(10) DEFAULT NULL COMMENT 'พยาบาล2',
  `ernur3` varchar(10) DEFAULT NULL COMMENT 'พยาบาล3',
  `ernur4` varchar(10) DEFAULT NULL COMMENT 'พยาบาล4',
  `erdoctor` varchar(10) DEFAULT NULL COMMENT 'แพทย์',
  `eraides` varchar(10) DEFAULT NULL COMMENT 'ผู้ช่วยเหลือคนไข้',
  `erworker` varchar(10) DEFAULT NULL COMMENT 'คนงาน',
  `lrnur1` varchar(10) DEFAULT NULL COMMENT 'พยาบาล1',
  `lrnur2` varchar(10) DEFAULT NULL COMMENT 'พยาบาล2',
  `lrnur3` varchar(10) DEFAULT NULL COMMENT 'พยาบาล3',
  `lrnur4` varchar(10) DEFAULT NULL COMMENT 'พยาบาล4',
  `lrdoctor` varchar(10) DEFAULT NULL COMMENT 'แพทย์',
  `lraides` varchar(10) DEFAULT NULL COMMENT 'ผู้ช่วยเหลือคนไข้',
  `lrworker` varchar(10) DEFAULT NULL COMMENT 'คนงาน',
  `wardnur1` varchar(10) DEFAULT NULL COMMENT 'พยาบาล1',
  `wardnur2` varchar(10) DEFAULT NULL COMMENT 'พยาบาล2',
  `wardnur3` varchar(10) DEFAULT NULL COMMENT 'พยาบาล3',
  `wardnur4` varchar(10) DEFAULT NULL COMMENT 'พยาบาล4',
  `warddoctor` varchar(10) DEFAULT NULL COMMENT 'แพทย์',
  `wardaides` varchar(10) DEFAULT NULL COMMENT 'ผู้ช่วยเหลือคนไข้',
  `wardworker` varchar(10) DEFAULT NULL COMMENT 'คนงาน',
  `cardroom` varchar(10) DEFAULT NULL,
  `launder` varchar(10) DEFAULT NULL,
  `centersupport` varchar(0) DEFAULT NULL,
  `kitchen` varchar(0) DEFAULT NULL,
  `xrayroom` varchar(0) DEFAULT NULL,
  `carman` varchar(0) DEFAULT NULL,
  `duty` varchar(10) DEFAULT NULL COMMENT 'เวร',
  `staff` varchar(10) DEFAULT NULL COMMENT 'ผู้บันทึก',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_head
-- ----------------------------
INSERT INTO `nur_head` VALUES ('1', '2015-04-10', null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('2', '2015-04-10', null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('3', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('4', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('5', '2015-04-01', null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('6', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('7', null, null, null, null, null, null, null, null, 'dd', 'dd', 'dd', '', '', 'ddd', 'dd', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '1', 'neo');
INSERT INTO `nur_head` VALUES ('8', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '2', 'neo');
INSERT INTO `nur_head` VALUES ('9', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('10', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('11', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('12', null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('13', null, null, null, null, null, null, null, null, 'aa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('14', null, '004', null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('15', null, '004', null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', '', '', '', '', '', '', '', 'neo');
INSERT INTO `nur_head` VALUES ('16', '2015-04-01', '001', '', '', '004', '003', '', '', '002', '002', '', '', '', '', '', '005', '', '', '', '', '', '', '005', '', '005', '', '003', '', '', '', '', '', '', '', '', '2', 'neo');

-- ----------------------------
-- Table structure for `nur_ipt`
-- ----------------------------
DROP TABLE IF EXISTS `nur_ipt`;
CREATE TABLE `nur_ipt` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vstdate` date DEFAULT NULL COMMENT 'วันที่',
  `ward` varchar(5) DEFAULT NULL COMMENT 'หอผู้ป่วย',
  `bed` varchar(10) DEFAULT NULL COMMENT 'เตียง',
  `category` varchar(5) DEFAULT NULL COMMENT 'ประเภท',
  `status` varchar(5) DEFAULT NULL COMMENT 'สถานะ',
  `duty` enum('ดึก','เช้า','บ่าย') DEFAULT NULL,
  `staff` varchar(10) DEFAULT NULL COMMENT 'ผู้บันทึก',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_ipt
-- ----------------------------
INSERT INTO `nur_ipt` VALUES ('1', '2015-04-01', '1', '1', '1', '1', 'เช้า', 'dd');

-- ----------------------------
-- Table structure for `nur_opd`
-- ----------------------------
DROP TABLE IF EXISTS `nur_opd`;
CREATE TABLE `nur_opd` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vstdate` date DEFAULT NULL,
  `vopd` int(5) DEFAULT NULL,
  `ver` int(5) DEFAULT NULL,
  `vtreatment` int(5) DEFAULT NULL,
  `vhome` int(5) DEFAULT NULL,
  `vrefer` int(5) DEFAULT NULL,
  `duty` varchar(5) DEFAULT NULL,
  `staff` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_opd
-- ----------------------------
INSERT INTO `nur_opd` VALUES ('2', '2015-04-02', '33', '20', '12', '5', '2', '2', 'neo');

-- ----------------------------
-- Table structure for `nur_status`
-- ----------------------------
DROP TABLE IF EXISTS `nur_status`;
CREATE TABLE `nur_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` int(10) DEFAULT NULL COMMENT 'รหัส',
  `name` varchar(100) DEFAULT NULL COMMENT 'ชื่อสถานะ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_status
-- ----------------------------
INSERT INTO `nur_status` VALUES ('1', '1', 'รับใหม่');
INSERT INTO `nur_status` VALUES ('2', '2', 'จำหน่าย');
INSERT INTO `nur_status` VALUES ('3', '3', 'เสียชีวิต');
INSERT INTO `nur_status` VALUES ('4', '4', 'ส่งต่อ');
INSERT INTO `nur_status` VALUES ('5', '5', 'รับย้ายจากห้องคลอด');

-- ----------------------------
-- Table structure for `nur_user_rec`
-- ----------------------------
DROP TABLE IF EXISTS `nur_user_rec`;
CREATE TABLE `nur_user_rec` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) DEFAULT NULL COMMENT 'รหัส',
  `fname` varchar(50) DEFAULT NULL COMMENT 'ชื่อ',
  `lname` varchar(50) DEFAULT NULL COMMENT 'นามสกุล',
  `dept` varchar(10) DEFAULT NULL COMMENT 'แผนก',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_user_rec
-- ----------------------------
INSERT INTO `nur_user_rec` VALUES ('1', '001', 'aaa', 'a3', '1');
INSERT INTO `nur_user_rec` VALUES ('2', '002', 'สุจินต์', 'สุกกล้า', '2');
INSERT INTO `nur_user_rec` VALUES ('3', '003', 'test doc', null, '5');
INSERT INTO `nur_user_rec` VALUES ('4', '004', 'wwr3r', 'fefe', '1');
INSERT INTO `nur_user_rec` VALUES ('5', '005', 'nur3', '3333', '3');

-- ----------------------------
-- Table structure for `nur_ward`
-- ----------------------------
DROP TABLE IF EXISTS `nur_ward`;
CREATE TABLE `nur_ward` (
  `ward` varchar(5) NOT NULL DEFAULT '' COMMENT 'รหัส',
  `name` varchar(100) DEFAULT NULL COMMENT 'ชื่อหอผู้ป่วย',
  PRIMARY KEY (`ward`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nur_ward
-- ----------------------------

-- ----------------------------
-- Table structure for `profile`
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_user_id` (`user_id`),
  CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', '1', '2015-03-30 08:42:15', null, 'the one');

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `can_admin` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'Admin', '2015-03-30 08:42:15', null, '1');
INSERT INTO `role` VALUES ('2', 'User', '2015-03-30 08:42:15', null, '0');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL,
  `create_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `ban_time` timestamp NULL DEFAULT NULL,
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`email`),
  UNIQUE KEY `user_username` (`username`),
  KEY `user_role_id` (`role_id`),
  CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '1', '1', 'neo@neo.com', null, 'neo', '$2y$13$dyVw4WkZGkABf2UrGWrhHO4ZmVBv.K4puhOL59Y9jQhIdj63TlV.O', 'hhOk4MyiynKe7n4aLm3ht3qHVBAoAuKj', 'u7hIqzqX_R4kluHab-7WWfUzFRuhAdCe', '::1', '2015-04-01 14:43:44', null, '2015-03-30 08:42:15', null, null, null);

-- ----------------------------
-- Table structure for `user_auth`
-- ----------------------------
DROP TABLE IF EXISTS `user_auth`;
CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_auth_provider_id` (`provider_id`),
  KEY `user_auth_user_id` (`user_id`),
  CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_auth
-- ----------------------------

-- ----------------------------
-- Table structure for `user_key`
-- ----------------------------
DROP TABLE IF EXISTS `user_key`;
CREATE TABLE `user_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `consume_time` timestamp NULL DEFAULT NULL,
  `expire_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_key_key` (`key`),
  KEY `user_key_user_id` (`user_id`),
  CONSTRAINT `user_key_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_key
-- ----------------------------
