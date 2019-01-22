<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('1','2','1','1455626430','1455626515','1455627365','1');");
E_D("replace into `phome_ecms_news_index` values('2','2','1','1455627644','1455627821','1455628105','1');");
E_D("replace into `phome_ecms_news_index` values('3','2','1','1455628161','1455628237','1455628356','1');");
E_D("replace into `phome_ecms_news_index` values('4','2','1','1455628427','1455628509','1455628585','1');");
E_D("replace into `phome_ecms_news_index` values('5','3','1','1455628877','1455628973','1455629333','1');");
E_D("replace into `phome_ecms_news_index` values('6','3','1','1455629156','1455629310','1455629424','1');");
E_D("replace into `phome_ecms_news_index` values('7','3','1','1455629523','1455629602','1455629672','1');");
E_D("replace into `phome_ecms_news_index` values('8','3','1','1455629764','1455629949','1455629949','1');");
E_D("replace into `phome_ecms_news_index` values('9','3','1','1455630696','1455630860','1455630899','1');");
E_D("replace into `phome_ecms_news_index` values('10','3','1','1455630982','1455631094','1455631094','1');");
E_D("replace into `phome_ecms_news_index` values('11','3','1','1455631199','1455631289','1455631289','1');");
E_D("replace into `phome_ecms_news_index` values('12','3','1','1455631848','1455631914','1455631914','1');");
E_D("replace into `phome_ecms_news_index` values('13','3','1','1455632507','1455632645','1455632645','1');");
E_D("replace into `phome_ecms_news_index` values('14','3','1','1455632743','1455632804','1455632804','1');");
E_D("replace into `phome_ecms_news_index` values('15','5','1','1455633450','1455633511','1455633745','1');");
E_D("replace into `phome_ecms_news_index` values('16','5','1','1455633830','1455633929','1455634052','1');");
E_D("replace into `phome_ecms_news_index` values('17','5','1','1455634353','1455634429','1455634429','1');");
E_D("replace into `phome_ecms_news_index` values('18','6','1','1455634512','1455634573','1455634573','1');");
E_D("replace into `phome_ecms_news_index` values('19','5','1','1455634632','1455634681','1455634690','1');");
E_D("replace into `phome_ecms_news_index` values('20','5','1','1455635993','1455636061','1455636080','1');");
E_D("replace into `phome_ecms_news_index` values('21','5','1','1455636145','1455636223','1455637006','1');");
E_D("replace into `phome_ecms_news_index` values('22','6','1','1455636295','1455636347','1517977883','1');");
E_D("replace into `phome_ecms_news_index` values('23','8','1','1455637852','1455638022','1455638609','1');");
E_D("replace into `phome_ecms_news_index` values('24','8','1','1455638023','1455638237','1455638614','1');");
E_D("replace into `phome_ecms_news_index` values('25','11','1','1455639581','1455639717','1455639818','1');");
E_D("replace into `phome_ecms_news_index` values('26','11','1','1455639891','1455639991','1457451504','1');");
E_D("replace into `phome_ecms_news_index` values('27','11','1','1455640052','1455640156','1455640156','1');");
E_D("replace into `phome_ecms_news_index` values('28','14','1','1455642985','1455643072','1456289443','1');");
E_D("replace into `phome_ecms_news_index` values('29','15','1','1455642985','1455643608','1456294232','1');");
E_D("replace into `phome_ecms_news_index` values('31','11','1','1458791176','1458791388','1497597635','1');");
E_D("replace into `phome_ecms_news_index` values('39','2','1','1455626430','1515338295','1515338295','1');");
E_D("replace into `phome_ecms_news_index` values('40','2','1','1455627644','1515338295','1515338295','1');");
E_D("replace into `phome_ecms_news_index` values('41','2','1','1455628161','1515338295','1515338295','1');");
E_D("replace into `phome_ecms_news_index` values('42','2','1','1455628427','1515338295','1515338295','1');");
E_D("replace into `phome_ecms_news_index` values('43','23','1','1455628877','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('44','23','1','1455629156','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('45','23','1','1455629523','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('46','23','1','1455629764','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('47','23','1','1455630696','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('48','23','1','1455630982','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('49','23','1','1455631199','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('50','23','1','1455631848','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('51','23','1','1455632507','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('52','23','1','1455632743','1515338347','1515338347','1');");
E_D("replace into `phome_ecms_news_index` values('53','2','1','1455629764','1515338447','1515338447','1');");
E_D("replace into `phome_ecms_news_index` values('54','8','1','1455637852','1515338480','1515338480','1');");
E_D("replace into `phome_ecms_news_index` values('55','8','1','1455638023','1515338480','1515338480','1');");
E_D("replace into `phome_ecms_news_index` values('56','14','1','1455642985','1515338501','1515338501','1');");
E_D("replace into `phome_ecms_news_index` values('57','14','1','1455642985','1515338501','1515338501','1');");

@include("../../inc/footer.php");
?>