-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2010 at 04:59 PM
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

DROP TABLE IF EXISTS `acos`;
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

DROP TABLE IF EXISTS `aros`;
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

DROP TABLE IF EXISTS `aros_acos`;
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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `active`, `created`, `modified`, `title`, `slug`, `content`) VALUES
(1, 0, '2010-01-26 12:39:51', '2010-02-22 10:01:03', 'a page 123', 'foobar', 'asdasda sla slda lsdalsd lalsd lasdl alsdlasld alsdlalsd lasdlasl dalsdlalsdasd'),
(2, 0, '2010-01-28 09:18:48', '2010-01-28 09:18:48', 'foobar 2', 'foobarz', 'sdfsdfsdfsdfsdfsdfdsdfsdfsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `lft`, `rght`, `order`, `active`, `created`, `modified`, `parent_id`, `title`, `slug`, `content`) VALUES
(29, 1, 2, 0, 0, '2010-02-23 11:58:00', '2010-02-23 16:45:13', 0, 'TEST PAGE 1', 'TEST-PAGE-1', '<p>asdasdasda asda asd asd asd asda sd asd</p>'),
(30, 5, 6, 1, 0, '2010-02-23 11:58:04', '2010-02-23 16:45:13', 0, 'TEST PAGE 2', 'TEST-PAGE-2', 'asdasdasda asda asd asd asd asda sd asd'),
(31, 3, 4, 2, 0, '2010-02-23 11:58:10', '2010-02-23 16:45:13', 0, 'TEST PAGE 3', 'TEST-PAGE-3', 'asdasdasda asda asd asd asd asda sd asd'),
(32, 7, 8, 3, 0, '2010-02-23 11:58:15', '2010-02-23 16:45:13', 0, 'TEST PAGE 4', 'TEST-PAGE-4', 'asdasdasda asda asd asd asd asda sd asd'),
(33, 9, 10, 4, 0, '2010-02-23 11:58:19', '2010-02-23 16:45:13', 0, 'TEST PAGE 5', 'TEST-PAGE-5', 'asdasdasda asda asd asd asd asda sd asd');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL auto_increment,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `resources`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
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
(10, 1, '2010-01-18 13:17:11', '2010-02-04 10:05:45', 'nullz', '02f2bb14b7736bf5079c1d49ce88be309e3dbb85', 'undefined.behaviour@gmail.com', 'Marianossss', 'Simone', '', ''),
(14, 1, '2010-01-18 13:17:12', '2010-02-01 15:31:47', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(15, 1, '2010-01-18 13:17:13', '2010-02-01 15:31:50', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(16, 1, '2010-01-18 13:17:13', '2010-02-01 15:31:51', 'admin', 'edb8c3b343fc1f38b05dbcb0f46c92cf6745e6a1', '', 'Mariano', 'Simone', '', ''),
(17, 1, '2010-01-18 13:17:13', '2010-02-01 15:31:51', 'admin', 'edb8c3b343fc1f38b05dbcb0f46c92cf6745e6a1', '', 'Mariano', 'Simone', '', ''),
(20, 1, '2010-01-18 13:17:14', '2010-01-27 10:46:51', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(22, 1, '2010-01-18 13:17:14', '2010-01-27 10:46:50', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(23, 1, '2010-01-18 13:17:14', '2010-01-27 10:46:50', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(24, 1, '2010-01-18 13:17:14', '2010-01-27 10:46:49', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(25, 1, '2010-01-18 13:17:15', '2010-01-27 10:46:49', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(26, 1, '2010-01-18 13:17:15', '2010-01-27 10:46:49', 'admin', 'edb8c3b343fc1f38b05dbcb0f46c92cf6745e6a1', '', 'Mariano', 'Simone', '', ''),
(27, 1, '2010-01-18 13:17:15', '2010-01-25 15:49:33', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(28, 1, '2010-01-18 13:17:15', '2010-01-27 12:14:08', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(29, 1, '2010-01-18 13:17:15', '2010-01-18 13:17:15', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(30, 1, '2010-01-18 13:17:16', '2010-01-25 11:41:03', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', ''),
(31, 1, '2010-01-18 13:17:16', '2010-01-25 11:41:03', 'admin', '8ab7c660463aa5c25d062ebc490d02b20a02f7d4', '', 'Mariano', 'Simone', '', '');
