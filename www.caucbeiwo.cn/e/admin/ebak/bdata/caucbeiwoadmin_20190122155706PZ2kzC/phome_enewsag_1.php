<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsag`;");
E_C("CREATE TABLE `phome_enewsag` (
  `agid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agname` varchar(60) NOT NULL DEFAULT '',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `auids` text NOT NULL,
  PRIMARY KEY (`agid`),
  KEY `isadmin` (`isadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsag` values('1',0xe7aea1e79086e59198,'9','');");
E_D("replace into `phome_enewsag` values('2',0xe78988e4b8bb,'5','');");

@include("../../inc/footer.php");
?>