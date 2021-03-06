<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0',0xe69687e7aba0,0x7c32387c34317c34327c,'0','11','10','8','0','7','','0',0x77656e7a68616e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','1','1','10',0xe69687e7aba0,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455625992','0','','0','0');");
E_D("replace into `phome_enewsclass` values('38','36',0xe5ada6e6a0a1e9809ae79fa5,'','0','11','10','8','0','7',0x7c33367c,'1',0x78696e77656e2f7875657869616f746f6e677a6869,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','1','1','10',0xe5ada6e6a0a1e9809ae79fa5,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130712','0','','0','1548130712');");
E_D("replace into `phome_enewsclass` values('37','36',0xe5b9b3e58fb0e9809ae79fa5,'','0','11','10','8','0','7',0x7c33367c,'1',0x78696e77656e2f70696e67746169746f6e677a6869,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe5b9b3e58fb0e9809ae79fa5,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130676','0','','0','1548130676');");
E_D("replace into `phome_enewsclass` values('4','0',0xe59bbee78987,0x7c33307c34337c34347c,'0','16','10','0','0','11','','0',0x74757069616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','1','1','10',0xe59bbee78987,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455633103','0','','0','1548118311');");
E_D("replace into `phome_enewsclass` values('42','1',0xe8a1a8e799bde5a299,'','0','11','10','15','0','16',0x7c317c,'1',0x77656e7a68616e672f6269616f6261697169616e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','10','1','10',0xe8a1a8e799bde5a299,'0','0','12',0x61727469636c65,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','16','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130848','0','','0','1548130848');");
E_D("replace into `phome_enewsclass` values('41','1',0xe99a8fe4bebfe58699e58699,'','0','11','10','15','0','16',0x7c317c,'1',0x77656e7a68616e672f7375696269616e786965786965,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','10','1','10',0xe99a8fe4bebfe58699e58699,'0','0','12',0x61727469636c65,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','16','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130831','0','','0','1548130831');");
E_D("replace into `phome_enewsclass` values('7','0',0xe8b584e6ba90,0x7c33327c34357c34367c34377c,'0','16','10','0','0','11','','0',0x7a697975616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','3','','10','12','1','10',0xe8b584e6ba90,'1','0','13',0x7265736f75726365,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455637592','0','','0','1548124598');");
E_D("replace into `phome_enewsclass` values('43','4',0xe7be8ee5b7a5e4bd9ce59381,'','0','11','10','16','0','17',0x7c347c,'1',0x74757069616e2f6d6569676f6e677a756f70696e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','11','1','10',0xe7be8ee5b7a5e4bd9ce59381,'0','0','11',0x70696374757265,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130881','0','','0','1548130881');");
E_D("replace into `phome_enewsclass` values('10','0',0xe8a786e9a291,0x7c33337c34387c34397c35307c,'0','16','10','0','0','11','','0',0x73686970696e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','4','','10','1','1','10',0xe8a786e9a291,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455639316','0','','0','1548125221');");
E_D("replace into `phome_enewsclass` values('40','36',0xe4bb8ae697a5e5a4b4e69da1,'','0','11','10','8','0','7',0x7c33367c,'1',0x78696e77656e2f6a696e7269746f757469616f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','3','','10','1','1','10',0xe4bb8ae697a5e5a4b4e69da1,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130787','0','','0','1548130787');");
E_D("replace into `phome_enewsclass` values('39','36',0xe7a4bee59ba2e585ace5918a,'','0','11','10','8','0','7',0x7c33367c,'1',0x78696e77656e2f7368657475616e676f6e6767616f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','1','1','10',0xe7a4bee59ba2e585ace5918a,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130743','0','','0','1548130743');");
E_D("replace into `phome_enewsclass` values('13','0',0xe59586e59f8e,0x7c31347c31357c,'0','16','10','0','0','13','','0',0x7368616e676368656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','7','','10','1','1','10',0xe59586e59f8e,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455640590','0','','0','1548130325');");
E_D("replace into `phome_enewsclass` values('14','13',0xe7ab99e58685e8b4ade4b9b0,'','0','16','10','11','0','13',0x7c31337c,'1',0x7368616e676368656e672f7a68616e6e6569676f756d6169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe7ab99e58685e8b4ade4b9b0,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455640625','0','','0','0');");
E_D("replace into `phome_enewsclass` values('15','13',0xe7ab99e5a496e8b4ade4b9b0,'','0','16','10','11','0','13',0x7c31337c,'1',0x7368616e676368656e672f7a68616e776169676f756d6169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe7ab99e5a496e8b4ade4b9b0,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455640655','0','','0','0');");
E_D("replace into `phome_enewsclass` values('16','0',0xe7bbbce59088e6a08fe79baeefbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee7bd91e7ab99e5ba95e983a8efbc8ce4b88de8a681e588a0e999a4efbc89,0x7c,'0','25','10','0','0','0','','0',0x7a6f6e676865,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','100','','10','1','1','10',0xe7bbbce59088e6a08fe79baeefbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee7bd91e7ab99e5ba95e983a8efbc8ce4b88de8a681e588a0e999a4efbc89,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641317','0','','0','1521422481');");
E_D("replace into `phome_enewsclass` values('17','16',0xe585b3e4ba8ee68891e4bbac,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6775616e7975776f6d656e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe585b3e4ba8ee68891e4bbac,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641424','0','','0','1548136079');");
E_D("replace into `phome_enewsclass` values('19','16',0xe5858de8b4a3e5a3b0e6988e,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6d69616e7a657368656e676d696e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','3','','10','1','1','10',0xe5858de8b4a3e5a3b0e6988e,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641477','0','','0','1548136294');");
E_D("replace into `phome_enewsclass` values('20','16',0xe5b9bfe5918ae59088e4bd9c,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6775616e6767616f68657a756f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','4','','10','1','1','10',0xe5b9bfe5918ae59088e4bd9c,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641525','0','','0','1548136326');");
E_D("replace into `phome_enewsclass` values('21','16',0xe8b584e6ba90e99b86e994a6,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f7a697975616e6a696a696e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','5','','10','1','1','10',0xe8b584e6ba90e99b86e994a6,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','4','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641558','0','','0','1548136559');");
E_D("replace into `phome_enewsclass` values('22','0',0xe5b9bbe781afe78987e6b7bbe58aa0efbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee9a696e9a1b5e5a4a7e59bbee5b9bbe781afefbc8ce4b88de8a681e588a0e999a4efbc89,'','0','25','10','13','0','7','','1',0x6875616e64656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','100','','10','9','1','10',0xe5b9bbe781afe78987e6b7bbe58aa0efbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee9a696e9a1b5e5a4a7e59bbee5b9bbe781afefbc8ce4b88de8a681e588a0e999a4efbc89,'0','0','9',0x6875616e64656e67,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1455641921','0','','0','1521422410');");
E_D("replace into `phome_enewsclass` values('36','0',0xe696b0e997bb,0x7c33377c33387c33397c34307c,'0','11','10','8','0','7','','0',0x78696e77656e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe696b0e997bb,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130257','0','','0','1548130257');");
E_D("replace into `phome_enewsclass` values('24','0',0xe5ada6e4b9a0,0x7c33347c35317c35327c,'0','16','10','0','0','23','','0',0x7875657869,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','5','','10','14','1','10',0xe5ada6e4b9a0,'1','0','14',0x6c6561726e,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','23','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548085070','0','','0','1548125839');");
E_D("replace into `phome_enewsclass` values('25','0',0xe5889be5aea2e4b8ade5bf83,0x7c33357c35337c35347c,'0','16','10','0','0','11','','0',0x636875616e676b657a686f6e6778696e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','6','','10','15','1','10',0xe5889be5aea2e4b8ade5bf83,'1','0','15',0x63726561746f72,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548085112','0','','0','1548126450');");
E_D("replace into `phome_enewsclass` values('28','1',0xe88f9ce9b89fe69599e7a88b,'','0','11','10','15','0','16',0x7c317c,'1',0x77656e7a68616e672f6361696e69616f6a69616f6368656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','10','1','10',0xe88f9ce9b89fe69599e7a88b,'0','0','12',0x61727469636c65,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','16','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548117197','0','','0','1548117197');");
E_D("replace into `phome_enewsclass` values('30','4',0xe6a0a1e59bade7be8ee699af,'','0','11','10','16','0','17',0x7c347c,'1',0x74757069616e2f7869616f7975616e6d65696a696e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','11','1','10',0xe6a0a1e59bade7be8ee699af,'0','0','11',0x70696374757265,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548118628','0','','0','1548118628');");
E_D("replace into `phome_enewsclass` values('32','7',0xe5b8b8e794a8e8bdafe4bbb6,'','0','11','10','16','0','20',0x7c377c,'1',0x7a697975616e2f6368616e67796f6e677275616e6a69616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','12','1','10',0xe5b8b8e794a8e8bdafe4bbb6,'0','0','13',0x7265736f75726365,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','6','','0','4','0','','20','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548123250','0','','0','1548124525');");
E_D("replace into `phome_enewsclass` values('33','10',0xe783ade997a8e794b5e5bdb1,'','0','11','10','20','0','21',0x7c31307c,'1',0x73686970696e2f72656d656e6469616e79696e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','13','1','10',0xe783ade997a8e794b5e5bdb1,'0','0','16',0x766964656f,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','21','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548125292','0','','0','1548125292');");
E_D("replace into `phome_enewsclass` values('34','24',0xe8afbee5a082e8afbee4bbb6,'','0','11','10','23','0','23',0x7c32347c,'1',0x78756578692f6b6574616e676b656a69616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','14','1','10',0xe8afbee5a082e8afbee4bbb6,'0','0','14',0x6c6561726e,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','23','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548125799','0','','0','1548125799');");
E_D("replace into `phome_enewsclass` values('35','25',0xe695b0e5ada6e5bbbae6a8a1,'','0','11','10','24','0','26',0x7c32357c,'1',0x636875616e676b657a686f6e6778696e2f7368757875656a69616e6d6f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','15','1','10',0xe695b0e5ada6e5bbbae6a8a1,'0','0','15',0x63726561746f72,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','26','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548126431','0','','0','1548126431');");
E_D("replace into `phome_enewsclass` values('44','4',0xe58aa8e6bcabe59bbee78987,'','0','11','10','16','0','17',0x7c347c,'1',0x74757069616e2f646f6e676d616e74757069616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','11','1','10',0xe58aa8e6bcabe59bbee78987,'0','0','11',0x70696374757265,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130918','0','','0','1548130918');");
E_D("replace into `phome_enewsclass` values('45','7',0xe783ade997a8e6b8b8e6888f,'','0','11','10','16','0','20',0x7c377c,'1',0x7a697975616e2f72656d656e796f757869,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','12','1','10',0xe783ade997a8e6b8b8e6888f,'0','0','13',0x7265736f75726365,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','6','','0','4','0','','20','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130949','0','','0','1548130949');");
E_D("replace into `phome_enewsclass` values('46','7',0xe69599e7a88be99b86e994a6,'','0','11','10','16','0','20',0x7c377c,'1',0x7a697975616e2f6a69616f6368656e676a696a696e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','12','1','10',0xe69599e7a88be99b86e994a6,'0','0','13',0x7265736f75726365,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','6','','0','4','0','','20','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548130988','0','','0','1548130988');");
E_D("replace into `phome_enewsclass` values('47','7',0xe7bd91e79b98e7a78de5ad90,'','0','11','10','16','0','20',0x7c377c,'1',0x7a697975616e2f77616e6770616e7a686f6e677a69,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','3','','10','12','1','10',0xe7bd91e79b98e7a78de5ad90,'0','0','13',0x7265736f75726365,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','6','','0','4','0','','20','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131018','0','','0','1548131018');");
E_D("replace into `phome_enewsclass` values('48','10',0xe794b5e8a786e589a7,'','0','11','10','20','0','21',0x7c31307c,'1',0x73686970696e2f6469616e7368696a75,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','3','','10','13','1','10',0xe794b5e8a786e589a7,'0','0','16',0x766964656f,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','21','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131051','0','','0','1548131051');");
E_D("replace into `phome_enewsclass` values('49','10',0xe7bbbce889bae58aa8e6bcab,'','0','11','10','20','0','21',0x7c31307c,'1',0x73686970696e2f7a6f6e677969646f6e676d616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','13','1','10',0xe7bbbce889bae58aa8e6bcab,'0','0','16',0x766964656f,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','21','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131080','0','','0','1548131080');");
E_D("replace into `phome_enewsclass` values('50','10',0xe6a0a1e59bade7949fe6b4bb,'','0','11','10','20','0','21',0x7c31307c,'1',0x73686970696e2f7869616f7975616e7368656e6768756f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','13','1','10',0xe6a0a1e59bade7949fe6b4bb,'0','0','16',0x766964656f,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','21','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131131','0','','0','1548131131');");
E_D("replace into `phome_enewsclass` values('51','24',0xe59ca8e7babfe5ada6e5a082,'','0','11','10','23','0','23',0x7c32347c,'1',0x78756578692f7a61697869616e78756574616e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','14','1','10',0xe59ca8e7babfe5ada6e5a082,'0','0','14',0x6c6561726e,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','23','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131160','0','','0','1548131160');");
E_D("replace into `phome_enewsclass` values('52','24',0xe88083e8af95e9a298e5ba93,'','0','11','10','23','0','23',0x7c32347c,'1',0x78756578692f6b616f73686974696b75,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','2','','10','14','1','10',0xe88083e8af95e9a298e5ba93,'0','0','14',0x6c6561726e,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','23','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131179','0','','0','1548131179');");
E_D("replace into `phome_enewsclass` values('53','25',0xe7bd91e7ab99e5bc80e58f91,'','0','11','10','24','0','26',0x7c32357c,'1',0x636875616e676b657a686f6e6778696e2f77616e677a68616e6b61696661,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','15','1','10',0xe7bd91e7ab99e5bc80e58f91,'0','0','15',0x63726561746f72,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','26','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131208','0','','0','1548131208');");
E_D("replace into `phome_enewsclass` values('54','25',0xe7bc96e7a88be8aebee8aea1,'','0','11','10','24','0','26',0x7c32357c,'1',0x636875616e676b657a686f6e6778696e2f6269616e6368656e677368656a69,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','15','1','10',0xe7bc96e7a88be8aebee8aea1,'0','0','15',0x63726561746f72,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','26','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548131229','0','','0','1548131229');");
E_D("replace into `phome_enewsclass` values('55','16',0xe4bdbfe794a8e9a1bbe79fa5,'','0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f736869796f6e6778757a6869,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','1','','10','1','1','10',0xe4bdbfe794a8e9a1bbe79fa5,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1548136164','0','','0','1548136709');");

@include("../../inc/footer.php");
?>