<?php
	require_once '../model/Member.class.php';
	require_once 'smarty_common.php';
	require_once '../model/Comfun.class.php';
	
	
	$comf=new Comfun();
	if ($comf->isLogin()){
		$member=$_SESSION['member'];
		$utype=$member->utype;
		$smarty->assign("member",$member);
		if ($utype=="0"){
			//个人用户
			
			$smarty->display("pCenter.tpl");
		}else {
			//公司用户
			
			$smarty->display("comCenter.tpl");
		}
	}else {
		header("location:loginUI.php");
		exit();
	}