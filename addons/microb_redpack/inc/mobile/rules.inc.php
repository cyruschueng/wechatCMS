<?php
global $_W, $_GPC;
require_once MB_ROOT . '/source/Activity.class.php';

$id = $_GPC['actid'];
$id = intval($id);
$a = new Activity();
$activity = $a->getOne($id);
if(empty($activity)) {
    exit('访问错误');
}
exit(htmlspecialchars_decode($activity['rules']));
