<?php

	require_once 'smarty_common.php';
	require_once '../model/memberService.class.php';
	$memberS=new memberService();
	$pagination=new Pagination();
	$memberS->queryAllMember($pagination);
	
	$smarty->assign("pagi",$pagination);
	$smarty->display("superviseMember.tpl");