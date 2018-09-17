/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50709
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 50709
 File Encoding         : 65001

 Date: 17/09/2018 17:29:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for k_account
-- ----------------------------
DROP TABLE IF EXISTS `k_account`;
CREATE TABLE `k_account`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of k_account
-- ----------------------------
INSERT INTO `k_account` VALUES (1, 'yankuan', '123456');

-- ----------------------------
-- Table structure for k_article
-- ----------------------------
DROP TABLE IF EXISTS `k_article`;
CREATE TABLE `k_article`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `add_date` datetime(0) DEFAULT NULL,
  `author` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `abstract` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `classify` smallint(3) UNSIGNED DEFAULT NULL,
  `newsStatus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of k_article
-- ----------------------------
INSERT INTO `k_article` VALUES (3, 'agfre', 'gewgewg', '2018-09-14 00:00:00', 'admin', 'gewgew', 1, 0);

-- ----------------------------
-- Table structure for k_cover
-- ----------------------------
DROP TABLE IF EXISTS `k_cover`;
CREATE TABLE `k_cover`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cover` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for k_getdata
-- ----------------------------
DROP TABLE IF EXISTS `k_getdata`;
CREATE TABLE `k_getdata`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `data_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `response_data` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of k_getdata
-- ----------------------------
INSERT INTO `k_getdata` VALUES (14, '{\"m\":\"1\"}', '/kite/api.php?m=1', NULL);
INSERT INTO `k_getdata` VALUES (15, '{\"newsName\":\"423\",\"m\":\"10\",\"abstract\":\"43242\",\"content\":\"42432\",\"classify\":\"1\",\"newsStatus\":\"0\",\"newsTime\":\"2018-09-13 15:46:50\"}', '/api.php', NULL);
INSERT INTO `k_getdata` VALUES (16, '{\"newsName\":\"qwreqw\",\"m\":\"10\",\"abstract\":\"rqwr\",\"content\":\"qwrqwr\",\"classify\":\"1\",\"newsStatus\":\"0\",\"newsTime\":\"2018-09-13 15:47:47\"}', '/api.php', NULL);
INSERT INTO `k_getdata` VALUES (17, '{\"newsName\":\"1\",\"m\":\"10\",\"abstract\":\"1111111111111111111\",\"content\":\"1111111111111111\",\"classify\":\"1\",\"newsStatus\":\"0\",\"newsTime\":\"2018-09-13 15:49:12\"}', '/api.php', NULL);
INSERT INTO `k_getdata` VALUES (18, '{\"newsName\":\"2543\",\"m\":\"10\",\"abstract\":\"4ytdhjrt\",\"content\":\"etjyty\",\"classify\":\"1\",\"newsStatus\":\"0\",\"newsTime\":\"2018-09-13 15:52:28\"}', '/api.php', NULL);
INSERT INTO `k_getdata` VALUES (19, '{\"newsName\":\"agfre\",\"m\":\"10\",\"abstract\":\"gewgew\",\"content\":\"gewgewg\",\"classify\":\"1\",\"newsStatus\":\"0\",\"newsTime\":\"2018-09-14 00:00:00\"}', '/api.php', NULL);

-- ----------------------------
-- Table structure for k_headpic
-- ----------------------------
DROP TABLE IF EXISTS `k_headpic`;
CREATE TABLE `k_headpic`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `headpic` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of k_headpic
-- ----------------------------
INSERT INTO `k_headpic` VALUES (1, '/uploads/headpic/dcdba63a428509fe5ab64cec419ff167.jpeg');
INSERT INTO `k_headpic` VALUES (2, '/uploads/headpic/bf90d4bc4d46f12ebed28225765c14e9.jpg');
INSERT INTO `k_headpic` VALUES (3, '/uploads/headpic/0a29f49809ea6791c31600233d605838.jpeg');
INSERT INTO `k_headpic` VALUES (4, '/uploads/headpic/7081784f3bcedb900e0d8fceaf772c4a.jpeg');

-- ----------------------------
-- Table structure for k_netname
-- ----------------------------
DROP TABLE IF EXISTS `k_netname`;
CREATE TABLE `k_netname`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(72) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of k_netname
-- ----------------------------
INSERT INTO `k_netname` VALUES (1, '开创未来');
INSERT INTO `k_netname` VALUES (2, '昨夜星辰');
INSERT INTO `k_netname` VALUES (3, '逆鳞');
INSERT INTO `k_netname` VALUES (5, '灵犀');
INSERT INTO `k_netname` VALUES (6, '对月流珠');
INSERT INTO `k_netname` VALUES (7, '流失那╮曲折的忧伤〆');
INSERT INTO `k_netname` VALUES (8, '我非柠檬为何心酸');
INSERT INTO `k_netname` VALUES (9, '夜斓听风');
INSERT INTO `k_netname` VALUES (10, '执笔画红＾装');
INSERT INTO `k_netname` VALUES (11, '︶ㄣ夏末ㄟ');
INSERT INTO `k_netname` VALUES (12, '—━☆沉默づ');
INSERT INTO `k_netname` VALUES (13, '月光西沉');
INSERT INTO `k_netname` VALUES (14, '迎风奔雨');

-- ----------------------------
-- Table structure for k_sign
-- ----------------------------
DROP TABLE IF EXISTS `k_sign`;
CREATE TABLE `k_sign`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of k_sign
-- ----------------------------
INSERT INTO `k_sign` VALUES (1, '天可补，海可填，南山可移。日月既往，不可复追。');
INSERT INTO `k_sign` VALUES (2, '我的盖世英雄一定是喝了孟婆汤了');
INSERT INTO `k_sign` VALUES (3, '我是一个经常笑的人，却不是一个经常开心的人');
INSERT INTO `k_sign` VALUES (4, '不管发生什么，都请安静且愉快的接受人生');
INSERT INTO `k_sign` VALUES (5, ' 如果当初勇敢的在一起，会不会不同结局');

SET FOREIGN_KEY_CHECKS = 1;
