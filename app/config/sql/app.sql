-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2010 at 04:09 PM
-- Server version: 5.0.75
-- PHP Version: 5.2.6-3ubuntu4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default '',
  `foreign_key` int(10) unsigned default NULL,
  `alias` varchar(255) default '',
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default '',
  `foreign_key` int(10) unsigned default NULL,
  `alias` varchar(255) default '',
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aros`
--


-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL default '0',
  `_read` char(2) NOT NULL default '0',
  `_update` char(2) NOT NULL default '0',
  `_delete` char(2) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aros_acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL auto_increment,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `active`, `created`, `modified`, `title`, `slug`) VALUES
(3, 0, '2010-03-03 11:55:54', '2010-03-03 15:55:59', 'a gallery foo', 'a-gallery-foo');

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL auto_increment,
  `locale` varchar(6) collate utf8_unicode_ci NOT NULL,
  `model` varchar(255) collate utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci,
  PRIMARY KEY  (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'eng', 'Page', 1, 'title', 'Home'),
(2, 'cat', 'Page', 1, 'title', 'Homa'),
(3, 'spa', 'Page', 1, 'title', 'Case'),
(4, 'eng', 'Page', 1, 'content', '<p>this is the home page</p>'),
(5, 'cat', 'Page', 1, 'content', '<p><span id="result_box" class="short_text">Aquesta Ã©s la pÃ gina d''inici</span></span></p>'),
(6, 'spa', 'Page', 1, 'content', '<p>Esta es la pagina de inicio</p>'),
(18, 'spa', 'News', 1, 'content', ''),
(17, 'cat', 'News', 1, 'content', ''),
(16, 'eng', 'News', 1, 'content', ''),
(15, 'spa', 'News', 1, 'title', 'title in spa'),
(14, 'cat', 'News', 1, 'title', 'title in cat'),
(13, 'eng', 'News', 1, 'title', 'title in eng'),
(19, 'eng', 'Page', 3, 'title', 'test'),
(20, 'cat', 'Page', 3, 'title', 'testa'),
(21, 'spa', 'Page', 3, 'title', 'prueba'),
(22, 'eng', 'Page', 3, 'content', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque\r\naliquam tempor tortor, sit amet mattis leo tincidunt tempus. Praesent\r\nnec erat nec orci porta blandit. Fusce non eros libero, vitae malesuada\r\nleo. Nam auctor libero id leo mollis id aliquam enim vestibulum.\r\nVivamus metus quam, semper vitae euismod id, pulvinar at mi. Aenean\r\ntincidunt orci id lectus dignissim vitae fringilla lorem varius. Proin\r\nnunc ligula, semper a molestie nec, volutpat eget mi. Praesent dapibus\r\nmalesuada ligula, at laoreet est lobortis et. Nam rutrum velit sed ante\r\nvehicula bibendum. Mauris convallis porttitor molestie. Nunc fringilla\r\nfacilisis mi, non consequat ante mollis vel.\r\n</p>'),
(23, 'cat', 'Page', 3, 'content', '<p>Duis ut risus velit. Sed placerat magna et felis porta volutpat\r\nhendrerit est facilisis. Cras pulvinar viverra augue at rhoncus.\r\nSuspendisse scelerisque massa fermentum eros vulputate tincidunt sit\r\namet vel est. Cras metus magna, porta vel facilisis sed, aliquam a\r\nnibh. Nulla sed pellentesque eros. Cras volutpat lacus sed ante\r\nlobortis egestas. Fusce aliquet scelerisque libero, id egestas lorem\r\nsagittis a. Duis quis diam nec eros auctor ornare non vel felis. Nulla\r\nfacilisi. Vivamus suscipit cursus volutpat.\r\n</p>'),
(24, 'spa', 'Page', 3, 'content', '<p>Fusce sed massa magna, ac lobortis tellus. Morbi quis nulla dolor, quis\r\npretium urna. Suspendisse et dui in turpis fermentum tincidunt sit amet\r\nsed libero. Nullam sollicitudin, metus non volutpat commodo, neque\r\nneque fermentum diam, et tincidunt lacus ligula eget eros. Sed laoreet\r\ncongue luctus. Ut consectetur tellus at mauris pulvinar auctor. Vivamus\r\npretium arcu eget elit varius auctor. Curabitur malesuada faucibus\r\npellentesque. Morbi ut leo magna. Vivamus tincidunt rhoncus\r\nscelerisque. Donec mi dui, adipiscing tristique viverra eu, convallis\r\nsed lacus. Quisque rutrum, lorem id varius pretium, urna erat tempus\r\nelit, vitae vulputate felis ante sed odio. In purus lectus, eleifend\r\neget iaculis sed, eleifend et odio. Vivamus venenatis feugiat turpis,\r\nat fringilla lacus dignissim ut. Mauris imperdiet turpis eget nisi\r\naliquam lobortis.\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `active`, `created`, `modified`, `title`, `slug`, `content`) VALUES
(1, 0, '2010-03-08 12:49:10', '2010-03-08 12:49:10', 'title in eng', 'title_in_eng_1', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL auto_increment,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `lft`, `rght`, `order`, `active`, `created`, `modified`, `parent_id`, `title`, `slug`, `content`) VALUES
(1, 1, 2, 0, 0, '2010-03-08 10:14:55', '2010-03-08 16:04:58', 0, 'Home', 'home', '<p>this is the home page</p>'),
(3, 3, 4, 0, 0, '2010-03-08 15:59:45', '2010-03-08 16:08:32', 0, 'testa', 'test', '<p>Duis ut risus velit. Sed placerat magna et felis porta volutpat\r\nhendrerit est facilisis. Cras pulvinar viverra augue at rhoncus.\r\nSuspendisse scelerisque massa fermentum eros vulputate tincidunt sit\r\namet vel est. Cras metus magna, porta vel facilisis sed, aliquam a\r\nnibh. Nulla sed pellentesque eros. Cras volutpat lacus sed ante\r\nlobortis egestas. Fusce aliquet scelerisque libero, id egestas lorem\r\nsagittis a. Duis quis diam nec eros auctor ornare non vel felis. Nulla\r\nfacilisi. Vivamus suscipit cursus volutpat.\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `resources`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `telephone_home` varchar(255) NOT NULL,
  `telephone_work` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `active`, `created`, `modified`, `username`, `password`, `email`, `first_name`, `last_name`, `telephone_home`, `telephone_work`) VALUES
(31, 1, '2010-01-18 13:17:16', '2010-03-05 16:49:18', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', 'undefined.behaviour@gmail.com', 'Mariano', 'Simone', '', '');
