<?php
require_once 'smarty_common.php';
require_once '../model/comfun.class.php';
	$job=new jobsService();
	
	$arr=$job->getIndexResArr();
	$smarty->assign("arr",$arr);
	
	
	$comf=new Comfun();	
	
	$smarty->assign("isLogin",$isLogin=$comf->isLogin());

		

$smarty->display("../templates/index.tpl");