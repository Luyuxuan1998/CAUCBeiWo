<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infoclass_picture`;");
E_C("CREATE TABLE `phome_ecms_infoclass_picture` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_ftitle` text NOT NULL,
  `z_ftitle` varchar(255) NOT NULL DEFAULT '',
  `qz_ftitle` varchar(255) NOT NULL DEFAULT '',
  `save_ftitle` varchar(10) NOT NULL DEFAULT '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL DEFAULT '',
  `qz_smalltext` varchar(255) NOT NULL DEFAULT '',
  `save_smalltext` varchar(10) NOT NULL DEFAULT '',
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL DEFAULT '',
  `qz_writer` varchar(255) NOT NULL DEFAULT '',
  `save_writer` varchar(10) NOT NULL DEFAULT '',
  `zz_befrom` text NOT NULL,
  `z_befrom` varchar(255) NOT NULL DEFAULT '',
  `qz_befrom` varchar(255) NOT NULL DEFAULT '',
  `save_befrom` varchar(10) NOT NULL DEFAULT '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL DEFAULT '',
  `qz_newstext` varchar(255) NOT NULL DEFAULT '',
  `save_newstext` varchar(10) NOT NULL DEFAULT '',
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL DEFAULT '',
  `qz_diggtop` varchar(255) NOT NULL DEFAULT '',
  `save_diggtop` varchar(10) NOT NULL DEFAULT '',
  `zz_downpath` text NOT NULL,
  `z_downpath` varchar(255) NOT NULL,
  `qz_downpath` varchar(255) NOT NULL,
  `save_downpath` varchar(10) NOT NULL,
  `zz_pan_s` text NOT NULL,
  `z_pan_s` varchar(255) NOT NULL,
  `qz_pan_s` varchar(255) NOT NULL,
  `save_pan_s` varchar(10) NOT NULL,
  `zz_playerid` text NOT NULL,
  `z_playerid` varchar(255) NOT NULL,
  `qz_playerid` varchar(255) NOT NULL,
  `save_playerid` varchar(10) NOT NULL,
  `zz_onlinepath` text NOT NULL,
  `z_onlinepath` varchar(255) NOT NULL,
  `qz_onlinepath` varchar(255) NOT NULL,
  `save_onlinepath` varchar(10) NOT NULL,
  `zz_price` text NOT NULL,
  `z_price` varchar(255) NOT NULL,
  `qz_price` varchar(255) NOT NULL,
  `save_price` varchar(10) NOT NULL,
  `zz_pmaxnum` text NOT NULL,
  `z_pmaxnum` varchar(255) NOT NULL,
  `qz_pmaxnum` varchar(255) NOT NULL,
  `save_pmaxnum` varchar(10) NOT NULL,
  `zz_taobao` text NOT NULL,
  `z_taobao` varchar(255) NOT NULL,
  `qz_taobao` varchar(255) NOT NULL,
  `save_taobao` varchar(10) NOT NULL,
  `zz_psalenum` text NOT NULL,
  `z_psalenum` varchar(255) NOT NULL,
  `qz_psalenum` varchar(255) NOT NULL,
  `save_psalenum` varchar(10) NOT NULL,
  `zz_tprice` text NOT NULL,
  `z_tprice` varchar(255) NOT NULL,
  `qz_tprice` varchar(255) NOT NULL,
  `save_tprice` varchar(10) NOT NULL,
  `zz_buyfen` text NOT NULL,
  `z_buyfen` varchar(255) NOT NULL,
  `qz_buyfen` varchar(255) NOT NULL,
  `save_buyfen` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>