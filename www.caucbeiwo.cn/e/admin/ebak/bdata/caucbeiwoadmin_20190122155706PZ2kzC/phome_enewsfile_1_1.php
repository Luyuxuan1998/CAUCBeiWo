<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=324 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('321','1000090000000004',0x38363139313538373636366339393763386462353233393530376164633765302e6a7067,'92002',0x323031392d30312d3231,0x63617563626569776f61646d696e,'1548063197','22',0xe5aea3e4bca0e59bbe2e6a7067,'1','0','4','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('322','1000090000000005',0x36396336333635313036306331336434346435613262616661323864373132302e6a7067,'96991',0x323031392d30312d3231,0x63617563626569776f61646d696e,'1548063378','22',0xe5969ce8bf8e323031392e6a7067,'1','0','5','0','2','0');");

@include("../../inc/footer.php");
?>