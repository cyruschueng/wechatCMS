<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_scene_cube_app`;");
E_C("CREATE TABLE `ims_scene_cube_app` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `listorder` int(11) NOT NULL,
  `iden` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `title` varchar(300) NOT NULL DEFAULT '',
  `thumb` varchar(300) NOT NULL,
  `qrcode` varchar(300) NOT NULL,
  `author` varchar(300) NOT NULL,
  `series` varchar(50) NOT NULL,
  `isshow` tinyint(2) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ims_scene_cube_app` values('1','0',0x7374796c6532,'800',0xe38090e5868de4b880e6aca1e280a2e69e81e887b4e8afb1e68391e38091e594a4e8b5b7e4bda0e5afb9e680a7e6849fe79a84e8aeb0e5bf86,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f6a3059665578455859335333714b4b5a796b51696f5448696f714d6b68652e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f5562777938743542575048705737547050385459593550597038456a52532e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','0');");
E_D("replace into `ims_scene_cube_app` values('2','0',0x7374796c6534,'800',0xe68891e4b88ee887aae5b7b1e4b985e588abe9878de980a2efbc8845564552475245454eefbc89,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f4e6f5032756f37753149585a696c37545438755531383137383961534a532e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f50305852726d3031474c44326436323444793031366c306c363839304c312e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','0');");
E_D("replace into `ims_scene_cube_app` values('3','0',0x7374796c6536,'800',0xe4b880e59cbae586b0e586b7e4b896e7958ce79a84e99da9e591bd,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f6539314e3138724236424f47366433315231366b384f69394e72366276522e706e67,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f78664d5433523333525a685470724b6e7a48456979666e525275496674482e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','0');");
E_D("replace into `ims_scene_cube_app` values('4','0',0x7374796c6533,'800',0xe58f98e5bda2e98791e5889a34e280a2e7bb9de8bfb9e9878de7949f,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f455335583546314d4d446631693431653131316d353173355044644972472e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f49424751366862357167424474474b6b386d313657317a6b4d31703677482e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','0');");
E_D("replace into `ims_scene_cube_app` values('5','0',0x7374796c6537,'800',0x6950686f6e653620e5868de4b880e6aca1e5889be980a0,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f4741335656666646754a7458543232356b4d5855567274567a36787554542e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f6e334e3432694b3369325271725234723439335a313135326539326634542e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','0');");
E_D("replace into `ims_scene_cube_app` values('6','0',0x7374796c6538,'800',0x32303134204e45572046554e20e6b3b3e6b1a0e8b6b4,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f735656496f5a534f6767394f39415647674f61386c697361536f763347752e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f4541333130424b61316f5575483134354232347a6b543448326b343732352e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1411316941');");
E_D("replace into `ims_scene_cube_app` values('7','0',0x7374796c6539,'800',0xe58a9ee585ace5aeb6e585b720e5b0b1e98089e4bc98e79a84efbc81,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f48433447536b4e684d733443584d534d536d713175314550536d33517a312e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f6857356850483838736b32676738474376387635317337656975387349322e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1411372542');");
E_D("replace into `ims_scene_cube_app` values('8','0',0x637573746f6d,'800',0xe887aae5ae9ae4b989e59cbae699af,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f785349565667334a497633364f3647437273676f6f6b7650336a4f574f6f2e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f6b544c476c335454366c523533384a4f3645544a6f3336757674676242672e6a7067,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1411372542');");
E_D("replace into `ims_scene_cube_app` values('9','0',0x7374796c6535,'800',0xe591a8e5b9b4e98280e8afb7e587bd,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f7235386a62344a5862703534397076315a564e424a6a68597059505634702e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f597a6633426e3362446e736e626161427662546b334b41546b446e53735a2e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1418961963');");
E_D("replace into `ims_scene_cube_app` values('10','0',0x7374796c653130,'800',0xe9a39ee8b783e5bda9e899b9,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f633267415a6132476741306166724763476d5a4c4d3872706650475250462e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f4257395132746a563077493239635a3154733143713063393273315331772e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1418967102');");
E_D("replace into `ims_scene_cube_app` values('11','0',0x7374796c653132,'800',0xe4b99de7aba0e588abe5a285,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f694c304b4930423253627362437531324275634265457047314c5048754a2e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f726c554f4555556a756c787a786f536230476f394273723967556f674a412e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1418967212');");
E_D("replace into `ims_scene_cube_app` values('12','0',0x6f6e65666f756e64,'800',0xe5a3b9e59fbae98791,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f6f6f316f595079374a34373479373145314f4c50316a456f736c6f6a53372e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f736a5469395439573432444f74325a32784f577737325a4a6939676f6a4a2e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1418970832');");
E_D("replace into `ims_scene_cube_app` values('13','0',0x656d706c6f79,'800',0xe694b9e58f98e4b896e7958ce99d9ee4bda0e88eabe5b19e,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f76524178336431475875383851613278657033597044313950706c55525a2e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f63543967745666567065647179474a727a3439667174394a717a793162532e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1418971650');");
E_D("replace into `ims_scene_cube_app` values('14','0',0x7374796c653133,'800',0x3344e79bb8e5868c,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f63513836746652556245525a74424272465a425251717a6637714b30614b2e6a7067,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f6c6f36333436716556346a4b576571576e6e333445666859716b794a684e2e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1418974137');");
E_D("replace into `ims_scene_cube_app` values('15','0',0x68616d6d6572,'800',0xe994a4e5ad90e6898be69cba,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f686754576179566979426a4c395a7239414c595235526a3979674451356b2e706e67,0x687474703a2f2f77782e79766b6a2e636e2f6174746163686d656e742f696d616765732f312f323031342f31322f713439483449485639647934695a6834346439493149694c6964346448482e706e67,0x5363656e6520417070,0xe5beaee8b59ee7a791e68a80,'1','1418975113');");

require("../../inc/footer.php");
?>