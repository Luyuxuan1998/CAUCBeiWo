<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsingroup`;");
E_C("CREATE TABLE `phome_enewsingroup` (
  `gid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `gname` char(60) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gid`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsingroup` values('1',0x425547e58f8de9a688e59198,'0');");
E_D("replace into `phome_enewsingroup` values('2',0xe9a284e5a487e7aea1e79086e59198,'1');");
E_D("replace into `phome_enewsingroup` values('3',0xe9a284e5a487e5aea1e6a0b8e59198,'2');");

@include("../../inc/footer.php");
?>