-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 11 月 30 日 09:51
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `go2_publish_taobao`
--

-- --------------------------------------------------------

--
-- 表的结构 `target`
--

CREATE TABLE IF NOT EXISTS `target` (
  `target_id` int(11) NOT NULL AUTO_INCREMENT,
  `target_taobao_id` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xuetongneilicaizhi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xuetongcaizhi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shangshinianfenjijie` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fengge` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bangmiancaizhi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xuemianneilicaizhi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pizhitezhi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xiedicaizhi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xuekuanpingming` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tonggao` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xietongkuanshi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genggao` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xiegengkuanshi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bihefangshi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `liuxingyuansu` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zhizhuogongyi` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tuan` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shehejijie` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_taobao_title1` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_taobao_title2` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_taobao_title3` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_taobao_sku` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_go2_sku` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_title_search` int(1) NOT NULL,
  `target_title_used` int(1) NOT NULL,
  `source_taobao_id1` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source_taobao_id2` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source_taobao_id3` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source_taobao_keyword1` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source_taobao_keyword2` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source_taobao_keyword3` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`target_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `target`
--

INSERT INTO `target` (`target_id`, `target_taobao_id`, `xuetongneilicaizhi`, `xuetongcaizhi`, `shangshinianfenjijie`, `fengge`, `bangmiancaizhi`, `xuemianneilicaizhi`, `pizhitezhi`, `xiedicaizhi`, `xuekuanpingming`, `tonggao`, `xietongkuanshi`, `genggao`, `xiegengkuanshi`, `bihefangshi`, `liuxingyuansu`, `zhizhuogongyi`, `tuan`, `shehejijie`, `target_taobao_title1`, `target_taobao_title2`, `target_taobao_title3`, `target_taobao_sku`, `target_go2_sku`, `target_title_search`, `target_title_used`, `source_taobao_id1`, `source_taobao_id2`, `source_taobao_id3`, `source_taobao_keyword1`, `source_taobao_keyword2`, `source_taobao_keyword3`) VALUES
(1, '42653239830', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1298', '红福来鞋业&1298', 0, 0, '42653239830', '42653239830', '42653239830', '等待修改', '等待修改', '等待修改'),
(2, '42653467593', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1315', '红福来鞋业&1315', 0, 0, '42653467593', '42653467593', '42653467593', '等待修改', '等待修改', '等待修改'),
(3, '42702561606', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1157', '红福来鞋业&1157', 0, 0, '42702561606', '42702561606', '42702561606', '等待修改', '等待修改', '等待修改'),
(4, '42672862831', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1136', '红福来鞋业&1136', 0, 0, '42672862831', '42672862831', '42672862831', '等待修改', '等待修改', '等待修改'),
(5, '42653395839', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1225', '红福来鞋业&1225', 0, 0, '42653395839', '42653395839', '42653395839', '等待修改', '等待修改', '等待修改'),
(6, '42653283904', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1223', '红福来鞋业&1223', 0, 0, '42653283904', '42653283904', '42653283904', '等待修改', '等待修改', '等待修改'),
(7, '42653811196', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&3115', '红福来鞋业&3115', 0, 0, '42653811196', '42653811196', '42653811196', '等待修改', '等待修改', '等待修改'),
(8, '42653603655', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1167', '红福来鞋业&1167', 0, 0, '42653603655', '42653603655', '42653603655', '等待修改', '等待修改', '等待修改'),
(9, '42673106552', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1156', '红福来鞋业&1156', 0, 0, '42673106552', '42673106552', '42673106552', '等待修改', '等待修改', '等待修改'),
(10, '42702829386', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&2277', '红福来鞋业&2277', 0, 0, '42702829386', '42702829386', '42702829386', '等待修改', '等待修改', '等待修改'),
(11, '42653935155', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&7113', '红福来鞋业&7113', 0, 0, '42653935155', '42653935155', '42653935155', '等待修改', '等待修改', '等待修改'),
(12, '42653923276', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&9322', '红福来鞋业&9322', 0, 0, '42653923276', '42653923276', '42653923276', '等待修改', '等待修改', '等待修改'),
(13, '42653835500', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&2281', '红福来鞋业&2281', 0, 0, '42653835500', '42653835500', '42653835500', '等待修改', '等待修改', '等待修改'),
(14, '42653783695', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&9325', '红福来鞋业&9325', 0, 0, '42653783695', '42653783695', '42653783695', '等待修改', '等待修改', '等待修改'),
(15, '42702989447', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&9112', '红福来鞋业&9112', 0, 0, '42702989447', '42702989447', '42702989447', '等待修改', '等待修改', '等待修改'),
(16, '42654019344', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&2276', '红福来鞋业&2276', 0, 0, '42654019344', '42654019344', '42654019344', '等待修改', '等待修改', '等待修改'),
(17, '42654175830', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&9113', '红福来鞋业&9113', 0, 0, '42654175830', '42654175830', '42654175830', '等待修改', '等待修改', '等待修改'),
(18, '42654359545', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&9323', '红福来鞋业&9323', 0, 0, '42654359545', '42654359545', '42654359545', '等待修改', '等待修改', '等待修改'),
(19, '42703433397', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&2275', '红福来鞋业&2275', 0, 0, '42703433397', '42703433397', '42703433397', '等待修改', '等待修改', '等待修改'),
(20, '42654243843', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&2273', '红福来鞋业&2273', 0, 0, '42654243843', '42654243843', '42654243843', '等待修改', '等待修改', '等待修改'),
(21, '42654595684', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1152', '红福来鞋业&1152', 0, 0, '42654595684', '42654595684', '42654595684', '等待修改', '等待修改', '等待修改'),
(22, '42720120604', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1314', '红福来鞋业&1314', 0, 0, '42720120604', '42720120604', '42720120604', '等待修改', '等待修改', '等待修改'),
(23, '42703433940', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1169', '红福来鞋业&1169', 0, 0, '42703433940', '42703433940', '42703433940', '等待修改', '等待修改', '等待修改'),
(24, '42703597724', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&3344', '红福来鞋业&3344', 0, 0, '42703597724', '42703597724', '42703597724', '等待修改', '等待修改', '等待修改'),
(25, '42654783559', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1150', '红福来鞋业&1150', 0, 0, '42654783559', '42654783559', '42654783559', '等待修改', '等待修改', '等待修改'),
(26, '42654919795', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&819', '红福来鞋业&819', 0, 0, '42654919795', '42654919795', '42654919795', '等待修改', '等待修改', '等待修改'),
(27, '42703945549', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1518', '红福来鞋业&1518', 0, 0, '42703945549', '42703945549', '42703945549', '等待修改', '等待修改', '等待修改'),
(28, '42704045457', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&2112', '红福来鞋业&2112', 0, 0, '42704045457', '42704045457', '42704045457', '等待修改', '等待修改', '等待修改'),
(29, '42703893740', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&5608', '红福来鞋业&5608', 0, 0, '42703893740', '42703893740', '42703893740', '等待修改', '等待修改', '等待修改'),
(30, '42674362797', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&3112', '红福来鞋业&3112', 0, 0, '42674362797', '42674362797', '42674362797', '等待修改', '等待修改', '等待修改'),
(31, '42655175490', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&0-198', '红福来鞋业&0-198', 0, 0, '42655175490', '42655175490', '42655175490', '等待修改', '等待修改', '等待修改'),
(32, '42704333056', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&0-116', '红福来鞋业&0-116', 0, 0, '42704333056', '42704333056', '42704333056', '等待修改', '等待修改', '等待修改'),
(33, '42674778286', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&0-117', '红福来鞋业&0-117', 0, 0, '42674778286', '42674778286', '42674778286', '等待修改', '等待修改', '等待修改'),
(34, '42720840213', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&0-108', '红福来鞋业&0-108', 0, 0, '42720840213', '42720840213', '42720840213', '等待修改', '等待修改', '等待修改'),
(35, '42703969884', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&2115', '红福来鞋业&2115', 0, 0, '42703969884', '42703969884', '42703969884', '等待修改', '等待修改', '等待修改'),
(36, '42704437012', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&103', '红福来鞋业&103', 0, 0, '42704437012', '42704437012', '42704437012', '等待修改', '等待修改', '等待修改'),
(37, '42675074039', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '等待修改', '红福来鞋业-3037791&1217', '红福来鞋业&1217', 0, 0, '42675074039', '42675074039', '42675074039', '等待修改', '等待修改', '等待修改');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
