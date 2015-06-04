<?php

	require_once 'smarty_common.php';
	require_once '../model/Pagination.class.php';
	$pagination=new Pagination();
	$pagination->gotoURL="";
	$pagination->pageSize=12;
	$compS->getCompPagi($pagination);
	$smarty->assign("pagi",$pagination);
	$smarty->display("auditingComp.tpl");