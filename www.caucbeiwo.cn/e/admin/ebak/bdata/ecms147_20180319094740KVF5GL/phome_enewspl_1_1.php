<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl_1`;");
E_C("CREATE TABLE `phome_enewspl_1` (
  `plid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `sayip` varchar(20) NOT NULL DEFAULT '',
  `saytime` int(10) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `zcnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fdnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `saytext` text NOT NULL,
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`plid`),
  KEY `id` (`id`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`,`checked`,`plid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspl_1` values('1','1000010000000031','',0x3139322e3136382e312e31,'1490344990','31','0','11','0','0','0','0',0xe8bf99e698afe4b880e69da1e6b58be8af95e8af84e8aebae38082e58f91e5b883e5908ee58fb0e5bc80e590afe5aea1e6a0b8e4ba86e593a6efbc81,'0');");
E_D("replace into `phome_enewspl_1` values('2','1000010000000014','',0x3131322e36342e3231372e313036,'1490940798','14','1','3','0','0','0','0',0xe6849fe8a789e8bf99e4b8aae9a1b5e99da2e58092e698afe68cbae5a5bde79a84,'0');");
E_D("replace into `phome_enewspl_1` values('3','1000010000000020','',0x3138332e3132392e3136352e3939,'1493344313','20','1','5','0','0','0','0',0x5b7e652e68687e5d,'0');");
E_D("replace into `phome_enewspl_1` values('4','1000010000000027',0x636e73697368616f,0x3138322e3134312e3232342e3437,'1494606524','27','1','11','0','0','106','0',0x35353534343536343534363436343534343536343435,'0');");
E_D("replace into `phome_enewspl_1` values('5','1000010000000020','',0x3138322e3134312e3232342e3437,'1494751554','20','1','5','0','0','0','0',0xe4b88ae79a84e694bee69dbee694bee69dbee79a84e696b9e5bc8f,'0');");
E_D("replace into `phome_enewspl_1` values('6','1000010000000022','',0x3131352e3233362e3138302e3736,'1494865957','22','1','6','0','0','0','0',0x3131315b7e652e68687e5d,'0');");
E_D("replace into `phome_enewspl_1` values('7','1000010000000014','',0x3138302e3136382e31352e313232,'1495532033','14','1','3','0','0','0','0',0xe68993e6b395e698afe590a6,'0');");
E_D("replace into `phome_enewspl_1` values('8','1000010000000027','',0x312e3139322e32382e3933,'1498496010','27','1','11','0','0','0','0',0x363535,'0');");
E_D("replace into `phome_enewspl_1` values('9','1000010000000004','',0x3138302e3137352e3135382e3939,'1500284904','4','1','2','0','0','0','0',0x34343434,'0');");
E_D("replace into `phome_enewspl_1` values('10','1000010000000027','',0x3133392e3138342e3232332e323133,'1502274050','27','1','11','0','0','0','0',0x363636363636363636,'0');");

@include("../../inc/footer.php");
?>