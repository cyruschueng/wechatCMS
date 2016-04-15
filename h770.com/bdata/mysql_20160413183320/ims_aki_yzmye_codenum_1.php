<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_aki_yzmye_codenum`;");
E_C("CREATE TABLE `ims_aki_yzmye_codenum` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '1',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '1',
  `hbid` int(4) unsigned NOT NULL DEFAULT '1',
  `count` int(10) unsigned NOT NULL DEFAULT '1',
  `yue` decimal(10,2) DEFAULT '0.00',
  `type` char(1) DEFAULT '',
  `usedcount` int(10) unsigned NOT NULL DEFAULT '0',
  `time` varchar(16) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>