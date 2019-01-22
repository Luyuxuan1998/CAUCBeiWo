<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmembergroup`;");
E_C("CREATE TABLE `phome_enewsmembergroup` (
  `groupid` smallint(6) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(60) NOT NULL DEFAULT '',
  `level` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `favanum` smallint(6) NOT NULL DEFAULT '0',
  `daydown` int(11) NOT NULL DEFAULT '0',
  `msglen` int(11) NOT NULL DEFAULT '0',
  `msgnum` int(11) NOT NULL DEFAULT '0',
  `canreg` tinyint(1) NOT NULL DEFAULT '0',
  `formid` smallint(6) NOT NULL DEFAULT '0',
  `regchecked` tinyint(1) NOT NULL DEFAULT '0',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `dayaddinfo` smallint(6) NOT NULL DEFAULT '0',
  `infochecked` tinyint(1) NOT NULL DEFAULT '0',
  `plchecked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmembergroup` values('1',0xe59ca8e6a0a1e5ada6e7949f,'1','0','120','5','2048','50','1','1','0','1','0','0','1');");
E_D("replace into `phome_enewsmembergroup` values('2',0xe5ada6e7949fe5889be4bd9ce88085,'2','0','200','10','4096','120','1','1','1','1','0','1','1');");
E_D("replace into `phome_enewsmembergroup` values('5',0xe59ca8e6a0a1e69599e5b888,'1','0','120','5','4096','50','1','1','1','1','0','0','1');");
E_D("replace into `phome_enewsmembergroup` values('6',0xe69599e5b888e5889be4bd9ce88085,'2','0','200','10','4096','120','1','1','1','1','0','1','1');");
E_D("replace into `phome_enewsmembergroup` values('7',0xe5ada6e7949fe7a4bee59ba2,'2','0','500','20','8192','200','1','2','1','2','0','1','1');");
E_D("replace into `phome_enewsmembergroup` values('8',0xe5ada6e6a0a1e983a8e997a8,'3','0','1000','50','8192','500','1','2','1','2','0','1','1');");

@include("../../inc/footer.php");
?>