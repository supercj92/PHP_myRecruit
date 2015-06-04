<?php
	require_once 'smarty_common.php';
	require_once '../model/Comfun.class.php';
	require_once '../model/Pagination.class.php';
	require_once '../model/companyService.class.php';
	$comf=new Comfun();
	$comps=new companyService();
	$pagination=new Pagination();
	$pagination->gotoURL="compPagiPro.php";
	
	//将数据装入对象中
	$comps->getCompPagi($pagination);
	
	
	$bEnd=ceil(count($pagination->res_array)/3);
	
	$smarty->assign("arr",$pagination->res_array);
	$smarty->assign('isLogin',$comf->isLogin());
	$smarty->assign("navi",$pagination->navigate);
	$smarty->display("../templates/companyList.tpl");