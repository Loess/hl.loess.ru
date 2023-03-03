SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `hl_mods`;
CREATE TABLE IF NOT EXISTS `hl_mods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastver` varchar(128) NOT NULL,
  `type` varchar(64) NOT NULL,
  `requirements` varchar(64) NOT NULL,
  `released` date NOT NULL,
  `lastupdate` date NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alivelinks` text NOT NULL,
  `dowehave` varchar(128) NOT NULL,
  `dev` text NOT NULL,
  `homepage` text NOT NULL,
  `maps` varchar(32) NOT NULL,
  `dlltexmodlsoun` set('dll','tex','mdl','snd') NOT NULL,
  `rate` varchar(11) NOT NULL,
  `c17rate` varchar(8) NOT NULL,
  `c17path` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `moddb` varchar(255) NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `twhl` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `anything else` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1219 DEFAULT CHARSET=cp1251;

INSERT INTO `hl_mods` (`id`, `name`, `lastver`, `type`, `requirements`, `released`, `lastupdate`, `filename`, `alivelinks`, `dowehave`, `dev`, `homepage`, `maps`, `dlltexmodlsoun`, `rate`, `c17rate`, `c17path`, `pp`, `moddb`, `reviews`, `twhl`, `desc`, `anything else`) VALUES
(1, '101 Grunts', '', 'S', '1009', '1999-09-01', '1999-09-01', '101Grunt.zip', 'http://yadi.sk/d/8YcBLytY6OFtQ', 'Y', 'Jonathan L Gower jon@jlgower.freeserve.co.uk', '', '3', '', '', 'd', '101grunts', '2800 101-grunts-half-life', '', '', '', '', '');

ALTER TABLE `hl_mods`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `hl_mods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

DROP TABLE IF EXISTS `hl_mods_edits`;
CREATE TABLE IF NOT EXISTS `hl_mods_edits` (
  `counter` int(11) NOT NULL,
  `identity` varchar(8) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastver` varchar(128) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `requirements` varchar(64) DEFAULT NULL,
  `released` date DEFAULT NULL,
  `lastupdate` date DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `alivelinks` text,
  `steamcompatible` varchar(2) DEFAULT NULL,
  `dev` text,
  `homepage` text,
  `maps` varchar(32) DEFAULT NULL,
  `dlltexmodlsoun` set('dll','tex','mdl','snd') DEFAULT NULL,
  `pp` varchar(255) DEFAULT NULL,
  `moddb` varchar(255) DEFAULT NULL,
  `reviews` varchar(255) DEFAULT NULL,
  `twhl` varchar(255) DEFAULT NULL,
  `desc` text
) ENGINE=MyISAM AUTO_INCREMENT=360 DEFAULT CHARSET=cp1251;

ALTER TABLE `hl_mods_edits`
  ADD PRIMARY KEY (`counter`);

ALTER TABLE `hl_mods_edits`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
