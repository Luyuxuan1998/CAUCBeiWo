<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslink`;");
E_C("CREATE TABLE `phome_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslink` values('1',0xe5a2a8e9b1bce983a8e890bde6a0bc,'',0x687474703a2f2f6d6f7975626c6f672e636f6d,'2016-02-17 00:56:05','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('2',0xe59586e4b89ae6ba90e7a081,'',0x687474703a2f2f6d6f7975323031332e74616f62616f2e636f6d,'2016-02-17 00:56:10','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('3',0xe4b985e4b985e6ba90e7a081,'',0x687474703a2f2f39397975616e6d612e6e6574,'2016-02-17 00:56:15','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('4',0xe4b985e4b985e8b584e6ba90e7bd91,'',0x687474703a2f2f7777772e39397a697975616e2e6e6574,'2016-02-17 00:56:22','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");

@include("../../inc/footer.php");
?>