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
  PRIMARY KEY (`taobao_source_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

