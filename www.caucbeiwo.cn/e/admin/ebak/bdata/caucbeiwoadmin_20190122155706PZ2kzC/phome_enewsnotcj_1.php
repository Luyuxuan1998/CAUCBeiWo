<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsnotcj`;");
E_C("CREATE TABLE `phome_enewsnotcj` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `word` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsnotcj` values('1',0x3c696e70757420747970653d68696464656e2076616c75653d27e6aca2e8bf8ee4bdbfe794a8e888aae5a4a7e8a2abe7aa9de4ba91e8b584e6ba90efbc9a7777772e63617563626569776f2e636e273e);");
E_D("replace into `phome_enewsnotcj` values('2',0x3c626569776f20e888aae5a4a7e8a2abe7aa9de4ba91e8b584e6ba902c63617563626569776f2e636e3e);");
E_D("replace into `phome_enewsnotcj` values('3',0x3c212d2de888aae5a4a7e8a2abe7aa9de4ba91e8b584e6ba902c63617563626569776f2e636e2d2d3e);");
E_D("replace into `phome_enewsnotcj` values('4',0x3c7461626c65207374796c653d646973706c61793a6e6f6e653e3c74723e3c74643e0d0ae888aae5a4a7e8a2abe7aa9de4ba91e8b584e6ba902c63617563626569776f2e636e0d0a3c2f74643e3c2f74723e3c2f7461626c653e);");
E_D("replace into `phome_enewsnotcj` values('5',0x3c646976207374796c653d646973706c61793a6e6f6e653e0d0ae888aae5a4a7e8a2abe7aa9de4ba91e8b584e6ba90e38082e6aca2e8bf8ee8aebfe997ae63617563626569776f2e636e0d0a3c2f6469763e);");

@include("../../inc/footer.php");
?>