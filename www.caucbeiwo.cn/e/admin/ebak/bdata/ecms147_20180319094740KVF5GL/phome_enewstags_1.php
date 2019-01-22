<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstags`;");
E_C("CREATE TABLE `phome_enewstags` (
  `tagid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` char(20) NOT NULL DEFAULT '',
  `num` int(10) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagtitle` char(60) NOT NULL DEFAULT '',
  `tagkey` char(100) NOT NULL DEFAULT '',
  `tagdes` char(255) NOT NULL DEFAULT '',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagid`),
  UNIQUE KEY `tagname` (`tagname`),
  KEY `isgood` (`isgood`),
  KEY `cid` (`cid`),
  KEY `num` (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstags` values('1',0xe580bce5be97e585b3e6b3a8,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('2',0xe5bbbae7ad91e9a1b9e79bae,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('3',0xe69687e7aba0,'5','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('4',0xe794b7e5b7ab,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('5',0xe68b8de785a7,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('6',0xe695b0e4bd8de69dbf,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('7',0xe59bbee6a087,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('8',0xe58699e5ae9e,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('9',0xe69599e7a88b,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('10',0xe5b9b3e99da2,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('11',0xe8aebee8aea1e5b888,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('12',0xe5889be4b89a,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('13',0x5652,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('14',0xe8999ae68b9fe78eb0e5ae9e,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('15',0xe7bb8fe9aa8c,'9','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('16',0xe994aee79b98,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('17',0x536b65746368,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('18',0x4b65796e6f7465e7bb8fe9aa8c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('19',0x4170706c65,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('20',0x50656e6369,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('21',0xe8aebee8aea1e588a9e599a8,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('22',0xe5b7a5e4bd9ce69588e78e87,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('23',0xe7a7bbe58aa8e7abaf,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('24',0xe8aebee8aea1e68ea2e7b4a2,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('25',0x474f4f474c45,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('26',0x4d4154455249414c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('27',0xe6989fe99985e5b08fe690ade6a1a3,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('28',0xe4b896e7958ce8a782,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('29',0xe7bd91e9a1b5e8aebee8aea1,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('30',0xe594afe7be8ee59bbee78987,'6','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('31',0xe58aa8e6bcabe59bbee78987,'2','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('32',0xe59f8ee5b882,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('33',0xe99fa9e59bbd,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('34',0xe9a696e5b094,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('35',0xe594afe7be8e,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('36',0xe9a38ee699af,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('37',0xe58da1e9809a,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('38',0xe5b8a6e5ad97,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('39',0xe7aba5e5b9b4,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('40',0xe4ba8ce6aca1e58583,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('41',0xe58aa8e6bcab,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('42',0xe68f92e794bb,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('43',0xe699bae883bde8b4b4e59bbe,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('44',0xe7b4a0e69d90,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('45',0x4c4f474f,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('46',0x505344,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('47',0xe5b7a5e889bae69588e69e9c,'1','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('48',0xe5a4a7e59ca3e5bd92e69da5,'4','0','0','','','','0');");
E_D("replace into `phome_enewstags` values('49',0xe5b89de59bbd434d53,'2','0','0','','','','0');");

@include("../../inc/footer.php");
?>