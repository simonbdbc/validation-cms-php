-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` longtext NOT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pages` (`id`, `title`, `content`, `hidden`) VALUES
(1,	'Home',	'<h4>ceci est mon accueil</h4>',	0),
(2,	'Article',	'<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum<p>',	0),
(3,	'Contact',	'Lorem lorem lorem',	0),
(4,	'test',	'tt',	1),
(5,	'test',	'tt',	1),
(6,	'tter',	'rezrfesfs',	0),
(7,	'tter',	'rezrfesfs',	0),
(8,	'tter',	'rezrfesfs',	0),
(9,	'tter',	'rezrfesfs',	0),
(10,	'tter',	'rezrfesfs',	0),
(11,	'tter',	'rezrfesfs',	0),
(12,	'tter',	'rezrfesfs',	0),
(13,	'tter',	'rezrfesfs',	0),
(14,	'tter',	'rezrfesfs',	0),
(15,	'tter',	'rezrfesfs',	0),
(16,	'tter',	'rezrfesfs',	0),
(17,	'tter',	'rezrfesfs',	0),
(18,	'tter',	'rezrfesfs',	0),
(19,	'tter',	'rezrfesfs',	0),
(20,	'tter',	'rezrfesfs',	0),
(21,	'tter',	'rezrfesfs',	0),
(22,	'tter',	'rezrfesfs',	0),
(23,	'tter',	'rezrfesfs',	0),
(24,	'tter',	'rezrfesfs',	0),
(25,	'tter',	'rezrfesfs',	0),
(26,	'tter',	'rezrfesfs',	0),
(27,	'tter',	'rezrfesfs',	0),
(28,	'tter',	'rezrfesfs',	0),
(29,	'tter',	'rezrfesfs',	0);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_connected` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `is_connected`) VALUES
(1,	'admin',	'0000',	1);

-- 2018-08-31 10:01:55
