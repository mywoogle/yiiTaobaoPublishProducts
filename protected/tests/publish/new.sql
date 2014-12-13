CREATE TABLE IF NOT EXISTS `factory` (
  `factory_id` int(11) NOT NULL AUTO_INCREMENT,
  `factory_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_category` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `factory_flag` int(11) NOT NULL,
  PRIMARY KEY (`factory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

