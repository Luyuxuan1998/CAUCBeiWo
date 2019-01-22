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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_huandeng` values('1','22','0','5','0','0',0x323031362d30322d3137,0x31,'1',0x61646d696e,'0','0','1','0','0','0','0','1455642021','1455642021','1','0','0','',0x2f6875616e64656e672f323031362d30322d31372f312e68746d6c,'1','1','1','',0xe9a696e9a1b5e5b9bbe781afe5a4a7e59bbee4b880,'1455641956',0x2f642f66696c652f323031362d30322d31372f37383462313738313330666139616666653965353765333463396533323031352e6a7067,0x687474703a2f2f7777772e6d6f7975626c6f672e636f6d2f,'0');");
E_D("replace into `phome_ecms_huandeng` values('2','22','0','4','0','0',0x323031362d30322d3137,0x32,'1',0x61646d696e,'0','0','1','0','0','0','0','1455642033','1455642033','1','0','0','',0x2f6875616e64656e672f323031362d30322d31372f322e68746d6c,'1','1','1','',0xe9a696e9a1b5e5b9bbe781afe5a4a7e59bbee4ba8c,'1455642021',0x2f642f66696c652f323031362d30322d31372f37383761636264326365396532336234343037366461336562343930373634652e6a7067,0x687474703a2f2f7777772e6d6f7975626c6f672e636f6d2f,'0');");
E_D("replace into `phome_ecms_huandeng` values('3','22','0','7','0','0',0x323031362d30322d3137,0x33,'1',0x61646d696e,'0','0','1','0','0','0','0','1455642046','1455642046','1','0','0','',0x2f6875616e64656e672f323031362d30322d31372f332e68746d6c,'1','1','1','',0xe9a696e9a1b5e5b9bbe781afe5a4a7e59bbee4b889,'1455642034',0x2f642f66696c652f323031362d30322d31372f64316638643266653539373961366338343637363834336236306131373930392e6a7067,0x687474703a2f2f7777772e6d6f7975626c6f672e636f6d2f,'0');");

@include("../../inc/footer.php");
?>