<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_quickspread_fans`;");
E_C("CREATE TABLE `ims_quickspread_fans` (
  `weid` int(10) unsigned NOT NULL,
  `from_user` varchar(100) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`weid`,`from_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>