-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 12 月 13 日 11:39
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
CREATE DATABASE `go2_publish_taobao` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `go2_publish_taobao`;

-- --------------------------------------------------------

--
-- 表的结构 `factory`
--

CREATE TABLE IF NOT EXISTS `factory` (
  `factory_id` int(11) NOT NULL AUTO_INCREMENT,
  `factory_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_category` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `factory_flag` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`factory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `taobao_source`
--

CREATE TABLE IF NOT EXISTS `taobao_source` (
  `taobao_source_id` int(11) NOT NULL AUTO_INCREMENT,
  `taobao_source_taobao_id` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taobao_source_taobao_title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
  `key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL,
  PRIMARY KEY (`taobao_source_id`),
  UNIQUE KEY `taobao_source_taobao_id` (`taobao_source_taobao_id`),
  UNIQUE KEY `taobao_source_taobao_id_2` (`taobao_source_taobao_id`),
  UNIQUE KEY `taobao_source_taobao_id_3` (`taobao_source_taobao_id`),
  UNIQUE KEY `taobao_source_taobao_id_4` (`taobao_source_taobao_id`),
  KEY `xuekuanpingming` (`xuekuanpingming`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11578 ;

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
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`target_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

-- --------------------------------------------------------

--
-- 表的结构 `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  `salt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `tem`
--

CREATE TABLE IF NOT EXISTS `tem` (
  `tem_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_1` int(11) DEFAULT NULL,
  `int_2` int(11) DEFAULT NULL,
  `int_3` int(11) DEFAULT NULL,
  `int_4` int(11) DEFAULT NULL,
  `int_5` int(11) DEFAULT NULL,
  `varchar_1` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `varchar_2` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `varchar_3` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `varchar_4` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `varchar_5` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
