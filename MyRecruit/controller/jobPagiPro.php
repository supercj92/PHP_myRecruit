<?php
require_once 'smarty_common.php';


$pagnNow=$_REQUEST['pageNow'];

$pagination=new Pagination();

$pagination->pageNow=$pagnNow;

$jobsService=new jobsService();
$jobsService->getResArrByPageNow($pagination);

$arr=$pagination->res_array;

$smarty->assign("arr",$arr);
$smarty->assign("navigate",$pagination->navigate);


$smarty->display("jobsList.html");
