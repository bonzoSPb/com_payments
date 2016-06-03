DROP TABLE IF EXISTS `#__payment`;

CREATE TABLE `#__payment` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`payer` varchar(255) DEFAULT NULL,
`sum` int(11) DEFAULT NULL,
`fund` int(11) DEFAULT NULL,
`date` varchar(255) DEFAULT '0000-00-00',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__payment` VALUES (1, 'test_title', 0, 713, '1464595020');