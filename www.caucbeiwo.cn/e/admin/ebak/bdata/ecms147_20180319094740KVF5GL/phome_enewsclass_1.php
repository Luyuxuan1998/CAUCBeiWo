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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0',0xe69687e7aba0,0x7c327c337c32337c,'0','11','10','8','0','7','','0',0x77656e7a68616e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','1','','10','1','1','10',0xe69687e7aba0,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455625992','0','','0','0');");
E_D("replace into `phome_enewsclass` values('2','1',0xe69599e7a88b,'','0','11','10','8','0','7',0x7c317c,'1',0x77656e7a68616e672f6a69616f6368656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe69599e7a88b,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','9','9','1455626316','0','','0','0');");
E_D("replace into `phome_enewsclass` values('3','1',0xe7bb8fe9aa8c,'','0','11','10','8','0','7',0x7c317c,'1',0x77656e7a68616e672f6a696e6779616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe7bb8fe9aa8c,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','10','10','1455626332','0','','0','0');");
E_D("replace into `phome_enewsclass` values('4','0',0xe59bbee78987,0x7c357c367c,'0','16','10','0','0','11','','0',0x74757069616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','2','','10','1','1','10',0xe59bbee78987,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455633103','0','','0','0');");
E_D("replace into `phome_enewsclass` values('5','4',0xe594afe7be8ee59bbee78987,'','0','16','10','8','0','11',0x7c347c,'1',0x74757069616e2f7765696d656974757069616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe594afe7be8ee59bbee78987,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','6','6','1455633207','0','','0','0');");
E_D("replace into `phome_enewsclass` values('6','4',0xe58aa8e6bcabe59bbee78987,'','0','16','10','8','0','11',0x7c347c,'1',0x74757069616e2f646f6e676d616e74757069616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe58aa8e6bcabe59bbee78987,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1455633219','0','','0','0');");
E_D("replace into `phome_enewsclass` values('7','0',0xe4b88be8bdbd,0x7c387c397c,'0','16','10','0','0','11','','0',0x7869617a6169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','3','','10','1','1','10',0xe4b88be8bdbd,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455637592','0','','0','0');");
E_D("replace into `phome_enewsclass` values('8','7',0x505344e7b4a0e69d90,'','0','16','10','8','0','11',0x7c377c,'1',0x7869617a61692f5053447375636169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0x505344e7b4a0e69d90,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','4','4','1455637821','0','','0','0');");
E_D("replace into `phome_enewsclass` values('9','7',0xe59bbee6a087e7b4a0e69d90,'','0','16','10','8','0','11',0x7c377c,'1',0x7869617a61692f74756269616f7375636169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe59bbee6a087e7b4a0e69d90,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455637846','0','','0','0');");
E_D("replace into `phome_enewsclass` values('10','0',0xe8a786e9a291,0x7c31317c31327c,'0','16','10','0','0','11','','0',0x73686970696e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','4','','10','1','1','10',0xe8a786e9a291,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455639316','0','','0','0');");
E_D("replace into `phome_enewsclass` values('11','10',0xe794b5e5bdb1e88ab1e7b5ae,'','0','16','10','8','0','11',0x7c31307c,'1',0x73686970696e2f6469616e79696e676875617875,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe794b5e5bdb1e88ab1e7b5ae,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','4','4','1455639339','0','','0','0');");
E_D("replace into `phome_enewsclass` values('12','10',0xe69c80e696b0e794b5e5bdb1,'','0','16','10','8','0','11',0x7c31307c,'1',0x73686970696e2f7a756978696e6469616e79696e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe69c80e696b0e794b5e5bdb1,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455639397','0','','0','0');");
E_D("replace into `phome_enewsclass` values('13','0',0xe59586e59f8e,0x7c31347c31357c,'0','16','10','0','0','13','','0',0x7368616e676368656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','5','','10','1','1','10',0xe59586e59f8e,'1','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455640590','0','','0','0');");
E_D("replace into `phome_enewsclass` values('14','13',0xe7ab99e58685e8b4ade4b9b0,'','0','16','10','11','0','13',0x7c31337c,'1',0x7368616e676368656e672f7a68616e6e6569676f756d6169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe7ab99e58685e8b4ade4b9b0,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','3','3','1455640625','0','','0','0');");
E_D("replace into `phome_enewsclass` values('15','13',0xe7ab99e5a496e8b4ade4b9b0,'','0','16','10','11','0','13',0x7c31337c,'1',0x7368616e676368656e672f7a68616e776169676f756d6169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe7ab99e5a496e8b4ade4b9b0,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1455640655','0','','0','0');");
E_D("replace into `phome_enewsclass` values('16','0',0xe7bbbce59088e6a08fe79baeefbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee7bd91e7ab99e5ba95e983a8efbc8ce4b88de8a681e588a0e999a4efbc89,0x7c,'0','25','10','0','0','0','','0',0x7a6f6e676865,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','100','','10','1','1','10',0xe7bbbce59088e6a08fe79baeefbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee7bd91e7ab99e5ba95e983a8efbc8ce4b88de8a681e588a0e999a4efbc89,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641317','0','','0','1521422481');");
E_D("replace into `phome_enewsclass` values('17','16',0xe585b3e4ba8ee68891e4bbac,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6775616e7975776f6d656e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','1','','10','1','1','10',0xe585b3e4ba8ee68891e4bbac,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641424','0','','0','1521422494');");
E_D("replace into `phome_enewsclass` values('18','16',0xe79599e8a880e88194e7b3bb,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6c697579616e6c69616e7869,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','2','','10','1','1','10',0xe79599e8a880e88194e7b3bb,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641445','0','','0','0');");
E_D("replace into `phome_enewsclass` values('19','16',0xe5858de8b4a3e5a3b0e6988e,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6d69616e7a657368656e676d696e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','3','','10','1','1','10',0xe5858de8b4a3e5a3b0e6988e,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641477','0','','0','1521422515');");
E_D("replace into `phome_enewsclass` values('20','16',0xe5b9bfe5918ae59088e4bd9c,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6775616e6767616f68657a756f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','4','','10','1','1','10',0xe5b9bfe5918ae59088e4bd9c,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641525','0','','0','1521422529');");
E_D("replace into `phome_enewsclass` values('21','16',0xe6a087e7adbee58897e8a1a8,0x7c,'0','25','10','0','0','0',0x7c31367c,'0',0x7a6f6e6768652f6269616f7169616e6c69656269616f,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','5','','10','1','1','10',0xe6a087e7adbee58897e8a1a8,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','4','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1455641558','0','','0','0');");
E_D("replace into `phome_enewsclass` values('22','0',0xe5b9bbe781afe78987e6b7bbe58aa0efbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee9a696e9a1b5e5a4a7e59bbee5b9bbe781afefbc8ce4b88de8a681e588a0e999a4efbc89,'','0','25','10','13','0','7','','1',0x6875616e64656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','100','','10','9','1','10',0xe5b9bbe781afe78987e6b7bbe58aa0efbc88e5afbce888aae4b88de698bee7a4baefbc8ce794a8e4ba8ee9a696e9a1b5e5a4a7e59bbee5b9bbe781afefbc8ce4b88de8a681e588a0e999a4efbc89,'0','0','9',0x6875616e64656e67,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','3','3','1455641921','0','','0','1521422410');");
E_D("replace into `phome_enewsclass` values('23','1',0xe6b58be8af95,'','0','11','10','8','0','7',0x7c317c,'1',0x77656e7a68616e672f74657374,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe6b58be8af95,'0','0','1',0x6e657773,'0','1','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','7','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','10','10','1515338335','0','','0','0');");

@include("../../inc/footer.php");
?>