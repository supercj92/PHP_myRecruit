<?php

	require_once 'smarty_common.php';
	require_once '../model/companyService.class.php';
	require_once '../model/Comfun.class.php';
		$pagnNow=$_GET['pageNow'];
		
		$pagination=new Pagination();
		
		$pagination->pageNow=$pagnNow;
		$pagination->pageSize=9;
		$pagination->gotoURL="compPagiPro.php";
		$comp=new companyService();
		$comp->getCompPagi($pagination);
		$comf=new Comfun();
		$smarty->assign("arr",$pagination->res_array);
		$smarty->assign("isLogin",$comf->isLogin());
		$smarty->assign("navi",$pagination->navigate);
		$smarty->display("../templates/companyList.tpl");
		