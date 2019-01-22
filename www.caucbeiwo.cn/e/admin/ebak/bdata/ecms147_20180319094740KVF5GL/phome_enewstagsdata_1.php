<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstagsdata`;");
E_C("CREATE TABLE `phome_enewstagsdata` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagid` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `tagid` (`tagid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstagsdata` values('1','1','2','1','1455626430','1');");
E_D("replace into `phome_enewstagsdata` values('2','2','2','1','1455626430','1');");
E_D("replace into `phome_enewstagsdata` values('3','3','2','1','1455626430','1');");
E_D("replace into `phome_enewstagsdata` values('4','4','2','2','1455627644','1');");
E_D("replace into `phome_enewstagsdata` values('5','5','2','2','1455627644','1');");
E_D("replace into `phome_enewstagsdata` values('6','3','2','2','1455627644','1');");
E_D("replace into `phome_enewstagsdata` values('7','6','2','3','1455628161','1');");
E_D("replace into `phome_enewstagsdata` values('8','3','2','3','1455628161','1');");
E_D("replace into `phome_enewstagsdata` values('9','7','2','4','1455628427','1');");
E_D("replace into `phome_enewstagsdata` values('10','8','2','4','1455628427','1');");
E_D("replace into `phome_enewstagsdata` values('11','9','2','4','1455628427','1');");
E_D("replace into `phome_enewstagsdata` values('12','3','2','4','1455628427','1');");
E_D("replace into `phome_enewstagsdata` values('13','10','3','5','1455628877','1');");
E_D("replace into `phome_enewstagsdata` values('14','11','3','5','1455628877','1');");
E_D("replace into `phome_enewstagsdata` values('15','12','3','5','1455628877','1');");
E_D("replace into `phome_enewstagsdata` values('16','3','3','5','1455628877','1');");
E_D("replace into `phome_enewstagsdata` values('17','13','3','6','1455629156','1');");
E_D("replace into `phome_enewstagsdata` values('18','14','3','6','1455629156','1');");
E_D("replace into `phome_enewstagsdata` values('19','15','3','6','1455629156','1');");
E_D("replace into `phome_enewstagsdata` values('20','15','3','5','1455628877','1');");
E_D("replace into `phome_enewstagsdata` values('21','16','3','7','1455629523','1');");
E_D("replace into `phome_enewstagsdata` values('22','15','3','7','1455629523','1');");
E_D("replace into `phome_enewstagsdata` values('23','17','3','8','1455629764','1');");
E_D("replace into `phome_enewstagsdata` values('24','18','3','8','1455629764','1');");
E_D("replace into `phome_enewstagsdata` values('25','19','3','9','1455630696','1');");
E_D("replace into `phome_enewstagsdata` values('26','20','3','9','1455630696','1');");
E_D("replace into `phome_enewstagsdata` values('27','21','3','9','1455630696','1');");
E_D("replace into `phome_enewstagsdata` values('28','15','3','9','1455630696','1');");
E_D("replace into `phome_enewstagsdata` values('29','22','3','10','1455630982','1');");
E_D("replace into `phome_enewstagsdata` values('30','15','3','10','1455630982','1');");
E_D("replace into `phome_enewstagsdata` values('31','23','3','11','1455631199','1');");
E_D("replace into `phome_enewstagsdata` values('32','24','3','11','1455631199','1');");
E_D("replace into `phome_enewstagsdata` values('33','15','3','11','1455631199','1');");
E_D("replace into `phome_enewstagsdata` values('34','25','3','12','1455631848','1');");
E_D("replace into `phome_enewstagsdata` values('35','26','3','12','1455631848','1');");
E_D("replace into `phome_enewstagsdata` values('36','15','3','12','1455631848','1');");
E_D("replace into `phome_enewstagsdata` values('37','27','3','13','1455632507','1');");
E_D("replace into `phome_enewstagsdata` values('38','28','3','13','1455632507','1');");
E_D("replace into `phome_enewstagsdata` values('39','15','3','13','1455632507','1');");
E_D("replace into `phome_enewstagsdata` values('40','29','3','14','1455632743','1');");
E_D("replace into `phome_enewstagsdata` values('41','15','3','14','1455632743','1');");
E_D("replace into `phome_enewstagsdata` values('42','30','5','15','1455633450','1');");
E_D("replace into `phome_enewstagsdata` values('43','30','5','16','1455633830','1');");
E_D("replace into `phome_enewstagsdata` values('44','30','5','17','1455634353','1');");
E_D("replace into `phome_enewstagsdata` values('45','31','6','18','1455634512','1');");
E_D("replace into `phome_enewstagsdata` values('46','30','5','19','1455634632','1');");
E_D("replace into `phome_enewstagsdata` values('47','32','5','20','1455635993','1');");
E_D("replace into `phome_enewstagsdata` values('48','33','5','20','1455635993','1');");
E_D("replace into `phome_enewstagsdata` values('49','34','5','20','1455635993','1');");
E_D("replace into `phome_enewstagsdata` values('50','30','5','20','1455635993','1');");
E_D("replace into `phome_enewstagsdata` values('51','35','5','21','1455636145','1');");
E_D("replace into `phome_enewstagsdata` values('52','36','5','21','1455636145','1');");
E_D("replace into `phome_enewstagsdata` values('53','30','5','21','1455636145','1');");
E_D("replace into `phome_enewstagsdata` values('54','37','6','22','1455636295','1');");
E_D("replace into `phome_enewstagsdata` values('55','38','6','22','1455636295','1');");
E_D("replace into `phome_enewstagsdata` values('56','39','6','22','1455636295','1');");
E_D("replace into `phome_enewstagsdata` values('57','31','6','22','1455636295','1');");
E_D("replace into `phome_enewstagsdata` values('58','40','6','22','1455636295','1');");
E_D("replace into `phome_enewstagsdata` values('59','41','6','22','1455636295','1');");
E_D("replace into `phome_enewstagsdata` values('60','42','6','22','1455636295','1');");
E_D("replace into `phome_enewstagsdata` values('61','43','8','23','1455637852','1');");
E_D("replace into `phome_enewstagsdata` values('62','44','8','23','1455637852','1');");
E_D("replace into `phome_enewstagsdata` values('63','45','8','24','1455638023','1');");
E_D("replace into `phome_enewstagsdata` values('64','46','8','24','1455638023','1');");
E_D("replace into `phome_enewstagsdata` values('65','47','8','24','1455638023','1');");
E_D("replace into `phome_enewstagsdata` values('66','48','11','25','1455639581','1');");
E_D("replace into `phome_enewstagsdata` values('67','48','11','26','1455639891','1');");
E_D("replace into `phome_enewstagsdata` values('68','48','11','27','1455640052','1');");
E_D("replace into `phome_enewstagsdata` values('69','49','14','28','1455642985','1');");
E_D("replace into `phome_enewstagsdata` values('70','49','15','29','1455642985','1');");
E_D("replace into `phome_enewstagsdata` values('71','48','11','31','1458791176','1');");

@include("../../inc/footer.php");
?>