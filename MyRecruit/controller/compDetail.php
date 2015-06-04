<?php
require_once 'smarty_common.php';
$comp_id=$_REQUEST['compid'];
$arr=$compS->getComInfoByCompId($comp_id);
/* echo "<pre>";
print_r($arr);
echo "</pre>"; */
$smarty->assign("arr",$arr);
$smarty->display("compDetail.tpl");
