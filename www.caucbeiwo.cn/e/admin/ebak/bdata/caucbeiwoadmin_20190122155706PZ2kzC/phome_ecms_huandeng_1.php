<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_huandeng`;");
E_C("CREATE TABLE `phome_ecms_huandeng` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `pic_link` varchar(255) NOT NULL DEFAULT '',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_huandeng` values('4','22','0','0','0','0',0x323031392d30312d3231,0x34,'1',0x63617563626569776f61646d696e,'0','0','1','0','0','0','1','1548063211','1548063401','1','0','0','',0x7777772e63617563626569776f2e636e,'1','1','1',0xe888aae5a4a7e8a2abe7aa9de4ba91e8b584e6ba90,0xe5aea3e4bca0e59bbe,'1548063158',0x2f642f66696c652f323031392d30312d32312f38363139313538373636366339393763386462353233393530376164633765302e6a7067,0x687474703a2f2f7777772e63617563626569776f2e636e,'0');");
E_D("replace into `phome_ecms_huandeng` values('5','22','0','0','0','0',0x323031392d30312d3231,0x35,'1',0x63617563626569776f61646d696e,'0','0','1','0','0','0','0','1548063385','1548063385','1','0','0','',0x2f6875616e64656e672f323031392d30312d32312f352e68746d6c,'1','1','1',0xe5969ce8bf8e32303139,0xe5969ce8bf8e32303139,'1548063345',0x2f642f66696c652f323031392d30312d32312f36396336333635313036306331336434346435613262616661323864373132302e6a7067,0x687474703a2f2f7777772e63617563626569776f2e636e,'0');");

@include("../../inc/footer.php");
?>