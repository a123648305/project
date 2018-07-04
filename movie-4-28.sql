/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : movie

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-29 00:17:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dtable
-- ----------------------------
DROP TABLE IF EXISTS `dtable`;
CREATE TABLE `dtable` (
  `did` int(8) NOT NULL,
  `mname` char(10) NOT NULL,
  `dtime` time NOT NULL,
  `dseat` char(50) NOT NULL,
  `dprice` int(2) NOT NULL,
  `db` char(15) NOT NULL,
  `ddate` date NOT NULL,
  `zt` char(5) NOT NULL,
  PRIMARY KEY (`did`),
  KEY `user` (`db`),
  KEY `movie` (`mname`),
  CONSTRAINT `movie` FOREIGN KEY (`mname`) REFERENCES `movie` (`mname`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user` FOREIGN KEY (`db`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dtable
-- ----------------------------
INSERT INTO `dtable` VALUES ('29799', '奇门遁甲', '23:55:00', '5_7,5_8,6_8', '84', 'test', '2018-04-28', '已支付');
INSERT INTO `dtable` VALUES ('47837', '奇门遁甲', '22:02:00', '6_8,6_7', '56', 'test', '2018-04-28', '已支付');
INSERT INTO `dtable` VALUES ('89027', '奇门遁甲', '22:02:00', '2_10,1_10', '56', 'test', '2018-04-28', '已支付');
INSERT INTO `dtable` VALUES ('97170', '奇门遁甲', '22:02:00', '7_7,7_8', '56', 'test', '2018-04-28', '已支付');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `eid` int(5) NOT NULL,
  `ename` char(10) NOT NULL,
  `esex` char(2) NOT NULL,
  `ephone` char(11) NOT NULL,
  `eaddress` char(30) NOT NULL,
  `ezhiwei` char(5) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('2', '王小帅', '女', '15626853400', '藏族自治州', '一般管理员');
INSERT INTO `employee` VALUES ('26', '小王', '男', '13068226019', '多萨达', '一般管理员');
INSERT INTO `employee` VALUES ('42', '吴王', '女', '15626854300', '北京中山路18号', '超级管理员');
INSERT INTO `employee` VALUES ('72', '王小帅000', '男', '15623853400', '现在才珍惜啊的', '普通员工');
INSERT INTO `employee` VALUES ('999', '王小6', '女', '15656453400', '中国钓鱼岛', '普通员工');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `meid` int(11) NOT NULL,
  `mchar` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `title` varchar(15) DEFAULT NULL,
  `word` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`meid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '2', 'test', '3', '4', '5', null);
INSERT INTO `message` VALUES ('4', '遇到问题', 'test', 'admin.@126.com', '', '', '0000-00-00 00:00:00');
INSERT INTO `message` VALUES ('48', '遇到问题', 'test', 'admin.@126.com', 'f', '', '0000-00-00 00:00:00');
INSERT INTO `message` VALUES ('52', '遇到问题', 'test', 'a123648305.@126.com', 'wxs', 'youdzhie adaskdas dnsaklnksahfisoadsladjsla', '2018-02-21 16:18:04');
INSERT INTO `message` VALUES ('68', '遇到问题', 'test', 'qq123.@126.com', 'z2apdaop', 'sdsjdosadopakda', '2018-02-21 21:26:29');
INSERT INTO `message` VALUES ('69', '遇到问题', '', 'admin.@126.com', '', '', '2018-02-21 16:29:44');
INSERT INTO `message` VALUES ('73', '遇到问题', 'test', 'admin.@126.com', '', '', '0000-00-00 00:00:00');
INSERT INTO `message` VALUES ('80', '提供意见', 'test', 'admin.@126.com', 'zzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2018-02-21 16:24:57');
INSERT INTO `message` VALUES ('91', '遇到问题', 'test', 'admin.@126.com', '', '', '0000-00-00 00:00:00');
INSERT INTO `message` VALUES ('92', '提供意见', '', 'a123648305.@qq.com', 'yyyyy', 'dsdad', '2018-02-21 16:34:50');
INSERT INTO `message` VALUES ('98', '遇到问题', 'test', 'admin.@126.com', '', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for movie
-- ----------------------------
DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `mid` int(5) NOT NULL,
  `mname` char(15) NOT NULL COMMENT '电影名',
  `mdirector` char(10) NOT NULL COMMENT '导演',
  `mperformer` char(30) NOT NULL COMMENT '主演',
  `mstudio` char(20) NOT NULL COMMENT '制片厂',
  `mpalytime` date NOT NULL COMMENT '上映时间',
  `mlong` int(3) NOT NULL COMMENT '片长',
  `mchar` char(5) NOT NULL COMMENT '电影类型',
  `mpicture` char(30) DEFAULT NULL,
  `spicture` char(30) DEFAULT NULL,
  `mprice` int(3) NOT NULL,
  `mlanguage` char(5) NOT NULL,
  PRIMARY KEY (`mid`,`mname`),
  KEY `mname` (`mname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movie
-- ----------------------------
INSERT INTO `movie` VALUES ('1', '奇门遁甲', '袁和平', '大鹏 /倪妮 /李治廷 /周冬雨 /伍佰 /柳岩', '中国', '2017-12-14', '113', '动作/奇幻', 'images/7.jpg', 'images/end-game.jpg', '28', '普通话');
INSERT INTO `movie` VALUES ('1', '神兵小将', '王', '王小帅', '中国', '2018-04-29', '120', '神话', 'images/xx.jpg', 'images/xx.jpg', '30', '普通话');
INSERT INTO `movie` VALUES ('2', '奇门遁甲', '袁和平', '大鹏 /倪妮 /李治廷 /周冬雨 /伍佰 /柳岩', '中国', '2017-12-14', '113', '动作/奇幻', 'images/7.jpg', 'images/end-game.jpg', '28', '普通话');
INSERT INTO `movie` VALUES ('3', '奇门遁甲', '袁和平', '大鹏 /倪妮 /李治廷 /周冬雨 /伍佰 /柳岩', '中国', '2017-12-14', '113', '动作/奇幻', 'images/7.jpg', 'images/end-game.jpg', '28', '普通话');
INSERT INTO `movie` VALUES ('4', '烟花', '袁和平', '大鹏 /倪妮 /李治廷 /周冬雨 /伍佰 /柳岩', '中国', '2017-12-14', '113', '动作/奇幻', 'images/7.jpg', 'images/end-game.jpg', '28', '普通话');

-- ----------------------------
-- Table structure for playlist
-- ----------------------------
DROP TABLE IF EXISTS `playlist`;
CREATE TABLE `playlist` (
  `spid` int(5) NOT NULL COMMENT '放映号',
  `pid` int(3) NOT NULL,
  `pdata` date NOT NULL,
  `pmname` char(15) NOT NULL,
  `ptime` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`pid`,`pdata`,`pmname`,`ptime`),
  KEY `m` (`pmname`),
  CONSTRAINT `m` FOREIGN KEY (`pmname`) REFERENCES `movie` (`mname`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of playlist
-- ----------------------------
INSERT INTO `playlist` VALUES ('623', '1', '2018-04-28', '奇门遁甲', '11:01:00');
INSERT INTO `playlist` VALUES ('540', '1', '2018-04-28', '奇门遁甲', '22:02:00');
INSERT INTO `playlist` VALUES ('962', '1', '2018-04-28', '烟花', '02:01:00');
INSERT INTO `playlist` VALUES ('540', '2', '2018-04-28', '奇门遁甲', '22:02:00');
INSERT INTO `playlist` VALUES ('521', '3', '2018-04-28', '奇门遁甲', '23:22:00');
INSERT INTO `playlist` VALUES ('522', '4', '2018-04-28', '奇门遁甲', '23:55:00');

-- ----------------------------
-- Table structure for seat
-- ----------------------------
DROP TABLE IF EXISTS `seat`;
CREATE TABLE `seat` (
  `sid` int(2) NOT NULL,
  `sprice` int(3) DEFAULT NULL,
  `pid` int(2) DEFAULT NULL,
  `orsell` char(2) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seat
-- ----------------------------

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `mid` int(11) NOT NULL,
  `path` char(40) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('1', 'images\\4.jpg');
INSERT INTO `test` VALUES ('2', 'images\\3.jpg');

-- ----------------------------
-- Table structure for ticket
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `tid` int(5) NOT NULL,
  `sid` int(2) NOT NULL,
  `mname` char(15) NOT NULL,
  `time` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `username` char(15) NOT NULL,
  `pid` int(2) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `sid` (`sid`),
  KEY `mname` (`mname`),
  KEY `ticket_ibfk_3` (`username`),
  KEY `pid` (`pid`),
  CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `seat` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`mname`) REFERENCES `movie` (`mname`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(5) NOT NULL,
  `username` char(15) NOT NULL COMMENT '用户名',
  `userpad` char(15) NOT NULL COMMENT '用户密码',
  `userphone` char(11) NOT NULL,
  `other` int(2) NOT NULL COMMENT '备注',
  PRIMARY KEY (`userid`,`username`),
  KEY `username` (`username`),
  KEY `other` (`other`),
  KEY `userid` (`userid`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`other`) REFERENCES `vip` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'test', 'test', '15626853400', '2');
INSERT INTO `user` VALUES ('3828', 'a123648305', '123456', '15626853400', '1');
INSERT INTO `user` VALUES ('4246', 'wxs6b6', '123456', '15623457878', '1');
INSERT INTO `user` VALUES ('5884', 'q12345', '123456', '15622940902', '1');

-- ----------------------------
-- Table structure for vip
-- ----------------------------
DROP TABLE IF EXISTS `vip`;
CREATE TABLE `vip` (
  `vid` int(2) NOT NULL,
  `vname` char(5) NOT NULL,
  `vcount` float(2,2) NOT NULL,
  PRIMARY KEY (`vid`),
  KEY `vname` (`vname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vip
-- ----------------------------
INSERT INTO `vip` VALUES ('0', 'super', '0.00');
INSERT INTO `vip` VALUES ('1', 'vip1', '0.98');
INSERT INTO `vip` VALUES ('2', 'vip2', '0.95');
INSERT INTO `vip` VALUES ('3', 'vip3', '0.90');

-- ----------------------------
-- Table structure for yingping
-- ----------------------------
DROP TABLE IF EXISTS `yingping`;
CREATE TABLE `yingping` (
  `yid` int(5) NOT NULL,
  `username` char(15) NOT NULL,
  `mname` char(15) NOT NULL,
  `yy` char(50) NOT NULL,
  `dt` char(5) NOT NULL,
  PRIMARY KEY (`yid`),
  KEY `x` (`mname`),
  KEY `q` (`username`),
  CONSTRAINT `q` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `x` FOREIGN KEY (`mname`) REFERENCES `movie` (`mname`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yingping
-- ----------------------------
