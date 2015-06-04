<?php
	require_once 'smarty_common.php';
	require_once '../model/comfun.class.php';
	$pagination=new Pagination();
	$pagination->gotoURL="jobPagiPro.php";
	$jobsService=new jobsService();
	
	$comf=new Comfun();
	
	$smarty->assign('isLogin',$comf->isLogin());
	if(!empty($_GET['flag'])){
		$jobsService->getResArrByCondition($pagination, $_REQUEST['kd']);
	}else {
	// paginition已经装了数据
	$jobsService->getResArrByPageNow($pagination);
	}
	
	$smarty->assign("arr",$pagination->res_array);
	$smarty->assign("navigate",$pagination->navigate);
	$smarty->display("../templates/jobsList.html");
	/* echo "<pre>";
	print_r($pagination->res_array);
	echo "</pre>"; */
	