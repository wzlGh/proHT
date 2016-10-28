/*
Navicat MySQL Data Transfer

Source Server         : wzl
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : prog

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2016-07-18 10:23:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yh`
-- ----------------------------
DROP TABLE IF EXISTS `yh`;
CREATE TABLE `yh` (
  `yhid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `yhlx` varchar(20) DEFAULT NULL,
  `tel` int(20) DEFAULT NULL,
  PRIMARY KEY (`yhid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of yh
-- ----------------------------
INSERT INTO `yh` VALUES ('1', 'admin', '1234', 'hy', '1234567894');
INSERT INTO `yh` VALUES ('2', 'zhang', '456', 'ptyh', '789456123');
INSERT INTO `yh` VALUES ('3', 'wang', '789', 'hy', '963852741');
