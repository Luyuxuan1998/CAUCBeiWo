<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstable`;");
E_C("CREATE TABLE `phome_enewstable` (
  `tid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tsay` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `datatbs` text NOT NULL,
  `deftb` varchar(6) NOT NULL DEFAULT '',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `intb` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstable` values('1',0x6e657773,0xe696b0e997bbe7b3bbe7bb9fe695b0e68daee8a1a8,0xe696b0e997bbe7b3bbe7bb9fe695b0e68daee8a1a8,'1',0x2c312c,0x31,'0','1','0');");
E_D("replace into `phome_enewstable` values('9',0x6875616e64656e67,0xe5b9bbe781afe78987e695b0e68daee8a1a8,0xe5b9bbe781afe78987e695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','9','0');");
E_D("replace into `phome_enewstable` values('12',0x61727469636c65,0xe69687e7aba0e7b3bbe7bb9fe695b0e68daee8a1a8,0xe69687e7aba0e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','10','0');");
E_D("replace into `phome_enewstable` values('11',0x70696374757265,0xe59bbee78987e7b3bbe7bb9fe695b0e68daee8a1a8,0xe59bbee78987e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','11','0');");
E_D("replace into `phome_enewstable` values('13',0x7265736f75726365,0xe8b584e6ba90e7b3bbe7bb9fe695b0e68daee8a1a8,0xe8b584e6ba90e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','12','0');");
E_D("replace into `phome_enewstable` values('14',0x6c6561726e,0xe5ada6e4b9a0e7b3bbe7bb9fe695b0e68daee8a1a8,0xe5ada6e4b9a0e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','14','0');");
E_D("replace into `phome_enewstable` values('15',0x63726561746f72,0xe5889be5aea2e4b8ade5bf83e7b3bbe7bb9fe695b0e68daee8a1a8,0xe5889be5aea2e4b8ade5bf83e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','15','0');");
E_D("replace into `phome_enewstable` values('16',0x766964656f,0xe8a786e9a291e7b3bbe7bb9fe695b0e68daee8a1a8,0xe8a786e9a291e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','13','0');");
E_D("replace into `phome_enewstable` values('18',0x73686f70,0xe59586e59f8ee7b3bbe7bb9fe695b0e68daee8a1a8,0xe59586e59f8ee7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','16','0');");

@include("../../inc/footer.php");
?>