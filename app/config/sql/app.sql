-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2010 at 10:24 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yacms`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aros`
--


-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aros_acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'eng', 'Page', 1, 'title', 'Home'),
(2, 'cat', 'Page', 1, 'title', 'Homa'),
(3, 'spa', 'Page', 1, 'title', 'Casa'),
(4, 'eng', 'Page', 1, 'content', '<p>this is the home page</p>'),
(5, 'cat', 'Page', 1, 'content', '<p><span id="result_box" class="short_text">Aquesta Ã©s la pÃ gina d''inici</span></p>'),
(6, 'spa', 'Page', 1, 'content', '<p>Esta es la pagina de inicio</p>'),
(18, 'spa', 'News', 1, 'content', '<p>The content in spanish</p>'),
(17, 'cat', 'News', 1, 'content', '<p>The content in catalan</p>'),
(16, 'eng', 'News', 1, 'content', '<p>The content in english</p>'),
(15, 'spa', 'News', 1, 'title', 'title in spa'),
(14, 'cat', 'News', 1, 'title', 'title in cat'),
(13, 'eng', 'News', 1, 'title', 'title in eng'),
(19, 'eng', 'Page', 3, 'title', 'test'),
(20, 'cat', 'Page', 3, 'title', 'testa'),
(21, 'spa', 'Page', 3, 'title', 'prueba'),
(22, 'eng', 'Page', 3, 'content', '<p>sas</p>'),
(23, 'cat', 'Page', 3, 'content', '<p>a</p>'),
(24, 'spa', 'Page', 3, 'content', '<p>spa</p>'),
(25, 'eng', 'Page', 4, 'title', 'deepest'),
(26, 'cat', 'Page', 4, 'title', 'deepest'),
(27, 'spa', 'Page', 4, 'title', 'deepest'),
(28, 'eng', 'Page', 4, 'content', ''),
(29, 'cat', 'Page', 4, 'content', ''),
(30, 'spa', 'Page', 4, 'content', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `active`, `created`, `modified`, `title`, `slug`, `content`) VALUES
(1, 0, '2010-03-08 12:49:10', '2010-03-13 14:14:53', 'title in eng', 'title_in_eng_1', '<p>The content in english</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `template` int(11) NOT NULL,
  `show_menu_top` tinyint(1) NOT NULL,
  `show_menu_bottom` tinyint(1) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `lft`, `rght`, `order`, `active`, `created`, `modified`, `parent_id`, `title`, `slug`, `template`, `show_menu_top`, `show_menu_bottom`, `content`) VALUES
(1, 1, 2, 0, 0, '2010-03-08 10:14:55', '2010-03-15 01:32:22', 0, 'Casa', 'home', 0, 1, 1, '<p>Esta es la pagina de inicio</p>'),
(3, 3, 4, 0, 0, '2010-03-08 15:59:45', '2010-03-15 01:22:16', 1, 'test', 'test', 0, 1, 0, '<p>sas</p>'),
(4, 5, 6, 0, 0, '2010-03-15 01:14:44', '2010-03-15 01:33:59', 3, 'deepest', 'deepest', 0, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `resources`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `active`, `created`, `modified`, `username`, `password`, `email`, `first_name`, `last_name`, `telephone_home`, `telephone_work`) VALUES
(31, 1, '2010-01-18 13:17:16', '2010-03-05 16:49:18', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', 'undefined.behaviour@gmail.com', 'Mariano', 'Simone', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
