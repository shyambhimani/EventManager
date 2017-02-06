CREATE DATABASE `eventpost`;
USE `eventpost`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventname` (`eventname`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
