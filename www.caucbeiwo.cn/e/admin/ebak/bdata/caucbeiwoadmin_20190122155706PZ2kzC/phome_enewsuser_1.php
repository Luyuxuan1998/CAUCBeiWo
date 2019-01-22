<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuser`;");
E_C("CREATE TABLE `phome_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  `wname` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `wxno` varchar(80) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuser` values('1',0x63617563626569776f61646d696e,0x6361373562356661343331633664313438313638313466656137316132343731,0x7230393346576e6a4c4f746858336351616b3953,0x7c,'1','0','1','0',0x713468356a514c37,'212','1548143119',0x3139322e3136382e332e313036,0xe8a2abe7aa9de4ba91e8b584e6ba90e7aea1e79086e59198,0x626569776f746563686e6f6c6f6779403136332e636f6d,'0','1548142988',0x3139322e3136382e332e313036,'1455607403',0x3139322e3136382e312e31,0x39534931474a64387539426165686f39784c656e685a7a584d4c794348527062673756786a4a735a676b533932317365,0x6b6c4757336f4553676d32733747686664473549,0x3534353135,0x3534323839,'0','','','','','');");
E_D("replace into `phome_enewsuser` values('2',0x79786c75323731383135,0x3664336336653462616666626632353765316332373665303239653532646563,0x32367639456b655972656a364a52787077505a6f,0x7c,'1','0','2','0',0x6a685241494d6d76,'2','1548142760',0x3139322e3136382e332e323137,'','','0','1548113370',0x3139322e3136382e332e313036,'1548113357',0x3139322e3136382e332e313036,0x3136696f526255744a3171685432546945554a374630634b7a70464676666c4e68766d6647377068706b6e34524e6b79,0x70774f6e547679745635495372484f686f79546b,0x3538363632,0x38353434,0x38353434,'','','','','');");

@include("../../inc/footer.php");
?>