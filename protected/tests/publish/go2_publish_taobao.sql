-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 11 月 25 日 13:58
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
  `target_taobao_attrs` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `target`
--

INSERT INTO `target` (`target_id`, `target_taobao_id`, `target_taobao_attrs`, `target_taobao_title1`, `target_taobao_title2`, `target_taobao_title3`, `target_taobao_sku`, `target_go2_sku`, `target_title_search`, `target_title_used`, `source_taobao_id1`, `source_taobao_id2`, `source_taobao_id3`, `source_taobao_keyword1`, `source_taobao_keyword2`, `source_taobao_keyword3`) VALUES
(9, '42510262695', '风格:学院|woogle!@#$%^&*split|帮面材质:西施绒|woogle!@#$%^&*split|皮质特征:磨砂|woogle!@#$%^&*split|鞋底材质:橡胶|woogle!@#$%^&*split|鞋头款式:圆头|woogle!@#$%^&*split|跟高:低跟(1-3cm)|woogle!@#$%^&*split|鞋跟款式:坡跟|woogle!@#$%^&*split|闭合方式:套筒|woogle!@#$%^&*split|流行元素:坡跟|woogle!@#$%^&*split|', '产品标题1等待修改', '产品标题2等待修改', '产品标题3等待修改', '春兰鞋业-2237791&C-825', '春兰鞋业-2237791&C-825', 0, 0, '42510262695', '42510262695', '42510262695', '淘宝搜索关键词1等待修复', '淘宝搜索关键词1等待修复', '淘宝搜索关键词1等待修复'),
(10, '42510994432', '风格:学院|woogle!@#$%^&*split|帮面材质:PU|woogle!@#$%^&*split|皮质特征:磨砂|woogle!@#$%^&*split|鞋底材质:橡胶|woogle!@#$%^&*split|鞋头款式:圆头|woogle!@#$%^&*split|跟高:低跟(1-3cm)|woogle!@#$%^&*split|鞋跟款式:平跟|woogle!@#$%^&*split|闭合方式:套筒|woogle!@#$%^&*split|流行元素:拼色|woogle!@#$%^&*split|图', '产品标题1等待修改', '产品标题2等待修改', '产品标题3等待修改', '春兰鞋业-2237791&168-1', '春兰鞋业&168-1', 0, 0, '42510994432', '42510994432', '42510994432', '淘宝搜索关键词1等待修改', '淘宝搜索关键词1等待修改', '淘宝搜索关键词1等待修改'),
(11, '42491415069', '风格:休闲|woogle!@#$%^&*split|帮面材质:绒面|woogle!@#$%^&*split|皮质特征:磨砂|woogle!@#$%^&*split|鞋底材质:牛筋|woogle!@#$%^&*split|鞋头款式:圆头|woogle!@#$%^&*split|跟高:平跟(小于等于1cm)|woogle!@#$%^&*split|鞋跟款式:平跟|woogle!@#$%^&*split|闭合方式:套筒|woogle!@#$%^&*split|流行元素:皮带扣|woogle!@#$%^&*spli', '产品标题1等待修改', '产品标题2等待修改', '产品标题3等待修改', '春兰鞋业-2237791&A-7', '春兰鞋业&A-7', 0, 0, '42491415069', '42491415069', '42491415069', '淘宝搜索关键词1等待修改', '淘宝搜索关键词1等待修改', '淘宝搜索关键词1等待修改'),
(12, '42558188757', '风格:甜美|woogle!@#$%^&*split|帮面材质:混合材质|woogle!@#$%^&*split|皮质特征:磨砂|woogle!@#$%^&*split|鞋底材质:牛筋|woogle!@#$%^&*split|鞋头款式:圆头|woogle!@#$%^&*split|跟高:平跟(小于等于1cm)|woogle!@#$%^&*split|鞋跟款式:平跟|woogle!@#$%^&*split|闭合方式:套筒|woogle!@#$%^&*split|流行元素:蝴蝶结|woogle!@#$%^&*sp', '产品标题1等待修改', '产品标题2等待修改', '产品标题3等待修改', '春兰鞋业-2237791&B28-1', '春兰鞋业&B28-1', 0, 0, '42558188757', '42558188757', '42558188757', '淘宝搜索关键词1等待修改', '淘宝搜索关键词1等待修改', '淘宝搜索关键词1等待修改');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
