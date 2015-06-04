<?php
	require_once 'smarty_common.php';
	require_once '../model/Pagination.class.php';
	
	$pagination=new Pagination();
	$pagination->gotoURL="";
	$jobS->getResArrByPageNow($pagination);
	$smarty->assign("pagi",$pagination);
	$smarty->display("superviseJobs.tpl");