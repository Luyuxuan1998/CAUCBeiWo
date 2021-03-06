<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_other`;");
E_C("CREATE TABLE `phome_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_other` values('1','0',0x37303365363333396539636564396662653132383936333963333736643331312e6a7067,'16093',0x323031362d30322d3136,0x61646d696e,'1455614586','0',0x312e6a7067,'1','0','4','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('2','0',0x36366463313831663065326465343264636661643831373064656466363737662e6a7067,'16093',0x323031362d30322d3136,0x61646d696e,'1455614604','0',0x312e6a7067,'1','0','5','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('3','0',0x64396433363862633462613031616665343963383133363239396162333766642e6a7067,'16093',0x323031362d30322d3136,0x61646d696e,'1455614617','0',0x312e6a7067,'1','0','11','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('4','0',0x65633232313933613630336235366534653035656230633765383462313066392e6a7067,'16093',0x323031362d30322d3136,0x61646d696e,'1455614629','0',0x312e6a7067,'1','0','12','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('5','0',0x61626664323031373363323064383831363066636438656337316634643639312e6a7067,'4485',0x323031362d30322d3136,0x61646d696e,'1455614675','0',0x312e6a7067,'1','0','6','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('6','0',0x32393239643364613930646538643462313434643534393738616664313737352e6a7067,'4485',0x323031362d30322d3136,0x61646d696e,'1455614690','0',0x312e6a7067,'1','0','7','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('7','0',0x39616339623238353633633637613638303530636439353438343934366435642e6a7067,'3732',0x323031362d30322d3136,0x61646d696e,'1455614721','0',0x312e6a7067,'1','0','8','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('8','0',0x30393330316630626261346539626330366234383632343061393437663733302e6a7067,'3732',0x323031362d30322d3136,0x61646d696e,'1455614739','0',0x312e6a7067,'1','0','9','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('9','0',0x38393538616434343534323837643062313236613737633836353936316433632e6a7067,'3732',0x323031362d30322d3136,0x61646d696e,'1455614753','0',0x312e6a7067,'1','0','10','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('10','0',0x33616161623936363339643561636135633561333534636365313531343335372e6a7067,'16921',0x323031362d30322d3136,0x61646d696e,'1455614866','0',0x312e6a7067,'1','0','13','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('11','0',0x61326438303039656166663932303931333939363265313165346439313338612e6a7067,'16921',0x323031362d30322d3136,0x61646d696e,'1455614882','0',0x312e6a7067,'1','0','14','0','0','3');");
E_D("replace into `phome_enewsfile_other` values('12','0',0x34646438303661376536306435613732306532343465623362313330306531362e6a7067,'17302',0x323031362d30322d3136,0x61646d696e,'1455614947','0',0x312e6a7067,'1','0','15','0','0','3');");

@include("../../inc/footer.php");
?>